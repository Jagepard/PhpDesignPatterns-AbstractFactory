<?php
/**
 * Date: 21.03.18
 * Time: 13:05
 *
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Creational\AbstractFactory;


/**
 * Class AbstractAuto
 * @package Creational\AbstractFactory
 */
class AbstractBike
{

    /**
     * @var int
     */
    protected $power;
    /**
     * @var int
     */
    protected $speed;

    /**
     * AbstractAuto constructor.
     * @param $power
     * @param $speed
     */
    public function __construct(int $power, int $speed)
    {
        $this->power = $power;
        $this->speed = $speed;
    }

    /**
     * @return string
     */
    public function getClassName(): string
    {
        return get_called_class();
    }

    /**
     * @return int
     */
    public function getPower(): int
    {
        return $this->power;
    }

    /**
     * @return int
     */
    public function getSpeed(): int
    {
        return $this->speed;
    }

    /**
     * @return array
     */
    public function getBike(): array
    {
        return [
            'className' => $this->getClassName(),
            'power'     => $this->getPower(),
            'speed'     => $this->getSpeed()
        ];
    }
}