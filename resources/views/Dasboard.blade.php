<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        *{
            padding: 0;
            margin: 0;
            font-family: sans-serif;
            text-decoration: none;
        }
        body{
            background-color: rgb(223, 223, 208);
        }
        .wrapper{
            width: 80%;
            margin: 0 auto;
        }
        .wrapper::after{
            content: "";
            display: block;
            clear: both;
        }
        header{
            padding: 2px;
            background-color: grey;
            border: 1px solid;
            border-color: black;
        }
        header h1{
            float: left;
            padding: 15px 0px;
            
        }
        header ul{
            float: right;
            
        }
        header ul li{
            padding: 20px 0px;
            display: inline-block;
        }
        header ul li a{
            color: white;
            display: inline-block;
            padding: 0px 9px;
    
        }
        .tombol {
            background-color: rgb(46, 43, 53);
            padding: 7px 15px;
            border-radius: 50px;
        }
        .tombol:hover{
            background-color: cadetblue;

        }
        .container{
            padding: 70px;
        }
        .container table{
            margin: 0px auto;

        }
        .container button{
           margin: 0px 420px 0px 420px;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <header>
        <div class="wrapper">
            <h1>Dasboard</h1>
            <ul>
                <li><a href="" class="tombol">About</a></li>
                <li><a href="/Logout" class="tombol">Logout</a></li>
            </ul>
        </div>
    </header>
    <div class="container">
        <div class="row">  
         <img src="" alt="">    
            <table border="1" style="text-align:center;">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Nomor Telepon</th>
                    <th>Di buat</th>
                    <th>Di Update</th>
                    <th>Action</th>
                </tr>
                @foreach( $data as $ini)
                <tr>
                    <td>{{ $ini->id }}</td>
                    <td>{{ $ini->nama }}</td>
                    <td>{{ $ini->jeniskelamin }}</td>
                    <td>{{ $ini->notelpon }}</td>
                    <td>{{ $ini->created_at }}</td>
                    <td>{{ $ini->updated_at }}</td>
                    <td>
                    <a href="/UpdateData/{{ $ini->id }}" style="border: 1px solid; background-color: yellow; text-decoration: none; color:rgb(12, 10, 10);">Update</a>
                    <a href="/QueryDelete/{{ $ini->id }}" style="border: 1px solid; background-color: red; text-decoration: none; color:rgb(10, 10, 10);">Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
        <button><a href="/Tambah" style="color:black; padding:20px 30px;">Tambah</a></button>
    </div>
</body>
</html>