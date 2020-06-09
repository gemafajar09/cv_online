<?php
    // var_dump($visit); exit;
    if($tor[0]['onn'] == NULL)
    {
        $o = 0;
    }else{
        $o = $tor[0]['onn'];
    }
?>
<div class="card">
  <div class="card-body">
    <div class="row" style="text-align: center">
      <div class="col-md-4">
          <i class="fa fa-globe" style="color:grey; font-size:9px">&nbsp;kemarin</i>
          <br><b style="color:black"><?= $o ?></b>
      </div>
      <div class="col-md-4">
        <i class="fa fa-globe" style="color:blue; font-size:9px">&nbsp;Sekarang</i>
        <br><b style="color:black"><?= $visit[0]['onlinee'] ?></b>
      </div>
      <div class="col-md-4">
        <i class="fa fa-globe" style="color:green; font-size:9px">&nbsp;Online</i>
        <br><b style="color:black"><?= $visit[0]['ips'] ?></b>
      </div>
    </div>
  </div>
</div>