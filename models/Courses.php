<?php
 namespace app\models;

 use yii\db\ActiveRecord;

 class Courses extends ActiveRecord{
     private $course_name;
     private $course_code;
     private $course_description;
     private $education_level;
     private $status;

     public function rules(){
         return[
           [['course_name','course_code', 'course_description', 'education_level','status'], 'required']
         ];
     }

     public static function tableName(){
         return '{{%courses}}';
     }
 }

?>
