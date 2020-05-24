@extends('layouts.master')
@section('content')
@section('title','edit post')
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
  <div class="card-body">
  <form method="post" name="editBook" id="editBook" action="{{route('book.update',$booksData->id)}}">
         @csrf
          <div class="form-group">
             <label for="name">Book Name:</label>
              <input type="text" class="form-control" name="book_name" value="{{$booksData->book_name}}" id="name" />
              @error('book_name')
                <div class="error">{{ $message }}</div>
                @enderror
          </div>
          <div class="form-group">
             <label for="author">Book Author:</label>
              <input type="text" class="form-control" name="book_author" value="{{$booksData->book_author}}" id="author" />
              @error('book_author')
                <div class="error">{{ $message }}</div>
                @enderror
          </div>
         <div class="form-group">
              <label for="description">Description:</label>
              <textarea name="book_description" id="description" class="form-control">{{$booksData->book_description}}</textarea>
              @error('book_description')
                <div class="error">{{ $message }}</div>
                @enderror
         </div>
          <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection
@section('js')
<script>
$(document).ready(function () {
   $('#editBook').validate({ 
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
