<?php
namespace Ivoz\Domain\Model\ExternalCallFilter;
use Ivoz\Domain\Model\Calendar\Calendar;
use Ivoz\Domain\Model\Calendar\CalendarInterface;
use Ivoz\Domain\Model\ExternalCallFilterBlackList\ExternalCallFilterBlackList;
use Ivoz\Domain\Model\ExternalCallFilterRelCalendar\ExternalCallFilterRelCalendar;
use Ivoz\Domain\Model\ExternalCallFilterRelSchedule\ExternalCallFilterRelSchedule;
use Ivoz\Domain\Model\MatchList\MatchList;
use Doctrine\Common\Collections\Criteria;

/**
 * ExternalCallFilter
 */
class ExternalCallFilter extends ExternalCallFilterAbstract implements ExternalCallFilterInterface
{
    use ExternalCallFilterTrait;

    /**
     * Check if the given number matches External Filter black list
     * @param string $origin in E164 form
     * @return true if number matches, false otherwise
     */
    public function isBlackListed($origin)
    {
        $blackLists = $this->getBlackLists();

        /**
         * @var ExternalCallFilterBlackList $list
         */
        foreach ($blackLists as $list) {
            /**
             * @var MatchList $matchList
             */
            $matchList = $list->getMatchList();
            // @todo ensure this method exists
            if ($matchList->numberMatches($origin)) {

                return true;
            }
        }

        return false;
    }

    /**
     * Check if the given number matches External Filter white list
     * @param string $origin in E164 form
     * @return true if number matches, false otherwise
     */
    public function isWhitelisted($origin)
    {
        $whiteLists = $this->getWhiteList();
        foreach ($whiteLists as $list) {
            /**
             * @var MatchList $matchList
             */
            $matchList = $list->getMatchList();
            if ($matchList->numberMatches($origin)) {

                return true;
            }
        }

        return false;
    }

    /**
     * @return \IvozProvider\Model\Raw\holidayDates or false
     */
    public function getHolidayDateForToday()
    {
        $externalCallFilterRelCalendars = $this->getCalendars();
        if(empty($externalCallFilterRelCalendars)) {

            return null;
        }

        /**
         * @todo remove Datetime and use something mockable instead
         */
        $datetime = new \DateTime("now");
        $date = $datetime->format('Y-m-d');

        /**
         * @var ExternalCallFilterRelCalendar $externalCallFilterRelCalendar
         */
        foreach($externalCallFilterRelCalendars as $externalCallFilterRelCalendar) {

            /**
             * @var Calendar $calendar
             */
            $calendar = $externalCallFilterRelCalendar->getCalendar();

            $expressionBuilder = Criteria::expr();
            $holidayDateCriteria = Criteria::create()
                ->where(
                    $expressionBuilder->eq(
                        'eventDate',
                        $date
                    )
                );

            $holidayDates = $calendar->getHolidayDates($holidayDateCriteria);
            if(!empty($holidayDates)) {

                return $holidayDates[0];
            }
        }

        return null;
    }

    /**
     * @return bool scheduleMatched
     */
    public function isOutOfSchedule()
    {
        $externalCallFilterRelSchedules = $this->getSchedules();
        if (empty($externalCallFilterRelSchedules)) {

            return true;
        }

        $scheduleMatched = false;
        $time = new \DateTime('now');

        /**
         * @var ExternalCallFilterRelSchedule $externalCallFilterRelSchedule
         */
        foreach($externalCallFilterRelSchedules as $externalCallFilterRelSchedule) {

            $schedule = $externalCallFilterRelSchedule->getSchedule();
            $company = $schedule->getCompany();
            $timezones = $company->getDefaultTimezone();

            $scheduleMatched = $schedule
                //@todo ensure this method exists
                ->checkIsOnTimeRange(
                    $time->format('l'),
                    $time,
                    new \DateTimeZone($timezone = $timezones->getTz())
                );

            if ($scheduleMatched) {

                break;
            }
        }

        return $scheduleMatched;
    }
}

