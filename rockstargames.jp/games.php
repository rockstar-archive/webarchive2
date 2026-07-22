

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS">

<meta name="keywords" content="ロックスター,ソフト,プレイステーション,プレイ・ステーション,２,PS2,ハード,ソニー,マイクロソフト,
Xbox,ゲームキューブ,ゲームボーイ,ゲーム,ボーイ,アドバンス,カラー,PC,公式,オフィシャル,サイト,グランド・セフト・オート・３,
ヴァイス・シティ,ダブル・パック,マンハント,ミッドナイト・クラブ・II,マックス・ペイン,テレビ,ビデオ,GTA,GTA2,GTA3,ウォーリアーズ,任天堂, 
rockstar, games, playstation, play, station, 2, PS2, console, sony, microsoft, nintendo, xbox, gamecube, gameboy, game, boy, 
PC, official, site, grand, theft, auto, 3, vice, city, double, pack, manhunt, midnight, club, II, max, payne, tv, video, gta, 
gta2, gta3, warriors">

<title>ゲーム</title>
<link href="styles/games.css" rel="stylesheet" type="text/css">
<link href="styles/global.css" rel="stylesheet" type="text/css">
<script language="javascript">
<!--

function lib_bwcheck(){ //Browsercheck (needed)
	this.ver=navigator.appVersion
	this.agent=navigator.userAgent
	this.dom=document.getElementById?1:0
	this.opera5=(navigator.userAgent.indexOf("Opera")>-1 && document.getElementById)?1:0
	this.ie5=(this.ver.indexOf("MSIE 5")>-1 && this.dom && !this.opera5)?1:0; 
	this.ie6=(this.ver.indexOf("MSIE 6")>-1 && this.dom && !this.opera5)?1:0;
	this.ie4=(document.all && !this.dom && !this.opera5)?1:0;
	this.ie=this.ie4||this.ie5||this.ie6
	this.mac=this.agent.indexOf("Mac")>-1
	this.ns6=(this.dom && parseInt(this.ver) >= 5) ?1:0; 
	this.ns4=(document.layers && !this.dom)?1:0;
	this.bw=(this.ie6 || this.ie5 || this.ie4 || this.ns4 || this.ns6 || this.opera5)
	return this
}
var bw=lib_bwcheck()

var speed=50 
 
var loop, timer 
 
function ConstructObject(obj,nest){ 
    nest=(!nest) ? '':'document.'+nest+'.' 
    this.el=bw.dom?document.getElementById(obj):bw.ie4?document.all[obj]:bw.ns4?eval(nest+'document.'+obj):0; 
    this.css=bw.dom?document.getElementById(obj).style:bw.ie4?document.all[obj].style:bw.ns4?eval(nest+'document.'+obj):0; 
    this.scrollHeight=bw.ns4?this.css.document.height:this.el.offsetHeight 
    this.clipHeight=bw.ns4?this.css.clip.height:this.el.offsetHeight 
    this.up=MoveAreaUp;this.down=MoveAreaDown; 
    this.MoveArea=MoveArea; this.x; this.y; 
    this.obj = obj + "Object" 
    eval(this.obj + "=this") 
    return this 
} 
function MoveArea(x,y){ 
    this.x=x;this.y=y 
    this.css.left=this.x 
    this.css.top=this.y 
} 
function MoveAreaDown(move){ 
	if(this.y>-this.scrollHeight+objContainer.clipHeight){ 
    this.MoveArea(0,this.y-move) 
    if(loop) setTimeout(this.obj+".down("+move+")",speed) 
	} 
}
function MoveAreaUp(move){ 
	if(this.y<0){ 
    this.MoveArea(0,this.y-move) 
    if(loop) setTimeout(this.obj+".up("+move+")",speed) 
	} 
} 
function PerformScroll(speed){ 
	if(initialised){ 
		loop=true; 
		if(speed>0) objScroller.down(speed) 
		else objScroller.up(speed) 
	} 
} 
function PerformGamesScroll(speed){ 
	if(gamesInitialised){ 
		loop=true; 
		if(speed>0) objScrollerGames.down(speed) 
		else objScrollerGames.up(speed) 
	} 
} 

