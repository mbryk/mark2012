<?php

/**
 * This is the model class for table "spammer".
 *
 * The followings are the available columns in table 'spammer':
 * @property integer $id
 * @property string $subject
 * @property string $body
 * @property string $from
 * @property string $to
 * @property integer $amount
 * @property integer $date
 */
class Spammer extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Spammer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'spammer';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('amount, date', 'numerical', 'integerOnly'=>true),
			array('from, to', 'length', 'max'=>255),
                        array('from, to', 'email', 'allowEmpty'=>false),
			array('subject, body', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, subject, body, from, to, amount, date', 'safe', 'on'=>'search'),
		);
	}
        
	public function behaviors()
	{
		return array(
			'CTimestampBehavior' => array(
				'class' => 'zii.behaviors.CTimestampBehavior',
				'createAttribute' => 'date',
			)
		);
	}        

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'subject' => 'Subject',
			'body' => 'Body',
			'from' => 'From',
			'to' => 'To',
			'amount' => 'Amount',
			'date' => 'Date',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('subject',$this->subject,true);
		$criteria->compare('body',$this->body,true);
		$criteria->compare('from',$this->from,true);
		$criteria->compare('to',$this->to,true);
		$criteria->compare('amount',$this->amount);
		$criteria->compare('date',$this->date);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}