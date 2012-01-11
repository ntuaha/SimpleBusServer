<?php

/**
 * Buses201101 filter form base class.
 *
 * @package    simplebus
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseBuses201101FormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'stationid'  => new sfWidgetFormFilterInput(),
      'cartype'    => new sfWidgetFormFilterInput(),
      'busid'      => new sfWidgetFormFilterInput(),
      'providerid' => new sfWidgetFormFilterInput(),
      'carid'      => new sfWidgetFormFilterInput(),
      'dutystatus' => new sfWidgetFormFilterInput(),
      'busstatus'  => new sfWidgetFormFilterInput(),
      'routeid'    => new sfWidgetFormFilterInput(),
      'goback'     => new sfWidgetFormFilterInput(),
      'longitude'  => new sfWidgetFormFilterInput(),
      'latitude'   => new sfWidgetFormFilterInput(),
      'speed'      => new sfWidgetFormFilterInput(),
      'azimuth'    => new sfWidgetFormFilterInput(),
      'datatime'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'stationid'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cartype'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'busid'      => new sfValidatorPass(array('required' => false)),
      'providerid' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'carid'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'dutystatus' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'busstatus'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'routeid'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'goback'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'longitude'  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'latitude'   => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'speed'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'azimuth'    => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'datatime'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('buses201101_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Buses201101';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'stationid'  => 'Number',
      'cartype'    => 'Number',
      'busid'      => 'Text',
      'providerid' => 'Number',
      'carid'      => 'Number',
      'dutystatus' => 'Number',
      'busstatus'  => 'Number',
      'routeid'    => 'Number',
      'goback'     => 'Number',
      'longitude'  => 'Number',
      'latitude'   => 'Number',
      'speed'      => 'Number',
      'azimuth'    => 'Number',
      'datatime'   => 'Date',
    );
  }
}
