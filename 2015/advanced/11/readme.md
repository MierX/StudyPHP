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
    TODO：
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
##  Memcache - php中其他方法介绍
##  Memcache - Telnet终端操作
##  Memcache - 分布式设计
##  Memcache - 分布式设计具体使用
##  Memcache - 缓存失效
##  Memcache - session存储在memcache介绍
##  Memcache - session存储在memcache操作
##  Memcache - tp框架案例应用
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