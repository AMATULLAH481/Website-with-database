function validateForm(){
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var phoneNumber = document.getElementById("phonenumber").value;
    var zipCode = document.getElementById("zipcode").value;
    var errorMessage = document.getElementById("error-message");

    if (name === ""){
        alert (  "Fill your name field !!!!!");
        return false;
    }
    else if (email ===""){
        alert ("Fill your email field !!!!");
        return false;
    }
    else if (password===""){
        alert ("Fill your password field !!!");
        return false;
    }
    else if (phoneNumber===""){
        alert ("Fill your phoneNumber field !!!");
        return false;
    }
    else if (zipCode===""){
        alert ("Fill your zipcode field !!!");
        return false;
    }
       else
        {   
            errorMessage.innerHTML = "";
            errorMessage.display.style = "none";
            document.getElementById("form").Register();
        }
    

}