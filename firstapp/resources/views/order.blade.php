@extends('layouts.app')

@section('css')
@endsection

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  
<div class="container">

<div class="mb-3 row">
    <label for="staticEmail" class="col-sm-3 col-form-label text-end fw-bold">ADD REGION</label>
    
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
    <label for="staticEmail" class="col-sm-3 col-form-label text-end fw-bold">Region Code</label>
    <div class="col-sm-3">
      <input type="text"  class="form-control" id="staticEmail" placeholder="Automatically">
    </div>
  </div>
  
  <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-3 col-form-label text-end fw-bold">Region Name</label>
    <div class="col-sm-3">
      <input type="text"  class="form-control" id="staticEmail" placeholder="Ex. REGION 1">
    </div>
  </div>
  
  <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-3 col-form-label text-end"></label>
    <div class="col-sm-3">
      <button type="button" class="btn btn-success">SAVE</button>
    </div>
  </div>
  
  
  
  
   
</div>

</body>
</html>

@endsection

@section('js')
@endsection