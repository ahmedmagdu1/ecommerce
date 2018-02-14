<?php
// Social And Meta Tags Functions
// Page Title function //
function getTitle(){	
	global $PageTitle;
	if(isset($PageTitle)){echo $PageTitle;}
	else{echo 'Adsesta.com | Buy Or Sell Anything Anywhere';}}

// Page Description function //
function getDesc(){	
	global $PageDescription;
	if(isset($PageDescription)){echo $PageDescription;}
	else{echo 'adsesta.com free services for all to let any one buy or sell anything anywhere 
			   Create Your Free Account On adsesta.com Website And Buy Or Sell Anything Anywhere
			   ';}}

// Page Meta Image function //
function getImage(){	
	global $PageImage;
	if(isset($PageImage)){echo $PageImage;}
	else{echo '/layout/images/logo.png';}}


//Get All Function

 function getAllFrom($field, $table, $where = NULL, $and = NULL, $orderfield, $ordering = "DESC"){
	 global $con;
	 $getAll = $con->prepare("SELECT $field FROM $table $where $and ORDER BY $orderfield $ordering");
	 $getAll->execute();
	 $all = $getAll->fetchAll();
	 return $all;
 }
 
 



			
	/* Get categories From Database v1.0*/
	/* Function To get Categories from Database */

	function getCat(){
		global $con;
		$getCat = $con->prepare("SELECT * FROM categories WHERE parent=0  ORDER BY ID ASC ");
		$getCat->execute();
		$cats = $getCat->fetchAll();
		return $cats;
	}
	
	
				
	/* Get Items Function v1.0 */
	/* Function To get Items from Database */

	function getItems($where, $value){
		global $con;
		$getItems = $con->prepare("SELECT * FROM items WHERE $where = ? AND Approve = 1 ORDER BY Item_Id DESC ");
		$getItems->execute(array($value));
		$items = $getItems->fetchAll();
		return $items;
	}
	
	
	
	
	
/* redirecting function [this function accept parameters] 

** $errorMsg = echo the error message
** $seconds = seconds before redirecting
*/
function redirectHome($theMsg,$url= null, $seconds = 3){
	if ($url === null){
		$url = 'index.php';
	} else{
		if(isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] !== ''){
		$url = $_SERVER ['HTTP_REFERER'];
	} else{
		$url= 'index.php';
	}
	}
	echo $theMsg;
	echo "<div class='alert alert-info'> You Will Be Redirect To $url After $seconds Seconds.</div>";
	header("refresh:$seconds;url=$url");
	exit();
}
/* check Items Function v1.0
** Function To Check Items In Database 
** $select = The Item To Select [ Example: user, item, category ]
** $from = The Table To Select From [ Example: users, items, categories]
** $value = The Value Of Select [ Example: ahmed, box, electronics]
*/

function checkItem($select, $from, $value){
	global $con;
	$statement = $con->prepare("SELECT $select FROM $from WHERE $select = ?");
    $statement->execute(array($value));
    $count = $statement->rowCount();	
	return $count;
	}
	
	
	/* Count Items Function V1.0 
    ***	function to count number of items in row 
	** $item = the item to count
	** $table = the table to choose from*/
	
	function countItems($item, $table){
		global $con;
		$stmt2 = $con->prepare("SELECT COUNT($item) FROM $table");
		$stmt2->execute();
		return $stmt2->fetchColumn();
	}
	
	
	/*
	** Get Latest Records From Database v1.0
	** Function To Get The Latest items From The Database [user - items - comments]
	** $select = Field To Select
	** $table = Table to Choose From
	** $limit = Number Of Records To Get
	*/
	function getLatest($select, $table, $order, $limit=5){
		global $con;
		$getStmt = $con->prepare("SELECT $select FROM $table WHERE Approve = 1 ORDER BY $order DESC LIMIT $limit");
		$getStmt->execute();
		$rows = $getStmt->fetchAll();
		return $rows;
	}
	