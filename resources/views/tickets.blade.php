<x-app-layout>

<body>
    <div class="container">
        <div class="sidebar">@include('menu')</div>
            <div class="main-content">
            <div class="container-fluid">
            <div class="ticket-container d-flex flex-column">
                    
                    </div>
    
                    <section>
                        <div class="row tick-container">
                            <div class="col-md-3">
                                <div class="ticket-card1">
                                    <p class="ticket-card-text1">Open Tickets</p>
                                    <p class="ticket-card-counter">0</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="ticket-card2">
                                    <p class="ticket-card-text2">Pending Tickets</p>
                                    <p class="ticket-card-counter">0</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="ticket-card3">
                                    <p class="ticket-card-text3">Resolved Tickets</p>
                                    <p class="ticket-card-counter">0</p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="ticket-card4">
                                    <p class="ticket-card-text4">Closed Tickets</p>
                                    <p class="ticket-card-counter">1</p>
                                </div>
                            </div>
                        </div>
                    </section>
    
                    <div class="ticket-table-container">
                        <div class="top-bar">
                            <div>
                                
                            </div>
                            <div>
                                <button class="create-task-btn">Create New Ticket</button>
                            </div>
                        </div>
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
                                    <th scope="col" class="th-text">ID</th>
                                    <th scope="col" class="th-text">CREATED BY</th>
                                    <th scope="col" class="th-text">SUBJECT</th>
                                    <th scope="col" class="th-text">STATUS</th>
                                    <th scope="col" class="th-text">PRIORITY</th>
                                    <th scope="col" class="th-text">ASSIGNED TO</th>
                                    <th scope="col" class="th-text">UPDATED AT</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="checkbox" class="row-checkbox"></td>
                                    <td class="cell-text">ID</td>
                                    <td class="user-info cell-text"><img src="images/table-avatar.png" alt="Avatar" class="avatar"><b class="ticket-user-text">Aldin Gumera</b></td>
                                    <td class="cell-text"><b class="ticket-user-text">Gmail is blocked</b></td>
                                    <td class="cell-text"><button class="ticket-close-btn">CLOSED</button></td>
                                    <td class="cell-text"><button class="ticket-med-btn">MEDIUM</button></td>
                                    <td class="cell-text">Tech Support</td>
                                    <td class="cell-text">2 weeks ago</td>
                            </tbody>
                        </table>
                        <div class="pagination-container">
                            <div>
                                Showing 0 to 0 of 0 entries
                            </div>
                            <div>
                                <button class="ticket-button" onclick="previousPage()">Previous</button>
                                <button class="ticket-counter-btn" id="current-page" onclick="currentPage()">1</button>
                                <button class="ticket-button" onclick="nextPage()">Next</button>
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