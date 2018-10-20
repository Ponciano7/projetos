<?php

namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use common\models\User;
use common\models\UserSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use yii\db\IntegrityException;
use yii\base\Exception;
use yii\web\UploadedFile;
use yii\db\Query;

Class DBquery{
/*
  public function getprojeto ($query) {
    $query = (new Query()) ->
    select('id','titulo_projeto') -> from ('projeto');
    return $query;
  }
*/
  public function getprojeto ($query) {
    $connection = Yii::$app->getDb();
    $command = $connection->createCommand("

    SELECT 'teste' FROM projeto

    ");

    $query = $command->queryAll();

    return $query;
  }
}
