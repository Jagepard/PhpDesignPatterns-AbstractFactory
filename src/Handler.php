<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Creational\AbstractFactory;

/**
 * Class Handler
 * @package Creational\AbstractFactory
 */
class Handler
{

    /**
     * @param AbstractFactory $factory
     * @param string          $content
     * @return string
     */
    public function getMessage(AbstractFactory $factory, string $content)
    {
        return $factory->createMessage($content)->getContent();
    }
}
