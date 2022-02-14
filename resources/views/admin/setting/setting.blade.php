@extends('admin.inc.admin_design')

@section('content')

    <main class="page-content">

        @include('admin.inc._messages')
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="mb-0">Site Settings
                        </h5>
                        <hr>
                        <form action="{{route('settingUpdate', $setting->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card">
                                <div class="card-body">
                                    <div class="border p-4 rounded">
                                        <div class="card-title d-flex align-items-center">
                                            <p class="mb-0 text-right"><span class="text-danger">*</span> ARE REQUIRED FIELDS</p>
                                        </div>
                                        <hr/>
                                        <div class="row mb-3">
                                            <label for="email" class="col-sm-3 col-form-label">Website Email <span class="text-danger">*</span></label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="email" name="email" placeholder="Enter Your Company Email" value="{{ $setting->email }}">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="hour" class="col-sm-3 col-form-label">Office hours</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="hour" name="hour" placeholder="Enter Your Company Working Hours" value="{{ $setting->office_hour }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="address" class="col-sm-3 col-form-label">Address</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="address" name="address" placeholder="Enter Your Company Address" value="{{ $setting->address }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="phone" class="col-sm-3 col-form-label">Phone number</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Your Company Phone Number" value="{{ $setting->phone }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="alt" class="col-sm-3 col-form-label">Alternate number</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="alt" name="alt" placeholder="Enter Your Company Additional Number" value="{{ $setting->alt_phone }}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 col-form-label"></label>
                                            <div class="col-sm-9">
                                                <button type="submit" class="btn btn-success px-5">Update Settings</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        </div>

                    </div>
                </div>
        </div><!--end row-->

    </main>

@endsection


