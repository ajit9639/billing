<!-- The Modal View-->
<div class="modal fade" id="myModal_view">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h6 class="modal-title">Category View Detail</h6>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form method="POST" action="/customer/insert">
                    <div class="row">
                        @csrf
                        <div class="col-sm-6">
                            <label>Company Name:</label>
                            <input type="text" class="form-control"  placeholder="Enter Name" name="company_name">
                        </div>
                        <div class="col-sm-6">
                            <label>Customer Name:</label>
                            <input type="text" class="form-control"  placeholder="Enter Name" name="customer_name">
                        </div>
                        <div class="col-sm-6">
                            <label>State:</label>
                            <input type="text" class="form-control"  placeholder="Enter Name" name="state">
                        </div>
                        <div class="col-sm-6">
                            <label>GST NO:</label>
                            <input type="text" class="form-control"  placeholder="Enter Name" name="gstno">
                        </div>
                        <div class="col-sm-6">
                            <label>Transport:</label>
                            <input type="text" class="form-control"  placeholder="Enter Transport" name="transport">
                        </div>
                        <div class="col-sm-6">
                            <label>Mobile:</label>
                            <input type="number" class="form-control"  placeholder="Enter Name" name="mobile">
                        </div>
                        <div class="col-sm-6">
                            <label>Address1:</label>
                            <input type="text" class="form-control"  placeholder="Enter Name" name="address1">
                        </div>
                        <div class="col-sm-6">
                            <label>Address2:</label>
                            <input type="text" class="form-control"  placeholder="Enter Name" name="address2">
                        </div>
                        <div class="col-sm-6">
                            <label>City:</label>
                            <input type="text" class="form-control"  placeholder="Enter Name" name="city">
                        </div>
                        <div class="col-sm-6">
                            <label>Pincode:</label>
                            <input type="text" class="form-control"  placeholder="Enter Name" name="pincode">
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