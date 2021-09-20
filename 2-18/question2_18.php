<link rel="stylesheet" href="css2_18.css">
<form class="whole" action="answer2_18.php" method="POST">
    <?php
    //POST送信で送られてきた名前を受け取って変数を作成
    $name = $_POST["name"];
    //①画像を参考に問題文の選択肢の配列を作成してください。
    $number = [80, 22, 20, 21];
    $page = ["PHP", "Python", "JAVA", "HTML"];
    $SQL = ["join", "select", "insert", "update"];
    //② ①で作成した、配列から正解の選択肢の変数を作成してください
    $a = $number[0];
    $b = $page[3];
    $c = $SQL[1];
    ?>
    <?php if ($name == "") { ?>
        <p class="space2">error : 名前が入力されていません</p>
        <button class="button" formaction="index2_18.html">戻る</button>
    <?php } else { ?>
        <p class="space2">お疲れ様です
            <!--POST通信で送られてきた名前を出力-->
            <?php echo $name . "さん<br>" ?>
        </p>
        <!--フォームの作成 通信はPOST通信で-->
        <h2>①ネットワークのポート番号は何番？</h2>
        <!--③ 問題のradioボタンを「foreach」を使って作成する-->
        <?php
        foreach ($number as $value) {
            $number2 = "<input type='radio' name='number' value=$value>";
            $none = "<input type='radio' name='number' value='' checked='checked' style='display:none;'>";
            echo $number2 . $value . $none;
        }
        ?>
        <h2>②Webページを作成するための言語は？</h2>
        <!--③ 問題のradioボタンを「foreach」を使って作成する-->
        <?php
        foreach ($page as $value) {
            $page2 = "<input type='radio' name='page' value=$value>";
            $none = "<input type='radio' name='page' value='' checked='checked' style='display:none;'>";
            echo $page2 . $value . $none;
        }
        ?>
        <h2>③MySQLで情報を取得するためのコマンドは？</h2>
        <!--③ 問題のradioボタンを「foreach」を使って作成する-->
        <?php
        foreach ($SQL as $value) {
            $SQL2 = "<input type='radio' name='SQL' value=$value>";
            $none = "<input type='radio' name='SQL' value='' checked='checked' style='display:none;'>";
            echo $SQL2 . $value . $none;
        }
        echo "<br>";
        ?>
        <!--問題の正解の変数と名前の変数を[answer.php]に送る-->
        <input type="hidden" name="name2" value=<?php echo $name; ?>>
        <input type="hidden" name="a" value=<?php echo $a; ?>>
        <input type="hidden" name="b" value=<?php echo $b; ?>>
        <input type="hidden" name="c" value=<?php echo $c; ?>>
        <input class="button" type="submit" value="回答する">
    <?php } ?>
</form>