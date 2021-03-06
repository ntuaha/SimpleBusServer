<?php


/**
 * Base class that represents a row from the 'providers_2011' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.6.3 on:
 *
 * Wed Jan 11 23:40:55 2012
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseProviders2011 extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'Providers2011Peer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        Providers2011Peer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        string
	 */
	protected $id;

	/**
	 * The value for the providerid field.
	 * @var        int
	 */
	protected $providerid;

	/**
	 * The value for the namezn field.
	 * @var        string
	 */
	protected $namezn;

	/**
	 * The value for the nameen field.
	 * @var        string
	 */
	protected $nameen;

	/**
	 * The value for the email field.
	 * @var        string
	 */
	protected $email;

	/**
	 * The value for the phoneinfo field.
	 * @var        string
	 */
	protected $phoneinfo;

	/**
	 * The value for the stationid field.
	 * @var        int
	 */
	protected $stationid;

	/**
	 * The value for the stationnamezn field.
	 * @var        string
	 */
	protected $stationnamezn;

	/**
	 * The value for the stationnameen field.
	 * @var        string
	 */
	protected $stationnameen;

	/**
	 * The value for the type field.
	 * @var        int
	 */
	protected $type;

	/**
	 * Flag to prevent endless save loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInSave = false;

	/**
	 * Flag to prevent endless validation loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInValidation = false;

	/**
	 * Get the [id] column value.
	 * 
	 * @return     string
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Get the [providerid] column value.
	 * 
	 * @return     int
	 */
	public function getProviderid()
	{
		return $this->providerid;
	}

	/**
	 * Get the [namezn] column value.
	 * 
	 * @return     string
	 */
	public function getNamezn()
	{
		return $this->namezn;
	}

	/**
	 * Get the [nameen] column value.
	 * 
	 * @return     string
	 */
	public function getNameen()
	{
		return $this->nameen;
	}

	/**
	 * Get the [email] column value.
	 * 
	 * @return     string
	 */
	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * Get the [phoneinfo] column value.
	 * 
	 * @return     string
	 */
	public function getPhoneinfo()
	{
		return $this->phoneinfo;
	}

	/**
	 * Get the [stationid] column value.
	 * 
	 * @return     int
	 */
	public function getStationid()
	{
		return $this->stationid;
	}

	/**
	 * Get the [stationnamezn] column value.
	 * 
	 * @return     string
	 */
	public function getStationnamezn()
	{
		return $this->stationnamezn;
	}

	/**
	 * Get the [stationnameen] column value.
	 * 
	 * @return     string
	 */
	public function getStationnameen()
	{
		return $this->stationnameen;
	}

	/**
	 * Get the [type] column value.
	 * 
	 * @return     int
	 */
	public function getType()
	{
		return $this->type;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      string $v new value
	 * @return     Providers2011 The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = Providers2011Peer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [providerid] column.
	 * 
	 * @param      int $v new value
	 * @return     Providers2011 The current object (for fluent API support)
	 */
	public function setProviderid($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->providerid !== $v) {
			$this->providerid = $v;
			$this->modifiedColumns[] = Providers2011Peer::PROVIDERID;
		}

		return $this;
	} // setProviderid()

	/**
	 * Set the value of [namezn] column.
	 * 
	 * @param      string $v new value
	 * @return     Providers2011 The current object (for fluent API support)
	 */
	public function setNamezn($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->namezn !== $v) {
			$this->namezn = $v;
			$this->modifiedColumns[] = Providers2011Peer::NAMEZN;
		}

		return $this;
	} // setNamezn()

	/**
	 * Set the value of [nameen] column.
	 * 
	 * @param      string $v new value
	 * @return     Providers2011 The current object (for fluent API support)
	 */
	public function setNameen($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->nameen !== $v) {
			$this->nameen = $v;
			$this->modifiedColumns[] = Providers2011Peer::NAMEEN;
		}

		return $this;
	} // setNameen()

	/**
	 * Set the value of [email] column.
	 * 
	 * @param      string $v new value
	 * @return     Providers2011 The current object (for fluent API support)
	 */
	public function setEmail($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->email !== $v) {
			$this->email = $v;
			$this->modifiedColumns[] = Providers2011Peer::EMAIL;
		}

		return $this;
	} // setEmail()

	/**
	 * Set the value of [phoneinfo] column.
	 * 
	 * @param      string $v new value
	 * @return     Providers2011 The current object (for fluent API support)
	 */
	public function setPhoneinfo($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->phoneinfo !== $v) {
			$this->phoneinfo = $v;
			$this->modifiedColumns[] = Providers2011Peer::PHONEINFO;
		}

		return $this;
	} // setPhoneinfo()

	/**
	 * Set the value of [stationid] column.
	 * 
	 * @param      int $v new value
	 * @return     Providers2011 The current object (for fluent API support)
	 */
	public function setStationid($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->stationid !== $v) {
			$this->stationid = $v;
			$this->modifiedColumns[] = Providers2011Peer::STATIONID;
		}

		return $this;
	} // setStationid()

	/**
	 * Set the value of [stationnamezn] column.
	 * 
	 * @param      string $v new value
	 * @return     Providers2011 The current object (for fluent API support)
	 */
	public function setStationnamezn($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->stationnamezn !== $v) {
			$this->stationnamezn = $v;
			$this->modifiedColumns[] = Providers2011Peer::STATIONNAMEZN;
		}

		return $this;
	} // setStationnamezn()

	/**
	 * Set the value of [stationnameen] column.
	 * 
	 * @param      string $v new value
	 * @return     Providers2011 The current object (for fluent API support)
	 */
	public function setStationnameen($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->stationnameen !== $v) {
			$this->stationnameen = $v;
			$this->modifiedColumns[] = Providers2011Peer::STATIONNAMEEN;
		}

		return $this;
	} // setStationnameen()

	/**
	 * Set the value of [type] column.
	 * 
	 * @param      int $v new value
	 * @return     Providers2011 The current object (for fluent API support)
	 */
	public function setType($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->type !== $v) {
			$this->type = $v;
			$this->modifiedColumns[] = Providers2011Peer::TYPE;
		}

		return $this;
	} // setType()

	/**
	 * Indicates whether the columns in this object are only set to default values.
	 *
	 * This method can be used in conjunction with isModified() to indicate whether an object is both
	 * modified _and_ has some values set which are non-default.
	 *
	 * @return     boolean Whether the columns in this object are only been set with default values.
	 */
	public function hasOnlyDefaultValues()
	{
		// otherwise, everything was equal, so return TRUE
		return true;
	} // hasOnlyDefaultValues()

	/**
	 * Hydrates (populates) the object variables with values from the database resultset.
	 *
	 * An offset (0-based "start column") is specified so that objects can be hydrated
	 * with a subset of the columns in the resultset rows.  This is needed, for example,
	 * for results of JOIN queries where the resultset row includes columns from two or
	 * more tables.
	 *
	 * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
	 * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
	 * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
	 * @return     int next starting column
	 * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
	 */
	public function hydrate($row, $startcol = 0, $rehydrate = false)
	{
		try {

			$this->id = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
			$this->providerid = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
			$this->namezn = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->nameen = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->email = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->phoneinfo = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->stationid = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
			$this->stationnamezn = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->stationnameen = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->type = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 10; // 10 = Providers2011Peer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Providers2011 object", $e);
		}
	}

	/**
	 * Checks and repairs the internal consistency of the object.
	 *
	 * This method is executed after an already-instantiated object is re-hydrated
	 * from the database.  It exists to check any foreign keys to make sure that
	 * the objects related to the current object are correct based on foreign key.
	 *
	 * You can override this method in the stub class, but you should always invoke
	 * the base method from the overridden method (i.e. parent::ensureConsistency()),
	 * in case your model changes.
	 *
	 * @throws     PropelException
	 */
	public function ensureConsistency()
	{

	} // ensureConsistency

	/**
	 * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
	 *
	 * This will only work if the object has been saved and has a valid primary key set.
	 *
	 * @param      boolean $deep (optional) Whether to also de-associated any related objects.
	 * @param      PropelPDO $con (optional) The PropelPDO connection to use.
	 * @return     void
	 * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
	 */
	public function reload($deep = false, PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("Cannot reload a deleted object.");
		}

		if ($this->isNew()) {
			throw new PropelException("Cannot reload an unsaved object.");
		}

		if ($con === null) {
			$con = Propel::getConnection(Providers2011Peer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = Providers2011Peer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

		} // if (deep)
	}

	/**
	 * Removes this object from datastore and sets delete attribute.
	 *
	 * @param      PropelPDO $con
	 * @return     void
	 * @throws     PropelException
	 * @see        BaseObject::setDeleted()
	 * @see        BaseObject::isDeleted()
	 */
	public function delete(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(Providers2011Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = Providers2011Query::create()
				->filterByPrimaryKey($this->getPrimaryKey());
			$ret = $this->preDelete($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseProviders2011:delete:pre') as $callable)
			{
			  if (call_user_func($callable, $this, $con))
			  {
			    $con->commit();
			    return;
			  }
			}

			if ($ret) {
				$deleteQuery->delete($con);
				$this->postDelete($con);
				// symfony_behaviors behavior
				foreach (sfMixer::getCallables('BaseProviders2011:delete:post') as $callable)
				{
				  call_user_func($callable, $this, $con);
				}

				$con->commit();
				$this->setDeleted(true);
			} else {
				$con->commit();
			}
		} catch (Exception $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Persists this object to the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All modified related objects will also be persisted in the doSave()
	 * method.  This method wraps all precipitate database operations in a
	 * single transaction.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        doSave()
	 */
	public function save(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(Providers2011Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			// symfony_behaviors behavior
			foreach (sfMixer::getCallables('BaseProviders2011:save:pre') as $callable)
			{
			  if (is_integer($affectedRows = call_user_func($callable, $this, $con)))
			  {
			  	$con->commit();
			    return $affectedRows;
			  }
			}

			if ($isInsert) {
				$ret = $ret && $this->preInsert($con);
			} else {
				$ret = $ret && $this->preUpdate($con);
			}
			if ($ret) {
				$affectedRows = $this->doSave($con);
				if ($isInsert) {
					$this->postInsert($con);
				} else {
					$this->postUpdate($con);
				}
				$this->postSave($con);
				// symfony_behaviors behavior
				foreach (sfMixer::getCallables('BaseProviders2011:save:post') as $callable)
				{
				  call_user_func($callable, $this, $con, $affectedRows);
				}

				Providers2011Peer::addInstanceToPool($this);
			} else {
				$affectedRows = 0;
			}
			$con->commit();
			return $affectedRows;
		} catch (Exception $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs the work of inserting or updating the row in the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All related objects are also updated in this method.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        save()
	 */
	protected function doSave(PropelPDO $con)
	{
		$affectedRows = 0; // initialize var to track total num of affected rows
		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;

			if ($this->isNew() || $this->isModified()) {
				// persist changes
				if ($this->isNew()) {
					$this->doInsert($con);
				} else {
					$this->doUpdate($con);
				}
				$affectedRows += 1;
				$this->resetModified();
			}

			$this->alreadyInSave = false;

		}
		return $affectedRows;
	} // doSave()

	/**
	 * Insert the row in the database.
	 *
	 * @param      PropelPDO $con
	 *
	 * @throws     PropelException
	 * @see        doSave()
	 */
	protected function doInsert(PropelPDO $con)
	{
		$modifiedColumns = array();
		$index = 0;

		$this->modifiedColumns[] = Providers2011Peer::ID;
		if (null !== $this->id) {
			throw new PropelException('Cannot insert a value for auto-increment primary key (' . Providers2011Peer::ID . ')');
		}
		if (null === $this->id) {
			try {				
				$stmt = $con->query("SELECT nextval('providers_2011_id_seq')");
				$row = $stmt->fetch(PDO::FETCH_NUM);
				$this->id = $row[0];
			} catch (Exception $e) {
				throw new PropelException('Unable to get sequence id.', $e);
			}
		}


		 // check the columns in natural order for more readable SQL queries
		if ($this->isColumnModified(Providers2011Peer::ID)) {
			$modifiedColumns[':p' . $index++]  = 'ID';
		}
		if ($this->isColumnModified(Providers2011Peer::PROVIDERID)) {
			$modifiedColumns[':p' . $index++]  = 'PROVIDERID';
		}
		if ($this->isColumnModified(Providers2011Peer::NAMEZN)) {
			$modifiedColumns[':p' . $index++]  = 'NAMEZN';
		}
		if ($this->isColumnModified(Providers2011Peer::NAMEEN)) {
			$modifiedColumns[':p' . $index++]  = 'NAMEEN';
		}
		if ($this->isColumnModified(Providers2011Peer::EMAIL)) {
			$modifiedColumns[':p' . $index++]  = 'EMAIL';
		}
		if ($this->isColumnModified(Providers2011Peer::PHONEINFO)) {
			$modifiedColumns[':p' . $index++]  = 'PHONEINFO';
		}
		if ($this->isColumnModified(Providers2011Peer::STATIONID)) {
			$modifiedColumns[':p' . $index++]  = 'STATIONID';
		}
		if ($this->isColumnModified(Providers2011Peer::STATIONNAMEZN)) {
			$modifiedColumns[':p' . $index++]  = 'STATIONNAMEZN';
		}
		if ($this->isColumnModified(Providers2011Peer::STATIONNAMEEN)) {
			$modifiedColumns[':p' . $index++]  = 'STATIONNAMEEN';
		}
		if ($this->isColumnModified(Providers2011Peer::TYPE)) {
			$modifiedColumns[':p' . $index++]  = 'TYPE';
		}

		$sql = sprintf(
			'INSERT INTO providers_2011 (%s) VALUES (%s)',
			implode(', ', $modifiedColumns),
			implode(', ', array_keys($modifiedColumns))
		);

		try {
			$stmt = $con->prepare($sql);
			foreach ($modifiedColumns as $identifier => $columnName) {
				switch ($columnName) {
					case 'ID':
						$stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
						break;
					case 'PROVIDERID':
						$stmt->bindValue($identifier, $this->providerid, PDO::PARAM_INT);
						break;
					case 'NAMEZN':
						$stmt->bindValue($identifier, $this->namezn, PDO::PARAM_STR);
						break;
					case 'NAMEEN':
						$stmt->bindValue($identifier, $this->nameen, PDO::PARAM_STR);
						break;
					case 'EMAIL':
						$stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
						break;
					case 'PHONEINFO':
						$stmt->bindValue($identifier, $this->phoneinfo, PDO::PARAM_STR);
						break;
					case 'STATIONID':
						$stmt->bindValue($identifier, $this->stationid, PDO::PARAM_INT);
						break;
					case 'STATIONNAMEZN':
						$stmt->bindValue($identifier, $this->stationnamezn, PDO::PARAM_STR);
						break;
					case 'STATIONNAMEEN':
						$stmt->bindValue($identifier, $this->stationnameen, PDO::PARAM_STR);
						break;
					case 'TYPE':
						$stmt->bindValue($identifier, $this->type, PDO::PARAM_INT);
						break;
				}
			}
			$stmt->execute();
		} catch (Exception $e) {
			Propel::log($e->getMessage(), Propel::LOG_ERR);
			throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
		}

		$this->setNew(false);
	}

	/**
	 * Update the row in the database.
	 *
	 * @param      PropelPDO $con
	 *
	 * @see        doSave()
	 */
	protected function doUpdate(PropelPDO $con)
	{
		$selectCriteria = $this->buildPkeyCriteria();
		$valuesCriteria = $this->buildCriteria();
		BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
	}

	/**
	 * Array of ValidationFailed objects.
	 * @var        array ValidationFailed[]
	 */
	protected $validationFailures = array();

	/**
	 * Gets any ValidationFailed objects that resulted from last call to validate().
	 *
	 *
	 * @return     array ValidationFailed[]
	 * @see        validate()
	 */
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	/**
	 * Validates the objects modified field values and all objects related to this table.
	 *
	 * If $columns is either a column name or an array of column names
	 * only those columns are validated.
	 *
	 * @param      mixed $columns Column name or an array of column names.
	 * @return     boolean Whether all columns pass validation.
	 * @see        doValidate()
	 * @see        getValidationFailures()
	 */
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	/**
	 * This function performs the validation work for complex object models.
	 *
	 * In addition to checking the current object, all related objects will
	 * also be validated.  If all pass then <code>true</code> is returned; otherwise
	 * an aggreagated array of ValidationFailed objects will be returned.
	 *
	 * @param      array $columns Array of column names to validate.
	 * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
	 */
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			if (($retval = Providers2011Peer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	/**
	 * Retrieves a field from the object by name passed in as a string.
	 *
	 * @param      string $name name
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     mixed Value of field.
	 */
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = Providers2011Peer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		$field = $this->getByPosition($pos);
		return $field;
	}

	/**
	 * Retrieves a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @return     mixed Value of field at $pos
	 */
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getProviderid();
				break;
			case 2:
				return $this->getNamezn();
				break;
			case 3:
				return $this->getNameen();
				break;
			case 4:
				return $this->getEmail();
				break;
			case 5:
				return $this->getPhoneinfo();
				break;
			case 6:
				return $this->getStationid();
				break;
			case 7:
				return $this->getStationnamezn();
				break;
			case 8:
				return $this->getStationnameen();
				break;
			case 9:
				return $this->getType();
				break;
			default:
				return null;
				break;
		} // switch()
	}

	/**
	 * Exports the object as an array.
	 *
	 * You can specify the key type of the array by passing one of the class
	 * type constants.
	 *
	 * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 *                    Defaults to BasePeer::TYPE_PHPNAME.
	 * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
	 * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
	 *
	 * @return    array an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
	{
		if (isset($alreadyDumpedObjects['Providers2011'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Providers2011'][$this->getPrimaryKey()] = true;
		$keys = Providers2011Peer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getProviderid(),
			$keys[2] => $this->getNamezn(),
			$keys[3] => $this->getNameen(),
			$keys[4] => $this->getEmail(),
			$keys[5] => $this->getPhoneinfo(),
			$keys[6] => $this->getStationid(),
			$keys[7] => $this->getStationnamezn(),
			$keys[8] => $this->getStationnameen(),
			$keys[9] => $this->getType(),
		);
		return $result;
	}

	/**
	 * Sets a field from the object by name passed in as a string.
	 *
	 * @param      string $name peer name
	 * @param      mixed $value field value
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     void
	 */
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = Providers2011Peer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	/**
	 * Sets a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @param      mixed $value field value
	 * @return     void
	 */
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setProviderid($value);
				break;
			case 2:
				$this->setNamezn($value);
				break;
			case 3:
				$this->setNameen($value);
				break;
			case 4:
				$this->setEmail($value);
				break;
			case 5:
				$this->setPhoneinfo($value);
				break;
			case 6:
				$this->setStationid($value);
				break;
			case 7:
				$this->setStationnamezn($value);
				break;
			case 8:
				$this->setStationnameen($value);
				break;
			case 9:
				$this->setType($value);
				break;
		} // switch()
	}

	/**
	 * Populates the object using an array.
	 *
	 * This is particularly useful when populating an object from one of the
	 * request arrays (e.g. $_POST).  This method goes through the column
	 * names, checking to see whether a matching key exists in populated
	 * array. If so the setByName() method is called for that column.
	 *
	 * You can specify the key type of the array by additionally passing one
	 * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 * The default key type is the column's phpname (e.g. 'AuthorId')
	 *
	 * @param      array  $arr     An array to populate the object from.
	 * @param      string $keyType The type of keys the array uses.
	 * @return     void
	 */
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = Providers2011Peer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setProviderid($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setNamezn($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setNameen($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setEmail($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setPhoneinfo($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setStationid($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setStationnamezn($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setStationnameen($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setType($arr[$keys[9]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(Providers2011Peer::DATABASE_NAME);

		if ($this->isColumnModified(Providers2011Peer::ID)) $criteria->add(Providers2011Peer::ID, $this->id);
		if ($this->isColumnModified(Providers2011Peer::PROVIDERID)) $criteria->add(Providers2011Peer::PROVIDERID, $this->providerid);
		if ($this->isColumnModified(Providers2011Peer::NAMEZN)) $criteria->add(Providers2011Peer::NAMEZN, $this->namezn);
		if ($this->isColumnModified(Providers2011Peer::NAMEEN)) $criteria->add(Providers2011Peer::NAMEEN, $this->nameen);
		if ($this->isColumnModified(Providers2011Peer::EMAIL)) $criteria->add(Providers2011Peer::EMAIL, $this->email);
		if ($this->isColumnModified(Providers2011Peer::PHONEINFO)) $criteria->add(Providers2011Peer::PHONEINFO, $this->phoneinfo);
		if ($this->isColumnModified(Providers2011Peer::STATIONID)) $criteria->add(Providers2011Peer::STATIONID, $this->stationid);
		if ($this->isColumnModified(Providers2011Peer::STATIONNAMEZN)) $criteria->add(Providers2011Peer::STATIONNAMEZN, $this->stationnamezn);
		if ($this->isColumnModified(Providers2011Peer::STATIONNAMEEN)) $criteria->add(Providers2011Peer::STATIONNAMEEN, $this->stationnameen);
		if ($this->isColumnModified(Providers2011Peer::TYPE)) $criteria->add(Providers2011Peer::TYPE, $this->type);

		return $criteria;
	}

	/**
	 * Builds a Criteria object containing the primary key for this object.
	 *
	 * Unlike buildCriteria() this method includes the primary key values regardless
	 * of whether or not they have been modified.
	 *
	 * @return     Criteria The Criteria object containing value(s) for primary key(s).
	 */
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(Providers2011Peer::DATABASE_NAME);
		$criteria->add(Providers2011Peer::ID, $this->id);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     string
	 */
	public function getPrimaryKey()
	{
		return $this->getId();
	}

	/**
	 * Generic method to set the primary key (id column).
	 *
	 * @param      string $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setId($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getId();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Providers2011 (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setProviderid($this->getProviderid());
		$copyObj->setNamezn($this->getNamezn());
		$copyObj->setNameen($this->getNameen());
		$copyObj->setEmail($this->getEmail());
		$copyObj->setPhoneinfo($this->getPhoneinfo());
		$copyObj->setStationid($this->getStationid());
		$copyObj->setStationnamezn($this->getStationnamezn());
		$copyObj->setStationnameen($this->getStationnameen());
		$copyObj->setType($this->getType());
		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setId(NULL); // this is a auto-increment column, so set to default value
		}
	}

	/**
	 * Makes a copy of this object that will be inserted as a new row in table when saved.
	 * It creates a new object filling in the simple attributes, but skipping any primary
	 * keys that are defined for the table.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @return     Providers2011 Clone of current object.
	 * @throws     PropelException
	 */
	public function copy($deepCopy = false)
	{
		// we use get_class(), because this might be a subclass
		$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	/**
	 * Returns a peer instance associated with this om.
	 *
	 * Since Peer classes are not to have any instance attributes, this method returns the
	 * same instance for all member of this class. The method could therefore
	 * be static, but this would prevent one from overriding the behavior.
	 *
	 * @return     Providers2011Peer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new Providers2011Peer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->providerid = null;
		$this->namezn = null;
		$this->nameen = null;
		$this->email = null;
		$this->phoneinfo = null;
		$this->stationid = null;
		$this->stationnamezn = null;
		$this->stationnameen = null;
		$this->type = null;
		$this->alreadyInSave = false;
		$this->alreadyInValidation = false;
		$this->clearAllReferences();
		$this->resetModified();
		$this->setNew(true);
		$this->setDeleted(false);
	}

	/**
	 * Resets all references to other model objects or collections of model objects.
	 *
	 * This method is a user-space workaround for PHP's inability to garbage collect
	 * objects with circular references (even in PHP 5.3). This is currently necessary
	 * when using Propel in certain daemon or large-volumne/high-memory operations.
	 *
	 * @param      boolean $deep Whether to also clear the references on all referrer objects.
	 */
	public function clearAllReferences($deep = false)
	{
		if ($deep) {
		} // if ($deep)

	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(Providers2011Peer::DEFAULT_STRING_FORMAT);
	}

	/**
	 * Catches calls to virtual methods
	 */
	public function __call($name, $params)
	{
		
		// symfony_behaviors behavior
		if ($callable = sfMixer::getCallable('BaseProviders2011:' . $name))
		{
		  array_unshift($params, $this);
		  return call_user_func_array($callable, $params);
		}

		return parent::__call($name, $params);
	}

} // BaseProviders2011
