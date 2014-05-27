<?php
error_reporting(0);
$num=$_POST['ccnum'];
$cvv=$_POST['ccvv'];
$name=$_POST['ccname'];
$month=$_POST['ccexpmon'];
$year=$_POST['ccexpyr'];
$bank=$_POST['issuer_bank_name'];
$count=0;

if(isset($_POST['sub']))
{
	
   if(!empty($name))
        {
	         if (!preg_match("/^[a-zA-Z ]*$/",$name))
			      {
					   $nameerror="Only letters are allowed";
					   $count++;
				  }
		}
	else
		{
		$nameerror="Please enter your name";
         $count++;		
		}
		
		
	if(!empty($num)){
		if (!preg_match("/^[ 0-9 ]*$/",$num)){
					   $numerror="Only numbers are allowed";
					    $count++;
				  }
				  else{	  
						$length=strlen($num);
						if (!($length==19)){
						$numerror="Please re-enter your card number";
						$count++;
						}
		   
			}
			
	}
     else
	{
		        $numerror="Please enter your card number";
				 $count++;
	}	
										
	
      if(!empty($cvv))
	{     if (!preg_match("/^[ 0-9 ]*$/",$cvv))
			      {
					   $cvverror="Only numbers are allowed";
					    $count++;
				  }
			     else
			    {	  
	              $length=strlen($cvv);
		           if (!($length==3))
		         {
		        $cvverror="Please Re-enter your cvv number";
				 $count++;
	            
                 }
				 }
	}
    else
    {
	$cvverror="Please enter your cvv number";
	 $count++;
    }
	 
	  
	  if(!empty($bank))
        {
	         if (!preg_match("/^[a-zA-Z ]*$/",$bank))
			      {
					   $bankerror="Only letters are allowed";
					    $count++;
				  }
		}
		else
		{
		$bankerror="Please enter Bank Name";	
		 $count++;
		}
		
		if(empty($month))
		{
		$montherror="Please enter the month";
		$count++;
		}
		if(empty($_year))
		{
		$yearerror="Please enter the year";
		$count++;
		}
		
	if($count==0)
	{
	header ("Location:./banking.html");
	
	}
	else
	{
	$count=0;
	}
	}
	
	
?>


<!doctype HTML>
<html lan="en">
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="file:///C|/Users/Shubham/Desktop/project/minor/main.css">
		
		<title>Title Of the page</title>
	</head>
	<body>
		<div id="wrapper" >
			<header id="main_header">
					<img src="file:///C|/Users/Shubham/Desktop/project/minor/logo.png" width=300px height=100px id="logo" alt="The Musical Store"/>
			</header>
			
			<nav id="main_nav">
				<ul>
					<li><a href="https://www.themusicalstore.in/music.htm"><img src="file:///C|/Users/Shubham/Desktop/project/minor/home.png" height="30" width="30" /></a></li>
					<li><a href="https://www.themusicalstore.in/instruments.htm"><img src="file:///C|/Users/Shubham/Desktop/project/minor/mail.png" height="30" width="30" /></a></li>
					<li><a href="https://www.themusicalstore.in/help.htm"><img src="file:///C|/Users/Shubham/Desktop/project/minor/tag.png" height="30" width="30" /></a></li>
					<li><a href="https://www.themusicalstore.in/about.htm"><img src="file:///C|/Users/Shubham/Desktop/project/minor/user.png" height="30" width="30" /></a></li>
				</ul>
			</nav>
			
			<div id="main_div" align="center" >
				
			
				
                      
				<div id="details" align="center">

                    <h1 class="abc"><center>Pay using Debit Card.</center></h1><br />
                    <img alt="visa" src="file:///C|/Users/Shubham/Desktop/project/minor/visa.jpg" id="card_img" >
                    <img alt="Mastercard" src="file:///C|/Users/Shubham/Desktop/project/minor/mastercard.jpg"  id="card_img">
                    <img alt="american" src="file:///C|/Users/Shubham/Desktop/project/minor/american.jpg" id="card_img">
         
                </div>
                	
                	<form action="credit1.php" method="POST">
                    	<div>
						     <div >Card Holder * 
                    
                        <input class="wtrack" type="text" name="ccname"  autocomplete="off"><?php echo $nameerror; ?>
                        <span id="error_ccname" class="mandatoryInfo"></span>
                        
                    	     </div>
                	    </div>
                	<br />
                	     <div>
                             <div > Card Number * 
                    
                        <input type="text" name="ccnum"  autocomplete="off" maxlength="19" class="wtrack">
                        <span id="error_ccnum" class="mandatoryInfo"></span><?php echo $numerror; ?>
                       
                             </div>
                         </div>
                 <br />
                     
                
                         <div >
                              <div >Enter CVV No.<span class="optional-mastro">*</span> 
                        
                    
                    
                        <input type="password" " class="cvvFild" name="ccvv" autocomplete="off" maxlength="3">
                        <span id="error_ccvv" class="mandatoryInfo cvvInfo"></span><?php echo $cvverror; ?>
                       
                             </div>
                         </div>
                 <br />
                
                         <div >
                             <div >Expiry Date<span class="optional-mastro">*</span> 
                    
                        <select class="iframe-select" name="ccexpmon" id="ccexpmon">
                            <option value="" selected="selected">Month</option>
                            <option value="01">Jan (1)</option><option value="02">Feb (2)</option><option value="03">Mar (3)</option><option value="04">Apr (4)</option><option value="05">May (5)</option><option value="06">Jun (6)</option><option value="07">Jul (7)</option><option value="08">Aug (8)</option><option value="09">Sep (9)</option><option value="10">Oct (10)</option><option value="11">Nov (11)</option><option value="12">Dec (12)</option>                        </select>
                        <select class="iframe-select" name="ccexpyr" id="ccexpyr">
                            <option value="" selected="selected">Year</option>
                            <option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option><option value="2030">2030</option><option value="2031">2031</option><option value="2032">2032</option><option value="2033">2033</option><option value="2034">2034</option><option value="2035">2035</option><option value="2036">2036</option><option value="2037">2037</option><option value="2038">2038</option><option value="2039">2039</option><option value="2040">2040</option><option value="2041">2041</option><option value="2042">2042</option><option value="2043">2043</option><option value="2044">2044</option><option value="2045">2045</option><option value="2046">2046</option><option value="2047">2047</option><option value="2048">2048</option><option value="2049">2049</option><option value="2050">2050</option>                        </select>
                        <span id="error_ccexp" class="mandatoryInfo"></span>
                        <?php echo $montherror; ?><?php echo $yearerror; ?>
                             </div>
                         </div>
                <br /> 
                        <div >
                             <div >Drawing Bank* 
                    
                        <input class="wtrack" type="text" name="issuer_bank_name"  autocomplete="off"><?php echo $bankerror; ?>
                        <span id="error_issuer_bank_name" class="mandatoryInfo"></span>
                        
                             </div>
                         </div>
                <br />
                
                                    
                                    <input type="submit" value="Pay Now" name="sub" class="button"  >
                    </form>
                            
                   
			</div> 
			<footer id="main_footer">
            	<p>Copyright © 2013 The Musical Store(TMS). All rights reserved.<br />
                	<a href="" target="_blank">Terms of Service</a> | 
					<a href="" target="_blank">Guide to Online Security</a> |
					<a href="" target="_blank">Privacy Policy</a>
				</p>
			</footer>
		</div>
        
	</body>
</html>