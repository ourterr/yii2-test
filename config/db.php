<?php
$_pathdb=realpath(__DIR__."/../db")."/yii2basic";
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'sqlite:'.$_pathdb, 
    'charset' => 'utf8',
];
