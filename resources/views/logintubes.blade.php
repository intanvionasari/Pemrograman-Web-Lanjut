<!DOCTYPE html>
<html>
 <head>
  <title>Login</title>
  <style>
      body {
       background: -webkit-linear-gradient( bottom, #008B8B, #8FBC8F);
       background-repeat: repeat;
       background-size: cover;  
}
      #card {
        background: #fbfbfb;
        border-radius: 8px;
        box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
        height: 410px;
        margin: 6rem auto 8.1rem auto;
        width: 329px;
    }
    #card-content {
      padding: 12px 44px;
}
#card-title {
      font-family: "Raleway Thin", sans-serif;
      letter-spacing: 4px;
      padding-bottom: 23px;
      padding-top: 13px;
      text-align: center;
}
h2{
    text-align:center;
}
.underline-title {
      background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
      height: 2px;
      margin: -1.1rem auto 0 auto;
      width: 89px;
}
a {
    text-decoration: none;
}
label {
    font-family: "Raleway", sans-serif;
    font-size: 11pt;
}
.form {
    align-items: left;
    display: flex;
    flex-direction: column;
}
.form-border {
    background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
    height: 1px;
    width: 100%;
}
.form-content {
    background: #fbfbfb;
    border: none;
    outline: none;
    padding-top: 14px;
}
  </style>
 </head>
 <body>
 <div id="card"> 
     <br><br>
 <h2>LOGIN</h2>
    <div class="underline-title"></div>
    <form >
        <br><br>
 <label for="user-email" style="padding-top:13px">&nbsp;Email :</label>
  <input
   id="user-email"
   class="form-content"
   type="email"
   name="email"
   autocomplete="on"
   required />
  <div class="form-border"></div>
  <br><br>
<label for="user-password" style="padding-top:22px">&nbsp;Password :</label>
  <input
   id="user-password"
   class="form-content"
   type="password"
   name="password"
   required />
  <div class="form-border"></div>
 </form>
 </div>
 </body>
</html>