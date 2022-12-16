<x-layout />
<x-navbar />
<x-aside />



<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                    <div>
                        <h4 class="mb-3">Item List</h4>                        
                    </div>
                    <a data-toggle="modal" data-target="#myModal_view" class="btn-sm text-white btn btn-primary add-list"><i class="las la-plus mr-3"></i>Add item</a>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="table-responsive rounded mb-3">
                    <table class="data-tables table mb-0 tbl-server-info">
                        <thead class="bg-white text-uppercase">
                            <tr class="ligth ligth-data">                                                                
                                <th>SNO</th>
                                <th>Item Name</th>                                
                                <th>Purchase Rate</th>                                
                                <th>Invoice Rate</th>                                
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="ligth-body">

                            @foreach ($item as $item)                                                            
                            <tr>          
                                <td>{{ $loop->iteration }}</td>                                                     
                                <td>{{ $item->item_name }}</td>                                
                                <td>{{ $item->purchase_rate }}</td>                                
                                <td>{{ $item->invoice_rate }}</td>                                
                                
                                <td>
                                    <div class="d-flex align-items-center list-action">
                                        {{-- <a class="badge badge-info mr-2" data-toggle="modal" data-target="#myModal_view{{  $item-> id}}"><i class="fa fa-eye  mr-0"></i></a> --}}
                                        <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="/item/edit/{{ $item->id }}"><i class="fa fa-pen mr-0"></i></a>
                                        <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="/item/delete/{{ $item->id }}"><i class="fa fa-trash mr-0"></i></a>
                                    </div>
                                </td>
                            </tr>
                            {{-- @include('customer.view') --}}
                            @endforeach
                            @include('item.insert')
                                                                                 
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