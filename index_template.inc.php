<?php
/*------------------------------------------------------------

Template    : Slims Cendana Template
Create Date : March 2, 2013
Author      : Eddy Subratha (eddy.subratha{at}gmail.com)


This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA

-------------------------------------------------------------*/
// be sure that this file not accessed directly

if (!defined('INDEX_AUTH')) {
  die("can not access this file directly");
} elseif (INDEX_AUTH != 1) {
  die("can not access this file directly");
}
//set default index page
$p = 'home';

if (isset($_GET['p']))
{
 if ($_GET['p'] == 'libinfo') {
  $p = 'libinfo';
} elseif ($_GET['p'] == 'help') {
  $p = 'help';
} elseif ($_GET['p'] == 'member') {
  $p = 'member';
} elseif ($_GET['p'] == 'login') {
  $p = 'login';
} else {
  $p = strtolower(trim($_GET['p']));
}
}

/*----------------------------------------------------
  menu list
  you may modified as you need
  ----------------------------------------------------*/
  $menus = array (
    'home'   => array('url'  => 'index.php',
      'text' => __('Home &nbsp &nbsp')
      ),
    'libinfo'  => array('url'  => 'index.php?p=libinfo',
      'text' => __('Library Information')
      ),
    'koleksi'  => array('url'  => 'index.php?p=member',
      'text' => __('Area Anggota')
      ),
    'agenda'  => array('url'  => 'index.php?p=librarian',
      'text' => __('Librarian')
      ),
    'register'  => array('url'  => 'index.php?p=help',
      'text' => __('Help on Search')
      ),
    'member'  => array('url'  => 'index.php?p=login',
      'text' => __('Login')
      )
    );

/*----------------------------------------------------
  social button
  you may modified as you need.
  ----------------------------------------------------*/
  $social = array (
    'facebook'  => array('url'  => 'http://www.facebook.com/groups/senayan.slims/',
      'text' => 'Facebook'
      ),
    'twitter'  => array('url'  => 'http://twitter.com/#!/slims_official',
      'text' => 'Twitter'
      ),
    'youtube'  => array('url'  => 'http://www.youtube.com/user/senayanslims',
      'text' => 'Youtube'
      ),
    'gihub'  => array('url'  => 'https://github.com/slims/',
      'text' => 'Github'
      ),
    'forum'  => array('url'  => 'http://slims.web.id/forum/',
      'text' => 'Forum'
      )
    );
?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $page_title; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="SLiMS (Senayan Library Management System) is an open source Library Management System. It is build on Open source technology like PHP and MySQL">
<meta name="keywords" content="senayan,slims,library automation,free library application, library, perpustakaan, aplikasi perpustakaan">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="robots" content="index, nofollow">
<!-- load style -->
<link rel="shortcut icon" href="webicon.ico" type="image/x-icon" />
<link href="<?php echo $sysconf['template']['dir']; ?>/core.style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $sysconf['template']['dir']; ?>/piknik/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo JWB; ?>colorbox/colorbox.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $sysconf['template']['css']; ?>" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" media="all" href="<?php echo SWB; ?>template/default/css/tango/skin.css"/>
<?php echo $metadata; ?>
<script type="text/javascript" src="<?php echo JWB; ?>jquery.js"></script>
<script type="text/javascript" src="<?php echo JWB; ?>form.js"></script>
<script type="text/javascript" src="<?php echo JWB; ?>gui.js"></script>
<script type="text/javascript" src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo JWB; ?>colorbox/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="<?php echo SWB; ?>template/default/js/jquery.jcarousel.min.js"></script>
<!-- add doe-->
<script>
+function(f,g,b,j,d,i,k){/*! Jssor */
new(function(){});var e=f.$JssorEasing$={rc:function(a){return-b.cos(a*b.PI)/2+.5},cd:function(a){return a},yf:function(a){return a*a},Uc:function(a){return-a*(a-2)},zf:function(a){return(a*=2)<1?1/2*a*a:-1/2*(--a*(a-2)-1)},Af:function(a){return a*a*a},Bf:function(a){return(a-=1)*a*a+1},Cf:function(a){return(a*=2)<1?1/2*a*a*a:1/2*((a-=2)*a*a+2)},Df:function(a){return a*a*a*a},Ef:function(a){return-((a-=1)*a*a*a-1)},Ff:function(a){return(a*=2)<1?1/2*a*a*a*a:-1/2*((a-=2)*a*a*a-2)},Gf:function(a){return a*a*a*a*a},Hf:function(a){return(a-=1)*a*a*a*a+1},If:function(a){return(a*=2)<1?1/2*a*a*a*a*a:1/2*((a-=2)*a*a*a*a+2)},Jf:function(a){return 1-b.cos(a*b.PI/2)},Kf:function(a){return b.sin(a*b.PI/2)},Lf:function(a){return-1/2*(b.cos(b.PI*a)-1)},Mf:function(a){return a==0?0:b.pow(2,10*(a-1))},Nf:function(a){return a==1?1:-b.pow(2,-10*a)+1},bg:function(a){return a==0||a==1?a:(a*=2)<1?1/2*b.pow(2,10*(a-1)):1/2*(-b.pow(2,-10*--a)+2)},ag:function(a){return-(b.sqrt(1-a*a)-1)},Zf:function(a){return b.sqrt(1-(a-=1)*a)},Yf:function(a){return(a*=2)<1?-1/2*(b.sqrt(1-a*a)-1):1/2*(b.sqrt(1-(a-=2)*a)+1)},Xf:function(a){if(!a||a==1)return a;var c=.3,d=.075;return-(b.pow(2,10*(a-=1))*b.sin((a-d)*2*b.PI/c))},Wf:function(a){if(!a||a==1)return a;var c=.3,d=.075;return b.pow(2,-10*a)*b.sin((a-d)*2*b.PI/c)+1},cg:function(a){if(!a||a==1)return a;var c=.45,d=.1125;return(a*=2)<1?-.5*b.pow(2,10*(a-=1))*b.sin((a-d)*2*b.PI/c):b.pow(2,-10*(a-=1))*b.sin((a-d)*2*b.PI/c)*.5+1},Vf:function(a){var b=1.70158;return a*a*((b+1)*a-b)},Tf:function(a){var b=1.70158;return(a-=1)*a*((b+1)*a+b)+1},Sf:function(a){var b=1.70158;return(a*=2)<1?1/2*a*a*(((b*=1.525)+1)*a-b):1/2*((a-=2)*a*(((b*=1.525)+1)*a+b)+2)},gd:function(a){return 1-e.Qc(1-a)},Qc:function(a){return a<1/2.75?7.5625*a*a:a<2/2.75?7.5625*(a-=1.5/2.75)*a+.75:a<2.5/2.75?7.5625*(a-=2.25/2.75)*a+.9375:7.5625*(a-=2.625/2.75)*a+.984375},Rf:function(a){return a<1/2?e.gd(a*2)*.5:e.Qc(a*2-1)*.5+.5},Qf:function(){return 1-b.abs(1)},Pf:function(a){return 1-b.cos(a*b.PI*2)},Of:function(a){return b.sin(a*b.PI*2)},wf:function(a){return 1-((a*=2)<1?(a=1-a)*a*a:(a-=1)*a*a)},vf:function(a){return(a*=2)<1?a*a*a:(a=2-a)*a*a}},c=f.$Jease$={uf:e.rc,m:e.cd,cf:e.yf,Oe:e.Uc,Pe:e.zf,l:e.Af,Pc:e.Bf,Qe:e.Cf,Re:e.Df,Se:e.Ef,Te:e.Ff,Ue:e.Gf,Ve:e.Hf,We:e.If,Xe:e.Jf,Ye:e.Kf,Ze:e.Lf,af:e.Mf,bf:e.Nf,df:e.bg,tf:e.ag,ef:e.Zf,ff:e.Yf,gf:e.Xf,hf:e.Wf,jf:e.cg,kf:e.Vf,lf:e.Tf,mf:e.Sf,nf:e.gd,of:e.Qc,pf:e.Rf,qf:e.Qf,rf:e.Pf,sf:e.Of,eg:e.wf,dg:e.vf};f.$JssorDirection$={};var a=f.$Jssor$=new function(){var c=this,Ab=/\S+/g,S=1,tb=2,Z=3,wb=4,db=5,I,s=0,l=0,q=0,J=0,C=0,B=navigator,ib=B.appName,n=B.userAgent;function Jb(){if(!I){I={Og:"ontouchstart"in f||"createTouch"in g};var a;if(B.pointerEnabled||(a=B.msPointerEnabled))I.Pd=a?"msTouchAction":"touchAction"}return I}function t(i){if(!s){s=-1;if(ib=="Microsoft Internet Explorer"&&!!f.attachEvent&&!!f.ActiveXObject){var e=n.indexOf("MSIE");s=S;q=o(n.substring(e+5,n.indexOf(";",e)));/*@cc_on J=@_jscript_version@*/;l=g.documentMode||q}else if(ib=="Netscape"&&!!f.addEventListener){var d=n.indexOf("Firefox"),b=n.indexOf("Safari"),h=n.indexOf("Chrome"),c=n.indexOf("AppleWebKit");if(d>=0){s=tb;l=o(n.substring(d+8))}else if(b>=0){var j=n.substring(0,b).lastIndexOf("/");s=h>=0?wb:Z;l=o(n.substring(j+1,b))}else{var a=/Trident\/.*rv:([0-9]{1,}[\.0-9]{0,})/i.exec(n);if(a){s=S;l=q=o(a[1])}}if(c>=0)C=o(n.substring(c+12))}else{var a=/(opera)(?:.*version|)[ \/]([\w.]+)/i.exec(n);if(a){s=db;l=o(a[2])}}}return i==s}function p(){return t(S)}function N(){return p()&&(l<6||g.compatMode=="BackCompat")}function vb(){return t(Z)}function cb(){return t(db)}function ob(){return vb()&&C>534&&C<535}function L(){return p()&&l<9}function qb(a){var b;return function(d){if(!b){b=a;var c=a.substr(0,1).toUpperCase()+a.substr(1);m([a].concat(["WebKit","ms","Moz","O"]),function(g,f){var e=a;if(f)e=c+g;if(d.style[e]!=k)return b=e})}return b}}var pb=qb("transform");function hb(a){return{}.toString.call(a)}var H;function Gb(){if(!H){H={};m(["Boolean","Number","String","Function","Array","Date","RegExp","Object"],function(a){H["[object "+a+"]"]=a.toLowerCase()})}return H}function m(a,c){if(hb(a)=="[object Array]"){for(var b=0;b<a.length;b++)if(c(a[b],b,a))return d}else for(var e in a)if(c(a[e],e,a))return d}function z(a){return a==j?String(a):Gb()[hb(a)]||"object"}function fb(a){for(var b in a)return d}function x(a){try{return z(a)=="object"&&!a.nodeType&&a!=a.window&&(!a.constructor||{}.hasOwnProperty.call(a.constructor.prototype,"isPrototypeOf"))}catch(b){}}function w(a,b){return{x:a,y:b}}function lb(b,a){setTimeout(b,a||0)}function F(b,d,c){var a=!b||b=="inherit"?"":b;m(d,function(c){var b=c.exec(a);if(b){var d=a.substr(0,b.index),e=a.substr(b.lastIndex+1,a.length-(b.lastIndex+1));a=d+e}});a=c+(a.indexOf(" ")!=0?" ":"")+a;return a}function sb(b,a){if(l<9)b.style.filter=a}function Cb(g,a,i){if(!J||J<9){var e=a.ub,f=a.xb,j=(a.B||0)%360,h="";if(j||e!=k||f!=k){if(e==k)e=1;if(f==k)f=1;var d=c.Vg(j/180*b.PI,e||1,f||1),i=c.Tg(d,a.nb,a.mb);c.Ug(g,i.y);c.Rg(g,i.x);h="progid:DXImageTransform.Microsoft.Matrix(M11="+d[0][0]+", M12="+d[0][1]+", M21="+d[1][0]+", M22="+d[1][1]+", SizingMethod='auto expand')"}var m=g.style.filter,n=new RegExp(/[\s]*progid:DXImageTransform\.Microsoft\.Matrix\([^\)]*\)/g),l=F(m,[n],h);sb(g,l)}}c.Qg=Jb;c.Bd=p;c.Jg=vb;c.Bc=cb;c.jb=L;c.Kd=function(){return l};c.hg=function(){t();return C};c.D=lb;function V(a){a.constructor===V.caller&&a.Ed&&a.Ed.apply(a,V.caller.arguments)}c.Ed=V;c.sb=function(a){if(c.Ld(a))a=g.getElementById(a);return a};function r(a){return a||f.event}c.Dd=r;c.xc=function(a){a=r(a);return a.target||a.srcElement||g};c.zd=function(a){a=r(a);return{x:a.pageX||a.clientX||0,y:a.pageY||a.clientY||0}};function A(c,d,a){if(a!==k)c.style[d]=a==k?"":a;else{var b=c.currentStyle||c.style;a=b[d];if(a==""&&f.getComputedStyle){b=c.ownerDocument.defaultView.getComputedStyle(c,j);b&&(a=b.getPropertyValue(d)||b[d])}return a}}function X(b,c,a,d){if(a!=k){d&&(a+="px");A(b,c,a)}else return o(A(b,c))}function h(c,a){var d=a?X:A,b;if(a&4)b=qb(c);return function(e,f){return d(e,b?b(e):c,f,a&2)}}function Db(b){if(p()&&q<9){var a=/opacity=([^)]*)/.exec(b.style.filter||"");return a?o(a[1])/100:1}else return o(b.style.opacity||"1")}function Fb(c,a,f){if(p()&&q<9){var h=c.style.filter||"",i=new RegExp(/[\s]*alpha\([^\)]*\)/g),e=b.round(100*a),d="";if(e<100||f)d="alpha(opacity="+e+") ";var g=F(h,[i],d);sb(c,g)}else c.style.opacity=a==1?"":b.round(a*100)/100}var yb={B:["rotate"],Hb:["rotateX"],Fb:["rotateY"],ub:["scaleX",2],xb:["scaleY",2],Wb:["translateX",1],Xb:["translateY",1],Qb:["translateZ",1],Zb:["skewX"],ac:["skewY"]};function nb(e,c){if(p()&&l&&l<10){delete c.Hb;delete c.Fb}var d=pb(e);if(d){var b="";a.g(c,function(e,c){var a=yb[c];if(a){var d=a[1]||0;b+=(b?" ":"")+a[0]+"("+e+(["deg","px",""])[d]+")"}});e.style[d]=b}}c.lg=function(b,a){if(ob())lb(c.P(j,nb,b,a));else(L()?Cb:nb)(b,a)};c.Qd=h("transformOrigin",4);c.mg=h("backfaceVisibility",4);c.ng=h("transformStyle",4);c.og=h("perspective",6);c.pg=h("perspectiveOrigin",4);c.sg=function(a,c){if(p()&&q<9||q<10&&N())a.style.zoom=c==1?"":c;else{var b=pb(a);if(b){var f="scale("+c+")",e=a.style[b],g=new RegExp(/[\s]*scale\(.*?\)/g),d=F(e,[g],f);a.style[b]=d}}};var bb=0,ub=0;c.tg=function(b,a){return L()?function(){var g=d,c=N()?b.document.body:b.document.documentElement;if(c){var f=c.offsetWidth-bb,e=c.offsetHeight-ub;if(f||e){bb+=f;ub+=e}else g=i}g&&a()}:a};c.pc=function(b,a){return function(d){d=r(d);var f=d.type,e=d.relatedTarget||(f=="mouseout"?d.toElement:d.fromElement);(!e||e!==a&&!c.ug(a,e))&&b(d)}};c.i=function(a,e,b,d){a=c.sb(a);if(a.addEventListener){e=="mousewheel"&&a.addEventListener("DOMMouseScroll",b,d);a.addEventListener(e,b,d)}else if(a.attachEvent){a.attachEvent("on"+e,b);d&&a.setCapture&&a.setCapture()}};c.V=function(a,d,e,b){a=c.sb(a);if(a.removeEventListener){d=="mousewheel"&&a.removeEventListener("DOMMouseScroll",e,b);a.removeEventListener(d,e,b)}else if(a.detachEvent){a.detachEvent("on"+d,e);b&&a.releaseCapture&&a.releaseCapture()}};c.jc=function(a){a=r(a);a.preventDefault&&a.preventDefault();a.cancel=d;a.returnValue=i};c.wg=function(a){a=r(a);a.stopPropagation&&a.stopPropagation();a.cancelBubble=d};c.P=function(d,c){var a=[].slice.call(arguments,2),b=function(){var b=a.concat([].slice.call(arguments,0));return c.apply(d,b)};return b};c.xg=function(a,b){if(b==k)return a.textContent||a.innerText;var d=g.createTextNode(b);c.vc(a);a.appendChild(d)};c.Z=function(d,c){for(var b=[],a=d.firstChild;a;a=a.nextSibling)(c||a.nodeType==1)&&b.push(a);return b};function gb(a,c,e,b){b=b||"u";for(a=a?a.firstChild:j;a;a=a.nextSibling)if(a.nodeType==1){if(R(a,b)==c)return a;if(!e){var d=gb(a,c,e,b);if(d)return d}}}c.I=gb;function P(a,d,f,b){b=b||"u";var c=[];for(a=a?a.firstChild:j;a;a=a.nextSibling)if(a.nodeType==1){R(a,b)==d&&c.push(a);if(!f){var e=P(a,d,f,b);if(e.length)c=c.concat(e)}}return c}function ab(a,c,d){for(a=a?a.firstChild:j;a;a=a.nextSibling)if(a.nodeType==1){if(a.tagName==c)return a;if(!d){var b=ab(a,c,d);if(b)return b}}}c.Me=ab;function rb(a,c,e){var b=[];for(a=a?a.firstChild:j;a;a=a.nextSibling)if(a.nodeType==1){(!c||a.tagName==c)&&b.push(a);if(!e){var d=rb(a,c,e);if(d.length)b=b.concat(d)}}return b}c.zg=rb;c.yg=function(b,a){return b.getElementsByTagName(a)};function y(){var e=arguments,d,c,b,a,g=1&e[0],f=1+g;d=e[f-1]||{};for(;f<e.length;f++)if(c=e[f])for(b in c){a=c[b];if(a!==k){a=c[b];var h=d[b];d[b]=g&&(x(h)||x(a))?y(g,{},h,a):a}}return d}c.t=y;function W(f,g){var d={},c,a,b;for(c in f){a=f[c];b=g[c];if(a!==b){var e;if(x(a)&&x(b)){a=W(a,b);e=!fb(a)}!e&&(d[c]=a)}}return d}c.bd=function(a){return z(a)=="function"};c.uc=function(a){return z(a)=="array"};c.Ld=function(a){return z(a)=="string"};c.hc=function(a){return!isNaN(o(a))&&isFinite(a)};c.g=m;c.rg=x;function O(a){return g.createElement(a)}c.vb=function(){return O("DIV")};c.qg=function(){return O("SPAN")};c.qd=function(){};function T(b,c,a){if(a==k)return b.getAttribute(c);b.setAttribute(c,a)}function R(a,b){return T(a,b)||T(a,"data-"+b)}c.J=T;c.n=R;function u(b,a){if(a==k)return b.className;b.className=a}c.od=u;function kb(b){var a={};m(b,function(b){a[b]=b});return a}function mb(b,a){return b.match(a||Ab)}function M(b,a){return kb(mb(b||"",a))}c.kg=mb;function Y(b,c){var a="";m(c,function(c){a&&(a+=b);a+=c});return a}function E(a,c,b){u(a,Y(" ",y(W(M(u(a)),M(c)),M(b))))}c.kd=function(a){return a.parentNode};c.W=function(a){c.Ab(a,"none")};c.K=function(a,b){c.Ab(a,b?"none":"")};c.ig=function(b,a){b.removeAttribute(a)};c.Cg=function(){return p()&&l<10};c.Dg=function(d,c){if(c)d.style.clip="rect("+b.round(c.f)+"px "+b.round(c.u)+"px "+b.round(c.v)+"px "+b.round(c.e)+"px)";else{var g=d.style.cssText,f=[new RegExp(/[\s]*clip: rect\(.*?\)[;]?/i),new RegExp(/[\s]*cliptop: .*?[;]?/i),new RegExp(/[\s]*clipright: .*?[;]?/i),new RegExp(/[\s]*clipbottom: .*?[;]?/i),new RegExp(/[\s]*clipleft: .*?[;]?/i)],e=F(g,f,"");a.Rb(d,e)}};c.kb=function(){return+new Date};c.N=function(b,a){b.appendChild(a)};c.Vb=function(b,a,c){(c||a.parentNode).insertBefore(b,a)};c.Nb=function(a,b){(b||a.parentNode).removeChild(a)};c.Ne=function(a,b){m(a,function(a){c.Nb(a,b)})};c.vc=function(a){c.Ne(c.Z(a,d),a)};c.Uf=function(a,b){var d=c.kd(a);b&1&&c.Q(a,(c.q(d)-c.q(a))/2);b&2&&c.O(a,(c.r(d)-c.r(a))/2)};c.Yb=function(b,a){return parseInt(b,a||10)};var o=parseFloat;c.Ac=o;c.ug=function(b,a){var c=g.body;while(a&&b!==a&&c!==a)try{a=a.parentNode}catch(d){return i}return b===a};function U(e,d,b){var a=e.cloneNode(!d);!b&&c.ig(a,"id");return a}c.eb=U;c.Ib=function(f,g){var a=new Image;function b(f,d){c.V(a,"load",b);c.V(a,"abort",e);c.V(a,"error",e);g&&g(a,d)}function e(a){b(a,d)}if(cb()&&l<11.6||!f)b(!f);else{c.i(a,"load",b);c.i(a,"abort",e);c.i(a,"error",e);a.src=f}};c.ne=function(e,a,f){var d=e.length+1;function b(b){d--;if(a&&b&&b.src==a.src)a=b;!d&&f&&f(a)}m(e,function(a){c.Ib(a.src,b)});b()};c.nd=function(b,g,i,h){if(h)b=U(b);var c=P(b,g);if(!c.length)c=a.yg(b,g);for(var f=c.length-1;f>-1;f--){var d=c[f],e=U(i);u(e,u(d));a.Rb(e,d.style.cssText);a.Vb(e,d);a.Nb(d)}return b};function Hb(b){var l=this,p="",r=["av","pv","ds","dn"],f=[],q,j=0,h=0,e=0;function i(){E(b,q,f[e||j||h&2||h]);a.bb(b,"pointer-events",e?"none":"")}function d(){j=0;i();c.V(g,"mouseup",d);c.V(g,"touchend",d);c.V(g,"touchcancel",d)}function o(a){if(e)c.jc(a);else{j=4;i();c.i(g,"mouseup",d);c.i(g,"touchend",d);c.i(g,"touchcancel",d)}}l.dd=function(a){if(a===k)return h;h=a&2||a&1;i()};l.ed=function(a){if(a===k)return!e;e=a?0:3;i()};l.R=b=c.sb(b);var n=a.kg(u(b));if(n)p=n.shift();m(r,function(a){f.push(p+a)});q=Y(" ",f);f.unshift("");c.i(b,"mousedown",o);c.i(b,"touchstart",o)}c.dc=function(a){return new Hb(a)};c.bb=A;c.wb=h("overflow");c.O=h("top",2);c.Q=h("left",2);c.q=h("width",2);c.r=h("height",2);c.Rg=h("marginLeft",2);c.Ug=h("marginTop",2);c.H=h("position");c.Ab=h("display");c.M=h("zIndex",1);c.Lb=function(b,a,c){if(a!=k)Fb(b,a,c);else return Db(b)};c.Rb=function(a,b){if(b!=k)a.style.cssText=b;else return a.style.cssText};var Q={a:c.Lb,f:c.O,e:c.Q,S:c.q,T:c.r,Bb:c.H,U:c.M},K;function G(){if(!K)K=y({c:c.Dg,F:c.lg},Q);return K}function eb(){var a={};a.F=a.F;a.F=a.B;a.F=a.Hb;a.F=a.Fb;a.F=a.Zb;a.F=a.ac;a.F=a.Wb;a.F=a.Xb;a.F=a.Qb;return G()}c.Ge=G;c.Od=eb;c.oe=function(c,b){G();var a={};m(b,function(d,b){if(Q[b])a[b]=Q[b](c)});return a};c.gb=function(c,b){var a=G();m(b,function(d,b){a[b]&&a[b](c,d)})};c.ve=function(b,a){eb();c.gb(b,a)};var D=new function(){var a=this;function b(d,g){for(var j=d[0].length,i=d.length,h=g[0].length,f=[],c=0;c<i;c++)for(var k=f[c]=[],b=0;b<h;b++){for(var e=0,a=0;a<j;a++)e+=d[c][a]*g[a][b];k[b]=e}return f}a.ub=function(b,c){return a.yd(b,c,0)};a.xb=function(b,c){return a.yd(b,0,c)};a.yd=function(a,c,d){return b(a,[[c,0],[0,d]])};a.Pb=function(d,c){var a=b(d,[[c.x],[c.y]]);return w(a[0][0],a[1][0])}};c.Vg=function(d,a,c){var e=b.cos(d),f=b.sin(d);return[[e*a,-f*c],[f*a,e*c]]};c.Tg=function(d,c,a){var e=D.Pb(d,w(-c/2,-a/2)),f=D.Pb(d,w(c/2,-a/2)),g=D.Pb(d,w(c/2,a/2)),h=D.Pb(d,w(-c/2,a/2));return w(b.min(e.x,f.x,g.x,h.x)+c/2,b.min(e.y,f.y,g.y,h.y)+a/2)};var zb={o:1,ub:1,xb:1,B:0,Hb:0,Fb:0,Wb:0,Xb:0,Qb:0,Zb:0,ac:0};c.yc=function(b){var c=b||{};if(b)if(a.bd(b))c={tb:c};else if(a.bd(b.c))c.c={tb:b.c};return c};function jb(d,a){var b={};m(d,function(d,e){var f=d;if(a[e]!=k)if(c.hc(d))f=d+a[e];else f=jb(d,a[e]);b[e]=f});return b}c.Je=jb;c.Jd=function(h,i,w,n,y,z,o){var c=i;if(h){c={};for(var g in i){var A=z[g]||1,v=y[g]||[0,1],d=(w-v[0])/v[1];d=b.min(b.max(d,0),1);d=d*A;var u=b.floor(d);if(d!=u)d-=u;var l=n.tb||e.rc,m,B=h[g],q=i[g];if(a.hc(q)){l=n[g]||l;var x=l(d);m=B+q*x}else{m=a.t({Kb:{}},h[g]);a.g(q.Kb||q,function(e,a){if(n.c)l=n.c[a]||n.c.tb||l;var c=l(d),b=e*c;m.Kb[a]=b;m[a]+=b})}c[g]=m}var t,f={nb:o.nb,mb:o.mb};a.g(zb,function(d,a){t=t||i[a];var b=c[a];if(b!=k){if(b!=d)f[a]=b;delete c[a]}else if(h[a]!=k&&h[a]!=d)f[a]=h[a]});if(i.o&&f.o){f.ub=f.o;f.xb=f.o}c.F=f}if(i.c&&o.lb){var p=c.c.Kb,s=(p.f||0)+(p.v||0),r=(p.e||0)+(p.u||0);c.e=(c.e||0)+r;c.f=(c.f||0)+s;c.c.e-=r;c.c.u-=r;c.c.f-=s;c.c.v-=s}if(c.c&&a.Cg()&&!c.c.f&&!c.c.e&&c.c.u==o.nb&&c.c.v==o.mb)c.c=j;return c}};function m(){var b=this,d=[];function i(a,b){d.push({tc:a,sc:b})}function h(b,c){a.g(d,function(a,e){a.tc==b&&a.sc===c&&d.splice(e,1)})}b.Ob=b.addEventListener=i;b.removeEventListener=h;b.s=function(b){var c=[].slice.call(arguments,1);a.g(d,function(a){a.tc==b&&a.sc.apply(f,c)})}}var l=f.$JssorAnimator$=function(y,C,k,O,L,K){y=y||0;var c=this,q,n,o,u,z=0,G,H,F,B,x=0,h=0,m=0,D,l,g,e,p,w=[],A;function N(a){g+=a;e+=a;l+=a;h+=a;m+=a;x+=a}function t(n){var f=n;if(p&&(f>=e||f<=g))f=((f-g)%p+p)%p+g;if(!D||u||h!=f){var i=b.min(f,e);i=b.max(i,g);if(!D||u||i!=m){if(K){var j=(i-l)/(C||1);if(k.Lc)j=1-j;var o=a.Jd(L,K,j,G,F,H,k);a.g(o,function(b,a){A[a]&&A[a](O,b)})}c.Dc(m-l,i-l);m=i;a.g(w,function(b,c){var a=n<h?w[w.length-c-1]:b;a.G(m-x)});var r=h,q=m;h=f;D=d;c.Tb(r,q)}}}function E(a,c,d){c&&a.X(e);if(!d){g=b.min(g,a.Gc()+x);e=b.max(e,a.hb()+x)}w.push(a)}var r=f.requestAnimationFrame||f.webkitRequestAnimationFrame||f.mozRequestAnimationFrame||f.msRequestAnimationFrame;if(a.Jg()&&a.Kd()<7)r=j;r=r||function(b){a.D(b,k.pb)};function I(){if(q){var d=a.kb(),e=b.min(d-z,k.wd),c=h+e*o;z=d;if(c*o>=n*o)c=n;t(c);if(!u&&c*o>=n*o)J(B);else r(I)}}function s(f,i,j){if(!q){q=d;u=j;B=i;f=b.max(f,g);f=b.min(f,e);n=f;o=n<h?-1:1;c.Cd();z=a.kb();r(I)}}function J(a){if(q){u=q=B=i;c.Md();a&&a()}}c.Sd=function(a,b,c){s(a?h+a:e,b,c)};c.Rd=s;c.rb=J;c.pe=function(a){s(a)};c.db=function(){return h};c.Wc=function(){return n};c.Jb=function(){return m};c.G=t;c.lb=function(a){t(h+a)};c.Vc=function(){return q};c.ze=function(a){p=a};c.X=N;c.L=function(a,b){E(a,0,b)};c.Ic=function(a){E(a,1)};c.Be=function(a){e+=a};c.Gc=function(){return g};c.hb=function(){return e};c.Tb=c.Cd=c.Md=c.Dc=a.qd;c.Hc=a.kb();k=a.t({pb:16,wd:50},k);p=k.Yc;A=a.t({},a.Ge(),k.Ec);g=l=y;e=y+C;H=k.ec||{};F=k.z||{};G=a.yc(k.j)};var o=f.$JssorSlideshowFormations$=new function(){var h=this;function g(b,a,c){c.push(a);b[a]=b[a]||[];b[a].push(c)}h.je=function(d){for(var e=[],a,c=0;c<d.C;c++)for(a=0;a<d.p;a++)g(e,b.ceil(1e5*b.random())%13,[c,a]);return e}},r=f.$JssorSlideshowRunner$=function(n,s,q,t,y){var f=this,u,g,c,x=0,w=t.Xd,r,h=8;function k(g,f){var c={pb:f,k:1,D:0,p:1,C:1,a:0,o:0,c:0,lb:i,A:i,Lc:i,ie:o.je,E:{ab:0,ob:0},j:e.rc,ec:{},mc:[],z:{}};a.t(c,g);c.j=a.yc(c.j);c.ke=b.ceil(c.k/c.pb);c.Wd=function(b,a){b/=c.p;a/=c.C;var f=b+"x"+a;if(!c.mc[f]){c.mc[f]={S:b,T:a};for(var d=0;d<c.p;d++)for(var e=0;e<c.C;e++)c.mc[f][e+","+d]={f:e*a,u:d*b+b,v:e*a+a,e:d*b}}return c.mc[f]};if(c.Mc){c.Mc=k(c.Mc,f);c.A=d}return c}function p(A,h,c,v,n,l){var y=this,t,u={},j={},m=[],f,e,r,p=c.E.ab||0,q=c.E.ob||0,g=c.Wd(n,l),o=B(c),C=o.length-1,s=c.k+c.D*C,w=v+s,k=c.A,x;w+=50;function B(a){var b=a.ie(a);return a.Lc?b.reverse():b}y.ld=w;y.gc=function(d){d-=v;var e=d<s;if(e||x){x=e;if(!k)d=s-d;var f=b.ceil(d/c.pb);a.g(j,function(c,e){var d=b.max(f,c.Ae);d=b.min(d,c.length-1);if(c.xd!=d){if(!c.xd&&!k)a.K(m[e]);else d==c.ue&&k&&a.W(m[e]);c.xd=d;a.ve(m[e],c[d])}})}};h=a.eb(h);if(a.jb()){var D=!h["no-image"],z=a.zg(h);a.g(z,function(b){(D||b["jssor-slider"])&&a.Lb(b,a.Lb(b),d)})}a.g(o,function(h,m){a.g(h,function(G){var K=G[0],J=G[1],v=K+","+J,o=i,s=i,x=i;if(p&&J%2){if(p&3)o=!o;if(p&12)s=!s;if(p&16)x=!x}if(q&&K%2){if(q&3)o=!o;if(q&12)s=!s;if(q&16)x=!x}c.f=c.f||c.c&4;c.v=c.v||c.c&8;c.e=c.e||c.c&1;c.u=c.u||c.c&2;var E=s?c.v:c.f,B=s?c.f:c.v,D=o?c.u:c.e,C=o?c.e:c.u;c.c=E||B||D||C;r={};e={f:0,e:0,a:1,S:n,T:l};f=a.t({},e);t=a.t({},g[v]);if(c.a)e.a=2-c.a;if(c.U){e.U=c.U;f.U=0}var I=c.p*c.C>1||c.c;if(c.o||c.B){var H=d;if(a.jb())if(c.p*c.C>1)H=i;else I=i;if(H){e.o=c.o?c.o-1:1;f.o=1;if(a.jb()||a.Bc())e.o=b.min(e.o,2);var N=c.B||0;e.B=N*360*(x?-1:1);f.B=0}}if(I){var h=t.Kb={};if(c.c){var w=c.Le||1;if(E&&B){h.f=g.T/2*w;h.v=-h.f}else if(E)h.v=-g.T*w;else if(B)h.f=g.T*w;if(D&&C){h.e=g.S/2*w;h.u=-h.e}else if(D)h.u=-g.S*w;else if(C)h.e=g.S*w}r.c=t;f.c=g[v]}var L=o?1:-1,M=s?1:-1;if(c.x)e.e+=n*c.x*L;if(c.y)e.f+=l*c.y*M;a.g(e,function(b,c){if(a.hc(b))if(b!=f[c])r[c]=b-f[c]});u[v]=k?f:e;var F=c.ke,A=b.round(m*c.D/c.pb);j[v]=new Array(A);j[v].Ae=A;j[v].ue=A+F-1;for(var z=0;z<=F;z++){var y=a.Jd(f,r,z/F,c.j,c.z,c.ec,{lb:c.lb,nb:n,mb:l});y.U=y.U||1;j[v].push(y)}})});o.reverse();a.g(o,function(b){a.g(b,function(c){var f=c[0],e=c[1],d=f+","+e,b=h;if(e||f)b=a.eb(h);a.gb(b,u[d]);a.wb(b,"hidden");a.H(b,"absolute");A.He(b);m[d]=b;a.K(b,!k)})})}function v(){var a=this,b=0;l.call(a,0,u);a.Tb=function(d,a){if(a-b>h){b=a;c&&c.gc(a);g&&g.gc(a)}};a.ib=r}f.we=function(){var a=0,c=t.fb,d=c.length;if(w)a=x++%d;else a=b.floor(b.random()*d);c[a]&&(c[a].qb=a);return c[a]};f.le=function(w,x,j,l,a){r=a;a=k(a,h);var i=l.Xc,e=j.Xc;i["no-image"]=!l.fc;e["no-image"]=!j.fc;var m=i,o=e,v=a,d=a.Mc||k({},h);if(!a.A){m=e;o=i}var t=d.X||0;g=new p(n,o,d,b.max(t-d.pb,0),s,q);c=new p(n,m,v,b.max(d.pb-t,0),s,q);g.gc(0);c.gc(0);u=b.max(g.ld,c.ld);f.qb=w};f.Db=function(){n.Db();g=j;c=j};f.ge=function(){var a=j;if(c)a=new v;return a};if(a.jb()||a.Bc()||y&&a.hg()<537)h=16;m.call(f);l.call(f,-1e7,1e7)},h=f.$JssorSlider$=function(p,cc){var c=this;function yc(){var a=this;l.call(a,-1e8,2e8);a.de=function(){var c=a.Jb(),d=b.floor(c),f=s(d),e=c-b.floor(c);return{qb:f,ce:d,Bb:e}};a.Tb=function(e,a){var f=b.floor(a);if(f!=a&&a>e)f++;Rb(f,d);c.s(h.Ud,s(a),s(e),a,e)}}function xc(){var b=this;l.call(b,0,0,{Yc:r});a.g(D,function(a){A&1&&a.ze(r);b.Ic(a);a.X(kb/Yb)})}function wc(){var a=this,b=Vb.R;l.call(a,-1,2,{j:e.cd,Ec:{Bb:Xb},Yc:r},b,{Bb:1},{Bb:-2});a.cc=b}function jc(n,m){var a=this,e,f,g,k,b;l.call(a,-1e8,2e8,{wd:100});a.Cd=function(){N=d;T=j;c.s(h.fg,s(w.db()),w.db())};a.Md=function(){N=i;k=i;var a=w.de();c.s(h.ee,s(w.db()),w.db());!a.Bb&&Ac(a.ce,v)};a.Tb=function(h,d){var a;if(k)a=b;else{a=f;if(g){var c=d/g;a=o.Yd(c)*(f-e)+e}}w.G(a)};a.Sb=function(b,d,c,h){e=b;f=d;g=c;w.G(b);a.G(0);a.Rd(c,h)};a.be=function(c){k=d;b=c;a.Sd(c,j,d)};a.Td=function(a){b=a};w=new yc;w.L(n);w.L(m)}function kc(){var c=this,b=Ub();a.M(b,0);a.bb(b,"pointerEvents","none");c.R=b;c.He=function(c){a.N(b,c);a.K(b)};c.Db=function(){a.W(b);a.vc(b)}}function vc(n,f){var e=this,q,L,u,k,y=[],x,C,U,G,P,F,g,w,p;l.call(e,-t,t+1,{});function E(b){q&&q.zb();S(n,b,0);F=d;q=new I.Y(n,I,a.Ac(a.n(n,"idle"))||ic);q.G(0)}function Z(){q.Hc<I.Hc&&E()}function M(p,r,n){if(!G){G=d;if(k&&n){var g=n.width,b=n.height,m=g,l=b;if(g&&b&&o.Cb){if(o.Cb&3&&(!(o.Cb&4)||g>K||b>J)){var j=i,q=K/J*b/g;if(o.Cb&1)j=q>1;else if(o.Cb&2)j=q<1;m=j?g*J/b:K;l=j?J:b*K/g}a.q(k,m);a.r(k,l);a.O(k,(J-l)/2);a.Q(k,(K-m)/2)}a.H(k,"absolute");c.s(h.he,f)}}a.W(r);p&&p(e)}function Y(b,c,d,g){if(g==T&&v==f&&O)if(!zc){var a=s(b);B.le(a,f,c,e,d);c.ye();V.X(a-V.Gc()-1);V.G(a);z.Sb(b,b,0)}}function bb(b){if(b==T&&v==f){if(!g){var a=j;if(B)if(B.qb==f)a=B.ge();else B.Db();Z();g=new sc(n,f,a,q);g.sd(p)}!g.Vc()&&g.Jc()}}function R(d,c,h){if(d==f){if(d!=c)D[c]&&D[c].me();else!h&&g&&g.Ee();p&&p.ed();var i=T=a.kb();e.Ib(a.P(j,bb,i))}else{var l=b.abs(f-d),k=t+o.De-1;(!P||l<=k)&&e.Ib()}}function cb(){if(v==f&&g){g.rb();p&&p.Ce();p&&p.xe();g.ud()}}function eb(){v==f&&g&&g.rb()}function ab(a){!Q&&c.s(h.te,f,a)}function N(){p=w.pInstance;g&&g.sd(p)}e.Ib=function(e,b){b=b||u;if(y.length&&!G){a.K(b);if(!U){U=d;c.s(h.se,f);a.g(y,function(b){if(!a.J(b,"src")){b.src=a.n(b,"src2");a.Ab(b,b["display-origin"])}})}a.ne(y,k,a.P(j,M,e,b))}else M(e,b)};e.qe=function(){var g=f;if(o.td<0)g-=r;var c=g+o.td*qc;if(A&2)c=s(c);if(!(A&1))c=b.max(0,b.min(c,r-t));if(c!=f){if(B){var d=B.we(r);if(d){var h=T=a.kb(),e=D[s(c)];return e.Ib(a.P(j,Y,c,e,d,h),u)}}db(c)}};e.Sc=function(){R(f,f,d)};e.me=function(){p&&p.Ce();p&&p.xe();e.Fd();g&&g.Zd();g=j;E()};e.ye=function(){a.W(n)};e.Fd=function(){a.K(n)};e.ae=function(){p&&p.ed()};function S(b,c,e){if(a.J(b,"jssor-slider"))return;if(!F){if(b.tagName=="IMG"){y.push(b);if(!a.J(b,"src")){P=d;b["display-origin"]=a.Ab(b);a.W(b)}}a.jb()&&a.M(b,(a.M(b)||0)+1)}var f=a.Z(b);a.g(f,function(f){var h=f.tagName,j=a.n(f,"u");if(j=="player"&&!w){w=f;if(w.pInstance)N();else a.i(w,"dataavailable",N)}if(j=="caption"){if(c){a.Qd(f,a.n(f,"to"));a.mg(f,a.n(f,"bf"));a.ng(f,"preserve-3d")}else if(!a.Bd()){var g=a.eb(f,i,d);a.Vb(g,f,b);a.Nb(f,b);f=g;c=d}}else if(!F&&!e&&!k){if(h=="A"){if(a.n(f,"u")=="image")k=a.Me(f,"IMG");else k=a.I(f,"image",d);if(k){x=f;a.Ab(x,"block");a.gb(x,W);C=a.eb(x,d);a.H(x,"relative");a.Lb(C,0);a.bb(C,"backgroundColor","#000")}}else if(h=="IMG"&&a.n(f,"u")=="image")k=f;if(k){k.border=0;a.gb(k,W)}}S(f,c,e+1)})}e.Dc=function(c,b){var a=t-b;Xb(L,a)};e.qb=f;m.call(e);a.og(n,a.n(n,"p"));a.pg(n,a.n(n,"po"));var H=a.I(n,"thumb",d);if(H){e.fe=a.eb(H);a.W(H)}a.K(n);u=a.eb(hb);a.M(u,1e3);a.i(n,"click",ab);E(d);e.fc=k;e.vd=C;e.Xc=n;e.cc=L=n;a.N(L,u);c.Ob(203,R);c.Ob(28,eb);c.Ob(24,cb)}function sc(y,g,p,q){var b=this,n=0,t=0,j,k,f,e,m,s,r,o=D[g];l.call(b,0,0);function u(){a.vc(M);Zb&&m&&o.vd&&a.N(M,o.vd);a.K(M,!m&&o.fc)}function w(){b.Jc()}function x(a){r=a;b.rb();b.Jc()}b.Jc=function(){var a=b.Jb();if(!C&&!N&&!r&&v==g){if(!a){if(j&&!m){m=d;b.ud(d);c.s(h.Vd,g,n,t,j,e)}u()}var i,p=h.ad;if(a!=e)if(a==f)i=e;else if(a==k)i=f;else if(!a)i=k;else i=b.Wc();c.s(p,g,a,n,k,f,e);var l=O&&(!E||F);if(a==e)(f!=e&&!(E&12)||l)&&o.qe();else(l||a!=f)&&b.Rd(i,w)}};b.Ee=function(){f==e&&f==b.Jb()&&b.G(k)};b.Zd=function(){B&&B.qb==g&&B.Db();var a=b.Jb();a<e&&c.s(h.ad,g,-a-1,n,k,f,e)};b.ud=function(b){p&&a.wb(mb,b&&p.ib.dh?"":"hidden")};b.Dc=function(b,a){if(m&&a>=j){m=i;u();o.Fd();B.Db();c.s(h.re,g,n,t,j,e)}c.s(h.Ke,g,a,n,k,f,e)};b.sd=function(a){if(a&&!s){s=a;a.Ob($JssorPlayer$.Ie,x)}};p&&b.Ic(p);j=b.hb();b.Ic(q);k=j+q.lc;f=j+q.ic;e=b.hb()}function Xb(g,f){var e=x>0?x:gb,c=zb*f*(e&1),d=Ab*f*(e>>1&1);c=b.round(c);d=b.round(d);a.Q(g,c);a.O(g,d)}function Nb(){qb=N;Ib=z.Wc();G=w.db()}function dc(){Nb();if(C||!F&&E&12){z.rb();c.s(h.Fe)}}function bc(e){if(!C&&(F||!(E&12))&&!z.Vc()){var c=w.db(),a=b.ceil(G);if(e&&b.abs(H)>=o.fd){a=b.ceil(c);a+=jb}if(!(A&1))a=b.min(r-t,b.max(a,0));var d=b.abs(a-c);d=1-b.pow(1-d,5);if(!Q&&qb)z.pe(Ib);else if(c==a){tb.ae();tb.Sc()}else z.Sb(c,a,d*Sb)}}function Hb(b){!a.n(a.xc(b),"nodrag")&&a.jc(b)}function oc(a){Wb(a,1)}function Wb(b,e){b=a.Dd(b);var l=a.xc(b);if(!P&&!a.n(l,"nodrag")&&pc()&&(!e||b.touches.length==1)){C=d;yb=i;T=j;a.i(g,e?"touchmove":"mousemove",Bb);a.kb();Q=0;dc();if(!qb)x=0;if(e){var k=b.touches[0];vb=k.clientX;wb=k.clientY}else{var f=a.zd(b);vb=f.x;wb=f.y}H=0;ib=0;jb=0;c.s(h.Eg,s(G),G,b)}}function Bb(e){if(C){e=a.Dd(e);var f;if(e.type!="mousemove"){var l=e.touches[0];f={x:l.clientX,y:l.clientY}}else f=a.zd(e);if(f){var j=f.x-vb,k=f.y-wb;if(b.floor(G)!=G)x=x||gb&P;if((j||k)&&!x){if(P==3)if(b.abs(k)>b.abs(j))x=2;else x=1;else x=P;if(ob&&x==1&&b.abs(k)-b.abs(j)>3)yb=d}if(x){var c=k,i=Ab;if(x==1){c=j;i=zb}if(!(A&1)){if(c>0){var g=i*v,h=c-g;if(h>0)c=g+b.sqrt(h)*5}if(c<0){var g=i*(r-t-v),h=-c-g;if(h>0)c=-g-b.sqrt(h)*5}}if(H-ib<-2)jb=0;else if(H-ib>2)jb=-1;ib=H;H=c;sb=G-H/i/(Z||1);if(H&&x&&!yb){a.jc(e);if(!N)z.be(sb);else z.Td(sb)}}}}}function cb(){mc();if(C){C=i;a.kb();a.V(g,"mousemove",Bb);a.V(g,"touchmove",Bb);Q=H;z.rb();var b=w.db();c.s(h.Pg,s(b),b,s(G),G);E&12&&Nb();bc(d)}}function fc(c){if(Q){a.wg(c);var b=a.xc(c);while(b&&u!==b){b.tagName=="A"&&a.jc(c);try{b=b.parentNode}catch(d){break}}}}function hc(a){D[v];v=s(a);tb=D[v];Rb(a);return v}function Ac(a,b){x=0;hc(a);c.s(h.gg,s(a),b)}function Rb(b,c){L=b;a.g(U,function(a){a.qc(s(b),b,c)})}function pc(){var b=h.jd||0,a=Y;if(ob)a&1&&(a&=1);h.jd|=a;return P=a&~b}function mc(){if(P){h.jd&=~Y;P=0}}function Ub(){var b=a.vb();a.gb(b,W);a.H(b,"absolute");return b}function s(a){return(a%r+r)%r}function gc(e,d){var a=e;if(d){if(!A){a=b.min(b.max(a+L,0),r-t);d=i}else if(A&2){a=s(a+L);d=i}}else if(A)a=c.md(a);db(a,o.wc,d)}function xb(){a.g(U,function(a){a.zc(a.kc.Xg<=F)})}function Cc(){if(!F){F=1;xb();if(!C){E&12&&bc();E&3&&D[v].Sc()}}}function Bc(){if(F){F=0;xb();C||!(E&12)||dc()}}function Dc(){W={S:K,T:J,f:0,e:0};a.g(R,function(b){a.gb(b,W);a.H(b,"absolute");a.wb(b,"hidden");a.W(b)});a.gb(hb,W)}function bb(b,a){db(b,a,d)}function db(f,e,j){if(Pb&&(!C&&(F||!(E&12))||o.rd)){N=d;C=i;z.rb();if(e==k)e=Sb;var c=Cb.Jb(),a=f;if(j){a=c+f;if(f>0)a=b.ceil(a);else a=b.floor(a)}if(A&2)a=s(a);if(!(A&1))a=b.max(0,b.min(a,r-t));var h=(a-c)%r;a=c+h;var g=c==a?0:e*b.abs(h);g=b.min(g,e*t*1.5);z.Sb(c,a,g||1)}}c.vg=db;c.Sd=function(){if(!O){O=d;D[v]&&D[v].Sc()}};c.jg=function(){return Q};function X(){return a.q(y||p)}function nb(){return a.r(y||p)}c.nb=X;c.mb=nb;function Eb(c,d){if(c==k)return a.q(p);if(!y){var b=a.vb(g);a.od(b,a.od(p));a.Rb(b,a.Rb(p));a.Ab(b,"block");a.H(b,"relative");a.O(b,0);a.Q(b,0);a.wb(b,"visible");y=a.vb(g);a.H(y,"absolute");a.O(y,0);a.Q(y,0);a.q(y,a.q(p));a.r(y,a.r(p));a.Qd(y,"0 0");a.N(y,b);var h=a.Z(p);a.N(p,y);a.bb(p,"backgroundImage","");a.g(h,function(c){a.N(a.n(c,"noscale")?p:b,c);a.n(c,"autocenter")&&Jb.push(c)})}Z=c/(d?a.r:a.q)(y);a.sg(y,Z);var f=d?Z*X():c,e=d?c:Z*nb();a.q(p,f);a.r(p,e);a.g(Jb,function(b){var c=a.Yb(a.n(b,"autocenter"));a.Uf(b,c)})}c.Bg=Eb;c.md=function(a){var d=b.ceil(s(kb/Yb)),c=s(a-L+d);if(c>t){if(a-L>r/2)a-=r;else if(a-L<=-r/2)a+=r}else a=L+c-d;return a};m.call(c);c.R=p=a.sb(p);var o=a.t({Cb:0,De:1,Rc:1,Cc:0,Oc:i,Ub:1,rd:d,td:1,Hd:3e3,Id:1,wc:500,Yd:e.Uc,fd:20,Nd:0,p:1,Kc:0,Sg:1,Fc:1,Ad:1},cc);if(o.Mg!=k)o.Hd=o.Mg;if(o.Nc!=k)o.p=o.Nc;if(o.Lg!=k)o.Kc=o.Lg;var gb=o.Fc&3,qc=(o.Fc&4)/-4||1,lb=o.Ag,I=a.t({Y:q,Kg:1,Ng:1},o.bh);I.fb=I.fb||I.ah;var Fb=o.Zg,ab=o.Ig,fb=o.Hg,S=!o.Sg,y,u=a.I(p,"slides",S),hb=a.I(p,"loading",S)||a.vb(g),Lb=a.I(p,"navigator",S),ec=a.I(p,"arrowleft",S),ac=a.I(p,"arrowright",S),Kb=a.I(p,"thumbnavigator",S),nc=a.q(u),lc=a.r(u),W,R=[],rc=a.Z(u);a.g(rc,function(b){if(b.tagName=="DIV"&&!a.n(b,"u"))R.push(b);else a.jb()&&a.M(b,(a.M(b)||0)+1)});var v=-1,L,tb,r=R.length,K=o.Gg||nc,J=o.Fg||lc,Tb=o.Nd,zb=K+Tb,Ab=J+Tb,Yb=gb&1?zb:Ab,t=b.min(o.p,r),mb,x,P,yb,U=[],Ob,Qb,Mb,Zb,zc,O,E=o.Id,ic=o.Hd,Sb=o.wc,rb,ub,kb,Pb=t<r,A=Pb?o.Ub:0,Y,Q,F=1,N,C,T,vb=0,wb=0,H,ib,jb,Cb,w,V,z,Vb=new kc,Z,Jb=[];O=o.Oc;c.kc=cc;Dc();a.J(p,"jssor-slider",d);a.M(u,a.M(u)||0);a.H(u,"absolute");mb=a.eb(u,d);a.Vb(mb,u);if(lb){Zb=lb.ch;rb=lb.Y;ub=t==1&&r>1&&rb&&(!a.Bd()||a.Kd()>=8)}kb=ub||t>=r||!(A&1)?0:o.Kc;Y=(t>1||kb?gb:-1)&o.Ad;var Gb=u,D=[],B,M,Db=a.Qg(),ob=Db.Og,G,qb,Ib,sb;Db.Pd&&a.bb(Gb,Db.Pd,([j,"pan-y","pan-x","none"])[Y]||"");V=new wc;if(ub)B=new rb(Vb,K,J,lb,ob);a.N(mb,V.cc);a.wb(u,"hidden");M=Ub();a.bb(M,"backgroundColor","#000");a.Lb(M,0);a.Vb(M,Gb.firstChild,Gb);for(var eb=0;eb<R.length;eb++){var tc=R[eb],uc=new vc(tc,eb);D.push(uc)}a.W(hb);Cb=new xc;z=new jc(Cb,V);if(Y){a.i(u,"mousedown",Wb);a.i(u,"touchstart",oc);a.i(u,"dragstart",Hb);a.i(u,"selectstart",Hb);a.i(g,"mouseup",cb);a.i(g,"touchend",cb);a.i(g,"touchcancel",cb);a.i(f,"blur",cb)}E&=ob?10:5;if(Lb&&Fb){Ob=new Fb.Y(Lb,Fb,X(),nb());U.push(Ob)}if(ab&&ec&&ac){ab.Ub=A;ab.p=t;Qb=new ab.Y(ec,ac,ab,X(),nb());U.push(Qb)}if(Kb&&fb){fb.Cc=o.Cc;Mb=new fb.Y(Kb,fb);U.push(Mb)}a.g(U,function(a){a.Tc(r,D,hb);a.Ob(n.bc,gc)});a.bb(p,"visibility","visible");Eb(X());a.i(u,"click",fc);a.i(p,"mouseout",a.pc(Cc,p));a.i(p,"mouseover",a.pc(Bc,p));xb();o.Rc&&a.i(g,"keydown",function(a){if(a.keyCode==37)bb(-o.Rc);else a.keyCode==39&&bb(o.Rc)});var pb=o.Cc;if(!(A&1))pb=b.max(0,b.min(pb,r-t));z.Sb(pb,pb,0)};h.te=21;h.Eg=22;h.Pg=23;h.fg=24;h.ee=25;h.se=26;h.he=27;h.Fe=28;h.Ud=202;h.gg=203;h.Vd=206;h.re=207;h.Ke=208;h.ad=209;var n={bc:1};f.$JssorBulletNavigator$=function(e,C){var f=this;m.call(f);e=a.sb(e);var s,A,z,r,l=0,c,o,k,w,x,h,g,q,p,B=[],y=[];function v(a){a!=-1&&y[a].dd(a==l)}function t(a){f.s(n.bc,a*o)}f.R=e;f.qc=function(a){if(a!=r){var d=l,c=b.floor(a/o);l=c;r=a;v(d);v(c)}};f.zc=function(b){a.K(e,b)};var u;f.Tc=function(D){if(!u){s=b.ceil(D/o);l=0;var n=q+w,r=p+x,m=b.ceil(s/k)-1;A=q+n*(!h?m:k-1);z=p+r*(h?m:k-1);a.q(e,A);a.r(e,z);for(var f=0;f<s;f++){var C=a.qg();a.xg(C,f+1);var i=a.nd(g,"numbertemplate",C,d);a.H(i,"absolute");var v=f%(m+1);a.Q(i,!h?n*v:f%k*n);a.O(i,h?r*v:b.floor(f/(m+1))*r);a.N(e,i);B[f]=i;c.Eb&1&&a.i(i,"click",a.P(j,t,f));c.Eb&2&&a.i(i,"mouseover",a.pc(a.P(j,t,f),i));y[f]=a.dc(i)}u=d}};f.kc=c=a.t({oc:10,nc:10,Gb:1,Eb:1},C);g=a.I(e,"prototype");q=a.q(g);p=a.r(g);a.Nb(g,e);o=c.id||1;k=c.Zc||1;w=c.oc;x=c.nc;h=c.Gb-1;c.pd==i&&a.J(e,"noscale",d);c.cb&&a.J(e,"autocenter",c.cb)};var s=f.$JssorArrowNavigator$=function(b,g,h){var c=this;m.call(c);var r,q,e,f,k;a.q(b);a.r(b);function l(a){c.s(n.bc,a,d)}function p(c){a.K(b,c||!h.Ub&&e==0);a.K(g,c||!h.Ub&&e>=q-h.p);r=c}c.qc=function(b,a,c){if(c)e=a;else{e=b;p(r)}};c.zc=p;var o;c.Tc=function(c){q=c;e=0;if(!o){a.i(b,"click",a.P(j,l,-k));a.i(g,"click",a.P(j,l,k));a.dc(b);a.dc(g);o=d}};c.kc=f=a.t({id:1},h);k=f.id;if(f.pd==i){a.J(b,"noscale",d);a.J(g,"noscale",d)}if(f.cb){a.J(b,"autocenter",f.cb);a.J(g,"autocenter",f.cb)}},p=f.$JssorThumbnailNavigator$=function(f,C){var l=this,A,q,c,w=[],y,x,g,r,s,u,t,p,v,e,o;m.call(l);f=a.sb(f);function B(k,f){var e=this,b,i,h;function m(){i.dd(q==f)}function g(a){(a||!v.jg())&&l.s(n.bc,f)}e.qb=f;e.hd=m;h=k.fe||k.fc||a.vb();e.cc=b=a.nd(o,"thumbnailtemplate",h,d);i=a.dc(b);c.Eb&1&&a.i(b,"click",a.P(j,g,0));c.Eb&2&&a.i(b,"mouseover",a.pc(a.P(j,g,1),b))}l.qc=function(c,d,e){var a=q;q=c;a!=-1&&w[a].hd();w[c].hd();!e&&v.vg(v.md(b.floor(d/g)))};l.zc=function(b){a.K(f,b)};var z;l.Tc=function(D,C){if(!z){A=D;b.ceil(A/g);q=-1;p=b.min(p,C.length);var j=c.Gb&1,m=u+(u+r)*(g-1)*(1-j),l=t+(t+s)*(g-1)*j,o=m+(m+r)*(p-1)*j,n=l+(l+s)*(p-1)*(1-j);a.H(e,"absolute");a.wb(e,"hidden");c.cb&1&&a.Q(e,(y-o)/2);c.cb&2&&a.O(e,(x-n)/2);a.q(e,o);a.r(e,n);var k=[];a.g(C,function(l,f){var h=new B(l,f),d=h.cc,c=b.floor(f/g),i=f%g;a.Q(d,(u+r)*i*(1-j));a.O(d,(t+s)*i*j);if(!k[c]){k[c]=a.vb();a.N(e,k[c])}a.N(k[c],d);w.push(h)});var E=a.t({Oc:i,rd:i,Gg:m,Fg:l,Nd:r*j+s*(1-j),fd:12,wc:200,Id:1,Fc:c.Gb,Ad:c.Wg||c.Yg?0:c.Gb},c);v=new h(f,E);z=d}};l.kc=c=a.t({oc:0,nc:0,p:1,Gb:1,cb:3,Eb:1},C);if(c.Nc!=k)c.p=c.Nc;if(c.C!=k)c.Zc=c.C;y=a.q(f);x=a.r(f);e=a.I(f,"slides",d);o=a.I(e,"prototype");u=a.q(o);t=a.r(o);a.Nb(o,e);g=c.Zc||1;r=c.oc;s=c.nc;p=c.p;c.pd==i&&a.J(f,"noscale",d)};function q(e,d,c){var b=this;l.call(b,0,c);b.zb=a.qd;b.lc=0;b.ic=c}f.$JssorCaptionSlider$=function(h,f,i){var c=this;l.call(c,0,0);var e,d;function g(p,h,f){var c=this,g,n=f?h.Kg:h.Ng,e=h.fb,o={ib:"t",D:"d",k:"du",x:"x",y:"y",B:"r",o:"z",a:"f",Mb:"b"},d={tb:function(b,a){if(!isNaN(a.yb))b=a.yb;else b*=a.xf;return b},a:function(b,a){return this.tb(b-1,a)}};d.o=d.a;l.call(c,0,0);function j(r,m){var l=[],i,k=[],c=[];function h(c,d){var b={};a.g(o,function(g,h){var e=a.n(c,g+(d||""));if(e){var f={};if(g=="t")f.yb=e;else if(e.indexOf("%")+1)f.xf=a.Ac(e)/100;else f.yb=a.Ac(e);b[h]=f}});return b}function p(){return e[b.floor(b.random()*e.length)]}function g(f){var h;if(f=="*")h=p();else if(f){var d=e[a.Yb(f)]||e[f];if(a.uc(d)){if(f!=i){i=f;c[f]=0;k[f]=d[b.floor(b.random()*d.length)]}else c[f]++;d=k[f];if(a.uc(d)){d=d.length&&d[c[f]%d.length];if(a.uc(d))d=d[b.floor(b.random()*d.length)]}}h=d;if(a.Ld(h))h=g(h)}return h}var q=a.Z(r);a.g(q,function(b){var c=[];c.R=b;var e=a.n(b,"u")=="caption";a.g(f?[0,3]:[2],function(l,o){if(e){var k,f;if(l!=2||!a.n(b,"t3")){f=h(b,l);if(l==2&&!f.ib){f.D=f.D||{yb:0};f=a.t(h(b,0),f)}}if(f&&f.ib){k=g(f.ib.yb);if(k){var i=a.t({D:0},k);a.g(f,function(c,a){var b=(d[a]||d.tb).apply(d,[i[a],f[a]]);if(!isNaN(b))i[a]=b});if(!o)if(f.Mb)i.Mb=f.Mb.yb||0;else if(n&2)i.Mb=0}}c.push(i)}if(m%2&&!o)c.Z=j(b,m+1)});l.push(c)});return l}function m(w,c,z){var g={j:c.j,ec:c.ec,z:c.z,Lc:f&&!z},m=w,r=a.kd(w),k=a.q(m),j=a.r(m),y=a.q(r),x=a.r(r),h={},e={},i=c.Le||1;if(c.a)e.a=1-c.a;g.nb=k;g.mb=j;if(c.o||c.B){e.o=(c.o||2)-2;if(a.jb()||a.Bc())e.o=b.min(e.o,1);h.o=1;var B=c.B||0;e.B=B*360;h.B=0}else if(c.c){var s={f:0,u:k,v:j,e:0},v=a.t({},s),d=v.Kb={},u=c.c&4,p=c.c&8,t=c.c&1,q=c.c&2;if(u&&p){d.f=j/2*i;d.v=-d.f}else if(u)d.v=-j*i;else if(p)d.f=j*i;if(t&&q){d.e=k/2*i;d.u=-d.e}else if(t)d.u=-k*i;else if(q)d.e=k*i;g.lb=c.lb;e.c=v;h.c=s}var n=0,o=0;if(c.x)n-=y*c.x;if(c.y)o-=x*c.y;if(n||o||g.lb){e.e=n;e.f=o}var A=c.k;h=a.t(h,a.oe(m,e));g.Ec=a.Od();return new l(c.D,A,g,m,h,e)}function i(b,d){a.g(d,function(d){var a,h=d.R,f=d[0],j=d[1];if(f){a=m(h,f);f.Mb==k&&a.X(b);b=a.hb()}b=i(b,d.Z);if(j){var e=m(h,j,1);e.X(b);c.L(e);g.L(e)}a&&c.L(a)});return b}c.zb=function(){c.G(c.hb()*(f||0));g.G(0)};g=new l(0,0);i(0,n?j(p,1):[])}c.zb=function(){d.zb();e.zb()};e=new g(h,f,1);c.lc=e.hb();c.ic=c.lc+i;d=new g(h,f);d.X(c.ic);c.L(d);c.L(e)};f.$JssorCaptionSlideo$=function(n,g,m){var b=this,o,h={},i=g.fb,e=new l(0,0);l.call(b,0,0);function j(c,d){var b={};a.g(c,function(c,f){var e=h[f];if(e){if(a.rg(c))c=j(c,f=="e");else if(d)if(a.hc(c))c=o[c];b[e]=c}});return b}function k(e,c){var b=[],d=a.Z(e);a.g(d,function(d){var h=a.n(d,"u")=="caption";if(h){var e=a.n(d,"t"),g=i[a.Yb(e)]||i[e],f={R:d,ib:g};b.push(f)}if(c<5)b=b.concat(k(d,c+1))});return b}function r(c,d,b){a.g(d,function(f){var d=j(f),h={j:a.yc(d.j),Ec:a.Od(),nb:b.S,mb:b.T},g=new l(f.b,f.d,h,c,b,d);e.L(g);b=a.Je(b,d)});return b}function q(b){a.g(b,function(c){var b=c.R,e=a.q(b),d=a.r(b),f={e:a.Q(b),f:a.O(b),a:1,U:a.M(b)||0,B:0,Hb:0,Fb:0,ub:1,xb:1,Wb:0,Xb:0,Qb:0,Zb:0,ac:0,S:e,T:d,c:{f:0,u:e,v:d,e:0}};r(b,c.ib,f)})}function t(g,f,h){var c=g.b-f;if(c){var a=new l(f,c);a.L(e,d);a.X(h);b.L(a)}b.Be(g.d);return c}function s(f){var c=e.Gc(),d=0;a.g(f,function(e,f){e=a.t({d:m},e);t(e,c,d);c=e.b;d+=e.d;if(!f){b.lc=c;b.ic=c+e.d}})}b.zb=function(){b.G(-1,d)};o=[c.uf,c.m,c.cf,c.Oe,c.Pe,c.l,c.Pc,c.Qe,c.Re,c.Se,c.Te,c.Ue,c.Ve,c.We,c.Xe,c.Ye,c.Ze,c.af,c.bf,c.df,c.tf,c.ef,c.ff,c.gf,c.hf,c.jf,c.kf,c.lf,c.mf,c.nf,c.of,c.pf,c.qf,c.rf,c.sf,c.eg,c.dg];var u={f:"y",e:"x",v:"m",u:"t",B:"r",Hb:"rX",Fb:"rY",ub:"sX",xb:"sY",Wb:"tX",Xb:"tY",Qb:"tZ",Zb:"kX",ac:"kY",a:"o",j:"e",U:"i",c:"c"};a.g(u,function(b,a){h[b]=a});q(k(n,1));var p=g.eh||[],f=[].concat(p[a.Yb(a.n(n,"b"))]||[]);f.push({b:e.hb(),d:f.length?0:m});s(f);b.G(-1)};jssor_1_slider_init=function(){var i=[{k:1200,x:.3,z:{e:[.3,.7]},j:{e:c.l,a:c.m},a:2},{k:1200,x:-.3,A:d,j:{e:c.l,a:c.m},a:2},{k:1200,x:-.3,z:{e:[.3,.7]},j:{e:c.l,a:c.m},a:2},{k:1200,x:.3,A:d,j:{e:c.l,a:c.m},a:2},{k:1200,y:.3,z:{f:[.3,.7]},j:{f:c.l,a:c.m},a:2},{k:1200,y:-.3,A:d,j:{f:c.l,a:c.m},a:2},{k:1200,y:-.3,z:{f:[.3,.7]},j:{f:c.l,a:c.m},a:2},{k:1200,y:.3,A:d,j:{f:c.l,a:c.m},a:2},{k:1200,x:.3,p:2,z:{e:[.3,.7]},E:{ab:3},j:{e:c.l,a:c.m},a:2},{k:1200,x:.3,p:2,A:d,E:{ab:3},j:{e:c.l,a:c.m},a:2},{k:1200,y:.3,C:2,z:{f:[.3,.7]},E:{ob:12},j:{f:c.l,a:c.m},a:2},{k:1200,y:.3,C:2,A:d,E:{ob:12},j:{f:c.l,a:c.m},a:2},{k:1200,y:.3,p:2,z:{f:[.3,.7]},E:{ab:12},j:{f:c.l,a:c.m},a:2},{k:1200,y:-.3,p:2,A:d,E:{ab:12},j:{f:c.l,a:c.m},a:2},{k:1200,x:.3,C:2,z:{e:[.3,.7]},E:{ob:3},j:{e:c.l,a:c.m},a:2},{k:1200,x:-.3,C:2,A:d,E:{ob:3},j:{e:c.l,a:c.m},a:2},{k:1200,x:.3,y:.3,p:2,C:2,z:{e:[.3,.7],f:[.3,.7]},E:{ab:3,ob:12},j:{e:c.l,f:c.l,a:c.m},a:2},{k:1200,x:.3,y:.3,p:2,C:2,z:{e:[.3,.7],f:[.3,.7]},A:d,E:{ab:3,ob:12},j:{e:c.l,f:c.l,a:c.m},a:2},{k:1200,D:20,c:3,j:{c:c.l,a:c.m},a:2},{k:1200,D:20,c:3,A:d,j:{c:c.Pc,a:c.m},a:2},{k:1200,D:20,c:12,j:{c:c.l,a:c.m},a:2},{k:1200,D:20,c:12,A:d,j:{c:c.Pc,a:c.m},a:2}],j={Oc:d,Ag:{Y:r,fb:i,Xd:1},Ig:{Y:s},Hg:{Y:p,p:10,oc:8,nc:8,Kc:360}},g=new h("jssor_1",j);function e(){var a=g.R.parentNode.clientWidth;if(a){a=b.min(a,1245);g.Bg(a)}else f.setTimeout(e,30)}e();a.i(f,"load",e);a.i(f,"resize",a.tg(f,e));a.i(f,"orientationchange",e)}}(window,document,Math,null,true,false)
</script>

