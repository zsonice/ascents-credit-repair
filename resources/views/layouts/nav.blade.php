
   <!--     <header> 
            <a href="#"  class="brand-logo"><i  class="fas fa-credit-card"></i> <span>Credit Repair</span></a>
        </header> 
        

        <nav class="dashboard-nav-list">
            <a href="{{ route('home') }}" :active="request()->routeIs('home')" class="dashboard-nav-item active"><i class="fas fa-house-user"></i> Home </a> 
            <a href="{{ route('clients.index') }}" :active="request()->routeIs('clients')" class="dashboard-nav-item"><i class="fas fa-file-upload"></i> Clients </a>
            <a href="{{ route('mycompany') }}" :active="request()->routeIs('mycompany')" class="dashboard-nav-item "><i class="fas fa-building"></i> My company </a>
            <a href="#" class="dashboard-nav-item "><i class="fas fa-envelope-open-text"></i> Letters </a> 
            <a href="#" class="dashboard-nav-item"><i class="fas fa-user"></i> Profile </a>
            <div class="nav-item-divider"></div>
         
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="dashboard-nav-item"><i class="fas fa-sign-out-alt"></i> Logout </a>
            </form>
        </nav> 

    </div>
    <a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a>
    <div class="dashboard-content">
        @yield('content')
    </div> -->
 <nav class="sidebar">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="/img/5s.png" alt="logo">
                </span>

                <div class="text header-text">
                    <span class="name">Five S</span>
                    <span class="enterprises">Enterprises</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">
                    <li class="search-box">
                        <i class='bx bx-search icon' ></i>
                        <input type="text" placeholder="Search...">
                    </li>
                <ul class="menu-links">
                    <li class="nav-link">
                    <a href="{{ route('home') }}" :active="request()->routeIs('home')" >
                        <i class='bx bxs-home icon' ></i>
                        <span class="text nav-text">
                            Home
                        </span>
                        </a>

                    </li>
                    <li class="nav-link">
                    <a href="{{ route('clients.index') }}" :active="request()->routeIs('clients')" >
                        <i class='bx bxs-user-account icon' ></i>
                        <span class="text nav-text">
                            Clients
                        </span>
                        </a>

                    </li>
                    <li class="nav-link">
                    <a href="{{ route('mycompany') }}" :active="request()->routeIs('mycompany')" >
                        <i class='bx bxs-buildings icon' ></i>
                        <span class="text nav-text">
                            My Company
                        </span>
                        </a>

                    </li>
                    <li class="nav-link">
                        <a href="#" >
                        <i class='bx bxs-file icon' ></i>
                        <span class="text nav-text">
                            Letters
                        </span>
                        </a>

                    </li>
                    <li class="nav-link">
                        <a href="#">
                        <i class='bx bxs-user-circle icon'></i>
                        <span class="text nav-text">
                            Profile
                        </span>
                        </a>

                    </li>
                </ul>
               
            </div>
            <div class="bottom-content">
                <form method="POST" action="{{ route('logout') }}">
                        <li class="">
                            
                @csrf
                <a href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">
                           Logout
                        </span>
                        </a>
                           
                         </li>
 </form>
                         <li class="mode">
                <div class="moon-sun">
                            <i class='bx bxs-moon icon moon' ></i>
                            <i class='bx bxs-sun icon sun' ></i>
                </div>
                            <span class="mode-text text">Dark Mode</span>
                <div class="toggle-switch">
                                <span class="switch">

                                </span>
                </div>
                         </li>
            </div>
        </div>
    </nav>    


<section class="home">
    

    <div class="text">
        @yield('content')
    </div>
</section>
</div>