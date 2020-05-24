@extends('layouts.master')
@section('content')
@section('title','show post')
<style>
  .uper {
    margin-top: 40px;
  }
  .error {
    color: red;
    font-size: 12px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    <a class="btn btn-primary" href="{{route('book.list')}}">Go Back</a>
  </div>
  <br/>
  <div class="card-body">
  <div class="form-group">
             <label for="name">Book Name:</label>
              <input type="text" class="form-control" value="{{$bookShow->book_name}}" readonly="" />
          </div>
          <div class="form-group">
             <label for="author">Book Author:</label>
              <input type="text" class="form-control" value="{{$bookShow->book_author}}" readonly="" />
          </div>
         <div class="form-group">
              <label for="description">Description:</label>
              <textarea class="form-control" readonly="">{{$bookShow->book_author}}</textarea>
         </div>
   </div>
</div>
@endsection

