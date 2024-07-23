@extends('layouts')

@section('content')
   <div class="col-md-10">
    <a href="{{route('student.create')}}" class="btn btn-sm btn-success">Add Record</a>
    <table class="table table-bordered mt-4 table-striped"> 
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>View</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        @foreach ($students as  $student)
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->email}}</td>
                <td>
                    <a href="{{route('student.show',$student->id)}}" class="btn btn-sm btn-warning">View</a>
                </td>
                <td>
                    <a href="{{route('student.edit',$student->id)}}" class="btn btn-sm btn-primary">Update</a> 
                </td>
                <td>
                    <form action="{{route('student.destroy', $student->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" >Delete</button>
                       </form>
                 </td>
            </tr>
        @endforeach
      </table>
   </div>
@endsection