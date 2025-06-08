@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Batch Details</div>
  <div class="card-body">
      
      <form action="{{ url('batches/' .$batch->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$batch->id}}" id="id" />
        <label>Batch Name</label></br>
        <input type="text" name="name" id="name" value="{{$batch->name}}" class="form-control"></br>
        <label>Course</label><br>
        <select name="course_id" id="course_id" class="form-control">
            @foreach($courses as $id => $name)
                <option value="{{ $id }}" {{ $batch->course_id == $id ? 'selected' : '' }}>
                    {{ $name }}
                </option>
            @endforeach
        </select><br>
        <label>Start Date</label></br>
        <input type="date" name="start_date" id="start_date" value="{{$batch->start_date}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@endsection