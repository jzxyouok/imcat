<?php
(!defined('RUN_INIT')) && die('No Init'); 
// 参考: dops/coms_list_show.php

$order = req('order'); 
if(empty($order)) $dop->order = 'vtop-a';
if($pid) $dop->so->whrstr .= " AND `pid`='$pid'";
$dop->sobar($dop->msgBar($msg));
glbHtml::fmt_head('fmlist',"$aurl[1]",'tblist');
echo "<th>选</th><th>标题</th><th>编号</th><th>排序</th><th>票数</th><th>显示</th>";
echo "<th>添加</th><th>添加IP</th>";
echo "<th>修改</th><th>修改IP</th><th>修改</th></tr>";
$idfirst = ''; $idend = '';
if($rs=$dop->getRecs()){ 
    foreach($rs as $r){ 
      $cid = $idend = $r['cid'];
      if(empty($idfirst)) $idfirst = $cid;
      echo $cv->Select($cid);
      echo $cv->Field($r['title'],1,64); 
      echo $cv->Field($r['vno']);
      echo $cv->Field($r['vtop']);
      echo $cv->Field($r['vcnt']);
      echo $cv->Show($r['show']);
      echo $cv->Time($r['atime']);
      echo $cv->Field($r['aip']);
      echo $cv->Time($r['etime']);
      echo $cv->Field($r['eip']);
      echo $cv->Url(lang('flow.dops_edit'),1,"$aurl[1]&view=form&cid=$r[cid]&recbk=ref","");
      echo "</tr>"; 
    }
    $dop->pgbar($idfirst,$idend);
}else{
    echo "\n<tr><td class='tc' colspan='15'>".lang('flow.dops_nodata')."</td></tr>\n";
}
glbHtml::fmt_end(array("mod|$mod"));
