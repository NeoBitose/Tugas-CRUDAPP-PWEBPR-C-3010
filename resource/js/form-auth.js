function validateRegis() 
{
  const form_regist_email = document.forms["form-registrasi"]["email"].value;
  const form_regist_username = document.forms["form-registrasi"]["username"].value;
  const form_regist_password = document.forms["form-registrasi"]["password"].value;

  var mes_email = document.getElementById("message-email");
  var mes_username = document.getElementById("message-username");
  var mes_password = document.getElementById("message-password");

  mes_email.innerHTML = "";
  mes_username.innerHTML = "";
  mes_password.innerHTML = "";

  if (form_regist_email == ""){
    mes_email.innerHTML = "Email Harus diisi";
    return false;
  }
  else if (!form_regist_email.includes('@')){
    mes_email.innerHTML = "Email Harus valid, tambahkan '@'";
    return false;
  }
  else if (form_regist_username == ""){
    mes_username.innerHTML = "Username Harus diisi";
    return false;
  }
  else if(form_regist_password == ""){
    mes_password.innerHTML = "Password Harus diisi";
    return false;
  }
  else if (form_regist_password.length  < 8){
    mes_password.innerHTML = "Password minimal 8 karakter";
    return false;
  }
}

function validateLogin() 
{
  const form_regist_username = document.forms["form-login"]["username"].value;
  const form_regist_password = document.forms["form-login"]["password"].value;

  var mes_username = document.getElementById("message-username");
  var mes_password = document.getElementById("message-password");

  mes_username.innerHTML = "";
  mes_password.innerHTML = "";

  
  if (form_regist_username == ""){
    mes_username.innerHTML = "Username Harus diisi";
    return false;
  }
  else if(form_regist_password == ""){
    mes_password.innerHTML = "Password Harus diisi";
    return false;
  }
  else if (form_regist_password.length  < 8){
    mes_password.innerHTML = "Password minimal 8 karakter";
    return false;
  }
}