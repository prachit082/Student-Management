@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Course</div>
  <div class="card-body">
      
      <form action="{{ url('courses') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" placeholder="Enter Course Name" name="name" id="name" class="form-control"></br>
        <label>Syllabus</label></br>
        <input type="text" placeholder="Enter Syllabus Topic Name" name="syllabus" id="syllabus" class="form-control"></br>
        <label>Duration</label></br>
        <input type="text" placeholder="Enter No. In Months" name="duration" id="duration" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop