webpackJsonp(["app/js/liveroom/index"],{"1a876e528b8adc36a984":function(i,e,s){var o;!function(r,n){"use strict";var a="model",t="name",d="type",l="vendor",w="version",c="mobile",u="tablet",m={extend:function(i,e){var s={};for(var o in i)e[o]&&e[o].length%2==0?s[o]=e[o].concat(i[o]):s[o]=i[o];return s},has:function(i,e){return"string"==typeof i&&-1!==e.toLowerCase().indexOf(i.toLowerCase())},lowerize:function(i){return i.toLowerCase()},major:function(i){return"string"==typeof i?i.replace(/[^\d\.]/g,"").split(".")[0]:void 0},trim:function(i){return i.replace(/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,"")}},b={rgx:function(i,e){for(var s,o,r,n,a,t,d=0;d<e.length&&!a;){var l=e[d],w=e[d+1];for(s=o=0;s<l.length&&!a;)if(a=l[s++].exec(i))for(r=0;r<w.length;r++)t=a[++o],n=w[r],"object"==typeof n&&n.length>0?2==n.length?"function"==typeof n[1]?this[n[0]]=n[1].call(this,t):this[n[0]]=n[1]:3==n.length?"function"!=typeof n[1]||n[1].exec&&n[1].test?this[n[0]]=t?t.replace(n[1],n[2]):void 0:this[n[0]]=t?n[1].call(this,t,n[2]):void 0:4==n.length&&(this[n[0]]=t?n[3].call(this,t.replace(n[1],n[2])):void 0):this[n]=t||void 0;d+=2}},str:function(i,e){for(var s in e)if("object"==typeof e[s]&&e[s].length>0){for(var o=0;o<e[s].length;o++)if(m.has(e[s][o],i))return"?"===s?void 0:s}else if(m.has(e[s],i))return"?"===s?void 0:s;return i}},p={browser:{oldsafari:{version:{"1.0":"/8",1.2:"/1",1.3:"/3","2.0":"/412","2.0.2":"/416","2.0.3":"/417","2.0.4":"/419","?":"/"}}},device:{amazon:{model:{"Fire Phone":["SD","KF"]}},sprint:{model:{"Evo Shift 4G":"7373KT"},vendor:{HTC:"APA",Sprint:"Sprint"}}},os:{windows:{version:{ME:"4.90","NT 3.11":"NT3.51","NT 4.0":"NT4.0",2000:"NT 5.0",XP:["NT 5.1","NT 5.2"],Vista:"NT 6.0",7:"NT 6.1",8:"NT 6.2",8.1:"NT 6.3",10:["NT 6.4","NT 10.0"],RT:"ARM"}}}},v={browser:[[/(opera\smini)\/([\w\.-]+)/i,/(opera\s[mobiletab]+).+version\/([\w\.-]+)/i,/(opera).+version\/([\w\.]+)/i,/(opera)[\/\s]+([\w\.]+)/i],[t,w],[/(opios)[\/\s]+([\w\.]+)/i],[[t,"Opera Mini"],w],[/\s(opr)\/([\w\.]+)/i],[[t,"Opera"],w],[/(kindle)\/([\w\.]+)/i,/(lunascape|maxthon|netfront|jasmine|blazer)[\/\s]?([\w\.]+)*/i,/(avant\s|iemobile|slim|baidu)(?:browser)?[\/\s]?([\w\.]*)/i,/(?:ms|\()(ie)\s([\w\.]+)/i,/(rekonq)\/([\w\.]+)*/i,/(chromium|flock|rockmelt|midori|epiphany|silk|skyfire|ovibrowser|bolt|iron|vivaldi|iridium|phantomjs|bowser)\/([\w\.-]+)/i],[t,w],[/(trident).+rv[:\s]([\w\.]+).+like\sgecko/i],[[t,"IE"],w],[/(edge)\/((\d+)?[\w\.]+)/i],[t,w],[/(yabrowser)\/([\w\.]+)/i],[[t,"Yandex"],w],[/(puffin)\/([\w\.]+)/i],[[t,"Puffin"],w],[/((?:[\s\/])uc?\s?browser|(?:juc.+)ucweb)[\/\s]?([\w\.]+)/i],[[t,"UCBrowser"],w],[/(comodo_dragon)\/([\w\.]+)/i],[[t,/_/g," "],w],[/(micromessenger)\/([\w\.]+)/i],[[t,"WeChat"],w],[/(QQ)\/([\d\.]+)/i],[t,w],[/m?(qqbrowser)[\/\s]?([\w\.]+)/i],[t,w],[/xiaomi\/miuibrowser\/([\w\.]+)/i],[w,[t,"MIUI Browser"]],[/;fbav\/([\w\.]+);/i],[w,[t,"Facebook"]],[/headlesschrome(?:\/([\w\.]+)|\s)/i],[w,[t,"Chrome Headless"]],[/\swv\).+(chrome)\/([\w\.]+)/i],[[t,/(.+)/,"$1 WebView"],w],[/((?:oculus|samsung)browser)\/([\w\.]+)/i],[[t,/(.+(?:g|us))(.+)/,"$1 $2"],w],[/android.+version\/([\w\.]+)\s+(?:mobile\s?safari|safari)*/i],[w,[t,"Android Browser"]],[/(chrome|omniweb|arora|[tizenoka]{5}\s?browser)\/v?([\w\.]+)/i],[t,w],[/(dolfin)\/([\w\.]+)/i],[[t,"Dolphin"],w],[/((?:android.+)crmo|crios)\/([\w\.]+)/i],[[t,"Chrome"],w],[/(coast)\/([\w\.]+)/i],[[t,"Opera Coast"],w],[/fxios\/([\w\.-]+)/i],[w,[t,"Firefox"]],[/version\/([\w\.]+).+?mobile\/\w+\s(safari)/i],[w,[t,"Mobile Safari"]],[/version\/([\w\.]+).+?(mobile\s?safari|safari)/i],[w,t],[/webkit.+?(gsa)\/([\w\.]+).+?(mobile\s?safari|safari)(\/[\w\.]+)/i],[[t,"GSA"],w],[/webkit.+?(mobile\s?safari|safari)(\/[\w\.]+)/i],[t,[w,b.str,p.browser.oldsafari.version]],[/(konqueror)\/([\w\.]+)/i,/(webkit|khtml)\/([\w\.]+)/i],[t,w],[/(navigator|netscape)\/([\w\.-]+)/i],[[t,"Netscape"],w],[/(swiftfox)/i,/(icedragon|iceweasel|camino|chimera|fennec|maemo\sbrowser|minimo|conkeror)[\/\s]?([\w\.\+]+)/i,/(firefox|seamonkey|k-meleon|icecat|iceape|firebird|phoenix)\/([\w\.-]+)/i,/(mozilla)\/([\w\.]+).+rv\:.+gecko\/\d+/i,/(polaris|lynx|dillo|icab|doris|amaya|w3m|netsurf|sleipnir)[\/\s]?([\w\.]+)/i,/(links)\s\(([\w\.]+)/i,/(gobrowser)\/?([\w\.]+)*/i,/(ice\s?browser)\/v?([\w\._]+)/i,/(mosaic)[\/\s]([\w\.]+)/i],[t,w]],cpu:[[/(?:(amd|x(?:(?:86|64)[_-])?|wow|win)64)[;\)]/i],[["architecture","amd64"]],[/(ia32(?=;))/i],[["architecture",m.lowerize]],[/((?:i[346]|x)86)[;\)]/i],[["architecture","ia32"]],[/windows\s(ce|mobile);\sppc;/i],[["architecture","arm"]],[/((?:ppc|powerpc)(?:64)?)(?:\smac|;|\))/i],[["architecture",/ower/,"",m.lowerize]],[/(sun4\w)[;\)]/i],[["architecture","sparc"]],[/((?:avr32|ia64(?=;))|68k(?=\))|arm(?:64|(?=v\d+;))|(?=atmel\s)avr|(?:irix|mips|sparc)(?:64)?(?=;)|pa-risc)/i],[["architecture",m.lowerize]]],device:[[/\((ipad|playbook);[\w\s\);-]+(rim|apple)/i],[a,l,[d,u]],[/applecoremedia\/[\w\.]+ \((ipad)/],[a,[l,"Apple"],[d,u]],[/(apple\s{0,1}tv)/i],[[a,"Apple TV"],[l,"Apple"]],[/(archos)\s(gamepad2?)/i,/(hp).+(touchpad)/i,/(hp).+(tablet)/i,/(kindle)\/([\w\.]+)/i,/\s(nook)[\w\s]+build\/(\w+)/i,/(dell)\s(strea[kpr\s\d]*[\dko])/i],[l,a,[d,u]],[/(kf[A-z]+)\sbuild\/[\w\.]+.*silk\//i],[a,[l,"Amazon"],[d,u]],[/(sd|kf)[0349hijorstuw]+\sbuild\/[\w\.]+.*silk\//i],[[a,b.str,p.device.amazon.model],[l,"Amazon"],[d,c]],[/\((ip[honed|\s\w*]+);.+(apple)/i],[a,l,[d,c]],[/\((ip[honed|\s\w*]+);/i],[a,[l,"Apple"],[d,c]],[/(blackberry)[\s-]?(\w+)/i,/(blackberry|benq|palm(?=\-)|sonyericsson|acer|asus|dell|meizu|motorola|polytron)[\s_-]?([\w-]+)*/i,/(hp)\s([\w\s]+\w)/i,/(asus)-?(\w+)/i],[l,a,[d,c]],[/\(bb10;\s(\w+)/i],[a,[l,"BlackBerry"],[d,c]],[/android.+(transfo[prime\s]{4,10}\s\w+|eeepc|slider\s\w+|nexus 7|padfone)/i],[a,[l,"Asus"],[d,u]],[/(sony)\s(tablet\s[ps])\sbuild\//i,/(sony)?(?:sgp.+)\sbuild\//i],[[l,"Sony"],[a,"Xperia Tablet"],[d,u]],[/android.+\s([c-g]\d{4}|so[-l]\w+)\sbuild\//i],[a,[l,"Sony"],[d,c]],[/\s(ouya)\s/i,/(nintendo)\s([wids3u]+)/i],[l,a,[d,"console"]],[/android.+;\s(shield)\sbuild/i],[a,[l,"Nvidia"],[d,"console"]],[/(playstation\s[34portablevi]+)/i],[a,[l,"Sony"],[d,"console"]],[/(sprint\s(\w+))/i],[[l,b.str,p.device.sprint.vendor],[a,b.str,p.device.sprint.model],[d,c]],[/(lenovo)\s?(S(?:5000|6000)+(?:[-][\w+]))/i],[l,a,[d,u]],[/(htc)[;_\s-]+([\w\s]+(?=\))|\w+)*/i,/(zte)-(\w+)*/i,/(alcatel|geeksphone|lenovo|nexian|panasonic|(?=;\s)sony)[_\s-]?([\w-]+)*/i],[l,[a,/_/g," "],[d,c]],[/(nexus\s9)/i],[a,[l,"HTC"],[d,u]],[/d\/huawei([\w\s-]+)[;\)]/i,/(nexus\s6p)/i],[a,[l,"Huawei"],[d,c]],[/(microsoft);\s(lumia[\s\w]+)/i],[l,a,[d,c]],[/[\s\(;](xbox(?:\sone)?)[\s\);]/i],[a,[l,"Microsoft"],[d,"console"]],[/(kin\.[onetw]{3})/i],[[a,/\./g," "],[l,"Microsoft"],[d,c]],[/\s(milestone|droid(?:[2-4x]|\s(?:bionic|x2|pro|razr))?(:?\s4g)?)[\w\s]+build\//i,/mot[\s-]?(\w+)*/i,/(XT\d{3,4}) build\//i,/(nexus\s6)/i],[a,[l,"Motorola"],[d,c]],[/android.+\s(mz60\d|xoom[\s2]{0,2})\sbuild\//i],[a,[l,"Motorola"],[d,u]],[/hbbtv\/\d+\.\d+\.\d+\s+\([\w\s]*;\s*(\w[^;]*);([^;]*)/i],[[l,m.trim],[a,m.trim],[d,"smarttv"]],[/hbbtv.+maple;(\d+)/i],[[a,/^/,"SmartTV"],[l,"Samsung"],[d,"smarttv"]],[/\(dtv[\);].+(aquos)/i],[a,[l,"Sharp"],[d,"smarttv"]],[/android.+((sch-i[89]0\d|shw-m380s|gt-p\d{4}|gt-n\d+|sgh-t8[56]9|nexus 10))/i,/((SM-T\w+))/i],[[l,"Samsung"],a,[d,u]],[/smart-tv.+(samsung)/i],[l,[d,"smarttv"],a],[/((s[cgp]h-\w+|gt-\w+|galaxy\snexus|sm-\w[\w\d]+))/i,/(sam[sung]*)[\s-]*(\w+-?[\w-]*)*/i,/sec-((sgh\w+))/i],[[l,"Samsung"],a,[d,c]],[/sie-(\w+)*/i],[a,[l,"Siemens"],[d,c]],[/(maemo|nokia).*(n900|lumia\s\d+)/i,/(nokia)[\s_-]?([\w-]+)*/i],[[l,"Nokia"],a,[d,c]],[/android\s3\.[\s\w;-]{10}(a\d{3})/i],[a,[l,"Acer"],[d,u]],[/android.+([vl]k\-?\d{3})\s+build/i],[a,[l,"LG"],[d,u]],[/android\s3\.[\s\w;-]{10}(lg?)-([06cv9]{3,4})/i],[[l,"LG"],a,[d,u]],[/(lg) netcast\.tv/i],[l,a,[d,"smarttv"]],[/(nexus\s[45])/i,/lg[e;\s\/-]+(\w+)*/i,/android.+lg(\-?[\d\w]+)\s+build/i],[a,[l,"LG"],[d,c]],[/android.+(ideatab[a-z0-9\-\s]+)/i],[a,[l,"Lenovo"],[d,u]],[/linux;.+((jolla));/i],[l,a,[d,c]],[/((pebble))app\/[\d\.]+\s/i],[l,a,[d,"wearable"]],[/android.+;\s(oppo)\s?([\w\s]+)\sbuild/i],[l,a,[d,c]],[/crkey/i],[[a,"Chromecast"],[l,"Google"]],[/android.+;\s(glass)\s\d/i],[a,[l,"Google"],[d,"wearable"]],[/android.+;\s(pixel c)\s/i],[a,[l,"Google"],[d,u]],[/android.+;\s(pixel xl|pixel)\s/i],[a,[l,"Google"],[d,c]],[/android.+(\w+)\s+build\/hm\1/i,/android.+(hm[\s\-_]*note?[\s_]*(?:\d\w)?)\s+build/i,/android.+(mi[\s\-_]*(?:one|one[\s_]plus|note lte)?[\s_]*(?:\d\w)?)\s+build/i,/android.+(redmi[\s\-_]*(?:note)?(?:[\s_]*[\w\s]+)?)\s+build/i],[[a,/_/g," "],[l,"Xiaomi"],[d,c]],[/android.+(mi[\s\-_]*(?:pad)?(?:[\s_]*[\w\s]+)?)\s+build/i],[[a,/_/g," "],[l,"Xiaomi"],[d,u]],[/android.+;\s(m[1-5]\snote)\sbuild/i],[a,[l,"Meizu"],[d,u]],[/android.+a000(1)\s+build/i],[a,[l,"OnePlus"],[d,c]],[/android.+[;\/]\s*(RCT[\d\w]+)\s+build/i],[a,[l,"RCA"],[d,u]],[/android.+[;\/]\s*(Venue[\d\s]*)\s+build/i],[a,[l,"Dell"],[d,u]],[/android.+[;\/]\s*(Q[T|M][\d\w]+)\s+build/i],[a,[l,"Verizon"],[d,u]],[/android.+[;\/]\s+(Barnes[&\s]+Noble\s+|BN[RT])(V?.*)\s+build/i],[[l,"Barnes & Noble"],a,[d,u]],[/android.+[;\/]\s+(TM\d{3}.*\b)\s+build/i],[a,[l,"NuVision"],[d,u]],[/android.+[;\/]\s*(zte)?.+(k\d{2})\s+build/i],[[l,"ZTE"],a,[d,u]],[/android.+[;\/]\s*(gen\d{3})\s+build.*49h/i],[a,[l,"Swiss"],[d,c]],[/android.+[;\/]\s*(zur\d{3})\s+build/i],[a,[l,"Swiss"],[d,u]],[/android.+[;\/]\s*((Zeki)?TB.*\b)\s+build/i],[a,[l,"Zeki"],[d,u]],[/(android).+[;\/]\s+([YR]\d{2}x?.*)\s+build/i,/android.+[;\/]\s+(Dragon[\-\s]+Touch\s+|DT)(.+)\s+build/i],[[l,"Dragon Touch"],a,[d,u]],[/android.+[;\/]\s*(NS-?.+)\s+build/i],[a,[l,"Insignia"],[d,u]],[/android.+[;\/]\s*((NX|Next)-?.+)\s+build/i],[a,[l,"NextBook"],[d,u]],[/android.+[;\/]\s*(Xtreme\_?)?(V(1[045]|2[015]|30|40|60|7[05]|90))\s+build/i],[[l,"Voice"],a,[d,c]],[/android.+[;\/]\s*(LVTEL\-?)?(V1[12])\s+build/i],[[l,"LvTel"],a,[d,c]],[/android.+[;\/]\s*(V(100MD|700NA|7011|917G).*\b)\s+build/i],[a,[l,"Envizen"],[d,u]],[/android.+[;\/]\s*(Le[\s\-]+Pan)[\s\-]+(.*\b)\s+build/i],[l,a,[d,u]],[/android.+[;\/]\s*(Trio[\s\-]*.*)\s+build/i],[a,[l,"MachSpeed"],[d,u]],[/android.+[;\/]\s*(Trinity)[\-\s]*(T\d{3})\s+build/i],[l,a,[d,u]],[/android.+[;\/]\s*TU_(1491)\s+build/i],[a,[l,"Rotor"],[d,u]],[/android.+(KS(.+))\s+build/i],[a,[l,"Amazon"],[d,u]],[/android.+(Gigaset)[\s\-]+(Q.+)\s+build/i],[l,a,[d,u]],[/\s(tablet|tab)[;\/]/i,/\s(mobile)(?:[;\/]|\ssafari)/i],[[d,m.lowerize],l,a],[/(android.+)[;\/].+build/i],[a,[l,"Generic"]]],engine:[[/windows.+\sedge\/([\w\.]+)/i],[w,[t,"EdgeHTML"]],[/(presto)\/([\w\.]+)/i,/(webkit|trident|netfront|netsurf|amaya|lynx|w3m)\/([\w\.]+)/i,/(khtml|tasman|links)[\/\s]\(?([\w\.]+)/i,/(icab)[\/\s]([23]\.[\d\.]+)/i],[t,w],[/rv\:([\w\.]+).*(gecko)/i],[w,t]],os:[[/microsoft\s(windows)\s(vista|xp)/i],[t,w],[/(windows)\snt\s6\.2;\s(arm)/i,/(windows\sphone(?:\sos)*)[\s\/]?([\d\.\s]+\w)*/i,/(windows\smobile|windows)[\s\/]?([ntce\d\.\s]+\w)/i],[t,[w,b.str,p.os.windows.version]],[/(win(?=3|9|n)|win\s9x\s)([nt\d\.]+)/i],[[t,"Windows"],[w,b.str,p.os.windows.version]],[/\((bb)(10);/i],[[t,"BlackBerry"],w],[/(blackberry)\w*\/?([\w\.]+)*/i,/(tizen)[\/\s]([\w\.]+)/i,/(android|webos|palm\sos|qnx|bada|rim\stablet\sos|meego|contiki)[\/\s-]?([\w\.]+)*/i,/linux;.+(sailfish);/i],[t,w],[/(symbian\s?os|symbos|s60(?=;))[\/\s-]?([\w\.]+)*/i],[[t,"Symbian"],w],[/\((series40);/i],[t],[/mozilla.+\(mobile;.+gecko.+firefox/i],[[t,"Firefox OS"],w],[/(nintendo|playstation)\s([wids34portablevu]+)/i,/(mint)[\/\s\(]?(\w+)*/i,/(mageia|vectorlinux)[;\s]/i,/(joli|[kxln]?ubuntu|debian|[open]*suse|gentoo|(?=\s)arch|slackware|fedora|mandriva|centos|pclinuxos|redhat|zenwalk|linpus)[\/\s-]?(?!chrom)([\w\.-]+)*/i,/(hurd|linux)\s?([\w\.]+)*/i,/(gnu)\s?([\w\.]+)*/i],[t,w],[/(cros)\s[\w]+\s([\w\.]+\w)/i],[[t,"Chromium OS"],w],[/(sunos)\s?([\w\.]+\d)*/i],[[t,"Solaris"],w],[/\s([frentopc-]{0,4}bsd|dragonfly)\s?([\w\.]+)*/i],[t,w],[/(haiku)\s(\w+)/i],[t,w],[/cfnetwork\/.+darwin/i,/ip[honead]+(?:.*os\s([\w]+)\slike\smac|;\sopera)/i],[[w,/_/g,"."],[t,"iOS"]],[/(mac\sos\sx)\s?([\w\s\.]+\w)*/i,/(macintosh|mac(?=_powerpc)\s)/i],[[t,"Mac OS"],[w,/_/g,"."]],[/((?:open)?solaris)[\/\s-]?([\w\.]+)*/i,/(aix)\s((\d)(?=\.|\)|\s)[\w\.]*)*/i,/(plan\s9|minix|beos|os\/2|amigaos|morphos|risc\sos|openvms)/i,/(unix)\s?([\w\.]+)*/i],[t,w]]},f=function(i,e){if("object"==typeof i&&(e=i,i=void 0),!(this instanceof f))return new f(i,e).getResult();var s=i||(r&&r.navigator&&r.navigator.userAgent?r.navigator.userAgent:""),o=e?m.extend(v,e):v;return this.getBrowser=function(){var i={name:void 0,version:void 0};return b.rgx.call(i,s,o.browser),i.major=m.major(i.version),i},this.getCPU=function(){var i={architecture:void 0};return b.rgx.call(i,s,o.cpu),i},this.getDevice=function(){var i={vendor:void 0,model:void 0,type:void 0};return b.rgx.call(i,s,o.device),i},this.getEngine=function(){var i={name:void 0,version:void 0};return b.rgx.call(i,s,o.engine),i},this.getOS=function(){var i={name:void 0,version:void 0};return b.rgx.call(i,s,o.os),i},this.getResult=function(){return{ua:this.getUA(),browser:this.getBrowser(),engine:this.getEngine(),os:this.getOS(),device:this.getDevice(),cpu:this.getCPU()}},this.getUA=function(){return s},this.setUA=function(i){return s=i,this},this};f.VERSION="0.7.17",f.BROWSER={NAME:t,MAJOR:"major",VERSION:w},f.CPU={ARCHITECTURE:"architecture"},f.DEVICE={MODEL:a,VENDOR:l,TYPE:d,CONSOLE:"console",MOBILE:c,SMARTTV:"smarttv",TABLET:u,WEARABLE:"wearable",EMBEDDED:"embedded"},f.ENGINE={NAME:t,VERSION:w},f.OS={NAME:t,VERSION:w},void 0!==e?(void 0!==i&&i.exports&&(e=i.exports=f),e.UAParser=f):s("f61d52d1939a010a7020")?void 0!==(o=function(){return f}.call(e,s,e,i))&&(i.exports=o):r&&(r.UAParser=f);var g=r&&(r.jQuery||r.Zepto);if(void 0!==g){var h=new f;g.ua=h.getResult(),g.ua.get=function(){return h.getUA()},g.ua.set=function(i){h.setUA(i);var e=h.getResult();for(var s in e)g.ua[s]=e[s]}}}("object"==typeof window?window:this)},acdf198fed0b30ccedb6:function(i,e,s){"use strict";function o(i,e){if(!(i instanceof e))throw new TypeError("Cannot call a class as a function")}var r=function(){function i(i,e){for(var s=0;s<e.length;s++){var o=e[s];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(i,o.key,o)}}return function(e,s,o){return s&&i(e.prototype,s),o&&i(e,o),e}}(),n=s("1a876e528b8adc36a984"),a=function(i){return i&&i.__esModule?i:{default:i}}(n);new(function(){function i(){o(this,i),this.init()}return r(i,[{key:"init",value:function(){var i=this;this.isLiveRoomOpened=!1;var e=0,s=1;e=setInterval(function(){if(s>10)return clearInterval(e),void $("#entry").html(Translator.trans("course_set.live_room.entry_error_hint"));$.ajax({url:$("#entry").data("url"),success:function(o){if(o.error)return clearInterval(e),void $("#entry").html(Translator.trans("course_set.live_room.entry_error_with_message",{message:o.error}));if(o.roomUrl){var r=$("#entry").data("provider"),n=$("#entry").data("role"),t=new a.default(navigator.userAgent),d=t.getBrowser(),l=t.getOS();"http:"===document.location.protocol&&"student"===n&&8===r&&"Android"!==l.name&&"Chrome"===d.name&&d.major>=60&&(window.location.href=o.roomUrl),clearInterval(e),i.isLiveRoomOpened=!0;var w='<iframe name="classroom" src="'+o.roomUrl+'" style="position:absolute; left:0; top:0; height:100%; width:100%; border:0px;" scrolling="no"></iframe>';$("body").html(w)}s++},error:function(){$("#entry").html(Translator.trans("course_set.live_room.entry_error_hint"))}})},3e3),this.triggerLiveEvent()}},{key:"triggerLiveEvent",value:function(){var i=this,e=null,s=setInterval(function(){if(i.isLiveRoomOpened&&0!=$('meta[name="trigger_url"]').length){e=e?"doing":"start";var o=Date.parse(new Date).toString();o=o.substr(0,10),$.ajax({url:$('meta[name="trigger_url"]').attr("content"),type:"GET",data:{eventName:e,data:{lastTime:o,events:{watching:{watchTime:60}}}},success:function(i){i.live_end&&clearInterval(s)}})}},6e4)}}]),i}())}},["acdf198fed0b30ccedb6"]);