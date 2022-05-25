@extends('layout.master')
@section('title','home')
@section('main-content')


<div class="loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
</div>

<div class="custom__container-wrapper">
    <div class="dboard-inner">
        @include('layout.top_bar')
        <div id="layoutSidenav">
            @include('layout.menu')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container">
                        <h1 class="mt-4 title-dashboard">Dashboard</h1>

                        <div class="row">
                            <div class="col-md-12 main-b">
                                <div class="row active-card">
                                    <div class="col-xl-3 col-md-4 col-sm-4">
                                        <div class="card card__one--wrapper text-white mb-4">
                                            <div class="card-body">
                                                <div class="flex__wrapper-two">
                                                    <div>
                                                        <p class="card-label-one">Available Credit</p>
                                                        <h3 class="card-heading-one">$0.00</h3>
                                                    </div>
                                                    <div>
                                                        <i class="fa fa-credit-card" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-4 col-sm-4">
                                        <div class="card card__two--wrapper text-white mb-4">
                                            <div class="card-body">
                                                <div class="flex__wrapper-two">
                                                    <div>
                                                        <p class="card-label-one">Active Offers</p>
                                                        <h3 class="card-heading-one">$0.00</h3>
                                                    </div>
                                                    <div>
                                                        <i class="fa fa-credit-card" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="active-details">
                                    <div class="active-title">
                                        <h1>Active Offers</h1>
                                    </div>
                                    <div class="active-description">
                                        <div class="active-info">
                                            <p>You don't have active offer</p>
                                        </div>
                                        <div class="active-btn"><a href="">Create New Offer</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 main-b">
                                <div class="row">

                                    <div class="col-xl-12 col-md-12 ">
                                        <div class="active-title-2">
                                            <h1>Activity</h1>
                                        </div>
                                        <div class="graph__wrapper-width">
                                            <div class="hide-cancel">
                                                <div class="hide-detail">
                                                    <input type="checkbox" name="" id="">
                                                    <p>Hide canceled Trades</p>
                                                </div>
                                            </div>
                                            <div class="acivity-details">
                                                <div class="activity-info">
                                                    <div class="activity-shop">
                                                        <div class="activity-icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>
                                                        <div class="activity-name">eoaoela</div>
                                                    </div>
                                                    <div class="activity-shop">
                                                        <div class="activity-date">11.05.2022</div>
                                                        <div class="activity-time">12:00pm</div>
                                                    </div>
                                                    <div class="activity-shop">
                                                        <div class="acivity-price">$500.00</div>
                                                        <div class="activity-next-icon"><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i></a></div>
                                                    </div>
                                                </div>
                                                <div class="activity-info">
                                                    <div class="activity-shop">
                                                        <div class="activity-icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>
                                                        <div class="activity-name">eoaoela</div>
                                                    </div>
                                                    <div class="activity-shop">
                                                        <div class="activity-date">11.05.2022</div>
                                                        <div class="activity-time">12:00pm</div>
                                                    </div>
                                                    <div class="activity-shop">
                                                        <div class="acivity-price">$500.00</div>
                                                        <div class="activity-next-icon"><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i></a></div>
                                                    </div>
                                                </div>
                                                <div class="activity-info">
                                                    <div class="activity-shop">
                                                        <div class="activity-icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>
                                                        <div class="activity-name">eoaoela</div>
                                                    </div>
                                                    <div class="activity-shop">
                                                        <div class="activity-date">11.05.2022</div>
                                                        <div class="activity-time">12:00pm</div>
                                                    </div>
                                                    <div class="activity-shop">
                                                        <div class="acivity-price">$500.00</div>
                                                        <div class="activity-next-icon"><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i></a></div>
                                                    </div>
                                                </div>
                                                <div class="activity-info">
                                                    <div class="activity-shop">
                                                        <div class="activity-icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>
                                                        <div class="activity-name">eoaoela</div>
                                                    </div>
                                                    <div class="activity-shop">
                                                        <div class="activity-date">11.05.2022</div>
                                                        <div class="activity-time">12:00pm</div>
                                                    </div>
                                                    <div class="activity-shop">
                                                        <div class="acivity-price">$500.00</div>
                                                        <div class="activity-next-icon"><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i></a></div>
                                                    </div>
                                                </div>
                                                <div class="activity-info">
                                                    <div class="activity-shop">
                                                        <div class="activity-icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>
                                                        <div class="activity-name">eoaoela</div>
                                                    </div>
                                                    <div class="activity-shop">
                                                        <div class="activity-date">11.05.2022</div>
                                                        <div class="activity-time">12:00pm</div>
                                                    </div>
                                                    <div class="activity-shop">
                                                        <div class="acivity-price">$500.00</div>
                                                        <div class="activity-next-icon"><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </main>
                @include('layout.footer')
            </div>
        </div>

    </div>
</div>