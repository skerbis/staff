<?php 
use FriendsOfRedaxo\MForm;
$mform = MForm::factory();
$mform->addFieldsetArea('Überschrift');
$mform->addTextAreaField(1, ['label' => 'Text']);
$mform->addSelectField(2, ['h1' => 'Überschrift 1', 'h2' => 'Überschrift 2', 'h3' => 'Überschrift 3'], ['label' => 'Format']); 
$mform->setAttribute('class', 'selectpicker');
echo $mform->show();

