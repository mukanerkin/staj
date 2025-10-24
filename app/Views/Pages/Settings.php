<?= $this->extend('ApplicationInterface'); ?>

<?= $this->section('PageTitle'); ?>
Ayarlar
<?= $this->endsection(); ?>

<?= $this->section('Styles'); ?>
<link href="/vendors/tabler/ui/dist/libs/tom-select/dist/css/tom-select.bootstrap5.min.css" rel="stylesheet" <?= csp_style_nonce() ?> />
<?= $this->endsection(); ?>

<?= $this->section('PageWrapper'); ?>
<!-- BEGIN PAGE HEADER -->
<div class="page-header d-print-none" aria-label="Page header">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">Ayarlar</div>
                <h2 class="page-title">Tüm Ayarlar</h2>
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
        <div class="card">
            <div class="row g-0">
                <div class="col-12 col-md-3 border-end">
                    <div class="card-body">
                        <h4 class="subheader">Sistem Ayarları</h4>
                        <div class="list-group list-group-transparent">
                            <a href="./settings.html" class="list-group-item list-group-item-action d-flex align-items-center active">Genel Ayarlar</a>
                            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">My Notifications</a>
                            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">Connected Apps</a>
                            <a href="./settings-plan.html" class="list-group-item list-group-item-action d-flex align-items-center">Plans</a>
                            <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">Billing & Invoices</a>
                        </div>
                        <h4 class="subheader mt-4">Hizmet Ayarları</h4>
                        <div class="list-group list-group-transparent">
                            <a href="#" class="list-group-item list-group-item-action">Ücretlendirme</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-9 d-flex flex-column">
                    <div class="card-body">
                        <h2 class="mb-4">Genel Ayarlar</h2>

                        <div class="mb-3 row">
                            <label class="col-4 col-form-label align-content-center">core_applicationName</label>
                            <div class="col">
                                <small class="form-hint"><?= $SystemSettings->core_applicationName->description ?></small>
                                <input type="text" class="form-control" placeholder="core_applicationName" value="<?= $SystemSettings->core_applicationName->value ?>">
                            </div>
                        </div>

                        <h2 class="mb-4">Yerelleştirme Ayarları</h2>
                        <div class="mb-3 row">
                            <label class="col-4 col-form-label align-content-center">localization_systemCountry</label>
                            <div class="col">
                                <small class="form-hint"><?= $SystemSettings->localization_systemCountry->description ?></small>
                                <select class="form-select" id="select-countries" value="">
                                    <?php foreach($countries as $country): ?>
                                    <option value="<?= $country->code_2 ?>" data-custom-properties="&lt;span class=&#34;flag flag-xs flag-country-<?= $country->code_2 ?>&#34;&gt;&lt;/span&gt;"<?= ($country->code_2 == $SystemSettings->localization_systemCountry->value) ? ' selected' : '' ?>><?= $country->name ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <h2 class="mb-4">Hizmet Ayarları</h2>

                        <div class="mb-3 row">
                            <label class="col-4 col-form-label align-content-center">pricing_hourlyRate</label>
                            <div class="col">
                                <small class="form-hint"><?= $SystemSettings->pricing_hourlyRate->description ?></small>
                                <input type="text" class="form-control" placeholder="pricing_hourlyRate" value="<?= $SystemSettings->pricing_hourlyRate->value ?>">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-4 col-form-label align-content-center">vale_max_distance</label>
                            <div class="col">
                                <small class="form-hint"><?= $SystemSettings->vale_max_distance->description ?></small>
                                <input type="text" class="form-control" placeholder="vale_max_distance" value="<?= $SystemSettings->vale_max_distance->value ?>">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-4 col-form-label align-content-center">free_parking_signage</label>
                            <div class="col">
                                <small class="form-hint"><?= $SystemSettings->free_parking_signage->description ?></small>
                                <input type="text" class="form-control" placeholder="free_parking_signage" value="<?= $SystemSettings->free_parking_signage->value ?>">
                            </div>
                        </div>

                        <!--<?php foreach($SystemSettings as $setting_key => $setting_data): ?>
                        <h3 class="card-title mt-4"><?= $setting_data->description ?></h3>
                        <div class="row g-3">
                            <div class="col-md">
                                <div class="form-label">Ayar Kodu</div>
                                <input type="text" class="form-control" value="<?= $setting_key ?>" readonly/>
                            </div>
                            <div class="col-md">
                                <div class="form-label">Ayar Değeri</div>
                                <input type="text" class="form-control" value="<?= $setting_data->value ?>" />
                            </div>
                        </div>
                        <?php endforeach; ?>-->
                    </div>
                    <div class="card-footer bg-transparent mt-auto">
                        <div class="btn-list justify-content-end">
                            <a href="#" class="btn btn-1"> Cancel </a>
                            <a href="#" class="btn btn-primary btn-2"> Submit </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END PAGE BODY -->
