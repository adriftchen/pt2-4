<fieldset>
<legend>目前位置: 首頁 ＞ 問卷調查 </legend>
<table >
  <tr class='ct'>
    <td width="10%">編號</td>
    <td>問卷題目</td>
    <td width="10%">投票總數</td>
    <td width="10%">結果</td>
    <td width="10%">狀態</td>
  </tr>
  <?php
  $ques=$Que->all(['subject'=>0]);
  foreach($ques as $key=>$que){

  ?>
  <tr>
    <td><?=$key+1;?></td>
    <td><?=$que['text'];?></td>
    <td><?=$que['count'];?></td>
    <td><a href="?do=result&id=<?=$que['id'];?>">結果</a></td>
    <td>
    <?php
    if(!empty($_SESSION['login'])){
    ?>
    <a href="?do=vote&id=<?=$que['id'];?>">參與投票</a>
    <?php
    }else{
      echo "請先登入";
    }
    ?>
    </td>
  </tr>
<?php
  }

  ?>
  </fieldset>