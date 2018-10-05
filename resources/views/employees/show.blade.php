@extends('main')

@section('title','Details')

@section('nav')
    <nav class="navbar navbar-light navbar-fixed-top" style="background-color: #e3f2fd;">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('employees') }}">Employees</a>
        </div>
    </nav>
@endsection

@section('content')

    <div class="jumbotron text-center">
        <h1>Showing Employee {{ $employee->emp_no }}</h1>
        <h1>{{ $employee->first_name }} {{ $employee->last_name }}</h1>
    </div>
    
    <div class="title">
        <h1 class="text-center">Titles</h1>

        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th class="col-lg-4">Title</td>
                    <th class="col-lg-4">From date</td>
                    <th class="col-lg-4">To date</td>  
                </tr>
            </thead>
            <tbody>
            @foreach($employee->titles as $key => $value)
                <tr>
                    <td>{{ $value->title }}</td>
                    <td>{{ $value->from_date }}</td>
                    <td>{{ $value->to_date }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="title">
        <h1 class="text-center">Departments</h1>

        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th class="col-lg-6">Dept_no</td>
                    <th class="col-lg-6">Department Name</td>
                </tr>
            </thead>
            <tbody>
            @foreach($employee->departments as $key => $value)
                <tr>
                    <td>{{ $value->dept_no }}</td>
                    <td>{{ $value->dept_name }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <a class="btn btn-small btn-new" href="{{ URL::to('employees') }}">Back</a>
@endsection