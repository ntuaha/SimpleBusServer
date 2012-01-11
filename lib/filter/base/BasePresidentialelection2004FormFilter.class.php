<?php

/**
 * Presidentialelection2004 filter form base class.
 *
 * @package    simplebus
 * @subpackage filter
 * @author     Your name here
 */
abstract class BasePresidentialelection2004FormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'county'       => new sfWidgetFormFilterInput(),
      'city'         => new sfWidgetFormFilterInput(),
      'village'      => new sfWidgetFormFilterInput(),
      'VoteNo'       => new sfWidgetFormFilterInput(),
      'DPPNum'       => new sfWidgetFormFilterInput(),
      'DPPRatio'     => new sfWidgetFormFilterInput(),
      'KMTNum'       => new sfWidgetFormFilterInput(),
      'KMTRatio'     => new sfWidgetFormFilterInput(),
      'vaildVotes'   => new sfWidgetFormFilterInput(),
      'invaildVotes' => new sfWidgetFormFilterInput(),
      'totalVotes'   => new sfWidgetFormFilterInput(),
      'otherVotes'   => new sfWidgetFormFilterInput(),
      'VotersNum'    => new sfWidgetFormFilterInput(),
      'VotersRatio'  => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'county'       => new sfValidatorPass(array('required' => false)),
      'city'         => new sfValidatorPass(array('required' => false)),
      'village'      => new sfValidatorPass(array('required' => false)),
      'VoteNo'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'DPPNum'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'DPPRatio'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'KMTNum'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'KMTRatio'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'vaildVotes'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'invaildVotes' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'totalVotes'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'otherVotes'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'VotersNum'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'VotersRatio'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('presidentialelection2004_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Presidentialelection2004';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'county'       => 'Text',
      'city'         => 'Text',
      'village'      => 'Text',
      'VoteNo'       => 'Number',
      'DPPNum'       => 'Number',
      'DPPRatio'     => 'Number',
      'KMTNum'       => 'Number',
      'KMTRatio'     => 'Number',
      'vaildVotes'   => 'Number',
      'invaildVotes' => 'Number',
      'totalVotes'   => 'Number',
      'otherVotes'   => 'Number',
      'VotersNum'    => 'Number',
      'VotersRatio'  => 'Number',
    );
  }
}
