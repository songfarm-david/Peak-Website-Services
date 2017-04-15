/*! modernizr 3.3.1 (Custom Build) | MIT *
 * http://modernizr.com/download/?-cssanimations-details-emoji-flexbox-hidden-input-json-placeholder-search-supports-svg-target-setclasses !*/
!function(e,t,n){function r(e,t){return typeof e===t}function i(){var e,t,n,i,s,o,a;for(var l in y)if(y.hasOwnProperty(l)){if(e=[],t=y[l],t.name&&(e.push(t.name.toLowerCase()),t.options&&t.options.aliases&&t.options.aliases.length))for(n=0;n<t.options.aliases.length;n++)e.push(t.options.aliases[n].toLowerCase());for(i=r(t.fn,"function")?t.fn():t.fn,s=0;s<e.length;s++)o=e[s],a=o.split("."),1===a.length?Modernizr[a[0]]=i:(!Modernizr[a[0]]||Modernizr[a[0]]instanceof Boolean||(Modernizr[a[0]]=new Boolean(Modernizr[a[0]])),Modernizr[a[0]][a[1]]=i),x.push((i?"":"no-")+a.join("-"))}}function s(e){var t=C.className,n=Modernizr._config.classPrefix||"";if(T&&(t=t.baseVal),Modernizr._config.enableJSClass){var r=new RegExp("(^|\\s)"+n+"no-js(\\s|$)");t=t.replace(r,"$1"+n+"js$2")}Modernizr._config.enableClasses&&(t+=" "+n+e.join(" "+n),T?C.className.baseVal=t:C.className=t)}function o(e,t){return!!~(""+e).indexOf(t)}function a(){return"function"!=typeof t.createElement?t.createElement(arguments[0]):T?t.createElementNS.call(t,"http://www.w3.org/2000/svg",arguments[0]):t.createElement.apply(t,arguments)}function l(){var e=t.body;return e||(e=a(T?"svg":"body"),e.fake=!0),e}function u(e,n,r,i){var s,o,u,f,d="modernizr",c=a("div"),p=l();if(parseInt(r,10))for(;r--;)u=a("div"),u.id=i?i[r]:d+(r+1),c.appendChild(u);return s=a("style"),s.type="text/css",s.id="s"+d,(p.fake?p:c).appendChild(s),p.appendChild(c),s.styleSheet?s.styleSheet.cssText=e:s.appendChild(t.createTextNode(e)),c.id=d,p.fake&&(p.style.background="",p.style.overflow="hidden",f=C.style.overflow,C.style.overflow="hidden",C.appendChild(p)),o=n(c,e),p.fake?(p.parentNode.removeChild(p),C.style.overflow=f,C.offsetHeight):c.parentNode.removeChild(c),!!o}function f(e){return e.replace(/([A-Z])/g,function(e,t){return"-"+t.toLowerCase()}).replace(/^ms-/,"-ms-")}function d(t,r){var i=t.length;if("CSS"in e&&"supports"in e.CSS){for(;i--;)if(e.CSS.supports(f(t[i]),r))return!0;return!1}if("CSSSupportsRule"in e){for(var s=[];i--;)s.push("("+f(t[i])+":"+r+")");return s=s.join(" or "),u("@supports ("+s+") { #modernizr { position: absolute; } }",function(e){return"absolute"==getComputedStyle(e,null).position})}return n}function c(e){return e.replace(/([a-z])-([a-z])/g,function(e,t,n){return t+n.toUpperCase()}).replace(/^-/,"")}function p(e,t,i,s){function l(){f&&(delete E.style,delete E.modElem)}if(s=r(s,"undefined")?!1:s,!r(i,"undefined")){var u=d(e,i);if(!r(u,"undefined"))return u}for(var f,p,m,v,h,g=["modernizr","tspan"];!E.style;)f=!0,E.modElem=a(g.shift()),E.style=E.modElem.style;for(m=e.length,p=0;m>p;p++)if(v=e[p],h=E.style[v],o(v,"-")&&(v=c(v)),E.style[v]!==n){if(s||r(i,"undefined"))return l(),"pfx"==t?v:!0;try{E.style[v]=i}catch(y){}if(E.style[v]!=h)return l(),"pfx"==t?v:!0}return l(),!1}function m(e,t){return function(){return e.apply(t,arguments)}}function v(e,t,n){var i;for(var s in e)if(e[s]in t)return n===!1?e[s]:(i=t[e[s]],r(i,"function")?m(i,n||t):i);return!1}function h(e,t,n,i,s){var o=e.charAt(0).toUpperCase()+e.slice(1),a=(e+" "+b.join(o+" ")+o).split(" ");return r(t,"string")||r(t,"undefined")?p(a,t,i,s):(a=(e+" "+N.join(o+" ")+o).split(" "),v(a,t,n))}function g(e,t,r){return h(e,n,n,t,r)}var y=[],S={_version:"3.3.1",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,t){var n=this;setTimeout(function(){t(n[e])},0)},addTest:function(e,t,n){y.push({name:e,fn:t,options:n})},addAsyncTest:function(e){y.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=S,Modernizr=new Modernizr;var x=[],C=t.documentElement,T="svg"===C.nodeName.toLowerCase(),w="Moz O ms Webkit",b=S._config.usePrefixes?w.split(" "):[];S._cssomPrefixes=b;var _={elem:a("modernizr")};Modernizr._q.push(function(){delete _.elem});var E={style:_.elem.style};Modernizr._q.unshift(function(){delete E.style});var N=S._config.usePrefixes?w.toLowerCase().split(" "):[];S._domPrefixes=N,S.testAllProps=h,S.testAllProps=g,Modernizr.addTest("flexbox",g("flexBasis","1px",!0)),Modernizr.addTest("svg",!!t.createElementNS&&!!t.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect),Modernizr.addTest("json","JSON"in e&&"parse"in JSON&&"stringify"in JSON),Modernizr.addTest("target",function(){var t=e.document;if(!("querySelectorAll"in t))return!1;try{return t.querySelectorAll(":target"),!0}catch(n){return!1}}),Modernizr.addTest("cssanimations",g("animationName","a",!0)),Modernizr.addTest("hidden","hidden"in a("a"));var A=S.testStyles=u;Modernizr.addTest("details",function(){var e,t=a("details");return"open"in t?(A("#modernizr details{display:block}",function(n){n.appendChild(t),t.innerHTML="<summary>a</summary>b",e=t.offsetHeight,t.open=!0,e=e!=t.offsetHeight}),e):!1}),Modernizr.addTest("canvas",function(){var e=a("canvas");return!(!e.getContext||!e.getContext("2d"))}),Modernizr.addTest("canvastext",function(){return Modernizr.canvas===!1?!1:"function"==typeof a("canvas").getContext("2d").fillText}),Modernizr.addTest("emoji",function(){if(!Modernizr.canvastext)return!1;var t=e.devicePixelRatio||1,n=12*t,r=a("canvas"),i=r.getContext("2d");return i.fillStyle="#f00",i.textBaseline="top",i.font="32px Arial",i.fillText("🐨",0,0),0!==i.getImageData(n,n,1,1).data[0]});var P=function(){function e(e,t){var i;return e?(t&&"string"!=typeof t||(t=a(t||"div")),e="on"+e,i=e in t,!i&&r&&(t.setAttribute||(t=a("div")),t.setAttribute(e,""),i="function"==typeof t[e],t[e]!==n&&(t[e]=n),t.removeAttribute(e)),i):!1}var r=!("onblur"in t.documentElement);return e}();S.hasEvent=P,Modernizr.addTest("inputsearchevent",P("search")),Modernizr.addTest("placeholder","placeholder"in a("input")&&"placeholder"in a("textarea"));var z=a("input"),j="autocomplete autofocus list placeholder max min multiple pattern required step".split(" "),q={};Modernizr.input=function(t){for(var n=0,r=t.length;r>n;n++)q[t[n]]=!!(t[n]in z);return q.list&&(q.list=!(!a("datalist")||!e.HTMLDataListElement)),q}(j);var L="CSS"in e&&"supports"in e.CSS,k="supportsCSS"in e;Modernizr.addTest("supports",L||k),i(),s(x),delete S.addTest,delete S.addAsyncTest;for(var O=0;O<Modernizr._q.length;O++)Modernizr._q[O]();e.Modernizr=Modernizr}(window,document);