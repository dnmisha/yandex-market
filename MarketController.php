<?php
namespace vysochin\yamarket;

use yii\web\Controller;

class MarketController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionCreate(){
        var_dump(2);die;
    }
    public function actionApi($link = ''){
        switch($link){
            case 'cart':
                break;
        }
        $data = '{"cart":{"currency":"RUR","items":[{"feedId":325111,"offerId":"18690","feedCategoryId":"1","offerName":"Перьевая ручка Parker S0850630","count":1}],"delivery":{"region":{"id":213,"name":"Москва","type":"CITY","parent":{"id":1,"name":"Москва и Московская область","type":"SUBJECT_FEDERATION","parent":{"id":3,"name":"Центральный федеральный округ","type":"COUNTRY_DISTRICT","parent":{"id":225,"name":"Россия","type":"COUNTRY"}}}},"address":{"country":"Россия","city":"Москва","street":"руффцв","house":"12","floor":"2"}}}}';
        $data = json_decode($data);
        $cart = $data->cart;
        var_dump($cart);die;
        var_dump(22);die;
    }
}
