@extends('layouts.master')
@section('content')
@section('title','Book List')
<style>
  .uper {
    margin-top: 40px;
  }
</style>

  <div class="card uper">

  <div class="card-header">
    <a class="btn btn-primary" href="{{route('book.create')}}">Add new Book</a>
  </div>
  <br/>
  <div class="card-body">
     @if(Session::has('flash_message_error'))
        <div class="alert alert-sm alert-danger alert-block" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times; </span>
        </button>
        <strong>{!! session('flash_message_error')!!} </strong>
        </div>
        @endif
        @if(Session::has('flash_message_success'))
        <div class="alert alert-sm alert-success alert-block" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times; </span>
        </button>
        <strong>{!! session('flash_message_success')!!} </strong>
        </div>
        @endif
         <div class="table-responsive">
    <table id="list_table" class="table table-bordered table-striped table-hover">
    <thead>
        <tr>
          <td><b>Sr.No</b></td>
          <td><b>Book Name</b></td>
          <td><b>Book Author</b></td>
          <td><b>Book Description</b></td>
          <td colspan="2"><b>Action</b></td>
        </tr>
    </thead>
    <tbody>
      @foreach($booksData as $key=>$Data)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$Data->book_name}}</td>
            <td>{{$Data->book_author}}</td>
            <td>{{$Data->book_description}}</td>
            <td>
              <a href="{{route('book.show',base64_encode($Data->id))}}" class="btn btn-success" href="">Show</a>
              <a href="{{route('book.edit',base64_encode($Data->id))}}" class="btn btn-primary">Edit</a> 
              <a href="{{route('book.delete',base64_encode($Data->id))}}" class="btn btn-warning">Delete</a>
           </td>
        </tr>
        @endforeach
      </tbody>
  </table>
</div>
  </div>
</div>
@endsection
@section('js')
<script>
$(document).ready( function () {
    $('#list_table').DataTable();
    });
</script>
@endsection