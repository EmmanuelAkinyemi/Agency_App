@extends('user.userLayout')

@section('content')
<div class="container-fluid py-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-xl-6 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Update Password</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form action="{{ route('profile.update-password') }}" method="post">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <input disabled value="{{ auth()->user()->email }}" name="email" class="form-control form-control-lg" type="email" placeholder="Your Email Address">
                            </div>
                            <div class="mb-3">
                                <input disabled name="name" value="{{ auth()->user()->name }}" class="form-control form-control-lg" type="text" placeholder="Amount e.g: $500">
                            </div>
                            <div class="mb-3">
                                <input name="current_password" class="form-control form-control-lg" type="password" placeholder="****">
                            </div>
                            <div class="mb-3">
                                <input  name="new_password" class="form-control form-control-lg" type="password" placeholder="****"  required>
                            </div>
                            <div class="mb-3">
                                <input  name="new_password_confirmation" class="form-control form-control-lg" type="password" placeholder="****"  required>
                            </div>

                            <button type="submit" class="btn btn-primary rounded">Update Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

