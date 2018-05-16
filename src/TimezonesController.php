<?php
/**
 * Created by PhpStorm.
 * User: HungDV
 * Date: 5/16/2018
 * Time: 9:34 AM
 */

namespace HungDangNtq\Timezones;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class TimezonesController extends Controller
{

    public function index($timezone)
    {
        $current_time = ($timezone)
            ? Carbon::now(str_replace('-', '/', $timezone))
            : Carbon::now();
        return view('timezones::time', compact('current_time'));
    }

}