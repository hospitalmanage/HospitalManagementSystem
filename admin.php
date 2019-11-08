<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="admin.css">

<!-- Add icon library -->
    <script src="https://kit.fontawesome.com/ce6452e9e3.js" crossorigin="anonymous"></script>

</head>
<body>
    <div class="header-block">
        <h1 class="heading-1">Admin Login</h1>
        <p>This is only for Admin Login, if you are visitor then please go back and Login Link is given their.</p>
    </div>
    <form action="/action_page.php">
        <div class="form-content">   
            <div class="input-container">
                <i class="fa fa-user icon"></i>
                <input class="input-field" type="text" placeholder="Username" name="usrnm">
            </div>

            <!-- <div class="input-container">
                <i class="fa fa-envelope icon"></i>
                <input class="input-field" type="text" placeholder="Email" name="email">
            </div> -->
      
            <div class="input-container">
                <i class="fa fa-key icon"></i>
                <input class="input-field" type="password" placeholder="Password" name="psw">
            </div>
        </div>    
            <button type="submit" class="btn">Submit</button>
    </form>

</body>
</html>
