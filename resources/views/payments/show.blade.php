@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Show Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Enrollment No : {{ $item->enrollment->enroll_no }}</h5>
        <p class="card-text">Paid Date : {{ $items->paid_date }}</p>
        <p class="card-text">Amount : {{ $item->amount }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection