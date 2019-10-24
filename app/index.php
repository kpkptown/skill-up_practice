<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHPのサンプル</title>
</head>
<body>
    <?php
        $date = date("Y/m/d H:i:s");
        print ($date);
    ?>
    <br>
    <?php
        $a = 5;
        if($a == 3){
            print("$a is 3");
        }else{
            print("$a is not 3");
        }
    ?>
    <br>
    <?php
        //$iが0から10未満の間、1ずつ加算しながら繰り返し
        for($i = 0; $i < 10; $i++){
            print("$i  ");
        }
    ?>
    <br>
    <?php
        //引数の文字列を2回表示する関数
        function double_print($text){
            print($text . $text);
        }
        double_print("a");
        double_print("bc")
    ?>
    <br>
    <?php
        //"one","two","three"を要素とする配列を作成
        $a1 = array("one","two","three");
        //配列$a1の末尾に"four"という要素を追加
        $a1[] = "four";
        //配列$a1の0番目の要素を変更
        $a1[0] = "one?";
        //表示
        print_r($a1);
    ?>
    <br>
    <?php
        //$hash["one"]が"いち",$hash["two"]が"に",$hash["three"]が"さん"となる連想配列を作成
        $hash = array("one" => "いち","two" => "に","three" => "さん");
        $hash["four"] = "し";
        print_r($hash);
        //$hashの各要素を取り出して処理
        foreach($hash as $key=> $val)
        print("$key is $val. ");
    ?>
    <br>
    <?php
        if(preg_match('/(-?)[0-9]+(\.[0-9]+)?/','q-6.83p', $m)){
            print("match: $m[0] ");
            if($m[1] == "-")
                print("minius! ");
            if(isset($m[2]))
                print("decimal!");
        }else{
            print("not match");
        }
    ?>
</body>
</html>
