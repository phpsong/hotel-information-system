<?php

/**
 * This is the model base class for the table "m_room_type".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "MRoomType".
 *
 * Columns in table "m_room_type" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $id
 * @property string $code
 * @property string $name
 * @property string $normal_rate
 * @property string $corporate_rate
 * @property string $breakfast_rate
 *
 */
abstract class BaseMRoomType extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'm_room_type';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'MRoomType|MRoomTypes', $n);
	}

	public static function representingColumn() {
		return 'code';
	}

	public function rules() {
		return array(
			array('code, name, normal_rate, corporate_rate, breakfast_rate', 'required'),
			array('code', 'length', 'max'=>3),
			array('name', 'length', 'max'=>50),
			array('normal_rate, corporate_rate, breakfast_rate', 'length', 'max'=>20),
			array('id, code, name, normal_rate, corporate_rate, breakfast_rate', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'code' => Yii::t('app', 'Code'),
			'name' => Yii::t('app', 'Name'),
			'normal_rate' => Yii::t('app', 'Normal Rate'),
			'corporate_rate' => Yii::t('app', 'Corporate Rate'),
			'breakfast_rate' => Yii::t('app', 'Breakfast Rate'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('code', $this->code, true);
		$criteria->compare('name', $this->name, true);
		$criteria->compare('normal_rate', $this->normal_rate, true);
		$criteria->compare('corporate_rate', $this->corporate_rate, true);
		$criteria->compare('breakfast_rate', $this->breakfast_rate, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}