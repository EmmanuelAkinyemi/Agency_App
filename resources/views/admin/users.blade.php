@extends('admin.adminLayout')

@section('children')
    <!-- End Navbar -->
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Users Table</h4>
                    </div>
                    <div class="card-body">
                        @unless (count($users) == 0)
                            <div class="table-responsive">
                                <table class="table">
                                    @php
                                        $serialNumber = 1;
                                    @endphp
                                    <thead class=" text-primary">
                                        <th>
                                            S/N
                                        </th>
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            email
                                        </th>
                                        <th>
                                            investment plan
                                        </th>
                                        <th>
                                            Active deposit
                                        </th>
                                        <th>
                                            created_at
                                        </th>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>
                                                    {{ $serialNumber++ }}
                                                </td>
                                                <td>
                                                    {{ $user->name }}
                                                </td>
                                                <td>
                                                    {{ $user->email }}
                                                </td>
                                                @foreach ($user->investments as $investment)
                                                    <td>
                                                        <span class="badge badge-success"> {{ $investment->plan_type }}
                                                        </span>
                                                    </td>
                                                    <td>
                                                        ${{ $investment->deposit_amount }}
                                                    </td>
                                                @endforeach
                                                <td>
                                                    {{ $user->created_at->format('Y-M-d') }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <p class="text-center">No Users record yet</p>
                        @endunless
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
