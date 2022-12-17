<?php

function shamsi_to_miladi($sh_y, $sh_m, $sh_d , $hour , $minutes , $second ,$mod = '') : string|array
{
    if ($sh_y > 979) {
        $m_y = 1600;
        $sh_y -= 979;
    } else {
        $m_y = 621;
    }

    $days = (365 * $sh_y) + (((int)($sh_y / 33)) * 8) + ((int)((($sh_y % 33) + 3) / 4)) + 78 + $sh_d + (($sh_m < 7) ? ($sh_m - 1) * 31 : (($sh_m - 7) * 30) + 186);
    $m_y += 400 * ((int)($days / 146097));
    $days %= 146097;
    if ($days > 36524) {
        $m_y += 100 * ((int)(--$days / 36524));
        $days %= 36524;
        if ($days >= 365) $days++;
    }
    $m_y += 4 * ((int)(($days) / 1461));
    $days %= 1461;
    $m_y += (int)(($days - 1) / 365);
    if ($days > 365) $days = ($days - 1) % 365;
    $m_d = $days + 1;
    foreach (array(0, 31, ((($m_y % 4 == 0) and ($m_y % 100 != 0)) or ($m_y % 400 == 0)) ? 29 : 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31) as $m_m => $v) {
        if ($m_d <= $v) break;
        $m_d -= $v;
    }

    return ($mod === '') ? array($m_y,$m_m,$m_d) : $m_y . $mod . $m_m . $mod . $m_d;
}



$userData = [ $_REQUEST['year'] , $_REQUEST['month'] , $_REQUEST['day'] , $_REQUEST['hour'] , $_REQUEST['minute'] ];

$dateOfBirth = shamsi_to_miladi( $userData[0] , $userData[1] , $userData[2] , $userData[3] , $userData[4] , 00);

$format = $dateOfBirth[0] ."-". $dateOfBirth[1] ."-". $dateOfBirth[2];
$date = date('y-m-d H:i:s');
$diff = date_diff( date_create($format) , date_create($date) );

echo "You are exactly " .$diff->format('%y'). " years ". $diff->format('%m'). " months ". $diff->format('%d')." days ".
$diff->format('%H'). " hours ". $diff->format('%i'). " minutes and ". $diff->format('%s'). " seconds old :)";

