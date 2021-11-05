<?php

namespace Joe\Promotion;

use Illuminate\Support\Collection;

class Composer{
    public function test()
    {
       return Collection::make([2,3,4])->toArray();
    }
}