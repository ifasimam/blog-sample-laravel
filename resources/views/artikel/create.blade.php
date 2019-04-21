@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Artikel
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
    <form method="post" action="{{ route('artikel.store') }}">
        {{ csrf_field() }}
          <div class="form-group">
              @csrf
              <label for="name">Judul :</label>
              <input type="text" class="form-control" name="title"/>
          </div>
          <div class="form-group">
              <label for="price">Content :</label>
              <textarea name="content" rows="10" cols="30" class="form-control"></textarea>
          </div>
          <div class="form-group">
              <label for="quantity">Image :</label>
              <input type="text" class="form-control" name="image"/>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection