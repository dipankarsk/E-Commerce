<?php 
include 'core/int.php';
protect_page();
include 'includes/overall/overallheader.php';?>
		<h1>Alumni</h1>
		<h2>Message From The Alumni</h2>
		<p>
		 <form action="update.php" method="post">
		 <textarea rows="6" cols="50" name="msgalm">
		
         </textarea><br><br>
		 <h2>Events</h2>
         <textarea rows="6" cols="50" name="event">
		
         </textarea><br><br>		 
         <h2>Activities</h2>
         <textarea rows="6" cols="50" name="activities">
		
         </textarea><br><br>
		  
		 <input type="submit" name="update1" value="update"/>
		 </form>
	
		 </p>
<?php include 'includes/overall/overallfooter.php';?>