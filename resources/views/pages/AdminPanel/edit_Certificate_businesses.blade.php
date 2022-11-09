
@extends('layouts.apps')
@section('content')


<form action="{{url('update_certificate_businesses/' .$certificate_businesses->id )}}" method="POST">
@csrf
@method('PUT')

<div class="card shadow-md p-5" style="position: relative; top: 100px;">
<div class="card-header text-center">
    <h1 style="font-size: 20px; font-weight: 500">Edit Business Certificate of {{$certificate_businesses->name}}</h1>
</div>
 <div class="container mx-auto">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label style="" for="">Name: </label>
                <input type="text" name="name" class="form-control" value="{{$certificate_businesses->name}}" required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label style="" for="">Status: </label>
                <input type="text" name="status" class="form-control" value="{{$certificate_businesses->status}}" required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label style="" for="">Gender: </label>
                <input type="text" name="gender" class="form-control" value="{{$certificate_businesses->gender}}" required>
            </div>
        </div>
        <div class="col-md-4 mx-auto">
            <div class="form-group">
                <label style="" for="">Business Name: </label>
                <input type="text" name="business_name" class="form-control"  value="{{$certificate_businesses->business_name}}" required>
            </div>
        </div>
        <div class="col-md-4 mx-auto">
            <div class="form-group">
                <label style="" for="">Business Type: </label>
                <input type="text" name="business_type" class="form-control"  value="{{$certificate_businesses->business_type}}" required>
            </div>
        </div>
        <div class="col-md-4 mx-auto">
            <div class="form-group">
                <label style="" for="">Punong Barangay: </label>
                <input type="text" name="punongbarangay" class="form-control"  value="{{$certificate_businesses->punongbarangay}}" required>
            </div>
        </div>
        <div class="col-md-4 mx-auto">
            <div class="form-group">
                <label style="" for="">Date: </label>
                <input type="text" name="date" class="form-control"  value="{{$certificate_businesses->date}}" required>
            </div>
        </div>
        <div class="col-md-4 mx-auto">
            <div class="form-group">
                <label style="" for="">OR Number: </label>
                <input type="text" name="or_number" class="form-control"  value="{{$certificate_businesses->or_number}}" required>
            </div>
        </div>
        <div class="col-md-4 mx-auto">
            <div class="form-group">
                <label style="" for="">CTC Number: </label>
                <input type="text" name="ctc_number" class="form-control"  value="{{$certificate_businesses->ctc_number}}" required>
            </div>
        </div>
        <div class="col-md-4 mx-auto">
            <div class="form-group">
                <label style="" for="">Address: </label>
                <input type="text" name="address" class="form-control"  value="{{$certificate_businesses->address}}" required>
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
