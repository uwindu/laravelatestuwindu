@extends('layouts.app')

@section('css')
@endsection

@section('content')


<div class="container">



<div class="mb-3 row">
    <label for="staticEmail" class="col-sm-3 col-form-label text-end fw-bold">ADD REGION</label>
    
  </div>
  <form method="post" action="{{route('regions.update',$region['id'])}}">
    @method('PUT')
    @csrf

	<div class="mb-3 row">
    <label for="staticEmail" class="col-sm-3 col-form-label text-end fw-bold">Zone</label>
    <div class="col-sm-2">
      <select class="form-select" aria-label="Default select example" name="zone_id">
      
        @forelse ($zones as $zone)
            <option value="{{$zone->id}}" @if($region->zone_id == $zone->id) selected @endif>{{$zone->short_description}}</option>
        @empty
          <option value="">no options</option>
        @endforelse
      </select>
    </div>
  </div>
  
 <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-3 col-form-label text-end fw-bold">Region Code</label>
    <div class="col-sm-3">
      <input type="text"  class="form-control" name="code" value="{{$region->code}}">
    </div>
  </div>
  
  <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-3 col-form-label text-end fw-bold">Region Name</label>
    <div class="col-sm-3">
      <input type="text"  class="form-control" name="name" value="{{$region->name}}">
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



@endsection

@section('js')
@endsection