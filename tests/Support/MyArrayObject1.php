<?php declare(strict_types=1);

namespace Tests\Support;

use ArrayObject;

/**
 * @template TKey of int|string
 * @template TValue of mixed
 * @extends ArrayObject<TKey, TValue>
 */
class MyArrayObject1 extends ArrayObject
{
}
