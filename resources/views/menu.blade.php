<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="New Kapone UI">
    <title>New Kapone UI</title>
    <link rel="stylesheet" href="htt  ps://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png') }}">

    <link rel="stylesheet" href="{{ mix('css/style.css') }}">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.11.3/main.min.css' rel='stylesheet' />
    <link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.11.3/bootstrap5.min.css' rel='stylesheet' />

    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/calendars/calendar-1/assets/css/calendar-1.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


    <!-- JS Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    
</head>

<body>

<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark bars" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="#"></a>
        <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div>
      </div>
      <div class="sidebar-header">
        <!-- <div class="user-pic">
          <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"
            alt="User picture">
        </div> -->
        <!-- <div class="user-info">
          <span class="user-name">Jhon
            <strong>Smith</strong>
          </span>
          <span class="user-role">Administrator</span>
          <span class="user-status">
            <i class="fa fa-circle"></i>
            <span>Online</span>
          </span>
        </div> -->
      </div>
      <!-- sidebar-header  -->
      <!-- <div class="sidebar-search">
        <div>
          <div class="input-group">
            <input type="text" class="form-control search-menu" placeholder="Search...">
            <div class="input-group-append">
              <span class="input-group-text">
                <i class="fa fa-search" aria-hidden="true"></i>
              </span>
            </div>
          </div>
        </div>
      </div> -->
      <!-- sidebar-search  -->
      <div id="main-wrapper">
    @php
        $menuItems = [
            ['url' => url('dashboard'), 'icon' => 'dashboard.png', 'text' => 'Dashboard'],
            ['url' => url('/job-listing'), 'icon' => 'loupe.png', 'text' => 'Job Listing'],
            ['url' => url('/time-logs'), 'icon' => 'clock.png', 'text' => 'Time Logs'],
            ['url' => url('/time-off-requests'), 'icon' => 'off.png', 'text' => 'Time-off Requests'],
            ['url' => url('/certifications'), 'icon' => 'file.png', 'text' => 'Certifications'],
            ['url' => url('/overtime-requests'), 'icon' => 'hourglass.png', 'text' => 'Overtime Requests'],
            ['url' => url('/knowledge-base'), 'icon' => 'lightbulb.png', 'text' => 'Knowledge Base'],
            ['url' => url('/reminders'), 'icon' => 'reminder.png', 'text' => 'Reminders'],
            ['url' => url('/referrals'), 'icon' => 'network.png', 'text' => 'Referrals'],
            ['url' => url('/tickets'), 'icon' => 'ticket.png', 'text' => 'Tickets'],
            ['url' => url('#'), 'icon' => 'envelope.png', 'text' => 'Email Signature']
        ];
    @endphp
      <a href="{{ route('dashboard') }}">
          <img class="logo" src="{{ asset('images/menu/outposter.png') }}" alt="Logo" class="logo-img">
      </a>
        <ul class="menu">
            @foreach ($menuItems as $item)
                <li class="menu-item">
                    <a href="{{ $item['url'] }}">
                        <img src="{{ asset('images/menu/' . $item['icon']) }}" alt="{{ $item['text'] }} icon" class="icon">
                        <span class="text">{{ $item['text'] }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
</div>
     
    </div>
    <!-- sidebar-content  -->
    <!-- <div class="sidebar-footer">
      <a href="#">
        <i class="fa fa-bell"></i>
        <span class="badge badge-pill badge-warning notification">3</span>
      </a>
      <a href="#">
        <i class="fa fa-envelope"></i>
        <span class="badge badge-pill badge-success notification">7</span>
      </a>
      <a href="#">
        <i class="fa fa-cog"></i>
        <span class="badge-sonar"></span>
      </a>
      <a href="#">
        <i class="fa fa-power-off"></i>
      </a>
    </div> -->
  </nav>
  
</div>
<!-- page-wrapper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    
</body>

<script>
        jQuery(function ($) {
            // $(".page-wrapper").removeClass("toggled");

            $(".sidebar-dropdown > a").click(function() {
                $(".sidebar-submenu").slideUp(200);
                if ($(this).parent().hasClass("active")) {
                    $(".sidebar-dropdown").removeClass("active");
                    $(this).parent().removeClass("active");
                } else {
                    $(".sidebar-dropdown").removeClass("active");
                    $(this).next(".sidebar-submenu").slideDown(200);
                    $(this).parent().addClass("active");
                }
            });

            $("#close-sidebar").click(function() {
                $(".page-wrapper").removeClass("toggled");
            });
            $("#show-sidebar").click(function() {
                $(".page-wrapper").addClass("toggled");
            });

            $('.menu-item a').each(function() {
                if (this.href === window.location.href) {
                    $(this).parent().addClass('active');
                }
            });
        });
    </script>

</html>