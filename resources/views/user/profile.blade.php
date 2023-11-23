@extends('user.userLayout')

@section('content')
<div class="row justify-content-center align-items-center">
    <div class="col-xl-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Request For Deposit</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="" method="post">
                        @csrf
                        <div class="mb-3">
                            <input name="email" class="form-control form-control-lg" type="email" placeholder="Your Email Address">
                        </div>
                        <div class="mb-3">
                            <input name="amount" class="form-control form-control-lg" type="text" placeholder="Amount e.g: $500">
                        </div>
                        <div class="mb-3">
                            <textarea name="message" placeholder="Message" class="form-control" rows="4" id="comment"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary rounded">Update Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

