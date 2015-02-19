

//Slide up automaticly when page loads
 $( ".select_project_container" ).slideUp( "fast", function(){});
  $( ".select_task_container" ).slideUp( "fast", function(){});
   $( ".logged-user-dropdown-options" ).slideUp( "fast", function(){});
    $("#selected_task_dropdown").disabled = true;

/****************************************************************************************************************
  Dropdown Functions
******************************************************************************************************************/

//When select project is clicked the dropdown with the options slides down
$( "#selected_project_dropdown" ).click(function() {
     $(".go_edit_delete").css("display", "none");
      $("#selected_project_dropdown").css("background", "url(assets/img/arrow2.png) 280px center no-repeat");
        $( ".select_project_container" ).slideDown( "slow", function() {
  });
});


//Selecting an option from dropdown
$( ".select_project_option" ).click(function() {
  document.getElementById('selected_project_dropdown').value = this.value;
   $(".add_members").css("display", "block");
    $( ".select_project_container" ).slideUp( "slow", function() {
     $("#selected_project_dropdown").css("background", "url(assets/img/arrow1.png) 280px center no-repeat");
       $(".go_edit_delete").css("display", "block");
          $("#selected_task_dropdown").removeAttr("disabled");
            document.getElementById('selected_project_dropdown').focus();    
  });
});


$( "#selected_task_dropdown" ).click(function() {
     $(".edit_delete").css("display", "none");
      $("#selected_task_dropdown").css("background", "url(assets/img/arrow2.png) 280px center no-repeat");
        $( ".select_task_container" ).slideDown( "slow", function() {
  });
});


$( ".selected_task_option" ).click(function() {  
  document.getElementById('selected_task_dropdown').value = this.value;   
  $( ".select_task_container" ).slideUp( "slow", function() {
   $("#selected_task_dropdown").css("background", "url(assets/img/arrow1.png) 280px center no-repeat");
     document.getElementById('selected_task_dropdown').focus();
     $(".edit_delete").css("display", "block");
      $("#uploadDiv").css("display", "block");  
       $(".finalize").css("display", "block");       
  });
});


$(".add").click(function(){

  $(".dropdown").css("display","none");
  $(".add_new_project").css("display","block");
  $(".add_new_task").css("display","block");
  $(".add_members").css("display","block");
  $(".add_new").focus();
  $(".finalize").css("display", "block");  
  });


$(".add_task").click(function(){

  $(".task_dropdown").css("display","none");
  $(".add_new_task").css("display","block");
  });

/************************************************************************************************************
  Header Functions
************************************************************************************************************/

$(".profile-hover").hover(function(){
  $(".my-profile-line").css("color", "#27b89a"); 
},function(){$(".my-profile-line").css("color", "#1f272a");
});


$(".manage-hover").hover(function(){
  $(".manage-projects-line").css("color", "#27b89a"); 
},function(){$(".manage-projects-line").css("color", "#1f272a");
});


$(".sign-out-hover").hover(function(){
  $(".sign-out-line").css("color", "#27b89a"); 
},function(){$(".sign-out-line").css("color", "#1f272a");
});


$(".logged-user-dropdown").click(function(){
  $( ".logged-user-dropdown-options" ).slideDown( "slow", function(){});
    $(".logged-user-dropdown").css("background", "url(assets/img/arrowDown.png) 115px center no-repeat");
});


/************************************************************************************************************
  End of Header Functions
************************************************************************************************************/