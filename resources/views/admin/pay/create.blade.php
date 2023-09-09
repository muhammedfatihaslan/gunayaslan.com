@extends('admin.core.head')
@section('content')
    <div class="row container">
        <div class="col-lg-12 col-md-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-5 ">ÖDEME EKLE</h6>
                    </div>
                </div>
                <div class="row container">
                    <div class="col-lg-12 mx-3 ">
                        <form method="POST" action="{{ route('admin.pay.store') }}">
                            {{ @csrf_field() }}
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <div class="input-group input-group-static mb-4">
                                        <label for="exampleFormControlSelect1" class="ms-0">Müşteri Seçiniz</label>
                                        <select class="form-control" name="cusid" id="exampleFormControlSelect1">
                                            @foreach ($customer as $key => $cust)
                                                <option value="{{ $cust['id'] }}">{{ $cust['name'] }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group input-group-outline  my-3">
                                        <label class="form-label">Ödeme Miktarı</label>
                                        <input type="text" name="pay" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Açıklama (İsteğe Bağlı) </label>
                                        <input type="text" name="description" class="form-control">
                                    </div>
                                </div>

                            </div>

                            <button type="submit" class="my-3">Ödeme Ekle</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
