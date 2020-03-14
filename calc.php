<?php
$date = $_POST['date'];
$sumDep = $_POST['sumDeposit'];
$timeDep = $_POST['timeDeposit'];
$deposit = $_POST['deposit'];
$summaAdd = $_POST['depReplAmount'];
$percent = 10;

if($deposit=='false')
    $summaAdd = 0;

$percent = 10;
$psumma = $sumDep + (($sumDep/100)*10)*$timeDep;

try {
    $date = new DateTime($date);
} catch (Exception $e) {

}

$daysn = cal_days_in_month(CAL_GREGORIAN, $date->format('m'), $date->format('y'));
$daysy = date('L')?366:365;

$summa = $psumma + ($psumma+$summaAdd)*$daysn*(10/$daysy);
echo number_format($summa,0,'',' ')." руб.";
