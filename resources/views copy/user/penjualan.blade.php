@extends('user.template')
@section('JudulHalaman', 'Toko Mas Woko')
@section('breadcome', 'Dashboard')

@section('content')
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
@endsection
