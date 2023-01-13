let pattern = "^[a-zA-Z ]*$"
let regPass = "^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[@$!%*?&])([a-zA-Z0-9@$!%*?&]{12,32}$)"
let regPass1 = "^(?=.*[0-9])(?=.*[a-z])([a-zA-Z0-9]{8,12})"
let regPass2 = "^(?=.*[a-z])([a-zA-Z0-9]{8})"
let regmail = "^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myForm.emailAddr.value)"

let fname = document.getElementById("name")
let mail =  document.getElementById("email")
let lname = document.getElementById("phone")
let pass = document.getElementById("password")
let repass = document.getElementById("conf-password")



checkname = () => {
    if (fname.value.match(pattern)){
        document.getElementById("nerror").style.display = "none"
    }
    
    else{
        document.getElementById("nerror").innerHTML = "Please Use Letters Only" 
        document.getElementById("nerror").style.display = "block"
    }
}

checkphone = () => {
    if (lname.value.match(pattern)){
        document.getElementById("phone").style.display = "none"
    }
    else{
        document.getElementById("phone").innerHTML = "Please Use Letters Only" 
        document.getElementById("phone").style.display = "block"
    }
}

checkpass = () => {
    if (pass.value.match(regPass)){
        document.getElementById("truth").innerHTML = "done"
        document.getElementById("truth").style.color = "#008000"
        document.getElementById("truth").style.textShadow = "0px 0px 4px #008000"
    }
    else if (pass.value.match(regPass1)){
        document.getElementById("truth").innerHTML = "warning"
        document.getElementById("truth").style.color = "#ffa500"
        document.getElementById("truth").style.textShadow = "0px 0px 4px #ffa500"

    }
    else if (pass.value.match(regPass2)){
        document.getElementById("truth").innerHTML = "error"
        document.getElementById("truth").style.color = "#f03e3e"
        document.getElementById("truth").style.textShadow = "0px 0px 4px #f03e3e"
        document.getElementById("passerror").innerHTML = "Your Password Is Poor"
        document.getElementById("passerror").style.display = "block"
    }
}

recheckpass = () => {
    console.log('errror')
    if (pass.value == repass.value && pass.value != "" ){
        document.getElementById("truth1").innerHTML = "done"
        document.getElementById("truth1").style.color = "#008000"
        document.getElementById("truth1").style.textShadow = "0px 0px 4px #008000"
        mail.removeAttribute('disabled')
    }
    else{
        document.getElementById("truth1").innerHTML = "error"
        document.getElementById("truth1").style.color = "#f03e3e"
        document.getElementById("truth1").style.textShadow = "0px 0px 4px #f03e3e"
        document.getElementById("repasserror").innerHTML = "Your Password  And Repeat Password Isn't Match"
        document.getElementById("repasserror").style.display = "block"
    }
}
