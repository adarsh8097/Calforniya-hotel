
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css ">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style> 
#myDIV {
  width: 100%;
  height: 100px;
  background: black;
  animation: mymove 5s infinite;
}

@keyframes mymove {
  100% {background-color: black;}
}
</style>
</head>

 <marquee class="marq" bgcolor = "black" direction = "left" loop="" >
        <div class="geek1" ><font size=15 color= "red"> <b>WELCOME ADMIN</b></font></div></marquee>
       
		<br>
<body>
<br>

<div class="container">
  <div class="row">
    <div class="col-sm-3">
	<a href ="admin.php"><b style="color:blue;font-size:20px;"><< Back</b></a>
	</div>
      <div class="col-sm-6">
        <div class="panel panel-success">
		
          <div class="panel-heading animate" id="myDIV"><center> <h1 style="font-family:Times New Roman"><font color= "white">Add Room Form </h1></center></div>
            <div class="panel-body">
              
              <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
                   <div class="form-group">
                     <label class="control-label col-sm-5" for="type" style="font-family:Verdana;">Room type:<span style="color: red;">&nbsp;*</span></label>
                        <div class="col-sm-6">
                           <select style= "weidth:25%" name="type" class="form-control col-sm-6"> 
	                          <option value="Single room"> Single room</option>
		                      <option value="Dubble room">Dubble room </option>
		                      <option value="Delux room"> Delux room </option>
	                        </select>
                        </div>
                    </div>
                        <div class="form-group">
                                <label class="control-label col-sm-5" for="price" style="font-family:Verdana;">Room Price:<span style="color: red;">&nbsp;*</span></label>
                            <div class="col-sm-6">
                                 <input type="integer" class="form-control" name="price" id="price" placeholder="Enter Price of room" required>
                             </div> 
                        </div>
                
                               
                         <div class="form-group">
                            <label class="control-label col-sm-5" for="img" style="font-family:Verdana;">Upload Room Pic:<span style="color: red;">&nbsp;*</span></label>
                           <div class="col-sm-6">
                             <input type="file" class="form-control" name="img" id="img" required>
                            </div>
                       </div>
			
               <center><input type="submit" class="btn btn-success" style="font-family: Verdana" name="add" id= "add" value="SUBMIT"></center>
              </form>
            </div>
			</div>
			
      
    
  </div>
</div>

</body> 
</html>
<?php
 include "connection.php";
 if(isset($_POST['add'])){
	 
	 $type= $_POST['type'];
	 $price=$_POST['price'];
	 $img_name=$_FILES['img']['name'];
	$tmp_name=$_FILES['img']['tmp_name'];
	move_uploaded_file($tmp_name,"uploadimg/".$img_name);
	
	$sql="insert into rooms values(DEFAULT,'$type',$price,'$img_name')";
	//echo $sql;
	$result=mysqli_query($conn,$sql);
	if($result==1){
		echo"<script>alert('Room added');</script>";
		
	}else{
		echo"<script>alert('Something went wrong.');</script>";
	}
 }




?>
