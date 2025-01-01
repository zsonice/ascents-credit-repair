{{-- resources/views/letters.blade.php --}}
@extends('layouts.app') {{-- Adjust layout as needed --}}

@section('content')
<div class="hello" id="dashboard">
    <!-- header -->
  <h1 class="welcome"> Library</h1>
    {{-- Add your letter content and any other necessary UI components here --}}
    <div class="clientnav">
    <ul class="nav nav-underline" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active"  id="dispute-tab" data-bs-toggle="tab" data-bs-target="#dispute-tab-pane" type="button" role="tab" aria-controls="dispute-tab-pane" aria-selected="true" >Dispute Letters</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link "    id="freeze-tab" data-bs-toggle="tab" data-bs-target="#freeze-tab-pane" type="button" role="tab" aria-controls="freeze-tab-pane" aria-selected="true" >Freeze Letters</a>


</ul>
    </div>
    <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="dispute-tab-pane" role="tabpanel" aria-labelledby="dispute-tab" tabindex="0">
   
    <div class="col-md-10">
        <div class="card">
            <div class="card-body">
            <div class="row"  id="CLetter">
                    <div class="col" id="CLetterText">
                    <h3>Dispute Letters</h3>
                    <p>Use our templates or Create your own letter</p>
                    </div>
                    <div class="col-md-3" id="CLetterbtn">
                    <button class="btn btn-primary" id="CLetterbtn" type="button" data-toggle="modal" data-target="#"></i>&nbsp;&nbsp;ADD NEW LETTERS</button>
                        </div>
                </div> <!--row-->
                

                <br>
                <div  id="loginActivity">

 <div style='overflow-y:auto'>
     <table class="table table-hover">
         <thead>
         <tr>
         <th>Letter Title</th>
         <th>Category</th>
         <th>Action</th>
        
         </tr>
         </thead>
     <tbody>
         <tr>
         <tr>
             <td><span class="skeleton">Round 2<span></td>
             <td> <span class="skeleton">Credit Bureau Letters </span></td>
             <td>
             <a href="" class="btn"><i class="bi bi-eye-fill"></i></a>
                                                <!-- Button to Open the Modal -->
                                             
                <form id="deleteForm" action="" method="POST" style="display: inline-block;" >
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal"><i class='bx bxs-trash' ></i></button>
                </form>
            </td>


         </tr>
         <tr>
             <td><span class="skeleton">Late Payment Letter Bureau Round 3 <span></td>
             <td> <span class="skeleton">Round 3 Bureau </span></td>
             <td>
             <a href="" class="btn"><i class="bi bi-eye-fill"></i></a>
                                                <!-- Button to Open the Modal -->
                                             
                <form id="deleteForm" action="" method="POST" style="display: inline-block;" >
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal"><i class='bx bxs-trash' ></i></button>
                </form>
            </td>


         </tr>
         <tr>
             <td><span class="skeleton">Round 2 Bureau Follow up<span></td>
             <td> <span class="skeleton">Round 2 Bureau </span></td>
             <td>
             <a href="" class="btn"><i class="bi bi-eye-fill"></i></a>
                                                <!-- Button to Open the Modal -->
                                             
                <form id="deleteForm" action="" method="POST" style="display: inline-block;" >
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal"><i class='bx bxs-trash' ></i></button>
                </form>
            </td>


         </tr>
         <tr>
             <td><span class="skeleton">Round 5<span></td>
             <td> <span class="skeleton">Credit Bureau Letters </span></td>
             <td>
             <a href="" class="btn"><i class="bi bi-eye-fill"></i></a>
                                                <!-- Button to Open the Modal -->
                                             
                <form id="deleteForm" action="" method="POST" style="display: inline-block;" >
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal"><i class='bx bxs-trash' ></i></button>
                </form>
            </td>


         </tr>
         <tr>
             <td><span class="skeleton">Round 4<span></td>
             <td> <span class="skeleton">Credit Bureau Letters </span></td>
             <td>
             <a href="" class="btn"><i class="bi bi-eye-fill"></i></a>
                                                <!-- Button to Open the Modal -->
                                             
                <form id="deleteForm" action="" method="POST" style="display: inline-block;" >
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal"><i class='bx bxs-trash' ></i></button>
                </form>
            </td>

         </tr>
         <tr>
             <td><span class="skeleton">Update Request for Bankruptcy Filing<span></td>
             <td> <span class="skeleton">Additional Round Bureau </span></td>
             <td>
             <a href="" class="btn"><i class="bi bi-eye-fill"></i></a>
                                                <!-- Button to Open the Modal -->
                                             
                <form id="deleteForm" action="" method="POST" style="display: inline-block;" >
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal"><i class='bx bxs-trash' ></i></button>
                </form>
            </td>

         </tr>
         <tr>
             <td><span class="skeleton">Round 4 Failure to Provide Proof<span></td>
             <td> <span class="skeleton">Round 4 Creditor </span></td>
             <td>
             <a href="" class="btn"><i class="bi bi-eye-fill"></i></a>
                                                <!-- Button to Open the Modal -->
                                             
                <form id="deleteForm" action="" method="POST" style="display: inline-block;" >
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal"><i class='bx bxs-trash' ></i></button>
                </form>
            </td>

         </tr>
        
     </tbody>
     </table>

<!--  <nav aria-label="Page navigation example"><ul class="pagination justify-content-end"><div class="pagination"><a href="#">❮</a><a href="#">❯</a></div></ul></nav> -->
    </div>
</div> </div></div></div> </div>
        
        <div class="tab-pane fade" id="freeze-tab-pane" role="tabpanel" aria-labelledby="freeze-tab" tabindex="0">
        <div class="col-md-10">
        <div class="card">
            <div class="card-body">
            <div class="row"  id="CLetter">
                    <div class="col" id="CLetterText">
                    <h3>Freeze Letters</h3>
                    <p>Use our templates or Create your own letter</p>
                    </div>
                    <div class="col-md-3" id="CLetterbtn">
                    <button class="btn btn-primary" id="CLetterbtn" type="button" data-toggle="modal" data-target="#"></i>&nbsp;&nbsp;ADD FREEZE LETTERS</button>
                        </div>
                </div> <!--row-->
                

                <br>
                <div  id="loginActivity">

 <div style='overflow-y:auto'>
     <table class="table table-hover">
         <thead>
         <tr>
         <th>Letter Title</th>
         <th>Category</th>
         <th>Action</th>
        
         </tr>
         </thead>
     <tbody>
         <tr>
         <tr>
             <td><span class="skeleton">Default Freeze Letter Template<span></td>
             <td> <span class="skeleton">Freeze </span></td>
             <td>
             <a href="" class="btn"><i class="bi bi-eye-fill"></i></a>
                                                <!-- Button to Open the Modal -->
                                             
                <form id="deleteForm" action="" method="POST" style="display: inline-block;" >
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#deleteConfirmModal"><i class='bx bxs-trash' ></i></button>
                </form>
            </td>


         </tr>
         
        
     </tbody>
     </table>

<!--  <nav aria-label="Page navigation example"><ul class="pagination justify-content-end"><div class="pagination"><a href="#">❮</a><a href="#">❯</a></div></ul></nav> -->
    </div>
</div> </div></div></div> </div>
        </div>
     
        
    </div>
       

</div>
@endsection
