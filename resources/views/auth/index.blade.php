{{-- resources/views/auth/index.blade.php --}}
@extends('auth')
@section('content')
                <?php $user = Auth::user() ?>
                <div class="container">
                    こんにちはは {{ $user['name'] }} さん
                    </div>
                </div>
                <div class="container">
                    <!-- table -->
                    <table class="table table-striped">

                    <!-- loop -->
                    @foreach($bookinginfos as $bookinginfo)
                    <tr>
                    <td>
                        <a href="{{ url('home', $bookinginfo->orderId) }}" target="_blank">
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
                    </table>
                <!-- page control -->
                {!! $bookinginfos->render() !!}
@endsection

