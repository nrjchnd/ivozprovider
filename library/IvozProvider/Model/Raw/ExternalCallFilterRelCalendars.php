<?php

/**
 * Application Model
 *
 * @package IvozProvider\Model\Raw
 * @subpackage Model
 * @author Luis Felipe Garcia
 * @copyright ZF model generator
 * @license http://framework.zend.com/license/new-bsd     New BSD License
 */

/**
 * [entity][rest]
 *
 * @package IvozProvider\Model
 * @subpackage Model
 * @author Luis Felipe Garcia
 */

namespace IvozProvider\Model\Raw;
class ExternalCallFilterRelCalendars extends ModelAbstract
{


    /**
     * Database var type int
     *
     * @var int
     */
    protected $_id;

    /**
     * Database var type int
     *
     * @var int
     */
    protected $_filterId;

    /**
     * Database var type int
     *
     * @var int
     */
    protected $_calendarId;


    /**
     * Parent relation ExternalCallFilterRelCalendars_ibfk_1
     *
     * @var \IvozProvider\Model\Raw\ExternalCallFilters
     */
    protected $_Filter;

    /**
     * Parent relation ExternalCallFilterRelCalendars_ibfk_2
     *
     * @var \IvozProvider\Model\Raw\Calendars
     */
    protected $_Calendar;


    protected $_columnsList = array(
        'id'=>'id',
        'filterId'=>'filterId',
        'calendarId'=>'calendarId',
    );

    /**
     * Sets up column and relationship lists
     */
    public function __construct()
    {
        $this->setColumnsMeta(array(
        ));

        $this->setMultiLangColumnsList(array(
        ));

        $this->setAvailableLangs(array('es', 'en'));

        $this->setParentList(array(
            'ExternalCallFilterRelCalendarsIbfk1'=> array(
                    'property' => 'Filter',
                    'table_name' => 'ExternalCallFilters',
                ),
            'ExternalCallFilterRelCalendarsIbfk2'=> array(
                    'property' => 'Calendar',
                    'table_name' => 'Calendars',
                ),
        ));

        $this->setDependentList(array(
        ));




        $this->_defaultValues = array(
        );

        $this->_initFileObjects();
        parent::__construct();
    }

    /**
     * This method is called just after parent's constructor
     */
    public function init()
    {
    }
    /**************************************************************************
    ************************** File System Object (FSO)************************
    ***************************************************************************/

    protected function _initFileObjects()
    {

        return $this;
    }

    public function getFileObjects()
    {

        return array();
    }


    /**************************************************************************
    *********************************** /FSO ***********************************
    ***************************************************************************/

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param int $data
     * @return \IvozProvider\Model\Raw\ExternalCallFilterRelCalendars
     */
    public function setId($data)
    {

        if ($this->_id != $data) {
            $this->_logChange('id', $this->_id, $data);
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_id = $data;

        } else if (!is_null($data)) {
            $this->_id = (int) $data;

        } else {
            $this->_id = $data;
        }
        return $this;
    }

    /**
     * Gets column id
     *
     * @return int
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param int $data
     * @return \IvozProvider\Model\Raw\ExternalCallFilterRelCalendars
     */
    public function setFilterId($data)
    {

        if (is_null($data)) {
            throw new \InvalidArgumentException(_('Required values cannot be null'));
        }
        if ($this->_filterId != $data) {
            $this->_logChange('filterId', $this->_filterId, $data);
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_filterId = $data;

        } else if (!is_null($data)) {
            $this->_filterId = (int) $data;

        } else {
            $this->_filterId = $data;
        }
        return $this;
    }

    /**
     * Gets column filterId
     *
     * @return int
     */
    public function getFilterId()
    {
        return $this->_filterId;
    }

    /**
     * Sets column Stored in ISO 8601 format.     *
     * @param int $data
     * @return \IvozProvider\Model\Raw\ExternalCallFilterRelCalendars
     */
    public function setCalendarId($data)
    {

        if (is_null($data)) {
            throw new \InvalidArgumentException(_('Required values cannot be null'));
        }
        if ($this->_calendarId != $data) {
            $this->_logChange('calendarId', $this->_calendarId, $data);
        }

        if ($data instanceof \Zend_Db_Expr) {
            $this->_calendarId = $data;

        } else if (!is_null($data)) {
            $this->_calendarId = (int) $data;

        } else {
            $this->_calendarId = $data;
        }
        return $this;
    }

    /**
     * Gets column calendarId
     *
     * @return int
     */
    public function getCalendarId()
    {
        return $this->_calendarId;
    }

