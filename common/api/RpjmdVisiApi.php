<?php

namespace common\api;

use Yii;
use yii\base\Model;
use yii\httpclient\Client;

/** 
 * usage : 
 * on controller ->
 * use common\api\RpjmdVisiApi;
 * @author abdil <abdiillah98@gmail.com>
 * 
 * $allData = RpjmdVisiApi::find()->all();
 * $addData = RpjmdVisiApi::add()->data(['columnname' => 'value])->save();
 * $editData = RpjmdVisiApi::edit()->where(['pkcolumn' => 'value])->data(['columnname' => 'value])->save();
 * $deleteData = RpjmdVisiApi::find()->where(['pkcolumn' => 'value])->data(['columnname' => 'value])->delete();
 * 
 * 
 * 
 * 
*/

class RpjmdVisiApi extends Model
{

    public $url = []; // adjustment at construct which is a built in php function
    public $limit = 20; // size of data when call that api endpoint
    public $page = 1; // paging of data when call that api endpoint
    public $response;
    public $conditional= [];
    public $data = [];



    public function __construct() {

        $this->url['all'] = Yii::$app->params['dashboard']['baseUrl']."/api/rpjmd-visi/data";
        $this->url['add'] = Yii::$app->params['dashboard']['baseUrl']."/api/rpjmd-visi/tambah";
        $this->url['edit'] = Yii::$app->params['dashboard']['baseUrl']."/api/rpjmd-visi/ubah";
        $this->url['delete'] = Yii::$app->params['dashboard']['baseUrl']."/api/rpjmd-visi/hapus";
    }

    /**
     * Static constructor / factory
     */
    public static function find() {
        $instance = new self();
        return $instance;
    }

    /**
     * Static constructor / factory
     */
    public static function add() {
        $instance = new self();
        return $instance;
    }

    /**
     * Static constructor / factory
     */
    public static function edit() {
        $instance = new self();
        return $instance;
    }

    /**
     * set limit
     */
    public function limit($limit) {
        $this->limit = $limit;
        return $this;
    }

    /**
     * set page
     */
    public function page($page) {
        $this->page = $page;
        return $this;
    }

    public function where($array) {
        foreach ($array as $key => $value):
            $this->conditional[$key] = $value;
        endforeach;

        return $this;
    }

    public function data($array) {
        $this->data = $array;
        return $this;
    }

    /**
     *  
     * @return array information result get data 
    */ 

    public function all() : array {

        $token = Yii::$app->dashboard->token();
        $url = $this->url['all'];

        $client = new Client(['baseUrl' => "{$url}?limit={$this->limit}&halaman={$this->page}"]);

        $response_api = $client->createRequest()
            ->setMethod('GET')
            ->setData($this->conditional)
            ->addHeaders([
                'Authorization' => "Bearer $token"
            ])
            ->send();
        
        $this->response = $response_api->data;
        return $this->response;
    }

    /**
     *  
     * @return array information result add/update data 
    */ 

    public function save() : array {
        $url = $this->url['add'];

        if(count($this->conditional) > 0){
            $url = $this->url['edit'];
            $params = "?";
            foreach($this->conditional as $k => $val){
                $params .= "{$k}={$val}&";    
            }
            $url .= $params; 
        }

        $token = Yii::$app->dashboard->token();

        $client = new Client(['baseUrl' => "{$url}"]);

        $response_api = $client->createRequest()
            ->setMethod('POST')
            ->setData($this->data)
            ->addHeaders([
                'Authorization' => "Bearer $token"
            ])
        ->send();

        $this->response = $response_api->data;
        return $this->response;
    }

    /**
     *  
     * @return array information result delete data 
    */ 

    public function delete() : array {
        $url = $this->url['delete'];

        if(count($this->conditional) > 0){
            $params = "?";
            foreach($this->conditional as $k => $val){
                $params .= "{$k}={$val}&";    
            }
            $url .= $params; 
        }

        $token = Yii::$app->dashboard->token();

        $client = new Client(['baseUrl' => "{$url}"]);
        
        $response_api = $client->createRequest()
            ->setMethod('GET')
            ->addHeaders([
                'Authorization' => "Bearer $token"
            ])
            ->send();

        $this->response = $response_api->data;
        return $this->response;
    }
}
