<!DOCTYPE html>
<html>
<head>
    <title>Client Details</title>
    <script 
      src="https://cdn.ckeditor.com/ckeditor5/36.0.0/classic/ckeditor.js">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @extends('layouts.app')
    @section('content')
    <div class="hello" id="showcontainer">

    <div class="row">
    
    <div class="col">  

    <div class="clientnav">
    <ul class="nav nav-underline" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active"  id="dashboard-tab" data-bs-toggle="tab" data-bs-target="#dashboard-tab-pane" type="button" role="tab" aria-controls="dashboard-tab-pane" aria-selected="true" >Dashboard</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link "    id="import-tab" data-bs-toggle="tab" data-bs-target="#import-tab-pane" type="button" role="tab" aria-controls="import-tab-pane" aria-selected="true" >Import/Audit</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link"   id="generate-tab" data-bs-toggle="tab" data-bs-target="#generate-tab-pane" type="button" role="tab" aria-controls="generate-tab-pane" aria-selected="true" >Generate Letters</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link"   id="documents-tab" data-bs-toggle="tab" data-bs-target="#documents-tab-pane" type="button" role="tab" aria-controls="documents-tab-pane" aria-selected="true" >Documents</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link"   id="notes-tab" data-bs-toggle="tab" data-bs-target="#notes-tab-pane" type="button" role="tab" aria-controls="notes-tab-pane" aria-selected="true" >Notes</a>
  </li>

</ul>
    </div>
    <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="dashboard-tab-pane" role="tabpanel" aria-labelledby="dashboard-tab" tabindex="0">
    <div class="row">
<div class="col-md-7" id="clientinfo">

            <div class="row">
            <div class="col">
            <div class="card">
            <div class="card-body">
            <div class="row" id="clientedit">
                <div class="col-md-9">
                    <div class="clientname">
                    <h1>{{ $client->first_name . ' ' . $client->middle_name . ' ' . $client->last_name }}</h1>
                    </div>
                </div>
                <div class="col">
                    <div class="row">
                        <div class="clientbtn">
                            <a href="#">  <i class="bi bi-pencil"></i>&nbsp;&nbsp;Edit</a>     
                        </div>
                    </div>
                    
                    <div class="row">
                            <div class="clientbtn">
                           <a href="#">  <i class='bx bx-upload'></i>&nbsp;&nbsp;Upload Documents</a>
                            </div>
                    </div>
                </div>
            </div> <!-- clientedit -->

      <div class="container">
   <div class="row">
     <div class="col">
       <ul id="progress-bar" class="progressbar">
         <li class="active">Account Created</li>
         <li>Credit Import</li>
         <li>Dispute Round 1</li>
         <li>Dispute Round 2</li>
         <li>Completed</li>
      </ul>
     </div>
  </div>
</div>
<div class="row">
    <div class="col">
        <div class="clientinfo">
            <div id="clientaddress">
                <i class="bi bi-house-fill"></i> &nbsp;
                <div class="caddress">
                <h6>{{ $client->address . ' ' . $client->city }}</h6>
                <!-- for lala patulong akong ibaba to haha tq-->
                <h6>{{ $client->state . ' ' . $client->zip_code . ' ' }}USA</h6>  </div>
            </div>
            <div id="clientemail">
                <i class="bi bi-envelope-at-fill"></i> &nbsp;
                <h6>{{ $client->email }}</h6>
            </div>
            <div id="clientphone">
                <i class="bi bi-telephone-fill"></i>  &nbsp; 
            <div id="phonenum">
                <h6>{{ $client->mobile_main }} &nbsp;<span>(Mobile)</span></h6>
                <h6>{{ $client->mobile_alt }} &nbsp;<span>(Alt)</span></h6>
                <h6>{{ $client->mobile_work }} &nbsp;<span>(Work)</span></h6>
            </div>
        </div>
    </div>
</div>
<div class="col">
    <div class="clientinfo2">
        <div id="clientssn">
<label for="ssn">SSN:</label>
    <h6>&nbsp;{{ $client->ssn }}</h6>
        </div>
        <div id="clientdob"> 
<label for="dob">Date of Birth:</label>
    <h6>&nbsp;{{ $client->date_of_birth }}</h6>
        </div>
        <div id="clientstart">
