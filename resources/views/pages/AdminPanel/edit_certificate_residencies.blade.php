
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
                <input type="text" name="date" class="form-control" value="{{$certificate_residencies->date}}" required>
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
        <div class="col-md-4 mx-auto">
            <div class="form-group">
                <label style="" for="">Punong Barangay: </label>
                <input type="text" name="punongbarangay" class="form-control"  value="{{$certificate_residencies->punongbarangay}}" required>
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
