<?php

namespace app\controllers;
namespace backend\controllers;

use Yii;
use app\models\TipoItemModel;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ItemController implements the CRUD actions for ItemModel model.
 */
class TipoItemController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all ItemModel models.
     * @return mixed
     */
    public function actionIndex($id_projeto)
    {
        $searchModel = new ItemSearch();
        $filter = Yii::$app->request->queryParams;

    //    $dataProvider = $searchModel->search(['id_projeto' => $id_projeto]);

    $dataProvider = $searchModel->searchByProject($filter, $id_projeto);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ItemModel model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    // public function actionView($id)
    // {
    //     return $this->render('view', [
    //         'model' => $this->findModel($id),
    //     ]);
    // }

    /**
     * Creates a new ItemModel model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    // public function actionCreate()
    // {
    //     $model = new ItemModel();

    //     if ($model->load(Yii::$app->request->post()) && $model->save()) {
    //         return $this->redirect(['view', 'id' => $model->id]);
    //     }

    //     return $this->render('create', [
    //         'model' => $model,
    //     ]);
    // }

    /**
     * Updates an existing ItemModel model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $modelTipoItem = $this->findModel($id);

        if ($modelTipoItem->load(Yii::$app->request->post()) && $modelTipoItem->save()) {
            return $this->redirect(['view', 'descricao_tipo_item' => $modelTipoItem->descricao_tipo_item]);
        }

        return $this->render('update', [
            'modelTipoItem' => $modelTipoItem,
        ]);
    }

    /**
     * Deletes an existing ItemModel model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    // public function actionDelete($id)
    // {
    //     $this->findModel($id)->delete();

    //     return $this->redirect(['index']);
    // }

    /**
     * Finds the ItemModel model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ItemModel the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($modelTipoItem = TipoItem::findOne($id)) !== null) {
            return $modelTipoItem;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
