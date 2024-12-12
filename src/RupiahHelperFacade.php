<?php

namespace Karyasystem\RupiahHelper;

use Illuminate\Support\Facades\Facade;

class RupiahHelperFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'rupiah-helper';
    }
}
