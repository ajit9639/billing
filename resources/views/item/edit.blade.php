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
                            <h4 class="card-title">Edit Item</h4>
                        </div>
                    </div>
                    <div class="card-body">
                       <form method="POST" action="/item/update/{{ $item->id }}">
                    <div class="row">
                        @csrf
                        <div class="col-sm-4">
                            <label>Item Name:</label>
                            <input type="text" class="form-control"  placeholder="Enter Item Name" name="item_name" value="{{ $item->item_name }}">
                        </div>

                        <div class="col-sm-4">
                            <label>Purchase Rate:</label>
                            <input type="text" class="form-control"  placeholder="Enter Purchase Rate" name="purchase_rate" value="{{ $item->purchase_rate }}">
                        </div>

                        <div class="col-sm-4">
                            <label>Invoice Rate:</label>
                            <input type="text" class="form-control"  placeholder="Enter Invoice Rate" name="invoice_rate" value="{{ $item->invoice_rate }}">
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