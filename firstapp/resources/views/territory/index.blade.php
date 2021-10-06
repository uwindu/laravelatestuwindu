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
                            <a href="{{ route('territorys.create') }}" class="btn btn-primary btn-sm mb-3 float-right">Add New</a>
                        </div>
                    </div>
                    <table class="table company-list">
                        <thead>
                          <tr>
                            <th scope="col">Code</th>
                            <th scope="col">Region</th>
                            <th scope="col">Territory Code</th>
                            <th scope="col">Territory Name</th>
                            <th scope="col" style="width:20%">Action</th>
                            
                         </tr>
                        </thead>
                        <tbody>
                        @forelse ($territorys as $territory)
                            <tr>
                                
                                <td>{{$territory['zone_id']}}</td>
                                <td>{{$territory['region_id']}}</td>
                                <td>{{$territory['code']}}</td>
                                <td>{{$territory['name']}}</td>
                                <td>
                                    <form action="{{ route('territorys.destroy',$territory['id']) }}" method="POST">
                                        <a href="{{ route('territorys.edit',$territory['id']) }}" class="btn btn-primary btn-sm mx-1">edit</a>
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