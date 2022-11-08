
@extends('layouts.apps')
@section('content')


<form action="{{url('update_certificate_indigencies/' .$certificate_indigencies->id )}}" method="POST">
@csrf
@method('PUT')

<div class="card shadow-md p-5" style="position: relative; top: 100px;">
<div class="card-header text-center">
    <h1 style="font-size: 20px; font-weight: 500">Show {{$certificate_indigencies->name}}</h1>
</div>
 <div class="container mx-auto">
    <div class="row">
        <div class="col-md-10">
            <div class="form-group">
                <label style="" for="">Punong Barangay: </label>
                <input type="text" name="punongbarangay" value="{{$certificate_indigencies->punongbarangay}}" class="form-control"  required>

            </div>
            <div class="form-group">
                <label style="" for="">Barangay Kagawad: </label>
                <input type="text" name="hon_1" class="form-control" value="{{$certificate_indigencies->hon_1}}"  required>

            </div>
            <div class="form-group">
                <label style="" for="">Barangay Kagawad: </label>
                <input type="text" name="hon_2" class="form-control" value=" {{$certificate_indigencies->hon_2}}" required>

            </div>
            <div class="form-group">
                <label style="" for="">Barangay Kagawad: </label>
                <input type="text" name="hon_3" class="form-control" value=" {{$certificate_indigencies->hon_3}}" required>

            </div>
            <div class="form-group">
                <label style="" for="">Barangay Kagawad: </label>
                <input type="text" name="hon_4" class="form-control" value=" {{$certificate_indigencies->hon_4}}"  required>

            </div>
            <div class="form-group">
                <label style="" for="">Barangay Kagawad: </label>
                <input type="text" name="hon_5" class="form-control" value=" {{$certificate_indigencies->hon_5}}" required>

            </div>
            <div class="form-group">
                <label style="" for="">Barangay Kagawad: </label>
                <input type="text" name="hon_6" class="form-control" value=" {{$certificate_indigencies->hon_6}}" required>

            </div>
            <div class="form-group">
                <label style="" for="">Barangay Kagawad: </label>
                <input type="text" name="hon_7" class="form-control" value=" {{$certificate_indigencies->hon_7}}"  required>

            </div>
            <div class="form-group">
                <label style="" for="">Sk Chairman: </label>
                <input type="text" name="sk_chairman" class="form-control" value=" {{$certificate_indigencies->sk_chairman}}" required>

            </div>
            <div class="form-group">
                <label style="" for="">Secretary: </label>
                <input type="text" name="secretary" class="form-control" value=" {{$certificate_indigencies->secretary}}" required>

            </div>
            <div class="form-group">
                <label style="" for="">Treasurer: </label>
                <input type="text" name="treasurer" class="form-control" value=" {{$certificate_indigencies->treasurer}}" required>

            </div>



         
            <div class="form-group">
                <label style="" for="">Amount Paid: </label>
                <input type="text" name="amount_paid" class="form-control" value="{{$certificate_indigencies->amount_paid}} " required>

            </div>
           
            <div class="form-group">
                <label style="" for="">OR Number: </label>
                <input type="text" name="or_number" class="form-control" value="{{$certificate_indigencies->or_number}}" required>

            </div>
            <div class="form-group">
                <label style="" for="">Date Paid: </label>
                <input type="date" name="date_paid" class="form-control" value="{{$certificate_indigencies->date_paid}}" required>

            </div>
            <div class="form-group">
                <label style="" for="">Address: </label>
                <input type="text" name="address" class="form-control"  value="{{$certificate_indigencies->address}}" required>

            </div>
            <div class="form-group">
                <label style="" for="">Name: </label>
                <input type="text" name="name" class="form-control" value="{{$certificate_indigencies->name}}" required>

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
