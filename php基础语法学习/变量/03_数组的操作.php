<?php 

    /**1.数组的排序
     * 关于数组的排序，php提供了不少于12个于数组排序有关的函数
     * 比较常用的是：
     *      sort()和rsort() —— 用于索引数组的排序；
     *      asort()和arsort() —— 用于关联的排序
     *      ksort()和krsort() —— 根据关联数组的键而非值，进行排序；
     *      array_multisort() —— 一个非常有用的函数，可同时对多个数组或多维数组进行排序；
     */


     /**2.用sort()和rsort()对索引数组进行排序
      * 最简单的数组排序函数是sort()和rsort(); sort()函数可按升序对数组元素进行排序（对于字母，是按字母表排序，对于数值，并且字母排在数值之前），
        rosrt()函数可按降序对数组元素的值进行排序；
      * 这两个函数都需要一个数组名作为其参数，若排序成功，返回true，否则返回false
      */

    //例子1：
    $ble= array('小明','小红','李华');
    // 升序
    sort($ble);
    print_r($ble);
    echo '<br/>';
    // 降序
    rsort($ble);
    print_r($ble);
    echo '<hr/>';

    /**
     * 3.用asort()和rasort()对关联数组进行排序
     * 
     */

    //例子2：
    $arr2 = array('title' => 'php','name'=> '火山','sex' => '男');
    sort($arr2);
    
    print_r($arr2);
    echo '<hr/>';

    //例子3 //这个没太懂
    // sort()函数是把关联数组组成一个索引数组，并用数键值取代原来的字符串键；
    // 在这种情况下，需要用到asort()和arsort()函数，它的作用与sort()和rsort()函数一样，但它们保留了每个元素的键与之之间的关系；
    $arr3 = array('星期1','星期2','星期3','星期4','星期5');
    asort($arr3);
    print_r($arr3);
    echo '<br/>';
    arsort($arr3);
    print_r($arr3);


    echo '<hr/>';
    /**
     * 3.添加或删除数组元素
     */

    //  用方括号 [] 可以给数组添加数组元素，
    $arr6 =array(1,2,3,4,5,6);
    $arr6[] = '添加元素';
    // $arr6['newkey'] = 'new value';
    print_r($arr6);
    
    /**
     * PHP提供了五个关于数组操作的函数：
     *      array_unshift() —— 将一个或多个新元素添加到数组的首部；
     *      array_shift() —— 删除数组的第一个元素；
     *      array_push() —— 在数组的末尾添加一个或多个新元素；
     *      array_pop() —— 删除数组的最后一个元素
     *      array_splice —— 删除数组中从某个位置开始的元素，或者把新元素插入到数组中的某个值；
     */
?>