<label for="start_date">Start Date:</label> 
    <h6>&nbsp;{{ $client->start_date }}</h6>
        </div>
        <div id="clientcreate">
       <label for="create_date">Created Date:</label> 
    <h6>&nbsp;{{ $client->created_at }}</h6>
        </div>
       
    </div>
</div>
</div>                
            </div>
            </div>
           

            </div>
            
             </div>
             <!--row-->
</div>
<div class="col-md-3" id="Notes">  
        <div class="card">
             <div class="card-body">
               <div>
                <h3>Notes</h3>
               </div>
               
               <div class="iBody">
         
                     
                     <table class="table table-hover">
                    
                         <tbody>
                         
                                 <tr>    
                                     <td><h6>July 24, 2024</h6></td> 
                                     <td>
                                     <h6>Send Documents</h6></td> 

                                 </tr>
                               
                                 <tr>    
                                     <td><h6>July 22, 2024</h6></td> 
                                     <td> 
                                     <h6>Follow-Up Email</h6></td> 

                                 </tr>
                            
                         
                         </tbody>
                    
                     </table>
      

            
               </div>  <div class="iView">

<a href="#">View All</a>
        </div>
        
     </div> 
  
</div>
</div>

</div> <!--row-->

<div class="row">
<div class="col-md-7" id="scores">
<div class="row" >

    <div class="col">  
        <div class="card" id="info">
             <div class="card-body">
                <div class="head">
                  
 
                <div id="equifax" style="max-width: 400px; height: 200px;margin: 0px auto;"></div>
                    

                </div>
               
          
              </div>
        </div>

    </div>

    <div class="col">  
        <div class="card">
             <div class="card-body">
                <div class="head">
                <div id="experian" style="max-width: 400px; height: 200px;margin: 0px auto;"></div>
                    
            </div>
              </div>
        </div>

    </div>

    <div class="col">  
        <div class="card">
             <div class="card-body">
                <div class="head">
                <div id="transunion" style="max-width: 400px; height: 200px;margin: 0px auto;"></div>
                    


                </div>
              </div>
        </div>

    </div>


</div> <!--row-->
             <!--row-->
</div>
<div class="col-md-3" id="agentinfo">  
        <div class="card">
             <div class="card-body">
               <div>
                <h3>Agent Info</h3>
               </div>
               
               <div class="agentinfobody">
                <div class="agentimg">
                    <img src="/img/agent-info.png" alt="agent" >
                </div>
                <div class="agentname">
                    <h5>Ashley Chan</h5>
                    <h6>Virtual Assistant</h6>
                </div>
                   
            
               </div>  
     </div> 
  
</div>
</div>

</div> 

</div>


<div class="tab-pane fade" id="import-tab-pane" role="tabpanel" aria-labelledby="import-tab" tabindex="0">
    <div class="col-md-7">
        <div class="card">
            <div class="card-body">
                <h3>hi</h3>
            </div>
        </div>
    </div>
</div>
<div class="tab-pane fade" id="generate-tab-pane" role="tabpanel" aria-labelledby="generate-tab" tabindex="0">
    <div class="col-md-7">
        <div class="card">
            <div class="card-body">
                <h3>hi letter</h3>
            </div>

        </div>
    </div>
