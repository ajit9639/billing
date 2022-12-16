<x-layout />
<x-navbar />
<x-aside />



<div class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-wrap flex-wrap align-items-center justify-content-between mb-4">
                    <div>
                        <h4 class="mb-3">Invoice List</h4>                        
                    </div>
                    <a data-toggle="modal" data-target="#myModal_view" class="btn-sm text-white btn btn-primary add-list"><i class="las la-plus mr-3"></i>Add Invoice</a>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="table-responsive rounded mb-3">
                    <table class="data-tables table mb-0 tbl-server-info">
                        <thead class="bg-white text-uppercase">
                            <tr class="ligth ligth-data">                                                                
                                <th>SNO</th>
                                <th>Date</th>                                
                                                            
                                <th>Item Name</th>                                
                                <th>Name</th>                                
                                <th>QTY</th>                                
                                <th>Sub Total</th>                                
                                <th>Gst Amount</th>                                
                                <th>Total Amount</th>                                
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="ligth-body">

                            @foreach ($invoice as $invoice)                                                            
                            <tr>          
                                <td>{{ $loop->iteration }}</td>                                                     
                                <td>{{ $invoice->date }}</td>                                
                                                             
                                <td>{{ $invoice->item->item_name }}</td>                                
                                <td>{{ $invoice->customer_name }}</td>                                
                                <td>{{ $invoice->total_qty }}</td>                                
                                <td>{{ $invoice->sub_total }}</td>                                
                                <td>{{ $invoice->gst_amt }}</td>                                
                                <td>{{ $invoice->total_amt }}</td>                                
                                
                                <td>
                                    <div class="d-flex align-items-center list-action">
                                        <a class="badge badge-info mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="/invoice/print/{{ $invoice->id }}"><i class="fa fa-print mr-0"></i></a>
                                        <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="/invoice/edit/{{ $invoice->id }}"><i class="fa fa-pen mr-0"></i></a>
                                        <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="/invoice/delete/{{ $invoice->id }}"><i class="fa fa-trash mr-0"></i></a>
                                    </div>
                                </td>
                            </tr>
                            @include('invoice.view')
                            @endforeach
                            @include('invoice.insert')
                                                                                 
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