       
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>  
<script src="/js/script.js" type="text/javascript"></script>

<div class='dashboard'>
    <div class="dashboard-nav">
    <header>
        <a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a>
        <a href="#"  class="brand-logo"><i  class="fas fa-anchor"></i> <span>Credit Repair</span></a>
    </header>
    <nav class="dashboard-nav-list">
        <a href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" class="dashboard-nav-item active"><i class="fas fa-house-user"></i> Home </a>
        {{-- <a href="#" class="dashboard-nav-item"><i class="fas fa-tachometer-alt"></i> Dashboard </a> --}}
        {{-- <a href="route('clients.index')" :active="request()->routeIs('clients')" class="dashboard-nav-item"><i class="fas fa-file-upload"></i> Clients </a> --}}
        <a href="{{ route('clients.index') }}" :active="request()->routeIs('clients')" class="dashboard-nav-item"><i class="fas fa-file-upload"></i> Clients </a>
        <a href="{{ route('mycompany') }}" :active="request()->routeIs('mycompany')" class="dashboard-nav-item "><i class="fas fa-building"></i> My company </a>
        <a href="#" class="dashboard-nav-item "><i class="fas fa-envelope-open-text"></i> Letters </a>
        {{-- <div class='dashboard-nav-dropdown'>
            <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i
                class="fas fa-photo-video"></i> Media </a>
            <div class='dashboard-nav-dropdown-menu'><a href="#"
                class="dashboard-nav-dropdown-item">All</a><a
                href="#" class="dashboard-nav-dropdown-item">Recent</a><a
                href="#" class="dashboard-nav-dropdown-item">Images</a><a
                href="#" class="dashboard-nav-dropdown-item">Video</a></div>
        </div>
        <div class='dashboard-nav-dropdown'>
            <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i
                class="fas fa-users"></i> Users </a>
            <div class='dashboard-nav-dropdown-menu'><a href="#"
                class="dashboard-nav-dropdown-item">All</a><a
                href="#" class="dashboard-nav-dropdown-item">Subscribed</a><a
                href="#"
                class="dashboard-nav-dropdown-item">Non-subscribed</a><a
                href="#" class="dashboard-nav-dropdown-item">Banned</a><a
                href="#" class="dashboard-nav-dropdown-item">New</a></div>
        </div>
        <div class='dashboard-nav-dropdown'>
            <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle"><i
                class="fas fa-money-check-alt"></i> Payments </a>
            <div class='dashboard-nav-dropdown-menu'><a href="#"
                class="dashboard-nav-dropdown-item">All</a><a
                href="#" class="dashboard-nav-dropdown-item">Recent</a><a
                href="#" class="dashboard-nav-dropdown-item"> Projections</a>
            </div>
        </div>
        <a href="#" class="dashboard-nav-item"><i class="fas fa-cogs"></i> Settings </a> --}}
        <a href="#" class="dashboard-nav-item"><i class="fas fa-user"></i> Profile </a>
        <div class="nav-item-divider"></div>
        <!-- Logout Authentication -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="dashboard-nav-item"><i class="fas fa-sign-out-alt"></i> Logout </a>
        </form>
    </nav>
    </div>
    {{-- <div class='dashboard-app'>
    <header class='dashboard-toolbar'><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a></header>
    <div class='dashboard-content'>
        <div class='container'>
            <div class='card'>
                <div class='card-header'>
                <h1>Hello, User!</h1>
                </div>
                <div class='card-body'>
                <p>Your account type is: Administrator</p>
                </div>
            </div>
        </div>
    </div> --}}
    </div>
</div>