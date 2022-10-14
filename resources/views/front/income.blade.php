@extends('front.master')

@section('content')
<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Income Statements</h4>
                    </div>
                    </div>
                    <div class="iq-card-body">

                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped table-bordered" >
                            <thead>
                                <tr>
                                <th>Year Start</th>
                                <th>Year End</th>
                                <th>Clossing Balance</th>
                                <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>Jan 2018</td>
                                <td>Dec 2018</td>
                                <td>670000</td>
                                <td>
                                    <button type="button" class="btn mb-3 btn-warning"><i class="fa fa-download"></i>Download</button>
                                </td>
                                </tr>
                                <tr>
                                <td>Jan 2019</td>
                                <td>Dec 2019</td>
                                <td>890000</td>
                                <td>
                                    <button type="button" class="btn mb-3 btn-warning"><i class="fa fa-download"></i>Download</button>
                                </td>
                                </tr>
                                <tr>
                                <td>Jan 2020</td>
                                <td>Dec 2020</td>
                                <td>1900000</td>
                                <td>
                                    <button type="button" class="btn mb-3 btn-warning"><i class="fa fa-download"></i>Download</button>
                                </td>
                                </tr>
                                <tr>
                                <td>Jan 2021</td>
                                <td>Dec 2021</td>
                                <td>2500000</td>
                                <td>
                                    <button type="button" class="btn mb-3 btn-warning"><i class="fa fa-download"></i>Download</button>
                                </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                <th>Jan 2022</th>
                                <th>Oct 2022</th>
                                <th>900000</th>
                                <th>
                                    <button type="button" class="btn mb-3 btn-warning"><i class="fa fa-download"></i>Download</button>
                                </th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
