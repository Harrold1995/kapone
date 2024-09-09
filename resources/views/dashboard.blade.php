<x-app-layout>

<body>
    <div class="custom-layout">
        <div class="sidebar">@include('menudb')</div>
        <div class="dashboard-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-9 col-lg-9 col-md-9 mt-5">
                            <div class="db-profile-dashboard">
                                <!-- Profile Dashboard Content -->
                            </div>
                            <div class="profile-dashboard-white">
                                <div class="d-flex flex-row-reverse">
                                    <button class="change-cover-btn">
                                        <img src="{{ asset('/images/dashboard/camera.png') }}" alt="Change Cover">
                                        &nbsp;&nbsp; Change Cover
                                    </button>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <img class="profile-pic" src="{{ asset('/images/dashboard/profile-pic.png') }}" alt="Profile Picture">
                                    </div>
                                    <div class="col-md-3">
                                        <p class="dashboard-name">Aldin Gumera</p>
                                        <p class="dashboard-position-name">Project Based UI/UX Designer</p>
                                    </div>
                                    <div class="col-md-7"></div>
                                </div>
                                <div class="row">
                                    <div class="dashboard-bottom">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <button class="dashboard-btn">
                                                    <img src="{{ asset('/images/dashboard/home.png') }}" alt="Dashboard">
                                                    Dashboard
                                                </button>
                                            </div>
                                            <div class="col-md-4">
                                                <button class="feed-btn">
                                                    <img src="{{ asset('/images/dashboard/feed.png') }}" alt="Feed">
                                                    Feed
                                                </button>
                                            </div>
                                            <div class="col-md-4">
                                                <button class="profile-btn">
                                                    <img src="{{ asset('/images/dashboard/profilebtn.png') }}" alt="Profile">
                                                    Profile
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row task-box">
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="pending-box p-30">
                                            <div class="d-flex align-items-center gap-1">
                                                <img src="{{ asset('/images/dashboard/task.png') }}" alt="Pending">
                                                <span class="dashboard-box-title">Pending</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="p-30 progress-box">
                                            <div class="d-flex align-items-center gap-1">
                                                <img src="{{ asset('/images/dashboard/task.png') }}" alt="Progress">
                                                <span class="dashboard-box-title">Progress</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="p-30 check-box">
                                            <div class="d-flex align-items-center gap-1">
                                                <img src="{{ asset('/images/dashboard/task.png') }}" alt="Checking">
                                                <span class="dashboard-box-title">Checking</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="p-30 complete-box">
                                            <div class="d-flex align-items-center gap-1">
                                                <img src="{{ asset('/images/dashboard/task.png') }}" alt="Completed">
                                                <span class="dashboard-box-title">Completed</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                        <div class="dashboard-container">
                            <div class="top-tasklist">
                                <div class="col-md-4">
                                    <img src="{{ asset('/images/dashboard/task.png') }}" alt="My Task List">
                                    <span class="dashboard-box-title">My Task List</span>
                                </div>
                                <div class="col-md-3">
                                    <label for="entriesDropdown">
                                        <img src="{{ asset('/images/dashboard/calendar.png') }}" alt="Calendar">
                                    </label>
                                    <input type="date">
                                </div>
                                <div class="col-md-2">
                                    <label for="entriesDropdown">
                                        <img src="{{ asset('/images/dashboard/bar.png') }}" alt="Entries Dropdown">
                                    </label>
                                    <select id="entriesDropdown" class="sorting-tasklist" onchange="changeEntriesPerPage()">
                                        <option value="All">All</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <div class="pagination-tasklist">
                                        <button id="1">1</button>
                                        <button id="2">2</button>
                                        <button id="3">3</button>
                                        <button id="4">4</button>
                                        <button id="first">First</button>
                                        <button id="next">Next</button>
                                    </div>
                                </div>
                            </div>

                            <div class="top-tasklist-mobile">
                                <div>
                                    <img src="{{ asset('/images/dashboard/task.png') }}" alt="My Task List">
                                    <span class="dashboard-box-title">My Task List</span>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="entriesDropdown">
                                        <img src="{{ asset('/images/dashboard/calendar.png') }}" alt="Calendar">
                                    </label>
                                    <input type="date">
                                </div>
                                <div class="col-md-6">
                                    <label for="entriesDropdown">
                                        <img src="{{ asset('/images/dashboard/bar.png') }}" alt="Entries Dropdown">
                                    </label>
                                    <select id="entriesDropdown" class="sorting-tasklist" onchange="changeEntriesPerPage()">
                                        <option value="All">All</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select>
                                </div>
                                <div>
                                    <div class="pagination-tasklist mt-3">
                                        <button id="1">1</button>
                                        <button id="2">2</button>
                                        <button id="3">3</button>
                                        <button id="4">4</button>
                                        <button id="first">First</button>
                                        <button id="next">Next</button>
                                    </div>
                                </div>
                            </div>

                    <table class="table table-hover mt-5">
                        <thead>
                            <tr>
                                <th scope="col" class="th-text"></th>
                                <th scope="col" class="th-text">Task ID</th>
                                <th scope="col" class="th-text">Status</th>
                                <th scope="col" class="th-text">Assigned On</th>
                                <th scope="col" class="th-text">Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th><div class="small-circle"></div></th>
                                <th class="cell-text">Company Name</th>
                                <td class="cell-text">In-Progress</td>
                                <td class="cell-text">May 31, 2024 8:00 am</td>
                                <td class="cell-text"></td>
                            </tr>
                            <tr>
                                <th><div class="small-circle"></div></th>
                                <th class="cell-text">Company Name</th>
                                <td class="cell-text">In-Progress</td>
                                <td class="cell-text">May 31, 2024 8:00 am</td>
                                <td class="cell-text"></td>
                            </tr>
                            <tr>
                                <th><div class="small-circle"></div></th>
                                <th class="cell-text">Company Name</th>
                                <td class="cell-text">In-Progress</td>
                                <td class="cell-text">May 31, 2024 8:00 am</td>
                                <td class="cell-text"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="right-sidebar">
            <div class="col">
                <div class="row">
                    <h2 style="text-align: center;">Overall Progress</h2>
                        <div class="chart py-4">
                            <canvas id="sold-product" width="400" height="400"></canvas>
                        </div>
                    </div>
                    <div class="card widget-card border-light shadow-sm">
                        <div class="card-body p-4">
                            <div id="bsb-calendar-1" class="fc fc-media-screen fc-direction-ltr fc-theme-bootstrap5 bsb-calendar-theme calendar-widget"></div>
                        </div>
                    </div>
                    <div class="clock-div d-flex flex-column gap-5">
                        <span class="clock-box-title">Good Morning, Aldin Gumera!</span>
                        <div class="d-flex flex-column lh-1">
                            <div class="col-md-12">
                                <span id="time" class="time clock"></span>
                                <span id="ampm" class="time indicator"></span>
                            </div>
                        </div>
                        <button class="clock-out-btn">Clock Out</button>
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

