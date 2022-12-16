
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Origanl Bill </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <style>
        td,
        th,
        tr {
            padding: 0 !important;
            text-align: center;
        }
    </style> 

    {{-- <x-layout /> --}}



    <div class="container mt-4">
        <div class="row">
            <div class="col-6">
                <h3>S.P.APPARELS </h3>
                <div class="col-12">
                    Holding No-2, Ramdas Bhatta, Main Road<br> Adjecent to Brajdham Mandir, near Dhobhi Ghat<br>
                    Bistupur, Jamshedpur-831001, Jharkhand.
                    {{-- <br> Phone: 000-000-0000 <br>Website:
                    www.quicksecureindia.com --}}

                </div>
            </div>
            <div class="col-6">
                <h5 style="color: rgb(2, 168, 197);">INVOICE</h5>
                <div class="col-12">
                    <table class="table table-bordered table-hover">
                        <tbody>
                           
                            <tr>
                                <th scope="col">INVOICE ID </th>
                                <td scope="col">{{ $invoice->id }} </td>
                            </tr>
                            <tr>
                                <th scope="row">DATE</th>
                                <td scope="row">{{ $invoice->date }} </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
      
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered table-hover">
                    <tbody>
                        <tr style="background-color: rgb(14, 5, 65); color:aliceblue;">
                            <th scope="row">DESCRIPTION </th>
                            <th scope="row">QUANTITY </th>
                            <th scope="row">AMOUNT </th>
                        </tr>
                                                                                                        <tr>
                                <td scope="col">{{ $invoice->item->item_name }} </td>
                                <td scope="col">{{ $invoice->total_qty }} </td>
                                <td scope="col">{{ $invoice->sub_total }} </td>
                            </tr>
                                            </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                

            </div>
            <div class="col-6 ">

                <table class="table table-bordered table-hover">
                    <tbody>
                        <tr>
                            <th scope="row">Sub total : </th>
                            <td scope="row">{{ $invoice->sub_total }}</td>
                        </tr>


                        <tr>
                            <th scope="col">GST Amount : </th>
                            <td scope="row">{{ $invoice->gst_amt }}</td>
                        </tr>
                        
                        <tr>
                            <th scope="col">TOTAL :</th>
                            <td scope="col">{{ $invoice->total_amt }}</td>
                        </tr>
                        
                    </tbody>
                </table>

              
            </div>
        </div>
        <div class="row ">
            <div class="col-12 mt-5 ">               

                <p class="text-center " style="font-style: italic; font-weight:700; ">Thank You !!
                </p>
            </div>
        </div>

        <div class="pb-5 text-center" id="print">
            <button onclick="print_bill()" class="btn btn-primary btn-sm"> print </button>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js "
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2 " crossorigin="anonymous ">
    </script>
</body>

</html>

<script>
    print();
    function print_bill() {
        document.getElementById('print').style.display = "none";
        print();
        window.location.reload();
    }
</script>

<x-foot />
{{-- <x-footer /> --}}