<?php

namespace App;

use Carbon\Carbon;

class Helper
{
     /**
     * Write code on Method
     *
     * @return response()
     */
    public static function ymdTomdY($date)
    {
        return Carbon::parse($date)->format('m/d/Y'); 
    } 
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public static function mdYToymd($date)
    {
        return Carbon::parse($date)->format('Y-m-d'); 
    }
}
