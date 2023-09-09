@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="font-size:17px">{{ __('Hoşgeldiniz') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h5 style="text-align: center;color:green;margin:10px "><strong>Başarıyla Giriş Yaptınız
                                !</strong></h5>
                    </div>
                    <div class="row" style="margin:15px">
                        <div class="col-md-6" style="text-align:center;margin-bottom:15px">
                            <a style="color:black;font-size:16px;" href="{{ route('admin.index') }}">ADMİN
                                PANELİ</a>

                        </div>
                        <div class="col-md-6" style="text-align:center">
                            <a style="color:black;font-size:16px" href="{{ route('front.index') }}">ANASAYFA</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
