<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\BookingInfo;

class BookingInfosController extends Controller
{
    public function index() {
        //$bookinginfos = BookingInfo::all();
        //$bookinginfos = DB::table('BookingInfo')->orderBy('orderId', 'desc')->get();
        $bookinginfos = DB::table('BookingInfo')->orderBy('orderId', 'desc')->paginate(20);
        return view('bookinginfos.index', compact('bookinginfos'));
    }
    public function show($id) {
        //$bookinginfo = BookingInfo::findOrFail($id);    //BookingInBookingInfo::findOrFail($id);
        $bookinginfo = DB::table('BookingInfo')->where('orderId', $id)->get()[0];
        //$bookinginfo = DB::table('BookingInfo')->get();
        return view('bookinginfos.show', compact('bookinginfo'));
    }
}
