<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property integer $id
 * @property string $lname
 * @property string $fname
 * @property string $mname
 * @property string $title
 * @property integer $rank
 * @property string $phone
 * @property string $address
 * @property string $pic
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employee';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lname', 'fname'], 'required'],
            [['rank'], 'integer'],
            [['lname', 'fname', 'mname', 'title'], 'string', 'max' => 60],
            [['phone'], 'string', 'max' => 15],
            [['address', 'pic'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'lname' => 'Last Name',
            'fname' => 'First Name',
            'mname' => 'Middle Name',
            'title' => 'Title',
            'rank' => 'Rank',
            'phone' => 'Phone',
            'address' => 'Address',
            'pic' => 'Picture',
        ];
    }

    public function getFormalName() {
        //return $this->lname . ", " . $this->fname . " " . $this->mname . $this->title?", " . $this->title : "";
        $title = $this->title? " " . $this->title:"";
        return $this->lname . ", " . $this->fname . " " . $this->mname . $title;
    }
}
