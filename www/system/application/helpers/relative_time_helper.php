<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// this function will calculate a friendly date difference string
// based upon $time and how it compares to the current time
// for example it will return "1 minute ago" if the difference
// in seconds is between 60 and 120 seconds
// $time is a GM-based Unix timestamp, this makes for a timezone
// neutral comparison
function relative_time($time) {
    $delta = strtotime(gmdate("Y-m-d H:i:s", time())) - $time;

    if ($delta < 1 * MINUTE) {
        return "Less than a minute";
    }
    if ($delta < 2 * MINUTE) {
        return "A minute ago";
    }
    if ($delta < 45 * MINUTE) {
        return floor($delta / MINUTE) . " minutos ago";
    }
    if ($delta < 90 * MINUTE) {
        return "An hour ago";
    }
    if ($delta < 24 * HOUR) {
        return floor($delta / HOUR) == 1 ? "An hour ago" : floor($delta / HOUR) . " hours ago";
    }
    if ($delta < 48 * HOUR) {
        return "Yesterday";
    }
    if ($delta < 30 * DAY) {
        return floor($delta / DAY) . " days ago";
    }
    if ($delta < 12 * MONTH) {
        $months = floor($delta / DAY / 30);
        return $months <= 1 ? "Last month" : $months . " months ago";
    } else {
        $years = floor($delta / DAY / 365);
        return $years <= 1 ? "Last year" : $years . " years ago";
    }
}

/* End of file relative_time.php */
/* Location: ./system/application/helpers/relative_time.php */