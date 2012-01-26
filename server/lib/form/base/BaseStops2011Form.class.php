<?php

/**
 * Stops2011 form base class.
 *
 * @method Stops2011 getObject() Returns the current form's model object
 *
 * @package    simplebus
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseStops2011Form extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'stopid'         => new sfWidgetFormInputText(),
      'routeid'        => new sfWidgetFormInputText(),
      'namezh'         => new sfWidgetFormInputText(),
      'nameen'         => new sfWidgetFormInputText(),
      'seqno'          => new sfWidgetFormInputText(),
      'pgp'            => new sfWidgetFormInputText(),
      'goback'         => new sfWidgetFormInputText(),
      'longitude'      => new sfWidgetFormInputText(),
      'latitude'       => new sfWidgetFormInputText(),
      'address'        => new sfWidgetFormInputText(),
      'stoplocationid' => new sfWidgetFormInputText(),
      'showlon'        => new sfWidgetFormInputText(),
      'showlat'        => new sfWidgetFormInputText(),
      'vector'         => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'stopid'         => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'routeid'        => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'namezh'         => new sfValidatorString(array('required' => false)),
      'nameen'         => new sfValidatorString(array('required' => false)),
      'seqno'          => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'pgp'            => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'goback'         => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'longitude'      => new sfValidatorNumber(array('required' => false)),
      'latitude'       => new sfValidatorNumber(array('required' => false)),
      'address'        => new sfValidatorString(array('required' => false)),
      'stoplocationid' => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'showlon'        => new sfValidatorNumber(array('required' => false)),
      'showlat'        => new sfValidatorNumber(array('required' => false)),
      'vector'         => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('stops2011[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Stops2011';
  }


}
