<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$results = DB::select('select * from forge.BookingInfo where resalerCd = ?', [1]);
        //
        $user = $request->user();
        $user_name = $user['name'];
        if( $user_name == 'BOOKJP'){
            $bookinginfos = DB::table('BookingInfo')->orderBy('orderId', 'desc')->paginate(20);
        }else{
            $bookinginfos = DB::table('BookingInfo')->where('resalerCd', $user_name)->orderBy('orderId', 'desc')->paginate(20);
        }
        return view('auth.index', compact('bookinginfos', 'user_name'));
        //
        //return view('auth.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$bookinginfo = BookingInfo::findOrFail($id);    //BookingInBookingInfo::findOrFail($id);
        $bookinginfo = DB::table('BookingInfo')->where('orderId', $id)->get()[0];
        //$bookinginfo = DB::table('BookingInfo')->get();
        return view('bookinginfos.show', compact('bookinginfo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
