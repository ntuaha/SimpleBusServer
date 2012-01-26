<?php

/**
 * TimeEstimations2011 form base class.
 *
 * @method TimeEstimations2011 getObject() Returns the current form's model object
 *
 * @package    simplebus
 * @subpackage form
 * @author     Your name here
 */
abstract class BaseTimeEstimations2011Form extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'stopid'       => new sfWidgetFormInputText(),
      'routeid'      => new sfWidgetFormInputText(),
      'estimatetime' => new sfWidgetFormInputText(),
      'goback'       => new sfWidgetFormInputText(),
      'time'         => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'stopid'       => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'routeid'      => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'estimatetime' => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'goback'       => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'time'         => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('time_estimations2011[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'TimeEstimations2011';
  }


}