    /**
     * Sets parent relation Filter
     *
     * @param \IvozProvider\Model\Raw\ExternalCallFilters $data
     * @return \IvozProvider\Model\Raw\ExternalCallFilterRelCalendars
     */
    public function setFilter(\IvozProvider\Model\Raw\ExternalCallFilters $data)
    {
        $this->_Filter = $data;

        $primaryKey = $data->getPrimaryKey();
        if (is_array($primaryKey)) {
            $primaryKey = $primaryKey['id'];
        }

        if (!is_null($primaryKey)) {
            $this->setFilterId($primaryKey);
        }

        $this->_setLoaded('ExternalCallFilterRelCalendarsIbfk1');
        return $this;
    }

    /**
     * Gets parent Filter
     * TODO: Mejorar esto para los casos en que la relación no exista. Ahora mismo siempre se pediría el padre
     * @return \IvozProvider\Model\Raw\ExternalCallFilters
     */
    public function getFilter($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'ExternalCallFilterRelCalendarsIbfk1';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('parent', $fkName, $this, $where, $orderBy);
            $this->_Filter = array_shift($related);
            if ($usingDefaultArguments) {
                $this->_setLoaded($fkName);
            }
        }

        return $this->_Filter;
    }

    /**
     * Sets parent relation Calendar
     *
     * @param \IvozProvider\Model\Raw\Calendars $data
     * @return \IvozProvider\Model\Raw\ExternalCallFilterRelCalendars
     */
    public function setCalendar(\IvozProvider\Model\Raw\Calendars $data)
    {
        $this->_Calendar = $data;

        $primaryKey = $data->getPrimaryKey();
        if (is_array($primaryKey)) {
            $primaryKey = $primaryKey['id'];
        }

        if (!is_null($primaryKey)) {
            $this->setCalendarId($primaryKey);
        }

        $this->_setLoaded('ExternalCallFilterRelCalendarsIbfk2');
        return $this;
    }

    /**
     * Gets parent Calendar
     * TODO: Mejorar esto para los casos en que la relación no exista. Ahora mismo siempre se pediría el padre
     * @return \IvozProvider\Model\Raw\Calendars
     */
    public function getCalendar($where = null, $orderBy = null, $avoidLoading = false)
    {
        $fkName = 'ExternalCallFilterRelCalendarsIbfk2';

        $usingDefaultArguments = is_null($where) && is_null($orderBy);
        if (!$usingDefaultArguments) {
            $this->setNotLoaded($fkName);
        }

        $dontSkipLoading = !($avoidLoading);
        $notLoadedYet = !($this->_isLoaded($fkName));

        if ($dontSkipLoading && $notLoadedYet) {
            $related = $this->getMapper()->loadRelated('parent', $fkName, $this, $where, $orderBy);
            $this->_Calendar = array_shift($related);
            if ($usingDefaultArguments) {
                $this->_setLoaded($fkName);
            }
        }

        return $this->_Calendar;
    }

    /**
     * Returns the mapper class for this model
     *
     * @return IvozProvider\Mapper\Sql\ExternalCallFilterRelCalendars
     */
    public function getMapper()
    {
        if ($this->_mapper === null) {

            \Zend_Loader_Autoloader::getInstance()->suppressNotFoundWarnings(true);

            if (class_exists('\IvozProvider\Mapper\Sql\ExternalCallFilterRelCalendars')) {

                $this->setMapper(new \IvozProvider\Mapper\Sql\ExternalCallFilterRelCalendars);

            } else {

                 new \Exception("Not a valid mapper class found");
            }

            \Zend_Loader_Autoloader::getInstance()->suppressNotFoundWarnings(false);
        }

        return $this->_mapper;
    }

    /**
     * Returns the validator class for this model
     *
     * @return null | \IvozProvider\Model\Validator\ExternalCallFilterRelCalendars
     */
    public function getValidator()
    {
        if ($this->_validator === null) {

            if (class_exists('\IvozProvider\\Validator\ExternalCallFilterRelCalendars')) {

                $this->setValidator(new \IvozProvider\Validator\ExternalCallFilterRelCalendars);
            }
        }

        return $this->_validator;
    }

    public function setFromArray($data)
    {
        return $this->getMapper()->loadModel($data, $this);
    }

    /**
     * Deletes current row by deleting the row that matches the primary key
     *
     * @see \Mapper\Sql\ExternalCallFilterRelCalendars::delete
     * @return int|boolean Number of rows deleted or boolean if doing soft delete
     */
    public function deleteRowByPrimaryKey()
    {
        if ($this->getId() === null) {
            $this->_logger->log('The value for Id cannot be null in deleteRowByPrimaryKey for ' . get_class($this), \Zend_Log::ERR);
            throw new \Exception('Primary Key does not contain a value');
        }

        return $this->getMapper()->getDbTable()->delete(
            'id = ' .
             $this->getMapper()->getDbTable()->getAdapter()->quote($this->getId())
        );
    }

    public function mustUpdateEtag()
    {
        return true;
    }

}