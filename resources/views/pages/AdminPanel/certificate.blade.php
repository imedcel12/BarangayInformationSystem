
@extends('layouts.apps')
@section('content')
<div class="col-sm-12 text-left ">
   <h1 class="border-bottom border-bot pt-3">Barangay Setting</h1>
</div>

<fieldset>
    <form action="{{url('update_senior_citizen/' .$senior_citizen->id )}}" method="POST">
        @csrf
        @method('PUT')

        <div class="card shadow-md p-5" style="position: relative; top: 200px;">
        <div class="card-header text-center">
            <h1 style="font-size: 20px; font-weight: 500">Edit {{$senior_citizen->name}}</h1>
        </div>
         <div class="container mx-auto">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label style="" for="">Status: </label>
                        <select name="status" class="form-control">
                            <option value="Active">Active</option>
                            <option value="Deceased" >Deceased</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label style="" for="">Name: </label>
                        <input type="text" name="name" class="form-control" value="{{$senior_citizen->name}}" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label style="" for="">Purok: </label>
                        <input type="text" name="purok" class="form-control" value="{{$senior_citizen->purok}}" required>
                    </div>
                </div>
                <div class="col-md-4 mx-auto">
                    <div class="form-group">
                        <label style="" for="">Street: </label>
                        <input type="text" name="street" class="form-control"  value="{{$senior_citizen->street}}" required>
                    </div>
                </div>
                <button class="btn bg-info form-control p-1" type="submit">
                    <h4 class="text-center text-light">Update</h4>
                </button>
            </form>
            </div>
          </div>
        </div>
</fieldset>

@endsection

