<?php

session_start();

if(isset($_POST['submit'])){
    

$link = mysqli_connect('127.0.0.1' , 'root' ,'', 'demo');

if (!$link)
{
    die ('Not connected to server');
}

 
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$maritalStatus = $_POST['maritalStatus'];
$numberOfChildren = $_POST['numberOfChildren'];
$employment = $_POST['employment'];
$typeOfEmployment = $_POST['typeOfEmployment'];
$monthlyIncome = $_POST['monthlyIncome'];
$levelOfSavings = $_POST['levelOfSavings'];
$monthlyExpenditure = $_POST['monthlyExpenditure'];
$savingTarget = $_POST['savingTarget'];
$insurancePolicy = $_POST['insurancePolicy'];

$sql = "INSERT INTO client (FirstName, LastName, Email, Phone, Age, MaritalStatus, NumberOfChildren, EmploymentStatus, TypeOfEmployment, MonthlyIncome, LevelOfSavings, MonthlyExpenditure, SavingTarget, InsurancePolicy) VALUES('".mysqli_real_escape_string($link,$firstName)."','".mysqli_real_escape_string($link,$lastName)."','".mysqli_real_escape_string($link,$email)."','".mysqli_real_escape_string($link,$age)."','".mysqli_real_escape_string($link,$phone)."','".mysqli_real_escape_string($link,$maritalStatus)."','".mysqli_real_escape_string($link,$numberOfChildren)."','".mysqli_real_escape_string($link,$employment)."','".mysqli_real_escape_string($link,$typeOfEmployment)."','".mysqli_real_escape_string($link,$monthlyIncome)."','".mysqli_real_escape_string($link,$levelOfSavings)."','".mysqli_real_escape_string($link,$monthlyExpenditure)."','".mysqli_real_escape_string($link,$savingTarget)."','".mysqli_real_escape_string($link,$insurancePolicy)."')";
    
if(!mysqli_query($link,$sql))
{
    echo 'Not inserted ';
}
else
{
    echo 'Inserted';
}
    
header("refresh:0; url= final.php");

    
}else{
   // echo 'button not clicked';
}

?>

<title>EduSave</title>
    <link rel="icon" type="" href=""> <!--- for image which appears in browser tab --->
     <link rel="stylesheet" href="form.css">
    <div class="container">  
        
        <form id="contact" method="post">
            <script src="show.js"></script>
            
    <h3>EduSave</h3>
    <h4>Take your education journey with us!</h4>
            
       <fieldset>
        <input name="firstName" placeholder="First Name" type="text" tabindex="1" required autofocus>    
    </fieldset>
      
      <fieldset>   
      <input name="lastName" placeholder="Last Name" type="text" tabindex="2" required autofocus>
    </fieldset>
      
    <fieldset>
      <input name="email" placeholder="Your Email Address" type="email" tabindex="3" required>
    </fieldset>
      
    <fieldset>
      <input name="phone" placeholder="Your Phone Number" type="tel" tabindex="4" required>
    </fieldset>
                           
    <fieldset>
       <p>What's your age?</p>
            <input type = "text" placeholder="0" name="age" id="age" pattern="[0-9]*"  tabindex="5" maxlength="3" required>
    </fieldset>
       
            <!---<p id = "validAge" ></p> To display when the age is less than 18. Error message. --->
            
     <fieldset>
      <label>What's your relationship status?</label>
          <br>
                         <label> <input tabindex="6" name="maritalStatus" type="radio" id="status-Single" value="Single" >"Single"</label> 
                      <br>
                         <label> <input type="radio" name="maritalStatus" id="status-Married" value="Married" >"Married"</label> 
                      <br>
                         <label> <input type="radio" name = "maritalStatus" id="status-Divorced" value="Divorced" >"Divorced"</label> 
                      <br>
                         <label> <input name="maritalStatus" type="radio" id="status-Widowed" value="Widowed" >"Widowed"</label> 
    </fieldset>
            
            <fieldset>
            <label>How many children do you have?</label><br>
                <input tabindex="7" name="numberOfChildren" id="numberOfChilden" type="text" placeholder ="0" pattern = "[0-9]*" maxlength = "2"  required>
         </fieldset>
            
               
    <fieldset>
              <label>Are you employed?</label><br>
                <input tabindex="8" type="radio" name="employment" value="Yes">Yes<br>
                    <input type="radio" name="employment" value="No">No<br>
    </fieldset>
            
            <!---- Incase employment value = no do something else, Include js to do that--->
            
             <fieldset>
              <label>Type of Employment</label><br>
                   <select tabindex="9" name="typeOfEmployment">
                       <option value="Self Employed">Self Employed</option>
                       <option value="Full-Time Employment">Full-Time Employment</option>
                       <option value="Voluntary Work">Voluntary Work</option>
                       <option value="Casual Work">Casual Work</option>
                   </select>
      </fieldset>
            
            <!---- Incase type of employment = full time get place of work create an input area to do that 
   create an entry for that in the database --->
            
    <fieldset>
        <label>Monthly Income</label>
      <input tabindex="10" name="monthlyIncome" id="monthlyIncome" placeholder="UGX 0"  type="text" required>
    </fieldset>
            
            
  <fieldset>
          <label>Level of Savings</label>
      <input  name="levelOfSavings" id= "levelOfSavings" placeholder="UGX 0" pattern="[0-9]*" type="text" tabindex="11" required>
    </fieldset>
      
    <fieldset>
        <label>Monthly Expenditure</label>
      <input name="monthlyExpenditure" id="monthlyExpenditure" placeholder="UGX 0" pattern="[0-9]*" type="text" tabindex="12" required>
    </fieldset>
      
      <fieldset>
        <label>What's your saving target?</label>
      <input name="savingTarget" id="savingTarget" placeholder="UGX 0" pattern="[0-9]*" type="text" tabindex="13" required>
    </fieldset>
      
    <fieldset>
        <div>
      <label>Do you have an insurance policy?</label><br>
                 <input tabindex="14" type="radio" id = "insurancePolicy" name="insurancePolicy" value="Yes">Yes<br>
                    <input type="radio" id="insurancePolicy" name="insurancePolicy" value="No">No<br></div>
    </fieldset>
       
            <!----insurancePolicy = no get in touch with one of us for help---->
            
        
            
    <fieldset>
        <button type ="submit" name="submit">Next</button> 
    </fieldset>
            
  </form>
        
</div>