</div> <!-- generate letters tab -->
<div class="tab-pane fade" id="documents-tab-pane" role="tabpanel" aria-labelledby="documents-tab" tabindex="0">
    <div class="col-md-10">
       
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                         <h3>Documents</h3>
                    </div>
                    <div class="col">
                    <div class="uploadDocu">
            <button class="btn btn-outline-primary" type="button" data-toggle="modal" data-target="#uploadDocuments"><i class='bx bx-upload'></i>&nbsp;&nbsp;Upload Documents</button>
                 
        </div>
                    </div>
                </div>
                <div class="UDTable" style='overflow-x:auto'>
                    <table class="table table-hover">
                    <thead>
                                    <tr>
                                        <th>Document Type</th>
                                        <th>Uploaded by</th>
                                        <th>Uploaded at</th>
                                        <th>Updated at</th>
                                        <th>Action</th>
                                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Valid ID</td>
                            <td>Jane Doe</td>
                            <td>05 Sept. 2024</td>
                            <td>12 Sept. 2024</td>
                            <td><a href="#">   <i class='bx bxs-edit'></i></a>&nbsp;
                           <a href="#">   <i class='bx bxs-trash'></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Proof of Address</td>
                            <td>Jane Doe</td>
                            <td>05 Sept. 2024</td>
                            <td>12 Sept. 2024</td>
                            <td><a href="#">   <i class='bx bxs-edit'></i></a>&nbsp;
                           <a href="#">   <i class='bx bxs-trash'></i></a>
                            </td>
                        </tr>
                          <tr>  
                            <td>Picture of SSN</td>
                            <td>Jane Doe</td>
                            <td>05 Sept. 2024</td>
                            <td>12 Sept. 2024</td>
                            <td><a href="#">   <i class='bx bxs-edit'></i></a>&nbsp;
                            <a href="#">   <i class='bx bxs-trash'></i></a>
                            </td>
                        </tr>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="uploadDocuments" tabindex="-1" role="dialog" aria-labelledby="uploadDocuments" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">    UPLOAD DOCUMENT</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
               
                    <div class="fields"> 
                        <div class="mb-3" id="importcsv">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="document">Document</label>  
                                </div>   
                                <div class="col">
                                    <input type="file" class="form-control" name="document" id="document">
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="documentType">Document Type</label>  
                                </div>   
                                <div class="col">
                                <select name="documentType" id="documentType" required>
                                    <option value="" disabled selected>Select</option>
                                    <option>Valid ID</option>
                                    <option>Proof of Address</option>
                                    <option>Picture of SSN</option>  
                                 </select>
                                </div>
                            </div> 
                          
                               <div class="DocuBtn">
                                <button type="submit" class="btn btn-primary"> Upload</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal"> Cancel</button>
                               </div>
                             
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Add Notes Modal-->
<div class="tab-pane fade" id="notes-tab-pane" role="tabpanel" aria-labelledby="notes-tab" tabindex="0">
    <div class="row" >
        <div class="col-md-3" id="notesTab">
            <div class="card">
                <div class="card-body">
                        <h3>Notes</h3>
                            <div class="notesNum">
                                <div>
                                <p> {{ $client->notes_count }} Notes</p>
                                </div> 
                                <div class="notesSearch">
                            
                                <input class="form-control" type="text" placeholder="Search Notes" aria-label="Search">
                                </div>
                                <div class="addNote">
                                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#addNotes"><i class='bx bx-plus'></i>ADD NOTE</button>
                                </div>
                                
                                
                            </div>
                            <br>
                            
                            <div class="notesTable" style="overflow-y:scroll; height:600px;">
                                    <table class="table table-hover">
                                        @forelse  ($notes as $note)
                                            @php
                                                        $class = '';
                                                        $label = '';
                                                        switch ($note->level) {
                                                            case 2:
                                                                $class = 'important';
                                                                $label = 'Important';
                                                                break;
                                                            case 1:
                                                                $class = 'medium';
                                                                $label = 'Medium';
                                                                break;
                                                            case 0:
                                                                $class = 'low';
                                                                $label = 'Low';
                                                                break;
                                                            default:
                                                                $class = 'low';
                                                                $label = 'Low';
                                                                break;
                                                        }
                                            @endphp
                                        <tr class="note-row" data-note-id="{{ $note->id }}">
                                            <td>
                                                <div class="radiotype">
                                                <p class=" {{ $class }} "><i class='bx bxs-circle'></i> {{ $label }}</p>
                                                </div>
                                                <div class="note-preview">
                                                <h6> {{ \Illuminate\Support\Str::limit($note->notes, 100, '...') }} </h6>
                                              
                                                <p> {{ \Carbon\Carbon::parse($note->created_at)->format('F j, Y') }}</p>
                                                  </div> 
                                               
                                            </td>
                                            
                                        </tr>
                                        @empty
                                        <tr>
                                            <td>No notes available</td>
                                        </tr>
                                    @endforelse
                                    </table>
                                </div>
                </div>
            </div>
        </div> <!--col-->
        <div class="col-md-7" id="notesTab">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="radiotype">
                                <p id="note-level" class="low"><i class='bx bxs-circle'></i> Low</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="note-preview">
                                <p id="note-date">June 23, 2024</p>
                            </div>
                        </div>
                    </div>
                    <div id="editor" name="editor" contenteditable="true">
                        <div class="note-preview">
                            <p id="note-details-text">Note content here...</p>
                        </div>
                    </div>
                    <div class="NoteBtn">

                         <!--edit button-->
                        <button type="button" id="saveButton" class="btn btn-primary"><i class="bi bi-floppy-fill"></i></button>

                        <!--delete button-->
                        <form id="deleteForm" action="" method="POST" style="display:none;" onsubmit="return confirmDelete()">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-primary"><i class="bi bi-trash-fill"></i></button>
                        </form>
                    </div>
                    <!-- JavaScript for handling the click event and updating content -->
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {

                            let editorInstance;

                            ClassicEditor
                                .create(document.querySelector('#editor'))
                                .then(editor => {
                                    editorInstance = editor;
                                })
                                .catch(error => {
                                    console.error('There was a problem initializing the editor:', error);
                                });

                            const rows = document.querySelectorAll('.note-row');
                            const noteLevel = document.getElementById('note-level');
                            const noteDate = document.getElementById('note-date');
                            const noteDetailsText = document.getElementById('note-details-text');
                            const deleteForm = document.getElementById('deleteForm');
                            const saveButton = document.getElementById('saveButton');

                              // Click event for the save button
                            saveButton.addEventListener('click', function() {
                                const noteId = deleteForm.action.split('/').pop(); // Get the note ID from the form action
                                const updatedNoteContent = editorInstance.getData(); // Get the updated content from the editor

                                // Make an AJAX request to save the note
                                fetch(`/notes/${noteId}`, {
                                    method: 'PUT', // Use PUT to update the resource
                                    headers: {
                                        'Content-Type': 'application/json',
                                        'X-CSRF-TOKEN': '{{ csrf_token() }}' // Add CSRF token for Laravel
                                    },
                                    body: JSON.stringify({ notes: updatedNoteContent }) // Send the updated note content
                                })
                                .then(response => {
                                    if (!response.ok) {
                                        throw new Error('Network response was not ok');
                                    }
                                    return response.json();
                                })
                                .then(data => {
                                    if (data.success) {
                                        alert('Note updated successfully!');
                                        // Optionally, you could update the UI to reflect the changes
                                        // Refresh the page
                                        location.reload(); // Refresh the page after saving
                                    } else {
                                        alert('Failed to update the note. Please try again.');
                                    }
                                })
                                .catch(error => {
                                    console.error('Error updating note:', error);
                                    alert('An error occurred while updating the note.');
                                });
                            });
                    

                            rows.forEach(row => {
                                row.addEventListener('click', function() {
                                    const noteId = this.getAttribute('data-note-id');
                                    console.log(`Clicked note ID: ${noteId}`); // Debugging line

                                    // Make an AJAX request to fetch note details
                                    fetch(`/notes/${noteId}`)
                                        .then(response => {
                                            if (!response.ok) {
                                                throw new Error('Network response was not ok');
                                            }
                                            return response.json();
                                        })
                                        .then(data => {
                                            console.log('Note data:', data); // Debugging line

                                            if (data.success) {
                                                const note = data.note;
                                                noteLevel.textContent = getNoteLabel(note.level);
                                                noteLevel.className = getNoteClass(note.level); // Update class based on level

                                                // Format the date to 'F j, Y'
                                                const formattedDate = formatDate(new Date(note.created_at));
                                                noteDate.textContent = formattedDate;

                                                // Set editor content
                                                if (editorInstance) {
                                                    editorInstance.setData(note.notes);
                                                } else {
                                                    console.error('Editor instance is not available.');
                                                }

                                                // Update the delete form action with the selected note's ID
                                                deleteForm.action = `/notes/${noteId}`; 
                                                deleteForm.style.display = 'block'; // Show the delete form when a note is selected

                                            } else {

                                                resetNoteDetails();
                                                // noteLevel.textContent = '';
                                                // noteDate.textContent = '';
                                                // noteLevel.className = 'low'; // Reset class if note is not found
                                                // if (editorInstance) {
                                                //     editorInstance.setData('Note not found');
                                                // }
                                            }
                                        })
                                        .catch(error => {
                                            console.error('Error fetching note details:', error);
                                            resetNoteDetails();
                                            // noteLevel.textContent = '';
                                            // noteDate.textContent = '';
                                            // noteLevel.className = 'low'; // Reset class on error
                                            // if (editorInstance) {
                                            //     editorInstance.setData('An error occurred');
                                            // }
                                        });
                                });
                            });

                            
                            function resetNoteDetails() {
                            noteLevel.textContent = '';
                            noteDate.textContent = '';
                            noteLevel.className = 'low'; // Reset class if note is not found
                            if (editorInstance) {
                                editorInstance.setData('Note not found');
                                }
                            }

                            function getNoteLabel(level) {
                                switch (parseInt(level, 10)) {
                                    case 2: return 'Important';
                                    case 1: return 'Medium';
                                    case 0: return 'Low';
                                    default: return 'Low';
                                }
                            }

                            function getNoteClass(level) {
                                switch (parseInt(level, 10)) {
                                    case 2: return 'important'; // Class for Important notes
                                    case 1: return 'medium';   // Class for Medium notes
                                    case 0: return 'low';      // Class for Low notes
                                    default: return 'low';     // Default class
                                }
                            }

                            function formatDate(date) {
                                const options = { year: 'numeric', month: 'long', day: 'numeric' };
                                return date.toLocaleDateString('en-US', options);
                            }
                        });

                        function confirmDelete() {
                                return confirm('Are you sure you want to delete this note?');
                            }
                    </script>


                </div>
            </div>
        </div> <!-- col -->
    </div> <!-- row -->
