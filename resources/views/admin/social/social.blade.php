@extends('admin.inc.admin_design')

@section('content')

    <main class="page-content">

        @include('admin.inc._messages')
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h5 class="mb-0">Social Settings
                        </h5>
                        <hr>
                        <form action="{{route('socialUpdate', $social->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card">
                                <div class="card-body">
                                    <div class="border p-4 rounded">
                                        <div class="card-title d-flex align-items-center">
                                            <p class="mb-0 text-right"><span class="text-danger">*</span> ARE REQUIRED FIELDS</p>
                                        </div>
                                        <hr/>
                                        <div class="row mb-3">
                                            <label for="facebook" class="col-sm-3 col-form-label">Facebook </label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Enter Your Facebook URL" value="{{ $social->facebook }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="youtube" class="col-sm-3 col-form-label">Youtube </label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="youtube" name="youtube" placeholder="Enter Your Youtube URL" value="{{ $social->youtube }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="linkedin" class="col-sm-3 col-form-label">LinkedIn </label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="linkedin" name="linkedin" placeholder="Enter Your LinkedIn URL" value="{{ $social->linkedin }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="instagram" class="col-sm-3 col-form-label">Instagram </label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="instagram" name="instagram" placeholder="Enter Your Instagram URL" value="{{ $social->instagram }}">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="twitter" class="col-sm-3 col-form-label">Twitter </label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="twitter" name="twitter" placeholder="Enter Your Twitter URL" value="{{ $social->twitter }}">
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


