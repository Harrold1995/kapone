<x-app-layout>

<body>
    <div class="container w-full">
        <div class="sidebar">@include('menu')</div>
    
    
        <div class="main-content">
        <div class="container-fluid">
                 <div class="time-logs-container d-flex flex-column">
                
                </div>
                    <div class="time-logs-col">
                        <div class="row">
                            <div class="col time-logs-period">
                                <div class="row">
                                    <div class="col">
                                        <form action="#">
                                            <h5>Select date period:</h5>
                                            <label for="start">FROM DATE:</label>
                                            <input type="date" id="start" name="start" class="req-input">
                                            <label for="end">TO DATE:</label>
                                            <input type="date" id="end" name="end" class="req-input">
                                            <input type="submit" class="go-button" value="Go">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col time-logs-report">
                                <div class="row">
                                    <div class="col">
                                        <h5>REPORT</h5>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="progress-container">
                                                        <div class="progress-label">
                                                            <span>NO TIME-IN</span>
                                                            <span>0/23</span>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="23"></div>
                                                        </div>
                                                        <div class="progress-label mt-4">
                                                            <span>NO TIME-OUT</span>
                                                            <span>1/23</span>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" style="width: 4.35%;" aria-valuenow="1" aria-valuemin="0" aria-valuemax="23"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress-container">
                                                        <div class="progress-label">
                                                            <span>LATE(S)</span>
                                                            <span>0.00/184hr(s)</span>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="184"></div>
                                                        </div>
                                                        <div class="progress-label mt-4">
                                                            <span>ABSENT(S)</span>
                                                            <span>0.00/184hr(s)</span>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="184"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- </div> -->
                </div>
                <div class="timelogs-container">
                    <div class="top-bar">
                        <button class="export-button" onclick="exportTableToCSV('table.csv')">Export</button>
                        <input type="text" id="searchInput" class="search" onkeyup="searchTable()" placeholder="     SEARCH...">
                    </div>
                    <table class="table table-hover mt-5">
                        <thead>
                            <tr>
                                <th scope="col" class="th-text"><input type="checkbox" id="selectAll" onclick="toggleSelectAll()"></th>
                                <th scope="col" class="th-text">USER</th>
                                <th scope="col" class="th-text">DATE</th>
                                <th scope="col" class="th-text">JOB TYPE</th>
                                <th scope="col" class="th-text">TIME-IN</th>
                                <th scope="col" class="th-text">TIME-OUT</th>
                                <th scope="col" class="th-text">TIME</th>
                                <th scope="col" class="th-text">LATE</th>
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
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>
                
                <script>
                    function toggleSelectAll() {
                        var checkboxes = document.querySelectorAll('.row-checkbox');
                        var selectAll = document.getElementById('selectAll');
                        checkboxes.forEach((checkbox) => {
                            checkbox.checked = selectAll.checked;
                        });
                }
                </script>
        </div>

<script src="{{ mix('js/app.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.11.3/main.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.11.3/bootstrap5.min.js"></script>

</body>

</html>
</x-app-layout>