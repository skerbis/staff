<?php

$addon = rex_addon::get('staff');

$form = rex_config_form::factory($addon->name);

$field = $form->addInputField('text', 'editor', null, ['class' => 'form-control']);
$field->setLabel(rex_i18n::msg('staff_editor'));
$field->setNotice('z.B. <code>class="form-control cke5-editor" data-lang="de" data-profile="default"</code>');

$fragment = new rex_fragment();
$fragment->setVar('class', 'edit', false);
$fragment->setVar('title', $addon->i18n('staff_settings'), false);
$fragment->setVar('body', $form->get(), false);
?>
<div class="row">
	<div class="col-lg-8">
		<?= $fragment->parse('core/page/section.php') ?>
	</div>
	<div class="col-lg-4">
		<?php

$anchor = '<a target="_blank" href="https://donate.alexplus.de/?addon=staff"><img src="'.rex_url::addonAssets('staff', 'unterstuetzen.svg').'" style="width: 100% max-width: 400px;"></a>';

$fragment = new rex_fragment();
$fragment->setVar('class', 'info', false);
$fragment->setVar('title', $this->i18n('staff_donate'), false);
$fragment->setVar('body', '<p>' . $this->i18n('staff_info_donate') . '</p>' . $anchor, false);
echo !rex_config::get("alexplusde", "donated") ? $fragment->parse('core/page/section.php') : "";
?>
	</div>
</div>