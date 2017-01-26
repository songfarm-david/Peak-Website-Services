/*! modernizr 3.3.1 (Custom Build) | MIT *
 * http://modernizr.com/download/?-cssanimations-flexbox-json-svg-target-setclasses !*/
!function(e,n,t){function r(e,n){return typeof e===n}function s(){var e,n,t,s,o,i,a;for(var l in h)if(h.hasOwnProperty(l)){if(e=[],n=h[l],n.name&&(e.push(n.name.toLowerCase()),n.options&&n.options.aliases&&n.options.aliases.length))for(t=0;t<n.options.aliases.length;t++)e.push(n.options.aliases[t].toLowerCase());for(s=r(n.fn,"function")?n.fn():n.fn,o=0;o<e.length;o++)i=e[o],a=i.split("."),1===a.length?Modernizr[a[0]]=s:(!Modernizr[a[0]]||Modernizr[a[0]]instanceof Boolean||(Modernizr[a[0]]=new Boolean(Modernizr[a[0]])),Modernizr[a[0]][a[1]]=s),w.push((s?"":"no-")+a.join("-"))}}function o(e){var n=C.className,t=Modernizr._config.classPrefix||"";if(x&&(n=n.baseVal),Modernizr._config.enableJSClass){var r=new RegExp("(^|\\s)"+t+"no-js(\\s|$)");n=n.replace(r,"$1"+t+"js$2")}Modernizr._config.enableClasses&&(n+=" "+t+e.join(" "+t),x?C.className.baseVal=n:C.className=n)}function i(e,n){return!!~(""+e).indexOf(n)}function a(){return"function"!=typeof n.createElement?n.createElement(arguments[0]):x?n.createElementNS.call(n,"http://www.w3.org/2000/svg",arguments[0]):n.createElement.apply(n,arguments)}function l(){var e=n.body;return e||(e=a(x?"svg":"body"),e.fake=!0),e}function f(e,t,r,s){var o,i,f,u,d="modernizr",c=a("div"),p=l();if(parseInt(r,10))for(;r--;)f=a("div"),f.id=s?s[r]:d+(r+1),c.appendChild(f);return o=a("style"),o.type="text/css",o.id="s"+d,(p.fake?p:c).appendChild(o),p.appendChild(c),o.styleSheet?o.styleSheet.cssText=e:o.appendChild(n.createTextNode(e)),c.id=d,p.fake&&(p.style.background="",p.style.overflow="hidden",u=C.style.overflow,C.style.overflow="hidden",C.appendChild(p)),i=t(c,e),p.fake?(p.parentNode.removeChild(p),C.style.overflow=u,C.offsetHeight):c.parentNode.removeChild(c),!!i}function u(e){return e.replace(/([A-Z])/g,function(e,n){return"-"+n.toLowerCase()}).replace(/^ms-/,"-ms-")}function d(n,r){var s=n.length;if("CSS"in e&&"supports"in e.CSS){for(;s--;)if(e.CSS.supports(u(n[s]),r))return!0;return!1}if("CSSSupportsRule"in e){for(var o=[];s--;)o.push("("+u(n[s])+":"+r+")");return o=o.join(" or "),f("@supports ("+o+") { #modernizr { position: absolute; } }",function(e){return"absolute"==getComputedStyle(e,null).position})}return t}function c(e){return e.replace(/([a-z])-([a-z])/g,function(e,n,t){return n+t.toUpperCase()}).replace(/^-/,"")}function p(e,n,s,o){function l(){u&&(delete E.style,delete E.modElem)}if(o=r(o,"undefined")?!1:o,!r(s,"undefined")){var f=d(e,s);if(!r(f,"undefined"))return f}for(var u,p,m,v,y,g=["modernizr","tspan"];!E.style;)u=!0,E.modElem=a(g.shift()),E.style=E.modElem.style;for(m=e.length,p=0;m>p;p++)if(v=e[p],y=E.style[v],i(v,"-")&&(v=c(v)),E.style[v]!==t){if(o||r(s,"undefined"))return l(),"pfx"==n?v:!0;try{E.style[v]=s}catch(h){}if(E.style[v]!=y)return l(),"pfx"==n?v:!0}return l(),!1}function m(e,n){return function(){return e.apply(n,arguments)}}function v(e,n,t){var s;for(var o in e)if(e[o]in n)return t===!1?e[o]:(s=n[e[o]],r(s,"function")?m(s,t||n):s);return!1}function y(e,n,t,s,o){var i=e.charAt(0).toUpperCase()+e.slice(1),a=(e+" "+N.join(i+" ")+i).split(" ");return r(n,"string")||r(n,"undefined")?p(a,n,s,o):(a=(e+" "+T.join(i+" ")+i).split(" "),v(a,n,t))}function g(e,n,r){return y(e,t,t,n,r)}var h=[],S={_version:"3.3.1",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,n){var t=this;setTimeout(function(){n(t[e])},0)},addTest:function(e,n,t){h.push({name:e,fn:n,options:t})},addAsyncTest:function(e){h.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=S,Modernizr=new Modernizr;var w=[],C=n.documentElement,x="svg"===C.nodeName.toLowerCase(),_="Moz O ms Webkit",N=S._config.usePrefixes?_.split(" "):[];S._cssomPrefixes=N;var b={elem:a("modernizr")};Modernizr._q.push(function(){delete b.elem});var E={style:b.elem.style};Modernizr._q.unshift(function(){delete E.style});var T=S._config.usePrefixes?_.toLowerCase().split(" "):[];S._domPrefixes=T,S.testAllProps=y,S.testAllProps=g,Modernizr.addTest("flexbox",g("flexBasis","1px",!0)),Modernizr.addTest("svg",!!n.createElementNS&&!!n.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect),Modernizr.addTest("json","JSON"in e&&"parse"in JSON&&"stringify"in JSON),Modernizr.addTest("target",function(){var n=e.document;if(!("querySelectorAll"in n))return!1;try{return n.querySelectorAll(":target"),!0}catch(t){return!1}}),Modernizr.addTest("cssanimations",g("animationName","a",!0)),s(),o(w),delete S.addTest,delete S.addAsyncTest;for(var P=0;P<Modernizr._q.length;P++)Modernizr._q[P]();e.Modernizr=Modernizr}(window,document);