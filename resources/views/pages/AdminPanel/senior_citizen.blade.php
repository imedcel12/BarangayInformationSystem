
@extends('layouts.apps')
@section('content')

<div class="d-flex justify-content-end mt-2">
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Create
  </button>

  <form method="post" action="{{url('create_senior_citizen')}}">
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
                        <input type="text" name="name" class="form-control" placeholder="Enter name" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label style="" for="">Purok: </label>
                        <input type="text" name="purok" class="form-control" placeholder="Enter purok" required>
                    </div>
                </div>
                <div class="col-md-4 mx-auto">
                    <div class="form-group">
                        <label style="" for="">Street: </label>
                        <input type="text" name="street" class="form-control" placeholder="Enter street" required>
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
        <h1 class="mt-1" style="font-weight: 400">Senior Citizen</h1>
        <hr>
        <table class="table table-striped table">
            <thead class="bg-secondary text-center">
                <tr class="text-light">
                    <th>Status</th>
                    <th>Name</th>
                    <th>Purok</th>
                    <th>Street</th>
                    <th>Tools</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($senior_citizen as $item)
                    <tr>
                        @if ($item->status === "Active")
                            <td class="text-success">Active</td>
                        @else
                        <td class="text-danger">Deceased</td>

                        @endif
                        <td>{{$item->name}}</td>
                        <td>{{$item->purok }}</td>
                        <td>{{$item->street}}</td>
                        <td>
                            <span>
                                <a href="{{url('edit_senior_citizen/'.$item->id)}}" class="btn btn-warning btn-sm text-light">Edit</a>
                            </span>
                            <span>
                                <a href="{{url('delete_senior_citizen/'.$item->id)}}" class="btn btn-danger btn-sm text-light">Delete</a>
                            </span>
                        </td>

                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>

@endsection
