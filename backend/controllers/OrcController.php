<?php

namespace backend\controllers;
use backend\models\Projeto;
use backend\models\Item;
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


/**[]
 * UserController implements the CRUD actions for User model.
 */
class OrcController extends Controller
{



/*
      public function actionprojeto(){
        return [
          'queryconsulta' => \database\DBquery::getprojeto(),[
          // 'id' => 'queryconsulta -> id',
          // 'titulo_projeto' => 'queryconsulta -> titulo_projeto',
          ]
        ]
      }

/**Função que controla seleção do projeto */
/*

      public function action_sel_pro(){
        return $this -> render(\views\orc\index) [
          'model'=> $this->findModel($id)
        ]
      }
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => \yii\filters\AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                        'matchCallback' => function ($rule, $action) {
                          return (Yii::$app->user->identity->checarAcesso('administrador') || Yii::$app->user->identity->checarAcesso('secretaria'));
                        }
                    ],
                    [   'actions' => ['perfil'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                      [ 'actions' => ['update'],
                        'allow' => true,
                        'roles' => ['@'],
                        'matchCallback' => function ($rule, $action) {
                               return Yii::$app->user->identity->id == filter_input(INPUT_GET, 'id') ;
                        }
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all User models.
     * @return mixed
     */
    public function actionIndex()
    {
      $Projetos = Projeto::find()->orderBy('titulo_projeto')->all();
      //$Projetos = Projeto::find()->where(['id' => 2])->all();

      return $this->render("index", ['model' => $Projetos]);

    }

    public function actionItem(){
      $Item =
    }

    /**
     * Displays a single User model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionAlter($id)
    {
      $Projetos = Projeto::find()->where(['id' => $id])->all()[0];

      $Itens = Item::find()->where(['id_projeto' => $id])->all();
      //$Projetos = Projeto::find()->where(['id' => 2])->all();


        return $this->render('alter',['model' => $Itens,'modelProjeto' => $Projetos]);
    }
    public function actionPerfil()
    {
        return $this->render('perfil', [
            'model' => $this->findModel(Yii::$app->user->identity->id),
        ]);
    }

    /**
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $model->setPassword();
            if($model->save()){
                $this->mensagens('success', 'Usuário Alterado', 'Usuário alterado com sucesso.');
                return Yii::$app->user->identity->checarAcesso('administrador') ? $this->redirect(['view', 'id' => $model->id]) : $this->redirect(['perfil']);
            }
            else
                $this->mensagens('danger', 'Erro ao Alterar Usuário', 'Ocorreu um erro ao alterar o usuário. Verifique os campos e tente novamente.');
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing User model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);

        try{
            $model->delete();
            $this->mensagens('success', 'Usuário Removido', 'Usuário removido com sucesso.');
        }catch(IntegrityException $e){
            $this->mensagens('danger', 'Erro ao Remover Usuário', 'Ocorreu um erro ao remover o Usuário.');
        }

        return $this->redirect(['index']);
    }

    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('A página solicitada não existe.');
        }
    }

    /* Envio de mensagens para views
   Tipo: success, danger, warning*/
    protected function mensagens($tipo, $titulo, $mensagem){
        Yii::$app->session->setFlash($tipo, [
            'type' => $tipo,
            'icon' => 'home',
            'duration' => 5000,
            'message' => $mensagem,
            'title' => $titulo,
            'positonY' => 'top',
            'positonX' => 'center',
            'showProgressbar' => true,
        ]);
    }
}
