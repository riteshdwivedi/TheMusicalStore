<!DOCTYPE html>

<html lang="en" class="modern">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
	    <title>TMS Signup Form</title>
        
    	<link rel="stylesheet" type="text/css" href="css/main.css">
	    <link rel="stylesheet" type="text/css" href="css/form.css">
		<script type="text/javascript" src="javascripts/sign_up.js"></script>
	</head>
    
	<body>
		<div id="wrapper">
			<header id="main_header">
				<h1>Sign up</h1>
			</header>
			
			<div class="main_div">
				<section id="main_section">
					<form id="info-form" action="form.php" method="post" aria-hidden="false" class="setFocus"  onsubmit="return validate()">
						<div class="input-row">
						
							
						
							<div class="column first-name">
								<input type="text" name="firstname"  placeholder="First name" title="First name" id="first-name" autocorrect="off" autocapitalize="off" autocomplete="off" maxlength="32" aria-required="true" autofocus="autofocus" value="<?php if(isset($_POST['firstname'])){echo $fname=$_POST['firstname'];} ?>" >
							</div>
							
							<div class="name-margin" style="display: inline">
								<input type="text"  name="middlename"  placeholder="Middle name" title="Middle name" id="middle-name" autocorrect="off" autocapitalize="off" autocomplete="off" maxlength="32" value="<?php if(isset($_POST['middlename'])){echo $mname=$_POST['middlename'];} ?>" >
							</div>
							
							<div class="name-margin" style="display: inline">
								<input type="text" name="lastname"  placeholder="Last name" title="Last name" id="last-name" autocorrect="off" autocapitalize="off" autocomplete="off" maxlength="32" value="<?php if(isset($_POST['lastname'])){echo $lname=$_POST['lastname'];} ?>" >
							</div>
							
							<p class="validation-message">
								<?php
									if(isset($_POST['firstname']) && isset($_POST['middlename']) && isset($_POST['lastname'])){
										if(!empty($fname)){
											if(!empty($lname)){
												if (preg_match("/^[a-zA-Z ]*$/",$fname)&&preg_match("/^[a-zA-Z ]*$/",$lname)){
													$error="";
												}else{
													echo $error = "Only letters are allowed";
												}
											}else{
												echo $error='*Please enter your last name.';
											}
										}else{
											echo $error='*Please enter your first name.';
										}
									}
								?>
							</p>
						</div>
					
						<div class="input-row" style="margin-top: 15px" >
							<label for="email-id" class="clipped"></label>
							<input type="text" name="email-id" placeholder="Email ID" title="Email ID" type="text" id="email-id" class="email-id" autocorrect="off" autocapitalize="off" autocomplete="off" maxlength="32" aria-required="true" aria-describedby="id-validation-message" aria-haspopup="true" dir="ltr" value="<?php if(isset($_POST['email-id'])){echo $email=$_POST['email-id'];} ?>" >
							<p class="validation-message" id="email-id-validation-message">
								<?php
									if(isset($_POST['email-id'])){
										if(!empty($email)){
											if(preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)){
												$error="";
											}else{
												echo $error="Invalid email";
											}
										}else{
											echo $error='*Please enter your email.';
										}
									}
								?>
							</p>
							
							<div class="input-row">
								<label for="password" class="clipped"></label>
								<input type="password" name="password" placeholder="Password" title="Password" id="password" autocorrect="off" autocapitalize="off" autocomplete="off" maxlength="32" value="<?php if(isset($_POST['password'])){echo $password=$_POST['password'];} ?>" ><br />
								
								<p class="validation-message">
									<?php
										if(isset($_POST['password'])){
											if(!empty($password)){
												$length=strlen($password);
												if ($length>=6&&$length<=30){
													$error="";
												}else{
													echo $error = "Password should be 6 to 30 letters long.";
												}
											}
											else{
												echo $error='*Please enter your password.';
											}
										}
									?>
								</p>
								
								<input type="password" name="confirm-password" placeholder="Confirm Password" title="Confirm Password" id="confirm-password" autocorrect="off" utocapitalize="off" autocomplete="off" maxlength="32" value="<?php if(isset($_POST['confirm-password'])){echo $cpassword=$_POST['confirm-password'];} ?>" >
								
								<p class="validation-message">
									<?php
										if(isset($_POST['confirm-password'])){
											$cpassword=$_POST['confirm-password'];
											if(!empty($password)&&!empty($cpassword)){
												$clength=strlen($cpassword);
												if ($length===$clength){
													$error="";
												}else{
													echo $error = "Password didn't match.";
												}
											}else{
												echo $error='*Please confirm your password.';
											}
										}
									?>
								</p>
								
							</div>
						</div>
							
						<div class="row" style="margin-top: 2em;">
							<div class="input-row">
								<fieldset>
									<div class="birthday-wrapper ">
										<div class="column ">
											<legend class="birthday-label">Birthday</legend>
										</div>
										
										<div class="birthday-fields-wrapper">
											<div class="column birthday-fields" style="width:100px">
												<div class="birthday-drop-down" aria-hidden="true" style="color: rgb(165, 165, 165);">
													
												</div>
												
												<div class="arrow-container">
													<div class="bottom-dd-arrow"></div>
												</div>
													
												<select name="mm" id="month" data="birthday-drop-down" style="opacity: 0.1; position: relative;">
													<option title="January" value="1">January</option>
													<option title="February" value="2">February</option>
													<option title="March" value="3">March</option>
													<option title="April" value="4">April</option>
													<option title="May" value="5">May</option>
													<option title="June" value="6">June</option>
													<option title="July" value="7">July</option>
													<option title="August" value="8">August</option>
													<option title="September" value="9">September</option>
													<option title="October" value="10">October</option>
													<option title="November" value="11">November</option>
													<option title="December" value="12">December</option>
												</select>
											</div>
											
											<div class="column birthday-fields " style="width:100px">
												<div class="birthday-drop-down" style="color: rgb(165, 165, 165);">Day</div>
												<div class="arrow-container">
													<div class="bottom-dd-arrow"></div>
												</div>
												<select name="dd" id="day" data="birthday-drop-down" style="opacity: 0; position: relative;">
													<option >Day</option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="10">10</option>
													<option value="11">11</option>
													<option value="12">12</option>
													<option value="13">13</option>
													<option value="14">14</option>
													<option value="15">15</option>
													<option value="16">16</option>
													<option value="17">17</option>
													<option value="18">18</option>
													<option value="19">19</option>
													<option value="20">20</option>
													<option value="21">21</option>
													<option value="22">22</option>
													<option value="23">23</option>
													<option value="24">24</option>
													<option value="25">25</option>
													<option value="26">26</option>
													<option value="27">27</option>
													<option value="28">28</option>
													<option value="29">29</option>
													<option value="30">30</option>
													<option value="31">31</option>
												</select>
											</div>
													
											<div class="column birthday-fields" style="width: 100px">
												<div class="birthday-drop-down" style="color: rgb(165, 165, 165);">
													Year
												</div>
													
												<div class="arrow-container">
													<div class="bottom-dd-arrow"></div>
												</div>
												<select name="yyyy" id="year" data="birthday-drop-down" style="opacity: 0; position: relative;">
													<option >Year</option>
													<option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option><option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option><option value="1916">1916</option><option value="1915">1915</option><option value="1914">1914</option><option value="1913">1913</option><option value="1912">1912</option><option value="1911">1911</option><option value="1910">1910</option><option value="1909">1909</option><option value="1908">1908</option><option value="1907">1907</option><option value="1906">1906</option><option value="1905">1905</option><option value="1904">1904</option><option value="1903">1903</option><option value="1902">1902</option><option value="1901">1901</option><option value="1900">1900</option><option value="1899">1899</option><option value="1898">1898</option><option value="1897">1897</option><option value="1896">1896</option><option value="1895">1895</option><option value="1894">1894</option><option value="1893">1893</option><option value="1892">1892</option><option value="1891">1891</option><option value="1890">1890</option><option value="1889">1889</option><option value="1888">1888</option><option value="1887">1887</option><option value="1886">1886</option><option value="1885">1885</option><option value="1884">1884</option><option value="1883">1883</option>
												</select>
											</div>
										</div>
									</div>
								</fieldset>
							</div>
						
							<p class="validation-message" id="dob-validation-message"></p>
							<div class="gender-row">
								<fieldset>
									<legend class="clipped">Gender</legend>
									<div class="column">
										<input type="radio" id="male" name="gender" value="m">
										<label for="male">Male</label>
										<input type="radio" id="female" name="gender" value="f">
										<label for="female">Female</label>
									</div>
								</fieldset>
							</div>
								
							<div class="row">
								<input type="text" class="username" id="username" onFocus="onFocus" autocorrect="off" autocapitalize="off" autocomplete="off" maxlength="32" placeholder="Username" value="<?php if(isset($_POST['firstname'])){echo $fname=$_POST['firstname'];} ?>" >
								<div class="clearBoth"></div>
							</div>
						</div>	
					
						<div class="tos-row">
							<p class="tos">
								I agree to the TMS <a href="terms.htm" target="_blank">Terms</a> and <a href="Privacy.htm" target="_blank">Privacy</a>.
							</p>
						</div>
					
						<div class="input-row">
							<button type="submit" class="submit" onclick=sign_up><span id="button-span">Create account</span></button>
						</div>
					</form>
				</section>
			</div>
		</div>
	</body>
</html>