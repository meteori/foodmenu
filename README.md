# foodmenu
codeigniter sample project.

安装：

0. 下载代码到本地，解压缩并放置在C:/或其他路径下

1. 安装xampp

2. 修改httpd.conf文件，去掉 `Include conf/extra/httpd-vhosts.conf` 前面的#注释

3. 修改httpd-vhosts.conf文件，添加：

    	<VirtualHost *:80>
        	ServerAdmin webmaster@foodmenu.dev
        	DocumentRoot "C:/foodmenu" ## 源代码文件夹foodmenu所在路径
        	ServerName foodmenu.dev
        	ErrorLog "logs/foodmenu.dev-error.log"
        	CustomLog "logs/foodmenu.dev-access.log" common
    	</VirtualHost>
    
4. 添加本地hosts: 打开文件C:\Windows\System32\Drivers\etc\hosts，在文件末尾添加一行：

    	127.0.0.1       foodmenu.dev
    
保存文件

5. 重启xampp上的apache

6. 打开浏览器，访问 [http://foodmenu.dev](http://foodmenu.dev)
