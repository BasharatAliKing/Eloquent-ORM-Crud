@extends('layouts')

@section('content')
  <div class="col-md-4">
    <h2>User Data</h2>
    <table class="table table-bordered mt-4 table-striped">
   <tr>
     <th>Name:</th> <td>{{$student->name}}</td>
 </tr>
 <tr>
     <th>Email:</th> <td>{{$student->email}}</td>
 </tr>
   
    </table>
    <a href="{{route('student.index')}}" class="btn btn-sm btn-info">Back to Homepage</a>
  </div>
@endsection