@extends('layouts.app') 
@section('content') 

<div class="hello" id="dashboard">
    <!-- header -->
  <h1 class="welcome"> Dashboard</h1>
  <div class="row">
    <!-- info cards -->
    <div class="col-md-9" id="info-card">
      <div class="row">
        <div class="col">
          <div class="card" id="info">
            <div class="card-body">
              <div class="head">
                <div class="labelicon">
                  <div class="cardlabel">
                    <p>All Clients</p>
                    <h2> {{ $totalClientsCount }} </h2>
                  </div>
                  <div class="icon">
                    <!-- <i class="bi bi-people-fill icon all"></i>    -->
                    <img src="/img/all.png" alt="" width="50px" height="50px">
                  </div>
                </div>
                <div class="pastdata">
                  <h6>
                    @if($percentageChangeTotal > 0)
                        <i class='bx bx-trending-up icon'></i> &nbsp; <span class="up">{{ $percentageChangeTotal }}%</span>&nbsp; from last month
                    @elseif($percentageChangeTotal < 0)
                        @php
                        $percentageChangeTotal = abs($percentageChangeTotal);
                        @endphp
                        <i class='bx bx-trending-down icon down'></i> &nbsp; <span class="down">{{ $percentageChangeTotal }}%</span>&nbsp; from last month
                    @else
                        <i class='bx bx-trending-down icon down'></i> &nbsp; <span class="down">No change</span>&nbsp; from last month
                    @endif
                  </h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-body">
              <div class="head">
                <div class="labelicon">
                  <div class="cardlabel">
                    <p>New Clients</p>
                    <h2> {{ $newClientsCount }} </h2>
                  </div>
                  <div class="icon">
                    <!--   <i class="bi bi-person-plus-fill icon new"></i> -->
                    <img src="/img/new.png" alt="" width="50px" height="50px">
                  </div>
                </div>
                <div class="pastdata">
                  <h6>
                    @if($percentageChangeNew > 0)
                        <i class='bx bx-trending-up icon'></i> &nbsp; <span class="up">{{ $percentageChangeNew }}%</span>&nbsp; from last month
                    @elseif($percentageChangeNew < 0)
                        @php
                        $percentageChangeNew = abs($percentageChangeNew);
                        @endphp
                        <i class='bx bx-trending-down icon down'></i> &nbsp; <span class="down">{{ $percentageChangeNew }}%</span>&nbsp; from last month
                    @else
                        <i class='bx bx-trending-down icon down'></i> &nbsp; <span class="down">No change</span>&nbsp; from last month
                    @endif
                  </h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-body">
              <div class="head">
                <div class="labelicon">
                  <div class="cardlabel">
                    <p>Active Clients</p>
                    <h2> {{ $activeClientsCount }} </h2>
                  </div>
                  <div class="icon">
                    <!--  <i class="bi bi-person-fill-check icon active"></i> -->
                    <img src="/img/active.png" alt="" width="50px" height="50px">
                  </div>
                </div>
                <div class="pastdata">
                  <h6>
                    @if($percentageChangeActive > 0)
                        <i class='bx bx-trending-up icon'></i> &nbsp; <span class="up">{{ $percentageChangeActive }}%</span>&nbsp; from last month
                    @elseif($percentageChangeActive < 0)
                        @php
                        $percentageChangeActive = abs($percentageChangeActive);
                        @endphp
                        <i class='bx bx-trending-down icon down'></i> &nbsp; <span class="down">{{ $percentageChangeActive }}%</span>&nbsp; from last month
                    @else
                        <i class='bx bx-trending-down icon down'></i> &nbsp; <span class="down">No change</span>&nbsp; from last month
                    @endif
            
                  </h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--row-->
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <div class="clientgraph">
                <div id="clientgraph"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- reminders -->
    <div class="col-md-3" id="Reminders">
      <div class="card">
        <div class="card-body">
          <div>
            <h3>Reminders</h3>
          </div>
          <div class="iAlerts">
            <h6>Important Alerts</h6>
          </div>
          <div class="iBody">
            <table class="table table-hover">
              <tbody>
                <tr>
                  <td>
                    <i class="bi bi-exclamation-triangle-fill"></i>
                  </td>
                  <td>
                    <a href="#" class="skeleton"> Past due - Ashley's Debt</a>
                    <h6 class="skeleton">Email Send</h6>
                  </td>
                </tr>
                <tr>
                  <td>
                    <i class="bi bi-exclamation-triangle-fill"></i>
                  </td>
                  <td>
                    <a href="#" class="skeleton"> Past due - Ashley's Tuwep</a>
                    <h6 class="skeleton">Follow-Up tuwep</h6>
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <i class="bi bi-exclamation-triangle-fill"></i>
                  </td>
                  <td>
                    <a href="#" class="skeleton"> Past due - Lala letter</a>
                    <h6 class="skeleton">Letter Send</h6>
                    </a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <i class="bi bi-exclamation-triangle-fill"></i>
                  </td>
                  <td>
                    <a href="#" class="skeleton"> Past due - Duan Chismosa</a>
                    <h6 class="skeleton">Meeting with Tuwep GC</h6>
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="iView">
            <a href="#">View All</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--row-->

  <!-- new clients -->
  <div class="row">
    <div class="col-md-9" id="info-card">
      <div class="row">
        <div class="col">
          <div class="card" id="NewClients">
            <div class="card-body">
              <div>
                <h3>New Clients</h3>
              </div>
              <div style='overflow-y:auto'>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th >Name</th>
                      <th>Assigned To</th>
                      <th>Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody> @forelse($newClients as $client) <tr>
                      <td><span class="skeleton">{{ $client->first_name . ' ' . $client->middle_name . ' ' . $client->last_name }}</span></td>
                      <td><span class="skeleton">{{ $client->assignedUser->name ?? 'Unknown' }}</span></td>
                      <td><span class="skeleton">{{ $client->created_at->format('m/d/Y h:i A') }}</span></td>
                      <td>
                        <a href="{{ route('clients.show', $client->id) }}" class="btn btn-primary">View</a>
                      </td>
                    </tr> @empty <tr>
                      <td colspan="4">No new clients found.</td>
                    </tr> @endforelse </tbody>
                </table>
                <div class="iView">
                  <a href="{{ route('clients.index') }}">View All</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
   
  <!-- active clients -->
  <div class="row">
    <div class="col">
      <div class="card" id="ActiveClients">
        <div class="card-body">
          <div>
            <h3>Active Clients</h3>
          </div>
          <div style='overflow-y:auto'>
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Assigned To</th>
                  <th>Date</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody> @forelse($activeClients as $client) <tr>
                      <td><span class="skeleton">{{ $client->first_name . ' ' . $client->middle_name . ' ' . $client->last_name }}</span></td>
                      <td><span class="skeleton">{{ $client->assignedUser->name ?? 'Unknown' }}</span></td>
                      <td><span class="skeleton">{{ $client->created_at->format('m/d/Y h:i A') }}</span></td>
                      <td><span class="skeleton">{{ $client->status }}</span></td>
                      <td>
                        <a href="{{ route('clients.show', $client->id) }}" class="btn btn-primary">View</a>
                      </td>
                    </tr> @empty <tr>
                      <td colspan="4"><span class="skeleton">No new clients found.</span></td>
                    </tr> @endforelse </tbody>
            </table>
            <div class="iView">
                  <a href="{{ route('clients.index') }}">View All</a>
                </div>
          </div>
        </div>
      </div>
    </div>
  </div></div>

    <!-- messages -->
 <div class="col-md-3" id="Messages">
  <div class="card">
    <div class="card-body">
      <div>
        <h3>Messages</h3>
      </div>
      <div class="iMessageBody">
        <table class="table table-hover">
          <tbody>
            <tr>
              <td>
                <i class="bi bi-chat-left-text-fill"></i>
              </td>
              <td>
                <a href="#"><span class="skeleton">Ashwe Bading</span></a>
                <h6><span class="skeleton">Great morning, this is Ashwe Bading...</span></h6>
              </td>
            </tr>
            <tr>
              <td>
                <i class="bi bi-chat-left-text-fill"></i>
              </td>
              <td>
                <a href="#"> <span class="skeleton">Duan Tuwep </span></a>
                <h6> <span class="skeleton">Hi this is duan tuwep. I just want to...</span></h6>
              </td>
            </tr>
            <tr>
              <td>
                <i class="bi bi-chat-left-text-fill"></i>
              </td>
              <td>
                <a href="#"> <span class="skeleton">Ashwe Bading </span></a>
                <h6> <span class="skeleton">Great morning, this is Ashwe Bading... </span></h6>
              </td>
            </tr>
            <tr>
              <td>
                <i class="bi bi-chat-left-text-fill"></i>
              </td>
              <td>
                <a href="#"> <span class="skeleton">Ashwe Bading </span></a>
                <h6><span class="skeleton">Great morning, this is Ashwe Bading... </span></h6>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="iView">
        <a href="#">View All</a>
      </div>
    </div>
  </div>
  </div>

  </div>



  <!--row-->



