<?php

/**
 * Providers2011 filter form base class.
 *
 * @package    simplebus
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseProviders2011FormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'providerid'    => new sfWidgetFormFilterInput(),
      'namezn'        => new sfWidgetFormFilterInput(),
      'nameen'        => new sfWidgetFormFilterInput(),
      'email'         => new sfWidgetFormFilterInput(),
      'phoneinfo'     => new sfWidgetFormFilterInput(),
      'stationid'     => new sfWidgetFormFilterInput(),
      'stationnamezn' => new sfWidgetFormFilterInput(),
      'stationnameen' => new sfWidgetFormFilterInput(),
      'type'          => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'providerid'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'namezn'        => new sfValidatorPass(array('required' => false)),
      'nameen'        => new sfValidatorPass(array('required' => false)),
      'email'         => new sfValidatorPass(array('required' => false)),
      'phoneinfo'     => new sfValidatorPass(array('required' => false)),
      'stationid'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'stationnamezn' => new sfValidatorPass(array('required' => false)),
      'stationnameen' => new sfValidatorPass(array('required' => false)),
      'type'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('providers2011_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Providers2011';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'providerid'    => 'Number',
      'namezn'        => 'Text',
      'nameen'        => 'Text',
      'email'         => 'Text',
      'phoneinfo'     => 'Text',
      'stationid'     => 'Number',
      'stationnamezn' => 'Text',
      'stationnameen' => 'Text',
      'type'          => 'Number',
    );
  }
}
