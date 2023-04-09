<?php

namespace app\controllers;

use app\models\Microsoft;
use app\models\MicrosoftSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MicrosoftController implements the CRUD actions for Microsoft model.
 */
class MicrosoftController extends Controller
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
     * Lists all Microsoft models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new MicrosoftSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Microsoft model.
     * @param int $activity_id Activity ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($activity_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($activity_id),
        ]);
    }

    /**
     * Creates a new Microsoft model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Microsoft();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'activity_id' => $model->activity_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Microsoft model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $activity_id Activity ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($activity_id)
    {
        $model = $this->findModel($activity_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'activity_id' => $model->activity_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Microsoft model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $activity_id Activity ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($activity_id)
    {
        $this->findModel($activity_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Microsoft model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $activity_id Activity ID
     * @return Microsoft the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($activity_id)
    {
        if (($model = Microsoft::findOne(['activity_id' => $activity_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
