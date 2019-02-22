<?php
/**
 * Created by PhpStorm.
 * User: cayor
 * Date: 10/24/18
 * Time: 3:34 PM
 */ ?>

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="col-md-3" style="background-color: red; margin-right: 9px">
                    <img src="{{url('storage/images/f.jpg')}}" alt="image">
                </div>

                <div class="col-md-8" style="border: 1px solid black">
                    <form action="{{ route('update') }}" method="post">
                        {{ csrf_field() }}

                        <input type="hidden" name="id" value="{{$patient->id}}">
                        <div class="col-md-12">
                            <h1 style="text-align:center; font-style:italic" ;> Volunteer Information </h1><br>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">First Name:</label>
                            <input type="text" name="first_name" class="form-control" value="{{$patient->first_name}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Last Name</label>
                            <input type="text" name="last_name" class="form-control" value="{{$patient->last_name}}">
                        </div>

                        <div class="form-group col-md-12">
                            <label for="">Date of Birth</label>
                            <input type="date" name="date_of_birth" class="form-control"
                                   value="{{$patient->date_of_birth}}">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Place of Birth:</label>
                            <input type="text" name="place_of_birth" class="form-control"
                                   value="{{$patient->place_of_birth}}">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="">Sex:</label>
                            <input type="text" name="sex" class="form-control" value="{{$patient->sex}}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">email</label>
                            <input type="text" name="email" class="form-control"
                                   value="{{$patient->email}}">
                        </div>

                        

                        <div class="form-group col-md-12">
                            <label for="">Blood Group</label>
                            <input type="text" name="blood_group" class="form-control" value="{{$patient->blood_group}}">
                        </div>

                        <div class="form-group col-md-12">
                            <label for="">Address</label>
                            <input type="text" name="address" class="form-control" value="{{$patient->address}}">
                        </div>

                        <div class="form-group col-md-12">
                            <label for="">contact</label>
                            <input type="text" name="contact" class="form-control" value="{{$patient->contact}}">
                        </div>

                        <div class="form-group col-md-12">
                            <label for="">Education Level</label>
                            <input type="text" name="education_level" class="form-control" value="{{$patient->education_level}}">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">area of Intrest</label>
                            <input type="text" name="area_of_intrest" class="form-control" value="{{$patient->area_of_intrest}}">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">undergone any training</label>
                            <input type="text" name="undergone_training" class="form-control" value="{{$patient->undergone_training}}">
                        </div>





                        <div class="col-md-12">
                            <h1 style="text-align:center; font-style:italic" ;> Verification</h1><br>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="">Confirm Password:</label>
                            <input type="password" name="c_password" class="form-control"
                                   placeholder="Please provide the password to update record" required >
                        </div>
                        <div class="row">
                            <div class="col-md-4">

                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-4">
                                <a href="{{route('display')}}" class="btn btn-danger pull-right">Cancel</a>
                                <a href="{{route('print', $patient->id)}}" target="_blank"
                                   class="btn btn-success pull-right">Print</a>
                            </div>
                        </div>
                        <br>
                    </form>

                    <div>
                        @if (session()->has('msg'))
                            <div class="alert alert-dismissable alert-success text-center">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong>
                                    {!! session()->get('msg') !!}
                                </strong>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
