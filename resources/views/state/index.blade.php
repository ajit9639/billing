<x-layout />
<x-navbar />
<x-aside />



<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                    <div>
                        <h4 class="mb-3">State List</h4>                        
                    </div>
                    <a data-toggle="modal" data-target="#myModal_view" class="btn-sm text-white btn btn-primary add-list"><i class="las la-plus mr-3"></i>Add State</a>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="table-responsive rounded mb-3">
                    <table class="data-tables table mb-0 tbl-server-info">
                        <thead class="bg-white text-uppercase">
                            <tr class="ligth ligth-data">                                                                
                                <th>SNO</th>
                                <th>State Name</th>                                
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="ligth-body">

                            @foreach ($state as $state)                                                            
                            <tr>          
                                <td>{{ $loop->iteration }}</td>                                                     
                                <td>{{ $state->name }}</td>                                
                                
                                <td>
                                    <div class="d-flex align-items-center list-action">
                                        <a class="badge badge-info mr-2" data-toggle="modal" data-target="#myModal_view{{  $state-> id}}"><i class="fa fa-eye  mr-0"></i></a>
                                        <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="/state/edit/{{ $state->id }}"><i class="fa fa-pen mr-0"></i></a>
                                        <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="/state/delete/{{ $state->id }}"><i class="fa fa-trash mr-0"></i></a>
                                    </div>
                                </td>
                            </tr>
                            {{-- @include('customer.view') --}}
                            @endforeach
                            @include('state.insert')
                                                                                 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Page end  -->
    </div>    
</div>


<x-foot />
{{-- <x-footer /> --}}