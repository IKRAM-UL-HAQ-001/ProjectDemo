@extends("layout.layout")
@section('content')
<div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>welcome back!</h4>
                <span class="ml-1">Datatable</span>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Datatable</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Sent to Owner List </h4>
                    <a href="{{ route('export.hkList') }}" class="btn btn-primary">Download Sent to Owner List</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="display" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>Shop Name</th>
                                    <th>User Name</th>
                                    <th>Cash Amount</th>
                                    <th>Remarks</th>
                                </tr>
                            </thead>
                            <tbody style="color:black">
                                @foreach($hkRecords as $hk)
                                    <tr>
                                        <td>{{$hk->shop->shop_name}}</td>
                                        <td>{{$userName}}</td>
                                        <td>{{$hk->cash_amount}}</td>
                                        <td>{{$hk->remarks}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Shop Name</th>
                                    <th>User Name</th>
                                    <th>Cash Amount</th>
                                    <th>Remarks</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
    </div>
</div>
@endsection