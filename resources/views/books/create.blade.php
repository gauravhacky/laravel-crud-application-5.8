@extends('layouts.master')
@section('content')
@section('title','create post')
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
    <a class="btn btn-primary" href="{{route('book.create')}}">Add new Book</a>
  </div>
  <br/>
  <div class="card-body">
  <form method="post" id="addBook" name="addBook" action="{{route('book.store')}}">
         @csrf
          <div class="form-group">
             <label for="name">Book Name:</label>
              <input type="text" class="form-control" name="book_name" id="name" />
               @error('book_name')
                <div class="error">{{ $message }}</div>
                @enderror
          </div>
          <div class="form-group">
             <label for="author">Book Author:</label>
              <input type="text" class="form-control" name="book_author" id="author" />
               @error('book_author')
                <div class="error">{{ $message }}</div>
                @enderror
          </div>
         <div class="form-group">
              <label for="description">Description:</label>
              <textarea name="book_description" id="description" class="form-control"></textarea>
               @error('book_description')
                <div class="error">{{ $message }}</div>
                @enderror
         </div>
          <button type="submit" class="btn btn-primary">Save</button>
      </form>
  </div>
</div>
@endsection
@section('js')
<script>
$(document).ready(function () {
    $('#addBook').validate({ 
        rules: {
          book_name: {
                required: true,
            },
            book_author: {
                required: true,
            },
            book_description: {
                required: true,
            },
            address: {
                required: true,
            }
        }
    });
});
</script>
@endsection


