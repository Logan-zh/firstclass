<h1>天干地支年別</h1>
<?php
    $start = 1024;
    $sky = ['甲','乙','丙','丁','戊','己','庚','辛','壬','葵',
    ];
    $land = ['子','丑','寅','卯','辰','巳','午','未','申','酉','戌','亥',
    ];
    $year = 2024;

    $arr=[];
    // 減法
    // for($i=1024;$i<2084;$i++){
    //     $arr[$i]=$sky[($i-4)%10].$land[($i-4)%12];
    // }
    // echo "<pre>";print_r($arr);
    // echo $year .'是'.$arr[$year].'年';

    // 修改順序
    // $sky = ['庚','辛','壬','葵','甲','乙','丙','丁','戊','己',
    // ];
    // $land = ['申','酉','戌','亥','子','丑','寅','卯','辰','巳','午','未',
    // ];

    // for($i=1024;$i<2084;$i++){
    //     $arr[$i]=$sky[$i%10].$land[$i%12];
    // }
    // echo "<pre>";print_r($arr);
    // echo $year .'是'.$arr[$year].'年';

    $a = [2,4,6,1,8];
    $b=[];
    for($i=count($a)-1;$i>=0;$i--){
        $b[] = $a[$i];
    }
    echo "<pre>";print_r($b);



    
    // floor 無條件退位
    // ceil 無條件進位
    // round 四捨五入
    // max  array最大值 
    // min  array最小值

    // for($i=0;$i<floor(count($a)/2);$i++){
    //     $index = count($a)-1-$i;
    //     $tmp = $a[$i];
    //     $a[$i] = $a[$index];
    //     $a[$index] = $tmp;
        
    // }
    // echo "<pre>";print_r($a);

?>