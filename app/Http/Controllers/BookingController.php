<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Booking;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class BookingController extends Controller
{
    //
    public function reservas()
    {
        return view('reserva.reserva'); 
    }
    public function nosotros()
    {
        return view('nosotros.nosotros'); 
    }

    public function nuevaReserva(Request $request){
        $habitaciones = Room::where('estado',0)->count();
        if($habitaciones == 0){
        $mensaje = 'No hay habitaciones disponibles';
        return view('inicio')->with('mensaje',$mensaje);
        }
        else {
            $reserva = new Booking;
            $reserva->cantidad = '5';
            $reserva->monto = '200';
            $reserva->save();
            $mensaje = 'Su reserva ha sido exitosa';

            $habitacion = Room::where('id',"$request->id")->first();
            $habitacion->estado = 1;
            $habitacion->save();
            return view('inicio')->with('mensaje',$mensaje);
        }
    }
    
}
