@extends('adminlte::page')
@section('content_header')
@endsection
@section('content')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Event List') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!-- Bootstrap Table -->
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Personal Email</th>
                                    <!-- <th>Office Email</th> -->
                                    <th>Mobile</th>
                                    <th>Gender</th>
                                    <th>Organisation Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Example data, replace with your dynamic data -->
                                @if(!empty($event_registrations))
                                @foreach($event_registrations as $registeration)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $registeration->name }}</td>
                                    <td>{{ $registeration->personal_email ?? '' }}</td>
                                    <!-- <td>{{ $registeration->office_email ?? '' }}</td> -->
                                    <td>{{ $registeration->mobile_number ?? '' }}</td>
                                    <td>{{ $registeration->gender ?? '' }}</td>
                                    <td>{{ $registeration->organisation_name ?? '' }}</td>
                                    <td>
                                        <a href="{{ route('eventView')}}" class="btn btn-info btn-sm">View</a>
                                        <a href="" class="btn btn-primary btn-sm">Edit</a>
                                        <form action="" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <!-- <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button> -->
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="7" class="text-center">No data found</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <!-- {{ __('You are logged in!') }} -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
