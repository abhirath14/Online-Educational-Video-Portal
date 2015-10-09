<?php
$s=$_POST["search"];
$conn=new mysqli("localhost","root","admin","Video");
$sql="SELECT * FROM Latex WHERE Name LIKE '%$s%'";
$result=$conn->query($sql);

if ($result->num_rows > 0)
{
    while($row = $result->fetch_assoc())
    {
	echo '
		<a href="display.php?data='.$row["ID"].'">
			<img src="latex.png" alt="Video" style="width:120px;height:90px;border:0">
  			'.$row["Name"]."<br>".'
  		
		</a>';
    }
}
else
{
	$s=$_POST["search"];
	$conn=new mysqli("localhost","root","admin","Video");	
	$sql="SELECT * FROM Introduction_to_Algorithms WHERE Name LIKE '%$s%'";
	$result=$conn->query($sql);
	if ($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc())
		{
	   		echo '
			<a href="display.php?data='.$row["ID"].'">
  			<img src="algo.jpg" alt="Video" style="width:120px;height:90px;border:0">
  			'.$row["Name"]."<br>".'
  		
		</a>';
	    }
    }
	else
	{
		$s=$_POST["search"];
		$conn=new mysqli("localhost","root","admin","Video");
		$sql="SELECT * FROM C WHERE Name LIKE '%$s%'";
		$result=$conn->query($sql);
		if ($result->num_rows > 0)
		{
	    	while($row = $result->fetch_assoc())
	    	{
				echo '
				<a href="display.php?data='.$row["ID"].'">
  				<img src="C.png" alt="Video" style="width:120px;height:90px;border:0">
  				'.$row["Name"]."<br>".'
				</a>';
    		}
    	}
		else
		{
			$s=$_POST["search"];
			$conn=new mysqli("localhost","root","admin","Video");
			$sql="SELECT * FROM Python WHERE Name LIKE '%$s%'";
			$result=$conn->query($sql);
			if ($result->num_rows > 0)
			{
			    while($row = $result->fetch_assoc())
			    {
					echo '
					<a href="display.php?data='.$row["ID"].'">
			  			<img src="Python.png" alt="Video" style="width:120px;height:90px;border:0">
			  			'.$row["Name"]."<br>".'  		
					</a>';
			    }
			}
			else
			{
				$s=$_POST["search"];
				$conn=new mysqli("localhost","root","admin","Video");
				$sql="SELECT * FROM GIMP WHERE Name LIKE '%$s%'";
				$result=$conn->query($sql);
				if ($result->num_rows > 0)
				{
    				while($row = $result->fetch_assoc())
    				{
   						echo '
						<a href="display.php?data='.$row["ID"].'">
  						<img src="GIMP.png" alt="Video" style="width:120px;height:90px;border:0">
  						'.$row["Name"]."<br>".'
						</a>';
					}
    			}
				else
				{
					$s=$_POST["search"];
					$conn=new mysqli("localhost","root","admin","Video");
					$sql="SELECT * FROM Java WHERE Name LIKE '%$s%'";
					$result=$conn->query($sql);
					if ($result->num_rows > 0)
					{
    					while($row = $result->fetch_assoc())
    					{
							echo '
							<a href="display.php?data='.$row["ID"].'">
  							<img src="Java.png" alt="Video" style="width:120px;height:90px;border:0">
  							'.$row["Name"]."<br>".'
							</a>';
		    			}
		    		}
					else
					{
						$s=$_POST["search"];
						$conn=new mysqli("localhost","root","admin","Video");
						$sql="SELECT * FROM PHP WHERE Name LIKE '%$s%'";
						$result=$conn->query($sql);
						if ($result->num_rows > 0)
						{
    						while($row = $result->fetch_assoc())
    						{
								echo '
								<a href="display.php?data='.$row["ID"].'">
  								<img src="PHP.png" alt="Video" style="width:120px;height:90px;border:0">
  								'.$row["Name"]."<br>".'	
								</a>';
   							}
   						}
						else
						{
							echo "0 Results";
						}
					}

		}
	}

}
}
}
?>
