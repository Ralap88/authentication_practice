<!-- <!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title>使用者註冊作業--檢查帳號是否存在</title>
<script>
function sendRequest() {
   var xhttp = new XMLHttpRequest();
   xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
         if (this.responseText==1) document.getElementById('show_msg').innerHTML = '此帳號已存在!';
         else document.getElementById('show_msg').innerHTML = '';
      }
   };
   var url='check_account_ajax.php?p_usr=' + document.form1.p_usr.value + '&timeStamp='+new Date().getTime();
   xhttp.open('GET',url,true);//建立XMLHttpRequest連線要求
   xhttp.send();
}

</script>
</head>

<body>
<p></p>
<form name="form1">
<center>
<div style="font-size:13pt;color:blue">使用者註冊</div>
</center>
<table width='500' cellSpacing="2" cellPadding="2" align=center style="border: 1 dashed #008080" bgcolor="#FFFFE8">
   <tr>
      <td width='200' class='c23'>請輸入帳號：</td>
      <td width='300'><span style="margin-left: 1; font-size:12pt"><input type="text" name="p_usr" id="p_usr" maxLength="12" onkeyup=sendRequest();></td>
   </tr>
   <tr>
      <td class='c23'>請輸入密碼：</td>
      <td><input type='password' name='p_pwdn1' id='p_pwdn1' maxLength='16'></td>
   </tr>
   <tr>
      <td class='c23'>請確認密碼：</td>
      <td><input type='password' name='p_pwdn2' id='p_pwdn2' maxLength='16'></td>
   </tr>
   <tr>
      <td class='c23'>姓　　　名：</td>
      <td><input type='text' name='user_name'></td>
   </tr>
   <tr>
      <td class='c23'>身分證字號：</td>
      <td><input type='text' name='id_no'></td>
   </tr>
   <tr>
      <td colspan='2'>&nbsp;</td>
   </tr>
   <tr>
      <td colspan='2' align='center'><input type="button" value="確定送出">　<input type="reset" value="取消重設">　</td>
   </tr>
</table>
</form>
<center>訊息：<span id='show_msg' style="color:red"></span></center>
</body>

</html> -->

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>使用者註冊作業--檢查帳號是否存在</title>
    <script>
   function sendRequest() {
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
         if (this.readyState == 4 && this.status == 200) {
            if (this.responseText==1) document.getElementById('show_msg').innerHTML = '此帳號已存在!';
            else document.getElementById('show_msg').innerHTML = '';
         }
      };
      var url='check_account_ajax.php?p_usr=' + document.form1.p_usr.value + '&id_no=' + document.form1.id_no.value+'&timeStamp='+new Date().getTime();
      xhttp.open('GET',url,true);//建立XMLHttpRequest連線要求
      xhttp.send();
   }

   </script>
</head>

<body>
    <p></p>
    <form name="form1">
        <center>
      <img src="https://picsum.photos/200">
            <div style="font-size:13pt;color:blue">使用者註冊</div>
        </center>
        <table width='500' cellSpacing="2" cellPadding="2" align=center style="border: 1 dashed #008080" bgcolor="#FFFFE8">
            <tr>
                <td width='200' class='c23'>請輸入帳號：</td>
                <td width='300'><span style="margin-left: 1; font-size:12pt"><input type="text" name="p_usr" id="p_usr" maxLength="12" onkeyup="sendRequest()"></td>
            </tr>
            <tr>
                <td class='c23'>請輸入密碼：</td>
                <td><input type='password' name='p_pwdn1' id='p_pwdn1' maxLength='16'></td>
            </tr>
            <tr>
                <td class='c23'>請確認密碼：</td>
                <td><input type='password' name='p_pwdn2' id='p_pwdn2' maxLength='16'></td>
            </tr>
            <tr>
                <td class='c23'>姓　　　名：</td>
                <td><input type='text' name='user_name'></td>
            </tr>
            <tr>
                <td class='c23'>身分證字號：</td>
                <td><input type='text' name='id_no' onkeyup="sendRequest()"></td>
            </tr>
            <tr>
                <td colspan='2'>&nbsp;</td>
            </tr>
            <tr>
                <td colspan='2' align='center'><input type="button" value="確定送出">　<input type="reset" value="取消重設">　</td>
            </tr>
        </table>
    </form>
    <center>訊息：<span id='show_msg' style="color:red"></span></center>
</body>

</html>