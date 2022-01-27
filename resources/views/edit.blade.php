@include('include.head')
<style>
 .container{
        box-shadow: 0 5px 15px rgba(0,0,0,.5);
       
    }
    .button{
        margin-left: 160px;
    }

</style>
@if(Session::has('success'))
<span>{{Session::get('success')}}</span>
@endif
<div class="container border border-success col-5 mt-5">
    <h3 class="header text-center text-success">Update details</h3>
<form method="post" action="{{url('update')}}">
@csrf
<input type="hidden" name="id" value="{{$edit->id}}">
  <div class="form-group">
    <input type="text" class="form-control col-12" value="{{$edit->name}}" name="name" placeholder="Enter Name">
  </div>
  <div class="form-group">
    <input type="text" class="form-control col-12" value="{{$edit->lastname}}" name="lastname" id="exampleInputPassword1" placeholder="lastName">
  </div>
  <div class="form-group">
    <input type="text" class="form-control col-12" value="{{$edit->department}}" name="department" id="exampleInputPassword1" placeholder="department">
  </div>
  <div class="form-group">
    <input type="text" class="form-control col-12" value="{{$edit->location}}" name="location" id="exampleInputPassword1" placeholder="location">
  </div>
  <input type="submit" name="sub" value="update" class="button btn btn-warning">
</form>
</div>