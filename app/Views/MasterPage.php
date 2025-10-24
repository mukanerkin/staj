<!doctype html>
<html lang="<?= service('Language')->getLocale(); ?>">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title><?= $this->renderSection('PageTitle', true) ?> | <?= $SystemSettings->core_applicationName->value ?></title>

        <!-- BEGIN PAGE LEVEL STYLES -->
        <?= $this->renderSection('Styles'); ?>
        <!-- END PAGE LEVEL STYLES -->

        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="/vendors/tabler/ui/dist/css/tabler.css" rel="stylesheet" <?= csp_style_nonce() ?> />
        <!-- END GLOBAL MANDATORY STYLES -->

        <!-- BEGIN PLUGINS STYLES -->
        <?= $this->renderSection('PluginStyles'); ?>
        <!-- END PLUGINS STYLES -->

        <!-- TABLER ICONS -->
        <link href="/vendors/tabler/icons/tabler-icons.min.css" rel="stylesheet" <?= csp_style_nonce() ?> />
        <!-- END TABLER ICONS -->

        <!-- BEGIN DEMO STYLES -->
        <link href="/assets/css/demo.css" rel="stylesheet" <?= csp_style_nonce() ?> />
        <!-- END DEMO STYLES -->

        <!-- BEGIN CUSTOM FONT -->
        <link href="/vendors/rsms/inter-font/web/inter.css" rel="stylesheet" <?= csp_style_nonce() ?> />
        <!-- END CUSTOM FONT -->
    </head>
    <body>
        <!-- BEGIN GLOBAL THEME SCRIPT -->
        <script src="/vendors/tabler/ui/dist/js/tabler-theme.min.js" <?= csp_script_nonce() ?>></script>
        <!-- END GLOBAL THEME SCRIPT -->

        <?= $this->renderSection('Layout') ?>

        <!-- BEGIN PAGE MODALS -->
        <?= $this->renderSection('Modals'); ?>
        <!-- END PAGE MODALS -->

        <!-- BEGIN PAGE LIBRARIES -->
        <?= $this->renderSection('PluginScripts'); ?>
        <!-- END PAGE LIBRARIES -->

        <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
        <script src="/vendors/tabler/ui/dist/js/tabler.min.js" defer <?= csp_script_nonce() ?>></script>
        <!-- END GLOBAL MANDATORY SCRIPTS -->

        <!-- BEGIN DEMO SCRIPTS -->
        <script src="/assets/js/demo.min.js" defer <?= csp_script_nonce() ?>></script>
        <!-- END DEMO SCRIPTS -->

        <!-- BEGIN PAGE SCRIPTS -->
        <?= $this->renderSection('ScriptCodes'); ?>
        <!-- END PAGE SCRIPTS -->
    </body>
</html>