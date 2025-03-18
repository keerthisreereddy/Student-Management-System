@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Show Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Enroll No : {{ $enrollments->enroll_no }}</h5>
        <p class="card-text">Batch Id: {{ $enrollments->batch->name }}</p>
        <p class="card-text">Student Id : {{ $enrollments->student->name }}</p>
        <p class="card-text">Join date : {{ $enrollments->join_date }}</p>
        <p class="card-text">Fee : {{ $enrollments->fee }}</p>

  </div>
       
    </hr>
  
  </div>
</div>
@endsection