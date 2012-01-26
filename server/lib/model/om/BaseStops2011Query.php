<?php


/**
 * Base class that represents a query for the 'stops_2011' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.6.3 on:
 *
 * Wed Jan 11 23:40:55 2012
 *
 * @method     Stops2011Query orderById($order = Criteria::ASC) Order by the id column
 * @method     Stops2011Query orderByStopid($order = Criteria::ASC) Order by the stopid column
 * @method     Stops2011Query orderByRouteid($order = Criteria::ASC) Order by the routeid column
 * @method     Stops2011Query orderByNamezh($order = Criteria::ASC) Order by the namezh column
 * @method     Stops2011Query orderByNameen($order = Criteria::ASC) Order by the nameen column
 * @method     Stops2011Query orderBySeqno($order = Criteria::ASC) Order by the seqno column
 * @method     Stops2011Query orderByPgp($order = Criteria::ASC) Order by the pgp column
 * @method     Stops2011Query orderByGoback($order = Criteria::ASC) Order by the goback column
 * @method     Stops2011Query orderByLongitude($order = Criteria::ASC) Order by the longitude column
 * @method     Stops2011Query orderByLatitude($order = Criteria::ASC) Order by the latitude column
 * @method     Stops2011Query orderByAddress($order = Criteria::ASC) Order by the address column
 * @method     Stops2011Query orderByStoplocationid($order = Criteria::ASC) Order by the stoplocationid column
 * @method     Stops2011Query orderByShowlon($order = Criteria::ASC) Order by the showlon column
 * @method     Stops2011Query orderByShowlat($order = Criteria::ASC) Order by the showlat column
 * @method     Stops2011Query orderByVector($order = Criteria::ASC) Order by the vector column
 *
 * @method     Stops2011Query groupById() Group by the id column
 * @method     Stops2011Query groupByStopid() Group by the stopid column
 * @method     Stops2011Query groupByRouteid() Group by the routeid column
 * @method     Stops2011Query groupByNamezh() Group by the namezh column
 * @method     Stops2011Query groupByNameen() Group by the nameen column
 * @method     Stops2011Query groupBySeqno() Group by the seqno column
 * @method     Stops2011Query groupByPgp() Group by the pgp column
 * @method     Stops2011Query groupByGoback() Group by the goback column
 * @method     Stops2011Query groupByLongitude() Group by the longitude column
 * @method     Stops2011Query groupByLatitude() Group by the latitude column
 * @method     Stops2011Query groupByAddress() Group by the address column
 * @method     Stops2011Query groupByStoplocationid() Group by the stoplocationid column
 * @method     Stops2011Query groupByShowlon() Group by the showlon column
 * @method     Stops2011Query groupByShowlat() Group by the showlat column
 * @method     Stops2011Query groupByVector() Group by the vector column
 *
 * @method     Stops2011Query leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Stops2011Query rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Stops2011Query innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Stops2011 findOne(PropelPDO $con = null) Return the first Stops2011 matching the query
 * @method     Stops2011 findOneOrCreate(PropelPDO $con = null) Return the first Stops2011 matching the query, or a new Stops2011 object populated from the query conditions when no match is found
 *
 * @method     Stops2011 findOneById(string $id) Return the first Stops2011 filtered by the id column
 * @method     Stops2011 findOneByStopid(int $stopid) Return the first Stops2011 filtered by the stopid column
 * @method     Stops2011 findOneByRouteid(int $routeid) Return the first Stops2011 filtered by the routeid column
 * @method     Stops2011 findOneByNamezh(string $namezh) Return the first Stops2011 filtered by the namezh column
 * @method     Stops2011 findOneByNameen(string $nameen) Return the first Stops2011 filtered by the nameen column
 * @method     Stops2011 findOneBySeqno(int $seqno) Return the first Stops2011 filtered by the seqno column
 * @method     Stops2011 findOneByPgp(int $pgp) Return the first Stops2011 filtered by the pgp column
 * @method     Stops2011 findOneByGoback(int $goback) Return the first Stops2011 filtered by the goback column
 * @method     Stops2011 findOneByLongitude(double $longitude) Return the first Stops2011 filtered by the longitude column
 * @method     Stops2011 findOneByLatitude(double $latitude) Return the first Stops2011 filtered by the latitude column
 * @method     Stops2011 findOneByAddress(string $address) Return the first Stops2011 filtered by the address column
 * @method     Stops2011 findOneByStoplocationid(int $stoplocationid) Return the first Stops2011 filtered by the stoplocationid column
 * @method     Stops2011 findOneByShowlon(double $showlon) Return the first Stops2011 filtered by the showlon column
 * @method     Stops2011 findOneByShowlat(double $showlat) Return the first Stops2011 filtered by the showlat column
 * @method     Stops2011 findOneByVector(int $vector) Return the first Stops2011 filtered by the vector column
 *
 * @method     array findById(string $id) Return Stops2011 objects filtered by the id column
 * @method     array findByStopid(int $stopid) Return Stops2011 objects filtered by the stopid column
 * @method     array findByRouteid(int $routeid) Return Stops2011 objects filtered by the routeid column
 * @method     array findByNamezh(string $namezh) Return Stops2011 objects filtered by the namezh column
 * @method     array findByNameen(string $nameen) Return Stops2011 objects filtered by the nameen column
 * @method     array findBySeqno(int $seqno) Return Stops2011 objects filtered by the seqno column
 * @method     array findByPgp(int $pgp) Return Stops2011 objects filtered by the pgp column
 * @method     array findByGoback(int $goback) Return Stops2011 objects filtered by the goback column
 * @method     array findByLongitude(double $longitude) Return Stops2011 objects filtered by the longitude column
 * @method     array findByLatitude(double $latitude) Return Stops2011 objects filtered by the latitude column
 * @method     array findByAddress(string $address) Return Stops2011 objects filtered by the address column
 * @method     array findByStoplocationid(int $stoplocationid) Return Stops2011 objects filtered by the stoplocationid column
 * @method     array findByShowlon(double $showlon) Return Stops2011 objects filtered by the showlon column
 * @method     array findByShowlat(double $showlat) Return Stops2011 objects filtered by the showlat column
 * @method     array findByVector(int $vector) Return Stops2011 objects filtered by the vector column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseStops2011Query extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BaseStops2011Query object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'Stops2011', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Stops2011Query object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Stops2011Query
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Stops2011Query) {
			return $criteria;
		}
		$query = new Stops2011Query();
		if (null !== $modelAlias) {
			$query->setModelAlias($modelAlias);
		}
		if ($criteria instanceof Criteria) {
			$query->mergeWith($criteria);
		}
		return $query;
	}

	/**
	 * Find object by primary key.
	 * Propel uses the instance pool to skip the database if the object exists.
	 * Go fast if the query is untouched.
	 *
	 * <code>
	 * $obj  = $c->findPk(12, $con);
	 * </code>
	 *
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    Stops2011|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Stops2011Peer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Stops2011Peer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
		$this->basePreSelect($con);
		if ($this->formatter || $this->modelAlias || $this->with || $this->select
		 || $this->selectColumns || $this->asColumns || $this->selectModifiers
		 || $this->map || $this->having || $this->joins) {
			return $this->findPkComplex($key, $con);
		} else {
			return $this->findPkSimple($key, $con);
		}
	}

	/**
	 * Find object by primary key using raw SQL to go fast.
	 * Bypass doSelect() and the object formatter by using generated code.
	 *
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con A connection object
	 *
	 * @return    Stops2011 A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT ID, STOPID, ROUTEID, NAMEZH, NAMEEN, SEQNO, PGP, GOBACK, LONGITUDE, LATITUDE, ADDRESS, STOPLOCATIONID, SHOWLON, SHOWLAT, VECTOR FROM stops_2011 WHERE ID = :p0';
		try {
			$stmt = $con->prepare($sql);
			$stmt->bindValue(':p0', $key, PDO::PARAM_INT);
			$stmt->execute();
		} catch (Exception $e) {
			Propel::log($e->getMessage(), Propel::LOG_ERR);
			throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
		}
		$obj = null;
		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$obj = new Stops2011();
			$obj->hydrate($row);
			Stops2011Peer::addInstanceToPool($obj, (string) $row[0]);
		}
		$stmt->closeCursor();

		return $obj;
	}

	/**
	 * Find object by primary key.
	 *
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con A connection object
	 *
	 * @return    Stops2011|array|mixed the result, formatted by the current formatter
	 */
	protected function findPkComplex($key, $con)
	{
		// As the query uses a PK condition, no limit(1) is necessary.
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		$stmt = $criteria
			->filterByPrimaryKey($key)
			->doSelect($con);
		return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
	}

	/**
	 * Find objects by primary key
	 * <code>
	 * $objs = $c->findPks(array(12, 56, 832), $con);
	 * </code>
	 * @param     array $keys Primary keys to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
	 */
	public function findPks($keys, $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
		}
		$this->basePreSelect($con);
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		$stmt = $criteria
			->filterByPrimaryKeys($keys)
			->doSelect($con);
		return $criteria->getFormatter()->init($criteria)->format($stmt);
	}

	/**
	 * Filter the query by primary key
	 *
	 * @param     mixed $key Primary key to use for the query
	 *
	 * @return    Stops2011Query The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Stops2011Peer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Stops2011Query The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Stops2011Peer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterById(1234); // WHERE id = 1234
	 * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
	 * $query->filterById(array('min' => 12)); // WHERE id > 12
	 * </code>
	 *
	 * @param     mixed $id The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Stops2011Query The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Stops2011Peer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the stopid column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByStopid(1234); // WHERE stopid = 1234
	 * $query->filterByStopid(array(12, 34)); // WHERE stopid IN (12, 34)
	 * $query->filterByStopid(array('min' => 12)); // WHERE stopid > 12
	 * </code>
	 *
	 * @param     mixed $stopid The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Stops2011Query The current query, for fluid interface
	 */
	public function filterByStopid($stopid = null, $comparison = null)
	{
		if (is_array($stopid)) {
			$useMinMax = false;
			if (isset($stopid['min'])) {
				$this->addUsingAlias(Stops2011Peer::STOPID, $stopid['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($stopid['max'])) {
				$this->addUsingAlias(Stops2011Peer::STOPID, $stopid['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Stops2011Peer::STOPID, $stopid, $comparison);
	}

	/**
	 * Filter the query on the routeid column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByRouteid(1234); // WHERE routeid = 1234
	 * $query->filterByRouteid(array(12, 34)); // WHERE routeid IN (12, 34)
	 * $query->filterByRouteid(array('min' => 12)); // WHERE routeid > 12
	 * </code>
	 *
	 * @param     mixed $routeid The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Stops2011Query The current query, for fluid interface
	 */
	public function filterByRouteid($routeid = null, $comparison = null)
	{
		if (is_array($routeid)) {
			$useMinMax = false;
			if (isset($routeid['min'])) {
				$this->addUsingAlias(Stops2011Peer::ROUTEID, $routeid['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($routeid['max'])) {
				$this->addUsingAlias(Stops2011Peer::ROUTEID, $routeid['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Stops2011Peer::ROUTEID, $routeid, $comparison);
	}

	/**
	 * Filter the query on the namezh column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByNamezh('fooValue');   // WHERE namezh = 'fooValue'
	 * $query->filterByNamezh('%fooValue%'); // WHERE namezh LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $namezh The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Stops2011Query The current query, for fluid interface
	 */
	public function filterByNamezh($namezh = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($namezh)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $namezh)) {
				$namezh = str_replace('*', '%', $namezh);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Stops2011Peer::NAMEZH, $namezh, $comparison);
	}

	/**
	 * Filter the query on the nameen column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByNameen('fooValue');   // WHERE nameen = 'fooValue'
	 * $query->filterByNameen('%fooValue%'); // WHERE nameen LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $nameen The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Stops2011Query The current query, for fluid interface
	 */
	public function filterByNameen($nameen = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($nameen)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $nameen)) {
				$nameen = str_replace('*', '%', $nameen);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Stops2011Peer::NAMEEN, $nameen, $comparison);
	}

	/**
	 * Filter the query on the seqno column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterBySeqno(1234); // WHERE seqno = 1234
	 * $query->filterBySeqno(array(12, 34)); // WHERE seqno IN (12, 34)
	 * $query->filterBySeqno(array('min' => 12)); // WHERE seqno > 12
	 * </code>
	 *
	 * @param     mixed $seqno The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Stops2011Query The current query, for fluid interface
	 */
	public function filterBySeqno($seqno = null, $comparison = null)
	{
		if (is_array($seqno)) {
			$useMinMax = false;
			if (isset($seqno['min'])) {
				$this->addUsingAlias(Stops2011Peer::SEQNO, $seqno['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($seqno['max'])) {
				$this->addUsingAlias(Stops2011Peer::SEQNO, $seqno['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Stops2011Peer::SEQNO, $seqno, $comparison);
	}

	/**
	 * Filter the query on the pgp column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByPgp(1234); // WHERE pgp = 1234
	 * $query->filterByPgp(array(12, 34)); // WHERE pgp IN (12, 34)
	 * $query->filterByPgp(array('min' => 12)); // WHERE pgp > 12
	 * </code>
	 *
	 * @param     mixed $pgp The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Stops2011Query The current query, for fluid interface
	 */
	public function filterByPgp($pgp = null, $comparison = null)
	{
		if (is_array($pgp)) {
			$useMinMax = false;
			if (isset($pgp['min'])) {
				$this->addUsingAlias(Stops2011Peer::PGP, $pgp['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($pgp['max'])) {
				$this->addUsingAlias(Stops2011Peer::PGP, $pgp['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Stops2011Peer::PGP, $pgp, $comparison);
	}

	/**
	 * Filter the query on the goback column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByGoback(1234); // WHERE goback = 1234
	 * $query->filterByGoback(array(12, 34)); // WHERE goback IN (12, 34)
	 * $query->filterByGoback(array('min' => 12)); // WHERE goback > 12
	 * </code>
	 *
	 * @param     mixed $goback The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Stops2011Query The current query, for fluid interface
	 */
	public function filterByGoback($goback = null, $comparison = null)
	{
		if (is_array($goback)) {
			$useMinMax = false;
			if (isset($goback['min'])) {
				$this->addUsingAlias(Stops2011Peer::GOBACK, $goback['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($goback['max'])) {
				$this->addUsingAlias(Stops2011Peer::GOBACK, $goback['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Stops2011Peer::GOBACK, $goback, $comparison);
	}

	/**
	 * Filter the query on the longitude column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByLongitude(1234); // WHERE longitude = 1234
	 * $query->filterByLongitude(array(12, 34)); // WHERE longitude IN (12, 34)
	 * $query->filterByLongitude(array('min' => 12)); // WHERE longitude > 12
	 * </code>
	 *
	 * @param     mixed $longitude The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Stops2011Query The current query, for fluid interface
	 */
	public function filterByLongitude($longitude = null, $comparison = null)
	{
		if (is_array($longitude)) {
			$useMinMax = false;
			if (isset($longitude['min'])) {
				$this->addUsingAlias(Stops2011Peer::LONGITUDE, $longitude['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($longitude['max'])) {
				$this->addUsingAlias(Stops2011Peer::LONGITUDE, $longitude['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Stops2011Peer::LONGITUDE, $longitude, $comparison);
	}

	/**
	 * Filter the query on the latitude column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByLatitude(1234); // WHERE latitude = 1234
	 * $query->filterByLatitude(array(12, 34)); // WHERE latitude IN (12, 34)
	 * $query->filterByLatitude(array('min' => 12)); // WHERE latitude > 12
	 * </code>
	 *
	 * @param     mixed $latitude The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Stops2011Query The current query, for fluid interface
	 */
	public function filterByLatitude($latitude = null, $comparison = null)
	{
		if (is_array($latitude)) {
			$useMinMax = false;
			if (isset($latitude['min'])) {
				$this->addUsingAlias(Stops2011Peer::LATITUDE, $latitude['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($latitude['max'])) {
				$this->addUsingAlias(Stops2011Peer::LATITUDE, $latitude['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Stops2011Peer::LATITUDE, $latitude, $comparison);
	}

	/**
	 * Filter the query on the address column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByAddress('fooValue');   // WHERE address = 'fooValue'
	 * $query->filterByAddress('%fooValue%'); // WHERE address LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $address The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Stops2011Query The current query, for fluid interface
	 */
	public function filterByAddress($address = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($address)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $address)) {
				$address = str_replace('*', '%', $address);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Stops2011Peer::ADDRESS, $address, $comparison);
	}

	/**
	 * Filter the query on the stoplocationid column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByStoplocationid(1234); // WHERE stoplocationid = 1234
	 * $query->filterByStoplocationid(array(12, 34)); // WHERE stoplocationid IN (12, 34)
	 * $query->filterByStoplocationid(array('min' => 12)); // WHERE stoplocationid > 12
	 * </code>
	 *
	 * @param     mixed $stoplocationid The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Stops2011Query The current query, for fluid interface
	 */
	public function filterByStoplocationid($stoplocationid = null, $comparison = null)
	{
		if (is_array($stoplocationid)) {
			$useMinMax = false;
			if (isset($stoplocationid['min'])) {
				$this->addUsingAlias(Stops2011Peer::STOPLOCATIONID, $stoplocationid['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($stoplocationid['max'])) {
				$this->addUsingAlias(Stops2011Peer::STOPLOCATIONID, $stoplocationid['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Stops2011Peer::STOPLOCATIONID, $stoplocationid, $comparison);
	}

	/**
	 * Filter the query on the showlon column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByShowlon(1234); // WHERE showlon = 1234
	 * $query->filterByShowlon(array(12, 34)); // WHERE showlon IN (12, 34)
	 * $query->filterByShowlon(array('min' => 12)); // WHERE showlon > 12
	 * </code>
	 *
	 * @param     mixed $showlon The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Stops2011Query The current query, for fluid interface
	 */
	public function filterByShowlon($showlon = null, $comparison = null)
	{
		if (is_array($showlon)) {
			$useMinMax = false;
			if (isset($showlon['min'])) {
				$this->addUsingAlias(Stops2011Peer::SHOWLON, $showlon['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($showlon['max'])) {
				$this->addUsingAlias(Stops2011Peer::SHOWLON, $showlon['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Stops2011Peer::SHOWLON, $showlon, $comparison);
	}

	/**
	 * Filter the query on the showlat column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByShowlat(1234); // WHERE showlat = 1234
	 * $query->filterByShowlat(array(12, 34)); // WHERE showlat IN (12, 34)
	 * $query->filterByShowlat(array('min' => 12)); // WHERE showlat > 12
	 * </code>
	 *
	 * @param     mixed $showlat The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Stops2011Query The current query, for fluid interface
	 */
	public function filterByShowlat($showlat = null, $comparison = null)
	{
		if (is_array($showlat)) {
			$useMinMax = false;
			if (isset($showlat['min'])) {
				$this->addUsingAlias(Stops2011Peer::SHOWLAT, $showlat['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($showlat['max'])) {
				$this->addUsingAlias(Stops2011Peer::SHOWLAT, $showlat['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Stops2011Peer::SHOWLAT, $showlat, $comparison);
	}

	/**
	 * Filter the query on the vector column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByVector(1234); // WHERE vector = 1234
	 * $query->filterByVector(array(12, 34)); // WHERE vector IN (12, 34)
	 * $query->filterByVector(array('min' => 12)); // WHERE vector > 12
	 * </code>
	 *
	 * @param     mixed $vector The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Stops2011Query The current query, for fluid interface
	 */
	public function filterByVector($vector = null, $comparison = null)
	{
		if (is_array($vector)) {
			$useMinMax = false;
			if (isset($vector['min'])) {
				$this->addUsingAlias(Stops2011Peer::VECTOR, $vector['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($vector['max'])) {
				$this->addUsingAlias(Stops2011Peer::VECTOR, $vector['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Stops2011Peer::VECTOR, $vector, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Stops2011 $stops2011 Object to remove from the list of results
	 *
	 * @return    Stops2011Query The current query, for fluid interface
	 */
	public function prune($stops2011 = null)
	{
		if ($stops2011) {
			$this->addUsingAlias(Stops2011Peer::ID, $stops2011->getId(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // BaseStops2011Query