<?php

if (!function_exists('activeMenu')) {
    /**
     * Generate a dynamic active menu of current route.
     *
     * @param string $currentRouteName
     * @param string $requestName
     *
     * @return string or null
     */
    function activeMenu($currentRouteName, $requestName)
    {
        $start  = 0;
        $finish = strlen($requestName) + 1;

        if (substr($currentRouteName, $start, $finish) == $requestName) {
            return 'active';
        }

        return null;
    }
}

if (!function_exists('dateID')) {
    /**
     * Generate a custom date format for Indonesian time
     *
     * @param string $date
     * @param string $printDay
     * Set true to display current day name, default is false
     * @see http://jagowebdev.com/format-tanggal-indonesia-dengan-php/ For full explanation of this function
     * @return string
     */
    function dateID($date, $printDay = false)
    {
        $day = array(1 => 'Senin',
            'Selasa',
            'Rabu',
            'Kamis',
            'Jumat',
            'Sabtu',
            'Minggu',
        );

        $month = array(1 => 'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember',
        );

        $dateFormat = date('Y-m-d', strtotime($date));

        $split    = explode('-', $dateFormat);
        $date_id = $split[2] . ' ' . $month[(int) $split[1]] . ' ' . $split[0];

        if ($printDay) {
            $num = date('N', strtotime($dateFormat));
            return $day[$num] . ', ' . $date_id;
        }

        return $date_id;
    }
}
