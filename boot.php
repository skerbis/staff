<?php

if (rex_addon::get('yform')->isAvailable() && !rex::isSafeMode()) {
    rex_yform_manager_dataset::setModelClass(
        'rex_staff',
        staff::class
    );
}

if (rex::isBackend() && rex_be_controller::getCurrentPage() == "staff/edit") {
    rex_extension::register('OUTPUT_FILTER', function (rex_extension_point $ep) {
        $suchmuster = 'class="###staff-settings-editor###"';
        $ersetzen = rex_config::get("staff", "editor");
        $ep->setSubject(str_replace($suchmuster, $ersetzen, $ep->getSubject()));
    });
}
