<?php

/*
 * This file is part of Respect/Validation.
 *
 * (c) Alexandre Gomes Gaigalas <alexandre@gaigalas.net>
 *
 * For the full copyright and license information, please view the "LICENSE.md"
 * file that was distributed with this source code.
 */

namespace Respect\Validation\Exceptions;

use IteratorAggregate;

interface NestedValidationExceptionInterface extends IteratorAggregate, ValidationExceptionInterface
{
    public function findMessages(array $paths);
    public function getMessages();
    public function getFullMessage();
}
