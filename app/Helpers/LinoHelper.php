<?php 

namespace App\Helpers;

use Illuminate\Support\Str;

class LinoHelper 
{
  
  public static function stripHtmls($str){
    $str = str_replace(['&nbsp', '&nbsp;'], '', $str);
    return strip_tags($str);
  }

  
}