
@extends('layouts.apps')
@section('content')


<form action="{{url('update_certificate_residencies/' .$certificate_residencies->id )}}" method="POST">
@csrf
@method('PUT')

<div class="card shadow-md p-5" style="position: relative; top: 100px;">
<div class="card-header text-center">
    <h1 style="font-size: 20px; font-weight: 500">Show {{$certificate_residencies->name}}</h1>
</div>
 <div class="container mx-auto">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label style="" for="">Name: </label>
                <input type="text" name="name" class="form-control" value="{{$certificate_residencies->name}}" required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label style="" for="">Date: </label>
                <input type="date" name="date" class="form-control" value="{{$certificate_residencies->date}}" required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label style="" for="">Residency Status: </label>
                <input type="text" name="residency_status" class="form-control" value="{{$certificate_residencies->residency_status}}" required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label style="" for="">Barangay </label>
                <input type="text" name="barangay" class="form-control" value="{{$certificate_residencies->barangay}}" required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label style="" for="">Purok Number </label>
                <input type="text" name="purok_number" class="form-control" value="{{$certificate_residencies->purok_number}}" required>
            </div>
        </div>
        <div class="col-md-4 mx-auto">
            <div class="form-group">
                <label style="" for="">Punong Barangay: </label>
                <input type="text" name="punongbarangay" class="form-control"  value="{{$certificate_residencies->punongbarangay}}" required>
            </div>
        </div>
        <div class="col-md-4 mx-auto">
        <div class="form-group">
            <label style="" for="">Barangay Kagawad: </label>
            <input type="text" name="hon_1" class="form-control" value="{{$certificate_residencies->hon_1}}"  required>
        </div>
        </div>
        <div class="col-md-4 mx-auto">
        <div class="form-group">
            <label style="" for="">Barangay Kagawad: </label>
            <input type="text" name="hon_2" class="form-control" value=" {{$certificate_residencies->hon_2}}" required>
        </div>
        </div>
        <div class="col-md-4 mx-auto">
        <div class="form-group">
            <label style="" for="">Barangay Kagawad: </label>
            <input type="text" name="hon_3" class="form-control" value=" {{$certificate_residencies->hon_3}}" required>
        </div>
        </div>
        <div class="col-md-4 mx-auto">
        <div class="form-group">
            <label style="" for="">Barangay Kagawad: </label>
            <input type="text" name="hon_4" class="form-control" value=" {{$certificate_residencies->hon_4}}"  required>
        </div>
        </div>
        <div class="col-md-4 mx-auto">
        <div class="form-group">
            <label style="" for="">Barangay Kagawad: </label>
            <input type="text" name="hon_5" class="form-control" value=" {{$certificate_residencies->hon_5}}" required>
        </div>
        </div>
        <div class="col-md-4 mx-auto">
        <div class="form-group">
            <label style="" for="">Barangay Kagawad: </label>
            <input type="text" name="hon_6" class="form-control" value=" {{$certificate_residencies->hon_6}}" required>
        </div>
        </div>
        <div class="col-md-4 mx-auto">
        <div class="form-group">
            <label style="" for="">Barangay Kagawad: </label>
            <input type="text" name="hon_7" class="form-control" value=" {{$certificate_residencies->hon_7}}"  required>
        </div>
        </div>
        <div class="col-md-4 mx-auto">
        <div class="form-group">
            <label style="" for="">Sk Chairman: </label>
            <input type="text" name="sk_chairman" class="form-control" value=" {{$certificate_residencies->sk_chairman}}" required>
        </div>
        </div>
        <div class="col-md-4 mx-auto">
        <div class="form-group">
            <label style="" for="">Secretary: </label>
            <input type="text" name="secretary" class="form-control" value=" {{$certificate_residencies->secretary}}" required>
        </div>
        </div>
        <div class="col-md-4 mx-auto">
        <div class="form-group">
            <label style="" for="">Treasurer: </label>
            <input type="text" name="treasurer" class="form-control" value=" {{$certificate_residencies->treasurer}}" required>
        </div>
        </div>



        <div class="col-md-4 mx-auto">
        <div class="form-group">
            <label style="" for="">Amount Paid: </label>
            <input type="text" name="amount_paid" class="form-control" value="{{$certificate_residencies->amount_paid}} " required>
        </div>
        </div>
        <div class="col-md-4 mx-auto">
        <div class="form-group">
            <label style="" for="">OR Number: </label>
            <input type="text" name="or_number" class="form-control" value="{{$certificate_residencies->or_number}}" required>
        </div>
        </div>
        <div class="col-md-4 mx-auto">
        <div class="form-group">
            <label style="" for="">Date Paid: </label>
            <input type="date" name="date_paid" class="form-control" value="{{$certificate_residencies->date_paid}}" required>
        </div>
        </div>

        </div>
        <button class="btn bg-info form-control p-1" type="submit">
            <h4 class="text-center text-light">Update</h4>
        </button>
    </form>
    </div>
  </div>
</div>

  @endsection
