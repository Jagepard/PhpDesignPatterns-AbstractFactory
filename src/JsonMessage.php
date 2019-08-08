<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Creational\AbstractFactory;

class JsonMessage extends AbstractMessage
{
    /**
     * @return string
     */
    public function getContent(): string
    {
        return \json_encode($this->content);
    }
}
