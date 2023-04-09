<?php

namespace app\controllers;

use app\models\Communications;
use app\models\CommunicationsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CommunicationsController implements the CRUD actions for Communications model.
 */
class CommunicationsController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Communications models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new CommunicationsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Communications model.
     * @param int $comm_id Message ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($comm_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($comm_id),
        ]);
    }

    /**
     * Creates a new Communications model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Communications();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'comm_id' => $model->comm_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Communications model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $comm_id Message ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($comm_id)
    {
        $model = $this->findModel($comm_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'comm_id' => $model->comm_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Communications model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $comm_id Message ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($comm_id)
    {
        $this->findModel($comm_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Communications model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $comm_id Message ID
     * @return Communications the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($comm_id)
    {
        if (($model = Communications::findOne(['comm_id' => $comm_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
