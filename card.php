<?php
$f = intval($_GET['q']);
if ($f=='0') {
  # code...
  echo"<table>
  <tr>
  <td><img src="."'QR.jpg' class='picmhu'"."></td></tr></table>";
}
if ($f=='1') {
  # code...
  echo"<table>
  <tr>
  <td class='t-right'>อีเมล :</td>
  <td class='t-left'><input id='input-box' type='email' name='email' id='email' placeholder='อีเมล / E-mail' required /></td>
  </tr>
  <tr>
  <td class='t-right'>รหัสผ่าน :</td>
  <td class='t-left'><input id='input-box' type='password' name='password' id='password' placeholder='รหัสผ่าน / Password' required /></td>
  </tr>
  </table>
 ";
}
  elseif ($f=='2') {
  # code...
    echo "
    <table>
  <tr>
    <td class='t-right'>หมายเลขบัตรเคดิต :</td>
    <td class='t-left'><input id='input-box' type='text' name='Fname' id='Fname' placeholder='หมายเลขบัตรเคดิต' required /></td>
    </tr>
    <tr>
    <td class='t-right'>วันหมดอายุบัตร :</td>
    <td class='t-left'><input id='input-box' type='text' name='Lname' id='Lname' placeholder='วันหมดอายุบัตร' required /></td>
    </tr>
    <tr>'
    <td class='t-right'>CVV :</td>
    <td class='t-left'><input id='input-box' type='text' name='tel' id='tel' placeholder='CVV' maxlength='10' required /></td>
    </tr>
    <tr>
    <tr>
    <td class='t-right'>ชื่อบนบัตร :</td>
    <td class='t-left'><input id='input-box'type='text' name='username' id='username' placeholder='ชื่อบนบัตร' required /></td>
    </tr>
  </table>";
  }

  ?>