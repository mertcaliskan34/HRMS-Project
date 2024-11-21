<?php $page = 'job-applicants'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Job Applicants
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Job Applicants
        @endslot
    @endcomponent


    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table mb-0 datatable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Apply Date</th>
                            <th class="text-center">Status</th>
                            <th>Resume</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>John Doe</td>
                            <td>johndoe@example.com</td>
                            <td>9876543210</td>
                            <td>9 Feb 2019</td>
                            <td class="text-center">
                                <div class="dropdown action-label">
                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-regular fa-circle-dot text-info"></i> New
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-info"></i> New</a>
                                        <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i> Hired</a>
                                        <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> Rejected</a>
                                        <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> Interviewed</a>
                                    </div>
                                </div>
                            </td>
                            <td><a href="#" class="btn btn-sm btn-primary"><i class="fa-solid fa-download"></i> Download</a></td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i class="fa-regular fa-clock m-r-5"></i> Schedule Interview</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Maria Sam</td>
                            <td>mariasam@example.com</td>
                            <td>9876543210</td>
                            <td>21 Feb 2019</td>
                            <td class="text-center">
                                <div class="dropdown action-label">
                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-regular fa-circle-dot text-success"></i> Hired
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-info"></i> New</a>
                                        <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-success"></i> Hired</a>
                                        <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> Rejected</a>
                                        <a class="dropdown-item" href="#"><i class="fa-regular fa-circle-dot text-danger"></i> Interviewed</a>
                                    </div>
                                </div>
                            </td>
                            <td><a href="#" class="btn btn-sm btn-primary"><i class="fa-solid fa-download"></i> Download</a></td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i class="fa-regular fa-clock m-r-5"></i> Schedule Interview</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
