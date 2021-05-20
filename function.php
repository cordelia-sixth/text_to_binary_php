<?php

// ファイルがアップロードされたか確認
if (is_uploaded_file($_FILES['upload_file']['tmp_name'])) {

  // magic DBをオープンし、MIMEを返すように指定
  $finfo = finfo_open(FILEINFO_MIME);
  // アップロードされてきたファイル名を取得
  $filename = $_FILES["upload_file"]['tmp_name'];

  // 有効な拡張子か確認
  if (strpos(finfo_file($finfo, $filename), 'text/plain') === false) {
    // magic DBをクローズ
    finfo_close($finfo);
    return;
  }

  // ファイルのコンテンツを取得
  $contents = file_get_contents($_FILES['upload_file']['tmp_name']);
  // 配列に1文字ずつ格納
  $letters = str_split($contents);

  // 10進数の文字コードに変換
  $dec_list;
  foreach ($letters as $letter) {
    $dec_list[] = ord($letter);
  }

  // 2進数に変換
  $bin_list;
  foreach ($dec_list as $dec) {
    $bin_list[] = decbin($dec);
  }

  $bin_contents = implode($bin_list);

}