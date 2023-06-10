<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Currency;
use App\Models\Donate;
use Illuminate\Http\Request;

class DonateController extends Controller
{
    public function __invoke()
    {
        $statistics = Donate::query()
            ->select(['currency_id'])
            ->selectRaw("count(*) as 'total_count' ")
            ->selectRaw("sum(amount) as 'sum_amount' ")
            ->selectRaw("avg(amount) as 'avg_amount' ")
            ->selectRaw("min(amount) as 'min_amount' ")
            ->selectRaw("max(amount) as 'max_amount' ")
            ->groupBy('currency_id')
            ->get();

        return view('user.donates.index', ['statistics' => $statistics]);

    }
}
