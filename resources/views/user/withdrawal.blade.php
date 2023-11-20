@extends('user.userLayout')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-xl-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Request For Withdrawal</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form>
                                <div class="mb-3">
                                    <input name="email" class="form-control form-control-lg" type="email" placeholder="Email">
                                </div>
                                <div class="mb-3">
                                    <input name="amount" class="form-control form-control-lg" type="text" placeholder="$500">
                                </div>
                                <div class="mb-3">
                                    <textarea name="message" placeholder="Message" class="form-control" rows="4" id="comment"></textarea>
                                </div>
                                <button class="btn btn-primary rounded">Request Withdrawal</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
