@extends('layouts.apps')
@section('content')
<div class="d-flex justify-content-end mt-2">
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Create
  </button>

  <form method="post" action="{{url('create_certificate_unemployments')}}">
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
                <div class="col-md-10">
                    <div class="form-group">
                        <label style="" for="">Punong Barangay: </label>
                        <input type="text" name="punongbarangay" class="form-control"  required>

                    </div>
                    <div class="form-group">
                        <label style="" for="">Barangay Kagawad: </label>
                        <input type="text" name="hon_1" class="form-control"  required>

                    </div>
                    <div class="form-group">
                        <label style="" for="">Barangay Kagawad: </label>
                        <input type="text" name="hon_2" class="form-control"  required>

                    </div>
                    <div class="form-group">
                        <label style="" for="">Barangay Kagawad: </label>
                        <input type="text" name="hon_3" class="form-control"  required>

                    </div>
                    <div class="form-group">
                        <label style="" for="">Barangay Kagawad: </label>
                        <input type="text" name="hon_4" class="form-control"  required>

                    </div>
                    <div class="form-group">
                        <label style="" for="">Barangay Kagawad: </label>
                        <input type="text" name="hon_5" class="form-control"  required>

                    </div>
                    <div class="form-group">
                        <label style="" for="">Barangay Kagawad: </label>
                        <input type="text" name="hon_6" class="form-control"  required>

                    </div>
                    <div class="form-group">
                        <label style="" for="">Barangay Kagawad: </label>
                        <input type="text" name="hon_7" class="form-control"  required>

                    </div>
                    <div class="form-group">
                        <label style="" for="">Sk Chairman: </label>
                        <input type="text" name="sk_chairman" class="form-control"  required>

                    </div>
                    <div class="form-group">
                        <label style="" for="">Secretary: </label>
                        <input type="text" name="secretary" class="form-control"  required>

                    </div>
                    <div class="form-group">
                        <label style="" for="">Treasurer: </label>
                        <input type="text" name="treasurer" class="form-control"  required>

                    </div>



                 
                    <div class="form-group">
                        <label style="" for="">Parent Name: </label>
                        <input type="text" name="parent_name" class="form-control"  required>

                    </div>
                   
                    <div class="form-group">
                        <label style="" for="">Date: </label>
                        <input type="date" name="date" class="form-control"  required>

                    </div>
                   
                    <div class="form-group">
                        <label style="" for="">Address: </label>
                        <input type="text" name="address" class="form-control"  required>

                    </div>
                    <div class="form-group">
                        <label style="" for="">Name: </label>
                        <input type="text" name="name" class="form-control"  required>

                    </div>
                    <div class="form-group">
                        <label style="" for="">Status: </label>
                        <input type="text" name="status" class="form-control"  required>

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
        <h1 class="mt-1" style="font-weight: 400">Certificate of Unemployment</h1>
        <hr>
        <table class="table table-striped table">
            <thead class="bg-secondary text-center">
                <tr class="text-light">
                    <th>Print</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Date </th>
                    <th>Parent Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="text-center">

                @foreach ( $certificate_unemployments as $item )
                    <tr class="text-dark">
                      <td><button class="btn btn-sm btn-info">
                        <a href="{{url('export_certificate_unemployments/'.$item->id)}}" class="btn btn-sm text-light">Print</a>
                    </button></td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->address}}</td>
                        <td>{{$item->date}}</td>
                        <td>{{$item->parent_name}}</td>
                        <td><span> <a href="{{url('edit_certificate_unemployments/'.$item->id)}}" class="btn btn-warning btn-sm text-light">Edit</a></span>
                         <span>
                            <a href="{{url('delete_certificate_unemployments/'.$item->id)}}" class="btn btn-danger btn-sm text-light">Delete</a>
                        </span></td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>

@endsection
