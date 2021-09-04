@extends('layouts.admin_layout.admin_layout')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Settings</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Admin Settings</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Update Password</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" method="POST" action="{{ url('/admin/update-pwd') }}" name="updatePasswordForm"
                    id="updatePasswordForm">@csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Admin Name</label>
                            <input type="text" class="form-control" value="{{ $adminDetails->name }}"
                                placeholder="Enter Admin Name" id="admin_name" name="admin_name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Admin Email</label>
                            <input class="form-control" value="{{ $adminDetails->email }}" readonly="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Admin Type</label>
                            <input class="form-control" value="{{ $adminDetails->type }}" readonly="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Current Password</label>
                            <input type="password" class="form-control" id="current_pwd" name="current_pwd"
                                placeholder="Enter Current Password">
                        </div>
                        <span id="chkCurrentPwd"></span>
                        <div class="form-group">
                            <label for="exampleInputPassword1">New Password</label>
                            <input type="cpassword" class="form-control" id="new_pwd" name="new_pwd"
                                placeholder="Enter New Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Confirm Password</label>
                            <input type="cpassword" class="form-control" id="confirm_pwd" name="confirm_pwd"
                                placeholder="Confirm New  Password">
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.content-wrapper -->

@endsection
