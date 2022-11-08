@extends('layouts.apps')
@section('content')
<div class="d-flex justify-content-end mt-2">
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Create
  </button>

  <form method="post" action="{{url('create_certificate_clearances')}}">
    @csrf
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Create....</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container mx-auto">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label style="" for="">Date: </label>
                        <input type="date" name="date" class="form-control"  required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label style="" for="">Name: </label>
                        <input type="text" name="name" class="form-control" placeholder="Enter name" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label style="" for="">Purok Address: </label>
                        <input type="text" name="purok_address" class="form-control" placeholder="Enter purok address" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label style="" for="">Reason for Application: </label>
                        <input type="text" name="reason" class="form-control" placeholder="Enter reason for application" required>
                    </div>
                </div>
                <div class="col-md-4 mx-auto">
                    <div class="form-group">
                        <label style="" for="">OR Number: </label>
                        <input type="text" name="or_number" class="form-control" placeholder="Enter Or number" required>
                    </div>
                </div>
                <div class="col-md-4 mx-auto">
                    <div class="form-group">
                        <label style="" for="">Punong Barangay: </label>
                        <input type="text" name="punongbarangay" class="form-control" placeholder="Enter Or number" required>
                    </div>
                </div>


            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
    <div class="col-md-12">
        <h1 class="mt-1">Clearance Certificate</h1>
        <hr>
        <table class="table table-striped table">
            <thead class="bg-secondary text-center">
                <tr class="text-light">
                    <th>Print</th>
                    <th>Name</th>
                    <th>Purok Address</th>
                    <th>Reason for Application</th>
                    <th>OR Number</th>
                    <th>Date</th>
                    <th>Punong Barangay</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="text-center">

                @foreach ( $certificate_clearances as $item )
                    <tr class="text-dark">
                        <td><button class="btn btn-sm btn-info">
                            <a href="{{url('export_certificate_clearances/'.$item->id)}}" class="btn btn-sm text-light">Print</a>
                        </button></td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->purok_address}}</td>
                        <td>{{$item->reason}}</td>
                        <td>{{$item->or_number}}</td>
                        <td>{{$item->date}}</td>
                        <td>{{$item->punongbarangay}}</td>
                        <td><span> <a href="{{url('edit_certificate_clearances/'.$item->id)}}" class="btn btn-warning btn-sm text-light">Edit</a></span>
                         <span>
                            <a href="{{url('delete_certificate_clearances/'.$item->id)}}" class="btn btn-danger btn-sm text-light">Delete</a>
                        </span></td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>

@endsection
