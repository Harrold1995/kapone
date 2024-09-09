<x-app-layout>

<body>
    <div class="container">
        <div class="sidebar">@include('menu')</div>
            <div class="main-content">
            <div class="container-fluid">
                 <div class="reminders-container d-flex flex-column">
                    
                </div>

                <div class="reminder-dashboard">
                    <div class="row">
                        <div class="col-md-2" style="border-right: 1px solid #CAECEC;">
                            <div class="row">
                                <button class="add-reminder-btn">+ Add New</button>
                            </div>
                            <div class="row">
                                <ul class="remindermenu">
                                    <li class="reminderlist">
                                        <a class="active-rem-link" aria-current="page" href="#">
                                            <img src="images/reminders/all.png" alt="All">
                                            <span class="reminder-text">All</span>
                                        </a>
                                    </li>
                                    <li class="reminder-label">FILTERS</li>
                                    <li class="reminderlist">
                                        <a class="active-rem-link" aria-current="page" href="#">
                                            <img src="images/reminders/star.png" alt="Favourites">
                                            <span class="reminder-text">Favourites</span>
                                        </a>
                                    </li>
                                    <li class="reminderlist">
                                        <a class="active-rem-link" aria-current="page" href="#">
                                            <img src="images/reminders/check.png" alt="Done">
                                            <span class="reminder-text">Done</span>
                                        </a>
                                    </li>
                                    <li class="reminderlist">
                                        <a class="active-rem-link" aria-current="page" href="#">
                                            <img src="images/reminders/bin.png" alt="Trash">
                                            <span class="reminder-text">Trash</span>
                                        </a>
                                    </li>
                                    <li class="reminder-label">LABELS</li>
                                    <li class="reminderlist">
                                        <a class="active-rem-link" aria-current="page" href="#">
                                            <img src="images/reminders/tasks.png" alt="Task">
                                            <span class="reminder-text">Task</span>
                                        </a>
                                    </li>
                                    <li class="reminderlist">
                                        <a class="active-rem-link" aria-current="page" href="#">
                                            <img src="images/reminders/bday.png" alt="Birthday">
                                            <span class="reminder-text">Birthday</span>
                                        </a>
                                    </li>
                                </ul>
                                
                            </div>
                        </div>
                        <div class="col-md-10">
                            <div class="row">
                                <div class="reminder-table-container">
                                    <div class="top-bar">
                                        <div class="col">
                                            <input type="text" class="rem-search" id="searchInput" class="form-control" placeholder="     SEARCH...">
                                        </div>
                                        <div class="col text-end">
                                            <select id="sortDropdown" class="form-control rem-sort" onchange="sortTable()">
                                                <option value="disable">Sort</option>
                                                <option value="user">Sort by User</option>
                                                <option value="requested">Sort by Requested Date</option>
                                                <option value="type">Sort by Type</option>
                                            </select>
                                        </div>
                                    </div>
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col"><input type="checkbox" id="selectAll" onclick="toggleSelectAll()"></th>
                                                <th scope="col" class="th-text">USER</th>
                                                <th scope="col" class="th-text">REQUESTED</th>
                                                <th scope="col" class="th-text">TYPE</th>
                                                <th scope="col" class="th-text">INCLUDE SALARY?</th>
                                                <th scope="col" class="th-text">PURPOSE</th>
                                                <th scope="col" class="th-text">DELIVERY</th>
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
                                            </tr>
                                            <!-- Add more rows as needed -->
                                        </tbody>
                                    </table>
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