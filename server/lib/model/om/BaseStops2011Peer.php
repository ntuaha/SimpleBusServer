<?php


/**
 * Base static class for performing query and update operations on the 'stops_2011' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.6.3 on:
 *
 * Wed Jan 11 23:40:55 2012
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseStops2011Peer {

	/** the default database name for this class */
	const DATABASE_NAME = 'propel';

	/** the table name for this class */
	const TABLE_NAME = 'stops_2011';

	/** the related Propel class for this table */
	const OM_CLASS = 'Stops2011';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'lib.model.Stops2011';

	/** the related TableMap class for this table */
	const TM_CLASS = 'Stops2011TableMap';

	/** The total number of columns. */
	const NUM_COLUMNS = 15;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
	const NUM_HYDRATE_COLUMNS = 15;

	/** the column name for the ID field */
	const ID = 'stops_2011.ID';

	/** the column name for the STOPID field */
	const STOPID = 'stops_2011.STOPID';

	/** the column name for the ROUTEID field */
	const ROUTEID = 'stops_2011.ROUTEID';

	/** the column name for the NAMEZH field */
	const NAMEZH = 'stops_2011.NAMEZH';

	/** the column name for the NAMEEN field */
	const NAMEEN = 'stops_2011.NAMEEN';

	/** the column name for the SEQNO field */
	const SEQNO = 'stops_2011.SEQNO';

	/** the column name for the PGP field */
	const PGP = 'stops_2011.PGP';

	/** the column name for the GOBACK field */
	const GOBACK = 'stops_2011.GOBACK';

	/** the column name for the LONGITUDE field */
	const LONGITUDE = 'stops_2011.LONGITUDE';

	/** the column name for the LATITUDE field */
	const LATITUDE = 'stops_2011.LATITUDE';

	/** the column name for the ADDRESS field */
	const ADDRESS = 'stops_2011.ADDRESS';

	/** the column name for the STOPLOCATIONID field */
	const STOPLOCATIONID = 'stops_2011.STOPLOCATIONID';

	/** the column name for the SHOWLON field */
	const SHOWLON = 'stops_2011.SHOWLON';

	/** the column name for the SHOWLAT field */
	const SHOWLAT = 'stops_2011.SHOWLAT';

	/** the column name for the VECTOR field */
	const VECTOR = 'stops_2011.VECTOR';

	/** The default string format for model objects of the related table **/
	const DEFAULT_STRING_FORMAT = 'YAML';

	/**
	 * An identiy map to hold any loaded instances of Stops2011 objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array Stops2011[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	protected static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Stopid', 'Routeid', 'Namezh', 'Nameen', 'Seqno', 'Pgp', 'Goback', 'Longitude', 'Latitude', 'Address', 'Stoplocationid', 'Showlon', 'Showlat', 'Vector', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'stopid', 'routeid', 'namezh', 'nameen', 'seqno', 'pgp', 'goback', 'longitude', 'latitude', 'address', 'stoplocationid', 'showlon', 'showlat', 'vector', ),
		BasePeer::TYPE_COLNAME => array (self::ID, self::STOPID, self::ROUTEID, self::NAMEZH, self::NAMEEN, self::SEQNO, self::PGP, self::GOBACK, self::LONGITUDE, self::LATITUDE, self::ADDRESS, self::STOPLOCATIONID, self::SHOWLON, self::SHOWLAT, self::VECTOR, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID', 'STOPID', 'ROUTEID', 'NAMEZH', 'NAMEEN', 'SEQNO', 'PGP', 'GOBACK', 'LONGITUDE', 'LATITUDE', 'ADDRESS', 'STOPLOCATIONID', 'SHOWLON', 'SHOWLAT', 'VECTOR', ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'stopid', 'routeid', 'namezh', 'nameen', 'seqno', 'pgp', 'goback', 'longitude', 'latitude', 'address', 'stoplocationid', 'showlon', 'showlat', 'vector', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	protected static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Stopid' => 1, 'Routeid' => 2, 'Namezh' => 3, 'Nameen' => 4, 'Seqno' => 5, 'Pgp' => 6, 'Goback' => 7, 'Longitude' => 8, 'Latitude' => 9, 'Address' => 10, 'Stoplocationid' => 11, 'Showlon' => 12, 'Showlat' => 13, 'Vector' => 14, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'stopid' => 1, 'routeid' => 2, 'namezh' => 3, 'nameen' => 4, 'seqno' => 5, 'pgp' => 6, 'goback' => 7, 'longitude' => 8, 'latitude' => 9, 'address' => 10, 'stoplocationid' => 11, 'showlon' => 12, 'showlat' => 13, 'vector' => 14, ),
		BasePeer::TYPE_COLNAME => array (self::ID => 0, self::STOPID => 1, self::ROUTEID => 2, self::NAMEZH => 3, self::NAMEEN => 4, self::SEQNO => 5, self::PGP => 6, self::GOBACK => 7, self::LONGITUDE => 8, self::LATITUDE => 9, self::ADDRESS => 10, self::STOPLOCATIONID => 11, self::SHOWLON => 12, self::SHOWLAT => 13, self::VECTOR => 14, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'STOPID' => 1, 'ROUTEID' => 2, 'NAMEZH' => 3, 'NAMEEN' => 4, 'SEQNO' => 5, 'PGP' => 6, 'GOBACK' => 7, 'LONGITUDE' => 8, 'LATITUDE' => 9, 'ADDRESS' => 10, 'STOPLOCATIONID' => 11, 'SHOWLON' => 12, 'SHOWLAT' => 13, 'VECTOR' => 14, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'stopid' => 1, 'routeid' => 2, 'namezh' => 3, 'nameen' => 4, 'seqno' => 5, 'pgp' => 6, 'goback' => 7, 'longitude' => 8, 'latitude' => 9, 'address' => 10, 'stoplocationid' => 11, 'showlon' => 12, 'showlat' => 13, 'vector' => 14, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
	);

	/**
	 * Translates a fieldname to another type
	 *
	 * @param      string $name field name
	 * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @param      string $toType   One of the class type constants
	 * @return     string translated name of the field.
	 * @throws     PropelException - if the specified name could not be found in the fieldname mappings.
	 */
	static public function translateFieldName($name, $fromType, $toType)
	{
		$toNames = self::getFieldNames($toType);
		$key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
		if ($key === null) {
			throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
		}
		return $toNames[$key];
	}

	/**
	 * Returns an array of field names.
	 *
	 * @param      string $type The type of fieldnames to return:
	 *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     array A list of field names
	 */

	static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
	{
		if (!array_key_exists($type, self::$fieldNames)) {
			throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
		}
		return self::$fieldNames[$type];
	}

	/**
	 * Convenience method which changes table.column to alias.column.
	 *
	 * Using this method you can maintain SQL abstraction while using column aliases.
	 * <code>
	 *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
	 *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
	 * </code>
	 * @param      string $alias The alias for the current table.
	 * @param      string $column The column name for current table. (i.e. Stops2011Peer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(Stops2011Peer::TABLE_NAME.'.', $alias.'.', $column);
	}

	/**
	 * Add all the columns needed to create a new object.
	 *
	 * Note: any columns that were marked with lazyLoad="true" in the
	 * XML schema will not be added to the select list and only loaded
	 * on demand.
	 *
	 * @param      Criteria $criteria object containing the columns to add.
	 * @param      string   $alias    optional table alias
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function addSelectColumns(Criteria $criteria, $alias = null)
	{
		if (null === $alias) {
			$criteria->addSelectColumn(Stops2011Peer::ID);
			$criteria->addSelectColumn(Stops2011Peer::STOPID);
			$criteria->addSelectColumn(Stops2011Peer::ROUTEID);
			$criteria->addSelectColumn(Stops2011Peer::NAMEZH);
			$criteria->addSelectColumn(Stops2011Peer::NAMEEN);
			$criteria->addSelectColumn(Stops2011Peer::SEQNO);
			$criteria->addSelectColumn(Stops2011Peer::PGP);
			$criteria->addSelectColumn(Stops2011Peer::GOBACK);
			$criteria->addSelectColumn(Stops2011Peer::LONGITUDE);
			$criteria->addSelectColumn(Stops2011Peer::LATITUDE);
			$criteria->addSelectColumn(Stops2011Peer::ADDRESS);
			$criteria->addSelectColumn(Stops2011Peer::STOPLOCATIONID);
			$criteria->addSelectColumn(Stops2011Peer::SHOWLON);
			$criteria->addSelectColumn(Stops2011Peer::SHOWLAT);
			$criteria->addSelectColumn(Stops2011Peer::VECTOR);
		} else {
			$criteria->addSelectColumn($alias . '.ID');
			$criteria->addSelectColumn($alias . '.STOPID');
			$criteria->addSelectColumn($alias . '.ROUTEID');
			$criteria->addSelectColumn($alias . '.NAMEZH');
			$criteria->addSelectColumn($alias . '.NAMEEN');
			$criteria->addSelectColumn($alias . '.SEQNO');
			$criteria->addSelectColumn($alias . '.PGP');
			$criteria->addSelectColumn($alias . '.GOBACK');
			$criteria->addSelectColumn($alias . '.LONGITUDE');
			$criteria->addSelectColumn($alias . '.LATITUDE');
			$criteria->addSelectColumn($alias . '.ADDRESS');
			$criteria->addSelectColumn($alias . '.STOPLOCATIONID');
			$criteria->addSelectColumn($alias . '.SHOWLON');
			$criteria->addSelectColumn($alias . '.SHOWLAT');
			$criteria->addSelectColumn($alias . '.VECTOR');
		}
	}

	/**
	 * Returns the number of rows matching criteria.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @return     int Number of matching rows.
	 */
	public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
	{
		// we may modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(Stops2011Peer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			Stops2011Peer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(Stops2011Peer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseStops2011Peer', $criteria, $con);
		}

		// BasePeer returns a PDOStatement
		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}
	/**
	 * Selects one object from the DB.
	 *
	 * @param      Criteria $criteria object used to create the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     Stops2011
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = Stops2011Peer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	/**
	 * Selects several row from the DB.
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     array Array of selected Objects
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelect(Criteria $criteria, PropelPDO $con = null)
	{
		return Stops2011Peer::populateObjects(Stops2011Peer::doSelectStmt($criteria, $con));
	}
	/**
	 * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
	 *
	 * Use this method directly if you want to work with an executed statement durirectly (for example
	 * to perform your own object hydration).
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con The connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 * @return     PDOStatement The executed PDOStatement object.
	 * @see        BasePeer::doSelect()
	 */
	public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Stops2011Peer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			Stops2011Peer::addSelectColumns($criteria);
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BaseStops2011Peer', $criteria, $con);
		}


		// BasePeer returns a PDOStatement
		return BasePeer::doSelect($criteria, $con);
	}
	/**
	 * Adds an object to the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doSelect*()
	 * methods in your stub classes -- you may need to explicitly add objects
	 * to the cache in order to ensure that the same objects are always returned by doSelect*()
	 * and retrieveByPK*() calls.
	 *
	 * @param      Stops2011 $value A Stops2011 object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool($obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getId();
			} // if key === null
			self::$instances[$key] = $obj;
		}
	}

	/**
	 * Removes an object from the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doDelete
	 * methods in your stub classes -- you may need to explicitly remove objects
	 * from the cache in order to prevent returning objects that no longer exist.
	 *
	 * @param      mixed $value A Stops2011 object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof Stops2011) {
				$key = (string) $value->getId();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Stops2011 object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
				throw $e;
			}

			unset(self::$instances[$key]);
		}
	} // removeInstanceFromPool()

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
	 * @return     Stops2011 Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
	 * @see        getPrimaryKeyHash()
	 */
	public static function getInstanceFromPool($key)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if (isset(self::$instances[$key])) {
				return self::$instances[$key];
			}
		}
		return null; // just to be explicit
	}
	
	/**
	 * Clear the instance pool.
	 *
	 * @return     void
	 */
	public static function clearInstancePool()
	{
		self::$instances = array();
	}
	
	/**
	 * Method to invalidate the instance pool of all tables related to stops_2011
	 * by a foreign key with ON DELETE CASCADE
	 */
	public static function clearRelatedInstancePool()
	{
	}

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @return     string A string version of PK or NULL if the components of primary key in result array are all null.
	 */
	public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
	{
		// If the PK cannot be derived from the row, return NULL.
		if ($row[$startcol] === null) {
			return null;
		}
		return (string) $row[$startcol];
	}

	/**
	 * Retrieves the primary key from the DB resultset row
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, an array of the primary key columns will be returned.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @return     mixed The primary key of the row
	 */
	public static function getPrimaryKeyFromRow($row, $startcol = 0)
	{
		return (string) $row[$startcol];
	}
	
	/**
	 * The returned array will contain objects of the default type or
	 * objects that inherit from the default.
	 *
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function populateObjects(PDOStatement $stmt)
	{
		$results = array();
	
		// set the class once to avoid overhead in the loop
		$cls = Stops2011Peer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = Stops2011Peer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = Stops2011Peer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				Stops2011Peer::addInstanceToPool($obj, $key);
			} // if key exists
		}
		$stmt->closeCursor();
		return $results;
	}
	/**
	 * Populates an object of the default type or an object that inherit from the default.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 * @return     array (Stops2011 object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = Stops2011Peer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = Stops2011Peer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + Stops2011Peer::NUM_HYDRATE_COLUMNS;
		} else {
			$cls = Stops2011Peer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			Stops2011Peer::addInstanceToPool($obj, $key);
		}
		return array($obj, $col);
	}

	/**
	 * Returns the TableMap related to this peer.
	 * This method is not needed for general use but a specific application could have a need.
	 * @return     TableMap
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	/**
	 * Add a TableMap instance to the database for this peer class.
	 */
	public static function buildTableMap()
	{
	  $dbMap = Propel::getDatabaseMap(BaseStops2011Peer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BaseStops2011Peer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new Stops2011TableMap());
	  }
	}

	/**
	 * The class that the Peer will make instances of.
	 *
	 * If $withPrefix is true, the returned path
	 * uses a dot-path notation which is tranalted into a path
	 * relative to a location on the PHP include_path.
	 * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
	 *
	 * @param      boolean $withPrefix Whether or not to return the path with the class name
	 * @return     string path.to.ClassName
	 */
	public static function getOMClass($withPrefix = true)
	{
		return $withPrefix ? Stops2011Peer::CLASS_DEFAULT : Stops2011Peer::OM_CLASS;
	}

	/**
	 * Performs an INSERT on the database, given a Stops2011 or Criteria object.
	 *
	 * @param      mixed $values Criteria or Stops2011 object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Stops2011Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from Stops2011 object
		}

		if ($criteria->containsKey(Stops2011Peer::ID) && $criteria->keyContainsValue(Stops2011Peer::ID) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.Stops2011Peer::ID.')');
		}


		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		try {
			// use transaction because $criteria could contain info
			// for more than one table (I guess, conceivably)
			$con->beginTransaction();
			$pk = BasePeer::doInsert($criteria, $con);
			$con->commit();
		} catch(PropelException $e) {
			$con->rollBack();
			throw $e;
		}

		return $pk;
	}

	/**
	 * Performs an UPDATE on the database, given a Stops2011 or Criteria object.
	 *
	 * @param      mixed $values Criteria or Stops2011 object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Stops2011Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(Stops2011Peer::ID);
			$value = $criteria->remove(Stops2011Peer::ID);
			if ($value) {
				$selectCriteria->add(Stops2011Peer::ID, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(Stops2011Peer::TABLE_NAME);
			}

		} else { // $values is Stops2011 object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Deletes all rows from the stops_2011 table.
	 *
	 * @param      PropelPDO $con the connection to use
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll(PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Stops2011Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(Stops2011Peer::TABLE_NAME, $con, Stops2011Peer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			Stops2011Peer::clearInstancePool();
			Stops2011Peer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs a DELETE on the database, given a Stops2011 or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or Stops2011 object or primary key or array of primary keys
	 *              which is used to create the DELETE statement
	 * @param      PropelPDO $con the connection to use
	 * @return     int 	The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
	 *				if supported by native driver or if emulated using Propel.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	 public static function doDelete($values, PropelPDO $con = null)
	 {
		if ($con === null) {
			$con = Propel::getConnection(Stops2011Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			Stops2011Peer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof Stops2011) { // it's a model object
			// invalidate the cache for this single object
			Stops2011Peer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(Stops2011Peer::ID, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				Stops2011Peer::removeInstanceFromPool($singleval);
			}
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		$affectedRows = 0; // initialize var to track total num of affected rows

		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			
			$affectedRows += BasePeer::doDelete($criteria, $con);
			Stops2011Peer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given Stops2011 object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      Stops2011 $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate($obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(Stops2011Peer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(Stops2011Peer::TABLE_NAME);

			if (! is_array($cols)) {
				$cols = array($cols);
			}

			foreach ($cols as $colName) {
				if ($tableMap->containsColumn($colName)) {
					$get = 'get' . $tableMap->getColumn($colName)->getPhpName();
					$columns[$colName] = $obj->$get();
				}
			}
		} else {

		}

		return BasePeer::doValidate(Stops2011Peer::DATABASE_NAME, Stops2011Peer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      string $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     Stops2011
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = Stops2011Peer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(Stops2011Peer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(Stops2011Peer::DATABASE_NAME);
		$criteria->add(Stops2011Peer::ID, $pk);

		$v = Stops2011Peer::doSelect($criteria, $con);

		return !empty($v) > 0 ? $v[0] : null;
	}

	/**
	 * Retrieve multiple objects by pkey.
	 *
	 * @param      array $pks List of primary keys
	 * @param      PropelPDO $con the connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function retrieveByPKs($pks, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Stops2011Peer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(Stops2011Peer::DATABASE_NAME);
			$criteria->add(Stops2011Peer::ID, $pks, Criteria::IN);
			$objs = Stops2011Peer::doSelect($criteria, $con);
		}
		return $objs;
	}

	// symfony behavior
	
	/**
	 * Returns an array of arrays that contain columns in each unique index.
	 *
	 * @return array
	 */
	static public function getUniqueColumnNames()
	{
	  return array();
	}

	// symfony_behaviors behavior
	
	/**
	 * Returns the name of the hook to call from inside the supplied method.
	 *
	 * @param string $method The calling method
	 *
	 * @return string A hook name for {@link sfMixer}
	 *
	 * @throws LogicException If the method name is not recognized
	 */
	static private function getMixerPreSelectHook($method)
	{
	  if (preg_match('/^do(Select|Count)(Join(All(Except)?)?|Stmt)?/', $method, $match))
	  {
	    return sprintf('BaseStops2011Peer:%s:%1$s', 'Count' == $match[1] ? 'doCount' : $match[0]);
	  }
	
	  throw new LogicException(sprintf('Unrecognized function "%s"', $method));
	}

} // BaseStops2011Peer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseStops2011Peer::buildTableMap();

