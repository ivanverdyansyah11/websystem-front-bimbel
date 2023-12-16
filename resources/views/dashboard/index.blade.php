@extends('layouts.main')

@section('content')
    <div class="col-12 col-lg-10 p-0">
        @include('components.topbar')
        <div class="content mb-5">
            <div class="row">
                <div class="col">
                    <div class="card-opening d-flex align-items-center gap-4 mb-4">
                        <div class="banner-image-opening"></div>
                        <img src="{{ asset('assets/images/banner/banner-graduate.svg') }}" alt="Banner Graduate" class="img-fluid" width="240">
                        <div class="opening-wrapper">
                            <p class="opening-username m-0">Hi, Kevin Sanjaya</p>
                            <h2 class="opening-title">Welcome to Edu Learn</h2>
                            <p class="paragraph">We're Happy to Welcome You to the Leading Education Platform, Edu Learn. Teachers, You are the Key to Our Success</p>
                        </div>
                    </div>
                    <div class="card-statistic">
                        <div class="statistic-wrapper d-flex align-items-center justify-content-between">
                            <h5 class="statistic-title">Lesson Statistic</h5>
                            <a href="#" class="link-default">View All</a>
                        </div>
                        <div class="statistic-item mt-3">
                            <div class="wrapper d-flex align-items-center justify-content-between">
                                <div class="card-wrapper">
                                    <h6 class="card-title mb-1">Practical Web Design</h6>
                                    <p class="caption">Simple web page creation</p>
                                </div>
                                <button type="button" class="button-small">Done</button>
                            </div>
                            <progress class="statistic-progress mt-3 w-100" value="100" max="100"></progress>
                        </div>
                        <div class="statistic-item mt-2">
                            <div class="wrapper d-flex align-items-center justify-content-between">
                                <div class="card-wrapper">
                                    <h6 class="card-title mb-1">Practical Coding</h6>
                                    <p class="caption">Basic operations on strings</p>
                                </div>
                                <button type="button" class="button-small">3 days left</button>
                            </div>
                            <progress class="statistic-progress mt-3 w-100" value="50" max="100"></progress>
                        </div>
                        <div class="statistic-item mt-2">
                            <div class="wrapper d-flex align-items-center justify-content-between">
                                <div class="card-wrapper">
                                    <h6 class="card-title mb-1">Languange Lab</h6>
                                    <p class="caption">Word pronunciation and enunciation activities.</p>
                                </div>
                                <button type="button" class="button-small">4 days left</button>
                            </div>
                            <progress class="statistic-progress mt-3 w-100" value="0" max="100"></progress>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card-calender">
                        <div class="calender-wrapper d-flex align-items-center justify-content-between">
                            <h5 class="calender-title">Calender</h5>
                            {{-- <div class="arrow-icon-down"></div> --}}
                        </div>
                        <div class="calender-year d-flex justify-content-between align-items-center mt-3">
                            <p class="year">January 2024</p>
                            <div class="icon-wrapper d-flex gap-2">
                                <div class="arrow-icon-left"></div>
                                <div class="arrow-icon-right"></div>
                            </div>
                        </div>
                        <div class="calender-date mt-3">
                            <div class="date-wrapper d-flex">
                                <p>mon</p>
                                <p>tue</p>
                                <p>wed</p>
                                <p>thu</p>
                                <p>fri</p>
                                <p>sat</p>
                                <p>sun</p>
                            </div>
                            <div class="date-wrapper d-flex">
                                <p>1</p>
                                <p>2</p>
                                <p>3</p>
                                <p>4</p>
                                <p>5</p>
                                <p>6</p>
                                <p>7</p>
                            </div>
                            <div class="date-wrapper d-flex">
                                <p>8</p>
                                <p>9</p>
                                <p>10</p>
                                <p>11</p>
                                <p>12</p>
                                <p>13</p>
                                <p>14</p>
                            </div>
                            <div class="date-wrapper d-flex">
                                <p>15</p>
                                <p>16</p>
                                <p>17</p>
                                <p>18</p>
                                <p>19</p>
                                <p>20</p>
                                <p>21</p>
                            </div>
                            <div class="date-wrapper d-flex">
                                <p>22</p>
                                <p>23</p>
                                <p>24</p>
                                <p>25</p>
                                <p>26</p>
                                <p>27</p>
                                <p>28</p>
                            </div>
                            <div class="date-wrapper d-flex">
                                <p>29</p>
                                <p>30</p>
                                <p></p>
                                <p></p>
                                <p></p>
                                <p></p>
                                <p></p>
                            </div>
                        </div>
                        <div class="activity-wrapper d-flex align-items-center justify-content-between mt-4">
                            <h5 class="activity-title">Activity</h5>
                            <a href="#" class="link-default">View All</a>
                        </div>
                        <div class="activity-item d-flex gap-2 mt-3">
                            <img src="{{ asset('assets/images/profile/profile-image-letter.svg') }}" alt="Profile Image Letter" class="img-fluid" width="32">
                            <div class="item-wrapper">
                                <p class="item-title">You get a schedule to teach</p>
                                <p class="item-caption">16 January, 2024 | 10:00 AM-13.OO PM</p>
                            </div>
                        </div>
                        <div class="activity-item d-flex gap-2 mt-2">
                            <img src="{{ asset('assets/images/profile/profile-image-letter.svg') }}" alt="Profile Image Letter" class="img-fluid" width="32">
                            <div class="item-wrapper">
                                <p class="item-title">You get a schedule to teach</p>
                                <p class="item-caption">17 January, 2024 | 09:00 AM-11.OO AM</p>
                            </div>
                        </div>
                        <div class="activity-item d-flex gap-2 mt-2">
                            <img src="{{ asset('assets/images/profile/profile-image-letter.svg') }}" alt="Profile Image Letter" class="img-fluid" width="32">
                            <div class="item-wrapper">
                                <p class="item-title">You get a schedule to teach</p>
                                <p class="item-caption">18 January, 2024 | 09:00 AM-11.OO AM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection