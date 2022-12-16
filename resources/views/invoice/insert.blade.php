<!-- The Modal View-->
<div class="modal fade" id="myModal_view">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h6 class="modal-title">Add Invoice </h6>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form method="POST" action="/invoice/store">
                    <div class="row">
                        @csrf

                        <div class="col-sm-6">
                            <label>Select Item:</label>
                            <select name="item_name" class="form-control">
                                <option value="" selected disabled>Select Item</option>
@foreach ($item as $item)    
<option value="{{ $item->id }}" >{{ $item->item_name }}</option>
@endforeach

                            </select>                            
                        </div>


                        <div class="col-sm-6">
                            <label>Date:</label>
                            <input type="date" class="form-control" name="date">
                        </div>

                        {{-- <div class="col-sm-6">
                            <label>Invoice No:</label>
                            <input type="text" class="form-control"  placeholder="Enter Invoice No" name="invoice_no">
                        </div> --}}

                        <div class="col-sm-6">
                            <label>Customer Name:</label>
                            <input type="text" class="form-control"  placeholder="Enter Customer Name" name="customer_name">
                        </div>

                        <div class="col-sm-6">
                            <label>Total QTY:</label>
                            <input type="number" class="form-control"  placeholder="Enter Total QTY" name="total_qty">
                        </div>

                        <div class="col-sm-6">
                            <label>Sub Total:</label>
                            <input type="text" class="form-control"  placeholder="Enter Sub Total" name="sub_total">
                        </div>

                        <div class="col-sm-6">
                            <label>GST Amount:</label>
                            <input type="text" class="form-control"  placeholder="Enter GST Amount" name="gst_amt">
                        </div>

                        <div class="col-sm-6">
                            <label>Total Amount:</label>
                            <input type="text" class="form-control"  placeholder="Enter Total Amount" name="total_amt">
                        </div>
                        
                        <div class="col-sm-12 mt-2">
                            <button type="submit" class="btn btn-primary mt-2">Submit</button>
                        </div>

                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
<!-- // the model view end -->