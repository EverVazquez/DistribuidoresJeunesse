<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\Distribuidor;
use yii\web\UploadedFile;

/**
 * Site controller
 */
class SiteController extends Controller
{

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
       /* $model = new Distribuidor();

        if ($model->load(Yii::$app->request->post())) {
        if ($model->validate()) {
            // form inputs are valid, do something here
            Yii::$app->session->setFlash('success', 'Gracias por enviarnos tu información estaremos trabajando en ella.');
        }*/

        $model = new Distribuidor();

        if ($model->load(Yii::$app->request->post()))
        {
            //Subir imagen RFC
            $rfc=UploadedFile::getInstance($model, 'rfc_registro');
            $rfcName=Yii::$app->security->generateRandomString().'.'.$rfc->getExtension();
            $model->rfc_registro=$rfcName;
            $rfc->saveAs(Yii::getAlias('@common').'\Documentos Distribuidores\RFC\\'.$rfcName);

            //Imagen CURP
            $curp=UploadedFile::getInstance($model, 'curp_registro');
            $curpName=Yii::$app->security->generateRandomString().'.'.$curp->getExtension();
            $model->curp_registro=$curpName;
            $curp->saveAs(Yii::getAlias('@common').'\Documentos Distribuidores\CURP\\'.$curpName);


            //Imagen Comprobantes Domicilio
            $comprobante=UploadedFile::getInstance($model, 'comprobante_domicilio');
            $comprobanteName=Yii::$app->security->generateRandomString().'.'.$comprobante->getExtension();
            $model->comprobante_domicilio=$comprobanteName;
            $comprobante->saveAs(Yii::getAlias('@common').'\Documentos Distribuidores\Comprobante domicilio\\'.$comprobanteName);
            
            //Imagen Estado de cuenta
            $edocuenta=UploadedFile::getInstance($model, 'estado_cuenta');
            $edocuentaName=Yii::$app->security->generateRandomString().'.'.$edocuenta->getExtension();
            $model->estado_cuenta=$edocuentaName;
            $edocuenta->saveAs(Yii::getAlias('@common').'\Documentos Distribuidores\Estados cuenta\\'.$edocuentaName); 

            //Imagen Identificaciones
            $indentificacionf=UploadedFile::getInstance($model, 'identificacion');
            $indentificacionfName=Yii::$app->security->generateRandomString().'.'.$indentificacionf->getExtension();
            $model->estado_cuenta=$indentificacionfName;
            $indentificacionf->saveAs(Yii::getAlias('@common').'\Documentos Distribuidores\Identificaciones\\'.$indentificacionfName); 
            
           

            if($model->save())
            {
                
                Yii::$app->session->setFlash('success', 'Gracias por enviarnos tu información estaremos trabajando en ella.');
            }
            else
            {
                Yii::$app->session->setFlash('danger', 'Ocurrio un error al enviar la información, por favor contacte al soporte tecnico de Jeunesse Global México');
            }
            return $this->refresh();
        }
        else {
                return $this->render('index', [
                    'model' => $model,
                ]);
                //Yii::$app->session->setFlash('warning', 'Ocurrio un error al enviar la información, por favor contacte al soporte tecnico de Jeunesse Global México');
        }


       
    }
    





     /**
     * Displays a single Distribuidor model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAviso()
    {
        return $this->render('aviso');
    }

    


    /**
     * Finds the Distribuidor model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Distribuidor the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Distribuidor::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
