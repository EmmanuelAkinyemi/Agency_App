@extends('admin.adminLayout')

@section('children')
    <div class="content">

        <div class="row">
            <div class="col-md-12">
                <a href="/admin/create-invest" class="btn btn-info">Add New</a>
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
                                    @php
                                        $serialNumber = 1;
                                    @endphp
                                    <thead class=" text-primary">

                                        <th>
                                            S/N
                                        </th>
                                        <th>
                                            user email
                                        </th>
                                        <th>
                                            plan
                                        </th>
                                        <th>
                                            Amount
                                        </th>
                                        <th>
                                            Status
                                        </th>
                                        <th>
                                            Date Created
                                        </th>

                                        <th>
                                            Actions
                                        </th>
                                    </thead>
                                    <tbody>
                                        @foreach ($investments as $investment)
                                            <tr>
                                                <td>
                                                    {{ $serialNumber++ }}
                                                </td>
                                                <td>
                                                    {{ $investment->user_email }}
                                                </td>
                                                <td>
                                                    {{ $investment->plan_type }}
                                                </td>
                                                <td>
                                                    ${{ $investment->deposit_amount }}
                                                </td>
                                                <td>
                                                    <span class="badge badge-success">
                                                        {{ $investment->status }}
                                                    </span>
                                                </td>
                                                <td>
                                                    {{ $investment->created_at->format('M-d-Y') }}
                                                </td>
                                                <td>
                                                    <a href="{{ route('investments.edit', $investment) }}"
                                                        class="btn btn-info">Edit</a>
                                                    <form action="{{ route('investments.destroy', $investment) }}"
                                                        method="post" style="display:inline">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger"
                                                            onclick="return confirm('Are you sure you want to delete this investment?')">Delete</button>
                                                    </form>
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
