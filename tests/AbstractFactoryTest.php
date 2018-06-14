<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Creational\AbstractFactory\Tests;

use Creational\AbstractFactory\Handler;
use Creational\AbstractFactory\XMLFactory;
use Creational\AbstractFactory\JsonFactory;
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

/**
 * Class AbstractFactoryTest
 * @package Creational\AbstractFactory\Tests
 */
class AbstractFactoryTest extends PHPUnit_Framework_TestCase
{

    /**
     * @var Handler
     */
    protected $handler;
    /**
     * @var string
     */
    protected $content;

    protected function setUp(): void
    {
        $this->handler = new Handler();
        $this->content = 'Message';
    }

    public function testJson()
    {
        $content = json_encode($this->content);
        $this->assertEquals($this->handler->getMessage(new JsonFactory(), $this->content), $content);
    }

    public function testXML()
    {
        $dom     = new \DOMDocument("1.0", "utf-8");
        $content = $dom->createElement("content", $this->content);
        $dom->appendChild($content);

        $this->assertEquals($this->handler->getMessage(new XMLFactory(), $this->content), $dom->saveXML());
    }
}
