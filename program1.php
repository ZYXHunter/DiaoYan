<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="LiuxueGo">
    <meta name="keyword" content="LiuxueGo">
    <link rel="stylesheet" href="css/main.css">
    <script type="text/javascript" src="jquery.js"></script>
    <title>项目1</title>

    <script type="text/javascript">
        function clickx(){
            var num1 = document.getElementById("name").value;
            var num2 = document.getElementById("phone").value;
            var num3 = document.getElementById("email").value;
            var num4 = document.getElementsByName("gender");
            var num5 = document.getElementById("avatar").value;
            var num6 = document.getElementById("declaration").value;
            if (!num1 ){
                alert("选择完整哦1～");
                return;
            }
            if (!num2){
                alert("选择完整哦2～");
                return;
            }
            if (!num3){
                alert("选择完整哦3～");
                return;
            }
            if (!num4[0].checked && !num4[1].checked){
                alert("选择完整哦4～");
                return;
            }
            if (!num5){
                alert("选择完整哦5～");
                return;
            }
            if (!num6){
                alert("选择完整哦6～");
                return;
            }
            document.form.action = "upload.php";
            document.form.submit();
        }
        function PreviewImage(fileObj,imgPreviewId,divPreviewId){
            var allowExtention=".jpg,.bmp,.gif,.png";//允许上传文件的后缀名document.getElementById("hfAllowPicSuffix").value;
            var extention=fileObj.value.substring(fileObj.value.lastIndexOf(".")+1).toLowerCase();
            var browserVersion= window.navigator.userAgent.toUpperCase();
            if(allowExtention.indexOf(extention)>-1){
                if(fileObj.files){//HTML5实现预览，兼容chrome、火狐7+等
                    if(window.FileReader){
                        var reader = new FileReader();
                        reader.onload = function(e){
                            document.getElementById(imgPreviewId).setAttribute("src",e.target.result);

                        }
                        reader.readAsDataURL(fileObj.files[0]);
                    }else if(browserVersion.indexOf("SAFARI")>-1){
                        alert("²»Ö§³ÖSafari6.0ÒÔÏÂä¯ÀÀÆ÷µÄÍ¼Æ¬Ô¤ÀÀ!");
                    }
                }else if (browserVersion.indexOf("MSIE")>-1){
                    if(browserVersion.indexOf("MSIE 6")>-1){//ie6
                        document.getElementById(imgPreviewId).setAttribute("src",fileObj.value);


                    }else{//ie[7-9]
                        fileObj.select();
                        if(browserVersion.indexOf("MSIE 9")>-1)
                            fileObj.blur();//不加上document.selection.createRange().text在ie9会拒绝访问
                        var newPreview =document.getElementById(divPreviewId+"New");
                        if(newPreview==null){
                            newPreview =document.createElement("div");
                            newPreview.setAttribute("id",divPreviewId+"New");
                            newPreview.style.width = document.getElementById(imgPreviewId).width+"px";
                            newPreview.style.height = document.getElementById(imgPreviewId).height+"px";
                            newPreview.style.border="solid 1px #d2e2e2";
                        }
                        newPreview.style.filter="progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod='scale',src='" + document.selection.createRange().text + "')";
                        var tempDivPreview=document.getElementById(divPreviewId);
                        tempDivPreview.parentNode.insertBefore(newPreview,tempDivPreview);
                        tempDivPreview.style.display="none";
                    }
                }else if(browserVersion.indexOf("FIREFOX")>-1){//firefox
                    var firefoxVersion= parseFloat(browserVersion.toLowerCase().match(/firefox\/([\d.]+)/)[1]);
                    if(firefoxVersion<7){//firefox7ÒÔÏÂ°æ±¾
                        document.getElementById(imgPreviewId).setAttribute("src",fileObj.files[0].getAsDataURL());
                    }else{//firefox7.0+
                        document.getElementById(imgPreviewId).setAttribute("src",window.URL.createObjectURL(fileObj.files[0]));
                    }
                }else{
                    document.getElementById(imgPreviewId).setAttribute("src",fileObj.value);
                }
            }else{
                alert("仅支持"+allowExtention+"为后缀名的文件!");
                fileObj.value="";//清空选中文件
                if(browserVersion.indexOf("MSIE")>-1){
                    fileObj.select();
                    document.selection.clear();
                }
                fileObj.outerHTML=fileObj.outerHTML;
            }
        }

    </script>
</head>

<body style="margin-left: 30px;margin-right: 30px;">
<div id="img" style="width: 95%;">
    活动海报<img src="" class="img">
</div>
<hr style="height:1px;border:none;border-top:1px solid #555555;" />
<div id="content">
    <div>
        <table style="height:40px;border-color:#000000;border-left-style:solid;border-width:1px">
            <tr>
                <td valign="top"><span class="titleText">活动介绍:</span></td>
            </tr>
        </table>
        <span class="contentText">活动介绍内容活动介绍内容活动介绍内容活动介绍内容活动介绍内容活动介绍内容</span>
    </div><br>
    <div>
        <table style="height:40px;border-color:#000000;border-left-style:solid;border-width:1px">
            <tr>
                <td valign="top"><span class="titleText">投票截至日期:</span></td>
            </tr>
        </table>
        <span class="contentText">活动介绍内容活动介绍内容活动介绍内容活动介绍内容活动介绍内容活动介绍内容</span>
    </div><br>
    <div>
        <table style="height:40px;border-color:#000000;border-left-style:solid;border-width:1px">
            <tr>
                <td valign="top"><span class="titleText">主办方:</span></td>
            </tr>
        </table>
        <span class="contentText">留学GO</span>
    </div><br>
    <div>
        <table style="height:40px;border-color:#000000;border-left-style:solid;border-width:1px">
            <tr>
                <td valign="top"><span class="titleText">活动流程:</span></td>
            </tr>
        </table>
        <span class="contentText">

        </span>
    </div><br>
</div>
<hr style="height:1px;border:none;border-top:1px solid #555555;" />
<div id="signUp">
    <span class="titleText">个人信息</span><br>
    <div class="signUp">
        <form method="post" name="form" action="">
        姓名   <input type="text" id="name" name="name" style="height: 30px;width: 200px;" placeholder="姓名"/><br><br>
        手机   <input type="text" id="phone" name="phone" style="height: 30px;width: 200px;" placeholder="手机"/><br><br>
        邮箱   <input type="text" id="email" name="email" style="height: 30px;width: 200px;" placeholder="邮箱"/><br><br>
        <input type="radio" name="gender" value="male" style="width:50px;height:50px"/>男<br>
        <input type="radio" name="gender" value="female" style="width:50px;height:50px"/>女<br>
        头像<input type="file" name="file" id="avatar"  onchange="PreviewImage(this,'imgHeadPhoto','divPreview')"  /><br/>
            <div id="divPreview">
                <img id="imgHeadPhoto"  width="200"  height="200" src="/admin/upload/"></div><br>
        报名宣言<br>
        <textarea id="declaration" style="height: 30px;width: 200px;" placeholder="报名宣言"></textarea><br>
        </form>
    </div>
    <input type="submit" style="margin-left: 48%;" class="button" onclick="clickx()"/>



</div>
</body>
</html>