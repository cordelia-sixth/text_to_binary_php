const copyToClipboard = () => {
  // textareaのコンテンツを選択状態にする
  document.getElementById('result').select();

  // クリップボードにコピー
  document.execCommand('Copy');

  // ボタンのテキストを変更
  document.getElementById('copy').textContent = "Copied";

  // ボタンのテキストを元に戻す
  const revertText = () => {
    document.getElementById('copy').textContent = "Copy";
  }

  setTimeout(revertText, 1500);
}