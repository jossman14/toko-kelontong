@extends('user.template')
@section('JudulHalaman', 'Toko Mas Woko')
@section('breadcome', 'Dashboard')

@section('content')
    <div class="income-order-visit-user-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="income-dashone-total income-monthly shadow-reset nt-mg-b-30">
                        <div class="income-title">
                            <div class="main-income-head">
                                <h2>Income</h2>
                                <div class="main-income-phara">
                                    <p>Monthly</p>
                                </div>
                            </div>
                        </div>
                        <div class="income-dashone-pro">
                            <div class="income-rate-total">
                                <div class="price-adminpro-rate">
                                    <h3><span>Rp</span><span class="counter">5000000</span></h3>
                                </div>
                                <div class="price-graph">
                                    <span id="sparkline1"></span>
                                </div>
                            </div>
                            <div class="income-range">
                                <p>Total income</p>
                                <span class="income-percentange">95% <i class="fa fa-bolt"></i></span>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="income-dashone-total orders-monthly shadow-reset nt-mg-b-30">
                        <div class="income-title">
                            <div class="main-income-head">
                                <h2>Transaksi</h2>
                                <div class="main-income-phara order-cl">
                                    <p>Monthly</p>
                                </div>
                            </div>
                        </div>
                        <div class="income-dashone-pro">
                            <div class="income-rate-total">
                                <div class="price-adminpro-rate">
                                    <h3><span class="counter">72320</span></h3>
                                </div>
                                <div class="price-graph">
                                    <span id="sparkline6"></span>
                                </div>
                            </div>
                            <div class="income-range order-cl">
                                <p>New Orders</p>
                                <span class="income-percentange">66% <i class="fa fa-level-up"></i></span>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="income-dashone-total visitor-monthly shadow-reset nt-mg-b-30">
                        <div class="income-title">
                            <div class="main-income-head">
                                <h2>Barang</h2>
                                <div class="main-income-phara visitor-cl">
                                    <p>Total</p>
                                </div>
                            </div>
                        </div>
                        <div class="income-dashone-pro">
                            <div class="income-rate-total">
                                <div class="price-adminpro-rate">
                                    <h3><span class="counter">4400</span></h3>
                                </div>
                                <div class="price-graph">
                                    <span id="sparkline2"></span>
                                </div>
                            </div>
                            <div class="income-range visitor-cl">
                                <p>Barang Baru</p>
                                <span class="income-percentange">55% <i class="fa fa-level-up"></i></span>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="income-dashone-total user-monthly shadow-reset nt-mg-b-30">
                        <div class="income-title">
                            <div class="main-income-head">
                                <h2>Pelanggan</h2>
                                <div class="main-income-phara low-value-cl">
                                    <p>Bulan Ini</p>
                                </div>
                            </div>
                        </div>
                        <div class="income-dashone-pro">
                            <div class="income-rate-total">
                                <div class="price-adminpro-rate">
                                    <h3><span class="counter">3554</span>Orang</h3>
                                </div>
                                <div class="price-graph">
                                    <span id="sparkline5"></span>
                                </div>
                            </div>
                            <div class="income-range low-value-cl">
                                <p>Pelanggan Baru</p>
                                <span class="income-percentange">33% <i class="fa fa-level-down"></i></span>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- income order visit user End -->
    <div class="dashtwo-order-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="dashtwo-order-list shadow-reset">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="wrapper">
                                    <canvas id="myChartsrs" width="400" height="100"></canvas>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="skill-content-3">
                                    <div class="skill">
                                        <div class="progress">
                                            <div class="lead-content">
                                                <h3>2,346</h3>
                                                <p>Total orders in period</p>
                                            </div>
                                            <div class="progress-bar wow fadeInLeft" data-progress="95%" style="width: 95%;"
                                                data-wow-duration="1.5s" data-wow-delay="1.2s"> <span>95%</span>
                                            </div>
                                        </div>
                                        <div class="progress">
                                            <div class="lead-content">
                                                <h3>9,346</h3>
                                                <p>Orders in last month</p>
                                            </div>
                                            <div class="progress-bar wow fadeInLeft" data-progress="85%" style="width: 85%;"
                                                data-wow-duration="1.5s" data-wow-delay="1.2s"><span>85%</span> </div>
                                        </div>
                                        <div class="progress progress-bt">
                                            <div class="lead-content">
                                                <h3>2,34,600</h3>
                                                <p>Monthly income from order</p>
                                            </div>
                                            <div class="progress-bar wow fadeInLeft" data-progress="93%" style="width: 93%;"
                                                data-wow-duration="1.5s" data-wow-delay="1.2s"><span>93%</span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
