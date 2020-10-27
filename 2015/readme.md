#   basis
    基础学习，21天
##  01
    学习第一天知识
### HTML初步
    下载并安装editplus，配置软件的参数设置和编码
    了解HTML（百度百科）：
        HTML之父：蒂姆·伯纳斯·李
        是什么：HyperText Markup Language（超文本标记语言）
            什么是超文本：能够表达更丰富的内容（图片、表格、视频、音频等）
            什么是标记：标识符号（标签）
            语言：
                HTML不是编程语言，只是一种描述超文本标签的语言
                浏览器翻译HTML代码
        网页扩展文件名：.html .htm
        常见文件扩展名：
            音频：mp3、wav
            视频：mp4、wmv
            图片：jpg、png
####    01.html
        新建并打开一个页面
####    02.html
        使用标签和标签属性改变字体颜色
### HTML规范
    配置网站站点（百度使用的编辑器配置站点方法）
    标签分类：
        单标签：
            <br />
        双标签：闭合标签
            <font></font>
    标签书写规范：
        所有的标签都在<>中
        所有的标签都有开始和结束
        所有的标签和属性及值小写
        标签和属性、属性和属性之间有空格
        属性值必须加引号
        属性可写不可写
        标签与标签之间正确嵌套
    标签格式
        <标签名 属性1='值1' 属性2='值2' ……>标签内的超文本</标签名>
### HTML结构
```html
    // 文档结构：
    <html lang="en">
        <head>
            <title></title>
        </head>cc
        <body></body>
    </html>
```
        解释：
            html：指明当前的文档类型
            head：网页的头部，包括网页的基本设置信息，title标题也在里面
            body：在浏览器中看到的内容
    HTML注释：
        <!-- 注释内容 -->
### font_body标签
    HTML标签按功能分类：
        文本的修饰
        文字排版
        图片
        链接
        表格
        列表
        表单
        框架
### 文本修饰
    HTML文本修饰标记：
        <big>：相对默认文字大一些
        <small>：相对默认文字小一些
        <b>\<strong>：加粗\加强
        <i>\<em>：斜体
        <u>：下划线
        <s>：删除线
        <ins>\<del>：
        <sup>\<sub>：上标\下标
### editplus设置
    无实用内容
### HTML排版标记
    <p></p>：表示一个段落
        常用属性：align：水平对齐方式
    <br/>：换行标记
    <hr/>：水平线标记
        size：粗细
        color：颜色
        width：宽度
        noshade：去掉水平线的阴影
    <pre></pre>：预排版标记（将保留所有的空白字符（空格、换行符））
    标题标记：
        <h1></h1>
        <h2></h2>
        <h3></h3>
        <h4></h4>
        <h5></h5>
        <h6></h6>
    <div></div>：块元素
    <span></span>：行元素
### 项目符号和编号
    <div></div>：
        是没有任何意义的标记，但是又是使用最多的标记；
        div一般要与CSS配合使用；
        div是一个块级元素
    <span></span>：
        同样是没有任何意义的标记，但是也是使用最多的标记
        span要与CSS配合使用
        span是一个行内元素
    块级元素：
        一般是单独占一行
        <p>、<h1>、<pre>等也是块级元素
    行内元素：
        不会单独占一行
        多个行内元素会排在同一行
        <font>、<b>、<i>、<u>、<sub>、<sup>等都是行内元素
    HTML字符实体：
        空格：&nbsp
        <：&lt
        >：&gt
        &：&amp
        ￥：&yen
        ✖：&times
        ➗：&divide
    HTML项目符号
        <ul></ul>：无序列表
            type：disc默认黑色的点、circle圆圈、square方块
        <ol></ol>：有序列表
            type：编号类型：取值：1、A、a、I、i
            start：从第几个开始编号
        <li></li>
        自定义列表：
            <dl>
                <dt>定义标题</dt>
                <dd>对上面的标题进行描述</dd>
            </dl>
        在HTML标记中，内容应该放在最底层标记中
    滚动字幕标记
        <marquee></marquee>
            direction：滚动方向
            width：宽度
            height：高度
            bgColor：背景色
            scrollAmount：滚动步长值，值越大，滚动越快
            scrollDelay：两步之间的停留时间
            loop：循环滚动的次数
