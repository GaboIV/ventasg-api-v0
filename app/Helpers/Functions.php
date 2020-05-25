<?php

namespace App\Helpers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Functions
{
    public static function getValidatorMessage($validator)
    {
        $message = "";
        foreach ($validator->messages()->all() as $item => $value) {
            $message .= $message == "" ? $value : "\n$value";
        }
        return $message;
    }

    public static function getValidatorMessageOneLine($validator)
    {
        $message = "";
        foreach ($validator->messages()->all() as $item => $value) {
            $message .= $message == "" ? $value : " $value";
        }
        return $message;
    }

    public static function convertBase64ToFile($file)
    {
        return base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $file));
    }

    public static function createFileName($extension = 'jpg')
    {
        return "tottus_" . date("Ymd_His.u_") .
            preg_replace("([^A-Za-z0-9.])", "", 'file.' . $extension);
    }

    public static function storeFile($file, $extension, $path)
    {
        $fileName = self::createFileName($extension);
        Storage::put("$path/$fileName", file_get_contents($file));
        return $fileName;
    }

    public static function storeBase64File($base64File, $extension, $path)
    {
        $fileName = self::createFileName($extension);
        $file = self::convertBase64ToFile($base64File);
        Storage::put("$path/$fileName", $file);
        return $fileName;
    }

    public static function getEncodedEmailCode($email)
    {
        $limit_time = Carbon::now()->addMinutes(15);
        return base64_encode("$email|$limit_time");
    }

    public static function getNotificationAntiquity($created_at)
    {
        $time = Carbon::now()->diffInSeconds($created_at);
        $word = "Hace ";
        if ($time < 0) {
            $word = "";
        }

        if ($time < 60) {
            $word .= "$time s";
        } else if ($time > 60 && $time < 3600) {
            $word .= round($time / 60) . " m";
        } else if ($time > 3600 && $time < 86400) {
            $word .= round($time / 3600) . " h";
        } else if ($time > 86400) {
            $word .= round($time / 86400) . " d";
        }
        return $word;
    }

    public static function getGender($pseudoGender)
    {
        $pseudoGender = Str::lower($pseudoGender);
        $gender = $pseudoGender;
        if ($pseudoGender === 'female' || $pseudoGender === 'male') {
            $gender = $pseudoGender;
        }
        if ($pseudoGender === 'f') {
            $gender = 'female';
        } else if ($pseudoGender === 'm') {
            $gender = 'male';
        }
        return $gender;
    }

    public static function getStatus($pseudoStatus)
    {
        $pseudoStatus = trim(Str::lower($pseudoStatus));
        $status = $pseudoStatus;
        if ($pseudoStatus === 'active' || $pseudoStatus === 'inactive') {
            $status = $pseudoStatus;
        }
        if ($pseudoStatus === 'activo') {
            $status = 'active';
        }
        if ($pseudoStatus === 'inactivo') {
            $status = 'inactive';
        }
        return $status;
    }

    public static function convertMonthThree($month) {
        if ($month == '1') return "Enero";
        if ($month == '2') return "Febrero";
        if ($month == '3') return "Marzo";
        if ($month == '4') return "Abril";
        if ($month == '5') return "Mayo";
        if ($month == '6') return "Junio";
        if ($month == '7') return "Julio";
        if ($month == '8') return "Agosto";
        if ($month == '9') return "Septiembre";
        if ($month == '10') return "Octubre";
        if ($month == '11') return "Noviembre";
        if ($month == '12') return "Diciembre";
    }
}