function CeaseScroll(){ 
    loop=false 
    if(timer) clearTimeout(timer) 
} 
var initialised; 
function InitialiseScrollableArea(){ 
    objContainer=new ConstructObject('divContainer') 
    objScroller=new ConstructObject('divContent','divContainer') 
objScroller.MoveArea(0,0)		
    
    objContainer.css.visibility='visible'
    objScroller.css.visibility='visible'
    initialised=true; 

	InitialiseGamesScrollableArea();
} 
var gamesInitialised; 
function InitialiseGamesScrollableArea(){ 
    objContainerGames=new ConstructObject('divContainerGames') 
    objScrollerGames=new ConstructObject('divContentGames','divContainerGames') 
    objScrollerGames.MoveArea(0,0) 
    objContainerGames.css.visibility='visible'
	objScrollerGames.css.visibility='visible'
    gamesInitialised=true; 

}

// end absolutely positioned scrollable area object scripts 

function popScreen(thisGame,screenshot) {
	window.open ("screenshot.php?game="+thisGame+"&screenNumber="+screenshot, "screens", "width=650, height=540, location=0, menubar=0, resizable=0, scrollbars=0, status=0, titlebar=0, toolbar=0");
}

function popTrailer(thisGame) {
	window.open ("trailer.php?game="+thisGame, "trailer", "width=320, height=260, location=0, menubar=0, resizable=0, scrollbars=0, status=0, titlebar=0, toolbar=0");
}


-->
</script>
<style type="text/css">  
#divUpControl{position:absolute; width:175; left:10; top:87; z-index:1;} 
#divDownControl{position:absolute; width:175; left:10; top:293; z-index:1;} 
#divContainer{position:absolute; width:175; height:195; overflow:hidden; top:97; left:10; clip:rect(0,175,197,0); visibility:visible} 
#divContent{position:absolute; top:0; left:0;font-size:11px;font-family:Verdana;line-height:18px;text-align:justify;color:#ffffff;} 

#divUpControlGames{position:absolute; width:312; left:247; top:200; z-index:1;} 
#divDownControlGames{position:absolute; width:312; left:247; top:475; z-index:1;} 
#divContainerGames{position:absolute; width:350; height:270; overflow:hidden; top:210; left:237; clip:rect(0,350,260,0); visibility:visible} 
#divContentGames{position:absolute; top:0; left:0;font-size:11px;font-family:Verdana;line-height:18px;text-align:justify;color:#ffffff;} 
</style>
</head>
<body bgcolor="#000000" text="#FFFFFF" leftmargin="0" topmargin="0" onload="InitialiseScrollableArea();">
 
<table width="855" border="0" cellpadding="0" cellspacing="0" bgcolor="#000000" class="bg">
  <tr valign="top"> 
    <td colspan="3"> 
