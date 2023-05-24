<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student list</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Student List</h2>
                @if(Session::has('success'))
   <div class="alert alert-success" role="alert">
       {{Session::get('success')}}
   </div>

    @endif
   
            
    <div style=float:right> 
   
    
        <a href={{url('add')}}  class="btn btn-primary">Add</a>
    </div>
<table class="table" >
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">Email</th>
      <th scope="col">phone</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
      @foreach($deta as $stu)
    <tr>
      <td>{{$stu->id}}</td>
      <td>{{$stu->name}}</td>
      <td>{{$stu->email}}</td>
      <td>{{$stu->phone}}</td>
      <td>{{$stu->address}}</td>
      <td> 
    
    <a href={{url('edit/'.$stu->id)}}  class="btn btn-primary">Edit</a>
| 
    
    <a href={{url('delete/'.$stu->id)}}  class="btn btn-danger">delete</a>
</td>
      
      
    
    </tr>
  @endforeach
  </tbody>
</table>
</div>
        </div>
    </div>
</body>
</html>