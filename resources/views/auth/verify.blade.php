@extends('layouts.app')
@extends('layouts.header1')


@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/verify.css') }}">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                

                <div class="card-body">
                <p class="verifikasi" style="text-align:center"> Verifikasi Email Anda </p>
                <img  class= "email" style="display:block; margin:auto;"  src="{{ ('/img/email.png ') }}">
                   
                    
                    </br>
                    <p class="verifikasi1" style="text-align:center"> Sebelum melanjutkan, harap periksa email Anda untuk tautan verifikasi. </p>

                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
</br>
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline" style="text-decoration:none; ">
                            <p class="txt-verifikasi"> VERIFIKASI </p>
                        </button>.
                        </br>
                        </br>
                        @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Tautan verifikasi baru telah dikirim ke alamat email Anda.') }}
                        </div>
                    @endif
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
