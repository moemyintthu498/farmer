@extends('frontendtemplate')
@section('front')
<form class="col-md-6 my-5 container-fluid">
	<div class="form-group">
		<label for="exampleInputEmail1" class="text-success">အမည်</label>
		<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="">
	</div>
	<div>
		<label for="exampleInputEmail1">လိပ်စာ</label>
		<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
	</div>
	<div>
		<label for="exampleInputEmail1">ဖုန်း</label>
		<input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
	</div>
	<div>
		<label for="exampleInputEmail1">crop</label>
		<input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
	</div>
	<div>
		<label for="exampleInputEmail1">Quantity</label>
		<input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
	</div>
	<form>
  <div class="form-group">
    <label for="photo">photo</label>
    <input type="file" class="form-control-file" id="photo">
  </div>
  <a href="" class="btn btn-success col-md-2 float-right">Sell</a>
</form>


@endsection