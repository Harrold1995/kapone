<x-app-layout>

<body>
    <div class="container">
        <div class="sidebar">@include('menu')</div>
            <div class="main-content">
            <div class="container-fluid">
                <div class="knowledge-base-container">
                    <div class="row">
                        <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <h1 class="knowledge-base-title">How can we help you today?</h1>
                            <p class="knowledge-base-desc">BES helps you to quickly have access to any related instructions that is intended to provide you ready reference for your work.</p>
                        </div>
                            <div class="knowledger-search-container">
                                <input type="text" class="knowledge-search" placeholder="     Find reference here..."><button class="knowledge-search-btn" >Search</button>
                            </div>
                        <div class="col-md-1"></div>
                    </div>
                    <div class="row knowledge-tutorial-container">
                        <div class="col-md-4">
                            <div class="knowledge-tutorial-col">
                                <div class="row">
                                    <img class="question" src="images/question.png" alt="">
                                </div>
                                <div class="row">
                                    <h1 class="kb-tutorial-title">How To?</h1>
                                </div>
                                <div class="row">
                                    <p class="kb-tutorial-desc">Quick Tutorial and Instructions on how to create email signature, setup Slack, request BES timelog edit and etc.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="knowledge-tutorial-col">
                                <div class="row">
                                    <img class="question" src="images/question.png" alt="">
                                </div>
                                <div class="row">
                                    <h1 class="kb-tutorial-title">How To?</h1>
                                </div>
                                <div class="row">
                                    <p class="kb-tutorial-desc">Quick Tutorial and Instructions on how to create email signature, setup Slack, request BES timelog edit and etc.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="knowledge-tutorial-col">
                                <div class="row">
                                    <img class="question" src="images/question.png" alt="">
                                </div>
                                <div class="row">
                                    <h1 class="kb-tutorial-title">How To?</h1>
                                </div>
                                <div class="row">
                                    <p class="kb-tutorial-desc">Quick Tutorial and Instructions on how to create email signature, setup Slack, request BES timelog edit and etc.</p>
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