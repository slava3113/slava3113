<?php
define('YII_DEBUG', true);
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';
$config =  [
  'id' => 'video',
  'basePath' => realpath(__DIR__ . '/../')
];
$yii = new yii\web\Application($config);
$yii->run ();







