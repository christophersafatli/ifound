<?php
// Navbar background color on click
$currentpage= basename($_SERVER['PHP_SELF']);
   
   $active  = '';
   $active1 = '';
   $active2 = '';
   $active3 = '';
   $active4 = '';
   $active5 = '';
   
   if($currentpage == 'index.php'){
	   $active = 'class="active"'; 
   }
   
   if($currentpage == 'profile.php'){
	   $active1 = 'class="active"'; 
   }
   if($currentpage == 'item.php'){
	   $active2 = 'class="active"'; 
   }
   if($currentpage == 'depositories.php'){
	   $active3 = 'class="active"'; 
   }
   if($currentpage == 'contact.php'){
	   $active4 = 'class="active"'; 
   }
   
   if($currentpage == 'donate.php'){
	   $active5 = 'class="active"'; 
   }
// END Navbar background color on click
?>