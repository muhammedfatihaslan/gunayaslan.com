@extends('admin.core.head')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <div class="row">
                                <div class="col-lg-12 ">
                                    <h6 class="text-white text-capitalize ps-3">AYLIK ÜCRET TANIMLAMA
                                    </h6>
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
                                            Aylık Ücret</th>
                                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">
                                            Yıllık Ücret</th>


                                        <th class="text-secondary opacity-7"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($customer as $key => $cust)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-3 py-1">

                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-md">{{ $cust['name'] }} </h6>
                                                        <p class="text-xs text-secondary mb-0">
                                                            @if ($cust['level'] == 1)
                                                                Şirket
                                                            @elseif($cust['level'] == 2)
                                                                İşletme Defteri
                                                            @elseif($cust['level'] == 3)
                                                                Basit Usul
                                                            @else
                                                                Serbest Meslek
                                                            @endif
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>

                                            @if (!empty(App\Models\price::getField('cusid', $cust['id'], 'priceofmonth')))
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">
                                                        {{ App\Models\price::getField('cusid', $cust['id'], 'priceofmonth') }}
                                                        TL
                                                    </p>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">
                                                        {{ App\Models\price::getField('cusid', $cust['id'], 'result') }} TL
                                                    </p>
                                                </td>
                                            @else
                                                <td>
                                                    <p class="text-sm text-danger font-weight-bold mb-0">
                                                        Ücret Girilmedi
                                                    </p>
                                                </td>
                                                <td>
                                                    <p class="text-sm font-weight-bold mb-0 text-danger">
                                                        Ücret Hesaplanamadı
                                                    </p>
                                                </td>
                                            @endif



                                            @if (!is_null(App\Models\price::getField('cusid', $cust['id'], 'priceofmonth')))
                                                <td class="align-middle">
                                                    <a href="{{ route('admin.price.edit', [$cust['id']]) }}"
                                                        class="text-secondary font-weight-bold text-sm"
                                                        data-toggle="tooltip" data-original-title="Edit user">
                                                        Düzenle
                                                    </a>
                                                </td>
                                            @else
                                                <td class="align-middle">
                                                    <a href="{{ route('admin.price.create', ['id' => $cust['id']]) }}"
                                                        class="text-secondary font-weight-bold text-sm"
                                                        data-toggle="tooltip" data-original-title="Edit user">
                                                        Ekle
                                                    </a>
                                                </td>
                                            @endif
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