####    03.html
        了解div是块级元素
####    04.html
        了解span是行内元素
####    05.html
        了解HTML字符实体
####    06.html
        了解滚动字幕标记
##  02
    学习第二天的知识
### html实例
    复习第一天的知识
### bgsound
    火狐安装插件使用，声音文件标签
    src：路径
    loop：循环次数，-1是无限循环
### 关于颜色
    无实用内容
### meta
    meta标记：针对当前页面的设置
        字符编码设置
        关键字设置
        描述设置
        版权设置
        htpp-equiv：服务器通知浏览器用什么字符来显示页面
        content：文本文件下的html文件
        charset：设置字符编码
        name：设置名称
            keywords：关键字
    DTD文档类型定义：
        strict：严格性
        transitional：过度
        frameset：框架
### img
    图片标记：
        img
        对于图片的宽高，只设置一个，另一个会自适应
        可以缩小，但不可以放大
        alt：替换文本
### 关于路径
    绝对路径：
    相对路径：
##  03
    学习第三天的知识
### 关于链接
    <a></a>超链接标签
        target：打开的方式
            _blank：打开新的窗口标签页
            _self：在本页面打开新的页面
    下载链接，在herf属性中放文件路径
    空连接
    电子邮件链接：email地址
    锚点链接：
        先定义锚点：<a name="top"></a>
        使用：<a href="#top"></a>
### 表格初步
    <table>：表格标签
        <tr>：行标签
            <td></td>：单元格标签
        </tr>
    </table>
### 关于表格
    width：表格宽度，单位像素
    height：表格高度，一般不设置，让表格中内容撑开
    align：对齐方式
    border：表格的边框
    bordercolor：表格边框的颜色
    background：表格的背景图
        单元格的宽高一定与图片的宽高相适应
    bgcolor：表格背景色
    cellpadding：单元格的填充，单元格中内容到边框的距离
    cellspacing：单元格的间距，单元格与单元格之间的距离
    rules：边框的显示方式
        rows：显示行边线
        cols：显示列边线
        all：合并连线
    <td>属性：
        colspan：向右合并
        rowspan：向下合并
### 透明flash实例
    无用内容
### 表格布局
    无用内容
### 表单布局
    <form></form>：表单标记
        属性：
            name
            method：提交方式，get，post
            action：提交的页面
            enctype：数据类型
    表单元素：
        <input type='text' name='username' />：文本框
        <input type='password' name='password' />：密码框
    表单提交：
        <input type='submit' name='提交'>：提交
    表单重置：
        <input type='reset' name='重置'>：重置
##  04
    学习第四天的知识
### 表单radio
    get提交方式：
        通过gei方式传值，名称和值以“?”的跟在action处理页面的后面
        如果有多个传递值，用“&”号连接
        这个方式传值，名称和值都在地址栏中显示（不安全）
        地址栏的容量有限，小于2KB
        一般用在安全要求不高，并且简单的数据
        通常用在查询
    post提交方式： 
        不在地址栏中显示
        相对安全
        一般用在数据库方面，写操作
        在上传一些复杂的数据的时候用post
        enctype是表单的编码方式
### 表单fieldset
    看看就好
### from与服务器
    安装phpstudy，启动apache服务
####    02.html 03.php
    表单实践
### map
    map：图像热区标签
        将一个图片分割成多块并设置不同的点击事件、效果、访问页面
        通过name属性与img标签的usemap绑定
### frameset
    frameset：框架集标签
        在body标签之外
        设置frameset标签后，需要在body标签之外再包一个noframes标签，当浏览器不支持框架集时则显示noframes内的内容
        frameset中通过一个又一个的frames标签引入不同的页面文件
        通过cols或rows分割浏览器页面
### frame_name
    
### 关于模板