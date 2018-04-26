<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,
     shrink-to-fit=no, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <link rel="stylesheet" href="styled.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style type="text/css">
    	* {box-sizing: border-box}
		body {font-family: "Lato", sans-serif;}

		.tab {
		    float: left;
		    border: 1px solid #ccc;
		    background-color: #f1f1f1;
		    width: 30%;
		    height: 300px;
		}

		/* Style the buttons that are used to open the tab content */
		.tab button {
		    display: block;
		    background-color: inherit;
		    color: black;
		    padding: 22px 16px;
		    width: 100%;
		    border: none;
		    outline: none;
		    text-align: left;
		    cursor: pointer;
		    transition: 0.3s;
		}

		/* Change background color of buttons on hover */
		.tab button:hover {
		    background-color: #ddd;
		}

		/* Create an active/current "tab button" class */
		.tab button.active {
		    background-color: #ccc;
		}

		/* Style the tab content */
		.tabcontent {
		    float: left;
		    padding: 0px 12px;
		    border: 1px solid #ccc;
		    width: 70%;
		    border-left: none;
		    height: 300px;
		}
    </style>
</head>
<body>
<div class="container">
	<!-- <div class="card bg-secondary text-black"> -->
    <div class="card bg-secondary text-black">
      <h2 >Welcome to your dashboard <?php echo $login_session; ?> </h2>
    <a href="logout.php"><button name="logout" class="btn btn-danger" style="float:right; margin-right:100px;">Logout</button></a> 

    </div>

		<br>
		<div class="tab">
			  <button class="tablinks" onclick="openEvent(event, 'users')">Users</button>
			  <button class="tablinks" onclick="openEvent(event, 'Nok')">Next of kin</button>
		</div>
		<?php
			include('config.php');
			$sql_user = "SELECT * FROM `users_audit`";
			$run_user = mysqli_query($db,$sql_user);
			
		?>
		<div id="users" class="tabcontent">
		  <h3>USERS</h3>
		  <div class="table-responsive">
		  	<table border="1" bgcolor="#7fffd4">
          <thead>
              <th>First name</th>
              <th>Last name</th>
              <th>Middle name</th>
              <th>Phone number</th>
              <th>Email</th>
              <th>Modified on</th>
              <th>Action</th>
          </thead>
          <tbody>
          <?php
          $i = 1;
          while ($view = mysqli_fetch_array($run_user)) {
              $firstname = $view['firstname'];
              $lastname = $view['lastname'];
              $middlename = $view['middlename'];
              $phonenumber = $view['phonenumber'];
              $email = $view['email'];
              $modified = $view['modified'];
              $action = $view['action']
              ?>
              <tr>
                  <td> <?php echo $firstname; ?></td>
                  <td><?php echo $lastname;?></td>
                  <td><?php echo $middlename;?></td>
                  <td><?php echo $phonenumber;?></td>
                  <td><?php echo $email;?></td>
                  <td><?php echo $modified;?></td>
                  <td><?php echo $action;?></td>
              </tr>
              <?php
          }
          $i++;
          ?>
          </tbody>
      </table>
		  </div>
		</div>
		<?php
			include('config.php');
			$sql_nok = "SELECT * FROM `next_of_kin`";
			$run_nok = mysqli_query($db,$sql_nok);

		?>
		<div id="Nok" class="tabcontent">
		  <h3>NEXT OF KINS</h3>
		  <div class="table-responsive">
		  	<table border="1" bgcolor="#7fffd4">
          <thead>
          	  
          	  <th>User</th>
              <th>First name</th>
              <th>Last name</th>
              <th>Next of Kin Fname</th>
              <th>Next of Kin surname</th>
              <th>Relationship</th>
              <th>Contact</th>
              <th>Address 1</th>
              <th>Address 2</th>
              <th>Postal code</th>
              <th>City</th>
          </thead>
          <tbody>
          <?php
          $i = 1;
          while ($view = mysqli_fetch_array($run_nok)) {
              $user = $view['username'];
              $firstname = $view['firstname'];
              $lastname = $view['lastname'];
              $nokfname = $view['NokFname'];
              $noksurname = $view['NokSurname'];
              $relationship = $view['NokRelationship'];
              $contact = $view['NokContact'];
              $address1 = $view['NokAddress1'];
              $address2 = $view['NokAddress2'];
              $postalcode = $view['NokPostalcode'];
              $city = $view['NokCity']
              ?>
              <tr>
              	
              	  <td><?php echo $user;?></td>
                  <td> <?php echo $firstname; ?></td>
                  <td><?php echo $lastname;?></td>
                  <td><?php echo $nokfname;?></td>
                  <td><?php echo $noksurname;?></td>
                  <td><?php echo $relationship;?></td>
                  <td><?php echo $contact;?></td>
                  <td><?php echo $address1;?></td>
                  <td><?php echo $address2;?></td>
                  <td><?php echo $postalcode;?></td>
                  <td><?php echo $city;?></td>
              </tr>
              <?php
          }
          $i++;
          ?>
          </tbody>
      </table>
		  </div>
		</div>
	</div>
	

<!-- </div> -->
<script type="text/javascript">
	function openEvent(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
</body>
</html>