<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $p1, int $p2) {
        echo "A soma $p1 + $p2 é: ".($p1+$p2);
    }
}
