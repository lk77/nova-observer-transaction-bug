<?php

namespace App\Observers;

use App\Test;

class TestObserver
{
    public function saved(Test $test)
    {
        dd('transation status : ' . (\DB::transactionLevel() > 0 ? 'open' : 'closed'));
    }
}
