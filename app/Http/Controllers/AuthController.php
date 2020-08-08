<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            "NIS" => "3103118006",
            "Name" => "Ajeng Ruswanti",
            "Gender" => "Perempuan",
            "Phone" => "088216793001",
            "Class" => "XII RPL 1"
        ];
    }
}
