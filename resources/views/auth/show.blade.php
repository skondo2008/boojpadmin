<!-- resouces/views/home/show.blade.php -->
@extends('auth')

@section('content')
    <h2>{{ $bookinginfo->orderId }}</h2>
 
    <hr/>
    <!-- table -->
    <table class="table table-striped">
    <tr>
        <td>hotelIdbj</td><td>{{ $bookinginfo->hotelIdbj }}</td>
    </tr>
    <tr>
        <td>resalerCd</td><td>{{ $bookinginfo->resalerCd }}</td>
    </tr>
    <tr>
        <td>hotelIdbj</td><td>{{ $bookinginfo->hotelIdbj }}</td>
    </tr>
    <tr>
        <td>resalerOrderNum</td><td>{{ $bookinginfo->resalerOrderNum }}</td>
    </tr>
    <tr>
        <td>resalerCity</td><td>{{ $bookinginfo->resalerCity }}</td>
    </tr>
    <tr>
        <td>resalarHotelId</td><td>{{ $bookinginfo->resalarHotelId }}</td>
    </tr>
    <tr>
        <td>resalerhotelSeq</td><td>{{ $bookinginfo->resalerhotelSeq }}</td>
    </tr>
    <tr>
        <td>resalerhotelSeq</td><td>{{ $bookinginfo->providerCd }}</td>
    </tr>
    <tr>
        <td>providerCity</td><td>{{ $bookinginfo->providerCity }}</td>
    </tr>
    <tr>
        <td>bookingRef</td><td>{{ $bookinginfo->bookingRef }}</td>
    </tr>
    <tr>
        <td>providerHotelId</td><td>{{ $bookinginfo->providerHotelId }}</td>
    </tr>
    <tr>
        <td>payType</td><td>{{ $bookinginfo->payType }}</td>
    </tr>
    <tr>
        <td>status</td><td>{{ $bookinginfo->status }}</td>
    </tr>
    <tr>
        <td>totalPrice</td><td>{{ $bookinginfo->totalPrice }}</td>
    </tr>
    <tr>
        <td>currencyCode</td><td>{{ $bookinginfo->currencyCode }}</td>
    </tr>
    <tr>
        <td>rmbPrice</td><td>{{ $bookinginfo->rmbPrice }}</td>
    </tr>
    <tr>
        <td>hotelAddress</td><td>{{ $bookinginfo->hotelAddress }}</td>
    </tr>
    <tr>
        <td>cityName</td><td>{{ $bookinginfo->cityName }}</td>
    </tr>
    <tr>
        <td>hotelPhone</td><td>{{ $bookinginfo->hotelPhone }}</td>
    </tr>
    <tr>
        <td>orderDate</td><td>{{ $bookinginfo->orderDate }}</td>
    </tr>
    <tr>
        <td>contactName</td><td>{{ $bookinginfo->contactName }}</td>
    </tr>
    <tr>
        <td>contactPhone</td><td>{{ $bookinginfo->contactPhone }}</td>
    </tr>
    <tr>
        <td>contactEmail</td><td>{{ $bookinginfo->contactEmail }}</td>
    </tr>
    <tr>
        <td>customerIp</td><td>{{ $bookinginfo->customerIp }}</td>
    </tr>
    <tr>
        <td>invoiceCode</td><td>{{ $bookinginfo->invoiceCode }}</td>
    </tr>
    <tr>
        <td>customerArriveTime</td><td>{{ $bookinginfo->customerArriveTime }}</td>
    </tr>
    <tr>
        <td>instantConfirm</td><td>{{ $bookinginfo->instantConfirm }}</td>
    </tr>
    <tr>
        <td>specialRemarks</td><td>{{ $bookinginfo->specialRemarks }}</td>
    </tr>
    <tr>
        <td>resalarRoomId</td><td>{{ $bookinginfo->resalarRoomId }}</td>
    </tr>
    <tr>
        <td>prices</td><td>{{ $bookinginfo->prices }}</td>
    </tr>
    <tr>
        <td>roomRate</td><td>{{ $bookinginfo->roomRate }}</td>
    </tr>
    <tr>
        <td>taxAndFee</td><td>{{ $bookinginfo->taxAndFee }}</td>
    </tr>
    <tr>
        <td>bedChoice</td><td>{{ $bookinginfo->bedChoice }}</td>
    </tr>
    <tr>
        <td>bedChoice</td><td>{{ $bookinginfo->bedChoice }}</td>
    </tr>
</table>
@endsection