<style>
.jssora05l,.jssora05r{display:block;position:absolute;width:40px;height:40px;cursor:pointer;background:url('img/a17.png') no-repeat;overflow:hidden}.jssora05l{background-position:-10px -40px}.jssora05r{background-position:-70px -40px}.jssora05l:hover{background-position:-130px -40px}.jssora05r:hover{background-position:-190px -40px}.jssora05l.jssora05ldn{background-position:-250px -40px}.jssora05r.jssora05rdn{background-position:-310px -40px}.jssort01 .p{position:absolute;top:0;left:0;width:72px;height:72px}.jssort01 .t{position:absolute;top:0;left:0;width:100%;height:100%;border:none}.jssort01 .w{position:absolute;top:0;left:0;width:100%;height:100%}.jssort01 .c{position:absolute;top:0;left:0;width:68px;height:68px;border:#000 2px solid;box-sizing:content-box;background:url('<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/img/slides/t01.png') -800px -800px no-repeat;_background:none}.jssort01 .pav .c{top:2px;_top:0;left:2px;_left:0;width:68px;height:68px;border:#000 0 solid;_border:#fff 2px solid;background-position:50% 50%}.jssort01 .p:hover .c{top:0;left:0;width:70px;height:70px;border:#fff 1px solid;background-position:50% 50%}.jssort01 .p.pdn .c{background-position:50% 50%;width:68px;height:68px;border:#000 2px solid}* html .jssort01 .c,* html .jssort01 .pdn .c,* html .jssort01 .pav .c{width:72px;height:72px}
</style>
<!-- End Add -->
</head>
<body>
  <div id="masking"></div>
  <div id='toTop'><i class="fa fa-caret-square-o-up"></i></div>
  <div>
	 <div class="newlogo">
		<a class="logolink" href="#"></a>
		<div style="height: 170px;"></div>
		<div class="new-main-menu">
			<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo" style="width: 100%;">
				Main Menu
			</button>
			<div id="demo" class="collapse">
			  <ul class="nav nav-pills pull-right" style="background: whitesmoke;">
				<?php foreach ($menus as $path => $menu) { ?>
				  <li <?php if ($p == $path) {echo ' class="active" style="width:100%;"';} ?>><a href="<?php echo $menu['url']; ?>" title="<?php echo $menu['text']; ?>"><?php echo ucwords($menu['text']); ?></a></li>
				<?php } ?>
			  </ul>
			</div>
		</div>
	</div>
  <!--// Social Button //-->
  <div class="navbar navbar-social navbar-fixed-top" style="position:relative !important;">
    <div class="navbar-inner">
      <div class="container">
        <?php if(isset($social) && count($social) > 0) { ?>
        <ul class="nav" style="float: right !important;">
          <li class="li-email-hp"><a class="rss"><i class="fa fa-envelope-o"></i></a></li>
          <li class="li-email-hp"><a class="rss"><i class="fa fa-phone"></i></a></li>
          <li><a href="index.php?rss=true" target="_blank" title="Facebook" class="rss" ><img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/img/facebook.png" /></a></li>
          <li><a href="index.php?rss=true" target="_blank" title="Twitter" class="rss" ><img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/img/twitter.png" /></a></li>
          <li><a href="index.php?rss=true" target="_blank" title="Instagram" class="rss" ><img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/img/instagram.png" /></a></li>
        </ul>
        <?php } ?>
        
      </div>
    </div>
  </div>  <!--// End Social Button //-->

  <!--// Menu add doe//-->
  <div class="navbar navbar-menu navbar-fixed-top" style="position:relative !important;">
    <div class="navbar-inner">
      <div class="container">
          <ul class="nav nav-pills pull-right">
			 <div class="sitename"><?php echo $sysconf['library_name']; ?></div>
			 <div class="subname"><?php echo $sysconf['library_subname']; ?></div>
          </ul>
      </div>
    </div>
  </div>  <!--// End Menu //-->
  </div>

<!--Added doe//-->
 <?php if(isset($_GET['search']) AND $_GET['search'] == 'search') { } else {?>
<div style="padding-left: 50px; padding-right: 50px;">
<div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 800px; height: 456px; overflow: hidden; background-color: #ffffff;">
<!-- Loading Screen -->
<div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
<div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
<div style="position:absolute;display:block;background:url('<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/img/slides/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
</div>
<div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 800px; height: 456px; overflow: hidden;">
<div style="display: none;">
<img data-u="image" src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/img/slides/01.jpg" />
</div>
<div style="display: none;">
<img data-u="image" src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/img/slides/02.jpg" />
</div>
<div style="display: none;">
<img data-u="image" src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/img/slides/03.jpg" />
</div>
<div style="display: none;">
<img data-u="image" src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/img/slides/04.jpg" />
</div>
</div>
<div class="c"></div>
</div>
</div>
<?php } ?>
<!-- Thumbnail Item Skin End -->
</div>
<!-- Arrow Navigator -->
</div>
<script>
jssor_1_slider_init();
</script>
</div>

<!-- End Added //-->


<!--// Content Ouput //-->
<div class="content">
  <div class="container">
    <div class="row">
      <!--// Check For No Query //-->
      <?php if(isset($_GET['search']) || isset($_GET['title']) || isset($_GET['keywords']) || isset($_GET['p'])) { ?>
        <!-- Main Content -->
        <div class="span8">
          <?php if(@$_GET['p'] != 'member') { ?>
          <div class="tagline">
            <?php if(!isset($_GET['p'])) { ?>
            <?php echo __('Collections'); ?>
            <?php } elseif ($_GET['p'] == 'show_detail') { ?>
            <?php echo __("Record Detail"); ?>
            <?php } else { ?>
            <?php echo $page_title; ?>
            <?php } ?>
            <a href="javascript: history.back();" class="btn btn-mini btn-danger pull-right"><i class="icon icon-white icon-circle-arrow-left"></i> <?php echo __('Back'); ?> </a>
          </div>
          <?php } ?>

          <?php if(!isset($_GET['p'])) { ?>
            <div class="search">
            <div id="simply-search">
              <div class="simply" >
                <form name="advSearchForm" id="simplySearchForm" action="index.php" method="get" class="form-search">
                  <div class="input-append">
                  <input type="hidden" name="search" value="search" />
                  <input type="text" name="keywords" id="keyword" placeholder="<?php echo __('Keyword'); ?>" lang="<?php echo $sysconf['default_lang']; ?>" x-webkit-speech="x-webkit-speech" class="input-xxlarge search-query" />
                  <button type="submit" class="btn"><?php echo __('Search'); ?></button>
                  </div>
                </form>
              </div>
            </div>
            <div id="advance-search" style="display:none;" >
             <form name="advSearchForm" id="advSearchForm" action="index.php" method="get" class="form-horizontal form-search">
                <div class="simply" >
                  <div class="input-append">
                  <input type="text" name="title" id="title" placeholder="<?php echo __('Title'); ?>" class="input-xxlarge search-query" />
                  <button type="submit" class="btn" name="search" value="search"><?php echo __('Search'); ?></button>
                  </div>
                </div>
                <div class="advance">
                  <div class="row-fluid">
                  <div class="span5">
                    <div class="control-group">
                      <label class="control-label"><?php echo __('Author(s)'); ?></label>
                      <div class="controls">
                        <?php echo $advsearch_author; ?>
                      </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label"><?php echo __('Subject(s)'); ?></label>
                      <div class="controls">
                        <?php echo $advsearch_topic; ?>
                      </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label"><?php echo __('ISBN/ISSN'); ?></label>
                      <div class="controls">
                        <input type="text" name="isbn" />
                      </div>
                    </div>
                  </div>
                  <div class="span6">

                    <div class="control-group">
                    <label class="control-label"><?php echo __('GMD'); ?></label>
                    <div class="controls">
                      <select name="gmd"><?php echo $gmd_list; ?></select>
                    </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label"><?php echo __('Collection Type'); ?></label>
                      <div class="controls">
                        <select name="colltype"><?php echo $colltype_list; ?></select>
                      </div>
                    </div>

                    <div class="control-group">
                      <label class="control-label"><?php echo __('Location'); ?></label>
                      <div class="controls">
                        <select name="location"> <?php echo $location_list; ?></select>
                      </div>
                    </div>
                </div>
                </div>
                <div class="clearfix"></div>
              </form>
              </div>
            </div>
            <div id="show_advance">
              <a href="#"><?php echo __('Advanced Search'); ?></a>
            </div>
            </div>
          <div class="info">
            <?php echo $search_result_info; ?>
          </div>
          <?php } ?>

          <?php if(isset($_GET['p'])) { ?>
            <?php if($_GET['p'] == 'member') { ?>
              <?php echo $main_content; ?>
            <?php } else { ?>
              <div class="page"><?php echo $main_content; ?></div>
            <?php } ?>
          <?php } else { ?>
            <?php echo $main_content; ?>
          <?php } ?>

        <?php if(@$_GET['p'] != 'member') { ?>
        </div>
        <?php } elseif(utility::isMemberLogin()) { ?>
        </div>
        </div>
        <?php } ?>
        <!-- End Main Content -->

        <div class="span4">
          <!--// If Member Logged //-->
          <?php if (utility::isMemberLogin()) { ?>
          <div class="sidebar">
            <div class="tagline">
              <?php echo __('Information'); ?>
            </div>
            <div class="info">
              <?php echo $header_info; ?>
            </div>
          </div>
          <?php } else { ?>
          <div class="sidebar">
            <div class="tagline">
              <?php echo __('Information'); ?>
            </div>
            <div class="info">
              <?php echo $info; ?>
            </div>
          </div>
          <?php } ?>
          <!--// End Member Logged //-->
          <br/>

          <!--// Show if clustering search is enabled //-->
          <?php if(!isset($_GET['p'])) { ?>
          <?php if ($sysconf['enable_search_clustering']) { ?>
          <div class="sidebar">
            <div class="tagline">
              <?php echo __('Search Cluster'); ?>
            </div>
            <div class="info">
              <div id="search-cluster"><div class="cluster-loading"><?php echo __('Generating search cluster...');  ?></div></div>
              <script type="text/javascript">
              $('document').ready( function() {
                $.ajax({
                  url: 'index.php?p=clustering&q=<?php echo urlencode($criteria); ?>',
                  type: 'GET',
                  success: function(data, status, jqXHR) {
                    $('#search-cluster').html(data);
                  }
                });
              });
              </script>
            </div>
          </div>
          <?php } ?>
          <!--// End Show if clustering search is enabled //-->
          <?php } ?>

        </div>

      <?php } else { ?>
        <!-- Default Frontpage -->
        <div class="span8 offset2">
          <div class="search">
            <div class="tagline"><?php echo $info; ?></div>
            <div id="simply-search">
              <div class="simply" >
                <form name="advSearchForm" id="simplySearchForm" action="index.php" method="get" class="form-search">
                  <div class="input-append">
                  <input type="hidden" name="search" value="search" />
                  <input type="text" name="keywords" id="keyword" placeholder="<?php echo __('Keyword'); ?>" lang="<?php echo $sysconf['default_lang']; ?>" x-webkit-speech="x-webkit-speech" class="input-xxlarge search-query" />
                  <button type="submit" class="btn"><?php echo __('Search'); ?></button>
                  </div>
                </form>
              </div>
            </div>
            <div id="advance-search" style="display:none;" >
              <form name="advSearchForm" id="advSearchForm" action="index.php" method="get" class="form-horizontal form-search">
                <div class="simply" >
                  <div class="input-append">
                  <input type="text" name="title" id="title" placeholder="<?php echo __('Title'); ?>" class="input-xxlarge search-query" />
                  <button type="submit" name="search" class="btn" value="search"><?php echo __('Search'); ?></button>
                  </div>
                </div>
                <div class="advance">
                  <div class="row-fluid">
                    <div class="span5">
                      <div class="control-group">
                        <label class="control-label"><?php echo __('Author(s)'); ?></label>
                        <div class="controls">
                          <?php echo $advsearch_author; ?>
                        </div>
                      </div>

                      <div class="control-group">
                        <label class="control-label"><?php echo __('Subject(s)'); ?></label>
                        <div class="controls">
                          <?php echo $advsearch_topic; ?>
                        </div>
                      </div>

                      <div class="control-group">
                        <label class="control-label"><?php echo __('ISBN/ISSN'); ?></label>
                        <div class="controls">
                          <input type="text" name="isbn" />
                        </div>
                      </div>
                    </div>
                    <div class="span6">

                      <div class="control-group">
                      <label class="control-label"><?php echo __('GMD'); ?></label>
                      <div class="controls">
                        <select name="gmd"><?php echo $gmd_list; ?></select>
                      </div>
                      </div>

                      <div class="control-group">
                        <label class="control-label"><?php echo __('Collection Type'); ?></label>
                        <div class="controls">
                          <select name="colltype"><?php echo $colltype_list; ?></select>
                        </div>
                      </div>

                      <div class="control-group">
                        <label class="control-label"><?php echo __('Location'); ?></label>
                        <div class="controls">
                          <select name="location"> <?php echo $location_list; ?></select>
                        </div>
                      </div>

                    </div>
                  </div>
                <div class="clearfix"></div>
                </div>
              </form>
            </div>
        </div>
        <div id="show_advance">
          <a href="#"><?php echo __('Advanced Search'); ?></a>
        </div>
        <!-- End Default Frontpage-->
      <?php } ?>
    </div>
  </div>

  <?php
  // Promoted titles
  // Only show at the homepage
  if(  !( isset($_GET['search']) || isset($_GET['title']) || isset($_GET['keywords']) || isset($_GET['p']) ) ) :
    // query top book
    $topbook = $dbs->query('SELECT biblio_id, title, image FROM biblio WHERE
        promoted=1 ORDER BY input_date DESC LIMIT 10');
    if ($num_rows = $topbook->num_rows) :
  ?>
  <div class="row topbook-container">
      <div class="span8 offset2">
        <ul id="topbook" class="jcarousel-skin-tango">
          <?php
          while ($book = $topbook->fetch_assoc()) {
            if (!empty($book['image'])) :
            ?>
            <li class="book"><a href="./index.php?p=show_detail&id=<?php echo $book['biblio_id'] ?>" title="<?php echo $book['title'] ?>"><img src="images/docs/<?php echo $book['image'] ?>" /></a></li>
            <?php
            else:
            ?>
            <li class="book"><a href="./index.php?p=show_detail&id=<?php echo $book['biblio_id'] ?>" title="<?php echo $book['title'] ?>"><img src="./template/default/img/nobook.png" /></a></li>
            <?php
            endif;
          }
          ?>
        </ul>
      </div>
  </div>
    <?php endif; ?>
  <?php endif; ?>

</div>  <!--// End Content Ouput //-->

<div class="footer">
 <div class="container">
  <div class="row">
  
	  <div class="footer-content-1">
		<div class="footer-content-head">
		 <p style="text-align : center; font-weight: bold;">Ikatan Kerja Sama :</p>
		 </div>
		 <div class="footer-content-content">
			 <table>
				<tr>
					<td style="padding: 10px;"><img title="Perpusnas" src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/img/e-resource.jpg" width="50px" height="50px"/></td>
					<td style="padding: 10px;"><img title="Cengage" src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/img/cengage.jpeg" width="50px" height="50px"/></td>
					<td style="padding: 10px;"><img title="Pkues" src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/img/pkues.png" width="74px" height="66px"/></td>
					<td style="padding: 10px;"><img title="Cambridge" src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/img/logo-ib-n-camb.png" width="360px" height="65px"/></td>
				</tr>
			 </table>
			
		 </div>
	  </div>
	  <div class="footer-content-2">
		 <div class="footer-content-head">
		 <p style="text-align : center; font-weight: bold;	">&copy Copy Right</p>
		 </div>
		 <div class="footer-content-content">
		 <b>Perpustakaan Pariwisata</b><br>
		 Jl Pengangsaan, Jakarta, Indonesia - Postal Code : 10270<br>
		 <i class="fa fa-envelope-o"></i> <br>
		 <i class="fa fa-phone"></i> <br>
		 <i class="fa fa-fax"></i> <br>
		 Website : <a href=""></a><br>
		 </div>
	  </div>
	</div>
 </div>
<div class="footer-border"></div>
</div>

<script type="text/javascript" src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/js/supersized.3.2.7.min.js"></script>
<script type="text/javascript" src="./js/highlight.js"></script>
<script type="text/javascript">
jQuery(function($){
  $.supersized(
  {
    slides  : [
    {image : '<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/img/bg_sindo.jpg'},
    ]
  });
});

$(document).ready(function()
{
  $('#keyword').keyup(function(){
    $('#title').val();
    $('#title').val($('#keyword').val());
  });

  $('#title').keyup(function(){
    $('#keyword').val();
    $('#keyword').val($('#title').val());
  });

  $('#advSearchForm input').attr('autocomplete','off');
  $('#title').attr('style','');

  $('#show_advance').click(function(){
    if ($("#advance-search").is(":hidden"))
    {
      $("#advance-search").slideDown('normal');
      $('#simply-search').slideUp('normal');
    } else {
      $("#advance-search").slideUp('normal');
      $('#simply-search').slideDown('normal');
    }
  });

  $('#title').keypress(function(e){
    if ((e.which && e.which == 13) || (e.keyCode && e.keyCode == 13)) {
      this.form.submit();
    }
  });

  $(window).load(function () {
    $('#toTop').focus();
  });

  function mycarousel_initCallback(carousel)
  {
    // Disable autoscrolling if the user clicks the prev or next button.
    carousel.buttonNext.bind('click', function() {
      carousel.startAuto(0);
    });

    carousel.buttonPrev.bind('click', function() {
      carousel.startAuto(0);
    });

    // Pause autoscrolling if the user moves with the cursor over the clip.
    carousel.clip.hover(function() {
      carousel.stopAuto();
    }, function() {
      carousel.startAuto();
    });
  };

  jQuery('#topbook').jcarousel({
      auto: 5,
      wrap: 'last',
      initCallback: mycarousel_initCallback
  });

  jQuery('.container .item .detail-list, .coll-detail .title, .abstract, .coll-detail .controls').highlight(<?php echo $searched_words_js_array; ?>);

});

$(window).scroll(function() {
    if ($(this).scrollTop()) {
        $('#toTop').fadeIn();
    } else {
        $('#toTop').fadeOut();
    }
});

$("#toTop").click(function () {
   //1 second of animation time
   //html works for FFX but not Chrome
   //body works for Chrome but not FFX
   //This strange selector seems to work universally
   $("html, body").animate({scrollTop: 0}, 1000);
});

</script>

</body>
</html>
