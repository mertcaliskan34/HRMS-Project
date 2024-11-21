<?php $page = 'notifications-settings'; ?>
@extends('layout.mainlayout')
@section('content')
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Notifications Settings</h3>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div>
                <ul class="list-group notification-list">
                    <li class="list-group-item">
                        Employee
                        <div class="status-toggle">
                            <input type="checkbox" id="staff_module" class="check">
                            <label for="staff_module" class="checktoggle">checkbox</label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        Holidays
                        <div class="status-toggle">
                            <input type="checkbox" id="holidays_module" class="check" checked>
                            <label for="holidays_module" class="checktoggle">checkbox</label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        Leaves
                        <div class="status-toggle">
                            <input type="checkbox" id="leave_module" class="check" checked>
                            <label for="leave_module" class="checktoggle">checkbox</label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        Events
                        <div class="status-toggle">
                            <input type="checkbox" id="events_module" class="check" checked>
                            <label for="events_module" class="checktoggle">checkbox</label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        Chat
                        <div class="status-toggle">
                            <input type="checkbox" id="chat_module" class="check" checked>
                            <label for="chat_module" class="checktoggle">checkbox</label>
                        </div>
                    </li>
                    <li class="list-group-item">
                        Jobs
                        <div class="status-toggle">
                            <input type="checkbox" id="job_module" class="check">
                            <label for="job_module" class="checktoggle">checkbox</label>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