<!--row-->
<div class="card" id="loginActivity">
    <div class="card-body">
    <h3>Recent Login Activity</h3>
        <div style='overflow-y:auto'>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>User</th>
                    <th>IP Address</th>
                    <th>Access Type</th>
                    <th>Login</th>
              
                    <th>Location</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><span class="skeleton">sgaas.aila@gmail.com<span></td>
                    <td> <span class="skeleton">103.149.37.177</span></td>
                    <td> <span class="skeleton">>Browser</span></td>
                    <td><span class="skeleton">06/11/2024 06:56 PM</span></td>
             
                    <td><span class="skeleton">PH</span></td>
                </tr>
                <tr>
                    <td><span class="skeleton">admin1@gmail.com</span></td>
                    <td><span class="skeleton">192.168.37.177</span></td>
                    <td><span class="skeleton">Mobile</span></td>
                    <td><span class="skeleton">06/16/2024 10:56 AM</span></td>
           
                    <td><span class="skeleton">US</span></td>
                </tr>
                <tr>
                    <td><span class="skeleton">du123@gmail.com</span></td>
                    <td><span class="skeleton">192.168.0.1</span></td>
                    <td><span class="skeleton">Browser</span></td>
                    <td><span class="skeleton">06/18/2024 12:02 PM</span></td>
              
                    <td><span class="skeleton">US</span></td>
                </tr>
                </tbody>
            </table>
            <div class="iView">
                <a href="#">View All</a>
            </div>
        <!--  <nav aria-label="Page navigation example"><ul class="pagination justify-content-end"><div class="pagination"><a href="#">❮</a><a href="#">❯</a></div></ul></nav> -->
        </div>
    </div>
</div>  

<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script> 

  @endsection