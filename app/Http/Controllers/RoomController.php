<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class RoomController extends Controller
{
    public function habitaciones(){
        return view('habitacion.habitacion');
    }
}
