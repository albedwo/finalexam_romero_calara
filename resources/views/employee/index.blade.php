@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Employee Management') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
                <a href="{{ route('employee.create') }}" class="btn btn-success mb-3">Add Employee</a>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body p-0">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Middle Name</th>
                                            <th>Address</th>
                                            <th>Date of Birth</th>
                                            <th>Contact Number</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody  >
                                        @foreach ($employee as $emp)
                                        <tr>
                                            <td>{{ $emp->id }}</td>
                                            <td>{{ $emp->fname }}</td>
                                            <td>{{ $emp->lname }}</td>
                                            <td>{{ $emp->mname }}</td>
                                            <td>{{ $emp->address }}</td>
                                            <td>{{ $emp->dob }}</td>
                                            <td>{{ $emp->contactno }}</td>
                                            <td> 
                                                <a href="{{ route('employee.edit', $emp->id) }}" class="btn btn-primary btn-md active" role="button" aria-pressed="true">Edit</a>
                                                <form action="{{ route('employee.destroy', $emp->id) }}" method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-md active" role="button" aria-pressed="true">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection