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
class AbstractAuto
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
     * @var string
     */
    protected $color;

    /**
     * AbstractAuto constructor.
     * @param $power
     * @param $speed
     * @param $color
     */
    public function __construct(int $power, int $speed, string $color)
    {
        $this->power = $power;
        $this->speed = $speed;
        $this->color = $color;
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
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @return array
     */
    public function getAuto(): array
    {
        return [
            'className' => $this->getClassName(),
            'power'     => $this->getPower(),
            'speed'     => $this->getSpeed(),
            'color'     => $this->getColor()
        ];
    }
}