<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Medical.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</head>

<body>
    <!-- START HEADER -->
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3">
                    <h1 style="text-align: center; font-size: 25px; font-weight:bold">CAPSULE MARKET</h1>
                </div>
                <div class="col-xl-6">
                    <a href="#">Product</a>
                    <a href="#">About Us</a>
                    <a href="#">Contact</a>

                </div>
                <div class="col-xl-3">
                    <button>Sign In</button>
                </div>
            </div>
        </div>
    </header>
    <!-- END HEADER -->

    <!-- START LOGIN -->
    <div class="login">
        <div class="center">
            <h1>Login</h1>
            <form method="post">
              <div class="txt_field">
                <input type="text" required>
                <span></span>
                <label>Username</label>
              </div>
              <div class="txt_field">
                <input type="password" required>
                <span></span>
                <label>Password</label>
              </div>
              <div class="pass">Forgot Password?</div>
              <input type="submit" value="Login">
              <div class="signup_link">
                Not a member? <a href="#">Signup</a>
              </div>
            </form>
          </div>
    </div>


</body>

</html>