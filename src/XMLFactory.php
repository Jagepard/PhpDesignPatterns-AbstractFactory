<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Creational\AbstractFactory;

class XMLFactory extends AbstractFactory
{
    /**
     * @param string $content
     * @return AbstractMessage
     */
    public function createMessage(string $content): AbstractMessage
    {
        return new XMLMessage($content);
    }
}
