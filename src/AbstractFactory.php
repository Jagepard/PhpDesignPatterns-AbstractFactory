<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Creational\AbstractFactory;

/**
 * Interface InterfaceAbstractFactory
 * @package Creational\AbstractFactory
 */
abstract class AbstractFactory
{

    /**
     * @param string $content
     * @return AbstractMessage
     */
    abstract public function createMessage(string $content): AbstractMessage;
}
