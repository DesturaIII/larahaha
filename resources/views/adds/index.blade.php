@extends('layouts.app')
@section('content')

<div class="form-area">
                <form method="POST" action="{{ route('employee.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>Employee Name</label>
                            <input type="text" class="form-control" name="emp_name">
                        </div>
                       
                        <div class="col-md-6">
                            <label>Employee Name</label>
                            <input type="text" class="form-control" name="emp_name2">
                        </div>
                        <div class="col-md-6">
                            <label>Employee DOB</label>
                            <input type="date" class="form-control" name="dob">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Phone</label>
                            <input type="text" class="form-control" name="phone">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <input type="submit" class="btn btn-info" value="Register">
                        </div>
                    </div>
                </form>
            </div>
            
            @endsection
@push('css')
    <style>
        .form-area{
            padding: 20px;
            margin-top: 20px;
              background-color:#FFFF00;
        }
        .bi-trash-fill{
            color:red;
            font-size: 18px;
        }
        .bi-pencil{
            color:green;
            font-size: 18px;
            margin-left: 20px;
        }
    </style>
@endpush