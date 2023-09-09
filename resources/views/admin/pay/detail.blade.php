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
                                    <h6 class="text-white text-capitalize ps-3">
                                        {{ $customer[0]['name'] }} <br>
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

                                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">
                                            Alınan Ücret</th>
                                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">
                                            Ödeme Tarihi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (App\Models\pay::where('cusid', $customer[0]['id'])->get() as $key => $pay)
                                        <tr>

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
