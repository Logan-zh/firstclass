<?php
    // $a = [1,2,3,4];

    // $a = ["小明","阿國","小強","阿德"];

    // $a = [
    //     0 => "老王",
    //     1 => "老強",
    //     2 => "老陳",
    //     3 => "小華",
    // ];
    
    // $a[]=12;
    // $a[]=35;
    // $a[]=49;
    // $a[]=58;
    // $a[]=489;
    // $a[]=752;

    // $a["小明"] = 55;
    // $a["小華"] = 66;
    // $a["小強"] = 88;

    // $a=[[1,2,3],[4,5,6],[7,8,9]];

    $a = [
        "小名" => ["國文" => 0, "數學" =>20, "歷史" =>10],
        "小草" => ["國文" => 2, "數學" =>10, "歷史" =>30,"化學" => 200],
        "德華" => ["國文" => 13, "數學" =>7, "歷史" =>18],
        "阿國" =>85,
    ];

    echo "<pre>";print_r($a);"</pre>";
    echo "count(/$a)=>".count($a);
    echo 'is_array($a)=>'.is_array($a);
    echo 'in_array($a)=>'.in_array(["國文" => 13],$a);
    echo "<hr>";
    sort($a);
    echo "<pre>";print_r($a);echo "</pre>";
    echo "<hr>";
    $a = array_fill(6,5,"ya");
    echo print_r($a);
    // echo $a["小強"];
?>