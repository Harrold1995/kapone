<x-app-layout>

<body>
    <div class="container">
        <div class="sidebar">@include('menu')</div>
            <div class="main-content">
            <div class="container-fluid">
                 <div class="remarks-container d-flex flex-column">
                    
                </div>
                <h1>Referral Stats</h1>
                <hr class="hr-stat">
                <section>
                    <div class="row referral-container">
                        <div class="col-md-2">
                            <div class="referal-card">
                                <img src="{{asset('images/referral/pending.png') }}" alt="">
                                <p class="referral-card-text">Pending</p>
                                <p class="referral-card-counter">0</p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="referal-card">
                                <img src="images/referral/active.png" alt="">
                                <p class="referral-card-text">Active</p>
                                <p class="referral-card-counter">0</p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="referal-card">
                                <img src="images/referral/interview.png" alt="">
                                <p class="referral-card-text">On Interview</p>
                                <p class="referral-card-counter">0</p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="referal-card">
                                <img src="images/referral/refected.png" alt="">
                                <p class="referral-card-text">Rejected</p>
                                <p class="referral-card-counter">0</p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="referal-card">
                                <img src="images/referral/hired.png" alt="">
                                <p class="referral-card-text">Hired</p>
                                <p class="referral-card-counter">0</p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="referal-card">
                                <img src="images/referral/hired.png" alt="">
                                <p class="referral-card-text">Clicks</p>
                                <p class="referral-card-counter">0</p>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="referral-table-container">
                    <div class="top-bar">
                        <div>
                            <label for="entriesDropdown"><b class="show-text">Show</b></label>
                            <select id="entriesDropdown" class="sort-table" onchange="changeEntriesPerPage()">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="50">100</option>
                            </select>
                            <label for="entriesDropdown"><b class="entries-text">Entries</b></label>
                        </div>
                        <div>
                            <label for="entriesDropdown"><b class="search-text-table">Search</b></label>
                            <input type="text" id="searchInput" class="search-table" onkeyup="searchTable()">
                        </div>
                    </div>
                    <table class="table table-hover mt-5">
                        <thead>
                            <tr>
                                <th scope="col"><input type="checkbox" id="selectAllOT" onclick="toggleSelectAllOT()"></th>
                                <th scope="col" class="th-text">APPLICANT NAME</th>
                                <th scope="col" class="th-text">APPLYING POSITION</th>
                                <th scope="col" class="th-text">EMAIL</th>
                                <th scope="col" class="th-text">DATE APPLIED</th>
                                <th scope="col" class="th-text">STATUS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="checkbox" class="row-checkbox"></td>
                                <td class="user-info cell-text">
                                    <img src="https://via.placeholder.com/30" alt="Avatar" class="avatar">
                                    Mark
                                </td>
                                <td class="cell-text">2024-07-15</td>
                                <td class="cell-text">Development</td>
                                <td class="cell-text">09:00</td>
                                <td class="cell-text">17:00</td>
                            <tr>
                                <td><input type="checkbox" class="row-checkbox"></td>
                                <td class="user-info cell-text">
                                    <img src="https://via.placeholder.com/30" alt="Avatar" class="avatar">
                                    Jacob
                                </td>
                                <td class="cell-text">2024-07-15</td>
                                <td class="cell-text">Design</td>
                                <td class="cell-text">09:15</td>
                                <td class="cell-text">17:00</td>
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                    <div class="pagination-container">
                        <div>
                            Showing 0 to 0 of 0 entries
                        </div>
                        <div>
                            <button class="previous-buttons" onclick="previousPage()">Previous</button>
                            <button class="next-buttons" onclick="nextPage()">Next</button>
                        </div>
                    </div>
                </div>
                <div class="guide-container">
                    <hr class="hr-stat">
                    <p class="guideline-header">Guidelines</p>
                    <p class="guideline-text">This <b class="guideline-strong">Referral Program</b> encourage all Outposter employees for 
                        referring qualified candidates who are successfully hired and contribute to the company 
                        for a minimum period of two months. Upon successful hiring and completion of the 
                        candidate’s first two months of employment, the referring employee will receive a <b class="guideline-strong">referral bonus</b>.</p>

                        <div class="accordion">
                            <div class="accordion-item">
                                <button class="accordion-header">
                                    <div class="col-sm-10">
                                        <img src="images/referral/accordion.png" alt="">
                                        <span class="accordion-header-text">Eligibility</span>
                                        <span class="arrow"></span>
                                    </div>
                                    <div class="col-md-1 arrow-container">
                                        <span class="arrow"><img src="images/referral/arrow.png" alt=""></span>
                                    </div>
                                </button>
                                <div class="accordion-content">
                                    <p class="accordion-content-text">All Outposter employees are eligible to participate in the Recruitment Referral Program, regardless of their position within the company.</p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button class="accordion-header">
                                    <div class="col-sm-10">
                                        <img src="images/referral/accordion.png" alt="">
                                        <span class="accordion-header-text">Referral Process</span>
                                        <span class="arrow"></span>
                                    </div>
                                    <div class="col-md-1 arrow-container">
                                        <span class="arrow"><img src="images/referral/arrow.png" alt=""></span>
                                    </div>
                                </button>
                                <div class="accordion-content">
                                    <p class="accordion-content-text">All Outposter employees are eligible to participate in the Recruitment Referral Program, regardless of their position within the company.</p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button class="accordion-header">
                                    <div class="col-sm-10">
                                        <img src="images/referral/accordion.png" alt="">
                                        <span class="accordion-header-text">Referral Criteria</span>
                                        <span class="arrow"></span>
                                    </div>
                                    <div class="col-md-1 arrow-container">
                                        <span class="arrow"><img src="images/referral/arrow.png" alt=""></span>
                                    </div>
                                </button>
                                <div class="accordion-content">
                                    <p class="accordion-content-text">All Outposter employees are eligible to participate in the Recruitment Referral Program, regardless of their position within the company.</p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button class="accordion-header">
                                    <div class="col-sm-10">
                                        <img src="images/referral/accordion.png" alt="">
                                        <span class="accordion-header-text">Incentives</span>
                                        <span class="arrow"></span>
                                    </div>
                                    <div class="col-md-1 arrow-container">
                                        <span class="arrow"><img src="images/referral/arrow.png" alt=""></span>
                                    </div>
                                </button>
                                <div class="accordion-content">
                                    <p class="accordion-content-text">All Outposter employees are eligible to participate in the Recruitment Referral Program, regardless of their position within the company.</p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button class="accordion-header">
                                    <div class="col-sm-10">
                                        <img src="images/referral/accordion.png" alt="">
                                        <span class="accordion-header-text">Payment Process</span>
                                        <span class="arrow"></span>
                                    </div>
                                    <div class="col-md-1 arrow-container">
                                        <span class="arrow"><img src="images/referral/arrow.png" alt=""></span>
                                    </div>
                                </button>
                                <div class="accordion-content">
                                    <p class="accordion-content-text">All Outposter employees are eligible to participate in the Recruitment Referral Program, regardless of their position within the company.</p>
                                </div>
                            </div>
                        </div>

                        <script>
                            document.addEventListener('DOMContentLoaded', function () {
                                var accordionHeaders = document.querySelectorAll('.accordion-header');

                                accordionHeaders.forEach(function (header) {
                                    header.addEventListener('click', function () {
                                        // Close any open accordion content
                                        var openHeader = document.querySelector('.accordion-header.active');
                                        if (openHeader && openHeader !== this) {
                                            openHeader.classList.remove('active');
                                            openHeader.parentElement.querySelector('.accordion-content').style.maxHeight = null;
                                        }

                                        // Toggle the active class to rotate the arrow
                                        this.classList.toggle('active');

                                        // Toggle content visibility using max-height for smooth transition
                                        var content = this.parentElement.querySelector('.accordion-content');
                                        if (content.style.maxHeight) {
                                            content.style.maxHeight = null;
                                        } else {
                                            content.style.maxHeight = content.scrollHeight + "px";
                                        }
                                    });
                                });
                            });
                        </script>




        </div>
    </div>

<script src="{{ mix('js/app.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.11.3/main.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.11.3/bootstrap5.min.js"></script>
</body>
</html>
</x-app-layout>