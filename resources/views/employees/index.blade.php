@extends('layout')

@section('page-content')

{{-- <div class="d flex justify-content-between mb-3">
    <form action="" --}}

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Job Title</th>
            <th>Salary</th>
            <th>Email</th>
            <th>Mobile No</th>
            <th>Address</th>
            <th>Operation</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($employees as $employee)
            <tr>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->job_title }}</td>
                <td>{{ $employee->salary }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->mobile_no }}</td>
                <td>{{ $employee->address }}</td>
                <td class="d-flex justify-content-center">
                    <a href="{{ route('employee.show', $employee->id) }}" class="ms-1 btn btn-sm btn-secondary">Details</a>
                    <a href="{{ route('employee.edit', $employee->id) }}" class="ms-1 btn btn-sm btn-primary">Edit</a>
                    <form action="{{ route('employee.destroy', $employee->id) }}" method="post">
                        @csrf
                        <button type="submit" class="ms-1 btn btn-danger" onclick="return confirm('Sure?')"> Delete</button>
                    </form>
        @endforeach
</table>

<!-- Pagination Links -->
{{ $employees->links()}}
@endsection
