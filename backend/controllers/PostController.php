<?php

namespace backend\controllers;

use Yii;
use common\models\Post;
use common\models\PostSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
//Basic REST
use yii\rest\ActiveController;

/**
 * PostController implements the CRUD actions for Post model.
 */
class PostController extends ActiveController
{

    /**
    * REST model.
    */
    public $modelClass = 'common\models\Post';

}
