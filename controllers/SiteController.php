<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\User;

class SiteController extends Controller
{
    public function actionIndex()
    {
        $users=User::find()->all();
        return $this->render('home',['users' => $users]);
    }
    public function actionCreate(){
        $user =new User();
        $formData=Yii::$app->request->post();
        if($user->load($formData)){
            if($user->save()){
                Yii::$app->getSession()->setFlash('message','User Created Sucessfully');
                return $this->redirect(['index']);
            }
            else{
                Yii::$app->getSession()->setFlash('message','failed to  Create User');
            }
 
        }
        return $this->render('create',['user'=>$user]);
    }
    public function actionView($id){
        $user=User::findOne($id);
        return $this->render('view',['user' => $user]);

    }
    public function actionDelete($id){
        $user=User::findOne($id)->delete();
        if($user){
            Yii::$app->getSession()->setFlash('message','User Deleted Sucessfully');
            return $this->redirect(['index']);
        }
        return $this->render('delete');

    }
    public function actionUpdate($id){
        $user=User::findOne($id);
        $formData=Yii::$app->request->post();
        if($user->load($formData)){
            if($user->save()){
                Yii::$app->getSession()->setFlash('message','User Updated Sucessfully');
                return $this->redirect(['index']);
            }
            else{
                Yii::$app->getSession()->setFlash('message','failed to  Create User');
            }
        }
        return $this->render('update',['user'=>$user]);

    }


}
