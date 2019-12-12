<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Creational\AbstractFactory;

class XMLMessage extends AbstractMessage
{
    /**
     * @return string
     */
    public function getContent(): string
    {
        $dom     = new \DOMDocument("1.0", "utf-8");
        $content = $dom->createElement("content", $this->content);
        $dom->appendChild($content);

        return $dom->saveXML();
    }
}
