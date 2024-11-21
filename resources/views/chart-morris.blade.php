<?php $page = 'chart-morris'; ?>
@extends('layout.mainlayout')
@section('content')
    @component('components.breadcrumb')
        @slot('title')
            Morris Chart
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
                    <div id="morrisBar1"></div>
                </div>
            </div>
        </div>
        <!-- /Chart -->

        <!-- Chart -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Stacked Bar Chart </h5>
                </div>
                <div class="card-body">
                    <div id="morrisBar3"></div>
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
                    <div id="morrisLine1"></div>
                </div>
            </div>
        </div>
        <!-- /Chart -->


        <!-- Chart -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Area Chart</h5>
                </div>
                <div class="card-body">
                    <div id="morrisArea1"></div>
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
                    <div id="morrisBar6"></div>
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
                    <div id="morrisBar7"></div>
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
                    <div id="morrisDonut1"></div>
                </div>
            </div>
        </div>
        <!-- /Chart -->

    </div>
@endsection
