@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="">
@endsection

@section('content')
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('zones') }}</div>
                <div class="card-body">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{ route('zones.create') }}" class="btn btn-primary btn-sm mb-3 float-right">Add New</a>
                        </div>
                    </div>
                    <table class="table company-list">  
                        <thead>
                          <tr>
                            <th scope="col">Code</th>
                            <th scope="col">Short Description</th>
                            <th scope="col">Long Description</th>
                            <th scope="col" style="width:20%">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        @forelse ($zones as $zone)
                            <tr>
                                <td>{{$zone['code']}}</td>
                                <td>{{$zone['short_description']}}</td>
                                <td>{{$zone['long_description']}}</td>
                                <td>
                                    <form action="{{ route('zones.destroy',$zone['id']) }}" method="POST">
                                        <a href="{{ route('zones.edit',$zone['id']) }}" class="btn btn-primary btn-sm mx-1">edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm mx-1">Delete</button>
                                    </form>
                                </td>
                            </tr> 
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">{{ __('No Company Found') }}</td>
                            </tr>
                        @endforelse                  
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
@endsection