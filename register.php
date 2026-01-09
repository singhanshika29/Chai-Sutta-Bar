<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <style>
        body {
            background-image: url(image/fork-near-plate-with-twig.jpg);
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;

            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .background {
            backdrop-filter: blur(20px);
            background-color: rgba(0, 0, 0, 0.6);
        }

        label {
            color: white;
            display: inline-block;
            width: 100px;
            margin-bottom: 10px;
        }


        input[type="submit"] {
            margin-top: 10px;
            padding: 5px 15px;
        }

        input[type="submit"] {
            width: 50%;
            margin-top: 10px;
            margin-left: 30%;
            padding: 12px;
            border: none;
            border-radius: 5px;
            background-color: #ff4b2b;
            background-image: linear-gradient(45deg, #ff4b2b, #ff416c);
            color: white;
            font-weight: bold;
            text-transform: uppercase;
            cursor: pointer;
            transition: opacity 0.3s ease;
        }

        input[type="submit"]:hover {
            opacity: 0.9;
            box-shadow: 0 4px 15px rgba(255, 75, 43, 0.4);
        }

       
        input[type="name"],
        input[type="username"],
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            box-sizing: border-box;
            background-color: rgb(35, 34, 28);
            color: white;
        }

        @media screen and (max-width: 600px) {
            body {
                padding: 10px;
            }

            form {
                width: 100%;
            }
        }
    </style>
</head>

<body>
      <?php
$merr = $eerr = $nerr = $confirm = '';
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"] ?? '');
$email = trim($_POST["email"] ?? '');
$username = trim($_POST["username"] ?? '');
$password = trim($_POST["password"] ?? '');

if (strlen($password) < 6) {
  $merr = 'Password must be at least 6 characters long';
}
if (!preg_match('/^[a-zA-Z ]+$/', $name)) {
  $nerr = 'Invalid student name';
}


if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $eerr = 'Invalid email id';
}
if ($nerr === '' && $merr === '' && $eerr === '') {
  $mysqli = new mysqli("localhost", "root", "", "registerform");
  if($mysqli->connect_errno) {
    $confirm = "Connection failed: " .$mysqli->connect_error;
  }else{
    $stmt = $mysqli->prepare("SELECT email FROM registrations WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    if($stmt->num_rows > 0) {
      $eerr = 'Email already exists';
    } else {
      $stmt_insert = $mysqli->prepare('INSERT INTO registrations (name, username, email, password) VALUES (?, ?, ?, ?)');
      $stmt_insert->bind_param("ssss", $name, $username, $email, $password);
      if ($stmt_insert->execute()) {
        $confirm = "Submitted";
      } else{
        $confirm = "Submission failed: " . $stmt_insert->error;
      }
      $stmt_insert->close();
    }
    $stmt->close();
    $mysqli->close();
  }
  }
}
    ?>

    <section style=" padding:20px; border-radius: 10px; max-width: 400px; margin: auto;" class="background">
        <form action="register.php" method="post">
            <h2 style="text-align: center; color: rgb(208, 147, 61); margin-bottom: 30px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: 700; font-size: 40px;">
                REGISTER</h2>
                   <span style="color:red;"> <?php echo $nerr; ?> </span>
                                      <span style="color:red;"> <?php echo $eerr; ?> </span>
                                      <span style="color:red;"> <?php echo $merr; ?> </span>
                                       <span style="color:red;"> <?php echo $confirm; ?> </span>
                                        <label for="username"
                style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">name:</label>
            <input type="name" id="name" name="name" required><br><br>
            <label for="username"
                style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Username:</label>
            <input type="username" id="username" name="username" required><br><br>

            <label for="email"
                style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="password"
                style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Password:</label>
            <input type="password" id="password" name="password" required><br><br>

            <input type="submit" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;" value="Register">
        </form>
    </section>
</body>

</html>