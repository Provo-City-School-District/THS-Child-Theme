<div class="dropDownColumn">
	<?php 
		//checks if this template section is loading into the menu or into the sidebar/content area and assigns the proper heading
		if(is_page( 'school-information' ) || in_array( 43177, get_post_ancestors($post))){
			?>
			<h2><img src="https://timpview.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/calendars.svg" alt="" />Calendars</h2>
			<?php	
		} else {
			?>
			<h3><img src="https://timpview.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/calendars.svg" alt="" />Calendars</h3>
			<?php
		}	
	?>
		<ul>
			<li class="int"><a href="https://timpview.provo.edu/about-timpview/bell-schedule/">Bell Schedule</a></li>
			<li class="int"><a href="https://timpview.provo.edu/wp-content/uploads/2021/07/THS-21-22-Odd-Even-Calendar.pdf">Odd/Even Calendar</a></li>
			<li class="int"><a href="https://timpview.provo.edu/school-information/school-events-calendar/">School Calendar</a></li>
            <li class="int"><a href="https://timpview.provo.edu/about-timpview/school-year-calendar/">District Calendar</a></li>
		</ul>	
		<?php 
		//checks if this template section is loading into the menu or into the sidebar/content area and assigns the proper heading
		if(is_page( 'school-information' ) || in_array( 43177, get_post_ancestors($post))){
			?>
			<h2><img src="https://timpview.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/school-info.svg" alt="" />Library Media Center</h2>
			<?php	
		} else {
			?>
			<h3><img src="https://timpview.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/school-info.svg" alt="" />Library Media Center</h3>
			<?php
		}	
	?>
		<ul>
			<li class="int"><a href="https://timpview.provo.edu/school-information/library-media-center/">Library Media Center</a></li>
		</ul>	
</div>
<div class="dropDownColumn">
	<?php 
		//checks if this template section is loading into the menu or into the sidebar/content area and assigns the proper heading
		if(is_page( 'school-information' ) || in_array( 43177, get_post_ancestors($post))){
			?>
			<h2><img src="https://timpview.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/school-info.svg" alt="" />About Timpview</h2>
			<?php	
		} else {
			?>
			<h3><img src="https://timpview.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/school-info.svg" alt="" />About Timpview</h3>
			<?php
		}	
	?>
	
		<ul>
			<li class="int"><a href="https://timpview.provo.edu/about-timpview/contact-our-school/">Contact Our School</a></li>
            <li class="int"><a href="https://timpview.provo.edu/about-timpview/hours-of-operation/">Hours of Operation</a></li>
            <li class="int"><a href="https://timpview.provo.edu/about-timpview/school-profile/">School Profile</a></li>
       <!--     <li class="int"><a href="https://timpview.provo.edu/about-timpview/achievement-data/">Achievement Data</a></li> -->
            <li class="int"><a href="https://timpview.provo.edu/about-timpview/community-council/">Community Council</a></li>
            <li class="int"><a href="https://provo.edu/transportation/find-your-bus-route/">Bus Routes</a></li>
            <li class="int"><a href="https://timpview.provo.edu/timpview-map/">School Map</a></li>
		</ul>
</div>
<div class="dropDownColumn">
	<?php 
		//checks if this template section is loading into the menu or into the sidebar/content area and assigns the proper heading
		if(is_page( 'school-information' ) || in_array( 43177, get_post_ancestors($post))){
			?>
			<h2><img src="https://timpview.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/school-meals.svg" alt="" />School Meals</h2>
			<?php	
		} else {
			?>
			<h3><img src="https://timpview.provo.edu/wp-content/themes/pcsd-2019-theme/assets/icons/school-meals.svg" alt="" />School Meals</h3>
			<?php
		}	
	?>
	
		<ul>
			<?php
				$cnmenuhandle = curl_init();
				$cnmenuurl = "https://globalassets.provo.edu/globalpages/childNutritionMenu.php";
				// Set the url
				curl_setopt($cnmenuhandle, CURLOPT_URL, $cnmenuurl);
				// Set the result output to be a string.
				curl_setopt($cnmenuhandle, CURLOPT_RETURNTRANSFER, true);
				$cnmenuoutput = curl_exec($cnmenuhandle);
				// close the curl connection
				curl_close($cnmenuhandle); 
				echo $cnmenuoutput;
			?>
		</ul>
	
</div>