</div>

</div>





<!-- Add Notes Modal-->
<div class="modal fade" id="addNotes" tabindex="-1" role="dialog" aria-labelledby="addNotes" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addNotes"><i class="bi bi-pencil-fill"></i>Add Note</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                   
                    <form action="{{ route('clients.storeNote') }}" method="POST">
                        @csrf
                        <!-- Hidden fields to store client_id -->
                        <input type="hidden" name="client_id" value="{{ $client->id }}">
                        <div>
                            <div  class="notesRadio">
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="level" value="2" id="flexRadioimportant" checked>
                                <label class="form-check-label" for="flexRadioimportant">
                                    Important
                                </label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="level" value="1" id="flexRadiomedium" >
                                <label class="form-check-label" for="flexRadiomedium">
                                    Medium
                                </label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="level" value="0" id="flexRadiolow" >
                                <label class="form-check-label" for="flexRadiolow">
                                Low
                                </label>
                                </div>
                            </div>    
                            <div>
                                <textarea class="form-control" name="notes" id="exampleFormControlTextarea1" rows="4" required="true"></textarea>
                            </div>    
                            
                    </div>
                       <button type="submit" class="btn btn-primary"><i class="bi bi-floppy-fill"></i></button>
                   </form>
                </div>
            </div>
        </div>
    </div>


        <!-- 
             <div class="card">
            
        
          <div class="backbtn">
           
            <a class="icon-link icon-link-hover"  href="{{ route('clients.index') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-bar-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M12.5 15a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5M10 8a.5.5 0 0 1-.5.5H3.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L3.707 7.5H9.5a.5.5 0 0 1 .5.5"/>
