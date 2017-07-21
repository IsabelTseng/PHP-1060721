<!DOCTYPE html>
<html lang="zh_Hant">
    <head>
        <title>上傳檔案</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <form method="post" action="b1_file.php" enctype="multipart/form-data">
            <input type="file" name="upfile" accept="image/gif,image/jpeg,image/png"><br>
            <input type="submit" value="上傳">
        </form>
    </body>
</html>