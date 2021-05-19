<?php

if (is_uploaded_file($_FILES['upload_file']['tmp_name'])) {

  // ファイルのコンテンツを取得
  $contents = file_get_contents($_FILES['upload_file']['tmp_name']);

  // 配列に1文字ずつ格納
  $letters = str_split($contents);

  // asciiの場合、10進数の文字コードに変換する
  $dec_list;
  foreach ($letters as $letter) {
    $dec_list[] = ord($letter);
  }

  // 2進数に変換する
  $bin_list;
  foreach ($dec_list as $dec) {
    $bin_list[] = decbin($dec);
  }

  $toBin = implode($bin_list);
}