</svg>Back
  
</a>
                          
            </div>
            
            <div class="card-body" id="col1">

            <div>
                <h3>{{ $client->first_name . ' ' . $client->middle_name . ' ' . $client->last_name }}</h3>
                <div class="container-fluid text-left">
                <nav class="navbar">
                        
                                 
                                <ul class="nav justify-content-left"> 
                                    <li class="nav-item">
                                    <button type="button" class="btn btn-outline-info">  ROUND 1 OUT</button>  
                                         
                                        </a> 
                                    </li>    

                                    <li class="nav-item">
                                        <a class="btn btn-app">
                                
                                        <i class="bi bi-envelope-at-fill"></i>&nbsp; {{$client->email}}
                                        </a> 
                                    </li>   

                                    <li class="nav-item" id="ClientNum">
                                        <a class="btn btn-app">
                                  
                                        <i class="bi bi-telephone-fill"></i> &nbsp; {{$client->formatted_phone_number}}
                                        </a> 
                                    </li>

                                   
                                </ul>
                                
                                
                      
                        </nav> 
                   

        
            </div>
            <div class="container-fluid text-left">
                <nav class="navbar">
                        
                                 
                                <ul class="nav justify-content-left" id="clientviews"> 
                                    <li class="nav-item">
                                    <a class="btn btn-app"> View/Edit Profile
                                         
                                        </a> 
                                        
                                    </li>
                                   

                                    <li class="nav-item">
                                        <a class="btn btn-app">
                                View Client Agreement
                                        </a> 
                                    </li>   


                                   
                                </ul>
                                
                                <ul class="nav justify-content-end">
                                <li class="nav-item" id="#clientbtn">
                                        <a class="btn btn-app"> 
                                            <button type="button" class="btn btn-outline-primary">
                                                   Import/Audit
                                            </button> 
                                        </a> 
                                    </li>
                                    <li class="nav-item">
                                        <a class="btn btn-app"> 
                                            <button type="button" class="btn btn-outline-primary" >
                                                   Run Dispute Wizard
                                            </button> 
                                        </a> 
                                    </li>
                                    <li class="nav-item">
                                        <a class="btn btn-app"> 
                                            <button type="button" class="btn btn-outline-primary" >
                                                    Send Message
                                            </button> 
                                        </a> 
                                    </li>
                                </ul>
                            </div>
                        </nav> 
                   

            </div>
            <br>

            <div class="row" id="ShowClients">
    
            <div class="col-md-6"> 
                 <div class="card" id="scoretable">
                 <div class="card-body">
          <div class="card-header">  
