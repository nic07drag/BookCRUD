<?php

namespace Nic07drag\BookCRUD\Facades;

use Illuminate\Support\Facades\Facade;

class BookCRUD extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'bookcrud';
    }
}