<table width="855" height="565" border="0" cellpadding="0" cellspacing="0">
        <tr> 
          <td height="19" colspan="4">&nbsp; </td>
        </tr>
        <tr> 
          <td width="190" rowspan="2" valign="top">
		  
		  
		<!-- GAMES NAV GOES HERE.  SEE DIV BELOW -->
		
		  
		  </td>
          <td width="25" rowspan="3">&nbsp; </td>
          <td width="450" height="140"> <table width="450" border="0" cellpadding="0" cellspacing="0">
              <tr> 
                <td rowspan="2" width="109" height="140"><img src="games/gta_vc/fob.jpg" width="96" height="136"> 
                </td>
                <td rowspan="2" width="286" height="140"><table width="100%" height="136" border="0" cellpadding="3" cellspacing="0">
                    <tr> 
                      <td bgcolor="#F2EEEA"><a target="game" href="http://www.vicecity.jp/"><img src="games/gta_vc/banner.jpg" width="280" height="130" border="0"></a></td>
                    </tr>
                  </table></td>
                <td><div align="center"><img src="images/spacer.gif" width="1" height="10"></td>
              </tr>
              <tr> 
                <td height="70" valign="top"> <div align="center"><a href="http://www.cero.gr.jp/rating.html" target="cero"><img src="games/gta_vc/esrb.jpg" border="0"></a></div></td>
              </tr>
            </table></td>
          <td width="190" rowspan="3">&nbsp; </td>
        </tr>
        <tr> 
          <td width="450" height="310" valign="top"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td>
				
				
				
				<!-- GAMES PAGE GOES HERE.  SEE DIV BELOW -->
				
				
				
				</td>
                <td width="40"><img src="images/spacer.gif" width="40" height="1"></td>
              </tr>
            </table></td>
        </tr>
        <tr> 
          <td width="190" height="126">&nbsp; </td>
          <td width="450" height="126">&nbsp; </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr> 
    <td width="128"><img src="images/home_l2.jpg" width="128" height="184"></td>
    <td colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td> <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td><img src="images/nav_title.jpg" width="479" height="43"><img src="images/nav_title_r.jpg" width="248" height="43"></td>
              </tr>
            </table></td>
        </tr>
        <tr> 
          <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td width="298"><img src="images/nav_l1.jpg" width="298" height="141"></td>
                <td width="88"><a href="home.php"><img src="images/nav_home_off.jpg" width="88" height="141" border="0"></a></td>
                <td width="94"><img src="images/nav_games_on.jpg" width="94" height="141"></td>
                <td width="78"><a href="news.php"><img src="images/nav_news_off.jpg" width="78" height="141" border="0"></a></td>
                <td width="36"><a href="links.htm"><img src="images/nav_links_off.jpg" width="73" height="141" border="0"></a></td>
                <td><img src="images/nav_r.jpg" width="97" height="141"></td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
</table>
</body>
</html>

<div id="divUpControl" align="center"> <a href="javascript:;" onmouseover="PerformScroll(-7)" onmouseout="CeaseScroll()"><img src="images/games-arrow-up1.gif" width="171" height="8" border="0"></a></div>
<div id="divDownControl" align="center"> <a href="javascript:;" onmouseover="PerformScroll(7)" onmouseout="CeaseScroll()"><img src="images/games-arrow-down1.gif" width="171" height="8" border="0"></a></div>
<div id="divContainer"> 
	<div id="divContent">
	
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS">


