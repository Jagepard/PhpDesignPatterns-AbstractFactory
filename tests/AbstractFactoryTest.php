<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Creational\AbstractFactory\Tests;

use Creational\AbstractFactory\XMLFactory;
use Creational\AbstractFactory\JsonFactory;
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

class AbstractFactoryTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var string
     */
    private $content;

    protected function setUp(): void
    {
        $this->content = 'Message';
    }

    public function testJson()
    {
        $content     = \json_encode($this->content);
        $jsonFactory = new JsonFactory();

        $this->assertEquals($jsonFactory->createMessage($this->getContent())->getContent(), $content);
    }

    public function testXML()
    {
        $dom     = new \DOMDocument("1.0", "utf-8");
        $content = $dom->createElement("content", $this->getContent());
        $dom->appendChild($content);
        $xmlFactory = new XMLFactory();


        $this->assertEquals($xmlFactory->createMessage($this->getContent())->getContent(), $dom->saveXML());
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }
}
