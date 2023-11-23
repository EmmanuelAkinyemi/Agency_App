@extends('admin.adminLayout')

@section('children')
    <div class="content">
        <div class="row">
            <div class="col-md-4">
                <div class="card card-user">
                    <div class="image">
                        <img src="{{ asset('assets/admin/img/damir-bosnjak.jpg') }}" alt="...">
                    </div>
                    <div class="card-body">
                        <div class="author">
                            <a href="#">
                                <img class="avatar border-gray" src="{{ asset('assets/admin/img/mike.jpg') }}"
                                    alt="...">
                                <h5 class="title">{{ auth()->user()->name }}</h5>
                            </a>
                            <p class="description">
                                {{ auth()->user()->email }}
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-8">
                <div class="card card-user">
                    <div class="card-header">
                        <h5 class="card-title">Edit Profile</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('users.update-password') }}" method="post">
                            @csrf
                            @method('put')
                            <div class="row">
                                <div class="col-md-5 pr-1">
                                    <div class="form-group">
                                        <label>email (disabled)</label>
                                        <input type="email" class="form-control" disabled="" placeholder="email"
                                            value="{{ auth()->user()->email }}">
                                    </div>
                                </div>
                                <div class="col-md-5 px-1">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" disabled placeholder="Username"
                                            value="{{ auth()->user()->name }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>New Password</label>
                                        <input type="password"name="current_password" class="form-control" placeholder="*****">
                                    </div>
                                </div>

                                <div class="col-md-4 pr-1">
                                    <div class="form-group">
                                        <label>New Password</label>
                                        <input name="new_password" type="password" class="form-control" placeholder="*****">
                                    </div>
                                </div>
                                <div class="col-md-4 pl-1">
                                    <div class="form-group">
                                        <label>Confirm New Password</label>
                                        <input name="new_password_confirmation" type="password" class="form-control" placeholder="*****">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="update ml-auto mr-auto">
                                    <button type="submit" class="btn btn-primary btn-round">Update Profile</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
