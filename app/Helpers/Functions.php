<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Storage;

class Functions {
    public static function getValidatorMessage($validator) {
        $message = "";
        foreach ($validator->messages()->all() as $item => $value) {
            $message .= $message == "" ? $value : "\n$value";
        }
        return $message;
    }

    public static function convertBase64ToFile($file) {
        return base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $file));
    }

    public static function createFileName($extension = 'jpg') {
        return "ventasg_" . date("Ymd_His_") .
            preg_replace("([^A-Za-z0-9.])", "", 'file.' . $extension);
    }

    public static function storeFile($base64File, $extension, $path) {
        $fileName = self::createFileName($extension);
        $file = self::convertBase64ToFile($base64File);
        Storage::disk("local")->put("public/$path/$fileName", $file);
        return $fileName;
    }

    public static function generateRandomCode() {
        $code = [];
        for ($x = 1; $x < 5; $x++) {
            $random = rand(0, 9);
            array_push($code, $random);
        }
        return implode("", $code);
    }
}