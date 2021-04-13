##  01
    学习第一天的知识
##  介绍
    TODO
##  框架文件目录简单介绍
    TODO
##  创建应用
    TODO
##  四种路由形式
    TODO
##  创建控制器
    TODO
##  创建视图模板文件
    使用display()方法调用视图模板：
        视图模板名称默认与当前操作方法一致
        在index.php入口文件中设置常量APP_DEBUG为true
        创建模板文件
![](01/20210407171157.png)
![](01/20210407171804.png)
##  已有模板与tp框架做结合
    具体实现步骤：
        复制模板文件到View指定目录
        复制css、img、js静态资源文件到系统指定目录
        把静态资源（css、img、js）文件的路径设置为“常量”信息(在index入口文件设置) 
        在模板文件中通过常量引入静态资源（css、img、js）文件
        css文件本身的图片设置，其路径相对css文件本身设置
        后续a、d重复实现即可
    静态资源文件的引入：
        在模板中引入css文件，最好不要使用相对路径，会收到路由的影响
        正确的引入css静态文件的方式最好是“绝对路径”，相对虚拟主机目录的绝对路径
![](01/1.png)
![](01/2.png)
![](01/3.png)
##  创建Admin后台分组
    TODO
##  搭建管理员登录系统页面
    TODO
##  后台品字页面搭建
    TODO
##  后台商品相关页面搭建
    TODO
##  主要配置文件介绍
    ThinkPHP/Conf/convention.php是系统主要配置文件
    项目库/Common/Conf/config.php是项目的配置文件
    项目库/Home/Conf/config.php是项目中Home分组的配置文件
    以上三个配置文件，如果存在同名的配置变量，后者会覆盖前者
    
    系统配置并不是全部配置在convention.php中，只是大部分在这个文件中，在behavior行为文件中也有定义一部分，在框架代码的其它角落也有一部分定义
##  框架其他两种配置变量体现
    C()：大C函数，可以读取或设置配置变量，第一个参数是配置变量名称，第二个参数是要设置的值
    页面底部显示跟踪信息，在项目配置文件中开启SHOW_PAGE_TRACE为true
    默认分组设置：
        设置DEFAULT_MODULE配置变量中的默认分组
        设置MODULE_ALLOW_LIST配置变量中允许访问的分组列表
    开发者调试模式在index.php中头部设置define('APP_DEBUG', true)
##  框架的两种模式
    TODO
##  开启smarty模板引擎
    在config.php中设置配置变量TMPL_ENGINE_TYPE为Smarty
##  标记符号冲突及为smarty做配置
    {}与css或js有冲突解决：
        在{}与内容中间设置空格
        使得{}左右标记不在同一行
        设置{literal}{/literal}
        外部方式引入css、js文件内容
        变换smarty的标记符号
    通过配置变量TMPL_ENGINE_CONFIG设置
#   02
    学习第二天的知识
##  昨天内容回顾
    TODO
##  数据库配置
    /* 数据库设置 */
    'DB_TYPE'               =>  '',     // 数据库类型
    'DB_HOST'               =>  '', // 服务器地址
    'DB_NAME'               =>  '',          // 数据库名
    'DB_USER'               =>  '',      // 用户名
    'DB_PWD'                =>  '',          // 密码
    'DB_PORT'               =>  '',        // 端口
    'DB_PREFIX'             =>  '',    // 数据库表前缀
    'DB_PARAMS'          	=>  array(), // 数据库连接参数    
    'DB_DEBUG'  			=>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
    'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
    'DB_DEPLOY_TYPE'        =>  0, // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
    'DB_RW_SEPARATE'        =>  false,       // 数据库读写是否分离 主从式有效
    'DB_MASTER_NUM'         =>  1, // 读写分离后 主服务器数量
    'DB_SLAVE_NO'           =>  '', // 指定从服务器序号
##  创建Model类及简单使用
    原则：每个数据表 都对应一个Model模型类，具体与创建Controller控制器相似，就是把Controller字样换成Model即可
    如果有的数据表的前缀与主流前缀不一样，为了避免在实例化model模型类的时候 该english与主流前缀sw_做结合，就可以在EnglishModel模型类里边重写父类属性定义操作的真实数据表名即可
##  两种方式实例化model类对象
    实例化普通model类对象：
        $model =new \XXX\XXXXModel();
        该方式实例化对象可以调用父类Model的一些方法也可以在本身类制作相关方法并调用
    实例化基类model类对象：
        可以实现对数据库的基本操作：
            $model = D(); //实例化基类Model，没有关联任何表
            $model = D(‘Goods’); //实例化基类Model对象,并操作xx_goods业务数据表
            (该方式允许我们即使不创建具体的model模型类文件，也可以对数据表的数据进行操作)
            如果一个数据表没有特殊方法要求，就可以通过D(XXX)进行操作。
            如果数据表有特殊方法要求(例如用户名和密码判断需要一个特殊方法)，就需要在普通model模型类里边定义好，通过new  \Model\XXXModel()形式实例化对象，进而操作特殊方法。
