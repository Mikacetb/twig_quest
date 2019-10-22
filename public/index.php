<?php

require '../vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('../src/View');
$twig = new Twig_Environment($loader);

echo $twig->render('index.html.twig', array(
    
    'products' => array('iPhone','iPad','iMac','iPod','MacBook')
    )
)

?>