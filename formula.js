 function calculateTarget(){
     
   var childsAge = 0;
   childsAge  = document.getElementById("childsAge").value;  //retrieve child's age from the input
    
    var studyPlace = 0;
     studyPlace = document.getElementById("studyPlace").value; //retrieve the preffered study place from the input
  
    var savings = 0;
    savings = document.getElementById('monthlySavings').value;  //retrieve the monthly savings from the input
    
    var period = 0;
    period = (18 - childsAge); //amount of time before child goes to university
    
    var target = period * savings * 12; //amount of money that the parent will have by the time child needs to join university
     
     var balance = studyPlace - target;// check if the money saved can take the child to the university
    
    function goodStuff(){
        
        if (balance > 0){ 
   return ("Given your monthly savings, you'll need ");
              }
        
     else{
    
   return ("Given your monthly savings, you'll be able to ");
    //At your current savings rate you cannot take you child to university 
    //at prudential we can help you achieve your target
    //get in touch with one of us
}
    } 
    
    var pobj = document.getElementById('fucking');
    pobj.style.display = 'block';
    pobj.innerHTML = goodStuff() + "UGX " + target;
 
    
}