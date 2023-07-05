<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mx-4">
                <div class="card-body p-4">
                                        @if(Session::has('message'))
                                            <div class="alert {{ Session::get('alert-class') }}">
                                                {{ Session::get('message') }}
                                            </div>
                                        @endif
                    <form method="post" action="{{Route('createDriver')}}">
                        @csrf
                        <h1>Add New Driver </h1>
                        <p class="text-muted">Create New account</p>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="cil-user"></i>
                              </span>
                            </div>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                   name="name" value="{{ old('name') }}"
                                   placeholder="Full Name">
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="cil-envelope-open"></i>
                                </span>
                            </div>
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                   name="email" value="{{ old('email') }}" placeholder="Email">
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="cil-lock-locked"></i>
                              </span>
                            </div>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                   name="password" placeholder="Password">
                            @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                       
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="cil-user"></i>
                              </span>
                            </div>
                            <input type="text" class="form-control @error('nId') is-invalid @enderror"
                                   name="nId" value="{{ old('nId') }}"
                                   placeholder="National id">
                            @error('nId')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="cil-user"></i>
                              </span>
                            </div>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                   name="phone" value="{{ old('phone') }}"
                                   placeholder="Phone Number">
                            @error('phone')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="cil-user"></i>
                              </span>
                            </div>
                            <input type="text" class="form-control @error('age') is-invalid @enderror"
                                   name="age" value="{{ old('age') }}"
                                   placeholder="Age">
                            @error('age')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="cil-user"></i>
                              </span>
                            </div>
                            <input type="text" class="form-control @error('ambulance_spot_id') is-invalid @enderror"
                                   name="ambulance_spot_id" value="{{ old('ambulance_spot_id') }}"
                                   placeholder="ambulance_spot_id">
                            @error('ambulance_spot_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                
                            </div>
                            
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input class="custom-control-input" type="radio" value="morning" id="morning" name="shift">
                                    <label class="custom-control-label" for="morning">Morning Shift</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input class="custom-control-input" type="radio" value="night" id="night" name="shift">
                                    <label class="custom-control-label" for="night">Night Shift</label>
                                </div>
                        </div>
                                    <button type="submit" class="btn btn-primary btn-block btn-flat">Add</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
