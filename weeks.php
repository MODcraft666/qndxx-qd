<?php
function gweek($firstDate='1605369600'){
$firstDate=empty($firstDate)?strtotime(date('Y').'-01-01'):(is_numeric($firstDate)?$firstDate:strtotime($firstDate));
//开学第一天的时间戳
list($year,$month,$day)=explode('-',date('Y-n-j',$firstDate));
$time_chuo_of_first_day=mktime(0,0,0,$month,$day,$year);
//今天的时间戳
list($year,$month,$day)=explode('-',date('Y-n-j'));
$time_chuo_of_current_day=mktime(0,0,0,$month,$day,$year);
$zhou=intval(($time_chuo_of_current_day-$time_chuo_of_first_day)/60/60/24/7)+1;
return $zhou;
}
?>