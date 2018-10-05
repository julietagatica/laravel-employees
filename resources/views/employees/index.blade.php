@extends('main')

@section('title','Home')

@section('nav')
    <nav class="navbar navbar-light navbar-fixed-top" style="background-color: #e3f2fd;">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('employees') }}">Employees</a>
        </div>
    </nav>
@endsection

@section('content')

    <div class="jumbotron text-center">
        <h1>All the Employees</h1>
    </div>

    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Emp_no</td>
                <th>First Name</td>
                <th>Last Name</td>
                <th>Birth Date</td>
                <th>Gender</td>
                <th>Hire Date</td>
                <th>Actions</td>
            </tr>
        </thead>
        <tbody>
        @foreach($employees as $key => $value)
            <tr>
                <td>{{ $value->emp_no }}</td>
                <td>{{ $value->first_name }}</td>
                <td>{{ $value->last_name }}</td>
                <td>{{ $value->birth_date }}</td>
                <td>{{ $value->gender }}</td>
                <td>{{ $value->hire_date }}</td>

                <!-- we will also add show, edit, and delete buttons -->
                <td>

                    <!-- delete the employee (uses the destroy method DESTROY /employees/{emp_no} -->
                    <!-- we will add this later since its a little more complicated than the other two buttons -->

                    <!-- show the employee (uses the show method found at GET /employees/{emp_no} -->
                    <a class="btn btn-small btn-new" href="{{ URL::to('employees/' . $value->emp_no) }}">Show this Employee</a>

                    <!-- edit this nerd (uses the edit method found at GET /employees/{emp_no}/edit -->
                    <!-- <a class="btn btn-small btn-info" href="{{ URL::to('employees/' . $value->emp_no . '/edit') }}">Edit this Employee</a> -->

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class='text-center'>{{ $employees->links() }}</div>
@endsection