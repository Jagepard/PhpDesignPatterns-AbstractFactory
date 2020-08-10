<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Creational\AbstractFactory\Tests;

use Creational\{AbstractFactory\XMLFactory, AbstractFactory\JsonFactory};
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

class AbstractFactoryTest extends PHPUnit_Framework_TestCase
{
    private string $content = "Message";

    public function testJson()
    {
        $content = \json_encode(['content' => $this->content]);

        $this->assertEquals((new JsonFactory())->createMessage($this->content)->getContent(), $content);
    }

    public function testXML()
    {
        $dom = new \DOMDocument("1.0", "utf-8");
        $content = $dom->createElement("content", $this->content);
        $dom->appendChild($content);
        $xmlFactory = new XMLFactory();

        $this->assertEquals($xmlFactory->createMessage($this->content)->getContent(), $dom->saveXML());
    }
}
