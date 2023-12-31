<?php 
    /**
     * 数组类型Array
     * php中的数组实际上是一个有序映射，樱色就是把keys关联到values上的类型
     * 
     * 语法：
     *      array(key => value ,...)
     *      // 键（key）可是是一个整数integer或字符串string
     *      // 值（value）可以是任意类型的值。
     *      自php5.4起，可以直接通过短数组定义方式[ ] 来替代array()
     * 
     * 注意：
     *      （1）php中echo仅用来输出简单值，而复杂数据类型则说通过print_r()函数来输出
     *      （2）php中的数组实际上更相似与js中的对象结构
     *      （3）php中数组的读取和赋值可以通过数组名[键名] 方式来读写
     *      （4）php中数组的长度读取通过count()函数来实现
     *      （5）php中数组内部添加原本并不存在的key值，不会补齐之间的差值
     *           而是仅添加当前新输入的key值。
     *              例：$arr[100] = 100;并不会为数组添加100个元素
     *              例：print_r($frank = ['11','22','33']);
     */



    //  定义数组
    $arr = [1,2,3,4,5];
    // echo 数据简单的数据类型
    // echo $arr[0];
    $arr[99] = 100; // php是直接添加到当前的数组后面，前面的下标内容不会空
    // var_dump(变量) 数据类型
    // print_r(数组) 数组的输出方式     

    var_dump($arr);
    echo '<br/>';
    print_r($arr);
    //注意: php里面的数组和js里面不一样

    // 2。$arr =array(key => value,...)
    $arr2 =array('name' => 'huoshan','sex' => '男', 'age' => 99);
    print_r($arr2);
    echo $arr2['name'];


    //3.$arr=[key => value,...]
    $arr3=['data' => '数据1','data2' => '数据2'];
    print_r($arr3);

    echo '<hr>/';

    // 4. foreach 遍历数组

    // 语法1 ： foreach(数组名字 as 每一项内容 ) {  }
    // foreach ($arr2 as $item) {
    //     echo $item;
    
    // };

    // 语法2 如果要拿遍历的key   foreach(数组名字 as $key=>$value){ }
    foreach($arr2 as $key=> $value) {
        echo $key.':'.$value.'<br/>';
    }
    //!!!! 如果循环次数低于一万次以下，一般使用foreach去遍历。如果是一万次以上，可以使用for循环。


?>
