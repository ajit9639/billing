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
                            <h4 class="card-title">Edit Customer</h4>
                        </div>
                    </div>
                    <div class="card-body">
                       <form method="POST" action="/customer/update/{{ $customer->id }}">
                    <div class="row">
                        @csrf
                        <div class="col-sm-4">
                            <label>Company Name:</label>
                            <input type="text" class="form-control"  placeholder="Enter Name" name="company_name" value="{{ $customer->company_name }}" >
                        </div>
                        <div class="col-sm-4">
                            <label>Customer Name:</label>
                            <input type="text" class="form-control"  placeholder="Enter Name" name="customer_name"  value="{{ $customer->customer_name }}" >
                        </div>
                        <div class="col-sm-4">
                            <label>State:</label>
                            <input type="text" class="form-control"  placeholder="Enter Name" name="state" value="{{ $customer->state }}" >
                        </div>
                        <div class="col-sm-4">
                            <label>GST NO:</label>
                            <input type="text" class="form-control"  placeholder="Enter Name" name="gstno" value="{{ $customer->gstno }}" >
                        </div>
                        <div class="col-sm-4">
                            <label>Transport:</label>
                            <input type="text" class="form-control"  placeholder="Enter Transport" name="transport" value="{{ $customer->transport }}" >
                        </div>
                        <div class="col-sm-4">
                            <label>Mobile:</label>
                            <input type="number" class="form-control"  placeholder="Enter Name" name="mobile" value="{{ $customer->mobile }}" >
                        </div>
                        <div class="col-sm-4">
                            <label>Address1:</label>
                            <input type="text" class="form-control"  placeholder="Enter Name" name="address1" value="{{ $customer->address1 }}" >
                        </div>
                        <div class="col-sm-4">
                            <label>Address2:</label>
                            <input type="text" class="form-control"  placeholder="Enter Name" name="address2" value="{{ $customer->address2 }}" >
                        </div>
                        <div class="col-sm-4">
                            <label>City:</label>
                            <input type="text" class="form-control"  placeholder="Enter Name" name="city" value="{{ $customer->city }}" >
                        </div>
                        <div class="col-sm-4">
                            <label>Pincode:</label>
                            <input type="text" class="form-control"  placeholder="Enter Name" name="pincode" value="{{ $customer->pincode }}" >
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