<?php
session_start();
ob_start();
date_default_timezone_set('Europe/Istanbul');

function loadClasses($className){
    require __DIR__ .'/classes/'.strtolower($className).'.php';
}
spl_autoload_register('loadClasses');

$config= require __DIR__ .'/config.php';

try{
    //$db=new PDO('mysql:host='.$config['db']['host'].';dbname='.$config['db']['name'],$config['db']['user'],$config['db']['password']);
    $db=new basicdb($config['db']['host'],$config['db']['name'],$config['db']['user'],$config['db']['password']);
}
catch (PDOException $e)
{
   die($e->getMessage());
}
require __DIR__.'/settings.php';

//helper altındaki tüm dosyaları dahil ettik
foreach (glob(__DIR__.'/helper/*.php') as $helperFile){
    require $helperFile;
}