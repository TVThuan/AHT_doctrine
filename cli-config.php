<?php
// cli-config.php
use AHT_DT\Bootstrap;

$helperSet = new \Symfony\Component\Console\Helper\HelperSet(array(
    'em' => new \Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper(Bootstrap::getEntityManager())
));
return $helperSet;