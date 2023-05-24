<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addstudent</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-md-12">
    
    <h2>Add student</h2>
    @if(Session::has('success'))
   <div class="alert alert-success" role="alert">
       {{Session::get('success')}}
   </div>

    @endif
    <form action="{{url('save')}}" method="post">
        @csrf
        <div class="md-3">
     <label cllass="form-label">Name</label>
     <input type="text" class="form-control" name="name" placeholder="Enter your Name" value="{{old('name')}}">
     <span class="text-danger">
     @error('name')
     
         {{$message}}
     
     @enderror
</span>
</div>
<div class="md-3">
     <label cllass="form-label">Email</label>
     <input type="email" class="form-control" name="email" placeholder="Enter your mail" value="{{old('email')}}">
     <span class="text-danger">
     @error('email')
     
         {{$message}}
     
     @enderror
</span>
</div>
<div class="md-3">
     <label cllass="form-label">phone</label>
     <input type="text" class="form-control" name="phone" placeholder="Enter your number" value="{{old('phone')}}">
     <span class="text-danger">
     @error('phone')
     
         {{$message}}
     
     @enderror
</span>
</div>
<div class="md-3">
     <label cllass="form-label">Address</label>
     <textarea class="form-control" name="address"> {{old('address')}}
         
<</textarea>
<span class="text-danger">
     @error('address')
     
         {{$message}}
     
     @enderror
</span>
</div><br>
<button type="submit" class="btn btn-primary">submit</button>
<a href="{{url('list')}}" class="btn btn-danger">back</a>
    </form>
    </div>
    </div>
    </div>
</body>
</html>