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
    <h3 class="col-sm-4 text-end">ADD Region</h3>
    
  </div>

	<div class="mb-3 row">
    <label for="staticEmail" class="col-sm-3 col-form-label text-end fw-bold">Zone</label>
    <div class="col-sm-2">
      <select class="form-select" aria-label="Default select example" name="zone_id">
      
        @forelse ($zones as $zone)
            <option value="{{$zone->id}}">{{$zone->short_description}}</option>
        @empty
          <option value="">no options</option>
        @endforelse
      </select>
    </div>
  </div>

  <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-3 col-form-label text-end fw-bold">Region Code</label>
    <div class="col-sm-2">
      <input type="text"  class="form-control" name="code">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-3 col-form-label text-end fw-bold">Region Name</label>
    <div class="col-sm-2">
      <input type="text"  class="form-control" name="code">
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