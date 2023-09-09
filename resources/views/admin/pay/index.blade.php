@extends('admin.core.head')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <div class="row">
                                <div class="col-lg-10 ">
                                    <h6 class="text-white text-capitalize ps-3">ALINAN ÖDEMELER <br>
                                    </h6>


                                </div>
                                <div class="col-lg-2 ">

                                    <a class="text-black border border-light p-2 ms-2 rounded-pill bg-white fw-bold "
                                        href="{{ route('admin.pay.create') }}">Ödeme Ekle</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-6 ms-3">

                            <small class="p-1 rounded-2 fw-bold" style="background-color: #D81B60;color:#fff">MÜŞTERİNİN
                                TÜM
                                ÖDEMELERİNİ GÖRMEK
                                İÇİN İSMİNE
                                TIKLAYIN</small>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">

                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                            Ad - Soyad</th>
                                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">
                                            Ödenen Ücret</th>
                                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">
                                            Ödeme Tarihi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pays as $key => $pay)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-3 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a
                                                            href="{{ route('admin.pay.detail', [App\Models\Customer::getField($pay['cusid'], 'id')]) }}">
                                                            <h6 class="mb-0 text-md">
                                                                {{ App\Models\Customer::getField($pay['cusid'], 'name') }}
                                                            </h6>
                                                        </a>
                                                        {{-- <p class="text-xs text-secondary mb-0">{{ $value['email'] }} </p> --}}
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-sm  font-weight-bold mb-0">
                                                    {{ $pay['pay'] }}
                                                    TL
                                                </p>
                                            </td>
                                            <td>
                                                <p class="text-sm  font-weight-bold mb-0">
                                                    {{ App\Models\pay::explodeDate($pay['id']) }}

                                                </p>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
