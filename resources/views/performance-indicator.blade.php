<?php $page = 'performance-indicator'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Performance Indicator
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Performance
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table mb-0 datatable">
                    <thead>
                        <tr>
                            <th style="width: 30px;">#</th>
                            <th>Designation</th>
                            <th>Department</th>
                            <th>Added By</th>
                            <th>Create At</th>
                            <th>Status</th>
                            <th class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Web Designer </td>
                            <td>Designing</td>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img src="{{ URL::asset('assets/img/profiles/avatar-02.jpg')}}"
                                            alt="User Image"></a>
                                    <a href="{{ url('profile') }}">John Doe </a>
                                </h2>
                            </td>
                            <td>
                                7 May 2019
                            </td>
                            <td>
                                <div class="dropdown action-label">
                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-regular fa-circle-dot text-success"></i> Active
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-success"></i> Active</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-danger"></i> Inactive</a>
                                    </div>
                                </div>
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_indicator"><i class="fa-solid fa-pencil m-r-5"></i>
                                            Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_indicator"><i class="fa-regular fa-trash-can m-r-5"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>IOS Developer </td>
                            <td>IOS</td>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img
                                            src="{{ URL::asset('assets/img/profiles/avatar-05.jpg')}}" alt="User Image"></a>
                                    <a href="{{ url('profile') }}">Mike Litorus </a>
                                </h2>
                            </td>
                            <td>
                                7 May 2019
                            </td>
                            <td>
                                <div class="dropdown action-label">
                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-regular fa-circle-dot text-success"></i> Active
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-success"></i> Active</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-danger"></i> Inactive</a>
                                    </div>
                                </div>
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_indicator"><i class="fa-solid fa-pencil m-r-5"></i>
                                            Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_indicator"><i class="fa-regular fa-trash-can m-r-5"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Web Designer </td>
                            <td>Designing</td>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img
                                            src="{{ URL::asset('assets/img/profiles/avatar-10.jpg')}}" alt="User Image"></a>
                                    <a href="{{ url('profile') }}">John Smith </a>
                                </h2>
                            </td>
                            <td>
                                7 May 2019
                            </td>
                            <td>
                                <div class="dropdown action-label">
                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-regular fa-circle-dot text-success"></i> Active
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-success"></i> Active</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-danger"></i> Inactive</a>
                                    </div>
                                </div>
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_indicator"><i class="fa-solid fa-pencil m-r-5"></i>
                                            Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_indicator"><i
                                                class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Web Designer </td>
                            <td>Designing</td>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img
                                            src="{{ URL::asset('assets/img/profiles/avatar-12.jpg')}}" alt="User Image"></a>
                                    <a href="{{ url('profile') }}">Jeffrey Warden </a>
                                </h2>
                            </td>
                            <td>
                                7 May 2019
                            </td>
                            <td>
                                <div class="dropdown action-label">
                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-regular fa-circle-dot text-success"></i> Active
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-success"></i> Active</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-danger"></i> Inactive</a>
                                    </div>
                                </div>
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_indicator"><i class="fa-solid fa-pencil m-r-5"></i>
                                            Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_indicator"><i
                                                class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Web Designer </td>
                            <td>Designing</td>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img
                                            src="{{ URL::asset('assets/img/profiles/avatar-11.jpg')}}" alt="User Image"></a>
                                    <a href="{{ url('profile') }}">Wilmer Deluna </a>
                                </h2>
                            </td>
                            <td>
                                7 May 2019
                            </td>
                            <td>
                                <div class="dropdown action-label">
                                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-regular fa-circle-dot text-success"></i> Active
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-success"></i> Active</a>
                                        <a class="dropdown-item" href="#"><i
                                                class="fa-regular fa-circle-dot text-danger"></i> Inactive</a>
                                    </div>
                                </div>
                            </td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#edit_indicator"><i class="fa-solid fa-pencil m-r-5"></i>
                                            Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#delete_indicator"><i
                                                class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    @component('components.model-popup')
    @endcomponent
@endsection
