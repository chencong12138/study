# study
h5 php

## github
- github.com

## git客户端
- git-scm.com

## git命令行常用操作
- git init 添加文件进git库
- git status 查看当it 创建git库
- git add . 当前文前仓库状态
- git commit -m "string" 提交备注
- git push 本地上传到git服务器

## git密钥生成
- ssh-keygen.exe生成公私密钥
- ~/.ssh
- id_rsa  id_rsa.pub
- C:\Users\陈聪\.ssh

## 从git下载一个项目
- git clone (adress) 下载到本地

## 搭建本地服务器
- 通过Visual Studio Code PHP指令：php -S (局域网IP地址)：8000 搭建
## LINUX->ubuntu
### 常用命令
- 查看目录下有什么文件信息:ls//list查看当前目录下有什么文件
- 查看目录下详细内容:ls -l
- 目录切换:cd 目录名字 ; cd .. 向上级切换
- 查看当前操作位置:pwd
- 查看谁在操作系统:whoami
- 不同用户的切换:su -//切换为root用户；su 普通用户名；exit//退回到之前用户
- 图形模式与命令模式切换
> init 3 //图形向命令切换
> init 5 //命令向模型切换
### 根目录介绍
- /bin:binary二进制,ls pwd init等指令对应的可执行程序目录
- /sbin:super binary超级二进制root用户指令对应的可执行程序
- /usr:unix system resource//unix系统资源文件目录,用于安装各种软件
- /dev:device//系统硬件设备目录
- /home:普通用户的家目录
- /root:root管理员的家目录
- /var:variable可变的//该目录下文件经常变化,用于部署php程序文件
- /boot:系统启动核心目录
- /etc:系统主要配置文件目录
- /lib:library//系统资源库目录
### 目录操作
- 创建目录 make directory
> mkdir 目录名称 
> mkdir -p 目录名称1/目录名称2 //递归关系创建目录
- 移动(改名字)目录 move
> mv dir1 dir2//把dir1移动到dir2
> mv dir1 dir2/newdir //把dir1移动到dir2并且改名为newdir
- 复制目录copy
> cp file1 dir1 //file1被复制一份到dir1目录下
> cp -r dir1 dir2 //dir1目录被复制到dir2目录下一份
> 目录复制需要-r这个参数
- 删除remove
> rm filename //普通文件删除
> rm -r dir //删除目录(无视层次),需要-r参数
> rm -rf 文件 //recursive force递归强制删除文件,需要权限
### 文件操作
- 查看文件内容
> cat filename //在终端中显示出来
> more filename //通过敲回车一行一行看
> less filename // 通过上下左右查看文件每一行
> head -n filename //查看文件前n行内容
> tail -n filename //查看文件后几行内容 
> wc filename //计算文件行数
- 创建文件
> touch filename 
> touch dir/filename
- 追加文件内容
> echo 内容 > filename //给文件纯覆盖写追加内容
> echo 内容 >> filename //给文件追加内容
### 用户和组的操作
#### 用户操作user,配置文件为/etc/passwd
- 创建 add
> uesradd username //创建用户的同时创建同名组
> useradd -g 组编号 username //创建用户同时设置组别
> astraddle -g 组编号 -u 用户编号 -d 家目录 username //创建用户同时,指定组,用户编号,家目录
- 修改 modify
> usermod -g gid username //修改组别编号
> usermode -g gid -u uid -d 家目录 -l newname username// 同时修改组别,用户编号,家目录,用户名
- 删除 delete
> userdel username //只删除passwd文件下用户信息,不包括家目录
> userdel -r username //用户信息家目录同时删除
- 给用户设置密码
> passwd username
#### 组别操作group,配置文件为/etc/group
- 创建add
> groupadd groupname
- 修改 modify
> groupmod -g gid -n newname groupname
- 删除deleta
> groupdel groupname //只有空组(内部没有用户信息)可以删除
### vim
- 命令模式>>>编辑模式又称插入模式或insert模式(四种方法a,i,o,s)
> a //光标向后移动一位
> i //光标和内容没有变化进入
> o //新起一个空白行
> s //删除光标所在字符
- 尾行模式
> :q //quit退出编辑器
> :w //write单独保存
> :q! //强制退出不保存
> :wq! //强制进行保存修改
> :set number or set nu //给编辑器设置行号
> :set nonumber or set nonu //取消编辑器行号设置
> :数字 //光标跳转到数字所在行头
> :/内容/ 或/内容 //内容查找
- 命令模式(光标操作)
- 字符级:上(k) 下(j) 左(h) 右(l)
- 单词级:word下个单词首字母(w);end下个单词尾字母(e);before上个单词首字母(b)
- 行级:行首(0);行尾($)
- 段落级:上个段落首部({)；下个段落首部(})


























