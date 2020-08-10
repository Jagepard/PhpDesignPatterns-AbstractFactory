<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Creational\AbstractFactory;

abstract class AbstractMessage
{
    protected string $content;

    public function __construct(string $content)
    {
        $this->content = $content;
    }

    abstract public function getContent(): string;
}
