<link rel="stylesheet" href="css2_18.css">
<?php
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$select1 = $_POST["number"];
$select2 = $_POST["page"];
$select3 = $_POST["SQL"];
$a2 = $_POST["a"];
$b2 = $_POST["b"];
$c2 = $_POST["c"];
$name2 = $_POST["name2"];
//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
?>
<p class="space2">
    <!--POST通信で送られてきた名前を表示-->
    <?php echo $name2 ?>さんの結果は・・・？
</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php
if ($select1 == $a2) {
    echo "正解！";
} else {
    echo "残念・・・";
}
?>
<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php
if ($select2 == $b2) {
    echo "正解！";
} else {
    echo "残念・・・";
}
?>
<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php
if ($select3 == $c2) {
    echo "正解！";
} else {
    echo "残念・・・";
}
?>