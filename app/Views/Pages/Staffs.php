<?= $this->extend('ApplicationInterface'); ?>

<?= $this->section('PageTitle'); ?>
Personel Yönetimi
<?= $this->endsection(); ?>

<?= $this->section('PageWrapper'); ?>
<!-- BEGIN PAGE HEADER -->
<div class="page-header d-print-none" aria-label="Page header">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">Personel Yönetimi</div>
                <h2 class="page-title">Tüm Personeller</h2>
            </div>

            <!-- Page title actions -->
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    <span class="d-none d-sm-inline">
                        <a href="#" class="btn btn-1"> New view </a>
                    </span>
                    <a href="#" class="btn btn-primary btn-5 d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-add-new">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/plus -->
                        <i class="icon ti ti-plus"></i>
                        Yeni Personel Ekle
                    </a>
                    <a href="#" class="btn btn-primary btn-6 d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-add-new" aria-label="Yeni Personel Ekle">
                        <!-- Download SVG icon from http://tabler.io/icons/icon/plus -->
                        <i class="icon ti ti-plus"></i>
                    </a>
                </div>
                <!-- BEGIN MODAL -->
                <!-- END MODAL -->
            </div>
        </div>
    </div>
</div>
<!-- END PAGE HEADER -->

<!-- BEGIN PAGE BODY -->
<div class="page-body">
    <div class="container-xl">
        <div class="row row-cards">
            <?php foreach($users as $user): ?>
            <?php $color = ($user->user_level == 'admin') ? 'dark' : (($user->user_level == 'receptionist') ? 'orange' : 'teal') ?>
            <div class="col-md-6 col-lg-3">
                <div class="card-tabs">
                    <div class="tab-content">
                        <!-- Content of view user -->
                        <div id="user-<?= $user->id ?>-view" class="card tab-pane active show" role="tabpanel">
                            <div class="card-body text-center">
                                <div class="card-title"><?= "{$user->first_name} {$user->last_name}" ?></div>
                                <div class="ratio ratio-1x1 mb-3">
                                    <?php if(file_exists(FCPATH.'uploads/staff/profile_pictures/'.$user->profile_picture.'.webp')): ?>
                                    <img src="/uploads/staff/profile_pictures/<?= $user->profile_picture ?>.webp" class="object-cover rounded">
                                    <?php else: ?>
                                    <span class="avatar avatar-xl mb-3"> <?php $fullname = $user->first_name.' '.$user->last_name; $fullname = explode(' ', $fullname); foreach($fullname as $name) echo $name[0]; ?> </span>
                                    <?php endif; ?>
                                </div>
                                <div class="mb-2">
                                    <i class="icon ti ti-mail text-secondary me-1"></i>
                                    <strong><?= $user->email_address ?></strong>
                                </div>
                                <div class="mb-2">
                                    <i class="icon ti ti-phone text-secondary me-1"></i>
                                    <strong><?php echo preg_replace('~.*(\d{3})[^\d]{0,7}(\d{3})[^\d]{0,7}(\d{4}).*~', '($1) $2-$3', $user->phone_number); ?></strong>
                                </div>
                                <div>
                                    <span class="badge bg-<?= $color ?> text-<?= $color ?>-fg"><?= ucfirst($user->user_level) ?></span>
                                </div>
                            </div>
                        </div>
                        <!-- Content of update user -->
                        <div id="user-<?= $user->id ?>-edit" class="card tab-pane" role="tabpanel">
                            <form method="post" action="<?= route_to('save_staff') ?>" enctype="multipart/form-data">
                                <div class="card-header bg-dark text-dark-fg">
                                    <div class="card-title">Personel Bilgi Güncelleme</div>
                                </div>
                                <div class="card-body bg-dark-lt">
                                    <input type="hidden" name="id" value="<?= $user->id ?>">
                                    <div class="input-group mb-1">
                                        <input type="text" class="form-control" name="first_name" placeholder="İsim" value="<?= $user->first_name ?>" requred>
                                        <input type="text" class="form-control" name="last_name" placeholder="Soyisim" value="<?= $user->last_name ?>" required>
                                    </div>
                                    <div class="input-group mb-1">
                                        <input type="email" class="form-control" name="email_address" placeholder="Eposta" value="<?= $user->email_address ?>" required>
                                    </div>
                                    <div class="input-group mb-1">
                                        <input type="text" class="form-control" name="phone_number" placeholder="Telefon" data-mask="000-000-0000" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" data-mask-visible="true" value="<?= $user->phone_number ?>" required>
                                    </div>
                                    <div class="input-group mb-1">
                                        <input type="text" class="form-control" name="username" placeholder="Kullanıcı Adı" value="<?= $user->username ?>" required>
                                        <select class="form-select" name="user_level" aria-label="Yetki" placeholder="Yetki" required>
                                            <option value="admin"<?= $user->user_level == 'admin' ? ' selected' : '' ?>>Admin</option>
                                            <option value="receptionist"<?= $user->user_level == 'receptionist' ? ' selected' : '' ?>>Resepsiyonist</option>
                                            <option value="valet"<?= $user->user_level == 'valet' ? ' selected' : '' ?>>Vale</option>
                                        </select>
                                    </div>
                                    <div class="input-group mb-1">
                                        <input type="text" class="form-control" name="password" placeholder="Parola">
                                        <input type="text" class="form-control" name="password_confirm" placeholder="Parola Onayı">
                                    </div>
                                    <div class="input-group mb-1">
                                        <input type="file" name="profile_picture" class="form-control">
                                    </div>
                                </div>
                                <div class="card-footer bg-dark">
                                    <div class="d-flex">
                                        <button class="btn btn-secondary" type="reset"><i class="icon ti ti-refresh"></i> Sıfırla</button>
                                        <button class="btn btn-primary ms-auto" type="submit"><i class="icon ti ti-check"></i> Onayla</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Content of delete user -->
                        <div id="user-<?= $user->id ?>-delete" class="card tab-pane" role="tabpanel">
                            <div class="card-body">
                                <div class="card-title">Content of tab #3</div>
                                <p class="text-secondary">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, alias aliquid distinctio dolorem expedita, fugiat hic magni molestiae molestias odit.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Cards navigation -->
                    <ul class="nav nav-tabs nav-tabs-bottom" role="tablist">
                        <li class="nav-item" role="presentation"><a href="#user-<?= $user->id ?>-view" class="nav-link active" data-bs-toggle="tab" aria-selected="true" role="tab"><i class="icon ti ti-eye me-2 text-muted"></i>Gör</a></li>
                        <li class="nav-item" role="presentation"><a href="#user-<?= $user->id ?>-edit" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1"><i class="icon ti ti-edit me-2 text-muted"></i>Düzenle</a></li>
                        <li class="nav-item" role="presentation"><a href="#user-<?= $user->id ?>-delete" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab" tabindex="-1"><i class="icon ti ti-trash me-2 text-muted"></i>Sil</a></li>
                    </ul>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- END PAGE BODY -->
