{{-- @extends('layout')

@section('page-content')

{{-- <legend>Update Book</legend>

<form action="{{ route('employee.update', $employee->id) }}" method="POST">
    @csrf
    @method('PATCH')
    <div>
        <label for="name">name</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ employee->name }}">
        <div>{{ $errors->first('name') }}</div>
    </div>
    <div>

    </div>
</form> --}}



@extends('layout')

@section('page-content')

<legend>Update Employee</legend>

<form action="{{ route('employee.update', $employees->id) }}" method="POST">
    @csrf
    @method('PATCH')
    <div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ $employees->name }}">
        <div>{{ $errors->first('name') }}</div>
    </div>

    <div>
        <label for="job_title">Job Title</label>
        <input type="text" name="job_title" id="job_title" class="form-control" value="{{ $employees->job_title }}">
        <div>{{ $errors->first('job_title') }}</div>
    </div>

    <div>
        <label for="salary">Salary</label>
        <input type="text" name="salary" id="salary" class="form-control" value="{{ $employees->salary }}">
        <div>{{ $errors->first('salary') }}</div>
    </div>

    <div>
        <label for="joining_date">Joining Date</label>
        <input type="text" name="joining_date" id="joining_date" class="form-control" value="{{ $employees->joining_date }}">
        <div>{{ $errors->first('joining_date') }}</div>
    </div>

    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" value="{{ $employees->email }}">
        <div>{{ $errors->first('email') }}</div>
    </div>

    <div>
        <label for="mobile_no">Mobile No</label>
        <input type="text" name="mobile_no" id="mobile_no" class="form-control" value="{{ $employees->mobile_no }}">
        <div>{{ $errors->first('mobile_no') }}</div>
    </div>

    <div>
        <label for="address">Address</label>
        <input type="text" name="address" id="address" class="form-control" value="{{ $employees->address }}">
        <div>{{ $errors->first('address') }}</div>
    </div>

    <div class="mt-3">
        <button type="submit" class="btn btn-primary">Update Employee</button>
        <a href="{{ route('employees.index') }}" class="btn btn-info">Cancel</a>

    </div>
</form>

@endsection
