@extends('layout')

@section('page-content')
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Add New Employee</h4>
        </div>
        <div class="card-body">
            <form action="{{route('employee.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}">
                    <div class="text-danger">{{ $errors->first('name') }}</div>
                </div>

                <div class="mb-3">
                    <label for="job_title" class="form-label">Job Title</label>
                    <input type="text" name="job_title" id="job_title" class="form-control" value="{{old('job_title')}}">
                    <div class="text-danger">{{ $errors->first('job_title') }}</div>
                </div>

                <div class="mb-3">
                    <label for="joining_date" class="form-label">Joining Date</label>
                    <input type="date" name="joining_date" id="joining_date" class="form-control" value="{{old('joining_date')}}">
                    <div class="text-danger">{{ $errors->first('joining_date') }}</div>
                </div>

                <div class="mb-3">
                    <label for="salary" class="form-label">Salary</label>
                    <input type="number" name="salary" id="salary" class="form-control" value="{{old('salary')}}">
                    <div class="text-danger">{{ $errors->first('salary') }}</div>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{old('email')}}">
                    <div class="text-danger">{{ $errors->first('email') }}</div>
                </div>

                <div class="mb-3">
                    <label for="mobile_no" class="form-label">Mobile No</label>
                    <input type="number" name="mobile_no" id="mobile_no" class="form-control" value="{{old('mobile_no')}}">
                    <div class="text-danger">{{ $errors->first('mobile_no') }}</div>
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" name="address" id="address" class="form-control" value="{{old('address')}}">
                    <div class="text-danger">{{ $errors->first('address') }}</div>
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{route('employees.index')}}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection