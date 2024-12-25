<?php declare(strict_types=1);

namespace Tests\Unit\Traits\ValueOrNull;

use Tests\Unit\ValueOrNullTestCase;

class ListOrNullTraitTest extends ValueOrNullTestCase
{
    /**
     * @return void
     */
    public function testIsListOrNull(): void
    {
        $this->checkValueOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsListLenOrNull(): void
    {
        $this->checkValueOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testIsEmptyListOrNull(): void
    {
        $this->checkValueOrNullFunction(__FUNCTION__);
    }
}