@extends('admin.core.head')
@section('content')
    <div class="row container">

        <div class="col-lg-12 col-md-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-5 ">HESAP EKLE</h6>
                    </div>
                </div>
                <div class="row container">
                    <div class="col-lg-12 mx-3 ">
                        <form method="POST" action="{{ route('admin.price.update', [$customer[0]['id']]) }}">
                            {{ @csrf_field() }}
                            <div class="row mt-3">
                                <div class="col-md-8">
                                    <div class="input-group input-group-static mb-4">
                                        <label for="exampleFormControlSelect1" class="ms-0">MÜKELLEF SEÇİNİZ</label>
                                        <select class="form-control" name="cusid" id="exampleFormControlSelect1">
                                            <option value="{{ $customer[0]['id'] }}">{{ $customer[0]['name'] }} </option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="input-group input-group-outline my-3">
                                        <label class="me-3">Ay Sayısını Seçiniz :</label>

                                        <select name="month">
                                            @for ($i = 12; $i > 0; $i--)
                                                <option value="{{ $i }}">{{ $i }} </option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group input-group-outline my-3">
                                        <label class="me-3">Aylık Ücret:</label>
                                        <input type="text" value="{{ $price[0]['priceofmonth'] }}" name="priceofmonth"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="my-3">Güncelle</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
