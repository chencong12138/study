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

