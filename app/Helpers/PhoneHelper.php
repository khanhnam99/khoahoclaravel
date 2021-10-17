<?php

namespace App\Helpers;


class PhoneHelper
{

    /**
     * @var string[]
     */
    public static $phone_number = [
        '096' => 'Viettel',
        '097' => 'Viettel',
        '098' => 'Viettel',
        '032' => 'Viettel',
        '033' => 'Viettel',
        '034' => 'Viettel',
        '035' => 'Viettel',
        '036' => 'Viettel',
        '037' => 'Viettel',
        '038' => 'Viettel',
        '039' => 'Viettel',

        '090' => 'Mobifone',
        '093' => 'Mobifone',
        '070' => 'Mobifone',
        '071' => 'Mobifone',
        '072' => 'Mobifone',
        '076' => 'Mobifone',
        '078' => 'Mobifone',

        '091' => 'Vinaphone',
        '094' => 'Vinaphone',
        '083' => 'Vinaphone',
        '084' => 'Vinaphone',
        '085' => 'Vinaphone',
        '087' => 'Vinaphone',
        '089' => 'Vinaphone',

        '099' => 'Gmobile',

        '092' => 'Vietnamobile',
        '056' => 'Vietnamobile',
        '058' => 'Vietnamobile',

        '095' => 'SFone'
    ];

    /**
     * @param $needle
     * @param $haystack
     * @return bool
     */
    public static function start_with( $needle, $haystack )
    {
        $length = strlen($needle);
        return ( substr($haystack, 0, $length) === $needle );
    }

    /**
     * @param $number
     * @return bool|string
     */
    public static function detect_phone( $number )
    {
        $number = str_replace(array('-', '.', ' '), '', $number);
        if ( !preg_match('/^0[0-9]{9,10}$/', $number) ) return false;

        $start_numbers = array_keys(self::$phone_number);
        foreach ( $start_numbers as $start_number ) {
            if ( self::start_with($start_number, $number) ) {
                return self::$phone_number[$start_number];
            }
        }

        return false;
    }
}
