@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="">
@endsection

@section('content')
<div class="container">
    
    
  
<div class="container">

  <form method="post" action="{{route('zones.store')}}" enctype="multipart/form-data">
    @csrf

<div class="mb-3 row">
    <h3 class="col-sm-4 text-end">ADD ZONE</h3>
    
  </div>

	<div class="mb-3 row">
    <label for="staticEmail" class="col-sm-3 col-form-label text-end fw-bold">Zone Code</label>
    <div class="col-sm-2">
      <input type="text"  class="form-control" name="code" value="{{$zone_code}}" readonly>
    </div>
  </div>
  
 <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-3 col-form-label text-end fw-bold">Zone Long Description</label>
    <div class="col-sm-3">
      <input type="text"  class="form-control" name="long_description" placeholder="Ex. ZONE 1">
    </div>
  </div>
  
  <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-3 col-form-label text-end fw-bold">Short Description</label>
    <div class="col-sm-3">
      <input type="text"  class="form-control" name="short_description" placeholder="Ex. Z01">
    </div>
  </div>
  
  <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-3 col-form-label text-end"></label>
    <div class="col-sm-3">
      <button type="post" class="btn btn-success">SAVE</button>
    </div>
  </div>
  
</form>
  
  
   
</div>


</div>
@endsection

@section('js')
@endsection