{% extends layout.html %}
{% block content %}
	<div class="container">
	    <div class="image_profile">
	       <img src="assets/img/besa.jpg" alt="Photo">
	    </div>
     
	    <div class="form-group1">
                
           <form method="post" enctype="multipart/form-data" action = "/register">
		     <input type="text" name = "name" class="form-control1" id="exampleInputName" placeholder="Name" required>
		     <input type="text" name = "surname" class="form-control1" id="examleInputSurname" placeholder="Surname" required>
		     <input type="email" name = "email"  class="form-control1" id="examleInputemail" placeholder="Email" required>
		     <input type="email" name = "conf_email" class="form-control1" id="examleInputConfirmemail" placeholder="Confirm email" required>
		     <input type="Password" name = "password" class="form-control1" id="examleInputPassword" placeholder="Password" required>
		     <input type="Password" name = "conf_password" class="form-control1"  id="examleInputconfirm" placeholder="Confirm Password" required>
		      
		     
		     <div class="fileUpload btn btn-primary">
			 <input  id="uploadFile" placeholder="Image" />
			 <span class="upload_span"> <div class="splash">|</div> Upload image</span>
			 <input id="uploadBtn" type="file" name="file" class="upload" />
		     </div>
				
		     <div>
				<br><br>
	        	<span class="left-align"></span><button class="button-submit dropdown-cancel"><a class="button-submit" href="login.php">CANCEL</a></button></span>
				<span class="right-align"><button class="button-submit dropdown-save-proceed" type="submit">SAVE & PROCEED</button></span>
	        </div>
		</form>
	      </div>
         </div>
{% endblock %}
	