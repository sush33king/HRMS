function myFunction() 
        {
            var x = document.getElementById("txtPassword");
            if (x.type === "password") 
           {
            x.type = "text";
           } 
           else 
           {
            x.type = "password";
           }
        }