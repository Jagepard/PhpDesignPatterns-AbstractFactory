<?php
/**
 * Date: 21.03.18
 * Time: 12:57
 *
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Creational\AbstractFactory;

/**
 * Interface InterfaceAbstractFactory
 * @package Creational\AbstractFactory
 */
interface InterfaceAbstractFactory
{

    /**
     * @param int    $power
     * @param int    $speed
     * @param string $color
     * @return AbstractAuto
     */
    public function createAuto(int $power, int $speed, string $color): AbstractAuto;

    /**
     * @param int $power
     * @param int $speed
     * @return AbstractBike
     */
    public function createBike(int $power, int $speed): AbstractBike;
}