<h6>Scores</h6>
</div>  

<div class="scoretable">
         
<table class="table table-hover" >
    <thead>
            
        <tr>
            <th>&nbsp;</th>
            <th><img src="\img\Equifax1.png" width="100"></th>
            <th><img src="\img\experian.png" width="100"></th>
             <th><img src="\img\transunion2.png" width="100"></th>
                                  
         </tr>
    </thead>
    <tbody>
                            
        <tr>    
            <td>07/12/2024</td> 
            <td>504</td>
            <td>530</td>
            <td>541</td>
         </tr>
    </tbody>
</table>
<div class="score">
                <div id="score">
                    
                </div>
</div>
</div>
<div class="container-fluid text-left">
                <nav class="navbar">                  
                                <ul class="nav justify-content-left" id="startdate" > 
                                    <li class="nav-item">
                                 <h6>Start Date: 06/29/2024</h6>
                                        
                                    </li>
                                </ul>
                                
                                <ul class="nav justify-content-end" id="clientviews">
                          
                                    <li class="nav-item">
                                     
                                        <a class="btn btn-app"> Add/Edit Scores
                                         
                                       
                                        </a> 
                                    </li>
                                  
                                </ul>
                            </div>
                        </nav> 


</div>
</div>


<div class="card"  id="disputestatus">
<div class="card-body">
<div class="card-header">  
    <div class="row">
        <div class="col">
<h6>Dispute Status</h6>
</div>
<div class="col">
<ul class="nav justify-content-end">
                                <li class="nav-item" >
                                        <a class="btn btn-app"> 
                                            <button type="button" class="btn btn-outline-secondary">
                                                  View Dispute
                                            </button> 
                                        </a> 
                                    </li>
                                    <li class="nav-item">
                                        <a class="btn btn-app"> 
                                            <button type="button" class="btn btn-outline-secondary" >
                                                  Import Reports
                                            </button> 
                                        </a> 
                                    </li>
                                   
                                </ul>
</div>
</div> 
 </div>
<div class="disputestatus">
         <div>
