@extends('layouts.app')

@section('css')
@endsection

@section('content')


  
<div class="container">

<div class="mb-3 row">
    <label for="staticEmail" class="col-sm-3 col-form-label text-end fw-bold">ADD SKU</label>
    
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
    <label for="staticEmail" class="col-sm-3 col-form-label text-end fw-bold">SKU ID</label>
    <div class="col-sm-3">
      <input type="text"  class="form-control" name="staticEmail" placeholder="Automatically">
    </div>
  </div>
    
 <div class="mb-3 row">
  <label for="staticEmail" class="col-sm-3 col-form-label text-end fw-bold">SKU Code</label>
  <div class="col-sm-3">
    <input type="text"  class="form-control" name="staticEmail" placeholder="Automatically">
  </div>
</div>
  
  <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-3 col-form-label text-end fw-bold">SKU Name</label>
    <div class="col-sm-3">
      <input type="text"  class="form-control" name="staticEmail" placeholder="Main Product Name/auto">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-3 col-form-label text-end fw-bold">MRP</label>
    <div class="col-sm-3">
      <input type="text"  class="form-control" name="staticEmail" placeholder="Main Product Name/auto">
    </div>
  </div>

  
  <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-3 col-form-label text-end fw-bold">Distributor Price</label>
    <div class="col-sm-3">
      <input type="text"  class="form-control" name="staticEmail" >
    </div>
  </div>

  
  <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-3 col-form-label text-end fw-bold">Weight/Volume</label>
    <div class="col-sm-3">
      <input type="text"  class="form-control" name="staticEmail" placeholder="Main Product Name/auto">
    </div>

    <div class="col-sm-3">
    <select class="form-select" aria-label="Default select example">
      <option selected>Select</option>
    </select>
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