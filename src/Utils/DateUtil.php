<?php namespace YellowEyes\Fin\Utils;

use DateTime;

class DateUtil
{
    public static function months($mo=null):string
    {
        $months  = ['01','02','03','04','05','06','07','08','09','10','11','12'];
        $today   = new DateTime();
        $month   = $today->format('m');
        $options = implode('',array_map(function($m)use($month,$mo){
            $selected = ($m===$month and !$mo or str_pad($mo,2,'0',STR_PAD_LEFT)===$m)?'selected':'';
            return "<option value=\"$m\" $selected>$m</option>";
        },$months));
        return $options;
    }

    public static function years($y=null):string
    {
        $today = new DateTime();
        $years = new DateTime();
        $years->modify('-1 year');
        $options = '';
        for ($i=1; $i <= 3; $i++) { 
            $year     = $years->format('Y');
            $selected = ($year===$today->format('Y') and !$y or $y===$year)?'selected':'';
            $options.="<option value=\"$year\" $selected>$year</option>";
            $years->modify('1 year');
        }
        return $options;
    }
}