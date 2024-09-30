@extends('layout')

@section('page-content')
    <h2>Employee Details</h2>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $employees->id }}</td>
        </tr>
        <tr>
            <th>Name</th>
            <td>{{ $employees->name }}</td>
        </tr>
        <tr>
            <th>Job Title</th>
            <td>{{ $employees->job_title }}</td>
        </tr>
        <tr>
            <th>Join Date</th>
            <td>{{ $employees->joining_date }}</td>
        </tr>
        <tr>
            <th>Salary</th>
            <td>{{ $employees->salary }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $employees->email }}</td>
        </tr>
        <tr>
            <th>Mobile No</th>
            <td>{{ $employees->mobile_no }}</td>
        </tr>
        <tr>
            <th>Address</th>
            <td>{{ $employees->address }}</td>
        </tr>
    </table>

    <a href="{{ route('employees.index') }}" class="btn btn-primary">Back to Employees List</a>
@endsection
