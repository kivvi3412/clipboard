<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Clipboard</title>
    <style>
        #form {
            position: absolute;
            width: 61.8%;
            height: 61.8%;
            top: 19.1%;
            left: 19.1%;
        }

        #text {
            display: block;
            margin: 0 auto;
            padding: 5px;
            width: 98%;
            height: 300px;
            border: 2px solid #3871E0;
            border-radius: 5px;
            font-family: Helvetica, serif;
            font-size: 16px;
            outline: none;
            resize: none; /*禁止调节大小*/
        }

        #text:hover {
            box-shadow: 0 0 20px #E3E2E3;
        }

        #submit {
            font-family: Helvetica, serif;
            font-size: 16px;
            display: block;
            float: right;
            width: 90px;
            height: 40px;
            padding: 0;
            text-align: center;
            color: #3871E0;
            background: none;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            margin: 10px;
        }

        #submit:hover {
            background: #F7F9FF;
        }
    </style>
</head>
<body>
<div id="form">
    <form action="saver.php" method="post">
        <h1 style="font-family: Helvetica,serif; font-size: 20px; color: #3564C2;">Clipboard</h1>
        <label for="text"></label>
        <textarea id="text" name="text"><?php echo file_get_contents('temp.txt'); ?></textarea>
        <input type="submit" value="Save" id="submit">
    </form>
</div>
</body>

