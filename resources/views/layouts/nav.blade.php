 <nav class="sidebar">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="/img/5sdark.png" alt="logo">
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
                        <input type="text" placeholder="Search">
                    </li>
                <ul class="menu-links">
                    <li class="nav-link"> 
                            <a href="{{ route('home') }}" id="nav-home">
                                <i class='bx bxs-home icon'></i>
                                <span class="text nav-text">Home</span>
                            </a>
                        </li>
                        <li class="nav-link"> 
                            <a href="{{ route('clients.index') }}" id="nav-clients">
                                <i class='bx bxs-user-account icon'></i>
                                <span class="text nav-text">Clients</span>
                            </a> 
                        </li>
                    <li class="nav-link">
                    <a href="{{ route('mycompany') }}" id="nav-clients">  {{-- :active="request()->routeIs('mycompany')"  --}}
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
                        <a href="{{ route('profile.edit') }}">
                        <i class='bx bxs-user-circle icon'></i>
                        <span class="text nav-text">
                            Profile
                        </span>
                        </a>

                    </li>
                </ul>
               
            </div>
            <div class="bottom-content">

            <li class="nav-link">
                        <a href="#">
                        <i class='bx bxs-help-circle icon' ></i>
                        <span class="text nav-text">
                            Help & Support
                        </span>
                        </a>

                    </li>
                    
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
    <nav class="navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
 
    </a>
    <ul class="nav justify-content-end">



<li class="nav-item">
<a class="btn btn-app">
                  
<i class='bx bxs-notepad' ></i>
<span class="badge bg-danger">7</span> </a>
                </a>

</li>

<li class="nav-item">
  <a class="btn btn-app">
                  
  <i class='bx bxs-conversation' ></i>
               <span class="badge bg-danger">12</span> </a>
  </li>

  <li class="nav-item">
  <a class="btn btn-app">
                  
  <i class='bx bxs-bell' ></i>
              <span class="badge bg-danger">19</span>  </a>
  </li>
 
</ul>
  </div>
</nav>
        @yield('content')
    </div>
</section>
</div>