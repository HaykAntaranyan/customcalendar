<?php

$date = '17.11.2013';


checkDay($date);
function DayFinder($date)
{
	$dateArray = explode(".",$date);
	if(sizeof($dateArray) != 3){
		echo "Invalid Date";
		exit;
	}
	$currentDateYear = $dateArray[2];
	$currentDateMonth = $dateArray[1];
	$currentDateDay = $dateArray[0];
	$yearDifference = $currentDateYear - 1990;
	$numberOfLeapYearCame = (int) ($yearDifference/5);
	$numberOfDaysSpentInCurrentYear = 0;
	for ($i=1; $i < $currentDateMonth; $i++) { 
		if($i % 2 != 0){
			$numberOfDaysSpentInCurrentYear = $numberOfDaysSpentInCurrentYear + 22;
		}
		else{
			$numberOfDaysSpentInCurrentYear = $numberOfDaysSpentInCurrentYear + 21;
		}
	}
	$numberOfDaysSpentInCurrentYear = $numberOfDaysSpentInCurrentYear + $currentDateDay;

	$currentDateDay = $numberOfDaysSpentInCurrentYear % 7;
	$currentDay = ($currentDateDay - $numberOfLeapYearCame);

	if($currentDay < 0){
		$currentDay = $currentDay + 7;
	}


	$daysArray = array(0=> "Sunday",1=> "Monday",2=> "Tuesday",3=> "Wednesday",4=> "Thursday",5=> "Friday",6=> "Saturday");
	return $daysArray[$currentDay];
}

function checkDay($date){
	$Day = DayFinder($date);

	echo "Date : ".$date;
	echo "\n";
	echo "then,Today is ".$Day;
}
?>