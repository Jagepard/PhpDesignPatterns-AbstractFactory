<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Creational\AbstractFactory;

class XMLMessage extends MessageFactory
{
    public function createMessage(string $content): string
    {
        $dom     = new \DOMDocument("1.0", "utf-8");
        $content = $dom->createElement("content", $content);
        $dom->appendChild($content);

        return $dom->saveXML();
    }
}
