<?php

/**
 * TimeEstimations2011 filter form base class.
 *
 * @package    simplebus
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseTimeEstimations2011FormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'stopid'       => new sfWidgetFormFilterInput(),
      'routeid'      => new sfWidgetFormFilterInput(),
      'estimatetime' => new sfWidgetFormFilterInput(),
      'goback'       => new sfWidgetFormFilterInput(),
      'time'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'stopid'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'routeid'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'estimatetime' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'goback'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'time'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('time_estimations2011_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'TimeEstimations2011';
  }

  public function getFields()
  {
    return array(
      'id'           => 'Number',
      'stopid'       => 'Number',
      'routeid'      => 'Number',
      'estimatetime' => 'Number',
      'goback'       => 'Number',
      'time'         => 'Date',
    );
  }
}
