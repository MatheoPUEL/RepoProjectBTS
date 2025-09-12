tooglecheck = document.getElementById("show_pwd");
tooglecheck.addEventListener('change', function() {
    pwd = document.getElementById("pwd");
    if (this.checked) {
        pwd.type = "text"  
    } else {
        pwd.type = "password"
    }
  });