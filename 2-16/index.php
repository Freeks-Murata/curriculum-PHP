<!-- ファイルのデータを読み書きする -->
<?php
$testFile = "test.txt";
// contentの意味は中身、内容。
$contents = "こんにちは！";

// is_writeble() = メソッドの一つ。あるファイルを書き込み対象にする際に使用。
// writableの意味は書き込み可能。
if (is_writable($testFile)) {
    // 書き込み可能なときの処理
    // とりあえず、確認のため、echoで表示だけさせる
    echo "writable!!";
} else {
    // 書き込み不可のときはexitで処理
    echo "not writable!";
    exit;
}
echo "<br>";

if (is_writable($testFile)) {
    // 書き込み可能なときの処理
    // fopem() = 対象のファイルを開く。
    // "w"は完全上書き。"a"は末尾に値を追加する。"r"は値を読み込む。
    $fp = fopen($testFile, "a");
    // fwrite() = 対象のファイルに値を書き込む
    fwrite($fp, $contents);
    // fclose() = ファイルを閉じる
    fclose($fp);
    // 書き込みした旨の表示
    echo "finish writing!!";
} else {
    // 書き込み不可のときの処理
    echo "not writable!";
    exit;
}
echo "<br>";

$test_file = "test2.txt";
// is_readable() = メソッドの一つ。あるファイルを読み込み対象にする際に使用。
// readableの意味は読みやすい、わかりやすい。
if (is_readable($test_file)) {
    // 読み込み可能なときの処理
    // 対象のファイルを開く
    $fp = fopen($test_file, "r");
    // fgets() = 開いたファイルから1行ずつ読み込む
    while ($line = fgets($fp)) {
        // 改行コード込みで1行ずつ出力
        echo $line . '<br>';
    }
    // ファイルを閉じる
    fclose($fp);
} else {
    // 読み込み不可のときの処理
    echo "not readable!";
    exit;
}
