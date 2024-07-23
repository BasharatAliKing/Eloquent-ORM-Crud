@extends('layouts')

@section('content')
 <form method="POST" action="{{route('student.store')}}" class="col-md-4 border p-3 rounded bg-">
    @csrf
    <h3 class="my-2">Add Data</h3>
    <div class="py-2">
        <label for="">Name:</label>
        <input type="text" value="{{old('name')}}" class="form-control @error('name') is-invalid  @enderror" name="name">
        <span class="text-danger">@error('name') {{$message}} @enderror</span>
    </div>
    <div class="py-2">
        <label for="">Email:</label>
        <input type="text" value="{{old('name')}}" class="form-control @error('email') is-invalid  @enderror" name="email">
        <span class="text-danger">@error('email') {{$message}} @enderror</span>
    </div>
    <button class="btn btn-sm btn-success mt-2" type="submit">Add Data</button>
 </form>
@endsection