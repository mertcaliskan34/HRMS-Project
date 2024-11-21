<?php $page = 'project-view'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Hospital Admin
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Project
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-8 col-xl-9">
            <div class="card">
                <div class="card-body">
                    <div class="project-title">
                        <h5 class="card-title">Hospital Administration</h5>
                        <small class="block text-ellipsis m-b-15"><span class="text-xs">2</span> <span class="text-muted">open
                                tasks, </span><span class="text-xs">5</span> <span class="text-muted">tasks
                                completed</span></small>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel elit neque. Class aptent taciti
                        sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum sollicitudin
                        libero vitae est consectetur, a molestie tortor consectetur. Aenean tincidunt interdum ipsum, id
                        pellentesque diam suscipit ut. Vivamus massa mi, fermentum eget neque eget, imperdiet tristique
                        lectus. Proin at purus ut sem pellentesque tempor sit amet ut lectus. Sed orci augue, placerat et
                        pretium ac, hendrerit in felis. Integer scelerisque libero non metus commodo, et hendrerit diam
                        aliquet. Proin tincidunt porttitor ligula, a tincidunt orci pellentesque nec. Ut ultricies maximus
                        nulla id consequat. Fusce eu consequat mi, eu euismod ligula. Aliquam porttitor neque id massa
                        porttitor, a pretium velit vehicula. Morbi volutpat tincidunt urna, vel ullamcorper ligula fermentum
                        at. </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel elit neque. Class aptent taciti
                        sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum sollicitudin
                        libero vitae est consectetur, a molestie tortor consectetur. Aenean tincidunt interdum ipsum, id
                        pellentesque diam suscipit ut. Vivamus massa mi, fermentum eget neque eget, imperdiet tristique
                        lectus. Proin at purus ut sem pellentesque tempor sit amet ut lectus. Sed orci augue, placerat et
                        pretium ac, hendrerit in felis. Integer scelerisque libero non metus commodo, et hendrerit diam
                        aliquet. Proin tincidunt porttitor ligula, a tincidunt orci pellentesque nec. Ut ultricies maximus
                        nulla id consequat. Fusce eu consequat mi, eu euismod ligula. Aliquam porttitor neque id massa
                        porttitor, a pretium velit vehicula. Morbi volutpat tincidunt urna, vel ullamcorper ligula fermentum
                        at. </p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title m-b-20">Uploaded image files</h5>
                    <div class="row">
                        <div class="col-md-3 col-sm-4 col-lg-4 col-xl-3">
                            <div class="uploaded-box">
                                <div class="uploaded-img">
                                    <img src="{{ URL::asset('assets/img/placeholder.jpg') }}" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="uploaded-img-name">
                                    demo.png
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-lg-4 col-xl-3">
                            <div class="uploaded-box">
                                <div class="uploaded-img">
                                    <img src="{{ URL::asset('assets/img/placeholder.jpg') }}" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="uploaded-img-name">
                                    demo.png
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-lg-4 col-xl-3">
                            <div class="uploaded-box">
                                <div class="uploaded-img">
                                    <img src="{{ URL::asset('assets/img/placeholder.jpg') }}" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="uploaded-img-name">
                                    demo.png
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-lg-4 col-xl-3">
                            <div class="uploaded-box">
                                <div class="uploaded-img">
                                    <img src="{{ URL::asset('assets/img/placeholder.jpg') }}" class="img-fluid"
                                        alt="">
                                </div>
                                <div class="uploaded-img-name">
                                    demo.png
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title m-b-20">Uploaded files</h5>
                    <ul class="files-list">
                        <li>
                            <div class="files-cont">
                                <div class="file-type">
                                    <span class="files-icon"><i class="fa-regular fa-file-pdf"></i></span>
                                </div>
                                <div class="files-info">
                                    <span class="file-name text-ellipsis"><a href="#">AHA Selfcare Mobile Application
                                            Test-Cases.xls</a></span>
                                    <span class="file-author"><a href="#">John Doe</a></span> <span
                                        class="file-date">May 31st at 6:53 PM</span>
                                    <div class="file-size">Size: 14.8Mb</div>
                                </div>
                                <ul class="files-action">
                                    <li class="dropdown dropdown-action">
                                        <a href="" class="dropdown-toggle btn btn-link" data-bs-toggle="dropdown"
                                            aria-expanded="false"><i class="material-icons">more_horiz</i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0)">Download</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#share_files">Share</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="files-cont">
                                <div class="file-type">
                                    <span class="files-icon"><i class="fa-regular fa-file-pdf"></i></span>
                                </div>
                                <div class="files-info">
                                    <span class="file-name text-ellipsis"><a href="#">AHA Selfcare Mobile Application
                                            Test-Cases.xls</a></span>
                                    <span class="file-author"><a href="#">Richard Miles</a></span> <span
                                        class="file-date">May 31st at 6:53 PM</span>
                                    <div class="file-size">Size: 14.8Mb</div>
                                </div>
                                <ul class="files-action">
                                    <li class="dropdown dropdown-action">
                                        <a href="" class="dropdown-toggle btn btn-link" data-bs-toggle="dropdown"
                                            aria-expanded="false"><i class="material-icons">more_horiz</i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="javascript:void(0)">Download</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#share_files">Share</a>
                                            <a class="dropdown-item" href="javascript:void(0)">Delete</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="project-task">
                <ul class="nav nav-tabs nav-tabs-top nav-justified mb-0">
                    <li class="nav-item"><a class="nav-link active" href="#all_tasks" data-bs-toggle="tab"
                            aria-expanded="true">All Tasks</a></li>
                    <li class="nav-item"><a class="nav-link" href="#pending_tasks" data-bs-toggle="tab"
                            aria-expanded="false">Pending Tasks</a></li>
                    <li class="nav-item"><a class="nav-link" href="#completed_tasks" data-bs-toggle="tab"
                            aria-expanded="false">Completed Tasks</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane show active" id="all_tasks">
                        <div class="task-wrapper">
                            <div class="task-list-container">
                                <div class="task-list-body">
                                    <ul id="task-list">
                                        <li class="task">
                                            <div class="task-container">
                                                <span class="task-action-btn task-check">
                                                    <span class="action-circle large complete-btn" title="Mark Complete">
                                                        <i class="material-icons">check</i>
                                                    </span>
                                                </span>
                                                <span class="task-label" contenteditable="true">Patient appointment
                                                    booking</span>
                                                <span class="task-action-btn task-btn-right">
                                                    <span class="action-circle large" title="Assign">
                                                        <i class="material-icons">person_add</i>
                                                    </span>
                                                    <span class="action-circle large delete-btn" title="Delete Task">
                                                        <i class="material-icons">delete</i>
                                                    </span>
                                                </span>
                                            </div>
                                        </li>
                                        <li class="task">
                                            <div class="task-container">
                                                <span class="task-action-btn task-check">
                                                    <span class="action-circle large complete-btn" title="Mark Complete">
                                                        <i class="material-icons">check</i>
                                                    </span>
                                                </span>
                                                <span class="task-label" contenteditable="true">Appointment booking with
                                                    payment gateway</span>
                                                <span class="task-action-btn task-btn-right">
                                                    <span class="action-circle large" title="Assign">
                                                        <i class="material-icons">person_add</i>
                                                    </span>
                                                    <span class="action-circle large delete-btn" title="Delete Task">
                                                        <i class="material-icons">delete</i>
                                                    </span>
                                                </span>
                                            </div>
                                        </li>
                                        <li class="completed task">
                                            <div class="task-container">
                                                <span class="task-action-btn task-check">
                                                    <span class="action-circle large complete-btn" title="Mark Complete">
                                                        <i class="material-icons">check</i>
                                                    </span>
                                                </span>
                                                <span class="task-label">Doctor available module</span>
                                                <span class="task-action-btn task-btn-right">
                                                    <span class="action-circle large" title="Assign">
                                                        <i class="material-icons">person_add</i>
                                                    </span>
                                                    <span class="action-circle large delete-btn" title="Delete Task">
                                                        <i class="material-icons">delete</i>
                                                    </span>
                                                </span>
                                            </div>
                                        </li>
                                        <li class="task">
                                            <div class="task-container">
                                                <span class="task-action-btn task-check">
                                                    <span class="action-circle large complete-btn" title="Mark Complete">
                                                        <i class="material-icons">check</i>
                                                    </span>
                                                </span>
                                                <span class="task-label" contenteditable="true">Patient and Doctor video
                                                    conferencing</span>
                                                <span class="task-action-btn task-btn-right">
                                                    <span class="action-circle large" title="Assign">
                                                        <i class="material-icons">person_add</i>
                                                    </span>
                                                    <span class="action-circle large delete-btn" title="Delete Task">
                                                        <i class="material-icons">delete</i>
                                                    </span>
                                                </span>
                                            </div>
                                        </li>
                                        <li class="task">
                                            <div class="task-container">
                                                <span class="task-action-btn task-check">
                                                    <span class="action-circle large complete-btn" title="Mark Complete">
                                                        <i class="material-icons">check</i>
                                                    </span>
                                                </span>
                                                <span class="task-label" contenteditable="true">Private chat module</span>
                                                <span class="task-action-btn task-btn-right">
                                                    <span class="action-circle large" title="Assign">
                                                        <i class="material-icons">person_add</i>
                                                    </span>
                                                    <span class="action-circle large delete-btn" title="Delete Task">
                                                        <i class="material-icons">delete</i>
                                                    </span>
                                                </span>
                                            </div>
                                        </li>
                                        <li class="task">
                                            <div class="task-container">
                                                <span class="task-action-btn task-check">
                                                    <span class="action-circle large complete-btn" title="Mark Complete">
                                                        <i class="material-icons">check</i>
                                                    </span>
                                                </span>
                                                <span class="task-label" contenteditable="true">Patient Profile add</span>
                                                <span class="task-action-btn task-btn-right">
                                                    <span class="action-circle large" title="Assign">
                                                        <i class="material-icons">person_add</i>
                                                    </span>
                                                    <span class="action-circle large delete-btn" title="Delete Task">
                                                        <i class="material-icons">delete</i>
                                                    </span>
                                                </span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="task-list-footer">
                                    <div class="new-task-wrapper">
                                        <textarea id="new-task" placeholder="Enter new task here. . ."></textarea>
                                        <span class="error-message hidden">You need to enter a task first</span>
                                        <span class="add-new-task-btn btn" id="add-task">Add Task</span>
                                        <span class="btn" id="close-task-panel">Close</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="pending_tasks"></div>
                    <div class="tab-pane" id="completed_tasks"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title m-b-15">Project details</h6>
                    <table class="table table-striped table-border">
                        <tbody>
                            <tr>
                                <td>Cost:</td>
                                <td class="text-end">$1200</td>
                            </tr>
                            <tr>
                                <td>Total Hours:</td>
                                <td class="text-end">100 Hours</td>
                            </tr>
                            <tr>
                                <td>Created:</td>
                                <td class="text-end">25 Feb, 2019</td>
                            </tr>
                            <tr>
                                <td>Deadline:</td>
                                <td class="text-end">12 Jun, 2019</td>
                            </tr>
                            <tr>
                                <td>Priority:</td>
                                <td class="text-end">
                                    <div class="btn-group">
                                        <a href="#" class="badge badge-danger dropdown-toggle"
                                            data-bs-toggle="dropdown">Highest </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i
                                                    class="fa-regular fa-circle-dot text-danger"></i> Highest priority</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fa-regular fa-circle-dot text-info"></i> High priority</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fa fa-dot-circle-o text-primary"></i> Normal priority</a>
                                            <a class="dropdown-item" href="#"><i
                                                    class="fa-regular fa-circle-dot text-success"></i> Low priority</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Created by:</td>
                                <td class="text-end"><a href="{{ url('profile') }}">Barry Cuda</a></td>
                            </tr>
                            <tr>
                                <td>Status:</td>
                                <td class="text-end">Working</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="m-b-5">Progress <span class="text-success float-end">40%</span></p>
                    <div class="progress progress-xs mb-0">
                        <div class="progress-bar bg-success" role="progressbar" data-bs-toggle="tooltip" title="40%"
                            style="width: 40%"></div>
                    </div>
                </div>
            </div>
            <div class="card project-user">
                <div class="card-body">
                    <h6 class="card-title m-b-20">Assigned Leader <button type="button"
                            class="float-end btn btn-primary btn-sm" data-bs-toggle="modal"
                            data-bs-target="#assign_leader"><i class="fa fa-plus"></i> Add</button></h6>
                    <ul class="list-box">
                        <li>
                            <a href="{{ url('profile') }}">
                                <div class="list-item">
                                    <div class="list-left">
                                        <span class="avatar"><img alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-11.jpg') }}"></span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author">Wilmer Deluna</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Team Leader</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('profile') }}">
                                <div class="list-item">
                                    <div class="list-left">
                                        <span class="avatar"><img alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-01.jpg') }}"></span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author">Lesley Grauer</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Team Leader</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card project-user">
                <div class="card-body">
                    <h6 class="card-title m-b-20">
                        Assigned users
                        <button type="button" class="float-end btn btn-primary btn-sm" data-bs-toggle="modal"
                            data-bs-target="#assign_user"><i class="fa fa-plus"></i> Add</button>
                    </h6>
                    <ul class="list-box">
                        <li>
                            <a href="{{ url('profile') }}">
                                <div class="list-item">
                                    <div class="list-left">
                                        <span class="avatar"><img alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-02.jpg') }}"></span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author">John Doe</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Web Designer</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('profile') }}">
                                <div class="list-item">
                                    <div class="list-left">
                                        <span class="avatar"><img alt=""
                                                src="{{ URL::asset('assets/img/profiles/avatar-09.jpg') }}"></span>
                                    </div>
                                    <div class="list-body">
                                        <span class="message-author">Richard Miles</span>
                                        <div class="clearfix"></div>
                                        <span class="message-content">Web Developer</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- /Page Content -->

    @component('components.model-popup')
    @endcomponent
@endsection
