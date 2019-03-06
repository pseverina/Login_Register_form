function login(){
    alert("you are login");
}

function validationForm() {
    var firstName, lastName;
    var letters = /^[A-Za-z]+$/;
    var email_letters= /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  
    firstName = document.getElementById("register__firstname");
    lastName = document.getElementById("register__lastname");
    email = document.getElementById("login__input-email");
    pass1 = document.getElementById("register__input-password");
    pass2 = document.getElementById("register__confirm-password");

    // Check the inputs of registration form  
    // Check the first name
    if (!firstName.value.match(letters)) {
        alert('Please input alphabet characters only');
        return false;
    } else if (!lastName.value.match(letters)) {
        alert('Please input alphabet characters only');
        return false;
    } else if (!email.value.match(email_letters)){
        alert("You have entered an invalid email address!");
        return (false);
    } else if (!pass1.value.match(pass2)){
        alert("the passwords dont match");
        return false;
    } else {
        alert("Вы зарегестрированы!");
    }

}


