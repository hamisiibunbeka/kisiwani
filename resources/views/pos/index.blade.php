
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
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Sales</a></li>
                            <li class="breadcrumb-item active">List</li>
                        </ol>
                    </div>
                    <h4 class="page-title">All Sales</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 


        <div class="row">
            <div class="col-12">
                <div class="card" style="position: relative;
                max-height:80vh;
                max-width:100vw;
                overflow:auto;">

                <form action="" method="get">
                    <div class="card bg-grey shadow-sm center">
                        <div class="card-head p-1">
                            <div class="col-3 m-1 float-start">
                                <label for="date_from">Date from</label>
                                <input type="text" required id="basic-datepicker" value="{{ \Carbon\carbon::parse($date_from)->format('d/m/Y')}}" name="date_from" class="form-control flatpickr-input active" placeholder="Date From">   
                            </div>  

                            <div class="col-3 m-1 float-start">
                                <label for="date_from">Date to</label>
                                <input type="text" required name="date_to" value="{{ \Carbon\carbon::parse($date_to)->format('d/m/Y') }}" class="form-control basic-datepicker flatpickr-input active" placeholder="Date To">
                            </div>  

                            <div class="col-3 m-1 float-start">
                                <br>
                                <input type="submit" class="btn btn-primary" value="Filter Data">
                                
                                <a href="{{ route('pos') }}" class="btn btn-danger">Reset</a>
                            </div>
                        </div>
                    </div>    
                </form>

                    <div class="card-body">
                        {{-- alternative-page-datatable --}}
                        <table id="" class="table dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>S/No</th>
                                    <th>Date</th>
                                    <th>Product</th>
                                    <th>Qty</th>
                                    <th>Buying price</th>
                                    <th>Selling price</th>
                                    <th>Buying subtotal</th>
                                    <th>Sales subtotal</th>
                                    <th>Profit</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>             

                            <tbody>
                                @forelse ($sales as $sale)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ \Carbon\carbon::parse($sale->transaction_date)->format('d/m/Y') }}</td>
                                        <td>{{ $sale->product_name }}</td>
                                        <td>{{ $sale->qty }}</td>                             
                                        <td>{{ number_format($sale->buying_price)}}</td>                                                         
                                        <td>{{ number_format($sale->selling_price) }}</td>                                                         
                                        <td class="purchase_subtotal text-center">{{ number_format($sale->buying_price_value) }}</td>                             
                                        <td class="sale_subtotal text-center">{{ number_format($sale->selling_price_value) }}</td>                             
                                        <td class="profit text-center">{{ number_format($sale->profit )}}</td>                             
                                        <td> 
                                            <a href="{{ route('pos.edit', $sale->id) }}" title="Edit Data" title="Edit Data"><i class="fa fa-edit btn btn-primary btn-sm ">Edit</i></a>
                                            <a href="{{ route('pos.delete', $sale->id) }}" title="Delete Data" id="delete"><i class="fa fa-trash btn btn-danger btn-sm "> Delete</i></a>
                                        </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="9" style="text-align:center; font-size:15px;">No Records to display</td>
                                        </tr>
                                    </tr>  
                                @endforelse
                            </tbody>

                            <tfoot class="bg-grey shadow-sm fw-bold text-center">
                                <td colspan="6">Grand Total</td>
                                <td>{{ number_format($purchase_subtotal) }}</td>
                                <td>{{ number_format($selling_subtotal) }}</td>
                                <td>{{  number_format($profit) }}</td>
                                <td colspan="2"></td>
                            </tfoot>
                        </table>
                    
                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
        <!-- end row-->
    </div>    
@endsection