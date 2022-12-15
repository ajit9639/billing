<!-- The Modal View-->
<div class="modal fade" id="myModal_view{{  $customer-> id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h6 class="modal-title">Customer View Detail</h6>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form method="POST" action="/customer/insert">
                    <div class="row">
                        @csrf
                        <div class="col-sm-6">
                            <label>Company Name:</label>
                            <input type="text" class="form-control"  placeholder="Enter Name" name="company_name" value="{{ $customer->company_name }}" readonly>
                        </div>
                        <div class="col-sm-6">
                            <label>Customer Name:</label>
                            <input type="text" class="form-control"  placeholder="Enter Name" name="customer_name"  value="{{ $customer->customer_name }}" readonly>
                        </div>
                        <div class="col-sm-6">
                            <label>State:</label>
                            <input type="text" class="form-control"  placeholder="Enter Name" name="state" value="{{ $customer->state }}" readonly>
                        </div>
                        <div class="col-sm-6">
                            <label>GST NO:</label>
                            <input type="text" class="form-control"  placeholder="Enter Name" name="gstno" value="{{ $customer->gstno }}" readonly>
                        </div>
                        <div class="col-sm-6">
                            <label>Transport:</label>
                            <input type="text" class="form-control"  placeholder="Enter Transport" name="transport" value="{{ $customer->transport }}" readonly>
                        </div>
                        <div class="col-sm-6">
                            <label>Mobile:</label>
                            <input type="number" class="form-control"  placeholder="Enter Name" name="mobile" value="{{ $customer->mobile }}" readonly>
                        </div>
                        <div class="col-sm-6">
                            <label>Address1:</label>
                            <input type="text" class="form-control"  placeholder="Enter Name" name="address1" value="{{ $customer->address1 }}" readonly>
                        </div>
                        <div class="col-sm-6">
                            <label>Address2:</label>
                            <input type="text" class="form-control"  placeholder="Enter Name" name="address2" value="{{ $customer->address2 }}" readonly>
                        </div>
                        <div class="col-sm-6">
                            <label>City:</label>
                            <input type="text" class="form-control"  placeholder="Enter Name" name="city" value="{{ $customer->city }}" readonly>
                        </div>
                        <div class="col-sm-6">
                            <label>Pincode:</label>
                            <input type="text" class="form-control"  placeholder="Enter Name" name="pincode" value="{{ $customer->pincode }}" readonly>
                        </div>
                        {{-- <div class="col-sm-12 mt-2">
                            <button type="submit" class="btn btn-primary mt-2">Submit</button>
                        </div> --}}

                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
<!-- // the model view end -->