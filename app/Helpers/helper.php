<?php

// namespace App\Helpers ;

function send_ms($msg,$status,$code){

   return $res = [
        'status' => $status,
        'message' => $msg,
   ];
    return response()->json($res,$code);
}