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
                                    <h6 class="text-white text-capitalize ps-3">NOTLAR <br>
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
                                            Not</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($notebook as $key => $note)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-3 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <a
                                                            href="{{ route('admin.notebook.edit', [App\Models\Customer::getField($note['cusid'], 'id')]) }}">
                                                            <h6 class="mb-0 text-md">
                                                                {{ App\Models\Customer::getField($note['cusid'], 'name') }}
                                                            </h6>
                                                        </a>
                                                        {{-- <p class="text-xs text-secondary mb-0">{{ $value['email'] }} </p> --}}
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a
                                                    href="{{ route('admin.notebook.edit', [App\Models\Customer::getField($note['cusid'], 'id')]) }}">

                                                    <p class="text-sm  font-weight-bold mb-0">
                                                        {{ Str::limit($note['note'], 25) }}

                                                    </p>
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
