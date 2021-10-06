@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0">
                <div class="mb-3 row">
                    <h3 class="col-sm-6 ms-5 text-end">ADD USERS</h3>
                    
                  </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row my-3">
                            <label for="name" class="col-md-4 col-form-label text-end fw-bold">{{ __('Name') }}</label>

                            <div class="col-md-3">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row my-3">
                            <label for="name" class="col-md-4 col-form-label text-end fw-bold">{{ __('NIC') }}</label>

                            <div class="col-md-4">
                                <input id="nic" type="text" class="form-control @error('nic') is-invalid @enderror" name="nic" value="{{ old('nic') }}" required autocomplete="nic" autofocus>

                                @error('nic')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="form-group row my-3">
                            <label for="name" class="col-md-4 col-form-label text-end fw-bold">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                           
                        <div class="form-group row my-3">
                            <label for="name" class="col-md-4 col-form-label text-end fw-bold">{{ __('Mobile') }}</label>

                            <div class="col-md-4">
                                <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile" autofocus>

                                @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row my-3">
                            <label for="email" class="col-md-4 col-form-label  text-end fw-bold">{{ __('E-Mail') }}</label>

                            <div class="col-md-4">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row my-3">
                            <label for="email" class="col-md-4 col-form-label  text-end fw-bold">{{ __('Gender') }}</label>
                            <div class="col-sm-2">
                              <select class="form-select" aria-label="Default select example"  name="gender">
                          <option value="M">Male</option>
                          <option value="F">FeMale</option>
                          
                        </select>
                            </div>
                          </div>


                        <div class="form-group row my-3">
                            <label for="email" class="col-md-4 col-form-label  text-end fw-bold">{{ __('Territory') }}</label>
                            <div class="col-sm-2">
                                <select class="form-select" aria-label="Default select example" name="territory_id">
      
                                    @forelse ($territorys as $territory)
                                        <option value="{{$territory->id}}">{{$territory->code}}</option>
                                    @empty
                                      <option value="">no options</option>
                                    @endforelse
                                  </select>
                            </div>
                          </div>



                        <div class="form-group row my-3">
                            <label for="email" class="col-md-4 col-form-label  text-end fw-bold">{{ __('User Name') }}</label>

                            <div class="col-md-4">
                                <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username">

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row my-3">
                            <label for="password" class="col-md-4 col-form-label  text-end fw-bold">{{ __('Password') }}</label>

                            <div class="col-md-3">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row my-3">
                            <label for="password-confirm" class="col-md-4 col-form-label  text-end fw-bold">{{ __('Confirm Password') }}</label>

                            <div class="col-md-3">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
