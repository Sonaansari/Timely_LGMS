@extends('layouts.master')
<title>Timely - Dashboard || House Of Investment</title>

@section('content')
<div class="content">
    <div class="container-fluid">

        {{-- Header --}}
        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
            <div class="flex-grow-1">
                <h4 class="fs-18 fw-semibold m-0">Profile</h4>
            </div>
            <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <!-- <li class="breadcrumb-item"><a href="javascript:void(0);">Components</a></li> -->
                    <li class="breadcrumb-item active">Profile Settings</li>
                </ol>
            </div>
        </div>

        {{-- Messages --}}
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Profile Card --}}
        <div class="row mb-4">
            <div class="col-12">
                <div class="card">
                    <img src="{{ asset('assets/images/small/user-image.jpg') }}" class="rounded-top-2 img-fluid" alt="header background">
                    <div class="card-body d-flex align-items-center">
                        <div class="silva-profile-main">
                            <img src="{{ asset('assets/images/users/user-11.jpg') }}" class="rounded-circle img-fluid avatar-xxl img-thumbnail" alt="profile">
                        </div>
                        <div class="ms-4">
                            <h4 class="text-dark">{{ $admin->first_name }} {{ $admin->last_name }}</h4>
                                {{ $admin->city ?? 'N/A' }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Profile Settings --}}
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body pt-0">
                        <ul class="nav nav-underline border-bottom pt-2" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link p-2 active" id="setting_tab" data-bs-toggle="tab" href="#profile_setting" role="tab">
                                    <span class="d-block d-sm-none"><i class="mdi mdi-information"></i></span>
                                    <span class="d-none d-sm-block"> Profile Settings </span>
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content text-muted bg-white">
                            <div class="tab-pane active pt-4" id="profile_setting" role="tabpanel">

                                {{-- Personal Info Update Form --}}
                                <form action="{{ route('admin.profile.update') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="card border">
                                                <div class="card-header"><h4 class="card-title mb-0">Personal Information</h4></div>
                                                <div class="card-body">
                                                    @foreach ([
                                                        'first_name' => 'First Name',
                                                        'last_name' => 'Last Name',
                                                        'phone' => 'Contact Phone',
                                                        'email' => 'Email Address',
                                                        'company' => 'Company',
                                                        'city' => 'City',
                                                        'address' => 'Address'
                                                    ] as $field => $label)
                                                        <div class="form-group mb-3">
                                                            <label class="form-label">{{ $label }}</label>
                                                            <input type="{{ $field === 'email' ? 'email' : 'text' }}" name="{{ $field }}" class="form-control" value="{{ old($field, $admin->$field) }}">
                                                        </div>
                                                    @endforeach
                                                    <button type="submit" class="btn btn-primary">Update Info</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                {{-- Password Change Form --}}
                                <form action="{{ route('admin.profile.password') }}" method="POST" class="mt-4">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="card border mb-0">
                                                <div class="card-header"><h4 class="card-title mb-0">Change Password</h4></div>
                                                <div class="card-body">
                                                    <div class="form-group mb-3">
                                                        <label class="form-label">Old Password</label>
                                                        <input class="form-control" type="password" name="old_password" placeholder="Old Password" required>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label class="form-label">New Password</label>
                                                        <input class="form-control" type="password" name="new_password" placeholder="New Password" required>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label class="form-label">Confirm Password</label>
                                                        <input class="form-control" type="password" name="new_password_confirmation" placeholder="Confirm Password" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-primary">Change Password</button>
                                                        <button type="reset" class="btn btn-danger">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div> {{-- tab-pane --}}
                        </div> {{-- tab-content --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
