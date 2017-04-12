<?php

include '../head.php';

require 'form.php';

$form = new Form(array(
    'username' => 'Megaju'
));

echo $form->input('username');
echo $form->input('password');
echo $form->submit();
