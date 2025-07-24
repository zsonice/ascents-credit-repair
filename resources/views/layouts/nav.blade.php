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
                            <i class="bi bi-pie-chart-fill icon"></i>
                                <span class="text nav-text">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-link"> 
                            <a href="{{ route('clients.index') }}" id="nav-clients">
                                <i class='bx bxs-user-account icon'></i>
                                <span class="text nav-text">Clients</span>
                            </a> 
                        </li>
                    
                    <li class="nav-link">
                            <a href="{{ route('letters.index') }}"> 
                                <i class='bx bxs-file icon'></i>
                                <span class="text nav-text">Letters</span>
                            </a>
                        </li>

                    <li class="nav-link">
                    <a href="{{ route('mycompany') }}" id="nav-clients">  {{-- :active="request()->routeIs('mycompany')"  --}}
                        <i class='bx bxs-buildings icon' ></i>
                        <span class="text nav-text">
                            Business
                        </span>
                        </a>
                   
                      <li class="nav-link">
                    <a href="{{ route('affiliatesettings') }}" id="nav-clients">  {{-- :active="request()->routeIs('affiliatesettings')"  --}}
                        <i class='bi bi-person-vcard-fill icon' ></i>
                        <span class="text nav-text">
                           Affiliates
                        </span>
                        </a>

                    </li>
                     
                </ul>
               
            </div>
            <div class="bottom-content">
             
            <li class="nav-link">
                <a href="{{ route('profile.edit') }}">
                    <i class='bx bxs-user-circle icon'></i>
                    <span class="text nav-text">
                          My Profile
                    </span>
                </a>

            </li>       
            <li class="nav-link">
                    <a href="{{ route('support.index') }}">
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
<a class="btn btn-app"   
    id="popoverTrigger"
   data-bs-toggle="popover"
   data-bs-placement="bottom"
   title="Notes">
   
<i class='bx bxs-notepad' ></i>
<span class="badge bg-danger">7</span> </a>
                </a>

</li>

<li class="nav-item">
<a class="btn btn-app"
   id="popoverTrigger1"
   data-bs-toggle="popover"
   data-bs-placement="bottom"

   title="Messages">
   <i class='bx bxs-conversation'></i>
   <span class="badge bg-danger">12</span>
</a>

  </li>

  <li class="nav-item">
  <a class="btn btn-app"
    id="popoverTrigger2"
   data-bs-toggle="popover"
   data-bs-placement="bottom"

   title="Notifications">              
  <i class='bx bxs-bell' ></i>
              <span class="badge bg-danger">19</span>  </a>
  </li>
 
</ul>
  </div>
</nav>

<div id="popoverContent" style="display: none;">
  <div class="popover-message">
    
     <p class="note">No notes available.</p>
     <hr class="solid">
    
    <a href="#" class="btn btn-primary">View All</a>
  </div>
</div>

<div id="popoverContent1" style="display: none;">
  <div class="popover-message">

    <h6>Ashwee Bading </h6>
     <p>Great morning, this is Ashwe Bading...</p>
     <hr class="solid">
     <h6>Duan Tuwep </h6>
     <p>Hi this is duan tuwep. I just want to...</p>
     <hr class="solid">
       <h6>Ashwee Bading </h6>
     <p>Great morning, this is Ashwe Bading...</p>
     <hr class="solid">
       <h6>Ashwee Bading </h6>
     <p>Great morning, this is Ashwe Bading...</p>
     <hr class="solid">
    <a href="#" class="btn btn-primary">View All</a>
  </div>
</div>

<div id="popoverContent2" style="display: none;">
  <div class="popover-message">
    <h6>Past due - Ashley's Debt </h6>
     <p>Email Send</p>
     <hr class="solid">
     <h6>Past due - Ashley's Tuwep </h6>
     <p>Follow-Up tuwep</p>
     <hr class="solid">
       <h6>Past due - Lala letter</h6>
     <p>Letter Send</p>
     <hr class="solid">
    <a href="#" class="btn btn-primary">View All</a>
  </div>
</div>
        @yield('content')
    </div>
</section>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    var trigger = document.getElementById('popoverTrigger');
    var content = document.getElementById('popoverContent').innerHTML;

    new bootstrap.Popover(trigger, {
      content: content,
      html: true,
      placement: 'bottom',
      trigger: 'focus' // or 'click', or 'hover focus'
    });
  });
    document.addEventListener('DOMContentLoaded', function () {
    var trigger = document.getElementById('popoverTrigger1');
    var content = document.getElementById('popoverContent1').innerHTML;

    new bootstrap.Popover(trigger, {
      content: content,
      html: true,
      placement: 'bottom',
      trigger: 'focus' // or 'click', or 'hover focus'
    });
  });
     document.addEventListener('DOMContentLoaded', function () {
    var trigger = document.getElementById('popoverTrigger2');
    var content = document.getElementById('popoverContent2').innerHTML;

    new bootstrap.Popover(trigger, {
      content: content,
      html: true,
      placement: 'bottom',
      trigger: 'focus' // or 'click', or 'hover focus'
    });
  });
 document.addEventListener('click', function (e) {
  const popovers = document.querySelectorAll('[data-bs-toggle="popover"]');
  popovers.forEach(function (el) {
    if (!el.contains(e.target) && document.querySelector('.popover')) {
      bootstrap.Popover.getInstance(el)?.hide();
    }
  });
});

</script>
