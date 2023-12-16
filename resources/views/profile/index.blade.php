@extends('layouts.main')

@section('content')
<div class="col-12 col-lg-10 p-0">
    @include('components.topbar')
    <div class="content mb-5">
        <div class="profile-thumbnail position-relative mb-5">
            <div class="thumbnail-image"></div>
            <div class="thumbnail-profile d-flex align-items-end gap-4">
                <img src="{{ asset('assets/images/profile/profie-image.svg') }}" alt="Profile Image" class="img-fluid" width="200">
                <div class="profile-wrapper">
                    <h2 class="profile-username">Kevin Sanjaya</h2>
                    <p class="profile-role">Teacher Dashboard</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 col-xl-4">
                <div class="info-card">
                    <div class="card-title">
                        <h6 class="title">Info</h6>
                    </div>
                    <div class="card-content d-flex flex-column gap-2">
                        <div class="content-item d-flex align-items-center gap-3">
                            <div class="email-icon"></div>
                            <div class="item-wrapper">
                                <p class="item-title">email</p>
                                <p class="item-content">kevinsanjaya@gmail.com</p>
                            </div>
                        </div>
                        <div class="content-item d-flex align-items-center gap-3">
                            <div class="phone-icon"></div>
                            <div class="item-wrapper">
                                <p class="item-title">phone</p>
                                <p class="item-content">+628123456789</p>
                            </div>
                        </div>
                        <div class="content-item d-flex align-items-center gap-3">
                            <div class="address-icon"></div>
                            <div class="item-wrapper">
                                <p class="item-title">location</p>
                                <p class="item-content">Jalan Flamboyan No. 1212, Mangga Besar Village, West Jakarta City, DKI Jakarta 11180</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mt-4 mt-lg-0">
                <div class="activity-card">
                    <div class="card-title">
                        <h6 class="title">Latest Activity</h6>
                    </div>
                    <div class="card-content">
                        <p class="activity">Kevin sanjaya got 2 schedules to teach</p>
                        <a href="#" class="caption">Just now</a>
                        <div class="row mt-2">
                            <div class="col-md-6 p-2">
                                <div class="activity-item">
                                    <a href="#" class="item-title">Meeting with UI/UX Team to manage our  upcoming projects & task.</a>
                                    <div class="wrapper d-flex align-items-center gap-2">
                                        <div class="user-icon"></div>
                                        <p class="value">Kevin Sanjaya</p>
                                    </div>
                                    <div class="wrapper d-flex align-items-center gap-2 mt-2">
                                        <div class="time-icon"></div>
                                        <p class="value">16 Jan, 2024, 10:00 PM to 13:00 PM</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 p-2">
                                <div class="activity-item">
                                    <a href="#" class="item-title">Meeting with UI/UX Team to manage our  upcoming projects & task.</a>
                                    <div class="wrapper d-flex align-items-center gap-2">
                                        <div class="user-icon"></div>
                                        <p class="value">Kevin Sanjaya</p>
                                    </div>
                                    <div class="wrapper d-flex align-items-center gap-2 mt-2">
                                        <div class="time-icon"></div>
                                        <p class="value">17 Jan, 2024, 10:00 PM to 13:00 PM</p>
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