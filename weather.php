<div class="grid-x grid-padding-x">
  <div class="large-12 cell">
    <div class="primary callout" 
          style="border:0px; background-color:#FFF;">
      <p>
        <strong>date_sun_info</strong> ranks among my favorite native PHP calls.</p>
      <p><table>
        <?php 
        
        //NYC 40.730610, and the longitude is -73.935242
        
        $lat = 40.730610;
        $lon = -73.935242;
        $sun_info = date_sun_info(time(),$lat,$lon);

        $tz = new DateTimeZone('America/New_York');
        foreach ($sun_info as $k=>$v) {
          ?><tr>
            <td>
              <?php
          echo ucwords(str_replace('_',' ',$k)); 
          ?>
          </td>
          
          <td>
          <?php
          $dt = new DateTime();
          $dt->setTimezone($tz)
             ->setTimestamp($v);
          $formatted_dt = $dt->format('Y M d');
          $formatted_time= $dt->format('g:i a T');
          echo $formatted_dt .' | ' . $formatted_time;
          //date_default_timezone_set('America/New_York');
          //echo date('m/d/Y g:i a T',$v);
          ?>
        </td>
      </tr>
          <?php 
        }
        ?>
      </table>
      </p>  
    </div>
  </div>
</div> 