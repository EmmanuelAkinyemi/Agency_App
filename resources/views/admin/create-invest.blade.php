@extends('admin.adminLayout')

@section('children')
<div class="content">
    <div class="row justify-content-center align-items-center">
        <div class="col-xl-6 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Create Investment</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form action="/admin/create-invest" method="post">
                            @csrf
                            <div class="mb-3">
                                <input name="email" class="py-3 px-2 form-control rounded form-control-lg" type="email" placeholder="User Email">
                            </div>
                            <div class="mb-3">
                                <input name="plan_type" class="py-3 px-2 form-control rounded form-control-lg" type="text" placeholder="Premium">
                            </div>
                            <div class="mb-3">
                                <input name="deposit_amount" class="py-3 px-2 form-control form-control-lg rounded" type="text" placeholder="Amount e.g: $500">
                            </div>
                            <div class="mb-3">
                                <input name="status" class="py-3 px-2 rounded form-control form-control-lg" type="text" placeholder="active or closed">
                            </div>
                            <button type="submit" class="btn btn-primary rounded">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
