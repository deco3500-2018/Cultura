<?php
/*
 Ajax backend page for fetch data from mysql and send it to frontend..

*/

require_once('mysql_connect.php');
/* This function will print Array and Object in readable format */
function pr($Obj){
	echo '<pre>';
	  print_r($Obj);
	echo '</pre>';
}


$results = array();
if(isset($_POST)){
	// pr($_POST);
	/* Init the mysql query*/
	$query= "select * from practices, user where 1=1 ";
	
	$query.= " AND practices.userID=user.userID ";
	/*Check if country exist in POST then create query for country */
	if(!empty($_POST['country'])){
		$country= explode(',', $_POST['country']);
		$countryImplode = "'" .implode("','", $country  ) . "'"; 
		$query.= " AND pracCountry IN($countryImplode)";
	}
	if(!empty($_POST['category1'])){
		$category1= explode(',', $_POST['category1']);
		$category1Implode = "'" .implode("','", $category1  ) . "'"; 
		$query.= " AND categoryID IN($category1Implode)";
	}
	if(!empty($_POST['category2'])){
		$category2= explode(',', $_POST['category2']);
		$category2Implode = "'" .implode("','", $category2  ) . "'"; 
		$query.= " AND typeID IN($category2Implode)";
	}

	if(!empty($_POST['category3'])){
		$category3= explode(',', $_POST['category3']);
		$category3Implode = "'" .implode("','", $category3  ) . "'"; 
		$query.= " AND typeID IN($category3Implode)";
	}

	if(!empty($_POST['type'])){
		$type= explode(',', $_POST['type']);
		$typeImplode = "'" .implode("','", $type  ) . "'"; 
		$query.= " AND typeID IN($typeImplode)";
	}
	
	$query.= " ORDER BY RAND() limit 20";
	
	//echo $query;
	
	$qury = mysqli_query($link,$query);
	if(mysqli_num_rows($qury)==0){
		$results['status']='300';
		$results['Message'] = 'No Data Found.';
	}else{
		$template_row='';
		ob_start();
		include('repeat_template.php');
		$template_row = ob_get_contents();
		ob_get_clean();

		$results['status']='200';
		$results['template']=$template_row;	
		$results['Query']=$query;	
	}	
}else{
	  
	  $results['status']='100';
	  $results['Message'] = 'Invalid Post Request..';	
}
echo json_encode($results);
 ?>