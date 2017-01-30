<?php
namespace app\models;
class User{
    function GetUserAll(){
        $sql="select * from user";
        $result=\Yii::$app->db->createCommand($sql)->queryAll();
        return $result;
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

