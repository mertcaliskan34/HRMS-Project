<?php $page = 'payslip-reports'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Payslip Reports
        @endslot
        @slot('li_1')
            Dashboard
        @endslot
        @slot('li_2')
            Payslip Reports
        @endslot
    @endcomponent


    @component('components.searchfilter')
    @endcomponent

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table mb-0 datatable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Employee Name</th>
                            <th>Paid Amount</th>
                            <th>Payment Month</th>
                            <th>Payment Year</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img src="{{ URL::asset('assets/img/profiles/avatar-13.jpg')}}"
                                            alt="User Image"></a>
                                    <a href="{{ url('profile') }}">Bernardo Galaviz <span>Web Developer</span></a>
                                </h2>
                            </td>
                            <td>$200</td>
                            <td>Apr</td>
                            <td>2019</td>
                            <td class="text-center"> <a href="#" class="btn btn-sm btn-primary">PDF</a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img
                                            src="{{ URL::asset('assets/img/profiles/avatar-12.jpg')}}" alt="User Image"></a>
                                    <a href="{{ url('profile') }}">Jeffrey Warden <span>Web Developer</span></a>
                                </h2>
                            </td>
                            <td>$300</td>
                            <td>Dec</td>
                            <td>2020</td>
                            <td class="text-center"> <a href="#" class="btn btn-sm btn-primary">PDF</a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img
                                            src="{{ URL::asset('assets/img/profiles/avatar-02.jpg')}}" alt="User Image"></a>
                                    <a href="{{ url('profile') }}">John Doe <span>Web Designer</span></a>
                                </h2>
                            </td>
                            <td>$400</td>
                            <td>Jun</td>
                            <td>2020</td>
                            <td class="text-center"> <a href="#" class="btn btn-sm btn-primary">PDF</a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img
                                            src="{{ URL::asset('assets/img/profiles/avatar-10.jpg')}}" alt="User Image"></a>
                                    <a href="{{ url('profile') }}">John Smith <span>Android Developer</span></a>
                                </h2>
                            </td>
                            <td>$500</td>
                            <td>Feb</td>
                            <td>2020</td>
                            <td class="text-center"> <a href="#" class="btn btn-sm btn-primary">PDF</a></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>
                                <h2 class="table-avatar">
                                    <a href="{{ url('profile') }}" class="avatar"><img
                                            src="{{ URL::asset('assets/img/profiles/avatar-05.jpg')}}" alt="User Image"></a>
                                    <a href="{{ url('profile') }}">Mike Litorus <span>IOS Developer</span></a>
                                </h2>
                            </td>
                            <td>$600</td>
                            <td>Jan</td>
                            <td>2020</td>
                            <td class="text-center"> <a href="#" class="btn btn-sm btn-primary">PDF</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- /Content End -->
@endsection
