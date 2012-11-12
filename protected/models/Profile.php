<?php

/**
 * This is the model class for table "tbl_profile".
 *
 * The followings are the available columns in table 'tbl_profile':
 * @property integer $id
 * @property integer $user_id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $phone
 * @property string $gender
 * @property string $address
 * @property string $zipcode
 * @property string $birthdate
 * @property string $picture
 * @property string $gplus
 * @property string $facebook
 * @property string $twitter
 *
 * The followings are the available model relations:
 * @property User $user
 */
class Profile extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Profile the static model class
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
		return 'tbl_profile';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('first_name, last_name, user_id, email', 'required'),
                        array('first_name, last_name', 'required'),
			array('user_id', 'numerical', 'integerOnly'=>true),
                        array('email', 'unique'),
			array('first_name, last_name, email', 'length', 'max'=>45),
			array('phone', 'length', 'max'=>15),
			array('gender', 'length', 'max'=>1),
			array('address, picture, gplus, facebook, twitter', 'length', 'max'=>255),
			array('zipcode', 'length', 'max'=>6),
			array('birthdate', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, user_id, first_name, last_name, email, phone, gender, address, zipcode, birthdate, picture, gplus, facebook, twitter', 'safe', 'on'=>'search'),
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
			'user' => array(self::BELONGS_TO, 'User', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'user_id' => 'User',
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'email' => 'Email',
			'phone' => 'Phone',
			'gender' => 'Gender',
			'address' => 'Address',
			'zipcode' => 'Zipcode',
			'birthdate' => 'Birthdate',
			'picture' => 'Picture',
			'gplus' => 'Gplus',
			'facebook' => 'Facebook',
			'twitter' => 'Twitter',
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
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('zipcode',$this->zipcode,true);
		$criteria->compare('birthdate',$this->birthdate,true);
		$criteria->compare('picture',$this->picture,true);
		$criteria->compare('gplus',$this->gplus,true);
		$criteria->compare('facebook',$this->facebook,true);
		$criteria->compare('twitter',$this->twitter,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}