<?= $this->endSection(); ?>
        
<?= $this->section('Modals'); ?>
<div class="modal modal-blur fade" id="modal-add-new" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form class="modal-content" method="post" action="<?= route_to('save_staff') ?>" enctype="multipart/form-data">
            <div class="modal-header">
                <h5 class="modal-title">Yeni Personel</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Kapat"></button>
            </div>

            <div class="modal-body overflow-hidden">
                <div class="ratio ratio-16x9">
                    <div class="object-cover d-flex align-items-center">
                        <img src="/assets/svg/1920x1080.svg">
                    </div>
                    <div class="object-cover d-flex justify-content-center align-items-end pb-4">
                        <div class="text-light">
                            <div class="form-label"><i class="icon ti ti-camera me-1"></i> Profil Resmi:</div>
                            <input type="file" name="profile_picture" class="form-control">
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-body bg-secondary-lt">
                <div class="row">
                    <div class="col-6 form-floating mb-2">
                        <input type="text" class="form-control" id="first-name" name="first_name" placeholder="İsim" required>
                        <label for="first-name"><i class="icon ti ti-cursor-text"></i> İsim</label>
                    </div>
                    <div class="col-6 form-floating mb-2">
                        <input type="text" class="form-control" id="last-name" name="last_name" placeholder="Soyisim" required>
                        <label for="last-name"><i class="icon ti ti-cursor-text"></i> Soyisim</label>
                    </div>
                    <div class="col-6 form-floating mb-2">
                        <input type="email" class="form-control" id="email" name="email_address" placeholder="Eposta" required>
                        <label for="email"><i class="icon ti ti-at"></i> Eposta</label>
                    </div>
                    <div class="col-6 form-floating mb-2">
                        <input type="text" class="form-control" id="phone-number" name="phone_number" placeholder="Telefon Numarası"  data-mask="000-000-0000" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" data-mask-visible="true" required>
                        <label for="phone-number"><i class="icon ti ti-phone"></i> Telefon Numarası</label>
                    </div>
                    <div class="col-6 form-floating mb-2">
                        <select class="form-select" id="user-level" name="user_level" aria-label="Yetki Seviyesi" placeholder="Yetki Seviyesi" required>
                            <option value="admin">Admin</option>
                            <option value="receptionist">Resepsiyonist</option>
                            <option value="valet" selected>Vale</option>
                        </select>
                        <label for="user-level"><i class="icon ti ti-info-circle"></i> Yetki Seviyesi</label>
                    </div>
                    <div class="col-6 form-floating mb-2">
                        <input type="text" class="form-control" id="username" name="username" placeholder="Kullanıcı Adı" required>
                        <label for="username"><i class="icon ti ti-user-scan"></i> Kullanıcı Adı</label>
                    </div>
                    <div class="col-6 form-floating mb-2">
                        <input type="text" class="form-control" id="password" name="password" placeholder="Parola" required>
                        <label for="password"><i class="icon ti ti-password"></i> Parola</label>
                    </div>
                    <div class="col-6 form-floating mb-2">
                        <input type="text" class="form-control" id="password-confirm" name="password_confirm" placeholder="Parola Onayı" required>
                        <label for="password-confirm"><i class="icon ti ti-password"></i> Parola Onayı</label>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="reset" class="btn btn-outline btn-secondary" data-bs-dismiss="modal">
                    <i class="icon ti ti-x"></i>
                    İptal
                </button>
                <button type="submit" class="btn btn-primary ms-auto" data-bs-dismiss="modal">
                    <i class="icon ti ti-check"></i>
                    Kaydet
                </button>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>

<?= $this->section('PluginScripts'); ?>
<script src="/vendors/tabler/ui/dist/libs/imask/dist/imask.min.js?1754405812" defer <?= csp_script_nonce(); ?>></script>
<?= $this->endSection(); ?>