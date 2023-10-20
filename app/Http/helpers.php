<?php
use Carbon\Carbon;
/* use Collator; */
/**
 *
 * Dates
 *
*/

function getAge($birthday) {
	$birthday = $birthday . ' 00:00:00';

	return Carbon::parse($birthday)->age;
}

function getSchedule($start, $end, $turn) {
	$start = Carbon::parse($start)->format('H:i');
	$end = Carbon::parse($end)->format('H:i');

	return $start . ' - ' . $end . ' (' . $turn . ' - Lunes a Viernes)';
}

function getYear($date) {
	return Carbon::parse($date)->format('Y');
}

function getBirthDate($date) {
	return Carbon::parse($date)->format('d/m/Y');
}
function getBirthDateHyphenated($date) {
	return Carbon::parse($date)->format('d-m-Y');
}

function getformatDate($date) {
	return Carbon::parse($date)->format('d/m/Y');
}

function getformatDate2($date) {
	return Carbon::parse($date)->format('Y/m/d');
}

function getDateHumanFormat($date) {
	$fecha = Carbon::parse($date);
	$date = $fecha->locale();

	return $fecha->dayName. ', ' . $fecha->day . ' de ' . $fecha->monthName . ' de ' . $fecha->year;
}
function getDateHumanFormatNoDay($date) {
	$fecha = Carbon::parse($date);
	$date = $fecha->locale();

	return  $fecha->day . ' de ' . $fecha->monthName . ' de ' . $fecha->year;
}


