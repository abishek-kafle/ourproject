@extends('admin.inc.admin_design')

@section('content')
    <!--start content-->
    <main class="page-content">

        <div class="row">
          <div class="col-12 col-lg-12">
            <div class="card shadow-sm border-0">
              <div class="card-body">
                  <h5 class="mb-0">Edit Profile</h5>
                  <hr>
                  <div class="card shadow-none border">
                      @include('admin.inc._messages')
                    <div class="card-body">
                      <form class="row g-3" method="POST" action="{{route('adminProfileUpdate', $adminDetail->id)}}" enctype="multipart/form-data">
                          @csrf
                         <div class="col-6">
                            <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" value="{{$adminDetail->name}}" name="name" id="name">
                         </div>
                         <div class="col-6">
                            <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" value="{{$adminDetail->email}}" name="email" id="email">
                         </div>
                         <div class="col-6">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" value="{{$adminDetail->address}}" name="address" id="address">
                         </div>
                         <div class="col-6">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" value="{{$adminDetail->phone}}" name="phone" id="phone">
                         </div>
                         <div class="col-6">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control" value="" name="image" id="image" accept="image/*">
                         </div>
                         <p>Note: <span class="text-danger">*</span> fields are required.</p>
                         <div class="text-start">
                          <button type="submit" class="btn btn-primary px-4">Update Profile</button>
                        </div>
                      </form>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div><!--end row-->

    </main>
    <!--end page main-->
@endsection
