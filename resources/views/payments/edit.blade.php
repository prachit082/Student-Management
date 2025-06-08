@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Batch Details</div>
  <div class="card-body">
      
      <form action="{{ url('payments/' .$payment->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$payment->id}}" id="id" />
        <label>Enrollment No.</label><br>
        <select name="enrollment_id" id="enrollment_id" class="form-control">
            @foreach($payments as $id => $enroll_no)
                <option value="{{ $id }}" {{ $payment->enrollment_id == $id ? 'selected' : '' }}>
                    {{ $enroll_no }}
                </option>
            @endforeach
        </select><br>
        <label>Paid Date</label></br>
        <input type="date" name="paid_date" id="paid_date" value="{{$payment->paid_date}}" class="form-control"></br>
        <label>Amount</label></br>
        <input type="number" name="amount" id="amount" value="{{$payment->amount}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@endsection