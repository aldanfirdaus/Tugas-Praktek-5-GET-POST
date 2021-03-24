<html>
    <head>
        <title>Nomor 1</title>
        <style type="text/css">
            *{
                margin: 0;
                padding: 0;
                outline: 0;
                font-family: 'Open Sans', sans-serif;
            }
            body{
                height: 100vh;
                background-image: url("foto.jpg");
                background-position: center;
                background-repeat: no-repeat; 
                background-size: cover;
            }
            .container{
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%,-50%);
                padding: 20px 25px;
                width: 300px;

                background-color: rgba(0,0,0,.7);
                box-shadow: 0 0 10px ;
            }
            .container h1{
                text-align: left;
                color: white;
                margin-bottom: 30px;
                text-transform: uppercase;
                border-bottom: 4px solid #2979ff;
            }
            .container label{
                text-align: left;
                color: #2979ff;
            }
            .container form input{
                width: 300px;
                padding: 6px;
                margin-bottom: 15px;
                border: none;
                background-color: transparent;
                border-bottom: 2px solid #2979ff;
                color: #fff;
                font-size: 20px;
            }
            .container form button{
                width: 100%;
                padding: 5px ;
                border: none;
                background-color: #2979ff;
                font-size: 18px;
                color: white;
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Login Form</h1>
            <form method="POST" action="tugas1_1.php">
                <label>Nama :</label><br>
                <input type="text" name="nama"><br>
                <label>Email :</label><br>
                <input type="text" name="email"><br>
                <button name="login">Login</button>
            </form>
        </div>
    </body>
</html>