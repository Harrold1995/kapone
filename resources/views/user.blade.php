<div class="search-container">
    <div class="col-md-9">
        <input type="text" id="search" placeholder="Search...">
    </div>
    <div class="col-md-1 pl-5">
        <div class="row">
            <div class="col">
                <button id="fullscreen-btn" onclick="toggleFullscreen()"><img src="{{ asset('/images/dashboard/fullscreen.png') }}" alt=""></button>
            </div>
            <div class="col">
                <button id="help-btn"><img src="{{ asset('/images/dashboard/help.png') }}" alt=""></button>
            </div>
        </div>
    </div>
    <div class="col-md-1 pl-5 active-user">
        <img src="{{ asset('/images/dashboard/active-user.png') }}" alt="Active User">
    </div>
    <div class="col-md-1">
        <div class="profile-dropdown">
            <button class="dropbtn"> 
                <p class="profile-name-side">Aldin Gumera<br>Project Based UI/UX Designer</p>
            </button>
            <div class="db-dropdown-content">
                <a href="#">Edit Profile</a>
                <a href="#">Logout</a>
            </div>
        </div>
    </div>
</div>