</head>
<table width="160" border="0" cellspacing="0" cellpadding="0">

  <tr> 
    <td><img src="images/spacer.gif" width="1" height="5"></td>
  </tr>
  <tr> 
    <td><table width="160" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="45" height="45"><a href="games.php?game=gta_vc"><img src="games/gta_vc/gta_vc.jpg" width="45" height="45" border="0"></a></td>
          <td width="5"><img src="images/spacer.gif" width="5" height="1"></td>
          <td><a href="games.php?game=gta_vc">グランド・セフト・オート・バイスシティ</a></td>
        </tr>
      </table></td>
  </tr>
  
  <tr> 
    <td><img src="images/spacer.gif" width="1" height="5"></td>
  </tr>  
  <tr> 
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="45" height="45"><a href="games.php?game=gta3"><img src="images/temp_games_thumb1.jpg" width="45" height="45" border="0"></a></td>
          <td width="5"><img src="images/spacer.gif" width="5" height="1"></td>
          <td><a href="games.php?game=gta3">グランド・セフト・オート・III</a></td>
        </tr>
      </table></td>
  </tr>
  
  <tr> 
    <td><img src="images/spacer.gif" width="1" height="5"></td>
  </tr>
  <tr> 
    <td>
	  <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="45" height="45"><a href="games.php?game=gta_dp"><img src="games/gta_dp/gta_dp.jpg" width="45" height="45" border="0"></a></td>
          <td width="5"><img src="images/spacer.gif" width="5" height="1"></td>
          <td><a href="games.php?game=gta_dp">グランド・セフト・オート・ダブルパック</a></td>
        </tr>
      </table></td>
  </tr>

  <tr> 
    <td><img src="images/spacer.gif" width="1" height="5"></td>
  </tr>
  <tr> 
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="45" height="45"><a href="games.php?game=maxpayne2&amp;scroll=4"><img src="games/maxpayne2/maxpayne2.jpg" width="45" height="45" border="0"></a></td>
          <td width="5"><img src="images/spacer.gif" width="5" height="1"></td>
          <td><a href="games.php?game=maxpayne2&amp;scroll=4">Max Payne 2</a></td>
        </tr>
      </table></td>
  </tr>
  
  <tr> 
    <td><img src="images/spacer.gif" width="1" height="5"></td>
  </tr>
  <tr> 
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="45" height="45"><a href="games.php?game=maxpayne&amp;scroll=5"><img src="games/maxpayne/maxpayne.jpg" width="45" height="45" border="0"></a></td>
          <td width="5"><img src="images/spacer.gif" width="5" height="1"></td>
          <td><a href="games.php?game=maxpayne&amp;scroll=5">マックス　ペイン</a></td>
        </tr>
      </table></td>
  </tr>
  
  <tr> 
    <td><img src="images/spacer.gif" width="1" height="5"></td>
  </tr>
  <tr> 
    <td>
	  <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="45" height="45"><a href="games.php?game=manhunt&amp;scroll=6"><img src="games/manhunt/manhunt.jpg" width="45" height="45" border="0"></a></td>
          <td width="5"><img src="images/spacer.gif" width="5" height="1"></td>
          <td><a href="games.php?game=manhunt&amp;scroll=6">Manhunt</a></td>
        </tr>
      </table></td>
  </tr>
    
  <tr> 
    <td><img src="images/spacer.gif" width="1" height="5"></td>
  </tr>
  <tr> 
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="45" height="45"><a href="games.php?game=mc2&amp;scroll=7"><img src="games/mc2/mc2.jpg" width="45" height="45" border="0"></a></td>
          <td width="5"><img src="images/spacer.gif" width="5" height="1"></td>
          <td><a href="games.php?game=mc2&amp;scroll=7">Midnight Club 2</a></td>
        </tr>
      </table></td>
  </tr>    
  
  
  <tr> 
    <td>&nbsp;</td>
  </tr>
</table>
	
	
	</div>
</div>	

