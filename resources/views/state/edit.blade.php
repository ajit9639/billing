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
                            <h4 class="card-title">Edit State</h4>
                        </div>
                    </div>
                    <div class="card-body">
                       <form method="POST" action="/state/update/{{ $state->id }}">
                    <div class="row">
                        @csrf
                        <div class="col-sm-12">
                            <label>State Name:</label>
                            <input type="text" class="form-control"  placeholder="Enter State Name" name="state">
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