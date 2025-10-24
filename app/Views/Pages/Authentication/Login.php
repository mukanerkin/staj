<?= $this->extend('Authentication') ?>

<?= $this->section('Page'); ?>
<div class="card card-md">
    <div class="card-body">
        <h2 class="h2 text-center mb-4">Login to your account</h2>
        <form action="<?= current_url(); ?>" method="post" autocomplete="off">
            <div class="mb-3">
                <label class="form-label">Kullanıcı Adı</label>
                <input type="text" name="username" class="form-control" placeholder="Kullanıcı adınız" required />
            </div>
            <div class="mb-2">
                <label class="form-label">
                    Parola
                    <span class="form-label-description">
                        <a href="#">Şifremi Unuttum</a>
                    </span>
                </label>
                <div class="input-group input-group-flat">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Parolanız" required />
                    <span class="input-group-text">
                        <a class="link-secondary" title="Parolayı Göster" data-bs-toggle="tooltip" id="show_hide_password">
                            <i class="icon ti ti-eye"></i>
                        </a>
                    </span>
                </div>
            </div>
            <!--
            <div class="mb-2">
                <label class="form-check">
                    <input type="checkbox" class="form-check-input" />
                    <span class="form-check-label">Remember me on this device</span>
                </label>
            </div>
            -->
            <div class="form-footer">
                <button type="submit" class="btn btn-primary w-100">Giriş</button>
            </div>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>