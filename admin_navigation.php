<!--<nav style="position:absolute; top:28px; 
						right:100px;color:#fff; background-color:#015fa8;font-size:120%" 
		 class="fl-card-4 fl-animate-opacity fl-topnav">-->
<ul class="fl-navbar fl-animate-opacity fl-large fl-left-align" 
		style="position:absolute; top:20px; right:80px; color:#fff; background-color:#004d89">
  <li id='link0' class="fl-hide-large" >
    <a onclick="myFunction()"><img src="images/menu-icon-13.png" style="width:18px"/></a>
  </li>
  <li class="fl-hide-small fl-hide-medium"><a id='link1' href="admin_dashboard.php"><label style="font-size:115%">Home</label></a></li>
  <li class="fl-hide-small fl-hide-medium"><a id='link2' href="admin_details.php"><label style="font-size:115%">Details</label></a></li>
  <li class="fl-hide-small fl-hide-medium"><a id='link3' href="summarize.php"><label style="font-size:115%">Summarize</label></a></li>
  <li class="fl-hide-small fl-hide-medium"><a id='link4' href="admin.php"><label style="font-size:115%">Handle Details</label></a></li>
</ul>


<div id="demo" class="fl-card-4 fl-hide-large fl-hide">
  <ul class="fl-navbar fl-left-align fl-large" style="color:#fff; background-color:#015fa8;">
  <li><a id='link5' href="admin_dashboard.php">Home</a></li>
  <li><a id='link6' href="admin_details.php">Details</a></li>
  <li><a id='link7' href="summarize.php">Summarize</a></li>
  <li><a id='link8' href="admin.php">Handel Details</a></li>
  </ul>
</div>
	
<script>
function myFunction() {
    var x = document.getElementById("demo");
    if (x.className.indexOf("fl-show") == -1) {
        x.className += " fl-show";
    } else { 
        x.className = x.className.replace(" fl-show", "");
    }
}
</script>