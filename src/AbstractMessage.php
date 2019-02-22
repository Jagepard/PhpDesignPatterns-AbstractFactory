<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Creational\AbstractFactory;

/**
 * Class AbstractMessage
 * @package Creational\AbstractFactory
 */
abstract class AbstractMessage
{
    /**
     * @var string
     */
    private $content;

    /**
     * AbstractMessage constructor.
     * @param string $content
     */
    public function __construct(string $content)
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    abstract public function getContent(): string;
}
