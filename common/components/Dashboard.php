<?php
namespace common\components;

use Yii;
use yii\httpclient\Client;
use \yii\web\Response;

class Dashboard extends \yii\web\Request {
    public function token(){

        $url = Yii::$app->params['dashboard']['baseUrl'];
        $username = Yii::$app->params['dashboard']['username'];
        $password = Yii::$app->params['dashboard']['password'];

        $client = new Client(['baseUrl' => $url."/api/oauth2/token"]);
        $response = $client->createRequest()
        ->setMethod('POST')
        ->addHeaders([
            'content-type' => 'application/x-www-form-urlencoded',
        ])
        ->setData([
            'grant_type' => 'password',
            'username' => $username,
            'password' => $password,
            'client_id' => 'testclient',
            'client_secret' => 'testpass',
        ])
        ->send();

        if($token = $response->data['access_token']){
            return $token;
        }
        else{
            return false;
        }
    }
}
?>