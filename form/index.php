<?php

include '../head.php';

require 'form.php';

$form = new Form(array(
    'username' => 'Megaju'
));

// REMARQUE (prendre l'habitude de garder les echo pour la vue et les return dans nos class)

echo $form->input('username');
echo $form->input('password');
echo $form->submit();

$second_form = new Form();

echo $second_form->input('newformtest');
echo $second_form->input('newformtest');
echo $second_form->input('newformtest');
echo $second_form->input('newformtest');
echo $second_form->input('newformtest');
echo $second_form->submit();
