<?php 
	
	define(BASEDIR_FR, "http://localhost:8888");
	define(BASEDIR_EN, "http://localhost:8888/en");
	
	if(isset($_GET['q'])){
		$GET['SAFE'] = (strlen(['q']) > 10) ? 'home' : htmlentities($_GET['q']);
		$whiteList = array("home","services","paas","contact");
		
		if(!in_array($GET['SAFE'], $whiteList)){
			include('views/404.php');
			exit;
		}
		else{
			
			switch($GET['SAFE']){
				case "home":
				$_home_class = "current"; $_services_class = ""; $_paas_class = ""; $_contact_class = "";
				break;
				
				case "services":
				$_home_class = ""; $_services_class = "current"; $_paas_class = ""; $_contact_class = "";
				break;
				
				case "paas":
				$_home_class = ""; $_services_class = ""; $_paas_class = "current"; $_contact_class = "";
				break;
				
				case "contact":
				$_home_class = ""; $_services_class = ""; $_paas_class = ""; $_contact_class = "current";
				break;
				
				default:
				$_home_class = "current"; $_services_class = ""; $_paas_class = ""; $_contact_class = "";
				break;
			}
			
			include('views/'.$GET['SAFE'].'.php');
			exit;	
		}
	}
	
	include('views/home.php');
	exit;
?>