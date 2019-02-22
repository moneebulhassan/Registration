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
                    <form action="">
                        <div class="col-md-12">
                            <h1 style="text-align:center; font-style:italic" ;> Patient's information </h1><br>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">First Name:</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Last Name</label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="form-group col-md-12">
                            <label for="">Date of Birth</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Place of Birth:</label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="">Sex:</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">email</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Blood Group</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">address</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">contact</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Education level</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Area of Intrest</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">undergone any training</label>
                            <input type="text" class="form-control">
                        </div>
                        





                    </form>
                    <form action="">
                        <a href="" class="btn btn-danger pull-right">Update</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
