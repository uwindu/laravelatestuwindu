@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="">
@endsection

@section('content')
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('') }}</div>
                <div class="card-body">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{ route('regions.create') }}" class="btn btn-primary btn-sm mb-3 float-right">Add New</a>
                        </div>
                    </div>
                    <table class="table company-list">
                        <thead>
                          <tr>
                            <th scope="col">Zone</th>
                            <th scope="col">Region Code</th>
                            <th scope="col">Region Name</th>
                            <th scope="col" style="width:20%">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        @forelse ($regions as $region)
                            <tr>
                                <td>{{$region['zone_id']}}</td>
                                <td>{{$region['code']}}</td>
                                <td>{{$region['name']}}</td>
                                <td>
                                    <form action="{{ route('regions.destroy',$region['id']) }}" method="POST">
                                        <a href="{{ route('regions.edit',$region['id']) }}" class="btn btn-primary btn-sm mx-1">edit</a>
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