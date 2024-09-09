<x-app-layout>

<body>
    <div class="container">
        <div class="sidebar">@include('menu')</div>
    
    
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 mt-5">
                            <div class="job-dashboard">
                                <div class="row job-info">
                                    <div class="col"></div>
                                    <div class="col">
                                        <div class="row">
                                            <h1 class="job-listing-title">Job Listing</h1>
                                        </div>
                                        <div class="row">
                                            <span class="job-listing-description">Find the right career fit for you!</span>
                                        </div>
                                    </div>
                                    <div class="col"></div>
                                </div>
                            </div>        
                    </div>
                </div>

                <div class="job-listing-container d-flex flex-column">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 mt-5">
                            <div class="job-filter-container">
                                <div class="job-filter">
                                    <div class="row job-info">
                                        <div class="col-md-5">
                                            <div class="row">
                                                <p class="job-filter-text">WHAT ARE YOU LOOKING FOR?</p>
                                            </div>
                                            <div class="row">
                                                <input list="job-options" name="search-job" id="search-job" placeholder="     Search Job">
                                                <datalist id="job-options">
                                                    <option value="Developer">
                                                    <option value="Designer">
                                                    <option value="Manager">
                                                    <!-- Add more options as needed -->
                                                </datalist>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="row">
                                                <p class="job-filter-text">FILTER BY</p>
                                            </div>
                                            <div class="row">
                                                <select name="any" id="any" class="job-filter-dp">
                                                    <option value="" disabled selected>Any</option>
                                                    <option value="full-time">Full Time</option>
                                                    <option value="part-time">Part Time</option>
                                                    <option value="freelance">Freelance</option>
                                                    <!-- Add more options as needed -->
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="row">
                                                <button type="button" class="job-filter-btn"><p class="job-filter-btn-text">FInd Job</p></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="job-post-container d-flex flex-column">
                    <div class="job-post-card">
                        <div class="row job-info">
                            <div class="col-md-1">
                                <img class="job-logo" src="{{ asset('/images/dashboard/op-logo.png') }}" alt="">
                            </div>
                            <div class="col-md-2">
                                <div class="row">
                                    <button class="fulltime-button">Full Time</button>
                                </div>
                                <div class="row">
                                    <h1 class="job-title">Loan Processor</h1>
                                </div>
                                <div class="row">
                                    <span class="job-posted">6 days ago</span>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="row">
                                    <div class="col"><button class="jobtags-button">Attention to detail....</button></div>
                                    <div class="col"><button class="jobtags-button">Strong organizationa....</button></div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <button class="jobtags-button">Excellent written an....</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col"></div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="circle">
                                            <i class="fas fa-bookmark"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="circle-heart">
                                            <i class="fas fa-heart"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <button class="apply-button">Apply</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="job-post-card">
                        <div class="row job-info">
                            <div class="col-md-1">
                                <img class="job-logo" src="{{ asset('/images/dashboard/op-logo.png') }}" alt="">
                            </div>
                            <div class="col-md-2">
                                <div class="row">
                                    <button class="parttime-button">Part Time</button>
                                </div>
                                <div class="row">
                                    <h1 class="job-title">Loan Processor</h1>
                                </div>
                                <div class="row">
                                    <span class="job-posted">6 days ago</span>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="row">
                                    <div class="col"><button class="jobtags-button">Attention to detail....</button></div>
                                    <div class="col"><button class="jobtags-button">Strong organizationa....</button></div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <button class="jobtags-button">Excellent written an....</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col"></div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="circle">
                                            <i class="fas fa-bookmark"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="circle-heart">
                                            <i class="fas fa-heart"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <button class="apply-button">Apply</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="job-post-card">
                        <div class="row job-info">
                            <div class="col-md-1">
                                <img class="job-logo" src="{{ asset('/images/dashboard/op-logo.png') }}" alt="">
                            </div>
                            <div class="col-md-2">
                                <div class="row">
                                    <button class="fulltime-button">Full Time</button>
                                </div>
                                <div class="row">
                                    <h1 class="job-title">Loan Processor</h1>
                                </div>
                                <div class="row">
                                    <span class="job-posted">6 days ago</span>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="row">
                                    <div class="col"><button class="jobtags-button">Attention to detail....</button></div>
                                    <div class="col"><button class="jobtags-button">Strong organizationa....</button></div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <button class="jobtags-button">Excellent written an....</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col"></div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="circle">
                                            <i class="fas fa-bookmark"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="circle-heart">
                                            <i class="fas fa-heart"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <button class="apply-button">Apply</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="job-post-card">
                        <div class="row job-info">
                            <div class="col-md-1">
                                <img class="job-logo" src="{{ asset('/images/dashboard/op-logo.png') }}" alt="">
                            </div>
                            <div class="col-md-2">
                                <div class="row">
                                    <button class="parttime-button">Part Time</button>
                                </div>
                                <div class="row">
                                    <h1 class="job-title">Loan Processor</h1>
                                </div>
                                <div class="row">
                                    <span class="job-posted">6 days ago</span>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="row">
                                    <div class="col"><button class="jobtags-button">Attention to detail....</button></div>
                                    <div class="col"><button class="jobtags-button">Strong organizationa....</button></div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <button class="jobtags-button">Excellent written an....</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col"></div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="circle">
                                            <i class="fas fa-bookmark"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="circle-heart">
                                            <i class="fas fa-heart"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <button class="apply-button">Apply</button>
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

<script src="{{ mix('js/app.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.11.3/main.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.11.3/bootstrap5.min.js"></script>

</body>

</html>
</x-app-layout>