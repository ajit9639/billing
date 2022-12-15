<!-- The Modal View-->
<div class="modal fade" id="myModal_view">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h6 class="modal-title">State View Detail</h6>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <form method="POST" action="/state/store">
                    <div class="row">
                        @csrf
                        <div class="col-sm-12">
                            <label>State Name:</label>
                            <input type="text" class="form-control"  placeholder="Enter State Name" name="name">
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