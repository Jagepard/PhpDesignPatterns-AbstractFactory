<?php
/**
 * Date: 21.03.18
 * Time: 13:01
 *
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Creational\AbstractFactory;

/**
 * Class GermanFactory
 * @package Creational\AbstractFactory
 */
class GermanFactory implements InterfaceAbstractFactory
{

    /**
     * @param int    $power
     * @param int    $speed
     * @param string $color
     * @return AbstractAuto
     */
    public function createAuto(int $power, int $speed, string $color): AbstractAuto
    {
        return new GermanAuto($power, $speed, $color);
    }

    /**
     * @param int $power
     * @param int $speed
     * @return AbstractBike
     */
    public function createBike(int $power, int $speed): AbstractBike
    {
        return new GermanBike($power, $speed);
    }
}