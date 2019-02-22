@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('save') }}">
                            {{ csrf_field() }}



                            <h1 style="text-align:center; font-style:italic" ;> volunteer information </h1><br>

                            <div class="row">
                                <div class="col-md-6 form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                    <label for="first_name" class="col-md-4 control-label">First Name</label>

                                    <div class="col-md-6">
                                        <input id="first_name" type="text" class="form-control" name="first_name"
                                               value="{{ old('first_name') }}" required autofocus>

                                        @if ($errors->has('first_name'))
                                            <span class="help-block">
	                                        <strong>{{ $errors->first('first_name') }}</strong>
	                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div  style="background-image: url({{asset('image')}})" class="col-md-6 form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                    <label for="last_name" class="col-md-4 control-label">Last Name</label>

                                    <div class="col-md-6">
                                        <input id="last_name" type="text" class="form-control" name="last_name"
                                               value="{{ old('last_name') }}" required autofocus>

                                        @if ($errors->has('last_name'))
                                            <span class="help-block">
								                <strong>{{ $errors->first('last_name') }}</strong>
											</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                            <div class="form-group{{ $errors->has('sex') ? ' has-error' : '' }}">
                                <label for="sex" class="col-md-2 control-label">Sex</label>

                                <div class="col-md-6">

                                      <select class="form-control" id="sex" name="sex" required autofocus>
                                        <option></option>
                                        <option>Male</option>
                                        <option>Female</option>
                                      </select>

                                    @if ($errors->has('sex'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('sex') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="col-md-6 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">Email</label>

                                <div class="col-md-6">
                                    <input id="email" type="text" class="form-control" name="email"
                                           value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                      <strong>{{ $errors->first('email') }}</strong>
                                  </span>
                                    @endif
                                </div>
                            </div>
                            </div>


                            <div class="row">
                            <div class="form-group{{ $errors->has('date_of_birth') ? ' has-error' : '' }}">
                                <label for="date_of_birth" class="col-md-2 control-label">Date Of Birth</label>

                                <div class="col-md-6">
                                    <input id="date_of_birth" type="date" class="form-control" name="date_of_birth"
                                           value="{{ old('date_of_birth') }}" required autofocus>

                                    @if ($errors->has('date_of_birth'))
                                        <span class="help-block">
                                      <strong>{{ $errors->first('date_of_birth') }}</strong>
                                  </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('place_of_birth') ? ' has-error' : '' }}">
                                <label for="place_of_birth" class="col-md-4 control-label">Place of Birth</label>

                                <div class="col-md-6">
                                    <input id="place_of_birth" type="text" class="form-control" name="place_of_birth"
                                           value="{{ old('place_of_birth') }}" required autofocus>

                                    @if ($errors->has('place_of_birth'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('place_of_birth') }}</strong>
                                  </span>
                                    @endif
                                </div>
                            </div>
                            </div>

                            <div class="form-group{{ $errors->has('blood_group') ? ' has-error' : '' }}">
                                <label for="blood_group" class="col-md-4 control-label">Blood Group </label>

                                <div class="col-md-6">
                                  <select class="form-control" id="blood_group" name="blood_group" required autofocus>
                                    <option></option>
                                    <option>A+</option>
                                    <option>A-</option>
                                    <option>B+</option>
                                    <option>B-</option>
                                    <option>O+</option>
                                    <option>O-</option>
                                    <option>AB+</option>
                                    <option>AB-</option>
                                  </select>


                                    @if ($errors->has('blood_group'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('blood_group') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                              <label for="address" class="col-md-4 control-label">Address</label>

                              <div class="col-md-6">
                                  <input id="address" type="text" class="form-control" name="address"
                                         value="{{ old('address') }}" required autofocus>

                                  @if ($errors->has('address'))
                                      <span class="help-block">
                                    <strong>{{ $errors->first('address') }}</strong>
                                </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('education_level') ? ' has-error' : '' }}">
                              <label for="education_level" class="col-md-4 control-label">Educational level </label>

                              <div class="col-md-6">
                                <select class="form-control" id="education_level" name="education_level" required autofocus>
                                  <option></option>
                                  <option>primary School</option>
                                  <option>Junior School</option>
                                  <option>High School</option>
                                  <option>tertiary institute</option>
                                  <option>others</option>

                                </select>


                                  @if ($errors->has('education_level'))
                                      <span class="help-block">
                                      <strong>{{ $errors->first('education_level') }}</strong>
                                  </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('contact') ? ' has-error' : '' }}">
                              <label for="contact" class="col-md-4 control-label">contact</label>

                              <div class="col-md-6">
                                  <input id="contact" type="text" class="form-control" name="contact"
                                         value="{{ old('contact') }}" required autofocus>

                                  @if ($errors->has('contact'))
                                      <span class="help-block">
                                    <strong>{{ $errors->first('contact') }}</strong>
                                </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('area_of_intrest') ? ' has-error' : '' }}">
                              <label for="area_of_intrest" class="col-md-4 control-label">Area of intrest </label>

                              <div class="col-md-6">
                                <select class="form-control" id="area_of_intrest" name="area_of_intrest" required autofocus>
                                  <option></option>
                                  <option>first Aid</option>
                                  <option>Dessimination</option>
                                  <option>Dissater Managment</option>
                                  <option>Leadership</option>
                                </select>


                                  @if ($errors->has('area_of_intrest'))
                                      <span class="help-block">
                                      <strong>{{ $errors->first('area_of_intrest') }}</strong>
                                  </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('undergone_training') ? ' has-error' : '' }}">
                              <label for="undergone_training" class="col-md-4 control-label">undergone any training </label>

                              <div class="col-md-6">

                                <select class="form-control" id="undergone_training" name="undergone_training" required autofocus>
                                  <option></option>
                                  <option>None</option>
                                  <option>first Aid</option>
                                  <option>Dessimination</option>
                                  <option>Dissater Managment</option>
                                  <option>Leadership</option>
                                </select>


                                  @if ($errors->has('undergone_training'))
                                      <span class="help-block">
                                      <strong>{{ $errors->first('undergone_training') }}</strong>
                                  </span>
                                  @endif
                              </div>
                          </div>







                            </div>


                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
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
