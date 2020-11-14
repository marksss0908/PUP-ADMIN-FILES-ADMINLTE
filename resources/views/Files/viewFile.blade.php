@extends('layout.layout')
@section('viewFile')
    
<div class="container-fluid">
    <div class  ="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Students Record</h3>
          </div>



          <div class="card-body">

            <li class="nav-item d-none d-sm-inline-block">
              <a href="{{route ('File.addFile')}}" type="button" class="btn btn-block btn-primary">Add File</a>
            </li>

            <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>ID</th>
                <th>File</th>
                <th>Description</th>
                <th>Upload date</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Mark Registration Form</td>
                  <td>resigtration form</td>
                  <td>11/14/20</td>
                  <td>Download / Delete</td>
                </tr>
              </tbody>
              
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
</div>
@endsection
