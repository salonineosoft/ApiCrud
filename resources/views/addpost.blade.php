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
    <h3 class="header text-center text-success">Add details</h3>
<form method="post" action="insertdb">
@csrf

  <div class="form-group">
    <input type="text" class="form-control col-12" name="name" placeholder="Enter Name">
  </div>
  <div class="form-group">
    <input type="text" class="form-control col-12"  name="lastname" id="exampleInputPassword1" placeholder="lastName">
  </div>
  <div class="form-group">
    <input type="text" class="form-control col-12"  name="department" id="exampleInputPassword1" placeholder="department">
  </div>
  <div class="form-group">
    <input type="text" class="form-control col-12"  name="location" id="exampleInputPassword1" placeholder="location">
  </div>
  <input type="submit" name="sub" value="Add" class="button btn btn-warning">
</form>
</div>