{% extends "layout.html" %}
{% block content %}
		<div class="page-header">
			<div class="header-content">
				<img  class="profile-image" src="assets/img/besa.jpg" alt="Photo">
				<div class="logged-user">
					<div class="logged-user-dropdown">MIK Agency</div>
					<div class="logged-user-dropdown-options">
						<br>
						<div class="select-logged-user-dropdown-options profile-hover"><a href="#">My Profile  <span class="my-profile-line line">|</span></a></div><br>
						<div class="select-logged-user-dropdown-options manage-hover"><a href="#">Manage Projects <span class="manage-projects-line line">|</span></a></div><br>
						<div class="select-logged-user-dropdown-options sign-out-hover"><a href="logout">Sign Out  <span class="sign-out-line line">|</span></a></div><br>
					</div>
				</div>			
			</div>
		</div>	

		<div class="container">
			<div class="image_profile">
	           <img src="assets/img/besa.jpg" alt="Photo">
	        </div> 

	        <div class="dropdown project_dropdown">
		        <div class="select_project">
		        	<input type="text" value="Select project" class="selected_project" id="selected_project_dropdown"> 

		         </div>
		         <div class="select_project_container">
		        	<input type="text" value="Add a new project"  class="selected add" id="selected_project_option" >
					
					{% for p in projects}
					
					<input type='text' value={{ p.p_name }}  class='select_project_option selected' id='selected_project_option'>
					
					{% endfor %}
		        </div>  
		    </div>

	        <input type="text" value="Add new project" class="add_new_project add_new" required>

	        <div class="go_edit_delete tools"> 
		        	<a class="go_to_project" href="#">Go to Project</a>
		        	<a class="edit" href="#"><img src="assets/img/edit.png"></a>
		        	<a class="delete" href="#"><img src="assets/img/delete.png"></a>		    
			</div>

			<br>

			<input type="text" value="Add new members" class="add_members">
			
			<div class="dropdown task_dropdown">
				<div class="select_project">
			        <input type="text" value="Select task" class="selected_project" id="selected_task_dropdown" disabled="disabled">       	
			    </div>

		        <div class="select_task_container">
		        	<input type="text" value="Add a new task" class="selected add_task" id="selected_task_option">
		        	<input type="text" value="Home Page" class="selected_task_option selected" id="selected_task_option">
		        	<input type="text" value="Branding book"  class="selected_task_option selected" id="selected_task_option">      	
		        </div>
	        </div>

	        <div class="edit_delete tools"> 
		        	<a class="edit" href="#"><img src="assets/img/edit.png"></a>
		        	<a class="delete" href="#"><img src="assets/img/delete.png"></a>		    
			</div>

	        <input type="text" value="Add new task" class="add_new_task add_new" required>
	        <br>
	        <div class="add_new_task add_new" id="uploadDiv">	
	        	<span class="drag-or-click"> Drag the file or click here</span>        
	        	<input id="uploadBtn" type="file" name="file" class="upload add_new_task add_new uploadFile" required>
	        </div>
	        <br>
	        <div class="finalize">
	        	<span class="left-align"><button class="button-submit dropdown-cancel"><a class="button-submit" href="login.php">CANCEL</a></button></span>
				<span class="right-align"><button class="button-submit dropdown-save-proceed" type="submit">SAVE & PROCEED</button></span>
	        </div>	
		</div>
{% endblock %}
	