<table class="table table-hover" >
    <thead>
            
        <tr>
        <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th><img src="\img\Equifax1.png" width="100"></th>
            <th><img src="\img\experian.png" width="100"></th>
             <th><img src="\img\transunion2.png" width="100"></th>
                                  
         </tr>
    </thead>
    <tbody>
                            
        <tr>    
            <td><div class="square-unspecified"></div></td>
            <td class="squarestatus"> Unspecified</td> 
            <td>2</td>
            <td>7</td>
            <td>5</td>
         </tr>
         <tr>    
            <td><div class="square-positive"></div></td>
            <td class="squarestatus">Positive</td> 
            <td>32</td>
            <td>29</td>
            <td>22</td>
         </tr>
         <tr>    
            <td><div class="square-positive"></div></td>
            <td class="squarestatus">Deleted</td> 
            <td>0</td>
            <td>0</td>
            <td>0</td>
         </tr>
         <tr>    
            <td><div class="square-positive"></div></td>
            <td class="squarestatus">Repaired</td> 
            <td>0</td>
            <td>0</td>
            <td>0</td>
         </tr>
         <tr>    
            <td><div class="square-positive"></div></td>
            <td class="squarestatus">Updated</td> 
            <td>0</td>
            <td>0</td>
            <td>0</td>
         </tr>
         <tr>    
            <td><div class="square-indispute"></div></td>
            <td class="squarestatus">In Dispute</td> 
            <td>7</td>
            <td>13</td>
            <td>10</td>
         </tr>
         <tr>    
            <td><div class="square-negative"></div></td>
            <td class="squarestatus">Verified</td> 
            <td>0</td>
            <td>0</td>
            <td>0</td>
         </tr>
         <tr>    
            <td><div class="square-negative"></div></td>
            <td class="squarestatus">Negative</td> 
            <td>0</td>
            <td>0</td>
            <td>0</td>
         </tr>
         <tr>    
            <td><div class="square-bletters"></div></td>
            <td class="squarestatus">Bureau Letters</td> 
            <td>1</td>
            <td>1</td>
            <td>1</td>
         </tr>
    </tbody>
</table>
<div class="fletters">
    <h6>Furnished Letters: 0</h6>
</div>
</div>
<div class="dispute">
                <div id="dispute">
                    
                </div>
                <div>
                    
               <div class="form-group" id="progress">
                                            <div class="row align-items-center" >
                    <div class="col-sm-2" >
                        <h6>75%</h6>
                    </div>
                    <div class="col">
                <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 75%"></div>
</div>
                </div></div></div>
                <div class="provider">
                                               
                                                <select name="provider" id="provider" required>
  <option value="" disabled selected></option>
  <option value="All">All</option>
        <option value="Equifax">Equifax</option>  
        <option value="Experian">Experian</option>  

    <option value="Transunion">Transunion</option> 
                     </select>
                      </div>
                      <div class="disputeclients">
                <nav class="navbar">                  
                            
                                <ul class="nav flex-column" id="clientviews">
                          
                                    <li class="nav-item">
                                        <a class="btn btn-app"> Client's Saved Letters
                                        </a> 
                                    </li>
                                    <li class="nav-item">
                                     <a class="btn btn-app"> Client's Saved Reports
                                     </a> 
                                    </li>
                                    <li class="nav-item">
                                     <a class="btn btn-app"> Document Storage
                                     </a> 
                                    </li>
                                   </div>
                                </ul>
                            
                        </nav>
</div>
</div>
</div>

</div>
</div>

<div class="card">
<div class="card-body">
<div class="card-header">  
    <h6>Progress</h6>
</div>
    <div class="clientprogress">
    <div style='overflow-y:auto'>
<table class="table" >
    <thead>
            
        <tr>
 
            <th> <i class="bi bi-check-circle-fill"></i></th>
            <th> <i class="bi bi-2-circle-fill"></i></th>
             <th> <i class="bi bi-3-circle-fill"></i></th>
             <th><i class="bi bi-check-circle-fill"></i></th>
             <th> <i class="bi bi-5-circle-fill"></i></th>
             <th><i class="bi bi-check-circle-fill"></i></th>
                                  
         </tr>
    </thead>
    <tbody>
                            
        <tr>    
            <td>Login Details Sent</td> 
            <td>Client Logged In</td>
            <td>Agreement Signed</td>
            <td>Onboarding Completed</td>
            <td>Report Imported</td>
            <td>Letters Saved</td>
         </tr>
    </tbody>
</table>

</div>
    </div>
    </div>
</div>
<div class="card"  id="clientbilling">
<div class="card-body">
<div class="card-header">  
    <div class="row">
        <div class="col">
