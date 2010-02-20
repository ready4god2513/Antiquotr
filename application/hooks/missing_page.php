<?php
	class Missing_Page {
		
		function reroute(){
			url::redirect('quote/missing', 301);
		}
	}
	
	Event::clear('system.404', array('Kohana', 'show_404')); 
	Event::add('system.404',array('Missing_Page','reroute'))
?>