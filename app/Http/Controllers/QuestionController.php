<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function building()
    {
        return "建物です";
    }
    public function room($room = 000)
    {
        return "部屋番号は".$room."です";
    }
}
