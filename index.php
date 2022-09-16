
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SignUp</title>
  </head>
  <link rel="stylesheet" href="./style.css" />
  <body>
    <div class="main-container">
      <div class="left-stuff">
        <div class="signup-text">
          <h1>SIGN <span>UP</span></h1>
        </div>
        <div class="logo">
          <div>
            <img src="./fb.png" alt="" />
          </div>
          <div>
            <img src="./tw.png" alt="" />
          </div>
          <div>
            <img src="./ig.png" alt="" />
          </div>
        </div>
      </div>
      <div class="right-stuff">
        <div class="input-data">
          <form action="connect.php" class="form-data" name="form1" method="POST">
            <label for="">Name</label>
            <input type="text" autocomplete="off" name="name" required />

            <label for="">Company</label>
            <input type="text" autocomplete="off" name="company" id="" required />

            <label for="">Contact No</label>
            <input type="text" autocomplete="off" name="contact" id="" required/>

            <label for="">Email Address</label>
            <input type="email" autocomplete="off" name="email"required />

            <label for="">Product intrested</label>
            <input type="text" autocomplete="off" name="product" id="" required/>

            <label for="">City</label>
            <input type="text" autocomplete="off" name="city" required />

            <label for="">Country</label>
            <input type="text" autocomplete="off" name="country" required />

            <label for="">Remark</label>
            <input type="text" autocomplete="off" name="remark" required />

            <input type="submit" value="Sign In" name="submit" id="" />
          
        
        </form>
        </div>
      </div>
    </div>
    <script src="./app.js"></script>
  </body>
</html>
