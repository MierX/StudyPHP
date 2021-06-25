>author：MierX

>github：[StudyPhp](https://github.com/MierX/StudyPhp)

>create：21.6.23 18:14

>motto ：有志者，事竟成
---
#   01
    学习第一天的知识
##  昨天内容回顾
    TODO
##  SVN - 介绍
    svn：
        SubVerSion（子级版本，子级源代码版本控制管理软件），管理着随时间改变的数据
        这些数据放置在一个中央资料档案库repository中
        这个档案库很像一个普通的文件服务器,不过它会记住每一次文件的变动
        这样你就可以把档案恢复到旧的版本,或是浏览文件的变动历史
        许多人会把版本控制系統想像成某种“时光机器”
    作用：
        同一个项目有三个程序员共同开发，不可避免的情况是同一个程序文件有可能三个人都开发、
        这样他们在不同时间段之内给服务器上传自己开发好的文件的时候就会出现“文件覆盖”的情况
        后上传的文件会覆盖先上传的文件
        SVN作用之一就是避免上述情况发生
        ①：多人开发同一个项目不会出现代码覆盖情况
        ②：针对一个文件可以创建许多不同版本，并且可以随时查看不同版本的内容
        ③：公司领导可以通过svn查看每个人的工作情况
![服务器中同一个文件被多人共同开发](../../markdown_assets/readme-1624527925390.png)
![多人同时开发同一个项目，一个文件不可避免要由多人同时开发可能会遇到的问题](../../markdown_assets/readme-1624527968209.png)
##  SVN - 服务器端和客户端软件安装
    TODO
![服务器端软件安装](../../markdown_assets/readme-1624528263292.png)
![服务器端软件安装](../../markdown_assets/readme-1624528271868.png)
![服务器端软件安装](../../markdown_assets/readme-1624528278025.png)
![服务器端软件安装](../../markdown_assets/readme-1624528283820.png)
![客户端软件安装](../../markdown_assets/readme-1624528307742.png)
![客户端软件安装](../../markdown_assets/readme-1624528325509.png)
##  SVN - 为SVN服务器端创建代码仓库
    给svn服务器端创建多个代码仓库，用于存储不同开发项目的程序源代码
    svnadmin create 仓库绝对路径：通过cmd执行，来创建仓库
![创建三个代码仓库](../../markdown_assets/readme-1624528643507.png)
![为不同的程序项目创建对应的仓库，分别存储不同项目的程序代码文件](../../markdown_assets/readme-1624528709832.png)
![为不同的程序项目创建对应的仓库，分别存储不同项目的程序代码文件](../../markdown_assets/readme-1624528722711.png)
##  SVN - 启动仓库服务（本地与仓库连接）
    svnserver -d -r 仓库地址：启动仓库服务（-d后面可接端口号，svn服务采用svn协议，默认是3690，-r后接仓库地址，该命令窗口不可关闭）
    右键、checkout(检出)：在客户端中使用
![启动仓库服务](../../markdown_assets/readme-1624528981253.png)
![查看服务进程](../../markdown_assets/readme-1624528994531.png)
![客户端检出仓库](../../markdown_assets/readme-1624529012768.png)
![右键->checkout后设置主机名和本地工作目录](../../markdown_assets/readme-1624529069646.png)
![拉取仓库](../../markdown_assets/readme-1624529083969.png)
![取得联系](../../markdown_assets/readme-1624529103464.png)
##  SVN - 开启仓库匿名账号权限（提交第一个程序文件）
    给svn仓库提交第一个程序文件：
        首先右键、svn、add：本地的.svn对该文件形成管理,每个文件只需要一次add操作接口
        最后右键、commit（提交）：本地的文件提交给svn仓库
    文件颜色标志：
        蓝色加号：本地的.svn对该文件有形成管理
        绿色对号：本地文件、.svn管理的版本文件、仓库文件三者内部一致
        红色叹号：本地文件与.svn和仓库文件不一致(用户自己修改了该文件)
        黄色叹号：表示该文件正处于冲突状态
        蓝色问号：新建的一个文件，本地.svn和远程仓库对该文件都没有记录
![给svn仓库提交第一个程序文件](../../markdown_assets/readme-1624529540547.png)
![给svn仓库提交第一个程序文件](../../markdown_assets/readme-1624529547822.png)
![给svn仓库提交第一个程序文件](../../markdown_assets/readme-1624529556296.png)
![开启仓库匿名账号权限](../../markdown_assets/readme-1624529590458.png)
![开启仓库匿名账号权限](../../markdown_assets/readme-1624529597331.png)
![在仓库内部查看已经提交的文件](../../markdown_assets/readme-1624529708238.png)
![在仓库内部查看已经提交的文件](../../markdown_assets/readme-1624529714984.png)
##  SVN - 新目录提交文件细节和一键commit快速提交文件
    多个程序员给仓库提交文件:
        首次使用svn执行checkout，同时会把仓库最新程序文件更新到本地
        给仓库提交程序文件，执行commit指令
        把仓库最新的程序文件更新到本地，执行update指令
        后期 commit 和 update 指令要频繁使用
    一键commit同时提交多个文件：
        为了加快文件的提交速度，可以在项目文件目录右键点击commit，svn会把当前目录及内部所有子级递归目录需要提交的文件给选定供commit操作
    新目录文件的提交：
        新目录内部的文件不能直接提交，必须是目录本身已经提交给仓库了，该目录文件才可以提交
![多个程序员给仓库提交文件](../../markdown_assets/readme-1624530363633.png)
![一键commit同时提交多个文件](../../markdown_assets/readme-1624583815207.png)
![一键commit同时提交多个文件](../../markdown_assets/readme-1624583831400.png)
![一键commit同时提交多个文件](../../markdown_assets/readme-1624583839383.png)
##  SVN - 开启多个仓库服务及就用户更换主机名地址
    开启多个仓库服务：
        svnserve -d -r 仓库地址的上级目录：将上级目录下所有的仓库开启服务
    用户更换svn主机名地址：
        删除.svn文件，断开与仓库的联系
        重新checkout并根据svn新主机名建立与仓库的新联系
![把所有仓库的上级目录当成服务给启动起来](../../markdown_assets/readme-1624583975250.png)
![svn仓库的主机名可以设置如下](../../markdown_assets/readme-1624583991625.png)
![用户更换svn主机名地址](../../markdown_assets/readme-1624584060735.png)
##  SVN - 文件不同版本切换
    一个程序文件可以在svn仓库里边形成许多不同版本，并可以随时查看、对比
![查看仓库版本日志](../../markdown_assets/readme-1624584528754.png)
![查看仓库版本日志](../../markdown_assets/readme-1624584613655.png)
![切换到特定版本](../../markdown_assets/readme-1624584635990.png)
![切换到特定版本](../../markdown_assets/readme-1624584644727.png)
![切换到特定版本](../../markdown_assets/readme-1624584651976.png)
##  SVN - 冲突
    两个程序员在短时间内对同一个文件进行修改，并进行提交
    后提交的文件会尝试覆盖先提交者的文件，但是不会成功，因为有“冲突”机制避免此情况发生
    svn的冲突：
        广义：提交程序文件本地版本号码小于仓库服务器版本号码
        侠义：多个程序员对同一个文件、同一处代码进行修改，在他们提交文件的时候会产生冲突
![冲突案例](../../markdown_assets/readme-1624584736166.png)
##  SVN - 冲突解决
    令牌方式解决：
        给每个文件设置令牌，谁获得令牌谁有权利开发该文件
        vss（visual source safe）源代码控制管理软件使用该方式
    通过版本号码控制：
        用户commit文件，本地文件版本与仓库版本号码必须一致才可以提交，否则禁止提交
        svn就是通过版本号码解决冲突
    冲突的具体形式：
        大家修改的代码不在同一处：
            执行upadate操作，把仓库最新的文件更新到本地，并和本地文件做Merge融合操作，再提交本地修改的文件
        大家修改的代码在同一处：
            执行update操作，把最新的版本更新到本地，与本地文件做merge融合操作后，再对冲突的文件进行修改合并后再提交
![解决大家修改的代码不在同一处的冲突](../../markdown_assets/readme-1624585034670.png)
![解决大家修改的代码不在同一处的冲突](../../markdown_assets/readme-1624585040529.png)
![解决大家修改的代码不在同一处的冲突](../../markdown_assets/readme-1624585047604.png)
![解决大家修改的代码在同一处的冲突](../../markdown_assets/readme-1624585144838.png)
![解决大家修改的代码在同一处的冲突](../../markdown_assets/readme-1624585151456.png)
![解决大家修改的代码在同一处的冲突](../../markdown_assets/readme-1624585158564.png)
![解决大家修改的代码在同一处的冲突](../../markdown_assets/readme-1624585166260.png)
![解决大家修改的代码在同一处的冲突](../../markdown_assets/readme-1624585172643.png)
##  SVN - 账号和权限设置
    TODO
![配置文件目录](../../markdown_assets/readme-1624585525082.png)
![关闭匿名权限](../../markdown_assets/readme-1624585532623.png)
![引入对应的辅助配置文件](../../markdown_assets/readme-1624585541108.png)
![设置账号](../../markdown_assets/readme-1624585548622.png)
![给具体用户设置权限](../../markdown_assets/readme-1624585556111.png)
![给具体用户设置权限](../../markdown_assets/readme-1624585627269.png)
##  SVN - 给组别设置权限
    TODO
![给一个组别设置权限](../../markdown_assets/readme-1624585644931.png)
##  SVN - 开启只操作某个目录的权限
    首先管理员先在仓库中创建新目录video并提交给svn仓库
    然后给外部团队设置账号和设置工作目录、分支目录权限
    然后外部团队建立与仓库分支目录的联系
    然后外部团队给该目录提交文件
    最后管理员执行update操作，把该分支目录从仓库更新下来即可查看外部团队的工作情况
![把被操作的文件目录video创建好并提交给svn仓库](../../markdown_assets/readme-1624585840233.png)
![创建对应外部团队账号](../../markdown_assets/readme-1624585846870.png)
![设置用户操作权限](../../markdown_assets/readme-1624585852283.png)
![使得wai2组员对video目录进行开发并提交文件](../../markdown_assets/readme-1624585858006.png)
![使得wai2组员对video目录进行开发并提交文件](../../markdown_assets/readme-1624585862717.png)
![使得wai2账号与仓库的video目录取得联系](../../markdown_assets/readme-1624585871860.png)
##  SVN - 设置开机启动项服务
    TODO
![设置开机启动项服务](../../markdown_assets/readme-1624585938328.png)
![设置开机启动项服务](../../markdown_assets/readme-1624585943951.png)
![设置开机启动项服务](../../markdown_assets/readme-1624585956005.png)
![设置开机启动项服务](../../markdown_assets/readme-1624585962292.png)
![设置开机启动项服务](../../markdown_assets/readme-1624585968891.png)
![设置开机启动项服务](../../markdown_assets/readme-1624585974340.png)
![设置开机启动项服务](../../markdown_assets/readme-1624585980668.png)
![设置开机启动项服务](../../markdown_assets/readme-1624585990025.png)
##  SVN - 实现SVN查看bug
    TODO
![实现SVN查看bug](../../markdown_assets/readme-1624586017513.png)
![实现SVN查看bug](../../markdown_assets/readme-1624586024614.png)
![实现SVN查看bug](../../markdown_assets/readme-1624586035439.png)
![实现SVN查看bug](../../markdown_assets/readme-1624586042234.png)
![实现SVN查看bug](../../markdown_assets/readme-1624586048701.png)
##  SVN - 模拟真实环境使用
    TODO
![模拟真实环境使用](../../markdown_assets/readme-1624586079020.png)