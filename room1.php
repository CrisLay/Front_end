<?php include 'includes/conn.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Room 1</title>
 <meta http-equiv="refresh" content="1"> 
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	 
	  <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bowlby+One&family=Lexend+Exa:wght@300&display=swap" rel="stylesheet">
	
<header>
	<div class="roomdiv">
		
		<p class="titlep">IOT BASED WEARABLE DEVICE FOR COVID-19 PATIENT WITH MONITORING SYSTEM</p>
	</div> 
		
	
	<p>Room No.:  </p>
	<p>	Wearable Device IP: </p>

</header>

 
<h1 style="">VITAL SIGNS</h1> 

<div class="vitaldiv">

<div class="tempdiv">
 <p class="pvit">Temperature</p> 

 <div class="temp"> <i class="fa fa-thermometer-half" style="font-size:7.0rem;color:#62a1d3; "></i> 

 </div>
<div class="pvit">
      <table>
          <thead>
           <!--<th>Temperature</th>-->
          </thead>
<tbody>
  <?php
                    $sql = "SELECT temp FROM vitals_t where vitals_id=1";

                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      echo "
                        <tr>
                          <td>".$row['temp']."°C</td>";
                        }
                          ?>

</tbody>
        </table>

</div> 
</div>

<div class="hrdiv">
<p class="pvit">Heart Rate</p> 
<div class="heart"></div>
 <br>
 <div class="pvit">
  <table>
          <thead>
           <!-- <th>Temperature</th>-->
          </thead>
<tbody>
  <?php
                    $sql = "SELECT heart_rate FROM vitals_t where vitals_id=1";

                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      echo "
                        <tr>
                          <td>".$row['heart_rate']." BPM</td>";
                        }
                          ?>

</tbody>
        </table>

 </div> 
</div>
<div class="oxdiv">
<p class="pvit">Oxygen Level</p> 
<div class="oxygensat" 
     style="--percentage : 80; --fill:  #e04c3c;">
    
</div>
 <div class="pvit">

  <table>
          <thead>
           <!-- <th>Temperature</th>-->
          </thead>
<tbody>
  <?php
                    $sql = "SELECT oxygen_lvl FROM vitals_t where vitals_id=1";

                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      echo "
                        <tr>
                          <td>".$row['oxygen_lvl']." %</td>";
                        }
                          ?>

</tbody>
        </table>

</div>
</div>
    
</div>





</body>
</html>
