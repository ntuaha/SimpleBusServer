<?php


/**
 * Base class that represents a query for the 'PresidentialElection2004' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.6.3 on:
 *
 * Wed Jan 11 23:40:55 2012
 *
 * @method     Presidentialelection2004Query orderById($order = Criteria::ASC) Order by the id column
 * @method     Presidentialelection2004Query orderByCounty($order = Criteria::ASC) Order by the county column
 * @method     Presidentialelection2004Query orderByCity($order = Criteria::ASC) Order by the city column
 * @method     Presidentialelection2004Query orderByVillage($order = Criteria::ASC) Order by the village column
 * @method     Presidentialelection2004Query orderByVoteno($order = Criteria::ASC) Order by the VoteNo column
 * @method     Presidentialelection2004Query orderByDppnum($order = Criteria::ASC) Order by the DPPNum column
 * @method     Presidentialelection2004Query orderByDppratio($order = Criteria::ASC) Order by the DPPRatio column
 * @method     Presidentialelection2004Query orderByKmtnum($order = Criteria::ASC) Order by the KMTNum column
 * @method     Presidentialelection2004Query orderByKmtratio($order = Criteria::ASC) Order by the KMTRatio column
 * @method     Presidentialelection2004Query orderByVaildvotes($order = Criteria::ASC) Order by the vaildVotes column
 * @method     Presidentialelection2004Query orderByInvaildvotes($order = Criteria::ASC) Order by the invaildVotes column
 * @method     Presidentialelection2004Query orderByTotalvotes($order = Criteria::ASC) Order by the totalVotes column
 * @method     Presidentialelection2004Query orderByOthervotes($order = Criteria::ASC) Order by the otherVotes column
 * @method     Presidentialelection2004Query orderByVotersnum($order = Criteria::ASC) Order by the VotersNum column
 * @method     Presidentialelection2004Query orderByVotersratio($order = Criteria::ASC) Order by the VotersRatio column
 *
 * @method     Presidentialelection2004Query groupById() Group by the id column
 * @method     Presidentialelection2004Query groupByCounty() Group by the county column
 * @method     Presidentialelection2004Query groupByCity() Group by the city column
 * @method     Presidentialelection2004Query groupByVillage() Group by the village column
 * @method     Presidentialelection2004Query groupByVoteno() Group by the VoteNo column
 * @method     Presidentialelection2004Query groupByDppnum() Group by the DPPNum column
 * @method     Presidentialelection2004Query groupByDppratio() Group by the DPPRatio column
 * @method     Presidentialelection2004Query groupByKmtnum() Group by the KMTNum column
 * @method     Presidentialelection2004Query groupByKmtratio() Group by the KMTRatio column
 * @method     Presidentialelection2004Query groupByVaildvotes() Group by the vaildVotes column
 * @method     Presidentialelection2004Query groupByInvaildvotes() Group by the invaildVotes column
 * @method     Presidentialelection2004Query groupByTotalvotes() Group by the totalVotes column
 * @method     Presidentialelection2004Query groupByOthervotes() Group by the otherVotes column
 * @method     Presidentialelection2004Query groupByVotersnum() Group by the VotersNum column
 * @method     Presidentialelection2004Query groupByVotersratio() Group by the VotersRatio column
 *
 * @method     Presidentialelection2004Query leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     Presidentialelection2004Query rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     Presidentialelection2004Query innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Presidentialelection2004 findOne(PropelPDO $con = null) Return the first Presidentialelection2004 matching the query
 * @method     Presidentialelection2004 findOneOrCreate(PropelPDO $con = null) Return the first Presidentialelection2004 matching the query, or a new Presidentialelection2004 object populated from the query conditions when no match is found
 *
 * @method     Presidentialelection2004 findOneById(int $id) Return the first Presidentialelection2004 filtered by the id column
 * @method     Presidentialelection2004 findOneByCounty(string $county) Return the first Presidentialelection2004 filtered by the county column
 * @method     Presidentialelection2004 findOneByCity(string $city) Return the first Presidentialelection2004 filtered by the city column
 * @method     Presidentialelection2004 findOneByVillage(string $village) Return the first Presidentialelection2004 filtered by the village column
 * @method     Presidentialelection2004 findOneByVoteno(int $VoteNo) Return the first Presidentialelection2004 filtered by the VoteNo column
 * @method     Presidentialelection2004 findOneByDppnum(int $DPPNum) Return the first Presidentialelection2004 filtered by the DPPNum column
 * @method     Presidentialelection2004 findOneByDppratio(double $DPPRatio) Return the first Presidentialelection2004 filtered by the DPPRatio column
 * @method     Presidentialelection2004 findOneByKmtnum(int $KMTNum) Return the first Presidentialelection2004 filtered by the KMTNum column
 * @method     Presidentialelection2004 findOneByKmtratio(double $KMTRatio) Return the first Presidentialelection2004 filtered by the KMTRatio column
 * @method     Presidentialelection2004 findOneByVaildvotes(int $vaildVotes) Return the first Presidentialelection2004 filtered by the vaildVotes column
 * @method     Presidentialelection2004 findOneByInvaildvotes(int $invaildVotes) Return the first Presidentialelection2004 filtered by the invaildVotes column
 * @method     Presidentialelection2004 findOneByTotalvotes(int $totalVotes) Return the first Presidentialelection2004 filtered by the totalVotes column
 * @method     Presidentialelection2004 findOneByOthervotes(int $otherVotes) Return the first Presidentialelection2004 filtered by the otherVotes column
 * @method     Presidentialelection2004 findOneByVotersnum(int $VotersNum) Return the first Presidentialelection2004 filtered by the VotersNum column
 * @method     Presidentialelection2004 findOneByVotersratio(double $VotersRatio) Return the first Presidentialelection2004 filtered by the VotersRatio column
 *
 * @method     array findById(int $id) Return Presidentialelection2004 objects filtered by the id column
 * @method     array findByCounty(string $county) Return Presidentialelection2004 objects filtered by the county column
 * @method     array findByCity(string $city) Return Presidentialelection2004 objects filtered by the city column
 * @method     array findByVillage(string $village) Return Presidentialelection2004 objects filtered by the village column
 * @method     array findByVoteno(int $VoteNo) Return Presidentialelection2004 objects filtered by the VoteNo column
 * @method     array findByDppnum(int $DPPNum) Return Presidentialelection2004 objects filtered by the DPPNum column
 * @method     array findByDppratio(double $DPPRatio) Return Presidentialelection2004 objects filtered by the DPPRatio column
 * @method     array findByKmtnum(int $KMTNum) Return Presidentialelection2004 objects filtered by the KMTNum column
 * @method     array findByKmtratio(double $KMTRatio) Return Presidentialelection2004 objects filtered by the KMTRatio column
 * @method     array findByVaildvotes(int $vaildVotes) Return Presidentialelection2004 objects filtered by the vaildVotes column
 * @method     array findByInvaildvotes(int $invaildVotes) Return Presidentialelection2004 objects filtered by the invaildVotes column
 * @method     array findByTotalvotes(int $totalVotes) Return Presidentialelection2004 objects filtered by the totalVotes column
 * @method     array findByOthervotes(int $otherVotes) Return Presidentialelection2004 objects filtered by the otherVotes column
 * @method     array findByVotersnum(int $VotersNum) Return Presidentialelection2004 objects filtered by the VotersNum column
 * @method     array findByVotersratio(double $VotersRatio) Return Presidentialelection2004 objects filtered by the VotersRatio column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BasePresidentialelection2004Query extends ModelCriteria
{
	
	/**
	 * Initializes internal state of BasePresidentialelection2004Query object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'Presidentialelection2004', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new Presidentialelection2004Query object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    Presidentialelection2004Query
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof Presidentialelection2004Query) {
			return $criteria;
		}
		$query = new Presidentialelection2004Query();
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
	 * @return    Presidentialelection2004|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ($key === null) {
			return null;
		}
		if ((null !== ($obj = Presidentialelection2004Peer::getInstanceFromPool((string) $key))) && !$this->formatter) {
			// the object is alredy in the instance pool
			return $obj;
		}
		if ($con === null) {
			$con = Propel::getConnection(Presidentialelection2004Peer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return    Presidentialelection2004 A model object, or null if the key is not found
	 */
	protected function findPkSimple($key, $con)
	{
		$sql = 'SELECT ID, COUNTY, CITY, VILLAGE, VOTENO, DPPNUM, DPPRATIO, KMTNUM, KMTRATIO, VAILDVOTES, INVAILDVOTES, TOTALVOTES, OTHERVOTES, VOTERSNUM, VOTERSRATIO FROM PresidentialElection2004 WHERE ID = :p0';
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
			$obj = new Presidentialelection2004();
			$obj->hydrate($row);
			Presidentialelection2004Peer::addInstanceToPool($obj, (string) $row[0]);
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
	 * @return    Presidentialelection2004|array|mixed the result, formatted by the current formatter
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
	 * @return    Presidentialelection2004Query The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(Presidentialelection2004Peer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    Presidentialelection2004Query The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(Presidentialelection2004Peer::ID, $keys, Criteria::IN);
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
	 * @return    Presidentialelection2004Query The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(Presidentialelection2004Peer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the county column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCounty('fooValue');   // WHERE county = 'fooValue'
	 * $query->filterByCounty('%fooValue%'); // WHERE county LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $county The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Presidentialelection2004Query The current query, for fluid interface
	 */
	public function filterByCounty($county = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($county)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $county)) {
				$county = str_replace('*', '%', $county);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Presidentialelection2004Peer::COUNTY, $county, $comparison);
	}

	/**
	 * Filter the query on the city column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByCity('fooValue');   // WHERE city = 'fooValue'
	 * $query->filterByCity('%fooValue%'); // WHERE city LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $city The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Presidentialelection2004Query The current query, for fluid interface
	 */
	public function filterByCity($city = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($city)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $city)) {
				$city = str_replace('*', '%', $city);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Presidentialelection2004Peer::CITY, $city, $comparison);
	}

	/**
	 * Filter the query on the village column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByVillage('fooValue');   // WHERE village = 'fooValue'
	 * $query->filterByVillage('%fooValue%'); // WHERE village LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $village The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Presidentialelection2004Query The current query, for fluid interface
	 */
	public function filterByVillage($village = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($village)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $village)) {
				$village = str_replace('*', '%', $village);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(Presidentialelection2004Peer::VILLAGE, $village, $comparison);
	}

	/**
	 * Filter the query on the VoteNo column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByVoteno(1234); // WHERE VoteNo = 1234
	 * $query->filterByVoteno(array(12, 34)); // WHERE VoteNo IN (12, 34)
	 * $query->filterByVoteno(array('min' => 12)); // WHERE VoteNo > 12
	 * </code>
	 *
	 * @param     mixed $voteno The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Presidentialelection2004Query The current query, for fluid interface
	 */
	public function filterByVoteno($voteno = null, $comparison = null)
	{
		if (is_array($voteno)) {
			$useMinMax = false;
			if (isset($voteno['min'])) {
				$this->addUsingAlias(Presidentialelection2004Peer::VOTENO, $voteno['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($voteno['max'])) {
				$this->addUsingAlias(Presidentialelection2004Peer::VOTENO, $voteno['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Presidentialelection2004Peer::VOTENO, $voteno, $comparison);
	}

	/**
	 * Filter the query on the DPPNum column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDppnum(1234); // WHERE DPPNum = 1234
	 * $query->filterByDppnum(array(12, 34)); // WHERE DPPNum IN (12, 34)
	 * $query->filterByDppnum(array('min' => 12)); // WHERE DPPNum > 12
	 * </code>
	 *
	 * @param     mixed $dppnum The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Presidentialelection2004Query The current query, for fluid interface
	 */
	public function filterByDppnum($dppnum = null, $comparison = null)
	{
		if (is_array($dppnum)) {
			$useMinMax = false;
			if (isset($dppnum['min'])) {
				$this->addUsingAlias(Presidentialelection2004Peer::DPPNUM, $dppnum['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dppnum['max'])) {
				$this->addUsingAlias(Presidentialelection2004Peer::DPPNUM, $dppnum['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Presidentialelection2004Peer::DPPNUM, $dppnum, $comparison);
	}

	/**
	 * Filter the query on the DPPRatio column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByDppratio(1234); // WHERE DPPRatio = 1234
	 * $query->filterByDppratio(array(12, 34)); // WHERE DPPRatio IN (12, 34)
	 * $query->filterByDppratio(array('min' => 12)); // WHERE DPPRatio > 12
	 * </code>
	 *
	 * @param     mixed $dppratio The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Presidentialelection2004Query The current query, for fluid interface
	 */
	public function filterByDppratio($dppratio = null, $comparison = null)
	{
		if (is_array($dppratio)) {
			$useMinMax = false;
			if (isset($dppratio['min'])) {
				$this->addUsingAlias(Presidentialelection2004Peer::DPPRATIO, $dppratio['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($dppratio['max'])) {
				$this->addUsingAlias(Presidentialelection2004Peer::DPPRATIO, $dppratio['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Presidentialelection2004Peer::DPPRATIO, $dppratio, $comparison);
	}

	/**
	 * Filter the query on the KMTNum column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByKmtnum(1234); // WHERE KMTNum = 1234
	 * $query->filterByKmtnum(array(12, 34)); // WHERE KMTNum IN (12, 34)
	 * $query->filterByKmtnum(array('min' => 12)); // WHERE KMTNum > 12
	 * </code>
	 *
	 * @param     mixed $kmtnum The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Presidentialelection2004Query The current query, for fluid interface
	 */
	public function filterByKmtnum($kmtnum = null, $comparison = null)
	{
		if (is_array($kmtnum)) {
			$useMinMax = false;
			if (isset($kmtnum['min'])) {
				$this->addUsingAlias(Presidentialelection2004Peer::KMTNUM, $kmtnum['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($kmtnum['max'])) {
				$this->addUsingAlias(Presidentialelection2004Peer::KMTNUM, $kmtnum['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Presidentialelection2004Peer::KMTNUM, $kmtnum, $comparison);
	}

	/**
	 * Filter the query on the KMTRatio column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByKmtratio(1234); // WHERE KMTRatio = 1234
	 * $query->filterByKmtratio(array(12, 34)); // WHERE KMTRatio IN (12, 34)
	 * $query->filterByKmtratio(array('min' => 12)); // WHERE KMTRatio > 12
	 * </code>
	 *
	 * @param     mixed $kmtratio The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Presidentialelection2004Query The current query, for fluid interface
	 */
	public function filterByKmtratio($kmtratio = null, $comparison = null)
	{
		if (is_array($kmtratio)) {
			$useMinMax = false;
			if (isset($kmtratio['min'])) {
				$this->addUsingAlias(Presidentialelection2004Peer::KMTRATIO, $kmtratio['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($kmtratio['max'])) {
				$this->addUsingAlias(Presidentialelection2004Peer::KMTRATIO, $kmtratio['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Presidentialelection2004Peer::KMTRATIO, $kmtratio, $comparison);
	}

	/**
	 * Filter the query on the vaildVotes column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByVaildvotes(1234); // WHERE vaildVotes = 1234
	 * $query->filterByVaildvotes(array(12, 34)); // WHERE vaildVotes IN (12, 34)
	 * $query->filterByVaildvotes(array('min' => 12)); // WHERE vaildVotes > 12
	 * </code>
	 *
	 * @param     mixed $vaildvotes The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Presidentialelection2004Query The current query, for fluid interface
	 */
	public function filterByVaildvotes($vaildvotes = null, $comparison = null)
	{
		if (is_array($vaildvotes)) {
			$useMinMax = false;
			if (isset($vaildvotes['min'])) {
				$this->addUsingAlias(Presidentialelection2004Peer::VAILDVOTES, $vaildvotes['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($vaildvotes['max'])) {
				$this->addUsingAlias(Presidentialelection2004Peer::VAILDVOTES, $vaildvotes['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Presidentialelection2004Peer::VAILDVOTES, $vaildvotes, $comparison);
	}

	/**
	 * Filter the query on the invaildVotes column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByInvaildvotes(1234); // WHERE invaildVotes = 1234
	 * $query->filterByInvaildvotes(array(12, 34)); // WHERE invaildVotes IN (12, 34)
	 * $query->filterByInvaildvotes(array('min' => 12)); // WHERE invaildVotes > 12
	 * </code>
	 *
	 * @param     mixed $invaildvotes The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Presidentialelection2004Query The current query, for fluid interface
	 */
	public function filterByInvaildvotes($invaildvotes = null, $comparison = null)
	{
		if (is_array($invaildvotes)) {
			$useMinMax = false;
			if (isset($invaildvotes['min'])) {
				$this->addUsingAlias(Presidentialelection2004Peer::INVAILDVOTES, $invaildvotes['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($invaildvotes['max'])) {
				$this->addUsingAlias(Presidentialelection2004Peer::INVAILDVOTES, $invaildvotes['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Presidentialelection2004Peer::INVAILDVOTES, $invaildvotes, $comparison);
	}

	/**
	 * Filter the query on the totalVotes column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByTotalvotes(1234); // WHERE totalVotes = 1234
	 * $query->filterByTotalvotes(array(12, 34)); // WHERE totalVotes IN (12, 34)
	 * $query->filterByTotalvotes(array('min' => 12)); // WHERE totalVotes > 12
	 * </code>
	 *
	 * @param     mixed $totalvotes The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Presidentialelection2004Query The current query, for fluid interface
	 */
	public function filterByTotalvotes($totalvotes = null, $comparison = null)
	{
		if (is_array($totalvotes)) {
			$useMinMax = false;
			if (isset($totalvotes['min'])) {
				$this->addUsingAlias(Presidentialelection2004Peer::TOTALVOTES, $totalvotes['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($totalvotes['max'])) {
				$this->addUsingAlias(Presidentialelection2004Peer::TOTALVOTES, $totalvotes['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Presidentialelection2004Peer::TOTALVOTES, $totalvotes, $comparison);
	}

	/**
	 * Filter the query on the otherVotes column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByOthervotes(1234); // WHERE otherVotes = 1234
	 * $query->filterByOthervotes(array(12, 34)); // WHERE otherVotes IN (12, 34)
	 * $query->filterByOthervotes(array('min' => 12)); // WHERE otherVotes > 12
	 * </code>
	 *
	 * @param     mixed $othervotes The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Presidentialelection2004Query The current query, for fluid interface
	 */
	public function filterByOthervotes($othervotes = null, $comparison = null)
	{
		if (is_array($othervotes)) {
			$useMinMax = false;
			if (isset($othervotes['min'])) {
				$this->addUsingAlias(Presidentialelection2004Peer::OTHERVOTES, $othervotes['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($othervotes['max'])) {
				$this->addUsingAlias(Presidentialelection2004Peer::OTHERVOTES, $othervotes['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Presidentialelection2004Peer::OTHERVOTES, $othervotes, $comparison);
	}

	/**
	 * Filter the query on the VotersNum column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByVotersnum(1234); // WHERE VotersNum = 1234
	 * $query->filterByVotersnum(array(12, 34)); // WHERE VotersNum IN (12, 34)
	 * $query->filterByVotersnum(array('min' => 12)); // WHERE VotersNum > 12
	 * </code>
	 *
	 * @param     mixed $votersnum The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Presidentialelection2004Query The current query, for fluid interface
	 */
	public function filterByVotersnum($votersnum = null, $comparison = null)
	{
		if (is_array($votersnum)) {
			$useMinMax = false;
			if (isset($votersnum['min'])) {
				$this->addUsingAlias(Presidentialelection2004Peer::VOTERSNUM, $votersnum['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($votersnum['max'])) {
				$this->addUsingAlias(Presidentialelection2004Peer::VOTERSNUM, $votersnum['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Presidentialelection2004Peer::VOTERSNUM, $votersnum, $comparison);
	}

	/**
	 * Filter the query on the VotersRatio column
	 *
	 * Example usage:
	 * <code>
	 * $query->filterByVotersratio(1234); // WHERE VotersRatio = 1234
	 * $query->filterByVotersratio(array(12, 34)); // WHERE VotersRatio IN (12, 34)
	 * $query->filterByVotersratio(array('min' => 12)); // WHERE VotersRatio > 12
	 * </code>
	 *
	 * @param     mixed $votersratio The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    Presidentialelection2004Query The current query, for fluid interface
	 */
	public function filterByVotersratio($votersratio = null, $comparison = null)
	{
		if (is_array($votersratio)) {
			$useMinMax = false;
			if (isset($votersratio['min'])) {
				$this->addUsingAlias(Presidentialelection2004Peer::VOTERSRATIO, $votersratio['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($votersratio['max'])) {
				$this->addUsingAlias(Presidentialelection2004Peer::VOTERSRATIO, $votersratio['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(Presidentialelection2004Peer::VOTERSRATIO, $votersratio, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Presidentialelection2004 $presidentialelection2004 Object to remove from the list of results
	 *
	 * @return    Presidentialelection2004Query The current query, for fluid interface
	 */
	public function prune($presidentialelection2004 = null)
	{
		if ($presidentialelection2004) {
			$this->addUsingAlias(Presidentialelection2004Peer::ID, $presidentialelection2004->getId(), Criteria::NOT_EQUAL);
		}

		return $this;
	}

} // BasePresidentialelection2004Query