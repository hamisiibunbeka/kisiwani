
@extends('master.app')
@section('content')

<div class=" card col-md-12 mt-3 p-2" style="position: relative;
max-height:80vh;
max-width:100vw;
overflow:auto;">

    <div class="card-body">
        <div class="card" >
            <div class="card-head">

            </div>
        </div>
        <!-- form start -->
        <form id="validate" action="{{ route('pos.update', $sale->id) }}" method="post" style="position: relative;
        max-height:80vh;
        max-width:100vw;
        overflow:auto;">
            @method('PUT')
            @csrf 

            <div class="row">
                <div class="col-6 mb-3 float-start">
                    <label class="form-label">Transaction Date:</label>
                </div>
                
                <div class="col-6 mb-3 float-start">
                    <input type="text" required id="basic-datepicker" value="{{ $sale->transaction_date }}" name="transaction_date" class="form-control flatpickr-input active" placeholder="Transaction date">
                </div>       
            </div>                   

            <table id="table" class="table table-responsive">
                <thead class="table-primary">
                    <tr>
                        <th>Product name</th>
                        <th>Qty</th>
                        <th>Buying price</th>
                        <th>Selling price</th> 
                        <th>Buying subtotal</th> 
                        <th>Selling subtotal</th> 
                        <th>Profit</th> 
                        <th><button type="button" class="btn btn-success" onclick="BtnAdd()">+</button></th>
                    </tr>
                </thead>
                <tbody id="TBody">
                    <tr id="TRow"> 
                        <td>
                            <input type="text" class="form-control fields" value="{{ $sale->product_name }}" name="product_name[]" placeholder="Product name" required>
                        </td>

                        <td>
                            <input type="number" id="qty" min="1" onchange="Calc(this);" class="form-control fields" value="{{ $sale->qty }}" name="qty[]" placeholder="Qty" required>
                        </td>

                        <td>
                            <input type="number" id="bp" onchange="Calc(this);" class="form-control fields" value="{{ $sale->buying_price }}" name="buying_price[]" placeholder="Buying price" required>
                        </td>

                        <td>
                            <input type="number" id="sp" onchange="Calc(this);" class="form-control fields" value="{{ $sale->selling_price }}" name="selling_price[]" placeholder="Selling price" required>
                        </td>

                        <td>
                            <input type="number" id="bpv" class="form-control fields" value="{{ $sale->buying_price_value }}" name="buying_price_value[]" placeholder="Buying subtotal" readonly required>
                        </td> 

                        <td>
                            <input type="number" id="spv" class="form-control fields" value="{{ $sale->selling_price_value }}" name="selling_price_value[]" placeholder="Selling subtotal" readonly required>
                        </td>

                        <td>
                            <input type="number" id="profit" class="form-control fields" value="{{ $sale->profit }}" name="profit[]" placeholder="Profit" readonly required>
                        </td>

                        <td>
                            <button type="button" class="btn btn-danger" onclick="BtnDel(this)">-</button>
                        </td>
                    </tr>
                    
                </tbody>  
                
                <tfoot>
                    <tr class="fw-bold text-center">
                        <td colspan="4" class="bg-light">Grand Total</td>
                        <td id="tbpv" class="bg-grey">0</td>
                        <td id="tspv" class="bg-grey">0</td>
                        <td id="tprofit" class="bg-grey">0</td>
                        <td colspan="1"></td>    
                </tfoot>
            </table>     
                    
            <center>
                <td>
                    <button type="submit" class="btn btn-lg btn-primary mb-3">Update Sales</button>
                </td> 
            </center>
        </form>
    </div>
</div>    

<style>
    table td{
        position: relative;
    }
    table td input.fields{
        position: absolute;
        display: block;
        top: 0;
        left: 0;
        margin: 0;
        height: 100%;
        width: 100%;
    }
</style>

@endsection


<script>

    function BtnAdd()
    {
        var v = $("#TRow").clone().appendTo("#TBody");
        $(v).find("input").val('');
    }

    function BtnDel(v)
    {
        $(v).parent().parent().remove();
    }

    function Calc(v) 
    {
        var index = $(v).parent().parent().index();

        var qty = document.getElementsByName("qty[]")[index].value;
        var buying_price = document.getElementsByName("buying_price[]")[index].value;
        var selling_price = document.getElementsByName("selling_price[]")[index].value;

        var buying_price_value = qty * buying_price;
        var selling_price_value = qty * selling_price;
        var profit = selling_price_value - buying_price_value;
        document.getElementsByName("buying_price_value[]")[index].value = buying_price_value;
        document.getElementsByName("selling_price_value[]")[index].value = selling_price_value;
        document.getElementsByName("profit[]")[index].value = profit;

        
        var sum = 0;      
        var sum1 = 0;      
        var sum2 = 0;      
       var gTotalBpvs = document.getElementsByName('buying_price_value[]');
       var gTotalSpvs = document.getElementsByName('selling_price_value[]');
       var gTotalProfits = document.getElementsByName('profit[]');

       for (let index = 0; index < gTotalBpvs.length; index++) {
            var gTotalBpv = gTotalBpvs[index].value;
            sum = +(sum) + +(gTotalBpv);
       }
        console.log(sum);
        $('#tbpv').html(sum);

        for (let index = 0; index < gTotalSpvs.length; index++) {
            var gTotalSpv = gTotalSpvs[index].value;
            sum1 = +(sum1) + +(gTotalSpv);
       }
        console.log(sum1);
        $('#tspv').html(sum1);

        for (let index = 0; index < gTotalProfits.length; index++) {
            var gTotalProfit = gTotalProfits[index].value;
            sum2 = +(sum2) + +(gTotalProfit);
       }
        console.log(sum2);
        $('#tprofit').html(sum2);
    }

</script>