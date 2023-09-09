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

                                    {{-- <a class="text-black border border-light p-2 ms-2 rounded-pill bg-white fw-bold "
                                        href="{{ route('admin.customer.create') }}">Mükellef Ekle</a> --}}
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
                                        {{-- <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">
                                            Şifreler</th> --}}
                                        <th
                                            class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                            Toplam Borç </th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                            Telefon</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                            Ödeme </th>


                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>
                                            <div class="d-flex px-3 py-1">

                                                <div class="d-flex flex-column justify-content-center">
                                                    <a href="{{ route('admin.customer.detail', [$customer[0]['id']]) }}">
                                                        <h6 class="mb-0 text-md">{{ Str::upper($customer[0]['name']) }}
                                                            <a
                                                                href="{{ route('admin.notebook.edit', [$customer[0]['id']]) }}"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" fill="currentColor"
                                                                    class="bi bi-journal-text" viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                                                                    <path
                                                                        d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                                                                    <path
                                                                        d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                                                                </svg></a>
                                                        </h6>
                                                    </a>
                                                    <p class="text-xs text-secondary mb-0 fw-bold">
                                                        @if ($customer[0]['level'] == 1)
                                                            Şirket
                                                        @elseif ($customer[0]['level'] == 2)
                                                            İşletme Defteri
                                                        @elseif ($customer[0]['level'] == 3)
                                                            Basit Usul
                                                        @else
                                                            Serbest Meslek
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        {{-- <td>
                                            <p class="text-sm font-weight-bold mb-0 ">
                                                <a class="me-3 text-success" href="">GİB</a>
                                                <a class="ms-3 text-info" href="">SGK</a>
                                            </p>
                                        </td> --}}
                                        <td class="align-middle text-center text-sm  ">
                                            {{ App\Models\price::getField('cusid', $customer[0]['id'], 'result') }} TL
                                        </td>
                                        <td class="align-middle text-center text-sm  ">
                                            <span><a class="text-primary"
                                                    href="tel:{{ $customer[0]['telephone'] }}">{{ $customer[0]['telephone'] }}
                                                </a> </span>
                                        </td>

                                        <td class="align-middle text-center text-sm">
                                            <a href="{{ route('admin.pay.createid', [$customer[0]['id']]) }}"
                                                class="text-secondary font-weight-bold text-sm" data-toggle="tooltip"
                                                data-original-title="Edit user">
                                                Ödeme Ekle
                                            </a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
