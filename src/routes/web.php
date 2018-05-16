<?php
/**
 * Created by PhpStorm.
 * User: HungDV
 * Date: 5/16/2018
 * Time: 9:34 AM
 */

Route::get('timezones/{timezone?}',
    'laraveldaily\timezones\TimezonesController@index');