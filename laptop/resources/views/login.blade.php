<!DOCTYPE html>
<html>

<head>
    <title>Sign in</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/login.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
</head>

<body>
    <div class="cont">
        <div class="form sign-in">
            <form action="{{route('login_customer')}}" method="POST">
                 @csrf
                 <input type="hidden" value={{$urlBack}} name="urlPrevious">
                <h2>Sign In</h2>
                <label>
        <span>Email Address</span>
        <input type="email" name="email">
      </label>
                    <label>
                    <span>Password</span>
                    <input type="password" name="password">
                    </label>
                <button class="submit" type="submit">Sign In</button>
                <p class="forgot-pass">Forgot Password ?</p>
            </form>
            <div class="social-media">
                <ul>
                    <li><img src="images/facebook.png"></li>
                </ul>
            </div>
        </div>

          <div class="sub-cont">
               <div class="img">
                    <div class="img-text m-up">
                         <h2>New here?</h2>
                         <p>Sign up and discover great amount of new opportunities!</p>
                    </div>
                    <div class="img-text m-in">
                         <h2>One of us?</h2>
                         <p>If you already has an account, just sign in. We've missed you!</p>
                    </div>
                    <div class="img-btn">
                         <span class="m-up">Sign Up</span>
                         <span class="m-in">Sign In</span>
                    </div>
               </div>
               <div class="form sign-up">
                    <form action="{{route('add_customer')}}" method="POST">
                         @csrf
                         <input type="hidden" value={{$urlBack}} name="urlPrevious">
                         <h2>Sign Up</h2>
                         <label>
                              <span>Name</span>
                              <input type="text" name="fullname" required>
                         </label>
                         <label>
                              <span>Email</span>
                              <input type="email" name="email" required>
                         </label>
                         <label>
                              <span>mobile</span>
                              <input type="tel" name="mobile" maxlength="10" required pattern="[0][0-9]{9,}" oninvalid="this.setCustomValidity('Vui lòng nhập số điện thoại bắt đầu bằng số 0 và ít nhất 9 con số theo sau')" oninput="this.setCustomValidity('')">
                         </label>
                         <label>
                              <span>Password</span>
                              <input type="password" name="password" required>
                         </label>
                                   <button type="submit" class="submit">Sign Up Now</button>
                    </form>
               </div>
        </div>
    </div>
    <script type="text/javascript" src="{{asset('public/frontend/js/script.js')}}"></script>
</body>

</html>