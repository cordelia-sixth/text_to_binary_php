<?php
require_once('function.php');
?>

<html>
  <head>
    <title>File upload</title>
  </head>
  <body>
    <form enctype="multipart/form-data" action="" method="post">
      <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
      <input name="upload_file" type="file" />
      <p><input type="submit" value="送信" /></p>
    </form>

    <p>
      <textarea rows="5" cols="70" placeholder="元のテキストが表示されます""><?php echo $contents ?></textarea>
    </p>

    <p>
      <textarea rows="5" cols="70" placeholder="変換した結果が表示されます"><?php echo $toBin ?></textarea>
    </p>
  </body>
</html>