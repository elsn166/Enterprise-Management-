<?php

$test = $_GET['var_PHP_data'];

echo '






<!DOCTYPE html>
<html lang="en">
<head>
	<title>New Security Data Entry | MD5</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<!--<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" href="css/header-1.css">
<!--===============================================================================================-->
</head>
<body>
	
	 <!-- Header Start -->
	<header class="site-header">
      <div class="wrapper site-header__wrapper container">
        <a href="#" class="brand">Brand</a>
        <nav class="nav">
          <a class="nav__toggle">
		  	<i class="fa fa-bars" type="button" onclick="openNav()"></i>
          </a>
          <ul class="nav__wrapper">
            <!--<li class="nav__item"><a href="#">Home</a></li>-->
            <li class="nav__item active" onclick="load1();"><a class="actv" href="index.php">New Security Data Entry</a></li>
            <li class="nav__item" onclick="load2();"><a href="index2.php">Registered Security Data Entry</a></li>
            <li class="nav__item"><a href="tab.php">New Security Data Entry List</a></li>
            <li class="nav__item"><a href="tab2.php">Registered Security Data Report</a></li> 
          </ul>
        </nav>
      </div>
    </header>


	<div id="mySidenav" class="sidenav d-md-none">
		<div class="text-left mt-3">
			<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<!--<a href="#">Home</a>-->
			<a class="actv sidenav__font" href="index.php">New Security Data Entry</a>
			<a class="sidenav__font" href="index2.php">Registered Security Data Entry</a>
			<a class="sidenav__font" href="tab.php">New Security Data Entry List</a>
			<a class="sidenav__font" href="tab2.php">Registered Security Data Report</a>
		</div>
	</div>

	
            <div class="buton" style="text-align: right; background: #f5fafc;">
		        <a href="upload.php" class="btn btn-warning" style= "margin-right: 1.4rem; margin-top: 1rem;">Change Database</a>
		    </div>
	   


    <!-- Header End -->

	<div class="limiter">
		<div class="container-login100 container-fluid">
			<div class="wrap-login100 p-t-65 p-b-50">
				<form class="login100-form validate-form"  method="POST" id="form1"  name="form1"    enctype="multipart/form-data"  action="view.php"  >
					<span class="login100-form-title p-b-33">
					New Security Data Entry
					</span>
					
				

					<div class="container-fluid">
						<div class="row">
							<div class="col-12">
								<div class="container">
									<div class="row">
										<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
										
										
										
																					<div class="wrap-input100">
												<label class="px-3 py-2" for="customFile">Enquiry ID</label>
												<input type="number" class="p-3 input100"  value = '.$test.'
												
												
												
												
												
												
												name="customID"   id="customID">
											</div>
										
										
											<div class="wrap-input100">
												<label class="px-3 py-2" for="customFile">Your Profile Picture</label>
												<input type="file" class="p-3 input100"   name="customFile"   id="customFile">
											</div>

											<div class="wrap-input100">
												<input class="input100" type="text"   value = '.$test.'   name="name" placeholder="Name" required>
												<span class="focus-input100-1"></span>
												<span class="focus-input100-2"></span>
											</div>

											<div class="wrap-input100">
												<input class="input100" type="number" name="age" placeholder="Approx Age" required>
												<span class="focus-input100-1"></span>
												<span class="focus-input100-2"></span>
											</div>

											<div class="wrap-input100 rs1">
											   <label class="px-3 py-2" for="customFile">Date Of Birth</label>
												<input class="input100" type="date" name="dob" placeholder="" required>
												<span class="focus-input100-1"></span>
												<span class="focus-input100-2"></span>
											</div>

											<div class="wrap-input100 rs1">
												<select class="input100 border-0 p-3"  name="agegroup"   required>
													<option value="age_group" selected disabled>Age Group</option>
													<option value="18to30">18 - 30</option>
													<option value="31to40">31 - 40</option>
													<option value="41to50">41 - 50</option>
													<option value="51to60">51 - 60</option>
													<option value="above60">Above 60</option>
													<option value="61to65">61 - 65</option>
													<option value="above65">Above 65</option>
												</select>
												<span class="focus-input100-1"></span>
												<span class="focus-input100-2"></span>
											</div>


											<div class="multiselect wrap-input100">
												<div class="selectBox" onclick="showCheckboxes()">
												<select class="p-3 border-0"  >
													<option class="input100">Qualification</option>
												</select>
												<div class="overSelect"></div>
												</div>
												<div id="checkboxes">
												<label for="one"><input type="checkbox" name="colour[]" id="one" value="1 - 7 Std" />&nbsp;1 - 7 Std</label>
												<label for="two"><input type="checkbox" id="two" name="colour[]"  value="8 - 10 Std" />&nbsp;8 - 10 Std</label>
												<label for="three"><input type="checkbox" id="three" name="colour[]" value="10 - 12 Std" />&nbsp;10 - 12 Std</label>
												<label for="four"><input type="checkbox" id="four" name="colour[]" value="Degree / Post Graduate" />&nbsp;Degree / Post Graduate</label>
												<label for="five"><input type="checkbox" id="five" name="colour[]" value="Degree Distontinue" />&nbsp;Degree Distontinue</label>
												<label for="six"><input type="checkbox" id="six" name="colour[]" value="Not Educated" />&nbsp;Not Educated</label>
												</div>
											</div>



											<div class="multiselect wrap-input100">
												<div class="selectBox" onclick="showCheckboxes1()">
												<select class="p-3 border-0">
													<option>Language Proficiency</option>
												</select>
												<div class="overSelect"></div>
												</div>
												<div id="checkboxes1">
												<label for="one1"><input type="checkbox" id="one1" name="colour1[]" value="Not Educated"  />&nbsp;Not Educated</label>
												<label for="two2"><input type="checkbox" id="two2" name="colour1[]" value="Tamil Read & Write" />&nbsp;Tamil Read & Write</label>
												<label for="three3"><input type="checkbox" id="three3" name="colour1[]" value="Tamil Read"  />&nbsp;Tamil Read</label>
												<label for="four4"><input type="checkbox" id="four4" name="colour1[]" value="English Read & Write" />&nbsp;English Read & Write</label>
												<label for="five5"><input type="checkbox" id="five5"name="colour1[]" value="English Read" />&nbsp;English Read</label>
												<label for="six6"><input type="checkbox" id="six6" name="colour1[]" value="Only Sign" />&nbsp;Only Sign</label>
												</div>
											</div>


											<div class="wrap-input100">
												<input class="input100" type="text" name="other_lang" placeholder="Other Languages" required>
												<span class="focus-input100-1"></span>
												<span class="focus-input100-2"></span>
											</div>


											<div class="wrap-input100">
												<input class="input100" type="number" name="phone1" id="phone1" onchange="phonenumber(document.form1.phone1)"           placeholder="Mobile No *" maxlength="10" required>
												<span class="focus-input100-1"></span>
												<span class="focus-input100-2"></span>
											</div>


											<div class="wrap-input100">
												<input class="input100" type="number" name="phone2" id="phone2"   onchange="phonenumber(document.form1.phone2)"    placeholder="Phone No" maxlength="10">
												<span class="focus-input100-1"></span>
												<span class="focus-input100-2"></span>
											</div>

											<div class="wrap-input100">
												<input class="input100" type="number" name="phone3" id="phone3"     onchange="phonenumber(document.form1.phone3)"        placeholder="Emergency No *" required>
												<span class="focus-input100-1"></span>
												<span class="focus-input100-2"></span>
											</div>

										</div>

										<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
											<div class="wrap-input100">
												<label class="px-3 py-2" for="customFile1">Address</label>
												<input type="file" class="p-3 input100" id="customFile1"  name="customFile1" >
											</div>


											<div class="wrap-input100 rs1">
												<select class="input100 border-0 p-3"  name="city"   required>
													<option value="city" selected disabled>Select City</option>
													<option value="ammapettai">Ammapettai</option>
													<option value="anthiyur">Anthiyur</option>
													<option value="appakudai">Appakudai</option>
													<option value="arachalur">Arachalur</option>
													<option value="ariyappampalayam">Ariyappampalayam</option>
													<option value="athani">Athani</option>
													<option value="avalpoondurai">Avalpoondurai</option>
													<option value="bhavani">Bhavani</option>
													<option value="bhavanisagar">Ahavanisagar</option>
													<option value="
													chennasamudram">
													Chennasamudram</option>
													<option value="chennimalai">Chennimalai</option>
													<option value="chinnakkampalayam">Chinnakkampalayam</option>
													<option value="elathur">Elathur</option>
													<option value="elumathur">Elumathur</option>
													<option value="gobichettipalayam">Gobichettipalayam</option>
													<option value="jambai">Jambai</option>
													<option value="kanjikoil">Kanjikoil</option>
													<option value="karumandi chellipalayam">Karumandi Chellipalayam</option>
													<option value="kasipalayam-gobi">Kasipalayam-Gobi</option>
													<option value="kembainaickenpalayam">Kembainaickenpalayam</option>
													<option value="kilampadi">Kilampadi</option>
													<option value="kodumudi">Kodumudi</option>
													<option value="kolappalur">Kolappalur</option>
													<option value="kollankoil">Kollankoil</option>
													<option value="kuhalur">Kuhalur</option>
													<option value="lakkampatti">Lakkampatti</option>
													<option value="mettunasuvanpalayam">Mettunasuvanpalayam</option>
													<option value="modakurichi">Modakurichi</option>
													<option value="nallampatti">Nallampatti</option>
													<option value="nambiyur">Nambiyur</option>
													<option value="nasiyanur">Nasiyanur</option>
													<option value="nerunjipettai">Nerunjipettai</option>
													<option value="olagadam">Olagadam</option>
													<option value="p. mettupalayam">P. Mettupalayam</option>
													<option value="pallapalayam">Pallapalayam</option>
													<option value="pasur">Pasur</option>
													<option value="periyakodiveri">Periyakodiveri</option>
													<option value="perundurai">Perundurai</option>
													<option value="pethampalayam">Pethampalayam</option>
													<option value="punjai puliampatti">Punjai Puliampatti</option>
													<option value="salangapalayam">Salangapalayam</option>
													<option value="sathyamangalam">Sathyamangalam</option>
													<option value="sivagiri">Sivagiri</option>
													<option value="vadugapatti">Vadugapatti</option>
													<option value="vaniputhur">Vaniputhur</option>
													<option value="vellakoil">Vellakoil</option>
													<option value="vellottamparappu">Vellottamparappu</option>
													<option value="vengampudur">Vengampudur</option>
												</select>
												<span class="focus-input100-1"></span>
												<span class="focus-input100-2"></span>
											</div>
											
											<div class="wrap-input100">
												<input class="input100" type="text" name="other_city" placeholder="Other City">
												<span class="focus-input100-1"></span>
												<span class="focus-input100-2"></span>
											</div>


											<div class="wrap-input100 rs1">
												<select class="input100 border-0 p-3"  name="vehicle"  required>
													<option value="age_group" selected disabled>Vehicle</option>
													<option value="2wheeler">Two Wheeler</option>
													<option value="cycle">Cycle</option>
													<option value="no">No</option>
												</select>
												<span class="focus-input100-1"></span>
												<span class="focus-input100-2"></span>
											</div>


											<div class="wrap-input100">
												<label class="px-3 py-2" for="customFile2">Writing Test</label>
												<input type="file" class="p-3 input100" id="customFile2" name="customFile2"  >
											</div>

											<div class="wrap-input100 rs1">
												<select class="input100 border-0 p-3" required  name="duty" >
													<option value="age_group" selected disabled>Duty Preference</option>
													<option value="dorn">Day or Night</option>
													<option value="day">Day Only</option>
													<option value="night">Night</option>
													<option value="dornalter">Day / Night Alternative</option>
												</select>
												<span class="focus-input100-1"></span>
												<span class="focus-input100-2"></span>
											</div>

											<div class="wrap-input100">
												<input class="input100" type="text" name="salary" placeholder="Salary Expectation">
												<span class="focus-input100-1"></span>
												<span class="focus-input100-2"></span>
											</div>

											<div class="wrap-input100 rs1">
												<select class="input100 border-0 p-3" required name="join" >
													<option value="age_group" selected disabled>Immediate Join</option>
													<option value="yes">Yes</option>
													<option value="no">No</option>
												</select>
												<span class="focus-input100-1"></span>
												<span class="focus-input100-2"></span>
											</div>

											<div class="wrap-input100">
											       <label class="px-3 py-2" for="customFile">Particular Date</label>
												<input class="input100" type="date" name="particular_date" placeholder="Particular Date">
												<span class="focus-input100-1"></span>
												<span class="focus-input100-2"></span>
											</div>

											<div class="wrap-input100 rs1">
												<select class="input100 border-0 p-3" required name="reliever" >
													<option value="age_group" selected disabled>Reliever Duty Preference</option>
													<option value="yes">Yes</option>
													<option value="no">No</option>
													<option value="temp">Temporarily</option>
												</select>
												<span class="focus-input100-1"></span>
												<span class="focus-input100-2"></span>
											</div>

										</div>
									</div>
								</div>

								<!-- Submit button -->
								<div class="container btn__container">
									<div class="row">
										<div class="col">
											<div class="container-login100-form-btn m-t-20">
												<button type="submit" name="submit"  id="insert" class="login100-form-btn" style="font-family: "Poppins", Sans-serif;">
													Submit
												</button>
											</div>
										</div>
									</div>
								</div>
								
						
							</div>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<script>
		function load1() {
			location.replace("index.php");
		}

		function load2() {
			location.replace("index2.php");
		}
	</script>

	<script>
		function openNav() {
			document.getElementById("mySidenav").style.width = "100%";
		}

		function closeNav() {
			document.getElementById("mySidenav").style.width = "0";
		}
	</script>

	<script>
	
	
	function phonenumber(inputtxt)
{
  var phoneno = /^\d{10}$/;
  if(inputtxt.value.match(phoneno))
  {
      return true;
  }
  else
  {
     alert("Enter a valid Phone Number");
     return false;
     document.getElementById("phone1").focus();
  }
  }


	
	
	
	
	
	
	
	
	
	
	
		var expanded = false;

		function showCheckboxes() {
		var checkboxes = document.getElementById("checkboxes");
		if (!expanded) {
			checkboxes.style.display = "block";
			expanded = true;
		} else {
			checkboxes.style.display = "none";
			expanded = false;
		}
		}

		var expanded1 = false;

		function showCheckboxes1() {
		var checkboxes = document.getElementById("checkboxes1");
		if (!expanded1) {
			checkboxes1.style.display = "block";
			expanded1 = true;
		} else {
			checkboxes1.style.display = "none";
			expanded1 = false;
		}
		}
	</script>

</body>
</html>



'








?>