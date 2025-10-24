<?= $this->extend('MasterPage'); ?>

<?= $this->section('Styles'); ?>
<link href="/vendors/tabler/ui/dist/libs/jsvectormap/dist/jsvectormap.css" rel="stylesheet" <?= csp_style_nonce(); ?> />
<?= $this->endSection(); ?>

<?= $this->section('PluginStyles'); ?>
<link href="/vendors/tabler/ui/dist/css/tabler-flags.css" rel="stylesheet" <?= csp_style_nonce() ?> />
<link href="/vendors/tabler/ui/dist/css/tabler-socials.css" rel="stylesheet" <?= csp_style_nonce() ?> />
<link href="/vendors/tabler/ui/dist/css/tabler-payments.css" rel="stylesheet" <?= csp_style_nonce() ?> />
<link href="/vendors/tabler/ui/dist/css/tabler-vendors.css" rel="stylesheet" <?= csp_style_nonce() ?> />
<link href="/vendors/tabler/ui/dist/css/tabler-marketing.css" rel="stylesheet" <?= csp_style_nonce() ?> />
<link href="/vendors/tabler/ui/dist/css/tabler-themes.css" rel="stylesheet" <?= csp_style_nonce() ?> />
<?= $this->endSection() ?>

<?= $this->section('Layout'); ?>
<div class="page">
    <?= $this->include('TemplateParts/Header') ?>

    <div class="page-wrapper">
        <?= $this->renderSection('PageWrapper') ?>

        <!--  BEGIN FOOTER  -->
        <?= $this->include('TemplateParts/Footer') ?>
        <!--  END FOOTER  -->
    </div>
</div>
<?= $this->endSection(); ?>