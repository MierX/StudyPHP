>author：MierX

>github：[StudyPhp](https://github.com/MierX/StudyPhp)

>create：21.6.10 17:44

>motto ：有志者，事竟成
---
#   01
    学习第一天的知识
##  Linux - 攒一个裸机电脑
    什么时候使用Linux操作系统？
        作为网站的服务器系统使用
        apache、php、mysql等服务软件需要安装在此系统里边
    Linux系统的特点：
        稳定、免费、网络功能丰富（apache、redis、memcache、邮箱、mysql等等）、安全
    VMware WorkStation 11安装教程：https://jingyan.baidu.com/article/f00622281118e9fbd3f0c8db.html
![创建虚拟机](../../markdown_assets/readme-1623397644104.png)
![创建虚拟机](../../markdown_assets/readme-1623397664129.png)
![创建虚拟机](../../markdown_assets/readme-1623397672260.png)
![创建虚拟机](../../markdown_assets/readme-1623397680538.png)
![创建虚拟机](../../markdown_assets/readme-1623397688619.png)
![创建虚拟机](../../markdown_assets/readme-1623397696020.png)
![创建虚拟机](../../markdown_assets/readme-1623397702927.png)
![创建虚拟机](../../markdown_assets/readme-1623397710289.png)
![创建虚拟机](../../markdown_assets/readme-1623397716979.png)
![创建虚拟机](../../markdown_assets/readme-1623397723740.png)
![创建虚拟机](../../markdown_assets/readme-1623397730049.png)
![创建虚拟机](../../markdown_assets/readme-1623397737345.png)
![创建虚拟机](../../markdown_assets/readme-1623397743545.png)
![创建虚拟机](../../markdown_assets/readme-1623397749816.png)
![创建虚拟机](../../markdown_assets/readme-1623397757009.png)
![创建虚拟机](../../markdown_assets/readme-1623397765238.png)
##  Linux - 安装操作系统
    创建好虚拟机后，开始安装CentOS 6.6 64位
![安装操作系统](../../markdown_assets/readme-1623399402000.png)
![安装操作系统](../../markdown_assets/readme-1623399411029.png)
![安装操作系统](../../markdown_assets/readme-1623399418645.png)
![安装操作系统](../../markdown_assets/readme-1623399426304.png)
![安装操作系统](../../markdown_assets/readme-1623399433736.png)
![安装操作系统](../../markdown_assets/readme-1623399443639.png)
![安装操作系统](../../markdown_assets/readme-1623399450296.png)
![安装操作系统](../../markdown_assets/readme-1623399456468.png)
![安装操作系统](../../markdown_assets/readme-1623399462735.png)
![安装操作系统](../../markdown_assets/readme-1623399468717.png)
![安装操作系统](../../markdown_assets/readme-1623399475366.png)
![安装操作系统](../../markdown_assets/readme-1623399482281.png)
![安装操作系统](../../markdown_assets/readme-1623399489533.png)
![安装操作系统](../../markdown_assets/readme-1623399496291.png)
![安装操作系统](../../markdown_assets/readme-1623399502774.png)
![安装操作系统](../../markdown_assets/readme-1623399509704.png)
![安装操作系统](../../markdown_assets/readme-1623399552850.png)
![安装操作系统](../../markdown_assets/readme-1623399582257.png)
![安装操作系统](../../markdown_assets/readme-1623399589607.png)
![安装操作系统](../../markdown_assets/readme-1623399596804.png)
![安装操作系统](../../markdown_assets/readme-1623399612602.png)
![安装操作系统](../../markdown_assets/readme-1623399619783.png)
![安装操作系统](../../markdown_assets/readme-1623399627024.png)
![安装操作系统](../../markdown_assets/readme-1623399634144.png)
##  Linux - 安装后的配置
    安装好系统后，开始配置CentOS 6.6系统的相关配置
![配置linux系统](../../markdown_assets/readme-1623402167568.png)
![配置linux系统](../../markdown_assets/readme-1623402179219.png)
![配置linux系统](../../markdown_assets/readme-1623402190004.png)
![配置linux系统](../../markdown_assets/readme-1623402232190.png)
![配置linux系统](../../markdown_assets/readme-1623402263302.png)
![配置linux系统](../../markdown_assets/readme-1623402269595.png)
![配置linux系统](../../markdown_assets/readme-1623402277015.png)
##  Linux - 简单命令模式指令
    ls：查看目录下有什么文件
    ls 目录：查看指定目录下有什么文件
    ls -a：查看目录下全部文件（包括隐藏文件）
    ls -l：以详细列表形式查看目录下的文件
    ls -al：以详细列表形式查看目录下的全部文件
    cd 目录名称：目录切换
    pwd：获得当前操作的目录位置
    su -：切换到root用户
    su - root：切换到root用户
    su root：root用户切换，在部分linux系统中，用户是root但权限是普通的
    su 普通用户名：没有横线，切换到指定用户
    exit：退回到上一个用户
        注意：su和exit要配对使用，如果使用多个su，会造成用户叠加
    whoami：查看当前操作者信息
    # init 3：切换桌面模式
    # init 5：切换命令行模式
![简单命令模式指令](../../markdown_assets/readme-1623720110016.png)
![简单命令模式指令](../../markdown_assets/readme-1623720117779.png)
![简单命令模式指令](../../markdown_assets/readme-1623720125938.png)
![简单命令模式指令](../../markdown_assets/readme-1623720133023.png)
![简单命令模式指令](../../markdown_assets/readme-1623720141100.png)
##  Linux - 系统分区原理
    win系统分区原理：类似一个倒着的森林
    linux系统分区原理：类似一个倒着的大树
![win系统分区原理](../../markdown_assets/readme-1623720209422.png)
![linux系统分区原理](../../markdown_assets/readme-1623720217725.png)
##  Linux - 根目录文件介绍
    cd /：切换到根目录
    必须记住的目录：
        /dev：系统硬件设备目录
        /home：用户家目录
        /var：项目部署目录
        /etc：主要配置文件目录
        /usr：软件安装目录
    内核文件与发行版：
        linux操作系统是1991年芬兰赫尔辛基大学一个大学生林纳斯·托瓦斯发明的一个类unix操作系统
        林纳斯开发的部分就是操作系统的内核文件
        发行版指的是由软件发行公司，把一定的linux内核版本、应用程序和相应的系统管理软件和安装程序组装成一个发行套件
        发行版由内核版本文件、外围软件（图形化界面、安装程序、办公软件、记事本、编译器、解释器等）组成，如Redhat（内核文件、外围软件）、CentOS（radhat发行版、企业相关软件）
        发行版本号码由发行商自己决定，一般与内核版本的数字不一样
        目前linux中国的发行版本（Linux Distribution）主要有RedHat（红帽子）、Slackware、Caldera、Debian、RedFlag（红旗）、BluePoint（蓝点）、XteamLinux（冲浪）、HappyLinux（幸福Linux）、Xlinux、ubuntu等若干种
![根目录文件介绍](../../markdown_assets/readme-1623720326987.png)
![根目录文件介绍](../../markdown_assets/readme-1623720335615.png)
![根目录文件介绍](../../markdown_assets/readme-1623720344096.png)
![根目录文件介绍](../../markdown_assets/readme-1623720351571.png)
![根目录文件介绍](../../markdown_assets/readme-1623720364813.png)
![根目录文件介绍](../../markdown_assets/readme-1623720372122.png)
##  Linux - 目录相关操作
    目录操作：
        创建目录/文件：
            mkdir newdir：创建目录
            mkdir directory/newdir：在指定目录下创建新目录
            mkdir -p newdir/newdir/newdir：创建多级新目录
        移动目录/文件：
            mv dir1 dir2：将dir1移动到dir2目录下，并保持原名
            mv dir1 dir2/dir3：将dir1移动到dir2目录下，dir3不存在，并重命名为dir3
            mv dir1 dir3：dir3不存在，将dir2重命名为dir3
            mv dir1/dir2 dir3/dir4：将dir2移动到dir4目录下，保持原名
            mv dir1/dir2 dir3/dir4/dir5：dir5不存在，将dir2移动到dir4下，并重命名为dir5
        复制目录/文件：
            cp dir1 dir2：将dir1复制到fir2下，保持原名
            cp dir1 dir2/dir3：dir3不存在，将dir1复制到dir2下，重命名为dir3
            cp dir1/dir2 dir3/dir4：将dir2复制到dir4下，保持原名
            cp dir1/dir2 dir3/dir4/dir5：dir5不存在，将dir2复制到dir4下，重命名为dir5
        目录复制，统一设置-r参数recursive递归地（无视目录层次）：
            cp -r dir1 dir2：将dir1复制到dir2下
            cp -r dir1 dir2/dir3：dir3不存在，将dir1复制到dir2下，重命名为dir3
            cp -r dir1/dir2 dir3/dir4：将dir2复制到dir4下
            cp -r dir1/dir2 dir3/dir4/dir5：dir5不存在，将dir2复制到dir4下，重命名为dir5
            cp -r dir1/dir2 dir3：dir3不存在，将dir2复制到当前目录下，重命名为dir3
        删除目录/文件：
            rm 文件名：删除文件
            rm -r 目录名：删除目录
            rm -rf 文件名：r（recursive） f（force） 递归、强制删除指定文件 force指“避免进入目录、删除隐藏文件”的提示
            rm -rf /：全局删除
    相对路径和绝对路径：
        相对路径：以引用文件之所在位置为参考基础，而建立出的目录路径
        绝对路径：以web站点根目录为参考基础的目录路径
![目录相关操作](../../markdown_assets/readme-1623721885090.png)
![目录相关操作](../../markdown_assets/readme-1623721893617.png)
![相对路径和绝对路径](../../markdown_assets/readme-1623722001919.png)
![相对路径和绝对路径](../../markdown_assets/readme-1623722009222.png)
##  Linux - 文件简单操作
    文件操作：
        查看文件：
            cp 文件名 目录名：复制文件到指定目录下
            cat 文件名：原样输出文件内容到终端
            more 文件名：通过敲回车的方式逐行查看文件的内容，不支持回看，按q退出
            less 文件名：通过方向键的方式查看文件内容，支持回看，按q推出
            head -n 文件名：查看文件的前n行内容
            tail -n 文件名：查看文件的后n行内容
            wc 文件名：统计文件行数
        创建文件：
            touch 文件名：创建一个文件
        给文件追加内容：
            echo 内容 > 文件名：把内容以覆盖写的方式追加到文件中，如果文件不存在则会自动创建
            echo 内容 >> 文件名：把内容以纯追加的方式追加到文件中，如果文件不存在则会自动创建
![文件简单操作](../../markdown_assets/readme-1623722445167.png)
##  Linux - 用户和组操作
    linux系统对用户、组别、被操作的文件有独特的设置：
        用户与组别对应、组别与被操作的文件对应（类似权限控制RABC）
        后期系统使用过程中管理员root就只需要关心用户是属于哪个组别的即可
    用户相关操作：
        增加用户：
            useradd 用户名：增加一个用户，就会创建同名的组
            useradd -g 组别编号 用户名：增加一个用户，并设置其组别
            useradd -u 用户编号 -g 组别编号 -d 家目录 用户名
        修改用户：
            usermod -u 用户编号 -g 组别编号 -d 家目录 -l 新用户名 旧用户名：如果修改家目录，需要手动创建（不同于增加用户）
        删除用户：
            userdel 用户名：/etc/passwd的配置用户信息会删除（但家目录会保留，可以手动改删除）
            userdel -r 用户名：用户信息和家目录都会被删除
    组别操作：
        增加组别：
            groupadd 组别名：创建一个组别
        修改组别：
            groupmod -g 组别编号 -n 新组别名 旧组别名
        删除组别：
            groupdel 组别名：组别里存在对应的用户信息，建议禁止删除
![在/etc/passwd文件中查看增加的用户信息](../../markdown_assets/readme-1623722665994.png)
![用户相关操作](../../markdown_assets/readme-1623722683255.png)
![组别相关操作](../../markdown_assets/readme-1623722697431.png)
![给用户设置密码，使其登录系统](../../markdown_assets/readme-1623723117776.png)
![给用户设置密码，使其登录系统](../../markdown_assets/readme-1623723125124.png)
##  Linux - 发展野史
    TODO
#   02
    学习第二天的知识
##  Linux - 昨天内容回顾
    TODO
##  Linux - vi三种模式介绍
    vim：编辑器中的神
    emacs：神的编辑器
    vim编辑器的三种模式：命令（默认）、编辑、尾行
![vim编辑器的三种模式](../../markdown_assets/readme-1623913518104.png)
![编辑模式标志](../../markdown_assets/readme-1623913142462.png)
![命名模式标志](../../markdown_assets/readme-1623913159251.png)
![尾行模式标志](../../markdown_assets/readme-1623913173242.png)
![文件被非法关闭会形成备份文件，先删除该备份文件（否则该文件禁止修改），再做具体操作](../../markdown_assets/readme-1623913189859.png)
![文件被非法关闭会形成备份文件，先删除该备份文件（否则该文件禁止修改），再做具体操作](../../markdown_assets/readme-1623913216786.png)
##  Linux - vi进入编辑模式的四种方式
    切换到编辑模式的四种方式：
        a：光标后移一位
        i：光标和所在内容没有任何变化
        o：另起一个新行
        s：删除光标所在的一个字符
##  Linux - vi尾行模式操作
    尾行模式指令：
        :w：保存文档
        :q：退出vi编辑器
        :wq：保存文档并退出vi编辑器
        :w!：若没有权限操作文档，可强制保存文档
        :q!：若没有权限操作文档，可强制退出
        :wq!：若没有权限操作文档，可强制保存文档并退出
        :set number：给编辑器设置行号（给每行前面加上行序号）
        :set nu：给编辑器设置行号（给每行前面加上行序号）
        :set nonumber：取消行号设置
        :set nonu：取消行号设置
        :数字：光标跳转到数字所在行
        :/内容/：在文档中寻找指定内容，通过n（上一个）或N（下一个）翻屏查找
        :/内容：在文档中寻找指定内容，通过n（上一个）或N（下一个）翻屏查找
        :s/内容1/内容2/：替换光标所在当前行的第一个匹配内容1的字符串为内容2
        :s/内容1/内容2/g：替换光标所在当前行的所有匹配内容1的字符串为内容2
        :%s/内容1/内容2/g：替换整个文档的所有匹配内容1的字符串为内容2
##  Linux - vi命令模式的移动操作
    光标移动操作：
        字符级：
            k：上
            j：下
            h：左
            l：右
        单词级：
            w（word）：下个单词的首字母
            b（before）：上个（本）单词首字母
            e（end）：下个（本）单词尾字母
        行级：
            0：行首
            $：行尾
        段落级（空白行为间隔）：
            {：上个（本）段落首部
            }：下个（本）段落尾部
        窗口级（不翻屏）：
            H：窗口首部
            L：窗口尾部
        文档级：
            G：文档尾行
            1G：文档首行
            nG：文档第n行
##  Linux - vi命令模式的删除和复制操作
    删除内容操作：
        dd：删除光标当前行
        ndd：从光标当前行向后删除n行内容
        x：删除光标所在的字符
        cw：从光标所在位置删除至单词结尾，并进入编辑模式
    复制内容操作：
        yy：复制光标当前行
        nyy：从光标当前行向后复制n行内容
        p：对复制（删除）好的内容进行粘贴操作
    快捷操作：
        u：undo撤销
        r：替换单个字符
        J：从光标当前行合并后一行
        .：重复执行上个指令
##  Linux - 权限介绍
    权限：用户针对文件是否拥有读、写、执行的权利
        权限本身划分为：
            R：读，read
            W：写，Write
            X：执行，execute
        权限针对用户的划分：
            U：主人，User
            G：同组用户，Group
            O：其它用户，Other
![文件权限详情](../../markdown_assets/readme-1623921547273.png)
![文件权限详情](../../markdown_assets/readme-1623921557522.png)
##  Linux - 权限设置
    权限操作：
        字母相对方式设置权限，权限只是针对局部有发生影响：
            chmod u+rwx 文件名：为主人增加读、写、执行权限
            chmod u-rwx 文件名：为主人减去读、写、执行权限
            chmod g+rwx 文件名：为同组用户增加读、写、执行权限
            chmod g-rwx 文件名：为同组用户减去读、写、执行权限
            chmod o+rwx 文件名：为其他用户减去读、写、执行权限
            chmod o-rwx 文件名：为其他用户减去读、写、执行权限
        数字绝对方式设置权限，权限发生影响的范围是全部：
            1：eXecute，执行
            2：Write，写
            4：Read，读
            具体权限值：
                0：没有任何权限
                1：执行
                2：写
                3：执行+写
                4：读
                5：执行+读
                6：写+读
                7：执行+写+读
            具体操作：
                chmod ABC 文件名：A代表主人的权限值、B代表同组用户的权限值、C代表其他用户的权限值
        注意：
            文件权限修改较多就使用数字方式
            文件权限修改较少就使用字母方式
##  Linux - 权限针对文件和目录的操作
    文件对权限的使用：
        读：是否可以查看文件内容
        写：是否可以修改该文件（可以强制写操作）
        执行：
            二进制文件
            批量指令执行文件：
                windows批处理文件
                linux shell脚本文件：linux系统可以编写shell脚本程序文件，该文件执行过程中可以批量执行指令（类似windows系统里的bat批处理程序文件）
![文件对权限的使用](../../markdown_assets/readme-1623924345228.png)
![文件对权限的使用](../../markdown_assets/readme-1623924384918.png)
![编辑一个shell脚本文件](../../markdown_assets/readme-1623924402023.png)
![编辑一个shell脚本文件](../../markdown_assets/readme-1623924417828.png)
![shell脚本文件执行的效果](../../markdown_assets/readme-1623924437781.png)
##  Linux - 强制写保存细节
##  Linux - 常用指令
##  Linux - 管道
##  Linux - 文件查找find
##  Linux - 软链接
##  Linux - 硬链接
##  Linux - 任务调度指令
##  Linux - 主人和组别设置
#   03
    学习第三天的知识
##  Linux - 昨天内容回顾
##  Linux - 网络配置
##  Linux - SecureCRT终端连接使用
##  Linux - 挂载光驱
##  Linux - 软件安装介绍
##  Linux - rpm方式安装ftp软件
##  Linux - 开启ftp服务并通过winscp上传文件
##  Linux - 通过C语言测试gcc工具
##  Linux - 源码编译安装zlib软件
##  Linux - 安装apache软件
##  Linux - 开启apache服务并访问
##  Linux - 安装php依赖软件（xml、jpeg、png、freetype、gd）
##  Linux - 配置安装php
##  Linux - 配置使用php
##  Linux - 安装mysql
##  Linux - 配置mysql并使用
##  Linux - LAMP两个细节处理