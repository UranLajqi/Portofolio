function validateForm() {
    let name = document.forms["myForm"]["name"].value;
    let lastname = document.forms["myForm"]["lastName"].value;
    let message = document.forms["myForm"]["message"].value;
    

    if (message.length > 150) {
        alert("The message must be shorter than 150 characters");
      return false;
    }

    if (name.length > 40) {
        alert("The name should not be more than 40 characters.");
      return false;
    }

    if (lastname.length > 40) {
        alert("The last name should not be more than 40 characters.");
      return false;
    }

    var regEx = /^[A-Za-z]+$/;
    if(!name.match(regEx)) {
        alert("Please enter letters only on the name.");
        return false;
    }

    if(!lastname.match(regEx)) {
        alert("Please enter letters only on the last name.");
        return false;
    }
}