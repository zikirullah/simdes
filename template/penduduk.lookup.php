<?php if($result): ?>
<ul>
<?php for($i=0; $i < count($result["content"]); $i++): 
$result["content"][$i]["pendidikan"] = ($result["content"][$i]["pendidikan"] ? $result["content"][$i]["pendidikan"] : $M_PENDIDIDKAN[$result["content"][$i]["k_pendidikan"]]);
$result["content"][$i]["pekerjaan"] = ($result["content"][$i]["pekerjaan"] ? $result["content"][$i]["pekerjaan"] : $M_KERJA[$result["content"][$i]["k_kerja"]]);
?>
	<li id="<? echo $result["content"][$i]["id"];?>"><? echo $result["content"][$i]["nama"];?>
	<span class="data" ><?php echo ($result["content"][$i]["alamat"] ? $result["content"][$i]["alamat"] : "") ;?></span>
	<span class="data_hide" style="display:none"><? echo json_encode($result["content"][$i]);?></span></li>	
	<? endfor ?>
</ul>	
<?php endif ?>