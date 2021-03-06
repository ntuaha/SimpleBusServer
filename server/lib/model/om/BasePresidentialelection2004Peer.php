<?php


/**
 * Base static class for performing query and update operations on the 'PresidentialElection2004' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.6.3 on:
 *
 * Wed Jan 11 23:40:54 2012
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BasePresidentialelection2004Peer {

	/** the default database name for this class */
	const DATABASE_NAME = 'propel';

	/** the table name for this class */
	const TABLE_NAME = 'PresidentialElection2004';

	/** the related Propel class for this table */
	const OM_CLASS = 'Presidentialelection2004';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'lib.model.Presidentialelection2004';

	/** the related TableMap class for this table */
	const TM_CLASS = 'Presidentialelection2004TableMap';

	/** The total number of columns. */
	const NUM_COLUMNS = 15;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
	const NUM_HYDRATE_COLUMNS = 15;

	/** the column name for the ID field */
	const ID = 'PresidentialElection2004.ID';

	/** the column name for the COUNTY field */
	const COUNTY = 'PresidentialElection2004.COUNTY';

	/** the column name for the CITY field */
	const CITY = 'PresidentialElection2004.CITY';

	/** the column name for the VILLAGE field */
	const VILLAGE = 'PresidentialElection2004.VILLAGE';

	/** the column name for the VOTENO field */
	const VOTENO = 'PresidentialElection2004.VOTENO';

	/** the column name for the DPPNUM field */
	const DPPNUM = 'PresidentialElection2004.DPPNUM';

	/** the column name for the DPPRATIO field */
	const DPPRATIO = 'PresidentialElection2004.DPPRATIO';

	/** the column name for the KMTNUM field */
	const KMTNUM = 'PresidentialElection2004.KMTNUM';

	/** the column name for the KMTRATIO field */
	const KMTRATIO = 'PresidentialElection2004.KMTRATIO';

	/** the column name for the VAILDVOTES field */
	const VAILDVOTES = 'PresidentialElection2004.VAILDVOTES';

	/** the column name for the INVAILDVOTES field */
	const INVAILDVOTES = 'PresidentialElection2004.INVAILDVOTES';

	/** the column name for the TOTALVOTES field */
	const TOTALVOTES = 'PresidentialElection2004.TOTALVOTES';

	/** the column name for the OTHERVOTES field */
	const OTHERVOTES = 'PresidentialElection2004.OTHERVOTES';

	/** the column name for the VOTERSNUM field */
	const VOTERSNUM = 'PresidentialElection2004.VOTERSNUM';

	/** the column name for the VOTERSRATIO field */
	const VOTERSRATIO = 'PresidentialElection2004.VOTERSRATIO';

	/** The default string format for model objects of the related table **/
	const DEFAULT_STRING_FORMAT = 'YAML';

	/**
	 * An identiy map to hold any loaded instances of Presidentialelection2004 objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array Presidentialelection2004[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	protected static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'County', 'City', 'Village', 'Voteno', 'Dppnum', 'Dppratio', 'Kmtnum', 'Kmtratio', 'Vaildvotes', 'Invaildvotes', 'Totalvotes', 'Othervotes', 'Votersnum', 'Votersratio', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'county', 'city', 'village', 'voteno', 'dppnum', 'dppratio', 'kmtnum', 'kmtratio', 'vaildvotes', 'invaildvotes', 'totalvotes', 'othervotes', 'votersnum', 'votersratio', ),
		BasePeer::TYPE_COLNAME => array (self::ID, self::COUNTY, self::CITY, self::VILLAGE, self::VOTENO, self::DPPNUM, self::DPPRATIO, self::KMTNUM, self::KMTRATIO, self::VAILDVOTES, self::INVAILDVOTES, self::TOTALVOTES, self::OTHERVOTES, self::VOTERSNUM, self::VOTERSRATIO, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID', 'COUNTY', 'CITY', 'VILLAGE', 'VOTENO', 'DPPNUM', 'DPPRATIO', 'KMTNUM', 'KMTRATIO', 'VAILDVOTES', 'INVAILDVOTES', 'TOTALVOTES', 'OTHERVOTES', 'VOTERSNUM', 'VOTERSRATIO', ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'county', 'city', 'village', 'VoteNo', 'DPPNum', 'DPPRatio', 'KMTNum', 'KMTRatio', 'vaildVotes', 'invaildVotes', 'totalVotes', 'otherVotes', 'VotersNum', 'VotersRatio', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	protected static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'County' => 1, 'City' => 2, 'Village' => 3, 'Voteno' => 4, 'Dppnum' => 5, 'Dppratio' => 6, 'Kmtnum' => 7, 'Kmtratio' => 8, 'Vaildvotes' => 9, 'Invaildvotes' => 10, 'Totalvotes' => 11, 'Othervotes' => 12, 'Votersnum' => 13, 'Votersratio' => 14, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'county' => 1, 'city' => 2, 'village' => 3, 'voteno' => 4, 'dppnum' => 5, 'dppratio' => 6, 'kmtnum' => 7, 'kmtratio' => 8, 'vaildvotes' => 9, 'invaildvotes' => 10, 'totalvotes' => 11, 'othervotes' => 12, 'votersnum' => 13, 'votersratio' => 14, ),
		BasePeer::TYPE_COLNAME => array (self::ID => 0, self::COUNTY => 1, self::CITY => 2, self::VILLAGE => 3, self::VOTENO => 4, self::DPPNUM => 5, self::DPPRATIO => 6, self::KMTNUM => 7, self::KMTRATIO => 8, self::VAILDVOTES => 9, self::INVAILDVOTES => 10, self::TOTALVOTES => 11, self::OTHERVOTES => 12, self::VOTERSNUM => 13, self::VOTERSRATIO => 14, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'COUNTY' => 1, 'CITY' => 2, 'VILLAGE' => 3, 'VOTENO' => 4, 'DPPNUM' => 5, 'DPPRATIO' => 6, 'KMTNUM' => 7, 'KMTRATIO' => 8, 'VAILDVOTES' => 9, 'INVAILDVOTES' => 10, 'TOTALVOTES' => 11, 'OTHERVOTES' => 12, 'VOTERSNUM' => 13, 'VOTERSRATIO' => 14, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'county' => 1, 'city' => 2, 'village' => 3, 'VoteNo' => 4, 'DPPNum' => 5, 'DPPRatio' => 6, 'KMTNum' => 7, 'KMTRatio' => 8, 'vaildVotes' => 9, 'invaildVotes' => 10, 'totalVotes' => 11, 'otherVotes' => 12, 'VotersNum' => 13, 'VotersRatio' => 14, ),
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
	 * @param      string $column The column name for current table. (i.e. Presidentialelection2004Peer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(Presidentialelection2004Peer::TABLE_NAME.'.', $alias.'.', $column);
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
			$criteria->addSelectColumn(Presidentialelection2004Peer::ID);
			$criteria->addSelectColumn(Presidentialelection2004Peer::COUNTY);
			$criteria->addSelectColumn(Presidentialelection2004Peer::CITY);
			$criteria->addSelectColumn(Presidentialelection2004Peer::VILLAGE);
			$criteria->addSelectColumn(Presidentialelection2004Peer::VOTENO);
			$criteria->addSelectColumn(Presidentialelection2004Peer::DPPNUM);
			$criteria->addSelectColumn(Presidentialelection2004Peer::DPPRATIO);
			$criteria->addSelectColumn(Presidentialelection2004Peer::KMTNUM);
			$criteria->addSelectColumn(Presidentialelection2004Peer::KMTRATIO);
			$criteria->addSelectColumn(Presidentialelection2004Peer::VAILDVOTES);
			$criteria->addSelectColumn(Presidentialelection2004Peer::INVAILDVOTES);
			$criteria->addSelectColumn(Presidentialelection2004Peer::TOTALVOTES);
			$criteria->addSelectColumn(Presidentialelection2004Peer::OTHERVOTES);
			$criteria->addSelectColumn(Presidentialelection2004Peer::VOTERSNUM);
			$criteria->addSelectColumn(Presidentialelection2004Peer::VOTERSRATIO);
		} else {
			$criteria->addSelectColumn($alias . '.ID');
			$criteria->addSelectColumn($alias . '.COUNTY');
			$criteria->addSelectColumn($alias . '.CITY');
			$criteria->addSelectColumn($alias . '.VILLAGE');
			$criteria->addSelectColumn($alias . '.VOTENO');
			$criteria->addSelectColumn($alias . '.DPPNUM');
			$criteria->addSelectColumn($alias . '.DPPRATIO');
			$criteria->addSelectColumn($alias . '.KMTNUM');
			$criteria->addSelectColumn($alias . '.KMTRATIO');
			$criteria->addSelectColumn($alias . '.VAILDVOTES');
			$criteria->addSelectColumn($alias . '.INVAILDVOTES');
			$criteria->addSelectColumn($alias . '.TOTALVOTES');
			$criteria->addSelectColumn($alias . '.OTHERVOTES');
			$criteria->addSelectColumn($alias . '.VOTERSNUM');
			$criteria->addSelectColumn($alias . '.VOTERSRATIO');
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
		$criteria->setPrimaryTableName(Presidentialelection2004Peer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			Presidentialelection2004Peer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(Presidentialelection2004Peer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BasePresidentialelection2004Peer', $criteria, $con);
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
	 * @return     Presidentialelection2004
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = Presidentialelection2004Peer::doSelect($critcopy, $con);
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
		return Presidentialelection2004Peer::populateObjects(Presidentialelection2004Peer::doSelectStmt($criteria, $con));
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
			$con = Propel::getConnection(Presidentialelection2004Peer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			Presidentialelection2004Peer::addSelectColumns($criteria);
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);
		// symfony_behaviors behavior
		foreach (sfMixer::getCallables(self::getMixerPreSelectHook(__FUNCTION__)) as $sf_hook)
		{
		  call_user_func($sf_hook, 'BasePresidentialelection2004Peer', $criteria, $con);
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
	 * @param      Presidentialelection2004 $value A Presidentialelection2004 object.
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
	 * @param      mixed $value A Presidentialelection2004 object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof Presidentialelection2004) {
				$key = (string) $value->getId();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Presidentialelection2004 object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     Presidentialelection2004 Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
	 * Method to invalidate the instance pool of all tables related to PresidentialElection2004
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
		return (int) $row[$startcol];
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
		$cls = Presidentialelection2004Peer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = Presidentialelection2004Peer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = Presidentialelection2004Peer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				Presidentialelection2004Peer::addInstanceToPool($obj, $key);
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
	 * @return     array (Presidentialelection2004 object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = Presidentialelection2004Peer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = Presidentialelection2004Peer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + Presidentialelection2004Peer::NUM_HYDRATE_COLUMNS;
		} else {
			$cls = Presidentialelection2004Peer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			Presidentialelection2004Peer::addInstanceToPool($obj, $key);
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
	  $dbMap = Propel::getDatabaseMap(BasePresidentialelection2004Peer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BasePresidentialelection2004Peer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new Presidentialelection2004TableMap());
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
		return $withPrefix ? Presidentialelection2004Peer::CLASS_DEFAULT : Presidentialelection2004Peer::OM_CLASS;
	}

	/**
	 * Performs an INSERT on the database, given a Presidentialelection2004 or Criteria object.
	 *
	 * @param      mixed $values Criteria or Presidentialelection2004 object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Presidentialelection2004Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from Presidentialelection2004 object
		}

		if ($criteria->containsKey(Presidentialelection2004Peer::ID) && $criteria->keyContainsValue(Presidentialelection2004Peer::ID) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.Presidentialelection2004Peer::ID.')');
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
	 * Performs an UPDATE on the database, given a Presidentialelection2004 or Criteria object.
	 *
	 * @param      mixed $values Criteria or Presidentialelection2004 object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Presidentialelection2004Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(Presidentialelection2004Peer::ID);
			$value = $criteria->remove(Presidentialelection2004Peer::ID);
			if ($value) {
				$selectCriteria->add(Presidentialelection2004Peer::ID, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(Presidentialelection2004Peer::TABLE_NAME);
			}

		} else { // $values is Presidentialelection2004 object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Deletes all rows from the PresidentialElection2004 table.
	 *
	 * @param      PropelPDO $con the connection to use
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll(PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(Presidentialelection2004Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(Presidentialelection2004Peer::TABLE_NAME, $con, Presidentialelection2004Peer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			Presidentialelection2004Peer::clearInstancePool();
			Presidentialelection2004Peer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs a DELETE on the database, given a Presidentialelection2004 or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or Presidentialelection2004 object or primary key or array of primary keys
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
			$con = Propel::getConnection(Presidentialelection2004Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			Presidentialelection2004Peer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof Presidentialelection2004) { // it's a model object
			// invalidate the cache for this single object
			Presidentialelection2004Peer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(Presidentialelection2004Peer::ID, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				Presidentialelection2004Peer::removeInstanceFromPool($singleval);
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
			Presidentialelection2004Peer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given Presidentialelection2004 object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      Presidentialelection2004 $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate($obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(Presidentialelection2004Peer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(Presidentialelection2004Peer::TABLE_NAME);

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

		return BasePeer::doValidate(Presidentialelection2004Peer::DATABASE_NAME, Presidentialelection2004Peer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     Presidentialelection2004
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = Presidentialelection2004Peer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(Presidentialelection2004Peer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(Presidentialelection2004Peer::DATABASE_NAME);
		$criteria->add(Presidentialelection2004Peer::ID, $pk);

		$v = Presidentialelection2004Peer::doSelect($criteria, $con);

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
			$con = Propel::getConnection(Presidentialelection2004Peer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(Presidentialelection2004Peer::DATABASE_NAME);
			$criteria->add(Presidentialelection2004Peer::ID, $pks, Criteria::IN);
			$objs = Presidentialelection2004Peer::doSelect($criteria, $con);
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
	    return sprintf('BasePresidentialelection2004Peer:%s:%1$s', 'Count' == $match[1] ? 'doCount' : $match[0]);
	  }
	
	  throw new LogicException(sprintf('Unrecognized function "%s"', $method));
	}

} // BasePresidentialelection2004Peer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BasePresidentialelection2004Peer::buildTableMap();

