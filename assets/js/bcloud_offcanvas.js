function openNav(event){
  jQuery(this).siblings(".sidenav").css({'width': '250px'});
  //document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
   jQuery(".cover").addClass("sidenav-active");
}

function closeNav() {
  jQuery(this).parent().css({'width': '0px'});
 // document.body.style.backgroundColor = "#fff";
 jQuery(".cover").removeClass("sidenav-active"); 
  
}

jQuery(document).ready(function () {
			jQuery(".open_off_canvas").click(openNav);
			jQuery(".closebtn").click(closeNav);
});
	