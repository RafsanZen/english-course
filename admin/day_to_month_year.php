<?php		
    $convert = '5000'; // days you want to convert

    $years = ($convert / 365) ; // days / 365 days
    $years = floor($years); //

    $month = ($convert % 365) / 30; //
    $month = floor($month); //

    $days = ($convert % 365) % 30; // the rest of days

    // Echo all information set
    echo 'DAYS RECEIVE : '.$convert.' days<br>';
    echo $years.' years - '.$month.' month - '.$days.' days';
?>