<?php

namespace App\Helpers;


class StringHelper
{
    /**
     * @param string $prefix
     * @param int $length
     * @return string
     */
    public static function generateRandomCode( $prefix = 'GS', $length = 6 )
    {
        $characters = '0123456789';
        $charactersLength = strlen($characters);
        $randomString = $prefix;
        for ( $i = 0 ; $i < $length ; $i++ ) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    /**
     * @param int $number
     * @param int $length
     * @return mixed
     */
    public static function generateProductRandomCode( $number = 0, $length = 6 )
    {
        return self::getLength($number, $length);
    }

    /**
     * @param $number
     * @param $length
     * @return int|string
     */
    public static function getLength( $number, $length )
    {
        $number = !empty($number) ? (int) $number : null;
        if ( !empty($number) ) {
            $newNumber = $number + 1;
            if ( strlen($number) == strlen($length) ) {
                return $newNumber;
            } elseif ( strlen($number) < strlen($length) ) {
                $iLength = $length - $number;
                return str_repeat("0", $iLength) . '' . $newNumber;
            }
        } else {
            return str_repeat("0", $length - 1) . '1';
        }

    }

    /**
     * @param $str
     * @return mixed
     */
    public static function removeStringVn( $str )
    {
        $aCode = [
            'a' => 'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
            'd' => 'đ',
            'e' => 'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
            'i' => 'í|ì|ỉ|ĩ|ị',
            'o' => 'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
            'u' => 'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
            'y' => 'ý|ỳ|ỷ|ỹ|ỵ',
            'A' => 'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
            'D' => 'Đ',
            'E' => 'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
            'I' => 'Í|Ì|Ỉ|Ĩ|Ị',
            'O' => 'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
            'U' => 'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
            'Y' => 'Ý|Ỳ|Ỷ|Ỹ|Ỵ',
        ];

        foreach ( $aCode as $key => $value ) {
            $str = preg_replace("/($value)/i", $key, $str);
        }
       return str_replace(' ', '-', $str);
    }
}
