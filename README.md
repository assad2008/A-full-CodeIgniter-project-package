CodeIgniter---rebuild
=====================

主要改动为： <br />
1）模板系统采用smarty，smarty在控制器父类中已经初始化 <br />
2）增加了支持MongoDB，在My_Controller的__init__()方法类可以增加初始化，并且配置config下的mongodb文件 <br />
3)增加redis，文件上传，curl扩展类库 <br />
4)修改了Mysql类库的操作，主要是使用起来方便。 <br />
5)在自定义函数库中定义了一些函数，常用的函数可以直接添加进去 <br />
6)默认一套验证码生成
