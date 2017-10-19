<?php

session_start();

if(isset($_POST['submit'])){
    

$link = mysqli_connect('127.0.0.1' , 'root' ,'', 'demo');

if (!$link)
{
    die ('Not connected to server');
}

    
$sql = "INSERT INTO client (ChildsAge,MonthlySavings, InsurancePolicy,FirstName,LastName,EmailAddress,PhoneNumber) VALUES ('".mysqli_real_escape_string($link,$_POST['childsAge'])."','".mysqli_real_escape_string($link,$_POST['monthlySavings'])."', '".mysqli_real_escape_string($link,$_POST['insurancePolicy'])."','".mysqli_real_escape_string($link,$_POST['firstName'])."','".mysqli_real_escape_string($link,$_POST['lastName'])."','".mysqli_real_escape_string($link,$_POST['email'])."','".mysqli_real_escape_string($link,$_POST['phone'])."')";
    
if(!mysqli_query($link,$sql))
{
   // echo 'Not inserted ';
}
else
{
    //echo 'Inserted';
}
    
header("refresh:0; url= final.php");

    
}else{
   // echo 'button not clicked';
}

?>

<title>MAG!C</title>
    <link rel="icon" type="" href="logo.gif"> 
     <link rel="stylesheet" href="form.css">
     <script type="text/javascript" src="formula.js"></script>

    <div class="container">  
        <form id="contact" method="post">
                  <h3>What's your number?</h3>
    
            <div>
     <fieldset>
          <label>How old is your child?</label>
      <select id="childsAge" required name="childsAge" tabindex="1" onchange="calculateTarget()">
          <option value="0">Select Age</option>
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
         </select>
            </fieldset>
            
            <fieldset>
          <label>If the cost of education is not a factor to consider, where would send your child for 
                his or her higher education?
                </label>
      <select id="studyPlace" tabindex="2" name="studyPlace" required onchange="calculateTarget()">
                       <option value="0">Select Country</option>
                       <option value="28000000">Ugandan University</option>
                       <option value="88000000">East African University</option>
                       <option value="12000000">South African University</option>
                       <option value="45000000">United States of America (USA)</option>
                       <option value="375000000">United Kingdom (UK)</option>
                        <option value="375000000">Australia</option>
                       <option value="225000000">Malaysia</option>
                   </select>
         </fieldset>
            <fieldset>
          <label>How much savings are you prepared to set aside for guaranteed education plan for your child?</label>
      <select id="monthlySavings" tabindex="3" name="monthlySavings" onchange="calculateTarget()">
                       <option value="0">Select Savings</option>
                        <option value="75000"> UGX 50,000 - 100,000</option>
                       <option value="175000">UGX 100,001 - 250,000</option>
                       <option value="350000">UGX 250,001 - 450,000</option>
                       <option value="575000">UGX 450,001 - 700,000</option>
                        <option value="850000">UGX 700,001 - 1,000,000</option>
                   </select>
         </fieldset>
                
                  <fieldset>
         <p>Your number will appear here!</p>
            <h4 id="fucking" style="display : none;"></h4> 
            </fieldset>
                
                 <fieldset>
                    <label>Do you want a <b>plan</b> that guarantees your child a University education?</label><br>
                <label><input id="insurancePolicy" type="radio" name="insurancePolicy" value="Yes">Yes</label><br>
                <label><input id="insurancePolicy" type="radio" name="insurancePolicy" value="No">No</label><br>
         </fieldset>
         
    <hr>
            </div>
<div class="container">
    <h4>Contact Information</h4>
    
    <fieldset>
        <input name="firstName" placeholder="First Name" type="text" tabindex="5" required autofocus>    
    </fieldset>
      
      <fieldset>   
      <input name="lastName" placeholder="Last Name" type="text" tabindex="6" required autofocus>
    </fieldset>
      
    <fieldset>
      <input name="email" placeholder="Your Email Address" type="email" tabindex="7" required>
    </fieldset>
      
    <fieldset>
      <input name="phone" placeholder="Your Phone Number" type="tel" tabindex="8" required>
    </fieldset>
    
    
    <button id="submit" name="submit" type="submit">Submit</button>
</div>
</form>
        </div>
    