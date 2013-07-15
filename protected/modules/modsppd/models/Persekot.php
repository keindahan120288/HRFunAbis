<?php

/**
 * This is the model class for table "sppd_form_persekot".
 *
 * The followings are the available columns in table 'sppd_form_persekot':
 * @property integer $id
 * @property integer $sppd_id
 * @property string $paid_to
 * @property string $received_from
 * @property integer $amount
 * @property string $amount_in_words
 * @property string $check_giro_date
 * @property string $check_giro_number
 * @property string $currency_code
 * @property string $bank_code
 * @property string $journal_number
 * @property string $voucher_number
 * @property string $voucher_date
 * @property string $created_by
 * @property string $created_date
 */
class Persekot extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Persekot the static model class
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
		return 'sppd_form_persekot';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sppd_id, paid_to, received_from, amount, amount_in_words, check_giro_date, check_giro_number, currency_code, bank_code, journal_number, voucher_number, voucher_date, created_by, created_date', 'required'),
			array('sppd_id, amount', 'numerical', 'integerOnly'=>true),
			array('paid_to, received_from, created_by', 'length', 'max'=>50),
			array('check_giro_number, journal_number, voucher_number', 'length', 'max'=>20),
			array('currency_code, bank_code', 'length', 'max'=>3),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, sppd_id, paid_to, received_from, amount, amount_in_words, check_giro_date, check_giro_number, currency_code, bank_code, journal_number, voucher_number, voucher_date, created_by, created_date', 'safe', 'on'=>'search'),
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
			'sppd_id' => 'Sppd',
			'paid_to' => 'Paid To',
			'received_from' => 'Received From',
			'amount' => 'Amount',
			'amount_in_words' => 'Amount In Words',
			'check_giro_date' => 'Check Giro Date',
			'check_giro_number' => 'Check Giro Number',
			'currency_code' => 'Currency Code',
			'bank_code' => 'Bank Code',
			'journal_number' => 'Journal Number',
			'voucher_number' => 'Voucher Number',
			'voucher_date' => 'Voucher Date',
			'created_by' => 'Created By',
			'created_date' => 'Created Date',
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
		$criteria->compare('sppd_id',$this->sppd_id);
		$criteria->compare('paid_to',$this->paid_to,true);
		$criteria->compare('received_from',$this->received_from,true);
		$criteria->compare('amount',$this->amount);
		$criteria->compare('amount_in_words',$this->amount_in_words,true);
		$criteria->compare('check_giro_date',$this->check_giro_date,true);
		$criteria->compare('check_giro_number',$this->check_giro_number,true);
		$criteria->compare('currency_code',$this->currency_code,true);
		$criteria->compare('bank_code',$this->bank_code,true);
		$criteria->compare('journal_number',$this->journal_number,true);
		$criteria->compare('voucher_number',$this->voucher_number,true);
		$criteria->compare('voucher_date',$this->voucher_date,true);
		$criteria->compare('created_by',$this->created_by,true);
		$criteria->compare('created_date',$this->created_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}