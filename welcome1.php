<?php
session_start();
include('header.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>welcome.php</title>
	
</head>
<style type="text/css">
	.data li{
		clear: left;
		list-style: decimal;
	}
</style>
<body>
<h1>Student's datalist</h1>
<div class="container">
	<div class="row">
		
	</div>
</div>
<ul class="data">
<?php
if ($_SESSION['input8']=="Burmese" && $_SESSION['input12']=="+95 (Myanmar)") {
	//echo "<li>".$_SESSION['input1']."</li><li>".$_SESSION['input2']."</li><li>".$_SESSION['input3']."</li><li>".$_SESSION['input4']."</li><li>".$_SESSION['input5']."</li><li>".$_SESSION['input6']."</li><li>".$_SESSION['input7']."</li><li>".$_SESSION['input8']."</li><li>".$_SESSION['input9']."</li><li>".$_SESSION['input10']."</li><li>".$_SESSION['input11']."</li><li>".$_SESSION['input12']."</li><li>".$_SESSION['input13']."</li>";
	class User
{
  private $name;
  private $nameen;
  private $surnameen;
 
   

  function showInfo()
  {
	  echo "Name:". $this->name;

	  echo "&nbsp;".$this->nameen;
	  echo "&nbsp;".$this->surnameen;
	 ;
	  
  }
    function set_name($name)
    {
        $this->name=$name;
    }
    function get_name()
    {
        return $this->name;
	}
	
	function set_nameen($nameen)
    {
        $this->nameen=$nameen;
    }
    function get_nameen()
    {
        return $this->nameen;
	}
	function set_surnameen($surnameen)
    {
        $this->surnameen=$surnameen;
    }
    function get_surnameen()
    {
        return $this->surnameen;
	}
	
}
$user=new User();
$user->set_name($_SESSION['input2']);

$user->set_nameen($_SESSION['input3']);
$user->set_surnameen($_SESSION['input4']);

$user->showInfo();
}
else{
	echo "This student is not Myanmar";
}
?>	
</ul>
</body>
</html>