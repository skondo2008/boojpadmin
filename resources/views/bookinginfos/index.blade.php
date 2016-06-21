<!-- resouces/views/bookinginfos/index.blade.php -->
 
@extends('layout')
 
@section('content')
    <h1>bookinginfos</h1>
 
    <hr/>
    <!-- table -->
    <table class="table table-striped">

    <!-- loop -->
    @foreach($bookinginfos as $bookinginfo)
        <tr>
            <td>
                <a href="{{ url('bookinginfos', $bookinginfo->orderId) }}">
                    {{ $bookinginfo->orderId }}
                </a>
            </td>
            <td>
                {{ $bookinginfo->resalerCd }}
            </td>
            <td>
                {{ $bookinginfo->resalerOrderNum }}
            </td>
            <td>
                {{ $bookinginfo->resalarHotelId }}
            </td>
            <td>
                {{ $bookinginfo->providerCd }}
            </td>
            <td>
                {{ $bookinginfo->bookingRef }}
            </td>
            <td>
                {{ $bookinginfo->totalPrice }}
            </td>
            <td>
                {{ $bookinginfo->checkin }}
            </td>
            <td>
                {{ $bookinginfo->checkout }}
            </td>
        </tr>
    @endforeach
    
    <!-- page control -->
    {!! $bookinginfos->render() !!}
    
@endsection

