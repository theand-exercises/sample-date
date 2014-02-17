<?php

require 'vendor/autoload.php';

use Carbon\Carbon;

$start = Carbon::createFromDate(2014, 2, 11, 'Asia/Seoul');
$end = Carbon::createFromDate(2013, 12, 20, 'Asia/Seoul');
$day = $start->copy();

setlocale(LC_ALL, 'ko_KR.UTF-8');

while(1){
    $day = $day->subDay();

	if( $day->lt($end) )
		break;

    if( in_array($day->dayOfWeek , [Carbon::SATURDAY, Carbon::SUNDAY]) )
        continue;

	$str = $day->toDateString();
	$weekday = $day->formatLocalized('%a');
	echo "## {$str} ({$weekday})\n\n\n";


}



