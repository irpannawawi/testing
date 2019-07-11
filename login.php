<html>
    <head>
        <title>Login</title>
        <style>
        body{
            background: cyan;
        }
            .form-wraper{
                margin-top: 10% ;
                margin-left: 35%;
                margin-right: 35%;
                border: 1px solid black;
                padding: 15px;
                background: white;
            }
            h1,table{
                margin: 0 auto;
            }
        
        </style>
    </head>
    <body>
        <!-- LOGIN FORM -->

        <div class="form-wraper">
            <h1>Login as merchant</h1>
            <form action="controllers/cek_login.php" method="post">
                <table >
                    <tr>
                        <td>Username :</td>
                        <td><input type="text" name="username" placeholder="Username" autocomplete="off" /></td>
                    </tr>
                    <tr>
                        <td>Password :</td>
                        <td><input type="text" name="password" placeholder="*******" /></td>
                    </tr>
                    <tr>
                        <td colspan ="2" >
                        <!--Iput form forl user level -->
                        <input type="text" value="user" name="level" hidden />
                        <!--SUBMIT BUTTON-->
                        <input type="submit" value="Login" />
                        
                        </td>
                    </tr>
                </table>
            </form>
        </div>
       
        

    </body>
</html>