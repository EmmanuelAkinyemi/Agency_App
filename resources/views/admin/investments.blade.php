@extends('admin.adminLayout')

@section('children')
<div class="content">

    <div class="row">
        <div class="col-md-12">
            <a href="/admin/create-invest"  class="btn btn-info">Add New</a>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Investments Table</h4>
                </div>
                <div class="card-body">
                    @unless (count($investments) == 0)
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        email
                                    </th>
                                    <th class="text-right">
                                        Investment
                                    </th>
                                </thead>
                                <tbody>
                                    @foreach ($investments as $investment)
                                        <tr>
                                            <td>
                                                {{ $investment->user_email }}
                                            </td>
                                            <td>
                                                {{ $investment->plan_type }}
                                            </td>
                                            <td>
                                                {{ $investment->deposit_amount }}
                                            </td>
                                            <td>
                                                {{ $investment->status }}
                                            </td>
                                            <td>
                                                {{ $investment->created_at }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <p class="text-center">No Investment record yet</p>
                    @endunless
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
