{{-- resources/views/auth/index.blade.php --}}
@extends('auth')
@section('content')
                <div class="page-header">
                    <div class="container">
                        <h2>Dashboard</h2>
                    </div>
                </div>
                <?php $user = Auth::user() ?>
                <div class="container">
                    こんにちは {{ $user['name'] }} さん
                    </div>
                </div>
@endsection