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
                        <div class="col-sm-12">
                            <label>State Name:</label>
                            <input type="text" class="form-control"  placeholder="Enter State Name" name="state">
                        </div>

                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
<!-- // the model view end -->