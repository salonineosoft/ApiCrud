@include('include.head')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show </title>
    <style>
      .table{
          align-items: center;
          margin-top: 85px;

      }
      td,th{
          padding: 5px;
          border:1px solid;
      }
      .ad{
          margin-top: 40px;
      }

    </style>
</head>
<body>
@if(Session::has('delete'))
<span>{{Session::get('delete')}}</span>
@endif
    <div class="container"> 
    <a href="{{('addpost')}}" class=" ad btn btn-primary">Add Post</a>
    <table class="table bg-black">
        <tr>
            <th scope="col">S.N</th>
            <th scope="col">Name</th>
            <th scope="col">LastName</th>
            <th scope="col">Department</th>
            <th scope="col">Location</th>
            <th scope="col">Action</th>
        </tr>
        @php
        $sn=1;
        @endphp
        @foreach($show as $i)
        <tr>
            <td>{{$sn++}}</td>
            <td>{{$i->name}}</td>
            <td>{{$i->lastname}}</td>
            <td>{{$i->department}}</td>
            <td>{{$i->location}}</td>
            <td>
                <a href="edit/{{$i->id}}"class="btn btn-success">Edit</a>
                <a href="delete/{{$i->id}}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
    </div>
</body>
</html>