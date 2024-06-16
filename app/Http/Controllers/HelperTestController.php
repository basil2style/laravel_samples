<?php

namespace App\Http\Controllers;

use App\Helper;
use Illuminate\Http\Request;

class HelperTestController extends Controller
{
    public function index() {
        $newDate = Helper::ymdTomdY('2024-03-16');
        $newDate2 = Helper::mdYToymd('03/16/2024');

        dd($newDate, $newDate2);
    }
}
