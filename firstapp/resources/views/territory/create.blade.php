@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="">
@endsection

@section('content')
<div class="container">
    
    
  
<div class="container">

  <form method="post" action="{{route('territorys.store')}}" enctype="multipart/form-data">
    @csrf

<div class="mb-3 row">
    <h3 class="col-sm-4 text-end">ADD Territory</h3>
    
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
    <label for="staticEmail" class="col-sm-3 col-form-label text-end fw-bold">Region</label>
    <div class="col-sm-2">
      <select class="form-select" aria-label="Default select example" name="region_id">
      
        @forelse ($regions as $region)
            <option value="{{$region->id}}">{{$region->code}}</option>
        @empty
          <option value="">no options</option>
        @endforelse
      </select>
    </div>
  </div>

 <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-3 col-form-label text-end fw-bold">Territory Code</label>
    <div class="col-sm-3">
      <input type="text"  class="form-control" name="code" placeholder="Ex. ZONE 1">
    </div>
  </div>
  
  <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-3 col-form-label text-end fw-bold"> Territory Name</label>
    <div class="col-sm-3">
      <input type="text"  class="form-control" name="name" placeholder="Ex. Z01">
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