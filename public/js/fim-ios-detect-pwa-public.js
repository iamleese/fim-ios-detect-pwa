(()=>{"use strict";var e={712:(e,t,n)=>{var o=/iPhone/i,r=/iPod/i,a=/iPad/i,i=/\biOS-universal(?:.+)Mac\b/i,s=/\bAndroid(?:.+)Mobile\b/i,c=/Android/i,d=/(?:SD4930UR|\bSilk(?:.+)Mobile\b)/i,u=/Silk/i,p=/Windows Phone/i,l=/\bWindows(?:.+)ARM\b/i,f=/BlackBerry/i,v=/BB10/i,m=/Opera Mini/i,h=/\b(CriOS|Chrome)(?:.+)Mobile/i,b=/Mobile(?:.+)Firefox\b/i,g=function(e){return void 0!==e&&"MacIntel"===e.platform&&"number"==typeof e.maxTouchPoints&&e.maxTouchPoints>1&&"undefined"==typeof MSStream};n(453);var y=window.navigator.userAgent,w=window.matchMedia("(display-mode: standalone)").matches,x=function(e){var t={userAgent:"",platform:"",maxTouchPoints:0};e||"undefined"==typeof navigator?"string"==typeof e?t.userAgent=e:e&&e.userAgent&&(t={userAgent:e.userAgent,platform:e.platform,maxTouchPoints:e.maxTouchPoints||0}):t={userAgent:navigator.userAgent,platform:navigator.platform,maxTouchPoints:navigator.maxTouchPoints||0};var n=t.userAgent,y=n.split("[FBAN");void 0!==y[1]&&(n=y[0]),void 0!==(y=n.split("Twitter"))[1]&&(n=y[0]);var w=function(e){return function(t){return t.test(e)}}(n),x={apple:{phone:w(o)&&!w(p),ipod:w(r),tablet:!w(o)&&(w(a)||g(t))&&!w(p),universal:w(i),device:(w(o)||w(r)||w(a)||w(i)||g(t))&&!w(p)},amazon:{phone:w(d),tablet:!w(d)&&w(u),device:w(d)||w(u)},android:{phone:!w(p)&&w(d)||!w(p)&&w(s),tablet:!w(p)&&!w(d)&&!w(s)&&(w(u)||w(c)),device:!w(p)&&(w(d)||w(u)||w(s)||w(c))||w(/\bokhttp\b/i)},windows:{phone:w(p),tablet:w(l),device:w(p)||w(l)},other:{blackberry:w(f),blackberry10:w(v),opera:w(m),firefox:w(b),chrome:w(h),device:w(f)||w(v)||w(m)||w(b)||w(h)},any:!1,phone:!1,tablet:!1};return x.any=x.apple.device||x.android.device||x.windows.device||x.other.device,x.phone=x.apple.phone||x.android.phone||x.windows.phone,x.tablet=x.apple.tablet||x.android.tablet||x.windows.tablet,x}(y).apple.device,T=document.getElementById("ios-pwa-cta-close"),M=document.getElementById("ios-pwa-cta"),A=window.location.host;setTimeout((function(){x&&!w&&function(e){for(var t=document.cookie.split(";"),n=0;n<t.length;n++){var o=t[n].split("=");if("ios-pwa-cta"==o[0].trim())return decodeURIComponent(o[1])}return null}()!=A&&M.classList.add("show")}),5e3),T.addEventListener("click",(function(){M.classList.remove("show"),Math.floor(Date.now()/1e3),function(e,t,n){var o=new Date;o.setTime(o.getTime()+2592e6);var r="expires="+o.toUTCString();document.cookie="ios-pwa-cta="+t+";"+r+";path=/"}(0,A)}))},483:(e,t,n)=>{n.d(t,{Z:()=>s});var o=n(81),r=n.n(o),a=n(645),i=n.n(a)()(r());i.push([e.id,"#ios-pwa-cta{display:none;background:#fff;padding:1em;width:80vw;border-radius:20px;position:fixed;z-index:999999;top:50%;left:50%;transform:translate(-50%, -50%);box-shadow:0 0 5px rgba(0,0,0,.2)}#ios-pwa-cta.show{display:block}#ios-pwa-cta button{display:block;margin:1em auto 0;clear:both;border-radius:20px;background-color:#5c73b4;color:#fff;border:0;box-shadow:none;text-transform:uppercase;padding:1em;cursor:pointer}",""]);const s=i},645:e=>{e.exports=function(e){var t=[];return t.toString=function(){return this.map((function(t){var n="",o=void 0!==t[5];return t[4]&&(n+="@supports (".concat(t[4],") {")),t[2]&&(n+="@media ".concat(t[2]," {")),o&&(n+="@layer".concat(t[5].length>0?" ".concat(t[5]):""," {")),n+=e(t),o&&(n+="}"),t[2]&&(n+="}"),t[4]&&(n+="}"),n})).join("")},t.i=function(e,n,o,r,a){"string"==typeof e&&(e=[[null,e,void 0]]);var i={};if(o)for(var s=0;s<this.length;s++){var c=this[s][0];null!=c&&(i[c]=!0)}for(var d=0;d<e.length;d++){var u=[].concat(e[d]);o&&i[u[0]]||(void 0!==a&&(void 0===u[5]||(u[1]="@layer".concat(u[5].length>0?" ".concat(u[5]):""," {").concat(u[1],"}")),u[5]=a),n&&(u[2]?(u[1]="@media ".concat(u[2]," {").concat(u[1],"}"),u[2]=n):u[2]=n),r&&(u[4]?(u[1]="@supports (".concat(u[4],") {").concat(u[1],"}"),u[4]=r):u[4]="".concat(r)),t.push(u))}},t}},81:e=>{e.exports=function(e){return e[1]}},453:(e,t,n)=>{var o=n(379),r=n.n(o),a=n(795),i=n.n(a),s=n(569),c=n.n(s),d=n(565),u=n.n(d),p=n(216),l=n.n(p),f=n(589),v=n.n(f),m=n(483),h={};h.styleTagTransform=v(),h.setAttributes=u(),h.insert=c().bind(null,"head"),h.domAPI=i(),h.insertStyleElement=l(),r()(m.Z,h),m.Z&&m.Z.locals&&m.Z.locals},379:e=>{var t=[];function n(e){for(var n=-1,o=0;o<t.length;o++)if(t[o].identifier===e){n=o;break}return n}function o(e,o){for(var a={},i=[],s=0;s<e.length;s++){var c=e[s],d=o.base?c[0]+o.base:c[0],u=a[d]||0,p="".concat(d," ").concat(u);a[d]=u+1;var l=n(p),f={css:c[1],media:c[2],sourceMap:c[3],supports:c[4],layer:c[5]};if(-1!==l)t[l].references++,t[l].updater(f);else{var v=r(f,o);o.byIndex=s,t.splice(s,0,{identifier:p,updater:v,references:1})}i.push(p)}return i}function r(e,t){var n=t.domAPI(t);return n.update(e),function(t){if(t){if(t.css===e.css&&t.media===e.media&&t.sourceMap===e.sourceMap&&t.supports===e.supports&&t.layer===e.layer)return;n.update(e=t)}else n.remove()}}e.exports=function(e,r){var a=o(e=e||[],r=r||{});return function(e){e=e||[];for(var i=0;i<a.length;i++){var s=n(a[i]);t[s].references--}for(var c=o(e,r),d=0;d<a.length;d++){var u=n(a[d]);0===t[u].references&&(t[u].updater(),t.splice(u,1))}a=c}}},569:e=>{var t={};e.exports=function(e,n){var o=function(e){if(void 0===t[e]){var n=document.querySelector(e);if(window.HTMLIFrameElement&&n instanceof window.HTMLIFrameElement)try{n=n.contentDocument.head}catch(e){n=null}t[e]=n}return t[e]}(e);if(!o)throw new Error("Couldn't find a style target. This probably means that the value for the 'insert' parameter is invalid.");o.appendChild(n)}},216:e=>{e.exports=function(e){var t=document.createElement("style");return e.setAttributes(t,e.attributes),e.insert(t,e.options),t}},565:(e,t,n)=>{e.exports=function(e){var t=n.nc;t&&e.setAttribute("nonce",t)}},795:e=>{e.exports=function(e){var t=e.insertStyleElement(e);return{update:function(n){!function(e,t,n){var o="";n.supports&&(o+="@supports (".concat(n.supports,") {")),n.media&&(o+="@media ".concat(n.media," {"));var r=void 0!==n.layer;r&&(o+="@layer".concat(n.layer.length>0?" ".concat(n.layer):""," {")),o+=n.css,r&&(o+="}"),n.media&&(o+="}"),n.supports&&(o+="}");var a=n.sourceMap;a&&"undefined"!=typeof btoa&&(o+="\n/*# sourceMappingURL=data:application/json;base64,".concat(btoa(unescape(encodeURIComponent(JSON.stringify(a))))," */")),t.styleTagTransform(o,e,t.options)}(t,e,n)},remove:function(){!function(e){if(null===e.parentNode)return!1;e.parentNode.removeChild(e)}(t)}}}},589:e=>{e.exports=function(e,t){if(t.styleSheet)t.styleSheet.cssText=e;else{for(;t.firstChild;)t.removeChild(t.firstChild);t.appendChild(document.createTextNode(e))}}}},t={};function n(o){var r=t[o];if(void 0!==r)return r.exports;var a=t[o]={id:o,exports:{}};return e[o](a,a.exports,n),a.exports}n.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return n.d(t,{a:t}),t},n.d=(e,t)=>{for(var o in t)n.o(t,o)&&!n.o(e,o)&&Object.defineProperty(e,o,{enumerable:!0,get:t[o]})},n.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),n.nc=void 0,n(712),n(453)})();