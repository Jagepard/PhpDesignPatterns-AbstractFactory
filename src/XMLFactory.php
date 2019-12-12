<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Creational\AbstractFactory;

class XMLFactory extends AbstractFactory
{
    /**
     * @param  string  $content
     * @return string
     */
    public function createMessage(string $content): string
    {
        $dom = new \DOMDocument("1.0", "utf-8");
        $dom->appendChild($dom->createElement("content", $content));

        return $dom->saveXML();
    }
}
