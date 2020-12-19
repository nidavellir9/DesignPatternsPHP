<?php
include '../Entity/AbstractFactory.php';

$page = new Page('Sample Page', 'This is the body.');

echo "Testing actual rendering with PHPTemplate factory:";
echo '<br />';
echo $page->render(new PHPTemplateFactory());

//Uncomment the following if you have Twig installed.

/*
echo "Testing rendering with the Twig factory:";
echo '<br />';
echo $page->render(new TwigTemplateFactory());
*/
?>