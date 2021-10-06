@extends('layouts.app')

@section('css')
@endsection

@section('content')


  
<div class="container">

<div class="mb-3 row">
    <label for="staticEmail" class="col-sm-3 col-form-label text-end fw-bold">ADD TERRITORY</label>
    
  </div>

	<div class="mb-3 row">
    <label for="staticEmail" class="col-sm-3 col-form-label text-end fw-bold">Zone</label>
    <div class="col-sm-2">
      <select class="form-select" aria-label="Default select example">
  <option selected>Select</option>
  <option value="1">One</option>
  
</select>
    </div>
  </div>
  
  
	<div class="mb-3 row">
    <label for="staticEmail" class="col-sm-3 col-form-label text-end fw-bold">Region</label>
    <div class="col-sm-2">
      <select class="form-select" aria-label="Default select example">
  <option selected>Select</option>
  <option value="1">One</option>
  
</select>
    </div>
  </div>
  
  
 <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-3 col-form-label text-end fw-bold">Territory Code</label>
    <div class="col-sm-3">
      <input type="text"  class="form-control" id="staticEmail" placeholder="Automatically">
    </div>
  </div>
  
  <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-3 col-form-label text-end fw-bold">Territory Name</label>
    <div class="col-sm-3">
      <input type="text"  class="form-control" id="staticEmail" placeholder="Ex. TERRITORY 1">
    </div>
  </div>
  
  <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-3 col-form-label text-end"></label>
    <div class="col-sm-3">
      <button type="button" class="btn btn-success">SAVE</button>
    </div>
  </div>
  
  
   
</div>


@endsection

@section('js')
@endsection