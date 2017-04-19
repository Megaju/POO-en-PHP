<?php
use \Megaju\HTML\Form;
use \Megaju\HTML\BootstrapForm;
use \Megaju\Autoloader;

include '../head.php';

require '../class/Autoloader.php';
Autoloader::register();

// FIRST FORM
$form = new BootstrapForm(array(
    'username' => 'Megaju'
));

// REMARQUE (prendre l'habitude de garder les echo pour la vue et les return dans nos class)

echo $form->input('username');
echo $form->input('password');
echo $form->submit();

// SECOND FORM
$form = new Form($_POST);

?>

<form action="#" method="post">
<?php
echo $form->input('username');
echo $form->input('password');
echo $form->submit();
?>
</form>

<?php
