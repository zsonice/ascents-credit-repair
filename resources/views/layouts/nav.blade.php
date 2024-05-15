<div class='dashboard'>
    <div class="dashboard-nav">
        <header>
            <a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a>
            <a href="#"  class="brand-logo"><i  class="fas fa-anchor"></i> <span>Credit Repair</span></a>
        </header>

        <nav class="dashboard-nav-list">
            <a href="{{ route('home') }}" :active="request()->routeIs('home')" class="dashboard-nav-item active"><i class="fas fa-house-user"></i> Home </a> 
            <a href="{{ route('clients.index') }}" :active="request()->routeIs('clients')" class="dashboard-nav-item"><i class="fas fa-file-upload"></i> Clients </a>
            <a href="{{ route('mycompany') }}" :active="request()->routeIs('mycompany')" class="dashboard-nav-item "><i class="fas fa-building"></i> My company </a>
            <a href="#" class="dashboard-nav-item "><i class="fas fa-envelope-open-text"></i> Letters </a> 
            <a href="#" class="dashboard-nav-item"><i class="fas fa-user"></i> Profile </a>
            <div class="nav-item-divider"></div>
            <!-- Logout Authentication -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="dashboard-nav-item"><i class="fas fa-sign-out-alt"></i> Logout </a>
            </form>
        </nav> 

    </div>
    <div class="dashboard-content">
        @yield('content')
    </div>
</div>