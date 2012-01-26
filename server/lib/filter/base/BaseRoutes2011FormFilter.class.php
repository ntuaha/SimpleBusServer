<?php

/**
 * Routes2011 filter form base class.
 *
 * @package    simplebus
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseRoutes2011FormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'routeid'            => new sfWidgetFormFilterInput(),
      'providerid'         => new sfWidgetFormFilterInput(),
      'providername'       => new sfWidgetFormFilterInput(),
      'namezh'             => new sfWidgetFormFilterInput(),
      'nameen'             => new sfWidgetFormFilterInput(),
      'pathattributeid'    => new sfWidgetFormFilterInput(),
      'pathattributename'  => new sfWidgetFormFilterInput(),
      'pathattributeename' => new sfWidgetFormFilterInput(),
      'buildperiod'        => new sfWidgetFormFilterInput(),
      'departurezh'        => new sfWidgetFormFilterInput(),
      'departureen'        => new sfWidgetFormFilterInput(),
      'destinationzh'      => new sfWidgetFormFilterInput(),
      'destinationen'      => new sfWidgetFormFilterInput(),
      'realsequence'       => new sfWidgetFormFilterInput(),
      'distance'           => new sfWidgetFormFilterInput(),
      'gofirstbustime'     => new sfWidgetFormFilterInput(),
      'backfirstbustime'   => new sfWidgetFormFilterInput(),
      'golastbustime'      => new sfWidgetFormFilterInput(),
      'backlastbustime'    => new sfWidgetFormFilterInput(),
      'offpeakheadway'     => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'routeid'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'providerid'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'providername'       => new sfValidatorPass(array('required' => false)),
      'namezh'             => new sfValidatorPass(array('required' => false)),
      'nameen'             => new sfValidatorPass(array('required' => false)),
      'pathattributeid'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'pathattributename'  => new sfValidatorPass(array('required' => false)),
      'pathattributeename' => new sfValidatorPass(array('required' => false)),
      'buildperiod'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'departurezh'        => new sfValidatorPass(array('required' => false)),
      'departureen'        => new sfValidatorPass(array('required' => false)),
      'destinationzh'      => new sfValidatorPass(array('required' => false)),
      'destinationen'      => new sfValidatorPass(array('required' => false)),
      'realsequence'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'distance'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'gofirstbustime'     => new sfValidatorPass(array('required' => false)),
      'backfirstbustime'   => new sfValidatorPass(array('required' => false)),
      'golastbustime'      => new sfValidatorPass(array('required' => false)),
      'backlastbustime'    => new sfValidatorPass(array('required' => false)),
      'offpeakheadway'     => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('routes2011_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Routes2011';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'routeid'            => 'Number',
      'providerid'         => 'Number',
      'providername'       => 'Text',
      'namezh'             => 'Text',
      'nameen'             => 'Text',
      'pathattributeid'    => 'Number',
      'pathattributename'  => 'Text',
      'pathattributeename' => 'Text',
      'buildperiod'        => 'Number',
      'departurezh'        => 'Text',
      'departureen'        => 'Text',
      'destinationzh'      => 'Text',
      'destinationen'      => 'Text',
      'realsequence'       => 'Number',
      'distance'           => 'Number',
      'gofirstbustime'     => 'Text',
      'backfirstbustime'   => 'Text',
      'golastbustime'      => 'Text',
      'backlastbustime'    => 'Text',
      'offpeakheadway'     => 'Text',
    );
  }
}