<h6>Billing & Payments</h6>
</div>
<div class="col">
<ul class="nav justify-content-end">
                                <li class="nav-item" >
                                        <a class="btn btn-app"> 
                                            <button type="button" class="btn btn-primary">
                                        New Task
                                            </button> 
                                        </a> 
                                    </li>
                                    
                                   
                                </ul>
</div>
</div> 
 </div>
    <div class="clientbilling">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview-tab-pane" type="button" role="tab" aria-controls="overview-tab-pane" aria-selected="true">Overview</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="history-tab" data-bs-toggle="tab" data-bs-target="#history-tab-pane" type="button" role="tab" aria-controls="history-tab-pane" aria-selected="false">History</button>
  </li>

</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="overview-tab-pane" role="tabpanel" aria-labelledby="overview-tab" tabindex="0">
  <div class="card">
<div class="card-body">
<div>
    <h6>Overview</h6>
</div>
</div>
  </div>

</div>
  <div class="tab-pane fade" id="history-tab-pane" role="tabpanel" aria-labelledby="history-tab" tabindex="0">
  <div class="card">
<div class="card-body">
<div>
    <h6>History</h6>
</div>
</div>
  </div>  
  </div>
 </div>
    </div>
    </div>
</div>
</div>

<div class="col-md-6">
<div class="card">
<div class="card-body">
<h6>Tasks</h6>
<div>
    
    </div>
    </div>
    </div>
    <div class="card">
    <div class="card-body">
    <h6>Notes</h6>
    <div>
    
    </div>
    </div>
    </div>
    <div class="card">
    <div class="card-body">
    <h6>Documents</h6>
    <div>
    
    </div>
    </div>
    </div>
</div>



           <table class="table">
                                <tr>
                                    <th>ID:</th>
                                    <td>{{ $client->id }}</td>
                                </tr>
                                <tr>
                                    <th>Name:</th>
                                    <td>{{ $client->name }}</td>
                                </tr>
                                <tr>
                                    <th>Description:</th>
                                    <td>{{ $client->description }}</td>
                                </tr>
                            </table>
                            
                            <a href="{{ route('clients.index') }}" class="btn btn-secondary">Back</a>
                            <a href="{{ route('clients.edit', $client) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('clients.destroy', $client) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
        
        </div>
        </div> 
    </div>
     
    
</div>--> 
  

</div>
</div>
</div>
    @endsection

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            console.log("Page loaded, script is running.");

            // Define a mapping from tab IDs to simpler hash names
            const hashMapping = {
                'dashboard-tab-pane': 'dashboard',
                'import-tab-pane': 'import',
                'generate-tab-pane': 'generate',
                'documents-tab-pane': 'documents',
                'notes-tab-pane': 'notes'
            };

            // Check the URL for a fragment (e.g., #notes)
            const hash = window.location.hash.replace('#', ''); // Remove the #
            console.log("Current URL hash:", hash);

            if (hash) {
                // Find the corresponding tab link using the hash
                const tabLink = document.querySelector(`a[data-bs-target="#${hash}-tab-pane"]`);
                console.log("Found tab link:", tabLink);

                if (tabLink) {
                    // Use Bootstrap's tab function to activate it
                    const tabInstance = new bootstrap.Tab(tabLink);
                    tabInstance.show();  // Show the tab
                    console.log("Tab activated:", hash);
                }
            }

            // Handle updating the URL fragment when a tab is clicked
            const tabLinks = document.querySelectorAll('a[data-bs-toggle="tab"]');
            tabLinks.forEach(tabLink => {
                tabLink.addEventListener('shown.bs.tab', function (e) {
                    // Get the current tab's target ID
                    const targetId = e.target.getAttribute('data-bs-target').replace('#', ''); // Remove the #
                    // Get the corresponding simplified hash
                    const simplifiedHash = hashMapping[targetId] || targetId; // Default to original if not found

                    // Update the URL fragment without reloading the page
                    window.history.pushState(null, null, `#${simplifiedHash}`);
                    console.log("Tab clicked, URL updated to:", simplifiedHash);
                });
            });
        });
    </script>



    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://code.jscharting.com/latest/jscharting.js"></script>
    <script type="text/javascript" src="https://code.jscharting.com/latest/modules/types.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
