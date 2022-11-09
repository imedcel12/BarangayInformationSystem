
@extends('layouts.apps')
@section('content')


<form action="{{url('update_certificate_clearances/' .$certificate_clearances->id )}}" method="POST">
@csrf
@method('PUT')

<div class="card shadow-md p-5" style="position: relative; top: 100px;">
<div class="card-header text-center">
    <h1 style="font-size: 20px; font-weight: 500">Edit Clearance Certificate of {{$certificate_clearances->name}}</h1>
</div>
 <div class="container mx-auto">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label style="" for="">Name: </label>
                <input type="text" name="name" class="form-control" value="{{$certificate_clearances->name}}" required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label style="" for="">Purok Address: </label>
                <input type="text" name="purok_address" class="form-control" value="{{$certificate_clearances->purok_address}}" required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label style="" for="">Reason for Application: </label>
                <input type="text" name="reason" class="form-control" value="{{$certificate_clearances->reason}}" required>
            </div>
        </div>
        <div class="col-md-4 mx-auto">
            <div class="form-group">
                <label style="" for="">OR Number: </label>
                <input type="text" name="or_number" class="form-control"  value="{{$certificate_clearances->or_number}}" required>
            </div>
        </div>
        <div class="col-md-4 mx-auto">
            <div class="form-group">
                <label style="" for="">Punong Barangay: </label>
                <input type="text" name="punongbarangay" class="form-control"  value="{{$certificate_clearances->punongbarangay}}" required>
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
