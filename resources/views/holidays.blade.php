<?php $page = 'holidays'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Holidays 2019
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Holidays
        @endslot
    @endcomponent



    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title </th>
                            <th>Holiday Date</th>
                            <th>Day</th>
                            <th class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="holiday-completed">
                            <td>1</td>
                            <td>New Year</td>
                            <td>1 Jan 2019</td>
                            <td>Sunday</td>
                            <td></td>
                        </tr>
                        <tr class="holiday-completed">
                            <td>2</td>
                            <td>Good Friday</td>
                            <td>14 Apr 2019</td>
                            <td>Friday</td>
                            <td></td>
                        </tr>
                        <tr class="holiday-completed">
                            <td>3</td>
                            <td>May Day</td>
                            <td>1 May 2019</td>
                            <td>Monday</td>
                            <td class="text-center">
                            </td>
                        </tr>
                        <tr class="holiday-completed">
                            <td>4</td>
                            <td>Memorial Day</td>
                            <td>28 May 2019</td>
                            <td>Monday</td>
                            <td class="text-center">
                            </td>
                        </tr>
                        <tr class="holiday-completed">
                            <td>5</td>
                            <td>Ramzon</td>
                            <td>26 Jun 2019</td>
                            <td>Monday</td>
                            <td></td>
                        </tr>
                        <tr class="holiday-upcoming">
                            <td>6</td>
                            <td>Bakrid</td>
                            <td>2 Sep 2019</td>
                            <td>Saturday</td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_holiday"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_holiday"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="holiday-upcoming">
                            <td>7</td>
                            <td>Deepavali</td>
                            <td>18 Oct 2019</td>
                            <td>Wednesday</td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_holiday"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_holiday"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr class="holiday-upcoming">
                            <td>8</td>
                            <td>Christmas</td>
                            <td>25 Dec 2019</td>
                            <td>Monday</td>
                            <td class="text-end">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#edit_holiday"><i class="fa-solid fa-pencil m-r-5"></i> Edit</a>
                                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_holiday"><i class="fa-regular fa-trash-can m-r-5"></i> Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    <!-- /Page Content -->
    @component('components.model-popup')
    @endcomponent
@endsection
