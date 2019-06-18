<?php
require_once('ConnectToBd.php');

function calcM($date1,$date2,$user)
{
	$dbConn=connDb();
	$queryStr="SELECT SUM(`longAll`)as suma FROM `BurTable` WHERE date >=' $date1' and date <=' $date2' and user='$user'";
	$result=$dbConn->query($queryStr);
	$res=$result->fetchAll(PDO::FETCH_ASSOC);
	return $res;
}
 function getAllMarkers()
{
	$dbConn=connDb();
	$queryStr='SELECT * FROM Markers ';
	$product=$dbConn->query($queryStr);
	$result=$product->fetchAll(PDO::FETCH_ASSOC);
	return $result;
}	

 function getAll()
{
	$dbConn=connDb();
	$queryStr='SELECT * FROM BurTable order by date desc';
	$product=$dbConn->query($queryStr);
	$result=$product->fetchAll(PDO::FETCH_ASSOC);
	return $result;
}	
function getAllr($user)
{
	$dbConn=connDb();
	$queryStr="SELECT * FROM BurTable WHERE user='$user' order by date desc";
	$product=$dbConn->query($queryStr);
	$result=$product->fetchAll(PDO::FETCH_ASSOC);
	return $result;
}	
	function getFind($adrress,$user){
		$dbConn=connDb();
	$queryStr="SELECT * FROM BurTable  where adrress like '%$adrress%'and user='$user' order by date desc";
	$product=$dbConn->query($queryStr);
	$result=$product->fetchAll(PDO::FETCH_ASSOC);
	return $result;
	}
	
	 function addDataMarkers($lat,$lng,$name){
 	$status=0;
 	
 	try{
		
		$dbConn=connDb();
		$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$queryStr="INSERT INTO `Markers`(`id`,`lat`,`lng`,`name`) VALUES(NULL, :lat, :lng, :name)";
		
		$marker=$dbConn->prepare($queryStr);
		$marker->bindParam(':lat',$lat);
		$marker->bindParam(':lng',$lng);
		$marker->bindParam(':name',$name);
		
		$marker->execute();
		$status=1;	
	}
	catch(PDOExeption $e)
							{
								$status=0;
								echo $e->getMesseges();
							}
			
			
		
		
		return $status;
	
 }
	function addData($adrress,$longAll,$features,$nuances,$cut,$date,$person,$user)
	{
		$status=0;
		
			try
			{
				
			$dbConn=connDb();
			$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$queryStr="INSERT INTO `BurTable` (`id`, `adrress`, `date`, `features`, `longAll`, `nuances`, `cut`,`person`,`user`) VALUES (NULL, :adrress, :date, :features, :longAll, :nuances, :cut, :person, :user) ";
			$product=$dbConn->prepare($queryStr);
			$product->bindParam(':adrress',$adrress);
			$product->bindParam(':person',$person);
			$product->bindParam(':longAll',$longAll);
			$product->bindParam(':date',$date);
			$product->bindParam(':features',$features);
			$product->bindParam(':nuances',$nuances);
			$product->bindParam(':cut',$cut);
			$product->bindParam(':user',$user);
			
			
			$product->execute();
					$status=1;		
							}
		
							catch(PDOExeption $e)
							{
								$status=0;
								echo $e->getMesseges();
							}
			
			
		
		
		return $status;
		
	}
	
function deleteData($id)
{
	$dbConn=connDb();
	$queryStr='delete from BurTable where id= :id';
	$product=$dbConn->prepare($queryStr);
	$product->bindParam(':id',$id);
	$product->execute();
}
function signIn($login,$pass)
{
$status=null;
	$dbConn=connDb();
	$queryStr='SELECT * FROM Users where login=:login and pass=:pass';
	$product=$dbConn->prepare($queryStr);
	$product->bindParam(':login',$login);
	$product->bindParam(':pass',$pass);
	$product->execute();
	$result=$product->fetchAll(PDO::FETCH_ASSOC);
	return $result;
	
	
}
function updateData($id)
{
	$dbConn=connDb();
	$queryStr='SELECT * FROM BurTable where id= :id';
	$product=$dbConn->prepare($queryStr);
	$product->bindParam(':id',$id);
	$product->execute();
	$result=$product->fetchAll(PDO::FETCH_ASSOC);
	return $result;
}
function updateToId($id,$adrress,$longAll,$features,$nuances,$cut,$date,$person)
{
	$dbConn=connDb();
	$queryStr="update BurTable set adrress=:adrress, longAll=:longAll, features=:features, nuances=:nuances,cut=:cut,date=:date,person=:person where id= :id";
	$product=$dbConn->prepare($queryStr);
	$product->bindParam(':id',$id);
	$product->bindParam(':adrress',$adrress);
			$product->bindParam(':person',$person);
			$product->bindParam(':longAll',$longAll);
			$product->bindParam(':date',$date);
			$product->bindParam(':features',$features);
			$product->bindParam(':nuances',$nuances);
			$product->bindParam(':cut',$cut);
	
	$product->execute();
	
}