<?= $this->endSection(); ?>

<?= $this->section('Modals'); ?>
<div class="modal modal-blur fade" id="modal-add-new" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form class="modal-content">
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
                            <input type="file" class="form-control">
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-body bg-secondary-lt">
                <div class="row">
                    <div class="col-6 form-floating mb-2">
                        <input type="text" class="form-control" id="first-name" placeholder="İsim" autocomplete="off">
                        <label for="first-name"><i class="icon ti ti-cursor-text"></i> İsim</label>
                    </div>
                    <div class="col-6 form-floating mb-2">
                        <input type="text" class="form-control" id="last-name" placeholder="Soyisim" autocomplete="off">
                        <label for="last-name"><i class="icon ti ti-cursor-text"></i> Soyisim</label>
                    </div>
                    <div class="col-6 form-floating mb-2">
                        <input type="email" class="form-control" id="email" placeholder="Eposta" autocomplete="off">
                        <label for="email"><i class="icon ti ti-at"></i> Eposta</label>
                    </div>
                    <div class="col-6 form-floating mb-2">
                        <input type="number" class="form-control" id="phone-number" placeholder="Telefon Numarası" min="1" autocomplete="off">
                        <label for="phone-number"><i class="icon ti ti-phone"></i> Telefon Numarası</label>
                    </div>
                    <div class="col-6 form-floating mb-2">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example" placeholder="Otopark Türü">
                            <option value="admin">Admin</option>
                            <option value="receptionist">Resepsiyonist</option>
                            <option value="valet" selected>Vale</option>
                        </select>
                        <label for="floatingSelect"><i class="icon ti ti-info-circle"></i> Yetki Seviyesi</label>
                    </div>
                    <div class="col-6 form-floating mb-2">
                        <input type="text" class="form-control" id="username" placeholder="Kullanıcı Adı" autocomplete="off">
                        <label for="username"><i class="icon ti ti-user-scan"></i> Kullanıcı Adı</label>
                    </div>
                    <div class="col-6 form-floating mb-2">
                        <input type="text" class="form-control" id="password" placeholder="Parola" autocomplete="off">
                        <label for="password"><i class="icon ti ti-password"></i> Parola</label>
                    </div>
                    <div class="col-6 form-floating mb-2">
                        <input type="text" class="form-control" id="password-confirm" placeholder="Parola Onayı" autocomplete="off">
                        <label for="password-confirm"><i class="icon ti ti-password"></i> Parola Onayı</label>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="reset" class="btn btn-link link-secondary btn-3" data-bs-dismiss="modal"> İptal </button>
                <button type="submit" class="btn btn-primary btn-5 ms-auto" data-bs-dismiss="modal">
                    <i class="icon ti ti-plus"></i>
                    Parsoneli Kaydet
                </button>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>

<?= $this->section('PluginScripts'); ?>
<script src="/vendors/tabler/ui/dist/libs/tom-select/dist/js/tom-select.base.min.js" defer <?= csp_script_nonce() ?>></script>
<?= $this->endSection(); ?>

<?= $this->section('ScriptCodes'); ?>
<script <?= csp_script_nonce() ?>>
document.addEventListener("DOMContentLoaded", function () {
    var el;
    window.TomSelect &&
    new TomSelect((el = document.getElementById("select-countries")), {
        copyClassesToDropdown: false,
        dropdownParent: "body",
        controlInput: "<input>",
        render: {
            item: function (data, escape) {
                if (data.customProperties) {
                    return '<div><span class="dropdown-item-indicator">' + data.customProperties + "</span>" + escape(data.text) + "</div>";
                }
                return "<div>" + escape(data.text) + "</div>";
            },
            option: function (data, escape) {
                if (data.customProperties) {
                    return '<div><span class="dropdown-item-indicator">' + data.customProperties + "</span>" + escape(data.text) + "</div>";
                }
                return "<div>" + escape(data.text) + "</div>";
            },
        },
    });
});
</script>
<?= $this->endSection(); ?>