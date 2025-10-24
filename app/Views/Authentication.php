<?= $this->extend('MasterPage'); ?>

<?= $this->section('PageTitle'); ?>
Giriş
<?= $this->endSection(); ?>

<?= $this->section('Layout') ?>
<div class="page page-center">
    <div class="container container-tight py-4">
        <div class="text-center mb-4">
            <!-- BEGIN NAVBAR LOGO -->
            <a href="." aria-label="Tabler" class="navbar-brand navbar-brand-autodark">
                <img src="/assets/svg/logo.svg" height="32"/>
            </a>
            <!-- END NAVBAR LOGO -->
        </div>

        <?= $this->renderSection('Page'); ?>
    </div>
</div>
<?= $this->endSection(); ?>

<?= $this->section('ScriptCodes') ?>
<script <?= csp_script_nonce() ?>>
const elem = document.getElementById("show_hide_password");
elem.addEventListener("click", function(event){
    event.preventDefault();
    let password_input = document.getElementById("password");
    if(password_input.type == 'password'){
        password_input.type = 'text';
        elem.childNodes[1].setAttribute("class", "icon ti ti-eye-off");
        elem.setAttribute("title", "Parolayı Gizle");
        elem.setAttribute("aria-label", "Parolayı Gizle");
        elem.setAttribute("data-bs-original-title", "Parolayı Gizle");
    }else{
        password_input.type = 'password';
        elem.childNodes[1].setAttribute("class", "icon ti ti-eye");
        elem.setAttribute("title", "Parolayı Göster");
        elem.setAttribute("aria-label", "Parolayı Göster");
        elem.setAttribute("data-bs-original-title", "Parolayı Göster");
    }
});
</script>
<?= $this->endSection(); ?>