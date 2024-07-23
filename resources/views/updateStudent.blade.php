@extends('layouts')

@section('content')
 <form method="POST" action="{{route('student.update',$student->id)}}" class="col-md-4 border p-3 rounded bg-">
    @csrf
    @method('PUT')
    <h3 class="my-2">Update Data</h3>
    <div class="py-2">
        <label for="">Name:</label>
        <input type="text" value="{{$student->name}}" class="form-control" name="name">
    </div>
    <div class="py-2">
        <label for="">Email:</label>
        <input type="text" class="form-control" value="{{$student->email}}" name="email">
    </div>
    <button class="btn btn-sm btn-success mt-2" type="submit">Update Data</button>
 </form>
@endsection