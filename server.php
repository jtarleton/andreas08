<div class="grid-x grid-padding-x">
  <div class="large-12 cell">
    <div class="primary callout" 
          style="border:0px; background-color:#FFF;">
      <p>
        <strong>SERVER is a twelve cell section in a grid-x.</strong> Each of these includes a div.callout element so you can see where the cell are - it's not required at all for the grid.</p>
      <p>
<table>
<?php 
$fields = array(
//'HTTP_HOST',
'SERVER_ADDR',
//'SERVER_NAME',
'SERVER_SOFTWARE',
'SERVER_PROTOCOL');

foreach($fields as $field) {
echo sprintf('<tr><td>%s</td><td>%s</td></tr>', $field, $_SERVER[$field]);
}

?>
</table>

	Lorem ipsum dolor sit amet, eam et solum fuisset patrioque. At nominati accommodare qui, sensibus disputationi duo cu. Animal nominavi eu qui, ius decore pertinax ea. Discere hendrerit id cum. Salutatus temporibus has cu, vim habeo dicant ea. No sale graecis tractatos vis. In nisl scaevola laboramus has. Vel cu eirmod delicata, id sit tamquam minimum. Qui cu laudem prodesset reformidans. Has no illud fuisset. Eu mel decore praesent laboramus. Nonumy delenit lucilius no sed, nonumy atomorum intellegebat vis ei, ex vidit iudicabit sed. Ne eam eripuit eruditi accusata, omnium accusam mei an. 
      </p>  
    </div>
  </div>
</div> 
