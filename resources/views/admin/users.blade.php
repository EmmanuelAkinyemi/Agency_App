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
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>
                                                    {{ $user->name }}
                                                </td>
                                                <td>
                                                    {{ $user->email }}
                                                </td>
                                                <td>
                                                    {{ $user->created_at }}
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
