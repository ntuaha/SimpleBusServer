<?php

/**
 * Routes2011 form base class.
 *
 * @method Routes2011 getObject() Returns the current form's model object
 *
 * @package    simplebus
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseRoutes2011Form extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'routeid'            => new sfWidgetFormInputText(),
      'providerid'         => new sfWidgetFormInputText(),
      'providername'       => new sfWidgetFormInputText(),
      'namezh'             => new sfWidgetFormInputText(),
      'nameen'             => new sfWidgetFormInputText(),
      'pathattributeid'    => new sfWidgetFormInputText(),
      'pathattributename'  => new sfWidgetFormInputText(),
      'pathattributeename' => new sfWidgetFormInputText(),
      'buildperiod'        => new sfWidgetFormInputText(),
      'departurezh'        => new sfWidgetFormInputText(),
      'departureen'        => new sfWidgetFormInputText(),
      'destinationzh'      => new sfWidgetFormInputText(),
      'destinationen'      => new sfWidgetFormInputText(),
      'realsequence'       => new sfWidgetFormInputText(),
      'distance'           => new sfWidgetFormInputText(),
      'gofirstbustime'     => new sfWidgetFormInputText(),
      'backfirstbustime'   => new sfWidgetFormInputText(),
      'golastbustime'      => new sfWidgetFormInputText(),
      'backlastbustime'    => new sfWidgetFormInputText(),
      'offpeakheadway'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'routeid'            => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'providerid'         => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'providername'       => new sfValidatorString(array('required' => false)),
      'namezh'             => new sfValidatorString(array('required' => false)),
      'nameen'             => new sfValidatorString(array('required' => false)),
      'pathattributeid'    => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'pathattributename'  => new sfValidatorString(array('required' => false)),
      'pathattributeename' => new sfValidatorString(array('required' => false)),
      'buildperiod'        => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'departurezh'        => new sfValidatorString(array('required' => false)),
      'departureen'        => new sfValidatorString(array('required' => false)),
      'destinationzh'      => new sfValidatorString(array('required' => false)),
      'destinationen'      => new sfValidatorString(array('required' => false)),
      'realsequence'       => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'distance'           => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'gofirstbustime'     => new sfValidatorString(array('required' => false)),
      'backfirstbustime'   => new sfValidatorString(array('required' => false)),
      'golastbustime'      => new sfValidatorString(array('required' => false)),
      'backlastbustime'    => new sfValidatorString(array('required' => false)),
      'offpeakheadway'     => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('routes2011[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Routes2011';
  }


}
