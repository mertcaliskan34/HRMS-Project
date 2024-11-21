<?php $page = 'chart-c3'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Flot Chart
        @endslot
    @endcomponent

    <div class="row">

        <!-- Chart -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Bar Chart</h5>
                </div>
                <div class="card-body">
                    <div id="chart-bar-stacked"></div>
                </div>
            </div>
        </div>
        <!-- /Chart -->

        <!-- Chart -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Multiple Bar Chart</h5>
                </div>
                <div class="card-body">
                    <div id="chart-bar"></div>
                </div>
            </div>
        </div>
        <!-- /Chart -->

        <!-- Chart -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Horizontal Bar Chart</h5>
                </div>
                <div class="card-body">
                    <div id="chart-bar-rotated"></div>
                </div>
            </div>
        </div>
        <!-- /Chart -->

        <!-- Chart -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Line Chart</h5>
                </div>
                <div class="card-body">
                    <div id="chart-sracked"></div>
                </div>
            </div>
        </div>
        <!-- /Chart -->

        <!-- Chart -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Line Chart</h5>
                </div>
                <div class="card-body">
                    <div id="chart-spline-rotated"></div>
                </div>
            </div>
        </div>
        <!-- /Chart -->

        <!-- Chart -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Line Chart</h5>
                </div>
                <div class="card-body">
                    <div id="chart-area-spline-sracked"></div>
                </div>
            </div>
        </div>
        <!-- /Chart -->

        <!-- Chart -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Pie Chart</h5>
                </div>
                <div class="card-body">
                    <div id="chart-pie"></div>
                </div>
            </div>
        </div>
        <!-- /Chart -->

        <!-- Chart -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Donut Chart</h5>
                </div>
                <div class="card-body">
                    <div id="chart-donut"></div>
                </div>
            </div>
        </div>
        <!-- /Chart -->

    </div>
@endsection
