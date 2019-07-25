# 接口开发：
##### 1.定义接口版本
##### 2.遵守RESTful API设计风格
##### 3.定义接口文档
##### 错误异常信息
{"code":100,"msg":"xxx","errorCode":2000}
# 后台文件目录结构：
|--application  
    &emsp;|--api  
    &emsp;|--controller  
|--model  
|--service
|--validate（自定义验证器目录） 
    &emsp;|--extra
    &emsp;|--lib
|--exception（自定义异常处理目录）
|--route.php（路由定义文件）
|--extend
|--login
|--public
|--images
|--static
    



# 俱乐部信息数据表设计
    
##### 1.俱乐部分组表(clubgroup)
    组成：id,name,topic_img_id（头图，关联image表）
##### 2.人员信息表(clubinfo)
    组成：id,name,username,password,login_img_id(个人照片，关联image表),introduction(个人签名)，stauts状态（是否毕业），work_job（工作职位），feeling（俱乐部带给我的改变）
##### 3.个人非必要字段信息表（clubinfo_ex）
    组成：id,name,detail,info_id（属于谁，关联clubinfo表）
    解释一下：这个表是比较有技巧性的，根据info_id绑定到个人，而字段name就是选择填写的自定义项va    lue就是此项的值。
    例如：{name：工作地点；value：北京；info_id：1}
##### 4.图片表(clubimg)
    组成：id,url,from
# 返回信息
##### 返回分组信息
![avatar](/img/group.png)
##### 返回个人详情信息
![avatar](/img/details.png)
# 俱乐部成员信息录入页面
  
##### 1.页面组成
    登陆页：登录表单
    信息提交页：表单提交
    信息展示页：展示信息
  
##### 2.逻辑开发
    通过登陆页面登录成功后，跳转值信息展示页面。
    若信息为空则存在提示按钮“去填写信息”，通过按钮跳至信息填写页面
    信息填写页面包括必填信息和选填信息，必填信息不填完整，提交时要提示"补全必填信息后，再进行提交"
    信息不为空，则是正常的信息展示页面
  
##### 3.代码要求
      逻辑函数添加适当注释
      函数名简洁易懂并遵守驼峰命名方式

    

    
   
