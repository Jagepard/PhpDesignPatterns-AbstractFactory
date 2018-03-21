<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2018, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;
use Creational\AbstractFactory\GermanFactory;
use Creational\AbstractFactory\InterfaceAbstractFactory;
use Creational\AbstractFactory\AbstractAuto;
use Creational\AbstractFactory\AbstractBike;
use Creational\AbstractFactory\GermanAuto;
use Creational\AbstractFactory\GermanBike;

class AbstractFactoryTest extends PHPUnit_Framework_TestCase
{

    /**
     * @var
     */
    protected $germanFactory;
    /**
     * @var
     */
    protected $germanAuto;
    /**
     * @var
     */
    protected $germanBike;

    protected function setUp(): void
    {
        $this->germanFactory = new GermanFactory();
        $this->germanAuto    = $this->germanFactory->createAuto(160, 120, 'black');
        $this->germanBike    = $this->germanFactory->createBike(160, 120);
    }

    public function testGermanFactory()
    {
        $this->assertInstanceOf(InterfaceAbstractFactory::class, $this->getGermanFactory());
        $this->assertInstanceOf(AbstractAuto::class, $this->getGermanAuto());
        $this->assertInstanceOf(AbstractBike::class, $this->getGermanBike());
    }

    public function testAuto()
    {
        $this->assertEquals($this->getGermanAuto()->getPower(), 160);
        $this->assertEquals($this->getGermanAuto()->getSpeed(), 120);
        $this->assertEquals($this->getGermanAuto()->getColor(), 'black');
        $this->assertEquals($this->getGermanAuto()->getClassName(), GermanAuto::class);
        $this->assertCount(4, $this->getGermanAuto()->getAuto());
    }

    public function testBike()
    {
        $this->assertEquals($this->getGermanBike()->getPower(), 160);
        $this->assertEquals($this->getGermanBike()->getSpeed(), 120);
        $this->assertEquals($this->getGermanBike()->getClassName(), GermanBike::class);
        $this->assertCount(3, $this->getGermanBike()->getBike());
    }

    /**
     * @return mixed
     */
    public function getGermanAuto()
    {
        return $this->germanAuto;
    }

    /**
     * @return mixed
     */
    public function getGermanFactory()
    {
        return $this->germanFactory;
    }

    /**
     * @return mixed
     */
    public function getGermanBike()
    {
        return $this->germanBike;
    }
}