
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="ロックスター,ソフト,プレイステーション,プレイ・ステーション,２,PS2,ハード,ソニー,マイクロソフト,
Xbox,ゲームキューブ,ゲームボーイ,ゲーム,ボーイ,アドバンス,カラー,PC,公式,オフィシャル,サイト,グランド・セフト・オート・３,
ヴァイス・シティ,ダブル・パック,マンハント,ミッドナイト・クラブ・II,マックス・ペイン,テレビ,ビデオ,GTA,GTA2,GTA3,ウォーリアーズ,任天堂, 
rockstar, games, playstation, play, station, 2, PS2, console, sony, microsoft, nintendo, xbox, gamecube, gameboy, game, boy, 
PC, official, site, grand, theft, auto, 3, vice, city, double, pack, manhunt, midnight, club, II, max, payne, tv, video, gta, 
gta2, gta3, warriors">
<link href="styles/news.css" rel="stylesheet" type="text/css">
<link href="styles/global.css" rel="stylesheet" type="text/css">
<script language="javascript">
<!--

function launchSoundtrackPopup() {
	window.open("soundtrack.html", "soundtrack", "width=750, height=700, location=0, menubar=0, resizable=0, scrollbars=0, status=1, titlebar=1, toolbar=0");
}

// begin absolutely positioned scrollable area object scripts 
/*
Extension developed by David G. Miles (www.z3roadster.net/dreamweaver)
Original Scrollable Area code developed by Thomas Brattli 
To add more shock to your site, visit www.DHTML Shock.com
*/

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
function CeaseScroll(){ 
    loop=false 
    if(timer) clearTimeout(timer) 
} 
function PerformGamesScroll(speed){ 
	if(gamesInitialised){ 
		loop=true; 
		if(speed>0) objScrollerGames.down(speed) 
		else objScrollerGames.up(speed) 
	} 
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
-->

</script>


<style type="text/css">  
#divUpControl{position:absolute; width:140; left:137; top:220; z-index:1;} 
#divDownControl{position:absolute; width:140; left:137; top:390; z-index:1;} 
#divContainer{position:absolute; width:140; height:160; overflow:hidden; top:230; left:137; clip:rect(0,140,160,0); visibility:visible} 
#divContent{position:absolute; top:0; left:0;font-size:11px;font-family:Verdana;line-height:18px;text-align:justify;color:#ffffff;} 

#divUpControlGames{position:absolute; width:312; left:287; top:220; z-index:1;} 
#divDownControlGames{position:absolute; width:312; left:287; top:495; z-index:1;} 
#divContainerGames{position:absolute; width:350; height:270; overflow:hidden; top:230; left:277; clip:rect(0,350,260,0); visibility:visible} 
#divContentGames{position:absolute; top:0; left:0;font-size:11px;font-family:Verdana;line-height:18px;text-align:justify;color:#ffffff;} 
</style>
<title>ニュース</title>
</head>
<body bgcolor="#000000" text="#FFFFFF" leftmargin="0" topmargin="0" onload="InitialiseScrollableArea();">
 
<table width="855" border="0" cellpadding="0" cellspacing="0" bgcolor="#000000">
  <tr valign="top"> 
    <td colspan="3"> 
      <table width="855" height="596" border="0" cellpadding="0" cellspacing="0" background="images/news_bg.jpg" class="news">
        <tr> 
          <td width="119" rowspan="3">&nbsp; </td>
          <td height="50" colspan="2">&nbsp; </td>
          <td width="255" rowspan="3">&nbsp; </td>
        </tr>
        <tr> 
          <td> <div align="center"> 
              <table border="0" cellspacing="0" cellpadding="3">
                <tr> 
                  <td bgcolor="#F1F2EA"><img src="images/news/news5211812.jpg" width="138" height="96"></td>
                </tr>
              </table>
            </div></td>
          <td width="330" valign="top"> <table width="100%" border="0" cellspacing="0" cellpadding="10">
              <tr> 
                <td><font color="white">グランド・セフト・オート・バイスシティ絶賛発売中！</font></td>
              </tr>
            </table></td>
        </tr>
        <tr> 
          <td width="151" valign="top"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td rowspan="2"><img src="images/spacer.gif" width="10" height="1"></td>
                <td><img src="images/spacer.gif" width="1" height="40"></td>
              </tr>
              <tr> 
                <td><!-- OLD TABLE --></td>
              </tr>
            </table></td>
          <td width="330" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td></td>
                <td valign="top"><img src="images/spacer.gif" width="1" height="40"></td>
                <td rowspan="2">&nbsp;</td>
              </tr>
              <tr>
                <td><img src="images/news_line_ver1.gif" width="1" height="317" hspace="5"></td>
                <td valign="top"> 
				
				

				  
				  
				  
                </td>
              </tr>
            </table></td>
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
                <td width="94"><a href="games.php"><img src="images/nav_games_off.jpg" width="94" height="141" border="0"></a></td>
                <td width="78"><img src="images/nav_news_on.jpg" width="78" height="141"></td>
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

<div id="divUpControl" align="center"> <a href="javascript:;" onmouseover="PerformScroll(-7)" onmouseout="CeaseScroll()"><img src="images/news-arrow-up.gif" width="134" height="8" border="0"></a></div>
<div id="divDownControl" align="center"> <a href="javascript:;" onmouseover="PerformScroll(7)" onmouseout="CeaseScroll()"><img src="images/news-arrow-down.gif" width="134" height="8" border="0"></a></div>
<div id="divContainer"> 
	<div id="divContent">
<table width="100%" border="0" cellspacing="0" cellpadding="10">
                    <tr> 
                      <td>
<a href="news.php?storyID=33&amp;scroll=0">グランド・セフト・オート・バイスシティ絶賛発売中！</a><br>2004/5/21<br><br><a href="news.php?storyID=32&amp;scroll=1">Xbox版 『グランド･セフト･オート ダブルパック 』発売決定!</a><br>2004/5/21<br><br><a href="news.php?storyID=28&amp;scroll=2">グランド・セフト・オート・バイスシティ　5月20日発売決定！</a><br>2004/4/20<br><br><a href="news.php?storyID=29&amp;scroll=3">「グランド・セフト・オート・バイスシティ」先着予約特典キャンペーン実施中！</a><br>2004/4/30<br><br><a href="news.php?storyID=20&amp;scroll=4">MANHUNT プレイステーション２　全米で好評発売中</a><br>2004/2/5<br><br><a href="news.php?storyID=23&amp;scroll=5">MAX PAYNE 2 のXBOXとPS2メディア</a><br>2004/2/4<br><br><a href="news.php?storyID=19&amp;scroll=6">MANHUNT プレイステーション2　レビュー</a><br>2004/2/4<br><br><a href="news.php?storyID=26&amp;scroll=7">グランド･セフト・オート・バイスシティ　日本発売決定！</a><br>2004/1/23<br><br><a href="news.php?storyID=22&amp;scroll=8">MAX PAYNE 2  XBOX&reg;全米で発売中</a><br>2003/12/31<br><br><a href="news.php?storyID=17&amp;scroll=9">グランド・セフト・オート：ダブルパック- XBOX コレクション レビュー</a><br>2003/11/18<br><br><a href="news.php?storyID=18&amp;scroll=10">グランド・セフト・オート：ダブルパック- XBOX コレクション 全米の店頭へ出荷</a><br>2003/11/4<br><br><a href="news.php?storyID=24&amp;scroll=11">MAX PAYNE 2 の新しいステージが二つリリースされた</a><br>2003/10/28<br><br><a href="news.php?storyID=13&amp;scroll=12">MAX PAYNE 2の MOD TOOLのリリース情報</a><br>2003/10/28<br><br><a href="news.php?storyID=16&amp;scroll=13"> グランド・セフト・オート：ダブルパック を全米の店頭へ出荷</a><br>2003/10/21<br><br><a href="news.php?storyID=21&amp;scroll=14">MANHUNT オフィシャルサイト再新</a><br>2003/10/5<br><br>					  </td>
                    </tr>

                  </table>
	</div>
</div>


<div id="divUpControlGames" align="center"> <a href="javascript:;" onmouseover="PerformGamesScroll(-7)" onmouseout="CeaseScroll()"><img src="images/games-arrow-up2.gif" width="312" height="8" border="0"></a></div>
<div id="divDownControlGames" align="center"> <a href="javascript:;" onmouseover="PerformGamesScroll(7)" onmouseout="CeaseScroll()"><img src="images/games-arrow-down2.gif" width="312" height="8" border="0"></a></div>
<div id="divContainerGames"> 
	<div id="divContentGames">
	
                  <table width="100%" border="0" cellspacing="0" cellpadding="10">
                    <tr> 
                      <td>グランド・セフト・オート・バイスシティ PlayStation 2とPC発売中！！</td>
                    </tr>
                  </table>
	
	</div>
</div>