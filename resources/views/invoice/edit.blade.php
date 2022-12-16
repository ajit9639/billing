<x-layout />
<x-navbar />
<x-aside />



<!-- Modal Edit -->
<div class="content-page">
    <div class="container-fluid add-form-list">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Edit invoice</h4>
                        </div>
                    </div>
                    <div class="card-body">
                       <form method="POST" action="/invoice/update/{{ $invoice->id }}">
                    <div class="row">
                        @csrf

                        <div class="col-sm-4">
                            <label>Date:</label>
                            <input type="date" class="form-control" name="date" value="{{ $invoice->date }}">
                        </div>

                        {{-- <div class="col-sm-4">
                            <label>Invoice No:</label>
                            <input type="number" class="form-control" name="invoice_no" value="{{ $invoice->invoice_no }}">
                        </div> --}}

                        <div class="col-sm-4">
                            <label>Customer Name:</label>
                            <input type="text" class="form-control" name="customer_name" value="{{ $invoice->customer_name }}">
                        </div>

                        <div class="col-sm-4">
                            <label>Total QTY:</label>
                            <input type="number" class="form-control" name="total_qty" value="{{ $invoice->total_qty }}">
                        </div>

                        <div class="col-sm-4">
                            <label>Sub Total:</label>
                            <input type="number" class="form-control" name="sub_total" value="{{ $invoice->sub_total }}">
                        </div>

                        <div class="col-sm-4">
                            <label>GST Amount:</label>
                            <input type="number" class="form-control" name="gst_amt" value="{{ $invoice->gst_amt }}">
                        </div>


                        <div class="col-sm-4">
                            <label>Total Amount:</label>
                            <input type="number" class="form-control" name="total_amt" value="{{ $invoice->total_amt }}">
                        </div>                        

                        
                        <div class="col-sm-12 mt-2">
                            <button type="submit" class="btn btn-primary mt-2">Update</button>
                        </div>

                    </div>

                </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>
</div>


<x-foot />