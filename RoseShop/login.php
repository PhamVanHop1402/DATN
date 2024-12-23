<link rel="icon" type="logo/png" sizes="32x32" href="logo/logo.png">
<?php
session_start();
?>
<style>
    /* CSS Libraries Used

*Animate.css by Daniel Eden.
*FontAwesome 4.7.0
*Typicons

*/

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

body, html {
    margin: 0;
    padding: 0;
    height: 100%;
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, #74b9ff, #81ecec);
    display: flex;
    align-items: center;
    justify-content: center;
}

.container {
    background: rgba(255, 255, 255, 0.9);
    padding: 40px;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    max-width: 400px;
    width: 100%;
    text-align: center;
    animation: fadeIn 1s ease-in-out;
}

h4 {
    font-size: 26px;
    margin-bottom: 10px;
    font-weight: 600;
}

h5 {
    font-size: 16px;
    margin-bottom: 30px;
    color: #666;
}

input[type="text"], 
input[type="password"] {
    width: 100%;
    padding: 14px 20px;
    margin: 12px 0;
    border: 1px solid #ddd;
    border-radius: 8px;
    font-size: 16px;
    outline: none;
    transition: 0.3s;
}

input[type="text"]:focus, 
input[type="password"]:focus {
    border-color: #0984e3;
    box-shadow: 0 0 8px rgba(9, 132, 227, 0.3);
}

.btn1 {
    width: 100%;
    background-color: #0984e3;
    color: white;
    border: none;
    padding: 16px;
    border-radius: 8px;
    font-size: 18px;
    cursor: pointer;
    transition: background-color 0.3s, transform 0.2s;
}

.btn1:hover {
    background-color: #74b9ff;
    transform: translateY(-3px);
    box-shadow: 0 6px 15px rgba(9, 132, 227, 0.3);
}

.forgetpass {
    display: block;
    margin: 16px 0;
    color: #636e72;
    text-decoration: none;
    font-size: 15px;
    transition: 0.3s;
}

.forgetpass:hover {
    color: #0984e3;
    text-decoration: underline;
}

.dnthave {
    display: inline-block;
    margin-top: 20px;
    color: #0984e3;
    font-size: 16px;
    text-decoration: none;
}

.dnthave:hover {
    text-decoration: underline;
}

.error {
    display: none;
    color: #d63031;
    font-size: 14px;
    margin-bottom: 15px;
}

.animated {
    animation-duration: 1s;
}

.bounceInDown {
    animation-name: bounceInDown;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(-30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}


</style>

<body id="particles-js"></body>
<?php

         include './connect_db.php';
         if(isset($_POST['username']))
         {
             $username = $_POST['username'];
             $password = $_POST['password'];
             $sql = "SELECT * FROM `user` WHERE (`username` = '$username' AND `password` =  md5('$password'))";
             $query = mysqli_query($con,$sql);
             $data = mysqli_fetch_assoc($query);
             $checkUser = mysqli_num_rows($query);
            //  echo "<pre>";
            //  print_r($data);
            //  die();
             if($checkUser == 1)
             {
              $_SESSION['user'] = $data;
               header("Location: index.php");

             }

             else
             {
               ?>
              <div id="edit-notify" class="" align="center">
              <h3 style="margin-top: 16px; color: red;"><?= "Thông tin đăng nhập không chính xác" ?></h3>
               <?php
             }
         }

        
       ?>
<div class="animated bounceInDown">
  <div class="container">
    <span class="error animated tada" id="msg"></span>
    <form acton="./login.php" name="form1" class="box" onsubmit="return checkStuff()" method="Post" autocomplete="off">
      <h4>Welcome<span> To Rose Shop</span></h4>
      <h5>Sign in to your account.</h5>
        <input type="text" name="username" placeholder="Username" autocomplete="off">
        <i class="typcn typcn-eye" id="eye"></i>
        <input type="password" name="password" placeholder="Passsword" id="pwd" autocomplete="off">

        <input type="submit" value="Sign in" class="btn1">
      </form>
        <a href="register.php" class="dnthave">Click vào đây nếu bạn không có tài khoản</a>
  </div>
</div>

<script>
    var pwd = document.getElementById('pwd');
var eye = document.getElementById('eye');

eye.addEventListener('click',togglePass);

function togglePass(){

   eye.classList.toggle('active');

   (pwd.type == 'password') ? pwd.type = 'text' : pwd.type = 'password';
}

// Form Validation

function checkStuff() {
  var email = document.form1.email;
  var password = document.form1.password;
  var msg = document.getElementById('msg');

  if (email.value == "") {
    msg.style.display = 'block';
    msg.innerHTML = "Please enter your email";
    email.focus();
    return false;
  } else {
    msg.innerHTML = "";
  }

   if (password.value == "") {
    msg.innerHTML = "Please enter your password";
    password.focus();
    return false;
  } else {
    msg.innerHTML = "";
  }
   var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  if (!re.test(email.value)) {
    msg.innerHTML = "Please enter a valid email";
    email.focus();
    return false;
  } else {
    msg.innerHTML = "";
  }
}

// ParticlesJS

// ParticlesJS Config.
particlesJS("particles-js", {
  "particles": {
    "number": {
      "value": 60,
      "density": {
        "enable": true,
        "value_area": 800
      }
    },
    "color": {
      "value": "#ffffff"
    },
    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0,
        "color": "#000000"
      },
      "polygon": {
        "nb_sides": 5
      },
      "image": {
        "src": "img/github.svg",
        "width": 100,
        "height": 100
      }
    },
    "opacity": {
      "value": 0.1,
      "random": false,
      "anim": {
        "enable": false,
        "speed": 1,
        "opacity_min": 0.1,
        "sync": false
      }
    },
    "size": {
      "value": 6,
      "random": false,
      "anim": {
        "enable": false,
        "speed": 40,
        "size_min": 0.1,
        "sync": false
      }
    },
    "line_linked": {
      "enable": true,
      "distance": 150,
      "color": "#ffffff",
      "opacity": 0.1,
      "width": 2
    },
    "move": {
      "enable": true,
      "speed": 1.5,
      "direction": "top",
      "random": false,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": false,
        "mode": "repulse"
      },
      "onclick": {
        "enable": false,
        "mode": "push"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 400,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 400,
        "size": 40,
        "duration": 2,
        "opacity": 8,
        "speed": 3
      },
      "repulse": {
        "distance": 200,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
});
</script>



















