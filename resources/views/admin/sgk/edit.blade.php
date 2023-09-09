@extends('admin.core.head')
@section('content')
    <div class="row container">
        <div class="col-lg-12 col-md-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-5 ">GİB DÜZENLE</h6>
                    </div>
                </div>
                <div class="row container">
                    <div class="col-lg-12 mx-3 ">
                        <form method="POST" action="{{ route('admin.sgk.update') }}">
                            {{ @csrf_field() }}

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group input-group-outline my-3">
                                        <label class="form-label">{{ $customer[0]['name'] }} </label>
                                        <input type="text" disabled class="form-control">
                                        <input name="cusid" type="hidden" value="{{ $customer[0]['id'] }}">
                                    </div>
                                </div>
                            </div>
                            @if (!empty($sgk[0]['cuscode']))
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-group input-group-outline is-valid my-3">
                                            <input type="text" value="{{ $sgk[0]['workplacecode'] }}"
                                                name="workplacecode" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-group input-group-outline is-valid my-3">
                                            <input type="text" value="{{ $sgk[0]['cuscode'] }}" name="cuscode"
                                                class="form-control">
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-group input-group-outline is-valid my-3">
                                            <input type="text" value="{{ $sgk[0]['password'] }}" name="password"
                                                class="form-control">
                                        </div>
                                    </div>

                                </div>
                            @else
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-group input-group-outline my-3">
                                            <label class="form-label">Kullanıcı Adı</label>
                                            <input type="text" name="workplacecode" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-group input-group-outline  my-3">
                                            <label class="form-label">Sistem Şifresi</label>
                                            <input type="text" name="cuscode" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-group input-group-outline  my-3">
                                            <label class="form-label">İşyeri Şifresi</label>
                                            <input type="text" name="password" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            @endif
                            <button type="submit" class="my-3">Düzenle</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
