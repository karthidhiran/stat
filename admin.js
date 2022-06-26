function validate(){
      var email=document.getElementById("mail").value;
      var pass=document.getElementById("pass").value;
      if(email=="gravitybookworld@gmail.com"&&pass=="senthil")
      {
      window.location="about.html";
      return false;
      }
      }