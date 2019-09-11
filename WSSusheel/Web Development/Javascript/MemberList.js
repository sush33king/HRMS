function pgClick(e) 
{
    //alert (e.target.id);
    //alert(e.target.innerHTML);    
    document.getElementById("txtPageNo").value = e.target.innerHTML;      
    document.getElementById("btnSearch").click();
}

function clearSearchBoxes()
{    
    document.getElementById("txtName").value = "";
    document.getElementById("txtEmail").value = "";
    document.getElementById("txtAddress").value = "";
    document.getElementById("txtPageNo").value = "1"; //default page   
}