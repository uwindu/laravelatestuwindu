@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="">
@endsection

@section('content')
<div class="container">
    
    
  
<div class="container">

  <form method="post" action="{{route('zones.update',$zone['id'])}}" enctype="multipart/form-data">
    @method('PUT')
    @csrf

<div class="mb-3 row">
    <label for="staticEmail" class="col-sm-3 col-form-label text-end fw-bold">ADD ZONE</label>
    
  </div>

	<div class="mb-3 row">
    <label for="staticEmail" class="col-sm-3 col-form-label text-end fw-bold">Zone Code</label>
    <div class="col-sm-2">
      <input type="text"  class="form-control" name="code" value="{{$zone->code}}" disabled>
    </div>
  </div>
  
 <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-3 col-form-label text-end fw-bold">Zone Long Description</label>
    <div class="col-sm-3">
      <input type="text"  class="form-control" name="long_description" value="{{$zone->long_description}}">
    </div>
  </div>
  
  <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-3 col-form-label text-end fw-bold">Short Description</label>
    <div class="col-sm-3">
      <input type="text"  class="form-control" name="short_description"value="{{$zone->short_description}}">
    </div>
  </div>
  
  <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-3 col-form-label text-end"></label>
    <div class="col-sm-3">
      <button type="submit" class="btn btn-success">SAVE</button>
    </div>
  </div>
  
</form>
  
  
   
</div>


</div>
@endsection

@section('js')
@endsection