##  数据查询select
    调用方法：model对象->select()
    具体使用：
    	$model -> select();      //查询并返回数据表的全部记录信息
    	$model -> select(主键id值);   //查询主键信息等于条件id值的记录
    	$model -> select(‘id1,id2,id3...’);  //查询主键信息在条件范围内的记录
    	(使用select()方法会始终返回一个二维数组信息)
##  辅助方法操作（1）
    where()条件：$model -> where(条件值);  //条件值就是sql语句where后边的条件信息
    limit()限制条数：$model -> limit(数字);  //严格查询数字条数的记录
    field()限制查询字段：$model -> field(字段1，字段2，字段3);
    order()排序：$model -> order(‘排序条件字段asc/desc’);
    group()分组查询group by：$model -> group(分组条件);
##  辅助方法操作（2）
    having()条件设置方法：having设置查询条件的效果与where使用效果类似
        区别：
            where：语句条件字段，必须是“数据表中存在的”字段
            having：语句条件字段，必须是查询结果集中存在的字段
            where()/limit()/field() 三个方法直接存在于父类Model里边
            having()/order()/group() 三个方法存在于Model的魔术方法__call()里边
            一个对象调用本身类不存在的方法，会自动执行__call()魔术方法
##  辅助方法连贯操作
    以上具体方法在使用的时候可以一并使用多个，形成连贯操作,并且没有顺序要求，例如：
        $obj->limit()->order()->field()->having()->group()->select()
        每个方法执行完毕都把参数信息传递给成员options，该options形成一个数组，系统最后就是依次把options数组的各个元素拼装到基本结构sql语句里边
##  两种添加数据方式add
    调用方法：model对象->add()，具体两种方式使用：
        数组方式
        	$数组 = array(
        		元素(键名=>值)，
        		元素(键名=>值)，
        		。。。。
        	)
        	$model(普通对象) -> add(数组);
        	注意：数组的元素键名与数据表字段的名称必须一致
        AR(Active Record活跃记录)方式
        	$model -> 属性 = 值;   
        	$model -> 属性 = 值;
        	$model ->add();
        	注意：属性值 与 数据表字段一致，否则不给写入数据
            AR规范要求：
            A.一个model模型类与一个具体的数据表对应
            B.model模型类实例化的对象 与 数据表的一条记录对应
            C.model对象的属性 与 记录的字段对应
            TP框架的AR是仿真产品,因为在每个业务/普通Model模型类里边并不存在对应数据表的字段信息。
        add()方法返回新记录的主键id值
##  修改数据及注意save
    调用方法：model对象->save()，与add添加一致具体两种方式使用：
        数组方式
        	$model -> save(数组);
        AR方式
        	$model -> 属性(字段) = 值;
        	$model -> 属性(字段) = 值;
        	$model ->save();
        注意：数组的元素下标(属性字段)必须与数据表字段保持一致
        save()方法返回受影响的记录条数
        mysql本身的语法规则允许一次性修改一个表的全部记录结果
        在实际的项目里边，一般禁止修改数据表的全部数据
        注意：数据修改必须设置条件，主键id 或 where()方法，二选一即可，否则执行失败。
##  后台商品添加的表单展示及收集操作
    TODO
##  后台商品修改的表单展示及收集操作
    pathinfo路由解析方式传递get参数信息格式：
        http:网址/index.php/分组/控制器/操作方法/名称/值/名称/值
    控制器操作方法接收get参数：
        并不是直接使用$_GET接收信息，而是通过方法的形式参数接收。
        function 方法名称($名称,$名称){}：传递的get变量名称与方法形参变量的名称必须一致(形参参数在没有默认值的情况下，每次请求必须传递)
        例如：
            http://网址/index.php/Admin/Goods/upd/goods_id/171/goods_name/htc_two 
            上述url通过pathinfo路由传递了两个get参数信息，在upd操作方法里边要定义形参接收：
            function  upd($goods_id,$goods_name){}
##  删除数据和执行原生sql语句
    $sql = “insert   select  update  delete ......”;
    ① 查询语句：  			$model对象 -> query($sql);    返回一个二维数组结果  
    ② 添加/修改/删除语句：  $model对象 -> execute($sql);   返回受影响记录条数
##  表单验证（用户注册功能实现）
    TODO
##  表单验证具体实现
    TODO