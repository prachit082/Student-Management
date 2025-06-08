@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Enrollment</div>
  <div class="card-body">
      
      <form action="{{ url('enrollments') }}" method="post">
        {!! csrf_field() !!}
        <label>Enroll No.</label></br>
        <input type="text" placeholder="Enter Student Enrollment No." name="enroll_no" id="enroll_no" class="form-control"></br>
        <label>Batch</label></br>
        <select name="batch_id" id="batch_id" class="form-control">
        @foreach($batches as $id => $name)
        <option value="{{ $id }}">{{ $name }}</option>
        @endforeach
        </select><br> 
        <label>Student</label></br>
        <select name="student_id" id="student_id" class="form-control">
        @foreach($students as $id => $name)
        <option value="{{ $id }}">{{ $name }}</option>
        @endforeach
        </select></br>
        <label>Joining</label></br>
        <input type="date" placeholder="Enter Student's Joining Date" name="join_date" id="join_date" class="form-control"></br>
        <label>Fee</label></br>
        <input type="number" placeholder="Enter Fee" name="fee" id="fee" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop