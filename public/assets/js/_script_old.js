/*

document.getElementById('change').onclick = function(){
	document.getElementById('exampleInputPassword').value = '';
	document.getElementById('exampleInputPassword').focus();
	}
	
document.getElementById('update').onclick = function(){
	document.getElementById('exampleInputEmail').focus();
	}

var $overlay = $('<div id="overlay"><div id="lightbox">"<div class="form-relative"><label>Current Password</label><input type="password" class="form-control" id="currentPassword"><label>New Password</label><input type="password" class="form-control" id="newPassword"><label>Confirm New Password</label><input type="password" class="form-control" id="confirmPassword"></div><button>Save</button></div></div>');
//var $overlay = $('<?php  echo form_open();?><div class="form-group"><?php echo form_input(array("type" => "email", "name" => "email", "class" => "form-control" , "placeholder" => "Email")); ?><br><?php echo form_input(array("type" => "password", "name" => "password", "class" => "form-control" , "placeholder" => "Password")); ?><button type="submit" class="button"> LOG IN</button><p class="help">Forgot password?</p><?php  echo form_close();?>');


$("body").append($overlay);
$("#change").click(function(event){
	$overlay.show();
});
*/
document.getElementById("uploadBtn").onchange = function () {
    document.getElementById("uploadFile").value = this.value;
};
