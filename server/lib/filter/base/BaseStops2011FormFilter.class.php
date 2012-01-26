<?php

/**
 * Stops2011 filter form base class.
 *
 * @package    simplebus
 * @subpackage filter
 * @author     Your name here
 */
abstract class BaseStops2011FormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'stopid'         => new sfWidgetFormFilterInput(),
      'routeid'        => new sfWidgetFormFilterInput(),
      'namezh'         => new sfWidgetFormFilterInput(),
      'nameen'         => new sfWidgetFormFilterInput(),
      'seqno'          => new sfWidgetFormFilterInput(),
      'pgp'            => new sfWidgetFormFilterInput(),
      'goback'         => new sfWidgetFormFilterInput(),
      'longitude'      => new sfWidgetFormFilterInput(),
      'latitude'       => new sfWidgetFormFilterInput(),
      'address'        => new sfWidgetFormFilterInput(),
      'stoplocationid' => new sfWidgetFormFilterInput(),
      'showlon'        => new sfWidgetFormFilterInput(),
      'showlat'        => new sfWidgetFormFilterInput(),
      'vector'         => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'stopid'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'routeid'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'namezh'         => new sfValidatorPass(array('required' => false)),
      'nameen'         => new sfValidatorPass(array('required' => false)),
      'seqno'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'pgp'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'goback'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'longitude'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'latitude'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'address'        => new sfValidatorPass(array('required' => false)),
      'stoplocationid' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'showlon'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'showlat'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'vector'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('stops2011_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Stops2011';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'stopid'         => 'Number',
      'routeid'        => 'Number',
      'namezh'         => 'Text',
      'nameen'         => 'Text',
      'seqno'          => 'Number',
      'pgp'            => 'Number',
      'goback'         => 'Number',
      'longitude'      => 'Number',
      'latitude'       => 'Number',
      'address'        => 'Text',
      'stoplocationid' => 'Number',
      'showlon'        => 'Number',
      'showlat'        => 'Number',
      'vector'         => 'Number',
    );
  }
}
