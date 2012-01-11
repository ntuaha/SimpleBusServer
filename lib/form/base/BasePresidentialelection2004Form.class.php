<?php

/**
 * Presidentialelection2004 form base class.
 *
 * @method Presidentialelection2004 getObject() Returns the current form's model object
 *
 * @package    simplebus
 * @subpackage form
 * @author     Your name here
 */
abstract class BasePresidentialelection2004Form extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'county'       => new sfWidgetFormInputText(),
      'city'         => new sfWidgetFormInputText(),
      'village'      => new sfWidgetFormInputText(),
      'VoteNo'       => new sfWidgetFormInputText(),
      'DPPNum'       => new sfWidgetFormInputText(),
      'DPPRatio'     => new sfWidgetFormInputText(),
      'KMTNum'       => new sfWidgetFormInputText(),
      'KMTRatio'     => new sfWidgetFormInputText(),
      'vaildVotes'   => new sfWidgetFormInputText(),
      'invaildVotes' => new sfWidgetFormInputText(),
      'totalVotes'   => new sfWidgetFormInputText(),
      'otherVotes'   => new sfWidgetFormInputText(),
      'VotersNum'    => new sfWidgetFormInputText(),
      'VotersRatio'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'county'       => new sfValidatorString(array('required' => false)),
      'city'         => new sfValidatorString(array('required' => false)),
      'village'      => new sfValidatorString(array('required' => false)),
      'VoteNo'       => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'DPPNum'       => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'DPPRatio'     => new sfValidatorNumber(array('required' => false)),
      'KMTNum'       => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'KMTRatio'     => new sfValidatorNumber(array('required' => false)),
      'vaildVotes'   => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'invaildVotes' => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'totalVotes'   => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'otherVotes'   => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'VotersNum'    => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'VotersRatio'  => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('presidentialelection2004[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Presidentialelection2004';
  }


}
