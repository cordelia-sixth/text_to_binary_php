<?php
require_once('function.php');
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
  <script src="function.js" defer></script>
  <title>File upload</title>
</head>
<body>
  <form enctype="multipart/form-data" action="" method="post">
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    <input name="upload_file" type="file" /><br>
    <input type="submit" value="送信" />

    <?php if (isset($error)): ?>
      <span><?php echo $error ?></span>
    <? endif ?>
  </form>

  <p><?php echo $error_message ?></p>

  <p>
    <textarea rows="5" cols="70" placeholder="元のテキストが表示されます"><?php echo $contents ?></textarea>
  </p>

  <p>
    <textarea id="result" rows="5" cols="70" placeholder="変換した結果が表示されます"><?php echo $bin_contents ?></textarea>
  </p>

  <button id="copy" onclick="copyToClipboard()">Copy</button>
</body>
</html>