function validation()
{
var name = document.mform.name.value;
var age =document.mform.age.value;
var sickness =document.mform.sickness.value;
var email = document.mform.email.value;

if(name==""|| age=="" || email=="" || sickness=="")
{
  alert("The values should not be null"); 
  return false;
}

if(age<18)
{
    alert("Palayan podi eka"); 
    return false;
}

if(email.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/))
{


}
else{

    alert("Email is incorrect!");
    return false;
}
return;



}
