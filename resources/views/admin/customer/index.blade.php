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
                                    <h6 class="text-white text-capitalize ps-3">MÜKELLEF LİSTESİ
                                    </h6>
                                </div>
                                <div class="col-lg-2 ">

                                    <a class="text-black border border-light p-2 ms-2 rounded-pill bg-white fw-bold "
                                        href="{{ route('admin.customer.create') }}">Mükellef Ekle</a>
                                </div>
                            </div>
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
                                            Defter Türü</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                            Telefon Numarası</th>

                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($customer as $key => $value)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-3 py-1">

                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a href="{{ route('admin.customer.detail', [$value['id']]) }}">
                                                            <h6 class="mb-0 text-md">{{ $value['name'] }} </h6>
                                                        </a>
                                                        {{-- <p class="text-xs text-secondary mb-0">{{ $value['email'] }} </p> --}}
                                                    </div>
                                                </div>
                                            </td>
                                            <td>

                                                <p class="text-xs font-weight-bold mb-0">
                                                    @if ($value['level'] == 1)
                                                        Şirket
                                                    @elseif ($value['level'] == 2)
                                                        İşletme Defteri
                                                    @elseif ($value['level'] == 3)
                                                        Basit Usul
                                                    @else
                                                        Serbest Meslek
                                                    @endif
                                                </p>
                                            </td>
                                            <td class="align-middle text-center text-sm  ">
                                                <span><a class="text-primary"
                                                        href="tel:{{ $value['telephone'] }}">{{ $value['telephone'] }}
                                                    </a> </span>
                                            </td>

                                            <td class="align-middle">
                                                <a href="{{ route('admin.customer.edit', [$value['id']]) }}"
                                                    class="text-secondary font-weight-bold text-sm" data-toggle="tooltip"
                                                    data-original-title="Edit user">
                                                    Düzenle
                                                </a>
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
