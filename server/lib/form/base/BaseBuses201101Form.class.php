<?php

/**
 * Buses201101 form base class.
 *
 * @method Buses201101 getObject() Returns the current form's model object
 *
 * @package    simplebus
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseBuses201101Form extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'stationid'  => new sfWidgetFormInputText(),
      'cartype'    => new sfWidgetFormInputText(),
      'busid'      => new sfWidgetFormInputText(),
      'providerid' => new sfWidgetFormInputText(),
      'carid'      => new sfWidgetFormInputText(),
      'dutystatus' => new sfWidgetFormInputText(),
      'busstatus'  => new sfWidgetFormInputText(),
      'routeid'    => new sfWidgetFormInputText(),
      'goback'     => new sfWidgetFormInputText(),
      'longitude'  => new sfWidgetFormInputText(),
      'latitude'   => new sfWidgetFormInputText(),
      'speed'      => new sfWidgetFormInputText(),
      'azimuth'    => new sfWidgetFormInputText(),
      'datatime'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'stationid'  => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'cartype'    => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'busid'      => new sfValidatorString(array('required' => false)),
      'providerid' => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'carid'      => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'dutystatus' => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'busstatus'  => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'routeid'    => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'goback'     => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'longitude'  => new sfValidatorNumber(array('required' => false)),
      'latitude'   => new sfValidatorNumber(array('required' => false)),
      'speed'      => new sfValidatorNumber(array('required' => false)),
      'azimuth'    => new sfValidatorNumber(array('required' => false)),
      'datatime'   => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('buses201101[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Buses201101';
  }


}
