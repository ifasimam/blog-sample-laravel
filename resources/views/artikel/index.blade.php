@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Title</td>
          <td>Image</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $datas)
        <tr>
            <td>{{$datas->id}}</td>
            <td>{{$datas->title}}</td>
            <td>{{$datas->image}}</td>
            <td><a href="{{ route('artikel.edit',$datas->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('artikel.destroy', $datas->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
@endsection