<div id="divUpControlGames" align="center"> <a href="javascript:;" onmouseover="PerformGamesScroll(-7)" onmouseout="CeaseScroll()"><img src="images/games-arrow-up2.gif" width="312" height="8" border="0"></a></div>
<div id="divDownControlGames" align="center"> <a href="javascript:;" onmouseover="PerformGamesScroll(7)" onmouseout="CeaseScroll()"><img src="images/games-arrow-down2.gif" width="312" height="8" border="0"></a></div>
<div id="divContainerGames"> 
	<div id="divContentGames">
	
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS">
<link href="styles/global.css" rel="stylesheet" type="text/css">
</head>
<table width="350" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td>
      <table width="100%" border="0" cellpadding="10" cellspacing="0">
        <tbody>
          <tr>
              <td>機種: PlayStation 2, PC<br>
                日本発売日: ２００４年５月発売予定<br>
                開発: Rockstar North<br>
                Rating: 18才以上対象 <br>
                <br>
                あの熱かった80年代へ! <br> <br>
                高層ビル群や日差しが照りつづけるビーチ。ド派手なネオンで彩られたストリートや荒れ果てたスラム街。娯楽と腐敗に満ちた街。それが「バイスシティ」だ。<br> 
                <br>
                長い刑期を終え、リバティーシティに帰ってきたトミー・ベルセッティ。落ち着く間もなく、ボスであるソニー・フォレッリの指示で誘惑と快楽が渦巻く巨大な街「バイスシティ」へ送り込まれる。しかし到着後間もなく罠にハマり、すべてを失ってしまう。カネとブツを取り戻そうとするトミーの前に、ギャングやゴロツキ、堕落した政治家などが立ちふさがる。まるでバイスシティ全体を敵に回してしまったかのように・・・。殺られる前に殺れ！それがこの街で生き残る唯一の手段だ！</td>
          </tr>
        </tbody>
      </table>
      </td>
    </tr>
    <tr>
      <td>
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tbody>
          <tr>
            <td height="42">
            <table width="100%" border="0" cellpadding="10" cellspacing="1">
              <tbody>
                <tr>
                  <td><font face="tahoma, arial, helvetica" size="1" color="#000000">screenshot</font></td>
                </tr>
              </tbody>
            </table>
            </td>
          </tr>
          <tr>
            <td>
            <table border="0" cellpadding="0" cellspacing="0">
              <tbody>
                <tr>
                  <td><img src="images/spacer.gif" width="10" height="1"></td>
                  <td><a href="javascript:popScreen('gta_vc','1');"><img alt="screen1thumb.jpg" src="games/gta_vc/screen1thumb.jpg" style="height: 42px; width: 55px;" border="0"></a></td>
                  <td width="5"><img src="images/spacer.gif" width="5" height="1"></td>
                  <td><a href="javascript:popScreen('gta_vc','2');"><img alt="screen2thumb.jpg" src="games/gta_vc/screen2thumb.jpg" style="height: 42px; width: 55px;" border="0"></a></td>
                  <td width="5"><img src="images/spacer.gif" width="5" height="1"></td>
                  <td><a href="javascript:popScreen('gta_vc','3');"><img alt="screen3thumb.jpg" src="games/gta_vc/screen3thumb.jpg" style="height: 42px; width: 55px;" border="0"></a></td>
                  <td width="5"><img src="images/spacer.gif" width="5" height="1"></td>
                  <td><a href="javascript:popScreen('gta_vc','4');"><img alt="screen4thumb.jpg" src="games/gta_vc/screen4thumb.jpg" style="height: 42px; width: 55px;" border="0"></a></td>
                  <td width="5"><img src="images/spacer.gif" width="5" height="1"></td>
                  <td><a href="javascript:popScreen('gta_vc','5');"><img alt="screen5thumb.jpg" src="games/gta_vc/screen5thumb.jpg" style="height: 42px; width: 55px;" border="0"></a></td>
                </tr>
              </tbody>
            </table>
            </td>
          </tr>
        </tbody>
      </table>
      </td>
    </tr>
    <tr>
      <td>
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tbody>
          <tr>
            <td height="42">
            <table width="100%" border="0" cellpadding="10" cellspacing="1">
              <tbody>
                <tr>
                  <td><font face="tahoma, arial, helvetica" size="1" color="#000000">movies</font></td>
                </tr>
              </tbody>
            </table>
            </td>
          </tr>
          <tr>
            <td>
            <table border="0" cellpadding="0" cellspacing="0">
              <tbody>
                <tr>
                  <td width="10"><img src="images/spacer.gif" width="10" height="1"></td>
                  <td><a href="javascript:popTrailer('gta_vc');"><img src="games/gta_vc/trailerthumb.jpg" width="85" height="65" border="0"></a></td>
                  <td>
                  <table width="100%" border="0" cellpadding="10" cellspacing="0">
                    <tbody>
                      <tr>
                        <td><font face="tahoma, arial, helvetica" size="1" color="#333333"><b>Quicktime</b><br>
320x240(13MB)</font></td>
                        <td><font face="tahoma, arial, helvetica" size="1" color="#333333"><b><br>
                        </b></font></td>
                      </tr>
                    </tbody>
                  </table>
                  </td>
                </tr>
              </tbody>
            </table>
            </td>
          </tr>
        </tbody>
      </table>
      </td>
    </tr>
  </tbody>
</table>
	
	
	</div>
</div>