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

$form = new Form($_POST);

?>

<form action="#" method="post">
<?php
echo $form->input('username');
echo $form->input('password');
echo $form->submit();
?>
</form>
