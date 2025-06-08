@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Student</div>
  <div class="card-body">
      
      <form action="{{ url('students') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" placeholder="Enter Student's Name" name="name" id="name" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" placeholder="Enter Student's Residential Address" name="address" id="address" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="number" placeholder="Enter Student's Contact No." name="mobile" id="mobile" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop