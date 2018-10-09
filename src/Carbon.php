<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/12
 * Time: 8:54
 *
 */

namespace Aw;


use DateTime;

class Carbon extends DateTime
{
    /**
     * @return Carbon
     */
    public static function now()
    {
        return new self('now');
    }

    /**
     * @return int
     */
    public function time()
    {
        return $this->getTimestamp();
    }

    /**
     * @param int $value
     * @return $this
     */
    public function addMonths($value = 1)
    {
        $modify = ($value > 0 ? "+$value" : "-" . abs($value)) . " month";
        $this->modify($modify);
        return $this;
    }

    /**
     * @return Carbon
     */
    public function addMonth()
    {
        return $this->addMonths();
    }

    /**
     * @param int $value
     * @return Carbon
     */
    public function addDays($value = 1)
    {
        $modify = ($value > 0 ? "+$value" : "-" . abs($value)) . " day";
        $this->modify($modify);
        return $this;
    }

    /**
     * @return Carbon
     */
    public function addDay()
    {
        return $this->addDays();
    }

    /**
     * 切换到月底
     * @return $this
     */
    public function endOfDay()
    {
        $this->modify('last day of this month');
        $this->setTime(23, 59, 59);
        return $this;
    }

    /**
     * 切换到月初
     * @return $this
     */
    public function startOfDay()
    {
        $this->modify('first day of this month');
        $this->setTime(0, 0, 0);
        return $this;
    }
}