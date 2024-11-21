<?php $page = 'form-vertical'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Vertical Form
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Vertical Form
        @endslot
    @endcomponent


    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Basic Form</h4>
                </div>
                <div class="card-body">
                    <form action="#">
                        <div class="input-block mb-3">
                            <label class="col-form-label">First Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="input-block mb-3">
                            <label class="col-form-label">Last Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="input-block mb-3">
                            <label class="col-form-label">Email Address</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="input-block mb-3">
                            <label class="col-form-label">Username</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="input-block mb-3">
                            <label class="col-form-label">Password</label>
                            <input type="password" class="form-control">
                        </div>
                        <div class="input-block mb-3">
                            <label class="col-form-label">Repeat Password</label>
                            <input type="password" class="form-control">
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Address Form</h4>
                </div>
                <div class="card-body">
                    <form action="#">
                        <div class="input-block mb-3">
                            <label class="col-form-label">Address Line 1</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="input-block mb-3">
                            <label class="col-form-label">Address Line 2</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="input-block mb-3">
                            <label class="col-form-label">City</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="input-block mb-3">
                            <label class="col-form-label">State</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="input-block mb-3">
                            <label class="col-form-label">Country</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="input-block mb-3">
                            <label class="col-form-label">Postal Code</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Two Column Vertical Form</h4>
                </div>
                <div class="card-body">
                    <form action="#">
                        <h4 class="card-title">Personal Information</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">First Name</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Last Name</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Blood Group</label>
                                    <select class="select">
                                        <option>Select</option>
                                        <option value="1">A+</option>
                                        <option value="2">O+</option>
                                        <option value="3">B+</option>
                                        <option value="4">AB+</option>
                                    </select>
                                </div>
                                <div class="input-block mb-3">
                                    <label class="d-block">Gender:</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="gender_male"
                                            value="option1">
                                        <label class="form-check-label" for="gender_male">Male</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" id="gender_female"
                                            value="option2">
                                        <label class="form-check-label" for="gender_female">Female</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Username</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Email</label>
                                    <input type="text" class="form-control">
                                </div>

                                <div class="input-block mb-3">
                                    <label class="col-form-label">Password</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Repeat Password</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <h4 class="card-title">Postal Address</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Address Line 1</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Address Line 2</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="input-block mb-3">
                                    <label class="col-form-label">State</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-block mb-3">
                                    <label class="col-form-label">City</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Country</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Postal Code</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-0">
                <div class="card-header">
                    <h4 class="card-title mb-0">Two Column Vertical Form</h4>
                </div>
                <div class="card-body">
                    <form action="#">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="card-title">Personal details</h4>
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Name:</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Password:</label>
                                    <input type="password" class="form-control">
                                </div>
                                <div class="input-block mb-3">
                                    <label class="col-form-label">State:</label>
                                    <select class="select">
                                        <option>Select State</option>
                                        <option value="1">California</option>
                                        <option value="2">Texas</option>
                                        <option value="3">Florida</option>
                                    </select>
                                </div>
                                <div class="input-block mb-3">
                                    <label class="col-form-label">Your Message:</label>
                                    <textarea rows="5" cols="5" class="form-control" placeholder="Enter message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h4 class="card-title">Personal details</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">First Name:</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Last Name:</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Email:</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Phone:</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Address line:</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">Country:</label>
                                            <select class="select">
                                                <option>Select Country</option>
                                                <option value="1">USA</option>
                                                <option value="2">France</option>
                                                <option value="3">India</option>
                                                <option value="4">Spain</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">State/Province:</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">ZIP code:</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-block mb-3">
                                            <label class="col-form-label">City:</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
