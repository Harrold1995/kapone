<x-app-layout>

<body>
    <div class="container">
        <div class="sidebar">@include('menu')</div>
    
    
        <div class="main-content">
        <div class="container-fluid">
                 <div class="time-off-container d-flex flex-column">
                    <div class="row">
                        <div class="col remaining-leave">
                            <div class="row"></div>
                            <div class="row">
                                <div class="col">
                                    <div class="leave-circle"></div>
                                    <div class="remaining-leave-desc">Remaining Leave</div>
                                    <div class="remaining-leave-count">0</div>
                                </div>
                            </div>
                            <div class="row"></div>
                        </div>
                    </div>
                </div>

                <div class="file-time-off">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="row">
                                <span class="filter-desc">STATUS</span>
                            </div>
                            <div class="row">
                                <input type="text" class="input-text req-input" placeholder=" Any">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="row">
                                <span class="filter-desc">EMPLOYEE</span>
                            </div>
                            <div class="row">
                                <input type="text" class="input-text req-input" placeholder=" Aldin Gumera">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="row">
                                <span class="filter-desc">DATE PERIOD</span>
                            </div>
                            <div class="row">
                                <input type="date" class="req-input">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="row">
                                <span class="filter-desc">TYPE</span>
                            </div>
                            <div class="row">
                                <input type="text" class="input-text req-input" placeholder=" Any">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="row">
                                
                            </div>
                            <div class="row">
                                <input type="submit" class="filter-time-button" value="+ File Time Off">
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="timeoff-table-container">
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
                                <th scope="col" class="th-text"><input type="checkbox" id="selectAll" onclick="toggleSelectAll()"></th>
                                <th scope="col" class="th-text">USER</th>
                                <th scope="col" class="th-text">TENURE</th>
                                <th scope="col" class="th-text">REQUESTED</th>
                                <th scope="col" class="th-text">TYPE</th>
                                <th scope="col" class="th-text">DATE</th>
                                <th scope="col" class="th-text">PERIOD</th>
                                <th scope="col" class="th-text">NO. DAYS</th>
                                <th scope="col" class="th-text">NOTES</th>
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
                                <td class="cell-text">8:00</td>
                                <td class="cell-text">No</td>
                                <td class="cell-text">1</td>
                                <td class="cell-text">No</td>
                            </tr>
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
                                <td class="cell-text">7:45</td>
                                <td class="cell-text">Yes</td>
                                <td class="cell-text">2</td>
                                <td class="cell-text">Yes</td>
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
                
<script src="{{ mix('js/app.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.11.3/main.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.11.3/bootstrap5.min.js"></script>

</body>

</html>
</x-app-layout>