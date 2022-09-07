<?php

# __construct (datetime string, timezone)
# valid string are like string to time function susch as, 'tommorrow', 'next tuesday', 'last day of month', tomorrow noon, 10/10/2022 7:00

// $dateTime = new DateTime(); //"2022-09-06 12:13:51"
// $dateTime = new DateTime('tomorrow'); //"2022-09-07 00:00:00"
// $dateTime = new DateTime('tomorrow'); //"2022-09-07 00:00:00"
// $dateTime = new DateTime('tomorrow 3:35 pm'); //"2022-09-07 15:35:00"
// $dateTime = new DateTime('10/15/2021 3:35 pm'); //"2021-10-15 15:35:00"


# timezone

// $dateTime = new DateTime('05/12/2022 3:30PM');

// echo $dateTime->format('m/d/Y g:i A') . PHP_EOL; //05/12/2022 3:30 PM

// $dateTime->setTimezone(new DateTimeZone('Asia/Dhaka'));

// echo $dateTime->getTimezone()->getName() . ' - ' . $dateTime->format('m/d/Y g:i A') . PHP_EOL; //Asia/Dhaka - 05/12/2022 9:30 PM
