<!DOCTYPE html>
<html>
    <head>
        <title>Membuat Login Dengan PHP dan MySQL | pemrograman_web1</title>
        <style>
            /* Reset some default styling */
            body, html {
                margin: 0;
                padding: 0;
                font-family: Arial, sans-serif;
                height: 100%;
                background-color: #f4f4f9;
            }

            /* Center the content on the page */
            .container {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                padding: 20px;
            }

            .login-form {
                background-color: #fff;
                padding: 30px;
                border-radius: 8px;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                width: 100%;
                max-width: 400px;
            }

            h1 {
                text-align: center;
                font-size: 24px;
                color: #333;
            }

            h3 {
                text-align: center;
                color: #555;
                font-size: 18px;
            }

            table {
                width: 100%;
                margin-top: 20px;
            }

            td {
                padding: 8px;
                font-size: 14px;
            }

            input[type="text"], input[type="password"] {
                width: 100%;
                padding: 10px;
                margin: 8px 0;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }

            input[type="submit"] {
                width: 100%;
                padding: 10px;
                background-color: #4CAF50;
                color: white;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                font-size: 16px;
            }

            input[type="submit"]:hover {
                background-color: #45a049;
            }

            .message {
                text-align: center;
                margin-top: 10px;
                color: red;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="login-form">
                <h1>Membuat Login Dengan PHP dan MySQL</h1>
                <h3>Halaman Login Sederhana</h3>
                <form action="login.php" method="post">
                    <table>
                        <tr>
                            <td>Username</td>
                            <td><input type="text" name="username" required></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="password" name="password" required></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="login" value="Log in"></td>
                        </tr>
                    </table>
                </form>
                <div class="message">
                    <!-- Error or success messages can go here -->
                </div>
            </div>
        </div>
    </body>
</html>
