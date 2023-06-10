<!-- php中变量用一个$后加变量名来表示，变量名区分大小写。（变量，常量，php配置文件php.ini区分大小写，其他不分） -->
<!-- 如果文件访问目录中有中文， 报0行错误 -->
<?php 

    /**
     * 定义变量
     * 规制：变量名与php中其他的标签一样遵循相同的规则
     *      一个有效的变量名由字母或下划线开头，后面更上任意数量的字母，数字，或下划线。
     * 注意：
     *      a.php中的变量名是大小写敏感的
     *      b.php中变量可以直接在写出变量名后直接使用，而不需要js中的"声明赋值"过程
     * 
     * 列子：
     *      $let = 'a';
     *      $Let = 'b';
     *      echo '$let, $Let' ;  // 输出"a,b"
     */
    $const = 'hello';
    echo $const;
    // ----------------------------------------------------------------------

    /**
     * PHP常见的数据类型
     *  php中的数据类型相较于js多了很多种，但其中相当一部分对于我们来说鲜少用到。
     * （1）布尔类型：Boolean
     * （2）整数类型：Integer
     * （3）浮点类型：Float
     * （4）字符类型：String
     * （5）数组类型：Array
     * （6）对象类型：Object
     * （7）空值类型：null
     * 
     * 有两个方法判断变量的数据类型
     * var_dump(变量| 表达式) :函数用来查看表达式的值和归属类型
     * gettype（变量| 表达式）:函数用来查看变量或者表达式的类型
     */


    // PHP中字符串拼接采用.点运算符实现！不是+号实现 ！！！！
    $str = '我是字符串';
    echo gettype($str); //String


    // !!! PHP中的字符串和js里面有什么不同
    //  1,JS里面拼接用 + 但是php是用 . 来拼接
    //  2，'' 和 "" 区别："" 解析变量，然后输出  '' 单引号直接输出内容
    $marks = "这是双引号的" ;
    echo $marks;
    echo '$marks';
    echo "$marks";

    $joint = '我是' ;
    $name_joinit = '小明';
    // 这是单引号的
    echo '您好'.$joint.$name_joinit;
    // 这是双引号的 解析后才输出
    echo "您好 $joint $name_joinit";

    // ---------------------------------------------------------------------------
    $integer = 666;
    echo gettype($integer); //Integer 整数
    // ------------------------------------------------------------------------
    /**
     * 浮点数Float
     * 描述:浮点类型，又被称为浮点数Float或者双精度数double或者实数real
     */
    $aa = 10.2;
    echo gettype($aa); //double

    $flag = false;
    echo gettype($flag); // Boolean
    // ---------------------------------------------------------------------------
?>