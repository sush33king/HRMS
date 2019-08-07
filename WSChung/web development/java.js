function myFunction() 
{
    var x = document.getElementById("myInput");
    if (x.type === "password") 
    {
    x.type = "password";
    } 
    else 
    {
    x.type = "text";
    }
}



