@php
    $purchase_subtotal = App\models\Sales::sum('buying_price_value');
    $selling_subtotal = App\models\Sales::sum('selling_price_value');
    $tprofit = App\models\Sales::sum('profit');
    $profit_margin = ($selling_subtotal-$purchase_subtotal)/$selling_subtotal;
@endphp

@extends('master.app')
@section('content')
<div class="content">

    <!-- Start Content-->
    <div class="container-fluid">
        
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <form class="d-flex align-items-center mb-3">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control border-0" id="dash-daterange">
                                <span class="input-group-text bg-blue border-blue text-white">
                                    <i class="mdi mdi-calendar-range"></i>
                                </span>
                            </div>
                        </form>
                    </div>
                    <h4 class="page-title">Dashboard</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="text-start">
                                    <h3 class="text-dark mt-1">Tsh. <span>{{ number_format($selling_subtotal) }}</span></h3>
                                    <p class="text-muted mb-1 text-truncate">Total Revenue</p>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div>
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="text-start">
                                    <h3 class="text-dark mt-1">Tsh. <span>{{ number_format($purchase_subtotal) }}</span></h3>
                                    <p class="text-muted mb-1 text-truncate">Total Cost</p>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div>
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="text-start">
                                    <h3 class="text-dark mt-1"><span>{{ number_format($profit_margin, 2) }}</span>%</h3>
                                    <p class="text-muted mb-1 text-truncate">Profit Margin</p>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div>
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="text-start">
                                    <h3 class="text-dark mt-1">Tsh. <span>{{ number_format($tprofit) }}</span></h3>
                                    <p class="text-muted mb-1 text-truncate">Total Profit</p>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div>
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->
        </div>
        <!-- end row-->
        
    </div> <!-- container -->

</div> 

<style>
    .card{
        border-top: 3px solid lightblue;
    }
</style>
@endsection

