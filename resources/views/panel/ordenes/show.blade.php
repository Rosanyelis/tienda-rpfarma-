@extends('layouts.app')
@section('contenido')
<div class="nk-content-inner">
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">Ver Orden</h3>
                </div><!-- .nk-block-head-content -->
                <div class="nk-block-head-content">
                    <div class="toggle-wrap nk-block-tools-toggle">
                        <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                        <div class="toggle-expand-content" data-content="pageMenu">
                            <ul class="nk-block-tools g-3">
                                <li class="nk-block-tools-opt">
                                    <a href="{{ url('admin/ordenes') }}" class="btn btn-secondary">
                                        <em class="icon ni ni-arrow-left"></em>
                                        <span>Regresar</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!-- .nk-block-head-content -->
            </div><!-- .nk-block-between -->
        </div>

        <div class="nk-block nk-block-lg">
            <div class="card card-bordered">
                <div class="card-inner">
                    <div class="container invoice">
                        <div class="invoice-head">
                            <div class="invoice-contact">
                                <div class="invoice-contact-info">
                                    <h4 class="title">Cliente:</h4>
                                    <ul class="list-plain">
                                        <li><em class="icon ni ni-map-pin-fill"></em><span>House #65, 4328 Marion Street<br>Newbury, VT 05051</span></li>
                                        <li><em class="icon ni ni-call-fill"></em><span>+012 8764 556</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="invoice-desc">
                                <h3 class="title">Invoice</h3>
                                <ul class="list-plain">
                                    <li class="invoice-id"><span>Invoice ID</span>:<span>66K5W3</span></li>
                                    <li class="invoice-date"><span>Date</span>:<span>26 Jan, 2020</span></li>
                                </ul>
                            </div>
                        </div><!-- .invoice-head -->
                        <div class="invoice-bills">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th class="w-150px">Item ID</th>
                                            <th class="w-60">Description</th>
                                            <th>Price</th>
                                            <th>Qty</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>24108054</td>
                                            <td>Dashlite - Conceptual App Dashboard - Regular License</td>
                                            <td>$40.00</td>
                                            <td>5</td>
                                            <td>$200.00</td>
                                        </tr>
                                        <tr>
                                            <td>24108054</td>
                                            <td>6 months premium support</td>
                                            <td>$25.00</td>
                                            <td>1</td>
                                            <td>$25.00</td>
                                        </tr>
                                        <tr>
                                            <td>23604094</td>
                                            <td>Invest Management Dashboard - Regular License</td>
                                            <td>$131.25</td>
                                            <td>1</td>
                                            <td>$131.25</td>
                                        </tr>
                                        <tr>
                                            <td>23604094</td>
                                            <td>6 months premium support</td>
                                            <td>$78.75</td>
                                            <td>1</td>
                                            <td>$78.75</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="2"></td>
                                            <td colspan="2">Subtotal</td>
                                            <td>$435.00</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"></td>
                                            <td colspan="2">Processing fee</td>
                                            <td>$10.00</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"></td>
                                            <td colspan="2">TAX</td>
                                            <td>$43.50</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"></td>
                                            <td colspan="2">Grand Total</td>
                                            <td>$478.50</td>
                                        </tr>
                                    </tfoot>
                                </table>
                                <div class="nk-notes ff-italic fs-12px text-soft"> Invoice was created on a computer and is valid without the signature and seal. </div>
                            </div>
                        </div><!-- .invoice-bills -->

                    </div><!-- .invoice -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
