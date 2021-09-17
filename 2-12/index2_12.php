<form action="result2_12.php" method="POST">
    お名前：<input type="text" name="name"><br>
    ご希望商品：<input type="radio" name="award" value="A賞">A賞
    <input type="radio" name="award" value="B賞">B賞
    <input type="radio" name="award" value="C賞">C賞<br>
    個数：<select name="numberof">
        <?php for ($a = 1; $a <= 10; $a++) { ?>
            <option value="<?php echo $a; ?>">
                <?php echo $a; ?>
            </option>
        <?php } ?>
    </select><br>
    <input type="submit" value="申込">
</form>