>author：MierX

>github：[StudyPhp](https://github.com/MierX/StudyPhp)

>create：21.6.29 17:50

>motto ：有志者，事竟成
---
#   01
    学习第一天的知识
##  Memcache - 核心优化概述
    系统核心优化思路：以小博大，利用最小的资源换取最大的汇报
    工具：memcache、mysql优化、静态化技术
![优化的是什么地方](../../markdown_assets/readme-1625131957556.png)
##  Memcache - 与Redis的比较
    memcache：memory cache，内存缓存技术
    memcache或redis是中间介质，可以帮助我们通过php语言实现对内存的操作
    memcache与redis的区别：
        memcache：
            每个key的数据最大支持1M
            发布的早，对各种技术支持比较全面，session可以存储memcache中，各种框架（如TP）对memcache支持的比较好
            比较老牌、传统的内存缓存技术
            适合存储简单、实用的数据
            数据类型只有string
            没有持久化
        redis：
            每个key的数据最大是1G
            对各种技术支持没有memcache好
            新兴的内存缓存技术
            适合做集合计算（list/set/sorted set）
            数据类型较丰富（string/list/set/sorted set/hash）
            有持久化
    memcache与redis的联系：
        数据存储在内存当中，数据模型都是key/value
        两种内存缓存技术都要掌握，大家有各自擅长的地方
        memcache：对session支持，各种框架支持
        redis：集合计算
![中间介质](../../markdown_assets/readme-1625133190887.png)
##  Memcache - 安装与开启服务
    TODO
![解压](../../markdown_assets/readme-1625135864789.png)
![解压后生成文件（服务器端执行文件）](../../markdown_assets/readme-1625135872293.png)
![前台开启服务（不推荐）](../../markdown_assets/readme-1625135938593.png)
![开启服务可以设置的参数](../../markdown_assets/readme-1625135959759.png)
![通过设置参数开启memcache服务](../../markdown_assets/readme-1625135972290.png)
![之后可以在任务里边看到memcache](../../markdown_assets/readme-1625136044357.png)
![sc  create  名称  svn相关参数](../../markdown_assets/readme-1625136086080.png)
![现在没有memcache服务](../../markdown_assets/readme-1625136102205.png)
![开机启动项服务有安装成功](../../markdown_assets/readme-1625136115082.png)
![通过-d start开启服务](../../markdown_assets/readme-1625136128024.png)
![停止和卸载服务](../../markdown_assets/readme-1625136138354.png)
##  Memcache - 开启php对应的扩展
    TODO：
![给php.ini设置对应的扩展](../../markdown_assets/readme-1625137382306.png)
![给php扩展目录拷贝对应的扩展文件](../../markdown_assets/readme-1625137388053.png)
![php开启memcache扩展成功](../../markdown_assets/readme-1625137395349.png)
##  Memcache - php操作有效期问题
    在php中memcache体现为“类memcache”
    具体使用：实例化对象，对象调用成员方法即可
    具体操作：
        设置：
            $obj->set(key, value, 0/1是否有压缩, 有效期)
            是否压缩：
                压缩，不考虑速度，计较内存空间
                不压缩，考虑速度，不计较内存空间
            有效期：
                秒
        获取：
            $obj->get(key)
        删除：
            $obj->delete(key)
    memcache中key的命名：
        除了空格不能作为key的组成部分，长度不能超过250字节
    memcache有效期：
        为0即不失效
        两种方式：
            时间戳方式：1970-01-01到目前的秒数
            时间差：时间数字，从目前往后延伸的时间长度，时间差的值大到一定程序与时间戳的值可以保存一致（不能超过30天，会被视为时间戳）
![连接memcache服务器成功](../../markdown_assets/readme-1625137623959.png)
![给memcache设置一个week的key变量](../../markdown_assets/readme-1625137630153.png)
![把刚才设置好的key给读取出来](../../markdown_assets/readme-1625137635381.png)
![key的命名](../../markdown_assets/readme-1625137639906.png)
![key的命名](../../markdown_assets/readme-1625137645019.png)
![两种方式设置key的有效期](../../markdown_assets/readme-1625137650854.png)
![获取有效期内的key信息](../../markdown_assets/readme-1625137656137.png)
![有效期的限制（变形）](../../markdown_assets/readme-1625137662082.png)
![前者的信息可以正常获取，后者已经早早过期](../../markdown_assets/readme-1625137666993.png)
##  Memcache - 各种数据类型的存储
    php的数据类型：
        基本类型：int、string、boolean、float
        复合类型：array、object、resource、null
    有的时候在memcache中需要把各种数据类型信息都变为字符串存储，就需要对复合类型信息进行序列化操作:
        serialize()
        unserailize()
    第三个参数压缩作用：通过zlib进行压缩处理
![基本类型数据在memcache内部通过字符串存储](../../markdown_assets/readme-1625735596614.png)
![基本类型数据在memcache内部通过字符串存储](../../markdown_assets/readme-1625735604959.png)
![复合类型数据在memcache中是原样存储](../../markdown_assets/readme-1625735631019.png)
![复合类型数据在memcache中是原样存储](../../markdown_assets/readme-1625735639035.png)
##  Memcache - php中其他方法介绍
    add()：给memcache增加一个key，不存在就增加，存在则报错
    set()：给memcache设置一个key，不存在就增加，存在则修改
    close()：关闭memcache连接，一般设置在脚本最后
    decrement()：给指定key的值自减1
    increment()：给指定key的值自加1
    flush()：清空memcache的全部key
    replace()：替换key的值为其他值，存在就替换，不存在就报错
##  Memcache - Telnet终端操作
    telnet是远程登录协议
    telnet提示不是内部或外部指令的解决：控制面板--》程序和功能--》打开或关闭windows服务--》telnet客户端
    在终端窗口实现memcache的操作：
        设置：
            > set key 是否压缩  有效期  数据长度  [回车]
            > 数据
    
            > add  key  是否压缩  有效期  数据长度  [回车]
            > 数据
    
            > replace  key  是否压缩  有效期  数据长度 [回车]
            > 数据
            注意：数据真实长度与设置长度要完全一致
        获取：
            > get  key
        删除：
            > delete key
            > flush_all：删除全部的key
    获取memcache统计的信息：
        在php程序里边可以通过getStats()获得memcache服务器的统计信息
![登录到memcache的操作终端](../../markdown_assets/readme-1625736212695.png)
![登录memcache终端成功](../../markdown_assets/readme-1625736250393.png)
![telnet提示不是内部或外部指令的解决](../../markdown_assets/readme-1625736322371.png)
![给memcache设置一个key和读取](../../markdown_assets/readme-1625736581372.png)
![通过php程序也可以读取到终端窗口设置的key](../../markdown_assets/readme-1625736595326.png)
![获取memcache统计的信息](../../markdown_assets/readme-1625736613639.png)
![利用SecureCRT也可以实现对memcache的终端操作](../../markdown_assets/readme-1625736644192.png)
![利用SecureCRT也可以实现对memcache的终端操作](../../markdown_assets/readme-1625736655494.png)
##  Memcache - 分布式设计
    分布式：如果单个memcache保存的数据非常多，memcache本身工作负载就会非常高，为了降低该memcache的工作量，提高其运行速度，可以设置多个memcache平均分担工作量
    redis的分布式是“主从模式”结构，一主多从
    memcache的分布式与Redis的不同，其是把一台memcache的工作平均分配给多个memcache分担
##  Memcache - 分布式设计具体使用
    分布式的具体实施：
        可以在一个服务器里边开启多个memcache服务
        可以配置多个服务器，每个服务器里都运行memcache服务
        每个memcache服务器都是平等的，中间通过“算法”保证数据的平均分配
        php代码的编写还保持原有习惯即可
        key的分配原则：依次轮询、求余
![memcache分布式](../../markdown_assets/readme-1625736861760.png)
![一台服务器开启三个memcache服务](../../markdown_assets/readme-1625736897853.png)
![分布式php代码的设计](../../markdown_assets/readme-1625736917997.png)
![无需考虑key存储在那个memcache服务器内部，memcache通过算法会自动给匹配上，不影响我们正常获得数据](../../markdown_assets/readme-1625736926760.png)
![在每个php脚本文件内部服务器连接的顺序都要保持一致，否则数据有可能获取不到](../../markdown_assets/readme-1625736931913.png)
![在每个php脚本文件内部服务器连接的顺序都要保持一致，否则数据有可能获取不到](../../markdown_assets/readme-1625736937431.png)
##  Memcache - 缓存失效
    缓存失效：memcache中的key超过有效期、或被系统强制删除掉了
    有效期过期：
        session信息过期(失效了)，通过“懒惰”模式给删除的
        session是在文件中存储，如果session已经过期，其文件还是存在的，下次有一个用户访问session信息(用户登录系统)，此时已经过期的session就有一定的几率被删除(session文件被删除)
        memcache中key的删除也是懒惰模式，如果超过有效期，该key还是存在的，当你get获取它的时候，其就消失了
    空间不足被强制删除：
        memcache的内存可用空间默认为64MB，如果存储的数据非常多，可用空间不足了，此时仍然可以存储数据，因为memcache内部有LRU机制
        LRU: Least  recently use（最近很少被使用的数据），内存空间如果不足，就会删除最近很少经常使用的数据
        如果不想使用LRU机制，就可以在开启memcache服务的时候设置参数-M
        -M:内存空间耗尽，要报错，而不使用LRU机制删除数据
![有效期过期](../../markdown_assets/readme-1625737077560.png)
![懒惰模式](../../markdown_assets/readme-1625737090746.png)
![关闭LRU机制](../../markdown_assets/readme-1625737224068.png)
##  Memcache - session存储在memcache介绍
    传统session的数据是在硬盘的文件中存储的
    该session很大情况用于存储用户的相关信息
    两个服务器的session如果是文件形成存储，则他们的session互相不能通信
    两个服务器的session如果是存储在memcache中的，则他们的session可以通信
    一个网站是有多个服务器支撑的，用户在服务器1里边登录系统，其session持久化的信息报保存在一个memcache服务器里边，这样服务器2/3/4也可以去memcache读取session信息，就可以保证用户访问各个服务器的时候无需重复登录系统
![session存储在memcache](../../markdown_assets/readme-1625737552867.png)
##  Memcache - session存储在memcache操作
    php.ini关于session的设置：
![存储session形式](../../markdown_assets/readme-1625737625310.png)
![存储在哪](../../markdown_assets/readme-1625737632369.png)
![session存储到memcache的设置](../../markdown_assets/readme-1625737637694.png)
![读取memcache中的session信息](../../markdown_assets/readme-1625737642878.png)
![session保存到memcache中key的名称为session_id的值](../../markdown_assets/readme-1625737648695.png)
![如果memcache是分布式的](../../markdown_assets/readme-1625737655162.png)
##  Memcache - tp框架案例应用
    在网站前台商品列表页面处，给商品列表信息存储在memcache中，这样许多人在访问的时候就通过memcache获得数据，提供页面的请求速度
    在thinkphp框架中使用memcache缓存：
        通过S()函数连接memcache服务：S(array(type=>’memcache’,‘host’=>主机名,’port’=>端口号码)) 
        操作key：S(key,value,有效期);
        获取key：S(key);
        删除key：S(key,null);
![商品列表页面没有使用memcache，请求时间为192ms](../../markdown_assets/readme-1625737757171.png)
![设置memcache缓存之后的效果：请求时间从192ms变为129ms](../../markdown_assets/readme-1625737763945.png)
![在thinkphp框架中使用memcache缓存](../../markdown_assets/readme-1625737804450.png)
![在thinkphp框架中使用memcache缓存](../../markdown_assets/readme-1625737769290.png)
![数据库的数据如果有做修改，就要删除旧的缓存，根据新的数据内容生成一个新缓存，具体有两种实现方式](../../markdown_assets/readme-1625737774626.png)
#   02
    学习第二天的知识
##  MySQL优化 - 昨天内容回顾
    TODO
##  MySQL优化 - 优化概述及存储引擎介绍
##  MySQL优化 - innodb和myisam表的具体特点
##  MySQL优化 - myisam压缩技术
##  MySQL优化 - myisam压缩技术和存储引擎选择
##  MySQL优化 - 字段类型选取
##  MySQL优化 - 逆范式
##  MySQL优化 - 是否使用索引的比较
##  MySQL优化 - 什么是索引
##  MySQL优化 - 索引具体操作（创建和删除）
##  MySQL优化 - 执行索引计划
##  MySQL优化 - 适合索引的场景
##  MySQL优化 - 索引使用原则
#   03
    学习第三天的知识
##  MySQL优化 - 昨天内容回顾
    TODO
##  MySQL优化 - 索引设计依据
##  MySQL优化 - 索引前缀
##  MySQL优化 - 全文索引
##  MySQL优化 - 索引结构（非聚集）
##  MySQL优化 - 索引结构（聚集）
##  MySQL优化 - 查询缓存
##  MySQL优化 - 分表分区概述
##  MySQL优化 - 四种分区算法
##  MySQL优化 - 分区增加减少管理
##  MySQL优化 - 物理分表设计
##  MySQL优化 - 垂直分表设计
##  MySQL优化 - 架构设计
##  MySQL优化 - 慢查询日志设置
#   04
    学习第四天的知识
##  静态化 - 昨天内容回顾
    TODO
##  静态化 - 大量数据写入优化
##  静态化 - 单表和多表查询
##  静态化 - limit使用
##  静态化 - 强制不排序
##  静态化 - 介绍
##  静态化 - 简单实现静态化效果
##  静态化 - 相关函数
##  静态化 - 在tp项目中应用
##  静态化 - 通过ajax实现动态信息显示
##  静态化 - 与headre、sessionstart、setcookie的关系
##  静态化 - 配置及简单使用
##  静态化 - 带参数使用
##  静态化 - 隐藏入口文件
##  静态化 - tp项目中三种伪静态体现