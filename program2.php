<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="LiuxueGo">
    <meta name="keyword" content="LiuxueGo">
    <link rel="stylesheet" href="css/main.css">
    <script type="text/javascript" src="jquery.js"></script>
    <title>项目2</title>

    <script type="text/javascript">
        var num1 = document.getElementById("name").value;
        var num2 = document.getElementById("phone").value;
        var num3 = document.getElementById("email").value;
        var num4 = document.getElementsByName("gender");
        var num5 = document.getElementById("avatar").value;
        var num6 = document.getElementById("declaration").value;
        function clickx(){
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
    <div>
        <table style="height:40px;border-color:#000000;border-left-style:solid;border-width:1px">
            <tr>
                <td valign="top"><span class="titleText">选择项目:</span></td>
            </tr>
        </table>
        <button type="button" id="program1" class="orange">项目一</button><br><br>
        <button type="button" id="program1" class="orange">项目二</button>
    </div><br>
    <span class="titleText">个人信息</span><br>
    <div class="signUp">
        姓名   <input type="text" id="name" style="height: 30px;width: 200px;" placeholder="姓名"/><br><br>
        手机   <input type="text" id="phone" style="height: 30px;width: 200px;" placeholder="手机"/><br><br>
        邮箱   <input type="text" id="email" style="height: 30px;width: 200px;" placeholder="邮箱"/><br><br>
        <input type="radio" name="gender" value="male" style="width:50px;height:50px"/>男<br>
        <input type="radio" name="gender" value="female" style="width:50px;height:50px"/>女<br>
        照片   <input type="file" id="avatar" style="height: 30px;width: 200px;"/><br><br>
        报名宣言<br>
        <textarea id="declaration" style="height: 30px;width: 200px;" placeholder="报名宣言"></textarea>
    </div>
    <input type="submit" style="margin-left: 48%;" class="button" onclick="clickx()"/>

</div>
</body>
</html>