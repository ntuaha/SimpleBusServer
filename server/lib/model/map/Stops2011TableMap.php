<?php



/**
 * This class defines the structure of the 'stops_2011' table.
 *
 *
 * This class was autogenerated by Propel 1.6.3 on:
 *
 * Wed Jan 11 23:40:55 2012
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lib.model.map
 */
class Stops2011TableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.Stops2011TableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
		// attributes
		$this->setName('stops_2011');
		$this->setPhpName('Stops2011');
		$this->setClassname('Stops2011');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		$this->setPrimaryKeyMethodInfo('stops_2011_id_seq');
		// columns
		$this->addPrimaryKey('ID', 'Id', 'BIGINT', true, null, null);
		$this->addColumn('STOPID', 'Stopid', 'INTEGER', false, null, null);
		$this->addColumn('ROUTEID', 'Routeid', 'INTEGER', false, null, null);
		$this->addColumn('NAMEZH', 'Namezh', 'VARCHAR', false, null, null);
		$this->addColumn('NAMEEN', 'Nameen', 'VARCHAR', false, null, null);
		$this->addColumn('SEQNO', 'Seqno', 'INTEGER', false, null, null);
		$this->addColumn('PGP', 'Pgp', 'INTEGER', false, null, null);
		$this->addColumn('GOBACK', 'Goback', 'INTEGER', false, null, null);
		$this->addColumn('LONGITUDE', 'Longitude', 'DOUBLE', false, null, null);
		$this->addColumn('LATITUDE', 'Latitude', 'DOUBLE', false, null, null);
		$this->addColumn('ADDRESS', 'Address', 'VARCHAR', false, null, null);
		$this->addColumn('STOPLOCATIONID', 'Stoplocationid', 'INTEGER', false, null, null);
		$this->addColumn('SHOWLON', 'Showlon', 'DOUBLE', false, null, null);
		$this->addColumn('SHOWLAT', 'Showlat', 'DOUBLE', false, null, null);
		$this->addColumn('VECTOR', 'Vector', 'INTEGER', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

	/**
	 *
	 * Gets the list of behaviors registered for this table
	 *
	 * @return array Associative array (name => parameters) of behaviors
	 */
	public function getBehaviors()
	{
		return array(
			'symfony' => array('form' => 'true', 'filter' => 'true', ),
			'symfony_behaviors' => array(),
		);
	} // getBehaviors()

} // Stops2011TableMap
