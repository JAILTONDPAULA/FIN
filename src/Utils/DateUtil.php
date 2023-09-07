<?php namespace YellowEyes\Fin\Utils;

use DateTime;

class DateUtil
{
    public static function months():string
    {
        $months  = ['01','02','03','04','05','06','07','08','09','10','11','12'];
        $today   = new DateTime();
        $month   = $today->format('m');
        $options = implode('',array_map(function($m)use($month){
            return "<option value=\"$m\" ".($m===$month?'selected':'').">$m</option>";
        },$months));
        return $options;
    }

    public static function years():string
    {
        $today = new DateTime();
        $years = new DateTime();
        $years->modify('-1 year');
        $options = '';
        for ($i=1; $i <= 3; $i++) { 
            $year    = $years->format('Y');
            $options.="<option value=\"$year\" ".($year===$today->format('Y')?'selected':'').">$year</option>";
            $years->modify('1 year');
        }
        return $options;
    }
}