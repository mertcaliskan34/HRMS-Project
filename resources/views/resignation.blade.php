<?php $page = 'resignation'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Resignation
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Resignation
        @endslot
    @endcomponent


    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table mb-0 datatable leave-employee-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Resigning Employee </th>
                            <th>Department </th>
                            <th>Reason </th>
                            <th>Notice Date </th>
                            <th>Resignation Date </th>
                            <th class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <h2 class="table-avatar blue-link">
                                    <a href="{{url('profile')}}" class="avatar"><img src="{{URL::asset('/assets/img/profiles/avatar-02.jpg')}}" alt="User Image"></a>
                                    <a href="{{url('profile')}}">John Doe</a>
                                </h2>
                            </td>
                            <td>Web Development</td>
                            <td>Lorem ipsum dollar</td>
                            <td>28 Feb 2019</td>
                            <td>28 Feb 2019</td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_resignation"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_resignation"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                </table>
            </div>
        </div>
    </div>
    </div>
    <!-- /Page Content -->
    @component('components.model-popup')
    @endcomponent
@endsection
