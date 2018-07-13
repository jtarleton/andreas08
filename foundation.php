<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<title>andreas08: ignore the trends</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<meta name="description" content="Your website description goes here" />
<meta name="keywords" content="your,keywords,goes,here" />
<link href="https://fonts.googleapis.com/css?family=Reenie+Beanie" rel="stylesheet"> 

<style type="text/css">
  /* andreas08 - an open source xhtml/css website layout by Andreas Viklund - http://andreasviklund.com . Free to use in any way and for any purpose as long as the proper credits are given to the original designer. Version: 1.0, November 28, 2005 */

  /**************** Body and tag styles ***************
  <!-- 

  <link rel="stylesheet" href="andreas08.css" type="text/css" media="screen,projection" /> -->
  */

  *{ 
     margin:0; padding:0; 
  }
  .codeblock {
    border-radius: 3px;
    color:#525C65;
    font-size: 90%;
    white-space: pre;
    padding:10px 50px;
    font-weight:500;
    font-family:Consolas, monaco, monospace;
    display: block;
    margin: auto;
    border:0px solid #c9c9c9;

  }

  body{
   font:76% Verdana,Tahoma,Arial,sans-serif;
  line-height:1.4em;
  text-align:justify;
  color:#303030;
  }
 /*
  a{
  color:#467aa7;

  text-decoration:none;
  background-color:inherit;
  }

  a:hover{color:#2a5a8a; text-decoration:none; background-color:inherit;}
  a img{border:none;}

  p{padding:0 0 1.6em 0;}
  p form{margin-top:0; margin-bottom:20px;} */

  img.left,img.center,img.right{padding:4px; border:1px solid #a0a0a0;}
  img.left{float:left; margin:0 12px 5px 0;}
  img.center{display:block; margin:0 auto 5px auto;}
  img.right{float:right; margin:0 0 5px 12px;}

  /**************** Header and navigation styles ****************/

  #ccontainer{
   width:100%; 
  margin:20px auto; 
  padding:1px 0;
  text-align:left;
  background:#FFF;
  color:#303030;
  border:0px solid red;/* #a0a0a0; */
  }

  #hheader{
  height:110px;
  width:auto;


  margin:0 1px 1px 1px;
  background:#467aa7;
  color:#ffffff;
  }

  #hheader h1{
  padding:35px 0 0 20px;
  font-size:2.4em;
  background-color:inherit;
  color:#ffffff;
  letter-spacing:-2px;
  font-weight:normal;
  }

  #hheader h2{
  margin:10px 0 0 20px;
  /* font-size:1.4em; */
  background-color:inherit;
  color:#f0f2f4;
  letter-spacing:-1px;
  font-weight:normal;
  
  font-family: 'Reenie Beanie', cursive;
  color: #000;
  /* text-shadow: 2px 2px 0px rgba(0,0,0,0.2), 4px 4px 8px rgba(0,0,0,0.2);  */

  }

  #nnavigation{
  height:3.2em;  
  line-height:3.2em;
  width:auto;
  margin:0 1px;
  background:#578bb8;
  color:#ffffff;
  }

  #nnavigation li{
  float:left;  height:3.2em;  
  line-height:3.2em;
  list-style-type:none;
  border-right:1px solid #ffffff;
  white-space:nowrap;
  }

  #nnavigation li a{
  display:block;
  padding:0 10px;
  font-size:0.8em;
  font-weight:normal;
  text-transform:uppercase;
  text-decoration:none;
  background-color:inherit;
  color: #ffffff;
  }

  * html #nnavigation a {width:1%;}

  #nnavigation .selected,#nnavigation a:hover{
  background:#80b0da;
  color:#ffffff;
  text-decoration:none;
  }

  /**************** Content styles ****************/

  #ccontent{
  /*float:left;*/
  text-align:justify;
  /*width: 100%;  1030px;
  font-size:0.9em; */
 
  padding: 30px 10px 10px 10px; 
  }

  #ccontent h2{
  display:block;
  margin:0 0 16px 0;
  font-size:1.7em;
  font-weight:normal;
  letter-spacing:-1px;
  color:#505050;
  background-color:inherit;
  }

  #ccontent h2 a{font-weight:normal;}
  #ccontent h3{margin:0 0 5px 0; font-size:1.4em; letter-spacing:-1px;}
  #ccontent a:hover,#subcontent a:hover{}
  #ccontent ul,#content ol{margin:0 5px 16px 35px;}
  #ccontent dl{margin:0 5px 10px 25px;}
  #ccontent dt{font-weight:bold; margin-bottom:5px;}
  #ccontent dd{margin:0 0 10px 15px;}

  /**************** Sidebar styles ****************/

  #subcontent{
  float:right;
  width:170px;
  padding:20px 20px 10px 0;
  line-height:1.4em;
  }

  #subcontent h2{
  display:block;
  margin:0 0 15px 0;
  font-size:1.6em;
  font-weight:normal;
  text-align:left;
  letter-spacing:-1px;
  color:#505050;
  background-color:inherit;
  }

  #subcontent p{margin:0 0 16px 0; font-size:0.9em;}

  /**************** Menublock styles ****************/

  .menublock{margin:0 0 20px 8px; font-size:0.9em;}
  .menublock li{list-style:none; display:block; padding:2px; margin-bottom:2px;}
  .menublock li a{font-weight:bold; text-decoration:none;}
  .menublock li a:hover{text-decoration:none;}
  .menublock li ul{margin:3px 0 3px 15px; font-size:1em; font-weight:normal;}
  .menublock li ul li{margin-bottom:0;}
  .menublock li ul a{font-weight:normal;}

  /**************** Searchbar styles ****************/

  #searchbar{margin:0 0 20px 0;}
  #searchbar form fieldset{margin-left:10px; border:0 solid;}

  #searchbar #s{
  height:1.2em;
  width:110px;
  margin:0 5px 0 0;
  border:1px solid #a0a0a0;
  }

  #searchbar #searchbutton{
  width:auto;
  padding:0 1px;
  border:1px solid #808080;
  font-size:0.9em;
  text-align:center;
  }

  /**************** Footer styles ****************/

  #ffooter{
  clear:both;
  width:auto;
  padding:5px 0;
  margin:0 1px;
  font-size:0.9em;
  color:#f0f0f0;
  background:#467aa7;
  }

  #ffooter p{padding:0; margin:0; text-align:center;}
  #ffooter a{color:#f0f0f0; background-color:inherit; font-weight:bold;}
  #ffooter a:hover{color:#ffffff; background-color:inherit; }

  /**************** Misc classes and styles ****************/

  .splitcontentleft{float:left; width:48%;}
  .splitcontentright{float:right; width:48%;}
  .clear{clear:both;}
  .small{font-size:0.8em;}
  .hide{display:none;}
  .textcenter{text-align:center;}
  .textright{text-align:right;}
  .important{color:#f02025; background-color:inherit; font-weight:bold;}

  .box{
  margin:0 0 20px 0;
  padding:10px;
  border:1px solid #c0c0c0;
  background-color:#fafbfc;
  color:#505050;
  line-height:1.5em;
  }


  .snippet {
    
    background: #f9f9f9;
    border-left: 10px solid #ccc;
    margin: 1.5em 0px;
    padding: 0.5em 10px;
    quotes: "\201C""\201D""\2018""\2019";
  }
  .snippet :before {
    color: #ccc;
    
    font-size: 4em;
    line-height: 0.1em;
    margin-right: 0.25em;
    vertical-align: -0.4em;
  }
  .snippet:after {
    color: #ccc;

    font-size: 4em;
    line-height: 0.1em;
    margin-left: 0.25em;
    vertical-align: -0.4em;
  }
  .snippet p {
    display: inline;
  }

  blockquote {

    background: #f9f9f9;
    border-left: 10px solid #ccc;
    margin: 1.5em 0px;
    padding: 0.5em 10px;
    quotes: "\201C""\201D""\2018""\2019";
  }
  blockquote:before {
    font-family: "Times New Roman",serif;
    color: #ccc;
    content: open-quote;
    font-size: 4em;
    line-height: 0.1em;
    margin-right: 0.25em;
    vertical-align: -0.4em;
  }
  blockquote:after {
    font-family: "Times New Roman",serif;
    color: #ccc;
    content: close-quote;
    font-size: 4em;
    line-height: 0.1em;
    margin-left: 0.25em;
    vertical-align: -0.4em;
  }
  blockquote p {
    display: inline;
  }

  table a:link {
    color: green;
    /* font-weight: bold; */
   
  }
  table a:visited {
    color: green;
    /* font-weight:bold; */
    
  }
  table a:active,
  table a:hover {
    color: lime;
    
  }
  table {
    width:100%;
    table-layout: fixed;
    font-family:Verdana, sans-serif;
    color:#666;
    /* font-size:12px; */
    /* text-shadow: 1px 1px 0px #fff; */
    background:#eaebec;
    /* margin:20px; */
    border:#ccc 1px solid;

    -moz-border-radius:3px;
    -webkit-border-radius:3px;
    border-radius:3px;

   /*  -moz-box-shadow: 0 1px 2px #d1d1d1;
    -webkit-box-shadow: 0 1px 2px #d1d1d1;
    box-shadow: 0 1px 2px #d1d1d1; */
  }
  table th {
    /* padding:21px 25px 22px 25px; */
    border-top:1px solid #fafafa;
    border-bottom:1px solid #e0e0e0;
    font-weight: normal;
    /*font-weight: 550; */
    /* background: #ededed; 
    background: -webkit-gradient(linear, left top, left bottom, from(#ededed), to(#ebebeb));
    background: -moz-linear-gradient(top,  #ededed,  #ebebeb);*/
  }
  table th:first-child {
    text-align: left;
    /* padding-left:20px; */
  }
  table tr:first-child th:first-child {
    -moz-border-radius-topleft:3px;
    -webkit-border-top-left-radius:3px;
    border-top-left-radius:3px;
  }
  table tr:first-child th:last-child {
    -moz-border-radius-topright:3px;
    -webkit-border-top-right-radius:3px;
    border-top-right-radius:3px;
  }
  table tr {
    text-align: left;
    /* padding-left:20px; */
  }
  table td:first-child {
    text-align: left;
    /* padding-left:20px; */
    border-left: 0;
  }
  table td {
    /* padding:18px; */
    border-top: 1px solid #ffffff;
    border-bottom:1px solid #e0e0e0;
    border-left: 1px solid #e0e0e0;

    background: #fafafa;
    /* background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
    background: -moz-linear-gradient(top,  #fbfbfb,  #fafafa);*/
  }
  table tr.even td {
    background: #f6f6f6;
    /* background: -webkit-gradient(linear, left top, left bottom, from(#f8f8f8), to(#f6f6f6));
    background: -moz-linear-gradient(top,  #f8f8f8,  #f6f6f6); */
  }
  table tr:last-child td {
    border-bottom:0;
  }
  table tr:last-child td:first-child {
    -moz-border-radius-bottomleft:3px;
    -webkit-border-bottom-left-radius:3px;
    border-bottom-left-radius:3px;
  }
  table tr:last-child td:last-child {
    -moz-border-radius-bottomright:3px;
    -webkit-border-bottom-right-radius:3px;
    border-bottom-right-radius:3px;
  }
  /* table tr:hover td {
    background: #f2f2f2;
    background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
    background: -moz-linear-gradient(top,  #f2f2f2,  #f0f0f0);  
  } */
  </style>
   <link rel="stylesheet" href="fndn/css/foundation.css"> 
  <link rel="stylesheet" href="fndn/css/app.css">
<!-- <link href="https://fonts.googleapis.com/css?family=Qwigley" rel="stylesheet">
-->
<link href="https://fonts.googleapis.com/css?family=Dawning+of+a+New+Day" rel="stylesheet"> 
  <style type="text/css">
  @font-face {
    font-family: myFirstFont;
    src: url('http://weblocal.ad-id.org/Smoothstone/SmoothStone-Regular.ttf');
}


  h1 {
    /* font-size:78px; */
    
   font-family: 'Reenie Beanie', cursive;
   font-size: 28px;
font-weight:900;

  color: #FFF;
  text-shadow: 2px 2px 0px rgba(0,0,0,0.2), 4px 4px 8px rgba(0,0,0,0.2);  

}
h4 {
  font-size: 18px;
}
    
  </style>
</head>
<body style="margin:0; padding:0;background-color:#e8eaec;">
<div id="ccontainer">
<div id="hheader" style="padding-bottom:10px;">      
  <h1>James Tarleton's Home Page</h1>
  <!-- <h4 style="text-align:left;">Welcome to my Home Page</h4> -->

</div>
<div id="nnavigation">
<ul style="margin:0;">
<li class="selected"><a href="#">Home</a></li>
<li><a href="#">Projects</a></li>
<li><a href="#">Client</a></li>
<li><a href="#">Server</a></li>
<li><a href="#">Archives</a></li>
<li><a href="#">About</a></li>
<li><a href="#">Weather</a></li>
<li><a href="#">Login</a></li>
</ul>
<div style="padding-right:10px; text-align:right;"><?php 
$dt = new DateTime('now', new DateTimeZone('America/New_York'));
$formatted = $dt->format('d M Y &#0149; g:i a T');
echo $formatted; ?></div>
</div>


<div id="ccontent"> 



  <div class="grid-x grid-padding-x">
    <div class="large-12 cell">
      
      
      
  <div class="grid-x grid-padding-x">
    
        <div class="large-4 medium-4 small-4 cell">
          <div class="primary callout">
             <p>
              Lorem ipsum dolor sit amet, eam et solum fuisset patrioque. At nominati accommodare qui, sensibus disputationi duo cu. Animal nominavi eu qui, ius decore pertinax ea. Discere hendrerit id cum. Salutatus temporibus has cu, vim habeo dicant ea. No sale graecis tractatos vis. In nisl scaevola laboramus has. Vel cu eirmod delicata, id sit tamquam minimum. Qui cu laudem prodesset reformidans. Has no illud fuisset. Eu mel decore praesent laboramus. Nonumy delenit lucilius no sed, nonumy atomorum intellegebat vis ei, ex vidit iudicabit sed. Ne eam eripuit eruditi accusata, omnium accusam mei an. 
            </p>
          </div>
        </div>
        <div class="large-4 medium-4 small-4 cell">
          <div class="primary callout">
             <p>
              Lorem ipsum dolor sit amet, eam et solum fuisset patrioque. At nominati accommodare qui, sensibus disputationi duo cu. Animal nominavi eu qui, ius decore pertinax ea. Discere hendrerit id cum. Salutatus temporibus has cu, vim habeo dicant ea. No sale graecis tractatos vis. In nisl scaevola laboramus has. Vel cu eirmod delicata, id sit tamquam minimum. Qui cu laudem prodesset reformidans. Has no illud fuisset. Eu mel decore praesent laboramus. Nonumy delenit lucilius no sed, nonumy atomorum intellegebat vis ei, ex vidit iudicabit sed. Ne eam eripuit eruditi accusata, omnium accusam mei an. 
            </p>
          </div>
        </div>
        <div class="large-4 medium-4 small-4 cell">
          <div class="primary callout">
             <p>
              Lorem ipsum dolor sit amet, eam et solum fuisset patrioque. At nominati accommodare qui, sensibus disputationi duo cu. Animal nominavi eu qui, ius decore pertinax ea. Discere hendrerit id cum. Salutatus temporibus has cu, vim habeo dicant ea. No sale graecis tractatos vis. In nisl scaevola laboramus has. Vel cu eirmod delicata, id sit tamquam minimum. Qui cu laudem prodesset reformidans. Has no illud fuisset. Eu mel decore praesent laboramus. Nonumy delenit lucilius no sed, nonumy atomorum intellegebat vis ei, ex vidit iudicabit sed. Ne eam eripuit eruditi accusata, omnium accusam mei an. 
            </p>
          </div>
        </div>
    
    
        <div class="large-12 cell">
          <div class="primary callout"  style="border:0px; background-color:#FFF;">
            <p><strong>This is a twelve cell section in a grid-x.</strong> Each of these includes a div.callout element so you can see where the cell are - it's not required at all for the grid.</p>
            
            <p>
              Lorem ipsum dolor sit amet, eam et solum fuisset patrioque. At nominati accommodare qui, sensibus disputationi duo cu. Animal nominavi eu qui, ius decore pertinax ea. Discere hendrerit id cum. Salutatus temporibus has cu, vim habeo dicant ea. No sale graecis tractatos vis. In nisl scaevola laboramus has. Vel cu eirmod delicata, id sit tamquam minimum. Qui cu laudem prodesset reformidans. Has no illud fuisset. Eu mel decore praesent laboramus. Nonumy delenit lucilius no sed, nonumy atomorum intellegebat vis ei, ex vidit iudicabit sed. Ne eam eripuit eruditi accusata, omnium accusam mei an. 
            </p>
            
            <p>
              Lorem ipsum dolor sit amet, eam et solum fuisset patrioque. At nominati accommodare qui, sensibus disputationi duo cu. Animal nominavi eu qui, ius decore pertinax ea. Discere hendrerit id cum. Salutatus temporibus has cu, vim habeo dicant ea. No sale graecis tractatos vis. In nisl scaevola laboramus has. Vel cu eirmod delicata, id sit tamquam minimum. Qui cu laudem prodesset reformidans. Has no illud fuisset. Eu mel decore praesent laboramus. Nonumy delenit lucilius no sed, nonumy atomorum intellegebat vis ei, ex vidit iudicabit sed. Ne eam eripuit eruditi accusata, omnium accusam mei an. Ne mei homero periculis accusamus. At mei integre iuvaret referrentur, sint quidam ea mea. Cum id ullum nostrum, mei apeirian constituam an, mea an minimum nominavi instructior. No euripidis incorrupte quo, ne vix scripta regione integre. Aeque dolor mentitum no has, saperet accusamus dissentiet ex ius. Eos ei mucius eligendi constituto, te mel aliquam oporteat disputationi. Veniam scriptorem est ei, eros elit oblique qui ea. Vel delenit denique constituam et, mel te patrioque moderatius. Quem impedit tractatos eam eu. Ei usu iriure consectetuer. His dolorem gloriatur in, no eros etiam possim ius. Cu ullum novum senserit nam. Ei elit adipisci instructior quo. Id his agam euismod, libris eripuit alterum sit te. Vidisse indoctum duo in, vix erat dolorum interpretaris no. Vidit scriptorem consectetuer his in. Deleniti neglegentur intellegebat ex nec, has iusto dicant indoctum in, per deleniti repudiare cu. Duis intellegam sadipscing cum cu. Ex mei ferri persius elaboraret, meis fugit movet te his. Mel no laoreet moderatius, nostro persequeris eam ad, ea novum dicam vivendum usu. Utinam hendrerit per eu, cu eirmod gloriatur has. Vim ea brute nulla feugiat, ius quodsi delenit laoreet cu. Ex quo natum novum laudem, duo ex quodsi accumsan. In nec possit labitur signiferumque. Dolores assentior te eam, omnesque lobortis sit ex, nostrud voluptaria sea ut. Eu mel saepe graece, ut possim referrentur est. Rebum dicat populo sea at. Te pro illud delicata. 
            </p>
            
            <p>
              <h5>Try one of these buttons:</h5>
        <p><a href="#" class="button">Simple Button</a><br/>
        <a href="#" class="success button">Success Btn</a><br/>
        <a href="#" class="alert button">Alert Btn</a><br/>
        <a href="#" class="secondary button">Secondary Btn</a></p>
        <div class="callout">
          <h5>So many components, girl!</h5>
          <p>A whole kitchen sink of goodies comes with Foundation. Check out the docs to see them all, along with details on making them your own.</p>
          <a href="http://foundation.zurb.com/sites/docs/" class="small button">Go to Foundation Docs</a>
        </div>
              
            </p>
            
            
            
            <p>
              <h5>We bet you&rsquo;ll need a form somewhere:</h5>
        <form>
          <div class="grid-x grid-padding-x">
            <div class="large-12 cell">
              <label>Input Label</label>
              <input type="text" placeholder="large-12.cell" />
            </div>
          </div>
          <div class="grid-x grid-padding-x">
            <div class="large-4 medium-4 cell">
              <label>Input Label</label>
              <input type="text" placeholder="large-4.cell" />
            </div>
            <div class="large-4 medium-4 cell">
              <label>Input Label</label>
              <input type="text" placeholder="large-4.cell" />
            </div>
            <div class="large-4 medium-4 cell">
              <div class="grid-x">
                <label>Input Label</label>
                <div class="input-group">
                  <input type="text" placeholder="small-9.cell" class="input-group-field" />
                  <span class="input-group-label">.com</span>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-x grid-padding-x">
            <div class="large-12 cell">
              <label>Select Box</label>
              <select>
                <option value="husker">Husker</option>
                <option value="starbuck">Starbuck</option>
                <option value="hotdog">Hot Dog</option>
                <option value="apollo">Apollo</option>
              </select>
            </div>
          </div>
          <div class="grid-x grid-padding-x">
            <div class="large-6 medium-6 cell">
              <label>Choose Your Favorite</label>
              <input type="radio" name="pokemon" value="Red" id="pokemonRed"><label for="pokemonRed">Radio 1</label>
              <input type="radio" name="pokemon" value="Blue" id="pokemonBlue"><label for="pokemonBlue">Radio 2</label>
            </div>
            <div class="large-6 medium-6 cell">
              <label>Check these out</label>
              <input id="checkbox1" type="checkbox"><label for="checkbox1">Checkbox 1</label>
              <input id="checkbox2" type="checkbox"><label for="checkbox2">Checkbox 2</label>
            </div>
          </div>
          <div class="grid-x grid-padding-x">
            <div class="large-12 cell">
              <label>Textarea Label</label>
              <textarea placeholder="small-12.cell"></textarea>
            </div>
          </div>
        </form>
              
            </p>
            
            
            
            
            
          </div>
        </div>
        
        <div class="large-4 medium-4 small-4 cell">
          <div class="primary callout">
            <p>Four cell</p>
          </div>
        </div>
        <div class="large-4 medium-4 small-4 cell">
          <div class="primary callout">
            <p>Four cell</p>
          </div>
        </div>
        <div class="large-4 medium-4 small-4 cell">
          <div class="primary callout">
            <p>Four cell</p>
          </div>
        </div>
    
    
        <div class="large-6 medium-6 cell">
          <div class="primary callout">
            <p>Lorem ipsum dolor sit amet, eam et solum fuisset patrioque. At nominati accommodare qui, sensibus disputationi duo cu. Animal nominavi eu qui, ius decore pertinax ea. Discere hendrerit id cum.

            Salutatus temporibus has cu, vim habeo dicant ea. No sale graecis tractatos vis. In nisl scaevola laboramus has. Vel cu eirmod delicata, id sit tamquam minimum. Qui cu laudem prodesset reformidans.

            Has no illud fuisset. Eu mel decore praesent laboramus. Nonumy delenit lucilius no sed, nonumy atomorum intellegebat vis ei, ex vidit iudicabit sed. Ne eam eripuit eruditi accusata, omnium accusam mei an. Ne mei homero periculis accusamus.

            At mei integre iuvaret referrentur, sint quidam ea mea. Cum id ullum nostrum, mei apeirian constituam an, mea an minimum nominavi instructior. No euripidis incorrupte quo, ne vix scripta regione integre. Aeque dolor mentitum no has, saperet accusamus dissentiet ex ius. Eos ei mucius eligendi constituto, te mel aliquam oporteat disputationi. Veniam scriptorem est ei, eros elit oblique qui ea.

            Vel delenit denique constituam et, mel te patrioque moderatius. Quem impedit tractatos eam eu. Ei usu iriure consectetuer. His dolorem gloriatur in, no eros etiam possim ius. Cu ullum novum senserit nam. Ei elit adipisci instructior quo. Id his agam euismod, libris eripuit alterum sit te.

            Vidisse indoctum duo in, vix erat dolorum interpretaris no. Vidit scriptorem consectetuer his in. Deleniti neglegentur intellegebat ex nec, has iusto dicant indoctum in, per deleniti repudiare cu. Duis intellegam sadipscing cum cu. Ex mei ferri persius elaboraret, meis fugit movet te his.

            Mel no laoreet moderatius, nostro persequeris eam ad, ea novum dicam vivendum usu. Utinam hendrerit per eu, cu eirmod gloriatur has. Vim ea brute nulla feugiat, ius quodsi delenit laoreet cu. Ex quo natum novum laudem, duo ex quodsi accumsan. In nec possit labitur signiferumque.

            Dolores assentior te eam, omnesque lobortis sit ex, nostrud voluptaria sea ut. Eu mel saepe graece, ut possim referrentur est. Rebum dicat populo sea at. Te pro illud delicata.
            </p>
          </div>
        </div>
        <div class="large-6 medium-6 cell">
          <div class="primary callout">
            <p>
            Modus omnesque oporteat sea ex. Dico diam aperiam cu mel, ex eam malis corrumpit. Qui no facer quidam, congue munere audire cu mel. His eu simul convenire intellegebat, an mea graeci labitur concludaturque, ex est case maiorum adolescens. Sonet regione sapientem sit cu, mel consulatu assentior an.

            Ei pro numquam platonem, has te ullum aperiri voluptatum. At has dicta gloriatur, ea pro menandri expetenda intellegebat, id mea esse viris appetere. Choro habemus quo et, cum an nibh eleifend petentium. Ei brute atqui vel, ei soluta graecis est.</p>
          </div>
        </div>
      </div>
    
    </div></div>
    





   
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <!-- 
  <div class="grid-x grid-padding-x">
    <div class="large-12 cell">
      <div class="callout">
        <h3>We&rsquo;re stoked you want to try Foundation! </h3>
        <p>To get going, this file (index.html) includes some basic styles you can modify, play around with, or totally destroy to get going.</p>
        <p>Once you've exhausted the fun in this document, you should check out:</p>
        <div class="grid-x grid-padding-x">
          <div class="large-4 medium-4 cell">
            <p><a href="http://foundation.zurb.com/docs">Foundation Documentation</a><br />Everything you need to know about using the framework.</p>
          </div>
          <div class="large-4 medium-4 cell">
            <p><a href="http://zurb.com/university/code-skills">Foundation Code Skills</a><br />These online courses offer you a chance to better understand how Foundation works and how you can master it to create awesome projects.</p>
          </div>
          <div class="large-4 medium-4 cell">
            <p><a href="http://foundation.zurb.com/forum">Foundation Forum</a><br />Join the Foundation community to ask a question or show off your knowlege.</p>
          </div>
        </div>
        <div class="grid-x grid-padding-x">
          <div class="large-4 medium-4 medium-push-2 cell">
            <p><a href="http://github.com/zurb/foundation">Foundation on Github</a><br />Latest code, issue reports, feature requests and more.</p>
          </div>
          <div class="large-4 medium-4 medium-pull-2 cell">
            <p><a href="https://twitter.com/ZURBfoundation">@zurbfoundation</a><br />Ping us on Twitter if you have questions. When you build something with this we'd love to see it (and send you a totally boss sticker).</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="grid-x grid-padding-x">
    <div class="large-8 medium-8 cell">
      <h5>Here&rsquo;s your basic grid:</h5>
   

      <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
          <div class="primary callout">
            <p><strong>This is a twelve cell section in a grid-x.</strong> Each of these includes a div.callout element so you can see where the cell are - it's not required at all for the grid.</p>
          </div>
        </div>
      </div>
      <div class="grid-x grid-padding-x">
        <div class="large-6 medium-6 cell">
          <div class="primary callout">
            <p>Six cell</p>
          </div>
        </div>
        <div class="large-6 medium-6 cell">
          <div class="primary callout">
            <p>Six cell</p>
          </div>
        </div>
      </div>
      <div class="grid-x grid-padding-x">
        <div class="large-4 medium-4 small-4 cell">
          <div class="primary callout">
            <p>Four cell</p>
          </div>
        </div>
        <div class="large-4 medium-4 small-4 cell">
          <div class="primary callout">
            <p>Four cell</p>
          </div>
        </div>
        <div class="large-4 medium-4 small-4 cell">
          <div class="primary callout">
            <p>Four cell</p>
          </div>
        </div>
      </div>

        

      <div id="content">
        <h4><h2>Welcome To Andreas08!</h2></h4>
        <p>
        <p>I get a lot of requests about new open source templates, and this one was created as a response to one of those requests. This template is based on the design of my own website, with only small changes (hopefully improvements!) from my own design. Among the changes, it is worth to note that this template does not use any images &#8211; and browser-based font resizing is fully supported. Other than that, there are no special features or extras, only valid and well-structured XHTML 1.1 and CSS2 code.
        </p>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <p class="snippet">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <table cellspacing='0'>
        <thead>
        <tr>
        <th>Task Details</th>
        <th>Progress</th>
        <th>Vital Task</th>
        </tr>
        </thead>
        <tbody>
        <tr>
        <td>Create pretty table design</td>
        <td>100%</td>
        <td>Yes</td>
        </tr>
        <tr class="even">
        <td>Take the dog for a walk</td>
        <td>100%</td>
        <td>Yes</td>
        </tr>
        <p></p>
        <tr>
        <td>Waste half the day on Twitter</td>
        <td>20%</td>
        <td>No</td>
        </tr>
        <tr class="even">
        <td>Feel inferior after viewing Dribble</td>
        <td>80%</td>
        <td>No</td>
        </tr>
        <tr>
        <td>Wince at &#8220;to do&#8221; list</td>
        <td>100%</td>
        <td>Yes</td>
        </tr>
        <tr class="even">
        <td>Vow to complete personal project</td>
        <td>23%</td>
        <td>yes</td>
        </tr>
        <tr>
        <td>Procrastinate</td>
        <td>80%</td>
        <td>No</td>
        </tr>
        <tr class="even">
        <td><a href="#yep-iit-doesnt-exist">Hyperlink   Example</a></td>
        <td>80%</td>
        <td><a href="#inexistent-id">Another</a></td>
        </tr>
        </tbody>
        </table>
        <blockquote><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br />
        &#8211;Abraham Lincoln</p></blockquote>
        </p>
        </div>
        <div id="content">
        <h4>Presenting: andreas07 in a new way!</h4>
        <p>
        <p><img src="wp-content/themes/andreas07/img/example.jpg" width="512" height="160" alt="image example" /><br />
        From web designer, Andreas Viklund:</p>
        <blockquote>
        <p>Hello and thank you for your interest in this template! Before you jump to any conclusions about it, please me explain the story behind it. This template is not like my others, it is a little bit special&#8230;</p>
        <p>First of all, this design was originally made by request from a friend who arrange html/css classes for beginners. He asked me to create a design that was &#8220;so simple that even [his] grandmother would be able to use it&#8221;, and he wanted to use the design as an example in his classes. The template needed to match a number of special requests as for functionality and coding style for the classes. The content had to be separated from the presentation, and every part of the design had to be made in way that would be easy to understand &#8211; and easy learn from.  <a href="http://wp.jamestarleton.com/?p=52#more-52" class="more-link"><span aria-label="Continue reading Presenting: andreas07 in a new way!">(more&hellip;)</span></a></p>
        </blockquote>
        </p>
        
      </div>
      
      
    </div>
  </div>
-->
</div>
  <div id="ffooter">
  <p>&copy; 2005-2006 <a href="#">Your Name</a> | Design by <a href="http://andreasviklund.com">Andreas Viklund</a></p>
  </div></div>
</div>

<script src="fndn/js/vendor/jquery.js"></script>
<script src="fndn/js/vendor/what-input.js"></script>
<script src="fndn/js/vendor/foundation.js"></script>
<script src="fndn/js/app.js"></script>
</body>
</html>





