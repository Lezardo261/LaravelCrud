<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            font-family: montserrat;
            background: rgb(91, 91, 240);
            height: 100vh;
            overflow: hidden;
        }
        .center{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
            background: white;
            border-radius: 10px;
        }
        .center h1{
            text-align: center;
            padding: 0 0 20px 0;
            border-bottom: 1px solid silver;
        }
        .center form{
            padding: 0 40px;
            box-sizing: border-box;
        }
        form .mb-3{
            position: relative;
            border-bottom: 1px solid #adadad;
            margin: 30px 0;

        }
        .mb-3 input{
            width: 100%;
            padding: 0 5px;
            height: 40px;
            font-size: 16px;
            border: none;
            background: none;
            outline: none;
        }
        .mb-3 label{
            position: absolute;
            top: 50%;
            left: 5px;
            color: #adadad;
            transform: translateY(-50%); 
            font-size: 16px;
            pointer-events: none;
            transition: .5s;
        }
        .mb-3 span::before{
            content: "";
            position: absolute;
            top: 40px;
            left: 0;
            width: 0%;
            height: 2px;
            background: #2692d9;
        }
        .mb-3 input:focus ~ label,
        .mb-3 input:valid ~ label{
            top: -5px;
            color: #2691d9;
        }
        .mb-3 input:focus ~ span::before,
        .mb-3 input:valid ~ span::before{
            width: 100%;
        }
        input[type="submit"]{
            margin-bottom: 20px;
            width: 100%;
            height: 50px;
            border: 1px solid;
            border-radius: 25px;
            background: green;
            font-size: 20px;
            font-weight: 700;
            color: white;
            cursor: pointer;
            outline: none;
        }
        input[type="submit"]:hover{
            border-color: #dbe6ec;
            transition: .5s;
        }
        .buatakun{
            text-align: center;
            color: #666666;
            font-size: 16px;
            margin: 10px;
            padding-bottom: 10px
        }
    </style>
</head> 
<body>
    <div class="center">
        <h1>Register</h1>
    <form action="/RegistQuery" method="POST">
        @csrf
        <div class="mb-3">
            <input name="name" type="text" required>
            <span></span>
            <label >Your Name</label>
            
        </div>

        <div class="mb-3">
          <input name="email" type="email" required>
          <span></span>
          <label >Email address</label>
          
        </div>
        <div class="mb-3">
          <input name="password" type="password" required>
          <span></span>
          <label >Password</label>
          
        </div>
        <div class="buatakun">
            Sudah buat akun? <a href="/Login">Login</a>
        </div>
        <!----<div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>--->
        <input type="submit" value="Register">
    </form>
    </div>
</body>
</html>