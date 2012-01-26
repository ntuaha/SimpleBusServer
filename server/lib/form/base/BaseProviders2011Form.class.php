<?php

/**
 * Providers2011 form base class.
 *
 * @method Providers2011 getObject() Returns the current form's model object
 *
 * @package    simplebus
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseProviders2011Form extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'providerid'    => new sfWidgetFormInputText(),
      'namezn'        => new sfWidgetFormInputText(),
      'nameen'        => new sfWidgetFormInputText(),
      'email'         => new sfWidgetFormInputText(),
      'phoneinfo'     => new sfWidgetFormInputText(),
      'stationid'     => new sfWidgetFormInputText(),
      'stationnamezn' => new sfWidgetFormInputText(),
      'stationnameen' => new sfWidgetFormInputText(),
      'type'          => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'providerid'    => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'namezn'        => new sfValidatorString(array('required' => false)),
      'nameen'        => new sfValidatorString(array('required' => false)),
      'email'         => new sfValidatorString(array('required' => false)),
      'phoneinfo'     => new sfValidatorString(array('required' => false)),
      'stationid'     => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'stationnamezn' => new sfValidatorString(array('required' => false)),
      'stationnameen' => new sfValidatorString(array('required' => false)),
      'type'          => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('providers2011[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Providers2011';
  }


}
