/*! jQuery v3.5.1 | (c) JS Foundation and other contributors | jquery.org/license */
!function(e,t){"use strict";"object"==typeof module&&"object"==typeof module.exports?module.exports=e.document?t(e,!0):function(e){if(!e.document)throw new Error("jQuery requires a window with a document");return t(e)}:t(e)}("undefined"!=typeof window?window:this,function(C,e){"use strict";var t=[],r=Object.getPrototypeOf,s=t.slice,g=t.flat?function(e){return t.flat.call(e)}:function(e){return t.concat.apply([],e)},u=t.push,i=t.indexOf,n={},o=n.toString,v=n.hasOwnProperty,a=v.toString,l=a.call(Object),y={},m=function(e){return"function"==typeof e&&"number"!=typeof e.nodeType},x=function(e){return null!=e&&e===e.window},E=C.document,c={type:!0,src:!0,nonce:!0,noModule:!0};function b(e,t,n){var r,i,o=(n=n||E).createElement("script");if(o.text=e,t)for(r in c)(i=t[r]||t.getAttribute&&t.getAttribute(r))&&o.setAttribute(r,i);n.head.appendChild(o).parentNode.removeChild(o)}function w(e){return null==e?e+"":"object"==typeof e||"function"==typeof e?n[o.call(e)]||"object":typeof e}var f="3.5.1",S=function(e,t){return new S.fn.init(e,t)};function p(e){var t=!!e&&"length"in e&&e.length,n=w(e);return!m(e)&&!x(e)&&("array"===n||0===t||"number"==typeof t&&0<t&&t-1 in e)}S.fn=S.prototype={jquery:f,constructor:S,length:0,toArray:function(){return s.call(this)},get:function(e){return null==e?s.call(this):e<0?this[e+this.length]:this[e]},pushStack:function(e){var t=S.merge(this.constructor(),e);return t.prevObject=this,t},each:function(e){return S.each(this,e)},map:function(n){return this.pushStack(S.map(this,function(e,t){return n.call(e,t,e)}))},slice:function(){return this.pushStack(s.apply(this,arguments))},first:function(){return this.eq(0)},last:function(){return this.eq(-1)},even:function(){return this.pushStack(S.grep(this,function(e,t){return(t+1)%2}))},odd:function(){return this.pushStack(S.grep(this,function(e,t){return t%2}))},eq:function(e){var t=this.length,n=+e+(e<0?t:0);return this.pushStack(0<=n&&n<t?[this[n]]:[])},end:function(){return this.prevObject||this.constructor()},push:u,sort:t.sort,splice:t.splice},S.extend=S.fn.extend=function(){var e,t,n,r,i,o,a=arguments[0]||{},s=1,u=arguments.length,l=!1;for("boolean"==typeof a&&(l=a,a=arguments[s]||{},s++),"object"==typeof a||m(a)||(a={}),s===u&&(a=this,s--);s<u;s++)if(null!=(e=arguments[s]))for(t in e)r=e[t],"__proto__"!==t&&a!==r&&(l&&r&&(S.isPlainObject(r)||(i=Array.isArray(r)))?(n=a[t],o=i&&!Array.isArray(n)?[]:i||S.isPlainObject(n)?n:{},i=!1,a[t]=S.extend(l,o,r)):void 0!==r&&(a[t]=r));return a},S.extend({expando:"jQuery"+(f+Math.random()).replace(/\D/g,""),isReady:!0,error:function(e){throw new Error(e)},noop:function(){},isPlainObject:function(e){var t,n;return!(!e||"[object Object]"!==o.call(e))&&(!(t=r(e))||"function"==typeof(n=v.call(t,"constructor")&&t.constructor)&&a.call(n)===l)},isEmptyObject:function(e){var t;for(t in e)return!1;return!0},globalEval:function(e,t,n){b(e,{nonce:t&&t.nonce},n)},each:function(e,t){var n,r=0;if(p(e)){for(n=e.length;r<n;r++)if(!1===t.call(e[r],r,e[r]))break}else for(r in e)if(!1===t.call(e[r],r,e[r]))break;return e},makeArray:function(e,t){var n=t||[];return null!=e&&(p(Object(e))?S.merge(n,"string"==typeof e?[e]:e):u.call(n,e)),n},inArray:function(e,t,n){return null==t?-1:i.call(t,e,n)},merge:function(e,t){for(var n=+t.length,r=0,i=e.length;r<n;r++)e[i++]=t[r];return e.length=i,e},grep:function(e,t,n){for(var r=[],i=0,o=e.length,a=!n;i<o;i++)!t(e[i],i)!==a&&r.push(e[i]);return r},map:function(e,t,n){var r,i,o=0,a=[];if(p(e))for(r=e.length;o<r;o++)null!=(i=t(e[o],o,n))&&a.push(i);else for(o in e)null!=(i=t(e[o],o,n))&&a.push(i);return g(a)},guid:1,support:y}),"function"==typeof Symbol&&(S.fn[Symbol.iterator]=t[Symbol.iterator]),S.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "),function(e,t){n["[object "+t+"]"]=t.toLowerCase()});var d=function(n){var e,d,b,o,i,h,f,g,w,u,l,T,C,a,E,v,s,c,y,S="sizzle"+1*new Date,p=n.document,k=0,r=0,m=ue(),x=ue(),A=ue(),N=ue(),D=function(e,t){return e===t&&(l=!0),0},j={}.hasOwnProperty,t=[],q=t.pop,L=t.push,H=t.push,O=t.slice,P=function(e,t){for(var n=0,r=e.length;n<r;n++)if(e[n]===t)return n;return-1},R="checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",M="[\\x20\\t\\r\\n\\f]",I="(?:\\\\[\\da-fA-F]{1,6}"+M+"?|\\\\[^\\r\\n\\f]|[\\w-]|[^\0-\\x7f])+",W="\\["+M+"*("+I+")(?:"+M+"*([*^$|!~]?=)"+M+"*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|("+I+"))|)"+M+"*\\]",F=":("+I+")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|"+W+")*)|.*)\\)|)",B=new RegExp(M+"+","g"),$=new RegExp("^"+M+"+|((?:^|[^\\\\])(?:\\\\.)*)"+M+"+$","g"),_=new RegExp("^"+M+"*,"+M+"*"),z=new RegExp("^"+M+"*([>+~]|"+M+")"+M+"*"),U=new RegExp(M+"|>"),X=new RegExp(F),V=new RegExp("^"+I+"$"),G={ID:new RegExp("^#("+I+")"),CLASS:new RegExp("^\\.("+I+")"),TAG:new RegExp("^("+I+"|[*])"),ATTR:new RegExp("^"+W),PSEUDO:new RegExp("^"+F),CHILD:new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\("+M+"*(even|odd|(([+-]|)(\\d*)n|)"+M+"*(?:([+-]|)"+M+"*(\\d+)|))"+M+"*\\)|)","i"),bool:new RegExp("^(?:"+R+")$","i"),needsContext:new RegExp("^"+M+"*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\("+M+"*((?:-\\d)?\\d*)"+M+"*\\)|)(?=[^-]|$)","i")},Y=/HTML$/i,Q=/^(?:input|select|textarea|button)$/i,J=/^h\d$/i,K=/^[^{]+\{\s*\[native \w/,Z=/^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,ee=/[+~]/,te=new RegExp("\\\\[\\da-fA-F]{1,6}"+M+"?|\\\\([^\\r\\n\\f])","g"),ne=function(e,t){var n="0x"+e.slice(1)-65536;return t||(n<0?String.fromCharCode(n+65536):String.fromCharCode(n>>10|55296,1023&n|56320))},re=/([\0-\x1f\x7f]|^-?\d)|^-$|[^\0-\x1f\x7f-\uFFFF\w-]/g,ie=function(e,t){return t?"\0"===e?"\ufffd":e.slice(0,-1)+"\\"+e.charCodeAt(e.length-1).toString(16)+" ":"\\"+e},oe=function(){T()},ae=be(function(e){return!0===e.disabled&&"fieldset"===e.nodeName.toLowerCase()},{dir:"parentNode",next:"legend"});try{H.apply(t=O.call(p.childNodes),p.childNodes),t[p.childNodes.length].nodeType}catch(e){H={apply:t.length?function(e,t){L.apply(e,O.call(t))}:function(e,t){var n=e.length,r=0;while(e[n++]=t[r++]);e.length=n-1}}}function se(t,e,n,r){var i,o,a,s,u,l,c,f=e&&e.ownerDocument,p=e?e.nodeType:9;if(n=n||[],"string"!=typeof t||!t||1!==p&&9!==p&&11!==p)return n;if(!r&&(T(e),e=e||C,E)){if(11!==p&&(u=Z.exec(t)))if(i=u[1]){if(9===p){if(!(a=e.getElementById(i)))return n;if(a.id===i)return n.push(a),n}else if(f&&(a=f.getElementById(i))&&y(e,a)&&a.id===i)return n.push(a),n}else{if(u[2])return H.apply(n,e.getElementsByTagName(t)),n;if((i=u[3])&&d.getElementsByClassName&&e.getElementsByClassName)return H.apply(n,e.getElementsByClassName(i)),n}if(d.qsa&&!N[t+" "]&&(!v||!v.test(t))&&(1!==p||"object"!==e.nodeName.toLowerCase())){if(c=t,f=e,1===p&&(U.test(t)||z.test(t))){(f=ee.test(t)&&ye(e.parentNode)||e)===e&&d.scope||((s=e.getAttribute("id"))?s=s.replace(re,ie):e.setAttribute("id",s=S)),o=(l=h(t)).length;while(o--)l[o]=(s?"#"+s:":scope")+" "+xe(l[o]);c=l.join(",")}try{return H.apply(n,f.querySelectorAll(c)),n}catch(e){N(t,!0)}finally{s===S&&e.removeAttribute("id")}}}return g(t.replace($,"$1"),e,n,r)}function ue(){var r=[];return function e(t,n){return r.push(t+" ")>b.cacheLength&&delete e[r.shift()],e[t+" "]=n}}function le(e){return e[S]=!0,e}function ce(e){var t=C.createElement("fieldset");try{return!!e(t)}catch(e){return!1}finally{t.parentNode&&t.parentNode.removeChild(t),t=null}}function fe(e,t){var n=e.split("|"),r=n.length;while(r--)b.attrHandle[n[r]]=t}function pe(e,t){var n=t&&e,r=n&&1===e.nodeType&&1===t.nodeType&&e.sourceIndex-t.sourceIndex;if(r)return r;if(n)while(n=n.nextSibling)if(n===t)return-1;return e?1:-1}function de(t){return function(e){return"input"===e.nodeName.toLowerCase()&&e.type===t}}function he(n){return function(e){var t=e.nodeName.toLowerCase();return("input"===t||"button"===t)&&e.type===n}}function ge(t){return function(e){return"form"in e?e.parentNode&&!1===e.disabled?"label"in e?"label"in e.parentNode?e.parentNode.disabled===t:e.disabled===t:e.isDisabled===t||e.isDisabled!==!t&&ae(e)===t:e.disabled===t:"label"in e&&e.disabled===t}}function ve(a){return le(function(o){return o=+o,le(function(e,t){var n,r=a([],e.length,o),i=r.length;while(i--)e[n=r[i]]&&(e[n]=!(t[n]=e[n]))})})}function ye(e){return e&&"undefined"!=typeof e.getElementsByTagName&&e}for(e in d=se.support={},i=se.isXML=function(e){var t=e.namespaceURI,n=(e.ownerDocument||e).documentElement;return!Y.test(t||n&&n.nodeName||"HTML")},T=se.setDocument=function(e){var t,n,r=e?e.ownerDocument||e:p;return r!=C&&9===r.nodeType&&r.documentElement&&(a=(C=r).documentElement,E=!i(C),p!=C&&(n=C.defaultView)&&n.top!==n&&(n.addEventListener?n.addEventListener("unload",oe,!1):n.attachEvent&&n.attachEvent("onunload",oe)),d.scope=ce(function(e){return a.appendChild(e).appendChild(C.createElement("div")),"undefined"!=typeof e.querySelectorAll&&!e.querySelectorAll(":scope fieldset div").length}),d.attributes=ce(function(e){return e.className="i",!e.getAttribute("className")}),d.getElementsByTagName=ce(function(e){return e.appendChild(C.createComment("")),!e.getElementsByTagName("*").length}),d.getElementsByClassName=K.test(C.getElementsByClassName),d.getById=ce(function(e){return a.appendChild(e).id=S,!C.getElementsByName||!C.getElementsByName(S).length}),d.getById?(b.filter.ID=function(e){var t=e.replace(te,ne);return function(e){return e.getAttribute("id")===t}},b.find.ID=function(e,t){if("undefined"!=typeof t.getElementById&&E){var n=t.getElementById(e);return n?[n]:[]}}):(b.filter.ID=function(e){var n=e.replace(te,ne);return function(e){var t="undefined"!=typeof e.getAttributeNode&&e.getAttributeNode("id");return t&&t.value===n}},b.find.ID=function(e,t){if("undefined"!=typeof t.getElementById&&E){var n,r,i,o=t.getElementById(e);if(o){if((n=o.getAttributeNode("id"))&&n.value===e)return[o];i=t.getElementsByName(e),r=0;while(o=i[r++])if((n=o.getAttributeNode("id"))&&n.value===e)return[o]}return[]}}),b.find.TAG=d.getElementsByTagName?function(e,t){return"undefined"!=typeof t.getElementsByTagName?t.getElementsByTagName(e):d.qsa?t.querySelectorAll(e):void 0}:function(e,t){var n,r=[],i=0,o=t.getElementsByTagName(e);if("*"===e){while(n=o[i++])1===n.nodeType&&r.push(n);return r}return o},b.find.CLASS=d.getElementsByClassName&&function(e,t){if("undefined"!=typeof t.getElementsByClassName&&E)return t.getElementsByClassName(e)},s=[],v=[],(d.qsa=K.test(C.querySelectorAll))&&(ce(function(e){var t;a.appendChild(e).innerHTML="<a id='"+S+"'></a><select id='"+S+"-\r\\' msallowcapture=''><option selected=''></option></select>",e.querySelectorAll("[msallowcapture^='']").length&&v.push("[*^$]="+M+"*(?:''|\"\")"),e.querySelectorAll("[selected]").length||v.push("\\["+M+"*(?:value|"+R+")"),e.querySelectorAll("[id~="+S+"-]").length||v.push("~="),(t=C.createElement("input")).setAttribute("name",""),e.appendChild(t),e.querySelectorAll("[name='']").length||v.push("\\["+M+"*name"+M+"*="+M+"*(?:''|\"\")"),e.querySelectorAll(":checked").length||v.push(":checked"),e.querySelectorAll("a#"+S+"+*").length||v.push(".#.+[+~]"),e.querySelectorAll("\\\f"),v.push("[\\r\\n\\f]")}),ce(function(e){e.innerHTML="<a href='' disabled='disabled'></a><select disabled='disabled'><option/></select>";var t=C.createElement("input");t.setAttribute("type","hidden"),e.appendChild(t).setAttribute("name","D"),e.querySelectorAll("[name=d]").length&&v.push("name"+M+"*[*^$|!~]?="),2!==e.querySelectorAll(":enabled").length&&v.push(":enabled",":disabled"),a.appendChild(e).disabled=!0,2!==e.querySelectorAll(":disabled").length&&v.push(":enabled",":disabled"),e.querySelectorAll("*,:x"),v.push(",.*:")})),(d.matchesSelector=K.test(c=a.matches||a.webkitMatchesSelector||a.mozMatchesSelector||a.oMatchesSelector||a.msMatchesSelector))&&ce(function(e){d.disconnectedMatch=c.call(e,"*"),c.call(e,"[s!='']:x"),s.push("!=",F)}),v=v.length&&new RegExp(v.join("|")),s=s.length&&new RegExp(s.join("|")),t=K.test(a.compareDocumentPosition),y=t||K.test(a.contains)?function(e,t){var n=9===e.nodeType?e.documentElement:e,r=t&&t.parentNode;return e===r||!(!r||1!==r.nodeType||!(n.contains?n.contains(r):e.compareDocumentPosition&&16&e.compareDocumentPosition(r)))}:function(e,t){if(t)while(t=t.parentNode)if(t===e)return!0;return!1},D=t?function(e,t){if(e===t)return l=!0,0;var n=!e.compareDocumentPosition-!t.compareDocumentPosition;return n||(1&(n=(e.ownerDocument||e)==(t.ownerDocument||t)?e.compareDocumentPosition(t):1)||!d.sortDetached&&t.compareDocumentPosition(e)===n?e==C||e.ownerDocument==p&&y(p,e)?-1:t==C||t.ownerDocument==p&&y(p,t)?1:u?P(u,e)-P(u,t):0:4&n?-1:1)}:function(e,t){if(e===t)return l=!0,0;var n,r=0,i=e.parentNode,o=t.parentNode,a=[e],s=[t];if(!i||!o)return e==C?-1:t==C?1:i?-1:o?1:u?P(u,e)-P(u,t):0;if(i===o)return pe(e,t);n=e;while(n=n.parentNode)a.unshift(n);n=t;while(n=n.parentNode)s.unshift(n);while(a[r]===s[r])r++;return r?pe(a[r],s[r]):a[r]==p?-1:s[r]==p?1:0}),C},se.matches=function(e,t){return se(e,null,null,t)},se.matchesSelector=function(e,t){if(T(e),d.matchesSelector&&E&&!N[t+" "]&&(!s||!s.test(t))&&(!v||!v.test(t)))try{var n=c.call(e,t);if(n||d.disconnectedMatch||e.document&&11!==e.document.nodeType)return n}catch(e){N(t,!0)}return 0<se(t,C,null,[e]).length},se.contains=function(e,t){return(e.ownerDocument||e)!=C&&T(e),y(e,t)},se.attr=function(e,t){(e.ownerDocument||e)!=C&&T(e);var n=b.attrHandle[t.toLowerCase()],r=n&&j.call(b.attrHandle,t.toLowerCase())?n(e,t,!E):void 0;return void 0!==r?r:d.attributes||!E?e.getAttribute(t):(r=e.getAttributeNode(t))&&r.specified?r.value:null},se.escape=function(e){return(e+"").replace(re,ie)},se.error=function(e){throw new Error("Syntax error, unrecognized expression: "+e)},se.uniqueSort=function(e){var t,n=[],r=0,i=0;if(l=!d.detectDuplicates,u=!d.sortStable&&e.slice(0),e.sort(D),l){while(t=e[i++])t===e[i]&&(r=n.push(i));while(r--)e.splice(n[r],1)}return u=null,e},o=se.getText=function(e){var t,n="",r=0,i=e.nodeType;if(i){if(1===i||9===i||11===i){if("string"==typeof e.textContent)return e.textContent;for(e=e.firstChild;e;e=e.nextSibling)n+=o(e)}else if(3===i||4===i)return e.nodeValue}else while(t=e[r++])n+=o(t);return n},(b=se.selectors={cacheLength:50,createPseudo:le,match:G,attrHandle:{},find:{},relative:{">":{dir:"parentNode",first:!0}," ":{dir:"parentNode"},"+":{dir:"previousSibling",first:!0},"~":{dir:"previousSibling"}},preFilter:{ATTR:function(e){return e[1]=e[1].replace(te,ne),e[3]=(e[3]||e[4]||e[5]||"").replace(te,ne),"~="===e[2]&&(e[3]=" "+e[3]+" "),e.slice(0,4)},CHILD:function(e){return e[1]=e[1].toLowerCase(),"nth"===e[1].slice(0,3)?(e[3]||se.error(e[0]),e[4]=+(e[4]?e[5]+(e[6]||1):2*("even"===e[3]||"odd"===e[3])),e[5]=+(e[7]+e[8]||"odd"===e[3])):e[3]&&se.error(e[0]),e},PSEUDO:function(e){var t,n=!e[6]&&e[2];return G.CHILD.test(e[0])?null:(e[3]?e[2]=e[4]||e[5]||"":n&&X.test(n)&&(t=h(n,!0))&&(t=n.indexOf(")",n.length-t)-n.length)&&(e[0]=e[0].slice(0,t),e[2]=n.slice(0,t)),e.slice(0,3))}},filter:{TAG:function(e){var t=e.replace(te,ne).toLowerCase();return"*"===e?function(){return!0}:function(e){return e.nodeName&&e.nodeName.toLowerCase()===t}},CLASS:function(e){var t=m[e+" "];return t||(t=new RegExp("(^|"+M+")"+e+"("+M+"|$)"))&&m(e,function(e){return t.test("string"==typeof e.className&&e.className||"undefined"!=typeof e.getAttribute&&e.getAttribute("class")||"")})},ATTR:function(n,r,i){return function(e){var t=se.attr(e,n);return null==t?"!="===r:!r||(t+="","="===r?t===i:"!="===r?t!==i:"^="===r?i&&0===t.indexOf(i):"*="===r?i&&-1<t.indexOf(i):"$="===r?i&&t.slice(-i.length)===i:"~="===r?-1<(" "+t.replace(B," ")+" ").indexOf(i):"|="===r&&(t===i||t.slice(0,i.length+1)===i+"-"))}},CHILD:function(h,e,t,g,v){var y="nth"!==h.slice(0,3),m="last"!==h.slice(-4),x="of-type"===e;return 1===g&&0===v?function(e){return!!e.parentNode}:function(e,t,n){var r,i,o,a,s,u,l=y!==m?"nextSibling":"previousSibling",c=e.parentNode,f=x&&e.nodeName.toLowerCase(),p=!n&&!x,d=!1;if(c){if(y){while(l){a=e;while(a=a[l])if(x?a.nodeName.toLowerCase()===f:1===a.nodeType)return!1;u=l="only"===h&&!u&&"nextSibling"}return!0}if(u=[m?c.firstChild:c.lastChild],m&&p){d=(s=(r=(i=(o=(a=c)[S]||(a[S]={}))[a.uniqueID]||(o[a.uniqueID]={}))[h]||[])[0]===k&&r[1])&&r[2],a=s&&c.childNodes[s];while(a=++s&&a&&a[l]||(d=s=0)||u.pop())if(1===a.nodeType&&++d&&a===e){i[h]=[k,s,d];break}}else if(p&&(d=s=(r=(i=(o=(a=e)[S]||(a[S]={}))[a.uniqueID]||(o[a.uniqueID]={}))[h]||[])[0]===k&&r[1]),!1===d)while(a=++s&&a&&a[l]||(d=s=0)||u.pop())if((x?a.nodeName.toLowerCase()===f:1===a.nodeType)&&++d&&(p&&((i=(o=a[S]||(a[S]={}))[a.uniqueID]||(o[a.uniqueID]={}))[h]=[k,d]),a===e))break;return(d-=v)===g||d%g==0&&0<=d/g}}},PSEUDO:function(e,o){var t,a=b.pseudos[e]||b.setFilters[e.toLowerCase()]||se.error("unsupported pseudo: "+e);return a[S]?a(o):1<a.length?(t=[e,e,"",o],b.setFilters.hasOwnProperty(e.toLowerCase())?le(function(e,t){var n,r=a(e,o),i=r.length;while(i--)e[n=P(e,r[i])]=!(t[n]=r[i])}):function(e){return a(e,0,t)}):a}},pseudos:{not:le(function(e){var r=[],i=[],s=f(e.replace($,"$1"));return s[S]?le(function(e,t,n,r){var i,o=s(e,null,r,[]),a=e.length;while(a--)(i=o[a])&&(e[a]=!(t[a]=i))}):function(e,t,n){return r[0]=e,s(r,null,n,i),r[0]=null,!i.pop()}}),has:le(function(t){return function(e){return 0<se(t,e).length}}),contains:le(function(t){return t=t.replace(te,ne),function(e){return-1<(e.textContent||o(e)).indexOf(t)}}),lang:le(function(n){return V.test(n||"")||se.error("unsupported lang: "+n),n=n.replace(te,ne).toLowerCase(),function(e){var t;do{if(t=E?e.lang:e.getAttribute("xml:lang")||e.getAttribute("lang"))return(t=t.toLowerCase())===n||0===t.indexOf(n+"-")}while((e=e.parentNode)&&1===e.nodeType);return!1}}),target:function(e){var t=n.location&&n.location.hash;return t&&t.slice(1)===e.id},root:function(e){return e===a},focus:function(e){return e===C.activeElement&&(!C.hasFocus||C.hasFocus())&&!!(e.type||e.href||~e.tabIndex)},enabled:ge(!1),disabled:ge(!0),checked:function(e){var t=e.nodeName.toLowerCase();return"input"===t&&!!e.checked||"option"===t&&!!e.selected},selected:function(e){return e.parentNode&&e.parentNode.selectedIndex,!0===e.selected},empty:function(e){for(e=e.firstChild;e;e=e.nextSibling)if(e.nodeType<6)return!1;return!0},parent:function(e){return!b.pseudos.empty(e)},header:function(e){return J.test(e.nodeName)},input:function(e){return Q.test(e.nodeName)},button:function(e){var t=e.nodeName.toLowerCase();return"input"===t&&"button"===e.type||"button"===t},text:function(e){var t;return"input"===e.nodeName.toLowerCase()&&"text"===e.type&&(null==(t=e.getAttribute("type"))||"text"===t.toLowerCase())},first:ve(function(){return[0]}),last:ve(function(e,t){return[t-1]}),eq:ve(function(e,t,n){return[n<0?n+t:n]}),even:ve(function(e,t){for(var n=0;n<t;n+=2)e.push(n);return e}),odd:ve(function(e,t){for(var n=1;n<t;n+=2)e.push(n);return e}),lt:ve(function(e,t,n){for(var r=n<0?n+t:t<n?t:n;0<=--r;)e.push(r);return e}),gt:ve(function(e,t,n){for(var r=n<0?n+t:n;++r<t;)e.push(r);return e})}}).pseudos.nth=b.pseudos.eq,{radio:!0,checkbox:!0,file:!0,password:!0,image:!0})b.pseudos[e]=de(e);for(e in{submit:!0,reset:!0})b.pseudos[e]=he(e);function me(){}function xe(e){for(var t=0,n=e.length,r="";t<n;t++)r+=e[t].value;return r}function be(s,e,t){var u=e.dir,l=e.next,c=l||u,f=t&&"parentNode"===c,p=r++;return e.first?function(e,t,n){while(e=e[u])if(1===e.nodeType||f)return s(e,t,n);return!1}:function(e,t,n){var r,i,o,a=[k,p];if(n){while(e=e[u])if((1===e.nodeType||f)&&s(e,t,n))return!0}else while(e=e[u])if(1===e.nodeType||f)if(i=(o=e[S]||(e[S]={}))[e.uniqueID]||(o[e.uniqueID]={}),l&&l===e.nodeName.toLowerCase())e=e[u]||e;else{if((r=i[c])&&r[0]===k&&r[1]===p)return a[2]=r[2];if((i[c]=a)[2]=s(e,t,n))return!0}return!1}}function we(i){return 1<i.length?function(e,t,n){var r=i.length;while(r--)if(!i[r](e,t,n))return!1;return!0}:i[0]}function Te(e,t,n,r,i){for(var o,a=[],s=0,u=e.length,l=null!=t;s<u;s++)(o=e[s])&&(n&&!n(o,r,i)||(a.push(o),l&&t.push(s)));return a}function Ce(d,h,g,v,y,e){return v&&!v[S]&&(v=Ce(v)),y&&!y[S]&&(y=Ce(y,e)),le(function(e,t,n,r){var i,o,a,s=[],u=[],l=t.length,c=e||function(e,t,n){for(var r=0,i=t.length;r<i;r++)se(e,t[r],n);return n}(h||"*",n.nodeType?[n]:n,[]),f=!d||!e&&h?c:Te(c,s,d,n,r),p=g?y||(e?d:l||v)?[]:t:f;if(g&&g(f,p,n,r),v){i=Te(p,u),v(i,[],n,r),o=i.length;while(o--)(a=i[o])&&(p[u[o]]=!(f[u[o]]=a))}if(e){if(y||d){if(y){i=[],o=p.length;while(o--)(a=p[o])&&i.push(f[o]=a);y(null,p=[],i,r)}o=p.length;while(o--)(a=p[o])&&-1<(i=y?P(e,a):s[o])&&(e[i]=!(t[i]=a))}}else p=Te(p===t?p.splice(l,p.length):p),y?y(null,t,p,r):H.apply(t,p)})}function Ee(e){for(var i,t,n,r=e.length,o=b.relative[e[0].type],a=o||b.relative[" "],s=o?1:0,u=be(function(e){return e===i},a,!0),l=be(function(e){return-1<P(i,e)},a,!0),c=[function(e,t,n){var r=!o&&(n||t!==w)||((i=t).nodeType?u(e,t,n):l(e,t,n));return i=null,r}];s<r;s++)if(t=b.relative[e[s].type])c=[be(we(c),t)];else{if((t=b.filter[e[s].type].apply(null,e[s].matches))[S]){for(n=++s;n<r;n++)if(b.relative[e[n].type])break;return Ce(1<s&&we(c),1<s&&xe(e.slice(0,s-1).concat({value:" "===e[s-2].type?"*":""})).replace($,"$1"),t,s<n&&Ee(e.slice(s,n)),n<r&&Ee(e=e.slice(n)),n<r&&xe(e))}c.push(t)}return we(c)}return me.prototype=b.filters=b.pseudos,b.setFilters=new me,h=se.tokenize=function(e,t){var n,r,i,o,a,s,u,l=x[e+" "];if(l)return t?0:l.slice(0);a=e,s=[],u=b.preFilter;while(a){for(o in n&&!(r=_.exec(a))||(r&&(a=a.slice(r[0].length)||a),s.push(i=[])),n=!1,(r=z.exec(a))&&(n=r.shift(),i.push({value:n,type:r[0].replace($," ")}),a=a.slice(n.length)),b.filter)!(r=G[o].exec(a))||u[o]&&!(r=u[o](r))||(n=r.shift(),i.push({value:n,type:o,matches:r}),a=a.slice(n.length));if(!n)break}return t?a.length:a?se.error(e):x(e,s).slice(0)},f=se.compile=function(e,t){var n,v,y,m,x,r,i=[],o=[],a=A[e+" "];if(!a){t||(t=h(e)),n=t.length;while(n--)(a=Ee(t[n]))[S]?i.push(a):o.push(a);(a=A(e,(v=o,m=0<(y=i).length,x=0<v.length,r=function(e,t,n,r,i){var o,a,s,u=0,l="0",c=e&&[],f=[],p=w,d=e||x&&b.find.TAG("*",i),h=k+=null==p?1:Math.random()||.1,g=d.length;for(i&&(w=t==C||t||i);l!==g&&null!=(o=d[l]);l++){if(x&&o){a=0,t||o.ownerDocument==C||(T(o),n=!E);while(s=v[a++])if(s(o,t||C,n)){r.push(o);break}i&&(k=h)}m&&((o=!s&&o)&&u--,e&&c.push(o))}if(u+=l,m&&l!==u){a=0;while(s=y[a++])s(c,f,t,n);if(e){if(0<u)while(l--)c[l]||f[l]||(f[l]=q.call(r));f=Te(f)}H.apply(r,f),i&&!e&&0<f.length&&1<u+y.length&&se.uniqueSort(r)}return i&&(k=h,w=p),c},m?le(r):r))).selector=e}return a},g=se.select=function(e,t,n,r){var i,o,a,s,u,l="function"==typeof e&&e,c=!r&&h(e=l.selector||e);if(n=n||[],1===c.length){if(2<(o=c[0]=c[0].slice(0)).length&&"ID"===(a=o[0]).type&&9===t.nodeType&&E&&b.relative[o[1].type]){if(!(t=(b.find.ID(a.matches[0].replace(te,ne),t)||[])[0]))return n;l&&(t=t.parentNode),e=e.slice(o.shift().value.length)}i=G.needsContext.test(e)?0:o.length;while(i--){if(a=o[i],b.relative[s=a.type])break;if((u=b.find[s])&&(r=u(a.matches[0].replace(te,ne),ee.test(o[0].type)&&ye(t.parentNode)||t))){if(o.splice(i,1),!(e=r.length&&xe(o)))return H.apply(n,r),n;break}}}return(l||f(e,c))(r,t,!E,n,!t||ee.test(e)&&ye(t.parentNode)||t),n},d.sortStable=S.split("").sort(D).join("")===S,d.detectDuplicates=!!l,T(),d.sortDetached=ce(function(e){return 1&e.compareDocumentPosition(C.createElement("fieldset"))}),ce(function(e){return e.innerHTML="<a href='#'></a>","#"===e.firstChild.getAttribute("href")})||fe("type|href|height|width",function(e,t,n){if(!n)return e.getAttribute(t,"type"===t.toLowerCase()?1:2)}),d.attributes&&ce(function(e){return e.innerHTML="<input/>",e.firstChild.setAttribute("value",""),""===e.firstChild.getAttribute("value")})||fe("value",function(e,t,n){if(!n&&"input"===e.nodeName.toLowerCase())return e.defaultValue}),ce(function(e){return null==e.getAttribute("disabled")})||fe(R,function(e,t,n){var r;if(!n)return!0===e[t]?t.toLowerCase():(r=e.getAttributeNode(t))&&r.specified?r.value:null}),se}(C);S.find=d,S.expr=d.selectors,S.expr[":"]=S.expr.pseudos,S.uniqueSort=S.unique=d.uniqueSort,S.text=d.getText,S.isXMLDoc=d.isXML,S.contains=d.contains,S.escapeSelector=d.escape;var h=function(e,t,n){var r=[],i=void 0!==n;while((e=e[t])&&9!==e.nodeType)if(1===e.nodeType){if(i&&S(e).is(n))break;r.push(e)}return r},T=function(e,t){for(var n=[];e;e=e.nextSibling)1===e.nodeType&&e!==t&&n.push(e);return n},k=S.expr.match.needsContext;function A(e,t){return e.nodeName&&e.nodeName.toLowerCase()===t.toLowerCase()}var N=/^<([a-z][^\/\0>:\x20\t\r\n\f]*)[\x20\t\r\n\f]*\/?>(?:<\/\1>|)$/i;function D(e,n,r){return m(n)?S.grep(e,function(e,t){return!!n.call(e,t,e)!==r}):n.nodeType?S.grep(e,function(e){return e===n!==r}):"string"!=typeof n?S.grep(e,function(e){return-1<i.call(n,e)!==r}):S.filter(n,e,r)}S.filter=function(e,t,n){var r=t[0];return n&&(e=":not("+e+")"),1===t.length&&1===r.nodeType?S.find.matchesSelector(r,e)?[r]:[]:S.find.matches(e,S.grep(t,function(e){return 1===e.nodeType}))},S.fn.extend({find:function(e){var t,n,r=this.length,i=this;if("string"!=typeof e)return this.pushStack(S(e).filter(function(){for(t=0;t<r;t++)if(S.contains(i[t],this))return!0}));for(n=this.pushStack([]),t=0;t<r;t++)S.find(e,i[t],n);return 1<r?S.uniqueSort(n):n},filter:function(e){return this.pushStack(D(this,e||[],!1))},not:function(e){return this.pushStack(D(this,e||[],!0))},is:function(e){return!!D(this,"string"==typeof e&&k.test(e)?S(e):e||[],!1).length}});var j,q=/^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]+))$/;(S.fn.init=function(e,t,n){var r,i;if(!e)return this;if(n=n||j,"string"==typeof e){if(!(r="<"===e[0]&&">"===e[e.length-1]&&3<=e.length?[null,e,null]:q.exec(e))||!r[1]&&t)return!t||t.jquery?(t||n).find(e):this.constructor(t).find(e);if(r[1]){if(t=t instanceof S?t[0]:t,S.merge(this,S.parseHTML(r[1],t&&t.nodeType?t.ownerDocument||t:E,!0)),N.test(r[1])&&S.isPlainObject(t))for(r in t)m(this[r])?this[r](t[r]):this.attr(r,t[r]);return this}return(i=E.getElementById(r[2]))&&(this[0]=i,this.length=1),this}return e.nodeType?(this[0]=e,this.length=1,this):m(e)?void 0!==n.ready?n.ready(e):e(S):S.makeArray(e,this)}).prototype=S.fn,j=S(E);var L=/^(?:parents|prev(?:Until|All))/,H={children:!0,contents:!0,next:!0,prev:!0};function O(e,t){while((e=e[t])&&1!==e.nodeType);return e}S.fn.extend({has:function(e){var t=S(e,this),n=t.length;return this.filter(function(){for(var e=0;e<n;e++)if(S.contains(this,t[e]))return!0})},closest:function(e,t){var n,r=0,i=this.length,o=[],a="string"!=typeof e&&S(e);if(!k.test(e))for(;r<i;r++)for(n=this[r];n&&n!==t;n=n.parentNode)if(n.nodeType<11&&(a?-1<a.index(n):1===n.nodeType&&S.find.matchesSelector(n,e))){o.push(n);break}return this.pushStack(1<o.length?S.uniqueSort(o):o)},index:function(e){return e?"string"==typeof e?i.call(S(e),this[0]):i.call(this,e.jquery?e[0]:e):this[0]&&this[0].parentNode?this.first().prevAll().length:-1},add:function(e,t){return this.pushStack(S.uniqueSort(S.merge(this.get(),S(e,t))))},addBack:function(e){return this.add(null==e?this.prevObject:this.prevObject.filter(e))}}),S.each({parent:function(e){var t=e.parentNode;return t&&11!==t.nodeType?t:null},parents:function(e){return h(e,"parentNode")},parentsUntil:function(e,t,n){return h(e,"parentNode",n)},next:function(e){return O(e,"nextSibling")},prev:function(e){return O(e,"previousSibling")},nextAll:function(e){return h(e,"nextSibling")},prevAll:function(e){return h(e,"previousSibling")},nextUntil:function(e,t,n){return h(e,"nextSibling",n)},prevUntil:function(e,t,n){return h(e,"previousSibling",n)},siblings:function(e){return T((e.parentNode||{}).firstChild,e)},children:function(e){return T(e.firstChild)},contents:function(e){return null!=e.contentDocument&&r(e.contentDocument)?e.contentDocument:(A(e,"template")&&(e=e.content||e),S.merge([],e.childNodes))}},function(r,i){S.fn[r]=function(e,t){var n=S.map(this,i,e);return"Until"!==r.slice(-5)&&(t=e),t&&"string"==typeof t&&(n=S.filter(t,n)),1<this.length&&(H[r]||S.uniqueSort(n),L.test(r)&&n.reverse()),this.pushStack(n)}});var P=/[^\x20\t\r\n\f]+/g;function R(e){return e}function M(e){throw e}function I(e,t,n,r){var i;try{e&&m(i=e.promise)?i.call(e).done(t).fail(n):e&&m(i=e.then)?i.call(e,t,n):t.apply(void 0,[e].slice(r))}catch(e){n.apply(void 0,[e])}}S.Callbacks=function(r){var e,n;r="string"==typeof r?(e=r,n={},S.each(e.match(P)||[],function(e,t){n[t]=!0}),n):S.extend({},r);var i,t,o,a,s=[],u=[],l=-1,c=function(){for(a=a||r.once,o=i=!0;u.length;l=-1){t=u.shift();while(++l<s.length)!1===s[l].apply(t[0],t[1])&&r.stopOnFalse&&(l=s.length,t=!1)}r.memory||(t=!1),i=!1,a&&(s=t?[]:"")},f={add:function(){return s&&(t&&!i&&(l=s.length-1,u.push(t)),function n(e){S.each(e,function(e,t){m(t)?r.unique&&f.has(t)||s.push(t):t&&t.length&&"string"!==w(t)&&n(t)})}(arguments),t&&!i&&c()),this},remove:function(){return S.each(arguments,function(e,t){var n;while(-1<(n=S.inArray(t,s,n)))s.splice(n,1),n<=l&&l--}),this},has:function(e){return e?-1<S.inArray(e,s):0<s.length},empty:function(){return s&&(s=[]),this},disable:function(){return a=u=[],s=t="",this},disabled:function(){return!s},lock:function(){return a=u=[],t||i||(s=t=""),this},locked:function(){return!!a},fireWith:function(e,t){return a||(t=[e,(t=t||[]).slice?t.slice():t],u.push(t),i||c()),this},fire:function(){return f.fireWith(this,arguments),this},fired:function(){return!!o}};return f},S.extend({Deferred:function(e){var o=[["notify","progress",S.Callbacks("memory"),S.Callbacks("memory"),2],["resolve","done",S.Callbacks("once memory"),S.Callbacks("once memory"),0,"resolved"],["reject","fail",S.Callbacks("once memory"),S.Callbacks("once memory"),1,"rejected"]],i="pending",a={state:function(){return i},always:function(){return s.done(arguments).fail(arguments),this},"catch":function(e){return a.then(null,e)},pipe:function(){var i=arguments;return S.Deferred(function(r){S.each(o,function(e,t){var n=m(i[t[4]])&&i[t[4]];s[t[1]](function(){var e=n&&n.apply(this,arguments);e&&m(e.promise)?e.promise().progress(r.notify).done(r.resolve).fail(r.reject):r[t[0]+"With"](this,n?[e]:arguments)})}),i=null}).promise()},then:function(t,n,r){var u=0;function l(i,o,a,s){return function(){var n=this,r=arguments,e=function(){var e,t;if(!(i<u)){if((e=a.apply(n,r))===o.promise())throw new TypeError("Thenable self-resolution");t=e&&("object"==typeof e||"function"==typeof e)&&e.then,m(t)?s?t.call(e,l(u,o,R,s),l(u,o,M,s)):(u++,t.call(e,l(u,o,R,s),l(u,o,M,s),l(u,o,R,o.notifyWith))):(a!==R&&(n=void 0,r=[e]),(s||o.resolveWith)(n,r))}},t=s?e:function(){try{e()}catch(e){S.Deferred.exceptionHook&&S.Deferred.exceptionHook(e,t.stackTrace),u<=i+1&&(a!==M&&(n=void 0,r=[e]),o.rejectWith(n,r))}};i?t():(S.Deferred.getStackHook&&(t.stackTrace=S.Deferred.getStackHook()),C.setTimeout(t))}}return S.Deferred(function(e){o[0][3].add(l(0,e,m(r)?r:R,e.notifyWith)),o[1][3].add(l(0,e,m(t)?t:R)),o[2][3].add(l(0,e,m(n)?n:M))}).promise()},promise:function(e){return null!=e?S.extend(e,a):a}},s={};return S.each(o,function(e,t){var n=t[2],r=t[5];a[t[1]]=n.add,r&&n.add(function(){i=r},o[3-e][2].disable,o[3-e][3].disable,o[0][2].lock,o[0][3].lock),n.add(t[3].fire),s[t[0]]=function(){return s[t[0]+"With"](this===s?void 0:this,arguments),this},s[t[0]+"With"]=n.fireWith}),a.promise(s),e&&e.call(s,s),s},when:function(e){var n=arguments.length,t=n,r=Array(t),i=s.call(arguments),o=S.Deferred(),a=function(t){return function(e){r[t]=this,i[t]=1<arguments.length?s.call(arguments):e,--n||o.resolveWith(r,i)}};if(n<=1&&(I(e,o.done(a(t)).resolve,o.reject,!n),"pending"===o.state()||m(i[t]&&i[t].then)))return o.then();while(t--)I(i[t],a(t),o.reject);return o.promise()}});var W=/^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error$/;S.Deferred.exceptionHook=function(e,t){C.console&&C.console.warn&&e&&W.test(e.name)&&C.console.warn("jQuery.Deferred exception: "+e.message,e.stack,t)},S.readyException=function(e){C.setTimeout(function(){throw e})};var F=S.Deferred();function B(){E.removeEventListener("DOMContentLoaded",B),C.removeEventListener("load",B),S.ready()}S.fn.ready=function(e){return F.then(e)["catch"](function(e){S.readyException(e)}),this},S.extend({isReady:!1,readyWait:1,ready:function(e){(!0===e?--S.readyWait:S.isReady)||(S.isReady=!0)!==e&&0<--S.readyWait||F.resolveWith(E,[S])}}),S.ready.then=F.then,"complete"===E.readyState||"loading"!==E.readyState&&!E.documentElement.doScroll?C.setTimeout(S.ready):(E.addEventListener("DOMContentLoaded",B),C.addEventListener("load",B));var $=function(e,t,n,r,i,o,a){var s=0,u=e.length,l=null==n;if("object"===w(n))for(s in i=!0,n)$(e,t,s,n[s],!0,o,a);else if(void 0!==r&&(i=!0,m(r)||(a=!0),l&&(a?(t.call(e,r),t=null):(l=t,t=function(e,t,n){return l.call(S(e),n)})),t))for(;s<u;s++)t(e[s],n,a?r:r.call(e[s],s,t(e[s],n)));return i?e:l?t.call(e):u?t(e[0],n):o},_=/^-ms-/,z=/-([a-z])/g;function U(e,t){return t.toUpperCase()}function X(e){return e.replace(_,"ms-").replace(z,U)}var V=function(e){return 1===e.nodeType||9===e.nodeType||!+e.nodeType};function G(){this.expando=S.expando+G.uid++}G.uid=1,G.prototype={cache:function(e){var t=e[this.expando];return t||(t={},V(e)&&(e.nodeType?e[this.expando]=t:Object.defineProperty(e,this.expando,{value:t,configurable:!0}))),t},set:function(e,t,n){var r,i=this.cache(e);if("string"==typeof t)i[X(t)]=n;else for(r in t)i[X(r)]=t[r];return i},get:function(e,t){return void 0===t?this.cache(e):e[this.expando]&&e[this.expando][X(t)]},access:function(e,t,n){return void 0===t||t&&"string"==typeof t&&void 0===n?this.get(e,t):(this.set(e,t,n),void 0!==n?n:t)},remove:function(e,t){var n,r=e[this.expando];if(void 0!==r){if(void 0!==t){n=(t=Array.isArray(t)?t.map(X):(t=X(t))in r?[t]:t.match(P)||[]).length;while(n--)delete r[t[n]]}(void 0===t||S.isEmptyObject(r))&&(e.nodeType?e[this.expando]=void 0:delete e[this.expando])}},hasData:function(e){var t=e[this.expando];return void 0!==t&&!S.isEmptyObject(t)}};var Y=new G,Q=new G,J=/^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,K=/[A-Z]/g;function Z(e,t,n){var r,i;if(void 0===n&&1===e.nodeType)if(r="data-"+t.replace(K,"-$&").toLowerCase(),"string"==typeof(n=e.getAttribute(r))){try{n="true"===(i=n)||"false"!==i&&("null"===i?null:i===+i+""?+i:J.test(i)?JSON.parse(i):i)}catch(e){}Q.set(e,t,n)}else n=void 0;return n}S.extend({hasData:function(e){return Q.hasData(e)||Y.hasData(e)},data:function(e,t,n){return Q.access(e,t,n)},removeData:function(e,t){Q.remove(e,t)},_data:function(e,t,n){return Y.access(e,t,n)},_removeData:function(e,t){Y.remove(e,t)}}),S.fn.extend({data:function(n,e){var t,r,i,o=this[0],a=o&&o.attributes;if(void 0===n){if(this.length&&(i=Q.get(o),1===o.nodeType&&!Y.get(o,"hasDataAttrs"))){t=a.length;while(t--)a[t]&&0===(r=a[t].name).indexOf("data-")&&(r=X(r.slice(5)),Z(o,r,i[r]));Y.set(o,"hasDataAttrs",!0)}return i}return"object"==typeof n?this.each(function(){Q.set(this,n)}):$(this,function(e){var t;if(o&&void 0===e)return void 0!==(t=Q.get(o,n))?t:void 0!==(t=Z(o,n))?t:void 0;this.each(function(){Q.set(this,n,e)})},null,e,1<arguments.length,null,!0)},removeData:function(e){return this.each(function(){Q.remove(this,e)})}}),S.extend({queue:function(e,t,n){var r;if(e)return t=(t||"fx")+"queue",r=Y.get(e,t),n&&(!r||Array.isArray(n)?r=Y.access(e,t,S.makeArray(n)):r.push(n)),r||[]},dequeue:function(e,t){t=t||"fx";var n=S.queue(e,t),r=n.length,i=n.shift(),o=S._queueHooks(e,t);"inprogress"===i&&(i=n.shift(),r--),i&&("fx"===t&&n.unshift("inprogress"),delete o.stop,i.call(e,function(){S.dequeue(e,t)},o)),!r&&o&&o.empty.fire()},_queueHooks:function(e,t){var n=t+"queueHooks";return Y.get(e,n)||Y.access(e,n,{empty:S.Callbacks("once memory").add(function(){Y.remove(e,[t+"queue",n])})})}}),S.fn.extend({queue:function(t,n){var e=2;return"string"!=typeof t&&(n=t,t="fx",e--),arguments.length<e?S.queue(this[0],t):void 0===n?this:this.each(function(){var e=S.queue(this,t,n);S._queueHooks(this,t),"fx"===t&&"inprogress"!==e[0]&&S.dequeue(this,t)})},dequeue:function(e){return this.each(function(){S.dequeue(this,e)})},clearQueue:function(e){return this.queue(e||"fx",[])},promise:function(e,t){var n,r=1,i=S.Deferred(),o=this,a=this.length,s=function(){--r||i.resolveWith(o,[o])};"string"!=typeof e&&(t=e,e=void 0),e=e||"fx";while(a--)(n=Y.get(o[a],e+"queueHooks"))&&n.empty&&(r++,n.empty.add(s));return s(),i.promise(t)}});var ee=/[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,te=new RegExp("^(?:([+-])=|)("+ee+")([a-z%]*)$","i"),ne=["Top","Right","Bottom","Left"],re=E.documentElement,ie=function(e){return S.contains(e.ownerDocument,e)},oe={composed:!0};re.getRootNode&&(ie=function(e){return S.contains(e.ownerDocument,e)||e.getRootNode(oe)===e.ownerDocument});var ae=function(e,t){return"none"===(e=t||e).style.display||""===e.style.display&&ie(e)&&"none"===S.css(e,"display")};function se(e,t,n,r){var i,o,a=20,s=r?function(){return r.cur()}:function(){return S.css(e,t,"")},u=s(),l=n&&n[3]||(S.cssNumber[t]?"":"px"),c=e.nodeType&&(S.cssNumber[t]||"px"!==l&&+u)&&te.exec(S.css(e,t));if(c&&c[3]!==l){u/=2,l=l||c[3],c=+u||1;while(a--)S.style(e,t,c+l),(1-o)*(1-(o=s()/u||.5))<=0&&(a=0),c/=o;c*=2,S.style(e,t,c+l),n=n||[]}return n&&(c=+c||+u||0,i=n[1]?c+(n[1]+1)*n[2]:+n[2],r&&(r.unit=l,r.start=c,r.end=i)),i}var ue={};function le(e,t){for(var n,r,i,o,a,s,u,l=[],c=0,f=e.length;c<f;c++)(r=e[c]).style&&(n=r.style.display,t?("none"===n&&(l[c]=Y.get(r,"display")||null,l[c]||(r.style.display="")),""===r.style.display&&ae(r)&&(l[c]=(u=a=o=void 0,a=(i=r).ownerDocument,s=i.nodeName,(u=ue[s])||(o=a.body.appendChild(a.createElement(s)),u=S.css(o,"display"),o.parentNode.removeChild(o),"none"===u&&(u="block"),ue[s]=u)))):"none"!==n&&(l[c]="none",Y.set(r,"display",n)));for(c=0;c<f;c++)null!=l[c]&&(e[c].style.display=l[c]);return e}S.fn.extend({show:function(){return le(this,!0)},hide:function(){return le(this)},toggle:function(e){return"boolean"==typeof e?e?this.show():this.hide():this.each(function(){ae(this)?S(this).show():S(this).hide()})}});var ce,fe,pe=/^(?:checkbox|radio)$/i,de=/<([a-z][^\/\0>\x20\t\r\n\f]*)/i,he=/^$|^module$|\/(?:java|ecma)script/i;ce=E.createDocumentFragment().appendChild(E.createElement("div")),(fe=E.createElement("input")).setAttribute("type","radio"),fe.setAttribute("checked","checked"),fe.setAttribute("name","t"),ce.appendChild(fe),y.checkClone=ce.cloneNode(!0).cloneNode(!0).lastChild.checked,ce.innerHTML="<textarea>x</textarea>",y.noCloneChecked=!!ce.cloneNode(!0).lastChild.defaultValue,ce.innerHTML="<option></option>",y.option=!!ce.lastChild;var ge={thead:[1,"<table>","</table>"],col:[2,"<table><colgroup>","</colgroup></table>"],tr:[2,"<table><tbody>","</tbody></table>"],td:[3,"<table><tbody><tr>","</tr></tbody></table>"],_default:[0,"",""]};function ve(e,t){var n;return n="undefined"!=typeof e.getElementsByTagName?e.getElementsByTagName(t||"*"):"undefined"!=typeof e.querySelectorAll?e.querySelectorAll(t||"*"):[],void 0===t||t&&A(e,t)?S.merge([e],n):n}function ye(e,t){for(var n=0,r=e.length;n<r;n++)Y.set(e[n],"globalEval",!t||Y.get(t[n],"globalEval"))}ge.tbody=ge.tfoot=ge.colgroup=ge.caption=ge.thead,ge.th=ge.td,y.option||(ge.optgroup=ge.option=[1,"<select multiple='multiple'>","</select>"]);var me=/<|&#?\w+;/;function xe(e,t,n,r,i){for(var o,a,s,u,l,c,f=t.createDocumentFragment(),p=[],d=0,h=e.length;d<h;d++)if((o=e[d])||0===o)if("object"===w(o))S.merge(p,o.nodeType?[o]:o);else if(me.test(o)){a=a||f.appendChild(t.createElement("div")),s=(de.exec(o)||["",""])[1].toLowerCase(),u=ge[s]||ge._default,a.innerHTML=u[1]+S.htmlPrefilter(o)+u[2],c=u[0];while(c--)a=a.lastChild;S.merge(p,a.childNodes),(a=f.firstChild).textContent=""}else p.push(t.createTextNode(o));f.textContent="",d=0;while(o=p[d++])if(r&&-1<S.inArray(o,r))i&&i.push(o);else if(l=ie(o),a=ve(f.appendChild(o),"script"),l&&ye(a),n){c=0;while(o=a[c++])he.test(o.type||"")&&n.push(o)}return f}var be=/^key/,we=/^(?:mouse|pointer|contextmenu|drag|drop)|click/,Te=/^([^.]*)(?:\.(.+)|)/;function Ce(){return!0}function Ee(){return!1}function Se(e,t){return e===function(){try{return E.activeElement}catch(e){}}()==("focus"===t)}function ke(e,t,n,r,i,o){var a,s;if("object"==typeof t){for(s in"string"!=typeof n&&(r=r||n,n=void 0),t)ke(e,s,n,r,t[s],o);return e}if(null==r&&null==i?(i=n,r=n=void 0):null==i&&("string"==typeof n?(i=r,r=void 0):(i=r,r=n,n=void 0)),!1===i)i=Ee;else if(!i)return e;return 1===o&&(a=i,(i=function(e){return S().off(e),a.apply(this,arguments)}).guid=a.guid||(a.guid=S.guid++)),e.each(function(){S.event.add(this,t,i,r,n)})}function Ae(e,i,o){o?(Y.set(e,i,!1),S.event.add(e,i,{namespace:!1,handler:function(e){var t,n,r=Y.get(this,i);if(1&e.isTrigger&&this[i]){if(r.length)(S.event.special[i]||{}).delegateType&&e.stopPropagation();else if(r=s.call(arguments),Y.set(this,i,r),t=o(this,i),this[i](),r!==(n=Y.get(this,i))||t?Y.set(this,i,!1):n={},r!==n)return e.stopImmediatePropagation(),e.preventDefault(),n.value}else r.length&&(Y.set(this,i,{value:S.event.trigger(S.extend(r[0],S.Event.prototype),r.slice(1),this)}),e.stopImmediatePropagation())}})):void 0===Y.get(e,i)&&S.event.add(e,i,Ce)}S.event={global:{},add:function(t,e,n,r,i){var o,a,s,u,l,c,f,p,d,h,g,v=Y.get(t);if(V(t)){n.handler&&(n=(o=n).handler,i=o.selector),i&&S.find.matchesSelector(re,i),n.guid||(n.guid=S.guid++),(u=v.events)||(u=v.events=Object.create(null)),(a=v.handle)||(a=v.handle=function(e){return"undefined"!=typeof S&&S.event.triggered!==e.type?S.event.dispatch.apply(t,arguments):void 0}),l=(e=(e||"").match(P)||[""]).length;while(l--)d=g=(s=Te.exec(e[l])||[])[1],h=(s[2]||"").split(".").sort(),d&&(f=S.event.special[d]||{},d=(i?f.delegateType:f.bindType)||d,f=S.event.special[d]||{},c=S.extend({type:d,origType:g,data:r,handler:n,guid:n.guid,selector:i,needsContext:i&&S.expr.match.needsContext.test(i),namespace:h.join(".")},o),(p=u[d])||((p=u[d]=[]).delegateCount=0,f.setup&&!1!==f.setup.call(t,r,h,a)||t.addEventListener&&t.addEventListener(d,a)),f.add&&(f.add.call(t,c),c.handler.guid||(c.handler.guid=n.guid)),i?p.splice(p.delegateCount++,0,c):p.push(c),S.event.global[d]=!0)}},remove:function(e,t,n,r,i){var o,a,s,u,l,c,f,p,d,h,g,v=Y.hasData(e)&&Y.get(e);if(v&&(u=v.events)){l=(t=(t||"").match(P)||[""]).length;while(l--)if(d=g=(s=Te.exec(t[l])||[])[1],h=(s[2]||"").split(".").sort(),d){f=S.event.special[d]||{},p=u[d=(r?f.delegateType:f.bindType)||d]||[],s=s[2]&&new RegExp("(^|\\.)"+h.join("\\.(?:.*\\.|)")+"(\\.|$)"),a=o=p.length;while(o--)c=p[o],!i&&g!==c.origType||n&&n.guid!==c.guid||s&&!s.test(c.namespace)||r&&r!==c.selector&&("**"!==r||!c.selector)||(p.splice(o,1),c.selector&&p.delegateCount--,f.remove&&f.remove.call(e,c));a&&!p.length&&(f.teardown&&!1!==f.teardown.call(e,h,v.handle)||S.removeEvent(e,d,v.handle),delete u[d])}else for(d in u)S.event.remove(e,d+t[l],n,r,!0);S.isEmptyObject(u)&&Y.remove(e,"handle events")}},dispatch:function(e){var t,n,r,i,o,a,s=new Array(arguments.length),u=S.event.fix(e),l=(Y.get(this,"events")||Object.create(null))[u.type]||[],c=S.event.special[u.type]||{};for(s[0]=u,t=1;t<arguments.length;t++)s[t]=arguments[t];if(u.delegateTarget=this,!c.preDispatch||!1!==c.preDispatch.call(this,u)){a=S.event.handlers.call(this,u,l),t=0;while((i=a[t++])&&!u.isPropagationStopped()){u.currentTarget=i.elem,n=0;while((o=i.handlers[n++])&&!u.isImmediatePropagationStopped())u.rnamespace&&!1!==o.namespace&&!u.rnamespace.test(o.namespace)||(u.handleObj=o,u.data=o.data,void 0!==(r=((S.event.special[o.origType]||{}).handle||o.handler).apply(i.elem,s))&&!1===(u.result=r)&&(u.preventDefault(),u.stopPropagation()))}return c.postDispatch&&c.postDispatch.call(this,u),u.result}},handlers:function(e,t){var n,r,i,o,a,s=[],u=t.delegateCount,l=e.target;if(u&&l.nodeType&&!("click"===e.type&&1<=e.button))for(;l!==this;l=l.parentNode||this)if(1===l.nodeType&&("click"!==e.type||!0!==l.disabled)){for(o=[],a={},n=0;n<u;n++)void 0===a[i=(r=t[n]).selector+" "]&&(a[i]=r.needsContext?-1<S(i,this).index(l):S.find(i,this,null,[l]).length),a[i]&&o.push(r);o.length&&s.push({elem:l,handlers:o})}return l=this,u<t.length&&s.push({elem:l,handlers:t.slice(u)}),s},addProp:function(t,e){Object.defineProperty(S.Event.prototype,t,{enumerable:!0,configurable:!0,get:m(e)?function(){if(this.originalEvent)return e(this.originalEvent)}:function(){if(this.originalEvent)return this.originalEvent[t]},set:function(e){Object.defineProperty(this,t,{enumerable:!0,configurable:!0,writable:!0,value:e})}})},fix:function(e){return e[S.expando]?e:new S.Event(e)},special:{load:{noBubble:!0},click:{setup:function(e){var t=this||e;return pe.test(t.type)&&t.click&&A(t,"input")&&Ae(t,"click",Ce),!1},trigger:function(e){var t=this||e;return pe.test(t.type)&&t.click&&A(t,"input")&&Ae(t,"click"),!0},_default:function(e){var t=e.target;return pe.test(t.type)&&t.click&&A(t,"input")&&Y.get(t,"click")||A(t,"a")}},beforeunload:{postDispatch:function(e){void 0!==e.result&&e.originalEvent&&(e.originalEvent.returnValue=e.result)}}}},S.removeEvent=function(e,t,n){e.removeEventListener&&e.removeEventListener(t,n)},S.Event=function(e,t){if(!(this instanceof S.Event))return new S.Event(e,t);e&&e.type?(this.originalEvent=e,this.type=e.type,this.isDefaultPrevented=e.defaultPrevented||void 0===e.defaultPrevented&&!1===e.returnValue?Ce:Ee,this.target=e.target&&3===e.target.nodeType?e.target.parentNode:e.target,this.currentTarget=e.currentTarget,this.relatedTarget=e.relatedTarget):this.type=e,t&&S.extend(this,t),this.timeStamp=e&&e.timeStamp||Date.now(),this[S.expando]=!0},S.Event.prototype={constructor:S.Event,isDefaultPrevented:Ee,isPropagationStopped:Ee,isImmediatePropagationStopped:Ee,isSimulated:!1,preventDefault:function(){var e=this.originalEvent;this.isDefaultPrevented=Ce,e&&!this.isSimulated&&e.preventDefault()},stopPropagation:function(){var e=this.originalEvent;this.isPropagationStopped=Ce,e&&!this.isSimulated&&e.stopPropagation()},stopImmediatePropagation:function(){var e=this.originalEvent;this.isImmediatePropagationStopped=Ce,e&&!this.isSimulated&&e.stopImmediatePropagation(),this.stopPropagation()}},S.each({altKey:!0,bubbles:!0,cancelable:!0,changedTouches:!0,ctrlKey:!0,detail:!0,eventPhase:!0,metaKey:!0,pageX:!0,pageY:!0,shiftKey:!0,view:!0,"char":!0,code:!0,charCode:!0,key:!0,keyCode:!0,button:!0,buttons:!0,clientX:!0,clientY:!0,offsetX:!0,offsetY:!0,pointerId:!0,pointerType:!0,screenX:!0,screenY:!0,targetTouches:!0,toElement:!0,touches:!0,which:function(e){var t=e.button;return null==e.which&&be.test(e.type)?null!=e.charCode?e.charCode:e.keyCode:!e.which&&void 0!==t&&we.test(e.type)?1&t?1:2&t?3:4&t?2:0:e.which}},S.event.addProp),S.each({focus:"focusin",blur:"focusout"},function(e,t){S.event.special[e]={setup:function(){return Ae(this,e,Se),!1},trigger:function(){return Ae(this,e),!0},delegateType:t}}),S.each({mouseenter:"mouseover",mouseleave:"mouseout",pointerenter:"pointerover",pointerleave:"pointerout"},function(e,i){S.event.special[e]={delegateType:i,bindType:i,handle:function(e){var t,n=e.relatedTarget,r=e.handleObj;return n&&(n===this||S.contains(this,n))||(e.type=r.origType,t=r.handler.apply(this,arguments),e.type=i),t}}}),S.fn.extend({on:function(e,t,n,r){return ke(this,e,t,n,r)},one:function(e,t,n,r){return ke(this,e,t,n,r,1)},off:function(e,t,n){var r,i;if(e&&e.preventDefault&&e.handleObj)return r=e.handleObj,S(e.delegateTarget).off(r.namespace?r.origType+"."+r.namespace:r.origType,r.selector,r.handler),this;if("object"==typeof e){for(i in e)this.off(i,t,e[i]);return this}return!1!==t&&"function"!=typeof t||(n=t,t=void 0),!1===n&&(n=Ee),this.each(function(){S.event.remove(this,e,n,t)})}});var Ne=/<script|<style|<link/i,De=/checked\s*(?:[^=]|=\s*.checked.)/i,je=/^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g;function qe(e,t){return A(e,"table")&&A(11!==t.nodeType?t:t.firstChild,"tr")&&S(e).children("tbody")[0]||e}function Le(e){return e.type=(null!==e.getAttribute("type"))+"/"+e.type,e}function He(e){return"true/"===(e.type||"").slice(0,5)?e.type=e.type.slice(5):e.removeAttribute("type"),e}function Oe(e,t){var n,r,i,o,a,s;if(1===t.nodeType){if(Y.hasData(e)&&(s=Y.get(e).events))for(i in Y.remove(t,"handle events"),s)for(n=0,r=s[i].length;n<r;n++)S.event.add(t,i,s[i][n]);Q.hasData(e)&&(o=Q.access(e),a=S.extend({},o),Q.set(t,a))}}function Pe(n,r,i,o){r=g(r);var e,t,a,s,u,l,c=0,f=n.length,p=f-1,d=r[0],h=m(d);if(h||1<f&&"string"==typeof d&&!y.checkClone&&De.test(d))return n.each(function(e){var t=n.eq(e);h&&(r[0]=d.call(this,e,t.html())),Pe(t,r,i,o)});if(f&&(t=(e=xe(r,n[0].ownerDocument,!1,n,o)).firstChild,1===e.childNodes.length&&(e=t),t||o)){for(s=(a=S.map(ve(e,"script"),Le)).length;c<f;c++)u=e,c!==p&&(u=S.clone(u,!0,!0),s&&S.merge(a,ve(u,"script"))),i.call(n[c],u,c);if(s)for(l=a[a.length-1].ownerDocument,S.map(a,He),c=0;c<s;c++)u=a[c],he.test(u.type||"")&&!Y.access(u,"globalEval")&&S.contains(l,u)&&(u.src&&"module"!==(u.type||"").toLowerCase()?S._evalUrl&&!u.noModule&&S._evalUrl(u.src,{nonce:u.nonce||u.getAttribute("nonce")},l):b(u.textContent.replace(je,""),u,l))}return n}function Re(e,t,n){for(var r,i=t?S.filter(t,e):e,o=0;null!=(r=i[o]);o++)n||1!==r.nodeType||S.cleanData(ve(r)),r.parentNode&&(n&&ie(r)&&ye(ve(r,"script")),r.parentNode.removeChild(r));return e}S.extend({htmlPrefilter:function(e){return e},clone:function(e,t,n){var r,i,o,a,s,u,l,c=e.cloneNode(!0),f=ie(e);if(!(y.noCloneChecked||1!==e.nodeType&&11!==e.nodeType||S.isXMLDoc(e)))for(a=ve(c),r=0,i=(o=ve(e)).length;r<i;r++)s=o[r],u=a[r],void 0,"input"===(l=u.nodeName.toLowerCase())&&pe.test(s.type)?u.checked=s.checked:"input"!==l&&"textarea"!==l||(u.defaultValue=s.defaultValue);if(t)if(n)for(o=o||ve(e),a=a||ve(c),r=0,i=o.length;r<i;r++)Oe(o[r],a[r]);else Oe(e,c);return 0<(a=ve(c,"script")).length&&ye(a,!f&&ve(e,"script")),c},cleanData:function(e){for(var t,n,r,i=S.event.special,o=0;void 0!==(n=e[o]);o++)if(V(n)){if(t=n[Y.expando]){if(t.events)for(r in t.events)i[r]?S.event.remove(n,r):S.removeEvent(n,r,t.handle);n[Y.expando]=void 0}n[Q.expando]&&(n[Q.expando]=void 0)}}}),S.fn.extend({detach:function(e){return Re(this,e,!0)},remove:function(e){return Re(this,e)},text:function(e){return $(this,function(e){return void 0===e?S.text(this):this.empty().each(function(){1!==this.nodeType&&11!==this.nodeType&&9!==this.nodeType||(this.textContent=e)})},null,e,arguments.length)},append:function(){return Pe(this,arguments,function(e){1!==this.nodeType&&11!==this.nodeType&&9!==this.nodeType||qe(this,e).appendChild(e)})},prepend:function(){return Pe(this,arguments,function(e){if(1===this.nodeType||11===this.nodeType||9===this.nodeType){var t=qe(this,e);t.insertBefore(e,t.firstChild)}})},before:function(){return Pe(this,arguments,function(e){this.parentNode&&this.parentNode.insertBefore(e,this)})},after:function(){return Pe(this,arguments,function(e){this.parentNode&&this.parentNode.insertBefore(e,this.nextSibling)})},empty:function(){for(var e,t=0;null!=(e=this[t]);t++)1===e.nodeType&&(S.cleanData(ve(e,!1)),e.textContent="");return this},clone:function(e,t){return e=null!=e&&e,t=null==t?e:t,this.map(function(){return S.clone(this,e,t)})},html:function(e){return $(this,function(e){var t=this[0]||{},n=0,r=this.length;if(void 0===e&&1===t.nodeType)return t.innerHTML;if("string"==typeof e&&!Ne.test(e)&&!ge[(de.exec(e)||["",""])[1].toLowerCase()]){e=S.htmlPrefilter(e);try{for(;n<r;n++)1===(t=this[n]||{}).nodeType&&(S.cleanData(ve(t,!1)),t.innerHTML=e);t=0}catch(e){}}t&&this.empty().append(e)},null,e,arguments.length)},replaceWith:function(){var n=[];return Pe(this,arguments,function(e){var t=this.parentNode;S.inArray(this,n)<0&&(S.cleanData(ve(this)),t&&t.replaceChild(e,this))},n)}}),S.each({appendTo:"append",prependTo:"prepend",insertBefore:"before",insertAfter:"after",replaceAll:"replaceWith"},function(e,a){S.fn[e]=function(e){for(var t,n=[],r=S(e),i=r.length-1,o=0;o<=i;o++)t=o===i?this:this.clone(!0),S(r[o])[a](t),u.apply(n,t.get());return this.pushStack(n)}});var Me=new RegExp("^("+ee+")(?!px)[a-z%]+$","i"),Ie=function(e){var t=e.ownerDocument.defaultView;return t&&t.opener||(t=C),t.getComputedStyle(e)},We=function(e,t,n){var r,i,o={};for(i in t)o[i]=e.style[i],e.style[i]=t[i];for(i in r=n.call(e),t)e.style[i]=o[i];return r},Fe=new RegExp(ne.join("|"),"i");function Be(e,t,n){var r,i,o,a,s=e.style;return(n=n||Ie(e))&&(""!==(a=n.getPropertyValue(t)||n[t])||ie(e)||(a=S.style(e,t)),!y.pixelBoxStyles()&&Me.test(a)&&Fe.test(t)&&(r=s.width,i=s.minWidth,o=s.maxWidth,s.minWidth=s.maxWidth=s.width=a,a=n.width,s.width=r,s.minWidth=i,s.maxWidth=o)),void 0!==a?a+"":a}function $e(e,t){return{get:function(){if(!e())return(this.get=t).apply(this,arguments);delete this.get}}}!function(){function e(){if(l){u.style.cssText="position:absolute;left:-11111px;width:60px;margin-top:1px;padding:0;border:0",l.style.cssText="position:relative;display:block;box-sizing:border-box;overflow:scroll;margin:auto;border:1px;padding:1px;width:60%;top:1%",re.appendChild(u).appendChild(l);var e=C.getComputedStyle(l);n="1%"!==e.top,s=12===t(e.marginLeft),l.style.right="60%",o=36===t(e.right),r=36===t(e.width),l.style.position="absolute",i=12===t(l.offsetWidth/3),re.removeChild(u),l=null}}function t(e){return Math.round(parseFloat(e))}var n,r,i,o,a,s,u=E.createElement("div"),l=E.createElement("div");l.style&&(l.style.backgroundClip="content-box",l.cloneNode(!0).style.backgroundClip="",y.clearCloneStyle="content-box"===l.style.backgroundClip,S.extend(y,{boxSizingReliable:function(){return e(),r},pixelBoxStyles:function(){return e(),o},pixelPosition:function(){return e(),n},reliableMarginLeft:function(){return e(),s},scrollboxSize:function(){return e(),i},reliableTrDimensions:function(){var e,t,n,r;return null==a&&(e=E.createElement("table"),t=E.createElement("tr"),n=E.createElement("div"),e.style.cssText="position:absolute;left:-11111px",t.style.height="1px",n.style.height="9px",re.appendChild(e).appendChild(t).appendChild(n),r=C.getComputedStyle(t),a=3<parseInt(r.height),re.removeChild(e)),a}}))}();var _e=["Webkit","Moz","ms"],ze=E.createElement("div").style,Ue={};function Xe(e){var t=S.cssProps[e]||Ue[e];return t||(e in ze?e:Ue[e]=function(e){var t=e[0].toUpperCase()+e.slice(1),n=_e.length;while(n--)if((e=_e[n]+t)in ze)return e}(e)||e)}var Ve=/^(none|table(?!-c[ea]).+)/,Ge=/^--/,Ye={position:"absolute",visibility:"hidden",display:"block"},Qe={letterSpacing:"0",fontWeight:"400"};function Je(e,t,n){var r=te.exec(t);return r?Math.max(0,r[2]-(n||0))+(r[3]||"px"):t}function Ke(e,t,n,r,i,o){var a="width"===t?1:0,s=0,u=0;if(n===(r?"border":"content"))return 0;for(;a<4;a+=2)"margin"===n&&(u+=S.css(e,n+ne[a],!0,i)),r?("content"===n&&(u-=S.css(e,"padding"+ne[a],!0,i)),"margin"!==n&&(u-=S.css(e,"border"+ne[a]+"Width",!0,i))):(u+=S.css(e,"padding"+ne[a],!0,i),"padding"!==n?u+=S.css(e,"border"+ne[a]+"Width",!0,i):s+=S.css(e,"border"+ne[a]+"Width",!0,i));return!r&&0<=o&&(u+=Math.max(0,Math.ceil(e["offset"+t[0].toUpperCase()+t.slice(1)]-o-u-s-.5))||0),u}function Ze(e,t,n){var r=Ie(e),i=(!y.boxSizingReliable()||n)&&"border-box"===S.css(e,"boxSizing",!1,r),o=i,a=Be(e,t,r),s="offset"+t[0].toUpperCase()+t.slice(1);if(Me.test(a)){if(!n)return a;a="auto"}return(!y.boxSizingReliable()&&i||!y.reliableTrDimensions()&&A(e,"tr")||"auto"===a||!parseFloat(a)&&"inline"===S.css(e,"display",!1,r))&&e.getClientRects().length&&(i="border-box"===S.css(e,"boxSizing",!1,r),(o=s in e)&&(a=e[s])),(a=parseFloat(a)||0)+Ke(e,t,n||(i?"border":"content"),o,r,a)+"px"}function et(e,t,n,r,i){return new et.prototype.init(e,t,n,r,i)}S.extend({cssHooks:{opacity:{get:function(e,t){if(t){var n=Be(e,"opacity");return""===n?"1":n}}}},cssNumber:{animationIterationCount:!0,columnCount:!0,fillOpacity:!0,flexGrow:!0,flexShrink:!0,fontWeight:!0,gridArea:!0,gridColumn:!0,gridColumnEnd:!0,gridColumnStart:!0,gridRow:!0,gridRowEnd:!0,gridRowStart:!0,lineHeight:!0,opacity:!0,order:!0,orphans:!0,widows:!0,zIndex:!0,zoom:!0},cssProps:{},style:function(e,t,n,r){if(e&&3!==e.nodeType&&8!==e.nodeType&&e.style){var i,o,a,s=X(t),u=Ge.test(t),l=e.style;if(u||(t=Xe(s)),a=S.cssHooks[t]||S.cssHooks[s],void 0===n)return a&&"get"in a&&void 0!==(i=a.get(e,!1,r))?i:l[t];"string"===(o=typeof n)&&(i=te.exec(n))&&i[1]&&(n=se(e,t,i),o="number"),null!=n&&n==n&&("number"!==o||u||(n+=i&&i[3]||(S.cssNumber[s]?"":"px")),y.clearCloneStyle||""!==n||0!==t.indexOf("background")||(l[t]="inherit"),a&&"set"in a&&void 0===(n=a.set(e,n,r))||(u?l.setProperty(t,n):l[t]=n))}},css:function(e,t,n,r){var i,o,a,s=X(t);return Ge.test(t)||(t=Xe(s)),(a=S.cssHooks[t]||S.cssHooks[s])&&"get"in a&&(i=a.get(e,!0,n)),void 0===i&&(i=Be(e,t,r)),"normal"===i&&t in Qe&&(i=Qe[t]),""===n||n?(o=parseFloat(i),!0===n||isFinite(o)?o||0:i):i}}),S.each(["height","width"],function(e,u){S.cssHooks[u]={get:function(e,t,n){if(t)return!Ve.test(S.css(e,"display"))||e.getClientRects().length&&e.getBoundingClientRect().width?Ze(e,u,n):We(e,Ye,function(){return Ze(e,u,n)})},set:function(e,t,n){var r,i=Ie(e),o=!y.scrollboxSize()&&"absolute"===i.position,a=(o||n)&&"border-box"===S.css(e,"boxSizing",!1,i),s=n?Ke(e,u,n,a,i):0;return a&&o&&(s-=Math.ceil(e["offset"+u[0].toUpperCase()+u.slice(1)]-parseFloat(i[u])-Ke(e,u,"border",!1,i)-.5)),s&&(r=te.exec(t))&&"px"!==(r[3]||"px")&&(e.style[u]=t,t=S.css(e,u)),Je(0,t,s)}}}),S.cssHooks.marginLeft=$e(y.reliableMarginLeft,function(e,t){if(t)return(parseFloat(Be(e,"marginLeft"))||e.getBoundingClientRect().left-We(e,{marginLeft:0},function(){return e.getBoundingClientRect().left}))+"px"}),S.each({margin:"",padding:"",border:"Width"},function(i,o){S.cssHooks[i+o]={expand:function(e){for(var t=0,n={},r="string"==typeof e?e.split(" "):[e];t<4;t++)n[i+ne[t]+o]=r[t]||r[t-2]||r[0];return n}},"margin"!==i&&(S.cssHooks[i+o].set=Je)}),S.fn.extend({css:function(e,t){return $(this,function(e,t,n){var r,i,o={},a=0;if(Array.isArray(t)){for(r=Ie(e),i=t.length;a<i;a++)o[t[a]]=S.css(e,t[a],!1,r);return o}return void 0!==n?S.style(e,t,n):S.css(e,t)},e,t,1<arguments.length)}}),((S.Tween=et).prototype={constructor:et,init:function(e,t,n,r,i,o){this.elem=e,this.prop=n,this.easing=i||S.easing._default,this.options=t,this.start=this.now=this.cur(),this.end=r,this.unit=o||(S.cssNumber[n]?"":"px")},cur:function(){var e=et.propHooks[this.prop];return e&&e.get?e.get(this):et.propHooks._default.get(this)},run:function(e){var t,n=et.propHooks[this.prop];return this.options.duration?this.pos=t=S.easing[this.easing](e,this.options.duration*e,0,1,this.options.duration):this.pos=t=e,this.now=(this.end-this.start)*t+this.start,this.options.step&&this.options.step.call(this.elem,this.now,this),n&&n.set?n.set(this):et.propHooks._default.set(this),this}}).init.prototype=et.prototype,(et.propHooks={_default:{get:function(e){var t;return 1!==e.elem.nodeType||null!=e.elem[e.prop]&&null==e.elem.style[e.prop]?e.elem[e.prop]:(t=S.css(e.elem,e.prop,""))&&"auto"!==t?t:0},set:function(e){S.fx.step[e.prop]?S.fx.step[e.prop](e):1!==e.elem.nodeType||!S.cssHooks[e.prop]&&null==e.elem.style[Xe(e.prop)]?e.elem[e.prop]=e.now:S.style(e.elem,e.prop,e.now+e.unit)}}}).scrollTop=et.propHooks.scrollLeft={set:function(e){e.elem.nodeType&&e.elem.parentNode&&(e.elem[e.prop]=e.now)}},S.easing={linear:function(e){return e},swing:function(e){return.5-Math.cos(e*Math.PI)/2},_default:"swing"},S.fx=et.prototype.init,S.fx.step={};var tt,nt,rt,it,ot=/^(?:toggle|show|hide)$/,at=/queueHooks$/;function st(){nt&&(!1===E.hidden&&C.requestAnimationFrame?C.requestAnimationFrame(st):C.setTimeout(st,S.fx.interval),S.fx.tick())}function ut(){return C.setTimeout(function(){tt=void 0}),tt=Date.now()}function lt(e,t){var n,r=0,i={height:e};for(t=t?1:0;r<4;r+=2-t)i["margin"+(n=ne[r])]=i["padding"+n]=e;return t&&(i.opacity=i.width=e),i}function ct(e,t,n){for(var r,i=(ft.tweeners[t]||[]).concat(ft.tweeners["*"]),o=0,a=i.length;o<a;o++)if(r=i[o].call(n,t,e))return r}function ft(o,e,t){var n,a,r=0,i=ft.prefilters.length,s=S.Deferred().always(function(){delete u.elem}),u=function(){if(a)return!1;for(var e=tt||ut(),t=Math.max(0,l.startTime+l.duration-e),n=1-(t/l.duration||0),r=0,i=l.tweens.length;r<i;r++)l.tweens[r].run(n);return s.notifyWith(o,[l,n,t]),n<1&&i?t:(i||s.notifyWith(o,[l,1,0]),s.resolveWith(o,[l]),!1)},l=s.promise({elem:o,props:S.extend({},e),opts:S.extend(!0,{specialEasing:{},easing:S.easing._default},t),originalProperties:e,originalOptions:t,startTime:tt||ut(),duration:t.duration,tweens:[],createTween:function(e,t){var n=S.Tween(o,l.opts,e,t,l.opts.specialEasing[e]||l.opts.easing);return l.tweens.push(n),n},stop:function(e){var t=0,n=e?l.tweens.length:0;if(a)return this;for(a=!0;t<n;t++)l.tweens[t].run(1);return e?(s.notifyWith(o,[l,1,0]),s.resolveWith(o,[l,e])):s.rejectWith(o,[l,e]),this}}),c=l.props;for(!function(e,t){var n,r,i,o,a;for(n in e)if(i=t[r=X(n)],o=e[n],Array.isArray(o)&&(i=o[1],o=e[n]=o[0]),n!==r&&(e[r]=o,delete e[n]),(a=S.cssHooks[r])&&"expand"in a)for(n in o=a.expand(o),delete e[r],o)n in e||(e[n]=o[n],t[n]=i);else t[r]=i}(c,l.opts.specialEasing);r<i;r++)if(n=ft.prefilters[r].call(l,o,c,l.opts))return m(n.stop)&&(S._queueHooks(l.elem,l.opts.queue).stop=n.stop.bind(n)),n;return S.map(c,ct,l),m(l.opts.start)&&l.opts.start.call(o,l),l.progress(l.opts.progress).done(l.opts.done,l.opts.complete).fail(l.opts.fail).always(l.opts.always),S.fx.timer(S.extend(u,{elem:o,anim:l,queue:l.opts.queue})),l}S.Animation=S.extend(ft,{tweeners:{"*":[function(e,t){var n=this.createTween(e,t);return se(n.elem,e,te.exec(t),n),n}]},tweener:function(e,t){m(e)?(t=e,e=["*"]):e=e.match(P);for(var n,r=0,i=e.length;r<i;r++)n=e[r],ft.tweeners[n]=ft.tweeners[n]||[],ft.tweeners[n].unshift(t)},prefilters:[function(e,t,n){var r,i,o,a,s,u,l,c,f="width"in t||"height"in t,p=this,d={},h=e.style,g=e.nodeType&&ae(e),v=Y.get(e,"fxshow");for(r in n.queue||(null==(a=S._queueHooks(e,"fx")).unqueued&&(a.unqueued=0,s=a.empty.fire,a.empty.fire=function(){a.unqueued||s()}),a.unqueued++,p.always(function(){p.always(function(){a.unqueued--,S.queue(e,"fx").length||a.empty.fire()})})),t)if(i=t[r],ot.test(i)){if(delete t[r],o=o||"toggle"===i,i===(g?"hide":"show")){if("show"!==i||!v||void 0===v[r])continue;g=!0}d[r]=v&&v[r]||S.style(e,r)}if((u=!S.isEmptyObject(t))||!S.isEmptyObject(d))for(r in f&&1===e.nodeType&&(n.overflow=[h.overflow,h.overflowX,h.overflowY],null==(l=v&&v.display)&&(l=Y.get(e,"display")),"none"===(c=S.css(e,"display"))&&(l?c=l:(le([e],!0),l=e.style.display||l,c=S.css(e,"display"),le([e]))),("inline"===c||"inline-block"===c&&null!=l)&&"none"===S.css(e,"float")&&(u||(p.done(function(){h.display=l}),null==l&&(c=h.display,l="none"===c?"":c)),h.display="inline-block")),n.overflow&&(h.overflow="hidden",p.always(function(){h.overflow=n.overflow[0],h.overflowX=n.overflow[1],h.overflowY=n.overflow[2]})),u=!1,d)u||(v?"hidden"in v&&(g=v.hidden):v=Y.access(e,"fxshow",{display:l}),o&&(v.hidden=!g),g&&le([e],!0),p.done(function(){for(r in g||le([e]),Y.remove(e,"fxshow"),d)S.style(e,r,d[r])})),u=ct(g?v[r]:0,r,p),r in v||(v[r]=u.start,g&&(u.end=u.start,u.start=0))}],prefilter:function(e,t){t?ft.prefilters.unshift(e):ft.prefilters.push(e)}}),S.speed=function(e,t,n){var r=e&&"object"==typeof e?S.extend({},e):{complete:n||!n&&t||m(e)&&e,duration:e,easing:n&&t||t&&!m(t)&&t};return S.fx.off?r.duration=0:"number"!=typeof r.duration&&(r.duration in S.fx.speeds?r.duration=S.fx.speeds[r.duration]:r.duration=S.fx.speeds._default),null!=r.queue&&!0!==r.queue||(r.queue="fx"),r.old=r.complete,r.complete=function(){m(r.old)&&r.old.call(this),r.queue&&S.dequeue(this,r.queue)},r},S.fn.extend({fadeTo:function(e,t,n,r){return this.filter(ae).css("opacity",0).show().end().animate({opacity:t},e,n,r)},animate:function(t,e,n,r){var i=S.isEmptyObject(t),o=S.speed(e,n,r),a=function(){var e=ft(this,S.extend({},t),o);(i||Y.get(this,"finish"))&&e.stop(!0)};return a.finish=a,i||!1===o.queue?this.each(a):this.queue(o.queue,a)},stop:function(i,e,o){var a=function(e){var t=e.stop;delete e.stop,t(o)};return"string"!=typeof i&&(o=e,e=i,i=void 0),e&&this.queue(i||"fx",[]),this.each(function(){var e=!0,t=null!=i&&i+"queueHooks",n=S.timers,r=Y.get(this);if(t)r[t]&&r[t].stop&&a(r[t]);else for(t in r)r[t]&&r[t].stop&&at.test(t)&&a(r[t]);for(t=n.length;t--;)n[t].elem!==this||null!=i&&n[t].queue!==i||(n[t].anim.stop(o),e=!1,n.splice(t,1));!e&&o||S.dequeue(this,i)})},finish:function(a){return!1!==a&&(a=a||"fx"),this.each(function(){var e,t=Y.get(this),n=t[a+"queue"],r=t[a+"queueHooks"],i=S.timers,o=n?n.length:0;for(t.finish=!0,S.queue(this,a,[]),r&&r.stop&&r.stop.call(this,!0),e=i.length;e--;)i[e].elem===this&&i[e].queue===a&&(i[e].anim.stop(!0),i.splice(e,1));for(e=0;e<o;e++)n[e]&&n[e].finish&&n[e].finish.call(this);delete t.finish})}}),S.each(["toggle","show","hide"],function(e,r){var i=S.fn[r];S.fn[r]=function(e,t,n){return null==e||"boolean"==typeof e?i.apply(this,arguments):this.animate(lt(r,!0),e,t,n)}}),S.each({slideDown:lt("show"),slideUp:lt("hide"),slideToggle:lt("toggle"),fadeIn:{opacity:"show"},fadeOut:{opacity:"hide"},fadeToggle:{opacity:"toggle"}},function(e,r){S.fn[e]=function(e,t,n){return this.animate(r,e,t,n)}}),S.timers=[],S.fx.tick=function(){var e,t=0,n=S.timers;for(tt=Date.now();t<n.length;t++)(e=n[t])()||n[t]!==e||n.splice(t--,1);n.length||S.fx.stop(),tt=void 0},S.fx.timer=function(e){S.timers.push(e),S.fx.start()},S.fx.interval=13,S.fx.start=function(){nt||(nt=!0,st())},S.fx.stop=function(){nt=null},S.fx.speeds={slow:600,fast:200,_default:400},S.fn.delay=function(r,e){return r=S.fx&&S.fx.speeds[r]||r,e=e||"fx",this.queue(e,function(e,t){var n=C.setTimeout(e,r);t.stop=function(){C.clearTimeout(n)}})},rt=E.createElement("input"),it=E.createElement("select").appendChild(E.createElement("option")),rt.type="checkbox",y.checkOn=""!==rt.value,y.optSelected=it.selected,(rt=E.createElement("input")).value="t",rt.type="radio",y.radioValue="t"===rt.value;var pt,dt=S.expr.attrHandle;S.fn.extend({attr:function(e,t){return $(this,S.attr,e,t,1<arguments.length)},removeAttr:function(e){return this.each(function(){S.removeAttr(this,e)})}}),S.extend({attr:function(e,t,n){var r,i,o=e.nodeType;if(3!==o&&8!==o&&2!==o)return"undefined"==typeof e.getAttribute?S.prop(e,t,n):(1===o&&S.isXMLDoc(e)||(i=S.attrHooks[t.toLowerCase()]||(S.expr.match.bool.test(t)?pt:void 0)),void 0!==n?null===n?void S.removeAttr(e,t):i&&"set"in i&&void 0!==(r=i.set(e,n,t))?r:(e.setAttribute(t,n+""),n):i&&"get"in i&&null!==(r=i.get(e,t))?r:null==(r=S.find.attr(e,t))?void 0:r)},attrHooks:{type:{set:function(e,t){if(!y.radioValue&&"radio"===t&&A(e,"input")){var n=e.value;return e.setAttribute("type",t),n&&(e.value=n),t}}}},removeAttr:function(e,t){var n,r=0,i=t&&t.match(P);if(i&&1===e.nodeType)while(n=i[r++])e.removeAttribute(n)}}),pt={set:function(e,t,n){return!1===t?S.removeAttr(e,n):e.setAttribute(n,n),n}},S.each(S.expr.match.bool.source.match(/\w+/g),function(e,t){var a=dt[t]||S.find.attr;dt[t]=function(e,t,n){var r,i,o=t.toLowerCase();return n||(i=dt[o],dt[o]=r,r=null!=a(e,t,n)?o:null,dt[o]=i),r}});var ht=/^(?:input|select|textarea|button)$/i,gt=/^(?:a|area)$/i;function vt(e){return(e.match(P)||[]).join(" ")}function yt(e){return e.getAttribute&&e.getAttribute("class")||""}function mt(e){return Array.isArray(e)?e:"string"==typeof e&&e.match(P)||[]}S.fn.extend({prop:function(e,t){return $(this,S.prop,e,t,1<arguments.length)},removeProp:function(e){return this.each(function(){delete this[S.propFix[e]||e]})}}),S.extend({prop:function(e,t,n){var r,i,o=e.nodeType;if(3!==o&&8!==o&&2!==o)return 1===o&&S.isXMLDoc(e)||(t=S.propFix[t]||t,i=S.propHooks[t]),void 0!==n?i&&"set"in i&&void 0!==(r=i.set(e,n,t))?r:e[t]=n:i&&"get"in i&&null!==(r=i.get(e,t))?r:e[t]},propHooks:{tabIndex:{get:function(e){var t=S.find.attr(e,"tabindex");return t?parseInt(t,10):ht.test(e.nodeName)||gt.test(e.nodeName)&&e.href?0:-1}}},propFix:{"for":"htmlFor","class":"className"}}),y.optSelected||(S.propHooks.selected={get:function(e){var t=e.parentNode;return t&&t.parentNode&&t.parentNode.selectedIndex,null},set:function(e){var t=e.parentNode;t&&(t.selectedIndex,t.parentNode&&t.parentNode.selectedIndex)}}),S.each(["tabIndex","readOnly","maxLength","cellSpacing","cellPadding","rowSpan","colSpan","useMap","frameBorder","contentEditable"],function(){S.propFix[this.toLowerCase()]=this}),S.fn.extend({addClass:function(t){var e,n,r,i,o,a,s,u=0;if(m(t))return this.each(function(e){S(this).addClass(t.call(this,e,yt(this)))});if((e=mt(t)).length)while(n=this[u++])if(i=yt(n),r=1===n.nodeType&&" "+vt(i)+" "){a=0;while(o=e[a++])r.indexOf(" "+o+" ")<0&&(r+=o+" ");i!==(s=vt(r))&&n.setAttribute("class",s)}return this},removeClass:function(t){var e,n,r,i,o,a,s,u=0;if(m(t))return this.each(function(e){S(this).removeClass(t.call(this,e,yt(this)))});if(!arguments.length)return this.attr("class","");if((e=mt(t)).length)while(n=this[u++])if(i=yt(n),r=1===n.nodeType&&" "+vt(i)+" "){a=0;while(o=e[a++])while(-1<r.indexOf(" "+o+" "))r=r.replace(" "+o+" "," ");i!==(s=vt(r))&&n.setAttribute("class",s)}return this},toggleClass:function(i,t){var o=typeof i,a="string"===o||Array.isArray(i);return"boolean"==typeof t&&a?t?this.addClass(i):this.removeClass(i):m(i)?this.each(function(e){S(this).toggleClass(i.call(this,e,yt(this),t),t)}):this.each(function(){var e,t,n,r;if(a){t=0,n=S(this),r=mt(i);while(e=r[t++])n.hasClass(e)?n.removeClass(e):n.addClass(e)}else void 0!==i&&"boolean"!==o||((e=yt(this))&&Y.set(this,"__className__",e),this.setAttribute&&this.setAttribute("class",e||!1===i?"":Y.get(this,"__className__")||""))})},hasClass:function(e){var t,n,r=0;t=" "+e+" ";while(n=this[r++])if(1===n.nodeType&&-1<(" "+vt(yt(n))+" ").indexOf(t))return!0;return!1}});var xt=/\r/g;S.fn.extend({val:function(n){var r,e,i,t=this[0];return arguments.length?(i=m(n),this.each(function(e){var t;1===this.nodeType&&(null==(t=i?n.call(this,e,S(this).val()):n)?t="":"number"==typeof t?t+="":Array.isArray(t)&&(t=S.map(t,function(e){return null==e?"":e+""})),(r=S.valHooks[this.type]||S.valHooks[this.nodeName.toLowerCase()])&&"set"in r&&void 0!==r.set(this,t,"value")||(this.value=t))})):t?(r=S.valHooks[t.type]||S.valHooks[t.nodeName.toLowerCase()])&&"get"in r&&void 0!==(e=r.get(t,"value"))?e:"string"==typeof(e=t.value)?e.replace(xt,""):null==e?"":e:void 0}}),S.extend({valHooks:{option:{get:function(e){var t=S.find.attr(e,"value");return null!=t?t:vt(S.text(e))}},select:{get:function(e){var t,n,r,i=e.options,o=e.selectedIndex,a="select-one"===e.type,s=a?null:[],u=a?o+1:i.length;for(r=o<0?u:a?o:0;r<u;r++)if(((n=i[r]).selected||r===o)&&!n.disabled&&(!n.parentNode.disabled||!A(n.parentNode,"optgroup"))){if(t=S(n).val(),a)return t;s.push(t)}return s},set:function(e,t){var n,r,i=e.options,o=S.makeArray(t),a=i.length;while(a--)((r=i[a]).selected=-1<S.inArray(S.valHooks.option.get(r),o))&&(n=!0);return n||(e.selectedIndex=-1),o}}}}),S.each(["radio","checkbox"],function(){S.valHooks[this]={set:function(e,t){if(Array.isArray(t))return e.checked=-1<S.inArray(S(e).val(),t)}},y.checkOn||(S.valHooks[this].get=function(e){return null===e.getAttribute("value")?"on":e.value})}),y.focusin="onfocusin"in C;var bt=/^(?:focusinfocus|focusoutblur)$/,wt=function(e){e.stopPropagation()};S.extend(S.event,{trigger:function(e,t,n,r){var i,o,a,s,u,l,c,f,p=[n||E],d=v.call(e,"type")?e.type:e,h=v.call(e,"namespace")?e.namespace.split("."):[];if(o=f=a=n=n||E,3!==n.nodeType&&8!==n.nodeType&&!bt.test(d+S.event.triggered)&&(-1<d.indexOf(".")&&(d=(h=d.split(".")).shift(),h.sort()),u=d.indexOf(":")<0&&"on"+d,(e=e[S.expando]?e:new S.Event(d,"object"==typeof e&&e)).isTrigger=r?2:3,e.namespace=h.join("."),e.rnamespace=e.namespace?new RegExp("(^|\\.)"+h.join("\\.(?:.*\\.|)")+"(\\.|$)"):null,e.result=void 0,e.target||(e.target=n),t=null==t?[e]:S.makeArray(t,[e]),c=S.event.special[d]||{},r||!c.trigger||!1!==c.trigger.apply(n,t))){if(!r&&!c.noBubble&&!x(n)){for(s=c.delegateType||d,bt.test(s+d)||(o=o.parentNode);o;o=o.parentNode)p.push(o),a=o;a===(n.ownerDocument||E)&&p.push(a.defaultView||a.parentWindow||C)}i=0;while((o=p[i++])&&!e.isPropagationStopped())f=o,e.type=1<i?s:c.bindType||d,(l=(Y.get(o,"events")||Object.create(null))[e.type]&&Y.get(o,"handle"))&&l.apply(o,t),(l=u&&o[u])&&l.apply&&V(o)&&(e.result=l.apply(o,t),!1===e.result&&e.preventDefault());return e.type=d,r||e.isDefaultPrevented()||c._default&&!1!==c._default.apply(p.pop(),t)||!V(n)||u&&m(n[d])&&!x(n)&&((a=n[u])&&(n[u]=null),S.event.triggered=d,e.isPropagationStopped()&&f.addEventListener(d,wt),n[d](),e.isPropagationStopped()&&f.removeEventListener(d,wt),S.event.triggered=void 0,a&&(n[u]=a)),e.result}},simulate:function(e,t,n){var r=S.extend(new S.Event,n,{type:e,isSimulated:!0});S.event.trigger(r,null,t)}}),S.fn.extend({trigger:function(e,t){return this.each(function(){S.event.trigger(e,t,this)})},triggerHandler:function(e,t){var n=this[0];if(n)return S.event.trigger(e,t,n,!0)}}),y.focusin||S.each({focus:"focusin",blur:"focusout"},function(n,r){var i=function(e){S.event.simulate(r,e.target,S.event.fix(e))};S.event.special[r]={setup:function(){var e=this.ownerDocument||this.document||this,t=Y.access(e,r);t||e.addEventListener(n,i,!0),Y.access(e,r,(t||0)+1)},teardown:function(){var e=this.ownerDocument||this.document||this,t=Y.access(e,r)-1;t?Y.access(e,r,t):(e.removeEventListener(n,i,!0),Y.remove(e,r))}}});var Tt=C.location,Ct={guid:Date.now()},Et=/\?/;S.parseXML=function(e){var t;if(!e||"string"!=typeof e)return null;try{t=(new C.DOMParser).parseFromString(e,"text/xml")}catch(e){t=void 0}return t&&!t.getElementsByTagName("parsererror").length||S.error("Invalid XML: "+e),t};var St=/\[\]$/,kt=/\r?\n/g,At=/^(?:submit|button|image|reset|file)$/i,Nt=/^(?:input|select|textarea|keygen)/i;function Dt(n,e,r,i){var t;if(Array.isArray(e))S.each(e,function(e,t){r||St.test(n)?i(n,t):Dt(n+"["+("object"==typeof t&&null!=t?e:"")+"]",t,r,i)});else if(r||"object"!==w(e))i(n,e);else for(t in e)Dt(n+"["+t+"]",e[t],r,i)}S.param=function(e,t){var n,r=[],i=function(e,t){var n=m(t)?t():t;r[r.length]=encodeURIComponent(e)+"="+encodeURIComponent(null==n?"":n)};if(null==e)return"";if(Array.isArray(e)||e.jquery&&!S.isPlainObject(e))S.each(e,function(){i(this.name,this.value)});else for(n in e)Dt(n,e[n],t,i);return r.join("&")},S.fn.extend({serialize:function(){return S.param(this.serializeArray())},serializeArray:function(){return this.map(function(){var e=S.prop(this,"elements");return e?S.makeArray(e):this}).filter(function(){var e=this.type;return this.name&&!S(this).is(":disabled")&&Nt.test(this.nodeName)&&!At.test(e)&&(this.checked||!pe.test(e))}).map(function(e,t){var n=S(this).val();return null==n?null:Array.isArray(n)?S.map(n,function(e){return{name:t.name,value:e.replace(kt,"\r\n")}}):{name:t.name,value:n.replace(kt,"\r\n")}}).get()}});var jt=/%20/g,qt=/#.*$/,Lt=/([?&])_=[^&]*/,Ht=/^(.*?):[ \t]*([^\r\n]*)$/gm,Ot=/^(?:GET|HEAD)$/,Pt=/^\/\//,Rt={},Mt={},It="*/".concat("*"),Wt=E.createElement("a");function Ft(o){return function(e,t){"string"!=typeof e&&(t=e,e="*");var n,r=0,i=e.toLowerCase().match(P)||[];if(m(t))while(n=i[r++])"+"===n[0]?(n=n.slice(1)||"*",(o[n]=o[n]||[]).unshift(t)):(o[n]=o[n]||[]).push(t)}}function Bt(t,i,o,a){var s={},u=t===Mt;function l(e){var r;return s[e]=!0,S.each(t[e]||[],function(e,t){var n=t(i,o,a);return"string"!=typeof n||u||s[n]?u?!(r=n):void 0:(i.dataTypes.unshift(n),l(n),!1)}),r}return l(i.dataTypes[0])||!s["*"]&&l("*")}function $t(e,t){var n,r,i=S.ajaxSettings.flatOptions||{};for(n in t)void 0!==t[n]&&((i[n]?e:r||(r={}))[n]=t[n]);return r&&S.extend(!0,e,r),e}Wt.href=Tt.href,S.extend({active:0,lastModified:{},etag:{},ajaxSettings:{url:Tt.href,type:"GET",isLocal:/^(?:about|app|app-storage|.+-extension|file|res|widget):$/.test(Tt.protocol),global:!0,processData:!0,async:!0,contentType:"application/x-www-form-urlencoded; charset=UTF-8",accepts:{"*":It,text:"text/plain",html:"text/html",xml:"application/xml, text/xml",json:"application/json, text/javascript"},contents:{xml:/\bxml\b/,html:/\bhtml/,json:/\bjson\b/},responseFields:{xml:"responseXML",text:"responseText",json:"responseJSON"},converters:{"* text":String,"text html":!0,"text json":JSON.parse,"text xml":S.parseXML},flatOptions:{url:!0,context:!0}},ajaxSetup:function(e,t){return t?$t($t(e,S.ajaxSettings),t):$t(S.ajaxSettings,e)},ajaxPrefilter:Ft(Rt),ajaxTransport:Ft(Mt),ajax:function(e,t){"object"==typeof e&&(t=e,e=void 0),t=t||{};var c,f,p,n,d,r,h,g,i,o,v=S.ajaxSetup({},t),y=v.context||v,m=v.context&&(y.nodeType||y.jquery)?S(y):S.event,x=S.Deferred(),b=S.Callbacks("once memory"),w=v.statusCode||{},a={},s={},u="canceled",T={readyState:0,getResponseHeader:function(e){var t;if(h){if(!n){n={};while(t=Ht.exec(p))n[t[1].toLowerCase()+" "]=(n[t[1].toLowerCase()+" "]||[]).concat(t[2])}t=n[e.toLowerCase()+" "]}return null==t?null:t.join(", ")},getAllResponseHeaders:function(){return h?p:null},setRequestHeader:function(e,t){return null==h&&(e=s[e.toLowerCase()]=s[e.toLowerCase()]||e,a[e]=t),this},overrideMimeType:function(e){return null==h&&(v.mimeType=e),this},statusCode:function(e){var t;if(e)if(h)T.always(e[T.status]);else for(t in e)w[t]=[w[t],e[t]];return this},abort:function(e){var t=e||u;return c&&c.abort(t),l(0,t),this}};if(x.promise(T),v.url=((e||v.url||Tt.href)+"").replace(Pt,Tt.protocol+"//"),v.type=t.method||t.type||v.method||v.type,v.dataTypes=(v.dataType||"*").toLowerCase().match(P)||[""],null==v.crossDomain){r=E.createElement("a");try{r.href=v.url,r.href=r.href,v.crossDomain=Wt.protocol+"//"+Wt.host!=r.protocol+"//"+r.host}catch(e){v.crossDomain=!0}}if(v.data&&v.processData&&"string"!=typeof v.data&&(v.data=S.param(v.data,v.traditional)),Bt(Rt,v,t,T),h)return T;for(i in(g=S.event&&v.global)&&0==S.active++&&S.event.trigger("ajaxStart"),v.type=v.type.toUpperCase(),v.hasContent=!Ot.test(v.type),f=v.url.replace(qt,""),v.hasContent?v.data&&v.processData&&0===(v.contentType||"").indexOf("application/x-www-form-urlencoded")&&(v.data=v.data.replace(jt,"+")):(o=v.url.slice(f.length),v.data&&(v.processData||"string"==typeof v.data)&&(f+=(Et.test(f)?"&":"?")+v.data,delete v.data),!1===v.cache&&(f=f.replace(Lt,"$1"),o=(Et.test(f)?"&":"?")+"_="+Ct.guid+++o),v.url=f+o),v.ifModified&&(S.lastModified[f]&&T.setRequestHeader("If-Modified-Since",S.lastModified[f]),S.etag[f]&&T.setRequestHeader("If-None-Match",S.etag[f])),(v.data&&v.hasContent&&!1!==v.contentType||t.contentType)&&T.setRequestHeader("Content-Type",v.contentType),T.setRequestHeader("Accept",v.dataTypes[0]&&v.accepts[v.dataTypes[0]]?v.accepts[v.dataTypes[0]]+("*"!==v.dataTypes[0]?", "+It+"; q=0.01":""):v.accepts["*"]),v.headers)T.setRequestHeader(i,v.headers[i]);if(v.beforeSend&&(!1===v.beforeSend.call(y,T,v)||h))return T.abort();if(u="abort",b.add(v.complete),T.done(v.success),T.fail(v.error),c=Bt(Mt,v,t,T)){if(T.readyState=1,g&&m.trigger("ajaxSend",[T,v]),h)return T;v.async&&0<v.timeout&&(d=C.setTimeout(function(){T.abort("timeout")},v.timeout));try{h=!1,c.send(a,l)}catch(e){if(h)throw e;l(-1,e)}}else l(-1,"No Transport");function l(e,t,n,r){var i,o,a,s,u,l=t;h||(h=!0,d&&C.clearTimeout(d),c=void 0,p=r||"",T.readyState=0<e?4:0,i=200<=e&&e<300||304===e,n&&(s=function(e,t,n){var r,i,o,a,s=e.contents,u=e.dataTypes;while("*"===u[0])u.shift(),void 0===r&&(r=e.mimeType||t.getResponseHeader("Content-Type"));if(r)for(i in s)if(s[i]&&s[i].test(r)){u.unshift(i);break}if(u[0]in n)o=u[0];else{for(i in n){if(!u[0]||e.converters[i+" "+u[0]]){o=i;break}a||(a=i)}o=o||a}if(o)return o!==u[0]&&u.unshift(o),n[o]}(v,T,n)),!i&&-1<S.inArray("script",v.dataTypes)&&(v.converters["text script"]=function(){}),s=function(e,t,n,r){var i,o,a,s,u,l={},c=e.dataTypes.slice();if(c[1])for(a in e.converters)l[a.toLowerCase()]=e.converters[a];o=c.shift();while(o)if(e.responseFields[o]&&(n[e.responseFields[o]]=t),!u&&r&&e.dataFilter&&(t=e.dataFilter(t,e.dataType)),u=o,o=c.shift())if("*"===o)o=u;else if("*"!==u&&u!==o){if(!(a=l[u+" "+o]||l["* "+o]))for(i in l)if((s=i.split(" "))[1]===o&&(a=l[u+" "+s[0]]||l["* "+s[0]])){!0===a?a=l[i]:!0!==l[i]&&(o=s[0],c.unshift(s[1]));break}if(!0!==a)if(a&&e["throws"])t=a(t);else try{t=a(t)}catch(e){return{state:"parsererror",error:a?e:"No conversion from "+u+" to "+o}}}return{state:"success",data:t}}(v,s,T,i),i?(v.ifModified&&((u=T.getResponseHeader("Last-Modified"))&&(S.lastModified[f]=u),(u=T.getResponseHeader("etag"))&&(S.etag[f]=u)),204===e||"HEAD"===v.type?l="nocontent":304===e?l="notmodified":(l=s.state,o=s.data,i=!(a=s.error))):(a=l,!e&&l||(l="error",e<0&&(e=0))),T.status=e,T.statusText=(t||l)+"",i?x.resolveWith(y,[o,l,T]):x.rejectWith(y,[T,l,a]),T.statusCode(w),w=void 0,g&&m.trigger(i?"ajaxSuccess":"ajaxError",[T,v,i?o:a]),b.fireWith(y,[T,l]),g&&(m.trigger("ajaxComplete",[T,v]),--S.active||S.event.trigger("ajaxStop")))}return T},getJSON:function(e,t,n){return S.get(e,t,n,"json")},getScript:function(e,t){return S.get(e,void 0,t,"script")}}),S.each(["get","post"],function(e,i){S[i]=function(e,t,n,r){return m(t)&&(r=r||n,n=t,t=void 0),S.ajax(S.extend({url:e,type:i,dataType:r,data:t,success:n},S.isPlainObject(e)&&e))}}),S.ajaxPrefilter(function(e){var t;for(t in e.headers)"content-type"===t.toLowerCase()&&(e.contentType=e.headers[t]||"")}),S._evalUrl=function(e,t,n){return S.ajax({url:e,type:"GET",dataType:"script",cache:!0,async:!1,global:!1,converters:{"text script":function(){}},dataFilter:function(e){S.globalEval(e,t,n)}})},S.fn.extend({wrapAll:function(e){var t;return this[0]&&(m(e)&&(e=e.call(this[0])),t=S(e,this[0].ownerDocument).eq(0).clone(!0),this[0].parentNode&&t.insertBefore(this[0]),t.map(function(){var e=this;while(e.firstElementChild)e=e.firstElementChild;return e}).append(this)),this},wrapInner:function(n){return m(n)?this.each(function(e){S(this).wrapInner(n.call(this,e))}):this.each(function(){var e=S(this),t=e.contents();t.length?t.wrapAll(n):e.append(n)})},wrap:function(t){var n=m(t);return this.each(function(e){S(this).wrapAll(n?t.call(this,e):t)})},unwrap:function(e){return this.parent(e).not("body").each(function(){S(this).replaceWith(this.childNodes)}),this}}),S.expr.pseudos.hidden=function(e){return!S.expr.pseudos.visible(e)},S.expr.pseudos.visible=function(e){return!!(e.offsetWidth||e.offsetHeight||e.getClientRects().length)},S.ajaxSettings.xhr=function(){try{return new C.XMLHttpRequest}catch(e){}};var _t={0:200,1223:204},zt=S.ajaxSettings.xhr();y.cors=!!zt&&"withCredentials"in zt,y.ajax=zt=!!zt,S.ajaxTransport(function(i){var o,a;if(y.cors||zt&&!i.crossDomain)return{send:function(e,t){var n,r=i.xhr();if(r.open(i.type,i.url,i.async,i.username,i.password),i.xhrFields)for(n in i.xhrFields)r[n]=i.xhrFields[n];for(n in i.mimeType&&r.overrideMimeType&&r.overrideMimeType(i.mimeType),i.crossDomain||e["X-Requested-With"]||(e["X-Requested-With"]="XMLHttpRequest"),e)r.setRequestHeader(n,e[n]);o=function(e){return function(){o&&(o=a=r.onload=r.onerror=r.onabort=r.ontimeout=r.onreadystatechange=null,"abort"===e?r.abort():"error"===e?"number"!=typeof r.status?t(0,"error"):t(r.status,r.statusText):t(_t[r.status]||r.status,r.statusText,"text"!==(r.responseType||"text")||"string"!=typeof r.responseText?{binary:r.response}:{text:r.responseText},r.getAllResponseHeaders()))}},r.onload=o(),a=r.onerror=r.ontimeout=o("error"),void 0!==r.onabort?r.onabort=a:r.onreadystatechange=function(){4===r.readyState&&C.setTimeout(function(){o&&a()})},o=o("abort");try{r.send(i.hasContent&&i.data||null)}catch(e){if(o)throw e}},abort:function(){o&&o()}}}),S.ajaxPrefilter(function(e){e.crossDomain&&(e.contents.script=!1)}),S.ajaxSetup({accepts:{script:"text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"},contents:{script:/\b(?:java|ecma)script\b/},converters:{"text script":function(e){return S.globalEval(e),e}}}),S.ajaxPrefilter("script",function(e){void 0===e.cache&&(e.cache=!1),e.crossDomain&&(e.type="GET")}),S.ajaxTransport("script",function(n){var r,i;if(n.crossDomain||n.scriptAttrs)return{send:function(e,t){r=S("<script>").attr(n.scriptAttrs||{}).prop({charset:n.scriptCharset,src:n.url}).on("load error",i=function(e){r.remove(),i=null,e&&t("error"===e.type?404:200,e.type)}),E.head.appendChild(r[0])},abort:function(){i&&i()}}});var Ut,Xt=[],Vt=/(=)\?(?=&|$)|\?\?/;S.ajaxSetup({jsonp:"callback",jsonpCallback:function(){var e=Xt.pop()||S.expando+"_"+Ct.guid++;return this[e]=!0,e}}),S.ajaxPrefilter("json jsonp",function(e,t,n){var r,i,o,a=!1!==e.jsonp&&(Vt.test(e.url)?"url":"string"==typeof e.data&&0===(e.contentType||"").indexOf("application/x-www-form-urlencoded")&&Vt.test(e.data)&&"data");if(a||"jsonp"===e.dataTypes[0])return r=e.jsonpCallback=m(e.jsonpCallback)?e.jsonpCallback():e.jsonpCallback,a?e[a]=e[a].replace(Vt,"$1"+r):!1!==e.jsonp&&(e.url+=(Et.test(e.url)?"&":"?")+e.jsonp+"="+r),e.converters["script json"]=function(){return o||S.error(r+" was not called"),o[0]},e.dataTypes[0]="json",i=C[r],C[r]=function(){o=arguments},n.always(function(){void 0===i?S(C).removeProp(r):C[r]=i,e[r]&&(e.jsonpCallback=t.jsonpCallback,Xt.push(r)),o&&m(i)&&i(o[0]),o=i=void 0}),"script"}),y.createHTMLDocument=((Ut=E.implementation.createHTMLDocument("").body).innerHTML="<form></form><form></form>",2===Ut.childNodes.length),S.parseHTML=function(e,t,n){return"string"!=typeof e?[]:("boolean"==typeof t&&(n=t,t=!1),t||(y.createHTMLDocument?((r=(t=E.implementation.createHTMLDocument("")).createElement("base")).href=E.location.href,t.head.appendChild(r)):t=E),o=!n&&[],(i=N.exec(e))?[t.createElement(i[1])]:(i=xe([e],t,o),o&&o.length&&S(o).remove(),S.merge([],i.childNodes)));var r,i,o},S.fn.load=function(e,t,n){var r,i,o,a=this,s=e.indexOf(" ");return-1<s&&(r=vt(e.slice(s)),e=e.slice(0,s)),m(t)?(n=t,t=void 0):t&&"object"==typeof t&&(i="POST"),0<a.length&&S.ajax({url:e,type:i||"GET",dataType:"html",data:t}).done(function(e){o=arguments,a.html(r?S("<div>").append(S.parseHTML(e)).find(r):e)}).always(n&&function(e,t){a.each(function(){n.apply(this,o||[e.responseText,t,e])})}),this},S.expr.pseudos.animated=function(t){return S.grep(S.timers,function(e){return t===e.elem}).length},S.offset={setOffset:function(e,t,n){var r,i,o,a,s,u,l=S.css(e,"position"),c=S(e),f={};"static"===l&&(e.style.position="relative"),s=c.offset(),o=S.css(e,"top"),u=S.css(e,"left"),("absolute"===l||"fixed"===l)&&-1<(o+u).indexOf("auto")?(a=(r=c.position()).top,i=r.left):(a=parseFloat(o)||0,i=parseFloat(u)||0),m(t)&&(t=t.call(e,n,S.extend({},s))),null!=t.top&&(f.top=t.top-s.top+a),null!=t.left&&(f.left=t.left-s.left+i),"using"in t?t.using.call(e,f):("number"==typeof f.top&&(f.top+="px"),"number"==typeof f.left&&(f.left+="px"),c.css(f))}},S.fn.extend({offset:function(t){if(arguments.length)return void 0===t?this:this.each(function(e){S.offset.setOffset(this,t,e)});var e,n,r=this[0];return r?r.getClientRects().length?(e=r.getBoundingClientRect(),n=r.ownerDocument.defaultView,{top:e.top+n.pageYOffset,left:e.left+n.pageXOffset}):{top:0,left:0}:void 0},position:function(){if(this[0]){var e,t,n,r=this[0],i={top:0,left:0};if("fixed"===S.css(r,"position"))t=r.getBoundingClientRect();else{t=this.offset(),n=r.ownerDocument,e=r.offsetParent||n.documentElement;while(e&&(e===n.body||e===n.documentElement)&&"static"===S.css(e,"position"))e=e.parentNode;e&&e!==r&&1===e.nodeType&&((i=S(e).offset()).top+=S.css(e,"borderTopWidth",!0),i.left+=S.css(e,"borderLeftWidth",!0))}return{top:t.top-i.top-S.css(r,"marginTop",!0),left:t.left-i.left-S.css(r,"marginLeft",!0)}}},offsetParent:function(){return this.map(function(){var e=this.offsetParent;while(e&&"static"===S.css(e,"position"))e=e.offsetParent;return e||re})}}),S.each({scrollLeft:"pageXOffset",scrollTop:"pageYOffset"},function(t,i){var o="pageYOffset"===i;S.fn[t]=function(e){return $(this,function(e,t,n){var r;if(x(e)?r=e:9===e.nodeType&&(r=e.defaultView),void 0===n)return r?r[i]:e[t];r?r.scrollTo(o?r.pageXOffset:n,o?n:r.pageYOffset):e[t]=n},t,e,arguments.length)}}),S.each(["top","left"],function(e,n){S.cssHooks[n]=$e(y.pixelPosition,function(e,t){if(t)return t=Be(e,n),Me.test(t)?S(e).position()[n]+"px":t})}),S.each({Height:"height",Width:"width"},function(a,s){S.each({padding:"inner"+a,content:s,"":"outer"+a},function(r,o){S.fn[o]=function(e,t){var n=arguments.length&&(r||"boolean"!=typeof e),i=r||(!0===e||!0===t?"margin":"border");return $(this,function(e,t,n){var r;return x(e)?0===o.indexOf("outer")?e["inner"+a]:e.document.documentElement["client"+a]:9===e.nodeType?(r=e.documentElement,Math.max(e.body["scroll"+a],r["scroll"+a],e.body["offset"+a],r["offset"+a],r["client"+a])):void 0===n?S.css(e,t,i):S.style(e,t,n,i)},s,n?e:void 0,n)}})}),S.each(["ajaxStart","ajaxStop","ajaxComplete","ajaxError","ajaxSuccess","ajaxSend"],function(e,t){S.fn[t]=function(e){return this.on(t,e)}}),S.fn.extend({bind:function(e,t,n){return this.on(e,null,t,n)},unbind:function(e,t){return this.off(e,null,t)},delegate:function(e,t,n,r){return this.on(t,e,n,r)},undelegate:function(e,t,n){return 1===arguments.length?this.off(e,"**"):this.off(t,e||"**",n)},hover:function(e,t){return this.mouseenter(e).mouseleave(t||e)}}),S.each("blur focus focusin focusout resize scroll click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup contextmenu".split(" "),function(e,n){S.fn[n]=function(e,t){return 0<arguments.length?this.on(n,null,e,t):this.trigger(n)}});var Gt=/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;S.proxy=function(e,t){var n,r,i;if("string"==typeof t&&(n=e[t],t=e,e=n),m(e))return r=s.call(arguments,2),(i=function(){return e.apply(t||this,r.concat(s.call(arguments)))}).guid=e.guid=e.guid||S.guid++,i},S.holdReady=function(e){e?S.readyWait++:S.ready(!0)},S.isArray=Array.isArray,S.parseJSON=JSON.parse,S.nodeName=A,S.isFunction=m,S.isWindow=x,S.camelCase=X,S.type=w,S.now=Date.now,S.isNumeric=function(e){var t=S.type(e);return("number"===t||"string"===t)&&!isNaN(e-parseFloat(e))},S.trim=function(e){return null==e?"":(e+"").replace(Gt,"")},"function"==typeof define&&define.amd&&define("jquery",[],function(){return S});var Yt=C.jQuery,Qt=C.$;return S.noConflict=function(e){return C.$===S&&(C.$=Qt),e&&C.jQuery===S&&(C.jQuery=Yt),S},"undefined"==typeof e&&(C.jQuery=C.$=S),S});
jQuery.noConflict();;
/*! jQuery Migrate v3.3.2 | (c) OpenJS Foundation and other contributors | jquery.org/license */
"undefined"==typeof jQuery.migrateMute&&(jQuery.migrateMute=!0),function(t){"use strict";"function"==typeof define&&define.amd?define(["jquery"],function(e){return t(e,window)}):"object"==typeof module&&module.exports?module.exports=t(require("jquery"),window):t(jQuery,window)}(function(s,n){"use strict";function e(e){return 0<=function(e,t){for(var r=/^(\d+)\.(\d+)\.(\d+)/,n=r.exec(e)||[],o=r.exec(t)||[],i=1;i<=3;i++){if(+o[i]<+n[i])return 1;if(+n[i]<+o[i])return-1}return 0}(s.fn.jquery,e)}s.migrateVersion="3.3.2",n.console&&n.console.log&&(s&&e("3.0.0")||n.console.log("JQMIGRATE: jQuery 3.0.0+ REQUIRED"),s.migrateWarnings&&n.console.log("JQMIGRATE: Migrate plugin loaded multiple times"),n.console.log("JQMIGRATE: Migrate is installed"+(s.migrateMute?"":" with logging active")+", version "+s.migrateVersion));var r={};function u(e){var t=n.console;s.migrateDeduplicateWarnings&&r[e]||(r[e]=!0,s.migrateWarnings.push(e),t&&t.warn&&!s.migrateMute&&(t.warn("JQMIGRATE: "+e),s.migrateTrace&&t.trace&&t.trace()))}function t(e,t,r,n){Object.defineProperty(e,t,{configurable:!0,enumerable:!0,get:function(){return u(n),r},set:function(e){u(n),r=e}})}function o(e,t,r,n){e[t]=function(){return u(n),r.apply(this,arguments)}}s.migrateDeduplicateWarnings=!0,s.migrateWarnings=[],void 0===s.migrateTrace&&(s.migrateTrace=!0),s.migrateReset=function(){r={},s.migrateWarnings.length=0},"BackCompat"===n.document.compatMode&&u("jQuery is not compatible with Quirks Mode");var i,a,c,d={},l=s.fn.init,p=s.find,f=/\[(\s*[-\w]+\s*)([~|^$*]?=)\s*([-\w#]*?#[-\w#]*)\s*\]/,y=/\[(\s*[-\w]+\s*)([~|^$*]?=)\s*([-\w#]*?#[-\w#]*)\s*\]/g,m=/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;for(i in s.fn.init=function(e){var t=Array.prototype.slice.call(arguments);return"string"==typeof e&&"#"===e&&(u("jQuery( '#' ) is not a valid selector"),t[0]=[]),l.apply(this,t)},s.fn.init.prototype=s.fn,s.find=function(t){var r=Array.prototype.slice.call(arguments);if("string"==typeof t&&f.test(t))try{n.document.querySelector(t)}catch(e){t=t.replace(y,function(e,t,r,n){return"["+t+r+'"'+n+'"]'});try{n.document.querySelector(t),u("Attribute selector with '#' must be quoted: "+r[0]),r[0]=t}catch(e){u("Attribute selector with '#' was not fixed: "+r[0])}}return p.apply(this,r)},p)Object.prototype.hasOwnProperty.call(p,i)&&(s.find[i]=p[i]);o(s.fn,"size",function(){return this.length},"jQuery.fn.size() is deprecated and removed; use the .length property"),o(s,"parseJSON",function(){return JSON.parse.apply(null,arguments)},"jQuery.parseJSON is deprecated; use JSON.parse"),o(s,"holdReady",s.holdReady,"jQuery.holdReady is deprecated"),o(s,"unique",s.uniqueSort,"jQuery.unique is deprecated; use jQuery.uniqueSort"),t(s.expr,"filters",s.expr.pseudos,"jQuery.expr.filters is deprecated; use jQuery.expr.pseudos"),t(s.expr,":",s.expr.pseudos,"jQuery.expr[':'] is deprecated; use jQuery.expr.pseudos"),e("3.1.1")&&o(s,"trim",function(e){return null==e?"":(e+"").replace(m,"")},"jQuery.trim is deprecated; use String.prototype.trim"),e("3.2.0")&&(o(s,"nodeName",function(e,t){return e.nodeName&&e.nodeName.toLowerCase()===t.toLowerCase()},"jQuery.nodeName is deprecated"),o(s,"isArray",Array.isArray,"jQuery.isArray is deprecated; use Array.isArray")),e("3.3.0")&&(o(s,"isNumeric",function(e){var t=typeof e;return("number"==t||"string"==t)&&!isNaN(e-parseFloat(e))},"jQuery.isNumeric() is deprecated"),s.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "),function(e,t){d["[object "+t+"]"]=t.toLowerCase()}),o(s,"type",function(e){return null==e?e+"":"object"==typeof e||"function"==typeof e?d[Object.prototype.toString.call(e)]||"object":typeof e},"jQuery.type is deprecated"),o(s,"isFunction",function(e){return"function"==typeof e},"jQuery.isFunction() is deprecated"),o(s,"isWindow",function(e){return null!=e&&e===e.window},"jQuery.isWindow() is deprecated")),s.ajax&&(a=s.ajax,c=/(=)\?(?=&|$)|\?\?/,s.ajax=function(){var e=a.apply(this,arguments);return e.promise&&(o(e,"success",e.done,"jQXHR.success is deprecated and removed"),o(e,"error",e.fail,"jQXHR.error is deprecated and removed"),o(e,"complete",e.always,"jQXHR.complete is deprecated and removed")),e},e("4.0.0")||s.ajaxPrefilter("+json",function(e){!1!==e.jsonp&&(c.test(e.url)||"string"==typeof e.data&&0===(e.contentType||"").indexOf("application/x-www-form-urlencoded")&&c.test(e.data))&&u("JSON-to-JSONP auto-promotion is deprecated")}));var g=s.fn.removeAttr,h=s.fn.toggleClass,v=/\S+/g;function j(e){return e.replace(/-([a-z])/g,function(e,t){return t.toUpperCase()})}s.fn.removeAttr=function(e){var r=this;return s.each(e.match(v),function(e,t){s.expr.match.bool.test(t)&&(u("jQuery.fn.removeAttr no longer sets boolean properties: "+t),r.prop(t,!1))}),g.apply(this,arguments)};var Q,b=!(s.fn.toggleClass=function(t){return void 0!==t&&"boolean"!=typeof t?h.apply(this,arguments):(u("jQuery.fn.toggleClass( boolean ) is deprecated"),this.each(function(){var e=this.getAttribute&&this.getAttribute("class")||"";e&&s.data(this,"__className__",e),this.setAttribute&&this.setAttribute("class",!e&&!1!==t&&s.data(this,"__className__")||"")}))}),w=/^[a-z]/,x=/^(?:Border(?:Top|Right|Bottom|Left)?(?:Width|)|(?:Margin|Padding)?(?:Top|Right|Bottom|Left)?|(?:Min|Max)?(?:Width|Height))$/;s.swap&&s.each(["height","width","reliableMarginRight"],function(e,t){var r=s.cssHooks[t]&&s.cssHooks[t].get;r&&(s.cssHooks[t].get=function(){var e;return b=!0,e=r.apply(this,arguments),b=!1,e})}),s.swap=function(e,t,r,n){var o,i,a={};for(i in b||u("jQuery.swap() is undocumented and deprecated"),t)a[i]=e.style[i],e.style[i]=t[i];for(i in o=r.apply(e,n||[]),t)e.style[i]=a[i];return o},e("3.4.0")&&"undefined"!=typeof Proxy&&(s.cssProps=new Proxy(s.cssProps||{},{set:function(){return u("JQMIGRATE: jQuery.cssProps is deprecated"),Reflect.set.apply(this,arguments)}})),s.cssNumber||(s.cssNumber={}),Q=s.fn.css,s.fn.css=function(e,t){var r,n,o=this;return e&&"object"==typeof e&&!Array.isArray(e)?(s.each(e,function(e,t){s.fn.css.call(o,e,t)}),this):("number"==typeof t&&(r=j(e),n=r,w.test(n)&&x.test(n[0].toUpperCase()+n.slice(1))||s.cssNumber[r]||u('Number-typed values are deprecated for jQuery.fn.css( "'+e+'", value )')),Q.apply(this,arguments))};var A,k,S,M,N=s.data;s.data=function(e,t,r){var n,o,i;if(t&&"object"==typeof t&&2===arguments.length){for(i in n=s.hasData(e)&&N.call(this,e),o={},t)i!==j(i)?(u("jQuery.data() always sets/gets camelCased names: "+i),n[i]=t[i]):o[i]=t[i];return N.call(this,e,o),t}return t&&"string"==typeof t&&t!==j(t)&&(n=s.hasData(e)&&N.call(this,e))&&t in n?(u("jQuery.data() always sets/gets camelCased names: "+t),2<arguments.length&&(n[t]=r),n[t]):N.apply(this,arguments)},s.fx&&(S=s.Tween.prototype.run,M=function(e){return e},s.Tween.prototype.run=function(){1<s.easing[this.easing].length&&(u("'jQuery.easing."+this.easing.toString()+"' should use only one argument"),s.easing[this.easing]=M),S.apply(this,arguments)},A=s.fx.interval||13,k="jQuery.fx.interval is deprecated",n.requestAnimationFrame&&Object.defineProperty(s.fx,"interval",{configurable:!0,enumerable:!0,get:function(){return n.document.hidden||u(k),A},set:function(e){u(k),A=e}}));var R=s.fn.load,H=s.event.add,C=s.event.fix;s.event.props=[],s.event.fixHooks={},t(s.event.props,"concat",s.event.props.concat,"jQuery.event.props.concat() is deprecated and removed"),s.event.fix=function(e){var t,r=e.type,n=this.fixHooks[r],o=s.event.props;if(o.length){u("jQuery.event.props are deprecated and removed: "+o.join());while(o.length)s.event.addProp(o.pop())}if(n&&!n._migrated_&&(n._migrated_=!0,u("jQuery.event.fixHooks are deprecated and removed: "+r),(o=n.props)&&o.length))while(o.length)s.event.addProp(o.pop());return t=C.call(this,e),n&&n.filter?n.filter(t,e):t},s.event.add=function(e,t){return e===n&&"load"===t&&"complete"===n.document.readyState&&u("jQuery(window).on('load'...) called after load event occurred"),H.apply(this,arguments)},s.each(["load","unload","error"],function(e,t){s.fn[t]=function(){var e=Array.prototype.slice.call(arguments,0);return"load"===t&&"string"==typeof e[0]?R.apply(this,e):(u("jQuery.fn."+t+"() is deprecated"),e.splice(0,0,t),arguments.length?this.on.apply(this,e):(this.triggerHandler.apply(this,e),this))}}),s.each("blur focus focusin focusout resize scroll click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup contextmenu".split(" "),function(e,r){s.fn[r]=function(e,t){return u("jQuery.fn."+r+"() event shorthand is deprecated"),0<arguments.length?this.on(r,null,e,t):this.trigger(r)}}),s(function(){s(n.document).triggerHandler("ready")}),s.event.special.ready={setup:function(){this===n.document&&u("'ready' event is deprecated")}},s.fn.extend({bind:function(e,t,r){return u("jQuery.fn.bind() is deprecated"),this.on(e,null,t,r)},unbind:function(e,t){return u("jQuery.fn.unbind() is deprecated"),this.off(e,null,t)},delegate:function(e,t,r,n){return u("jQuery.fn.delegate() is deprecated"),this.on(t,e,r,n)},undelegate:function(e,t,r){return u("jQuery.fn.undelegate() is deprecated"),1===arguments.length?this.off(e,"**"):this.off(t,e||"**",r)},hover:function(e,t){return u("jQuery.fn.hover() is deprecated"),this.on("mouseenter",e).on("mouseleave",t||e)}});function T(e){var t=n.document.implementation.createHTMLDocument("");return t.body.innerHTML=e,t.body&&t.body.innerHTML}function P(e){var t=e.replace(O,"<$1></$2>");t!==e&&T(e)!==T(t)&&u("HTML tags must be properly nested and closed: "+e)}var O=/<(?!area|br|col|embed|hr|img|input|link|meta|param)(([a-z][^\/\0>\x20\t\r\n\f]*)[^>]*)\/>/gi,q=s.htmlPrefilter;s.UNSAFE_restoreLegacyHtmlPrefilter=function(){s.htmlPrefilter=function(e){return P(e),e.replace(O,"<$1></$2>")}},s.htmlPrefilter=function(e){return P(e),q(e)};var D,_=s.fn.offset;s.fn.offset=function(){var e=this[0];return!e||e.nodeType&&e.getBoundingClientRect?_.apply(this,arguments):(u("jQuery.fn.offset() requires a valid DOM element"),arguments.length?this:void 0)},s.ajax&&(D=s.param,s.param=function(e,t){var r=s.ajaxSettings&&s.ajaxSettings.traditional;return void 0===t&&r&&(u("jQuery.param() no longer uses jQuery.ajaxSettings.traditional"),t=r),D.call(this,e,t)});var E,F,J=s.fn.andSelf||s.fn.addBack;return s.fn.andSelf=function(){return u("jQuery.fn.andSelf() is deprecated and removed, use jQuery.fn.addBack()"),J.apply(this,arguments)},s.Deferred&&(E=s.Deferred,F=[["resolve","done",s.Callbacks("once memory"),s.Callbacks("once memory"),"resolved"],["reject","fail",s.Callbacks("once memory"),s.Callbacks("once memory"),"rejected"],["notify","progress",s.Callbacks("memory"),s.Callbacks("memory")]],s.Deferred=function(e){var i=E(),a=i.promise();return i.pipe=a.pipe=function(){var o=arguments;return u("deferred.pipe() is deprecated"),s.Deferred(function(n){s.each(F,function(e,t){var r="function"==typeof o[e]&&o[e];i[t[1]](function(){var e=r&&r.apply(this,arguments);e&&"function"==typeof e.promise?e.promise().done(n.resolve).fail(n.reject).progress(n.notify):n[t[0]+"With"](this===a?n.promise():this,r?[e]:arguments)})}),o=null}).promise()},e&&e.call(i,i),i},s.Deferred.exceptionHook=E.exceptionHook),s});
;
/*!
 * jQuery JavaScript Library v1.12.3
 * http://jquery.com/
 *
 * Includes Sizzle.js
 * http://sizzlejs.com/
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license
 * http://jquery.org/license
 *
 * Date: 2016-04-05T19:16Z
 */

(function( global, factory ) {

	if ( typeof module === "object" && typeof module.exports === "object" ) {
		// For CommonJS and CommonJS-like environments where a proper `window`
		// is present, execute the factory and get jQuery.
		// For environments that do not have a `window` with a `document`
		// (such as Node.js), expose a factory as module.exports.
		// This accentuates the need for the creation of a real `window`.
		// e.g. var jQuery = require("jquery")(window);
		// See ticket #14549 for more info.
		module.exports = global.document ?
			factory( global, true ) :
			function( w ) {
				if ( !w.document ) {
					throw new Error( "jQuery requires a window with a document" );
				}
				return factory( w );
			};
	} else {
		factory( global );
	}

// Pass this if window is not defined yet
}(typeof window !== "undefined" ? window : this, function( window, noGlobal ) {

// Support: Firefox 18+
// Can't be in strict mode, several libs including ASP.NET trace
// the stack via arguments.caller.callee and Firefox dies if
// you try to trace through "use strict" call chains. (#13335)
//"use strict";
var deletedIds = [];

var document = window.document;

var slice = deletedIds.slice;

var concat = deletedIds.concat;

var push = deletedIds.push;

var indexOf = deletedIds.indexOf;

var class2type = {};

var toString = class2type.toString;

var hasOwn = class2type.hasOwnProperty;

var support = {};



var
	version = "1.12.3",

	// Define a local copy of jQuery
	jQuery = function( selector, context ) {

		// The jQuery object is actually just the init constructor 'enhanced'
		// Need init if jQuery is called (just allow error to be thrown if not included)
		return new jQuery.fn.init( selector, context );
	},

	// Support: Android<4.1, IE<9
	// Make sure we trim BOM and NBSP
	rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,

	// Matches dashed string for camelizing
	rmsPrefix = /^-ms-/,
	rdashAlpha = /-([\da-z])/gi,

	// Used by jQuery.camelCase as callback to replace()
	fcamelCase = function( all, letter ) {
		return letter.toUpperCase();
	};

jQuery.fn = jQuery.prototype = {

	// The current version of jQuery being used
	jquery: version,

	constructor: jQuery,

	// Start with an empty selector
	selector: "",

	// The default length of a jQuery object is 0
	length: 0,

	toArray: function() {
		return slice.call( this );
	},

	// Get the Nth element in the matched element set OR
	// Get the whole matched element set as a clean array
	get: function( num ) {
		return num != null ?

			// Return just the one element from the set
			( num < 0 ? this[ num + this.length ] : this[ num ] ) :

			// Return all the elements in a clean array
			slice.call( this );
	},

	// Take an array of elements and push it onto the stack
	// (returning the new matched element set)
	pushStack: function( elems ) {

		// Build a new jQuery matched element set
		var ret = jQuery.merge( this.constructor(), elems );

		// Add the old object onto the stack (as a reference)
		ret.prevObject = this;
		ret.context = this.context;

		// Return the newly-formed element set
		return ret;
	},

	// Execute a callback for every element in the matched set.
	each: function( callback ) {
		return jQuery.each( this, callback );
	},

	map: function( callback ) {
		return this.pushStack( jQuery.map( this, function( elem, i ) {
			return callback.call( elem, i, elem );
		} ) );
	},

	slice: function() {
		return this.pushStack( slice.apply( this, arguments ) );
	},

	first: function() {
		return this.eq( 0 );
	},

	last: function() {
		return this.eq( -1 );
	},

	eq: function( i ) {
		var len = this.length,
			j = +i + ( i < 0 ? len : 0 );
		return this.pushStack( j >= 0 && j < len ? [ this[ j ] ] : [] );
	},

	end: function() {
		return this.prevObject || this.constructor();
	},

	// For internal use only.
	// Behaves like an Array's method, not like a jQuery method.
	push: push,
	sort: deletedIds.sort,
	splice: deletedIds.splice
};

jQuery.extend = jQuery.fn.extend = function() {
	var src, copyIsArray, copy, name, options, clone,
		target = arguments[ 0 ] || {},
		i = 1,
		length = arguments.length,
		deep = false;

	// Handle a deep copy situation
	if ( typeof target === "boolean" ) {
		deep = target;

		// skip the boolean and the target
		target = arguments[ i ] || {};
		i++;
	}

	// Handle case when target is a string or something (possible in deep copy)
	if ( typeof target !== "object" && !jQuery.isFunction( target ) ) {
		target = {};
	}

	// extend jQuery itself if only one argument is passed
	if ( i === length ) {
		target = this;
		i--;
	}

	for ( ; i < length; i++ ) {

		// Only deal with non-null/undefined values
		if ( ( options = arguments[ i ] ) != null ) {

			// Extend the base object
			for ( name in options ) {
				src = target[ name ];
				copy = options[ name ];

				// Prevent never-ending loop
				if ( target === copy ) {
					continue;
				}

				// Recurse if we're merging plain objects or arrays
				if ( deep && copy && ( jQuery.isPlainObject( copy ) ||
					( copyIsArray = jQuery.isArray( copy ) ) ) ) {

					if ( copyIsArray ) {
						copyIsArray = false;
						clone = src && jQuery.isArray( src ) ? src : [];

					} else {
						clone = src && jQuery.isPlainObject( src ) ? src : {};
					}

					// Never move original objects, clone them
					target[ name ] = jQuery.extend( deep, clone, copy );

				// Don't bring in undefined values
				} else if ( copy !== undefined ) {
					target[ name ] = copy;
				}
			}
		}
	}

	// Return the modified object
	return target;
};

jQuery.extend( {

	// Unique for each copy of jQuery on the page
	expando: "jQuery" + ( version + Math.random() ).replace( /\D/g, "" ),

	// Assume jQuery is ready without the ready module
	isReady: true,

	error: function( msg ) {
		throw new Error( msg );
	},

	noop: function() {},

	// See test/unit/core.js for details concerning isFunction.
	// Since version 1.3, DOM methods and functions like alert
	// aren't supported. They return false on IE (#2968).
	isFunction: function( obj ) {
		return jQuery.type( obj ) === "function";
	},

	isArray: Array.isArray || function( obj ) {
		return jQuery.type( obj ) === "array";
	},

	isWindow: function( obj ) {
		/* jshint eqeqeq: false */
		return obj != null && obj == obj.window;
	},

	isNumeric: function( obj ) {

		// parseFloat NaNs numeric-cast false positives (null|true|false|"")
		// ...but misinterprets leading-number strings, particularly hex literals ("0x...")
		// subtraction forces infinities to NaN
		// adding 1 corrects loss of precision from parseFloat (#15100)
		var realStringObj = obj && obj.toString();
		return !jQuery.isArray( obj ) && ( realStringObj - parseFloat( realStringObj ) + 1 ) >= 0;
	},

	isEmptyObject: function( obj ) {
		var name;
		for ( name in obj ) {
			return false;
		}
		return true;
	},

	isPlainObject: function( obj ) {
		var key;

		// Must be an Object.
		// Because of IE, we also have to check the presence of the constructor property.
		// Make sure that DOM nodes and window objects don't pass through, as well
		if ( !obj || jQuery.type( obj ) !== "object" || obj.nodeType || jQuery.isWindow( obj ) ) {
			return false;
		}

		try {

			// Not own constructor property must be Object
			if ( obj.constructor &&
				!hasOwn.call( obj, "constructor" ) &&
				!hasOwn.call( obj.constructor.prototype, "isPrototypeOf" ) ) {
				return false;
			}
		} catch ( e ) {

			// IE8,9 Will throw exceptions on certain host objects #9897
			return false;
		}

		// Support: IE<9
		// Handle iteration over inherited properties before own properties.
		if ( !support.ownFirst ) {
			for ( key in obj ) {
				return hasOwn.call( obj, key );
			}
		}

		// Own properties are enumerated firstly, so to speed up,
		// if last one is own, then all properties are own.
		for ( key in obj ) {}

		return key === undefined || hasOwn.call( obj, key );
	},

	type: function( obj ) {
		if ( obj == null ) {
			return obj + "";
		}
		return typeof obj === "object" || typeof obj === "function" ?
			class2type[ toString.call( obj ) ] || "object" :
			typeof obj;
	},

	// Workarounds based on findings by Jim Driscoll
	// http://weblogs.java.net/blog/driscoll/archive/2009/09/08/eval-javascript-global-context
	globalEval: function( data ) {
		if ( data && jQuery.trim( data ) ) {

			// We use execScript on Internet Explorer
			// We use an anonymous function so that context is window
			// rather than jQuery in Firefox
			( window.execScript || function( data ) {
				window[ "eval" ].call( window, data ); // jscs:ignore requireDotNotation
			} )( data );
		}
	},

	// Convert dashed to camelCase; used by the css and data modules
	// Microsoft forgot to hump their vendor prefix (#9572)
	camelCase: function( string ) {
		return string.replace( rmsPrefix, "ms-" ).replace( rdashAlpha, fcamelCase );
	},

	nodeName: function( elem, name ) {
		return elem.nodeName && elem.nodeName.toLowerCase() === name.toLowerCase();
	},

	each: function( obj, callback ) {
		var length, i = 0;

		if ( isArrayLike( obj ) ) {
			length = obj.length;
			for ( ; i < length; i++ ) {
				if ( callback.call( obj[ i ], i, obj[ i ] ) === false ) {
					break;
				}
			}
		} else {
			for ( i in obj ) {
				if ( callback.call( obj[ i ], i, obj[ i ] ) === false ) {
					break;
				}
			}
		}

		return obj;
	},

	// Support: Android<4.1, IE<9
	trim: function( text ) {
		return text == null ?
			"" :
			( text + "" ).replace( rtrim, "" );
	},

	// results is for internal usage only
	makeArray: function( arr, results ) {
		var ret = results || [];

		if ( arr != null ) {
			if ( isArrayLike( Object( arr ) ) ) {
				jQuery.merge( ret,
					typeof arr === "string" ?
					[ arr ] : arr
				);
			} else {
				push.call( ret, arr );
			}
		}

		return ret;
	},

	inArray: function( elem, arr, i ) {
		var len;

		if ( arr ) {
			if ( indexOf ) {
				return indexOf.call( arr, elem, i );
			}

			len = arr.length;
			i = i ? i < 0 ? Math.max( 0, len + i ) : i : 0;

			for ( ; i < len; i++ ) {

				// Skip accessing in sparse arrays
				if ( i in arr && arr[ i ] === elem ) {
					return i;
				}
			}
		}

		return -1;
	},

	merge: function( first, second ) {
		var len = +second.length,
			j = 0,
			i = first.length;

		while ( j < len ) {
			first[ i++ ] = second[ j++ ];
		}

		// Support: IE<9
		// Workaround casting of .length to NaN on otherwise arraylike objects (e.g., NodeLists)
		if ( len !== len ) {
			while ( second[ j ] !== undefined ) {
				first[ i++ ] = second[ j++ ];
			}
		}

		first.length = i;

		return first;
	},

	grep: function( elems, callback, invert ) {
		var callbackInverse,
			matches = [],
			i = 0,
			length = elems.length,
			callbackExpect = !invert;

		// Go through the array, only saving the items
		// that pass the validator function
		for ( ; i < length; i++ ) {
			callbackInverse = !callback( elems[ i ], i );
			if ( callbackInverse !== callbackExpect ) {
				matches.push( elems[ i ] );
			}
		}

		return matches;
	},

	// arg is for internal usage only
	map: function( elems, callback, arg ) {
		var length, value,
			i = 0,
			ret = [];

		// Go through the array, translating each of the items to their new values
		if ( isArrayLike( elems ) ) {
			length = elems.length;
			for ( ; i < length; i++ ) {
				value = callback( elems[ i ], i, arg );

				if ( value != null ) {
					ret.push( value );
				}
			}

		// Go through every key on the object,
		} else {
			for ( i in elems ) {
				value = callback( elems[ i ], i, arg );

				if ( value != null ) {
					ret.push( value );
				}
			}
		}

		// Flatten any nested arrays
		return concat.apply( [], ret );
	},

	// A global GUID counter for objects
	guid: 1,

	// Bind a function to a context, optionally partially applying any
	// arguments.
	proxy: function( fn, context ) {
		var args, proxy, tmp;

		if ( typeof context === "string" ) {
			tmp = fn[ context ];
			context = fn;
			fn = tmp;
		}

		// Quick check to determine if target is callable, in the spec
		// this throws a TypeError, but we will just return undefined.
		if ( !jQuery.isFunction( fn ) ) {
			return undefined;
		}

		// Simulated bind
		args = slice.call( arguments, 2 );
		proxy = function() {
			return fn.apply( context || this, args.concat( slice.call( arguments ) ) );
		};

		// Set the guid of unique handler to the same of original handler, so it can be removed
		proxy.guid = fn.guid = fn.guid || jQuery.guid++;

		return proxy;
	},

	now: function() {
		return +( new Date() );
	},

	// jQuery.support is not used in Core but other projects attach their
	// properties to it so it needs to exist.
	support: support
} );

// JSHint would error on this code due to the Symbol not being defined in ES5.
// Defining this global in .jshintrc would create a danger of using the global
// unguarded in another place, it seems safer to just disable JSHint for these
// three lines.
/* jshint ignore: start */
if ( typeof Symbol === "function" ) {
	jQuery.fn[ Symbol.iterator ] = deletedIds[ Symbol.iterator ];
}
/* jshint ignore: end */

// Populate the class2type map
jQuery.each( "Boolean Number String Function Array Date RegExp Object Error Symbol".split( " " ),
function( i, name ) {
	class2type[ "[object " + name + "]" ] = name.toLowerCase();
} );

function isArrayLike( obj ) {

	// Support: iOS 8.2 (not reproducible in simulator)
	// `in` check used to prevent JIT error (gh-2145)
	// hasOwn isn't used here due to false negatives
	// regarding Nodelist length in IE
	var length = !!obj && "length" in obj && obj.length,
		type = jQuery.type( obj );

	if ( type === "function" || jQuery.isWindow( obj ) ) {
		return false;
	}

	return type === "array" || length === 0 ||
		typeof length === "number" && length > 0 && ( length - 1 ) in obj;
}
var Sizzle =
/*!
 * Sizzle CSS Selector Engine v2.2.1
 * http://sizzlejs.com/
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license
 * http://jquery.org/license
 *
 * Date: 2015-10-17
 */
(function( window ) {

var i,
	support,
	Expr,
	getText,
	isXML,
	tokenize,
	compile,
	select,
	outermostContext,
	sortInput,
	hasDuplicate,

	// Local document vars
	setDocument,
	document,
	docElem,
	documentIsHTML,
	rbuggyQSA,
	rbuggyMatches,
	matches,
	contains,

	// Instance-specific data
	expando = "sizzle" + 1 * new Date(),
	preferredDoc = window.document,
	dirruns = 0,
	done = 0,
	classCache = createCache(),
	tokenCache = createCache(),
	compilerCache = createCache(),
	sortOrder = function( a, b ) {
		if ( a === b ) {
			hasDuplicate = true;
		}
		return 0;
	},

	// General-purpose constants
	MAX_NEGATIVE = 1 << 31,

	// Instance methods
	hasOwn = ({}).hasOwnProperty,
	arr = [],
	pop = arr.pop,
	push_native = arr.push,
	push = arr.push,
	slice = arr.slice,
	// Use a stripped-down indexOf as it's faster than native
	// http://jsperf.com/thor-indexof-vs-for/5
	indexOf = function( list, elem ) {
		var i = 0,
			len = list.length;
		for ( ; i < len; i++ ) {
			if ( list[i] === elem ) {
				return i;
			}
		}
		return -1;
	},

	booleans = "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",

	// Regular expressions

	// http://www.w3.org/TR/css3-selectors/#whitespace
	whitespace = "[\\x20\\t\\r\\n\\f]",

	// http://www.w3.org/TR/CSS21/syndata.html#value-def-identifier
	identifier = "(?:\\\\.|[\\w-]|[^\\x00-\\xa0])+",

	// Attribute selectors: http://www.w3.org/TR/selectors/#attribute-selectors
	attributes = "\\[" + whitespace + "*(" + identifier + ")(?:" + whitespace +
		// Operator (capture 2)
		"*([*^$|!~]?=)" + whitespace +
		// "Attribute values must be CSS identifiers [capture 5] or strings [capture 3 or capture 4]"
		"*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" + identifier + "))|)" + whitespace +
		"*\\]",

	pseudos = ":(" + identifier + ")(?:\\((" +
		// To reduce the number of selectors needing tokenize in the preFilter, prefer arguments:
		// 1. quoted (capture 3; capture 4 or capture 5)
		"('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|" +
		// 2. simple (capture 6)
		"((?:\\\\.|[^\\\\()[\\]]|" + attributes + ")*)|" +
		// 3. anything else (capture 2)
		".*" +
		")\\)|)",

	// Leading and non-escaped trailing whitespace, capturing some non-whitespace characters preceding the latter
	rwhitespace = new RegExp( whitespace + "+", "g" ),
	rtrim = new RegExp( "^" + whitespace + "+|((?:^|[^\\\\])(?:\\\\.)*)" + whitespace + "+$", "g" ),

	rcomma = new RegExp( "^" + whitespace + "*," + whitespace + "*" ),
	rcombinators = new RegExp( "^" + whitespace + "*([>+~]|" + whitespace + ")" + whitespace + "*" ),

	rattributeQuotes = new RegExp( "=" + whitespace + "*([^\\]'\"]*?)" + whitespace + "*\\]", "g" ),

	rpseudo = new RegExp( pseudos ),
	ridentifier = new RegExp( "^" + identifier + "$" ),

	matchExpr = {
		"ID": new RegExp( "^#(" + identifier + ")" ),
		"CLASS": new RegExp( "^\\.(" + identifier + ")" ),
		"TAG": new RegExp( "^(" + identifier + "|[*])" ),
		"ATTR": new RegExp( "^" + attributes ),
		"PSEUDO": new RegExp( "^" + pseudos ),
		"CHILD": new RegExp( "^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + whitespace +
			"*(even|odd|(([+-]|)(\\d*)n|)" + whitespace + "*(?:([+-]|)" + whitespace +
			"*(\\d+)|))" + whitespace + "*\\)|)", "i" ),
		"bool": new RegExp( "^(?:" + booleans + ")$", "i" ),
		// For use in libraries implementing .is()
		// We use this for POS matching in `select`
		"needsContext": new RegExp( "^" + whitespace + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" +
			whitespace + "*((?:-\\d)?\\d*)" + whitespace + "*\\)|)(?=[^-]|$)", "i" )
	},

	rinputs = /^(?:input|select|textarea|button)$/i,
	rheader = /^h\d$/i,

	rnative = /^[^{]+\{\s*\[native \w/,

	// Easily-parseable/retrievable ID or TAG or CLASS selectors
	rquickExpr = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,

	rsibling = /[+~]/,
	rescape = /'|\\/g,

	// CSS escapes http://www.w3.org/TR/CSS21/syndata.html#escaped-characters
	runescape = new RegExp( "\\\\([\\da-f]{1,6}" + whitespace + "?|(" + whitespace + ")|.)", "ig" ),
	funescape = function( _, escaped, escapedWhitespace ) {
		var high = "0x" + escaped - 0x10000;
		// NaN means non-codepoint
		// Support: Firefox<24
		// Workaround erroneous numeric interpretation of +"0x"
		return high !== high || escapedWhitespace ?
			escaped :
			high < 0 ?
				// BMP codepoint
				String.fromCharCode( high + 0x10000 ) :
				// Supplemental Plane codepoint (surrogate pair)
				String.fromCharCode( high >> 10 | 0xD800, high & 0x3FF | 0xDC00 );
	},

	// Used for iframes
	// See setDocument()
	// Removing the function wrapper causes a "Permission Denied"
	// error in IE
	unloadHandler = function() {
		setDocument();
	};

// Optimize for push.apply( _, NodeList )
try {
	push.apply(
		(arr = slice.call( preferredDoc.childNodes )),
		preferredDoc.childNodes
	);
	// Support: Android<4.0
	// Detect silently failing push.apply
	arr[ preferredDoc.childNodes.length ].nodeType;
} catch ( e ) {
	push = { apply: arr.length ?

		// Leverage slice if possible
		function( target, els ) {
			push_native.apply( target, slice.call(els) );
		} :

		// Support: IE<9
		// Otherwise append directly
		function( target, els ) {
			var j = target.length,
				i = 0;
			// Can't trust NodeList.length
			while ( (target[j++] = els[i++]) ) {}
			target.length = j - 1;
		}
	};
}

function Sizzle( selector, context, results, seed ) {
	var m, i, elem, nid, nidselect, match, groups, newSelector,
		newContext = context && context.ownerDocument,

		// nodeType defaults to 9, since context defaults to document
		nodeType = context ? context.nodeType : 9;

	results = results || [];

	// Return early from calls with invalid selector or context
	if ( typeof selector !== "string" || !selector ||
		nodeType !== 1 && nodeType !== 9 && nodeType !== 11 ) {

		return results;
	}

	// Try to shortcut find operations (as opposed to filters) in HTML documents
	if ( !seed ) {

		if ( ( context ? context.ownerDocument || context : preferredDoc ) !== document ) {
			setDocument( context );
		}
		context = context || document;

		if ( documentIsHTML ) {

			// If the selector is sufficiently simple, try using a "get*By*" DOM method
			// (excepting DocumentFragment context, where the methods don't exist)
			if ( nodeType !== 11 && (match = rquickExpr.exec( selector )) ) {

				// ID selector
				if ( (m = match[1]) ) {

					// Document context
					if ( nodeType === 9 ) {
						if ( (elem = context.getElementById( m )) ) {

							// Support: IE, Opera, Webkit
							// TODO: identify versions
							// getElementById can match elements by name instead of ID
							if ( elem.id === m ) {
								results.push( elem );
								return results;
							}
						} else {
							return results;
						}

					// Element context
					} else {

						// Support: IE, Opera, Webkit
						// TODO: identify versions
						// getElementById can match elements by name instead of ID
						if ( newContext && (elem = newContext.getElementById( m )) &&
							contains( context, elem ) &&
							elem.id === m ) {

							results.push( elem );
							return results;
						}
					}

				// Type selector
				} else if ( match[2] ) {
					push.apply( results, context.getElementsByTagName( selector ) );
					return results;

				// Class selector
				} else if ( (m = match[3]) && support.getElementsByClassName &&
					context.getElementsByClassName ) {

					push.apply( results, context.getElementsByClassName( m ) );
					return results;
				}
			}

			// Take advantage of querySelectorAll
			if ( support.qsa &&
				!compilerCache[ selector + " " ] &&
				(!rbuggyQSA || !rbuggyQSA.test( selector )) ) {

				if ( nodeType !== 1 ) {
					newContext = context;
					newSelector = selector;

				// qSA looks outside Element context, which is not what we want
				// Thanks to Andrew Dupont for this workaround technique
				// Support: IE <=8
				// Exclude object elements
				} else if ( context.nodeName.toLowerCase() !== "object" ) {

					// Capture the context ID, setting it first if necessary
					if ( (nid = context.getAttribute( "id" )) ) {
						nid = nid.replace( rescape, "\\$&" );
					} else {
						context.setAttribute( "id", (nid = expando) );
					}

					// Prefix every selector in the list
					groups = tokenize( selector );
					i = groups.length;
					nidselect = ridentifier.test( nid ) ? "#" + nid : "[id='" + nid + "']";
					while ( i-- ) {
						groups[i] = nidselect + " " + toSelector( groups[i] );
					}
					newSelector = groups.join( "," );

					// Expand context for sibling selectors
					newContext = rsibling.test( selector ) && testContext( context.parentNode ) ||
						context;
				}

				if ( newSelector ) {
					try {
						push.apply( results,
							newContext.querySelectorAll( newSelector )
						);
						return results;
					} catch ( qsaError ) {
					} finally {
						if ( nid === expando ) {
							context.removeAttribute( "id" );
						}
					}
				}
			}
		}
	}

	// All others
	return select( selector.replace( rtrim, "$1" ), context, results, seed );
}

/**
 * Create key-value caches of limited size
 * @returns {function(string, object)} Returns the Object data after storing it on itself with
 *	property name the (space-suffixed) string and (if the cache is larger than Expr.cacheLength)
 *	deleting the oldest entry
 */
function createCache() {
	var keys = [];

	function cache( key, value ) {
		// Use (key + " ") to avoid collision with native prototype properties (see Issue #157)
		if ( keys.push( key + " " ) > Expr.cacheLength ) {
			// Only keep the most recent entries
			delete cache[ keys.shift() ];
		}
		return (cache[ key + " " ] = value);
	}
	return cache;
}

/**
 * Mark a function for special use by Sizzle
 * @param {Function} fn The function to mark
 */
function markFunction( fn ) {
	fn[ expando ] = true;
	return fn;
}

/**
 * Support testing using an element
 * @param {Function} fn Passed the created div and expects a boolean result
 */
function assert( fn ) {
	var div = document.createElement("div");

	try {
		return !!fn( div );
	} catch (e) {
		return false;
	} finally {
		// Remove from its parent by default
		if ( div.parentNode ) {
			div.parentNode.removeChild( div );
		}
		// release memory in IE
		div = null;
	}
}

/**
 * Adds the same handler for all of the specified attrs
 * @param {String} attrs Pipe-separated list of attributes
 * @param {Function} handler The method that will be applied
 */
function addHandle( attrs, handler ) {
	var arr = attrs.split("|"),
		i = arr.length;

	while ( i-- ) {
		Expr.attrHandle[ arr[i] ] = handler;
	}
}

/**
 * Checks document order of two siblings
 * @param {Element} a
 * @param {Element} b
 * @returns {Number} Returns less than 0 if a precedes b, greater than 0 if a follows b
 */
function siblingCheck( a, b ) {
	var cur = b && a,
		diff = cur && a.nodeType === 1 && b.nodeType === 1 &&
			( ~b.sourceIndex || MAX_NEGATIVE ) -
			( ~a.sourceIndex || MAX_NEGATIVE );

	// Use IE sourceIndex if available on both nodes
	if ( diff ) {
		return diff;
	}

	// Check if b follows a
	if ( cur ) {
		while ( (cur = cur.nextSibling) ) {
			if ( cur === b ) {
				return -1;
			}
		}
	}

	return a ? 1 : -1;
}

/**
 * Returns a function to use in pseudos for input types
 * @param {String} type
 */
function createInputPseudo( type ) {
	return function( elem ) {
		var name = elem.nodeName.toLowerCase();
		return name === "input" && elem.type === type;
	};
}

/**
 * Returns a function to use in pseudos for buttons
 * @param {String} type
 */
function createButtonPseudo( type ) {
	return function( elem ) {
		var name = elem.nodeName.toLowerCase();
		return (name === "input" || name === "button") && elem.type === type;
	};
}

/**
 * Returns a function to use in pseudos for positionals
 * @param {Function} fn
 */
function createPositionalPseudo( fn ) {
	return markFunction(function( argument ) {
		argument = +argument;
		return markFunction(function( seed, matches ) {
			var j,
				matchIndexes = fn( [], seed.length, argument ),
				i = matchIndexes.length;

			// Match elements found at the specified indexes
			while ( i-- ) {
				if ( seed[ (j = matchIndexes[i]) ] ) {
					seed[j] = !(matches[j] = seed[j]);
				}
			}
		});
	});
}

/**
 * Checks a node for validity as a Sizzle context
 * @param {Element|Object=} context
 * @returns {Element|Object|Boolean} The input node if acceptable, otherwise a falsy value
 */
function testContext( context ) {
	return context && typeof context.getElementsByTagName !== "undefined" && context;
}

// Expose support vars for convenience
support = Sizzle.support = {};

/**
 * Detects XML nodes
 * @param {Element|Object} elem An element or a document
 * @returns {Boolean} True iff elem is a non-HTML XML node
 */
isXML = Sizzle.isXML = function( elem ) {
	// documentElement is verified for cases where it doesn't yet exist
	// (such as loading iframes in IE - #4833)
	var documentElement = elem && (elem.ownerDocument || elem).documentElement;
	return documentElement ? documentElement.nodeName !== "HTML" : false;
};

/**
 * Sets document-related variables once based on the current document
 * @param {Element|Object} [doc] An element or document object to use to set the document
 * @returns {Object} Returns the current document
 */
setDocument = Sizzle.setDocument = function( node ) {
	var hasCompare, parent,
		doc = node ? node.ownerDocument || node : preferredDoc;

	// Return early if doc is invalid or already selected
	if ( doc === document || doc.nodeType !== 9 || !doc.documentElement ) {
		return document;
	}

	// Update global variables
	document = doc;
	docElem = document.documentElement;
	documentIsHTML = !isXML( document );

	// Support: IE 9-11, Edge
	// Accessing iframe documents after unload throws "permission denied" errors (jQuery #13936)
	if ( (parent = document.defaultView) && parent.top !== parent ) {
		// Support: IE 11
		if ( parent.addEventListener ) {
			parent.addEventListener( "unload", unloadHandler, false );

		// Support: IE 9 - 10 only
		} else if ( parent.attachEvent ) {
			parent.attachEvent( "onunload", unloadHandler );
		}
	}

	/* Attributes
	---------------------------------------------------------------------- */

	// Support: IE<8
	// Verify that getAttribute really returns attributes and not properties
	// (excepting IE8 booleans)
	support.attributes = assert(function( div ) {
		div.className = "i";
		return !div.getAttribute("className");
	});

	/* getElement(s)By*
	---------------------------------------------------------------------- */

	// Check if getElementsByTagName("*") returns only elements
	support.getElementsByTagName = assert(function( div ) {
		div.appendChild( document.createComment("") );
		return !div.getElementsByTagName("*").length;
	});

	// Support: IE<9
	support.getElementsByClassName = rnative.test( document.getElementsByClassName );

	// Support: IE<10
	// Check if getElementById returns elements by name
	// The broken getElementById methods don't pick up programatically-set names,
	// so use a roundabout getElementsByName test
	support.getById = assert(function( div ) {
		docElem.appendChild( div ).id = expando;
		return !document.getElementsByName || !document.getElementsByName( expando ).length;
	});

	// ID find and filter
	if ( support.getById ) {
		Expr.find["ID"] = function( id, context ) {
			if ( typeof context.getElementById !== "undefined" && documentIsHTML ) {
				var m = context.getElementById( id );
				return m ? [ m ] : [];
			}
		};
		Expr.filter["ID"] = function( id ) {
			var attrId = id.replace( runescape, funescape );
			return function( elem ) {
				return elem.getAttribute("id") === attrId;
			};
		};
	} else {
		// Support: IE6/7
		// getElementById is not reliable as a find shortcut
		delete Expr.find["ID"];

		Expr.filter["ID"] =  function( id ) {
			var attrId = id.replace( runescape, funescape );
			return function( elem ) {
				var node = typeof elem.getAttributeNode !== "undefined" &&
					elem.getAttributeNode("id");
				return node && node.value === attrId;
			};
		};
	}

	// Tag
	Expr.find["TAG"] = support.getElementsByTagName ?
		function( tag, context ) {
			if ( typeof context.getElementsByTagName !== "undefined" ) {
				return context.getElementsByTagName( tag );

			// DocumentFragment nodes don't have gEBTN
			} else if ( support.qsa ) {
				return context.querySelectorAll( tag );
			}
		} :

		function( tag, context ) {
			var elem,
				tmp = [],
				i = 0,
				// By happy coincidence, a (broken) gEBTN appears on DocumentFragment nodes too
				results = context.getElementsByTagName( tag );

			// Filter out possible comments
			if ( tag === "*" ) {
				while ( (elem = results[i++]) ) {
					if ( elem.nodeType === 1 ) {
						tmp.push( elem );
					}
				}

				return tmp;
			}
			return results;
		};

	// Class
	Expr.find["CLASS"] = support.getElementsByClassName && function( className, context ) {
		if ( typeof context.getElementsByClassName !== "undefined" && documentIsHTML ) {
			return context.getElementsByClassName( className );
		}
	};

	/* QSA/matchesSelector
	---------------------------------------------------------------------- */

	// QSA and matchesSelector support

	// matchesSelector(:active) reports false when true (IE9/Opera 11.5)
	rbuggyMatches = [];

	// qSa(:focus) reports false when true (Chrome 21)
	// We allow this because of a bug in IE8/9 that throws an error
	// whenever `document.activeElement` is accessed on an iframe
	// So, we allow :focus to pass through QSA all the time to avoid the IE error
	// See http://bugs.jquery.com/ticket/13378
	rbuggyQSA = [];

	if ( (support.qsa = rnative.test( document.querySelectorAll )) ) {
		// Build QSA regex
		// Regex strategy adopted from Diego Perini
		assert(function( div ) {
			// Select is set to empty string on purpose
			// This is to test IE's treatment of not explicitly
			// setting a boolean content attribute,
			// since its presence should be enough
			// http://bugs.jquery.com/ticket/12359
			docElem.appendChild( div ).innerHTML = "<a id='" + expando + "'></a>" +
				"<select id='" + expando + "-\r\\' msallowcapture=''>" +
				"<option selected=''></option></select>";

			// Support: IE8, Opera 11-12.16
			// Nothing should be selected when empty strings follow ^= or $= or *=
			// The test attribute must be unknown in Opera but "safe" for WinRT
			// http://msdn.microsoft.com/en-us/library/ie/hh465388.aspx#attribute_section
			if ( div.querySelectorAll("[msallowcapture^='']").length ) {
				rbuggyQSA.push( "[*^$]=" + whitespace + "*(?:''|\"\")" );
			}

			// Support: IE8
			// Boolean attributes and "value" are not treated correctly
			if ( !div.querySelectorAll("[selected]").length ) {
				rbuggyQSA.push( "\\[" + whitespace + "*(?:value|" + booleans + ")" );
			}

			// Support: Chrome<29, Android<4.4, Safari<7.0+, iOS<7.0+, PhantomJS<1.9.8+
			if ( !div.querySelectorAll( "[id~=" + expando + "-]" ).length ) {
				rbuggyQSA.push("~=");
			}

			// Webkit/Opera - :checked should return selected option elements
			// http://www.w3.org/TR/2011/REC-css3-selectors-20110929/#checked
			// IE8 throws error here and will not see later tests
			if ( !div.querySelectorAll(":checked").length ) {
				rbuggyQSA.push(":checked");
			}

			// Support: Safari 8+, iOS 8+
			// https://bugs.webkit.org/show_bug.cgi?id=136851
			// In-page `selector#id sibing-combinator selector` fails
			if ( !div.querySelectorAll( "a#" + expando + "+*" ).length ) {
				rbuggyQSA.push(".#.+[+~]");
			}
		});

		assert(function( div ) {
			// Support: Windows 8 Native Apps
			// The type and name attributes are restricted during .innerHTML assignment
			var input = document.createElement("input");
			input.setAttribute( "type", "hidden" );
			div.appendChild( input ).setAttribute( "name", "D" );

			// Support: IE8
			// Enforce case-sensitivity of name attribute
			if ( div.querySelectorAll("[name=d]").length ) {
				rbuggyQSA.push( "name" + whitespace + "*[*^$|!~]?=" );
			}

			// FF 3.5 - :enabled/:disabled and hidden elements (hidden elements are still enabled)
			// IE8 throws error here and will not see later tests
			if ( !div.querySelectorAll(":enabled").length ) {
				rbuggyQSA.push( ":enabled", ":disabled" );
			}

			// Opera 10-11 does not throw on post-comma invalid pseudos
			div.querySelectorAll("*,:x");
			rbuggyQSA.push(",.*:");
		});
	}

	if ( (support.matchesSelector = rnative.test( (matches = docElem.matches ||
		docElem.webkitMatchesSelector ||
		docElem.mozMatchesSelector ||
		docElem.oMatchesSelector ||
		docElem.msMatchesSelector) )) ) {

		assert(function( div ) {
			// Check to see if it's possible to do matchesSelector
			// on a disconnected node (IE 9)
			support.disconnectedMatch = matches.call( div, "div" );

			// This should fail with an exception
			// Gecko does not error, returns false instead
			matches.call( div, "[s!='']:x" );
			rbuggyMatches.push( "!=", pseudos );
		});
	}

	rbuggyQSA = rbuggyQSA.length && new RegExp( rbuggyQSA.join("|") );
	rbuggyMatches = rbuggyMatches.length && new RegExp( rbuggyMatches.join("|") );

	/* Contains
	---------------------------------------------------------------------- */
	hasCompare = rnative.test( docElem.compareDocumentPosition );

	// Element contains another
	// Purposefully self-exclusive
	// As in, an element does not contain itself
	contains = hasCompare || rnative.test( docElem.contains ) ?
		function( a, b ) {
			var adown = a.nodeType === 9 ? a.documentElement : a,
				bup = b && b.parentNode;
			return a === bup || !!( bup && bup.nodeType === 1 && (
				adown.contains ?
					adown.contains( bup ) :
					a.compareDocumentPosition && a.compareDocumentPosition( bup ) & 16
			));
		} :
		function( a, b ) {
			if ( b ) {
				while ( (b = b.parentNode) ) {
					if ( b === a ) {
						return true;
					}
				}
			}
			return false;
		};

	/* Sorting
	---------------------------------------------------------------------- */

	// Document order sorting
	sortOrder = hasCompare ?
	function( a, b ) {

		// Flag for duplicate removal
		if ( a === b ) {
			hasDuplicate = true;
			return 0;
		}

		// Sort on method existence if only one input has compareDocumentPosition
		var compare = !a.compareDocumentPosition - !b.compareDocumentPosition;
		if ( compare ) {
			return compare;
		}

		// Calculate position if both inputs belong to the same document
		compare = ( a.ownerDocument || a ) === ( b.ownerDocument || b ) ?
			a.compareDocumentPosition( b ) :

			// Otherwise we know they are disconnected
			1;

		// Disconnected nodes
		if ( compare & 1 ||
			(!support.sortDetached && b.compareDocumentPosition( a ) === compare) ) {

			// Choose the first element that is related to our preferred document
			if ( a === document || a.ownerDocument === preferredDoc && contains(preferredDoc, a) ) {
				return -1;
			}
			if ( b === document || b.ownerDocument === preferredDoc && contains(preferredDoc, b) ) {
				return 1;
			}

			// Maintain original order
			return sortInput ?
				( indexOf( sortInput, a ) - indexOf( sortInput, b ) ) :
				0;
		}

		return compare & 4 ? -1 : 1;
	} :
	function( a, b ) {
		// Exit early if the nodes are identical
		if ( a === b ) {
			hasDuplicate = true;
			return 0;
		}

		var cur,
			i = 0,
			aup = a.parentNode,
			bup = b.parentNode,
			ap = [ a ],
			bp = [ b ];

		// Parentless nodes are either documents or disconnected
		if ( !aup || !bup ) {
			return a === document ? -1 :
				b === document ? 1 :
				aup ? -1 :
				bup ? 1 :
				sortInput ?
				( indexOf( sortInput, a ) - indexOf( sortInput, b ) ) :
				0;

		// If the nodes are siblings, we can do a quick check
		} else if ( aup === bup ) {
			return siblingCheck( a, b );
		}

		// Otherwise we need full lists of their ancestors for comparison
		cur = a;
		while ( (cur = cur.parentNode) ) {
			ap.unshift( cur );
		}
		cur = b;
		while ( (cur = cur.parentNode) ) {
			bp.unshift( cur );
		}

		// Walk down the tree looking for a discrepancy
		while ( ap[i] === bp[i] ) {
			i++;
		}

		return i ?
			// Do a sibling check if the nodes have a common ancestor
			siblingCheck( ap[i], bp[i] ) :

			// Otherwise nodes in our document sort first
			ap[i] === preferredDoc ? -1 :
			bp[i] === preferredDoc ? 1 :
			0;
	};

	return document;
};

Sizzle.matches = function( expr, elements ) {
	return Sizzle( expr, null, null, elements );
};

Sizzle.matchesSelector = function( elem, expr ) {
	// Set document vars if needed
	if ( ( elem.ownerDocument || elem ) !== document ) {
		setDocument( elem );
	}

	// Make sure that attribute selectors are quoted
	expr = expr.replace( rattributeQuotes, "='$1']" );

	if ( support.matchesSelector && documentIsHTML &&
		!compilerCache[ expr + " " ] &&
		( !rbuggyMatches || !rbuggyMatches.test( expr ) ) &&
		( !rbuggyQSA     || !rbuggyQSA.test( expr ) ) ) {

		try {
			var ret = matches.call( elem, expr );

			// IE 9's matchesSelector returns false on disconnected nodes
			if ( ret || support.disconnectedMatch ||
					// As well, disconnected nodes are said to be in a document
					// fragment in IE 9
					elem.document && elem.document.nodeType !== 11 ) {
				return ret;
			}
		} catch (e) {}
	}

	return Sizzle( expr, document, null, [ elem ] ).length > 0;
};

Sizzle.contains = function( context, elem ) {
	// Set document vars if needed
	if ( ( context.ownerDocument || context ) !== document ) {
		setDocument( context );
	}
	return contains( context, elem );
};

Sizzle.attr = function( elem, name ) {
	// Set document vars if needed
	if ( ( elem.ownerDocument || elem ) !== document ) {
		setDocument( elem );
	}

	var fn = Expr.attrHandle[ name.toLowerCase() ],
		// Don't get fooled by Object.prototype properties (jQuery #13807)
		val = fn && hasOwn.call( Expr.attrHandle, name.toLowerCase() ) ?
			fn( elem, name, !documentIsHTML ) :
			undefined;

	return val !== undefined ?
		val :
		support.attributes || !documentIsHTML ?
			elem.getAttribute( name ) :
			(val = elem.getAttributeNode(name)) && val.specified ?
				val.value :
				null;
};

Sizzle.error = function( msg ) {
	throw new Error( "Syntax error, unrecognized expression: " + msg );
};

/**
 * Document sorting and removing duplicates
 * @param {ArrayLike} results
 */
Sizzle.uniqueSort = function( results ) {
	var elem,
		duplicates = [],
		j = 0,
		i = 0;

	// Unless we *know* we can detect duplicates, assume their presence
	hasDuplicate = !support.detectDuplicates;
	sortInput = !support.sortStable && results.slice( 0 );
	results.sort( sortOrder );

	if ( hasDuplicate ) {
		while ( (elem = results[i++]) ) {
			if ( elem === results[ i ] ) {
				j = duplicates.push( i );
			}
		}
		while ( j-- ) {
			results.splice( duplicates[ j ], 1 );
		}
	}

	// Clear input after sorting to release objects
	// See https://github.com/jquery/sizzle/pull/225
	sortInput = null;

	return results;
};

/**
 * Utility function for retrieving the text value of an array of DOM nodes
 * @param {Array|Element} elem
 */
getText = Sizzle.getText = function( elem ) {
	var node,
		ret = "",
		i = 0,
		nodeType = elem.nodeType;

	if ( !nodeType ) {
		// If no nodeType, this is expected to be an array
		while ( (node = elem[i++]) ) {
			// Do not traverse comment nodes
			ret += getText( node );
		}
	} else if ( nodeType === 1 || nodeType === 9 || nodeType === 11 ) {
		// Use textContent for elements
		// innerText usage removed for consistency of new lines (jQuery #11153)
		if ( typeof elem.textContent === "string" ) {
			return elem.textContent;
		} else {
			// Traverse its children
			for ( elem = elem.firstChild; elem; elem = elem.nextSibling ) {
				ret += getText( elem );
			}
		}
	} else if ( nodeType === 3 || nodeType === 4 ) {
		return elem.nodeValue;
	}
	// Do not include comment or processing instruction nodes

	return ret;
};

Expr = Sizzle.selectors = {

	// Can be adjusted by the user
	cacheLength: 50,

	createPseudo: markFunction,

	match: matchExpr,

	attrHandle: {},

	find: {},

	relative: {
		">": { dir: "parentNode", first: true },
		" ": { dir: "parentNode" },
		"+": { dir: "previousSibling", first: true },
		"~": { dir: "previousSibling" }
	},

	preFilter: {
		"ATTR": function( match ) {
			match[1] = match[1].replace( runescape, funescape );

			// Move the given value to match[3] whether quoted or unquoted
			match[3] = ( match[3] || match[4] || match[5] || "" ).replace( runescape, funescape );

			if ( match[2] === "~=" ) {
				match[3] = " " + match[3] + " ";
			}

			return match.slice( 0, 4 );
		},

		"CHILD": function( match ) {
			/* matches from matchExpr["CHILD"]
				1 type (only|nth|...)
				2 what (child|of-type)
				3 argument (even|odd|\d*|\d*n([+-]\d+)?|...)
				4 xn-component of xn+y argument ([+-]?\d*n|)
				5 sign of xn-component
				6 x of xn-component
				7 sign of y-component
				8 y of y-component
			*/
			match[1] = match[1].toLowerCase();

			if ( match[1].slice( 0, 3 ) === "nth" ) {
				// nth-* requires argument
				if ( !match[3] ) {
					Sizzle.error( match[0] );
				}

				// numeric x and y parameters for Expr.filter.CHILD
				// remember that false/true cast respectively to 0/1
				match[4] = +( match[4] ? match[5] + (match[6] || 1) : 2 * ( match[3] === "even" || match[3] === "odd" ) );
				match[5] = +( ( match[7] + match[8] ) || match[3] === "odd" );

			// other types prohibit arguments
			} else if ( match[3] ) {
				Sizzle.error( match[0] );
			}

			return match;
		},

		"PSEUDO": function( match ) {
			var excess,
				unquoted = !match[6] && match[2];

			if ( matchExpr["CHILD"].test( match[0] ) ) {
				return null;
			}

			// Accept quoted arguments as-is
			if ( match[3] ) {
				match[2] = match[4] || match[5] || "";

			// Strip excess characters from unquoted arguments
			} else if ( unquoted && rpseudo.test( unquoted ) &&
				// Get excess from tokenize (recursively)
				(excess = tokenize( unquoted, true )) &&
				// advance to the next closing parenthesis
				(excess = unquoted.indexOf( ")", unquoted.length - excess ) - unquoted.length) ) {

				// excess is a negative index
				match[0] = match[0].slice( 0, excess );
				match[2] = unquoted.slice( 0, excess );
			}

			// Return only captures needed by the pseudo filter method (type and argument)
			return match.slice( 0, 3 );
		}
	},

	filter: {

		"TAG": function( nodeNameSelector ) {
			var nodeName = nodeNameSelector.replace( runescape, funescape ).toLowerCase();
			return nodeNameSelector === "*" ?
				function() { return true; } :
				function( elem ) {
					return elem.nodeName && elem.nodeName.toLowerCase() === nodeName;
				};
		},

		"CLASS": function( className ) {
			var pattern = classCache[ className + " " ];

			return pattern ||
				(pattern = new RegExp( "(^|" + whitespace + ")" + className + "(" + whitespace + "|$)" )) &&
				classCache( className, function( elem ) {
					return pattern.test( typeof elem.className === "string" && elem.className || typeof elem.getAttribute !== "undefined" && elem.getAttribute("class") || "" );
				});
		},

		"ATTR": function( name, operator, check ) {
			return function( elem ) {
				var result = Sizzle.attr( elem, name );

				if ( result == null ) {
					return operator === "!=";
				}
				if ( !operator ) {
					return true;
				}

				result += "";

				return operator === "=" ? result === check :
					operator === "!=" ? result !== check :
					operator === "^=" ? check && result.indexOf( check ) === 0 :
					operator === "*=" ? check && result.indexOf( check ) > -1 :
					operator === "$=" ? check && result.slice( -check.length ) === check :
					operator === "~=" ? ( " " + result.replace( rwhitespace, " " ) + " " ).indexOf( check ) > -1 :
					operator === "|=" ? result === check || result.slice( 0, check.length + 1 ) === check + "-" :
					false;
			};
		},

		"CHILD": function( type, what, argument, first, last ) {
			var simple = type.slice( 0, 3 ) !== "nth",
				forward = type.slice( -4 ) !== "last",
				ofType = what === "of-type";

			return first === 1 && last === 0 ?

				// Shortcut for :nth-*(n)
				function( elem ) {
					return !!elem.parentNode;
				} :

				function( elem, context, xml ) {
					var cache, uniqueCache, outerCache, node, nodeIndex, start,
						dir = simple !== forward ? "nextSibling" : "previousSibling",
						parent = elem.parentNode,
						name = ofType && elem.nodeName.toLowerCase(),
						useCache = !xml && !ofType,
						diff = false;

					if ( parent ) {

						// :(first|last|only)-(child|of-type)
						if ( simple ) {
							while ( dir ) {
								node = elem;
								while ( (node = node[ dir ]) ) {
									if ( ofType ?
										node.nodeName.toLowerCase() === name :
										node.nodeType === 1 ) {

										return false;
									}
								}
								// Reverse direction for :only-* (if we haven't yet done so)
								start = dir = type === "only" && !start && "nextSibling";
							}
							return true;
						}

						start = [ forward ? parent.firstChild : parent.lastChild ];

						// non-xml :nth-child(...) stores cache data on `parent`
						if ( forward && useCache ) {

							// Seek `elem` from a previously-cached index

							// ...in a gzip-friendly way
							node = parent;
							outerCache = node[ expando ] || (node[ expando ] = {});

							// Support: IE <9 only
							// Defend against cloned attroperties (jQuery gh-1709)
							uniqueCache = outerCache[ node.uniqueID ] ||
								(outerCache[ node.uniqueID ] = {});

							cache = uniqueCache[ type ] || [];
							nodeIndex = cache[ 0 ] === dirruns && cache[ 1 ];
							diff = nodeIndex && cache[ 2 ];
							node = nodeIndex && parent.childNodes[ nodeIndex ];

							while ( (node = ++nodeIndex && node && node[ dir ] ||

								// Fallback to seeking `elem` from the start
								(diff = nodeIndex = 0) || start.pop()) ) {

								// When found, cache indexes on `parent` and break
								if ( node.nodeType === 1 && ++diff && node === elem ) {
									uniqueCache[ type ] = [ dirruns, nodeIndex, diff ];
									break;
								}
							}

						} else {
							// Use previously-cached element index if available
							if ( useCache ) {
								// ...in a gzip-friendly way
								node = elem;
								outerCache = node[ expando ] || (node[ expando ] = {});

								// Support: IE <9 only
								// Defend against cloned attroperties (jQuery gh-1709)
								uniqueCache = outerCache[ node.uniqueID ] ||
									(outerCache[ node.uniqueID ] = {});

								cache = uniqueCache[ type ] || [];
								nodeIndex = cache[ 0 ] === dirruns && cache[ 1 ];
								diff = nodeIndex;
							}

							// xml :nth-child(...)
							// or :nth-last-child(...) or :nth(-last)?-of-type(...)
							if ( diff === false ) {
								// Use the same loop as above to seek `elem` from the start
								while ( (node = ++nodeIndex && node && node[ dir ] ||
									(diff = nodeIndex = 0) || start.pop()) ) {

									if ( ( ofType ?
										node.nodeName.toLowerCase() === name :
										node.nodeType === 1 ) &&
										++diff ) {

										// Cache the index of each encountered element
										if ( useCache ) {
											outerCache = node[ expando ] || (node[ expando ] = {});

											// Support: IE <9 only
											// Defend against cloned attroperties (jQuery gh-1709)
											uniqueCache = outerCache[ node.uniqueID ] ||
												(outerCache[ node.uniqueID ] = {});

											uniqueCache[ type ] = [ dirruns, diff ];
										}

										if ( node === elem ) {
											break;
										}
									}
								}
							}
						}

						// Incorporate the offset, then check against cycle size
						diff -= last;
						return diff === first || ( diff % first === 0 && diff / first >= 0 );
					}
				};
		},

		"PSEUDO": function( pseudo, argument ) {
			// pseudo-class names are case-insensitive
			// http://www.w3.org/TR/selectors/#pseudo-classes
			// Prioritize by case sensitivity in case custom pseudos are added with uppercase letters
			// Remember that setFilters inherits from pseudos
			var args,
				fn = Expr.pseudos[ pseudo ] || Expr.setFilters[ pseudo.toLowerCase() ] ||
					Sizzle.error( "unsupported pseudo: " + pseudo );

			// The user may use createPseudo to indicate that
			// arguments are needed to create the filter function
			// just as Sizzle does
			if ( fn[ expando ] ) {
				return fn( argument );
			}

			// But maintain support for old signatures
			if ( fn.length > 1 ) {
				args = [ pseudo, pseudo, "", argument ];
				return Expr.setFilters.hasOwnProperty( pseudo.toLowerCase() ) ?
					markFunction(function( seed, matches ) {
						var idx,
							matched = fn( seed, argument ),
							i = matched.length;
						while ( i-- ) {
							idx = indexOf( seed, matched[i] );
							seed[ idx ] = !( matches[ idx ] = matched[i] );
						}
					}) :
					function( elem ) {
						return fn( elem, 0, args );
					};
			}

			return fn;
		}
	},

	pseudos: {
		// Potentially complex pseudos
		"not": markFunction(function( selector ) {
			// Trim the selector passed to compile
			// to avoid treating leading and trailing
			// spaces as combinators
			var input = [],
				results = [],
				matcher = compile( selector.replace( rtrim, "$1" ) );

			return matcher[ expando ] ?
				markFunction(function( seed, matches, context, xml ) {
					var elem,
						unmatched = matcher( seed, null, xml, [] ),
						i = seed.length;

					// Match elements unmatched by `matcher`
					while ( i-- ) {
						if ( (elem = unmatched[i]) ) {
							seed[i] = !(matches[i] = elem);
						}
					}
				}) :
				function( elem, context, xml ) {
					input[0] = elem;
					matcher( input, null, xml, results );
					// Don't keep the element (issue #299)
					input[0] = null;
					return !results.pop();
				};
		}),

		"has": markFunction(function( selector ) {
			return function( elem ) {
				return Sizzle( selector, elem ).length > 0;
			};
		}),

		"contains": markFunction(function( text ) {
			text = text.replace( runescape, funescape );
			return function( elem ) {
				return ( elem.textContent || elem.innerText || getText( elem ) ).indexOf( text ) > -1;
			};
		}),

		// "Whether an element is represented by a :lang() selector
		// is based solely on the element's language value
		// being equal to the identifier C,
		// or beginning with the identifier C immediately followed by "-".
		// The matching of C against the element's language value is performed case-insensitively.
		// The identifier C does not have to be a valid language name."
		// http://www.w3.org/TR/selectors/#lang-pseudo
		"lang": markFunction( function( lang ) {
			// lang value must be a valid identifier
			if ( !ridentifier.test(lang || "") ) {
				Sizzle.error( "unsupported lang: " + lang );
			}
			lang = lang.replace( runescape, funescape ).toLowerCase();
			return function( elem ) {
				var elemLang;
				do {
					if ( (elemLang = documentIsHTML ?
						elem.lang :
						elem.getAttribute("xml:lang") || elem.getAttribute("lang")) ) {

						elemLang = elemLang.toLowerCase();
						return elemLang === lang || elemLang.indexOf( lang + "-" ) === 0;
					}
				} while ( (elem = elem.parentNode) && elem.nodeType === 1 );
				return false;
			};
		}),

		// Miscellaneous
		"target": function( elem ) {
			var hash = window.location && window.location.hash;
			return hash && hash.slice( 1 ) === elem.id;
		},

		"root": function( elem ) {
			return elem === docElem;
		},

		"focus": function( elem ) {
			return elem === document.activeElement && (!document.hasFocus || document.hasFocus()) && !!(elem.type || elem.href || ~elem.tabIndex);
		},

		// Boolean properties
		"enabled": function( elem ) {
			return elem.disabled === false;
		},

		"disabled": function( elem ) {
			return elem.disabled === true;
		},

		"checked": function( elem ) {
			// In CSS3, :checked should return both checked and selected elements
			// http://www.w3.org/TR/2011/REC-css3-selectors-20110929/#checked
			var nodeName = elem.nodeName.toLowerCase();
			return (nodeName === "input" && !!elem.checked) || (nodeName === "option" && !!elem.selected);
		},

		"selected": function( elem ) {
			// Accessing this property makes selected-by-default
			// options in Safari work properly
			if ( elem.parentNode ) {
				elem.parentNode.selectedIndex;
			}

			return elem.selected === true;
		},

		// Contents
		"empty": function( elem ) {
			// http://www.w3.org/TR/selectors/#empty-pseudo
			// :empty is negated by element (1) or content nodes (text: 3; cdata: 4; entity ref: 5),
			//   but not by others (comment: 8; processing instruction: 7; etc.)
			// nodeType < 6 works because attributes (2) do not appear as children
			for ( elem = elem.firstChild; elem; elem = elem.nextSibling ) {
				if ( elem.nodeType < 6 ) {
					return false;
				}
			}
			return true;
		},

		"parent": function( elem ) {
			return !Expr.pseudos["empty"]( elem );
		},

		// Element/input types
		"header": function( elem ) {
			return rheader.test( elem.nodeName );
		},

		"input": function( elem ) {
			return rinputs.test( elem.nodeName );
		},

		"button": function( elem ) {
			var name = elem.nodeName.toLowerCase();
			return name === "input" && elem.type === "button" || name === "button";
		},

		"text": function( elem ) {
			var attr;
			return elem.nodeName.toLowerCase() === "input" &&
				elem.type === "text" &&

				// Support: IE<8
				// New HTML5 attribute values (e.g., "search") appear with elem.type === "text"
				( (attr = elem.getAttribute("type")) == null || attr.toLowerCase() === "text" );
		},

		// Position-in-collection
		"first": createPositionalPseudo(function() {
			return [ 0 ];
		}),

		"last": createPositionalPseudo(function( matchIndexes, length ) {
			return [ length - 1 ];
		}),

		"eq": createPositionalPseudo(function( matchIndexes, length, argument ) {
			return [ argument < 0 ? argument + length : argument ];
		}),

		"even": createPositionalPseudo(function( matchIndexes, length ) {
			var i = 0;
			for ( ; i < length; i += 2 ) {
				matchIndexes.push( i );
			}
			return matchIndexes;
		}),

		"odd": createPositionalPseudo(function( matchIndexes, length ) {
			var i = 1;
			for ( ; i < length; i += 2 ) {
				matchIndexes.push( i );
			}
			return matchIndexes;
		}),

		"lt": createPositionalPseudo(function( matchIndexes, length, argument ) {
			var i = argument < 0 ? argument + length : argument;
			for ( ; --i >= 0; ) {
				matchIndexes.push( i );
			}
			return matchIndexes;
		}),

		"gt": createPositionalPseudo(function( matchIndexes, length, argument ) {
			var i = argument < 0 ? argument + length : argument;
			for ( ; ++i < length; ) {
				matchIndexes.push( i );
			}
			return matchIndexes;
		})
	}
};

Expr.pseudos["nth"] = Expr.pseudos["eq"];

// Add button/input type pseudos
for ( i in { radio: true, checkbox: true, file: true, password: true, image: true } ) {
	Expr.pseudos[ i ] = createInputPseudo( i );
}
for ( i in { submit: true, reset: true } ) {
	Expr.pseudos[ i ] = createButtonPseudo( i );
}

// Easy API for creating new setFilters
function setFilters() {}
setFilters.prototype = Expr.filters = Expr.pseudos;
Expr.setFilters = new setFilters();

tokenize = Sizzle.tokenize = function( selector, parseOnly ) {
	var matched, match, tokens, type,
		soFar, groups, preFilters,
		cached = tokenCache[ selector + " " ];

	if ( cached ) {
		return parseOnly ? 0 : cached.slice( 0 );
	}

	soFar = selector;
	groups = [];
	preFilters = Expr.preFilter;

	while ( soFar ) {

		// Comma and first run
		if ( !matched || (match = rcomma.exec( soFar )) ) {
			if ( match ) {
				// Don't consume trailing commas as valid
				soFar = soFar.slice( match[0].length ) || soFar;
			}
			groups.push( (tokens = []) );
		}

		matched = false;

		// Combinators
		if ( (match = rcombinators.exec( soFar )) ) {
			matched = match.shift();
			tokens.push({
				value: matched,
				// Cast descendant combinators to space
				type: match[0].replace( rtrim, " " )
			});
			soFar = soFar.slice( matched.length );
		}

		// Filters
		for ( type in Expr.filter ) {
			if ( (match = matchExpr[ type ].exec( soFar )) && (!preFilters[ type ] ||
				(match = preFilters[ type ]( match ))) ) {
				matched = match.shift();
				tokens.push({
					value: matched,
					type: type,
					matches: match
				});
				soFar = soFar.slice( matched.length );
			}
		}

		if ( !matched ) {
			break;
		}
	}

	// Return the length of the invalid excess
	// if we're just parsing
	// Otherwise, throw an error or return tokens
	return parseOnly ?
		soFar.length :
		soFar ?
			Sizzle.error( selector ) :
			// Cache the tokens
			tokenCache( selector, groups ).slice( 0 );
};

function toSelector( tokens ) {
	var i = 0,
		len = tokens.length,
		selector = "";
	for ( ; i < len; i++ ) {
		selector += tokens[i].value;
	}
	return selector;
}

function addCombinator( matcher, combinator, base ) {
	var dir = combinator.dir,
		checkNonElements = base && dir === "parentNode",
		doneName = done++;

	return combinator.first ?
		// Check against closest ancestor/preceding element
		function( elem, context, xml ) {
			while ( (elem = elem[ dir ]) ) {
				if ( elem.nodeType === 1 || checkNonElements ) {
					return matcher( elem, context, xml );
				}
			}
		} :

		// Check against all ancestor/preceding elements
		function( elem, context, xml ) {
			var oldCache, uniqueCache, outerCache,
				newCache = [ dirruns, doneName ];

			// We can't set arbitrary data on XML nodes, so they don't benefit from combinator caching
			if ( xml ) {
				while ( (elem = elem[ dir ]) ) {
					if ( elem.nodeType === 1 || checkNonElements ) {
						if ( matcher( elem, context, xml ) ) {
							return true;
						}
					}
				}
			} else {
				while ( (elem = elem[ dir ]) ) {
					if ( elem.nodeType === 1 || checkNonElements ) {
						outerCache = elem[ expando ] || (elem[ expando ] = {});

						// Support: IE <9 only
						// Defend against cloned attroperties (jQuery gh-1709)
						uniqueCache = outerCache[ elem.uniqueID ] || (outerCache[ elem.uniqueID ] = {});

						if ( (oldCache = uniqueCache[ dir ]) &&
							oldCache[ 0 ] === dirruns && oldCache[ 1 ] === doneName ) {

							// Assign to newCache so results back-propagate to previous elements
							return (newCache[ 2 ] = oldCache[ 2 ]);
						} else {
							// Reuse newcache so results back-propagate to previous elements
							uniqueCache[ dir ] = newCache;

							// A match means we're done; a fail means we have to keep checking
							if ( (newCache[ 2 ] = matcher( elem, context, xml )) ) {
								return true;
							}
						}
					}
				}
			}
		};
}

function elementMatcher( matchers ) {
	return matchers.length > 1 ?
		function( elem, context, xml ) {
			var i = matchers.length;
			while ( i-- ) {
				if ( !matchers[i]( elem, context, xml ) ) {
					return false;
				}
			}
			return true;
		} :
		matchers[0];
}

function multipleContexts( selector, contexts, results ) {
	var i = 0,
		len = contexts.length;
	for ( ; i < len; i++ ) {
		Sizzle( selector, contexts[i], results );
	}
	return results;
}

function condense( unmatched, map, filter, context, xml ) {
	var elem,
		newUnmatched = [],
		i = 0,
		len = unmatched.length,
		mapped = map != null;

	for ( ; i < len; i++ ) {
		if ( (elem = unmatched[i]) ) {
			if ( !filter || filter( elem, context, xml ) ) {
				newUnmatched.push( elem );
				if ( mapped ) {
					map.push( i );
				}
			}
		}
	}

	return newUnmatched;
}

function setMatcher( preFilter, selector, matcher, postFilter, postFinder, postSelector ) {
	if ( postFilter && !postFilter[ expando ] ) {
		postFilter = setMatcher( postFilter );
	}
	if ( postFinder && !postFinder[ expando ] ) {
		postFinder = setMatcher( postFinder, postSelector );
	}
	return markFunction(function( seed, results, context, xml ) {
		var temp, i, elem,
			preMap = [],
			postMap = [],
			preexisting = results.length,

			// Get initial elements from seed or context
			elems = seed || multipleContexts( selector || "*", context.nodeType ? [ context ] : context, [] ),

			// Prefilter to get matcher input, preserving a map for seed-results synchronization
			matcherIn = preFilter && ( seed || !selector ) ?
				condense( elems, preMap, preFilter, context, xml ) :
				elems,

			matcherOut = matcher ?
				// If we have a postFinder, or filtered seed, or non-seed postFilter or preexisting results,
				postFinder || ( seed ? preFilter : preexisting || postFilter ) ?

					// ...intermediate processing is necessary
					[] :

					// ...otherwise use results directly
					results :
				matcherIn;

		// Find primary matches
		if ( matcher ) {
			matcher( matcherIn, matcherOut, context, xml );
		}

		// Apply postFilter
		if ( postFilter ) {
			temp = condense( matcherOut, postMap );
			postFilter( temp, [], context, xml );

			// Un-match failing elements by moving them back to matcherIn
			i = temp.length;
			while ( i-- ) {
				if ( (elem = temp[i]) ) {
					matcherOut[ postMap[i] ] = !(matcherIn[ postMap[i] ] = elem);
				}
			}
		}

		if ( seed ) {
			if ( postFinder || preFilter ) {
				if ( postFinder ) {
					// Get the final matcherOut by condensing this intermediate into postFinder contexts
					temp = [];
					i = matcherOut.length;
					while ( i-- ) {
						if ( (elem = matcherOut[i]) ) {
							// Restore matcherIn since elem is not yet a final match
							temp.push( (matcherIn[i] = elem) );
						}
					}
					postFinder( null, (matcherOut = []), temp, xml );
				}

				// Move matched elements from seed to results to keep them synchronized
				i = matcherOut.length;
				while ( i-- ) {
					if ( (elem = matcherOut[i]) &&
						(temp = postFinder ? indexOf( seed, elem ) : preMap[i]) > -1 ) {

						seed[temp] = !(results[temp] = elem);
					}
				}
			}

		// Add elements to results, through postFinder if defined
		} else {
			matcherOut = condense(
				matcherOut === results ?
					matcherOut.splice( preexisting, matcherOut.length ) :
					matcherOut
			);
			if ( postFinder ) {
				postFinder( null, results, matcherOut, xml );
			} else {
				push.apply( results, matcherOut );
			}
		}
	});
}

function matcherFromTokens( tokens ) {
	var checkContext, matcher, j,
		len = tokens.length,
		leadingRelative = Expr.relative[ tokens[0].type ],
		implicitRelative = leadingRelative || Expr.relative[" "],
		i = leadingRelative ? 1 : 0,

		// The foundational matcher ensures that elements are reachable from top-level context(s)
		matchContext = addCombinator( function( elem ) {
			return elem === checkContext;
		}, implicitRelative, true ),
		matchAnyContext = addCombinator( function( elem ) {
			return indexOf( checkContext, elem ) > -1;
		}, implicitRelative, true ),
		matchers = [ function( elem, context, xml ) {
			var ret = ( !leadingRelative && ( xml || context !== outermostContext ) ) || (
				(checkContext = context).nodeType ?
					matchContext( elem, context, xml ) :
					matchAnyContext( elem, context, xml ) );
			// Avoid hanging onto element (issue #299)
			checkContext = null;
			return ret;
		} ];

	for ( ; i < len; i++ ) {
		if ( (matcher = Expr.relative[ tokens[i].type ]) ) {
			matchers = [ addCombinator(elementMatcher( matchers ), matcher) ];
		} else {
			matcher = Expr.filter[ tokens[i].type ].apply( null, tokens[i].matches );

			// Return special upon seeing a positional matcher
			if ( matcher[ expando ] ) {
				// Find the next relative operator (if any) for proper handling
				j = ++i;
				for ( ; j < len; j++ ) {
					if ( Expr.relative[ tokens[j].type ] ) {
						break;
					}
				}
				return setMatcher(
					i > 1 && elementMatcher( matchers ),
					i > 1 && toSelector(
						// If the preceding token was a descendant combinator, insert an implicit any-element `*`
						tokens.slice( 0, i - 1 ).concat({ value: tokens[ i - 2 ].type === " " ? "*" : "" })
					).replace( rtrim, "$1" ),
					matcher,
					i < j && matcherFromTokens( tokens.slice( i, j ) ),
					j < len && matcherFromTokens( (tokens = tokens.slice( j )) ),
					j < len && toSelector( tokens )
				);
			}
			matchers.push( matcher );
		}
	}

	return elementMatcher( matchers );
}

function matcherFromGroupMatchers( elementMatchers, setMatchers ) {
	var bySet = setMatchers.length > 0,
		byElement = elementMatchers.length > 0,
		superMatcher = function( seed, context, xml, results, outermost ) {
			var elem, j, matcher,
				matchedCount = 0,
				i = "0",
				unmatched = seed && [],
				setMatched = [],
				contextBackup = outermostContext,
				// We must always have either seed elements or outermost context
				elems = seed || byElement && Expr.find["TAG"]( "*", outermost ),
				// Use integer dirruns iff this is the outermost matcher
				dirrunsUnique = (dirruns += contextBackup == null ? 1 : Math.random() || 0.1),
				len = elems.length;

			if ( outermost ) {
				outermostContext = context === document || context || outermost;
			}

			// Add elements passing elementMatchers directly to results
			// Support: IE<9, Safari
			// Tolerate NodeList properties (IE: "length"; Safari: <number>) matching elements by id
			for ( ; i !== len && (elem = elems[i]) != null; i++ ) {
				if ( byElement && elem ) {
					j = 0;
					if ( !context && elem.ownerDocument !== document ) {
						setDocument( elem );
						xml = !documentIsHTML;
					}
					while ( (matcher = elementMatchers[j++]) ) {
						if ( matcher( elem, context || document, xml) ) {
							results.push( elem );
							break;
						}
					}
					if ( outermost ) {
						dirruns = dirrunsUnique;
					}
				}

				// Track unmatched elements for set filters
				if ( bySet ) {
					// They will have gone through all possible matchers
					if ( (elem = !matcher && elem) ) {
						matchedCount--;
					}

					// Lengthen the array for every element, matched or not
					if ( seed ) {
						unmatched.push( elem );
					}
				}
			}

			// `i` is now the count of elements visited above, and adding it to `matchedCount`
			// makes the latter nonnegative.
			matchedCount += i;

			// Apply set filters to unmatched elements
			// NOTE: This can be skipped if there are no unmatched elements (i.e., `matchedCount`
			// equals `i`), unless we didn't visit _any_ elements in the above loop because we have
			// no element matchers and no seed.
			// Incrementing an initially-string "0" `i` allows `i` to remain a string only in that
			// case, which will result in a "00" `matchedCount` that differs from `i` but is also
			// numerically zero.
			if ( bySet && i !== matchedCount ) {
				j = 0;
				while ( (matcher = setMatchers[j++]) ) {
					matcher( unmatched, setMatched, context, xml );
				}

				if ( seed ) {
					// Reintegrate element matches to eliminate the need for sorting
					if ( matchedCount > 0 ) {
						while ( i-- ) {
							if ( !(unmatched[i] || setMatched[i]) ) {
								setMatched[i] = pop.call( results );
							}
						}
					}

					// Discard index placeholder values to get only actual matches
					setMatched = condense( setMatched );
				}

				// Add matches to results
				push.apply( results, setMatched );

				// Seedless set matches succeeding multiple successful matchers stipulate sorting
				if ( outermost && !seed && setMatched.length > 0 &&
					( matchedCount + setMatchers.length ) > 1 ) {

					Sizzle.uniqueSort( results );
				}
			}

			// Override manipulation of globals by nested matchers
			if ( outermost ) {
				dirruns = dirrunsUnique;
				outermostContext = contextBackup;
			}

			return unmatched;
		};

	return bySet ?
		markFunction( superMatcher ) :
		superMatcher;
}

compile = Sizzle.compile = function( selector, match /* Internal Use Only */ ) {
	var i,
		setMatchers = [],
		elementMatchers = [],
		cached = compilerCache[ selector + " " ];

	if ( !cached ) {
		// Generate a function of recursive functions that can be used to check each element
		if ( !match ) {
			match = tokenize( selector );
		}
		i = match.length;
		while ( i-- ) {
			cached = matcherFromTokens( match[i] );
			if ( cached[ expando ] ) {
				setMatchers.push( cached );
			} else {
				elementMatchers.push( cached );
			}
		}

		// Cache the compiled function
		cached = compilerCache( selector, matcherFromGroupMatchers( elementMatchers, setMatchers ) );

		// Save selector and tokenization
		cached.selector = selector;
	}
	return cached;
};

/**
 * A low-level selection function that works with Sizzle's compiled
 *  selector functions
 * @param {String|Function} selector A selector or a pre-compiled
 *  selector function built with Sizzle.compile
 * @param {Element} context
 * @param {Array} [results]
 * @param {Array} [seed] A set of elements to match against
 */
select = Sizzle.select = function( selector, context, results, seed ) {
	var i, tokens, token, type, find,
		compiled = typeof selector === "function" && selector,
		match = !seed && tokenize( (selector = compiled.selector || selector) );

	results = results || [];

	// Try to minimize operations if there is only one selector in the list and no seed
	// (the latter of which guarantees us context)
	if ( match.length === 1 ) {

		// Reduce context if the leading compound selector is an ID
		tokens = match[0] = match[0].slice( 0 );
		if ( tokens.length > 2 && (token = tokens[0]).type === "ID" &&
				support.getById && context.nodeType === 9 && documentIsHTML &&
				Expr.relative[ tokens[1].type ] ) {

			context = ( Expr.find["ID"]( token.matches[0].replace(runescape, funescape), context ) || [] )[0];
			if ( !context ) {
				return results;

			// Precompiled matchers will still verify ancestry, so step up a level
			} else if ( compiled ) {
				context = context.parentNode;
			}

			selector = selector.slice( tokens.shift().value.length );
		}

		// Fetch a seed set for right-to-left matching
		i = matchExpr["needsContext"].test( selector ) ? 0 : tokens.length;
		while ( i-- ) {
			token = tokens[i];

			// Abort if we hit a combinator
			if ( Expr.relative[ (type = token.type) ] ) {
				break;
			}
			if ( (find = Expr.find[ type ]) ) {
				// Search, expanding context for leading sibling combinators
				if ( (seed = find(
					token.matches[0].replace( runescape, funescape ),
					rsibling.test( tokens[0].type ) && testContext( context.parentNode ) || context
				)) ) {

					// If seed is empty or no tokens remain, we can return early
					tokens.splice( i, 1 );
					selector = seed.length && toSelector( tokens );
					if ( !selector ) {
						push.apply( results, seed );
						return results;
					}

					break;
				}
			}
		}
	}

	// Compile and execute a filtering function if one is not provided
	// Provide `match` to avoid retokenization if we modified the selector above
	( compiled || compile( selector, match ) )(
		seed,
		context,
		!documentIsHTML,
		results,
		!context || rsibling.test( selector ) && testContext( context.parentNode ) || context
	);
	return results;
};

// One-time assignments

// Sort stability
support.sortStable = expando.split("").sort( sortOrder ).join("") === expando;

// Support: Chrome 14-35+
// Always assume duplicates if they aren't passed to the comparison function
support.detectDuplicates = !!hasDuplicate;

// Initialize against the default document
setDocument();

// Support: Webkit<537.32 - Safari 6.0.3/Chrome 25 (fixed in Chrome 27)
// Detached nodes confoundingly follow *each other*
support.sortDetached = assert(function( div1 ) {
	// Should return 1, but returns 4 (following)
	return div1.compareDocumentPosition( document.createElement("div") ) & 1;
});

// Support: IE<8
// Prevent attribute/property "interpolation"
// http://msdn.microsoft.com/en-us/library/ms536429%28VS.85%29.aspx
if ( !assert(function( div ) {
	div.innerHTML = "<a href='#'></a>";
	return div.firstChild.getAttribute("href") === "#" ;
}) ) {
	addHandle( "type|href|height|width", function( elem, name, isXML ) {
		if ( !isXML ) {
			return elem.getAttribute( name, name.toLowerCase() === "type" ? 1 : 2 );
		}
	});
}

// Support: IE<9
// Use defaultValue in place of getAttribute("value")
if ( !support.attributes || !assert(function( div ) {
	div.innerHTML = "<input/>";
	div.firstChild.setAttribute( "value", "" );
	return div.firstChild.getAttribute( "value" ) === "";
}) ) {
	addHandle( "value", function( elem, name, isXML ) {
		if ( !isXML && elem.nodeName.toLowerCase() === "input" ) {
			return elem.defaultValue;
		}
	});
}

// Support: IE<9
// Use getAttributeNode to fetch booleans when getAttribute lies
if ( !assert(function( div ) {
	return div.getAttribute("disabled") == null;
}) ) {
	addHandle( booleans, function( elem, name, isXML ) {
		var val;
		if ( !isXML ) {
			return elem[ name ] === true ? name.toLowerCase() :
					(val = elem.getAttributeNode( name )) && val.specified ?
					val.value :
				null;
		}
	});
}

return Sizzle;

})( window );



jQuery.find = Sizzle;
jQuery.expr = Sizzle.selectors;
jQuery.expr[ ":" ] = jQuery.expr.pseudos;
jQuery.uniqueSort = jQuery.unique = Sizzle.uniqueSort;
jQuery.text = Sizzle.getText;
jQuery.isXMLDoc = Sizzle.isXML;
jQuery.contains = Sizzle.contains;



var dir = function( elem, dir, until ) {
	var matched = [],
		truncate = until !== undefined;

	while ( ( elem = elem[ dir ] ) && elem.nodeType !== 9 ) {
		if ( elem.nodeType === 1 ) {
			if ( truncate && jQuery( elem ).is( until ) ) {
				break;
			}
			matched.push( elem );
		}
	}
	return matched;
};


var siblings = function( n, elem ) {
	var matched = [];

	for ( ; n; n = n.nextSibling ) {
		if ( n.nodeType === 1 && n !== elem ) {
			matched.push( n );
		}
	}

	return matched;
};


var rneedsContext = jQuery.expr.match.needsContext;

var rsingleTag = ( /^<([\w-]+)\s*\/?>(?:<\/\1>|)$/ );



var risSimple = /^.[^:#\[\.,]*$/;

// Implement the identical functionality for filter and not
function winnow( elements, qualifier, not ) {
	if ( jQuery.isFunction( qualifier ) ) {
		return jQuery.grep( elements, function( elem, i ) {
			/* jshint -W018 */
			return !!qualifier.call( elem, i, elem ) !== not;
		} );

	}

	if ( qualifier.nodeType ) {
		return jQuery.grep( elements, function( elem ) {
			return ( elem === qualifier ) !== not;
		} );

	}

	if ( typeof qualifier === "string" ) {
		if ( risSimple.test( qualifier ) ) {
			return jQuery.filter( qualifier, elements, not );
		}

		qualifier = jQuery.filter( qualifier, elements );
	}

	return jQuery.grep( elements, function( elem ) {
		return ( jQuery.inArray( elem, qualifier ) > -1 ) !== not;
	} );
}

jQuery.filter = function( expr, elems, not ) {
	var elem = elems[ 0 ];

	if ( not ) {
		expr = ":not(" + expr + ")";
	}

	return elems.length === 1 && elem.nodeType === 1 ?
		jQuery.find.matchesSelector( elem, expr ) ? [ elem ] : [] :
		jQuery.find.matches( expr, jQuery.grep( elems, function( elem ) {
			return elem.nodeType === 1;
		} ) );
};

jQuery.fn.extend( {
	find: function( selector ) {
		var i,
			ret = [],
			self = this,
			len = self.length;

		if ( typeof selector !== "string" ) {
			return this.pushStack( jQuery( selector ).filter( function() {
				for ( i = 0; i < len; i++ ) {
					if ( jQuery.contains( self[ i ], this ) ) {
						return true;
					}
				}
			} ) );
		}

		for ( i = 0; i < len; i++ ) {
			jQuery.find( selector, self[ i ], ret );
		}

		// Needed because $( selector, context ) becomes $( context ).find( selector )
		ret = this.pushStack( len > 1 ? jQuery.unique( ret ) : ret );
		ret.selector = this.selector ? this.selector + " " + selector : selector;
		return ret;
	},
	filter: function( selector ) {
		return this.pushStack( winnow( this, selector || [], false ) );
	},
	not: function( selector ) {
		return this.pushStack( winnow( this, selector || [], true ) );
	},
	is: function( selector ) {
		return !!winnow(
			this,

			// If this is a positional/relative selector, check membership in the returned set
			// so $("p:first").is("p:last") won't return true for a doc with two "p".
			typeof selector === "string" && rneedsContext.test( selector ) ?
				jQuery( selector ) :
				selector || [],
			false
		).length;
	}
} );


// Initialize a jQuery object


// A central reference to the root jQuery(document)
var rootjQuery,

	// A simple way to check for HTML strings
	// Prioritize #id over <tag> to avoid XSS via location.hash (#9521)
	// Strict HTML recognition (#11290: must start with <)
	rquickExpr = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]*))$/,

	init = jQuery.fn.init = function( selector, context, root ) {
		var match, elem;

		// HANDLE: $(""), $(null), $(undefined), $(false)
		if ( !selector ) {
			return this;
		}

		// init accepts an alternate rootjQuery
		// so migrate can support jQuery.sub (gh-2101)
		root = root || rootjQuery;

		// Handle HTML strings
		if ( typeof selector === "string" ) {
			if ( selector.charAt( 0 ) === "<" &&
				selector.charAt( selector.length - 1 ) === ">" &&
				selector.length >= 3 ) {

				// Assume that strings that start and end with <> are HTML and skip the regex check
				match = [ null, selector, null ];

			} else {
				match = rquickExpr.exec( selector );
			}

			// Match html or make sure no context is specified for #id
			if ( match && ( match[ 1 ] || !context ) ) {

				// HANDLE: $(html) -> $(array)
				if ( match[ 1 ] ) {
					context = context instanceof jQuery ? context[ 0 ] : context;

					// scripts is true for back-compat
					// Intentionally let the error be thrown if parseHTML is not present
					jQuery.merge( this, jQuery.parseHTML(
						match[ 1 ],
						context && context.nodeType ? context.ownerDocument || context : document,
						true
					) );

					// HANDLE: $(html, props)
					if ( rsingleTag.test( match[ 1 ] ) && jQuery.isPlainObject( context ) ) {
						for ( match in context ) {

							// Properties of context are called as methods if possible
							if ( jQuery.isFunction( this[ match ] ) ) {
								this[ match ]( context[ match ] );

							// ...and otherwise set as attributes
							} else {
								this.attr( match, context[ match ] );
							}
						}
					}

					return this;

				// HANDLE: $(#id)
				} else {
					elem = document.getElementById( match[ 2 ] );

					// Check parentNode to catch when Blackberry 4.6 returns
					// nodes that are no longer in the document #6963
					if ( elem && elem.parentNode ) {

						// Handle the case where IE and Opera return items
						// by name instead of ID
						if ( elem.id !== match[ 2 ] ) {
							return rootjQuery.find( selector );
						}

						// Otherwise, we inject the element directly into the jQuery object
						this.length = 1;
						this[ 0 ] = elem;
					}

					this.context = document;
					this.selector = selector;
					return this;
				}

			// HANDLE: $(expr, $(...))
			} else if ( !context || context.jquery ) {
				return ( context || root ).find( selector );

			// HANDLE: $(expr, context)
			// (which is just equivalent to: $(context).find(expr)
			} else {
				return this.constructor( context ).find( selector );
			}

		// HANDLE: $(DOMElement)
		} else if ( selector.nodeType ) {
			this.context = this[ 0 ] = selector;
			this.length = 1;
			return this;

		// HANDLE: $(function)
		// Shortcut for document ready
		} else if ( jQuery.isFunction( selector ) ) {
			return typeof root.ready !== "undefined" ?
				root.ready( selector ) :

				// Execute immediately if ready is not present
				selector( jQuery );
		}

		if ( selector.selector !== undefined ) {
			this.selector = selector.selector;
			this.context = selector.context;
		}

		return jQuery.makeArray( selector, this );
	};

// Give the init function the jQuery prototype for later instantiation
init.prototype = jQuery.fn;

// Initialize central reference
rootjQuery = jQuery( document );


var rparentsprev = /^(?:parents|prev(?:Until|All))/,

	// methods guaranteed to produce a unique set when starting from a unique set
	guaranteedUnique = {
		children: true,
		contents: true,
		next: true,
		prev: true
	};

jQuery.fn.extend( {
	has: function( target ) {
		var i,
			targets = jQuery( target, this ),
			len = targets.length;

		return this.filter( function() {
			for ( i = 0; i < len; i++ ) {
				if ( jQuery.contains( this, targets[ i ] ) ) {
					return true;
				}
			}
		} );
	},

	closest: function( selectors, context ) {
		var cur,
			i = 0,
			l = this.length,
			matched = [],
			pos = rneedsContext.test( selectors ) || typeof selectors !== "string" ?
				jQuery( selectors, context || this.context ) :
				0;

		for ( ; i < l; i++ ) {
			for ( cur = this[ i ]; cur && cur !== context; cur = cur.parentNode ) {

				// Always skip document fragments
				if ( cur.nodeType < 11 && ( pos ?
					pos.index( cur ) > -1 :

					// Don't pass non-elements to Sizzle
					cur.nodeType === 1 &&
						jQuery.find.matchesSelector( cur, selectors ) ) ) {

					matched.push( cur );
					break;
				}
			}
		}

		return this.pushStack( matched.length > 1 ? jQuery.uniqueSort( matched ) : matched );
	},

	// Determine the position of an element within
	// the matched set of elements
	index: function( elem ) {

		// No argument, return index in parent
		if ( !elem ) {
			return ( this[ 0 ] && this[ 0 ].parentNode ) ? this.first().prevAll().length : -1;
		}

		// index in selector
		if ( typeof elem === "string" ) {
			return jQuery.inArray( this[ 0 ], jQuery( elem ) );
		}

		// Locate the position of the desired element
		return jQuery.inArray(

			// If it receives a jQuery object, the first element is used
			elem.jquery ? elem[ 0 ] : elem, this );
	},

	add: function( selector, context ) {
		return this.pushStack(
			jQuery.uniqueSort(
				jQuery.merge( this.get(), jQuery( selector, context ) )
			)
		);
	},

	addBack: function( selector ) {
		return this.add( selector == null ?
			this.prevObject : this.prevObject.filter( selector )
		);
	}
} );

function sibling( cur, dir ) {
	do {
		cur = cur[ dir ];
	} while ( cur && cur.nodeType !== 1 );

	return cur;
}

jQuery.each( {
	parent: function( elem ) {
		var parent = elem.parentNode;
		return parent && parent.nodeType !== 11 ? parent : null;
	},
	parents: function( elem ) {
		return dir( elem, "parentNode" );
	},
	parentsUntil: function( elem, i, until ) {
		return dir( elem, "parentNode", until );
	},
	next: function( elem ) {
		return sibling( elem, "nextSibling" );
	},
	prev: function( elem ) {
		return sibling( elem, "previousSibling" );
	},
	nextAll: function( elem ) {
		return dir( elem, "nextSibling" );
	},
	prevAll: function( elem ) {
		return dir( elem, "previousSibling" );
	},
	nextUntil: function( elem, i, until ) {
		return dir( elem, "nextSibling", until );
	},
	prevUntil: function( elem, i, until ) {
		return dir( elem, "previousSibling", until );
	},
	siblings: function( elem ) {
		return siblings( ( elem.parentNode || {} ).firstChild, elem );
	},
	children: function( elem ) {
		return siblings( elem.firstChild );
	},
	contents: function( elem ) {
		return jQuery.nodeName( elem, "iframe" ) ?
			elem.contentDocument || elem.contentWindow.document :
			jQuery.merge( [], elem.childNodes );
	}
}, function( name, fn ) {
	jQuery.fn[ name ] = function( until, selector ) {
		var ret = jQuery.map( this, fn, until );

		if ( name.slice( -5 ) !== "Until" ) {
			selector = until;
		}

		if ( selector && typeof selector === "string" ) {
			ret = jQuery.filter( selector, ret );
		}

		if ( this.length > 1 ) {

			// Remove duplicates
			if ( !guaranteedUnique[ name ] ) {
				ret = jQuery.uniqueSort( ret );
			}

			// Reverse order for parents* and prev-derivatives
			if ( rparentsprev.test( name ) ) {
				ret = ret.reverse();
			}
		}

		return this.pushStack( ret );
	};
} );
var rnotwhite = ( /\S+/g );



// Convert String-formatted options into Object-formatted ones
function createOptions( options ) {
	var object = {};
	jQuery.each( options.match( rnotwhite ) || [], function( _, flag ) {
		object[ flag ] = true;
	} );
	return object;
}

/*
 * Create a callback list using the following parameters:
 *
 *	options: an optional list of space-separated options that will change how
 *			the callback list behaves or a more traditional option object
 *
 * By default a callback list will act like an event callback list and can be
 * "fired" multiple times.
 *
 * Possible options:
 *
 *	once:			will ensure the callback list can only be fired once (like a Deferred)
 *
 *	memory:			will keep track of previous values and will call any callback added
 *					after the list has been fired right away with the latest "memorized"
 *					values (like a Deferred)
 *
 *	unique:			will ensure a callback can only be added once (no duplicate in the list)
 *
 *	stopOnFalse:	interrupt callings when a callback returns false
 *
 */
jQuery.Callbacks = function( options ) {

	// Convert options from String-formatted to Object-formatted if needed
	// (we check in cache first)
	options = typeof options === "string" ?
		createOptions( options ) :
		jQuery.extend( {}, options );

	var // Flag to know if list is currently firing
		firing,

		// Last fire value for non-forgettable lists
		memory,

		// Flag to know if list was already fired
		fired,

		// Flag to prevent firing
		locked,

		// Actual callback list
		list = [],

		// Queue of execution data for repeatable lists
		queue = [],

		// Index of currently firing callback (modified by add/remove as needed)
		firingIndex = -1,

		// Fire callbacks
		fire = function() {

			// Enforce single-firing
			locked = options.once;

			// Execute callbacks for all pending executions,
			// respecting firingIndex overrides and runtime changes
			fired = firing = true;
			for ( ; queue.length; firingIndex = -1 ) {
				memory = queue.shift();
				while ( ++firingIndex < list.length ) {

					// Run callback and check for early termination
					if ( list[ firingIndex ].apply( memory[ 0 ], memory[ 1 ] ) === false &&
						options.stopOnFalse ) {

						// Jump to end and forget the data so .add doesn't re-fire
						firingIndex = list.length;
						memory = false;
					}
				}
			}

			// Forget the data if we're done with it
			if ( !options.memory ) {
				memory = false;
			}

			firing = false;

			// Clean up if we're done firing for good
			if ( locked ) {

				// Keep an empty list if we have data for future add calls
				if ( memory ) {
					list = [];

				// Otherwise, this object is spent
				} else {
					list = "";
				}
			}
		},

		// Actual Callbacks object
		self = {

			// Add a callback or a collection of callbacks to the list
			add: function() {
				if ( list ) {

					// If we have memory from a past run, we should fire after adding
					if ( memory && !firing ) {
						firingIndex = list.length - 1;
						queue.push( memory );
					}

					( function add( args ) {
						jQuery.each( args, function( _, arg ) {
							if ( jQuery.isFunction( arg ) ) {
								if ( !options.unique || !self.has( arg ) ) {
									list.push( arg );
								}
							} else if ( arg && arg.length && jQuery.type( arg ) !== "string" ) {

								// Inspect recursively
								add( arg );
							}
						} );
					} )( arguments );

					if ( memory && !firing ) {
						fire();
					}
				}
				return this;
			},

			// Remove a callback from the list
			remove: function() {
				jQuery.each( arguments, function( _, arg ) {
					var index;
					while ( ( index = jQuery.inArray( arg, list, index ) ) > -1 ) {
						list.splice( index, 1 );

						// Handle firing indexes
						if ( index <= firingIndex ) {
							firingIndex--;
						}
					}
				} );
				return this;
			},

			// Check if a given callback is in the list.
			// If no argument is given, return whether or not list has callbacks attached.
			has: function( fn ) {
				return fn ?
					jQuery.inArray( fn, list ) > -1 :
					list.length > 0;
			},

			// Remove all callbacks from the list
			empty: function() {
				if ( list ) {
					list = [];
				}
				return this;
			},

			// Disable .fire and .add
			// Abort any current/pending executions
			// Clear all callbacks and values
			disable: function() {
				locked = queue = [];
				list = memory = "";
				return this;
			},
			disabled: function() {
				return !list;
			},

			// Disable .fire
			// Also disable .add unless we have memory (since it would have no effect)
			// Abort any pending executions
			lock: function() {
				locked = true;
				if ( !memory ) {
					self.disable();
				}
				return this;
			},
			locked: function() {
				return !!locked;
			},

			// Call all callbacks with the given context and arguments
			fireWith: function( context, args ) {
				if ( !locked ) {
					args = args || [];
					args = [ context, args.slice ? args.slice() : args ];
					queue.push( args );
					if ( !firing ) {
						fire();
					}
				}
				return this;
			},

			// Call all the callbacks with the given arguments
			fire: function() {
				self.fireWith( this, arguments );
				return this;
			},

			// To know if the callbacks have already been called at least once
			fired: function() {
				return !!fired;
			}
		};

	return self;
};


jQuery.extend( {

	Deferred: function( func ) {
		var tuples = [

				// action, add listener, listener list, final state
				[ "resolve", "done", jQuery.Callbacks( "once memory" ), "resolved" ],
				[ "reject", "fail", jQuery.Callbacks( "once memory" ), "rejected" ],
				[ "notify", "progress", jQuery.Callbacks( "memory" ) ]
			],
			state = "pending",
			promise = {
				state: function() {
					return state;
				},
				always: function() {
					deferred.done( arguments ).fail( arguments );
					return this;
				},
				then: function( /* fnDone, fnFail, fnProgress */ ) {
					var fns = arguments;
					return jQuery.Deferred( function( newDefer ) {
						jQuery.each( tuples, function( i, tuple ) {
							var fn = jQuery.isFunction( fns[ i ] ) && fns[ i ];

							// deferred[ done | fail | progress ] for forwarding actions to newDefer
							deferred[ tuple[ 1 ] ]( function() {
								var returned = fn && fn.apply( this, arguments );
								if ( returned && jQuery.isFunction( returned.promise ) ) {
									returned.promise()
										.progress( newDefer.notify )
										.done( newDefer.resolve )
										.fail( newDefer.reject );
								} else {
									newDefer[ tuple[ 0 ] + "With" ](
										this === promise ? newDefer.promise() : this,
										fn ? [ returned ] : arguments
									);
								}
							} );
						} );
						fns = null;
					} ).promise();
				},

				// Get a promise for this deferred
				// If obj is provided, the promise aspect is added to the object
				promise: function( obj ) {
					return obj != null ? jQuery.extend( obj, promise ) : promise;
				}
			},
			deferred = {};

		// Keep pipe for back-compat
		promise.pipe = promise.then;

		// Add list-specific methods
		jQuery.each( tuples, function( i, tuple ) {
			var list = tuple[ 2 ],
				stateString = tuple[ 3 ];

			// promise[ done | fail | progress ] = list.add
			promise[ tuple[ 1 ] ] = list.add;

			// Handle state
			if ( stateString ) {
				list.add( function() {

					// state = [ resolved | rejected ]
					state = stateString;

				// [ reject_list | resolve_list ].disable; progress_list.lock
				}, tuples[ i ^ 1 ][ 2 ].disable, tuples[ 2 ][ 2 ].lock );
			}

			// deferred[ resolve | reject | notify ]
			deferred[ tuple[ 0 ] ] = function() {
				deferred[ tuple[ 0 ] + "With" ]( this === deferred ? promise : this, arguments );
				return this;
			};
			deferred[ tuple[ 0 ] + "With" ] = list.fireWith;
		} );

		// Make the deferred a promise
		promise.promise( deferred );

		// Call given func if any
		if ( func ) {
			func.call( deferred, deferred );
		}

		// All done!
		return deferred;
	},

	// Deferred helper
	when: function( subordinate /* , ..., subordinateN */ ) {
		var i = 0,
			resolveValues = slice.call( arguments ),
			length = resolveValues.length,

			// the count of uncompleted subordinates
			remaining = length !== 1 ||
				( subordinate && jQuery.isFunction( subordinate.promise ) ) ? length : 0,

			// the master Deferred.
			// If resolveValues consist of only a single Deferred, just use that.
			deferred = remaining === 1 ? subordinate : jQuery.Deferred(),

			// Update function for both resolve and progress values
			updateFunc = function( i, contexts, values ) {
				return function( value ) {
					contexts[ i ] = this;
					values[ i ] = arguments.length > 1 ? slice.call( arguments ) : value;
					if ( values === progressValues ) {
						deferred.notifyWith( contexts, values );

					} else if ( !( --remaining ) ) {
						deferred.resolveWith( contexts, values );
					}
				};
			},

			progressValues, progressContexts, resolveContexts;

		// add listeners to Deferred subordinates; treat others as resolved
		if ( length > 1 ) {
			progressValues = new Array( length );
			progressContexts = new Array( length );
			resolveContexts = new Array( length );
			for ( ; i < length; i++ ) {
				if ( resolveValues[ i ] && jQuery.isFunction( resolveValues[ i ].promise ) ) {
					resolveValues[ i ].promise()
						.progress( updateFunc( i, progressContexts, progressValues ) )
						.done( updateFunc( i, resolveContexts, resolveValues ) )
						.fail( deferred.reject );
				} else {
					--remaining;
				}
			}
		}

		// if we're not waiting on anything, resolve the master
		if ( !remaining ) {
			deferred.resolveWith( resolveContexts, resolveValues );
		}

		return deferred.promise();
	}
} );


// The deferred used on DOM ready
var readyList;

jQuery.fn.ready = function( fn ) {

	// Add the callback
	jQuery.ready.promise().done( fn );

	return this;
};

jQuery.extend( {

	// Is the DOM ready to be used? Set to true once it occurs.
	isReady: false,

	// A counter to track how many items to wait for before
	// the ready event fires. See #6781
	readyWait: 1,

	// Hold (or release) the ready event
	holdReady: function( hold ) {
		if ( hold ) {
			jQuery.readyWait++;
		} else {
			jQuery.ready( true );
		}
	},

	// Handle when the DOM is ready
	ready: function( wait ) {

		// Abort if there are pending holds or we're already ready
		if ( wait === true ? --jQuery.readyWait : jQuery.isReady ) {
			return;
		}

		// Remember that the DOM is ready
		jQuery.isReady = true;

		// If a normal DOM Ready event fired, decrement, and wait if need be
		if ( wait !== true && --jQuery.readyWait > 0 ) {
			return;
		}

		// If there are functions bound, to execute
		readyList.resolveWith( document, [ jQuery ] );

		// Trigger any bound ready events
		if ( jQuery.fn.triggerHandler ) {
			jQuery( document ).triggerHandler( "ready" );
			jQuery( document ).off( "ready" );
		}
	}
} );

/**
 * Clean-up method for dom ready events
 */
function detach() {
	if ( document.addEventListener ) {
		document.removeEventListener( "DOMContentLoaded", completed );
		window.removeEventListener( "load", completed );

	} else {
		document.detachEvent( "onreadystatechange", completed );
		window.detachEvent( "onload", completed );
	}
}

/**
 * The ready event handler and self cleanup method
 */
function completed() {

	// readyState === "complete" is good enough for us to call the dom ready in oldIE
	if ( document.addEventListener ||
		window.event.type === "load" ||
		document.readyState === "complete" ) {

		detach();
		jQuery.ready();
	}
}

jQuery.ready.promise = function( obj ) {
	if ( !readyList ) {

		readyList = jQuery.Deferred();

		// Catch cases where $(document).ready() is called
		// after the browser event has already occurred.
		// Support: IE6-10
		// Older IE sometimes signals "interactive" too soon
		if ( document.readyState === "complete" ||
			( document.readyState !== "loading" && !document.documentElement.doScroll ) ) {

			// Handle it asynchronously to allow scripts the opportunity to delay ready
			window.setTimeout( jQuery.ready );

		// Standards-based browsers support DOMContentLoaded
		} else if ( document.addEventListener ) {

			// Use the handy event callback
			document.addEventListener( "DOMContentLoaded", completed );

			// A fallback to window.onload, that will always work
			window.addEventListener( "load", completed );

		// If IE event model is used
		} else {

			// Ensure firing before onload, maybe late but safe also for iframes
			document.attachEvent( "onreadystatechange", completed );

			// A fallback to window.onload, that will always work
			window.attachEvent( "onload", completed );

			// If IE and not a frame
			// continually check to see if the document is ready
			var top = false;

			try {
				top = window.frameElement == null && document.documentElement;
			} catch ( e ) {}

			if ( top && top.doScroll ) {
				( function doScrollCheck() {
					if ( !jQuery.isReady ) {

						try {

							// Use the trick by Diego Perini
							// http://javascript.nwbox.com/IEContentLoaded/
							top.doScroll( "left" );
						} catch ( e ) {
							return window.setTimeout( doScrollCheck, 50 );
						}

						// detach all dom ready events
						detach();

						// and execute any waiting functions
						jQuery.ready();
					}
				} )();
			}
		}
	}
	return readyList.promise( obj );
};

// Kick off the DOM ready check even if the user does not
jQuery.ready.promise();




// Support: IE<9
// Iteration over object's inherited properties before its own
var i;
for ( i in jQuery( support ) ) {
	break;
}
support.ownFirst = i === "0";

// Note: most support tests are defined in their respective modules.
// false until the test is run
support.inlineBlockNeedsLayout = false;

// Execute ASAP in case we need to set body.style.zoom
jQuery( function() {

	// Minified: var a,b,c,d
	var val, div, body, container;

	body = document.getElementsByTagName( "body" )[ 0 ];
	if ( !body || !body.style ) {

		// Return for frameset docs that don't have a body
		return;
	}

	// Setup
	div = document.createElement( "div" );
	container = document.createElement( "div" );
	container.style.cssText = "position:absolute;border:0;width:0;height:0;top:0;left:-9999px";
	body.appendChild( container ).appendChild( div );

	if ( typeof div.style.zoom !== "undefined" ) {

		// Support: IE<8
		// Check if natively block-level elements act like inline-block
		// elements when setting their display to 'inline' and giving
		// them layout
		div.style.cssText = "display:inline;margin:0;border:0;padding:1px;width:1px;zoom:1";

		support.inlineBlockNeedsLayout = val = div.offsetWidth === 3;
		if ( val ) {

			// Prevent IE 6 from affecting layout for positioned elements #11048
			// Prevent IE from shrinking the body in IE 7 mode #12869
			// Support: IE<8
			body.style.zoom = 1;
		}
	}

	body.removeChild( container );
} );


( function() {
	var div = document.createElement( "div" );

	// Support: IE<9
	support.deleteExpando = true;
	try {
		delete div.test;
	} catch ( e ) {
		support.deleteExpando = false;
	}

	// Null elements to avoid leaks in IE.
	div = null;
} )();
var acceptData = function( elem ) {
	var noData = jQuery.noData[ ( elem.nodeName + " " ).toLowerCase() ],
		nodeType = +elem.nodeType || 1;

	// Do not set data on non-element DOM nodes because it will not be cleared (#8335).
	return nodeType !== 1 && nodeType !== 9 ?
		false :

		// Nodes accept data unless otherwise specified; rejection can be conditional
		!noData || noData !== true && elem.getAttribute( "classid" ) === noData;
};




var rbrace = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,
	rmultiDash = /([A-Z])/g;

function dataAttr( elem, key, data ) {

	// If nothing was found internally, try to fetch any
	// data from the HTML5 data-* attribute
	if ( data === undefined && elem.nodeType === 1 ) {

		var name = "data-" + key.replace( rmultiDash, "-$1" ).toLowerCase();

		data = elem.getAttribute( name );

		if ( typeof data === "string" ) {
			try {
				data = data === "true" ? true :
					data === "false" ? false :
					data === "null" ? null :

					// Only convert to a number if it doesn't change the string
					+data + "" === data ? +data :
					rbrace.test( data ) ? jQuery.parseJSON( data ) :
					data;
			} catch ( e ) {}

			// Make sure we set the data so it isn't changed later
			jQuery.data( elem, key, data );

		} else {
			data = undefined;
		}
	}

	return data;
}

// checks a cache object for emptiness
function isEmptyDataObject( obj ) {
	var name;
	for ( name in obj ) {

		// if the public data object is empty, the private is still empty
		if ( name === "data" && jQuery.isEmptyObject( obj[ name ] ) ) {
			continue;
		}
		if ( name !== "toJSON" ) {
			return false;
		}
	}

	return true;
}

function internalData( elem, name, data, pvt /* Internal Use Only */ ) {
	if ( !acceptData( elem ) ) {
		return;
	}

	var ret, thisCache,
		internalKey = jQuery.expando,

		// We have to handle DOM nodes and JS objects differently because IE6-7
		// can't GC object references properly across the DOM-JS boundary
		isNode = elem.nodeType,

		// Only DOM nodes need the global jQuery cache; JS object data is
		// attached directly to the object so GC can occur automatically
		cache = isNode ? jQuery.cache : elem,

		// Only defining an ID for JS objects if its cache already exists allows
		// the code to shortcut on the same path as a DOM node with no cache
		id = isNode ? elem[ internalKey ] : elem[ internalKey ] && internalKey;

	// Avoid doing any more work than we need to when trying to get data on an
	// object that has no data at all
	if ( ( !id || !cache[ id ] || ( !pvt && !cache[ id ].data ) ) &&
		data === undefined && typeof name === "string" ) {
		return;
	}

	if ( !id ) {

		// Only DOM nodes need a new unique ID for each element since their data
		// ends up in the global cache
		if ( isNode ) {
			id = elem[ internalKey ] = deletedIds.pop() || jQuery.guid++;
		} else {
			id = internalKey;
		}
	}

	if ( !cache[ id ] ) {

		// Avoid exposing jQuery metadata on plain JS objects when the object
		// is serialized using JSON.stringify
		cache[ id ] = isNode ? {} : { toJSON: jQuery.noop };
	}

	// An object can be passed to jQuery.data instead of a key/value pair; this gets
	// shallow copied over onto the existing cache
	if ( typeof name === "object" || typeof name === "function" ) {
		if ( pvt ) {
			cache[ id ] = jQuery.extend( cache[ id ], name );
		} else {
			cache[ id ].data = jQuery.extend( cache[ id ].data, name );
		}
	}

	thisCache = cache[ id ];

	// jQuery data() is stored in a separate object inside the object's internal data
	// cache in order to avoid key collisions between internal data and user-defined
	// data.
	if ( !pvt ) {
		if ( !thisCache.data ) {
			thisCache.data = {};
		}

		thisCache = thisCache.data;
	}

	if ( data !== undefined ) {
		thisCache[ jQuery.camelCase( name ) ] = data;
	}

	// Check for both converted-to-camel and non-converted data property names
	// If a data property was specified
	if ( typeof name === "string" ) {

		// First Try to find as-is property data
		ret = thisCache[ name ];

		// Test for null|undefined property data
		if ( ret == null ) {

			// Try to find the camelCased property
			ret = thisCache[ jQuery.camelCase( name ) ];
		}
	} else {
		ret = thisCache;
	}

	return ret;
}

function internalRemoveData( elem, name, pvt ) {
	if ( !acceptData( elem ) ) {
		return;
	}

	var thisCache, i,
		isNode = elem.nodeType,

		// See jQuery.data for more information
		cache = isNode ? jQuery.cache : elem,
		id = isNode ? elem[ jQuery.expando ] : jQuery.expando;

	// If there is already no cache entry for this object, there is no
	// purpose in continuing
	if ( !cache[ id ] ) {
		return;
	}

	if ( name ) {

		thisCache = pvt ? cache[ id ] : cache[ id ].data;

		if ( thisCache ) {

			// Support array or space separated string names for data keys
			if ( !jQuery.isArray( name ) ) {

				// try the string as a key before any manipulation
				if ( name in thisCache ) {
					name = [ name ];
				} else {

					// split the camel cased version by spaces unless a key with the spaces exists
					name = jQuery.camelCase( name );
					if ( name in thisCache ) {
						name = [ name ];
					} else {
						name = name.split( " " );
					}
				}
			} else {

				// If "name" is an array of keys...
				// When data is initially created, via ("key", "val") signature,
				// keys will be converted to camelCase.
				// Since there is no way to tell _how_ a key was added, remove
				// both plain key and camelCase key. #12786
				// This will only penalize the array argument path.
				name = name.concat( jQuery.map( name, jQuery.camelCase ) );
			}

			i = name.length;
			while ( i-- ) {
				delete thisCache[ name[ i ] ];
			}

			// If there is no data left in the cache, we want to continue
			// and let the cache object itself get destroyed
			if ( pvt ? !isEmptyDataObject( thisCache ) : !jQuery.isEmptyObject( thisCache ) ) {
				return;
			}
		}
	}

	// See jQuery.data for more information
	if ( !pvt ) {
		delete cache[ id ].data;

		// Don't destroy the parent cache unless the internal data object
		// had been the only thing left in it
		if ( !isEmptyDataObject( cache[ id ] ) ) {
			return;
		}
	}

	// Destroy the cache
	if ( isNode ) {
		jQuery.cleanData( [ elem ], true );

	// Use delete when supported for expandos or `cache` is not a window per isWindow (#10080)
	/* jshint eqeqeq: false */
	} else if ( support.deleteExpando || cache != cache.window ) {
		/* jshint eqeqeq: true */
		delete cache[ id ];

	// When all else fails, undefined
	} else {
		cache[ id ] = undefined;
	}
}

jQuery.extend( {
	cache: {},

	// The following elements (space-suffixed to avoid Object.prototype collisions)
	// throw uncatchable exceptions if you attempt to set expando properties
	noData: {
		"applet ": true,
		"embed ": true,

		// ...but Flash objects (which have this classid) *can* handle expandos
		"object ": "clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
	},

	hasData: function( elem ) {
		elem = elem.nodeType ? jQuery.cache[ elem[ jQuery.expando ] ] : elem[ jQuery.expando ];
		return !!elem && !isEmptyDataObject( elem );
	},

	data: function( elem, name, data ) {
		return internalData( elem, name, data );
	},

	removeData: function( elem, name ) {
		return internalRemoveData( elem, name );
	},

	// For internal use only.
	_data: function( elem, name, data ) {
		return internalData( elem, name, data, true );
	},

	_removeData: function( elem, name ) {
		return internalRemoveData( elem, name, true );
	}
} );

jQuery.fn.extend( {
	data: function( key, value ) {
		var i, name, data,
			elem = this[ 0 ],
			attrs = elem && elem.attributes;

		// Special expections of .data basically thwart jQuery.access,
		// so implement the relevant behavior ourselves

		// Gets all values
		if ( key === undefined ) {
			if ( this.length ) {
				data = jQuery.data( elem );

				if ( elem.nodeType === 1 && !jQuery._data( elem, "parsedAttrs" ) ) {
					i = attrs.length;
					while ( i-- ) {

						// Support: IE11+
						// The attrs elements can be null (#14894)
						if ( attrs[ i ] ) {
							name = attrs[ i ].name;
							if ( name.indexOf( "data-" ) === 0 ) {
								name = jQuery.camelCase( name.slice( 5 ) );
								dataAttr( elem, name, data[ name ] );
							}
						}
					}
					jQuery._data( elem, "parsedAttrs", true );
				}
			}

			return data;
		}

		// Sets multiple values
		if ( typeof key === "object" ) {
			return this.each( function() {
				jQuery.data( this, key );
			} );
		}

		return arguments.length > 1 ?

			// Sets one value
			this.each( function() {
				jQuery.data( this, key, value );
			} ) :

			// Gets one value
			// Try to fetch any internally stored data first
			elem ? dataAttr( elem, key, jQuery.data( elem, key ) ) : undefined;
	},

	removeData: function( key ) {
		return this.each( function() {
			jQuery.removeData( this, key );
		} );
	}
} );


jQuery.extend( {
	queue: function( elem, type, data ) {
		var queue;

		if ( elem ) {
			type = ( type || "fx" ) + "queue";
			queue = jQuery._data( elem, type );

			// Speed up dequeue by getting out quickly if this is just a lookup
			if ( data ) {
				if ( !queue || jQuery.isArray( data ) ) {
					queue = jQuery._data( elem, type, jQuery.makeArray( data ) );
				} else {
					queue.push( data );
				}
			}
			return queue || [];
		}
	},

	dequeue: function( elem, type ) {
		type = type || "fx";

		var queue = jQuery.queue( elem, type ),
			startLength = queue.length,
			fn = queue.shift(),
			hooks = jQuery._queueHooks( elem, type ),
			next = function() {
				jQuery.dequeue( elem, type );
			};

		// If the fx queue is dequeued, always remove the progress sentinel
		if ( fn === "inprogress" ) {
			fn = queue.shift();
			startLength--;
		}

		if ( fn ) {

			// Add a progress sentinel to prevent the fx queue from being
			// automatically dequeued
			if ( type === "fx" ) {
				queue.unshift( "inprogress" );
			}

			// clear up the last queue stop function
			delete hooks.stop;
			fn.call( elem, next, hooks );
		}

		if ( !startLength && hooks ) {
			hooks.empty.fire();
		}
	},

	// not intended for public consumption - generates a queueHooks object,
	// or returns the current one
	_queueHooks: function( elem, type ) {
		var key = type + "queueHooks";
		return jQuery._data( elem, key ) || jQuery._data( elem, key, {
			empty: jQuery.Callbacks( "once memory" ).add( function() {
				jQuery._removeData( elem, type + "queue" );
				jQuery._removeData( elem, key );
			} )
		} );
	}
} );

jQuery.fn.extend( {
	queue: function( type, data ) {
		var setter = 2;

		if ( typeof type !== "string" ) {
			data = type;
			type = "fx";
			setter--;
		}

		if ( arguments.length < setter ) {
			return jQuery.queue( this[ 0 ], type );
		}

		return data === undefined ?
			this :
			this.each( function() {
				var queue = jQuery.queue( this, type, data );

				// ensure a hooks for this queue
				jQuery._queueHooks( this, type );

				if ( type === "fx" && queue[ 0 ] !== "inprogress" ) {
					jQuery.dequeue( this, type );
				}
			} );
	},
	dequeue: function( type ) {
		return this.each( function() {
			jQuery.dequeue( this, type );
		} );
	},
	clearQueue: function( type ) {
		return this.queue( type || "fx", [] );
	},

	// Get a promise resolved when queues of a certain type
	// are emptied (fx is the type by default)
	promise: function( type, obj ) {
		var tmp,
			count = 1,
			defer = jQuery.Deferred(),
			elements = this,
			i = this.length,
			resolve = function() {
				if ( !( --count ) ) {
					defer.resolveWith( elements, [ elements ] );
				}
			};

		if ( typeof type !== "string" ) {
			obj = type;
			type = undefined;
		}
		type = type || "fx";

		while ( i-- ) {
			tmp = jQuery._data( elements[ i ], type + "queueHooks" );
			if ( tmp && tmp.empty ) {
				count++;
				tmp.empty.add( resolve );
			}
		}
		resolve();
		return defer.promise( obj );
	}
} );


( function() {
	var shrinkWrapBlocksVal;

	support.shrinkWrapBlocks = function() {
		if ( shrinkWrapBlocksVal != null ) {
			return shrinkWrapBlocksVal;
		}

		// Will be changed later if needed.
		shrinkWrapBlocksVal = false;

		// Minified: var b,c,d
		var div, body, container;

		body = document.getElementsByTagName( "body" )[ 0 ];
		if ( !body || !body.style ) {

			// Test fired too early or in an unsupported environment, exit.
			return;
		}

		// Setup
		div = document.createElement( "div" );
		container = document.createElement( "div" );
		container.style.cssText = "position:absolute;border:0;width:0;height:0;top:0;left:-9999px";
		body.appendChild( container ).appendChild( div );

		// Support: IE6
		// Check if elements with layout shrink-wrap their children
		if ( typeof div.style.zoom !== "undefined" ) {

			// Reset CSS: box-sizing; display; margin; border
			div.style.cssText =

				// Support: Firefox<29, Android 2.3
				// Vendor-prefix box-sizing
				"-webkit-box-sizing:content-box;-moz-box-sizing:content-box;" +
				"box-sizing:content-box;display:block;margin:0;border:0;" +
				"padding:1px;width:1px;zoom:1";
			div.appendChild( document.createElement( "div" ) ).style.width = "5px";
			shrinkWrapBlocksVal = div.offsetWidth !== 3;
		}

		body.removeChild( container );

		return shrinkWrapBlocksVal;
	};

} )();
var pnum = ( /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/ ).source;

var rcssNum = new RegExp( "^(?:([+-])=|)(" + pnum + ")([a-z%]*)$", "i" );


var cssExpand = [ "Top", "Right", "Bottom", "Left" ];

var isHidden = function( elem, el ) {

		// isHidden might be called from jQuery#filter function;
		// in that case, element will be second argument
		elem = el || elem;
		return jQuery.css( elem, "display" ) === "none" ||
			!jQuery.contains( elem.ownerDocument, elem );
	};



function adjustCSS( elem, prop, valueParts, tween ) {
	var adjusted,
		scale = 1,
		maxIterations = 20,
		currentValue = tween ?
			function() { return tween.cur(); } :
			function() { return jQuery.css( elem, prop, "" ); },
		initial = currentValue(),
		unit = valueParts && valueParts[ 3 ] || ( jQuery.cssNumber[ prop ] ? "" : "px" ),

		// Starting value computation is required for potential unit mismatches
		initialInUnit = ( jQuery.cssNumber[ prop ] || unit !== "px" && +initial ) &&
			rcssNum.exec( jQuery.css( elem, prop ) );

	if ( initialInUnit && initialInUnit[ 3 ] !== unit ) {

		// Trust units reported by jQuery.css
		unit = unit || initialInUnit[ 3 ];

		// Make sure we update the tween properties later on
		valueParts = valueParts || [];

		// Iteratively approximate from a nonzero starting point
		initialInUnit = +initial || 1;

		do {

			// If previous iteration zeroed out, double until we get *something*.
			// Use string for doubling so we don't accidentally see scale as unchanged below
			scale = scale || ".5";

			// Adjust and apply
			initialInUnit = initialInUnit / scale;
			jQuery.style( elem, prop, initialInUnit + unit );

		// Update scale, tolerating zero or NaN from tween.cur()
		// Break the loop if scale is unchanged or perfect, or if we've just had enough.
		} while (
			scale !== ( scale = currentValue() / initial ) && scale !== 1 && --maxIterations
		);
	}

	if ( valueParts ) {
		initialInUnit = +initialInUnit || +initial || 0;

		// Apply relative offset (+=/-=) if specified
		adjusted = valueParts[ 1 ] ?
			initialInUnit + ( valueParts[ 1 ] + 1 ) * valueParts[ 2 ] :
			+valueParts[ 2 ];
		if ( tween ) {
			tween.unit = unit;
			tween.start = initialInUnit;
			tween.end = adjusted;
		}
	}
	return adjusted;
}


// Multifunctional method to get and set values of a collection
// The value/s can optionally be executed if it's a function
var access = function( elems, fn, key, value, chainable, emptyGet, raw ) {
	var i = 0,
		length = elems.length,
		bulk = key == null;

	// Sets many values
	if ( jQuery.type( key ) === "object" ) {
		chainable = true;
		for ( i in key ) {
			access( elems, fn, i, key[ i ], true, emptyGet, raw );
		}

	// Sets one value
	} else if ( value !== undefined ) {
		chainable = true;

		if ( !jQuery.isFunction( value ) ) {
			raw = true;
		}

		if ( bulk ) {

			// Bulk operations run against the entire set
			if ( raw ) {
				fn.call( elems, value );
				fn = null;

			// ...except when executing function values
			} else {
				bulk = fn;
				fn = function( elem, key, value ) {
					return bulk.call( jQuery( elem ), value );
				};
			}
		}

		if ( fn ) {
			for ( ; i < length; i++ ) {
				fn(
					elems[ i ],
					key,
					raw ? value : value.call( elems[ i ], i, fn( elems[ i ], key ) )
				);
			}
		}
	}

	return chainable ?
		elems :

		// Gets
		bulk ?
			fn.call( elems ) :
			length ? fn( elems[ 0 ], key ) : emptyGet;
};
var rcheckableType = ( /^(?:checkbox|radio)$/i );

var rtagName = ( /<([\w:-]+)/ );

var rscriptType = ( /^$|\/(?:java|ecma)script/i );

var rleadingWhitespace = ( /^\s+/ );

var nodeNames = "abbr|article|aside|audio|bdi|canvas|data|datalist|" +
		"details|dialog|figcaption|figure|footer|header|hgroup|main|" +
		"mark|meter|nav|output|picture|progress|section|summary|template|time|video";



function createSafeFragment( document ) {
	var list = nodeNames.split( "|" ),
		safeFrag = document.createDocumentFragment();

	if ( safeFrag.createElement ) {
		while ( list.length ) {
			safeFrag.createElement(
				list.pop()
			);
		}
	}
	return safeFrag;
}


( function() {
	var div = document.createElement( "div" ),
		fragment = document.createDocumentFragment(),
		input = document.createElement( "input" );

	// Setup
	div.innerHTML = "  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>";

	// IE strips leading whitespace when .innerHTML is used
	support.leadingWhitespace = div.firstChild.nodeType === 3;

	// Make sure that tbody elements aren't automatically inserted
	// IE will insert them into empty tables
	support.tbody = !div.getElementsByTagName( "tbody" ).length;

	// Make sure that link elements get serialized correctly by innerHTML
	// This requires a wrapper element in IE
	support.htmlSerialize = !!div.getElementsByTagName( "link" ).length;

	// Makes sure cloning an html5 element does not cause problems
	// Where outerHTML is undefined, this still works
	support.html5Clone =
		document.createElement( "nav" ).cloneNode( true ).outerHTML !== "<:nav></:nav>";

	// Check if a disconnected checkbox will retain its checked
	// value of true after appended to the DOM (IE6/7)
	input.type = "checkbox";
	input.checked = true;
	fragment.appendChild( input );
	support.appendChecked = input.checked;

	// Make sure textarea (and checkbox) defaultValue is properly cloned
	// Support: IE6-IE11+
	div.innerHTML = "<textarea>x</textarea>";
	support.noCloneChecked = !!div.cloneNode( true ).lastChild.defaultValue;

	// #11217 - WebKit loses check when the name is after the checked attribute
	fragment.appendChild( div );

	// Support: Windows Web Apps (WWA)
	// `name` and `type` must use .setAttribute for WWA (#14901)
	input = document.createElement( "input" );
	input.setAttribute( "type", "radio" );
	input.setAttribute( "checked", "checked" );
	input.setAttribute( "name", "t" );

	div.appendChild( input );

	// Support: Safari 5.1, iOS 5.1, Android 4.x, Android 2.3
	// old WebKit doesn't clone checked state correctly in fragments
	support.checkClone = div.cloneNode( true ).cloneNode( true ).lastChild.checked;

	// Support: IE<9
	// Cloned elements keep attachEvent handlers, we use addEventListener on IE9+
	support.noCloneEvent = !!div.addEventListener;

	// Support: IE<9
	// Since attributes and properties are the same in IE,
	// cleanData must set properties to undefined rather than use removeAttribute
	div[ jQuery.expando ] = 1;
	support.attributes = !div.getAttribute( jQuery.expando );
} )();


// We have to close these tags to support XHTML (#13200)
var wrapMap = {
	option: [ 1, "<select multiple='multiple'>", "</select>" ],
	legend: [ 1, "<fieldset>", "</fieldset>" ],
	area: [ 1, "<map>", "</map>" ],

	// Support: IE8
	param: [ 1, "<object>", "</object>" ],
	thead: [ 1, "<table>", "</table>" ],
	tr: [ 2, "<table><tbody>", "</tbody></table>" ],
	col: [ 2, "<table><tbody></tbody><colgroup>", "</colgroup></table>" ],
	td: [ 3, "<table><tbody><tr>", "</tr></tbody></table>" ],

	// IE6-8 can't serialize link, script, style, or any html5 (NoScope) tags,
	// unless wrapped in a div with non-breaking characters in front of it.
	_default: support.htmlSerialize ? [ 0, "", "" ] : [ 1, "X<div>", "</div>" ]
};

// Support: IE8-IE9
wrapMap.optgroup = wrapMap.option;

wrapMap.tbody = wrapMap.tfoot = wrapMap.colgroup = wrapMap.caption = wrapMap.thead;
wrapMap.th = wrapMap.td;


function getAll( context, tag ) {
	var elems, elem,
		i = 0,
		found = typeof context.getElementsByTagName !== "undefined" ?
			context.getElementsByTagName( tag || "*" ) :
			typeof context.querySelectorAll !== "undefined" ?
				context.querySelectorAll( tag || "*" ) :
				undefined;

	if ( !found ) {
		for ( found = [], elems = context.childNodes || context;
			( elem = elems[ i ] ) != null;
			i++
		) {
			if ( !tag || jQuery.nodeName( elem, tag ) ) {
				found.push( elem );
			} else {
				jQuery.merge( found, getAll( elem, tag ) );
			}
		}
	}

	return tag === undefined || tag && jQuery.nodeName( context, tag ) ?
		jQuery.merge( [ context ], found ) :
		found;
}


// Mark scripts as having already been evaluated
function setGlobalEval( elems, refElements ) {
	var elem,
		i = 0;
	for ( ; ( elem = elems[ i ] ) != null; i++ ) {
		jQuery._data(
			elem,
			"globalEval",
			!refElements || jQuery._data( refElements[ i ], "globalEval" )
		);
	}
}


var rhtml = /<|&#?\w+;/,
	rtbody = /<tbody/i;

function fixDefaultChecked( elem ) {
	if ( rcheckableType.test( elem.type ) ) {
		elem.defaultChecked = elem.checked;
	}
}

function buildFragment( elems, context, scripts, selection, ignored ) {
	var j, elem, contains,
		tmp, tag, tbody, wrap,
		l = elems.length,

		// Ensure a safe fragment
		safe = createSafeFragment( context ),

		nodes = [],
		i = 0;

	for ( ; i < l; i++ ) {
		elem = elems[ i ];

		if ( elem || elem === 0 ) {

			// Add nodes directly
			if ( jQuery.type( elem ) === "object" ) {
				jQuery.merge( nodes, elem.nodeType ? [ elem ] : elem );

			// Convert non-html into a text node
			} else if ( !rhtml.test( elem ) ) {
				nodes.push( context.createTextNode( elem ) );

			// Convert html into DOM nodes
			} else {
				tmp = tmp || safe.appendChild( context.createElement( "div" ) );

				// Deserialize a standard representation
				tag = ( rtagName.exec( elem ) || [ "", "" ] )[ 1 ].toLowerCase();
				wrap = wrapMap[ tag ] || wrapMap._default;

				tmp.innerHTML = wrap[ 1 ] + jQuery.htmlPrefilter( elem ) + wrap[ 2 ];

				// Descend through wrappers to the right content
				j = wrap[ 0 ];
				while ( j-- ) {
					tmp = tmp.lastChild;
				}

				// Manually add leading whitespace removed by IE
				if ( !support.leadingWhitespace && rleadingWhitespace.test( elem ) ) {
					nodes.push( context.createTextNode( rleadingWhitespace.exec( elem )[ 0 ] ) );
				}

				// Remove IE's autoinserted <tbody> from table fragments
				if ( !support.tbody ) {

					// String was a <table>, *may* have spurious <tbody>
					elem = tag === "table" && !rtbody.test( elem ) ?
						tmp.firstChild :

						// String was a bare <thead> or <tfoot>
						wrap[ 1 ] === "<table>" && !rtbody.test( elem ) ?
							tmp :
							0;

					j = elem && elem.childNodes.length;
					while ( j-- ) {
						if ( jQuery.nodeName( ( tbody = elem.childNodes[ j ] ), "tbody" ) &&
							!tbody.childNodes.length ) {

							elem.removeChild( tbody );
						}
					}
				}

				jQuery.merge( nodes, tmp.childNodes );

				// Fix #12392 for WebKit and IE > 9
				tmp.textContent = "";

				// Fix #12392 for oldIE
				while ( tmp.firstChild ) {
					tmp.removeChild( tmp.firstChild );
				}

				// Remember the top-level container for proper cleanup
				tmp = safe.lastChild;
			}
		}
	}

	// Fix #11356: Clear elements from fragment
	if ( tmp ) {
		safe.removeChild( tmp );
	}

	// Reset defaultChecked for any radios and checkboxes
	// about to be appended to the DOM in IE 6/7 (#8060)
	if ( !support.appendChecked ) {
		jQuery.grep( getAll( nodes, "input" ), fixDefaultChecked );
	}

	i = 0;
	while ( ( elem = nodes[ i++ ] ) ) {

		// Skip elements already in the context collection (trac-4087)
		if ( selection && jQuery.inArray( elem, selection ) > -1 ) {
			if ( ignored ) {
				ignored.push( elem );
			}

			continue;
		}

		contains = jQuery.contains( elem.ownerDocument, elem );

		// Append to fragment
		tmp = getAll( safe.appendChild( elem ), "script" );

		// Preserve script evaluation history
		if ( contains ) {
			setGlobalEval( tmp );
		}

		// Capture executables
		if ( scripts ) {
			j = 0;
			while ( ( elem = tmp[ j++ ] ) ) {
				if ( rscriptType.test( elem.type || "" ) ) {
					scripts.push( elem );
				}
			}
		}
	}

	tmp = null;

	return safe;
}


( function() {
	var i, eventName,
		div = document.createElement( "div" );

	// Support: IE<9 (lack submit/change bubble), Firefox (lack focus(in | out) events)
	for ( i in { submit: true, change: true, focusin: true } ) {
		eventName = "on" + i;

		if ( !( support[ i ] = eventName in window ) ) {

			// Beware of CSP restrictions (https://developer.mozilla.org/en/Security/CSP)
			div.setAttribute( eventName, "t" );
			support[ i ] = div.attributes[ eventName ].expando === false;
		}
	}

	// Null elements to avoid leaks in IE.
	div = null;
} )();


var rformElems = /^(?:input|select|textarea)$/i,
	rkeyEvent = /^key/,
	rmouseEvent = /^(?:mouse|pointer|contextmenu|drag|drop)|click/,
	rfocusMorph = /^(?:focusinfocus|focusoutblur)$/,
	rtypenamespace = /^([^.]*)(?:\.(.+)|)/;

function returnTrue() {
	return true;
}

function returnFalse() {
	return false;
}

// Support: IE9
// See #13393 for more info
function safeActiveElement() {
	try {
		return document.activeElement;
	} catch ( err ) { }
}

function on( elem, types, selector, data, fn, one ) {
	var origFn, type;

	// Types can be a map of types/handlers
	if ( typeof types === "object" ) {

		// ( types-Object, selector, data )
		if ( typeof selector !== "string" ) {

			// ( types-Object, data )
			data = data || selector;
			selector = undefined;
		}
		for ( type in types ) {
			on( elem, type, selector, data, types[ type ], one );
		}
		return elem;
	}

	if ( data == null && fn == null ) {

		// ( types, fn )
		fn = selector;
		data = selector = undefined;
	} else if ( fn == null ) {
		if ( typeof selector === "string" ) {

			// ( types, selector, fn )
			fn = data;
			data = undefined;
		} else {

			// ( types, data, fn )
			fn = data;
			data = selector;
			selector = undefined;
		}
	}
	if ( fn === false ) {
		fn = returnFalse;
	} else if ( !fn ) {
		return elem;
	}

	if ( one === 1 ) {
		origFn = fn;
		fn = function( event ) {

			// Can use an empty set, since event contains the info
			jQuery().off( event );
			return origFn.apply( this, arguments );
		};

		// Use same guid so caller can remove using origFn
		fn.guid = origFn.guid || ( origFn.guid = jQuery.guid++ );
	}
	return elem.each( function() {
		jQuery.event.add( this, types, fn, data, selector );
	} );
}

/*
 * Helper functions for managing events -- not part of the public interface.
 * Props to Dean Edwards' addEvent library for many of the ideas.
 */
jQuery.event = {

	global: {},

	add: function( elem, types, handler, data, selector ) {
		var tmp, events, t, handleObjIn,
			special, eventHandle, handleObj,
			handlers, type, namespaces, origType,
			elemData = jQuery._data( elem );

		// Don't attach events to noData or text/comment nodes (but allow plain objects)
		if ( !elemData ) {
			return;
		}

		// Caller can pass in an object of custom data in lieu of the handler
		if ( handler.handler ) {
			handleObjIn = handler;
			handler = handleObjIn.handler;
			selector = handleObjIn.selector;
		}

		// Make sure that the handler has a unique ID, used to find/remove it later
		if ( !handler.guid ) {
			handler.guid = jQuery.guid++;
		}

		// Init the element's event structure and main handler, if this is the first
		if ( !( events = elemData.events ) ) {
			events = elemData.events = {};
		}
		if ( !( eventHandle = elemData.handle ) ) {
			eventHandle = elemData.handle = function( e ) {

				// Discard the second event of a jQuery.event.trigger() and
				// when an event is called after a page has unloaded
				return typeof jQuery !== "undefined" &&
					( !e || jQuery.event.triggered !== e.type ) ?
					jQuery.event.dispatch.apply( eventHandle.elem, arguments ) :
					undefined;
			};

			// Add elem as a property of the handle fn to prevent a memory leak
			// with IE non-native events
			eventHandle.elem = elem;
		}

		// Handle multiple events separated by a space
		types = ( types || "" ).match( rnotwhite ) || [ "" ];
		t = types.length;
		while ( t-- ) {
			tmp = rtypenamespace.exec( types[ t ] ) || [];
			type = origType = tmp[ 1 ];
			namespaces = ( tmp[ 2 ] || "" ).split( "." ).sort();

			// There *must* be a type, no attaching namespace-only handlers
			if ( !type ) {
				continue;
			}

			// If event changes its type, use the special event handlers for the changed type
			special = jQuery.event.special[ type ] || {};

			// If selector defined, determine special event api type, otherwise given type
			type = ( selector ? special.delegateType : special.bindType ) || type;

			// Update special based on newly reset type
			special = jQuery.event.special[ type ] || {};

			// handleObj is passed to all event handlers
			handleObj = jQuery.extend( {
				type: type,
				origType: origType,
				data: data,
				handler: handler,
				guid: handler.guid,
				selector: selector,
				needsContext: selector && jQuery.expr.match.needsContext.test( selector ),
				namespace: namespaces.join( "." )
			}, handleObjIn );

			// Init the event handler queue if we're the first
			if ( !( handlers = events[ type ] ) ) {
				handlers = events[ type ] = [];
				handlers.delegateCount = 0;

				// Only use addEventListener/attachEvent if the special events handler returns false
				if ( !special.setup ||
					special.setup.call( elem, data, namespaces, eventHandle ) === false ) {

					// Bind the global event handler to the element
					if ( elem.addEventListener ) {
						elem.addEventListener( type, eventHandle, false );

					} else if ( elem.attachEvent ) {
						elem.attachEvent( "on" + type, eventHandle );
					}
				}
			}

			if ( special.add ) {
				special.add.call( elem, handleObj );

				if ( !handleObj.handler.guid ) {
					handleObj.handler.guid = handler.guid;
				}
			}

			// Add to the element's handler list, delegates in front
			if ( selector ) {
				handlers.splice( handlers.delegateCount++, 0, handleObj );
			} else {
				handlers.push( handleObj );
			}

			// Keep track of which events have ever been used, for event optimization
			jQuery.event.global[ type ] = true;
		}

		// Nullify elem to prevent memory leaks in IE
		elem = null;
	},

	// Detach an event or set of events from an element
	remove: function( elem, types, handler, selector, mappedTypes ) {
		var j, handleObj, tmp,
			origCount, t, events,
			special, handlers, type,
			namespaces, origType,
			elemData = jQuery.hasData( elem ) && jQuery._data( elem );

		if ( !elemData || !( events = elemData.events ) ) {
			return;
		}

		// Once for each type.namespace in types; type may be omitted
		types = ( types || "" ).match( rnotwhite ) || [ "" ];
		t = types.length;
		while ( t-- ) {
			tmp = rtypenamespace.exec( types[ t ] ) || [];
			type = origType = tmp[ 1 ];
			namespaces = ( tmp[ 2 ] || "" ).split( "." ).sort();

			// Unbind all events (on this namespace, if provided) for the element
			if ( !type ) {
				for ( type in events ) {
					jQuery.event.remove( elem, type + types[ t ], handler, selector, true );
				}
				continue;
			}

			special = jQuery.event.special[ type ] || {};
			type = ( selector ? special.delegateType : special.bindType ) || type;
			handlers = events[ type ] || [];
			tmp = tmp[ 2 ] &&
				new RegExp( "(^|\\.)" + namespaces.join( "\\.(?:.*\\.|)" ) + "(\\.|$)" );

			// Remove matching events
			origCount = j = handlers.length;
			while ( j-- ) {
				handleObj = handlers[ j ];

				if ( ( mappedTypes || origType === handleObj.origType ) &&
					( !handler || handler.guid === handleObj.guid ) &&
					( !tmp || tmp.test( handleObj.namespace ) ) &&
					( !selector || selector === handleObj.selector ||
						selector === "**" && handleObj.selector ) ) {
					handlers.splice( j, 1 );

					if ( handleObj.selector ) {
						handlers.delegateCount--;
					}
					if ( special.remove ) {
						special.remove.call( elem, handleObj );
					}
				}
			}

			// Remove generic event handler if we removed something and no more handlers exist
			// (avoids potential for endless recursion during removal of special event handlers)
			if ( origCount && !handlers.length ) {
				if ( !special.teardown ||
					special.teardown.call( elem, namespaces, elemData.handle ) === false ) {

					jQuery.removeEvent( elem, type, elemData.handle );
				}

				delete events[ type ];
			}
		}

		// Remove the expando if it's no longer used
		if ( jQuery.isEmptyObject( events ) ) {
			delete elemData.handle;

			// removeData also checks for emptiness and clears the expando if empty
			// so use it instead of delete
			jQuery._removeData( elem, "events" );
		}
	},

	trigger: function( event, data, elem, onlyHandlers ) {
		var handle, ontype, cur,
			bubbleType, special, tmp, i,
			eventPath = [ elem || document ],
			type = hasOwn.call( event, "type" ) ? event.type : event,
			namespaces = hasOwn.call( event, "namespace" ) ? event.namespace.split( "." ) : [];

		cur = tmp = elem = elem || document;

		// Don't do events on text and comment nodes
		if ( elem.nodeType === 3 || elem.nodeType === 8 ) {
			return;
		}

		// focus/blur morphs to focusin/out; ensure we're not firing them right now
		if ( rfocusMorph.test( type + jQuery.event.triggered ) ) {
			return;
		}

		if ( type.indexOf( "." ) > -1 ) {

			// Namespaced trigger; create a regexp to match event type in handle()
			namespaces = type.split( "." );
			type = namespaces.shift();
			namespaces.sort();
		}
		ontype = type.indexOf( ":" ) < 0 && "on" + type;

		// Caller can pass in a jQuery.Event object, Object, or just an event type string
		event = event[ jQuery.expando ] ?
			event :
			new jQuery.Event( type, typeof event === "object" && event );

		// Trigger bitmask: & 1 for native handlers; & 2 for jQuery (always true)
		event.isTrigger = onlyHandlers ? 2 : 3;
		event.namespace = namespaces.join( "." );
		event.rnamespace = event.namespace ?
			new RegExp( "(^|\\.)" + namespaces.join( "\\.(?:.*\\.|)" ) + "(\\.|$)" ) :
			null;

		// Clean up the event in case it is being reused
		event.result = undefined;
		if ( !event.target ) {
			event.target = elem;
		}

		// Clone any incoming data and prepend the event, creating the handler arg list
		data = data == null ?
			[ event ] :
			jQuery.makeArray( data, [ event ] );

		// Allow special events to draw outside the lines
		special = jQuery.event.special[ type ] || {};
		if ( !onlyHandlers && special.trigger && special.trigger.apply( elem, data ) === false ) {
			return;
		}

		// Determine event propagation path in advance, per W3C events spec (#9951)
		// Bubble up to document, then to window; watch for a global ownerDocument var (#9724)
		if ( !onlyHandlers && !special.noBubble && !jQuery.isWindow( elem ) ) {

			bubbleType = special.delegateType || type;
			if ( !rfocusMorph.test( bubbleType + type ) ) {
				cur = cur.parentNode;
			}
			for ( ; cur; cur = cur.parentNode ) {
				eventPath.push( cur );
				tmp = cur;
			}

			// Only add window if we got to document (e.g., not plain obj or detached DOM)
			if ( tmp === ( elem.ownerDocument || document ) ) {
				eventPath.push( tmp.defaultView || tmp.parentWindow || window );
			}
		}

		// Fire handlers on the event path
		i = 0;
		while ( ( cur = eventPath[ i++ ] ) && !event.isPropagationStopped() ) {

			event.type = i > 1 ?
				bubbleType :
				special.bindType || type;

			// jQuery handler
			handle = ( jQuery._data( cur, "events" ) || {} )[ event.type ] &&
				jQuery._data( cur, "handle" );

			if ( handle ) {
				handle.apply( cur, data );
			}

			// Native handler
			handle = ontype && cur[ ontype ];
			if ( handle && handle.apply && acceptData( cur ) ) {
				event.result = handle.apply( cur, data );
				if ( event.result === false ) {
					event.preventDefault();
				}
			}
		}
		event.type = type;

		// If nobody prevented the default action, do it now
		if ( !onlyHandlers && !event.isDefaultPrevented() ) {

			if (
				( !special._default ||
				 special._default.apply( eventPath.pop(), data ) === false
				) && acceptData( elem )
			) {

				// Call a native DOM method on the target with the same name name as the event.
				// Can't use an .isFunction() check here because IE6/7 fails that test.
				// Don't do default actions on window, that's where global variables be (#6170)
				if ( ontype && elem[ type ] && !jQuery.isWindow( elem ) ) {

					// Don't re-trigger an onFOO event when we call its FOO() method
					tmp = elem[ ontype ];

					if ( tmp ) {
						elem[ ontype ] = null;
					}

					// Prevent re-triggering of the same event, since we already bubbled it above
					jQuery.event.triggered = type;
					try {
						elem[ type ]();
					} catch ( e ) {

						// IE<9 dies on focus/blur to hidden element (#1486,#12518)
						// only reproducible on winXP IE8 native, not IE9 in IE8 mode
					}
					jQuery.event.triggered = undefined;

					if ( tmp ) {
						elem[ ontype ] = tmp;
					}
				}
			}
		}

		return event.result;
	},

	dispatch: function( event ) {

		// Make a writable jQuery.Event from the native event object
		event = jQuery.event.fix( event );

		var i, j, ret, matched, handleObj,
			handlerQueue = [],
			args = slice.call( arguments ),
			handlers = ( jQuery._data( this, "events" ) || {} )[ event.type ] || [],
			special = jQuery.event.special[ event.type ] || {};

		// Use the fix-ed jQuery.Event rather than the (read-only) native event
		args[ 0 ] = event;
		event.delegateTarget = this;

		// Call the preDispatch hook for the mapped type, and let it bail if desired
		if ( special.preDispatch && special.preDispatch.call( this, event ) === false ) {
			return;
		}

		// Determine handlers
		handlerQueue = jQuery.event.handlers.call( this, event, handlers );

		// Run delegates first; they may want to stop propagation beneath us
		i = 0;
		while ( ( matched = handlerQueue[ i++ ] ) && !event.isPropagationStopped() ) {
			event.currentTarget = matched.elem;

			j = 0;
			while ( ( handleObj = matched.handlers[ j++ ] ) &&
				!event.isImmediatePropagationStopped() ) {

				// Triggered event must either 1) have no namespace, or 2) have namespace(s)
				// a subset or equal to those in the bound event (both can have no namespace).
				if ( !event.rnamespace || event.rnamespace.test( handleObj.namespace ) ) {

					event.handleObj = handleObj;
					event.data = handleObj.data;

					ret = ( ( jQuery.event.special[ handleObj.origType ] || {} ).handle ||
						handleObj.handler ).apply( matched.elem, args );

					if ( ret !== undefined ) {
						if ( ( event.result = ret ) === false ) {
							event.preventDefault();
							event.stopPropagation();
						}
					}
				}
			}
		}

		// Call the postDispatch hook for the mapped type
		if ( special.postDispatch ) {
			special.postDispatch.call( this, event );
		}

		return event.result;
	},

	handlers: function( event, handlers ) {
		var i, matches, sel, handleObj,
			handlerQueue = [],
			delegateCount = handlers.delegateCount,
			cur = event.target;

		// Support (at least): Chrome, IE9
		// Find delegate handlers
		// Black-hole SVG <use> instance trees (#13180)
		//
		// Support: Firefox<=42+
		// Avoid non-left-click in FF but don't block IE radio events (#3861, gh-2343)
		if ( delegateCount && cur.nodeType &&
			( event.type !== "click" || isNaN( event.button ) || event.button < 1 ) ) {

			/* jshint eqeqeq: false */
			for ( ; cur != this; cur = cur.parentNode || this ) {
				/* jshint eqeqeq: true */

				// Don't check non-elements (#13208)
				// Don't process clicks on disabled elements (#6911, #8165, #11382, #11764)
				if ( cur.nodeType === 1 && ( cur.disabled !== true || event.type !== "click" ) ) {
					matches = [];
					for ( i = 0; i < delegateCount; i++ ) {
						handleObj = handlers[ i ];

						// Don't conflict with Object.prototype properties (#13203)
						sel = handleObj.selector + " ";

						if ( matches[ sel ] === undefined ) {
							matches[ sel ] = handleObj.needsContext ?
								jQuery( sel, this ).index( cur ) > -1 :
								jQuery.find( sel, this, null, [ cur ] ).length;
						}
						if ( matches[ sel ] ) {
							matches.push( handleObj );
						}
					}
					if ( matches.length ) {
						handlerQueue.push( { elem: cur, handlers: matches } );
					}
				}
			}
		}

		// Add the remaining (directly-bound) handlers
		if ( delegateCount < handlers.length ) {
			handlerQueue.push( { elem: this, handlers: handlers.slice( delegateCount ) } );
		}

		return handlerQueue;
	},

	fix: function( event ) {
		if ( event[ jQuery.expando ] ) {
			return event;
		}

		// Create a writable copy of the event object and normalize some properties
		var i, prop, copy,
			type = event.type,
			originalEvent = event,
			fixHook = this.fixHooks[ type ];

		if ( !fixHook ) {
			this.fixHooks[ type ] = fixHook =
				rmouseEvent.test( type ) ? this.mouseHooks :
				rkeyEvent.test( type ) ? this.keyHooks :
				{};
		}
		copy = fixHook.props ? this.props.concat( fixHook.props ) : this.props;

		event = new jQuery.Event( originalEvent );

		i = copy.length;
		while ( i-- ) {
			prop = copy[ i ];
			event[ prop ] = originalEvent[ prop ];
		}

		// Support: IE<9
		// Fix target property (#1925)
		if ( !event.target ) {
			event.target = originalEvent.srcElement || document;
		}

		// Support: Safari 6-8+
		// Target should not be a text node (#504, #13143)
		if ( event.target.nodeType === 3 ) {
			event.target = event.target.parentNode;
		}

		// Support: IE<9
		// For mouse/key events, metaKey==false if it's undefined (#3368, #11328)
		event.metaKey = !!event.metaKey;

		return fixHook.filter ? fixHook.filter( event, originalEvent ) : event;
	},

	// Includes some event props shared by KeyEvent and MouseEvent
	props: ( "altKey bubbles cancelable ctrlKey currentTarget detail eventPhase " +
		"metaKey relatedTarget shiftKey target timeStamp view which" ).split( " " ),

	fixHooks: {},

	keyHooks: {
		props: "char charCode key keyCode".split( " " ),
		filter: function( event, original ) {

			// Add which for key events
			if ( event.which == null ) {
				event.which = original.charCode != null ? original.charCode : original.keyCode;
			}

			return event;
		}
	},

	mouseHooks: {
		props: ( "button buttons clientX clientY fromElement offsetX offsetY " +
			"pageX pageY screenX screenY toElement" ).split( " " ),
		filter: function( event, original ) {
			var body, eventDoc, doc,
				button = original.button,
				fromElement = original.fromElement;

			// Calculate pageX/Y if missing and clientX/Y available
			if ( event.pageX == null && original.clientX != null ) {
				eventDoc = event.target.ownerDocument || document;
				doc = eventDoc.documentElement;
				body = eventDoc.body;

				event.pageX = original.clientX +
					( doc && doc.scrollLeft || body && body.scrollLeft || 0 ) -
					( doc && doc.clientLeft || body && body.clientLeft || 0 );
				event.pageY = original.clientY +
					( doc && doc.scrollTop  || body && body.scrollTop  || 0 ) -
					( doc && doc.clientTop  || body && body.clientTop  || 0 );
			}

			// Add relatedTarget, if necessary
			if ( !event.relatedTarget && fromElement ) {
				event.relatedTarget = fromElement === event.target ?
					original.toElement :
					fromElement;
			}

			// Add which for click: 1 === left; 2 === middle; 3 === right
			// Note: button is not normalized, so don't use it
			if ( !event.which && button !== undefined ) {
				event.which = ( button & 1 ? 1 : ( button & 2 ? 3 : ( button & 4 ? 2 : 0 ) ) );
			}

			return event;
		}
	},

	special: {
		load: {

			// Prevent triggered image.load events from bubbling to window.load
			noBubble: true
		},
		focus: {

			// Fire native event if possible so blur/focus sequence is correct
			trigger: function() {
				if ( this !== safeActiveElement() && this.focus ) {
					try {
						this.focus();
						return false;
					} catch ( e ) {

						// Support: IE<9
						// If we error on focus to hidden element (#1486, #12518),
						// let .trigger() run the handlers
					}
				}
			},
			delegateType: "focusin"
		},
		blur: {
			trigger: function() {
				if ( this === safeActiveElement() && this.blur ) {
					this.blur();
					return false;
				}
			},
			delegateType: "focusout"
		},
		click: {

			// For checkbox, fire native event so checked state will be right
			trigger: function() {
				if ( jQuery.nodeName( this, "input" ) && this.type === "checkbox" && this.click ) {
					this.click();
					return false;
				}
			},

			// For cross-browser consistency, don't fire native .click() on links
			_default: function( event ) {
				return jQuery.nodeName( event.target, "a" );
			}
		},

		beforeunload: {
			postDispatch: function( event ) {

				// Support: Firefox 20+
				// Firefox doesn't alert if the returnValue field is not set.
				if ( event.result !== undefined && event.originalEvent ) {
					event.originalEvent.returnValue = event.result;
				}
			}
		}
	},

	// Piggyback on a donor event to simulate a different one
	simulate: function( type, elem, event ) {
		var e = jQuery.extend(
			new jQuery.Event(),
			event,
			{
				type: type,
				isSimulated: true

				// Previously, `originalEvent: {}` was set here, so stopPropagation call
				// would not be triggered on donor event, since in our own
				// jQuery.event.stopPropagation function we had a check for existence of
				// originalEvent.stopPropagation method, so, consequently it would be a noop.
				//
				// Guard for simulated events was moved to jQuery.event.stopPropagation function
				// since `originalEvent` should point to the original event for the
				// constancy with other events and for more focused logic
			}
		);

		jQuery.event.trigger( e, null, elem );

		if ( e.isDefaultPrevented() ) {
			event.preventDefault();
		}
	}
};

jQuery.removeEvent = document.removeEventListener ?
	function( elem, type, handle ) {

		// This "if" is needed for plain objects
		if ( elem.removeEventListener ) {
			elem.removeEventListener( type, handle );
		}
	} :
	function( elem, type, handle ) {
		var name = "on" + type;

		if ( elem.detachEvent ) {

			// #8545, #7054, preventing memory leaks for custom events in IE6-8
			// detachEvent needed property on element, by name of that event,
			// to properly expose it to GC
			if ( typeof elem[ name ] === "undefined" ) {
				elem[ name ] = null;
			}

			elem.detachEvent( name, handle );
		}
	};

jQuery.Event = function( src, props ) {

	// Allow instantiation without the 'new' keyword
	if ( !( this instanceof jQuery.Event ) ) {
		return new jQuery.Event( src, props );
	}

	// Event object
	if ( src && src.type ) {
		this.originalEvent = src;
		this.type = src.type;

		// Events bubbling up the document may have been marked as prevented
		// by a handler lower down the tree; reflect the correct value.
		this.isDefaultPrevented = src.defaultPrevented ||
				src.defaultPrevented === undefined &&

				// Support: IE < 9, Android < 4.0
				src.returnValue === false ?
			returnTrue :
			returnFalse;

	// Event type
	} else {
		this.type = src;
	}

	// Put explicitly provided properties onto the event object
	if ( props ) {
		jQuery.extend( this, props );
	}

	// Create a timestamp if incoming event doesn't have one
	this.timeStamp = src && src.timeStamp || jQuery.now();

	// Mark it as fixed
	this[ jQuery.expando ] = true;
};

// jQuery.Event is based on DOM3 Events as specified by the ECMAScript Language Binding
// http://www.w3.org/TR/2003/WD-DOM-Level-3-Events-20030331/ecma-script-binding.html
jQuery.Event.prototype = {
	constructor: jQuery.Event,
	isDefaultPrevented: returnFalse,
	isPropagationStopped: returnFalse,
	isImmediatePropagationStopped: returnFalse,

	preventDefault: function() {
		var e = this.originalEvent;

		this.isDefaultPrevented = returnTrue;
		if ( !e ) {
			return;
		}

		// If preventDefault exists, run it on the original event
		if ( e.preventDefault ) {
			e.preventDefault();

		// Support: IE
		// Otherwise set the returnValue property of the original event to false
		} else {
			e.returnValue = false;
		}
	},
	stopPropagation: function() {
		var e = this.originalEvent;

		this.isPropagationStopped = returnTrue;

		if ( !e || this.isSimulated ) {
			return;
		}

		// If stopPropagation exists, run it on the original event
		if ( e.stopPropagation ) {
			e.stopPropagation();
		}

		// Support: IE
		// Set the cancelBubble property of the original event to true
		e.cancelBubble = true;
	},
	stopImmediatePropagation: function() {
		var e = this.originalEvent;

		this.isImmediatePropagationStopped = returnTrue;

		if ( e && e.stopImmediatePropagation ) {
			e.stopImmediatePropagation();
		}

		this.stopPropagation();
	}
};

// Create mouseenter/leave events using mouseover/out and event-time checks
// so that event delegation works in jQuery.
// Do the same for pointerenter/pointerleave and pointerover/pointerout
//
// Support: Safari 7 only
// Safari sends mouseenter too often; see:
// https://code.google.com/p/chromium/issues/detail?id=470258
// for the description of the bug (it existed in older Chrome versions as well).
jQuery.each( {
	mouseenter: "mouseover",
	mouseleave: "mouseout",
	pointerenter: "pointerover",
	pointerleave: "pointerout"
}, function( orig, fix ) {
	jQuery.event.special[ orig ] = {
		delegateType: fix,
		bindType: fix,

		handle: function( event ) {
			var ret,
				target = this,
				related = event.relatedTarget,
				handleObj = event.handleObj;

			// For mouseenter/leave call the handler if related is outside the target.
			// NB: No relatedTarget if the mouse left/entered the browser window
			if ( !related || ( related !== target && !jQuery.contains( target, related ) ) ) {
				event.type = handleObj.origType;
				ret = handleObj.handler.apply( this, arguments );
				event.type = fix;
			}
			return ret;
		}
	};
} );

// IE submit delegation
if ( !support.submit ) {

	jQuery.event.special.submit = {
		setup: function() {

			// Only need this for delegated form submit events
			if ( jQuery.nodeName( this, "form" ) ) {
				return false;
			}

			// Lazy-add a submit handler when a descendant form may potentially be submitted
			jQuery.event.add( this, "click._submit keypress._submit", function( e ) {

				// Node name check avoids a VML-related crash in IE (#9807)
				var elem = e.target,
					form = jQuery.nodeName( elem, "input" ) || jQuery.nodeName( elem, "button" ) ?

						// Support: IE <=8
						// We use jQuery.prop instead of elem.form
						// to allow fixing the IE8 delegated submit issue (gh-2332)
						// by 3rd party polyfills/workarounds.
						jQuery.prop( elem, "form" ) :
						undefined;

				if ( form && !jQuery._data( form, "submit" ) ) {
					jQuery.event.add( form, "submit._submit", function( event ) {
						event._submitBubble = true;
					} );
					jQuery._data( form, "submit", true );
				}
			} );

			// return undefined since we don't need an event listener
		},

		postDispatch: function( event ) {

			// If form was submitted by the user, bubble the event up the tree
			if ( event._submitBubble ) {
				delete event._submitBubble;
				if ( this.parentNode && !event.isTrigger ) {
					jQuery.event.simulate( "submit", this.parentNode, event );
				}
			}
		},

		teardown: function() {

			// Only need this for delegated form submit events
			if ( jQuery.nodeName( this, "form" ) ) {
				return false;
			}

			// Remove delegated handlers; cleanData eventually reaps submit handlers attached above
			jQuery.event.remove( this, "._submit" );
		}
	};
}

// IE change delegation and checkbox/radio fix
if ( !support.change ) {

	jQuery.event.special.change = {

		setup: function() {

			if ( rformElems.test( this.nodeName ) ) {

				// IE doesn't fire change on a check/radio until blur; trigger it on click
				// after a propertychange. Eat the blur-change in special.change.handle.
				// This still fires onchange a second time for check/radio after blur.
				if ( this.type === "checkbox" || this.type === "radio" ) {
					jQuery.event.add( this, "propertychange._change", function( event ) {
						if ( event.originalEvent.propertyName === "checked" ) {
							this._justChanged = true;
						}
					} );
					jQuery.event.add( this, "click._change", function( event ) {
						if ( this._justChanged && !event.isTrigger ) {
							this._justChanged = false;
						}

						// Allow triggered, simulated change events (#11500)
						jQuery.event.simulate( "change", this, event );
					} );
				}
				return false;
			}

			// Delegated event; lazy-add a change handler on descendant inputs
			jQuery.event.add( this, "beforeactivate._change", function( e ) {
				var elem = e.target;

				if ( rformElems.test( elem.nodeName ) && !jQuery._data( elem, "change" ) ) {
					jQuery.event.add( elem, "change._change", function( event ) {
						if ( this.parentNode && !event.isSimulated && !event.isTrigger ) {
							jQuery.event.simulate( "change", this.parentNode, event );
						}
					} );
					jQuery._data( elem, "change", true );
				}
			} );
		},

		handle: function( event ) {
			var elem = event.target;

			// Swallow native change events from checkbox/radio, we already triggered them above
			if ( this !== elem || event.isSimulated || event.isTrigger ||
				( elem.type !== "radio" && elem.type !== "checkbox" ) ) {

				return event.handleObj.handler.apply( this, arguments );
			}
		},

		teardown: function() {
			jQuery.event.remove( this, "._change" );

			return !rformElems.test( this.nodeName );
		}
	};
}

// Support: Firefox
// Firefox doesn't have focus(in | out) events
// Related ticket - https://bugzilla.mozilla.org/show_bug.cgi?id=687787
//
// Support: Chrome, Safari
// focus(in | out) events fire after focus & blur events,
// which is spec violation - http://www.w3.org/TR/DOM-Level-3-Events/#events-focusevent-event-order
// Related ticket - https://code.google.com/p/chromium/issues/detail?id=449857
if ( !support.focusin ) {
	jQuery.each( { focus: "focusin", blur: "focusout" }, function( orig, fix ) {

		// Attach a single capturing handler on the document while someone wants focusin/focusout
		var handler = function( event ) {
			jQuery.event.simulate( fix, event.target, jQuery.event.fix( event ) );
		};

		jQuery.event.special[ fix ] = {
			setup: function() {
				var doc = this.ownerDocument || this,
					attaches = jQuery._data( doc, fix );

				if ( !attaches ) {
					doc.addEventListener( orig, handler, true );
				}
				jQuery._data( doc, fix, ( attaches || 0 ) + 1 );
			},
			teardown: function() {
				var doc = this.ownerDocument || this,
					attaches = jQuery._data( doc, fix ) - 1;

				if ( !attaches ) {
					doc.removeEventListener( orig, handler, true );
					jQuery._removeData( doc, fix );
				} else {
					jQuery._data( doc, fix, attaches );
				}
			}
		};
	} );
}

jQuery.fn.extend( {

	on: function( types, selector, data, fn ) {
		return on( this, types, selector, data, fn );
	},
	one: function( types, selector, data, fn ) {
		return on( this, types, selector, data, fn, 1 );
	},
	off: function( types, selector, fn ) {
		var handleObj, type;
		if ( types && types.preventDefault && types.handleObj ) {

			// ( event )  dispatched jQuery.Event
			handleObj = types.handleObj;
			jQuery( types.delegateTarget ).off(
				handleObj.namespace ?
					handleObj.origType + "." + handleObj.namespace :
					handleObj.origType,
				handleObj.selector,
				handleObj.handler
			);
			return this;
		}
		if ( typeof types === "object" ) {

			// ( types-object [, selector] )
			for ( type in types ) {
				this.off( type, selector, types[ type ] );
			}
			return this;
		}
		if ( selector === false || typeof selector === "function" ) {

			// ( types [, fn] )
			fn = selector;
			selector = undefined;
		}
		if ( fn === false ) {
			fn = returnFalse;
		}
		return this.each( function() {
			jQuery.event.remove( this, types, fn, selector );
		} );
	},

	trigger: function( type, data ) {
		return this.each( function() {
			jQuery.event.trigger( type, data, this );
		} );
	},
	triggerHandler: function( type, data ) {
		var elem = this[ 0 ];
		if ( elem ) {
			return jQuery.event.trigger( type, data, elem, true );
		}
	}
} );


var rinlinejQuery = / jQuery\d+="(?:null|\d+)"/g,
	rnoshimcache = new RegExp( "<(?:" + nodeNames + ")[\\s/>]", "i" ),
	rxhtmlTag = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:-]+)[^>]*)\/>/gi,

	// Support: IE 10-11, Edge 10240+
	// In IE/Edge using regex groups here causes severe slowdowns.
	// See https://connect.microsoft.com/IE/feedback/details/1736512/
	rnoInnerhtml = /<script|<style|<link/i,

	// checked="checked" or checked
	rchecked = /checked\s*(?:[^=]|=\s*.checked.)/i,
	rscriptTypeMasked = /^true\/(.*)/,
	rcleanScript = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g,
	safeFragment = createSafeFragment( document ),
	fragmentDiv = safeFragment.appendChild( document.createElement( "div" ) );

// Support: IE<8
// Manipulating tables requires a tbody
function manipulationTarget( elem, content ) {
	return jQuery.nodeName( elem, "table" ) &&
		jQuery.nodeName( content.nodeType !== 11 ? content : content.firstChild, "tr" ) ?

		elem.getElementsByTagName( "tbody" )[ 0 ] ||
			elem.appendChild( elem.ownerDocument.createElement( "tbody" ) ) :
		elem;
}

// Replace/restore the type attribute of script elements for safe DOM manipulation
function disableScript( elem ) {
	elem.type = ( jQuery.find.attr( elem, "type" ) !== null ) + "/" + elem.type;
	return elem;
}
function restoreScript( elem ) {
	var match = rscriptTypeMasked.exec( elem.type );
	if ( match ) {
		elem.type = match[ 1 ];
	} else {
		elem.removeAttribute( "type" );
	}
	return elem;
}

function cloneCopyEvent( src, dest ) {
	if ( dest.nodeType !== 1 || !jQuery.hasData( src ) ) {
		return;
	}

	var type, i, l,
		oldData = jQuery._data( src ),
		curData = jQuery._data( dest, oldData ),
		events = oldData.events;

	if ( events ) {
		delete curData.handle;
		curData.events = {};

		for ( type in events ) {
			for ( i = 0, l = events[ type ].length; i < l; i++ ) {
				jQuery.event.add( dest, type, events[ type ][ i ] );
			}
		}
	}

	// make the cloned public data object a copy from the original
	if ( curData.data ) {
		curData.data = jQuery.extend( {}, curData.data );
	}
}

function fixCloneNodeIssues( src, dest ) {
	var nodeName, e, data;

	// We do not need to do anything for non-Elements
	if ( dest.nodeType !== 1 ) {
		return;
	}

	nodeName = dest.nodeName.toLowerCase();

	// IE6-8 copies events bound via attachEvent when using cloneNode.
	if ( !support.noCloneEvent && dest[ jQuery.expando ] ) {
		data = jQuery._data( dest );

		for ( e in data.events ) {
			jQuery.removeEvent( dest, e, data.handle );
		}

		// Event data gets referenced instead of copied if the expando gets copied too
		dest.removeAttribute( jQuery.expando );
	}

	// IE blanks contents when cloning scripts, and tries to evaluate newly-set text
	if ( nodeName === "script" && dest.text !== src.text ) {
		disableScript( dest ).text = src.text;
		restoreScript( dest );

	// IE6-10 improperly clones children of object elements using classid.
	// IE10 throws NoModificationAllowedError if parent is null, #12132.
	} else if ( nodeName === "object" ) {
		if ( dest.parentNode ) {
			dest.outerHTML = src.outerHTML;
		}

		// This path appears unavoidable for IE9. When cloning an object
		// element in IE9, the outerHTML strategy above is not sufficient.
		// If the src has innerHTML and the destination does not,
		// copy the src.innerHTML into the dest.innerHTML. #10324
		if ( support.html5Clone && ( src.innerHTML && !jQuery.trim( dest.innerHTML ) ) ) {
			dest.innerHTML = src.innerHTML;
		}

	} else if ( nodeName === "input" && rcheckableType.test( src.type ) ) {

		// IE6-8 fails to persist the checked state of a cloned checkbox
		// or radio button. Worse, IE6-7 fail to give the cloned element
		// a checked appearance if the defaultChecked value isn't also set

		dest.defaultChecked = dest.checked = src.checked;

		// IE6-7 get confused and end up setting the value of a cloned
		// checkbox/radio button to an empty string instead of "on"
		if ( dest.value !== src.value ) {
			dest.value = src.value;
		}

	// IE6-8 fails to return the selected option to the default selected
	// state when cloning options
	} else if ( nodeName === "option" ) {
		dest.defaultSelected = dest.selected = src.defaultSelected;

	// IE6-8 fails to set the defaultValue to the correct value when
	// cloning other types of input fields
	} else if ( nodeName === "input" || nodeName === "textarea" ) {
		dest.defaultValue = src.defaultValue;
	}
}

function domManip( collection, args, callback, ignored ) {

	// Flatten any nested arrays
	args = concat.apply( [], args );

	var first, node, hasScripts,
		scripts, doc, fragment,
		i = 0,
		l = collection.length,
		iNoClone = l - 1,
		value = args[ 0 ],
		isFunction = jQuery.isFunction( value );

	// We can't cloneNode fragments that contain checked, in WebKit
	if ( isFunction ||
			( l > 1 && typeof value === "string" &&
				!support.checkClone && rchecked.test( value ) ) ) {
		return collection.each( function( index ) {
			var self = collection.eq( index );
			if ( isFunction ) {
				args[ 0 ] = value.call( this, index, self.html() );
			}
			domManip( self, args, callback, ignored );
		} );
	}

	if ( l ) {
		fragment = buildFragment( args, collection[ 0 ].ownerDocument, false, collection, ignored );
		first = fragment.firstChild;

		if ( fragment.childNodes.length === 1 ) {
			fragment = first;
		}

		// Require either new content or an interest in ignored elements to invoke the callback
		if ( first || ignored ) {
			scripts = jQuery.map( getAll( fragment, "script" ), disableScript );
			hasScripts = scripts.length;

			// Use the original fragment for the last item
			// instead of the first because it can end up
			// being emptied incorrectly in certain situations (#8070).
			for ( ; i < l; i++ ) {
				node = fragment;

				if ( i !== iNoClone ) {
					node = jQuery.clone( node, true, true );

					// Keep references to cloned scripts for later restoration
					if ( hasScripts ) {

						// Support: Android<4.1, PhantomJS<2
						// push.apply(_, arraylike) throws on ancient WebKit
						jQuery.merge( scripts, getAll( node, "script" ) );
					}
				}

				callback.call( collection[ i ], node, i );
			}

			if ( hasScripts ) {
				doc = scripts[ scripts.length - 1 ].ownerDocument;

				// Reenable scripts
				jQuery.map( scripts, restoreScript );

				// Evaluate executable scripts on first document insertion
				for ( i = 0; i < hasScripts; i++ ) {
					node = scripts[ i ];
					if ( rscriptType.test( node.type || "" ) &&
						!jQuery._data( node, "globalEval" ) &&
						jQuery.contains( doc, node ) ) {

						if ( node.src ) {

							// Optional AJAX dependency, but won't run scripts if not present
							if ( jQuery._evalUrl ) {
								jQuery._evalUrl( node.src );
							}
						} else {
							jQuery.globalEval(
								( node.text || node.textContent || node.innerHTML || "" )
									.replace( rcleanScript, "" )
							);
						}
					}
				}
			}

			// Fix #11809: Avoid leaking memory
			fragment = first = null;
		}
	}

	return collection;
}

function remove( elem, selector, keepData ) {
	var node,
		elems = selector ? jQuery.filter( selector, elem ) : elem,
		i = 0;

	for ( ; ( node = elems[ i ] ) != null; i++ ) {

		if ( !keepData && node.nodeType === 1 ) {
			jQuery.cleanData( getAll( node ) );
		}

		if ( node.parentNode ) {
			if ( keepData && jQuery.contains( node.ownerDocument, node ) ) {
				setGlobalEval( getAll( node, "script" ) );
			}
			node.parentNode.removeChild( node );
		}
	}

	return elem;
}

jQuery.extend( {
	htmlPrefilter: function( html ) {
		return html.replace( rxhtmlTag, "<$1></$2>" );
	},

	clone: function( elem, dataAndEvents, deepDataAndEvents ) {
		var destElements, node, clone, i, srcElements,
			inPage = jQuery.contains( elem.ownerDocument, elem );

		if ( support.html5Clone || jQuery.isXMLDoc( elem ) ||
			!rnoshimcache.test( "<" + elem.nodeName + ">" ) ) {

			clone = elem.cloneNode( true );

		// IE<=8 does not properly clone detached, unknown element nodes
		} else {
			fragmentDiv.innerHTML = elem.outerHTML;
			fragmentDiv.removeChild( clone = fragmentDiv.firstChild );
		}

		if ( ( !support.noCloneEvent || !support.noCloneChecked ) &&
				( elem.nodeType === 1 || elem.nodeType === 11 ) && !jQuery.isXMLDoc( elem ) ) {

			// We eschew Sizzle here for performance reasons: http://jsperf.com/getall-vs-sizzle/2
			destElements = getAll( clone );
			srcElements = getAll( elem );

			// Fix all IE cloning issues
			for ( i = 0; ( node = srcElements[ i ] ) != null; ++i ) {

				// Ensure that the destination node is not null; Fixes #9587
				if ( destElements[ i ] ) {
					fixCloneNodeIssues( node, destElements[ i ] );
				}
			}
		}

		// Copy the events from the original to the clone
		if ( dataAndEvents ) {
			if ( deepDataAndEvents ) {
				srcElements = srcElements || getAll( elem );
				destElements = destElements || getAll( clone );

				for ( i = 0; ( node = srcElements[ i ] ) != null; i++ ) {
					cloneCopyEvent( node, destElements[ i ] );
				}
			} else {
				cloneCopyEvent( elem, clone );
			}
		}

		// Preserve script evaluation history
		destElements = getAll( clone, "script" );
		if ( destElements.length > 0 ) {
			setGlobalEval( destElements, !inPage && getAll( elem, "script" ) );
		}

		destElements = srcElements = node = null;

		// Return the cloned set
		return clone;
	},

	cleanData: function( elems, /* internal */ forceAcceptData ) {
		var elem, type, id, data,
			i = 0,
			internalKey = jQuery.expando,
			cache = jQuery.cache,
			attributes = support.attributes,
			special = jQuery.event.special;

		for ( ; ( elem = elems[ i ] ) != null; i++ ) {
			if ( forceAcceptData || acceptData( elem ) ) {

				id = elem[ internalKey ];
				data = id && cache[ id ];

				if ( data ) {
					if ( data.events ) {
						for ( type in data.events ) {
							if ( special[ type ] ) {
								jQuery.event.remove( elem, type );

							// This is a shortcut to avoid jQuery.event.remove's overhead
							} else {
								jQuery.removeEvent( elem, type, data.handle );
							}
						}
					}

					// Remove cache only if it was not already removed by jQuery.event.remove
					if ( cache[ id ] ) {

						delete cache[ id ];

						// Support: IE<9
						// IE does not allow us to delete expando properties from nodes
						// IE creates expando attributes along with the property
						// IE does not have a removeAttribute function on Document nodes
						if ( !attributes && typeof elem.removeAttribute !== "undefined" ) {
							elem.removeAttribute( internalKey );

						// Webkit & Blink performance suffers when deleting properties
						// from DOM nodes, so set to undefined instead
						// https://code.google.com/p/chromium/issues/detail?id=378607
						} else {
							elem[ internalKey ] = undefined;
						}

						deletedIds.push( id );
					}
				}
			}
		}
	}
} );

jQuery.fn.extend( {

	// Keep domManip exposed until 3.0 (gh-2225)
	domManip: domManip,

	detach: function( selector ) {
		return remove( this, selector, true );
	},

	remove: function( selector ) {
		return remove( this, selector );
	},

	text: function( value ) {
		return access( this, function( value ) {
			return value === undefined ?
				jQuery.text( this ) :
				this.empty().append(
					( this[ 0 ] && this[ 0 ].ownerDocument || document ).createTextNode( value )
				);
		}, null, value, arguments.length );
	},

	append: function() {
		return domManip( this, arguments, function( elem ) {
			if ( this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9 ) {
				var target = manipulationTarget( this, elem );
				target.appendChild( elem );
			}
		} );
	},

	prepend: function() {
		return domManip( this, arguments, function( elem ) {
			if ( this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9 ) {
				var target = manipulationTarget( this, elem );
				target.insertBefore( elem, target.firstChild );
			}
		} );
	},

	before: function() {
		return domManip( this, arguments, function( elem ) {
			if ( this.parentNode ) {
				this.parentNode.insertBefore( elem, this );
			}
		} );
	},

	after: function() {
		return domManip( this, arguments, function( elem ) {
			if ( this.parentNode ) {
				this.parentNode.insertBefore( elem, this.nextSibling );
			}
		} );
	},

	empty: function() {
		var elem,
			i = 0;

		for ( ; ( elem = this[ i ] ) != null; i++ ) {

			// Remove element nodes and prevent memory leaks
			if ( elem.nodeType === 1 ) {
				jQuery.cleanData( getAll( elem, false ) );
			}

			// Remove any remaining nodes
			while ( elem.firstChild ) {
				elem.removeChild( elem.firstChild );
			}

			// If this is a select, ensure that it displays empty (#12336)
			// Support: IE<9
			if ( elem.options && jQuery.nodeName( elem, "select" ) ) {
				elem.options.length = 0;
			}
		}

		return this;
	},

	clone: function( dataAndEvents, deepDataAndEvents ) {
		dataAndEvents = dataAndEvents == null ? false : dataAndEvents;
		deepDataAndEvents = deepDataAndEvents == null ? dataAndEvents : deepDataAndEvents;

		return this.map( function() {
			return jQuery.clone( this, dataAndEvents, deepDataAndEvents );
		} );
	},

	html: function( value ) {
		return access( this, function( value ) {
			var elem = this[ 0 ] || {},
				i = 0,
				l = this.length;

			if ( value === undefined ) {
				return elem.nodeType === 1 ?
					elem.innerHTML.replace( rinlinejQuery, "" ) :
					undefined;
			}

			// See if we can take a shortcut and just use innerHTML
			if ( typeof value === "string" && !rnoInnerhtml.test( value ) &&
				( support.htmlSerialize || !rnoshimcache.test( value )  ) &&
				( support.leadingWhitespace || !rleadingWhitespace.test( value ) ) &&
				!wrapMap[ ( rtagName.exec( value ) || [ "", "" ] )[ 1 ].toLowerCase() ] ) {

				value = jQuery.htmlPrefilter( value );

				try {
					for ( ; i < l; i++ ) {

						// Remove element nodes and prevent memory leaks
						elem = this[ i ] || {};
						if ( elem.nodeType === 1 ) {
							jQuery.cleanData( getAll( elem, false ) );
							elem.innerHTML = value;
						}
					}

					elem = 0;

				// If using innerHTML throws an exception, use the fallback method
				} catch ( e ) {}
			}

			if ( elem ) {
				this.empty().append( value );
			}
		}, null, value, arguments.length );
	},

	replaceWith: function() {
		var ignored = [];

		// Make the changes, replacing each non-ignored context element with the new content
		return domManip( this, arguments, function( elem ) {
			var parent = this.parentNode;

			if ( jQuery.inArray( this, ignored ) < 0 ) {
				jQuery.cleanData( getAll( this ) );
				if ( parent ) {
					parent.replaceChild( elem, this );
				}
			}

		// Force callback invocation
		}, ignored );
	}
} );

jQuery.each( {
	appendTo: "append",
	prependTo: "prepend",
	insertBefore: "before",
	insertAfter: "after",
	replaceAll: "replaceWith"
}, function( name, original ) {
	jQuery.fn[ name ] = function( selector ) {
		var elems,
			i = 0,
			ret = [],
			insert = jQuery( selector ),
			last = insert.length - 1;

		for ( ; i <= last; i++ ) {
			elems = i === last ? this : this.clone( true );
			jQuery( insert[ i ] )[ original ]( elems );

			// Modern browsers can apply jQuery collections as arrays, but oldIE needs a .get()
			push.apply( ret, elems.get() );
		}

		return this.pushStack( ret );
	};
} );


var iframe,
	elemdisplay = {

		// Support: Firefox
		// We have to pre-define these values for FF (#10227)
		HTML: "block",
		BODY: "block"
	};

/**
 * Retrieve the actual display of a element
 * @param {String} name nodeName of the element
 * @param {Object} doc Document object
 */

// Called only from within defaultDisplay
function actualDisplay( name, doc ) {
	var elem = jQuery( doc.createElement( name ) ).appendTo( doc.body ),

		display = jQuery.css( elem[ 0 ], "display" );

	// We don't have any data stored on the element,
	// so use "detach" method as fast way to get rid of the element
	elem.detach();

	return display;
}

/**
 * Try to determine the default display value of an element
 * @param {String} nodeName
 */
function defaultDisplay( nodeName ) {
	var doc = document,
		display = elemdisplay[ nodeName ];

	if ( !display ) {
		display = actualDisplay( nodeName, doc );

		// If the simple way fails, read from inside an iframe
		if ( display === "none" || !display ) {

			// Use the already-created iframe if possible
			iframe = ( iframe || jQuery( "<iframe frameborder='0' width='0' height='0'/>" ) )
				.appendTo( doc.documentElement );

			// Always write a new HTML skeleton so Webkit and Firefox don't choke on reuse
			doc = ( iframe[ 0 ].contentWindow || iframe[ 0 ].contentDocument ).document;

			// Support: IE
			doc.write();
			doc.close();

			display = actualDisplay( nodeName, doc );
			iframe.detach();
		}

		// Store the correct default display
		elemdisplay[ nodeName ] = display;
	}

	return display;
}
var rmargin = ( /^margin/ );

var rnumnonpx = new RegExp( "^(" + pnum + ")(?!px)[a-z%]+$", "i" );

var swap = function( elem, options, callback, args ) {
	var ret, name,
		old = {};

	// Remember the old values, and insert the new ones
	for ( name in options ) {
		old[ name ] = elem.style[ name ];
		elem.style[ name ] = options[ name ];
	}

	ret = callback.apply( elem, args || [] );

	// Revert the old values
	for ( name in options ) {
		elem.style[ name ] = old[ name ];
	}

	return ret;
};


var documentElement = document.documentElement;



( function() {
	var pixelPositionVal, pixelMarginRightVal, boxSizingReliableVal,
		reliableHiddenOffsetsVal, reliableMarginRightVal, reliableMarginLeftVal,
		container = document.createElement( "div" ),
		div = document.createElement( "div" );

	// Finish early in limited (non-browser) environments
	if ( !div.style ) {
		return;
	}

	div.style.cssText = "float:left;opacity:.5";

	// Support: IE<9
	// Make sure that element opacity exists (as opposed to filter)
	support.opacity = div.style.opacity === "0.5";

	// Verify style float existence
	// (IE uses styleFloat instead of cssFloat)
	support.cssFloat = !!div.style.cssFloat;

	div.style.backgroundClip = "content-box";
	div.cloneNode( true ).style.backgroundClip = "";
	support.clearCloneStyle = div.style.backgroundClip === "content-box";

	container = document.createElement( "div" );
	container.style.cssText = "border:0;width:8px;height:0;top:0;left:-9999px;" +
		"padding:0;margin-top:1px;position:absolute";
	div.innerHTML = "";
	container.appendChild( div );

	// Support: Firefox<29, Android 2.3
	// Vendor-prefix box-sizing
	support.boxSizing = div.style.boxSizing === "" || div.style.MozBoxSizing === "" ||
		div.style.WebkitBoxSizing === "";

	jQuery.extend( support, {
		reliableHiddenOffsets: function() {
			if ( pixelPositionVal == null ) {
				computeStyleTests();
			}
			return reliableHiddenOffsetsVal;
		},

		boxSizingReliable: function() {

			// We're checking for pixelPositionVal here instead of boxSizingReliableVal
			// since that compresses better and they're computed together anyway.
			if ( pixelPositionVal == null ) {
				computeStyleTests();
			}
			return boxSizingReliableVal;
		},

		pixelMarginRight: function() {

			// Support: Android 4.0-4.3
			if ( pixelPositionVal == null ) {
				computeStyleTests();
			}
			return pixelMarginRightVal;
		},

		pixelPosition: function() {
			if ( pixelPositionVal == null ) {
				computeStyleTests();
			}
			return pixelPositionVal;
		},

		reliableMarginRight: function() {

			// Support: Android 2.3
			if ( pixelPositionVal == null ) {
				computeStyleTests();
			}
			return reliableMarginRightVal;
		},

		reliableMarginLeft: function() {

			// Support: IE <=8 only, Android 4.0 - 4.3 only, Firefox <=3 - 37
			if ( pixelPositionVal == null ) {
				computeStyleTests();
			}
			return reliableMarginLeftVal;
		}
	} );

	function computeStyleTests() {
		var contents, divStyle,
			documentElement = document.documentElement;

		// Setup
		documentElement.appendChild( container );

		div.style.cssText =

			// Support: Android 2.3
			// Vendor-prefix box-sizing
			"-webkit-box-sizing:border-box;box-sizing:border-box;" +
			"position:relative;display:block;" +
			"margin:auto;border:1px;padding:1px;" +
			"top:1%;width:50%";

		// Support: IE<9
		// Assume reasonable values in the absence of getComputedStyle
		pixelPositionVal = boxSizingReliableVal = reliableMarginLeftVal = false;
		pixelMarginRightVal = reliableMarginRightVal = true;

		// Check for getComputedStyle so that this code is not run in IE<9.
		if ( window.getComputedStyle ) {
			divStyle = window.getComputedStyle( div );
			pixelPositionVal = ( divStyle || {} ).top !== "1%";
			reliableMarginLeftVal = ( divStyle || {} ).marginLeft === "2px";
			boxSizingReliableVal = ( divStyle || { width: "4px" } ).width === "4px";

			// Support: Android 4.0 - 4.3 only
			// Some styles come back with percentage values, even though they shouldn't
			div.style.marginRight = "50%";
			pixelMarginRightVal = ( divStyle || { marginRight: "4px" } ).marginRight === "4px";

			// Support: Android 2.3 only
			// Div with explicit width and no margin-right incorrectly
			// gets computed margin-right based on width of container (#3333)
			// WebKit Bug 13343 - getComputedStyle returns wrong value for margin-right
			contents = div.appendChild( document.createElement( "div" ) );

			// Reset CSS: box-sizing; display; margin; border; padding
			contents.style.cssText = div.style.cssText =

				// Support: Android 2.3
				// Vendor-prefix box-sizing
				"-webkit-box-sizing:content-box;-moz-box-sizing:content-box;" +
				"box-sizing:content-box;display:block;margin:0;border:0;padding:0";
			contents.style.marginRight = contents.style.width = "0";
			div.style.width = "1px";

			reliableMarginRightVal =
				!parseFloat( ( window.getComputedStyle( contents ) || {} ).marginRight );

			div.removeChild( contents );
		}

		// Support: IE6-8
		// First check that getClientRects works as expected
		// Check if table cells still have offsetWidth/Height when they are set
		// to display:none and there are still other visible table cells in a
		// table row; if so, offsetWidth/Height are not reliable for use when
		// determining if an element has been hidden directly using
		// display:none (it is still safe to use offsets if a parent element is
		// hidden; don safety goggles and see bug #4512 for more information).
		div.style.display = "none";
		reliableHiddenOffsetsVal = div.getClientRects().length === 0;
		if ( reliableHiddenOffsetsVal ) {
			div.style.display = "";
			div.innerHTML = "<table><tr><td></td><td>t</td></tr></table>";
			contents = div.getElementsByTagName( "td" );
			contents[ 0 ].style.cssText = "margin:0;border:0;padding:0;display:none";
			reliableHiddenOffsetsVal = contents[ 0 ].offsetHeight === 0;
			if ( reliableHiddenOffsetsVal ) {
				contents[ 0 ].style.display = "";
				contents[ 1 ].style.display = "none";
				reliableHiddenOffsetsVal = contents[ 0 ].offsetHeight === 0;
			}
		}

		// Teardown
		documentElement.removeChild( container );
	}

} )();


var getStyles, curCSS,
	rposition = /^(top|right|bottom|left)$/;

if ( window.getComputedStyle ) {
	getStyles = function( elem ) {

		// Support: IE<=11+, Firefox<=30+ (#15098, #14150)
		// IE throws on elements created in popups
		// FF meanwhile throws on frame elements through "defaultView.getComputedStyle"
		var view = elem.ownerDocument.defaultView;

		if ( !view || !view.opener ) {
			view = window;
		}

		return view.getComputedStyle( elem );
	};

	curCSS = function( elem, name, computed ) {
		var width, minWidth, maxWidth, ret,
			style = elem.style;

		computed = computed || getStyles( elem );

		// getPropertyValue is only needed for .css('filter') in IE9, see #12537
		ret = computed ? computed.getPropertyValue( name ) || computed[ name ] : undefined;

		// Support: Opera 12.1x only
		// Fall back to style even without computed
		// computed is undefined for elems on document fragments
		if ( ( ret === "" || ret === undefined ) && !jQuery.contains( elem.ownerDocument, elem ) ) {
			ret = jQuery.style( elem, name );
		}

		if ( computed ) {

			// A tribute to the "awesome hack by Dean Edwards"
			// Chrome < 17 and Safari 5.0 uses "computed value"
			// instead of "used value" for margin-right
			// Safari 5.1.7 (at least) returns percentage for a larger set of values,
			// but width seems to be reliably pixels
			// this is against the CSSOM draft spec:
			// http://dev.w3.org/csswg/cssom/#resolved-values
			if ( !support.pixelMarginRight() && rnumnonpx.test( ret ) && rmargin.test( name ) ) {

				// Remember the original values
				width = style.width;
				minWidth = style.minWidth;
				maxWidth = style.maxWidth;

				// Put in the new values to get a computed value out
				style.minWidth = style.maxWidth = style.width = ret;
				ret = computed.width;

				// Revert the changed values
				style.width = width;
				style.minWidth = minWidth;
				style.maxWidth = maxWidth;
			}
		}

		// Support: IE
		// IE returns zIndex value as an integer.
		return ret === undefined ?
			ret :
			ret + "";
	};
} else if ( documentElement.currentStyle ) {
	getStyles = function( elem ) {
		return elem.currentStyle;
	};

	curCSS = function( elem, name, computed ) {
		var left, rs, rsLeft, ret,
			style = elem.style;

		computed = computed || getStyles( elem );
		ret = computed ? computed[ name ] : undefined;

		// Avoid setting ret to empty string here
		// so we don't default to auto
		if ( ret == null && style && style[ name ] ) {
			ret = style[ name ];
		}

		// From the awesome hack by Dean Edwards
		// http://erik.eae.net/archives/2007/07/27/18.54.15/#comment-102291

		// If we're not dealing with a regular pixel number
		// but a number that has a weird ending, we need to convert it to pixels
		// but not position css attributes, as those are
		// proportional to the parent element instead
		// and we can't measure the parent instead because it
		// might trigger a "stacking dolls" problem
		if ( rnumnonpx.test( ret ) && !rposition.test( name ) ) {

			// Remember the original values
			left = style.left;
			rs = elem.runtimeStyle;
			rsLeft = rs && rs.left;

			// Put in the new values to get a computed value out
			if ( rsLeft ) {
				rs.left = elem.currentStyle.left;
			}
			style.left = name === "fontSize" ? "1em" : ret;
			ret = style.pixelLeft + "px";

			// Revert the changed values
			style.left = left;
			if ( rsLeft ) {
				rs.left = rsLeft;
			}
		}

		// Support: IE
		// IE returns zIndex value as an integer.
		return ret === undefined ?
			ret :
			ret + "" || "auto";
	};
}




function addGetHookIf( conditionFn, hookFn ) {

	// Define the hook, we'll check on the first run if it's really needed.
	return {
		get: function() {
			if ( conditionFn() ) {

				// Hook not needed (or it's not possible to use it due
				// to missing dependency), remove it.
				delete this.get;
				return;
			}

			// Hook needed; redefine it so that the support test is not executed again.
			return ( this.get = hookFn ).apply( this, arguments );
		}
	};
}


var

		ralpha = /alpha\([^)]*\)/i,
	ropacity = /opacity\s*=\s*([^)]*)/i,

	// swappable if display is none or starts with table except
	// "table", "table-cell", or "table-caption"
	// see here for display values:
	// https://developer.mozilla.org/en-US/docs/CSS/display
	rdisplayswap = /^(none|table(?!-c[ea]).+)/,
	rnumsplit = new RegExp( "^(" + pnum + ")(.*)$", "i" ),

	cssShow = { position: "absolute", visibility: "hidden", display: "block" },
	cssNormalTransform = {
		letterSpacing: "0",
		fontWeight: "400"
	},

	cssPrefixes = [ "Webkit", "O", "Moz", "ms" ],
	emptyStyle = document.createElement( "div" ).style;


// return a css property mapped to a potentially vendor prefixed property
function vendorPropName( name ) {

	// shortcut for names that are not vendor prefixed
	if ( name in emptyStyle ) {
		return name;
	}

	// check for vendor prefixed names
	var capName = name.charAt( 0 ).toUpperCase() + name.slice( 1 ),
		i = cssPrefixes.length;

	while ( i-- ) {
		name = cssPrefixes[ i ] + capName;
		if ( name in emptyStyle ) {
			return name;
		}
	}
}

function showHide( elements, show ) {
	var display, elem, hidden,
		values = [],
		index = 0,
		length = elements.length;

	for ( ; index < length; index++ ) {
		elem = elements[ index ];
		if ( !elem.style ) {
			continue;
		}

		values[ index ] = jQuery._data( elem, "olddisplay" );
		display = elem.style.display;
		if ( show ) {

			// Reset the inline display of this element to learn if it is
			// being hidden by cascaded rules or not
			if ( !values[ index ] && display === "none" ) {
				elem.style.display = "";
			}

			// Set elements which have been overridden with display: none
			// in a stylesheet to whatever the default browser style is
			// for such an element
			if ( elem.style.display === "" && isHidden( elem ) ) {
				values[ index ] =
					jQuery._data( elem, "olddisplay", defaultDisplay( elem.nodeName ) );
			}
		} else {
			hidden = isHidden( elem );

			if ( display && display !== "none" || !hidden ) {
				jQuery._data(
					elem,
					"olddisplay",
					hidden ? display : jQuery.css( elem, "display" )
				);
			}
		}
	}

	// Set the display of most of the elements in a second loop
	// to avoid the constant reflow
	for ( index = 0; index < length; index++ ) {
		elem = elements[ index ];
		if ( !elem.style ) {
			continue;
		}
		if ( !show || elem.style.display === "none" || elem.style.display === "" ) {
			elem.style.display = show ? values[ index ] || "" : "none";
		}
	}

	return elements;
}

function setPositiveNumber( elem, value, subtract ) {
	var matches = rnumsplit.exec( value );
	return matches ?

		// Guard against undefined "subtract", e.g., when used as in cssHooks
		Math.max( 0, matches[ 1 ] - ( subtract || 0 ) ) + ( matches[ 2 ] || "px" ) :
		value;
}

function augmentWidthOrHeight( elem, name, extra, isBorderBox, styles ) {
	var i = extra === ( isBorderBox ? "border" : "content" ) ?

		// If we already have the right measurement, avoid augmentation
		4 :

		// Otherwise initialize for horizontal or vertical properties
		name === "width" ? 1 : 0,

		val = 0;

	for ( ; i < 4; i += 2 ) {

		// both box models exclude margin, so add it if we want it
		if ( extra === "margin" ) {
			val += jQuery.css( elem, extra + cssExpand[ i ], true, styles );
		}

		if ( isBorderBox ) {

			// border-box includes padding, so remove it if we want content
			if ( extra === "content" ) {
				val -= jQuery.css( elem, "padding" + cssExpand[ i ], true, styles );
			}

			// at this point, extra isn't border nor margin, so remove border
			if ( extra !== "margin" ) {
				val -= jQuery.css( elem, "border" + cssExpand[ i ] + "Width", true, styles );
			}
		} else {

			// at this point, extra isn't content, so add padding
			val += jQuery.css( elem, "padding" + cssExpand[ i ], true, styles );

			// at this point, extra isn't content nor padding, so add border
			if ( extra !== "padding" ) {
				val += jQuery.css( elem, "border" + cssExpand[ i ] + "Width", true, styles );
			}
		}
	}

	return val;
}

function getWidthOrHeight( elem, name, extra ) {

	// Start with offset property, which is equivalent to the border-box value
	var valueIsBorderBox = true,
		val = name === "width" ? elem.offsetWidth : elem.offsetHeight,
		styles = getStyles( elem ),
		isBorderBox = support.boxSizing &&
			jQuery.css( elem, "boxSizing", false, styles ) === "border-box";

	// Support: IE11 only
	// In IE 11 fullscreen elements inside of an iframe have
	// 100x too small dimensions (gh-1764).
	if ( document.msFullscreenElement && window.top !== window ) {

		// Support: IE11 only
		// Running getBoundingClientRect on a disconnected node
		// in IE throws an error.
		if ( elem.getClientRects().length ) {
			val = Math.round( elem.getBoundingClientRect()[ name ] * 100 );
		}
	}

	// some non-html elements return undefined for offsetWidth, so check for null/undefined
	// svg - https://bugzilla.mozilla.org/show_bug.cgi?id=649285
	// MathML - https://bugzilla.mozilla.org/show_bug.cgi?id=491668
	if ( val <= 0 || val == null ) {

		// Fall back to computed then uncomputed css if necessary
		val = curCSS( elem, name, styles );
		if ( val < 0 || val == null ) {
			val = elem.style[ name ];
		}

		// Computed unit is not pixels. Stop here and return.
		if ( rnumnonpx.test( val ) ) {
			return val;
		}

		// we need the check for style in case a browser which returns unreliable values
		// for getComputedStyle silently falls back to the reliable elem.style
		valueIsBorderBox = isBorderBox &&
			( support.boxSizingReliable() || val === elem.style[ name ] );

		// Normalize "", auto, and prepare for extra
		val = parseFloat( val ) || 0;
	}

	// use the active box-sizing model to add/subtract irrelevant styles
	return ( val +
		augmentWidthOrHeight(
			elem,
			name,
			extra || ( isBorderBox ? "border" : "content" ),
			valueIsBorderBox,
			styles
		)
	) + "px";
}

jQuery.extend( {

	// Add in style property hooks for overriding the default
	// behavior of getting and setting a style property
	cssHooks: {
		opacity: {
			get: function( elem, computed ) {
				if ( computed ) {

					// We should always get a number back from opacity
					var ret = curCSS( elem, "opacity" );
					return ret === "" ? "1" : ret;
				}
			}
		}
	},

	// Don't automatically add "px" to these possibly-unitless properties
	cssNumber: {
		"animationIterationCount": true,
		"columnCount": true,
		"fillOpacity": true,
		"flexGrow": true,
		"flexShrink": true,
		"fontWeight": true,
		"lineHeight": true,
		"opacity": true,
		"order": true,
		"orphans": true,
		"widows": true,
		"zIndex": true,
		"zoom": true
	},

	// Add in properties whose names you wish to fix before
	// setting or getting the value
	cssProps: {

		// normalize float css property
		"float": support.cssFloat ? "cssFloat" : "styleFloat"
	},

	// Get and set the style property on a DOM Node
	style: function( elem, name, value, extra ) {

		// Don't set styles on text and comment nodes
		if ( !elem || elem.nodeType === 3 || elem.nodeType === 8 || !elem.style ) {
			return;
		}

		// Make sure that we're working with the right name
		var ret, type, hooks,
			origName = jQuery.camelCase( name ),
			style = elem.style;

		name = jQuery.cssProps[ origName ] ||
			( jQuery.cssProps[ origName ] = vendorPropName( origName ) || origName );

		// gets hook for the prefixed version
		// followed by the unprefixed version
		hooks = jQuery.cssHooks[ name ] || jQuery.cssHooks[ origName ];

		// Check if we're setting a value
		if ( value !== undefined ) {
			type = typeof value;

			// Convert "+=" or "-=" to relative numbers (#7345)
			if ( type === "string" && ( ret = rcssNum.exec( value ) ) && ret[ 1 ] ) {
				value = adjustCSS( elem, name, ret );

				// Fixes bug #9237
				type = "number";
			}

			// Make sure that null and NaN values aren't set. See: #7116
			if ( value == null || value !== value ) {
				return;
			}

			// If a number was passed in, add the unit (except for certain CSS properties)
			if ( type === "number" ) {
				value += ret && ret[ 3 ] || ( jQuery.cssNumber[ origName ] ? "" : "px" );
			}

			// Fixes #8908, it can be done more correctly by specifing setters in cssHooks,
			// but it would mean to define eight
			// (for every problematic property) identical functions
			if ( !support.clearCloneStyle && value === "" && name.indexOf( "background" ) === 0 ) {
				style[ name ] = "inherit";
			}

			// If a hook was provided, use that value, otherwise just set the specified value
			if ( !hooks || !( "set" in hooks ) ||
				( value = hooks.set( elem, value, extra ) ) !== undefined ) {

				// Support: IE
				// Swallow errors from 'invalid' CSS values (#5509)
				try {
					style[ name ] = value;
				} catch ( e ) {}
			}

		} else {

			// If a hook was provided get the non-computed value from there
			if ( hooks && "get" in hooks &&
				( ret = hooks.get( elem, false, extra ) ) !== undefined ) {

				return ret;
			}

			// Otherwise just get the value from the style object
			return style[ name ];
		}
	},

	css: function( elem, name, extra, styles ) {
		var num, val, hooks,
			origName = jQuery.camelCase( name );

		// Make sure that we're working with the right name
		name = jQuery.cssProps[ origName ] ||
			( jQuery.cssProps[ origName ] = vendorPropName( origName ) || origName );

		// gets hook for the prefixed version
		// followed by the unprefixed version
		hooks = jQuery.cssHooks[ name ] || jQuery.cssHooks[ origName ];

		// If a hook was provided get the computed value from there
		if ( hooks && "get" in hooks ) {
			val = hooks.get( elem, true, extra );
		}

		// Otherwise, if a way to get the computed value exists, use that
		if ( val === undefined ) {
			val = curCSS( elem, name, styles );
		}

		//convert "normal" to computed value
		if ( val === "normal" && name in cssNormalTransform ) {
			val = cssNormalTransform[ name ];
		}

		// Return, converting to number if forced or a qualifier was provided and val looks numeric
		if ( extra === "" || extra ) {
			num = parseFloat( val );
			return extra === true || isFinite( num ) ? num || 0 : val;
		}
		return val;
	}
} );

jQuery.each( [ "height", "width" ], function( i, name ) {
	jQuery.cssHooks[ name ] = {
		get: function( elem, computed, extra ) {
			if ( computed ) {

				// certain elements can have dimension info if we invisibly show them
				// however, it must have a current display style that would benefit from this
				return rdisplayswap.test( jQuery.css( elem, "display" ) ) &&
					elem.offsetWidth === 0 ?
						swap( elem, cssShow, function() {
							return getWidthOrHeight( elem, name, extra );
						} ) :
						getWidthOrHeight( elem, name, extra );
			}
		},

		set: function( elem, value, extra ) {
			var styles = extra && getStyles( elem );
			return setPositiveNumber( elem, value, extra ?
				augmentWidthOrHeight(
					elem,
					name,
					extra,
					support.boxSizing &&
						jQuery.css( elem, "boxSizing", false, styles ) === "border-box",
					styles
				) : 0
			);
		}
	};
} );

if ( !support.opacity ) {
	jQuery.cssHooks.opacity = {
		get: function( elem, computed ) {

			// IE uses filters for opacity
			return ropacity.test( ( computed && elem.currentStyle ?
				elem.currentStyle.filter :
				elem.style.filter ) || "" ) ?
					( 0.01 * parseFloat( RegExp.$1 ) ) + "" :
					computed ? "1" : "";
		},

		set: function( elem, value ) {
			var style = elem.style,
				currentStyle = elem.currentStyle,
				opacity = jQuery.isNumeric( value ) ? "alpha(opacity=" + value * 100 + ")" : "",
				filter = currentStyle && currentStyle.filter || style.filter || "";

			// IE has trouble with opacity if it does not have layout
			// Force it by setting the zoom level
			style.zoom = 1;

			// if setting opacity to 1, and no other filters exist -
			// attempt to remove filter attribute #6652
			// if value === "", then remove inline opacity #12685
			if ( ( value >= 1 || value === "" ) &&
					jQuery.trim( filter.replace( ralpha, "" ) ) === "" &&
					style.removeAttribute ) {

				// Setting style.filter to null, "" & " " still leave "filter:" in the cssText
				// if "filter:" is present at all, clearType is disabled, we want to avoid this
				// style.removeAttribute is IE Only, but so apparently is this code path...
				style.removeAttribute( "filter" );

				// if there is no filter style applied in a css rule
				// or unset inline opacity, we are done
				if ( value === "" || currentStyle && !currentStyle.filter ) {
					return;
				}
			}

			// otherwise, set new filter values
			style.filter = ralpha.test( filter ) ?
				filter.replace( ralpha, opacity ) :
				filter + " " + opacity;
		}
	};
}

jQuery.cssHooks.marginRight = addGetHookIf( support.reliableMarginRight,
	function( elem, computed ) {
		if ( computed ) {
			return swap( elem, { "display": "inline-block" },
				curCSS, [ elem, "marginRight" ] );
		}
	}
);

jQuery.cssHooks.marginLeft = addGetHookIf( support.reliableMarginLeft,
	function( elem, computed ) {
		if ( computed ) {
			return (
				parseFloat( curCSS( elem, "marginLeft" ) ) ||

				// Support: IE<=11+
				// Running getBoundingClientRect on a disconnected node in IE throws an error
				// Support: IE8 only
				// getClientRects() errors on disconnected elems
				( jQuery.contains( elem.ownerDocument, elem ) ?
					elem.getBoundingClientRect().left -
						swap( elem, { marginLeft: 0 }, function() {
							return elem.getBoundingClientRect().left;
						} ) :
					0
				)
			) + "px";
		}
	}
);

// These hooks are used by animate to expand properties
jQuery.each( {
	margin: "",
	padding: "",
	border: "Width"
}, function( prefix, suffix ) {
	jQuery.cssHooks[ prefix + suffix ] = {
		expand: function( value ) {
			var i = 0,
				expanded = {},

				// assumes a single number if not a string
				parts = typeof value === "string" ? value.split( " " ) : [ value ];

			for ( ; i < 4; i++ ) {
				expanded[ prefix + cssExpand[ i ] + suffix ] =
					parts[ i ] || parts[ i - 2 ] || parts[ 0 ];
			}

			return expanded;
		}
	};

	if ( !rmargin.test( prefix ) ) {
		jQuery.cssHooks[ prefix + suffix ].set = setPositiveNumber;
	}
} );

jQuery.fn.extend( {
	css: function( name, value ) {
		return access( this, function( elem, name, value ) {
			var styles, len,
				map = {},
				i = 0;

			if ( jQuery.isArray( name ) ) {
				styles = getStyles( elem );
				len = name.length;

				for ( ; i < len; i++ ) {
					map[ name[ i ] ] = jQuery.css( elem, name[ i ], false, styles );
				}

				return map;
			}

			return value !== undefined ?
				jQuery.style( elem, name, value ) :
				jQuery.css( elem, name );
		}, name, value, arguments.length > 1 );
	},
	show: function() {
		return showHide( this, true );
	},
	hide: function() {
		return showHide( this );
	},
	toggle: function( state ) {
		if ( typeof state === "boolean" ) {
			return state ? this.show() : this.hide();
		}

		return this.each( function() {
			if ( isHidden( this ) ) {
				jQuery( this ).show();
			} else {
				jQuery( this ).hide();
			}
		} );
	}
} );


function Tween( elem, options, prop, end, easing ) {
	return new Tween.prototype.init( elem, options, prop, end, easing );
}
jQuery.Tween = Tween;

Tween.prototype = {
	constructor: Tween,
	init: function( elem, options, prop, end, easing, unit ) {
		this.elem = elem;
		this.prop = prop;
		this.easing = easing || jQuery.easing._default;
		this.options = options;
		this.start = this.now = this.cur();
		this.end = end;
		this.unit = unit || ( jQuery.cssNumber[ prop ] ? "" : "px" );
	},
	cur: function() {
		var hooks = Tween.propHooks[ this.prop ];

		return hooks && hooks.get ?
			hooks.get( this ) :
			Tween.propHooks._default.get( this );
	},
	run: function( percent ) {
		var eased,
			hooks = Tween.propHooks[ this.prop ];

		if ( this.options.duration ) {
			this.pos = eased = jQuery.easing[ this.easing ](
				percent, this.options.duration * percent, 0, 1, this.options.duration
			);
		} else {
			this.pos = eased = percent;
		}
		this.now = ( this.end - this.start ) * eased + this.start;

		if ( this.options.step ) {
			this.options.step.call( this.elem, this.now, this );
		}

		if ( hooks && hooks.set ) {
			hooks.set( this );
		} else {
			Tween.propHooks._default.set( this );
		}
		return this;
	}
};

Tween.prototype.init.prototype = Tween.prototype;

Tween.propHooks = {
	_default: {
		get: function( tween ) {
			var result;

			// Use a property on the element directly when it is not a DOM element,
			// or when there is no matching style property that exists.
			if ( tween.elem.nodeType !== 1 ||
				tween.elem[ tween.prop ] != null && tween.elem.style[ tween.prop ] == null ) {
				return tween.elem[ tween.prop ];
			}

			// passing an empty string as a 3rd parameter to .css will automatically
			// attempt a parseFloat and fallback to a string if the parse fails
			// so, simple values such as "10px" are parsed to Float.
			// complex values such as "rotate(1rad)" are returned as is.
			result = jQuery.css( tween.elem, tween.prop, "" );

			// Empty strings, null, undefined and "auto" are converted to 0.
			return !result || result === "auto" ? 0 : result;
		},
		set: function( tween ) {

			// use step hook for back compat - use cssHook if its there - use .style if its
			// available and use plain properties where available
			if ( jQuery.fx.step[ tween.prop ] ) {
				jQuery.fx.step[ tween.prop ]( tween );
			} else if ( tween.elem.nodeType === 1 &&
				( tween.elem.style[ jQuery.cssProps[ tween.prop ] ] != null ||
					jQuery.cssHooks[ tween.prop ] ) ) {
				jQuery.style( tween.elem, tween.prop, tween.now + tween.unit );
			} else {
				tween.elem[ tween.prop ] = tween.now;
			}
		}
	}
};

// Support: IE <=9
// Panic based approach to setting things on disconnected nodes

Tween.propHooks.scrollTop = Tween.propHooks.scrollLeft = {
	set: function( tween ) {
		if ( tween.elem.nodeType && tween.elem.parentNode ) {
			tween.elem[ tween.prop ] = tween.now;
		}
	}
};

jQuery.easing = {
	linear: function( p ) {
		return p;
	},
	swing: function( p ) {
		return 0.5 - Math.cos( p * Math.PI ) / 2;
	},
	_default: "swing"
};

jQuery.fx = Tween.prototype.init;

// Back Compat <1.8 extension point
jQuery.fx.step = {};




var
	fxNow, timerId,
	rfxtypes = /^(?:toggle|show|hide)$/,
	rrun = /queueHooks$/;

// Animations created synchronously will run synchronously
function createFxNow() {
	window.setTimeout( function() {
		fxNow = undefined;
	} );
	return ( fxNow = jQuery.now() );
}

// Generate parameters to create a standard animation
function genFx( type, includeWidth ) {
	var which,
		attrs = { height: type },
		i = 0;

	// if we include width, step value is 1 to do all cssExpand values,
	// if we don't include width, step value is 2 to skip over Left and Right
	includeWidth = includeWidth ? 1 : 0;
	for ( ; i < 4 ; i += 2 - includeWidth ) {
		which = cssExpand[ i ];
		attrs[ "margin" + which ] = attrs[ "padding" + which ] = type;
	}

	if ( includeWidth ) {
		attrs.opacity = attrs.width = type;
	}

	return attrs;
}

function createTween( value, prop, animation ) {
	var tween,
		collection = ( Animation.tweeners[ prop ] || [] ).concat( Animation.tweeners[ "*" ] ),
		index = 0,
		length = collection.length;
	for ( ; index < length; index++ ) {
		if ( ( tween = collection[ index ].call( animation, prop, value ) ) ) {

			// we're done with this property
			return tween;
		}
	}
}

function defaultPrefilter( elem, props, opts ) {
	/* jshint validthis: true */
	var prop, value, toggle, tween, hooks, oldfire, display, checkDisplay,
		anim = this,
		orig = {},
		style = elem.style,
		hidden = elem.nodeType && isHidden( elem ),
		dataShow = jQuery._data( elem, "fxshow" );

	// handle queue: false promises
	if ( !opts.queue ) {
		hooks = jQuery._queueHooks( elem, "fx" );
		if ( hooks.unqueued == null ) {
			hooks.unqueued = 0;
			oldfire = hooks.empty.fire;
			hooks.empty.fire = function() {
				if ( !hooks.unqueued ) {
					oldfire();
				}
			};
		}
		hooks.unqueued++;

		anim.always( function() {

			// doing this makes sure that the complete handler will be called
			// before this completes
			anim.always( function() {
				hooks.unqueued--;
				if ( !jQuery.queue( elem, "fx" ).length ) {
					hooks.empty.fire();
				}
			} );
		} );
	}

	// height/width overflow pass
	if ( elem.nodeType === 1 && ( "height" in props || "width" in props ) ) {

		// Make sure that nothing sneaks out
		// Record all 3 overflow attributes because IE does not
		// change the overflow attribute when overflowX and
		// overflowY are set to the same value
		opts.overflow = [ style.overflow, style.overflowX, style.overflowY ];

		// Set display property to inline-block for height/width
		// animations on inline elements that are having width/height animated
		display = jQuery.css( elem, "display" );

		// Test default display if display is currently "none"
		checkDisplay = display === "none" ?
			jQuery._data( elem, "olddisplay" ) || defaultDisplay( elem.nodeName ) : display;

		if ( checkDisplay === "inline" && jQuery.css( elem, "float" ) === "none" ) {

			// inline-level elements accept inline-block;
			// block-level elements need to be inline with layout
			if ( !support.inlineBlockNeedsLayout || defaultDisplay( elem.nodeName ) === "inline" ) {
				style.display = "inline-block";
			} else {
				style.zoom = 1;
			}
		}
	}

	if ( opts.overflow ) {
		style.overflow = "hidden";
		if ( !support.shrinkWrapBlocks() ) {
			anim.always( function() {
				style.overflow = opts.overflow[ 0 ];
				style.overflowX = opts.overflow[ 1 ];
				style.overflowY = opts.overflow[ 2 ];
			} );
		}
	}

	// show/hide pass
	for ( prop in props ) {
		value = props[ prop ];
		if ( rfxtypes.exec( value ) ) {
			delete props[ prop ];
			toggle = toggle || value === "toggle";
			if ( value === ( hidden ? "hide" : "show" ) ) {

				// If there is dataShow left over from a stopped hide or show
				// and we are going to proceed with show, we should pretend to be hidden
				if ( value === "show" && dataShow && dataShow[ prop ] !== undefined ) {
					hidden = true;
				} else {
					continue;
				}
			}
			orig[ prop ] = dataShow && dataShow[ prop ] || jQuery.style( elem, prop );

		// Any non-fx value stops us from restoring the original display value
		} else {
			display = undefined;
		}
	}

	if ( !jQuery.isEmptyObject( orig ) ) {
		if ( dataShow ) {
			if ( "hidden" in dataShow ) {
				hidden = dataShow.hidden;
			}
		} else {
			dataShow = jQuery._data( elem, "fxshow", {} );
		}

		// store state if its toggle - enables .stop().toggle() to "reverse"
		if ( toggle ) {
			dataShow.hidden = !hidden;
		}
		if ( hidden ) {
			jQuery( elem ).show();
		} else {
			anim.done( function() {
				jQuery( elem ).hide();
			} );
		}
		anim.done( function() {
			var prop;
			jQuery._removeData( elem, "fxshow" );
			for ( prop in orig ) {
				jQuery.style( elem, prop, orig[ prop ] );
			}
		} );
		for ( prop in orig ) {
			tween = createTween( hidden ? dataShow[ prop ] : 0, prop, anim );

			if ( !( prop in dataShow ) ) {
				dataShow[ prop ] = tween.start;
				if ( hidden ) {
					tween.end = tween.start;
					tween.start = prop === "width" || prop === "height" ? 1 : 0;
				}
			}
		}

	// If this is a noop like .hide().hide(), restore an overwritten display value
	} else if ( ( display === "none" ? defaultDisplay( elem.nodeName ) : display ) === "inline" ) {
		style.display = display;
	}
}

function propFilter( props, specialEasing ) {
	var index, name, easing, value, hooks;

	// camelCase, specialEasing and expand cssHook pass
	for ( index in props ) {
		name = jQuery.camelCase( index );
		easing = specialEasing[ name ];
		value = props[ index ];
		if ( jQuery.isArray( value ) ) {
			easing = value[ 1 ];
			value = props[ index ] = value[ 0 ];
		}

		if ( index !== name ) {
			props[ name ] = value;
			delete props[ index ];
		}

		hooks = jQuery.cssHooks[ name ];
		if ( hooks && "expand" in hooks ) {
			value = hooks.expand( value );
			delete props[ name ];

			// not quite $.extend, this wont overwrite keys already present.
			// also - reusing 'index' from above because we have the correct "name"
			for ( index in value ) {
				if ( !( index in props ) ) {
					props[ index ] = value[ index ];
					specialEasing[ index ] = easing;
				}
			}
		} else {
			specialEasing[ name ] = easing;
		}
	}
}

function Animation( elem, properties, options ) {
	var result,
		stopped,
		index = 0,
		length = Animation.prefilters.length,
		deferred = jQuery.Deferred().always( function() {

			// don't match elem in the :animated selector
			delete tick.elem;
		} ),
		tick = function() {
			if ( stopped ) {
				return false;
			}
			var currentTime = fxNow || createFxNow(),
				remaining = Math.max( 0, animation.startTime + animation.duration - currentTime ),

				// Support: Android 2.3
				// Archaic crash bug won't allow us to use `1 - ( 0.5 || 0 )` (#12497)
				temp = remaining / animation.duration || 0,
				percent = 1 - temp,
				index = 0,
				length = animation.tweens.length;

			for ( ; index < length ; index++ ) {
				animation.tweens[ index ].run( percent );
			}

			deferred.notifyWith( elem, [ animation, percent, remaining ] );

			if ( percent < 1 && length ) {
				return remaining;
			} else {
				deferred.resolveWith( elem, [ animation ] );
				return false;
			}
		},
		animation = deferred.promise( {
			elem: elem,
			props: jQuery.extend( {}, properties ),
			opts: jQuery.extend( true, {
				specialEasing: {},
				easing: jQuery.easing._default
			}, options ),
			originalProperties: properties,
			originalOptions: options,
			startTime: fxNow || createFxNow(),
			duration: options.duration,
			tweens: [],
			createTween: function( prop, end ) {
				var tween = jQuery.Tween( elem, animation.opts, prop, end,
						animation.opts.specialEasing[ prop ] || animation.opts.easing );
				animation.tweens.push( tween );
				return tween;
			},
			stop: function( gotoEnd ) {
				var index = 0,

					// if we are going to the end, we want to run all the tweens
					// otherwise we skip this part
					length = gotoEnd ? animation.tweens.length : 0;
				if ( stopped ) {
					return this;
				}
				stopped = true;
				for ( ; index < length ; index++ ) {
					animation.tweens[ index ].run( 1 );
				}

				// resolve when we played the last frame
				// otherwise, reject
				if ( gotoEnd ) {
					deferred.notifyWith( elem, [ animation, 1, 0 ] );
					deferred.resolveWith( elem, [ animation, gotoEnd ] );
				} else {
					deferred.rejectWith( elem, [ animation, gotoEnd ] );
				}
				return this;
			}
		} ),
		props = animation.props;

	propFilter( props, animation.opts.specialEasing );

	for ( ; index < length ; index++ ) {
		result = Animation.prefilters[ index ].call( animation, elem, props, animation.opts );
		if ( result ) {
			if ( jQuery.isFunction( result.stop ) ) {
				jQuery._queueHooks( animation.elem, animation.opts.queue ).stop =
					jQuery.proxy( result.stop, result );
			}
			return result;
		}
	}

	jQuery.map( props, createTween, animation );

	if ( jQuery.isFunction( animation.opts.start ) ) {
		animation.opts.start.call( elem, animation );
	}

	jQuery.fx.timer(
		jQuery.extend( tick, {
			elem: elem,
			anim: animation,
			queue: animation.opts.queue
		} )
	);

	// attach callbacks from options
	return animation.progress( animation.opts.progress )
		.done( animation.opts.done, animation.opts.complete )
		.fail( animation.opts.fail )
		.always( animation.opts.always );
}

jQuery.Animation = jQuery.extend( Animation, {

	tweeners: {
		"*": [ function( prop, value ) {
			var tween = this.createTween( prop, value );
			adjustCSS( tween.elem, prop, rcssNum.exec( value ), tween );
			return tween;
		} ]
	},

	tweener: function( props, callback ) {
		if ( jQuery.isFunction( props ) ) {
			callback = props;
			props = [ "*" ];
		} else {
			props = props.match( rnotwhite );
		}

		var prop,
			index = 0,
			length = props.length;

		for ( ; index < length ; index++ ) {
			prop = props[ index ];
			Animation.tweeners[ prop ] = Animation.tweeners[ prop ] || [];
			Animation.tweeners[ prop ].unshift( callback );
		}
	},

	prefilters: [ defaultPrefilter ],

	prefilter: function( callback, prepend ) {
		if ( prepend ) {
			Animation.prefilters.unshift( callback );
		} else {
			Animation.prefilters.push( callback );
		}
	}
} );

jQuery.speed = function( speed, easing, fn ) {
	var opt = speed && typeof speed === "object" ? jQuery.extend( {}, speed ) : {
		complete: fn || !fn && easing ||
			jQuery.isFunction( speed ) && speed,
		duration: speed,
		easing: fn && easing || easing && !jQuery.isFunction( easing ) && easing
	};

	opt.duration = jQuery.fx.off ? 0 : typeof opt.duration === "number" ? opt.duration :
		opt.duration in jQuery.fx.speeds ?
			jQuery.fx.speeds[ opt.duration ] : jQuery.fx.speeds._default;

	// normalize opt.queue - true/undefined/null -> "fx"
	if ( opt.queue == null || opt.queue === true ) {
		opt.queue = "fx";
	}

	// Queueing
	opt.old = opt.complete;

	opt.complete = function() {
		if ( jQuery.isFunction( opt.old ) ) {
			opt.old.call( this );
		}

		if ( opt.queue ) {
			jQuery.dequeue( this, opt.queue );
		}
	};

	return opt;
};

jQuery.fn.extend( {
	fadeTo: function( speed, to, easing, callback ) {

		// show any hidden elements after setting opacity to 0
		return this.filter( isHidden ).css( "opacity", 0 ).show()

			// animate to the value specified
			.end().animate( { opacity: to }, speed, easing, callback );
	},
	animate: function( prop, speed, easing, callback ) {
		var empty = jQuery.isEmptyObject( prop ),
			optall = jQuery.speed( speed, easing, callback ),
			doAnimation = function() {

				// Operate on a copy of prop so per-property easing won't be lost
				var anim = Animation( this, jQuery.extend( {}, prop ), optall );

				// Empty animations, or finishing resolves immediately
				if ( empty || jQuery._data( this, "finish" ) ) {
					anim.stop( true );
				}
			};
			doAnimation.finish = doAnimation;

		return empty || optall.queue === false ?
			this.each( doAnimation ) :
			this.queue( optall.queue, doAnimation );
	},
	stop: function( type, clearQueue, gotoEnd ) {
		var stopQueue = function( hooks ) {
			var stop = hooks.stop;
			delete hooks.stop;
			stop( gotoEnd );
		};

		if ( typeof type !== "string" ) {
			gotoEnd = clearQueue;
			clearQueue = type;
			type = undefined;
		}
		if ( clearQueue && type !== false ) {
			this.queue( type || "fx", [] );
		}

		return this.each( function() {
			var dequeue = true,
				index = type != null && type + "queueHooks",
				timers = jQuery.timers,
				data = jQuery._data( this );

			if ( index ) {
				if ( data[ index ] && data[ index ].stop ) {
					stopQueue( data[ index ] );
				}
			} else {
				for ( index in data ) {
					if ( data[ index ] && data[ index ].stop && rrun.test( index ) ) {
						stopQueue( data[ index ] );
					}
				}
			}

			for ( index = timers.length; index--; ) {
				if ( timers[ index ].elem === this &&
					( type == null || timers[ index ].queue === type ) ) {

					timers[ index ].anim.stop( gotoEnd );
					dequeue = false;
					timers.splice( index, 1 );
				}
			}

			// start the next in the queue if the last step wasn't forced
			// timers currently will call their complete callbacks, which will dequeue
			// but only if they were gotoEnd
			if ( dequeue || !gotoEnd ) {
				jQuery.dequeue( this, type );
			}
		} );
	},
	finish: function( type ) {
		if ( type !== false ) {
			type = type || "fx";
		}
		return this.each( function() {
			var index,
				data = jQuery._data( this ),
				queue = data[ type + "queue" ],
				hooks = data[ type + "queueHooks" ],
				timers = jQuery.timers,
				length = queue ? queue.length : 0;

			// enable finishing flag on private data
			data.finish = true;

			// empty the queue first
			jQuery.queue( this, type, [] );

			if ( hooks && hooks.stop ) {
				hooks.stop.call( this, true );
			}

			// look for any active animations, and finish them
			for ( index = timers.length; index--; ) {
				if ( timers[ index ].elem === this && timers[ index ].queue === type ) {
					timers[ index ].anim.stop( true );
					timers.splice( index, 1 );
				}
			}

			// look for any animations in the old queue and finish them
			for ( index = 0; index < length; index++ ) {
				if ( queue[ index ] && queue[ index ].finish ) {
					queue[ index ].finish.call( this );
				}
			}

			// turn off finishing flag
			delete data.finish;
		} );
	}
} );

jQuery.each( [ "toggle", "show", "hide" ], function( i, name ) {
	var cssFn = jQuery.fn[ name ];
	jQuery.fn[ name ] = function( speed, easing, callback ) {
		return speed == null || typeof speed === "boolean" ?
			cssFn.apply( this, arguments ) :
			this.animate( genFx( name, true ), speed, easing, callback );
	};
} );

// Generate shortcuts for custom animations
jQuery.each( {
	slideDown: genFx( "show" ),
	slideUp: genFx( "hide" ),
	slideToggle: genFx( "toggle" ),
	fadeIn: { opacity: "show" },
	fadeOut: { opacity: "hide" },
	fadeToggle: { opacity: "toggle" }
}, function( name, props ) {
	jQuery.fn[ name ] = function( speed, easing, callback ) {
		return this.animate( props, speed, easing, callback );
	};
} );

jQuery.timers = [];
jQuery.fx.tick = function() {
	var timer,
		timers = jQuery.timers,
		i = 0;

	fxNow = jQuery.now();

	for ( ; i < timers.length; i++ ) {
		timer = timers[ i ];

		// Checks the timer has not already been removed
		if ( !timer() && timers[ i ] === timer ) {
			timers.splice( i--, 1 );
		}
	}

	if ( !timers.length ) {
		jQuery.fx.stop();
	}
	fxNow = undefined;
};

jQuery.fx.timer = function( timer ) {
	jQuery.timers.push( timer );
	if ( timer() ) {
		jQuery.fx.start();
	} else {
		jQuery.timers.pop();
	}
};

jQuery.fx.interval = 13;

jQuery.fx.start = function() {
	if ( !timerId ) {
		timerId = window.setInterval( jQuery.fx.tick, jQuery.fx.interval );
	}
};

jQuery.fx.stop = function() {
	window.clearInterval( timerId );
	timerId = null;
};

jQuery.fx.speeds = {
	slow: 600,
	fast: 200,

	// Default speed
	_default: 400
};


// Based off of the plugin by Clint Helfers, with permission.
// http://web.archive.org/web/20100324014747/http://blindsignals.com/index.php/2009/07/jquery-delay/
jQuery.fn.delay = function( time, type ) {
	time = jQuery.fx ? jQuery.fx.speeds[ time ] || time : time;
	type = type || "fx";

	return this.queue( type, function( next, hooks ) {
		var timeout = window.setTimeout( next, time );
		hooks.stop = function() {
			window.clearTimeout( timeout );
		};
	} );
};


( function() {
	var a,
		input = document.createElement( "input" ),
		div = document.createElement( "div" ),
		select = document.createElement( "select" ),
		opt = select.appendChild( document.createElement( "option" ) );

	// Setup
	div = document.createElement( "div" );
	div.setAttribute( "className", "t" );
	div.innerHTML = "  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>";
	a = div.getElementsByTagName( "a" )[ 0 ];

	// Support: Windows Web Apps (WWA)
	// `type` must use .setAttribute for WWA (#14901)
	input.setAttribute( "type", "checkbox" );
	div.appendChild( input );

	a = div.getElementsByTagName( "a" )[ 0 ];

	// First batch of tests.
	a.style.cssText = "top:1px";

	// Test setAttribute on camelCase class.
	// If it works, we need attrFixes when doing get/setAttribute (ie6/7)
	support.getSetAttribute = div.className !== "t";

	// Get the style information from getAttribute
	// (IE uses .cssText instead)
	support.style = /top/.test( a.getAttribute( "style" ) );

	// Make sure that URLs aren't manipulated
	// (IE normalizes it by default)
	support.hrefNormalized = a.getAttribute( "href" ) === "/a";

	// Check the default checkbox/radio value ("" on WebKit; "on" elsewhere)
	support.checkOn = !!input.value;

	// Make sure that a selected-by-default option has a working selected property.
	// (WebKit defaults to false instead of true, IE too, if it's in an optgroup)
	support.optSelected = opt.selected;

	// Tests for enctype support on a form (#6743)
	support.enctype = !!document.createElement( "form" ).enctype;

	// Make sure that the options inside disabled selects aren't marked as disabled
	// (WebKit marks them as disabled)
	select.disabled = true;
	support.optDisabled = !opt.disabled;

	// Support: IE8 only
	// Check if we can trust getAttribute("value")
	input = document.createElement( "input" );
	input.setAttribute( "value", "" );
	support.input = input.getAttribute( "value" ) === "";

	// Check if an input maintains its value after becoming a radio
	input.value = "t";
	input.setAttribute( "type", "radio" );
	support.radioValue = input.value === "t";
} )();


var rreturn = /\r/g,
	rspaces = /[\x20\t\r\n\f]+/g;

jQuery.fn.extend( {
	val: function( value ) {
		var hooks, ret, isFunction,
			elem = this[ 0 ];

		if ( !arguments.length ) {
			if ( elem ) {
				hooks = jQuery.valHooks[ elem.type ] ||
					jQuery.valHooks[ elem.nodeName.toLowerCase() ];

				if (
					hooks &&
					"get" in hooks &&
					( ret = hooks.get( elem, "value" ) ) !== undefined
				) {
					return ret;
				}

				ret = elem.value;

				return typeof ret === "string" ?

					// handle most common string cases
					ret.replace( rreturn, "" ) :

					// handle cases where value is null/undef or number
					ret == null ? "" : ret;
			}

			return;
		}

		isFunction = jQuery.isFunction( value );

		return this.each( function( i ) {
			var val;

			if ( this.nodeType !== 1 ) {
				return;
			}

			if ( isFunction ) {
				val = value.call( this, i, jQuery( this ).val() );
			} else {
				val = value;
			}

			// Treat null/undefined as ""; convert numbers to string
			if ( val == null ) {
				val = "";
			} else if ( typeof val === "number" ) {
				val += "";
			} else if ( jQuery.isArray( val ) ) {
				val = jQuery.map( val, function( value ) {
					return value == null ? "" : value + "";
				} );
			}

			hooks = jQuery.valHooks[ this.type ] || jQuery.valHooks[ this.nodeName.toLowerCase() ];

			// If set returns undefined, fall back to normal setting
			if ( !hooks || !( "set" in hooks ) || hooks.set( this, val, "value" ) === undefined ) {
				this.value = val;
			}
		} );
	}
} );

jQuery.extend( {
	valHooks: {
		option: {
			get: function( elem ) {
				var val = jQuery.find.attr( elem, "value" );
				return val != null ?
					val :

					// Support: IE10-11+
					// option.text throws exceptions (#14686, #14858)
					// Strip and collapse whitespace
					// https://html.spec.whatwg.org/#strip-and-collapse-whitespace
					jQuery.trim( jQuery.text( elem ) ).replace( rspaces, " " );
			}
		},
		select: {
			get: function( elem ) {
				var value, option,
					options = elem.options,
					index = elem.selectedIndex,
					one = elem.type === "select-one" || index < 0,
					values = one ? null : [],
					max = one ? index + 1 : options.length,
					i = index < 0 ?
						max :
						one ? index : 0;

				// Loop through all the selected options
				for ( ; i < max; i++ ) {
					option = options[ i ];

					// oldIE doesn't update selected after form reset (#2551)
					if ( ( option.selected || i === index ) &&

							// Don't return options that are disabled or in a disabled optgroup
							( support.optDisabled ?
								!option.disabled :
								option.getAttribute( "disabled" ) === null ) &&
							( !option.parentNode.disabled ||
								!jQuery.nodeName( option.parentNode, "optgroup" ) ) ) {

						// Get the specific value for the option
						value = jQuery( option ).val();

						// We don't need an array for one selects
						if ( one ) {
							return value;
						}

						// Multi-Selects return an array
						values.push( value );
					}
				}

				return values;
			},

			set: function( elem, value ) {
				var optionSet, option,
					options = elem.options,
					values = jQuery.makeArray( value ),
					i = options.length;

				while ( i-- ) {
					option = options[ i ];

					if ( jQuery.inArray( jQuery.valHooks.option.get( option ), values ) > -1 ) {

						// Support: IE6
						// When new option element is added to select box we need to
						// force reflow of newly added node in order to workaround delay
						// of initialization properties
						try {
							option.selected = optionSet = true;

						} catch ( _ ) {

							// Will be executed only in IE6
							option.scrollHeight;
						}

					} else {
						option.selected = false;
					}
				}

				// Force browsers to behave consistently when non-matching value is set
				if ( !optionSet ) {
					elem.selectedIndex = -1;
				}

				return options;
			}
		}
	}
} );

// Radios and checkboxes getter/setter
jQuery.each( [ "radio", "checkbox" ], function() {
	jQuery.valHooks[ this ] = {
		set: function( elem, value ) {
			if ( jQuery.isArray( value ) ) {
				return ( elem.checked = jQuery.inArray( jQuery( elem ).val(), value ) > -1 );
			}
		}
	};
	if ( !support.checkOn ) {
		jQuery.valHooks[ this ].get = function( elem ) {
			return elem.getAttribute( "value" ) === null ? "on" : elem.value;
		};
	}
} );




var nodeHook, boolHook,
	attrHandle = jQuery.expr.attrHandle,
	ruseDefault = /^(?:checked|selected)$/i,
	getSetAttribute = support.getSetAttribute,
	getSetInput = support.input;

jQuery.fn.extend( {
	attr: function( name, value ) {
		return access( this, jQuery.attr, name, value, arguments.length > 1 );
	},

	removeAttr: function( name ) {
		return this.each( function() {
			jQuery.removeAttr( this, name );
		} );
	}
} );

jQuery.extend( {
	attr: function( elem, name, value ) {
		var ret, hooks,
			nType = elem.nodeType;

		// Don't get/set attributes on text, comment and attribute nodes
		if ( nType === 3 || nType === 8 || nType === 2 ) {
			return;
		}

		// Fallback to prop when attributes are not supported
		if ( typeof elem.getAttribute === "undefined" ) {
			return jQuery.prop( elem, name, value );
		}

		// All attributes are lowercase
		// Grab necessary hook if one is defined
		if ( nType !== 1 || !jQuery.isXMLDoc( elem ) ) {
			name = name.toLowerCase();
			hooks = jQuery.attrHooks[ name ] ||
				( jQuery.expr.match.bool.test( name ) ? boolHook : nodeHook );
		}

		if ( value !== undefined ) {
			if ( value === null ) {
				jQuery.removeAttr( elem, name );
				return;
			}

			if ( hooks && "set" in hooks &&
				( ret = hooks.set( elem, value, name ) ) !== undefined ) {
				return ret;
			}

			elem.setAttribute( name, value + "" );
			return value;
		}

		if ( hooks && "get" in hooks && ( ret = hooks.get( elem, name ) ) !== null ) {
			return ret;
		}

		ret = jQuery.find.attr( elem, name );

		// Non-existent attributes return null, we normalize to undefined
		return ret == null ? undefined : ret;
	},

	attrHooks: {
		type: {
			set: function( elem, value ) {
				if ( !support.radioValue && value === "radio" &&
					jQuery.nodeName( elem, "input" ) ) {

					// Setting the type on a radio button after the value resets the value in IE8-9
					// Reset value to default in case type is set after value during creation
					var val = elem.value;
					elem.setAttribute( "type", value );
					if ( val ) {
						elem.value = val;
					}
					return value;
				}
			}
		}
	},

	removeAttr: function( elem, value ) {
		var name, propName,
			i = 0,
			attrNames = value && value.match( rnotwhite );

		if ( attrNames && elem.nodeType === 1 ) {
			while ( ( name = attrNames[ i++ ] ) ) {
				propName = jQuery.propFix[ name ] || name;

				// Boolean attributes get special treatment (#10870)
				if ( jQuery.expr.match.bool.test( name ) ) {

					// Set corresponding property to false
					if ( getSetInput && getSetAttribute || !ruseDefault.test( name ) ) {
						elem[ propName ] = false;

					// Support: IE<9
					// Also clear defaultChecked/defaultSelected (if appropriate)
					} else {
						elem[ jQuery.camelCase( "default-" + name ) ] =
							elem[ propName ] = false;
					}

				// See #9699 for explanation of this approach (setting first, then removal)
				} else {
					jQuery.attr( elem, name, "" );
				}

				elem.removeAttribute( getSetAttribute ? name : propName );
			}
		}
	}
} );

// Hooks for boolean attributes
boolHook = {
	set: function( elem, value, name ) {
		if ( value === false ) {

			// Remove boolean attributes when set to false
			jQuery.removeAttr( elem, name );
		} else if ( getSetInput && getSetAttribute || !ruseDefault.test( name ) ) {

			// IE<8 needs the *property* name
			elem.setAttribute( !getSetAttribute && jQuery.propFix[ name ] || name, name );

		} else {

			// Support: IE<9
			// Use defaultChecked and defaultSelected for oldIE
			elem[ jQuery.camelCase( "default-" + name ) ] = elem[ name ] = true;
		}
		return name;
	}
};

jQuery.each( jQuery.expr.match.bool.source.match( /\w+/g ), function( i, name ) {
	var getter = attrHandle[ name ] || jQuery.find.attr;

	if ( getSetInput && getSetAttribute || !ruseDefault.test( name ) ) {
		attrHandle[ name ] = function( elem, name, isXML ) {
			var ret, handle;
			if ( !isXML ) {

				// Avoid an infinite loop by temporarily removing this function from the getter
				handle = attrHandle[ name ];
				attrHandle[ name ] = ret;
				ret = getter( elem, name, isXML ) != null ?
					name.toLowerCase() :
					null;
				attrHandle[ name ] = handle;
			}
			return ret;
		};
	} else {
		attrHandle[ name ] = function( elem, name, isXML ) {
			if ( !isXML ) {
				return elem[ jQuery.camelCase( "default-" + name ) ] ?
					name.toLowerCase() :
					null;
			}
		};
	}
} );

// fix oldIE attroperties
if ( !getSetInput || !getSetAttribute ) {
	jQuery.attrHooks.value = {
		set: function( elem, value, name ) {
			if ( jQuery.nodeName( elem, "input" ) ) {

				// Does not return so that setAttribute is also used
				elem.defaultValue = value;
			} else {

				// Use nodeHook if defined (#1954); otherwise setAttribute is fine
				return nodeHook && nodeHook.set( elem, value, name );
			}
		}
	};
}

// IE6/7 do not support getting/setting some attributes with get/setAttribute
if ( !getSetAttribute ) {

	// Use this for any attribute in IE6/7
	// This fixes almost every IE6/7 issue
	nodeHook = {
		set: function( elem, value, name ) {

			// Set the existing or create a new attribute node
			var ret = elem.getAttributeNode( name );
			if ( !ret ) {
				elem.setAttributeNode(
					( ret = elem.ownerDocument.createAttribute( name ) )
				);
			}

			ret.value = value += "";

			// Break association with cloned elements by also using setAttribute (#9646)
			if ( name === "value" || value === elem.getAttribute( name ) ) {
				return value;
			}
		}
	};

	// Some attributes are constructed with empty-string values when not defined
	attrHandle.id = attrHandle.name = attrHandle.coords =
		function( elem, name, isXML ) {
			var ret;
			if ( !isXML ) {
				return ( ret = elem.getAttributeNode( name ) ) && ret.value !== "" ?
					ret.value :
					null;
			}
		};

	// Fixing value retrieval on a button requires this module
	jQuery.valHooks.button = {
		get: function( elem, name ) {
			var ret = elem.getAttributeNode( name );
			if ( ret && ret.specified ) {
				return ret.value;
			}
		},
		set: nodeHook.set
	};

	// Set contenteditable to false on removals(#10429)
	// Setting to empty string throws an error as an invalid value
	jQuery.attrHooks.contenteditable = {
		set: function( elem, value, name ) {
			nodeHook.set( elem, value === "" ? false : value, name );
		}
	};

	// Set width and height to auto instead of 0 on empty string( Bug #8150 )
	// This is for removals
	jQuery.each( [ "width", "height" ], function( i, name ) {
		jQuery.attrHooks[ name ] = {
			set: function( elem, value ) {
				if ( value === "" ) {
					elem.setAttribute( name, "auto" );
					return value;
				}
			}
		};
	} );
}

if ( !support.style ) {
	jQuery.attrHooks.style = {
		get: function( elem ) {

			// Return undefined in the case of empty string
			// Note: IE uppercases css property names, but if we were to .toLowerCase()
			// .cssText, that would destroy case sensitivity in URL's, like in "background"
			return elem.style.cssText || undefined;
		},
		set: function( elem, value ) {
			return ( elem.style.cssText = value + "" );
		}
	};
}




var rfocusable = /^(?:input|select|textarea|button|object)$/i,
	rclickable = /^(?:a|area)$/i;

jQuery.fn.extend( {
	prop: function( name, value ) {
		return access( this, jQuery.prop, name, value, arguments.length > 1 );
	},

	removeProp: function( name ) {
		name = jQuery.propFix[ name ] || name;
		return this.each( function() {

			// try/catch handles cases where IE balks (such as removing a property on window)
			try {
				this[ name ] = undefined;
				delete this[ name ];
			} catch ( e ) {}
		} );
	}
} );

jQuery.extend( {
	prop: function( elem, name, value ) {
		var ret, hooks,
			nType = elem.nodeType;

		// Don't get/set properties on text, comment and attribute nodes
		if ( nType === 3 || nType === 8 || nType === 2 ) {
			return;
		}

		if ( nType !== 1 || !jQuery.isXMLDoc( elem ) ) {

			// Fix name and attach hooks
			name = jQuery.propFix[ name ] || name;
			hooks = jQuery.propHooks[ name ];
		}

		if ( value !== undefined ) {
			if ( hooks && "set" in hooks &&
				( ret = hooks.set( elem, value, name ) ) !== undefined ) {
				return ret;
			}

			return ( elem[ name ] = value );
		}

		if ( hooks && "get" in hooks && ( ret = hooks.get( elem, name ) ) !== null ) {
			return ret;
		}

		return elem[ name ];
	},

	propHooks: {
		tabIndex: {
			get: function( elem ) {

				// elem.tabIndex doesn't always return the
				// correct value when it hasn't been explicitly set
				// http://fluidproject.org/blog/2008/01/09/getting-setting-and-removing-tabindex-values-with-javascript/
				// Use proper attribute retrieval(#12072)
				var tabindex = jQuery.find.attr( elem, "tabindex" );

				return tabindex ?
					parseInt( tabindex, 10 ) :
					rfocusable.test( elem.nodeName ) ||
						rclickable.test( elem.nodeName ) && elem.href ?
							0 :
							-1;
			}
		}
	},

	propFix: {
		"for": "htmlFor",
		"class": "className"
	}
} );

// Some attributes require a special call on IE
// http://msdn.microsoft.com/en-us/library/ms536429%28VS.85%29.aspx
if ( !support.hrefNormalized ) {

	// href/src property should get the full normalized URL (#10299/#12915)
	jQuery.each( [ "href", "src" ], function( i, name ) {
		jQuery.propHooks[ name ] = {
			get: function( elem ) {
				return elem.getAttribute( name, 4 );
			}
		};
	} );
}

// Support: Safari, IE9+
// Accessing the selectedIndex property
// forces the browser to respect setting selected
// on the option
// The getter ensures a default option is selected
// when in an optgroup
if ( !support.optSelected ) {
	jQuery.propHooks.selected = {
		get: function( elem ) {
			var parent = elem.parentNode;

			if ( parent ) {
				parent.selectedIndex;

				// Make sure that it also works with optgroups, see #5701
				if ( parent.parentNode ) {
					parent.parentNode.selectedIndex;
				}
			}
			return null;
		},
		set: function( elem ) {
			var parent = elem.parentNode;
			if ( parent ) {
				parent.selectedIndex;

				if ( parent.parentNode ) {
					parent.parentNode.selectedIndex;
				}
			}
		}
	};
}

jQuery.each( [
	"tabIndex",
	"readOnly",
	"maxLength",
	"cellSpacing",
	"cellPadding",
	"rowSpan",
	"colSpan",
	"useMap",
	"frameBorder",
	"contentEditable"
], function() {
	jQuery.propFix[ this.toLowerCase() ] = this;
} );

// IE6/7 call enctype encoding
if ( !support.enctype ) {
	jQuery.propFix.enctype = "encoding";
}




var rclass = /[\t\r\n\f]/g;

function getClass( elem ) {
	return jQuery.attr( elem, "class" ) || "";
}

jQuery.fn.extend( {
	addClass: function( value ) {
		var classes, elem, cur, curValue, clazz, j, finalValue,
			i = 0;

		if ( jQuery.isFunction( value ) ) {
			return this.each( function( j ) {
				jQuery( this ).addClass( value.call( this, j, getClass( this ) ) );
			} );
		}

		if ( typeof value === "string" && value ) {
			classes = value.match( rnotwhite ) || [];

			while ( ( elem = this[ i++ ] ) ) {
				curValue = getClass( elem );
				cur = elem.nodeType === 1 &&
					( " " + curValue + " " ).replace( rclass, " " );

				if ( cur ) {
					j = 0;
					while ( ( clazz = classes[ j++ ] ) ) {
						if ( cur.indexOf( " " + clazz + " " ) < 0 ) {
							cur += clazz + " ";
						}
					}

					// only assign if different to avoid unneeded rendering.
					finalValue = jQuery.trim( cur );
					if ( curValue !== finalValue ) {
						jQuery.attr( elem, "class", finalValue );
					}
				}
			}
		}

		return this;
	},

	removeClass: function( value ) {
		var classes, elem, cur, curValue, clazz, j, finalValue,
			i = 0;

		if ( jQuery.isFunction( value ) ) {
			return this.each( function( j ) {
				jQuery( this ).removeClass( value.call( this, j, getClass( this ) ) );
			} );
		}

		if ( !arguments.length ) {
			return this.attr( "class", "" );
		}

		if ( typeof value === "string" && value ) {
			classes = value.match( rnotwhite ) || [];

			while ( ( elem = this[ i++ ] ) ) {
				curValue = getClass( elem );

				// This expression is here for better compressibility (see addClass)
				cur = elem.nodeType === 1 &&
					( " " + curValue + " " ).replace( rclass, " " );

				if ( cur ) {
					j = 0;
					while ( ( clazz = classes[ j++ ] ) ) {

						// Remove *all* instances
						while ( cur.indexOf( " " + clazz + " " ) > -1 ) {
							cur = cur.replace( " " + clazz + " ", " " );
						}
					}

					// Only assign if different to avoid unneeded rendering.
					finalValue = jQuery.trim( cur );
					if ( curValue !== finalValue ) {
						jQuery.attr( elem, "class", finalValue );
					}
				}
			}
		}

		return this;
	},

	toggleClass: function( value, stateVal ) {
		var type = typeof value;

		if ( typeof stateVal === "boolean" && type === "string" ) {
			return stateVal ? this.addClass( value ) : this.removeClass( value );
		}

		if ( jQuery.isFunction( value ) ) {
			return this.each( function( i ) {
				jQuery( this ).toggleClass(
					value.call( this, i, getClass( this ), stateVal ),
					stateVal
				);
			} );
		}

		return this.each( function() {
			var className, i, self, classNames;

			if ( type === "string" ) {

				// Toggle individual class names
				i = 0;
				self = jQuery( this );
				classNames = value.match( rnotwhite ) || [];

				while ( ( className = classNames[ i++ ] ) ) {

					// Check each className given, space separated list
					if ( self.hasClass( className ) ) {
						self.removeClass( className );
					} else {
						self.addClass( className );
					}
				}

			// Toggle whole class name
			} else if ( value === undefined || type === "boolean" ) {
				className = getClass( this );
				if ( className ) {

					// store className if set
					jQuery._data( this, "__className__", className );
				}

				// If the element has a class name or if we're passed "false",
				// then remove the whole classname (if there was one, the above saved it).
				// Otherwise bring back whatever was previously saved (if anything),
				// falling back to the empty string if nothing was stored.
				jQuery.attr( this, "class",
					className || value === false ?
					"" :
					jQuery._data( this, "__className__" ) || ""
				);
			}
		} );
	},

	hasClass: function( selector ) {
		var className, elem,
			i = 0;

		className = " " + selector + " ";
		while ( ( elem = this[ i++ ] ) ) {
			if ( elem.nodeType === 1 &&
				( " " + getClass( elem ) + " " ).replace( rclass, " " )
					.indexOf( className ) > -1
			) {
				return true;
			}
		}

		return false;
	}
} );




// Return jQuery for attributes-only inclusion


jQuery.each( ( "blur focus focusin focusout load resize scroll unload click dblclick " +
	"mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave " +
	"change select submit keydown keypress keyup error contextmenu" ).split( " " ),
	function( i, name ) {

	// Handle event binding
	jQuery.fn[ name ] = function( data, fn ) {
		return arguments.length > 0 ?
			this.on( name, null, data, fn ) :
			this.trigger( name );
	};
} );

jQuery.fn.extend( {
	hover: function( fnOver, fnOut ) {
		return this.mouseenter( fnOver ).mouseleave( fnOut || fnOver );
	}
} );


var location = window.location;

var nonce = jQuery.now();

var rquery = ( /\?/ );



var rvalidtokens = /(,)|(\[|{)|(}|])|"(?:[^"\\\r\n]|\\["\\\/bfnrt]|\\u[\da-fA-F]{4})*"\s*:?|true|false|null|-?(?!0\d)\d+(?:\.\d+|)(?:[eE][+-]?\d+|)/g;

jQuery.parseJSON = function( data ) {

	// Attempt to parse using the native JSON parser first
	if ( window.JSON && window.JSON.parse ) {

		// Support: Android 2.3
		// Workaround failure to string-cast null input
		return window.JSON.parse( data + "" );
	}

	var requireNonComma,
		depth = null,
		str = jQuery.trim( data + "" );

	// Guard against invalid (and possibly dangerous) input by ensuring that nothing remains
	// after removing valid tokens
	return str && !jQuery.trim( str.replace( rvalidtokens, function( token, comma, open, close ) {

		// Force termination if we see a misplaced comma
		if ( requireNonComma && comma ) {
			depth = 0;
		}

		// Perform no more replacements after returning to outermost depth
		if ( depth === 0 ) {
			return token;
		}

		// Commas must not follow "[", "{", or ","
		requireNonComma = open || comma;

		// Determine new depth
		// array/object open ("[" or "{"): depth += true - false (increment)
		// array/object close ("]" or "}"): depth += false - true (decrement)
		// other cases ("," or primitive): depth += true - true (numeric cast)
		depth += !close - !open;

		// Remove this token
		return "";
	} ) ) ?
		( Function( "return " + str ) )() :
		jQuery.error( "Invalid JSON: " + data );
};


// Cross-browser xml parsing
jQuery.parseXML = function( data ) {
	var xml, tmp;
	if ( !data || typeof data !== "string" ) {
		return null;
	}
	try {
		if ( window.DOMParser ) { // Standard
			tmp = new window.DOMParser();
			xml = tmp.parseFromString( data, "text/xml" );
		} else { // IE
			xml = new window.ActiveXObject( "Microsoft.XMLDOM" );
			xml.async = "false";
			xml.loadXML( data );
		}
	} catch ( e ) {
		xml = undefined;
	}
	if ( !xml || !xml.documentElement || xml.getElementsByTagName( "parsererror" ).length ) {
		jQuery.error( "Invalid XML: " + data );
	}
	return xml;
};


var
	rhash = /#.*$/,
	rts = /([?&])_=[^&]*/,

	// IE leaves an \r character at EOL
	rheaders = /^(.*?):[ \t]*([^\r\n]*)\r?$/mg,

	// #7653, #8125, #8152: local protocol detection
	rlocalProtocol = /^(?:about|app|app-storage|.+-extension|file|res|widget):$/,
	rnoContent = /^(?:GET|HEAD)$/,
	rprotocol = /^\/\//,
	rurl = /^([\w.+-]+:)(?:\/\/(?:[^\/?#]*@|)([^\/?#:]*)(?::(\d+)|)|)/,

	/* Prefilters
	 * 1) They are useful to introduce custom dataTypes (see ajax/jsonp.js for an example)
	 * 2) These are called:
	 *    - BEFORE asking for a transport
	 *    - AFTER param serialization (s.data is a string if s.processData is true)
	 * 3) key is the dataType
	 * 4) the catchall symbol "*" can be used
	 * 5) execution will start with transport dataType and THEN continue down to "*" if needed
	 */
	prefilters = {},

	/* Transports bindings
	 * 1) key is the dataType
	 * 2) the catchall symbol "*" can be used
	 * 3) selection will start with transport dataType and THEN go to "*" if needed
	 */
	transports = {},

	// Avoid comment-prolog char sequence (#10098); must appease lint and evade compression
	allTypes = "*/".concat( "*" ),

	// Document location
	ajaxLocation = location.href,

	// Segment location into parts
	ajaxLocParts = rurl.exec( ajaxLocation.toLowerCase() ) || [];

// Base "constructor" for jQuery.ajaxPrefilter and jQuery.ajaxTransport
function addToPrefiltersOrTransports( structure ) {

	// dataTypeExpression is optional and defaults to "*"
	return function( dataTypeExpression, func ) {

		if ( typeof dataTypeExpression !== "string" ) {
			func = dataTypeExpression;
			dataTypeExpression = "*";
		}

		var dataType,
			i = 0,
			dataTypes = dataTypeExpression.toLowerCase().match( rnotwhite ) || [];

		if ( jQuery.isFunction( func ) ) {

			// For each dataType in the dataTypeExpression
			while ( ( dataType = dataTypes[ i++ ] ) ) {

				// Prepend if requested
				if ( dataType.charAt( 0 ) === "+" ) {
					dataType = dataType.slice( 1 ) || "*";
					( structure[ dataType ] = structure[ dataType ] || [] ).unshift( func );

				// Otherwise append
				} else {
					( structure[ dataType ] = structure[ dataType ] || [] ).push( func );
				}
			}
		}
	};
}

// Base inspection function for prefilters and transports
function inspectPrefiltersOrTransports( structure, options, originalOptions, jqXHR ) {

	var inspected = {},
		seekingTransport = ( structure === transports );

	function inspect( dataType ) {
		var selected;
		inspected[ dataType ] = true;
		jQuery.each( structure[ dataType ] || [], function( _, prefilterOrFactory ) {
			var dataTypeOrTransport = prefilterOrFactory( options, originalOptions, jqXHR );
			if ( typeof dataTypeOrTransport === "string" &&
				!seekingTransport && !inspected[ dataTypeOrTransport ] ) {

				options.dataTypes.unshift( dataTypeOrTransport );
				inspect( dataTypeOrTransport );
				return false;
			} else if ( seekingTransport ) {
				return !( selected = dataTypeOrTransport );
			}
		} );
		return selected;
	}

	return inspect( options.dataTypes[ 0 ] ) || !inspected[ "*" ] && inspect( "*" );
}

// A special extend for ajax options
// that takes "flat" options (not to be deep extended)
// Fixes #9887
function ajaxExtend( target, src ) {
	var deep, key,
		flatOptions = jQuery.ajaxSettings.flatOptions || {};

	for ( key in src ) {
		if ( src[ key ] !== undefined ) {
			( flatOptions[ key ] ? target : ( deep || ( deep = {} ) ) )[ key ] = src[ key ];
		}
	}
	if ( deep ) {
		jQuery.extend( true, target, deep );
	}

	return target;
}

/* Handles responses to an ajax request:
 * - finds the right dataType (mediates between content-type and expected dataType)
 * - returns the corresponding response
 */
function ajaxHandleResponses( s, jqXHR, responses ) {
	var firstDataType, ct, finalDataType, type,
		contents = s.contents,
		dataTypes = s.dataTypes;

	// Remove auto dataType and get content-type in the process
	while ( dataTypes[ 0 ] === "*" ) {
		dataTypes.shift();
		if ( ct === undefined ) {
			ct = s.mimeType || jqXHR.getResponseHeader( "Content-Type" );
		}
	}

	// Check if we're dealing with a known content-type
	if ( ct ) {
		for ( type in contents ) {
			if ( contents[ type ] && contents[ type ].test( ct ) ) {
				dataTypes.unshift( type );
				break;
			}
		}
	}

	// Check to see if we have a response for the expected dataType
	if ( dataTypes[ 0 ] in responses ) {
		finalDataType = dataTypes[ 0 ];
	} else {

		// Try convertible dataTypes
		for ( type in responses ) {
			if ( !dataTypes[ 0 ] || s.converters[ type + " " + dataTypes[ 0 ] ] ) {
				finalDataType = type;
				break;
			}
			if ( !firstDataType ) {
				firstDataType = type;
			}
		}

		// Or just use first one
		finalDataType = finalDataType || firstDataType;
	}

	// If we found a dataType
	// We add the dataType to the list if needed
	// and return the corresponding response
	if ( finalDataType ) {
		if ( finalDataType !== dataTypes[ 0 ] ) {
			dataTypes.unshift( finalDataType );
		}
		return responses[ finalDataType ];
	}
}

/* Chain conversions given the request and the original response
 * Also sets the responseXXX fields on the jqXHR instance
 */
function ajaxConvert( s, response, jqXHR, isSuccess ) {
	var conv2, current, conv, tmp, prev,
		converters = {},

		// Work with a copy of dataTypes in case we need to modify it for conversion
		dataTypes = s.dataTypes.slice();

	// Create converters map with lowercased keys
	if ( dataTypes[ 1 ] ) {
		for ( conv in s.converters ) {
			converters[ conv.toLowerCase() ] = s.converters[ conv ];
		}
	}

	current = dataTypes.shift();

	// Convert to each sequential dataType
	while ( current ) {

		if ( s.responseFields[ current ] ) {
			jqXHR[ s.responseFields[ current ] ] = response;
		}

		// Apply the dataFilter if provided
		if ( !prev && isSuccess && s.dataFilter ) {
			response = s.dataFilter( response, s.dataType );
		}

		prev = current;
		current = dataTypes.shift();

		if ( current ) {

			// There's only work to do if current dataType is non-auto
			if ( current === "*" ) {

				current = prev;

			// Convert response if prev dataType is non-auto and differs from current
			} else if ( prev !== "*" && prev !== current ) {

				// Seek a direct converter
				conv = converters[ prev + " " + current ] || converters[ "* " + current ];

				// If none found, seek a pair
				if ( !conv ) {
					for ( conv2 in converters ) {

						// If conv2 outputs current
						tmp = conv2.split( " " );
						if ( tmp[ 1 ] === current ) {

							// If prev can be converted to accepted input
							conv = converters[ prev + " " + tmp[ 0 ] ] ||
								converters[ "* " + tmp[ 0 ] ];
							if ( conv ) {

								// Condense equivalence converters
								if ( conv === true ) {
									conv = converters[ conv2 ];

								// Otherwise, insert the intermediate dataType
								} else if ( converters[ conv2 ] !== true ) {
									current = tmp[ 0 ];
									dataTypes.unshift( tmp[ 1 ] );
								}
								break;
							}
						}
					}
				}

				// Apply converter (if not an equivalence)
				if ( conv !== true ) {

					// Unless errors are allowed to bubble, catch and return them
					if ( conv && s[ "throws" ] ) { // jscs:ignore requireDotNotation
						response = conv( response );
					} else {
						try {
							response = conv( response );
						} catch ( e ) {
							return {
								state: "parsererror",
								error: conv ? e : "No conversion from " + prev + " to " + current
							};
						}
					}
				}
			}
		}
	}

	return { state: "success", data: response };
}

jQuery.extend( {

	// Counter for holding the number of active queries
	active: 0,

	// Last-Modified header cache for next request
	lastModified: {},
	etag: {},

	ajaxSettings: {
		url: ajaxLocation,
		type: "GET",
		isLocal: rlocalProtocol.test( ajaxLocParts[ 1 ] ),
		global: true,
		processData: true,
		async: true,
		contentType: "application/x-www-form-urlencoded; charset=UTF-8",
		/*
		timeout: 0,
		data: null,
		dataType: null,
		username: null,
		password: null,
		cache: null,
		throws: false,
		traditional: false,
		headers: {},
		*/

		accepts: {
			"*": allTypes,
			text: "text/plain",
			html: "text/html",
			xml: "application/xml, text/xml",
			json: "application/json, text/javascript"
		},

		contents: {
			xml: /\bxml\b/,
			html: /\bhtml/,
			json: /\bjson\b/
		},

		responseFields: {
			xml: "responseXML",
			text: "responseText",
			json: "responseJSON"
		},

		// Data converters
		// Keys separate source (or catchall "*") and destination types with a single space
		converters: {

			// Convert anything to text
			"* text": String,

			// Text to html (true = no transformation)
			"text html": true,

			// Evaluate text as a json expression
			"text json": jQuery.parseJSON,

			// Parse text as xml
			"text xml": jQuery.parseXML
		},

		// For options that shouldn't be deep extended:
		// you can add your own custom options here if
		// and when you create one that shouldn't be
		// deep extended (see ajaxExtend)
		flatOptions: {
			url: true,
			context: true
		}
	},

	// Creates a full fledged settings object into target
	// with both ajaxSettings and settings fields.
	// If target is omitted, writes into ajaxSettings.
	ajaxSetup: function( target, settings ) {
		return settings ?

			// Building a settings object
			ajaxExtend( ajaxExtend( target, jQuery.ajaxSettings ), settings ) :

			// Extending ajaxSettings
			ajaxExtend( jQuery.ajaxSettings, target );
	},

	ajaxPrefilter: addToPrefiltersOrTransports( prefilters ),
	ajaxTransport: addToPrefiltersOrTransports( transports ),

	// Main method
	ajax: function( url, options ) {

		// If url is an object, simulate pre-1.5 signature
		if ( typeof url === "object" ) {
			options = url;
			url = undefined;
		}

		// Force options to be an object
		options = options || {};

		var

			// Cross-domain detection vars
			parts,

			// Loop variable
			i,

			// URL without anti-cache param
			cacheURL,

			// Response headers as string
			responseHeadersString,

			// timeout handle
			timeoutTimer,

			// To know if global events are to be dispatched
			fireGlobals,

			transport,

			// Response headers
			responseHeaders,

			// Create the final options object
			s = jQuery.ajaxSetup( {}, options ),

			// Callbacks context
			callbackContext = s.context || s,

			// Context for global events is callbackContext if it is a DOM node or jQuery collection
			globalEventContext = s.context &&
				( callbackContext.nodeType || callbackContext.jquery ) ?
					jQuery( callbackContext ) :
					jQuery.event,

			// Deferreds
			deferred = jQuery.Deferred(),
			completeDeferred = jQuery.Callbacks( "once memory" ),

			// Status-dependent callbacks
			statusCode = s.statusCode || {},

			// Headers (they are sent all at once)
			requestHeaders = {},
			requestHeadersNames = {},

			// The jqXHR state
			state = 0,

			// Default abort message
			strAbort = "canceled",

			// Fake xhr
			jqXHR = {
				readyState: 0,

				// Builds headers hashtable if needed
				getResponseHeader: function( key ) {
					var match;
					if ( state === 2 ) {
						if ( !responseHeaders ) {
							responseHeaders = {};
							while ( ( match = rheaders.exec( responseHeadersString ) ) ) {
								responseHeaders[ match[ 1 ].toLowerCase() ] = match[ 2 ];
							}
						}
						match = responseHeaders[ key.toLowerCase() ];
					}
					return match == null ? null : match;
				},

				// Raw string
				getAllResponseHeaders: function() {
					return state === 2 ? responseHeadersString : null;
				},

				// Caches the header
				setRequestHeader: function( name, value ) {
					var lname = name.toLowerCase();
					if ( !state ) {
						name = requestHeadersNames[ lname ] = requestHeadersNames[ lname ] || name;
						requestHeaders[ name ] = value;
					}
					return this;
				},

				// Overrides response content-type header
				overrideMimeType: function( type ) {
					if ( !state ) {
						s.mimeType = type;
					}
					return this;
				},

				// Status-dependent callbacks
				statusCode: function( map ) {
					var code;
					if ( map ) {
						if ( state < 2 ) {
							for ( code in map ) {

								// Lazy-add the new callback in a way that preserves old ones
								statusCode[ code ] = [ statusCode[ code ], map[ code ] ];
							}
						} else {

							// Execute the appropriate callbacks
							jqXHR.always( map[ jqXHR.status ] );
						}
					}
					return this;
				},

				// Cancel the request
				abort: function( statusText ) {
					var finalText = statusText || strAbort;
					if ( transport ) {
						transport.abort( finalText );
					}
					done( 0, finalText );
					return this;
				}
			};

		// Attach deferreds
		deferred.promise( jqXHR ).complete = completeDeferred.add;
		jqXHR.success = jqXHR.done;
		jqXHR.error = jqXHR.fail;

		// Remove hash character (#7531: and string promotion)
		// Add protocol if not provided (#5866: IE7 issue with protocol-less urls)
		// Handle falsy url in the settings object (#10093: consistency with old signature)
		// We also use the url parameter if available
		s.url = ( ( url || s.url || ajaxLocation ) + "" )
			.replace( rhash, "" )
			.replace( rprotocol, ajaxLocParts[ 1 ] + "//" );

		// Alias method option to type as per ticket #12004
		s.type = options.method || options.type || s.method || s.type;

		// Extract dataTypes list
		s.dataTypes = jQuery.trim( s.dataType || "*" ).toLowerCase().match( rnotwhite ) || [ "" ];

		// A cross-domain request is in order when we have a protocol:host:port mismatch
		if ( s.crossDomain == null ) {
			parts = rurl.exec( s.url.toLowerCase() );
			s.crossDomain = !!( parts &&
				( parts[ 1 ] !== ajaxLocParts[ 1 ] || parts[ 2 ] !== ajaxLocParts[ 2 ] ||
					( parts[ 3 ] || ( parts[ 1 ] === "http:" ? "80" : "443" ) ) !==
						( ajaxLocParts[ 3 ] || ( ajaxLocParts[ 1 ] === "http:" ? "80" : "443" ) ) )
			);
		}

		// Convert data if not already a string
		if ( s.data && s.processData && typeof s.data !== "string" ) {
			s.data = jQuery.param( s.data, s.traditional );
		}

		// Apply prefilters
		inspectPrefiltersOrTransports( prefilters, s, options, jqXHR );

		// If request was aborted inside a prefilter, stop there
		if ( state === 2 ) {
			return jqXHR;
		}

		// We can fire global events as of now if asked to
		// Don't fire events if jQuery.event is undefined in an AMD-usage scenario (#15118)
		fireGlobals = jQuery.event && s.global;

		// Watch for a new set of requests
		if ( fireGlobals && jQuery.active++ === 0 ) {
			jQuery.event.trigger( "ajaxStart" );
		}

		// Uppercase the type
		s.type = s.type.toUpperCase();

		// Determine if request has content
		s.hasContent = !rnoContent.test( s.type );

		// Save the URL in case we're toying with the If-Modified-Since
		// and/or If-None-Match header later on
		cacheURL = s.url;

		// More options handling for requests with no content
		if ( !s.hasContent ) {

			// If data is available, append data to url
			if ( s.data ) {
				cacheURL = ( s.url += ( rquery.test( cacheURL ) ? "&" : "?" ) + s.data );

				// #9682: remove data so that it's not used in an eventual retry
				delete s.data;
			}

			// Add anti-cache in url if needed
			if ( s.cache === false ) {
				s.url = rts.test( cacheURL ) ?

					// If there is already a '_' parameter, set its value
					cacheURL.replace( rts, "$1_=" + nonce++ ) :

					// Otherwise add one to the end
					cacheURL + ( rquery.test( cacheURL ) ? "&" : "?" ) + "_=" + nonce++;
			}
		}

		// Set the If-Modified-Since and/or If-None-Match header, if in ifModified mode.
		if ( s.ifModified ) {
			if ( jQuery.lastModified[ cacheURL ] ) {
				jqXHR.setRequestHeader( "If-Modified-Since", jQuery.lastModified[ cacheURL ] );
			}
			if ( jQuery.etag[ cacheURL ] ) {
				jqXHR.setRequestHeader( "If-None-Match", jQuery.etag[ cacheURL ] );
			}
		}

		// Set the correct header, if data is being sent
		if ( s.data && s.hasContent && s.contentType !== false || options.contentType ) {
			jqXHR.setRequestHeader( "Content-Type", s.contentType );
		}

		// Set the Accepts header for the server, depending on the dataType
		jqXHR.setRequestHeader(
			"Accept",
			s.dataTypes[ 0 ] && s.accepts[ s.dataTypes[ 0 ] ] ?
				s.accepts[ s.dataTypes[ 0 ] ] +
					( s.dataTypes[ 0 ] !== "*" ? ", " + allTypes + "; q=0.01" : "" ) :
				s.accepts[ "*" ]
		);

		// Check for headers option
		for ( i in s.headers ) {
			jqXHR.setRequestHeader( i, s.headers[ i ] );
		}

		// Allow custom headers/mimetypes and early abort
		if ( s.beforeSend &&
			( s.beforeSend.call( callbackContext, jqXHR, s ) === false || state === 2 ) ) {

			// Abort if not done already and return
			return jqXHR.abort();
		}

		// aborting is no longer a cancellation
		strAbort = "abort";

		// Install callbacks on deferreds
		for ( i in { success: 1, error: 1, complete: 1 } ) {
			jqXHR[ i ]( s[ i ] );
		}

		// Get transport
		transport = inspectPrefiltersOrTransports( transports, s, options, jqXHR );

		// If no transport, we auto-abort
		if ( !transport ) {
			done( -1, "No Transport" );
		} else {
			jqXHR.readyState = 1;

			// Send global event
			if ( fireGlobals ) {
				globalEventContext.trigger( "ajaxSend", [ jqXHR, s ] );
			}

			// If request was aborted inside ajaxSend, stop there
			if ( state === 2 ) {
				return jqXHR;
			}

			// Timeout
			if ( s.async && s.timeout > 0 ) {
				timeoutTimer = window.setTimeout( function() {
					jqXHR.abort( "timeout" );
				}, s.timeout );
			}

			try {
				state = 1;
				transport.send( requestHeaders, done );
			} catch ( e ) {

				// Propagate exception as error if not done
				if ( state < 2 ) {
					done( -1, e );

				// Simply rethrow otherwise
				} else {
					throw e;
				}
			}
		}

		// Callback for when everything is done
		function done( status, nativeStatusText, responses, headers ) {
			var isSuccess, success, error, response, modified,
				statusText = nativeStatusText;

			// Called once
			if ( state === 2 ) {
				return;
			}

			// State is "done" now
			state = 2;

			// Clear timeout if it exists
			if ( timeoutTimer ) {
				window.clearTimeout( timeoutTimer );
			}

			// Dereference transport for early garbage collection
			// (no matter how long the jqXHR object will be used)
			transport = undefined;

			// Cache response headers
			responseHeadersString = headers || "";

			// Set readyState
			jqXHR.readyState = status > 0 ? 4 : 0;

			// Determine if successful
			isSuccess = status >= 200 && status < 300 || status === 304;

			// Get response data
			if ( responses ) {
				response = ajaxHandleResponses( s, jqXHR, responses );
			}

			// Convert no matter what (that way responseXXX fields are always set)
			response = ajaxConvert( s, response, jqXHR, isSuccess );

			// If successful, handle type chaining
			if ( isSuccess ) {

				// Set the If-Modified-Since and/or If-None-Match header, if in ifModified mode.
				if ( s.ifModified ) {
					modified = jqXHR.getResponseHeader( "Last-Modified" );
					if ( modified ) {
						jQuery.lastModified[ cacheURL ] = modified;
					}
					modified = jqXHR.getResponseHeader( "etag" );
					if ( modified ) {
						jQuery.etag[ cacheURL ] = modified;
					}
				}

				// if no content
				if ( status === 204 || s.type === "HEAD" ) {
					statusText = "nocontent";

				// if not modified
				} else if ( status === 304 ) {
					statusText = "notmodified";

				// If we have data, let's convert it
				} else {
					statusText = response.state;
					success = response.data;
					error = response.error;
					isSuccess = !error;
				}
			} else {

				// We extract error from statusText
				// then normalize statusText and status for non-aborts
				error = statusText;
				if ( status || !statusText ) {
					statusText = "error";
					if ( status < 0 ) {
						status = 0;
					}
				}
			}

			// Set data for the fake xhr object
			jqXHR.status = status;
			jqXHR.statusText = ( nativeStatusText || statusText ) + "";

			// Success/Error
			if ( isSuccess ) {
				deferred.resolveWith( callbackContext, [ success, statusText, jqXHR ] );
			} else {
				deferred.rejectWith( callbackContext, [ jqXHR, statusText, error ] );
			}

			// Status-dependent callbacks
			jqXHR.statusCode( statusCode );
			statusCode = undefined;

			if ( fireGlobals ) {
				globalEventContext.trigger( isSuccess ? "ajaxSuccess" : "ajaxError",
					[ jqXHR, s, isSuccess ? success : error ] );
			}

			// Complete
			completeDeferred.fireWith( callbackContext, [ jqXHR, statusText ] );

			if ( fireGlobals ) {
				globalEventContext.trigger( "ajaxComplete", [ jqXHR, s ] );

				// Handle the global AJAX counter
				if ( !( --jQuery.active ) ) {
					jQuery.event.trigger( "ajaxStop" );
				}
			}
		}

		return jqXHR;
	},

	getJSON: function( url, data, callback ) {
		return jQuery.get( url, data, callback, "json" );
	},

	getScript: function( url, callback ) {
		return jQuery.get( url, undefined, callback, "script" );
	}
} );

jQuery.each( [ "get", "post" ], function( i, method ) {
	jQuery[ method ] = function( url, data, callback, type ) {

		// shift arguments if data argument was omitted
		if ( jQuery.isFunction( data ) ) {
			type = type || callback;
			callback = data;
			data = undefined;
		}

		// The url can be an options object (which then must have .url)
		return jQuery.ajax( jQuery.extend( {
			url: url,
			type: method,
			dataType: type,
			data: data,
			success: callback
		}, jQuery.isPlainObject( url ) && url ) );
	};
} );


jQuery._evalUrl = function( url ) {
	return jQuery.ajax( {
		url: url,

		// Make this explicit, since user can override this through ajaxSetup (#11264)
		type: "GET",
		dataType: "script",
		cache: true,
		async: false,
		global: false,
		"throws": true
	} );
};


jQuery.fn.extend( {
	wrapAll: function( html ) {
		if ( jQuery.isFunction( html ) ) {
			return this.each( function( i ) {
				jQuery( this ).wrapAll( html.call( this, i ) );
			} );
		}

		if ( this[ 0 ] ) {

			// The elements to wrap the target around
			var wrap = jQuery( html, this[ 0 ].ownerDocument ).eq( 0 ).clone( true );

			if ( this[ 0 ].parentNode ) {
				wrap.insertBefore( this[ 0 ] );
			}

			wrap.map( function() {
				var elem = this;

				while ( elem.firstChild && elem.firstChild.nodeType === 1 ) {
					elem = elem.firstChild;
				}

				return elem;
			} ).append( this );
		}

		return this;
	},

	wrapInner: function( html ) {
		if ( jQuery.isFunction( html ) ) {
			return this.each( function( i ) {
				jQuery( this ).wrapInner( html.call( this, i ) );
			} );
		}

		return this.each( function() {
			var self = jQuery( this ),
				contents = self.contents();

			if ( contents.length ) {
				contents.wrapAll( html );

			} else {
				self.append( html );
			}
		} );
	},

	wrap: function( html ) {
		var isFunction = jQuery.isFunction( html );

		return this.each( function( i ) {
			jQuery( this ).wrapAll( isFunction ? html.call( this, i ) : html );
		} );
	},

	unwrap: function() {
		return this.parent().each( function() {
			if ( !jQuery.nodeName( this, "body" ) ) {
				jQuery( this ).replaceWith( this.childNodes );
			}
		} ).end();
	}
} );


function getDisplay( elem ) {
	return elem.style && elem.style.display || jQuery.css( elem, "display" );
}

function filterHidden( elem ) {
	while ( elem && elem.nodeType === 1 ) {
		if ( getDisplay( elem ) === "none" || elem.type === "hidden" ) {
			return true;
		}
		elem = elem.parentNode;
	}
	return false;
}

jQuery.expr.filters.hidden = function( elem ) {

	// Support: Opera <= 12.12
	// Opera reports offsetWidths and offsetHeights less than zero on some elements
	return support.reliableHiddenOffsets() ?
		( elem.offsetWidth <= 0 && elem.offsetHeight <= 0 &&
			!elem.getClientRects().length ) :
			filterHidden( elem );
};

jQuery.expr.filters.visible = function( elem ) {
	return !jQuery.expr.filters.hidden( elem );
};




var r20 = /%20/g,
	rbracket = /\[\]$/,
	rCRLF = /\r?\n/g,
	rsubmitterTypes = /^(?:submit|button|image|reset|file)$/i,
	rsubmittable = /^(?:input|select|textarea|keygen)/i;

function buildParams( prefix, obj, traditional, add ) {
	var name;

	if ( jQuery.isArray( obj ) ) {

		// Serialize array item.
		jQuery.each( obj, function( i, v ) {
			if ( traditional || rbracket.test( prefix ) ) {

				// Treat each array item as a scalar.
				add( prefix, v );

			} else {

				// Item is non-scalar (array or object), encode its numeric index.
				buildParams(
					prefix + "[" + ( typeof v === "object" && v != null ? i : "" ) + "]",
					v,
					traditional,
					add
				);
			}
		} );

	} else if ( !traditional && jQuery.type( obj ) === "object" ) {

		// Serialize object item.
		for ( name in obj ) {
			buildParams( prefix + "[" + name + "]", obj[ name ], traditional, add );
		}

	} else {

		// Serialize scalar item.
		add( prefix, obj );
	}
}

// Serialize an array of form elements or a set of
// key/values into a query string
jQuery.param = function( a, traditional ) {
	var prefix,
		s = [],
		add = function( key, value ) {

			// If value is a function, invoke it and return its value
			value = jQuery.isFunction( value ) ? value() : ( value == null ? "" : value );
			s[ s.length ] = encodeURIComponent( key ) + "=" + encodeURIComponent( value );
		};

	// Set traditional to true for jQuery <= 1.3.2 behavior.
	if ( traditional === undefined ) {
		traditional = jQuery.ajaxSettings && jQuery.ajaxSettings.traditional;
	}

	// If an array was passed in, assume that it is an array of form elements.
	if ( jQuery.isArray( a ) || ( a.jquery && !jQuery.isPlainObject( a ) ) ) {

		// Serialize the form elements
		jQuery.each( a, function() {
			add( this.name, this.value );
		} );

	} else {

		// If traditional, encode the "old" way (the way 1.3.2 or older
		// did it), otherwise encode params recursively.
		for ( prefix in a ) {
			buildParams( prefix, a[ prefix ], traditional, add );
		}
	}

	// Return the resulting serialization
	return s.join( "&" ).replace( r20, "+" );
};

jQuery.fn.extend( {
	serialize: function() {
		return jQuery.param( this.serializeArray() );
	},
	serializeArray: function() {
		return this.map( function() {

			// Can add propHook for "elements" to filter or add form elements
			var elements = jQuery.prop( this, "elements" );
			return elements ? jQuery.makeArray( elements ) : this;
		} )
		.filter( function() {
			var type = this.type;

			// Use .is(":disabled") so that fieldset[disabled] works
			return this.name && !jQuery( this ).is( ":disabled" ) &&
				rsubmittable.test( this.nodeName ) && !rsubmitterTypes.test( type ) &&
				( this.checked || !rcheckableType.test( type ) );
		} )
		.map( function( i, elem ) {
			var val = jQuery( this ).val();

			return val == null ?
				null :
				jQuery.isArray( val ) ?
					jQuery.map( val, function( val ) {
						return { name: elem.name, value: val.replace( rCRLF, "\r\n" ) };
					} ) :
					{ name: elem.name, value: val.replace( rCRLF, "\r\n" ) };
		} ).get();
	}
} );


// Create the request object
// (This is still attached to ajaxSettings for backward compatibility)
jQuery.ajaxSettings.xhr = window.ActiveXObject !== undefined ?

	// Support: IE6-IE8
	function() {

		// XHR cannot access local files, always use ActiveX for that case
		if ( this.isLocal ) {
			return createActiveXHR();
		}

		// Support: IE 9-11
		// IE seems to error on cross-domain PATCH requests when ActiveX XHR
		// is used. In IE 9+ always use the native XHR.
		// Note: this condition won't catch Edge as it doesn't define
		// document.documentMode but it also doesn't support ActiveX so it won't
		// reach this code.
		if ( document.documentMode > 8 ) {
			return createStandardXHR();
		}

		// Support: IE<9
		// oldIE XHR does not support non-RFC2616 methods (#13240)
		// See http://msdn.microsoft.com/en-us/library/ie/ms536648(v=vs.85).aspx
		// and http://www.w3.org/Protocols/rfc2616/rfc2616-sec9.html#sec9
		// Although this check for six methods instead of eight
		// since IE also does not support "trace" and "connect"
		return /^(get|post|head|put|delete|options)$/i.test( this.type ) &&
			createStandardXHR() || createActiveXHR();
	} :

	// For all other browsers, use the standard XMLHttpRequest object
	createStandardXHR;

var xhrId = 0,
	xhrCallbacks = {},
	xhrSupported = jQuery.ajaxSettings.xhr();

// Support: IE<10
// Open requests must be manually aborted on unload (#5280)
// See https://support.microsoft.com/kb/2856746 for more info
if ( window.attachEvent ) {
	window.attachEvent( "onunload", function() {
		for ( var key in xhrCallbacks ) {
			xhrCallbacks[ key ]( undefined, true );
		}
	} );
}

// Determine support properties
support.cors = !!xhrSupported && ( "withCredentials" in xhrSupported );
xhrSupported = support.ajax = !!xhrSupported;

// Create transport if the browser can provide an xhr
if ( xhrSupported ) {

	jQuery.ajaxTransport( function( options ) {

		// Cross domain only allowed if supported through XMLHttpRequest
		if ( !options.crossDomain || support.cors ) {

			var callback;

			return {
				send: function( headers, complete ) {
					var i,
						xhr = options.xhr(),
						id = ++xhrId;

					// Open the socket
					xhr.open(
						options.type,
						options.url,
						options.async,
						options.username,
						options.password
					);

					// Apply custom fields if provided
					if ( options.xhrFields ) {
						for ( i in options.xhrFields ) {
							xhr[ i ] = options.xhrFields[ i ];
						}
					}

					// Override mime type if needed
					if ( options.mimeType && xhr.overrideMimeType ) {
						xhr.overrideMimeType( options.mimeType );
					}

					// X-Requested-With header
					// For cross-domain requests, seeing as conditions for a preflight are
					// akin to a jigsaw puzzle, we simply never set it to be sure.
					// (it can always be set on a per-request basis or even using ajaxSetup)
					// For same-domain requests, won't change header if already provided.
					if ( !options.crossDomain && !headers[ "X-Requested-With" ] ) {
						headers[ "X-Requested-With" ] = "XMLHttpRequest";
					}

					// Set headers
					for ( i in headers ) {

						// Support: IE<9
						// IE's ActiveXObject throws a 'Type Mismatch' exception when setting
						// request header to a null-value.
						//
						// To keep consistent with other XHR implementations, cast the value
						// to string and ignore `undefined`.
						if ( headers[ i ] !== undefined ) {
							xhr.setRequestHeader( i, headers[ i ] + "" );
						}
					}

					// Do send the request
					// This may raise an exception which is actually
					// handled in jQuery.ajax (so no try/catch here)
					xhr.send( ( options.hasContent && options.data ) || null );

					// Listener
					callback = function( _, isAbort ) {
						var status, statusText, responses;

						// Was never called and is aborted or complete
						if ( callback && ( isAbort || xhr.readyState === 4 ) ) {

							// Clean up
							delete xhrCallbacks[ id ];
							callback = undefined;
							xhr.onreadystatechange = jQuery.noop;

							// Abort manually if needed
							if ( isAbort ) {
								if ( xhr.readyState !== 4 ) {
									xhr.abort();
								}
							} else {
								responses = {};
								status = xhr.status;

								// Support: IE<10
								// Accessing binary-data responseText throws an exception
								// (#11426)
								if ( typeof xhr.responseText === "string" ) {
									responses.text = xhr.responseText;
								}

								// Firefox throws an exception when accessing
								// statusText for faulty cross-domain requests
								try {
									statusText = xhr.statusText;
								} catch ( e ) {

									// We normalize with Webkit giving an empty statusText
									statusText = "";
								}

								// Filter status for non standard behaviors

								// If the request is local and we have data: assume a success
								// (success with no data won't get notified, that's the best we
								// can do given current implementations)
								if ( !status && options.isLocal && !options.crossDomain ) {
									status = responses.text ? 200 : 404;

								// IE - #1450: sometimes returns 1223 when it should be 204
								} else if ( status === 1223 ) {
									status = 204;
								}
							}
						}

						// Call complete if needed
						if ( responses ) {
							complete( status, statusText, responses, xhr.getAllResponseHeaders() );
						}
					};

					// Do send the request
					// `xhr.send` may raise an exception, but it will be
					// handled in jQuery.ajax (so no try/catch here)
					if ( !options.async ) {

						// If we're in sync mode we fire the callback
						callback();
					} else if ( xhr.readyState === 4 ) {

						// (IE6 & IE7) if it's in cache and has been
						// retrieved directly we need to fire the callback
						window.setTimeout( callback );
					} else {

						// Register the callback, but delay it in case `xhr.send` throws
						// Add to the list of active xhr callbacks
						xhr.onreadystatechange = xhrCallbacks[ id ] = callback;
					}
				},

				abort: function() {
					if ( callback ) {
						callback( undefined, true );
					}
				}
			};
		}
	} );
}

// Functions to create xhrs
function createStandardXHR() {
	try {
		return new window.XMLHttpRequest();
	} catch ( e ) {}
}

function createActiveXHR() {
	try {
		return new window.ActiveXObject( "Microsoft.XMLHTTP" );
	} catch ( e ) {}
}




// Install script dataType
jQuery.ajaxSetup( {
	accepts: {
		script: "text/javascript, application/javascript, " +
			"application/ecmascript, application/x-ecmascript"
	},
	contents: {
		script: /\b(?:java|ecma)script\b/
	},
	converters: {
		"text script": function( text ) {
			jQuery.globalEval( text );
			return text;
		}
	}
} );

// Handle cache's special case and global
jQuery.ajaxPrefilter( "script", function( s ) {
	if ( s.cache === undefined ) {
		s.cache = false;
	}
	if ( s.crossDomain ) {
		s.type = "GET";
		s.global = false;
	}
} );

// Bind script tag hack transport
jQuery.ajaxTransport( "script", function( s ) {

	// This transport only deals with cross domain requests
	if ( s.crossDomain ) {

		var script,
			head = document.head || jQuery( "head" )[ 0 ] || document.documentElement;

		return {

			send: function( _, callback ) {

				script = document.createElement( "script" );

				script.async = true;

				if ( s.scriptCharset ) {
					script.charset = s.scriptCharset;
				}

				script.src = s.url;

				// Attach handlers for all browsers
				script.onload = script.onreadystatechange = function( _, isAbort ) {

					if ( isAbort || !script.readyState || /loaded|complete/.test( script.readyState ) ) {

						// Handle memory leak in IE
						script.onload = script.onreadystatechange = null;

						// Remove the script
						if ( script.parentNode ) {
							script.parentNode.removeChild( script );
						}

						// Dereference the script
						script = null;

						// Callback if not abort
						if ( !isAbort ) {
							callback( 200, "success" );
						}
					}
				};

				// Circumvent IE6 bugs with base elements (#2709 and #4378) by prepending
				// Use native DOM manipulation to avoid our domManip AJAX trickery
				head.insertBefore( script, head.firstChild );
			},

			abort: function() {
				if ( script ) {
					script.onload( undefined, true );
				}
			}
		};
	}
} );




var oldCallbacks = [],
	rjsonp = /(=)\?(?=&|$)|\?\?/;

// Default jsonp settings
jQuery.ajaxSetup( {
	jsonp: "callback",
	jsonpCallback: function() {
		var callback = oldCallbacks.pop() || ( jQuery.expando + "_" + ( nonce++ ) );
		this[ callback ] = true;
		return callback;
	}
} );

// Detect, normalize options and install callbacks for jsonp requests
jQuery.ajaxPrefilter( "json jsonp", function( s, originalSettings, jqXHR ) {

	var callbackName, overwritten, responseContainer,
		jsonProp = s.jsonp !== false && ( rjsonp.test( s.url ) ?
			"url" :
			typeof s.data === "string" &&
				( s.contentType || "" )
					.indexOf( "application/x-www-form-urlencoded" ) === 0 &&
				rjsonp.test( s.data ) && "data"
		);

	// Handle iff the expected data type is "jsonp" or we have a parameter to set
	if ( jsonProp || s.dataTypes[ 0 ] === "jsonp" ) {

		// Get callback name, remembering preexisting value associated with it
		callbackName = s.jsonpCallback = jQuery.isFunction( s.jsonpCallback ) ?
			s.jsonpCallback() :
			s.jsonpCallback;

		// Insert callback into url or form data
		if ( jsonProp ) {
			s[ jsonProp ] = s[ jsonProp ].replace( rjsonp, "$1" + callbackName );
		} else if ( s.jsonp !== false ) {
			s.url += ( rquery.test( s.url ) ? "&" : "?" ) + s.jsonp + "=" + callbackName;
		}

		// Use data converter to retrieve json after script execution
		s.converters[ "script json" ] = function() {
			if ( !responseContainer ) {
				jQuery.error( callbackName + " was not called" );
			}
			return responseContainer[ 0 ];
		};

		// force json dataType
		s.dataTypes[ 0 ] = "json";

		// Install callback
		overwritten = window[ callbackName ];
		window[ callbackName ] = function() {
			responseContainer = arguments;
		};

		// Clean-up function (fires after converters)
		jqXHR.always( function() {

			// If previous value didn't exist - remove it
			if ( overwritten === undefined ) {
				jQuery( window ).removeProp( callbackName );

			// Otherwise restore preexisting value
			} else {
				window[ callbackName ] = overwritten;
			}

			// Save back as free
			if ( s[ callbackName ] ) {

				// make sure that re-using the options doesn't screw things around
				s.jsonpCallback = originalSettings.jsonpCallback;

				// save the callback name for future use
				oldCallbacks.push( callbackName );
			}

			// Call if it was a function and we have a response
			if ( responseContainer && jQuery.isFunction( overwritten ) ) {
				overwritten( responseContainer[ 0 ] );
			}

			responseContainer = overwritten = undefined;
		} );

		// Delegate to script
		return "script";
	}
} );




// data: string of html
// context (optional): If specified, the fragment will be created in this context,
// defaults to document
// keepScripts (optional): If true, will include scripts passed in the html string
jQuery.parseHTML = function( data, context, keepScripts ) {
	if ( !data || typeof data !== "string" ) {
		return null;
	}
	if ( typeof context === "boolean" ) {
		keepScripts = context;
		context = false;
	}
	context = context || document;

	var parsed = rsingleTag.exec( data ),
		scripts = !keepScripts && [];

	// Single tag
	if ( parsed ) {
		return [ context.createElement( parsed[ 1 ] ) ];
	}

	parsed = buildFragment( [ data ], context, scripts );

	if ( scripts && scripts.length ) {
		jQuery( scripts ).remove();
	}

	return jQuery.merge( [], parsed.childNodes );
};


// Keep a copy of the old load method
var _load = jQuery.fn.load;

/**
 * Load a url into a page
 */
jQuery.fn.load = function( url, params, callback ) {
	if ( typeof url !== "string" && _load ) {
		return _load.apply( this, arguments );
	}

	var selector, type, response,
		self = this,
		off = url.indexOf( " " );

	if ( off > -1 ) {
		selector = jQuery.trim( url.slice( off, url.length ) );
		url = url.slice( 0, off );
	}

	// If it's a function
	if ( jQuery.isFunction( params ) ) {

		// We assume that it's the callback
		callback = params;
		params = undefined;

	// Otherwise, build a param string
	} else if ( params && typeof params === "object" ) {
		type = "POST";
	}

	// If we have elements to modify, make the request
	if ( self.length > 0 ) {
		jQuery.ajax( {
			url: url,

			// If "type" variable is undefined, then "GET" method will be used.
			// Make value of this field explicit since
			// user can override it through ajaxSetup method
			type: type || "GET",
			dataType: "html",
			data: params
		} ).done( function( responseText ) {

			// Save response for use in complete callback
			response = arguments;

			self.html( selector ?

				// If a selector was specified, locate the right elements in a dummy div
				// Exclude scripts to avoid IE 'Permission Denied' errors
				jQuery( "<div>" ).append( jQuery.parseHTML( responseText ) ).find( selector ) :

				// Otherwise use the full result
				responseText );

		// If the request succeeds, this function gets "data", "status", "jqXHR"
		// but they are ignored because response was set above.
		// If it fails, this function gets "jqXHR", "status", "error"
		} ).always( callback && function( jqXHR, status ) {
			self.each( function() {
				callback.apply( this, response || [ jqXHR.responseText, status, jqXHR ] );
			} );
		} );
	}

	return this;
};




// Attach a bunch of functions for handling common AJAX events
jQuery.each( [
	"ajaxStart",
	"ajaxStop",
	"ajaxComplete",
	"ajaxError",
	"ajaxSuccess",
	"ajaxSend"
], function( i, type ) {
	jQuery.fn[ type ] = function( fn ) {
		return this.on( type, fn );
	};
} );




jQuery.expr.filters.animated = function( elem ) {
	return jQuery.grep( jQuery.timers, function( fn ) {
		return elem === fn.elem;
	} ).length;
};





/**
 * Gets a window from an element
 */
function getWindow( elem ) {
	return jQuery.isWindow( elem ) ?
		elem :
		elem.nodeType === 9 ?
			elem.defaultView || elem.parentWindow :
			false;
}

jQuery.offset = {
	setOffset: function( elem, options, i ) {
		var curPosition, curLeft, curCSSTop, curTop, curOffset, curCSSLeft, calculatePosition,
			position = jQuery.css( elem, "position" ),
			curElem = jQuery( elem ),
			props = {};

		// set position first, in-case top/left are set even on static elem
		if ( position === "static" ) {
			elem.style.position = "relative";
		}

		curOffset = curElem.offset();
		curCSSTop = jQuery.css( elem, "top" );
		curCSSLeft = jQuery.css( elem, "left" );
		calculatePosition = ( position === "absolute" || position === "fixed" ) &&
			jQuery.inArray( "auto", [ curCSSTop, curCSSLeft ] ) > -1;

		// need to be able to calculate position if either top or left
		// is auto and position is either absolute or fixed
		if ( calculatePosition ) {
			curPosition = curElem.position();
			curTop = curPosition.top;
			curLeft = curPosition.left;
		} else {
			curTop = parseFloat( curCSSTop ) || 0;
			curLeft = parseFloat( curCSSLeft ) || 0;
		}

		if ( jQuery.isFunction( options ) ) {

			// Use jQuery.extend here to allow modification of coordinates argument (gh-1848)
			options = options.call( elem, i, jQuery.extend( {}, curOffset ) );
		}

		if ( options.top != null ) {
			props.top = ( options.top - curOffset.top ) + curTop;
		}
		if ( options.left != null ) {
			props.left = ( options.left - curOffset.left ) + curLeft;
		}

		if ( "using" in options ) {
			options.using.call( elem, props );
		} else {
			curElem.css( props );
		}
	}
};

jQuery.fn.extend( {
	offset: function( options ) {
		if ( arguments.length ) {
			return options === undefined ?
				this :
				this.each( function( i ) {
					jQuery.offset.setOffset( this, options, i );
				} );
		}

		var docElem, win,
			box = { top: 0, left: 0 },
			elem = this[ 0 ],
			doc = elem && elem.ownerDocument;

		if ( !doc ) {
			return;
		}

		docElem = doc.documentElement;

		// Make sure it's not a disconnected DOM node
		if ( !jQuery.contains( docElem, elem ) ) {
			return box;
		}

		// If we don't have gBCR, just use 0,0 rather than error
		// BlackBerry 5, iOS 3 (original iPhone)
		if ( typeof elem.getBoundingClientRect !== "undefined" ) {
			box = elem.getBoundingClientRect();
		}
		win = getWindow( doc );
		return {
			top: box.top  + ( win.pageYOffset || docElem.scrollTop )  - ( docElem.clientTop  || 0 ),
			left: box.left + ( win.pageXOffset || docElem.scrollLeft ) - ( docElem.clientLeft || 0 )
		};
	},

	position: function() {
		if ( !this[ 0 ] ) {
			return;
		}

		var offsetParent, offset,
			parentOffset = { top: 0, left: 0 },
			elem = this[ 0 ];

		// Fixed elements are offset from window (parentOffset = {top:0, left: 0},
		// because it is its only offset parent
		if ( jQuery.css( elem, "position" ) === "fixed" ) {

			// we assume that getBoundingClientRect is available when computed position is fixed
			offset = elem.getBoundingClientRect();
		} else {

			// Get *real* offsetParent
			offsetParent = this.offsetParent();

			// Get correct offsets
			offset = this.offset();
			if ( !jQuery.nodeName( offsetParent[ 0 ], "html" ) ) {
				parentOffset = offsetParent.offset();
			}

			// Add offsetParent borders
			parentOffset.top  += jQuery.css( offsetParent[ 0 ], "borderTopWidth", true );
			parentOffset.left += jQuery.css( offsetParent[ 0 ], "borderLeftWidth", true );
		}

		// Subtract parent offsets and element margins
		// note: when an element has margin: auto the offsetLeft and marginLeft
		// are the same in Safari causing offset.left to incorrectly be 0
		return {
			top:  offset.top  - parentOffset.top - jQuery.css( elem, "marginTop", true ),
			left: offset.left - parentOffset.left - jQuery.css( elem, "marginLeft", true )
		};
	},

	offsetParent: function() {
		return this.map( function() {
			var offsetParent = this.offsetParent;

			while ( offsetParent && ( !jQuery.nodeName( offsetParent, "html" ) &&
				jQuery.css( offsetParent, "position" ) === "static" ) ) {
				offsetParent = offsetParent.offsetParent;
			}
			return offsetParent || documentElement;
		} );
	}
} );

// Create scrollLeft and scrollTop methods
jQuery.each( { scrollLeft: "pageXOffset", scrollTop: "pageYOffset" }, function( method, prop ) {
	var top = /Y/.test( prop );

	jQuery.fn[ method ] = function( val ) {
		return access( this, function( elem, method, val ) {
			var win = getWindow( elem );

			if ( val === undefined ) {
				return win ? ( prop in win ) ? win[ prop ] :
					win.document.documentElement[ method ] :
					elem[ method ];
			}

			if ( win ) {
				win.scrollTo(
					!top ? val : jQuery( win ).scrollLeft(),
					top ? val : jQuery( win ).scrollTop()
				);

			} else {
				elem[ method ] = val;
			}
		}, method, val, arguments.length, null );
	};
} );

// Support: Safari<7-8+, Chrome<37-44+
// Add the top/left cssHooks using jQuery.fn.position
// Webkit bug: https://bugs.webkit.org/show_bug.cgi?id=29084
// getComputedStyle returns percent when specified for top/left/bottom/right
// rather than make the css module depend on the offset module, we just check for it here
jQuery.each( [ "top", "left" ], function( i, prop ) {
	jQuery.cssHooks[ prop ] = addGetHookIf( support.pixelPosition,
		function( elem, computed ) {
			if ( computed ) {
				computed = curCSS( elem, prop );

				// if curCSS returns percentage, fallback to offset
				return rnumnonpx.test( computed ) ?
					jQuery( elem ).position()[ prop ] + "px" :
					computed;
			}
		}
	);
} );


// Create innerHeight, innerWidth, height, width, outerHeight and outerWidth methods
jQuery.each( { Height: "height", Width: "width" }, function( name, type ) {
	jQuery.each( { padding: "inner" + name, content: type, "": "outer" + name },
	function( defaultExtra, funcName ) {

		// margin is only for outerHeight, outerWidth
		jQuery.fn[ funcName ] = function( margin, value ) {
			var chainable = arguments.length && ( defaultExtra || typeof margin !== "boolean" ),
				extra = defaultExtra || ( margin === true || value === true ? "margin" : "border" );

			return access( this, function( elem, type, value ) {
				var doc;

				if ( jQuery.isWindow( elem ) ) {

					// As of 5/8/2012 this will yield incorrect results for Mobile Safari, but there
					// isn't a whole lot we can do. See pull request at this URL for discussion:
					// https://github.com/jquery/jquery/pull/764
					return elem.document.documentElement[ "client" + name ];
				}

				// Get document width or height
				if ( elem.nodeType === 9 ) {
					doc = elem.documentElement;

					// Either scroll[Width/Height] or offset[Width/Height] or client[Width/Height],
					// whichever is greatest
					// unfortunately, this causes bug #3838 in IE6/8 only,
					// but there is currently no good, small way to fix it.
					return Math.max(
						elem.body[ "scroll" + name ], doc[ "scroll" + name ],
						elem.body[ "offset" + name ], doc[ "offset" + name ],
						doc[ "client" + name ]
					);
				}

				return value === undefined ?

					// Get width or height on the element, requesting but not forcing parseFloat
					jQuery.css( elem, type, extra ) :

					// Set width or height on the element
					jQuery.style( elem, type, value, extra );
			}, type, chainable ? margin : undefined, chainable, null );
		};
	} );
} );


jQuery.fn.extend( {

	bind: function( types, data, fn ) {
		return this.on( types, null, data, fn );
	},
	unbind: function( types, fn ) {
		return this.off( types, null, fn );
	},

	delegate: function( selector, types, data, fn ) {
		return this.on( types, selector, data, fn );
	},
	undelegate: function( selector, types, fn ) {

		// ( namespace ) or ( selector, types [, fn] )
		return arguments.length === 1 ?
			this.off( selector, "**" ) :
			this.off( types, selector || "**", fn );
	}
} );

// The number of elements contained in the matched element set
jQuery.fn.size = function() {
	return this.length;
};

jQuery.fn.andSelf = jQuery.fn.addBack;




// Register as a named AMD module, since jQuery can be concatenated with other
// files that may use define, but not via a proper concatenation script that
// understands anonymous AMD modules. A named AMD is safest and most robust
// way to register. Lowercase jquery is used because AMD module names are
// derived from file names, and jQuery is normally delivered in a lowercase
// file name. Do this after creating the global so that if an AMD module wants
// to call noConflict to hide this version of jQuery, it will work.

// Note that for maximum portability, libraries that are not jQuery should
// declare themselves as anonymous modules, and avoid setting a global if an
// AMD loader is present. jQuery is a special case. For more information, see
// https://github.com/jrburke/requirejs/wiki/Updating-existing-libraries#wiki-anon

if ( typeof define === "function" && define.amd ) {
	define( "jquery", [], function() {
		return jQuery;
	} );
}



var

	// Map over jQuery in case of overwrite
	_jQuery = window.jQuery,

	// Map over the $ in case of overwrite
	_$ = window.$;

jQuery.noConflict = function( deep ) {
	if ( window.$ === jQuery ) {
		window.$ = _$;
	}

	if ( deep && window.jQuery === jQuery ) {
		window.jQuery = _jQuery;
	}

	return jQuery;
};

// Expose jQuery and $ identifiers, even in
// AMD (#7102#comment:10, https://github.com/jquery/jquery/pull/557)
// and CommonJS for browser emulators (#13566)
if ( !noGlobal ) {
	window.jQuery = window.$ = jQuery;
}

return jQuery;
}));
;
/*
 Highcharts JS v6.0.4 (2017-12-15)

 (c) 2009-2016 Torstein Honsi

 License: www.highcharts.com/license
*/
(function(S,M){"object"===typeof module&&module.exports?module.exports=S.document?M(S):M:S.Highcharts=M(S)})("undefined"!==typeof window?window:this,function(S){var M=function(){var a="undefined"===typeof S?window:S,E=a.document,D=a.navigator&&a.navigator.userAgent||"",H=E&&E.createElementNS&&!!E.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect,p=/(edge|msie|trident)/i.test(D)&&!a.opera,f=/Firefox/.test(D),l=f&&4>parseInt(D.split("Firefox/")[1],10);return a.Highcharts?a.Highcharts.error(16,
!0):{product:"Highcharts",version:"6.0.4",deg2rad:2*Math.PI/360,doc:E,hasBidiBug:l,hasTouch:E&&void 0!==E.documentElement.ontouchstart,isMS:p,isWebKit:/AppleWebKit/.test(D),isFirefox:f,isTouchDevice:/(Mobile|Android|Windows Phone)/.test(D),SVG_NS:"http://www.w3.org/2000/svg",chartCount:0,seriesTypes:{},symbolSizes:{},svg:H,win:a,marginNames:["plotTop","marginRight","marginBottom","plotLeft"],noop:function(){},charts:[]}}();(function(a){a.timers=[];var E=a.charts,D=a.doc,H=a.win;a.error=function(p,
f){p=a.isNumber(p)?"Highcharts error #"+p+": www.highcharts.com/errors/"+p:p;if(f)throw Error(p);H.console&&console.log(p)};a.Fx=function(a,f,l){this.options=f;this.elem=a;this.prop=l};a.Fx.prototype={dSetter:function(){var a=this.paths[0],f=this.paths[1],l=[],r=this.now,n=a.length,w;if(1===r)l=this.toD;else if(n===f.length&&1>r)for(;n--;)w=parseFloat(a[n]),l[n]=isNaN(w)?f[n]:r*parseFloat(f[n]-w)+w;else l=f;this.elem.attr("d",l,null,!0)},update:function(){var a=this.elem,f=this.prop,l=this.now,r=
this.options.step;if(this[f+"Setter"])this[f+"Setter"]();else a.attr?a.element&&a.attr(f,l,null,!0):a.style[f]=l+this.unit;r&&r.call(a,l,this)},run:function(p,f,l){var r=this,n=r.options,w=function(a){return w.stopped?!1:r.step(a)},u=H.requestAnimationFrame||function(a){setTimeout(a,13)},e=function(){for(var h=0;h<a.timers.length;h++)a.timers[h]()||a.timers.splice(h--,1);a.timers.length&&u(e)};p===f?(delete n.curAnim[this.prop],n.complete&&0===a.keys(n.curAnim).length&&n.complete.call(this.elem)):
(this.startTime=+new Date,this.start=p,this.end=f,this.unit=l,this.now=this.start,this.pos=0,w.elem=this.elem,w.prop=this.prop,w()&&1===a.timers.push(w)&&u(e))},step:function(p){var f=+new Date,l,r=this.options,n=this.elem,w=r.complete,u=r.duration,e=r.curAnim;n.attr&&!n.element?p=!1:p||f>=u+this.startTime?(this.now=this.end,this.pos=1,this.update(),l=e[this.prop]=!0,a.objectEach(e,function(a){!0!==a&&(l=!1)}),l&&w&&w.call(n),p=!1):(this.pos=r.easing((f-this.startTime)/u),this.now=this.start+(this.end-
this.start)*this.pos,this.update(),p=!0);return p},initPath:function(p,f,l){function r(a){var b,c;for(k=a.length;k--;)b="M"===a[k]||"L"===a[k],c=/[a-zA-Z]/.test(a[k+3]),b&&c&&a.splice(k+1,0,a[k+1],a[k+2],a[k+1],a[k+2])}function n(a,b){for(;a.length<c;){a[0]=b[c-a.length];var e=a.slice(0,d);[].splice.apply(a,[0,0].concat(e));z&&(e=a.slice(a.length-d),[].splice.apply(a,[a.length,0].concat(e)),k--)}a[0]="M"}function w(a,k){for(var e=(c-a.length)/d;0<e&&e--;)b=a.slice().splice(a.length/B-d,d*B),b[0]=
k[c-d-e*d],m&&(b[d-6]=b[d-2],b[d-5]=b[d-1]),[].splice.apply(a,[a.length/B,0].concat(b)),z&&e--}f=f||"";var u,e=p.startX,h=p.endX,m=-1<f.indexOf("C"),d=m?7:3,c,b,k;f=f.split(" ");l=l.slice();var z=p.isArea,B=z?2:1,I;m&&(r(f),r(l));if(e&&h){for(k=0;k<e.length;k++)if(e[k]===h[0]){u=k;break}else if(e[0]===h[h.length-e.length+k]){u=k;I=!0;break}void 0===u&&(f=[])}f.length&&a.isNumber(u)&&(c=l.length+u*B*d,I?(n(f,l),w(l,f)):(n(l,f),w(f,l)));return[f,l]}};a.Fx.prototype.fillSetter=a.Fx.prototype.strokeSetter=
function(){this.elem.attr(this.prop,a.color(this.start).tweenTo(a.color(this.end),this.pos),null,!0)};a.extend=function(a,f){var l;a||(a={});for(l in f)a[l]=f[l];return a};a.merge=function(){var p,f=arguments,l,r={},n=function(l,p){"object"!==typeof l&&(l={});a.objectEach(p,function(e,h){!a.isObject(e,!0)||a.isClass(e)||a.isDOMElement(e)?l[h]=p[h]:l[h]=n(l[h]||{},e)});return l};!0===f[0]&&(r=f[1],f=Array.prototype.slice.call(f,2));l=f.length;for(p=0;p<l;p++)r=n(r,f[p]);return r};a.pInt=function(a,
f){return parseInt(a,f||10)};a.isString=function(a){return"string"===typeof a};a.isArray=function(a){a=Object.prototype.toString.call(a);return"[object Array]"===a||"[object Array Iterator]"===a};a.isObject=function(p,f){return!!p&&"object"===typeof p&&(!f||!a.isArray(p))};a.isDOMElement=function(p){return a.isObject(p)&&"number"===typeof p.nodeType};a.isClass=function(p){var f=p&&p.constructor;return!(!a.isObject(p,!0)||a.isDOMElement(p)||!f||!f.name||"Object"===f.name)};a.isNumber=function(a){return"number"===
typeof a&&!isNaN(a)&&Infinity>a&&-Infinity<a};a.erase=function(a,f){for(var l=a.length;l--;)if(a[l]===f){a.splice(l,1);break}};a.defined=function(a){return void 0!==a&&null!==a};a.attr=function(p,f,l){var r;a.isString(f)?a.defined(l)?p.setAttribute(f,l):p&&p.getAttribute&&(r=p.getAttribute(f)):a.defined(f)&&a.isObject(f)&&a.objectEach(f,function(a,l){p.setAttribute(l,a)});return r};a.splat=function(p){return a.isArray(p)?p:[p]};a.syncTimeout=function(a,f,l){if(f)return setTimeout(a,f,l);a.call(0,
l)};a.pick=function(){var a=arguments,f,l,r=a.length;for(f=0;f<r;f++)if(l=a[f],void 0!==l&&null!==l)return l};a.css=function(p,f){a.isMS&&!a.svg&&f&&void 0!==f.opacity&&(f.filter="alpha(opacity\x3d"+100*f.opacity+")");a.extend(p.style,f)};a.createElement=function(p,f,l,r,n){p=D.createElement(p);var w=a.css;f&&a.extend(p,f);n&&w(p,{padding:0,border:"none",margin:0});l&&w(p,l);r&&r.appendChild(p);return p};a.extendClass=function(p,f){var l=function(){};l.prototype=new p;a.extend(l.prototype,f);return l};
a.pad=function(a,f,l){return Array((f||2)+1-String(a).length).join(l||0)+a};a.relativeLength=function(a,f,l){return/%$/.test(a)?f*parseFloat(a)/100+(l||0):parseFloat(a)};a.wrap=function(a,f,l){var p=a[f];a[f]=function(){var a=Array.prototype.slice.call(arguments),f=arguments,u=this;u.proceed=function(){p.apply(u,arguments.length?arguments:f)};a.unshift(p);a=l.apply(this,a);u.proceed=null;return a}};a.getTZOffset=function(p){var f=a.Date;return 6E4*(f.hcGetTimezoneOffset&&f.hcGetTimezoneOffset(p)||
f.hcTimezoneOffset||0)};a.dateFormat=function(p,f,l){if(!a.defined(f)||isNaN(f))return a.defaultOptions.lang.invalidDate||"";p=a.pick(p,"%Y-%m-%d %H:%M:%S");var r=a.Date,n=new r(f-a.getTZOffset(f)),w=n[r.hcGetHours](),u=n[r.hcGetDay](),e=n[r.hcGetDate](),h=n[r.hcGetMonth](),m=n[r.hcGetFullYear](),d=a.defaultOptions.lang,c=d.weekdays,b=d.shortWeekdays,k=a.pad,r=a.extend({a:b?b[u]:c[u].substr(0,3),A:c[u],d:k(e),e:k(e,2," "),w:u,b:d.shortMonths[h],B:d.months[h],m:k(h+1),y:m.toString().substr(2,2),Y:m,
H:k(w),k:w,I:k(w%12||12),l:w%12||12,M:k(n[r.hcGetMinutes]()),p:12>w?"AM":"PM",P:12>w?"am":"pm",S:k(n.getSeconds()),L:k(Math.round(f%1E3),3)},a.dateFormats);a.objectEach(r,function(a,b){for(;-1!==p.indexOf("%"+b);)p=p.replace("%"+b,"function"===typeof a?a(f):a)});return l?p.substr(0,1).toUpperCase()+p.substr(1):p};a.formatSingle=function(p,f){var l=/\.([0-9])/,r=a.defaultOptions.lang;/f$/.test(p)?(l=(l=p.match(l))?l[1]:-1,null!==f&&(f=a.numberFormat(f,l,r.decimalPoint,-1<p.indexOf(",")?r.thousandsSep:
""))):f=a.dateFormat(p,f);return f};a.format=function(p,f){for(var l="{",r=!1,n,w,u,e,h=[],m;p;){l=p.indexOf(l);if(-1===l)break;n=p.slice(0,l);if(r){n=n.split(":");w=n.shift().split(".");e=w.length;m=f;for(u=0;u<e;u++)m&&(m=m[w[u]]);n.length&&(m=a.formatSingle(n.join(":"),m));h.push(m)}else h.push(n);p=p.slice(l+1);l=(r=!r)?"}":"{"}h.push(p);return h.join("")};a.getMagnitude=function(a){return Math.pow(10,Math.floor(Math.log(a)/Math.LN10))};a.normalizeTickInterval=function(p,f,l,r,n){var w,u=p;l=
a.pick(l,1);w=p/l;f||(f=n?[1,1.2,1.5,2,2.5,3,4,5,6,8,10]:[1,2,2.5,5,10],!1===r&&(1===l?f=a.grep(f,function(a){return 0===a%1}):.1>=l&&(f=[1/l])));for(r=0;r<f.length&&!(u=f[r],n&&u*l>=p||!n&&w<=(f[r]+(f[r+1]||f[r]))/2);r++);return u=a.correctFloat(u*l,-Math.round(Math.log(.001)/Math.LN10))};a.stableSort=function(a,f){var l=a.length,p,n;for(n=0;n<l;n++)a[n].safeI=n;a.sort(function(a,n){p=f(a,n);return 0===p?a.safeI-n.safeI:p});for(n=0;n<l;n++)delete a[n].safeI};a.arrayMin=function(a){for(var f=a.length,
l=a[0];f--;)a[f]<l&&(l=a[f]);return l};a.arrayMax=function(a){for(var f=a.length,l=a[0];f--;)a[f]>l&&(l=a[f]);return l};a.destroyObjectProperties=function(p,f){a.objectEach(p,function(a,r){a&&a!==f&&a.destroy&&a.destroy();delete p[r]})};a.discardElement=function(p){var f=a.garbageBin;f||(f=a.createElement("div"));p&&f.appendChild(p);f.innerHTML=""};a.correctFloat=function(a,f){return parseFloat(a.toPrecision(f||14))};a.setAnimation=function(p,f){f.renderer.globalAnimation=a.pick(p,f.options.chart.animation,
!0)};a.animObject=function(p){return a.isObject(p)?a.merge(p):{duration:p?500:0}};a.timeUnits={millisecond:1,second:1E3,minute:6E4,hour:36E5,day:864E5,week:6048E5,month:24192E5,year:314496E5};a.numberFormat=function(p,f,l,r){p=+p||0;f=+f;var n=a.defaultOptions.lang,w=(p.toString().split(".")[1]||"").split("e")[0].length,u,e,h=p.toString().split("e");-1===f?f=Math.min(w,20):a.isNumber(f)?f&&h[1]&&0>h[1]&&(u=f+ +h[1],0<=u?(h[0]=(+h[0]).toExponential(u).split("e")[0],f=u):(h[0]=h[0].split(".")[0]||0,
p=20>f?(h[0]*Math.pow(10,h[1])).toFixed(f):0,h[1]=0)):f=2;e=(Math.abs(h[1]?h[0]:p)+Math.pow(10,-Math.max(f,w)-1)).toFixed(f);w=String(a.pInt(e));u=3<w.length?w.length%3:0;l=a.pick(l,n.decimalPoint);r=a.pick(r,n.thousandsSep);p=(0>p?"-":"")+(u?w.substr(0,u)+r:"");p+=w.substr(u).replace(/(\d{3})(?=\d)/g,"$1"+r);f&&(p+=l+e.slice(-f));h[1]&&0!==+p&&(p+="e"+h[1]);return p};Math.easeInOutSine=function(a){return-.5*(Math.cos(Math.PI*a)-1)};a.getStyle=function(p,f,l){if("width"===f)return Math.min(p.offsetWidth,
p.scrollWidth)-a.getStyle(p,"padding-left")-a.getStyle(p,"padding-right");if("height"===f)return Math.min(p.offsetHeight,p.scrollHeight)-a.getStyle(p,"padding-top")-a.getStyle(p,"padding-bottom");H.getComputedStyle||a.error(27,!0);if(p=H.getComputedStyle(p,void 0))p=p.getPropertyValue(f),a.pick(l,"opacity"!==f)&&(p=a.pInt(p));return p};a.inArray=function(p,f){return(a.indexOfPolyfill||Array.prototype.indexOf).call(f,p)};a.grep=function(p,f){return(a.filterPolyfill||Array.prototype.filter).call(p,
f)};a.find=Array.prototype.find?function(a,f){return a.find(f)}:function(a,f){var l,r=a.length;for(l=0;l<r;l++)if(f(a[l],l))return a[l]};a.map=function(a,f){for(var l=[],r=0,n=a.length;r<n;r++)l[r]=f.call(a[r],a[r],r,a);return l};a.keys=function(p){return(a.keysPolyfill||Object.keys).call(void 0,p)};a.reduce=function(p,f,l){return(a.reducePolyfill||Array.prototype.reduce).call(p,f,l)};a.offset=function(a){var f=D.documentElement;a=a.parentElement?a.getBoundingClientRect():{top:0,left:0};return{top:a.top+
(H.pageYOffset||f.scrollTop)-(f.clientTop||0),left:a.left+(H.pageXOffset||f.scrollLeft)-(f.clientLeft||0)}};a.stop=function(p,f){for(var l=a.timers.length;l--;)a.timers[l].elem!==p||f&&f!==a.timers[l].prop||(a.timers[l].stopped=!0)};a.each=function(p,f,l){return(a.forEachPolyfill||Array.prototype.forEach).call(p,f,l)};a.objectEach=function(a,f,l){for(var r in a)a.hasOwnProperty(r)&&f.call(l,a[r],r,a)};a.addEvent=function(p,f,l){var r,n,w=p.addEventListener||a.addEventListenerPolyfill;p.hcEvents&&
!Object.prototype.hasOwnProperty.call(p,"hcEvents")&&(n={},a.objectEach(p.hcEvents,function(a,e){n[e]=a.slice(0)}),p.hcEvents=n);r=p.hcEvents=p.hcEvents||{};w&&w.call(p,f,l,!1);r[f]||(r[f]=[]);r[f].push(l);return function(){a.removeEvent(p,f,l)}};a.removeEvent=function(p,f,l){function r(e,m){var d=p.removeEventListener||a.removeEventListenerPolyfill;d&&d.call(p,e,m,!1)}function n(){var e,m;p.nodeName&&(f?(e={},e[f]=!0):e=u,a.objectEach(e,function(a,c){if(u[c])for(m=u[c].length;m--;)r(c,u[c][m])}))}
var w,u=p.hcEvents,e;u&&(f?(w=u[f]||[],l?(e=a.inArray(l,w),-1<e&&(w.splice(e,1),u[f]=w),r(f,l)):(n(),u[f]=[])):(n(),p.hcEvents={}))};a.fireEvent=function(p,f,l,r){var n;n=p.hcEvents;var w,u;l=l||{};if(D.createEvent&&(p.dispatchEvent||p.fireEvent))n=D.createEvent("Events"),n.initEvent(f,!0,!0),a.extend(n,l),p.dispatchEvent?p.dispatchEvent(n):p.fireEvent(f,n);else if(n)for(n=n[f]||[],w=n.length,l.target||a.extend(l,{preventDefault:function(){l.defaultPrevented=!0},target:p,type:f}),f=0;f<w;f++)(u=n[f])&&
!1===u.call(p,l)&&l.preventDefault();r&&!l.defaultPrevented&&r(l)};a.animate=function(p,f,l){var r,n="",w,u,e;a.isObject(l)||(e=arguments,l={duration:e[2],easing:e[3],complete:e[4]});a.isNumber(l.duration)||(l.duration=400);l.easing="function"===typeof l.easing?l.easing:Math[l.easing]||Math.easeInOutSine;l.curAnim=a.merge(f);a.objectEach(f,function(e,m){a.stop(p,m);u=new a.Fx(p,l,m);w=null;"d"===m?(u.paths=u.initPath(p,p.d,f.d),u.toD=f.d,r=0,w=1):p.attr?r=p.attr(m):(r=parseFloat(a.getStyle(p,m))||
0,"opacity"!==m&&(n="px"));w||(w=e);w&&w.match&&w.match("px")&&(w=w.replace(/px/g,""));u.run(r,w,n)})};a.seriesType=function(p,f,l,r,n){var w=a.getOptions(),u=a.seriesTypes;w.plotOptions[p]=a.merge(w.plotOptions[f],l);u[p]=a.extendClass(u[f]||function(){},r);u[p].prototype.type=p;n&&(u[p].prototype.pointClass=a.extendClass(a.Point,n));return u[p]};a.uniqueKey=function(){var a=Math.random().toString(36).substring(2,9),f=0;return function(){return"highcharts-"+a+"-"+f++}}();H.jQuery&&(H.jQuery.fn.highcharts=
function(){var p=[].slice.call(arguments);if(this[0])return p[0]?(new (a[a.isString(p[0])?p.shift():"Chart"])(this[0],p[0],p[1]),this):E[a.attr(this[0],"data-highcharts-chart")]})})(M);(function(a){var E=a.each,D=a.isNumber,H=a.map,p=a.merge,f=a.pInt;a.Color=function(l){if(!(this instanceof a.Color))return new a.Color(l);this.init(l)};a.Color.prototype={parsers:[{regex:/rgba\(\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9]?(?:\.[0-9]+)?)\s*\)/,parse:function(a){return[f(a[1]),f(a[2]),
f(a[3]),parseFloat(a[4],10)]}},{regex:/rgb\(\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*\)/,parse:function(a){return[f(a[1]),f(a[2]),f(a[3]),1]}}],names:{none:"rgba(255,255,255,0)",white:"#ffffff",black:"#000000"},init:function(l){var f,n,w,u;if((this.input=l=this.names[l&&l.toLowerCase?l.toLowerCase():""]||l)&&l.stops)this.stops=H(l.stops,function(e){return new a.Color(e[1])});else if(l&&l.charAt&&"#"===l.charAt()&&(f=l.length,l=parseInt(l.substr(1),16),7===f?n=[(l&16711680)>>16,(l&65280)>>
8,l&255,1]:4===f&&(n=[(l&3840)>>4|(l&3840)>>8,(l&240)>>4|l&240,(l&15)<<4|l&15,1])),!n)for(w=this.parsers.length;w--&&!n;)u=this.parsers[w],(f=u.regex.exec(l))&&(n=u.parse(f));this.rgba=n||[]},get:function(a){var f=this.input,n=this.rgba,l;this.stops?(l=p(f),l.stops=[].concat(l.stops),E(this.stops,function(n,e){l.stops[e]=[l.stops[e][0],n.get(a)]})):l=n&&D(n[0])?"rgb"===a||!a&&1===n[3]?"rgb("+n[0]+","+n[1]+","+n[2]+")":"a"===a?n[3]:"rgba("+n.join(",")+")":f;return l},brighten:function(a){var l,n=this.rgba;
if(this.stops)E(this.stops,function(n){n.brighten(a)});else if(D(a)&&0!==a)for(l=0;3>l;l++)n[l]+=f(255*a),0>n[l]&&(n[l]=0),255<n[l]&&(n[l]=255);return this},setOpacity:function(a){this.rgba[3]=a;return this},tweenTo:function(a,f){var n=this.rgba,l=a.rgba;l.length&&n&&n.length?(a=1!==l[3]||1!==n[3],f=(a?"rgba(":"rgb(")+Math.round(l[0]+(n[0]-l[0])*(1-f))+","+Math.round(l[1]+(n[1]-l[1])*(1-f))+","+Math.round(l[2]+(n[2]-l[2])*(1-f))+(a?","+(l[3]+(n[3]-l[3])*(1-f)):"")+")"):f=a.input||"none";return f}};
a.color=function(l){return new a.Color(l)}})(M);(function(a){var E,D,H=a.addEvent,p=a.animate,f=a.attr,l=a.charts,r=a.color,n=a.css,w=a.createElement,u=a.defined,e=a.deg2rad,h=a.destroyObjectProperties,m=a.doc,d=a.each,c=a.extend,b=a.erase,k=a.grep,z=a.hasTouch,B=a.inArray,I=a.isArray,x=a.isFirefox,K=a.isMS,t=a.isObject,C=a.isString,N=a.isWebKit,q=a.merge,A=a.noop,F=a.objectEach,G=a.pick,g=a.pInt,v=a.removeEvent,Q=a.stop,L=a.svg,P=a.SVG_NS,J=a.symbolSizes,R=a.win;E=a.SVGElement=function(){return this};
c(E.prototype,{opacity:1,SVG_NS:P,textProps:"direction fontSize fontWeight fontFamily fontStyle color lineHeight width textAlign textDecoration textOverflow textOutline".split(" "),init:function(a,g){this.element="span"===g?w(g):m.createElementNS(this.SVG_NS,g);this.renderer=a},animate:function(y,g,b){g=a.animObject(G(g,this.renderer.globalAnimation,!0));0!==g.duration?(b&&(g.complete=b),p(this,y,g)):(this.attr(y,null,b),g.step&&g.step.call(this));return this},colorGradient:function(y,g,b){var v=
this.renderer,c,O,k,e,z,h,m,L,A,J,t=[],x;y.radialGradient?O="radialGradient":y.linearGradient&&(O="linearGradient");O&&(k=y[O],z=v.gradients,m=y.stops,J=b.radialReference,I(k)&&(y[O]=k={x1:k[0],y1:k[1],x2:k[2],y2:k[3],gradientUnits:"userSpaceOnUse"}),"radialGradient"===O&&J&&!u(k.gradientUnits)&&(e=k,k=q(k,v.getRadialAttr(J,e),{gradientUnits:"userSpaceOnUse"})),F(k,function(a,y){"id"!==y&&t.push(y,a)}),F(m,function(a){t.push(a)}),t=t.join(","),z[t]?J=z[t].attr("id"):(k.id=J=a.uniqueKey(),z[t]=h=v.createElement(O).attr(k).add(v.defs),
h.radAttr=e,h.stops=[],d(m,function(y){0===y[1].indexOf("rgba")?(c=a.color(y[1]),L=c.get("rgb"),A=c.get("a")):(L=y[1],A=1);y=v.createElement("stop").attr({offset:y[0],"stop-color":L,"stop-opacity":A}).add(h);h.stops.push(y)})),x="url("+v.url+"#"+J+")",b.setAttribute(g,x),b.gradient=t,y.toString=function(){return x})},applyTextOutline:function(y){var g=this.element,v,c,k,q,e;-1!==y.indexOf("contrast")&&(y=y.replace(/contrast/g,this.renderer.getContrast(g.style.fill)));y=y.split(" ");c=y[y.length-1];
if((k=y[0])&&"none"!==k&&a.svg){this.fakeTS=!0;y=[].slice.call(g.getElementsByTagName("tspan"));this.ySetter=this.xSetter;k=k.replace(/(^[\d\.]+)(.*?)$/g,function(a,y,g){return 2*y+g});for(e=y.length;e--;)v=y[e],"highcharts-text-outline"===v.getAttribute("class")&&b(y,g.removeChild(v));q=g.firstChild;d(y,function(a,y){0===y&&(a.setAttribute("x",g.getAttribute("x")),y=g.getAttribute("y"),a.setAttribute("y",y||0),null===y&&g.setAttribute("y",0));a=a.cloneNode(1);f(a,{"class":"highcharts-text-outline",
fill:c,stroke:c,"stroke-width":k,"stroke-linejoin":"round"});g.insertBefore(a,q)})}},attr:function(a,g,b,v){var y,c=this.element,k,d=this,O,q;"string"===typeof a&&void 0!==g&&(y=a,a={},a[y]=g);"string"===typeof a?d=(this[a+"Getter"]||this._defaultGetter).call(this,a,c):(F(a,function(y,g){O=!1;v||Q(this,g);this.symbolName&&/^(x|y|width|height|r|start|end|innerR|anchorX|anchorY)$/.test(g)&&(k||(this.symbolAttr(a),k=!0),O=!0);!this.rotation||"x"!==g&&"y"!==g||(this.doTransform=!0);O||(q=this[g+"Setter"]||
this._defaultSetter,q.call(this,y,g,c),this.shadows&&/^(width|height|visibility|x|y|d|transform|cx|cy|r)$/.test(g)&&this.updateShadows(g,y,q))},this),this.afterSetters());b&&b();return d},afterSetters:function(){this.doTransform&&(this.updateTransform(),this.doTransform=!1)},updateShadows:function(a,g,b){for(var y=this.shadows,v=y.length;v--;)b.call(y[v],"height"===a?Math.max(g-(y[v].cutHeight||0),0):"d"===a?this.d:g,a,y[v])},addClass:function(a,g){var y=this.attr("class")||"";-1===y.indexOf(a)&&
(g||(a=(y+(y?" ":"")+a).replace("  "," ")),this.attr("class",a));return this},hasClass:function(a){return-1!==B(a,(this.attr("class")||"").split(" "))},removeClass:function(a){return this.attr("class",(this.attr("class")||"").replace(a,""))},symbolAttr:function(a){var y=this;d("x y r start end width height innerR anchorX anchorY".split(" "),function(g){y[g]=G(a[g],y[g])});y.attr({d:y.renderer.symbols[y.symbolName](y.x,y.y,y.width,y.height,y)})},clip:function(a){return this.attr("clip-path",a?"url("+
this.renderer.url+"#"+a.id+")":"none")},crisp:function(a,g){var y;g=g||a.strokeWidth||0;y=Math.round(g)%2/2;a.x=Math.floor(a.x||this.x||0)+y;a.y=Math.floor(a.y||this.y||0)+y;a.width=Math.floor((a.width||this.width||0)-2*y);a.height=Math.floor((a.height||this.height||0)-2*y);u(a.strokeWidth)&&(a.strokeWidth=g);return a},css:function(a){var y=this.styles,b={},v=this.element,k,d="",q,e=!y,z=["textOutline","textOverflow","width"];a&&a.color&&(a.fill=a.color);y&&F(a,function(a,g){a!==y[g]&&(b[g]=a,e=!0)});
e&&(y&&(a=c(y,b)),k=this.textWidth=a&&a.width&&"auto"!==a.width&&"text"===v.nodeName.toLowerCase()&&g(a.width),this.styles=a,k&&!L&&this.renderer.forExport&&delete a.width,K&&!L?n(this.element,a):(q=function(a,y){return"-"+y.toLowerCase()},F(a,function(a,y){-1===B(y,z)&&(d+=y.replace(/([A-Z])/g,q)+":"+a+";")}),d&&f(v,"style",d)),this.added&&("text"===this.element.nodeName&&this.renderer.buildText(this),a&&a.textOutline&&this.applyTextOutline(a.textOutline)));return this},strokeWidth:function(){return this["stroke-width"]||
0},on:function(a,g){var y=this,b=y.element;z&&"click"===a?(b.ontouchstart=function(a){y.touchEventFired=Date.now();a.preventDefault();g.call(b,a)},b.onclick=function(a){(-1===R.navigator.userAgent.indexOf("Android")||1100<Date.now()-(y.touchEventFired||0))&&g.call(b,a)}):b["on"+a]=g;return this},setRadialReference:function(a){var y=this.renderer.gradients[this.element.gradient];this.element.radialReference=a;y&&y.radAttr&&y.animate(this.renderer.getRadialAttr(a,y.radAttr));return this},translate:function(a,
g){return this.attr({translateX:a,translateY:g})},invert:function(a){this.inverted=a;this.updateTransform();return this},updateTransform:function(){var a=this.translateX||0,g=this.translateY||0,b=this.scaleX,v=this.scaleY,c=this.inverted,k=this.rotation,d=this.matrix,q=this.element;c&&(a+=this.width,g+=this.height);a=["translate("+a+","+g+")"];u(d)&&a.push("matrix("+d.join(",")+")");c?a.push("rotate(90) scale(-1,1)"):k&&a.push("rotate("+k+" "+G(this.rotationOriginX,q.getAttribute("x"),0)+" "+G(this.rotationOriginY,
q.getAttribute("y")||0)+")");(u(b)||u(v))&&a.push("scale("+G(b,1)+" "+G(v,1)+")");a.length&&q.setAttribute("transform",a.join(" "))},toFront:function(){var a=this.element;a.parentNode.appendChild(a);return this},align:function(a,g,v){var y,c,k,d,q={};c=this.renderer;k=c.alignedObjects;var e,O;if(a){if(this.alignOptions=a,this.alignByTranslate=g,!v||C(v))this.alignTo=y=v||"renderer",b(k,this),k.push(this),v=null}else a=this.alignOptions,g=this.alignByTranslate,y=this.alignTo;v=G(v,c[y],c);y=a.align;
c=a.verticalAlign;k=(v.x||0)+(a.x||0);d=(v.y||0)+(a.y||0);"right"===y?e=1:"center"===y&&(e=2);e&&(k+=(v.width-(a.width||0))/e);q[g?"translateX":"x"]=Math.round(k);"bottom"===c?O=1:"middle"===c&&(O=2);O&&(d+=(v.height-(a.height||0))/O);q[g?"translateY":"y"]=Math.round(d);this[this.placed?"animate":"attr"](q);this.placed=!0;this.alignAttr=q;return this},getBBox:function(a,g){var y,b=this.renderer,v,k=this.element,q=this.styles,O,z=this.textStr,h,m=b.cache,L=b.cacheKeys,A;g=G(g,this.rotation);v=g*e;
O=q&&q.fontSize;u(z)&&(A=z.toString(),-1===A.indexOf("\x3c")&&(A=A.replace(/[0-9]/g,"0")),A+=["",g||0,O,q&&q.width,q&&q.textOverflow].join());A&&!a&&(y=m[A]);if(!y){if(k.namespaceURI===this.SVG_NS||b.forExport){try{(h=this.fakeTS&&function(a){d(k.querySelectorAll(".highcharts-text-outline"),function(y){y.style.display=a})})&&h("none"),y=k.getBBox?c({},k.getBBox()):{width:k.offsetWidth,height:k.offsetHeight},h&&h("")}catch(W){}if(!y||0>y.width)y={width:0,height:0}}else y=this.htmlGetBBox();b.isSVG&&
(a=y.width,b=y.height,q&&"11px"===q.fontSize&&17===Math.round(b)&&(y.height=b=14),g&&(y.width=Math.abs(b*Math.sin(v))+Math.abs(a*Math.cos(v)),y.height=Math.abs(b*Math.cos(v))+Math.abs(a*Math.sin(v))));if(A&&0<y.height){for(;250<L.length;)delete m[L.shift()];m[A]||L.push(A);m[A]=y}}return y},show:function(a){return this.attr({visibility:a?"inherit":"visible"})},hide:function(){return this.attr({visibility:"hidden"})},fadeOut:function(a){var y=this;y.animate({opacity:0},{duration:a||150,complete:function(){y.attr({y:-9999})}})},
add:function(a){var y=this.renderer,g=this.element,b;a&&(this.parentGroup=a);this.parentInverted=a&&a.inverted;void 0!==this.textStr&&y.buildText(this);this.added=!0;if(!a||a.handleZ||this.zIndex)b=this.zIndexSetter();b||(a?a.element:y.box).appendChild(g);if(this.onAdd)this.onAdd();return this},safeRemoveChild:function(a){var y=a.parentNode;y&&y.removeChild(a)},destroy:function(){var a=this,g=a.element||{},v=a.renderer.isSVG&&"SPAN"===g.nodeName&&a.parentGroup,c=g.ownerSVGElement;g.onclick=g.onmouseout=
g.onmouseover=g.onmousemove=g.point=null;Q(a);a.clipPath&&c&&(d(c.querySelectorAll("[clip-path],[CLIP-PATH]"),function(g){g.getAttribute("clip-path").match(RegExp('[("]#'+a.clipPath.element.id+'[)"]'))&&g.removeAttribute("clip-path")}),a.clipPath=a.clipPath.destroy());if(a.stops){for(c=0;c<a.stops.length;c++)a.stops[c]=a.stops[c].destroy();a.stops=null}a.safeRemoveChild(g);for(a.destroyShadows();v&&v.div&&0===v.div.childNodes.length;)g=v.parentGroup,a.safeRemoveChild(v.div),delete v.div,v=g;a.alignTo&&
b(a.renderer.alignedObjects,a);F(a,function(g,y){delete a[y]});return null},shadow:function(a,g,b){var y=[],v,c,k=this.element,d,q,e,z;if(!a)this.destroyShadows();else if(!this.shadows){q=G(a.width,3);e=(a.opacity||.15)/q;z=this.parentInverted?"(-1,-1)":"("+G(a.offsetX,1)+", "+G(a.offsetY,1)+")";for(v=1;v<=q;v++)c=k.cloneNode(0),d=2*q+1-2*v,f(c,{isShadow:"true",stroke:a.color||"#000000","stroke-opacity":e*v,"stroke-width":d,transform:"translate"+z,fill:"none"}),b&&(f(c,"height",Math.max(f(c,"height")-
d,0)),c.cutHeight=d),g?g.element.appendChild(c):k.parentNode&&k.parentNode.insertBefore(c,k),y.push(c);this.shadows=y}return this},destroyShadows:function(){d(this.shadows||[],function(a){this.safeRemoveChild(a)},this);this.shadows=void 0},xGetter:function(a){"circle"===this.element.nodeName&&("x"===a?a="cx":"y"===a&&(a="cy"));return this._defaultGetter(a)},_defaultGetter:function(a){a=G(this[a+"Value"],this[a],this.element?this.element.getAttribute(a):null,0);/^[\-0-9\.]+$/.test(a)&&(a=parseFloat(a));
return a},dSetter:function(a,g,b){a&&a.join&&(a=a.join(" "));/(NaN| {2}|^$)/.test(a)&&(a="M 0 0");this[g]!==a&&(b.setAttribute(g,a),this[g]=a)},dashstyleSetter:function(a){var b,v=this["stroke-width"];"inherit"===v&&(v=1);if(a=a&&a.toLowerCase()){a=a.replace("shortdashdotdot","3,1,1,1,1,1,").replace("shortdashdot","3,1,1,1").replace("shortdot","1,1,").replace("shortdash","3,1,").replace("longdash","8,3,").replace(/dot/g,"1,3,").replace("dash","4,3,").replace(/,$/,"").split(",");for(b=a.length;b--;)a[b]=
g(a[b])*v;a=a.join(",").replace(/NaN/g,"none");this.element.setAttribute("stroke-dasharray",a)}},alignSetter:function(a){this.alignValue=a;this.element.setAttribute("text-anchor",{left:"start",center:"middle",right:"end"}[a])},opacitySetter:function(a,g,b){this[g]=a;b.setAttribute(g,a)},titleSetter:function(a){var g=this.element.getElementsByTagName("title")[0];g||(g=m.createElementNS(this.SVG_NS,"title"),this.element.appendChild(g));g.firstChild&&g.removeChild(g.firstChild);g.appendChild(m.createTextNode(String(G(a),
"").replace(/<[^>]*>/g,"")))},textSetter:function(a){a!==this.textStr&&(delete this.bBox,this.textStr=a,this.added&&this.renderer.buildText(this))},fillSetter:function(a,g,b){"string"===typeof a?b.setAttribute(g,a):a&&this.colorGradient(a,g,b)},visibilitySetter:function(a,g,b){"inherit"===a?b.removeAttribute(g):this[g]!==a&&b.setAttribute(g,a);this[g]=a},zIndexSetter:function(a,b){var v=this.renderer,y=this.parentGroup,c=(y||v).element||v.box,k,d=this.element,q,e,v=c===v.box;k=this.added;var z;u(a)&&
(d.zIndex=a,a=+a,this[b]===a&&(k=!1),this[b]=a);if(k){(a=this.zIndex)&&y&&(y.handleZ=!0);b=c.childNodes;for(z=b.length-1;0<=z&&!q;z--)if(y=b[z],k=y.zIndex,e=!u(k),y!==d)if(0>a&&e&&!v&&!z)c.insertBefore(d,b[z]),q=!0;else if(g(k)<=a||e&&(!u(a)||0<=a))c.insertBefore(d,b[z+1]||null),q=!0;q||(c.insertBefore(d,b[v?3:0]||null),q=!0)}return q},_defaultSetter:function(a,g,b){b.setAttribute(g,a)}});E.prototype.yGetter=E.prototype.xGetter;E.prototype.translateXSetter=E.prototype.translateYSetter=E.prototype.rotationSetter=
E.prototype.verticalAlignSetter=E.prototype.rotationOriginXSetter=E.prototype.rotationOriginYSetter=E.prototype.scaleXSetter=E.prototype.scaleYSetter=E.prototype.matrixSetter=function(a,g){this[g]=a;this.doTransform=!0};E.prototype["stroke-widthSetter"]=E.prototype.strokeSetter=function(a,g,b){this[g]=a;this.stroke&&this["stroke-width"]?(E.prototype.fillSetter.call(this,this.stroke,"stroke",b),b.setAttribute("stroke-width",this["stroke-width"]),this.hasStroke=!0):"stroke-width"===g&&0===a&&this.hasStroke&&
(b.removeAttribute("stroke"),this.hasStroke=!1)};D=a.SVGRenderer=function(){this.init.apply(this,arguments)};c(D.prototype,{Element:E,SVG_NS:P,init:function(a,g,b,v,c,k){var y;v=this.createElement("svg").attr({version:"1.1","class":"highcharts-root"}).css(this.getStyle(v));y=v.element;a.appendChild(y);f(a,"dir","ltr");-1===a.innerHTML.indexOf("xmlns")&&f(y,"xmlns",this.SVG_NS);this.isSVG=!0;this.box=y;this.boxWrapper=v;this.alignedObjects=[];this.url=(x||N)&&m.getElementsByTagName("base").length?
R.location.href.replace(/#.*?$/,"").replace(/<[^>]*>/g,"").replace(/([\('\)])/g,"\\$1").replace(/ /g,"%20"):"";this.createElement("desc").add().element.appendChild(m.createTextNode("Created with Highcharts 6.0.4"));this.defs=this.createElement("defs").add();this.allowHTML=k;this.forExport=c;this.gradients={};this.cache={};this.cacheKeys=[];this.imgCount=0;this.setSize(g,b,!1);var d;x&&a.getBoundingClientRect&&(g=function(){n(a,{left:0,top:0});d=a.getBoundingClientRect();n(a,{left:Math.ceil(d.left)-
d.left+"px",top:Math.ceil(d.top)-d.top+"px"})},g(),this.unSubPixelFix=H(R,"resize",g))},getStyle:function(a){return this.style=c({fontFamily:'"Lucida Grande", "Lucida Sans Unicode", Arial, Helvetica, sans-serif',fontSize:"12px"},a)},setStyle:function(a){this.boxWrapper.css(this.getStyle(a))},isHidden:function(){return!this.boxWrapper.getBBox().width},destroy:function(){var a=this.defs;this.box=null;this.boxWrapper=this.boxWrapper.destroy();h(this.gradients||{});this.gradients=null;a&&(this.defs=a.destroy());
this.unSubPixelFix&&this.unSubPixelFix();return this.alignedObjects=null},createElement:function(a){var g=new this.Element;g.init(this,a);return g},draw:A,getRadialAttr:function(a,g){return{cx:a[0]-a[2]/2+g.cx*a[2],cy:a[1]-a[2]/2+g.cy*a[2],r:g.r*a[2]}},getSpanWidth:function(a,g){var b=a.getBBox(!0).width;!L&&this.forExport&&(b=this.measureSpanWidth(g.firstChild.data,a.styles));return b},applyEllipsis:function(a,g,b,v){var c=a.rotation,y=b,k,d=0,q=b.length,e=function(a){g.removeChild(g.firstChild);
a&&g.appendChild(m.createTextNode(a))},z;a.rotation=0;y=this.getSpanWidth(a,g);if(z=y>v){for(;d<=q;)k=Math.ceil((d+q)/2),y=b.substring(0,k)+"\u2026",e(y),y=this.getSpanWidth(a,g),d===q?d=q+1:y>v?q=k-1:d=k;0===q&&e("")}a.rotation=c;return z},escapes:{"\x26":"\x26amp;","\x3c":"\x26lt;","\x3e":"\x26gt;","'":"\x26#39;",'"':"\x26quot;"},buildText:function(a){var b=a.element,v=this,c=v.forExport,y=G(a.textStr,"").toString(),q=-1!==y.indexOf("\x3c"),e=b.childNodes,z,h,A,J,t=f(b,"x"),x=a.styles,B=a.textWidth,
l=x&&x.lineHeight,C=x&&x.textOutline,u=x&&"ellipsis"===x.textOverflow,Q=x&&"nowrap"===x.whiteSpace,w=x&&x.fontSize,R,I,r=e.length,x=B&&!a.added&&this.box,p=function(a){var c;c=/(px|em)$/.test(a&&a.style.fontSize)?a.style.fontSize:w||v.style.fontSize||12;return l?g(l):v.fontMetrics(c,a.getAttribute("style")?a:b).h},K=function(a){F(v.escapes,function(g,b){a=a.replace(new RegExp(g,"g"),b)});return a};R=[y,u,Q,l,C,w,B].join();if(R!==a.textCache){for(a.textCache=R;r--;)b.removeChild(e[r]);q||C||u||B||
-1!==y.indexOf(" ")?(z=/<.*class="([^"]+)".*>/,h=/<.*style="([^"]+)".*>/,A=/<.*href="([^"]+)".*>/,x&&x.appendChild(b),y=q?y.replace(/<(b|strong)>/g,'\x3cspan style\x3d"font-weight:bold"\x3e').replace(/<(i|em)>/g,'\x3cspan style\x3d"font-style:italic"\x3e').replace(/<a/g,"\x3cspan").replace(/<\/(b|strong|i|em|a)>/g,"\x3c/span\x3e").split(/<br.*?>/g):[y],y=k(y,function(a){return""!==a}),d(y,function(g,y){var k,q=0;g=g.replace(/^\s+|\s+$/g,"").replace(/<span/g,"|||\x3cspan").replace(/<\/span>/g,"\x3c/span\x3e|||");
k=g.split("|||");d(k,function(g){if(""!==g||1===k.length){var d={},e=m.createElementNS(v.SVG_NS,"tspan"),x,F;z.test(g)&&(x=g.match(z)[1],f(e,"class",x));h.test(g)&&(F=g.match(h)[1].replace(/(;| |^)color([ :])/,"$1fill$2"),f(e,"style",F));A.test(g)&&!c&&(f(e,"onclick",'location.href\x3d"'+g.match(A)[1]+'"'),f(e,"class","highcharts-anchor"),n(e,{cursor:"pointer"}));g=K(g.replace(/<[a-zA-Z\/](.|\n)*?>/g,"")||" ");if(" "!==g){e.appendChild(m.createTextNode(g));q?d.dx=0:y&&null!==t&&(d.x=t);f(e,d);b.appendChild(e);
!q&&I&&(!L&&c&&n(e,{display:"block"}),f(e,"dy",p(e)));if(B){d=g.replace(/([^\^])-/g,"$1- ").split(" ");x=1<k.length||y||1<d.length&&!Q;var O=[],l,C=p(e),G=a.rotation;for(u&&(J=v.applyEllipsis(a,e,g,B));!u&&x&&(d.length||O.length);)a.rotation=0,l=v.getSpanWidth(a,e),g=l>B,void 0===J&&(J=g),g&&1!==d.length?(e.removeChild(e.firstChild),O.unshift(d.pop())):(d=O,O=[],d.length&&!Q&&(e=m.createElementNS(P,"tspan"),f(e,{dy:C,x:t}),F&&f(e,"style",F),b.appendChild(e)),l>B&&(B=l)),d.length&&e.appendChild(m.createTextNode(d.join(" ").replace(/- /g,
"-")));a.rotation=G}q++}}});I=I||b.childNodes.length}),J&&a.attr("title",a.textStr),x&&x.removeChild(b),C&&a.applyTextOutline&&a.applyTextOutline(C)):b.appendChild(m.createTextNode(K(y)))}},getContrast:function(a){a=r(a).rgba;return 510<a[0]+a[1]+a[2]?"#000000":"#FFFFFF"},button:function(a,g,b,v,d,k,e,z,h){var y=this.label(a,g,b,h,null,null,null,null,"button"),m=0;y.attr(q({padding:8,r:2},d));var A,L,J,t;d=q({fill:"#f7f7f7",stroke:"#cccccc","stroke-width":1,style:{color:"#333333",cursor:"pointer",
fontWeight:"normal"}},d);A=d.style;delete d.style;k=q(d,{fill:"#e6e6e6"},k);L=k.style;delete k.style;e=q(d,{fill:"#e6ebf5",style:{color:"#000000",fontWeight:"bold"}},e);J=e.style;delete e.style;z=q(d,{style:{color:"#cccccc"}},z);t=z.style;delete z.style;H(y.element,K?"mouseover":"mouseenter",function(){3!==m&&y.setState(1)});H(y.element,K?"mouseout":"mouseleave",function(){3!==m&&y.setState(m)});y.setState=function(a){1!==a&&(y.state=m=a);y.removeClass(/highcharts-button-(normal|hover|pressed|disabled)/).addClass("highcharts-button-"+
["normal","hover","pressed","disabled"][a||0]);y.attr([d,k,e,z][a||0]).css([A,L,J,t][a||0])};y.attr(d).css(c({cursor:"default"},A));return y.on("click",function(a){3!==m&&v.call(y,a)})},crispLine:function(a,g){a[1]===a[4]&&(a[1]=a[4]=Math.round(a[1])-g%2/2);a[2]===a[5]&&(a[2]=a[5]=Math.round(a[2])+g%2/2);return a},path:function(a){var g={fill:"none"};I(a)?g.d=a:t(a)&&c(g,a);return this.createElement("path").attr(g)},circle:function(a,g,b){a=t(a)?a:{x:a,y:g,r:b};g=this.createElement("circle");g.xSetter=
g.ySetter=function(a,g,b){b.setAttribute("c"+g,a)};return g.attr(a)},arc:function(a,g,b,v,c,d){t(a)?(v=a,g=v.y,b=v.r,a=v.x):v={innerR:v,start:c,end:d};a=this.symbol("arc",a,g,b,b,v);a.r=b;return a},rect:function(a,g,b,v,c,d){c=t(a)?a.r:c;var k=this.createElement("rect");a=t(a)?a:void 0===a?{}:{x:a,y:g,width:Math.max(b,0),height:Math.max(v,0)};void 0!==d&&(a.strokeWidth=d,a=k.crisp(a));a.fill="none";c&&(a.r=c);k.rSetter=function(a,g,b){f(b,{rx:a,ry:a})};return k.attr(a)},setSize:function(a,g,b){var v=
this.alignedObjects,c=v.length;this.width=a;this.height=g;for(this.boxWrapper.animate({width:a,height:g},{step:function(){this.attr({viewBox:"0 0 "+this.attr("width")+" "+this.attr("height")})},duration:G(b,!0)?void 0:0});c--;)v[c].align()},g:function(a){var g=this.createElement("g");return a?g.attr({"class":"highcharts-"+a}):g},image:function(a,g,b,v,d){var k={preserveAspectRatio:"none"};1<arguments.length&&c(k,{x:g,y:b,width:v,height:d});k=this.createElement("image").attr(k);k.element.setAttributeNS?
k.element.setAttributeNS("http://www.w3.org/1999/xlink","href",a):k.element.setAttribute("hc-svg-href",a);return k},symbol:function(a,g,b,v,k,q){var e=this,y,z=/^url\((.*?)\)$/,h=z.test(a),A=!h&&(this.symbols[a]?a:"circle"),L=A&&this.symbols[A],t=u(g)&&L&&L.call(this.symbols,Math.round(g),Math.round(b),v,k,q),x,F;L?(y=this.path(t),y.attr("fill","none"),c(y,{symbolName:A,x:g,y:b,width:v,height:k}),q&&c(y,q)):h&&(x=a.match(z)[1],y=this.image(x),y.imgwidth=G(J[x]&&J[x].width,q&&q.width),y.imgheight=
G(J[x]&&J[x].height,q&&q.height),F=function(){y.attr({width:y.width,height:y.height})},d(["width","height"],function(a){y[a+"Setter"]=function(a,g){var b={},v=this["img"+g],c="width"===g?"translateX":"translateY";this[g]=a;u(v)&&(this.element&&this.element.setAttribute(g,v),this.alignByTranslate||(b[c]=((this[g]||0)-v)/2,this.attr(b)))}}),u(g)&&y.attr({x:g,y:b}),y.isImg=!0,u(y.imgwidth)&&u(y.imgheight)?F():(y.attr({width:0,height:0}),w("img",{onload:function(){var a=l[e.chartIndex];0===this.width&&
(n(this,{position:"absolute",top:"-999em"}),m.body.appendChild(this));J[x]={width:this.width,height:this.height};y.imgwidth=this.width;y.imgheight=this.height;y.element&&F();this.parentNode&&this.parentNode.removeChild(this);e.imgCount--;if(!e.imgCount&&a&&a.onload)a.onload()},src:x}),this.imgCount++));return y},symbols:{circle:function(a,g,b,v){return this.arc(a+b/2,g+v/2,b/2,v/2,{start:0,end:2*Math.PI,open:!1})},square:function(a,g,b,v){return["M",a,g,"L",a+b,g,a+b,g+v,a,g+v,"Z"]},triangle:function(a,
g,b,v){return["M",a+b/2,g,"L",a+b,g+v,a,g+v,"Z"]},"triangle-down":function(a,g,b,v){return["M",a,g,"L",a+b,g,a+b/2,g+v,"Z"]},diamond:function(a,g,b,v){return["M",a+b/2,g,"L",a+b,g+v/2,a+b/2,g+v,a,g+v/2,"Z"]},arc:function(a,g,b,v,c){var k=c.start,d=c.r||b,q=c.r||v||b,e=c.end-.001;b=c.innerR;v=G(c.open,.001>Math.abs(c.end-c.start-2*Math.PI));var y=Math.cos(k),z=Math.sin(k),h=Math.cos(e),e=Math.sin(e);c=.001>c.end-k-Math.PI?0:1;d=["M",a+d*y,g+q*z,"A",d,q,0,c,1,a+d*h,g+q*e];u(b)&&d.push(v?"M":"L",a+b*
h,g+b*e,"A",b,b,0,c,0,a+b*y,g+b*z);d.push(v?"":"Z");return d},callout:function(a,g,b,v,c){var d=Math.min(c&&c.r||0,b,v),k=d+6,q=c&&c.anchorX;c=c&&c.anchorY;var e;e=["M",a+d,g,"L",a+b-d,g,"C",a+b,g,a+b,g,a+b,g+d,"L",a+b,g+v-d,"C",a+b,g+v,a+b,g+v,a+b-d,g+v,"L",a+d,g+v,"C",a,g+v,a,g+v,a,g+v-d,"L",a,g+d,"C",a,g,a,g,a+d,g];q&&q>b?c>g+k&&c<g+v-k?e.splice(13,3,"L",a+b,c-6,a+b+6,c,a+b,c+6,a+b,g+v-d):e.splice(13,3,"L",a+b,v/2,q,c,a+b,v/2,a+b,g+v-d):q&&0>q?c>g+k&&c<g+v-k?e.splice(33,3,"L",a,c+6,a-6,c,a,c-6,
a,g+d):e.splice(33,3,"L",a,v/2,q,c,a,v/2,a,g+d):c&&c>v&&q>a+k&&q<a+b-k?e.splice(23,3,"L",q+6,g+v,q,g+v+6,q-6,g+v,a+d,g+v):c&&0>c&&q>a+k&&q<a+b-k&&e.splice(3,3,"L",q-6,g,q,g-6,q+6,g,b-d,g);return e}},clipRect:function(g,b,v,c){var d=a.uniqueKey(),k=this.createElement("clipPath").attr({id:d}).add(this.defs);g=this.rect(g,b,v,c,0).add(k);g.id=d;g.clipPath=k;g.count=0;return g},text:function(a,g,b,v){var c={};if(v&&(this.allowHTML||!this.forExport))return this.html(a,g,b);c.x=Math.round(g||0);b&&(c.y=
Math.round(b));if(a||0===a)c.text=a;a=this.createElement("text").attr(c);v||(a.xSetter=function(a,g,b){var v=b.getElementsByTagName("tspan"),c,d=b.getAttribute(g),k;for(k=0;k<v.length;k++)c=v[k],c.getAttribute(g)===d&&c.setAttribute(g,a);b.setAttribute(g,a)});return a},fontMetrics:function(a,b){a=a||b&&b.style&&b.style.fontSize||this.style&&this.style.fontSize;a=/px/.test(a)?g(a):/em/.test(a)?parseFloat(a)*(b?this.fontMetrics(null,b.parentNode).f:16):12;b=24>a?a+3:Math.round(1.2*a);return{h:b,b:Math.round(.8*
b),f:a}},rotCorr:function(a,g,b){var v=a;g&&b&&(v=Math.max(v*Math.cos(g*e),4));return{x:-a/3*Math.sin(g*e),y:v}},label:function(g,b,k,e,z,h,m,A,L){var y=this,J=y.g("button"!==L&&"label"),t=J.text=y.text("",0,0,m).attr({zIndex:1}),x,F,n=0,B=3,l=0,C,f,Q,G,w,R={},I,P,r=/^url\((.*?)\)$/.test(e),p=r,K,O,N,T;L&&J.addClass("highcharts-"+L);p=r;K=function(){return(I||0)%2/2};O=function(){var a=t.element.style,g={};F=(void 0===C||void 0===f||w)&&u(t.textStr)&&t.getBBox();J.width=(C||F.width||0)+2*B+l;J.height=
(f||F.height||0)+2*B;P=B+y.fontMetrics(a&&a.fontSize,t).b;p&&(x||(J.box=x=y.symbols[e]||r?y.symbol(e):y.rect(),x.addClass(("button"===L?"":"highcharts-label-box")+(L?" highcharts-"+L+"-box":"")),x.add(J),a=K(),g.x=a,g.y=(A?-P:0)+a),g.width=Math.round(J.width),g.height=Math.round(J.height),x.attr(c(g,R)),R={})};N=function(){var a=l+B,g;g=A?0:P;u(C)&&F&&("center"===w||"right"===w)&&(a+={center:.5,right:1}[w]*(C-F.width));if(a!==t.x||g!==t.y)t.attr("x",a),void 0!==g&&t.attr("y",g);t.x=a;t.y=g};T=function(a,
g){x?x.attr(a,g):R[a]=g};J.onAdd=function(){t.add(J);J.attr({text:g||0===g?g:"",x:b,y:k});x&&u(z)&&J.attr({anchorX:z,anchorY:h})};J.widthSetter=function(g){C=a.isNumber(g)?g:null};J.heightSetter=function(a){f=a};J["text-alignSetter"]=function(a){w=a};J.paddingSetter=function(a){u(a)&&a!==B&&(B=J.padding=a,N())};J.paddingLeftSetter=function(a){u(a)&&a!==l&&(l=a,N())};J.alignSetter=function(a){a={left:0,center:.5,right:1}[a];a!==n&&(n=a,F&&J.attr({x:Q}))};J.textSetter=function(a){void 0!==a&&t.textSetter(a);
O();N()};J["stroke-widthSetter"]=function(a,g){a&&(p=!0);I=this["stroke-width"]=a;T(g,a)};J.strokeSetter=J.fillSetter=J.rSetter=function(a,g){"r"!==g&&("fill"===g&&a&&(p=!0),J[g]=a);T(g,a)};J.anchorXSetter=function(a,g){z=J.anchorX=a;T(g,Math.round(a)-K()-Q)};J.anchorYSetter=function(a,g){h=J.anchorY=a;T(g,a-G)};J.xSetter=function(a){J.x=a;n&&(a-=n*((C||F.width)+2*B));Q=Math.round(a);J.attr("translateX",Q)};J.ySetter=function(a){G=J.y=Math.round(a);J.attr("translateY",G)};var U=J.css;return c(J,{css:function(a){if(a){var g=
{};a=q(a);d(J.textProps,function(b){void 0!==a[b]&&(g[b]=a[b],delete a[b])});t.css(g)}return U.call(J,a)},getBBox:function(){return{width:F.width+2*B,height:F.height+2*B,x:F.x-B,y:F.y-B}},shadow:function(a){a&&(O(),x&&x.shadow(a));return J},destroy:function(){v(J.element,"mouseenter");v(J.element,"mouseleave");t&&(t=t.destroy());x&&(x=x.destroy());E.prototype.destroy.call(J);J=y=O=N=T=null}})}});a.Renderer=D})(M);(function(a){var E=a.attr,D=a.createElement,H=a.css,p=a.defined,f=a.each,l=a.extend,
r=a.isFirefox,n=a.isMS,w=a.isWebKit,u=a.pick,e=a.pInt,h=a.SVGRenderer,m=a.win,d=a.wrap;l(a.SVGElement.prototype,{htmlCss:function(a){var b=this.element;if(b=a&&"SPAN"===b.tagName&&a.width)delete a.width,this.textWidth=b,this.updateTransform();a&&"ellipsis"===a.textOverflow&&(a.whiteSpace="nowrap",a.overflow="hidden");this.styles=l(this.styles,a);H(this.element,a);return this},htmlGetBBox:function(){var a=this.element;return{x:a.offsetLeft,y:a.offsetTop,width:a.offsetWidth,height:a.offsetHeight}},
htmlUpdateTransform:function(){if(this.added){var a=this.renderer,b=this.element,d=this.translateX||0,z=this.translateY||0,h=this.x||0,m=this.y||0,x=this.textAlign||"left",n={left:0,center:.5,right:1}[x],t=this.styles;H(b,{marginLeft:d,marginTop:z});this.shadows&&f(this.shadows,function(a){H(a,{marginLeft:d+1,marginTop:z+1})});this.inverted&&f(b.childNodes,function(c){a.invertChild(c,b)});if("SPAN"===b.tagName){var l=this.rotation,u=e(this.textWidth),q=t&&t.whiteSpace,A=[l,x,b.innerHTML,this.textWidth,
this.textAlign].join();A!==this.cTT&&(t=a.fontMetrics(b.style.fontSize).b,p(l)&&this.setSpanRotation(l,n,t),H(b,{width:"",whiteSpace:q||"nowrap"}),b.offsetWidth>u&&/[ \-]/.test(b.textContent||b.innerText)&&H(b,{width:u+"px",display:"block",whiteSpace:q||"normal"}),this.getSpanCorrection(b.offsetWidth,t,n,l,x));H(b,{left:h+(this.xCorr||0)+"px",top:m+(this.yCorr||0)+"px"});w&&(t=b.offsetHeight);this.cTT=A}}else this.alignOnAdd=!0},setSpanRotation:function(a,b,d){var c={},k=this.renderer.getTransformKey();
c[k]=c.transform="rotate("+a+"deg)";c[k+(r?"Origin":"-origin")]=c.transformOrigin=100*b+"% "+d+"px";H(this.element,c)},getSpanCorrection:function(a,b,d){this.xCorr=-a*d;this.yCorr=-b}});l(h.prototype,{getTransformKey:function(){return n&&!/Edge/.test(m.navigator.userAgent)?"-ms-transform":w?"-webkit-transform":r?"MozTransform":m.opera?"-o-transform":""},html:function(a,b,k){var c=this.createElement("span"),e=c.element,h=c.renderer,m=h.isSVG,w=function(a,b){f(["opacity","visibility"],function(c){d(a,
c+"Setter",function(a,c,d,k){a.call(this,c,d,k);b[d]=c})})};c.textSetter=function(a){a!==e.innerHTML&&delete this.bBox;this.textStr=a;e.innerHTML=u(a,"");c.htmlUpdateTransform()};m&&w(c,c.element.style);c.xSetter=c.ySetter=c.alignSetter=c.rotationSetter=function(a,b){"align"===b&&(b="textAlign");c[b]=a;c.htmlUpdateTransform()};c.attr({text:a,x:Math.round(b),y:Math.round(k)}).css({fontFamily:this.style.fontFamily,fontSize:this.style.fontSize,position:"absolute"});e.style.whiteSpace="nowrap";c.css=
c.htmlCss;m&&(c.add=function(a){var b,d=h.box.parentNode,k=[];if(this.parentGroup=a){if(b=a.div,!b){for(;a;)k.push(a),a=a.parentGroup;f(k.reverse(),function(a){function e(g,b){a[b]=g;n?q[h.getTransformKey()]="translate("+(a.x||a.translateX)+"px,"+(a.y||a.translateY)+"px)":"translateX"===b?q.left=g+"px":q.top=g+"px";a.doTransform=!0}var q,g=E(a.element,"class");g&&(g={className:g});b=a.div=a.div||D("div",g,{position:"absolute",left:(a.translateX||0)+"px",top:(a.translateY||0)+"px",display:a.display,
opacity:a.opacity,pointerEvents:a.styles&&a.styles.pointerEvents},b||d);q=b.style;l(a,{classSetter:function(a){return function(g){this.element.setAttribute("class",g);a.className=g}}(b),on:function(){k[0].div&&c.on.apply({element:k[0].div},arguments);return a},translateXSetter:e,translateYSetter:e});w(a,q)})}}else b=d;b.appendChild(e);c.added=!0;c.alignOnAdd&&c.htmlUpdateTransform();return c});return c}})})(M);(function(a){function E(){var n=a.defaultOptions.global,l=r.moment;if(n.timezone){if(l)return function(a){return-l.tz(a,
n.timezone).utcOffset()};a.error(25)}return n.useUTC&&n.getTimezoneOffset}function D(){var n=a.defaultOptions.global,f,u=n.useUTC,e=u?"getUTC":"get",h=u?"setUTC":"set",m="Minutes Hours Day Date Month FullYear".split(" "),d=m.concat(["Milliseconds","Seconds"]);a.Date=f=n.Date||r.Date;f.hcTimezoneOffset=u&&n.timezoneOffset;f.hcGetTimezoneOffset=E();f.hcHasTimeZone=!(!f.hcTimezoneOffset&&!f.hcGetTimezoneOffset);f.hcMakeTime=function(a,b,d,e,h,m){var c;u?(c=f.UTC.apply(0,arguments),c+=p(c)):c=(new f(a,
b,l(d,1),l(e,0),l(h,0),l(m,0))).getTime();return c};for(n=0;n<m.length;n++)f["hcGet"+m[n]]=e+m[n];for(n=0;n<d.length;n++)f["hcSet"+d[n]]=h+d[n]}var H=a.color,p=a.getTZOffset,f=a.merge,l=a.pick,r=a.win;a.defaultOptions={colors:"#094991 #BCBEC0 #90ed7d #f7a35c #8085e9 #f15c80 #e4d354 #2b908f #f45b5b #91e8e1".split(" "),symbols:["circle","diamond","square","triangle","triangle-down"],lang:{loading:"Loading...",months:"January February March April May June July August September October November December".split(" "),
shortMonths:"Jan Feb Mar Apr May Jun Jul Aug Sep Oct Nov Dec".split(" "),weekdays:"Sunday Monday Tuesday Wednesday Thursday Friday Saturday".split(" "),decimalPoint:".",numericSymbols:"kMGTPE".split(""),resetZoom:"Reset zoom",resetZoomTitle:"Reset zoom level 1:1",thousandsSep:" "},global:{useUTC:!0},chart:{borderRadius:0,defaultSeriesType:"line",ignoreHiddenSeries:!0,spacing:[10,10,15,10],resetZoomButton:{theme:{zIndex:6},position:{align:"right",x:-10,y:10}},width:null,height:null,borderColor:"#335cad",
backgroundColor:"#ffffff",plotBorderColor:"#cccccc"},title:{text:"Chart title",align:"center",margin:15,widthAdjust:-44},subtitle:{text:"",align:"center",widthAdjust:-44},plotOptions:{},labels:{style:{position:"absolute",color:"#333333"}},legend:{enabled:!0,align:"center",layout:"horizontal",labelFormatter:function(){return this.name},borderColor:"#999999",borderRadius:0,navigation:{activeColor:"#003399",inactiveColor:"#cccccc"},itemStyle:{color:"#333333",fontSize:"12px",fontWeight:"bold",textOverflow:"ellipsis"},
itemHoverStyle:{color:"#000000"},itemHiddenStyle:{color:"#cccccc"},shadow:!1,itemCheckboxStyle:{position:"absolute",width:"13px",height:"13px"},squareSymbol:!0,symbolPadding:5,verticalAlign:"bottom",x:0,y:0,title:{style:{fontWeight:"bold"}}},loading:{labelStyle:{fontWeight:"bold",position:"relative",top:"45%"},style:{position:"absolute",backgroundColor:"#ffffff",opacity:.5,textAlign:"center"}},tooltip:{enabled:!0,animation:a.svg,borderRadius:3,dateTimeLabelFormats:{millisecond:"%A, %b %e, %H:%M:%S.%L",
second:"%A, %b %e, %H:%M:%S",minute:"%A, %b %e, %H:%M",hour:"%A, %b %e, %H:%M",day:"%A, %b %e, %Y",week:"Week from %A, %b %e, %Y",month:"%B %Y",year:"%Y"},footerFormat:"",padding:8,snap:a.isTouchDevice?25:10,backgroundColor:H("#f7f7f7").setOpacity(.85).get(),borderWidth:1,headerFormat:'\x3cspan style\x3d"font-size: 10px"\x3e{point.key}\x3c/span\x3e\x3cbr/\x3e',pointFormat:'\x3cspan style\x3d"color:{point.color}"\x3e\u25cf\x3c/span\x3e {series.name}: \x3cb\x3e{point.y}\x3c/b\x3e\x3cbr/\x3e',shadow:!0,
style:{color:"#333333",cursor:"default",fontSize:"12px",pointerEvents:"none",whiteSpace:"nowrap"}},credits:{enabled:!0,href:"http://www.highcharts.com",position:{align:"right",x:-10,verticalAlign:"bottom",y:-5},style:{cursor:"pointer",color:"#999999",fontSize:"9px"},text:"Highcharts.com"}};a.setOptions=function(n){a.defaultOptions=f(!0,a.defaultOptions,n);D();return a.defaultOptions};a.getOptions=function(){return a.defaultOptions};a.defaultPlotOptions=a.defaultOptions.plotOptions;D()})(M);(function(a){var E=
a.correctFloat,D=a.defined,H=a.destroyObjectProperties,p=a.isNumber,f=a.merge,l=a.pick,r=a.deg2rad;a.Tick=function(a,l,f,e){this.axis=a;this.pos=l;this.type=f||"";this.isNewLabel=this.isNew=!0;f||e||this.addLabel()};a.Tick.prototype={addLabel:function(){var a=this.axis,w=a.options,u=a.chart,e=a.categories,h=a.names,m=this.pos,d=w.labels,c=a.tickPositions,b=m===c[0],k=m===c[c.length-1],h=e?l(e[m],h[m],m):m,e=this.label,c=c.info,z;a.isDatetimeAxis&&c&&(z=w.dateTimeLabelFormats[c.higherRanks[m]||c.unitName]);
this.isFirst=b;this.isLast=k;w=a.labelFormatter.call({axis:a,chart:u,isFirst:b,isLast:k,dateTimeLabelFormat:z,value:a.isLog?E(a.lin2log(h)):h,pos:m});D(e)?e&&e.attr({text:w}):(this.labelLength=(this.label=e=D(w)&&d.enabled?u.renderer.text(w,0,0,d.useHTML).css(f(d.style)).add(a.labelGroup):null)&&e.getBBox().width,this.rotation=0)},getLabelSize:function(){return this.label?this.label.getBBox()[this.axis.horiz?"height":"width"]:0},handleOverflow:function(a){var f=this.axis,n=f.options.labels,e=a.x,
h=f.chart.chartWidth,m=f.chart.spacing,d=l(f.labelLeft,Math.min(f.pos,m[3])),m=l(f.labelRight,Math.max(f.isRadial?0:f.pos+f.len,h-m[1])),c=this.label,b=this.rotation,k={left:0,center:.5,right:1}[f.labelAlign||c.attr("align")],z=c.getBBox().width,B=f.getSlotWidth(),I=B,x=1,p,t={};if(b||!1===n.overflow)0>b&&e-k*z<d?p=Math.round(e/Math.cos(b*r)-d):0<b&&e+k*z>m&&(p=Math.round((h-e)/Math.cos(b*r)));else if(h=e+(1-k)*z,e-k*z<d?I=a.x+I*(1-k)-d:h>m&&(I=m-a.x+I*k,x=-1),I=Math.min(B,I),I<B&&"center"===f.labelAlign&&
(a.x+=x*(B-I-k*(B-Math.min(z,I)))),z>I||f.autoRotation&&(c.styles||{}).width)p=I;p&&(t.width=p,(n.style||{}).textOverflow||(t.textOverflow="ellipsis"),c.css(t))},getPosition:function(a,f,l,e){var h=this.axis,m=h.chart,d=e&&m.oldChartHeight||m.chartHeight;return{x:a?h.translate(f+l,null,null,e)+h.transB:h.left+h.offset+(h.opposite?(e&&m.oldChartWidth||m.chartWidth)-h.right-h.left:0),y:a?d-h.bottom+h.offset-(h.opposite?h.height:0):d-h.translate(f+l,null,null,e)-h.transB}},getLabelPosition:function(a,
f,l,e,h,m,d,c){var b=this.axis,k=b.transA,z=b.reversed,B=b.staggerLines,n=b.tickRotCorr||{x:0,y:0},x=h.y,u=e||b.reserveSpaceDefault?0:-b.labelOffset*("center"===b.labelAlign?.5:1);D(x)||(x=0===b.side?l.rotation?-8:-l.getBBox().height:2===b.side?n.y+8:Math.cos(l.rotation*r)*(n.y-l.getBBox(!1,0).height/2));a=a+h.x+u+n.x-(m&&e?m*k*(z?-1:1):0);f=f+x-(m&&!e?m*k*(z?1:-1):0);B&&(l=d/(c||1)%B,b.opposite&&(l=B-l-1),f+=b.labelOffset/B*l);return{x:a,y:Math.round(f)}},getMarkPath:function(a,f,l,e,h,m){return m.crispLine(["M",
a,f,"L",a+(h?0:-l),f+(h?l:0)],e)},renderGridLine:function(a,f,l){var e=this.axis,h=e.options,m=this.gridLine,d={},c=this.pos,b=this.type,k=e.tickmarkOffset,z=e.chart.renderer,B=b?b+"Grid":"grid",n=h[B+"LineWidth"],x=h[B+"LineColor"],h=h[B+"LineDashStyle"];m||(d.stroke=x,d["stroke-width"]=n,h&&(d.dashstyle=h),b||(d.zIndex=1),a&&(d.opacity=0),this.gridLine=m=z.path().attr(d).addClass("highcharts-"+(b?b+"-":"")+"grid-line").add(e.gridGroup));if(!a&&m&&(a=e.getPlotLinePath(c+k,m.strokeWidth()*l,a,!0)))m[this.isNew?
"attr":"animate"]({d:a,opacity:f})},renderMark:function(a,f,u){var e=this.axis,h=e.options,m=e.chart.renderer,d=this.type,c=d?d+"Tick":"tick",b=e.tickSize(c),k=this.mark,z=!k,B=a.x;a=a.y;var n=l(h[c+"Width"],!d&&e.isXAxis?1:0),h=h[c+"Color"];b&&(e.opposite&&(b[0]=-b[0]),z&&(this.mark=k=m.path().addClass("highcharts-"+(d?d+"-":"")+"tick").add(e.axisGroup),k.attr({stroke:h,"stroke-width":n})),k[z?"attr":"animate"]({d:this.getMarkPath(B,a,b[0],k.strokeWidth()*u,e.horiz,m),opacity:f}))},renderLabel:function(a,
f,u,e){var h=this.axis,m=h.horiz,d=h.options,c=this.label,b=d.labels,k=b.step,h=h.tickmarkOffset,z=!0,B=a.x;a=a.y;c&&p(B)&&(c.xy=a=this.getLabelPosition(B,a,c,m,b,h,e,k),this.isFirst&&!this.isLast&&!l(d.showFirstLabel,1)||this.isLast&&!this.isFirst&&!l(d.showLastLabel,1)?z=!1:!m||b.step||b.rotation||f||0===u||this.handleOverflow(a),k&&e%k&&(z=!1),z&&p(a.y)?(a.opacity=u,c[this.isNewLabel?"attr":"animate"](a),this.isNewLabel=!1):(c.attr("y",-9999),this.isNewLabel=!0))},render:function(a,f,u){var e=
this.axis,h=e.horiz,m=this.getPosition(h,this.pos,e.tickmarkOffset,f),d=m.x,c=m.y,e=h&&d===e.pos+e.len||!h&&c===e.pos?-1:1;u=l(u,1);this.isActive=!0;this.renderGridLine(f,u,e);this.renderMark(m,u,e);this.renderLabel(m,f,u,a);this.isNew=!1},destroy:function(){H(this,this.axis)}}})(M);var V=function(a){var E=a.addEvent,D=a.animObject,H=a.arrayMax,p=a.arrayMin,f=a.color,l=a.correctFloat,r=a.defaultOptions,n=a.defined,w=a.deg2rad,u=a.destroyObjectProperties,e=a.each,h=a.extend,m=a.fireEvent,d=a.format,
c=a.getMagnitude,b=a.grep,k=a.inArray,z=a.isArray,B=a.isNumber,I=a.isString,x=a.merge,K=a.normalizeTickInterval,t=a.objectEach,C=a.pick,N=a.removeEvent,q=a.splat,A=a.syncTimeout,F=a.Tick,G=function(){this.init.apply(this,arguments)};a.extend(G.prototype,{defaultOptions:{dateTimeLabelFormats:{millisecond:"%H:%M:%S.%L",second:"%H:%M:%S",minute:"%H:%M",hour:"%H:%M",day:"%e. %b",week:"%e. %b",month:"%b '%y",year:"%Y"},endOnTick:!1,labels:{enabled:!0,style:{color:"#666666",cursor:"default",fontSize:"11px"},
x:0},maxPadding:.01,minorTickLength:2,minorTickPosition:"outside",minPadding:.01,startOfWeek:1,startOnTick:!1,tickLength:10,tickmarkPlacement:"between",tickPixelInterval:100,tickPosition:"outside",title:{align:"middle",style:{color:"#666666"}},type:"linear",minorGridLineColor:"#f2f2f2",minorGridLineWidth:1,minorTickColor:"#999999",lineColor:"#ccd6eb",lineWidth:1,gridLineColor:"#e6e6e6",tickColor:"#ccd6eb"},defaultYAxisOptions:{endOnTick:!0,tickPixelInterval:72,showLastLabel:!0,labels:{x:-8},maxPadding:.05,
minPadding:.05,startOnTick:!0,title:{rotation:270,text:"Values"},stackLabels:{allowOverlap:!1,enabled:!1,formatter:function(){return a.numberFormat(this.total,-1)},style:{fontSize:"11px",fontWeight:"bold",color:"#000000",textOutline:"1px contrast"}},gridLineWidth:1,lineWidth:0},defaultLeftAxisOptions:{labels:{x:-15},title:{rotation:270}},defaultRightAxisOptions:{labels:{x:15},title:{rotation:90}},defaultBottomAxisOptions:{labels:{autoRotation:[-45],x:0},title:{rotation:0}},defaultTopAxisOptions:{labels:{autoRotation:[-45],
x:0},title:{rotation:0}},init:function(a,b){var g=b.isX,v=this;v.chart=a;v.horiz=a.inverted&&!v.isZAxis?!g:g;v.isXAxis=g;v.coll=v.coll||(g?"xAxis":"yAxis");v.opposite=b.opposite;v.side=b.side||(v.horiz?v.opposite?0:2:v.opposite?1:3);v.setOptions(b);var c=this.options,d=c.type;v.labelFormatter=c.labels.formatter||v.defaultLabelFormatter;v.userOptions=b;v.minPixelPadding=0;v.reversed=c.reversed;v.visible=!1!==c.visible;v.zoomEnabled=!1!==c.zoomEnabled;v.hasNames="category"===d||!0===c.categories;v.categories=
c.categories||v.hasNames;v.names=v.names||[];v.plotLinesAndBandsGroups={};v.isLog="logarithmic"===d;v.isDatetimeAxis="datetime"===d;v.positiveValuesOnly=v.isLog&&!v.allowNegativeLog;v.isLinked=n(c.linkedTo);v.ticks={};v.labelEdge=[];v.minorTicks={};v.plotLinesAndBands=[];v.alternateBands={};v.len=0;v.minRange=v.userMinRange=c.minRange||c.maxZoom;v.range=c.range;v.offset=c.offset||0;v.stacks={};v.oldStacks={};v.stacksTouched=0;v.max=null;v.min=null;v.crosshair=C(c.crosshair,q(a.options.tooltip.crosshairs)[g?
0:1],!1);b=v.options.events;-1===k(v,a.axes)&&(g?a.axes.splice(a.xAxis.length,0,v):a.axes.push(v),a[v.coll].push(v));v.series=v.series||[];a.inverted&&!v.isZAxis&&g&&void 0===v.reversed&&(v.reversed=!0);t(b,function(a,g){E(v,g,a)});v.lin2log=c.linearToLogConverter||v.lin2log;v.isLog&&(v.val2lin=v.log2lin,v.lin2val=v.lin2log)},setOptions:function(a){this.options=x(this.defaultOptions,"yAxis"===this.coll&&this.defaultYAxisOptions,[this.defaultTopAxisOptions,this.defaultRightAxisOptions,this.defaultBottomAxisOptions,
this.defaultLeftAxisOptions][this.side],x(r[this.coll],a))},defaultLabelFormatter:function(){var g=this.axis,b=this.value,c=g.categories,k=this.dateTimeLabelFormat,e=r.lang,q=e.numericSymbols,e=e.numericSymbolMagnitude||1E3,h=q&&q.length,m,z=g.options.labels.format,g=g.isLog?Math.abs(b):g.tickInterval;if(z)m=d(z,this);else if(c)m=b;else if(k)m=a.dateFormat(k,b);else if(h&&1E3<=g)for(;h--&&void 0===m;)c=Math.pow(e,h+1),g>=c&&0===10*b%c&&null!==q[h]&&0!==b&&(m=a.numberFormat(b/c,-1)+q[h]);void 0===
m&&(m=1E4<=Math.abs(b)?a.numberFormat(b,-1):a.numberFormat(b,-1,void 0,""));return m},getSeriesExtremes:function(){var a=this,v=a.chart;a.hasVisibleSeries=!1;a.dataMin=a.dataMax=a.threshold=null;a.softThreshold=!a.isXAxis;a.buildStacks&&a.buildStacks();e(a.series,function(g){if(g.visible||!v.options.chart.ignoreHiddenSeries){var c=g.options,d=c.threshold,k;a.hasVisibleSeries=!0;a.positiveValuesOnly&&0>=d&&(d=null);if(a.isXAxis)c=g.xData,c.length&&(g=p(c),k=H(c),B(g)||g instanceof Date||(c=b(c,B),
g=p(c)),a.dataMin=Math.min(C(a.dataMin,c[0],g),g),a.dataMax=Math.max(C(a.dataMax,c[0],k),k));else if(g.getExtremes(),k=g.dataMax,g=g.dataMin,n(g)&&n(k)&&(a.dataMin=Math.min(C(a.dataMin,g),g),a.dataMax=Math.max(C(a.dataMax,k),k)),n(d)&&(a.threshold=d),!c.softThreshold||a.positiveValuesOnly)a.softThreshold=!1}})},translate:function(a,b,c,d,k,e){var g=this.linkedParent||this,v=1,q=0,h=d?g.oldTransA:g.transA;d=d?g.oldMin:g.min;var m=g.minPixelPadding;k=(g.isOrdinal||g.isBroken||g.isLog&&k)&&g.lin2val;
h||(h=g.transA);c&&(v*=-1,q=g.len);g.reversed&&(v*=-1,q-=v*(g.sector||g.len));b?(a=(a*v+q-m)/h+d,k&&(a=g.lin2val(a))):(k&&(a=g.val2lin(a)),a=B(d)?v*(a-d)*h+q+v*m+(B(e)?h*e:0):void 0);return a},toPixels:function(a,b){return this.translate(a,!1,!this.horiz,null,!0)+(b?0:this.pos)},toValue:function(a,b){return this.translate(a-(b?0:this.pos),!0,!this.horiz,null,!0)},getPlotLinePath:function(a,b,c,d,k){var g=this.chart,v=this.left,q=this.top,e,h,m=c&&g.oldChartHeight||g.chartHeight,z=c&&g.oldChartWidth||
g.chartWidth,A;e=this.transB;var t=function(a,g,b){if(a<g||a>b)d?a=Math.min(Math.max(g,a),b):A=!0;return a};k=C(k,this.translate(a,null,null,c));a=c=Math.round(k+e);e=h=Math.round(m-k-e);B(k)?this.horiz?(e=q,h=m-this.bottom,a=c=t(a,v,v+this.width)):(a=v,c=z-this.right,e=h=t(e,q,q+this.height)):(A=!0,d=!1);return A&&!d?null:g.renderer.crispLine(["M",a,e,"L",c,h],b||1)},getLinearTickPositions:function(a,b,c){var g,v=l(Math.floor(b/a)*a);c=l(Math.ceil(c/a)*a);var d=[],k;l(v+a)===v&&(k=20);if(this.single)return[b];
for(b=v;b<=c;){d.push(b);b=l(b+a,k);if(b===g)break;g=b}return d},getMinorTickInterval:function(){var a=this.options;return!0===a.minorTicks?C(a.minorTickInterval,"auto"):!1===a.minorTicks?null:a.minorTickInterval},getMinorTickPositions:function(){var a=this,b=a.options,c=a.tickPositions,d=a.minorTickInterval,k=[],q=a.pointRangePadding||0,h=a.min-q,q=a.max+q,m=q-h;if(m&&m/d<a.len/3)if(a.isLog)e(this.paddedTicks,function(g,b,v){b&&k.push.apply(k,a.getLogTickPositions(d,v[b-1],v[b],!0))});else if(a.isDatetimeAxis&&
"auto"===this.getMinorTickInterval())k=k.concat(a.getTimeTicks(a.normalizeTimeTickInterval(d),h,q,b.startOfWeek));else for(b=h+(c[0]-h)%d;b<=q&&b!==k[0];b+=d)k.push(b);0!==k.length&&a.trimTicks(k);return k},adjustForMinRange:function(){var a=this.options,b=this.min,c=this.max,d,k,q,h,m,z,A,t;this.isXAxis&&void 0===this.minRange&&!this.isLog&&(n(a.min)||n(a.max)?this.minRange=null:(e(this.series,function(a){z=a.xData;for(h=A=a.xIncrement?1:z.length-1;0<h;h--)if(m=z[h]-z[h-1],void 0===q||m<q)q=m}),
this.minRange=Math.min(5*q,this.dataMax-this.dataMin)));c-b<this.minRange&&(k=this.dataMax-this.dataMin>=this.minRange,t=this.minRange,d=(t-c+b)/2,d=[b-d,C(a.min,b-d)],k&&(d[2]=this.isLog?this.log2lin(this.dataMin):this.dataMin),b=H(d),c=[b+t,C(a.max,b+t)],k&&(c[2]=this.isLog?this.log2lin(this.dataMax):this.dataMax),c=p(c),c-b<t&&(d[0]=c-t,d[1]=C(a.min,c-t),b=H(d)));this.min=b;this.max=c},getClosest:function(){var a;this.categories?a=1:e(this.series,function(g){var b=g.closestPointRange,v=g.visible||
!g.chart.options.chart.ignoreHiddenSeries;!g.noSharedTooltip&&n(b)&&v&&(a=n(a)?Math.min(a,b):b)});return a},nameToX:function(a){var g=z(this.categories),b=g?this.categories:this.names,c=a.options.x,d;a.series.requireSorting=!1;n(c)||(c=!1===this.options.uniqueNames?a.series.autoIncrement():k(a.name,b));-1===c?g||(d=b.length):d=c;void 0!==d&&(this.names[d]=a.name);return d},updateNames:function(){var a=this;0<this.names.length&&(this.names.length=0,this.minRange=this.userMinRange,e(this.series||[],
function(g){g.xIncrement=null;if(!g.points||g.isDirtyData)g.processData(),g.generatePoints();e(g.points,function(b,v){var c;b.options&&(c=a.nameToX(b),void 0!==c&&c!==b.x&&(b.x=c,g.xData[v]=c))})}))},setAxisTranslation:function(a){var g=this,b=g.max-g.min,c=g.axisPointRange||0,d,k=0,q=0,h=g.linkedParent,m=!!g.categories,z=g.transA,A=g.isXAxis;if(A||m||c)d=g.getClosest(),h?(k=h.minPointOffset,q=h.pointRangePadding):e(g.series,function(a){var b=m?1:A?C(a.options.pointRange,d,0):g.axisPointRange||0;
a=a.options.pointPlacement;c=Math.max(c,b);g.single||(k=Math.max(k,I(a)?0:b/2),q=Math.max(q,"on"===a?0:b))}),h=g.ordinalSlope&&d?g.ordinalSlope/d:1,g.minPointOffset=k*=h,g.pointRangePadding=q*=h,g.pointRange=Math.min(c,b),A&&(g.closestPointRange=d);a&&(g.oldTransA=z);g.translationSlope=g.transA=z=g.options.staticScale||g.len/(b+q||1);g.transB=g.horiz?g.left:g.bottom;g.minPixelPadding=z*k},minFromRange:function(){return this.max-this.range},setTickInterval:function(g){var b=this,d=b.chart,k=b.options,
q=b.isLog,h=b.log2lin,z=b.isDatetimeAxis,A=b.isXAxis,t=b.isLinked,x=k.maxPadding,f=k.minPadding,F=k.tickInterval,u=k.tickPixelInterval,G=b.categories,p=b.threshold,I=b.softThreshold,r,w,N,D;z||G||t||this.getTickAmount();N=C(b.userMin,k.min);D=C(b.userMax,k.max);t?(b.linkedParent=d[b.coll][k.linkedTo],d=b.linkedParent.getExtremes(),b.min=C(d.min,d.dataMin),b.max=C(d.max,d.dataMax),k.type!==b.linkedParent.options.type&&a.error(11,1)):(!I&&n(p)&&(b.dataMin>=p?(r=p,f=0):b.dataMax<=p&&(w=p,x=0)),b.min=
C(N,r,b.dataMin),b.max=C(D,w,b.dataMax));q&&(b.positiveValuesOnly&&!g&&0>=Math.min(b.min,C(b.dataMin,b.min))&&a.error(10,1),b.min=l(h(b.min),15),b.max=l(h(b.max),15));b.range&&n(b.max)&&(b.userMin=b.min=N=Math.max(b.dataMin,b.minFromRange()),b.userMax=D=b.max,b.range=null);m(b,"foundExtremes");b.beforePadding&&b.beforePadding();b.adjustForMinRange();!(G||b.axisPointRange||b.usePercentage||t)&&n(b.min)&&n(b.max)&&(h=b.max-b.min)&&(!n(N)&&f&&(b.min-=h*f),!n(D)&&x&&(b.max+=h*x));B(k.softMin)&&!B(b.userMin)&&
(b.min=Math.min(b.min,k.softMin));B(k.softMax)&&!B(b.userMax)&&(b.max=Math.max(b.max,k.softMax));B(k.floor)&&(b.min=Math.max(b.min,k.floor));B(k.ceiling)&&(b.max=Math.min(b.max,k.ceiling));I&&n(b.dataMin)&&(p=p||0,!n(N)&&b.min<p&&b.dataMin>=p?b.min=p:!n(D)&&b.max>p&&b.dataMax<=p&&(b.max=p));b.tickInterval=b.min===b.max||void 0===b.min||void 0===b.max?1:t&&!F&&u===b.linkedParent.options.tickPixelInterval?F=b.linkedParent.tickInterval:C(F,this.tickAmount?(b.max-b.min)/Math.max(this.tickAmount-1,1):
void 0,G?1:(b.max-b.min)*u/Math.max(b.len,u));A&&!g&&e(b.series,function(a){a.processData(b.min!==b.oldMin||b.max!==b.oldMax)});b.setAxisTranslation(!0);b.beforeSetTickPositions&&b.beforeSetTickPositions();b.postProcessTickInterval&&(b.tickInterval=b.postProcessTickInterval(b.tickInterval));b.pointRange&&!F&&(b.tickInterval=Math.max(b.pointRange,b.tickInterval));g=C(k.minTickInterval,b.isDatetimeAxis&&b.closestPointRange);!F&&b.tickInterval<g&&(b.tickInterval=g);z||q||F||(b.tickInterval=K(b.tickInterval,
null,c(b.tickInterval),C(k.allowDecimals,!(.5<b.tickInterval&&5>b.tickInterval&&1E3<b.max&&9999>b.max)),!!this.tickAmount));this.tickAmount||(b.tickInterval=b.unsquish());this.setTickPositions()},setTickPositions:function(){var a=this.options,b,c=a.tickPositions;b=this.getMinorTickInterval();var d=a.tickPositioner,k=a.startOnTick,q=a.endOnTick;this.tickmarkOffset=this.categories&&"between"===a.tickmarkPlacement&&1===this.tickInterval?.5:0;this.minorTickInterval="auto"===b&&this.tickInterval?this.tickInterval/
5:b;this.single=this.min===this.max&&n(this.min)&&!this.tickAmount&&(parseInt(this.min,10)===this.min||!1!==a.allowDecimals);this.tickPositions=b=c&&c.slice();!b&&(b=this.isDatetimeAxis?this.getTimeTicks(this.normalizeTimeTickInterval(this.tickInterval,a.units),this.min,this.max,a.startOfWeek,this.ordinalPositions,this.closestPointRange,!0):this.isLog?this.getLogTickPositions(this.tickInterval,this.min,this.max):this.getLinearTickPositions(this.tickInterval,this.min,this.max),b.length>this.len&&(b=
[b[0],b.pop()],b[0]===b[1]&&(b.length=1)),this.tickPositions=b,d&&(d=d.apply(this,[this.min,this.max])))&&(this.tickPositions=b=d);this.paddedTicks=b.slice(0);this.trimTicks(b,k,q);this.isLinked||(this.single&&2>b.length&&(this.min-=.5,this.max+=.5),c||d||this.adjustTickAmount())},trimTicks:function(a,b,c){var g=a[0],d=a[a.length-1],k=this.minPointOffset||0;if(!this.isLinked){if(b&&-Infinity!==g)this.min=g;else for(;this.min-k>a[0];)a.shift();if(c)this.max=d;else for(;this.max+k<a[a.length-1];)a.pop();
0===a.length&&n(g)&&!this.options.tickPositions&&a.push((d+g)/2)}},alignToOthers:function(){var a={},b,c=this.options;!1===this.chart.options.chart.alignTicks||!1===c.alignTicks||this.isLog||e(this.chart[this.coll],function(g){var c=g.options,c=[g.horiz?c.left:c.top,c.width,c.height,c.pane].join();g.series.length&&(a[c]?b=!0:a[c]=1)});return b},getTickAmount:function(){var a=this.options,b=a.tickAmount,c=a.tickPixelInterval;!n(a.tickInterval)&&this.len<c&&!this.isRadial&&!this.isLog&&a.startOnTick&&
a.endOnTick&&(b=2);!b&&this.alignToOthers()&&(b=Math.ceil(this.len/c)+1);4>b&&(this.finalTickAmt=b,b=5);this.tickAmount=b},adjustTickAmount:function(){var a=this.tickInterval,b=this.tickPositions,c=this.tickAmount,d=this.finalTickAmt,k=b&&b.length,q=C(this.threshold,this.softThreshold?0:null);if(this.hasData()){if(k<c){for(;b.length<c;)b.length%2||this.min===q?b.push(l(b[b.length-1]+a)):b.unshift(l(b[0]-a));this.transA*=(k-1)/(c-1);this.min=b[0];this.max=b[b.length-1]}else k>c&&(this.tickInterval*=
2,this.setTickPositions());if(n(d)){for(a=c=b.length;a--;)(3===d&&1===a%2||2>=d&&0<a&&a<c-1)&&b.splice(a,1);this.finalTickAmt=void 0}}},setScale:function(){var a,b;this.oldMin=this.min;this.oldMax=this.max;this.oldAxisLength=this.len;this.setAxisSize();b=this.len!==this.oldAxisLength;e(this.series,function(b){if(b.isDirtyData||b.isDirty||b.xAxis.isDirty)a=!0});b||a||this.isLinked||this.forceRedraw||this.userMin!==this.oldUserMin||this.userMax!==this.oldUserMax||this.alignToOthers()?(this.resetStacks&&
this.resetStacks(),this.forceRedraw=!1,this.getSeriesExtremes(),this.setTickInterval(),this.oldUserMin=this.userMin,this.oldUserMax=this.userMax,this.isDirty||(this.isDirty=b||this.min!==this.oldMin||this.max!==this.oldMax)):this.cleanStacks&&this.cleanStacks()},setExtremes:function(a,b,c,d,k){var g=this,q=g.chart;c=C(c,!0);e(g.series,function(a){delete a.kdTree});k=h(k,{min:a,max:b});m(g,"setExtremes",k,function(){g.userMin=a;g.userMax=b;g.eventArgs=k;c&&q.redraw(d)})},zoom:function(a,b){var g=this.dataMin,
c=this.dataMax,d=this.options,k=Math.min(g,C(d.min,g)),d=Math.max(c,C(d.max,c));if(a!==this.min||b!==this.max)this.allowZoomOutside||(n(g)&&(a<k&&(a=k),a>d&&(a=d)),n(c)&&(b<k&&(b=k),b>d&&(b=d))),this.displayBtn=void 0!==a||void 0!==b,this.setExtremes(a,b,!1,void 0,{trigger:"zoom"});return!0},setAxisSize:function(){var b=this.chart,c=this.options,d=c.offsets||[0,0,0,0],k=this.horiz,q=this.width=Math.round(a.relativeLength(C(c.width,b.plotWidth-d[3]+d[1]),b.plotWidth)),e=this.height=Math.round(a.relativeLength(C(c.height,
b.plotHeight-d[0]+d[2]),b.plotHeight)),h=this.top=Math.round(a.relativeLength(C(c.top,b.plotTop+d[0]),b.plotHeight,b.plotTop)),c=this.left=Math.round(a.relativeLength(C(c.left,b.plotLeft+d[3]),b.plotWidth,b.plotLeft));this.bottom=b.chartHeight-e-h;this.right=b.chartWidth-q-c;this.len=Math.max(k?q:e,0);this.pos=k?c:h},getExtremes:function(){var a=this.isLog,b=this.lin2log;return{min:a?l(b(this.min)):this.min,max:a?l(b(this.max)):this.max,dataMin:this.dataMin,dataMax:this.dataMax,userMin:this.userMin,
userMax:this.userMax}},getThreshold:function(a){var b=this.isLog,g=this.lin2log,c=b?g(this.min):this.min,b=b?g(this.max):this.max;null===a?a=c:c>a?a=c:b<a&&(a=b);return this.translate(a,0,1,0,1)},autoLabelAlign:function(a){a=(C(a,0)-90*this.side+720)%360;return 15<a&&165>a?"right":195<a&&345>a?"left":"center"},tickSize:function(a){var b=this.options,g=b[a+"Length"],c=C(b[a+"Width"],"tick"===a&&this.isXAxis?1:0);if(c&&g)return"inside"===b[a+"Position"]&&(g=-g),[g,c]},labelMetrics:function(){var a=
this.tickPositions&&this.tickPositions[0]||0;return this.chart.renderer.fontMetrics(this.options.labels.style&&this.options.labels.style.fontSize,this.ticks[a]&&this.ticks[a].label)},unsquish:function(){var a=this.options.labels,b=this.horiz,c=this.tickInterval,d=c,k=this.len/(((this.categories?1:0)+this.max-this.min)/c),q,h=a.rotation,m=this.labelMetrics(),z,A=Number.MAX_VALUE,t,x=function(a){a/=k||1;a=1<a?Math.ceil(a):1;return a*c};b?(t=!a.staggerLines&&!a.step&&(n(h)?[h]:k<C(a.autoRotationLimit,
80)&&a.autoRotation))&&e(t,function(a){var b;if(a===h||a&&-90<=a&&90>=a)z=x(Math.abs(m.h/Math.sin(w*a))),b=z+Math.abs(a/360),b<A&&(A=b,q=a,d=z)}):a.step||(d=x(m.h));this.autoRotation=t;this.labelRotation=C(q,h);return d},getSlotWidth:function(){var a=this.chart,b=this.horiz,c=this.options.labels,d=Math.max(this.tickPositions.length-(this.categories?0:1),1),k=a.margin[3];return b&&2>(c.step||0)&&!c.rotation&&(this.staggerLines||1)*this.len/d||!b&&(c.style&&parseInt(c.style.width,10)||k&&k-a.spacing[3]||
.33*a.chartWidth)},renderUnsquish:function(){var a=this.chart,b=a.renderer,c=this.tickPositions,d=this.ticks,k=this.options.labels,q=this.horiz,h=this.getSlotWidth(),m=Math.max(1,Math.round(h-2*(k.padding||5))),z={},A=this.labelMetrics(),t=k.style&&k.style.textOverflow,f,F=0,l,B;I(k.rotation)||(z.rotation=k.rotation||0);e(c,function(a){(a=d[a])&&a.labelLength>F&&(F=a.labelLength)});this.maxLabelLength=F;if(this.autoRotation)F>m&&F>A.h?z.rotation=this.labelRotation:this.labelRotation=0;else if(h&&
(f={width:m+"px"},!t))for(f.textOverflow="clip",l=c.length;!q&&l--;)if(B=c[l],m=d[B].label)m.styles&&"ellipsis"===m.styles.textOverflow?m.css({textOverflow:"clip"}):d[B].labelLength>h&&m.css({width:h+"px"}),m.getBBox().height>this.len/c.length-(A.h-A.f)&&(m.specCss={textOverflow:"ellipsis"});z.rotation&&(f={width:(F>.5*a.chartHeight?.33*a.chartHeight:a.chartHeight)+"px"},t||(f.textOverflow="ellipsis"));if(this.labelAlign=k.align||this.autoLabelAlign(this.labelRotation))z.align=this.labelAlign;e(c,
function(a){var b=(a=d[a])&&a.label;b&&(b.attr(z),f&&b.css(x(f,b.specCss)),delete b.specCss,a.rotation=z.rotation)});this.tickRotCorr=b.rotCorr(A.b,this.labelRotation||0,0!==this.side)},hasData:function(){return this.hasVisibleSeries||n(this.min)&&n(this.max)&&this.tickPositions&&0<this.tickPositions.length},addTitle:function(a){var b=this.chart.renderer,g=this.horiz,c=this.opposite,d=this.options.title,k;this.axisTitle||((k=d.textAlign)||(k=(g?{low:"left",middle:"center",high:"right"}:{low:c?"right":
"left",middle:"center",high:c?"left":"right"})[d.align]),this.axisTitle=b.text(d.text,0,0,d.useHTML).attr({zIndex:7,rotation:d.rotation||0,align:k}).addClass("highcharts-axis-title").css(d.style).add(this.axisGroup),this.axisTitle.isNew=!0);d.style.width||this.isRadial||this.axisTitle.css({width:this.len});this.axisTitle[a?"show":"hide"](!0)},generateTick:function(a){var b=this.ticks;b[a]?b[a].addLabel():b[a]=new F(this,a)},getOffset:function(){var a=this,b=a.chart,c=b.renderer,d=a.options,k=a.tickPositions,
q=a.ticks,h=a.horiz,m=a.side,z=b.inverted&&!a.isZAxis?[1,0,3,2][m]:m,A,x,f=0,F,l=0,B=d.title,u=d.labels,G=0,p=b.axisOffset,b=b.clipOffset,I=[-1,1,1,-1][m],r=d.className,w=a.axisParent,K=this.tickSize("tick");A=a.hasData();a.showAxis=x=A||C(d.showEmpty,!0);a.staggerLines=a.horiz&&u.staggerLines;a.axisGroup||(a.gridGroup=c.g("grid").attr({zIndex:d.gridZIndex||1}).addClass("highcharts-"+this.coll.toLowerCase()+"-grid "+(r||"")).add(w),a.axisGroup=c.g("axis").attr({zIndex:d.zIndex||2}).addClass("highcharts-"+
this.coll.toLowerCase()+" "+(r||"")).add(w),a.labelGroup=c.g("axis-labels").attr({zIndex:u.zIndex||7}).addClass("highcharts-"+a.coll.toLowerCase()+"-labels "+(r||"")).add(w));A||a.isLinked?(e(k,function(b,c){a.generateTick(b,c)}),a.renderUnsquish(),a.reserveSpaceDefault=0===m||2===m||{1:"left",3:"right"}[m]===a.labelAlign,C(u.reserveSpace,"center"===a.labelAlign?!0:null,a.reserveSpaceDefault)&&e(k,function(a){G=Math.max(q[a].getLabelSize(),G)}),a.staggerLines&&(G*=a.staggerLines),a.labelOffset=G*
(a.opposite?-1:1)):t(q,function(a,b){a.destroy();delete q[b]});B&&B.text&&!1!==B.enabled&&(a.addTitle(x),x&&!1!==B.reserveSpace&&(a.titleOffset=f=a.axisTitle.getBBox()[h?"height":"width"],F=B.offset,l=n(F)?0:C(B.margin,h?5:10)));a.renderLine();a.offset=I*C(d.offset,p[m]);a.tickRotCorr=a.tickRotCorr||{x:0,y:0};c=0===m?-a.labelMetrics().h:2===m?a.tickRotCorr.y:0;l=Math.abs(G)+l;G&&(l=l-c+I*(h?C(u.y,a.tickRotCorr.y+8*I):u.x));a.axisTitleMargin=C(F,l);p[m]=Math.max(p[m],a.axisTitleMargin+f+I*a.offset,
l,A&&k.length&&K?K[0]+I*a.offset:0);d=d.offset?0:2*Math.floor(a.axisLine.strokeWidth()/2);b[z]=Math.max(b[z],d)},getLinePath:function(a){var b=this.chart,c=this.opposite,g=this.offset,d=this.horiz,k=this.left+(c?this.width:0)+g,g=b.chartHeight-this.bottom-(c?this.height:0)+g;c&&(a*=-1);return b.renderer.crispLine(["M",d?this.left:k,d?g:this.top,"L",d?b.chartWidth-this.right:k,d?g:b.chartHeight-this.bottom],a)},renderLine:function(){this.axisLine||(this.axisLine=this.chart.renderer.path().addClass("highcharts-axis-line").add(this.axisGroup),
this.axisLine.attr({stroke:this.options.lineColor,"stroke-width":this.options.lineWidth,zIndex:7}))},getTitlePosition:function(){var a=this.horiz,b=this.left,c=this.top,d=this.len,k=this.options.title,q=a?b:c,e=this.opposite,h=this.offset,m=k.x||0,z=k.y||0,A=this.axisTitle,t=this.chart.renderer.fontMetrics(k.style&&k.style.fontSize,A),A=Math.max(A.getBBox(null,0).height-t.h-1,0),d={low:q+(a?0:d),middle:q+d/2,high:q+(a?d:0)}[k.align],b=(a?c+this.height:b)+(a?1:-1)*(e?-1:1)*this.axisTitleMargin+[-A,
A,t.f,-A][this.side];return{x:a?d+m:b+(e?this.width:0)+h+m,y:a?b+z-(e?this.height:0)+h:d+z}},renderMinorTick:function(a){var b=this.chart.hasRendered&&B(this.oldMin),c=this.minorTicks;c[a]||(c[a]=new F(this,a,"minor"));b&&c[a].isNew&&c[a].render(null,!0);c[a].render(null,!1,1)},renderTick:function(a,b){var c=this.isLinked,g=this.ticks,d=this.chart.hasRendered&&B(this.oldMin);if(!c||a>=this.min&&a<=this.max)g[a]||(g[a]=new F(this,a)),d&&g[a].isNew&&g[a].render(b,!0,.1),g[a].render(b)},render:function(){var b=
this,c=b.chart,d=b.options,k=b.isLog,q=b.lin2log,h=b.isLinked,m=b.tickPositions,z=b.axisTitle,x=b.ticks,f=b.minorTicks,l=b.alternateBands,C=d.stackLabels,n=d.alternateGridColor,u=b.tickmarkOffset,G=b.axisLine,p=b.showAxis,I=D(c.renderer.globalAnimation),r,w;b.labelEdge.length=0;b.overlap=!1;e([x,f,l],function(a){t(a,function(a){a.isActive=!1})});if(b.hasData()||h)b.minorTickInterval&&!b.categories&&e(b.getMinorTickPositions(),function(a){b.renderMinorTick(a)}),m.length&&(e(m,function(a,c){b.renderTick(a,
c)}),u&&(0===b.min||b.single)&&(x[-1]||(x[-1]=new F(b,-1,null,!0)),x[-1].render(-1))),n&&e(m,function(d,g){w=void 0!==m[g+1]?m[g+1]+u:b.max-u;0===g%2&&d<b.max&&w<=b.max+(c.polar?-u:u)&&(l[d]||(l[d]=new a.PlotLineOrBand(b)),r=d+u,l[d].options={from:k?q(r):r,to:k?q(w):w,color:n},l[d].render(),l[d].isActive=!0)}),b._addedPlotLB||(e((d.plotLines||[]).concat(d.plotBands||[]),function(a){b.addPlotBandOrLine(a)}),b._addedPlotLB=!0);e([x,f,l],function(a){var b,d=[],g=I.duration;t(a,function(a,b){a.isActive||
(a.render(b,!1,0),a.isActive=!1,d.push(b))});A(function(){for(b=d.length;b--;)a[d[b]]&&!a[d[b]].isActive&&(a[d[b]].destroy(),delete a[d[b]])},a!==l&&c.hasRendered&&g?g:0)});G&&(G[G.isPlaced?"animate":"attr"]({d:this.getLinePath(G.strokeWidth())}),G.isPlaced=!0,G[p?"show":"hide"](!0));z&&p&&(d=b.getTitlePosition(),B(d.y)?(z[z.isNew?"attr":"animate"](d),z.isNew=!1):(z.attr("y",-9999),z.isNew=!0));C&&C.enabled&&b.renderStackTotals();b.isDirty=!1},redraw:function(){this.visible&&(this.render(),e(this.plotLinesAndBands,
function(a){a.render()}));e(this.series,function(a){a.isDirty=!0})},keepProps:"extKey hcEvents names series userMax userMin".split(" "),destroy:function(a){var b=this,c=b.stacks,d=b.plotLinesAndBands,g;a||N(b);t(c,function(a,b){u(a);c[b]=null});e([b.ticks,b.minorTicks,b.alternateBands],function(a){u(a)});if(d)for(a=d.length;a--;)d[a].destroy();e("stackTotalGroup axisLine axisTitle axisGroup gridGroup labelGroup cross".split(" "),function(a){b[a]&&(b[a]=b[a].destroy())});for(g in b.plotLinesAndBandsGroups)b.plotLinesAndBandsGroups[g]=
b.plotLinesAndBandsGroups[g].destroy();t(b,function(a,c){-1===k(c,b.keepProps)&&delete b[c]})},drawCrosshair:function(a,b){var c,d=this.crosshair,g=C(d.snap,!0),k,q=this.cross;a||(a=this.cross&&this.cross.e);this.crosshair&&!1!==(n(b)||!g)?(g?n(b)&&(k=this.isXAxis?b.plotX:this.len-b.plotY):k=a&&(this.horiz?a.chartX-this.pos:this.len-a.chartY+this.pos),n(k)&&(c=this.getPlotLinePath(b&&(this.isXAxis?b.x:C(b.stackY,b.y)),null,null,null,k)||null),n(c)?(b=this.categories&&!this.isRadial,q||(this.cross=
q=this.chart.renderer.path().addClass("highcharts-crosshair highcharts-crosshair-"+(b?"category ":"thin ")+d.className).attr({zIndex:C(d.zIndex,2)}).add(),q.attr({stroke:d.color||(b?f("#ccd6eb").setOpacity(.25).get():"#cccccc"),"stroke-width":C(d.width,1)}).css({"pointer-events":"none"}),d.dashStyle&&q.attr({dashstyle:d.dashStyle})),q.show().attr({d:c}),b&&!d.width&&q.attr({"stroke-width":this.transA}),this.cross.e=a):this.hideCrosshair()):this.hideCrosshair()},hideCrosshair:function(){this.cross&&
this.cross.hide()}});return a.Axis=G}(M);(function(a){var E=a.Axis,D=a.Date,H=a.dateFormat,p=a.defaultOptions,f=a.defined,l=a.each,r=a.extend,n=a.getMagnitude,w=a.getTZOffset,u=a.normalizeTickInterval,e=a.pick,h=a.timeUnits;E.prototype.getTimeTicks=function(a,d,c,b){var k=[],m={},B=p.global.useUTC,n,x=new D(d-Math.max(w(d),w(c))),u=D.hcMakeTime,t=a.unitRange,C=a.count,N,q;if(f(d)){x[D.hcSetMilliseconds](t>=h.second?0:C*Math.floor(x.getMilliseconds()/C));if(t>=h.second)x[D.hcSetSeconds](t>=h.minute?
0:C*Math.floor(x.getSeconds()/C));if(t>=h.minute)x[D.hcSetMinutes](t>=h.hour?0:C*Math.floor(x[D.hcGetMinutes]()/C));if(t>=h.hour)x[D.hcSetHours](t>=h.day?0:C*Math.floor(x[D.hcGetHours]()/C));if(t>=h.day)x[D.hcSetDate](t>=h.month?1:C*Math.floor(x[D.hcGetDate]()/C));t>=h.month&&(x[D.hcSetMonth](t>=h.year?0:C*Math.floor(x[D.hcGetMonth]()/C)),n=x[D.hcGetFullYear]());if(t>=h.year)x[D.hcSetFullYear](n-n%C);if(t===h.week)x[D.hcSetDate](x[D.hcGetDate]()-x[D.hcGetDay]()+e(b,1));n=x[D.hcGetFullYear]();b=x[D.hcGetMonth]();
var A=x[D.hcGetDate](),F=x[D.hcGetHours]();d=x.getTime();D.hcHasTimeZone&&(q=(!B||!!D.hcGetTimezoneOffset)&&(c-d>4*h.month||w(d)!==w(c)),N=w(x),x=new D(d+N));B=x.getTime();for(d=1;B<c;)k.push(B),B=t===h.year?u(n+d*C,0):t===h.month?u(n,b+d*C):!q||t!==h.day&&t!==h.week?q&&t===h.hour?u(n,b,A,F+d*C,0,0,N)-N:B+t*C:u(n,b,A+d*C*(t===h.day?1:7)),d++;k.push(B);t<=h.hour&&1E4>k.length&&l(k,function(a){0===a%18E5&&"000000000"===H("%H%M%S%L",a)&&(m[a]="day")})}k.info=r(a,{higherRanks:m,totalRange:t*C});return k};
E.prototype.normalizeTimeTickInterval=function(a,d){var c=d||[["millisecond",[1,2,5,10,20,25,50,100,200,500]],["second",[1,2,5,10,15,30]],["minute",[1,2,5,10,15,30]],["hour",[1,2,3,4,6,8,12]],["day",[1,2]],["week",[1,2]],["month",[1,2,3,4,6]],["year",null]];d=c[c.length-1];var b=h[d[0]],k=d[1],e;for(e=0;e<c.length&&!(d=c[e],b=h[d[0]],k=d[1],c[e+1]&&a<=(b*k[k.length-1]+h[c[e+1][0]])/2);e++);b===h.year&&a<5*b&&(k=[1,2,5]);a=u(a/b,k,"year"===d[0]?Math.max(n(a/b),1):1);return{unitRange:b,count:a,unitName:d[0]}}})(M);
(function(a){var E=a.Axis,D=a.getMagnitude,H=a.map,p=a.normalizeTickInterval,f=a.pick;E.prototype.getLogTickPositions=function(a,r,n,w){var l=this.options,e=this.len,h=this.lin2log,m=this.log2lin,d=[];w||(this._minorAutoInterval=null);if(.5<=a)a=Math.round(a),d=this.getLinearTickPositions(a,r,n);else if(.08<=a)for(var e=Math.floor(r),c,b,k,z,B,l=.3<a?[1,2,4]:.15<a?[1,2,4,6,8]:[1,2,3,4,5,6,7,8,9];e<n+1&&!B;e++)for(b=l.length,c=0;c<b&&!B;c++)k=m(h(e)*l[c]),k>r&&(!w||z<=n)&&void 0!==z&&d.push(z),z>n&&
(B=!0),z=k;else r=h(r),n=h(n),a=w?this.getMinorTickInterval():l.tickInterval,a=f("auto"===a?null:a,this._minorAutoInterval,l.tickPixelInterval/(w?5:1)*(n-r)/((w?e/this.tickPositions.length:e)||1)),a=p(a,null,D(a)),d=H(this.getLinearTickPositions(a,r,n),m),w||(this._minorAutoInterval=a/5);w||(this.tickInterval=a);return d};E.prototype.log2lin=function(a){return Math.log(a)/Math.LN10};E.prototype.lin2log=function(a){return Math.pow(10,a)}})(M);(function(a,E){var D=a.arrayMax,H=a.arrayMin,p=a.defined,
f=a.destroyObjectProperties,l=a.each,r=a.erase,n=a.merge,w=a.pick;a.PlotLineOrBand=function(a,e){this.axis=a;e&&(this.options=e,this.id=e.id)};a.PlotLineOrBand.prototype={render:function(){var f=this,e=f.axis,h=e.horiz,m=f.options,d=m.label,c=f.label,b=m.to,k=m.from,z=m.value,l=p(k)&&p(b),r=p(z),x=f.svgElem,K=!x,t=[],C=m.color,N=w(m.zIndex,0),q=m.events,t={"class":"highcharts-plot-"+(l?"band ":"line ")+(m.className||"")},A={},F=e.chart.renderer,G=l?"bands":"lines",g=e.log2lin;e.isLog&&(k=g(k),b=g(b),
z=g(z));r?(t={stroke:C,"stroke-width":m.width},m.dashStyle&&(t.dashstyle=m.dashStyle)):l&&(C&&(t.fill=C),m.borderWidth&&(t.stroke=m.borderColor,t["stroke-width"]=m.borderWidth));A.zIndex=N;G+="-"+N;(C=e.plotLinesAndBandsGroups[G])||(e.plotLinesAndBandsGroups[G]=C=F.g("plot-"+G).attr(A).add());K&&(f.svgElem=x=F.path().attr(t).add(C));if(r)t=e.getPlotLinePath(z,x.strokeWidth());else if(l)t=e.getPlotBandPath(k,b,m);else return;K&&t&&t.length?(x.attr({d:t}),q&&a.objectEach(q,function(a,b){x.on(b,function(a){q[b].apply(f,
[a])})})):x&&(t?(x.show(),x.animate({d:t})):(x.hide(),c&&(f.label=c=c.destroy())));d&&p(d.text)&&t&&t.length&&0<e.width&&0<e.height&&!t.flat?(d=n({align:h&&l&&"center",x:h?!l&&4:10,verticalAlign:!h&&l&&"middle",y:h?l?16:10:l?6:-4,rotation:h&&!l&&90},d),this.renderLabel(d,t,l,N)):c&&c.hide();return f},renderLabel:function(a,e,h,m){var d=this.label,c=this.axis.chart.renderer;d||(d={align:a.textAlign||a.align,rotation:a.rotation,"class":"highcharts-plot-"+(h?"band":"line")+"-label "+(a.className||"")},
d.zIndex=m,this.label=d=c.text(a.text,0,0,a.useHTML).attr(d).add(),d.css(a.style));m=e.xBounds||[e[1],e[4],h?e[6]:e[1]];e=e.yBounds||[e[2],e[5],h?e[7]:e[2]];h=H(m);c=H(e);d.align(a,!1,{x:h,y:c,width:D(m)-h,height:D(e)-c});d.show()},destroy:function(){r(this.axis.plotLinesAndBands,this);delete this.axis;f(this)}};a.extend(E.prototype,{getPlotBandPath:function(a,e){var h=this.getPlotLinePath(e,null,null,!0),m=this.getPlotLinePath(a,null,null,!0),d=[],c=this.horiz,b=1,k;a=a<this.min&&e<this.min||a>this.max&&
e>this.max;if(m&&h)for(a&&(k=m.toString()===h.toString(),b=0),a=0;a<m.length;a+=6)c&&h[a+1]===m[a+1]?(h[a+1]+=b,h[a+4]+=b):c||h[a+2]!==m[a+2]||(h[a+2]+=b,h[a+5]+=b),d.push("M",m[a+1],m[a+2],"L",m[a+4],m[a+5],h[a+4],h[a+5],h[a+1],h[a+2],"z"),d.flat=k;return d},addPlotBand:function(a){return this.addPlotBandOrLine(a,"plotBands")},addPlotLine:function(a){return this.addPlotBandOrLine(a,"plotLines")},addPlotBandOrLine:function(f,e){var h=(new a.PlotLineOrBand(this,f)).render(),m=this.userOptions;h&&(e&&
(m[e]=m[e]||[],m[e].push(f)),this.plotLinesAndBands.push(h));return h},removePlotBandOrLine:function(a){for(var e=this.plotLinesAndBands,h=this.options,m=this.userOptions,d=e.length;d--;)e[d].id===a&&e[d].destroy();l([h.plotLines||[],m.plotLines||[],h.plotBands||[],m.plotBands||[]],function(c){for(d=c.length;d--;)c[d].id===a&&r(c,c[d])})},removePlotBand:function(a){this.removePlotBandOrLine(a)},removePlotLine:function(a){this.removePlotBandOrLine(a)}})})(M,V);(function(a){var E=a.dateFormat,D=a.each,
H=a.extend,p=a.format,f=a.isNumber,l=a.map,r=a.merge,n=a.pick,w=a.splat,u=a.syncTimeout,e=a.timeUnits;a.Tooltip=function(){this.init.apply(this,arguments)};a.Tooltip.prototype={init:function(a,e){this.chart=a;this.options=e;this.crosshairs=[];this.now={x:0,y:0};this.isHidden=!0;this.split=e.split&&!a.inverted;this.shared=e.shared||this.split},cleanSplit:function(a){D(this.chart.series,function(e){var d=e&&e.tt;d&&(!d.isActive||a?e.tt=d.destroy():d.isActive=!1)})},getLabel:function(){var a=this.chart.renderer,
e=this.options;this.label||(this.split?this.label=a.g("tooltip"):(this.label=a.label("",0,0,e.shape||"callout",null,null,e.useHTML,null,"tooltip").attr({padding:e.padding,r:e.borderRadius}),this.label.attr({fill:e.backgroundColor,"stroke-width":e.borderWidth}).css(e.style).shadow(e.shadow)),this.label.attr({zIndex:8}).add());return this.label},update:function(a){this.destroy();r(!0,this.chart.options.tooltip.userOptions,a);this.init(this.chart,r(!0,this.options,a))},destroy:function(){this.label&&
(this.label=this.label.destroy());this.split&&this.tt&&(this.cleanSplit(this.chart,!0),this.tt=this.tt.destroy());clearTimeout(this.hideTimer);clearTimeout(this.tooltipTimeout)},move:function(a,e,d,c){var b=this,k=b.now,h=!1!==b.options.animation&&!b.isHidden&&(1<Math.abs(a-k.x)||1<Math.abs(e-k.y)),m=b.followPointer||1<b.len;H(k,{x:h?(2*k.x+a)/3:a,y:h?(k.y+e)/2:e,anchorX:m?void 0:h?(2*k.anchorX+d)/3:d,anchorY:m?void 0:h?(k.anchorY+c)/2:c});b.getLabel().attr(k);h&&(clearTimeout(this.tooltipTimeout),
this.tooltipTimeout=setTimeout(function(){b&&b.move(a,e,d,c)},32))},hide:function(a){var e=this;clearTimeout(this.hideTimer);a=n(a,this.options.hideDelay,500);this.isHidden||(this.hideTimer=u(function(){e.getLabel()[a?"fadeOut":"hide"]();e.isHidden=!0},a))},getAnchor:function(a,e){var d,c=this.chart,b=c.inverted,k=c.plotTop,h=c.plotLeft,m=0,f=0,x,n;a=w(a);d=a[0].tooltipPos;this.followPointer&&e&&(void 0===e.chartX&&(e=c.pointer.normalize(e)),d=[e.chartX-c.plotLeft,e.chartY-k]);d||(D(a,function(a){x=
a.series.yAxis;n=a.series.xAxis;m+=a.plotX+(!b&&n?n.left-h:0);f+=(a.plotLow?(a.plotLow+a.plotHigh)/2:a.plotY)+(!b&&x?x.top-k:0)}),m/=a.length,f/=a.length,d=[b?c.plotWidth-f:m,this.shared&&!b&&1<a.length&&e?e.chartY-k:b?c.plotHeight-m:f]);return l(d,Math.round)},getPosition:function(a,e,d){var c=this.chart,b=this.distance,k={},h=c.inverted&&d.h||0,m,f=["y",c.chartHeight,e,d.plotY+c.plotTop,c.plotTop,c.plotTop+c.plotHeight],x=["x",c.chartWidth,a,d.plotX+c.plotLeft,c.plotLeft,c.plotLeft+c.plotWidth],
l=!this.followPointer&&n(d.ttBelow,!c.inverted===!!d.negative),t=function(a,c,d,g,e,q){var m=d<g-b,z=g+b+d<c,A=g-b-d;g+=b;if(l&&z)k[a]=g;else if(!l&&m)k[a]=A;else if(m)k[a]=Math.min(q-d,0>A-h?A:A-h);else if(z)k[a]=Math.max(e,g+h+d>c?g:g+h);else return!1},C=function(a,c,d,g){var e;g<b||g>c-b?e=!1:k[a]=g<d/2?1:g>c-d/2?c-d-2:g-d/2;return e},p=function(a){var b=f;f=x;x=b;m=a},q=function(){!1!==t.apply(0,f)?!1!==C.apply(0,x)||m||(p(!0),q()):m?k.x=k.y=0:(p(!0),q())};(c.inverted||1<this.len)&&p();q();return k},
defaultFormatter:function(a){var e=this.points||w(this),d;d=[a.tooltipFooterHeaderFormatter(e[0])];d=d.concat(a.bodyFormatter(e));d.push(a.tooltipFooterHeaderFormatter(e[0],!0));return d},refresh:function(a,e){var d,c=this.options,b,k=a,h,m={},f=[];d=c.formatter||this.defaultFormatter;var m=this.shared,x;c.enabled&&(clearTimeout(this.hideTimer),this.followPointer=w(k)[0].series.tooltipOptions.followPointer,h=this.getAnchor(k,e),e=h[0],b=h[1],!m||k.series&&k.series.noSharedTooltip?m=k.getLabelConfig():
(D(k,function(a){a.setState("hover");f.push(a.getLabelConfig())}),m={x:k[0].category,y:k[0].y},m.points=f,k=k[0]),this.len=f.length,m=d.call(m,this),x=k.series,this.distance=n(x.tooltipOptions.distance,16),!1===m?this.hide():(d=this.getLabel(),this.isHidden&&d.attr({opacity:1}).show(),this.split?this.renderSplit(m,w(a)):(c.style.width||d.css({width:this.chart.spacingBox.width}),d.attr({text:m&&m.join?m.join(""):m}),d.removeClass(/highcharts-color-[\d]+/g).addClass("highcharts-color-"+n(k.colorIndex,
x.colorIndex)),d.attr({stroke:c.borderColor||k.color||x.color||"#666666"}),this.updatePosition({plotX:e,plotY:b,negative:k.negative,ttBelow:k.ttBelow,h:h[2]||0})),this.isHidden=!1))},renderSplit:function(e,m){var d=this,c=[],b=this.chart,k=b.renderer,h=!0,f=this.options,l=0,x=this.getLabel();a.isString(e)&&(e=[!1,e]);D(e.slice(0,m.length+1),function(a,e){if(!1!==a){e=m[e-1]||{isHeader:!0,plotX:m[0].plotX};var z=e.series||d,t=z.tt,q=e.series||{},A="highcharts-color-"+n(e.colorIndex,q.colorIndex,"none");
t||(z.tt=t=k.label(null,null,null,"callout",null,null,f.useHTML).addClass("highcharts-tooltip-box "+A).attr({padding:f.padding,r:f.borderRadius,fill:f.backgroundColor,stroke:f.borderColor||e.color||q.color||"#333333","stroke-width":f.borderWidth}).add(x));t.isActive=!0;t.attr({text:a});t.css(f.style).shadow(f.shadow);a=t.getBBox();q=a.width+t.strokeWidth();e.isHeader?(l=a.height,q=Math.max(0,Math.min(e.plotX+b.plotLeft-q/2,b.chartWidth-q))):q=e.plotX+b.plotLeft-n(f.distance,16)-q;0>q&&(h=!1);a=(e.series&&
e.series.yAxis&&e.series.yAxis.pos)+(e.plotY||0);a-=b.plotTop;c.push({target:e.isHeader?b.plotHeight+l:a,rank:e.isHeader?1:0,size:z.tt.getBBox().height+1,point:e,x:q,tt:t})}});this.cleanSplit();a.distribute(c,b.plotHeight+l);D(c,function(a){var c=a.point,d=c.series;a.tt.attr({visibility:void 0===a.pos?"hidden":"inherit",x:h||c.isHeader?a.x:c.plotX+b.plotLeft+n(f.distance,16),y:a.pos+b.plotTop,anchorX:c.isHeader?c.plotX+b.plotLeft:c.plotX+d.xAxis.pos,anchorY:c.isHeader?a.pos+b.plotTop-15:c.plotY+d.yAxis.pos})})},
updatePosition:function(a){var e=this.chart,d=this.getLabel(),d=(this.options.positioner||this.getPosition).call(this,d.width,d.height,a);this.move(Math.round(d.x),Math.round(d.y||0),a.plotX+e.plotLeft,a.plotY+e.plotTop)},getDateFormat:function(a,m,d,c){var b=E("%m-%d %H:%M:%S.%L",m),k,h,f={millisecond:15,second:12,minute:9,hour:6,day:3},l="millisecond";for(h in e){if(a===e.week&&+E("%w",m)===d&&"00:00:00.000"===b.substr(6)){h="week";break}if(e[h]>a){h=l;break}if(f[h]&&b.substr(f[h])!=="01-01 00:00:00.000".substr(f[h]))break;
"week"!==h&&(l=h)}h&&(k=c[h]);return k},getXDateFormat:function(a,e,d){e=e.dateTimeLabelFormats;var c=d&&d.closestPointRange;return(c?this.getDateFormat(c,a.x,d.options.startOfWeek,e):e.day)||e.year},tooltipFooterHeaderFormatter:function(a,e){e=e?"footer":"header";var d=a.series,c=d.tooltipOptions,b=c.xDateFormat,k=d.xAxis,h=k&&"datetime"===k.options.type&&f(a.key),m=c[e+"Format"];h&&!b&&(b=this.getXDateFormat(a,c,k));h&&b&&D(a.point&&a.point.tooltipDateKeys||["key"],function(a){m=m.replace("{point."+
a+"}","{point."+a+":"+b+"}")});return p(m,{point:a,series:d})},bodyFormatter:function(a){return l(a,function(a){var d=a.series.tooltipOptions;return(d[(a.point.formatPrefix||"point")+"Formatter"]||a.point.tooltipFormatter).call(a.point,d[(a.point.formatPrefix||"point")+"Format"])})}}})(M);(function(a){var E=a.addEvent,D=a.attr,H=a.charts,p=a.color,f=a.css,l=a.defined,r=a.each,n=a.extend,w=a.find,u=a.fireEvent,e=a.isObject,h=a.offset,m=a.pick,d=a.splat,c=a.Tooltip;a.Pointer=function(a,c){this.init(a,
c)};a.Pointer.prototype={init:function(a,d){this.options=d;this.chart=a;this.runChartClick=d.chart.events&&!!d.chart.events.click;this.pinchDown=[];this.lastValidTouch={};c&&(a.tooltip=new c(a,d.tooltip),this.followTouchMove=m(d.tooltip.followTouchMove,!0));this.setDOMEvents()},zoomOption:function(a){var b=this.chart,c=b.options.chart,d=c.zoomType||"",b=b.inverted;/touch/.test(a.type)&&(d=m(c.pinchType,d));this.zoomX=a=/x/.test(d);this.zoomY=d=/y/.test(d);this.zoomHor=a&&!b||d&&b;this.zoomVert=d&&
!b||a&&b;this.hasZoom=a||d},normalize:function(a,c){var b;b=a.touches?a.touches.length?a.touches.item(0):a.changedTouches[0]:a;c||(this.chartPosition=c=h(this.chart.container));return n(a,{chartX:Math.round(b.pageX-c.left),chartY:Math.round(b.pageY-c.top)})},getCoordinates:function(a){var b={xAxis:[],yAxis:[]};r(this.chart.axes,function(c){b[c.isXAxis?"xAxis":"yAxis"].push({axis:c,value:c.toValue(a[c.horiz?"chartX":"chartY"])})});return b},findNearestKDPoint:function(a,c,d){var b;r(a,function(a){var k=
!(a.noSharedTooltip&&c)&&0>a.options.findNearestPointBy.indexOf("y");a=a.searchPoint(d,k);if((k=e(a,!0))&&!(k=!e(b,!0)))var k=b.distX-a.distX,h=b.dist-a.dist,m=(a.series.group&&a.series.group.zIndex)-(b.series.group&&b.series.group.zIndex),k=0<(0!==k&&c?k:0!==h?h:0!==m?m:b.series.index>a.series.index?-1:1);k&&(b=a)});return b},getPointFromEvent:function(a){a=a.target;for(var b;a&&!b;)b=a.point,a=a.parentNode;return b},getChartCoordinatesFromPoint:function(a,c){var b=a.series,d=b.xAxis,b=b.yAxis,k=
m(a.clientX,a.plotX);if(d&&b)return c?{chartX:d.len+d.pos-k,chartY:b.len+b.pos-a.plotY}:{chartX:k+d.pos,chartY:a.plotY+b.pos}},getHoverData:function(b,c,d,h,f,l,n){var k,z=[],x=n&&n.isBoosting;h=!(!h||!b);n=c&&!c.stickyTracking?[c]:a.grep(d,function(a){return a.visible&&!(!f&&a.directTouch)&&m(a.options.enableMouseTracking,!0)&&a.stickyTracking});c=(k=h?b:this.findNearestKDPoint(n,f,l))&&k.series;k&&(f&&!c.noSharedTooltip?(n=a.grep(d,function(a){return a.visible&&!(!f&&a.directTouch)&&m(a.options.enableMouseTracking,
!0)&&!a.noSharedTooltip}),r(n,function(a){var b=w(a.points,function(a){return a.x===k.x&&!a.isNull});e(b)&&(x&&(b=a.getPoint(b)),z.push(b))})):z.push(k));return{hoverPoint:k,hoverSeries:c,hoverPoints:z}},runPointActions:function(b,c){var d=this.chart,k=d.tooltip&&d.tooltip.options.enabled?d.tooltip:void 0,e=k?k.shared:!1,h=c||d.hoverPoint,f=h&&h.series||d.hoverSeries,f=this.getHoverData(h,f,d.series,!!c||f&&f.directTouch&&this.isDirectTouch,e,b,{isBoosting:d.isBoosting}),l,h=f.hoverPoint;l=f.hoverPoints;
c=(f=f.hoverSeries)&&f.tooltipOptions.followPointer;e=e&&f&&!f.noSharedTooltip;if(h&&(h!==d.hoverPoint||k&&k.isHidden)){r(d.hoverPoints||[],function(b){-1===a.inArray(b,l)&&b.setState()});r(l||[],function(a){a.setState("hover")});if(d.hoverSeries!==f)f.onMouseOver();d.hoverPoint&&d.hoverPoint.firePointEvent("mouseOut");if(!h.series)return;h.firePointEvent("mouseOver");d.hoverPoints=l;d.hoverPoint=h;k&&k.refresh(e?l:h,b)}else c&&k&&!k.isHidden&&(h=k.getAnchor([{}],b),k.updatePosition({plotX:h[0],plotY:h[1]}));
this.unDocMouseMove||(this.unDocMouseMove=E(d.container.ownerDocument,"mousemove",function(b){var c=H[a.hoverChartIndex];if(c)c.pointer.onDocumentMouseMove(b)}));r(d.axes,function(c){var d=m(c.crosshair.snap,!0),k=d?a.find(l,function(a){return a.series[c.coll]===c}):void 0;k||!d?c.drawCrosshair(b,k):c.hideCrosshair()})},reset:function(a,c){var b=this.chart,k=b.hoverSeries,e=b.hoverPoint,h=b.hoverPoints,m=b.tooltip,f=m&&m.shared?h:e;a&&f&&r(d(f),function(b){b.series.isCartesian&&void 0===b.plotX&&
(a=!1)});if(a)m&&f&&(m.refresh(f),e&&(e.setState(e.state,!0),r(b.axes,function(a){a.crosshair&&a.drawCrosshair(null,e)})));else{if(e)e.onMouseOut();h&&r(h,function(a){a.setState()});if(k)k.onMouseOut();m&&m.hide(c);this.unDocMouseMove&&(this.unDocMouseMove=this.unDocMouseMove());r(b.axes,function(a){a.hideCrosshair()});this.hoverX=b.hoverPoints=b.hoverPoint=null}},scaleGroups:function(a,c){var b=this.chart,d;r(b.series,function(k){d=a||k.getPlotBox();k.xAxis&&k.xAxis.zoomEnabled&&k.group&&(k.group.attr(d),
k.markerGroup&&(k.markerGroup.attr(d),k.markerGroup.clip(c?b.clipRect:null)),k.dataLabelsGroup&&k.dataLabelsGroup.attr(d))});b.clipRect.attr(c||b.clipBox)},dragStart:function(a){var b=this.chart;b.mouseIsDown=a.type;b.cancelClick=!1;b.mouseDownX=this.mouseDownX=a.chartX;b.mouseDownY=this.mouseDownY=a.chartY},drag:function(a){var b=this.chart,c=b.options.chart,d=a.chartX,e=a.chartY,h=this.zoomHor,m=this.zoomVert,f=b.plotLeft,l=b.plotTop,n=b.plotWidth,q=b.plotHeight,A,F=this.selectionMarker,G=this.mouseDownX,
g=this.mouseDownY,v=c.panKey&&a[c.panKey+"Key"];F&&F.touch||(d<f?d=f:d>f+n&&(d=f+n),e<l?e=l:e>l+q&&(e=l+q),this.hasDragged=Math.sqrt(Math.pow(G-d,2)+Math.pow(g-e,2)),10<this.hasDragged&&(A=b.isInsidePlot(G-f,g-l),b.hasCartesianSeries&&(this.zoomX||this.zoomY)&&A&&!v&&!F&&(this.selectionMarker=F=b.renderer.rect(f,l,h?1:n,m?1:q,0).attr({fill:c.selectionMarkerFill||p("#335cad").setOpacity(.25).get(),"class":"highcharts-selection-marker",zIndex:7}).add()),F&&h&&(d-=G,F.attr({width:Math.abs(d),x:(0<d?
0:d)+G})),F&&m&&(d=e-g,F.attr({height:Math.abs(d),y:(0<d?0:d)+g})),A&&!F&&c.panning&&b.pan(a,c.panning)))},drop:function(a){var b=this,c=this.chart,d=this.hasPinched;if(this.selectionMarker){var e={originalEvent:a,xAxis:[],yAxis:[]},h=this.selectionMarker,m=h.attr?h.attr("x"):h.x,t=h.attr?h.attr("y"):h.y,p=h.attr?h.attr("width"):h.width,w=h.attr?h.attr("height"):h.height,q;if(this.hasDragged||d)r(c.axes,function(c){if(c.zoomEnabled&&l(c.min)&&(d||b[{xAxis:"zoomX",yAxis:"zoomY"}[c.coll]])){var k=c.horiz,
h="touchend"===a.type?c.minPixelPadding:0,g=c.toValue((k?m:t)+h),k=c.toValue((k?m+p:t+w)-h);e[c.coll].push({axis:c,min:Math.min(g,k),max:Math.max(g,k)});q=!0}}),q&&u(c,"selection",e,function(a){c.zoom(n(a,d?{animation:!1}:null))});this.selectionMarker=this.selectionMarker.destroy();d&&this.scaleGroups()}c&&(f(c.container,{cursor:c._cursor}),c.cancelClick=10<this.hasDragged,c.mouseIsDown=this.hasDragged=this.hasPinched=!1,this.pinchDown=[])},onContainerMouseDown:function(a){2!==a.button&&(a=this.normalize(a),
this.zoomOption(a),a.preventDefault&&a.preventDefault(),this.dragStart(a))},onDocumentMouseUp:function(b){H[a.hoverChartIndex]&&H[a.hoverChartIndex].pointer.drop(b)},onDocumentMouseMove:function(a){var b=this.chart,c=this.chartPosition;a=this.normalize(a,c);!c||this.inClass(a.target,"highcharts-tracker")||b.isInsidePlot(a.chartX-b.plotLeft,a.chartY-b.plotTop)||this.reset()},onContainerMouseLeave:function(b){var c=H[a.hoverChartIndex];c&&(b.relatedTarget||b.toElement)&&(c.pointer.reset(),c.pointer.chartPosition=
null)},onContainerMouseMove:function(b){var c=this.chart;l(a.hoverChartIndex)&&H[a.hoverChartIndex]&&H[a.hoverChartIndex].mouseIsDown||(a.hoverChartIndex=c.index);b=this.normalize(b);b.returnValue=!1;"mousedown"===c.mouseIsDown&&this.drag(b);!this.inClass(b.target,"highcharts-tracker")&&!c.isInsidePlot(b.chartX-c.plotLeft,b.chartY-c.plotTop)||c.openMenu||this.runPointActions(b)},inClass:function(a,c){for(var b;a;){if(b=D(a,"class")){if(-1!==b.indexOf(c))return!0;if(-1!==b.indexOf("highcharts-container"))return!1}a=
a.parentNode}},onTrackerMouseOut:function(a){var b=this.chart.hoverSeries;a=a.relatedTarget||a.toElement;this.isDirectTouch=!1;if(!(!b||!a||b.stickyTracking||this.inClass(a,"highcharts-tooltip")||this.inClass(a,"highcharts-series-"+b.index)&&this.inClass(a,"highcharts-tracker")))b.onMouseOut()},onContainerClick:function(a){var b=this.chart,c=b.hoverPoint,d=b.plotLeft,e=b.plotTop;a=this.normalize(a);b.cancelClick||(c&&this.inClass(a.target,"highcharts-tracker")?(u(c.series,"click",n(a,{point:c})),
b.hoverPoint&&c.firePointEvent("click",a)):(n(a,this.getCoordinates(a)),b.isInsidePlot(a.chartX-d,a.chartY-e)&&u(b,"click",a)))},setDOMEvents:function(){var b=this,c=b.chart.container,d=c.ownerDocument;c.onmousedown=function(a){b.onContainerMouseDown(a)};c.onmousemove=function(a){b.onContainerMouseMove(a)};c.onclick=function(a){b.onContainerClick(a)};this.unbindContainerMouseLeave=E(c,"mouseleave",b.onContainerMouseLeave);a.unbindDocumentMouseUp||(a.unbindDocumentMouseUp=E(d,"mouseup",b.onDocumentMouseUp));
a.hasTouch&&(c.ontouchstart=function(a){b.onContainerTouchStart(a)},c.ontouchmove=function(a){b.onContainerTouchMove(a)},a.unbindDocumentTouchEnd||(a.unbindDocumentTouchEnd=E(d,"touchend",b.onDocumentTouchEnd)))},destroy:function(){var b=this;b.unDocMouseMove&&b.unDocMouseMove();this.unbindContainerMouseLeave();a.chartCount||(a.unbindDocumentMouseUp&&(a.unbindDocumentMouseUp=a.unbindDocumentMouseUp()),a.unbindDocumentTouchEnd&&(a.unbindDocumentTouchEnd=a.unbindDocumentTouchEnd()));clearInterval(b.tooltipTimeout);
a.objectEach(b,function(a,c){b[c]=null})}}})(M);(function(a){var E=a.charts,D=a.each,H=a.extend,p=a.map,f=a.noop,l=a.pick;H(a.Pointer.prototype,{pinchTranslate:function(a,f,l,p,e,h){this.zoomHor&&this.pinchTranslateDirection(!0,a,f,l,p,e,h);this.zoomVert&&this.pinchTranslateDirection(!1,a,f,l,p,e,h)},pinchTranslateDirection:function(a,f,l,p,e,h,m,d){var c=this.chart,b=a?"x":"y",k=a?"X":"Y",z="chart"+k,n=a?"width":"height",r=c["plot"+(a?"Left":"Top")],x,w,t=d||1,C=c.inverted,u=c.bounds[a?"h":"v"],
q=1===f.length,A=f[0][z],F=l[0][z],G=!q&&f[1][z],g=!q&&l[1][z],v;l=function(){!q&&20<Math.abs(A-G)&&(t=d||Math.abs(F-g)/Math.abs(A-G));w=(r-F)/t+A;x=c["plot"+(a?"Width":"Height")]/t};l();f=w;f<u.min?(f=u.min,v=!0):f+x>u.max&&(f=u.max-x,v=!0);v?(F-=.8*(F-m[b][0]),q||(g-=.8*(g-m[b][1])),l()):m[b]=[F,g];C||(h[b]=w-r,h[n]=x);h=C?1/t:t;e[n]=x;e[b]=f;p[C?a?"scaleY":"scaleX":"scale"+k]=t;p["translate"+k]=h*r+(F-h*A)},pinch:function(a){var n=this,r=n.chart,u=n.pinchDown,e=a.touches,h=e.length,m=n.lastValidTouch,
d=n.hasZoom,c=n.selectionMarker,b={},k=1===h&&(n.inClass(a.target,"highcharts-tracker")&&r.runTrackerClick||n.runChartClick),z={};1<h&&(n.initiated=!0);d&&n.initiated&&!k&&a.preventDefault();p(e,function(a){return n.normalize(a)});"touchstart"===a.type?(D(e,function(a,b){u[b]={chartX:a.chartX,chartY:a.chartY}}),m.x=[u[0].chartX,u[1]&&u[1].chartX],m.y=[u[0].chartY,u[1]&&u[1].chartY],D(r.axes,function(a){if(a.zoomEnabled){var b=r.bounds[a.horiz?"h":"v"],c=a.minPixelPadding,d=a.toPixels(l(a.options.min,
a.dataMin)),e=a.toPixels(l(a.options.max,a.dataMax)),k=Math.max(d,e);b.min=Math.min(a.pos,Math.min(d,e)-c);b.max=Math.max(a.pos+a.len,k+c)}}),n.res=!0):n.followTouchMove&&1===h?this.runPointActions(n.normalize(a)):u.length&&(c||(n.selectionMarker=c=H({destroy:f,touch:!0},r.plotBox)),n.pinchTranslate(u,e,b,c,z,m),n.hasPinched=d,n.scaleGroups(b,z),n.res&&(n.res=!1,this.reset(!1,0)))},touch:function(f,n){var p=this.chart,r,e;if(p.index!==a.hoverChartIndex)this.onContainerMouseLeave({relatedTarget:!0});
a.hoverChartIndex=p.index;1===f.touches.length?(f=this.normalize(f),(e=p.isInsidePlot(f.chartX-p.plotLeft,f.chartY-p.plotTop))&&!p.openMenu?(n&&this.runPointActions(f),"touchmove"===f.type&&(n=this.pinchDown,r=n[0]?4<=Math.sqrt(Math.pow(n[0].chartX-f.chartX,2)+Math.pow(n[0].chartY-f.chartY,2)):!1),l(r,!0)&&this.pinch(f)):n&&this.reset()):2===f.touches.length&&this.pinch(f)},onContainerTouchStart:function(a){this.zoomOption(a);this.touch(a,!0)},onContainerTouchMove:function(a){this.touch(a)},onDocumentTouchEnd:function(f){E[a.hoverChartIndex]&&
E[a.hoverChartIndex].pointer.drop(f)}})})(M);(function(a){var E=a.addEvent,D=a.charts,H=a.css,p=a.doc,f=a.extend,l=a.noop,r=a.Pointer,n=a.removeEvent,w=a.win,u=a.wrap;if(!a.hasTouch&&(w.PointerEvent||w.MSPointerEvent)){var e={},h=!!w.PointerEvent,m=function(){var c=[];c.item=function(a){return this[a]};a.objectEach(e,function(a){c.push({pageX:a.pageX,pageY:a.pageY,target:a.target})});return c},d=function(c,b,d,e){"touch"!==c.pointerType&&c.pointerType!==c.MSPOINTER_TYPE_TOUCH||!D[a.hoverChartIndex]||
(e(c),e=D[a.hoverChartIndex].pointer,e[b]({type:d,target:c.currentTarget,preventDefault:l,touches:m()}))};f(r.prototype,{onContainerPointerDown:function(a){d(a,"onContainerTouchStart","touchstart",function(a){e[a.pointerId]={pageX:a.pageX,pageY:a.pageY,target:a.currentTarget}})},onContainerPointerMove:function(a){d(a,"onContainerTouchMove","touchmove",function(a){e[a.pointerId]={pageX:a.pageX,pageY:a.pageY};e[a.pointerId].target||(e[a.pointerId].target=a.currentTarget)})},onDocumentPointerUp:function(a){d(a,
"onDocumentTouchEnd","touchend",function(a){delete e[a.pointerId]})},batchMSEvents:function(a){a(this.chart.container,h?"pointerdown":"MSPointerDown",this.onContainerPointerDown);a(this.chart.container,h?"pointermove":"MSPointerMove",this.onContainerPointerMove);a(p,h?"pointerup":"MSPointerUp",this.onDocumentPointerUp)}});u(r.prototype,"init",function(a,b,d){a.call(this,b,d);this.hasZoom&&H(b.container,{"-ms-touch-action":"none","touch-action":"none"})});u(r.prototype,"setDOMEvents",function(a){a.apply(this);
(this.hasZoom||this.followTouchMove)&&this.batchMSEvents(E)});u(r.prototype,"destroy",function(a){this.batchMSEvents(n);a.call(this)})}})(M);(function(a){var E=a.addEvent,D=a.css,H=a.discardElement,p=a.defined,f=a.each,l=a.isFirefox,r=a.marginNames,n=a.merge,w=a.pick,u=a.setAnimation,e=a.stableSort,h=a.win,m=a.wrap;a.Legend=function(a,c){this.init(a,c)};a.Legend.prototype={init:function(a,c){this.chart=a;this.setOptions(c);c.enabled&&(this.render(),E(this.chart,"endResize",function(){this.legend.positionCheckboxes()}))},
setOptions:function(a){var c=w(a.padding,8);this.options=a;this.itemStyle=a.itemStyle;this.itemHiddenStyle=n(this.itemStyle,a.itemHiddenStyle);this.itemMarginTop=a.itemMarginTop||0;this.padding=c;this.initialItemY=c-5;this.itemHeight=this.maxItemWidth=0;this.symbolWidth=w(a.symbolWidth,16);this.pages=[]},update:function(a,c){var b=this.chart;this.setOptions(n(!0,this.options,a));this.destroy();b.isDirtyLegend=b.isDirtyBox=!0;w(c,!0)&&b.redraw()},colorizeItem:function(a,c){a.legendGroup[c?"removeClass":
"addClass"]("highcharts-legend-item-hidden");var b=this.options,d=a.legendItem,e=a.legendLine,h=a.legendSymbol,f=this.itemHiddenStyle.color,b=c?b.itemStyle.color:f,m=c?a.color||f:f,l=a.options&&a.options.marker,t={fill:m};d&&d.css({fill:b,color:b});e&&e.attr({stroke:m});h&&(l&&h.isMarker&&(t=a.pointAttribs(),c||(t.stroke=t.fill=f)),h.attr(t))},positionItem:function(a){var c=this.options,b=c.symbolPadding,c=!c.rtl,d=a._legendItemPos,e=d[0],d=d[1],h=a.checkbox;(a=a.legendGroup)&&a.element&&a.translate(c?
e:this.legendWidth-e-2*b-4,d);h&&(h.x=e,h.y=d)},destroyItem:function(a){var c=a.checkbox;f(["legendItem","legendLine","legendSymbol","legendGroup"],function(b){a[b]&&(a[b]=a[b].destroy())});c&&H(a.checkbox)},destroy:function(){function a(a){this[a]&&(this[a]=this[a].destroy())}f(this.getAllItems(),function(c){f(["legendItem","legendGroup"],a,c)});f("clipRect up down pager nav box title group".split(" "),a,this);this.display=null},positionCheckboxes:function(){var a=this.group&&this.group.alignAttr,
c,b=this.clipHeight||this.legendHeight,e=this.titleHeight;a&&(c=a.translateY,f(this.allItems,function(d){var k=d.checkbox,h;k&&(h=c+e+k.y+(this.scrollOffset||0)+3,D(k,{left:a.translateX+d.checkboxOffset+k.x-20+"px",top:h+"px",display:h>c-6&&h<c+b-6?"":"none"}))},this))},renderTitle:function(){var a=this.options,c=this.padding,b=a.title,e=0;b.text&&(this.title||(this.title=this.chart.renderer.label(b.text,c-3,c-4,null,null,null,a.useHTML,null,"legend-title").attr({zIndex:1}).css(b.style).add(this.group)),
a=this.title.getBBox(),e=a.height,this.offsetWidth=a.width,this.contentGroup.attr({translateY:e}));this.titleHeight=e},setText:function(d){var c=this.options;d.legendItem.attr({text:c.labelFormat?a.format(c.labelFormat,d):c.labelFormatter.call(d)})},renderItem:function(a){var c=this.chart,b=c.renderer,d=this.options,e="horizontal"===d.layout,h=this.symbolWidth,f=d.symbolPadding,m=this.itemStyle,l=this.itemHiddenStyle,t=this.padding,p=e?w(d.itemDistance,20):0,r=!d.rtl,q=d.width,A=d.itemMarginBottom||
0,F=this.itemMarginTop,G=a.legendItem,g=!a.series,v=!g&&a.series.drawLegendSymbol?a.series:a,u=v.options,L=this.createCheckboxForItem&&u&&u.showCheckbox,u=h+f+p+(L?20:0),P=d.useHTML,J=a.options.className;G||(a.legendGroup=b.g("legend-item").addClass("highcharts-"+v.type+"-series highcharts-color-"+a.colorIndex+(J?" "+J:"")+(g?" highcharts-series-"+a.index:"")).attr({zIndex:1}).add(this.scrollGroup),a.legendItem=G=b.text("",r?h+f:-f,this.baseline||0,P).css(n(a.visible?m:l)).attr({align:r?"left":"right",
zIndex:2}).add(a.legendGroup),this.baseline||(h=m.fontSize,this.fontMetrics=b.fontMetrics(h,G),this.baseline=this.fontMetrics.f+3+F,G.attr("y",this.baseline)),this.symbolHeight=d.symbolHeight||this.fontMetrics.f,v.drawLegendSymbol(this,a),this.setItemEvents&&this.setItemEvents(a,G,P),L&&this.createCheckboxForItem(a));this.colorizeItem(a,a.visible);m.width||G.css({width:(d.itemWidth||d.width||c.spacingBox.width)-u});this.setText(a);b=G.getBBox();m=a.checkboxOffset=d.itemWidth||a.legendItemWidth||b.width+
u;this.itemHeight=b=Math.round(a.legendItemHeight||b.height||this.symbolHeight);e&&this.itemX-t+m>(q||c.spacingBox.width-2*t-d.x)&&(this.itemX=t,this.itemY+=F+this.lastLineHeight+A,this.lastLineHeight=0);this.maxItemWidth=Math.max(this.maxItemWidth,m);this.lastItemY=F+this.itemY+A;this.lastLineHeight=Math.max(b,this.lastLineHeight);a._legendItemPos=[this.itemX,this.itemY];e?this.itemX+=m:(this.itemY+=F+b+A,this.lastLineHeight=b);this.offsetWidth=q||Math.max((e?this.itemX-t-(a.checkbox?0:p):m)+t,this.offsetWidth)},
getAllItems:function(){var a=[];f(this.chart.series,function(c){var b=c&&c.options;c&&w(b.showInLegend,p(b.linkedTo)?!1:void 0,!0)&&(a=a.concat(c.legendItems||("point"===b.legendType?c.data:c)))});return a},getAlignment:function(){var a=this.options;return a.floating?"":a.align.charAt(0)+a.verticalAlign.charAt(0)+a.layout.charAt(0)},adjustMargins:function(a,c){var b=this.chart,d=this.options,e=this.getAlignment();e&&f([/(lth|ct|rth)/,/(rtv|rm|rbv)/,/(rbh|cb|lbh)/,/(lbv|lm|ltv)/],function(k,h){k.test(e)&&
!p(a[h])&&(b[r[h]]=Math.max(b[r[h]],b.legend[(h+1)%2?"legendHeight":"legendWidth"]+[1,-1,-1,1][h]*d[h%2?"x":"y"]+w(d.margin,12)+c[h]+(0===h?b.titleOffset+b.options.title.margin:0)))})},render:function(){var a=this,c=a.chart,b=c.renderer,k=a.group,h,m,l,x,p=a.box,t=a.options,C=a.padding;a.itemX=C;a.itemY=a.initialItemY;a.offsetWidth=0;a.lastItemY=0;k||(a.group=k=b.g("legend").attr({zIndex:7}).add(),a.contentGroup=b.g().attr({zIndex:1}).add(k),a.scrollGroup=b.g().add(a.contentGroup));a.renderTitle();
h=a.getAllItems();e(h,function(a,b){return(a.options&&a.options.legendIndex||0)-(b.options&&b.options.legendIndex||0)});t.reversed&&h.reverse();a.allItems=h;a.display=m=!!h.length;a.lastLineHeight=0;f(h,function(b){a.renderItem(b)});l=(t.width||a.offsetWidth)+C;x=a.lastItemY+a.lastLineHeight+a.titleHeight;x=a.handleOverflow(x);x+=C;p||(a.box=p=b.rect().addClass("highcharts-legend-box").attr({r:t.borderRadius}).add(k),p.isNew=!0);p.attr({stroke:t.borderColor,"stroke-width":t.borderWidth||0,fill:t.backgroundColor||
"none"}).shadow(t.shadow);0<l&&0<x&&(p[p.isNew?"attr":"animate"](p.crisp.call({},{x:0,y:0,width:l,height:x},p.strokeWidth())),p.isNew=!1);p[m?"show":"hide"]();a.legendWidth=l;a.legendHeight=x;f(h,function(b){a.positionItem(b)});m&&(b=c.spacingBox,/(lth|ct|rth)/.test(a.getAlignment())&&(b=n(b,{y:b.y+c.titleOffset+c.options.title.margin})),k.align(n(t,{width:l,height:x}),!0,b));c.isResizing||this.positionCheckboxes()},handleOverflow:function(a){var c=this,b=this.chart,d=b.renderer,e=this.options,h=
e.y,m=this.padding,b=b.spacingBox.height+("top"===e.verticalAlign?-h:h)-m,h=e.maxHeight,l,n=this.clipRect,t=e.navigation,p=w(t.animation,!0),r=t.arrowSize||12,q=this.nav,A=this.pages,F,G=this.allItems,g=function(a){"number"===typeof a?n.attr({height:a}):n&&(c.clipRect=n.destroy(),c.contentGroup.clip());c.contentGroup.div&&(c.contentGroup.div.style.clip=a?"rect("+m+"px,9999px,"+(m+a)+"px,0)":"auto")};"horizontal"!==e.layout||"middle"===e.verticalAlign||e.floating||(b/=2);h&&(b=Math.min(b,h));A.length=
0;a>b&&!1!==t.enabled?(this.clipHeight=l=Math.max(b-20-this.titleHeight-m,0),this.currentPage=w(this.currentPage,1),this.fullHeight=a,f(G,function(a,b){var c=a._legendItemPos[1],d=Math.round(a.legendItem.getBBox().height),g=A.length;if(!g||c-A[g-1]>l&&(F||c)!==A[g-1])A.push(F||c),g++;a.pageIx=g-1;F&&(G[b-1].pageIx=g-1);b===G.length-1&&c+d-A[g-1]>l&&(A.push(c),a.pageIx=g);c!==F&&(F=c)}),n||(n=c.clipRect=d.clipRect(0,m,9999,0),c.contentGroup.clip(n)),g(l),q||(this.nav=q=d.g().attr({zIndex:1}).add(this.group),
this.up=d.symbol("triangle",0,0,r,r).on("click",function(){c.scroll(-1,p)}).add(q),this.pager=d.text("",15,10).addClass("highcharts-legend-navigation").css(t.style).add(q),this.down=d.symbol("triangle-down",0,0,r,r).on("click",function(){c.scroll(1,p)}).add(q)),c.scroll(0),a=b):q&&(g(),this.nav=q.destroy(),this.scrollGroup.attr({translateY:1}),this.clipHeight=0);return a},scroll:function(a,c){var b=this.pages,d=b.length;a=this.currentPage+a;var e=this.clipHeight,h=this.options.navigation,f=this.pager,
m=this.padding;a>d&&(a=d);0<a&&(void 0!==c&&u(c,this.chart),this.nav.attr({translateX:m,translateY:e+this.padding+7+this.titleHeight,visibility:"visible"}),this.up.attr({"class":1===a?"highcharts-legend-nav-inactive":"highcharts-legend-nav-active"}),f.attr({text:a+"/"+d}),this.down.attr({x:18+this.pager.getBBox().width,"class":a===d?"highcharts-legend-nav-inactive":"highcharts-legend-nav-active"}),this.up.attr({fill:1===a?h.inactiveColor:h.activeColor}).css({cursor:1===a?"default":"pointer"}),this.down.attr({fill:a===
d?h.inactiveColor:h.activeColor}).css({cursor:a===d?"default":"pointer"}),this.scrollOffset=-b[a-1]+this.initialItemY,this.scrollGroup.animate({translateY:this.scrollOffset}),this.currentPage=a,this.positionCheckboxes())}};a.LegendSymbolMixin={drawRectangle:function(a,c){var b=a.symbolHeight,d=a.options.squareSymbol;c.legendSymbol=this.chart.renderer.rect(d?(a.symbolWidth-b)/2:0,a.baseline-b+1,d?b:a.symbolWidth,b,w(a.options.symbolRadius,b/2)).addClass("highcharts-point").attr({zIndex:3}).add(c.legendGroup)},
drawLineMarker:function(a){var c=this.options,b=c.marker,d=a.symbolWidth,e=a.symbolHeight,h=e/2,f=this.chart.renderer,m=this.legendGroup;a=a.baseline-Math.round(.3*a.fontMetrics.b);var l;l={"stroke-width":c.lineWidth||0};c.dashStyle&&(l.dashstyle=c.dashStyle);this.legendLine=f.path(["M",0,a,"L",d,a]).addClass("highcharts-graph").attr(l).add(m);b&&!1!==b.enabled&&(c=Math.min(w(b.radius,h),h),0===this.symbol.indexOf("url")&&(b=n(b,{width:e,height:e}),c=0),this.legendSymbol=b=f.symbol(this.symbol,d/
2-c,a-c,2*c,2*c,b).addClass("highcharts-point").add(m),b.isMarker=!0)}};(/Trident\/7\.0/.test(h.navigator.userAgent)||l)&&m(a.Legend.prototype,"positionItem",function(a,c){var b=this,d=function(){c._legendItemPos&&a.call(b,c)};d();setTimeout(d)})})(M);(function(a){var E=a.addEvent,D=a.animate,H=a.animObject,p=a.attr,f=a.doc,l=a.Axis,r=a.createElement,n=a.defaultOptions,w=a.discardElement,u=a.charts,e=a.css,h=a.defined,m=a.each,d=a.extend,c=a.find,b=a.fireEvent,k=a.grep,z=a.isNumber,B=a.isObject,I=
a.isString,x=a.Legend,K=a.marginNames,t=a.merge,C=a.objectEach,N=a.Pointer,q=a.pick,A=a.pInt,F=a.removeEvent,G=a.seriesTypes,g=a.splat,v=a.svg,Q=a.syncTimeout,L=a.win,P=a.Chart=function(){this.getArgs.apply(this,arguments)};a.chart=function(a,b,c){return new P(a,b,c)};d(P.prototype,{callbacks:[],getArgs:function(){var a=[].slice.call(arguments);if(I(a[0])||a[0].nodeName)this.renderTo=a.shift();this.init(a[0],a[1])},init:function(b,c){var d,g,e=b.series,k=b.plotOptions||{};b.series=null;d=t(n,b);for(g in d.plotOptions)d.plotOptions[g].tooltip=
k[g]&&t(k[g].tooltip)||void 0;d.tooltip.userOptions=b.chart&&b.chart.forExport&&b.tooltip.userOptions||b.tooltip;d.series=b.series=e;this.userOptions=b;b=d.chart;g=b.events;this.margin=[];this.spacing=[];this.bounds={h:{},v:{}};this.labelCollectors=[];this.callback=c;this.isResizing=0;this.options=d;this.axes=[];this.series=[];this.hasCartesianSeries=b.showAxes;var q=this;q.index=u.length;u.push(q);a.chartCount++;g&&C(g,function(a,b){E(q,b,a)});q.xAxis=[];q.yAxis=[];q.pointCount=q.colorCounter=q.symbolCounter=
0;q.firstRender()},initSeries:function(b){var c=this.options.chart;(c=G[b.type||c.type||c.defaultSeriesType])||a.error(17,!0);c=new c;c.init(this,b);return c},orderSeries:function(a){var b=this.series;for(a=a||0;a<b.length;a++)b[a]&&(b[a].index=a,b[a].name=b[a].name||"Series "+(b[a].index+1))},isInsidePlot:function(a,b,c){var d=c?b:a;a=c?a:b;return 0<=d&&d<=this.plotWidth&&0<=a&&a<=this.plotHeight},redraw:function(c){var g=this.axes,e=this.series,k=this.pointer,q=this.legend,h=this.isDirtyLegend,
f,l,v=this.hasCartesianSeries,A=this.isDirtyBox,F,t=this.renderer,x=t.isHidden(),n=[];this.setResponsive&&this.setResponsive(!1);a.setAnimation(c,this);x&&this.temporaryDisplay();this.layOutTitles();for(c=e.length;c--;)if(F=e[c],F.options.stacking&&(f=!0,F.isDirty)){l=!0;break}if(l)for(c=e.length;c--;)F=e[c],F.options.stacking&&(F.isDirty=!0);m(e,function(a){a.isDirty&&"point"===a.options.legendType&&(a.updateTotals&&a.updateTotals(),h=!0);a.isDirtyData&&b(a,"updatedData")});h&&q.options.enabled&&
(q.render(),this.isDirtyLegend=!1);f&&this.getStacks();v&&m(g,function(a){a.updateNames();a.setScale()});this.getMargins();v&&(m(g,function(a){a.isDirty&&(A=!0)}),m(g,function(a){var c=a.min+","+a.max;a.extKey!==c&&(a.extKey=c,n.push(function(){b(a,"afterSetExtremes",d(a.eventArgs,a.getExtremes()));delete a.eventArgs}));(A||f)&&a.redraw()}));A&&this.drawChartBox();b(this,"predraw");m(e,function(a){(A||a.isDirty)&&a.visible&&a.redraw();a.isDirtyData=!1});k&&k.reset(!0);t.draw();b(this,"redraw");b(this,
"render");x&&this.temporaryDisplay(!0);m(n,function(a){a.call()})},get:function(a){function b(b){return b.id===a||b.options&&b.options.id===a}var d,g=this.series,e;d=c(this.axes,b)||c(this.series,b);for(e=0;!d&&e<g.length;e++)d=c(g[e].points||[],b);return d},getAxes:function(){var a=this,b=this.options,c=b.xAxis=g(b.xAxis||{}),b=b.yAxis=g(b.yAxis||{});m(c,function(a,b){a.index=b;a.isX=!0});m(b,function(a,b){a.index=b});c=c.concat(b);m(c,function(b){new l(a,b)})},getSelectedPoints:function(){var a=
[];m(this.series,function(b){a=a.concat(k(b.data||[],function(a){return a.selected}))});return a},getSelectedSeries:function(){return k(this.series,function(a){return a.selected})},setTitle:function(a,b,c){var d=this,g=d.options,e;e=g.title=t({style:{color:"#333333",fontSize:g.isStock?"16px":"18px"}},g.title,a);g=g.subtitle=t({style:{color:"#666666"}},g.subtitle,b);m([["title",a,e],["subtitle",b,g]],function(a,b){var c=a[0],g=d[c],e=a[1];a=a[2];g&&e&&(d[c]=g=g.destroy());a&&!g&&(d[c]=d.renderer.text(a.text,
0,0,a.useHTML).attr({align:a.align,"class":"highcharts-"+c,zIndex:a.zIndex||4}).add(),d[c].update=function(a){d.setTitle(!b&&a,b&&a)},d[c].css(a.style))});d.layOutTitles(c)},layOutTitles:function(a){var b=0,c,g=this.renderer,e=this.spacingBox;m(["title","subtitle"],function(a){var c=this[a],k=this.options[a];a="title"===a?-3:k.verticalAlign?0:b+2;var q;c&&(q=k.style.fontSize,q=g.fontMetrics(q,c).b,c.css({width:(k.width||e.width+k.widthAdjust)+"px"}).align(d({y:a+q},k),!1,"spacingBox"),k.floating||
k.verticalAlign||(b=Math.ceil(b+c.getBBox(k.useHTML).height)))},this);c=this.titleOffset!==b;this.titleOffset=b;!this.isDirtyBox&&c&&(this.isDirtyBox=c,this.hasRendered&&q(a,!0)&&this.isDirtyBox&&this.redraw())},getChartSize:function(){var b=this.options.chart,c=b.width,b=b.height,d=this.renderTo;h(c)||(this.containerWidth=a.getStyle(d,"width"));h(b)||(this.containerHeight=a.getStyle(d,"height"));this.chartWidth=Math.max(0,c||this.containerWidth||600);this.chartHeight=Math.max(0,a.relativeLength(b,
this.chartWidth)||(1<this.containerHeight?this.containerHeight:400))},temporaryDisplay:function(b){var c=this.renderTo;if(b)for(;c&&c.style;)c.hcOrigStyle&&(a.css(c,c.hcOrigStyle),delete c.hcOrigStyle),c.hcOrigDetached&&(f.body.removeChild(c),c.hcOrigDetached=!1),c=c.parentNode;else for(;c&&c.style;){f.body.contains(c)||c.parentNode||(c.hcOrigDetached=!0,f.body.appendChild(c));if("none"===a.getStyle(c,"display",!1)||c.hcOricDetached)c.hcOrigStyle={display:c.style.display,height:c.style.height,overflow:c.style.overflow},
b={display:"block",overflow:"hidden"},c!==this.renderTo&&(b.height=0),a.css(c,b),c.offsetWidth||c.style.setProperty("display","block","important");c=c.parentNode;if(c===f.body)break}},setClassName:function(a){this.container.className="highcharts-container "+(a||"")},getContainer:function(){var b,c=this.options,g=c.chart,e,k;b=this.renderTo;var q=a.uniqueKey(),h;b||(this.renderTo=b=g.renderTo);I(b)&&(this.renderTo=b=f.getElementById(b));b||a.error(13,!0);e=A(p(b,"data-highcharts-chart"));z(e)&&u[e]&&
u[e].hasRendered&&u[e].destroy();p(b,"data-highcharts-chart",this.index);b.innerHTML="";g.skipClone||b.offsetWidth||this.temporaryDisplay();this.getChartSize();e=this.chartWidth;k=this.chartHeight;h=d({position:"relative",overflow:"hidden",width:e+"px",height:k+"px",textAlign:"left",lineHeight:"normal",zIndex:0,"-webkit-tap-highlight-color":"rgba(0,0,0,0)"},g.style);this.container=b=r("div",{id:q},h,b);this._cursor=b.style.cursor;this.renderer=new (a[g.renderer]||a.Renderer)(b,e,k,null,g.forExport,
c.exporting&&c.exporting.allowHTML);this.setClassName(g.className);this.renderer.setStyle(g.style);this.renderer.chartIndex=this.index},getMargins:function(a){var b=this.spacing,c=this.margin,d=this.titleOffset;this.resetMargins();d&&!h(c[0])&&(this.plotTop=Math.max(this.plotTop,d+this.options.title.margin+b[0]));this.legend&&this.legend.display&&this.legend.adjustMargins(c,b);this.extraMargin&&(this[this.extraMargin.type]=(this[this.extraMargin.type]||0)+this.extraMargin.value);this.adjustPlotArea&&
this.adjustPlotArea();a||this.getAxisMargins()},getAxisMargins:function(){var a=this,b=a.axisOffset=[0,0,0,0],c=a.margin;a.hasCartesianSeries&&m(a.axes,function(a){a.visible&&a.getOffset()});m(K,function(d,g){h(c[g])||(a[d]+=b[g])});a.setChartSize()},reflow:function(b){var c=this,d=c.options.chart,g=c.renderTo,e=h(d.width)&&h(d.height),k=d.width||a.getStyle(g,"width"),d=d.height||a.getStyle(g,"height"),g=b?b.target:L;if(!e&&!c.isPrinting&&k&&d&&(g===L||g===f)){if(k!==c.containerWidth||d!==c.containerHeight)clearTimeout(c.reflowTimeout),
c.reflowTimeout=Q(function(){c.container&&c.setSize(void 0,void 0,!1)},b?100:0);c.containerWidth=k;c.containerHeight=d}},initReflow:function(){var a=this,b;b=E(L,"resize",function(b){a.reflow(b)});E(a,"destroy",b)},setSize:function(c,d,g){var k=this,q=k.renderer;k.isResizing+=1;a.setAnimation(g,k);k.oldChartHeight=k.chartHeight;k.oldChartWidth=k.chartWidth;void 0!==c&&(k.options.chart.width=c);void 0!==d&&(k.options.chart.height=d);k.getChartSize();c=q.globalAnimation;(c?D:e)(k.container,{width:k.chartWidth+
"px",height:k.chartHeight+"px"},c);k.setChartSize(!0);q.setSize(k.chartWidth,k.chartHeight,g);m(k.axes,function(a){a.isDirty=!0;a.setScale()});k.isDirtyLegend=!0;k.isDirtyBox=!0;k.layOutTitles();k.getMargins();k.redraw(g);k.oldChartHeight=null;b(k,"resize");Q(function(){k&&b(k,"endResize",null,function(){--k.isResizing})},H(c).duration)},setChartSize:function(a){var b=this.inverted,c=this.renderer,d=this.chartWidth,g=this.chartHeight,e=this.options.chart,k=this.spacing,q=this.clipOffset,h,f,l,v;this.plotLeft=
h=Math.round(this.plotLeft);this.plotTop=f=Math.round(this.plotTop);this.plotWidth=l=Math.max(0,Math.round(d-h-this.marginRight));this.plotHeight=v=Math.max(0,Math.round(g-f-this.marginBottom));this.plotSizeX=b?v:l;this.plotSizeY=b?l:v;this.plotBorderWidth=e.plotBorderWidth||0;this.spacingBox=c.spacingBox={x:k[3],y:k[0],width:d-k[3]-k[1],height:g-k[0]-k[2]};this.plotBox=c.plotBox={x:h,y:f,width:l,height:v};d=2*Math.floor(this.plotBorderWidth/2);b=Math.ceil(Math.max(d,q[3])/2);c=Math.ceil(Math.max(d,
q[0])/2);this.clipBox={x:b,y:c,width:Math.floor(this.plotSizeX-Math.max(d,q[1])/2-b),height:Math.max(0,Math.floor(this.plotSizeY-Math.max(d,q[2])/2-c))};a||m(this.axes,function(a){a.setAxisSize();a.setAxisTranslation()})},resetMargins:function(){var a=this,b=a.options.chart;m(["margin","spacing"],function(c){var d=b[c],g=B(d)?d:[d,d,d,d];m(["Top","Right","Bottom","Left"],function(d,e){a[c][e]=q(b[c+d],g[e])})});m(K,function(b,c){a[b]=q(a.margin[c],a.spacing[c])});a.axisOffset=[0,0,0,0];a.clipOffset=
[0,0,0,0]},drawChartBox:function(){var a=this.options.chart,b=this.renderer,c=this.chartWidth,d=this.chartHeight,g=this.chartBackground,e=this.plotBackground,k=this.plotBorder,q,h=this.plotBGImage,f=a.backgroundColor,m=a.plotBackgroundColor,l=a.plotBackgroundImage,v,A=this.plotLeft,F=this.plotTop,t=this.plotWidth,x=this.plotHeight,n=this.plotBox,p=this.clipRect,z=this.clipBox,G="animate";g||(this.chartBackground=g=b.rect().addClass("highcharts-background").add(),G="attr");q=a.borderWidth||0;v=q+(a.shadow?
8:0);f={fill:f||"none"};if(q||g["stroke-width"])f.stroke=a.borderColor,f["stroke-width"]=q;g.attr(f).shadow(a.shadow);g[G]({x:v/2,y:v/2,width:c-v-q%2,height:d-v-q%2,r:a.borderRadius});G="animate";e||(G="attr",this.plotBackground=e=b.rect().addClass("highcharts-plot-background").add());e[G](n);e.attr({fill:m||"none"}).shadow(a.plotShadow);l&&(h?h.animate(n):this.plotBGImage=b.image(l,A,F,t,x).add());p?p.animate({width:z.width,height:z.height}):this.clipRect=b.clipRect(z);G="animate";k||(G="attr",this.plotBorder=
k=b.rect().addClass("highcharts-plot-border").attr({zIndex:1}).add());k.attr({stroke:a.plotBorderColor,"stroke-width":a.plotBorderWidth||0,fill:"none"});k[G](k.crisp({x:A,y:F,width:t,height:x},-k.strokeWidth()));this.isDirtyBox=!1},propFromSeries:function(){var a=this,b=a.options.chart,c,d=a.options.series,g,e;m(["inverted","angular","polar"],function(k){c=G[b.type||b.defaultSeriesType];e=b[k]||c&&c.prototype[k];for(g=d&&d.length;!e&&g--;)(c=G[d[g].type])&&c.prototype[k]&&(e=!0);a[k]=e})},linkSeries:function(){var a=
this,b=a.series;m(b,function(a){a.linkedSeries.length=0});m(b,function(b){var c=b.options.linkedTo;I(c)&&(c=":previous"===c?a.series[b.index-1]:a.get(c))&&c.linkedParent!==b&&(c.linkedSeries.push(b),b.linkedParent=c,b.visible=q(b.options.visible,c.options.visible,b.visible))})},renderSeries:function(){m(this.series,function(a){a.translate();a.render()})},renderLabels:function(){var a=this,b=a.options.labels;b.items&&m(b.items,function(c){var g=d(b.style,c.style),e=A(g.left)+a.plotLeft,k=A(g.top)+
a.plotTop+12;delete g.left;delete g.top;a.renderer.text(c.html,e,k).attr({zIndex:2}).css(g).add()})},render:function(){var a=this.axes,b=this.renderer,c=this.options,d,g,e;this.setTitle();this.legend=new x(this,c.legend);this.getStacks&&this.getStacks();this.getMargins(!0);this.setChartSize();c=this.plotWidth;d=this.plotHeight=Math.max(this.plotHeight-21,0);m(a,function(a){a.setScale()});this.getAxisMargins();g=1.1<c/this.plotWidth;e=1.05<d/this.plotHeight;if(g||e)m(a,function(a){(a.horiz&&g||!a.horiz&&
e)&&a.setTickInterval(!0)}),this.getMargins();this.drawChartBox();this.hasCartesianSeries&&m(a,function(a){a.visible&&a.render()});this.seriesGroup||(this.seriesGroup=b.g("series-group").attr({zIndex:3}).add());this.renderSeries();this.renderLabels();this.addCredits();this.setResponsive&&this.setResponsive();this.hasRendered=!0},addCredits:function(a){var b=this;a=t(!0,this.options.credits,a);a.enabled&&!this.credits&&(this.credits=this.renderer.text(a.text+(this.mapCredits||""),0,0).addClass("highcharts-credits").on("click",
function(){a.href&&(L.location.href=a.href)}).attr({align:a.position.align,zIndex:8}).css(a.style).add().align(a.position),this.credits.update=function(a){b.credits=b.credits.destroy();b.addCredits(a)})},destroy:function(){var c=this,d=c.axes,g=c.series,e=c.container,k,q=e&&e.parentNode;b(c,"destroy");c.renderer.forExport?a.erase(u,c):u[c.index]=void 0;a.chartCount--;c.renderTo.removeAttribute("data-highcharts-chart");F(c);for(k=d.length;k--;)d[k]=d[k].destroy();this.scroller&&this.scroller.destroy&&
this.scroller.destroy();for(k=g.length;k--;)g[k]=g[k].destroy();m("title subtitle chartBackground plotBackground plotBGImage plotBorder seriesGroup clipRect credits pointer rangeSelector legend resetZoomButton tooltip renderer".split(" "),function(a){var b=c[a];b&&b.destroy&&(c[a]=b.destroy())});e&&(e.innerHTML="",F(e),q&&w(e));C(c,function(a,b){delete c[b]})},isReadyToRender:function(){var a=this;return v||L!=L.top||"complete"===f.readyState?!0:(f.attachEvent("onreadystatechange",function(){f.detachEvent("onreadystatechange",
a.firstRender);"complete"===f.readyState&&a.firstRender()}),!1)},firstRender:function(){var a=this,c=a.options;if(a.isReadyToRender()){a.getContainer();b(a,"init");a.resetMargins();a.setChartSize();a.propFromSeries();a.getAxes();m(c.series||[],function(b){a.initSeries(b)});a.linkSeries();b(a,"beforeRender");N&&(a.pointer=new N(a,c));a.render();if(!a.renderer.imgCount&&a.onload)a.onload();a.temporaryDisplay(!0)}},onload:function(){m([this.callback].concat(this.callbacks),function(a){a&&void 0!==this.index&&
a.apply(this,[this])},this);b(this,"load");b(this,"render");h(this.index)&&!1!==this.options.chart.reflow&&this.initReflow();this.onload=null}})})(M);(function(a){var E,D=a.each,H=a.extend,p=a.erase,f=a.fireEvent,l=a.format,r=a.isArray,n=a.isNumber,w=a.pick,u=a.removeEvent;a.Point=E=function(){};a.Point.prototype={init:function(a,h,f){this.series=a;this.color=a.color;this.applyOptions(h,f);a.options.colorByPoint?(h=a.options.colors||a.chart.options.colors,this.color=this.color||h[a.colorCounter],
h=h.length,f=a.colorCounter,a.colorCounter++,a.colorCounter===h&&(a.colorCounter=0)):f=a.colorIndex;this.colorIndex=w(this.colorIndex,f);a.chart.pointCount++;return this},applyOptions:function(a,h){var e=this.series,d=e.options.pointValKey||e.pointValKey;a=E.prototype.optionsToObject.call(this,a);H(this,a);this.options=this.options?H(this.options,a):a;a.group&&delete this.group;d&&(this.y=this[d]);this.isNull=w(this.isValid&&!this.isValid(),null===this.x||!n(this.y,!0));this.selected&&(this.state=
"select");"name"in this&&void 0===h&&e.xAxis&&e.xAxis.hasNames&&(this.x=e.xAxis.nameToX(this));void 0===this.x&&e&&(this.x=void 0===h?e.autoIncrement(this):h);return this},optionsToObject:function(a){var e={},f=this.series,d=f.options.keys,c=d||f.pointArrayMap||["y"],b=c.length,k=0,l=0;if(n(a)||null===a)e[c[0]]=a;else if(r(a))for(!d&&a.length>b&&(f=typeof a[0],"string"===f?e.name=a[0]:"number"===f&&(e.x=a[0]),k++);l<b;)d&&void 0===a[k]||(e[c[l]]=a[k]),k++,l++;else"object"===typeof a&&(e=a,a.dataLabels&&
(f._hasPointLabels=!0),a.marker&&(f._hasPointMarkers=!0));return e},getClassName:function(){return"highcharts-point"+(this.selected?" highcharts-point-select":"")+(this.negative?" highcharts-negative":"")+(this.isNull?" highcharts-null-point":"")+(void 0!==this.colorIndex?" highcharts-color-"+this.colorIndex:"")+(this.options.className?" "+this.options.className:"")+(this.zone&&this.zone.className?" "+this.zone.className.replace("highcharts-negative",""):"")},getZone:function(){var a=this.series,
h=a.zones,a=a.zoneAxis||"y",f=0,d;for(d=h[f];this[a]>=d.value;)d=h[++f];d&&d.color&&!this.options.color&&(this.color=d.color);return d},destroy:function(){var a=this.series.chart,h=a.hoverPoints,f;a.pointCount--;h&&(this.setState(),p(h,this),h.length||(a.hoverPoints=null));if(this===a.hoverPoint)this.onMouseOut();if(this.graphic||this.dataLabel)u(this),this.destroyElements();this.legendItem&&a.legend.destroyItem(this);for(f in this)this[f]=null},destroyElements:function(){for(var a=["graphic","dataLabel",
"dataLabelUpper","connector","shadowGroup"],h,f=6;f--;)h=a[f],this[h]&&(this[h]=this[h].destroy())},getLabelConfig:function(){return{x:this.category,y:this.y,color:this.color,colorIndex:this.colorIndex,key:this.name||this.category,series:this.series,point:this,percentage:this.percentage,total:this.total||this.stackTotal}},tooltipFormatter:function(a){var e=this.series,f=e.tooltipOptions,d=w(f.valueDecimals,""),c=f.valuePrefix||"",b=f.valueSuffix||"";D(e.pointArrayMap||["y"],function(e){e="{point."+
e;if(c||b)a=a.replace(e+"}",c+e+"}"+b);a=a.replace(e+"}",e+":,."+d+"f}")});return l(a,{point:this,series:this.series})},firePointEvent:function(a,h,m){var d=this,c=this.series.options;(c.point.events[a]||d.options&&d.options.events&&d.options.events[a])&&this.importEvents();"click"===a&&c.allowPointSelect&&(m=function(a){d.select&&d.select(null,a.ctrlKey||a.metaKey||a.shiftKey)});f(this,a,h,m)},visible:!0}})(M);(function(a){var E=a.addEvent,D=a.animObject,H=a.arrayMax,p=a.arrayMin,f=a.correctFloat,
l=a.Date,r=a.defaultOptions,n=a.defaultPlotOptions,w=a.defined,u=a.each,e=a.erase,h=a.extend,m=a.fireEvent,d=a.grep,c=a.isArray,b=a.isNumber,k=a.isString,z=a.merge,B=a.objectEach,I=a.pick,x=a.removeEvent,K=a.splat,t=a.SVGElement,C=a.syncTimeout,N=a.win;a.Series=a.seriesType("line",null,{lineWidth:2,allowPointSelect:!1,showCheckbox:!1,animation:{duration:1E3},events:{},marker:{lineWidth:0,lineColor:"#ffffff",radius:4,states:{hover:{animation:{duration:50},enabled:!0,radiusPlus:2,lineWidthPlus:1},select:{fillColor:"#cccccc",
lineColor:"#000000",lineWidth:2}}},point:{events:{}},dataLabels:{align:"center",formatter:function(){return null===this.y?"":a.numberFormat(this.y,-1)},style:{fontSize:"11px",fontWeight:"bold",color:"contrast",textOutline:"1px contrast"},verticalAlign:"bottom",x:0,y:0,padding:5},cropThreshold:300,pointRange:0,softThreshold:!0,states:{hover:{animation:{duration:50},lineWidthPlus:1,marker:{},halo:{size:10,opacity:.25}},select:{marker:{}}},stickyTracking:!0,turboThreshold:1E3,findNearestPointBy:"x"},
{isCartesian:!0,pointClass:a.Point,sorted:!0,requireSorting:!0,directTouch:!1,axisTypes:["xAxis","yAxis"],colorCounter:0,parallelArrays:["x","y"],coll:"series",init:function(a,b){var c=this,d,g=a.series,e;c.chart=a;c.options=b=c.setOptions(b);c.linkedSeries=[];c.bindAxes();h(c,{name:b.name,state:"",visible:!1!==b.visible,selected:!0===b.selected});d=b.events;B(d,function(a,b){E(c,b,a)});if(d&&d.click||b.point&&b.point.events&&b.point.events.click||b.allowPointSelect)a.runTrackerClick=!0;c.getColor();
c.getSymbol();u(c.parallelArrays,function(a){c[a+"Data"]=[]});c.setData(b.data,!1);c.isCartesian&&(a.hasCartesianSeries=!0);g.length&&(e=g[g.length-1]);c._i=I(e&&e._i,-1)+1;a.orderSeries(this.insert(g))},insert:function(a){var c=this.options.index,d;if(b(c)){for(d=a.length;d--;)if(c>=I(a[d].options.index,a[d]._i)){a.splice(d+1,0,this);break}-1===d&&a.unshift(this);d+=1}else a.push(this);return I(d,a.length-1)},bindAxes:function(){var b=this,c=b.options,d=b.chart,e;u(b.axisTypes||[],function(g){u(d[g],
function(a){e=a.options;if(c[g]===e.index||void 0!==c[g]&&c[g]===e.id||void 0===c[g]&&0===e.index)b.insert(a.series),b[g]=a,a.isDirty=!0});b[g]||b.optionalAxis===g||a.error(18,!0)})},updateParallelArrays:function(a,c){var d=a.series,e=arguments,g=b(c)?function(b){var g="y"===b&&d.toYData?d.toYData(a):a[b];d[b+"Data"][c]=g}:function(a){Array.prototype[c].apply(d[a+"Data"],Array.prototype.slice.call(e,2))};u(d.parallelArrays,g)},autoIncrement:function(){var b=this.options,c=this.xIncrement,d,e=b.pointIntervalUnit,
g=0,c=I(c,b.pointStart,0);this.pointInterval=d=I(this.pointInterval,b.pointInterval,1);e&&(b=new l(c),"day"===e?b=+b[l.hcSetDate](b[l.hcGetDate]()+d):"month"===e?b=+b[l.hcSetMonth](b[l.hcGetMonth]()+d):"year"===e&&(b=+b[l.hcSetFullYear](b[l.hcGetFullYear]()+d)),l.hcHasTimeZone&&(g=a.getTZOffset(b)-a.getTZOffset(c)),d=b-c+g);this.xIncrement=c+d;return c},setOptions:function(a){var b=this.chart,c=b.options,d=c.plotOptions,g=(b.userOptions||{}).plotOptions||{},e=d[this.type];this.userOptions=a;b=z(e,
d.series,a);this.tooltipOptions=z(r.tooltip,r.plotOptions.series&&r.plotOptions.series.tooltip,r.plotOptions[this.type].tooltip,c.tooltip.userOptions,d.series&&d.series.tooltip,d[this.type].tooltip,a.tooltip);this.stickyTracking=I(a.stickyTracking,g[this.type]&&g[this.type].stickyTracking,g.series&&g.series.stickyTracking,this.tooltipOptions.shared&&!this.noSharedTooltip?!0:b.stickyTracking);null===e.marker&&delete b.marker;this.zoneAxis=b.zoneAxis;a=this.zones=(b.zones||[]).slice();!b.negativeColor&&
!b.negativeFillColor||b.zones||a.push({value:b[this.zoneAxis+"Threshold"]||b.threshold||0,className:"highcharts-negative",color:b.negativeColor,fillColor:b.negativeFillColor});a.length&&w(a[a.length-1].value)&&a.push({color:this.color,fillColor:this.fillColor});return b},getCyclic:function(a,b,c){var d,g=this.chart,e=this.userOptions,k=a+"Index",h=a+"Counter",q=c?c.length:I(g.options.chart[a+"Count"],g[a+"Count"]);b||(d=I(e[k],e["_"+k]),w(d)||(g.series.length||(g[h]=0),e["_"+k]=d=g[h]%q,g[h]+=1),
c&&(b=c[d]));void 0!==d&&(this[k]=d);this[a]=b},getColor:function(){this.options.colorByPoint?this.options.color=null:this.getCyclic("color",this.options.color||n[this.type].color,this.chart.options.colors)},getSymbol:function(){this.getCyclic("symbol",this.options.marker.symbol,this.chart.options.symbols)},drawLegendSymbol:a.LegendSymbolMixin.drawLineMarker,setData:function(d,e,h,f){var g=this,q=g.points,m=q&&q.length||0,l,A=g.options,t=g.chart,x=null,n=g.xAxis,p=A.turboThreshold,z=this.xData,F=
this.yData,C=(l=g.pointArrayMap)&&l.length;d=d||[];l=d.length;e=I(e,!0);if(!1!==f&&l&&m===l&&!g.cropped&&!g.hasGroupedData&&g.visible)u(d,function(a,b){q[b].update&&a!==A.data[b]&&q[b].update(a,!1,null,!1)});else{g.xIncrement=null;g.colorCounter=0;u(this.parallelArrays,function(a){g[a+"Data"].length=0});if(p&&l>p){for(h=0;null===x&&h<l;)x=d[h],h++;if(b(x))for(h=0;h<l;h++)z[h]=this.autoIncrement(),F[h]=d[h];else if(c(x))if(C)for(h=0;h<l;h++)x=d[h],z[h]=x[0],F[h]=x.slice(1,C+1);else for(h=0;h<l;h++)x=
d[h],z[h]=x[0],F[h]=x[1];else a.error(12)}else for(h=0;h<l;h++)void 0!==d[h]&&(x={series:g},g.pointClass.prototype.applyOptions.apply(x,[d[h]]),g.updateParallelArrays(x,h));F&&k(F[0])&&a.error(14,!0);g.data=[];g.options.data=g.userOptions.data=d;for(h=m;h--;)q[h]&&q[h].destroy&&q[h].destroy();n&&(n.minRange=n.userMinRange);g.isDirty=t.isDirtyBox=!0;g.isDirtyData=!!q;h=!1}"point"===A.legendType&&(this.processData(),this.generatePoints());e&&t.redraw(h)},processData:function(b){var c=this.xData,d=this.yData,
e=c.length,g;g=0;var k,h,q=this.xAxis,f,m=this.options;f=m.cropThreshold;var l=this.getExtremesFromAll||m.getExtremesFromAll,t=this.isCartesian,m=q&&q.val2lin,x=q&&q.isLog,n=this.requireSorting,p,z;if(t&&!this.isDirty&&!q.isDirty&&!this.yAxis.isDirty&&!b)return!1;q&&(b=q.getExtremes(),p=b.min,z=b.max);if(t&&this.sorted&&!l&&(!f||e>f||this.forceCrop))if(c[e-1]<p||c[0]>z)c=[],d=[];else if(c[0]<p||c[e-1]>z)g=this.cropData(this.xData,this.yData,p,z),c=g.xData,d=g.yData,g=g.start,k=!0;for(f=c.length||
1;--f;)e=x?m(c[f])-m(c[f-1]):c[f]-c[f-1],0<e&&(void 0===h||e<h)?h=e:0>e&&n&&(a.error(15),n=!1);this.cropped=k;this.cropStart=g;this.processedXData=c;this.processedYData=d;this.closestPointRange=h},cropData:function(a,b,c,d){var g=a.length,e=0,k=g,h=I(this.cropShoulder,1),f;for(f=0;f<g;f++)if(a[f]>=c){e=Math.max(0,f-h);break}for(c=f;c<g;c++)if(a[c]>d){k=c+h;break}return{xData:a.slice(e,k),yData:b.slice(e,k),start:e,end:k}},generatePoints:function(){var a=this.options,b=a.data,c=this.data,d,g=this.processedXData,
e=this.processedYData,k=this.pointClass,h=g.length,f=this.cropStart||0,m,l=this.hasGroupedData,a=a.keys,t,x=[],n;c||l||(c=[],c.length=b.length,c=this.data=c);a&&l&&(this.options.keys=!1);for(n=0;n<h;n++)m=f+n,l?(t=(new k).init(this,[g[n]].concat(K(e[n]))),t.dataGroup=this.groupMap[n]):(t=c[m])||void 0===b[m]||(c[m]=t=(new k).init(this,b[m],g[n])),t&&(t.index=m,x[n]=t);this.options.keys=a;if(c&&(h!==(d=c.length)||l))for(n=0;n<d;n++)n!==f||l||(n+=h),c[n]&&(c[n].destroyElements(),c[n].plotX=void 0);
this.data=c;this.points=x},getExtremes:function(a){var d=this.yAxis,e=this.processedXData,k,g=[],h=0;k=this.xAxis.getExtremes();var f=k.min,q=k.max,m,l,t,n;a=a||this.stackedYData||this.processedYData||[];k=a.length;for(n=0;n<k;n++)if(l=e[n],t=a[n],m=(b(t,!0)||c(t))&&(!d.positiveValuesOnly||t.length||0<t),l=this.getExtremesFromAll||this.options.getExtremesFromAll||this.cropped||(e[n+1]||l)>=f&&(e[n-1]||l)<=q,m&&l)if(m=t.length)for(;m--;)"number"===typeof t[m]&&(g[h++]=t[m]);else g[h++]=t;this.dataMin=
p(g);this.dataMax=H(g)},translate:function(){this.processedXData||this.processData();this.generatePoints();var a=this.options,c=a.stacking,d=this.xAxis,e=d.categories,g=this.yAxis,k=this.points,h=k.length,m=!!this.modifyValue,l=a.pointPlacement,t="between"===l||b(l),n=a.threshold,x=a.startFromThreshold?n:0,p,z,C,r,u=Number.MAX_VALUE;"between"===l&&(l=.5);b(l)&&(l*=I(a.pointRange||d.pointRange));for(a=0;a<h;a++){var B=k[a],N=B.x,K=B.y;z=B.low;var D=c&&g.stacks[(this.negStacks&&K<(x?0:n)?"-":"")+this.stackKey],
E;g.positiveValuesOnly&&null!==K&&0>=K&&(B.isNull=!0);B.plotX=p=f(Math.min(Math.max(-1E5,d.translate(N,0,0,0,1,l,"flags"===this.type)),1E5));c&&this.visible&&!B.isNull&&D&&D[N]&&(r=this.getStackIndicator(r,N,this.index),E=D[N],K=E.points[r.key],z=K[0],K=K[1],z===x&&r.key===D[N].base&&(z=I(n,g.min)),g.positiveValuesOnly&&0>=z&&(z=null),B.total=B.stackTotal=E.total,B.percentage=E.total&&B.y/E.total*100,B.stackY=K,E.setOffset(this.pointXOffset||0,this.barW||0));B.yBottom=w(z)?g.translate(z,0,1,0,1):
null;m&&(K=this.modifyValue(K,B));B.plotY=z="number"===typeof K&&Infinity!==K?Math.min(Math.max(-1E5,g.translate(K,0,1,0,1)),1E5):void 0;B.isInside=void 0!==z&&0<=z&&z<=g.len&&0<=p&&p<=d.len;B.clientX=t?f(d.translate(N,0,0,0,1,l)):p;B.negative=B.y<(n||0);B.category=e&&void 0!==e[B.x]?e[B.x]:B.x;B.isNull||(void 0!==C&&(u=Math.min(u,Math.abs(p-C))),C=p);B.zone=this.zones.length&&B.getZone()}this.closestPointRangePx=u},getValidPoints:function(a,b){var c=this.chart;return d(a||this.points||[],function(a){return b&&
!c.isInsidePlot(a.plotX,a.plotY,c.inverted)?!1:!a.isNull})},setClip:function(a){var b=this.chart,c=this.options,d=b.renderer,g=b.inverted,e=this.clipBox,k=e||b.clipBox,h=this.sharedClipKey||["_sharedClip",a&&a.duration,a&&a.easing,k.height,c.xAxis,c.yAxis].join(),f=b[h],q=b[h+"m"];f||(a&&(k.width=0,g&&(k.x=b.plotSizeX),b[h+"m"]=q=d.clipRect(g?b.plotSizeX+99:-99,g?-b.plotLeft:-b.plotTop,99,g?b.chartWidth:b.chartHeight)),b[h]=f=d.clipRect(k),f.count={length:0});a&&!f.count[this.index]&&(f.count[this.index]=
!0,f.count.length+=1);!1!==c.clip&&(this.group.clip(a||e?f:b.clipRect),this.markerGroup.clip(q),this.sharedClipKey=h);a||(f.count[this.index]&&(delete f.count[this.index],--f.count.length),0===f.count.length&&h&&b[h]&&(e||(b[h]=b[h].destroy()),b[h+"m"]&&(b[h+"m"]=b[h+"m"].destroy())))},animate:function(a){var b=this.chart,c=D(this.options.animation),d;a?this.setClip(c):(d=this.sharedClipKey,(a=b[d])&&a.animate({width:b.plotSizeX,x:0},c),b[d+"m"]&&b[d+"m"].animate({width:b.plotSizeX+99,x:0},c),this.animate=
null)},afterAnimate:function(){this.setClip();m(this,"afterAnimate");this.finishedAnimating=!0},drawPoints:function(){var a=this.points,b=this.chart,c,d,g,e,k=this.options.marker,h,f,l,m=this[this.specialGroup]||this.markerGroup,t,n=I(k.enabled,this.xAxis.isRadial?!0:null,this.closestPointRangePx>=2*k.radius);if(!1!==k.enabled||this._hasPointMarkers)for(c=0;c<a.length;c++)d=a[c],e=d.graphic,h=d.marker||{},f=!!d.marker,g=n&&void 0===h.enabled||h.enabled,l=d.isInside,g&&!d.isNull?(g=I(h.symbol,this.symbol),
d.hasImage=0===g.indexOf("url"),t=this.markerAttribs(d,d.selected&&"select"),e?e[l?"show":"hide"](!0).animate(t):l&&(0<t.width||d.hasImage)&&(d.graphic=e=b.renderer.symbol(g,t.x,t.y,t.width,t.height,f?h:k).add(m)),e&&e.attr(this.pointAttribs(d,d.selected&&"select")),e&&e.addClass(d.getClassName(),!0)):e&&(d.graphic=e.destroy())},markerAttribs:function(a,b){var c=this.options.marker,d=a.marker||{},g=I(d.radius,c.radius);b&&(c=c.states[b],b=d.states&&d.states[b],g=I(b&&b.radius,c&&c.radius,g+(c&&c.radiusPlus||
0)));a.hasImage&&(g=0);a={x:Math.floor(a.plotX)-g,y:a.plotY-g};g&&(a.width=a.height=2*g);return a},pointAttribs:function(a,b){var c=this.options.marker,d=a&&a.options,g=d&&d.marker||{},e=this.color,k=d&&d.color,h=a&&a.color,d=I(g.lineWidth,c.lineWidth);a=a&&a.zone&&a.zone.color;e=k||a||h||e;a=g.fillColor||c.fillColor||e;e=g.lineColor||c.lineColor||e;b&&(c=c.states[b],b=g.states&&g.states[b]||{},d=I(b.lineWidth,c.lineWidth,d+I(b.lineWidthPlus,c.lineWidthPlus,0)),a=b.fillColor||c.fillColor||a,e=b.lineColor||
c.lineColor||e);return{stroke:e,"stroke-width":d,fill:a}},destroy:function(){var a=this,b=a.chart,c=/AppleWebKit\/533/.test(N.navigator.userAgent),d,g,k=a.data||[],h,f;m(a,"destroy");x(a);u(a.axisTypes||[],function(b){(f=a[b])&&f.series&&(e(f.series,a),f.isDirty=f.forceRedraw=!0)});a.legendItem&&a.chart.legend.destroyItem(a);for(g=k.length;g--;)(h=k[g])&&h.destroy&&h.destroy();a.points=null;clearTimeout(a.animationTimeout);B(a,function(a,b){a instanceof t&&!a.survive&&(d=c&&"group"===b?"hide":"destroy",
a[d]())});b.hoverSeries===a&&(b.hoverSeries=null);e(b.series,a);b.orderSeries();B(a,function(b,c){delete a[c]})},getGraphPath:function(a,b,c){var d=this,g=d.options,e=g.step,k,h=[],f=[],l;a=a||d.points;(k=a.reversed)&&a.reverse();(e={right:1,center:2}[e]||e&&3)&&k&&(e=4-e);!g.connectNulls||b||c||(a=this.getValidPoints(a));u(a,function(k,m){var q=k.plotX,t=k.plotY,n=a[m-1];(k.leftCliff||n&&n.rightCliff)&&!c&&(l=!0);k.isNull&&!w(b)&&0<m?l=!g.connectNulls:k.isNull&&!b?l=!0:(0===m||l?m=["M",k.plotX,k.plotY]:
d.getPointSpline?m=d.getPointSpline(a,k,m):e?(m=1===e?["L",n.plotX,t]:2===e?["L",(n.plotX+q)/2,n.plotY,"L",(n.plotX+q)/2,t]:["L",q,n.plotY],m.push("L",q,t)):m=["L",q,t],f.push(k.x),e&&f.push(k.x),h.push.apply(h,m),l=!1)});h.xMap=f;return d.graphPath=h},drawGraph:function(){var a=this,b=this.options,c=(this.gappedPath||this.getGraphPath).call(this),d=[["graph","highcharts-graph",b.lineColor||this.color,b.dashStyle]];u(this.zones,function(c,e){d.push(["zone-graph-"+e,"highcharts-graph highcharts-zone-graph-"+
e+" "+(c.className||""),c.color||a.color,c.dashStyle||b.dashStyle])});u(d,function(d,e){var g=d[0],k=a[g];k?(k.endX=a.preventGraphAnimation?null:c.xMap,k.animate({d:c})):c.length&&(a[g]=a.chart.renderer.path(c).addClass(d[1]).attr({zIndex:1}).add(a.group),k={stroke:d[2],"stroke-width":b.lineWidth,fill:a.fillGraph&&a.color||"none"},d[3]?k.dashstyle=d[3]:"square"!==b.linecap&&(k["stroke-linecap"]=k["stroke-linejoin"]="round"),k=a[g].attr(k).shadow(2>e&&b.shadow));k&&(k.startX=c.xMap,k.isArea=c.isArea)})},
applyZones:function(){var a=this,b=this.chart,c=b.renderer,d=this.zones,e,k,h=this.clips||[],f,m=this.graph,l=this.area,t=Math.max(b.chartWidth,b.chartHeight),n=this[(this.zoneAxis||"y")+"Axis"],x,p,z=b.inverted,C,r,w,B,K=!1;d.length&&(m||l)&&n&&void 0!==n.min&&(p=n.reversed,C=n.horiz,m&&m.hide(),l&&l.hide(),x=n.getExtremes(),u(d,function(d,g){e=p?C?b.plotWidth:0:C?0:n.toPixels(x.min);e=Math.min(Math.max(I(k,e),0),t);k=Math.min(Math.max(Math.round(n.toPixels(I(d.value,x.max),!0)),0),t);K&&(e=k=n.toPixels(x.max));
r=Math.abs(e-k);w=Math.min(e,k);B=Math.max(e,k);n.isXAxis?(f={x:z?B:w,y:0,width:r,height:t},C||(f.x=b.plotHeight-f.x)):(f={x:0,y:z?B:w,width:t,height:r},C&&(f.y=b.plotWidth-f.y));z&&c.isVML&&(f=n.isXAxis?{x:0,y:p?w:B,height:f.width,width:b.chartWidth}:{x:f.y-b.plotLeft-b.spacingBox.x,y:0,width:f.height,height:b.chartHeight});h[g]?h[g].animate(f):(h[g]=c.clipRect(f),m&&a["zone-graph-"+g].clip(h[g]),l&&a["zone-area-"+g].clip(h[g]));K=d.value>x.max}),this.clips=h)},invertGroups:function(a){function b(){u(["group",
"markerGroup"],function(b){c[b]&&(d.renderer.isVML&&c[b].attr({width:c.yAxis.len,height:c.xAxis.len}),c[b].width=c.yAxis.len,c[b].height=c.xAxis.len,c[b].invert(a))})}var c=this,d=c.chart,e;c.xAxis&&(e=E(d,"resize",b),E(c,"destroy",e),b(a),c.invertGroups=b)},plotGroup:function(a,b,c,d,e){var g=this[a],k=!g;k&&(this[a]=g=this.chart.renderer.g().attr({zIndex:d||.1}).add(e));g.addClass("highcharts-"+b+" highcharts-series-"+this.index+" highcharts-"+this.type+"-series "+(w(this.colorIndex)?"highcharts-color-"+
this.colorIndex+" ":"")+(this.options.className||"")+(g.hasClass("highcharts-tracker")?" highcharts-tracker":""),!0);g.attr({visibility:c})[k?"attr":"animate"](this.getPlotBox());return g},getPlotBox:function(){var a=this.chart,b=this.xAxis,c=this.yAxis;a.inverted&&(b=c,c=this.xAxis);return{translateX:b?b.left:a.plotLeft,translateY:c?c.top:a.plotTop,scaleX:1,scaleY:1}},render:function(){var a=this,b=a.chart,c,d=a.options,e=!!a.animate&&b.renderer.isSVG&&D(d.animation).duration,k=a.visible?"inherit":
"hidden",h=d.zIndex,f=a.hasRendered,m=b.seriesGroup,l=b.inverted;c=a.plotGroup("group","series",k,h,m);a.markerGroup=a.plotGroup("markerGroup","markers",k,h,m);e&&a.animate(!0);c.inverted=a.isCartesian?l:!1;a.drawGraph&&(a.drawGraph(),a.applyZones());a.drawDataLabels&&a.drawDataLabels();a.visible&&a.drawPoints();a.drawTracker&&!1!==a.options.enableMouseTracking&&a.drawTracker();a.invertGroups(l);!1===d.clip||a.sharedClipKey||f||c.clip(b.clipRect);e&&a.animate();f||(a.animationTimeout=C(function(){a.afterAnimate()},
e));a.isDirty=!1;a.hasRendered=!0},redraw:function(){var a=this.chart,b=this.isDirty||this.isDirtyData,c=this.group,d=this.xAxis,e=this.yAxis;c&&(a.inverted&&c.attr({width:a.plotWidth,height:a.plotHeight}),c.animate({translateX:I(d&&d.left,a.plotLeft),translateY:I(e&&e.top,a.plotTop)}));this.translate();this.render();b&&delete this.kdTree},kdAxisArray:["clientX","plotY"],searchPoint:function(a,b){var c=this.xAxis,d=this.yAxis,e=this.chart.inverted;return this.searchKDTree({clientX:e?c.len-a.chartY+
c.pos:a.chartX-c.pos,plotY:e?d.len-a.chartX+d.pos:a.chartY-d.pos},b)},buildKDTree:function(){function a(c,d,e){var g,k;if(k=c&&c.length)return g=b.kdAxisArray[d%e],c.sort(function(a,b){return a[g]-b[g]}),k=Math.floor(k/2),{point:c[k],left:a(c.slice(0,k),d+1,e),right:a(c.slice(k+1),d+1,e)}}this.buildingKdTree=!0;var b=this,c=-1<b.options.findNearestPointBy.indexOf("y")?2:1;delete b.kdTree;C(function(){b.kdTree=a(b.getValidPoints(null,!b.directTouch),c,c);b.buildingKdTree=!1},b.options.kdNow?0:1)},
searchKDTree:function(a,b){function c(a,b,g,f){var m=b.point,l=d.kdAxisArray[g%f],q,t,n=m;t=w(a[e])&&w(m[e])?Math.pow(a[e]-m[e],2):null;q=w(a[k])&&w(m[k])?Math.pow(a[k]-m[k],2):null;q=(t||0)+(q||0);m.dist=w(q)?Math.sqrt(q):Number.MAX_VALUE;m.distX=w(t)?Math.sqrt(t):Number.MAX_VALUE;l=a[l]-m[l];q=0>l?"left":"right";t=0>l?"right":"left";b[q]&&(q=c(a,b[q],g+1,f),n=q[h]<n[h]?q:m);b[t]&&Math.sqrt(l*l)<n[h]&&(a=c(a,b[t],g+1,f),n=a[h]<n[h]?a:n);return n}var d=this,e=this.kdAxisArray[0],k=this.kdAxisArray[1],
h=b?"distX":"dist";b=-1<d.options.findNearestPointBy.indexOf("y")?2:1;this.kdTree||this.buildingKdTree||this.buildKDTree();if(this.kdTree)return c(a,this.kdTree,b,b)}})})(M);(function(a){var E=a.Axis,D=a.Chart,H=a.correctFloat,p=a.defined,f=a.destroyObjectProperties,l=a.each,r=a.format,n=a.objectEach,w=a.pick,u=a.Series;a.StackItem=function(a,h,f,d,c){var b=a.chart.inverted;this.axis=a;this.isNegative=f;this.options=h;this.x=d;this.total=null;this.points={};this.stack=c;this.rightCliff=this.leftCliff=
0;this.alignOptions={align:h.align||(b?f?"left":"right":"center"),verticalAlign:h.verticalAlign||(b?"middle":f?"bottom":"top"),y:w(h.y,b?4:f?14:-6),x:w(h.x,b?f?-6:6:0)};this.textAlign=h.textAlign||(b?f?"right":"left":"center")};a.StackItem.prototype={destroy:function(){f(this,this.axis)},render:function(a){var e=this.options,f=e.format,f=f?r(f,this):e.formatter.call(this);this.label?this.label.attr({text:f,visibility:"hidden"}):this.label=this.axis.chart.renderer.text(f,null,null,e.useHTML).css(e.style).attr({align:this.textAlign,
rotation:e.rotation,visibility:"hidden"}).add(a)},setOffset:function(a,h){var e=this.axis,d=e.chart,c=e.translate(e.usePercentage?100:this.total,0,0,0,1),e=e.translate(0),e=Math.abs(c-e);a=d.xAxis[0].translate(this.x)+a;c=this.getStackBox(d,this,a,c,h,e);if(h=this.label)h.align(this.alignOptions,null,c),c=h.alignAttr,h[!1===this.options.crop||d.isInsidePlot(c.x,c.y)?"show":"hide"](!0)},getStackBox:function(a,h,f,d,c,b){var e=h.axis.reversed,l=a.inverted;a=a.plotHeight;h=h.isNegative&&!e||!h.isNegative&&
e;return{x:l?h?d:d-b:f,y:l?a-f-c:h?a-d-b:a-d,width:l?b:c,height:l?c:b}}};D.prototype.getStacks=function(){var a=this;l(a.yAxis,function(a){a.stacks&&a.hasVisibleSeries&&(a.oldStacks=a.stacks)});l(a.series,function(e){!e.options.stacking||!0!==e.visible&&!1!==a.options.chart.ignoreHiddenSeries||(e.stackKey=e.type+w(e.options.stack,""))})};E.prototype.buildStacks=function(){var a=this.series,h=w(this.options.reversedStacks,!0),f=a.length,d;if(!this.isXAxis){this.usePercentage=!1;for(d=f;d--;)a[h?d:
f-d-1].setStackedPoints();for(d=0;d<f;d++)a[d].modifyStacks()}};E.prototype.renderStackTotals=function(){var a=this.chart,h=a.renderer,f=this.stacks,d=this.stackTotalGroup;d||(this.stackTotalGroup=d=h.g("stack-labels").attr({visibility:"visible",zIndex:6}).add());d.translate(a.plotLeft,a.plotTop);n(f,function(a){n(a,function(a){a.render(d)})})};E.prototype.resetStacks=function(){var a=this,h=a.stacks;a.isXAxis||n(h,function(e){n(e,function(d,c){d.touched<a.stacksTouched?(d.destroy(),delete e[c]):
(d.total=null,d.cumulative=null)})})};E.prototype.cleanStacks=function(){var a;this.isXAxis||(this.oldStacks&&(a=this.stacks=this.oldStacks),n(a,function(a){n(a,function(a){a.cumulative=a.total})}))};u.prototype.setStackedPoints=function(){if(this.options.stacking&&(!0===this.visible||!1===this.chart.options.chart.ignoreHiddenSeries)){var e=this.processedXData,h=this.processedYData,f=[],d=h.length,c=this.options,b=c.threshold,k=w(c.startFromThreshold&&b,0),l=c.stack,c=c.stacking,n=this.stackKey,r=
"-"+n,x=this.negStacks,u=this.yAxis,t=u.stacks,C=u.oldStacks,N,q,A,F,G,g,v;u.stacksTouched+=1;for(G=0;G<d;G++)g=e[G],v=h[G],N=this.getStackIndicator(N,g,this.index),F=N.key,A=(q=x&&v<(k?0:b))?r:n,t[A]||(t[A]={}),t[A][g]||(C[A]&&C[A][g]?(t[A][g]=C[A][g],t[A][g].total=null):t[A][g]=new a.StackItem(u,u.options.stackLabels,q,g,l)),A=t[A][g],null!==v?(A.points[F]=A.points[this.index]=[w(A.cumulative,k)],p(A.cumulative)||(A.base=F),A.touched=u.stacksTouched,0<N.index&&!1===this.singleStacks&&(A.points[F][0]=
A.points[this.index+","+g+",0"][0])):A.points[F]=A.points[this.index]=null,"percent"===c?(q=q?n:r,x&&t[q]&&t[q][g]?(q=t[q][g],A.total=q.total=Math.max(q.total,A.total)+Math.abs(v)||0):A.total=H(A.total+(Math.abs(v)||0))):A.total=H(A.total+(v||0)),A.cumulative=w(A.cumulative,k)+(v||0),null!==v&&(A.points[F].push(A.cumulative),f[G]=A.cumulative);"percent"===c&&(u.usePercentage=!0);this.stackedYData=f;u.oldStacks={}}};u.prototype.modifyStacks=function(){var a=this,h=a.stackKey,f=a.yAxis.stacks,d=a.processedXData,
c,b=a.options.stacking;a[b+"Stacker"]&&l([h,"-"+h],function(e){for(var k=d.length,h,l;k--;)if(h=d[k],c=a.getStackIndicator(c,h,a.index,e),l=(h=f[e]&&f[e][h])&&h.points[c.key])a[b+"Stacker"](l,h,k)})};u.prototype.percentStacker=function(a,h,f){h=h.total?100/h.total:0;a[0]=H(a[0]*h);a[1]=H(a[1]*h);this.stackedYData[f]=a[1]};u.prototype.getStackIndicator=function(a,h,f,d){!p(a)||a.x!==h||d&&a.key!==d?a={x:h,index:0,key:d}:a.index++;a.key=[f,h,a.index].join();return a}})(M);(function(a){var E=a.addEvent,
D=a.animate,H=a.Axis,p=a.createElement,f=a.css,l=a.defined,r=a.each,n=a.erase,w=a.extend,u=a.fireEvent,e=a.inArray,h=a.isNumber,m=a.isObject,d=a.isArray,c=a.merge,b=a.objectEach,k=a.pick,z=a.Point,B=a.Series,I=a.seriesTypes,x=a.setAnimation,K=a.splat;w(a.Chart.prototype,{addSeries:function(a,b,c){var d,e=this;a&&(b=k(b,!0),u(e,"addSeries",{options:a},function(){d=e.initSeries(a);e.isDirtyLegend=!0;e.linkSeries();b&&e.redraw(c)}));return d},addAxis:function(a,b,d,e){var h=b?"xAxis":"yAxis",f=this.options;
a=c(a,{index:this[h].length,isX:b});b=new H(this,a);f[h]=K(f[h]||{});f[h].push(a);k(d,!0)&&this.redraw(e);return b},showLoading:function(a){var b=this,c=b.options,d=b.loadingDiv,e=c.loading,k=function(){d&&f(d,{left:b.plotLeft+"px",top:b.plotTop+"px",width:b.plotWidth+"px",height:b.plotHeight+"px"})};d||(b.loadingDiv=d=p("div",{className:"highcharts-loading highcharts-loading-hidden"},null,b.container),b.loadingSpan=p("span",{className:"highcharts-loading-inner"},null,d),E(b,"redraw",k));d.className=
"highcharts-loading";b.loadingSpan.innerHTML=a||c.lang.loading;f(d,w(e.style,{zIndex:10}));f(b.loadingSpan,e.labelStyle);b.loadingShown||(f(d,{opacity:0,display:""}),D(d,{opacity:e.style.opacity||.5},{duration:e.showDuration||0}));b.loadingShown=!0;k()},hideLoading:function(){var a=this.options,b=this.loadingDiv;b&&(b.className="highcharts-loading highcharts-loading-hidden",D(b,{opacity:0},{duration:a.loading.hideDuration||100,complete:function(){f(b,{display:"none"})}}));this.loadingShown=!1},propsRequireDirtyBox:"backgroundColor borderColor borderWidth margin marginTop marginRight marginBottom marginLeft spacing spacingTop spacingRight spacingBottom spacingLeft borderRadius plotBackgroundColor plotBackgroundImage plotBorderColor plotBorderWidth plotShadow shadow".split(" "),
propsRequireUpdateSeries:"chart.inverted chart.polar chart.ignoreHiddenSeries chart.type colors plotOptions tooltip".split(" "),update:function(a,d,f){var m=this,n={credits:"addCredits",title:"setTitle",subtitle:"setSubtitle"},t=a.chart,x,g,p=[];if(t){c(!0,m.options.chart,t);"className"in t&&m.setClassName(t.className);if("inverted"in t||"polar"in t)m.propFromSeries(),x=!0;"alignTicks"in t&&(x=!0);b(t,function(a,b){-1!==e("chart."+b,m.propsRequireUpdateSeries)&&(g=!0);-1!==e(b,m.propsRequireDirtyBox)&&
(m.isDirtyBox=!0)});"style"in t&&m.renderer.setStyle(t.style)}a.colors&&(this.options.colors=a.colors);a.plotOptions&&c(!0,this.options.plotOptions,a.plotOptions);b(a,function(a,b){if(m[b]&&"function"===typeof m[b].update)m[b].update(a,!1);else if("function"===typeof m[n[b]])m[n[b]](a);"chart"!==b&&-1!==e(b,m.propsRequireUpdateSeries)&&(g=!0)});r("xAxis yAxis zAxis series colorAxis pane".split(" "),function(b){a[b]&&(r(K(a[b]),function(a,c){(c=l(a.id)&&m.get(a.id)||m[b][c])&&c.coll===b&&(c.update(a,
!1),f&&(c.touched=!0));if(!c&&f)if("series"===b)m.addSeries(a,!1).touched=!0;else if("xAxis"===b||"yAxis"===b)m.addAxis(a,"xAxis"===b,!1).touched=!0}),f&&r(m[b],function(a){a.touched?delete a.touched:p.push(a)}))});r(p,function(a){a.remove(!1)});x&&r(m.axes,function(a){a.update({},!1)});g&&r(m.series,function(a){a.update({},!1)});a.loading&&c(!0,m.options.loading,a.loading);x=t&&t.width;t=t&&t.height;h(x)&&x!==m.chartWidth||h(t)&&t!==m.chartHeight?m.setSize(x,t):k(d,!0)&&m.redraw()},setSubtitle:function(a){this.setTitle(void 0,
a)}});w(z.prototype,{update:function(a,b,c,d){function e(){h.applyOptions(a);null===h.y&&g&&(h.graphic=g.destroy());m(a,!0)&&(g&&g.element&&a&&a.marker&&void 0!==a.marker.symbol&&(h.graphic=g.destroy()),a&&a.dataLabels&&h.dataLabel&&(h.dataLabel=h.dataLabel.destroy()),h.connector&&(h.connector=h.connector.destroy()));l=h.index;f.updateParallelArrays(h,l);t.data[l]=m(t.data[l],!0)||m(a,!0)?h.options:a;f.isDirty=f.isDirtyData=!0;!f.fixedBox&&f.hasCartesianSeries&&(n.isDirtyBox=!0);"point"===t.legendType&&
(n.isDirtyLegend=!0);b&&n.redraw(c)}var h=this,f=h.series,g=h.graphic,l,n=f.chart,t=f.options;b=k(b,!0);!1===d?e():h.firePointEvent("update",{options:a},e)},remove:function(a,b){this.series.removePoint(e(this,this.series.data),a,b)}});w(B.prototype,{addPoint:function(a,b,c,d){var e=this.options,h=this.data,f=this.chart,g=this.xAxis,g=g&&g.hasNames&&g.names,l=e.data,m,n,t=this.xData,q,x;b=k(b,!0);m={series:this};this.pointClass.prototype.applyOptions.apply(m,[a]);x=m.x;q=t.length;if(this.requireSorting&&
x<t[q-1])for(n=!0;q&&t[q-1]>x;)q--;this.updateParallelArrays(m,"splice",q,0,0);this.updateParallelArrays(m,q);g&&m.name&&(g[x]=m.name);l.splice(q,0,a);n&&(this.data.splice(q,0,null),this.processData());"point"===e.legendType&&this.generatePoints();c&&(h[0]&&h[0].remove?h[0].remove(!1):(h.shift(),this.updateParallelArrays(m,"shift"),l.shift()));this.isDirtyData=this.isDirty=!0;b&&f.redraw(d)},removePoint:function(a,b,c){var d=this,e=d.data,h=e[a],f=d.points,g=d.chart,l=function(){f&&f.length===e.length&&
f.splice(a,1);e.splice(a,1);d.options.data.splice(a,1);d.updateParallelArrays(h||{series:d},"splice",a,1);h&&h.destroy();d.isDirty=!0;d.isDirtyData=!0;b&&g.redraw()};x(c,g);b=k(b,!0);h?h.firePointEvent("remove",null,l):l()},remove:function(a,b,c){function d(){e.destroy();h.isDirtyLegend=h.isDirtyBox=!0;h.linkSeries();k(a,!0)&&h.redraw(b)}var e=this,h=e.chart;!1!==c?u(e,"remove",null,d):d()},update:function(a,b){var d=this,e=d.chart,h=d.userOptions,f=d.oldType||d.type,l=a.type||h.type||e.options.chart.type,
g=I[f].prototype,m,n=["group","markerGroup","dataLabelsGroup"],t=["navigatorSeries","baseSeries"],x=d.finishedAnimating&&{animation:!1};if(Object.keys&&"data"===Object.keys(a).toString())return this.setData(a.data,b);t=n.concat(t);r(t,function(a){t[a]=d[a];delete d[a]});a=c(h,x,{index:d.index,pointStart:d.xData[0]},{data:d.options.data},a);d.remove(!1,null,!1);for(m in g)d[m]=void 0;w(d,I[l||f].prototype);r(t,function(a){d[a]=t[a]});d.init(e,a);a.zIndex!==h.zIndex&&r(n,function(b){d[b]&&d[b].attr({zIndex:a.zIndex})});
d.oldType=f;e.linkSeries();k(b,!0)&&e.redraw(!1)}});w(H.prototype,{update:function(a,b){var d=this.chart;a=d.options[this.coll][this.options.index]=c(this.userOptions,a);this.destroy(!0);this.init(d,w(a,{events:void 0}));d.isDirtyBox=!0;k(b,!0)&&d.redraw()},remove:function(a){for(var b=this.chart,c=this.coll,e=this.series,h=e.length;h--;)e[h]&&e[h].remove(!1);n(b.axes,this);n(b[c],this);d(b.options[c])?b.options[c].splice(this.options.index,1):delete b.options[c];r(b[c],function(a,b){a.options.index=
b});this.destroy();b.isDirtyBox=!0;k(a,!0)&&b.redraw()},setTitle:function(a,b){this.update({title:a},b)},setCategories:function(a,b){this.update({categories:a},b)}})})(M);(function(a){var E=a.color,D=a.each,H=a.map,p=a.pick,f=a.Series,l=a.seriesType;l("area","line",{softThreshold:!1,threshold:0},{singleStacks:!1,getStackPoints:function(f){var l=[],r=[],u=this.xAxis,e=this.yAxis,h=e.stacks[this.stackKey],m={},d=this.index,c=e.series,b=c.length,k,z=p(e.options.reversedStacks,!0)?1:-1,B;f=f||this.points;
if(this.options.stacking){for(B=0;B<f.length;B++)f[B].leftNull=f[B].rightNull=null,m[f[B].x]=f[B];a.objectEach(h,function(a,b){null!==a.total&&r.push(b)});r.sort(function(a,b){return a-b});k=H(c,function(){return this.visible});D(r,function(a,c){var f=0,n,x;if(m[a]&&!m[a].isNull)l.push(m[a]),D([-1,1],function(e){var f=1===e?"rightNull":"leftNull",l=0,t=h[r[c+e]];if(t)for(B=d;0<=B&&B<b;)n=t.points[B],n||(B===d?m[a][f]=!0:k[B]&&(x=h[a].points[B])&&(l-=x[1]-x[0])),B+=z;m[a][1===e?"rightCliff":"leftCliff"]=
l});else{for(B=d;0<=B&&B<b;){if(n=h[a].points[B]){f=n[1];break}B+=z}f=e.translate(f,0,1,0,1);l.push({isNull:!0,plotX:u.translate(a,0,0,0,1),x:a,plotY:f,yBottom:f})}})}return l},getGraphPath:function(a){var l=f.prototype.getGraphPath,r=this.options,u=r.stacking,e=this.yAxis,h,m,d=[],c=[],b=this.index,k,z=e.stacks[this.stackKey],B=r.threshold,I=e.getThreshold(r.threshold),x,r=r.connectNulls||"percent"===u,K=function(h,f,l){var m=a[h];h=u&&z[m.x].points[b];var n=m[l+"Null"]||0;l=m[l+"Cliff"]||0;var x,
t,m=!0;l||n?(x=(n?h[0]:h[1])+l,t=h[0]+l,m=!!n):!u&&a[f]&&a[f].isNull&&(x=t=B);void 0!==x&&(c.push({plotX:k,plotY:null===x?I:e.getThreshold(x),isNull:m,isCliff:!0}),d.push({plotX:k,plotY:null===t?I:e.getThreshold(t),doCurve:!1}))};a=a||this.points;u&&(a=this.getStackPoints(a));for(h=0;h<a.length;h++)if(m=a[h].isNull,k=p(a[h].rectPlotX,a[h].plotX),x=p(a[h].yBottom,I),!m||r)r||K(h,h-1,"left"),m&&!u&&r||(c.push(a[h]),d.push({x:h,plotX:k,plotY:x})),r||K(h,h+1,"right");h=l.call(this,c,!0,!0);d.reversed=
!0;m=l.call(this,d,!0,!0);m.length&&(m[0]="L");m=h.concat(m);l=l.call(this,c,!1,r);m.xMap=h.xMap;this.areaPath=m;return l},drawGraph:function(){this.areaPath=[];f.prototype.drawGraph.apply(this);var a=this,l=this.areaPath,w=this.options,u=[["area","highcharts-area",this.color,w.fillColor]];D(this.zones,function(e,h){u.push(["zone-area-"+h,"highcharts-area highcharts-zone-area-"+h+" "+e.className,e.color||a.color,e.fillColor||w.fillColor])});D(u,function(e){var h=e[0],f=a[h];f?(f.endX=a.preventGraphAnimation?
null:l.xMap,f.animate({d:l})):(f=a[h]=a.chart.renderer.path(l).addClass(e[1]).attr({fill:p(e[3],E(e[2]).setOpacity(p(w.fillOpacity,.75)).get()),zIndex:0}).add(a.group),f.isArea=!0);f.startX=l.xMap;f.shiftUnit=w.step?2:1})},drawLegendSymbol:a.LegendSymbolMixin.drawRectangle})})(M);(function(a){var E=a.pick;a=a.seriesType;a("spline","line",{},{getPointSpline:function(a,H,p){var f=H.plotX,l=H.plotY,r=a[p-1];p=a[p+1];var n,w,u,e;if(r&&!r.isNull&&!1!==r.doCurve&&!H.isCliff&&p&&!p.isNull&&!1!==p.doCurve&&
!H.isCliff){a=r.plotY;u=p.plotX;p=p.plotY;var h=0;n=(1.5*f+r.plotX)/2.5;w=(1.5*l+a)/2.5;u=(1.5*f+u)/2.5;e=(1.5*l+p)/2.5;u!==n&&(h=(e-w)*(u-f)/(u-n)+l-e);w+=h;e+=h;w>a&&w>l?(w=Math.max(a,l),e=2*l-w):w<a&&w<l&&(w=Math.min(a,l),e=2*l-w);e>p&&e>l?(e=Math.max(p,l),w=2*l-e):e<p&&e<l&&(e=Math.min(p,l),w=2*l-e);H.rightContX=u;H.rightContY=e}H=["C",E(r.rightContX,r.plotX),E(r.rightContY,r.plotY),E(n,f),E(w,l),f,l];r.rightContX=r.rightContY=null;return H}})})(M);(function(a){var E=a.seriesTypes.area.prototype,
D=a.seriesType;D("areaspline","spline",a.defaultPlotOptions.area,{getStackPoints:E.getStackPoints,getGraphPath:E.getGraphPath,drawGraph:E.drawGraph,drawLegendSymbol:a.LegendSymbolMixin.drawRectangle})})(M);(function(a){var E=a.animObject,D=a.color,H=a.each,p=a.extend,f=a.isNumber,l=a.merge,r=a.pick,n=a.Series,w=a.seriesType,u=a.svg;w("column","line",{borderRadius:0,crisp:!0,groupPadding:.2,marker:null,pointPadding:.1,minPointLength:0,cropThreshold:50,pointRange:null,states:{hover:{halo:!1,brightness:.1},
select:{color:"#cccccc",borderColor:"#000000"}},dataLabels:{align:null,verticalAlign:null,y:null},softThreshold:!1,startFromThreshold:!0,stickyTracking:!1,tooltip:{distance:6},threshold:0,borderColor:"#ffffff"},{cropShoulder:0,directTouch:!0,trackerGroups:["group","dataLabelsGroup"],negStacks:!0,init:function(){n.prototype.init.apply(this,arguments);var a=this,h=a.chart;h.hasRendered&&H(h.series,function(e){e.type===a.type&&(e.isDirty=!0)})},getColumnMetrics:function(){var a=this,h=a.options,f=a.xAxis,
d=a.yAxis,c=f.reversed,b,k={},l=0;!1===h.grouping?l=1:H(a.chart.series,function(c){var e=c.options,h=c.yAxis,f;c.type!==a.type||!c.visible&&a.chart.options.chart.ignoreHiddenSeries||d.len!==h.len||d.pos!==h.pos||(e.stacking?(b=c.stackKey,void 0===k[b]&&(k[b]=l++),f=k[b]):!1!==e.grouping&&(f=l++),c.columnIndex=f)});var n=Math.min(Math.abs(f.transA)*(f.ordinalSlope||h.pointRange||f.closestPointRange||f.tickInterval||1),f.len),p=n*h.groupPadding,x=(n-2*p)/(l||1),h=Math.min(h.maxPointWidth||f.len,r(h.pointWidth,
x*(1-2*h.pointPadding)));a.columnMetrics={width:h,offset:(x-h)/2+(p+((a.columnIndex||0)+(c?1:0))*x-n/2)*(c?-1:1)};return a.columnMetrics},crispCol:function(a,h,f,d){var c=this.chart,b=this.borderWidth,e=-(b%2?.5:0),b=b%2?.5:1;c.inverted&&c.renderer.isVML&&(b+=1);this.options.crisp&&(f=Math.round(a+f)+e,a=Math.round(a)+e,f-=a);d=Math.round(h+d)+b;e=.5>=Math.abs(h)&&.5<d;h=Math.round(h)+b;d-=h;e&&d&&(--h,d+=1);return{x:a,y:h,width:f,height:d}},translate:function(){var a=this,h=a.chart,f=a.options,d=
a.dense=2>a.closestPointRange*a.xAxis.transA,d=a.borderWidth=r(f.borderWidth,d?0:1),c=a.yAxis,b=f.threshold,k=a.translatedThreshold=c.getThreshold(b),l=r(f.minPointLength,5),p=a.getColumnMetrics(),u=p.width,x=a.barW=Math.max(u,1+2*d),w=a.pointXOffset=p.offset;h.inverted&&(k-=.5);f.pointPadding&&(x=Math.ceil(x));n.prototype.translate.apply(a);H(a.points,function(d){var e=r(d.yBottom,k),f=999+Math.abs(e),f=Math.min(Math.max(-f,d.plotY),c.len+f),m=d.plotX+w,n=x,t=Math.min(f,e),p,g=Math.max(f,e)-t;l&&
Math.abs(g)<l&&(g=l,p=!c.reversed&&!d.negative||c.reversed&&d.negative,d.y===b&&a.dataMax<=b&&c.min<b&&(p=!p),t=Math.abs(t-k)>l?e-l:k-(p?l:0));d.barX=m;d.pointWidth=u;d.tooltipPos=h.inverted?[c.len+c.pos-h.plotLeft-f,a.xAxis.len-m-n/2,g]:[m+n/2,f+c.pos-h.plotTop,g];d.shapeType="rect";d.shapeArgs=a.crispCol.apply(a,d.isNull?[m,k,n,0]:[m,t,n,g])})},getSymbol:a.noop,drawLegendSymbol:a.LegendSymbolMixin.drawRectangle,drawGraph:function(){this.group[this.dense?"addClass":"removeClass"]("highcharts-dense-data")},
pointAttribs:function(a,f){var e=this.options,d,c=this.pointAttrToOptions||{};d=c.stroke||"borderColor";var b=c["stroke-width"]||"borderWidth",k=a&&a.color||this.color,h=a&&a[d]||e[d]||this.color||k,n=a&&a[b]||e[b]||this[b]||0,c=e.dashStyle;a&&this.zones.length&&(k=a.getZone(),k=a.options.color||k&&k.color||this.color);f&&(a=l(e.states[f],a.options.states&&a.options.states[f]||{}),f=a.brightness,k=a.color||void 0!==f&&D(k).brighten(a.brightness).get()||k,h=a[d]||h,n=a[b]||n,c=a.dashStyle||c);d={fill:k,
stroke:h,"stroke-width":n};c&&(d.dashstyle=c);return d},drawPoints:function(){var a=this,h=this.chart,m=a.options,d=h.renderer,c=m.animationLimit||250,b;H(a.points,function(e){var k=e.graphic;if(f(e.plotY)&&null!==e.y){b=e.shapeArgs;if(k)k[h.pointCount<c?"animate":"attr"](l(b));else e.graphic=k=d[e.shapeType](b).add(e.group||a.group);m.borderRadius&&k.attr({r:m.borderRadius});k.attr(a.pointAttribs(e,e.selected&&"select")).shadow(m.shadow,null,m.stacking&&!m.borderRadius);k.addClass(e.getClassName(),
!0)}else k&&(e.graphic=k.destroy())})},animate:function(a){var e=this,f=this.yAxis,d=e.options,c=this.chart.inverted,b={},k=c?"translateX":"translateY",l;u&&(a?(b.scaleY=.001,a=Math.min(f.pos+f.len,Math.max(f.pos,f.toPixels(d.threshold))),c?b.translateX=a-f.len:b.translateY=a,e.group.attr(b)):(l=e.group.attr(k),e.group.animate({scaleY:1},p(E(e.options.animation),{step:function(a,c){b[k]=l+c.pos*(f.pos-l);e.group.attr(b)}})),e.animate=null))},remove:function(){var a=this,f=a.chart;f.hasRendered&&H(f.series,
function(e){e.type===a.type&&(e.isDirty=!0)});n.prototype.remove.apply(a,arguments)}})})(M);(function(a){a=a.seriesType;a("bar","column",null,{inverted:!0})})(M);(function(a){var E=a.Series;a=a.seriesType;a("scatter","line",{lineWidth:0,findNearestPointBy:"xy",marker:{enabled:!0},tooltip:{headerFormat:'\x3cspan style\x3d"color:{point.color}"\x3e\u25cf\x3c/span\x3e \x3cspan style\x3d"font-size: 0.85em"\x3e {series.name}\x3c/span\x3e\x3cbr/\x3e',pointFormat:"x: \x3cb\x3e{point.x}\x3c/b\x3e\x3cbr/\x3ey: \x3cb\x3e{point.y}\x3c/b\x3e\x3cbr/\x3e"}},
{sorted:!1,requireSorting:!1,noSharedTooltip:!0,trackerGroups:["group","markerGroup","dataLabelsGroup"],takeOrdinalPosition:!1,drawGraph:function(){this.options.lineWidth&&E.prototype.drawGraph.call(this)}})})(M);(function(a){var E=a.deg2rad,D=a.isNumber,H=a.pick,p=a.relativeLength;a.CenteredSeriesMixin={getCenter:function(){var a=this.options,l=this.chart,r=2*(a.slicedOffset||0),n=l.plotWidth-2*r,l=l.plotHeight-2*r,w=a.center,w=[H(w[0],"50%"),H(w[1],"50%"),a.size||"100%",a.innerSize||0],u=Math.min(n,
l),e,h;for(e=0;4>e;++e)h=w[e],a=2>e||2===e&&/%$/.test(h),w[e]=p(h,[n,l,u,w[2]][e])+(a?r:0);w[3]>w[2]&&(w[3]=w[2]);return w},getStartAndEndRadians:function(a,l){a=D(a)?a:0;l=D(l)&&l>a&&360>l-a?l:a+360;return{start:E*(a+-90),end:E*(l+-90)}}}})(M);(function(a){var E=a.addEvent,D=a.CenteredSeriesMixin,H=a.defined,p=a.each,f=a.extend,l=D.getStartAndEndRadians,r=a.inArray,n=a.noop,w=a.pick,u=a.Point,e=a.Series,h=a.seriesType,m=a.setAnimation;h("pie","line",{center:[null,null],clip:!1,colorByPoint:!0,dataLabels:{distance:30,
enabled:!0,formatter:function(){return this.point.isNull?void 0:this.point.name},x:0},ignoreHiddenPoint:!0,legendType:"point",marker:null,size:null,showInLegend:!1,slicedOffset:10,stickyTracking:!1,tooltip:{followPointer:!0},borderColor:"#ffffff",borderWidth:1,states:{hover:{brightness:.1,shadow:!1}}},{isCartesian:!1,requireSorting:!1,directTouch:!0,noSharedTooltip:!0,trackerGroups:["group","dataLabelsGroup"],axisTypes:[],pointAttribs:a.seriesTypes.column.prototype.pointAttribs,animate:function(a){var c=
this,b=c.points,d=c.startAngleRad;a||(p(b,function(a){var b=a.graphic,e=a.shapeArgs;b&&(b.attr({r:a.startR||c.center[3]/2,start:d,end:d}),b.animate({r:e.r,start:e.start,end:e.end},c.options.animation))}),c.animate=null)},updateTotals:function(){var a,c=0,b=this.points,e=b.length,f,h=this.options.ignoreHiddenPoint;for(a=0;a<e;a++)f=b[a],c+=h&&!f.visible?0:f.isNull?0:f.y;this.total=c;for(a=0;a<e;a++)f=b[a],f.percentage=0<c&&(f.visible||!h)?f.y/c*100:0,f.total=c},generatePoints:function(){e.prototype.generatePoints.call(this);
this.updateTotals()},translate:function(a){this.generatePoints();var c=0,b=this.options,d=b.slicedOffset,e=d+(b.borderWidth||0),f,h,m,n=l(b.startAngle,b.endAngle),t=this.startAngleRad=n.start,n=(this.endAngleRad=n.end)-t,p=this.points,u,q=b.dataLabels.distance,b=b.ignoreHiddenPoint,r,F=p.length,G;a||(this.center=a=this.getCenter());this.getX=function(b,c,d){m=Math.asin(Math.min((b-a[1])/(a[2]/2+d.labelDistance),1));return a[0]+(c?-1:1)*Math.cos(m)*(a[2]/2+d.labelDistance)};for(r=0;r<F;r++){G=p[r];
G.labelDistance=w(G.options.dataLabels&&G.options.dataLabels.distance,q);this.maxLabelDistance=Math.max(this.maxLabelDistance||0,G.labelDistance);f=t+c*n;if(!b||G.visible)c+=G.percentage/100;h=t+c*n;G.shapeType="arc";G.shapeArgs={x:a[0],y:a[1],r:a[2]/2,innerR:a[3]/2,start:Math.round(1E3*f)/1E3,end:Math.round(1E3*h)/1E3};m=(h+f)/2;m>1.5*Math.PI?m-=2*Math.PI:m<-Math.PI/2&&(m+=2*Math.PI);G.slicedTranslation={translateX:Math.round(Math.cos(m)*d),translateY:Math.round(Math.sin(m)*d)};h=Math.cos(m)*a[2]/
2;u=Math.sin(m)*a[2]/2;G.tooltipPos=[a[0]+.7*h,a[1]+.7*u];G.half=m<-Math.PI/2||m>Math.PI/2?1:0;G.angle=m;f=Math.min(e,G.labelDistance/5);G.labelPos=[a[0]+h+Math.cos(m)*G.labelDistance,a[1]+u+Math.sin(m)*G.labelDistance,a[0]+h+Math.cos(m)*f,a[1]+u+Math.sin(m)*f,a[0]+h,a[1]+u,0>G.labelDistance?"center":G.half?"right":"left",m]}},drawGraph:null,drawPoints:function(){var a=this,c=a.chart.renderer,b,e,h,l,m=a.options.shadow;m&&!a.shadowGroup&&(a.shadowGroup=c.g("shadow").add(a.group));p(a.points,function(d){e=
d.graphic;if(d.isNull)e&&(d.graphic=e.destroy());else{l=d.shapeArgs;b=d.getTranslate();var k=d.shadowGroup;m&&!k&&(k=d.shadowGroup=c.g("shadow").add(a.shadowGroup));k&&k.attr(b);h=a.pointAttribs(d,d.selected&&"select");e?e.setRadialReference(a.center).attr(h).animate(f(l,b)):(d.graphic=e=c[d.shapeType](l).setRadialReference(a.center).attr(b).add(a.group),d.visible||e.attr({visibility:"hidden"}),e.attr(h).attr({"stroke-linejoin":"round"}).shadow(m,k));e.addClass(d.getClassName())}})},searchPoint:n,
sortByAngle:function(a,c){a.sort(function(a,d){return void 0!==a.angle&&(d.angle-a.angle)*c})},drawLegendSymbol:a.LegendSymbolMixin.drawRectangle,getCenter:D.getCenter,getSymbol:n},{init:function(){u.prototype.init.apply(this,arguments);var a=this,c;a.name=w(a.name,"Slice");c=function(b){a.slice("select"===b.type)};E(a,"select",c);E(a,"unselect",c);return a},isValid:function(){return a.isNumber(this.y,!0)&&0<=this.y},setVisible:function(a,c){var b=this,d=b.series,e=d.chart,f=d.options.ignoreHiddenPoint;
c=w(c,f);a!==b.visible&&(b.visible=b.options.visible=a=void 0===a?!b.visible:a,d.options.data[r(b,d.data)]=b.options,p(["graphic","dataLabel","connector","shadowGroup"],function(c){if(b[c])b[c][a?"show":"hide"](!0)}),b.legendItem&&e.legend.colorizeItem(b,a),a||"hover"!==b.state||b.setState(""),f&&(d.isDirty=!0),c&&e.redraw())},slice:function(a,c,b){var d=this.series;m(b,d.chart);w(c,!0);this.sliced=this.options.sliced=H(a)?a:!this.sliced;d.options.data[r(this,d.data)]=this.options;this.graphic.animate(this.getTranslate());
this.shadowGroup&&this.shadowGroup.animate(this.getTranslate())},getTranslate:function(){return this.sliced?this.slicedTranslation:{translateX:0,translateY:0}},haloPath:function(a){var c=this.shapeArgs;return this.sliced||!this.visible?[]:this.series.chart.renderer.symbols.arc(c.x,c.y,c.r+a,c.r+a,{innerR:this.shapeArgs.r-1,start:c.start,end:c.end})}})})(M);(function(a){var E=a.addEvent,D=a.arrayMax,H=a.defined,p=a.each,f=a.extend,l=a.format,r=a.map,n=a.merge,w=a.noop,u=a.pick,e=a.relativeLength,h=
a.Series,m=a.seriesTypes,d=a.stableSort;a.distribute=function(a,b){function c(a,b){return a.target-b.target}var e,f=!0,h=a,l=[],m;m=0;for(e=a.length;e--;)m+=a[e].size;if(m>b){d(a,function(a,b){return(b.rank||0)-(a.rank||0)});for(m=e=0;m<=b;)m+=a[e].size,e++;l=a.splice(e-1,a.length)}d(a,c);for(a=r(a,function(a){return{size:a.size,targets:[a.target],align:u(a.align,.5)}});f;){for(e=a.length;e--;)f=a[e],m=(Math.min.apply(0,f.targets)+Math.max.apply(0,f.targets))/2,f.pos=Math.min(Math.max(0,m-f.size*
f.align),b-f.size);e=a.length;for(f=!1;e--;)0<e&&a[e-1].pos+a[e-1].size>a[e].pos&&(a[e-1].size+=a[e].size,a[e-1].targets=a[e-1].targets.concat(a[e].targets),a[e-1].align=.5,a[e-1].pos+a[e-1].size>b&&(a[e-1].pos=b-a[e-1].size),a.splice(e,1),f=!0)}e=0;p(a,function(a){var b=0;p(a.targets,function(){h[e].pos=a.pos+b;b+=h[e].size;e++})});h.push.apply(h,l);d(h,c)};h.prototype.drawDataLabels=function(){function c(a,b){var c=b.filter;return c?(b=c.operator,a=a[c.property],c=c.value,"\x3e"===b&&a>c||"\x3c"===
b&&a<c||"\x3e\x3d"===b&&a>=c||"\x3c\x3d"===b&&a<=c||"\x3d\x3d"===b&&a==c||"\x3d\x3d\x3d"===b&&a===c?!0:!1):!0}var b=this,d=b.options,e=d.dataLabels,f=b.points,h,m,r=b.hasRendered||0,t,w,D=u(e.defer,!!d.animation),q=b.chart.renderer;if(e.enabled||b._hasPointLabels)b.dlProcessOptions&&b.dlProcessOptions(e),w=b.plotGroup("dataLabelsGroup","data-labels",D&&!r?"hidden":"visible",e.zIndex||6),D&&(w.attr({opacity:+r}),r||E(b,"afterAnimate",function(){b.visible&&w.show(!0);w[d.animation?"animate":"attr"]({opacity:1},
{duration:200})})),m=e,p(f,function(f){var k,p=f.dataLabel,g,x,r=f.connector,z=!p,C;h=f.dlOptions||f.options&&f.options.dataLabels;(k=u(h&&h.enabled,m.enabled)&&!f.isNull)&&(k=!0===c(f,h||e));k&&(e=n(m,h),g=f.getLabelConfig(),C=e[f.formatPrefix+"Format"]||e.format,t=H(C)?l(C,g):(e[f.formatPrefix+"Formatter"]||e.formatter).call(g,e),C=e.style,g=e.rotation,C.color=u(e.color,C.color,b.color,"#000000"),"contrast"===C.color&&(f.contrastColor=q.getContrast(f.color||b.color),C.color=e.inside||0>u(f.labelDistance,
e.distance)||d.stacking?f.contrastColor:"#000000"),d.cursor&&(C.cursor=d.cursor),x={fill:e.backgroundColor,stroke:e.borderColor,"stroke-width":e.borderWidth,r:e.borderRadius||0,rotation:g,padding:e.padding,zIndex:1},a.objectEach(x,function(a,b){void 0===a&&delete x[b]}));!p||k&&H(t)?k&&H(t)&&(p?x.text=t:(p=f.dataLabel=g?q.text(t,0,-9999).addClass("highcharts-data-label"):q.label(t,0,-9999,e.shape,null,null,e.useHTML,null,"data-label"),p.addClass(" highcharts-data-label-color-"+f.colorIndex+" "+(e.className||
"")+(e.useHTML?"highcharts-tracker":""))),p.attr(x),p.css(C).shadow(e.shadow),p.added||p.add(w),b.alignDataLabel(f,p,e,null,z)):(f.dataLabel=p=p.destroy(),r&&(f.connector=r.destroy()))})};h.prototype.alignDataLabel=function(a,b,d,e,h){var c=this.chart,k=c.inverted,l=u(a.dlBox&&a.dlBox.centerX,a.plotX,-9999),m=u(a.plotY,-9999),n=b.getBBox(),p,q=d.rotation,r=d.align,w=this.visible&&(a.series.forceDL||c.isInsidePlot(l,Math.round(m),k)||e&&c.isInsidePlot(l,k?e.x+1:e.y+e.height-1,k)),z="justify"===u(d.overflow,
"justify");if(w&&(p=d.style.fontSize,p=c.renderer.fontMetrics(p,b).b,e=f({x:k?this.yAxis.len-m:l,y:Math.round(k?this.xAxis.len-l:m),width:0,height:0},e),f(d,{width:n.width,height:n.height}),q?(z=!1,l=c.renderer.rotCorr(p,q),l={x:e.x+d.x+e.width/2+l.x,y:e.y+d.y+{top:0,middle:.5,bottom:1}[d.verticalAlign]*e.height},b[h?"attr":"animate"](l).attr({align:r}),m=(q+720)%360,m=180<m&&360>m,"left"===r?l.y-=m?n.height:0:"center"===r?(l.x-=n.width/2,l.y-=n.height/2):"right"===r&&(l.x-=n.width,l.y-=m?0:n.height)):
(b.align(d,null,e),l=b.alignAttr),z?a.isLabelJustified=this.justifyDataLabel(b,d,l,n,e,h):u(d.crop,!0)&&(w=c.isInsidePlot(l.x,l.y)&&c.isInsidePlot(l.x+n.width,l.y+n.height)),d.shape&&!q))b[h?"attr":"animate"]({anchorX:k?c.plotWidth-a.plotY:a.plotX,anchorY:k?c.plotHeight-a.plotX:a.plotY});w||(b.attr({y:-9999}),b.placed=!1)};h.prototype.justifyDataLabel=function(a,b,d,e,f,h){var c=this.chart,k=b.align,l=b.verticalAlign,m,n,p=a.box?0:a.padding||0;m=d.x+p;0>m&&("right"===k?b.align="left":b.x=-m,n=!0);
m=d.x+e.width-p;m>c.plotWidth&&("left"===k?b.align="right":b.x=c.plotWidth-m,n=!0);m=d.y+p;0>m&&("bottom"===l?b.verticalAlign="top":b.y=-m,n=!0);m=d.y+e.height-p;m>c.plotHeight&&("top"===l?b.verticalAlign="bottom":b.y=c.plotHeight-m,n=!0);n&&(a.placed=!h,a.align(b,null,f));return n};m.pie&&(m.pie.prototype.drawDataLabels=function(){var c=this,b=c.data,d,e=c.chart,f=c.options.dataLabels,l=u(f.connectorPadding,10),m=u(f.connectorWidth,1),n=e.plotWidth,t=e.plotHeight,r,w=c.center,q=w[2]/2,A=w[1],F,G,
g,v,E=[[],[]],L,P,J,M,y=[0,0,0,0];c.visible&&(f.enabled||c._hasPointLabels)&&(p(b,function(a){a.dataLabel&&a.visible&&a.dataLabel.shortened&&(a.dataLabel.attr({width:"auto"}).css({width:"auto",textOverflow:"clip"}),a.dataLabel.shortened=!1)}),h.prototype.drawDataLabels.apply(c),p(b,function(a){a.dataLabel&&a.visible&&(E[a.half].push(a),a.dataLabel._pos=null)}),p(E,function(b,h){var k,m,x=b.length,r=[],z;if(x)for(c.sortByAngle(b,h-.5),0<c.maxLabelDistance&&(k=Math.max(0,A-q-c.maxLabelDistance),m=Math.min(A+
q+c.maxLabelDistance,e.plotHeight),p(b,function(a){0<a.labelDistance&&a.dataLabel&&(a.top=Math.max(0,A-q-a.labelDistance),a.bottom=Math.min(A+q+a.labelDistance,e.plotHeight),z=a.dataLabel.getBBox().height||21,a.positionsIndex=r.push({target:a.labelPos[1]-a.top+z/2,size:z,rank:a.y})-1)}),a.distribute(r,m+z-k)),M=0;M<x;M++)d=b[M],m=d.positionsIndex,g=d.labelPos,F=d.dataLabel,J=!1===d.visible?"hidden":"inherit",P=k=g[1],r&&H(r[m])&&(void 0===r[m].pos?J="hidden":(v=r[m].size,P=d.top+r[m].pos)),delete d.positionIndex,
L=f.justify?w[0]+(h?-1:1)*(q+d.labelDistance):c.getX(P<d.top+2||P>d.bottom-2?k:P,h,d),F._attr={visibility:J,align:g[6]},F._pos={x:L+f.x+({left:l,right:-l}[g[6]]||0),y:P+f.y-10},g.x=L,g.y=P,u(f.crop,!0)&&(G=F.getBBox().width,k=null,L-G<l?(k=Math.round(G-L+l),y[3]=Math.max(k,y[3])):L+G>n-l&&(k=Math.round(L+G-n+l),y[1]=Math.max(k,y[1])),0>P-v/2?y[0]=Math.max(Math.round(-P+v/2),y[0]):P+v/2>t&&(y[2]=Math.max(Math.round(P+v/2-t),y[2])),F.sideOverflow=k)}),0===D(y)||this.verifyDataLabelOverflow(y))&&(this.placeDataLabels(),
m&&p(this.points,function(a){var b;r=a.connector;if((F=a.dataLabel)&&F._pos&&a.visible&&0<a.labelDistance){J=F._attr.visibility;if(b=!r)a.connector=r=e.renderer.path().addClass("highcharts-data-label-connector  highcharts-color-"+a.colorIndex).add(c.dataLabelsGroup),r.attr({"stroke-width":m,stroke:f.connectorColor||a.color||"#666666"});r[b?"attr":"animate"]({d:c.connectorPath(a.labelPos)});r.attr("visibility",J)}else r&&(a.connector=r.destroy())}))},m.pie.prototype.connectorPath=function(a){var b=
a.x,c=a.y;return u(this.options.dataLabels.softConnector,!0)?["M",b+("left"===a[6]?5:-5),c,"C",b,c,2*a[2]-a[4],2*a[3]-a[5],a[2],a[3],"L",a[4],a[5]]:["M",b+("left"===a[6]?5:-5),c,"L",a[2],a[3],"L",a[4],a[5]]},m.pie.prototype.placeDataLabels=function(){p(this.points,function(a){var b=a.dataLabel;b&&a.visible&&((a=b._pos)?(b.sideOverflow&&(b._attr.width=b.getBBox().width-b.sideOverflow,b.css({width:b._attr.width+"px",textOverflow:"ellipsis"}),b.shortened=!0),b.attr(b._attr),b[b.moved?"animate":"attr"](a),
b.moved=!0):b&&b.attr({y:-9999}))},this)},m.pie.prototype.alignDataLabel=w,m.pie.prototype.verifyDataLabelOverflow=function(a){var b=this.center,c=this.options,d=c.center,f=c.minSize||80,h,l=null!==c.size;l||(null!==d[0]?h=Math.max(b[2]-Math.max(a[1],a[3]),f):(h=Math.max(b[2]-a[1]-a[3],f),b[0]+=(a[3]-a[1])/2),null!==d[1]?h=Math.max(Math.min(h,b[2]-Math.max(a[0],a[2])),f):(h=Math.max(Math.min(h,b[2]-a[0]-a[2]),f),b[1]+=(a[0]-a[2])/2),h<b[2]?(b[2]=h,b[3]=Math.min(e(c.innerSize||0,h),h),this.translate(b),
this.drawDataLabels&&this.drawDataLabels()):l=!0);return l});m.column&&(m.column.prototype.alignDataLabel=function(a,b,d,e,f){var c=this.chart.inverted,k=a.series,l=a.dlBox||a.shapeArgs,m=u(a.below,a.plotY>u(this.translatedThreshold,k.yAxis.len)),p=u(d.inside,!!this.options.stacking);l&&(e=n(l),0>e.y&&(e.height+=e.y,e.y=0),l=e.y+e.height-k.yAxis.len,0<l&&(e.height-=l),c&&(e={x:k.yAxis.len-e.y-e.height,y:k.xAxis.len-e.x-e.width,width:e.height,height:e.width}),p||(c?(e.x+=m?0:e.width,e.width=0):(e.y+=
m?e.height:0,e.height=0)));d.align=u(d.align,!c||p?"center":m?"right":"left");d.verticalAlign=u(d.verticalAlign,c||p?"middle":m?"top":"bottom");h.prototype.alignDataLabel.call(this,a,b,d,e,f);a.isLabelJustified&&a.contrastColor&&a.dataLabel.css({color:a.contrastColor})})})(M);(function(a){var E=a.Chart,D=a.each,H=a.objectEach,p=a.pick;a=a.addEvent;a(E.prototype,"render",function(){var a=[];D(this.labelCollectors||[],function(f){a=a.concat(f())});D(this.yAxis||[],function(f){f.options.stackLabels&&
!f.options.stackLabels.allowOverlap&&H(f.stacks,function(f){H(f,function(f){a.push(f.label)})})});D(this.series||[],function(f){var l=f.options.dataLabels,n=f.dataLabelCollections||["dataLabel"];(l.enabled||f._hasPointLabels)&&!l.allowOverlap&&f.visible&&D(n,function(l){D(f.points,function(f){f[l]&&(f[l].labelrank=p(f.labelrank,f.shapeArgs&&f.shapeArgs.height),a.push(f[l]))})})});this.hideOverlappingLabels(a)});E.prototype.hideOverlappingLabels=function(a){var f=a.length,p,n,w,u,e,h,m,d,c,b=function(a,
b,c,d,e,f,h,l){return!(e>a+c||e+h<a||f>b+d||f+l<b)};for(n=0;n<f;n++)if(p=a[n])p.oldOpacity=p.opacity,p.newOpacity=1,p.width||(w=p.getBBox(),p.width=w.width,p.height=w.height);a.sort(function(a,b){return(b.labelrank||0)-(a.labelrank||0)});for(n=0;n<f;n++)for(w=a[n],p=n+1;p<f;++p)if(u=a[p],w&&u&&w!==u&&w.placed&&u.placed&&0!==w.newOpacity&&0!==u.newOpacity&&(e=w.alignAttr,h=u.alignAttr,m=w.parentGroup,d=u.parentGroup,c=2*(w.box?0:w.padding||0),e=b(e.x+m.translateX,e.y+m.translateY,w.width-c,w.height-
c,h.x+d.translateX,h.y+d.translateY,u.width-c,u.height-c)))(w.labelrank<u.labelrank?w:u).newOpacity=0;D(a,function(a){var b,c;a&&(c=a.newOpacity,a.oldOpacity!==c&&a.placed&&(c?a.show(!0):b=function(){a.hide()},a.alignAttr.opacity=c,a[a.isOld?"animate":"attr"](a.alignAttr,null,b)),a.isOld=!0)})}})(M);(function(a){var E=a.addEvent,D=a.Chart,H=a.createElement,p=a.css,f=a.defaultOptions,l=a.defaultPlotOptions,r=a.each,n=a.extend,w=a.fireEvent,u=a.hasTouch,e=a.inArray,h=a.isObject,m=a.Legend,d=a.merge,
c=a.pick,b=a.Point,k=a.Series,z=a.seriesTypes,B=a.svg,I;I=a.TrackerMixin={drawTrackerPoint:function(){var a=this,b=a.chart.pointer,c=function(a){var c=b.getPointFromEvent(a);void 0!==c&&(b.isDirectTouch=!0,c.onMouseOver(a))};r(a.points,function(a){a.graphic&&(a.graphic.element.point=a);a.dataLabel&&(a.dataLabel.div?a.dataLabel.div.point=a:a.dataLabel.element.point=a)});a._hasTracking||(r(a.trackerGroups,function(d){if(a[d]){a[d].addClass("highcharts-tracker").on("mouseover",c).on("mouseout",function(a){b.onTrackerMouseOut(a)});
if(u)a[d].on("touchstart",c);a.options.cursor&&a[d].css(p).css({cursor:a.options.cursor})}}),a._hasTracking=!0)},drawTrackerGraph:function(){var a=this,b=a.options,c=b.trackByArea,d=[].concat(c?a.areaPath:a.graphPath),e=d.length,f=a.chart,h=f.pointer,k=f.renderer,l=f.options.tooltip.snap,g=a.tracker,m,n=function(){if(f.hoverSeries!==a)a.onMouseOver()},p="rgba(192,192,192,"+(B?.0001:.002)+")";if(e&&!c)for(m=e+1;m--;)"M"===d[m]&&d.splice(m+1,0,d[m+1]-l,d[m+2],"L"),(m&&"M"===d[m]||m===e)&&d.splice(m,
0,"L",d[m-2]+l,d[m-1]);g?g.attr({d:d}):a.graph&&(a.tracker=k.path(d).attr({"stroke-linejoin":"round",visibility:a.visible?"visible":"hidden",stroke:p,fill:c?p:"none","stroke-width":a.graph.strokeWidth()+(c?0:2*l),zIndex:2}).add(a.group),r([a.tracker,a.markerGroup],function(a){a.addClass("highcharts-tracker").on("mouseover",n).on("mouseout",function(a){h.onTrackerMouseOut(a)});b.cursor&&a.css({cursor:b.cursor});if(u)a.on("touchstart",n)}))}};z.column&&(z.column.prototype.drawTracker=I.drawTrackerPoint);
z.pie&&(z.pie.prototype.drawTracker=I.drawTrackerPoint);z.scatter&&(z.scatter.prototype.drawTracker=I.drawTrackerPoint);n(m.prototype,{setItemEvents:function(a,c,e){var f=this,h=f.chart.renderer.boxWrapper,k="highcharts-legend-"+(a instanceof b?"point":"series")+"-active";(e?c:a.legendGroup).on("mouseover",function(){a.setState("hover");h.addClass(k);c.css(f.options.itemHoverStyle)}).on("mouseout",function(){c.css(d(a.visible?f.itemStyle:f.itemHiddenStyle));h.removeClass(k);a.setState()}).on("click",
function(b){var c=function(){a.setVisible&&a.setVisible()};h.removeClass(k);b={browserEvent:b};a.firePointEvent?a.firePointEvent("legendItemClick",b,c):w(a,"legendItemClick",b,c)})},createCheckboxForItem:function(a){a.checkbox=H("input",{type:"checkbox",checked:a.selected,defaultChecked:a.selected},this.options.itemCheckboxStyle,this.chart.container);E(a.checkbox,"click",function(b){w(a.series||a,"checkboxClick",{checked:b.target.checked,item:a},function(){a.select()})})}});f.legend.itemStyle.cursor=
"pointer";n(D.prototype,{showResetZoom:function(){var a=this,b=f.lang,c=a.options.chart.resetZoomButton,d=c.theme,e=d.states,h="chart"===c.relativeTo?null:"plotBox";this.resetZoomButton=a.renderer.button(b.resetZoom,null,null,function(){a.zoomOut()},d,e&&e.hover).attr({align:c.position.align,title:b.resetZoomTitle}).addClass("highcharts-reset-zoom").add().align(c.position,!1,h)},zoomOut:function(){var a=this;w(a,"selection",{resetSelection:!0},function(){a.zoom()})},zoom:function(a){var b,d=this.pointer,
e=!1,f;!a||a.resetSelection?(r(this.axes,function(a){b=a.zoom()}),d.initiated=!1):r(a.xAxis.concat(a.yAxis),function(a){var c=a.axis;d[c.isXAxis?"zoomX":"zoomY"]&&(b=c.zoom(a.min,a.max),c.displayBtn&&(e=!0))});f=this.resetZoomButton;e&&!f?this.showResetZoom():!e&&h(f)&&(this.resetZoomButton=f.destroy());b&&this.redraw(c(this.options.chart.animation,a&&a.animation,100>this.pointCount))},pan:function(a,b){var c=this,d=c.hoverPoints,e;d&&r(d,function(a){a.setState()});r("xy"===b?[1,0]:[1],function(b){b=
c[b?"xAxis":"yAxis"][0];var d=b.horiz,f=a[d?"chartX":"chartY"],d=d?"mouseDownX":"mouseDownY",h=c[d],g=(b.pointRange||0)/2,k=b.getExtremes(),l=b.toValue(h-f,!0)+g,m=b.toValue(h+b.len-f,!0)-g,n=m<l,h=n?m:l,l=n?l:m,m=Math.min(k.dataMin,g?k.min:b.toValue(b.toPixels(k.min)-b.minPixelPadding)),g=Math.max(k.dataMax,g?k.max:b.toValue(b.toPixels(k.max)+b.minPixelPadding)),n=m-h;0<n&&(l+=n,h=m);n=l-g;0<n&&(l=g,h-=n);b.series.length&&h!==k.min&&l!==k.max&&(b.setExtremes(h,l,!1,!1,{trigger:"pan"}),e=!0);c[d]=
f});e&&c.redraw(!1);p(c.container,{cursor:"move"})}});n(b.prototype,{select:function(a,b){var d=this,f=d.series,h=f.chart;a=c(a,!d.selected);d.firePointEvent(a?"select":"unselect",{accumulate:b},function(){d.selected=d.options.selected=a;f.options.data[e(d,f.data)]=d.options;d.setState(a&&"select");b||r(h.getSelectedPoints(),function(a){a.selected&&a!==d&&(a.selected=a.options.selected=!1,f.options.data[e(a,f.data)]=a.options,a.setState(""),a.firePointEvent("unselect"))})})},onMouseOver:function(a){var b=
this.series.chart,c=b.pointer;a=a?c.normalize(a):c.getChartCoordinatesFromPoint(this,b.inverted);c.runPointActions(a,this)},onMouseOut:function(){var a=this.series.chart;this.firePointEvent("mouseOut");r(a.hoverPoints||[],function(a){a.setState()});a.hoverPoints=a.hoverPoint=null},importEvents:function(){if(!this.hasImportedEvents){var b=this,c=d(b.series.options.point,b.options).events;b.events=c;a.objectEach(c,function(a,c){E(b,c,a)});this.hasImportedEvents=!0}},setState:function(a,b){var d=Math.floor(this.plotX),
e=this.plotY,f=this.series,h=f.options.states[a]||{},k=l[f.type].marker&&f.options.marker,m=k&&!1===k.enabled,p=k&&k.states&&k.states[a]||{},g=!1===p.enabled,r=f.stateMarkerGraphic,u=this.marker||{},w=f.chart,x=f.halo,z,B=k&&f.markerAttribs;a=a||"";if(!(a===this.state&&!b||this.selected&&"select"!==a||!1===h.enabled||a&&(g||m&&!1===p.enabled)||a&&u.states&&u.states[a]&&!1===u.states[a].enabled)){B&&(z=f.markerAttribs(this,a));if(this.graphic)this.state&&this.graphic.removeClass("highcharts-point-"+
this.state),a&&this.graphic.addClass("highcharts-point-"+a),this.graphic.animate(f.pointAttribs(this,a),c(w.options.chart.animation,h.animation)),z&&this.graphic.animate(z,c(w.options.chart.animation,p.animation,k.animation)),r&&r.hide();else{if(a&&p){k=u.symbol||f.symbol;r&&r.currentSymbol!==k&&(r=r.destroy());if(r)r[b?"animate":"attr"]({x:z.x,y:z.y});else k&&(f.stateMarkerGraphic=r=w.renderer.symbol(k,z.x,z.y,z.width,z.height).add(f.markerGroup),r.currentSymbol=k);r&&r.attr(f.pointAttribs(this,
a))}r&&(r[a&&w.isInsidePlot(d,e,w.inverted)?"show":"hide"](),r.element.point=this)}(d=h.halo)&&d.size?(x||(f.halo=x=w.renderer.path().add((this.graphic||r).parentGroup)),x[b?"animate":"attr"]({d:this.haloPath(d.size)}),x.attr({"class":"highcharts-halo highcharts-color-"+c(this.colorIndex,f.colorIndex)}),x.point=this,x.attr(n({fill:this.color||f.color,"fill-opacity":d.opacity,zIndex:-1},d.attributes))):x&&x.point&&x.point.haloPath&&x.animate({d:x.point.haloPath(0)});this.state=a}},haloPath:function(a){return this.series.chart.renderer.symbols.circle(Math.floor(this.plotX)-
a,this.plotY-a,2*a,2*a)}});n(k.prototype,{onMouseOver:function(){var a=this.chart,b=a.hoverSeries;if(b&&b!==this)b.onMouseOut();this.options.events.mouseOver&&w(this,"mouseOver");this.setState("hover");a.hoverSeries=this},onMouseOut:function(){var a=this.options,b=this.chart,c=b.tooltip,d=b.hoverPoint;b.hoverSeries=null;if(d)d.onMouseOut();this&&a.events.mouseOut&&w(this,"mouseOut");!c||this.stickyTracking||c.shared&&!this.noSharedTooltip||c.hide();this.setState()},setState:function(a){var b=this,
d=b.options,e=b.graph,f=d.states,h=d.lineWidth,d=0;a=a||"";if(b.state!==a&&(r([b.group,b.markerGroup,b.dataLabelsGroup],function(c){c&&(b.state&&c.removeClass("highcharts-series-"+b.state),a&&c.addClass("highcharts-series-"+a))}),b.state=a,!f[a]||!1!==f[a].enabled)&&(a&&(h=f[a].lineWidth||h+(f[a].lineWidthPlus||0)),e&&!e.dashstyle))for(h={"stroke-width":h},e.animate(h,c(b.chart.options.chart.animation,f[a]&&f[a].animation));b["zone-graph-"+d];)b["zone-graph-"+d].attr(h),d+=1},setVisible:function(a,
b){var c=this,d=c.chart,e=c.legendItem,f,h=d.options.chart.ignoreHiddenSeries,k=c.visible;f=(c.visible=a=c.options.visible=c.userOptions.visible=void 0===a?!k:a)?"show":"hide";r(["group","dataLabelsGroup","markerGroup","tracker","tt"],function(a){if(c[a])c[a][f]()});if(d.hoverSeries===c||(d.hoverPoint&&d.hoverPoint.series)===c)c.onMouseOut();e&&d.legend.colorizeItem(c,a);c.isDirty=!0;c.options.stacking&&r(d.series,function(a){a.options.stacking&&a.visible&&(a.isDirty=!0)});r(c.linkedSeries,function(b){b.setVisible(a,
!1)});h&&(d.isDirtyBox=!0);!1!==b&&d.redraw();w(c,f)},show:function(){this.setVisible(!0)},hide:function(){this.setVisible(!1)},select:function(a){this.selected=a=void 0===a?!this.selected:a;this.checkbox&&(this.checkbox.checked=a);w(this,a?"select":"unselect")},drawTracker:I.drawTrackerGraph})})(M);(function(a){var E=a.Chart,D=a.each,H=a.inArray,p=a.isArray,f=a.isObject,l=a.pick,r=a.splat;E.prototype.setResponsive=function(f){var l=this.options.responsive,n=[],e=this.currentResponsive;l&&l.rules&&
D(l.rules,function(e){void 0===e._id&&(e._id=a.uniqueKey());this.matchResponsiveRule(e,n,f)},this);var h=a.merge.apply(0,a.map(n,function(e){return a.find(l.rules,function(a){return a._id===e}).chartOptions})),n=n.toString()||void 0;n!==(e&&e.ruleIds)&&(e&&this.update(e.undoOptions,f),n?(this.currentResponsive={ruleIds:n,mergedOptions:h,undoOptions:this.currentOptions(h)},this.update(h,f)):this.currentResponsive=void 0)};E.prototype.matchResponsiveRule=function(a,f){var n=a.condition;(n.callback||
function(){return this.chartWidth<=l(n.maxWidth,Number.MAX_VALUE)&&this.chartHeight<=l(n.maxHeight,Number.MAX_VALUE)&&this.chartWidth>=l(n.minWidth,0)&&this.chartHeight>=l(n.minHeight,0)}).call(this)&&f.push(a._id)};E.prototype.currentOptions=function(l){function n(e,h,l,d){var c;a.objectEach(e,function(a,e){if(!d&&-1<H(e,["series","xAxis","yAxis"]))for(a=r(a),l[e]=[],c=0;c<a.length;c++)h[e][c]&&(l[e][c]={},n(a[c],h[e][c],l[e][c],d+1));else f(a)?(l[e]=p(a)?[]:{},n(a,h[e]||{},l[e],d+1)):l[e]=h[e]||
null})}var u={};n(l,this.options,u,0);return u}})(M);return M});;
/*!
 * Generated using the Bootstrap Customizer (https://getbootstrap.com/docs/3.4/customize/)
 */

/*!
 * Bootstrap v3.4.1 (https://getbootstrap.com/)
 * Copyright 2011-2020 Twitter, Inc.
 * Licensed under the MIT license
 */

if (typeof jQuery === 'undefined') {
  throw new Error('Bootstrap\'s JavaScript requires jQuery')
}
+function ($) {
  'use strict';
  var version = $.fn.jquery.split(' ')[0].split('.')
  if ((version[0] < 2 && version[1] < 9) || (version[0] == 1 && version[1] == 9 && version[2] < 1) || (version[0] > 3)) {
    throw new Error('Bootstrap\'s JavaScript requires jQuery version 1.9.1 or higher, but lower than version 4')
  }
}(jQuery);

/* ========================================================================
 * Bootstrap: dropdown.js v3.4.1
 * https://getbootstrap.com/docs/3.4/javascript/#dropdowns
 * ========================================================================
 * Copyright 2011-2019 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // DROPDOWN CLASS DEFINITION
  // =========================

  var backdrop = '.dropdown-backdrop'
  var toggle   = '[data-toggle="dropdown"]'
  var Dropdown = function (element) {
    $(element).on('click.bs.dropdown', this.toggle)
  }

  Dropdown.VERSION = '3.4.1'

  function getParent($this) {
    var selector = $this.attr('data-target')

    if (!selector) {
      selector = $this.attr('href')
      selector = selector && /#[A-Za-z]/.test(selector) && selector.replace(/.*(?=#[^\s]*$)/, '') // strip for ie7
    }

    var $parent = selector !== '#' ? $(document).find(selector) : null

    return $parent && $parent.length ? $parent : $this.parent()
  }

  function clearMenus(e) {
    if (e && e.which === 3) return
    $(backdrop).remove()
    $(toggle).each(function () {
      var $this         = $(this)
      var $parent       = getParent($this)
      var relatedTarget = { relatedTarget: this }

      if (!$parent.hasClass('open')) return

      if (e && e.type == 'click' && /input|textarea/i.test(e.target.tagName) && $.contains($parent[0], e.target)) return

      $parent.trigger(e = $.Event('hide.bs.dropdown', relatedTarget))

      if (e.isDefaultPrevented()) return

      $this.attr('aria-expanded', 'false')
      $parent.removeClass('open').trigger($.Event('hidden.bs.dropdown', relatedTarget))
    })
  }

  Dropdown.prototype.toggle = function (e) {
    var $this = $(this)

    if ($this.is('.disabled, :disabled')) return

    var $parent  = getParent($this)
    var isActive = $parent.hasClass('open')

    clearMenus()

    if (!isActive) {
      if ('ontouchstart' in document.documentElement && !$parent.closest('.navbar-nav').length) {
        // if mobile we use a backdrop because click events don't delegate
        $(document.createElement('div'))
          .addClass('dropdown-backdrop')
          .insertAfter($(this))
          .on('click', clearMenus)
      }

      var relatedTarget = { relatedTarget: this }
      $parent.trigger(e = $.Event('show.bs.dropdown', relatedTarget))

      if (e.isDefaultPrevented()) return

      $this
        .trigger('focus')
        .attr('aria-expanded', 'true')

      $parent
        .toggleClass('open')
        .trigger($.Event('shown.bs.dropdown', relatedTarget))
    }

    return false
  }

  Dropdown.prototype.keydown = function (e) {
    if (!/(38|40|27|32)/.test(e.which) || /input|textarea/i.test(e.target.tagName)) return

    var $this = $(this)

    e.preventDefault()
    e.stopPropagation()

    if ($this.is('.disabled, :disabled')) return

    var $parent  = getParent($this)
    var isActive = $parent.hasClass('open')

    if (!isActive && e.which != 27 || isActive && e.which == 27) {
      if (e.which == 27) $parent.find(toggle).trigger('focus')
      return $this.trigger('click')
    }

    var desc = ' li:not(.disabled):visible a'
    var $items = $parent.find('.dropdown-menu' + desc)

    if (!$items.length) return

    var index = $items.index(e.target)

    if (e.which == 38 && index > 0)                 index--         // up
    if (e.which == 40 && index < $items.length - 1) index++         // down
    if (!~index)                                    index = 0

    $items.eq(index).trigger('focus')
  }


  // DROPDOWN PLUGIN DEFINITION
  // ==========================

  function Plugin(option) {
    return this.each(function () {
      var $this = $(this)
      var data  = $this.data('bs.dropdown')

      if (!data) $this.data('bs.dropdown', (data = new Dropdown(this)))
      if (typeof option == 'string') data[option].call($this)
    })
  }

  var old = $.fn.dropdown

  $.fn.dropdown             = Plugin
  $.fn.dropdown.Constructor = Dropdown


  // DROPDOWN NO CONFLICT
  // ====================

  $.fn.dropdown.noConflict = function () {
    $.fn.dropdown = old
    return this
  }


  // APPLY TO STANDARD DROPDOWN ELEMENTS
  // ===================================

  $(document)
    .on('click.bs.dropdown.data-api', clearMenus)
    .on('click.bs.dropdown.data-api', '.dropdown form', function (e) { e.stopPropagation() })
    .on('click.bs.dropdown.data-api', toggle, Dropdown.prototype.toggle)
    .on('keydown.bs.dropdown.data-api', toggle, Dropdown.prototype.keydown)
    .on('keydown.bs.dropdown.data-api', '.dropdown-menu', Dropdown.prototype.keydown)

}(jQuery);
;
jQuery(document).ready(function() {

    var URL = jQuery(location).attr('hash');
    //alert("Current URL Using JQuery : " + URL);

    if(URL == "#tab-mortgagetermloan"){
        $('body.page-id-38869 #middle .headline_outer').css('background-image','url(https://www.kbzbank.com/wp-content/uploads/2020/09/homeloan-banner-1.jpg)');
        $('body.page-id-38968 #middle .headline_outer').css('background-image','url(https://www.kbzbank.com/wp-content/uploads/2020/09/homeloan-banner-1.jpg)');
    }
    jQuery("#tab-mortgagetermloan a").click(function () {
        $('body.page-id-38869 #middle .headline_outer').css('background-image','url(https://www.kbzbank.com/wp-content/uploads/2020/09/homeloan-banner-1.jpg)');
        $('body.page-id-38968 #middle .headline_outer').css('background-image','url(https://www.kbzbank.com/wp-content/uploads/2020/09/homeloan-banner-1.jpg)');
    });

    if(URL == "#tab-plotplusconstruction"){
        $('body.page-id-38869 #middle .headline_outer').css('background-image','url(https://www.kbzbank.com/wp-content/uploads/2020/09/banner1-1.jpg)');
        $('body.page-id-38968 #middle .headline_outer').css('background-image','url(https://www.kbzbank.com/wp-content/uploads/2020/09/banner1-1.jpg)');
    }
    jQuery("#tab-plotplusconstruction a").click(function () {
        $('body.page-id-38869 #middle .headline_outer').css('background-image','url(https://www.kbzbank.com/wp-content/uploads/2020/09/banner1-1.jpg)');
        $('body.page-id-38968 #middle .headline_outer').css('background-image','url(https://www.kbzbank.com/wp-content/uploads/2020/09/banner1-1.jpg)');
    });

    if(URL == "#tab-balancetransferloan"){
        $('body.page-id-38869 #middle .headline_outer').css('background-image','url(https://www.kbzbank.com/wp-content/uploads/2020/10/Balance-transfer-Loan-pdf.jpg)');
        $('body.page-id-38968 #middle .headline_outer').css('background-image','url(https://www.kbzbank.com/wp-content/uploads/2020/10/Balance-transfer-Loan-pdf.jpg)');
    }
    jQuery("#tab-balancetransferloan a").click(function () {
        $('body.page-id-38869 #middle .headline_outer').css('background-image','url(https://www.kbzbank.com/wp-content/uploads/2020/10/Balance-transfer-Loan-pdf.jpg)');
        $('body.page-id-38968 #middle .headline_outer').css('background-image','url(https://www.kbzbank.com/wp-content/uploads/2020/10/Balance-transfer-Loan-pdf.jpg)');
    });

    if(URL == "#tab-homeloantoprofessionals"){
        $('body.page-id-38869 #middle .headline_outer').css('background-image','url(https://www.kbzbank.com/wp-content/uploads/2020/10/Home-Loan-to-Professionals.jpg)');
        $('body.page-id-38968 #middle .headline_outer').css('background-image','url(https://www.kbzbank.com/wp-content/uploads/2020/10/Home-Loan-to-Professionals.jpg)');
    }
    jQuery("#tab-homeloantoprofessionals a").click(function () {
        $('body.page-id-38869 #middle .headline_outer').css('background-image','url(https://www.kbzbank.com/wp-content/uploads/2020/10/Home-Loan-to-Professionals.jpg)');
        $('body.page-id-38968 #middle .headline_outer').css('background-image','url(https://www.kbzbank.com/wp-content/uploads/2020/10/Home-Loan-to-Professionals.jpg)');
    });

    if(URL == "#tab-homeimprovementloan"){
        $('body.page-id-38869 #middle .headline_outer').css('background-image','url(https://www.kbzbank.com/wp-content/uploads/2020/09/Improvement-Loan-banner.jpg)');
        $('body.page-id-38968 #middle .headline_outer').css('background-image','url(https://www.kbzbank.com/wp-content/uploads/2020/09/Improvement-Loan-banner.jpg)');
    }
    jQuery("#tab-homeimprovementloan a").click(function () {
        $('body.page-id-38869 #middle .headline_outer').css('background-image','url(https://www.kbzbank.com/wp-content/uploads/2020/09/Improvement-Loan-banner.jpg)');
        $('body.page-id-38968 #middle .headline_outer').css('background-image','url(https://www.kbzbank.com/wp-content/uploads/2020/09/Improvement-Loan-banner.jpg)');
    });

    if(URL == "#tab-homeloantopartner"){
        $('body.page-id-38869 #middle .headline_outer').css('background-image','url(https://www.kbzbank.com/wp-content/uploads/2020/10/Home-Loan-to-Partner.jpg)');
        $('body.page-id-38968 #middle .headline_outer').css('background-image','url(https://www.kbzbank.com/wp-content/uploads/2020/10/Home-Loan-to-Partner.jpg)');
    }
    jQuery("#tab-homeloantopartner a").click(function () {
        $('body.page-id-38869 #middle .headline_outer').css('background-image','url(https://www.kbzbank.com/wp-content/uploads/2020/10/Home-Loan-to-Partner.jpg)');
        $('body.page-id-38968 #middle .headline_outer').css('background-image','url(https://www.kbzbank.com/wp-content/uploads/2020/10/Home-Loan-to-Partner.jpg)');
    });

    if(URL == "#tab-rentalincomehomeloan"){
        $('body.page-id-38869 #middle .headline_outer').css('background-image','url(https://www.kbzbank.com/wp-content/uploads/2020/09/Income-Home-Loan-banner.jpg)');
        $('body.page-id-38968 #middle .headline_outer').css('background-image','url(https://www.kbzbank.com/wp-content/uploads/2020/09/Income-Home-Loan-banner.jpg)');
    }
    jQuery("#tab-rentalincomehomeloan a").click(function () {
        $('body.page-id-38869 #middle .headline_outer').css('background-image','url(https://www.kbzbank.com/wp-content/uploads/2020/09/Income-Home-Loan-banner.jpg)');
        $('body.page-id-38968 #middle .headline_outer').css('background-image','url(https://www.kbzbank.com/wp-content/uploads/2020/09/Income-Home-Loan-banner.jpg)');
    });

    if(URL == "#tab-homeconstructionloan"){
        $('body.page-id-38869 #middle .headline_outer').css('background-image','url(https://www.kbzbank.com/wp-content/uploads/2020/09/Construction-Loan-banner.jpg)');
        $('body.page-id-38968 #middle .headline_outer').css('background-image','url(https://www.kbzbank.com/wp-content/uploads/2020/09/Construction-Loan-banner.jpg)');
    }
    jQuery("#tab-homeconstructionloan a").click(function () {
        $('body.page-id-38869 #middle .headline_outer').css('background-image','url(https://www.kbzbank.com/wp-content/uploads/2020/09/Construction-Loan-banner.jpg)');
        $('body.page-id-38968 #middle .headline_outer').css('background-image','url(https://www.kbzbank.com/wp-content/uploads/2020/09/Construction-Loan-banner.jpg)');
    });


    jQuery(".mobile-menu-trigger").on("click", function(e){
        jQuery(".mobile-nav").addClass("active");
        jQuery("#header").addClass('auto-height');
    });

    jQuery(".mobile-menu-close").on("click", function(e){
        jQuery(".mobile-nav").removeClass("active");
        jQuery("#header").removeClass('auto-height');
    });

    jQuery(".featured-services .wp-block-kadence-column").on("click", function(e){
        let link = jQuery(this).find(".wp-block-image figure a").attr("href");
        window.location.href = link;
    });

    function initMainNavigation(container) {
        // Add dropdown toggle that displays child menu items.
        var dropdownToggle = jQuery('<button />', {
            'class': 'dropdown-toggle',
            'aria-expanded': false,
            'html': '<span class="lnr lnr-chevron-down"></span>'
        });

        container.find('.menu-item-has-children > a').after(dropdownToggle);
        //container.find('.menu-item-has-children .sub-menu a').after(submenuToggle);

        // Toggle buttons and submenu items with active children menu items.
        container.find('.current-menu-ancestor > button').addClass('toggled-on');
        container.find('.current-menu-ancestor > .children, .current-menu-ancestor > .sub-menu').addClass('toggled-on');

        // Add menu items with submenus to aria-haspopup="true".
        container.find('.menu-item-has-children').attr('aria-haspopup', 'true');

        container.on('click', '.dropdown-toggle', function (e) {
            
            var _this = jQuery(this);
            e.preventDefault();
            _this.toggleClass('toggled-on');
            _this.next('.children, .sub-menu').toggleClass('toggled-on');

            _this.attr('aria-expanded', _this.attr('aria-expanded') === 'false' ? 'true' : 'false');

        });
    }

    initMainNavigation(jQuery('.mobile-navigation'));

    $('.btn-right').click(function() {
        event.preventDefault();
        $('.mbanking-quicktabs  .kt-tabs-title-list').animate({
          scrollLeft: "+=200px"
        }, "slow");
    });
      
    $('.btn-left').click(function() {
        event.preventDefault();
        $('.mbanking-quicktabs  .kt-tabs-title-list').animate({
          scrollLeft: "-=200px"
        }, "slow");
    });
});
    
    
;
/**
 * @package 	WordPress
 * @subpackage 	KBZ Bank
 * @version		1.0.0
 */


/*!
 * DebouncedResize Function
 */
(function(e){"use strict";var t=e.event,n,r;n=t.special.debouncedresize={setup:function(){e(this).on("resize",n.handler)},teardown:function(){e(this).off("resize",n.handler)},handler:function(e,i){var s=this,o=arguments,u=function(){e.type="debouncedresize";t.dispatch.apply(s,o)};if(r){clearTimeout(r)}i?u():r=setTimeout(u(),n.threshold)},threshold:150}})(jQuery);

;
/**
 * @package 	WordPress
 * @subpackage 	KBZ Bank
 * @version		1.0.0
 */


/* Modernizr 2.8.3 (Custom Build) | MIT & BSD
 * Build: http://modernizr.com/download/#-fontface-backgroundsize-borderimage-borderradius-boxshadow-flexbox-flexboxlegacy-hsla-multiplebgs-opacity-rgba-textshadow-cssanimations-csscolumns-generatedcontent-cssgradients-cssreflections-csstransforms-csstransforms3d-csstransitions-applicationcache-canvas-canvastext-draganddrop-hashchange-history-audio-video-indexeddb-input-inputtypes-localstorage-postmessage-sessionstorage-websockets-websqldatabase-webworkers-geolocation-inlinesvg-smil-svg-svgclippaths-touch-webgl-shiv-mq-cssclasses-teststyles-testprop-testallprops-hasevent-prefixes-domprefixes-load
 */
;window.Modernizr=function(a,b,c){function D(a){j.cssText=a}function E(a,b){return D(n.join(a+";")+(b||""))}function F(a,b){return typeof a===b}function G(a,b){return!!~(""+a).indexOf(b)}function H(a,b){for(var d in a){var e=a[d];if(!G(e,"-")&&j[e]!==c)return b=="pfx"?e:!0}return!1}function I(a,b,d){for(var e in a){var f=b[a[e]];if(f!==c)return d===!1?a[e]:F(f,"function")?f.bind(d||b):f}return!1}function J(a,b,c){var d=a.charAt(0).toUpperCase()+a.slice(1),e=(a+" "+p.join(d+" ")+d).split(" ");return F(b,"string")||F(b,"undefined")?H(e,b):(e=(a+" "+q.join(d+" ")+d).split(" "),I(e,b,c))}function K(){e.input=function(c){for(var d=0,e=c.length;d<e;d++)u[c[d]]=c[d]in k;return u.list&&(u.list=!!b.createElement("datalist")&&!!a.HTMLDataListElement),u}("autocomplete autofocus list placeholder max min multiple pattern required step".split(" ")),e.inputtypes=function(a){for(var d=0,e,f,h,i=a.length;d<i;d++)k.setAttribute("type",f=a[d]),e=k.type!=="text",e&&(k.value=l,k.style.cssText="position:absolute;visibility:hidden;",/^range$/.test(f)&&k.style.WebkitAppearance!==c?(g.appendChild(k),h=b.defaultView,e=h.getComputedStyle&&h.getComputedStyle(k,null).WebkitAppearance!=="textfield"&&k.offsetHeight!==0,g.removeChild(k)):/^(search|tel)$/.test(f)||(/^(url|email)$/.test(f)?e=k.checkValidity&&k.checkValidity()===!1:e=k.value!=l)),t[a[d]]=!!e;return t}("search tel url email datetime date month week time datetime-local number range color".split(" "))}var d="2.8.3",e={},f=!0,g=b.documentElement,h="modernizr",i=b.createElement(h),j=i.style,k=b.createElement("input"),l=":)",m={}.toString,n=" -webkit- -moz- -o- -ms- ".split(" "),o="Webkit Moz O ms",p=o.split(" "),q=o.toLowerCase().split(" "),r={svg:"http://www.w3.org/2000/svg"},s={},t={},u={},v=[],w=v.slice,x,y=function(a,c,d,e){var f,i,j,k,l=b.createElement("div"),m=b.body,n=m||b.createElement("body");if(parseInt(d,10))while(d--)j=b.createElement("div"),j.id=e?e[d]:h+(d+1),l.appendChild(j);return f=["&#173;",'<style id="s',h,'">',a,"</style>"].join(""),l.id=h,(m?l:n).innerHTML+=f,n.appendChild(l),m||(n.style.background="",n.style.overflow="hidden",k=g.style.overflow,g.style.overflow="hidden",g.appendChild(n)),i=c(l,a),m?l.parentNode.removeChild(l):(n.parentNode.removeChild(n),g.style.overflow=k),!!i},z=function(b){var c=a.matchMedia||a.msMatchMedia;if(c)return c(b)&&c(b).matches||!1;var d;return y("@media "+b+" { #"+h+" { position: absolute; } }",function(b){d=(a.getComputedStyle?getComputedStyle(b,null):b.currentStyle)["position"]=="absolute"}),d},A=function(){function d(d,e){e=e||b.createElement(a[d]||"div"),d="on"+d;var f=d in e;return f||(e.setAttribute||(e=b.createElement("div")),e.setAttribute&&e.removeAttribute&&(e.setAttribute(d,""),f=F(e[d],"function"),F(e[d],"undefined")||(e[d]=c),e.removeAttribute(d))),e=null,f}var a={select:"input",change:"input",submit:"form",reset:"form",error:"img",load:"img",abort:"img"};return d}(),B={}.hasOwnProperty,C;!F(B,"undefined")&&!F(B.call,"undefined")?C=function(a,b){return B.call(a,b)}:C=function(a,b){return b in a&&F(a.constructor.prototype[b],"undefined")},Function.prototype.bind||(Function.prototype.bind=function(b){var c=this;if(typeof c!="function")throw new TypeError;var d=w.call(arguments,1),e=function(){if(this instanceof e){var a=function(){};a.prototype=c.prototype;var f=new a,g=c.apply(f,d.concat(w.call(arguments)));return Object(g)===g?g:f}return c.apply(b,d.concat(w.call(arguments)))};return e}),s.flexbox=function(){return J("flexWrap")},s.flexboxlegacy=function(){return J("boxDirection")},s.canvas=function(){var a=b.createElement("canvas");return!!a.getContext&&!!a.getContext("2d")},s.canvastext=function(){return!!e.canvas&&!!F(b.createElement("canvas").getContext("2d").fillText,"function")},s.webgl=function(){return!!a.WebGLRenderingContext},s.touch=function(){var c;return"ontouchstart"in a||a.DocumentTouch&&b instanceof DocumentTouch?c=!0:y(["@media (",n.join("touch-enabled),("),h,")","{#modernizr{top:9px;position:absolute}}"].join(""),function(a){c=a.offsetTop===9}),c},s.geolocation=function(){return"geolocation"in navigator},s.postmessage=function(){return!!a.postMessage},s.websqldatabase=function(){return!!a.openDatabase},s.indexedDB=function(){return!!J("indexedDB",a)},s.hashchange=function(){return A("hashchange",a)&&(b.documentMode===c||b.documentMode>7)},s.history=function(){return!!a.history&&!!history.pushState},s.draganddrop=function(){var a=b.createElement("div");return"draggable"in a||"ondragstart"in a&&"ondrop"in a},s.websockets=function(){return"WebSocket"in a||"MozWebSocket"in a},s.rgba=function(){return D("background-color:rgba(150,255,150,.5)"),G(j.backgroundColor,"rgba")},s.hsla=function(){return D("background-color:hsla(120,40%,100%,.5)"),G(j.backgroundColor,"rgba")||G(j.backgroundColor,"hsla")},s.multiplebgs=function(){return D("background:url(https://),url(https://),red url(https://)"),/(url\s*\(.*?){3}/.test(j.background)},s.backgroundsize=function(){return J("backgroundSize")},s.borderimage=function(){return J("borderImage")},s.borderradius=function(){return J("borderRadius")},s.boxshadow=function(){return J("boxShadow")},s.textshadow=function(){return b.createElement("div").style.textShadow===""},s.opacity=function(){return E("opacity:.55"),/^0.55$/.test(j.opacity)},s.cssanimations=function(){return J("animationName")},s.csscolumns=function(){return J("columnCount")},s.cssgradients=function(){var a="background-image:",b="gradient(linear,left top,right bottom,from(#9f9),to(white));",c="linear-gradient(left top,#9f9, white);";return D((a+"-webkit- ".split(" ").join(b+a)+n.join(c+a)).slice(0,-a.length)),G(j.backgroundImage,"gradient")},s.cssreflections=function(){return J("boxReflect")},s.csstransforms=function(){return!!J("transform")},s.csstransforms3d=function(){var a=!!J("perspective");return a&&"webkitPerspective"in g.style&&y("@media (transform-3d),(-webkit-transform-3d){#modernizr{left:9px;position:absolute;height:3px;}}",function(b,c){a=b.offsetLeft===9&&b.offsetHeight===3}),a},s.csstransitions=function(){return J("transition")},s.fontface=function(){var a;return y('@font-face {font-family:"font";src:url("https://")}',function(c,d){var e=b.getElementById("smodernizr"),f=e.sheet||e.styleSheet,g=f?f.cssRules&&f.cssRules[0]?f.cssRules[0].cssText:f.cssText||"":"";a=/src/i.test(g)&&g.indexOf(d.split(" ")[0])===0}),a},s.generatedcontent=function(){var a;return y(["#",h,"{font:0/0 a}#",h,':after{content:"',l,'";visibility:hidden;font:3px/1 a}'].join(""),function(b){a=b.offsetHeight>=3}),a},s.video=function(){var a=b.createElement("video"),c=!1;try{if(c=!!a.canPlayType)c=new Boolean(c),c.ogg=a.canPlayType('video/ogg; codecs="theora"').replace(/^no$/,""),c.h264=a.canPlayType('video/mp4; codecs="avc1.42E01E"').replace(/^no$/,""),c.webm=a.canPlayType('video/webm; codecs="vp8, vorbis"').replace(/^no$/,"")}catch(d){}return c},s.audio=function(){var a=b.createElement("audio"),c=!1;try{if(c=!!a.canPlayType)c=new Boolean(c),c.ogg=a.canPlayType('audio/ogg; codecs="vorbis"').replace(/^no$/,""),c.mp3=a.canPlayType("audio/mpeg;").replace(/^no$/,""),c.wav=a.canPlayType('audio/wav; codecs="1"').replace(/^no$/,""),c.m4a=(a.canPlayType("audio/x-m4a;")||a.canPlayType("audio/aac;")).replace(/^no$/,"")}catch(d){}return c},s.localstorage=function(){try{return localStorage.setItem(h,h),localStorage.removeItem(h),!0}catch(a){return!1}},s.sessionstorage=function(){try{return sessionStorage.setItem(h,h),sessionStorage.removeItem(h),!0}catch(a){return!1}},s.webworkers=function(){return!!a.Worker},s.applicationcache=function(){return!!a.applicationCache},s.svg=function(){return!!b.createElementNS&&!!b.createElementNS(r.svg,"svg").createSVGRect},s.inlinesvg=function(){var a=b.createElement("div");return a.innerHTML="<svg/>",(a.firstChild&&a.firstChild.namespaceURI)==r.svg},s.smil=function(){return!!b.createElementNS&&/SVGAnimate/.test(m.call(b.createElementNS(r.svg,"animate")))},s.svgclippaths=function(){return!!b.createElementNS&&/SVGClipPath/.test(m.call(b.createElementNS(r.svg,"clipPath")))};for(var L in s)C(s,L)&&(x=L.toLowerCase(),e[x]=s[L](),v.push((e[x]?"":"no-")+x));return e.input||K(),e.addTest=function(a,b){if(typeof a=="object")for(var d in a)C(a,d)&&e.addTest(d,a[d]);else{a=a.toLowerCase();if(e[a]!==c)return e;b=typeof b=="function"?b():b,typeof f!="undefined"&&f&&(g.className+=" "+(b?"":"no-")+a),e[a]=b}return e},D(""),i=k=null,function(a,b){function l(a,b){var c=a.createElement("p"),d=a.getElementsByTagName("head")[0]||a.documentElement;return c.innerHTML="x<style>"+b+"</style>",d.insertBefore(c.lastChild,d.firstChild)}function m(){var a=s.elements;return typeof a=="string"?a.split(" "):a}function n(a){var b=j[a[h]];return b||(b={},i++,a[h]=i,j[i]=b),b}function o(a,c,d){c||(c=b);if(k)return c.createElement(a);d||(d=n(c));var g;return d.cache[a]?g=d.cache[a].cloneNode():f.test(a)?g=(d.cache[a]=d.createElem(a)).cloneNode():g=d.createElem(a),g.canHaveChildren&&!e.test(a)&&!g.tagUrn?d.frag.appendChild(g):g}function p(a,c){a||(a=b);if(k)return a.createDocumentFragment();c=c||n(a);var d=c.frag.cloneNode(),e=0,f=m(),g=f.length;for(;e<g;e++)d.createElement(f[e]);return d}function q(a,b){b.cache||(b.cache={},b.createElem=a.createElement,b.createFrag=a.createDocumentFragment,b.frag=b.createFrag()),a.createElement=function(c){return s.shivMethods?o(c,a,b):b.createElem(c)},a.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+m().join().replace(/[\w\-]+/g,function(a){return b.createElem(a),b.frag.createElement(a),'c("'+a+'")'})+");return n}")(s,b.frag)}function r(a){a||(a=b);var c=n(a);return s.shivCSS&&!g&&!c.hasCSS&&(c.hasCSS=!!l(a,"article,aside,dialog,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}mark{background:#FF0;color:#000}template{display:none}")),k||q(a,c),a}var c="3.7.0",d=a.html5||{},e=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,f=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,g,h="_html5shiv",i=0,j={},k;(function(){try{var a=b.createElement("a");a.innerHTML="<xyz></xyz>",g="hidden"in a,k=a.childNodes.length==1||function(){b.createElement("a");var a=b.createDocumentFragment();return typeof a.cloneNode=="undefined"||typeof a.createDocumentFragment=="undefined"||typeof a.createElement=="undefined"}()}catch(c){g=!0,k=!0}})();var s={elements:d.elements||"abbr article aside audio bdi canvas data datalist details dialog figcaption figure footer header hgroup main mark meter nav output progress section summary template time video",version:c,shivCSS:d.shivCSS!==!1,supportsUnknownElements:k,shivMethods:d.shivMethods!==!1,type:"default",shivDocument:r,createElement:o,createDocumentFragment:p};a.html5=s,r(b)}(this,b),e._version=d,e._prefixes=n,e._domPrefixes=q,e._cssomPrefixes=p,e.mq=z,e.hasEvent=A,e.testProp=function(a){return H([a])},e.testAllProps=J,e.testStyles=y,g.className=g.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+(f?" js "+v.join(" "):""),e}(this,this.document),function(a,b,c){function d(a){return"[object Function]"==o.call(a)}function e(a){return"string"==typeof a}function f(){}function g(a){return!a||"loaded"==a||"complete"==a||"uninitialized"==a}function h(){var a=p.shift();q=1,a?a.t?m(function(){("c"==a.t?B.injectCss:B.injectJs)(a.s,0,a.a,a.x,a.e,1)},0):(a(),h()):q=0}function i(a,c,d,e,f,i,j){function k(b){if(!o&&g(l.readyState)&&(u.r=o=1,!q&&h(),l.onload=l.onreadystatechange=null,b)){"img"!=a&&m(function(){t.removeChild(l)},50);for(var d in y[c])y[c].hasOwnProperty(d)&&y[c][d].onload()}}var j=j||B.errorTimeout,l=b.createElement(a),o=0,r=0,u={t:d,s:c,e:f,a:i,x:j};1===y[c]&&(r=1,y[c]=[]),"object"==a?l.data=c:(l.src=c,l.type=a),l.width=l.height="0",l.onerror=l.onload=l.onreadystatechange=function(){k.call(this,r)},p.splice(e,0,u),"img"!=a&&(r||2===y[c]?(t.insertBefore(l,s?null:n),m(k,j)):y[c].push(l))}function j(a,b,c,d,f){return q=0,b=b||"j",e(a)?i("c"==b?v:u,a,b,this.i++,c,d,f):(p.splice(this.i++,0,a),1==p.length&&h()),this}function k(){var a=B;return a.loader={load:j,i:0},a}var l=b.documentElement,m=a.setTimeout,n=b.getElementsByTagName("script")[0],o={}.toString,p=[],q=0,r="MozAppearance"in l.style,s=r&&!!b.createRange().compareNode,t=s?l:n.parentNode,l=a.opera&&"[object Opera]"==o.call(a.opera),l=!!b.attachEvent&&!l,u=r?"object":l?"script":"img",v=l?"script":u,w=Array.isArray||function(a){return"[object Array]"==o.call(a)},x=[],y={},z={timeout:function(a,b){return b.length&&(a.timeout=b[0]),a}},A,B;B=function(a){function b(a){var a=a.split("!"),b=x.length,c=a.pop(),d=a.length,c={url:c,origUrl:c,prefixes:a},e,f,g;for(f=0;f<d;f++)g=a[f].split("="),(e=z[g.shift()])&&(c=e(c,g));for(f=0;f<b;f++)c=x[f](c);return c}function g(a,e,f,g,h){var i=b(a),j=i.autoCallback;i.url.split(".").pop().split("?").shift(),i.bypass||(e&&(e=d(e)?e:e[a]||e[g]||e[a.split("/").pop().split("?")[0]]),i.instead?i.instead(a,e,f,g,h):(y[i.url]?i.noexec=!0:y[i.url]=1,f.load(i.url,i.forceCSS||!i.forceJS&&"css"==i.url.split(".").pop().split("?").shift()?"c":c,i.noexec,i.attrs,i.timeout),(d(e)||d(j))&&f.load(function(){k(),e&&e(i.origUrl,h,g),j&&j(i.origUrl,h,g),y[i.url]=2})))}function h(a,b){function c(a,c){if(a){if(e(a))c||(j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}),g(a,j,b,0,h);else if(Object(a)===a)for(n in m=function(){var b=0,c;for(c in a)a.hasOwnProperty(c)&&b++;return b}(),a)a.hasOwnProperty(n)&&(!c&&!--m&&(d(j)?j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}:j[n]=function(a){return function(){var b=[].slice.call(arguments);a&&a.apply(this,b),l()}}(k[n])),g(a[n],j,b,n,h))}else!c&&l()}var h=!!a.test,i=a.load||a.both,j=a.callback||f,k=j,l=a.complete||f,m,n;c(h?a.yep:a.nope,!!i),i&&c(i)}var i,j,l=this.yepnope.loader;if(e(a))g(a,0,l,0);else if(w(a))for(i=0;i<a.length;i++)j=a[i],e(j)?g(j,0,l,0):w(j)?B(j):Object(j)===j&&h(j,l);else Object(a)===a&&h(a,l)},B.addPrefix=function(a,b){z[a]=b},B.addFilter=function(a){x.push(a)},B.errorTimeout=1e4,null==b.readyState&&b.addEventListener&&(b.readyState="loading",b.addEventListener("DOMContentLoaded",A=function(){b.removeEventListener("DOMContentLoaded",A,0),b.readyState="complete"},0)),a.yepnope=k(),a.yepnope.executeStack=h,a.yepnope.injectJs=function(a,c,d,e,i,j){var k=b.createElement("script"),l,o,e=e||B.errorTimeout;k.src=a;for(o in d)k.setAttribute(o,d[o]);c=j?h:c||f,k.onreadystatechange=k.onload=function(){!l&&g(k.readyState)&&(l=1,c(),k.onload=k.onreadystatechange=null)},m(function(){l||(l=1,c(1))},e),i?k.onload():n.parentNode.insertBefore(k,n)},a.yepnope.injectCss=function(a,c,d,e,g,i){var e=b.createElement("link"),j,c=i?h:c||f;e.href=a,e.rel="stylesheet",e.type="text/css";for(j in d)e.setAttribute(j,d[j]);g||(n.parentNode.insertBefore(e,n),m(c,0))}}(this,document),Modernizr.load=function(){yepnope.apply(window,[].slice.call(arguments,0))};

;
/**
 * @package 	WordPress
 * @subpackage 	KBZ Bank
 * @version		1.0.0
 */


/*! 
 * Respond.js v1.4.2: min/max-width media query polyfill
 * Copyright 2014 Scott Jehl
 * Licensed under MIT
 * http://j.mp/respondjs
 */
!function(a){"use strict";a.matchMedia=a.matchMedia||function(a){var b,c=a.documentElement,d=c.firstElementChild||c.firstChild,e=a.createElement("body"),f=a.createElement("div");return f.id="mq-test-1",f.style.cssText="position:absolute;top:-100em",e.style.background="none",e.appendChild(f),function(a){return f.innerHTML='&shy;<style media="'+a+'"> #mq-test-1 { width: 42px; }</style>',c.insertBefore(e,d),b=42===f.offsetWidth,c.removeChild(e),{matches:b,media:a}}}(a.document)}(this),function(a){"use strict";function b(){v(!0)}var c={};a.respond=c,c.update=function(){};var d=[],e=function(){var b=!1;try{b=new a.XMLHttpRequest}catch(c){b=new a.ActiveXObject("Microsoft.XMLHTTP")}return function(){return b}}(),f=function(a,b){var c=e();c&&(c.open("GET",a,!0),c.onreadystatechange=function(){4!==c.readyState||200!==c.status&&304!==c.status||b(c.responseText)},4!==c.readyState&&c.send(null))},g=function(a){return a.replace(c.regex.minmaxwh,"").match(c.regex.other)};if(c.ajax=f,c.queue=d,c.unsupportedmq=g,c.regex={media:/@media[^\{]+\{([^\{\}]*\{[^\}\{]*\})+/gi,keyframes:/@(?:\-(?:o|moz|webkit)\-)?keyframes[^\{]+\{(?:[^\{\}]*\{[^\}\{]*\})+[^\}]*\}/gi,comments:/\/\*[^*]*\*+([^/][^*]*\*+)*\//gi,urls:/(url\()['"]?([^\/\)'"][^:\)'"]+)['"]?(\))/g,findStyles:/@media *([^\{]+)\{([\S\s]+?)$/,only:/(only\s+)?([a-zA-Z]+)\s?/,minw:/\(\s*min\-width\s*:\s*(\s*[0-9\.]+)(px|em)\s*\)/,maxw:/\(\s*max\-width\s*:\s*(\s*[0-9\.]+)(px|em)\s*\)/,minmaxwh:/\(\s*m(in|ax)\-(height|width)\s*:\s*(\s*[0-9\.]+)(px|em)\s*\)/gi,other:/\([^\)]*\)/g},c.mediaQueriesSupported=a.matchMedia&&null!==a.matchMedia("only all")&&a.matchMedia("only all").matches,!c.mediaQueriesSupported){var h,i,j,k=a.document,l=k.documentElement,m=[],n=[],o=[],p={},q=30,r=k.getElementsByTagName("head")[0]||l,s=k.getElementsByTagName("base")[0],t=r.getElementsByTagName("link"),u=function(){var a,b=k.createElement("div"),c=k.body,d=l.style.fontSize,e=c&&c.style.fontSize,f=!1;return b.style.cssText="position:absolute;font-size:1em;width:1em",c||(c=f=k.createElement("body"),c.style.background="none"),l.style.fontSize="100%",c.style.fontSize="100%",c.appendChild(b),f&&l.insertBefore(c,l.firstChild),a=b.offsetWidth,f?l.removeChild(c):c.removeChild(b),l.style.fontSize=d,e&&(c.style.fontSize=e),a=j=parseFloat(a)},v=function(b){var c="clientWidth",d=l[c],e="CSS1Compat"===k.compatMode&&d||k.body[c]||d,f={},g=t[t.length-1],p=(new Date).getTime();if(b&&h&&q>p-h)return a.clearTimeout(i),i=a.setTimeout(v,q),void 0;h=p;for(var s in m)if(m.hasOwnProperty(s)){var w=m[s],x=w.minw,y=w.maxw,z=null===x,A=null===y,B="em";x&&(x=parseFloat(x)*(x.indexOf(B)>-1?j||u():1)),y&&(y=parseFloat(y)*(y.indexOf(B)>-1?j||u():1)),w.hasquery&&(z&&A||!(z||e>=x)||!(A||y>=e))||(f[w.media]||(f[w.media]=[]),f[w.media].push(n[w.rules]))}for(var C in o)o.hasOwnProperty(C)&&o[C]&&o[C].parentNode===r&&r.removeChild(o[C]);o.length=0;for(var D in f)if(f.hasOwnProperty(D)){var E=k.createElement("style"),F=f[D].join("\n");E.type="text/css",E.media=D,r.insertBefore(E,g.nextSibling),E.styleSheet?E.styleSheet.cssText=F:E.appendChild(k.createTextNode(F)),o.push(E)}},w=function(a,b,d){var e=a.replace(c.regex.comments,"").replace(c.regex.keyframes,"").match(c.regex.media),f=e&&e.length||0;b=b.substring(0,b.lastIndexOf("/"));var h=function(a){return a.replace(c.regex.urls,"$1"+b+"$2$3")},i=!f&&d;b.length&&(b+="/"),i&&(f=1);for(var j=0;f>j;j++){var k,l,o,p;i?(k=d,n.push(h(a))):(k=e[j].match(c.regex.findStyles)&&RegExp.$1,n.push(RegExp.$2&&h(RegExp.$2))),o=k.split(","),p=o.length;for(var q=0;p>q;q++)l=o[q],g(l)||m.push({media:l.split("(")[0].match(c.regex.only)&&RegExp.$2||"all",rules:n.length-1,hasquery:l.indexOf("(")>-1,minw:l.match(c.regex.minw)&&parseFloat(RegExp.$1)+(RegExp.$2||""),maxw:l.match(c.regex.maxw)&&parseFloat(RegExp.$1)+(RegExp.$2||"")})}v()},x=function(){if(d.length){var b=d.shift();f(b.href,function(c){w(c,b.href,b.media),p[b.href]=!0,a.setTimeout(function(){x()},0)})}},y=function(){for(var b=0;b<t.length;b++){var c=t[b],e=c.href,f=c.media,g=c.rel&&"stylesheet"===c.rel.toLowerCase();e&&g&&!p[e]&&(c.styleSheet&&c.styleSheet.rawCssText?(w(c.styleSheet.rawCssText,e,f),p[e]=!0):(!/^([a-zA-Z:]*\/\/)/.test(e)&&!s||e.replace(RegExp.$1,"").split("/")[0]===a.location.host)&&("//"===e.substring(0,2)&&(e=a.location.protocol+e),d.push({href:e,media:f})))}x()};y(),c.update=y,c.getEmValue=u,a.addEventListener?a.addEventListener("resize",b,!1):a.attachEvent&&a.attachEvent("onresize",b)}}(this);

;
/**
 * @package 	WordPress
 * @subpackage 	KBZ Bank
 * @version		1.0.0
 */

/**
 * jQuery iLightBox - Revolutionary Lightbox Plugin
 * http://www.ilightbox.net/
 *
 * @version: 2.2.1 - December 19, 2017
 *
 * @author: Hemn Chawroka
 *          http://www.iprodev.com/
 *
 */


eval(function(d,e,a,c,b,f){b=function(a){return(a<e?"":b(parseInt(a/e)))+(35<(a%=e)?String.fromCharCode(a+29):a.toString(36))};if(!"".replace(/^/,String)){for(;a--;)f[b(a)]=c[a]||b(a);c=[function(a){return f[a]}];b=function(){return"\\w+"};a=1}for(;a--;)c[a]&&(d=d.replace(new RegExp("\\b"+b(a)+"\\b","g"),c[a]));return d}('(14(g,p,Q){14 F(a,b){1a 1j(a.1D(b),10)||0}14 J(){19 a=p,b="4z";"ln"in p||(b="lm",a=1y.3z||1y.2I);1a{1d:a[b+"kK"],1f:a[b+"kJ"]}}14 ha(){19 a=L();p.2X.4f="";p.7n(a.x,a.y)}14 ia(a,b){a="//1b.kC/kA/ci.8Q?2j="+7K(a).1r(/!/g,"%21").1r(/\'/g,"%27").1r(/\\(/g,"%28").1r(/\\)/g,"%29").1r(/\\*/g,"%2A");g.7i({2j:a,8S:"ci"});k7=14(a){b.1n(11,a)}}14 R(a){19 b=[];g("*",a).1Y(14(){19 a="";"51"!=g(11).1D("c4-2D")?a=g(11).1D("c4-2D"):"2L"!=1e g(11).2O("2h")&&"7x"==11.7y.1Z()&&(a=g(11).2O("2h"));if(-1==a.1R("k2"))1u(19 a=a.1r(/2j\\(\\"/g,""),a=a.1r(/2j\\(/g,""),a=a.1r(/\\"\\)/g,""),a=a.1r(/\\)/g,""),a=a.25(","),d=0;d<a.1h;d++)if(0<a[d].1h&&-1==g.jZ(a[d],b)){19 e="";D.7d&&9>D.2w&&(e="?"+M(c3*S()));b.4A(a[d]+e)}});1a b}14 Z(a){a=a.25(".").8k().1Z();19 b=-1!==a.1R("?")?a.25("?").8k():"";1a a.1r(b,"")}14 aa(a){a=Z(a);1a-1!==T.2D.1R(a)?"2D":-1!==T.2v.1R(a)?"2v":-1!==T.1I.1R(a)?"1I":"4e"}14 ba(a,b){1a 1j(b/2l*a)}14 U(a){1a(a=jX(a).1r(/^\\s+|\\s+$/g,"").6i(/^([^:\\/?#]+:)?(\\/\\/(?:[^:@]*(?::[^:@]*)?@)?(([^:\\/?#]*)(?::(\\d*))?))?([^?#]*)(\\?[^#]*)?(#[\\s\\S]*)?/))?{31:a[0]||"",56:a[1]||"",4u:a[2]||"",jW:a[3]||"",jV:a[4]||"",jT:a[5]||"",3t:a[6]||"",76:a[7]||"",4f:a[8]||""}:1g}14 N(a,b){14 c(a){19 b=[];a.1r(/^(\\.\\.?(\\/|$))+/,"").1r(/\\/(\\.(\\/|$))+/g,"/").1r(/\\/\\.\\.$/,"/../").1r(/\\/?[^\\/]*/g,14(a){"/.."===a?b.8k():b.4A(a)});1a b.58("").1r(/^\\//,"/"===a.4n(0)?"/":"")}b=U(b||"");a=U(a||"");1a b&&a?(b.56||a.56)+(b.56||b.4u?b.4u:a.4u)+c(b.56||b.4u||"/"===b.3t.4n(0)?b.3t:b.3t?(a.4u&&!a.3t?"/":"")+a.3t.72(0,a.3t.71("/")+1)+b.3t:a.3t)+(b.56||b.4u||b.3t?b.76:b.76||a.76)+b.4f:1g}14 ja(a,b,c){11.6Z=11.6Z||{};11.6Z.c0=11.6Z.c0||{};19 d=0,e=0,f=0,h={jO:-6,jN:-5,a:-5,jM:-4,b:-4,jI:-3,bV:-3,"#":-2,p:1,6X:1},d=14(a){a=(""+a).1r(/[6h\\-+]/g,".");a=a.1r(/([^.\\d]+)/g,".$1.").1r(/\\.{2,}/g,".");1a a.1h?a.25("."):[-8]},g=14(a){1a a?bU(a)?h[a]||-7:1j(a,10):0};a=d(a);b=d(b);e=ca(a.1h,b.1h);1u(d=0;d<e;d++)if(a[d]!=b[d])if(a[d]=g(a[d]),b[d]=g(b[d]),a[d]<b[d]){f=-1;1B}2i if(a[d]>b[d]){f=1;1B}if(!c)1a f;44(c){1s">":1s"gt":1a 0<f;1s">=":1s"ge":1a 0<=f;1s"<=":1s"le":1a 0>=f;1s"==":1s"=":1s"eq":1a 0===f;1s"<>":1s"!=":1s"bS":1a 0!==f;1s"":1s"<":1s"jB":1a 0>f;7F:1a 1g}}14 L(){19 a=0,b=0;"3b"==1e p.bO?(b=p.bO,a=p.jx):1y.2I&&(1y.2I.4w||1y.2I.4x)?(b=1y.2I.4x,a=1y.2I.4w):1y.3z&&(1y.3z.4w||1y.3z.4x)&&(b=1y.3z.4x,a=1y.3z.4w);1a{x:a,y:b}}14 da(a,b,c){19 d;d=q[a+b];1g==d&&(d=q[b]);1a 1g!=d?(0==b.1R(a)&&1g==c&&(c=b.6L(a.1h)),1g==c&&(c=b),c+\'="\'+d+\'" \'):""}14 A(a,b){if(0==a.1R("6c#"))1a"";0==a.1R("5c#")&&1g==b&&(b=a.6L(4));1a da("5c#",a,b)}14 G(a,b){if(0==a.1R("5c#"))1a"";0==a.1R("6c#")&&1g==b&&(b=a.6L(4));1a da("6c#",a,b)}14 ea(a,b){19 c,d="",e=b?" />":">";-1==a.1R("6c#")&&(c=q["5c#"+a],1g==c&&(c=q[a]),0==a.1R("5c#")&&(a=a.6L(4)),1g!=c&&(d=\'  <4g 2e="\'+a+\'" 2K="\'+c+\'"\'+e+"\\n"));1a d}14 ka(){1u(19 a=0;a<2S.1h;a++){19 b=2S[a];6b q[b];6b q["6c#"+b];6b q["5c#"+b]}}14 la(){19 a;a="jr";19 b=2S;if(4>b.1h||0!=b.1h%2)b=o,b=b.1r("%%",a),68(b),a="";2i{q=[];q.2h=b[0];q.1d=b[1];q.1f=b[2];q.6D="6C:bJ-bB-bz-bx-bv";q.4N="3A://5f.6y.3e/2Z/7Q/";a=b[3];if(1g==a||""==a)a="6,0,2,0";q.6w="3A://5f.6y.3e/iI/iH.iD#2w="+a;1u(19 c,d=4;d<b.1h;d+=2)c=b[d].1Z(),a=b[d+1],"2e"==c||"id"==c?q.2e=a:q[c]=a;b="<3h "+A("6D")+A("1d")+A("1f")+A("6w")+A("2e","id")+A("6u")+A("8h")+A("8j")+A("4b")+A("8l")+A("1w")+A("1K")+A("bu")+A("bt")+">\\n"+ea("2h",!1);d="  <8z "+G("2h")+G("1d")+G("1f")+G("4N")+G("2e")+G("8l")+G("6u");ka("2h","1d","1f","4N","6D","6w","2e","6u","8h","8j","4b","8l","bt","1w","1K","bu");1u(c in q)a=q[c],1g!=a&&(d+=G(c),b+=ea(c,!1));a=b+d+"> </8z>\\n</3h>"}1a a}19 T={2v:["ix"],2D:"iq io ij ih ie ib i7 i6 i2".25(" "),4e:"i1 i0 hY hX hW 2J hV 8Q 6X hU hT hS hR hP hO hN hM".25(" "),1I:"hL bj hI hH hw 48 3D 7Y 5m hh 88".25(" ")},O=g(p),E=g(1y),D,B,H,u="",V=5p.8m||5p.b9||p.8q,z=!!("h9"in p)&&/h6|gS|b4|b1|b0|gv|gk|aS gi/i.1E(V),aP=/(ga|bb\\d+|fN).+9f|fL|fK\\/|fA|fz|fy|fx|fw|fv|fu|ip(fr|aF)|aE|fm|fl |fk|fi|ff|9f.+fd|fc|8q m(fb|in)i|f4( ap)?|cx|p(eZ|eY)\\/|eX|eW|eV|eS(4|6)0|eI|es|6v\\.(ek|eh)|eg|ef|ee ce|ed|eb/i.1E(V)||/e8|e7|e6|e3|dX|50[1-6]i|dW|dV|a 9W|dU|ac(er|9U|s\\-)|ai(ko|dO)|al(av|ca|co)|dK|an(ex|8E|dA)|dz|ar(ch|go)|as(8L|dx)|dr|au(di|\\-m|r |s )|dq|be(ck|ll|dk)|bi(lb|dh)|bl(ac|az)|br(e|v)w|dg|bw\\-(n|u)|dd\\/|db|d9|d8\\-|d5|d4|d1|d0\\-|co(cZ|9L)|cX|da(it|ll|cV)|cU|dc\\-s|cT|cS|cR|do(c|p)o|ds(12|\\-d)|el(49|ai)|em(l2|7S)|er(ic|k0)|cN|ez([4-7]0|ap|9W|cL)|cK|cJ(\\-|6h)|g1 u|cE|cD|gf\\-5|g\\-8a|go(\\.w|aF)|gr(ad|cC)|cB|cA|hd\\-(m|p|t)|cy\\-|hi(9H|9F)|hp( i|ip)|hs\\-c|ht(c(\\-| |6h|a|g|p|s|t)|kO)|hu(aw|kF)|i\\-(20|go|8u)|kD|kw( |\\-|\\/)|kt|kl|kj|ki|kh|ke|kd|aE|ja(t|v)a|kc|kb|k9|k6|jY|jQ( |\\/)|jL|jK |jJ\\-|jH(c|k)|le(4C|jG)|lg( g|\\/(k|l|u)|50|54|\\-[a-w])|jF|jD|jA\\-w|jy|jw\\/|8u(8L|1J|ju)|9w(5P|21|ca)|m\\-cr|jq(bV|9v)|jo(jn|9d|9u)|je|8a(5P|j2|bi|de|do|t(\\-| |o|v)|9t)|iX(50|iU|v )|i8|i4|hQ[0-2]|hK[2-3]|hG(0|2)|hz(0|2|5)|hl(0(0|1)|10)|bS((c|m)\\-|1O|hj|hg|hf|h8)|h7(6|i)|h5|gP|gO(gN|gI)|gF|gE|gD|gC(a|d|t)|gx|gw(13|\\-([1-8]|c))|gj|fX|6X(ay|fM)|fG\\-2|fF(ck|fE|9o)|fp|fo|9H\\-g|fj\\-a|fh(fg|12|21|32|60|\\-[2-7]|i\\-)|fe|f9|f3|f2|f1|eU(eP|eN)|eL\\/|eE(ge|8u|eB|8n|8E|eo)|ej(5P|h\\-|9U|p\\-)|ei\\/|9o(c(\\-|0|1)|47|9w|9L|9v)|ec\\-|e9|e5(\\-|m)|e4\\-0|e2(45|id)|e1(al|ar|b3|it|e0)|dZ(ft|8E)|dT(5P|h\\-|v\\-|v )|dS(5P|dR)|dQ(18|50)|dN(dL|10|18)|9F(gt|lk)|dJ\\-|dI\\-|dF(i|m)|dC\\-|t\\-8a|6j(6X|dy)|9u(70|m\\-|dm|dl)|dj\\-9|6v(\\.b|g1|df)|d6|d2|cY|cP|cO(cI|8L)|cH(40|5[0-3]|\\-v)|lh|lf|l7|kI(52|53|60|61|70|80|81|83|85|98)|fB(\\-| )|fs|dn|f0(g |fD|i3)|jp|js|jE|cW\\-|aM|dM|dP\\-/i.1E(V.dY(0,4)),K=z?"3u.1H":"5H.1H",9d=z?"7q.1H":"hv.1H",9h=z?"99.1H":"jk.1H",W=z?"9i.1H":"9j.1H",I=4P.jU,P=4P.kG,X=4P.kR,ca=4P.3B,Y=4P.3G,M=4P.cz,S=4P.cG,fa=14(a,b,c,d){19 e=11;e.17=b;e.3p=a.3p||a;e.4c=a.4c;e.9k=d;1>c.1h?e.8U():e.1o=c;e.1k={1T:e.1o.1h,2W:0,1p:1g,1i:1g,1q:1g,3f:g("2I"),4a:0,1W:g(\'<1c 1w="1b-1W"></1c>\'),2t:g(\'<1c 1w="1b-2t"><1c></1c></1c>\'),1P:g(\'<1c 1w="1b-1P"></1c>\'),4o:g(\'<1c 1w="1b-4z-1P"></1c>\'),1K:g(\'<1c 1w="1b-1K"></1c>\'),9l:g(\'<a 1w="1b-4q" 1K="\'+e.17.2U.4q+\'"></a>\'),73:g(\'<a 1w="1b-3k" 1K="\'+e.17.2U.8C+\'"></a>\'),8B:g(\'<a 1w="1b-4v" 1K="\'+e.17.2U.9m+\'"></a>\'),4i:g(\'<a 1w="1b-1i-4d" 1K="\'+e.17.2U.1i+\'"></a>\'),46:g(\'<a 1w="1b-1q-4d" 1K="\'+e.17.2U.8w+\'"></a>\'),1Q:g(\'<1c 1w="1b-1Q\'+(z?" 6W":"")+\'" 5a="1a 2V;"><1c 1w="1b-23"></1c></1c>\'),2N:g(\'<1c 1w="1b-1Q\'+(z?" 6W":"")+\' 1b-1i" 5a="1a 2V;"><1c 1w="1b-23"></1c></1c>\'),2M:g(\'<1c 1w="1b-1Q\'+(z?" 6W":"")+\' 1b-1q" 5a="1a 2V;"><1c 1w="1b-23"></1c></1c>\'),2G:g(\'<a 1w="1b-4d 1b-1i-4d" 5a="1a 2V;" 1K="\'+e.17.2U.1i+\'"><2q></2q></a>\'),2p:g(\'<a 1w="1b-4d 1b-1q-4d" 5a="1a 2V;" 1K="\'+e.17.2U.8w+\'"><2q></2q></a>\'),1C:g(\'<1c 1w="1b-1C" 5a="1a 2V;"><1c 1w="1b-1C-23"><a 1w="1b-1C-eF"></a><1c 1w="1b-1C-6N"></1c></1c></1c>\'),6M:!1,3T:!1,3U:!1,3C:!1,3v:!1,8f:f8,2C:!1,33:!1,4B:0,3w:0,4F:0};e.1k.89=e.1k.2G.2k(e.1k.2p);e.87();e.9n();e.17.4m=0<e.17.4m&&e.17.4m>=e.1k.1T?e.1k.1T-1:e.17.4m;e.17.4m=e.17.9p?M(S()*e.1k.1T):e.17.4m;e.1k.2W=e.17.4m;d?e.9q():e.84();e.17.2B&&(e.82(),O.3a(14(){e.82()}));z&&(a=/(5H|4T|5g|gb|gc)/ig,e.17.1S.1v=e.17.1S.1v.1r(a,"3u"),e.17.1S.1V=e.17.1S.1V.1r(a,"3u"),e.17.1U.1v=e.17.1U.1v.1r(a,"3u"),e.17.1U.1V=e.17.1U.1V.1r(a,"3u"));e.17.2c.6s&&g.3I(e.17.1M,{65:0,5G:0,6o:0,6n:0})};fa.3X={5j:14(){11.1k.4a+=1;"1G"==11.17.3K.1Z()?11.1k.2t.24().2x({1z:"-9r"},11.17.1v.2r,"2R"):11.1k.2t.24().2x({1x:"-9r"},11.17.1v.2r,"2R")},4j:14(){--11.1k.4a;11.1k.4a=0>11.1k.4a?0:11.1k.4a;"1G"==11.17.3K.1Z()?0>=11.1k.4a&&11.1k.2t.24().2x({1z:"-9s"},11.17.1v.2r,"7A"):0>=11.1k.4a&&11.1k.2t.24().2x({1x:"-9s"},11.17.1v.2r,"7A")},5o:14(){19 a=11;a.1J={ii:a.1k.1Q,ik:a.1k.2N,iB:a.1k.2M,iC:a.1k.1p,iJ:a.1k.1i,iQ:a.1k.1q,1V:14(){a.3m()},4E:14(){0<2S.1h?a.3q(!0):a.3q()},3k:14(){a.5q()}}},8U:14(){19 a=11,b=[],c=[];g(a.3p,a.4c).1Y(14(){19 d=g(11),e=d.2O(a.17.2O)||1g,f=d.1A("17")&&jc("({"+d.1A("17")+"})")||{},h=d.1A("1S"),l=d.1A("1K"),k=d.1A("1m")||aa(e);c.4A({1t:e,1S:h,1K:l,1m:k,17:f});a.9k||b.4A(d)});a.1o=c;a.6G=b},87:14(){19 a=11,b=[];g.1Y(a.1o,14(c,d){"3o"==1e d&&(d={2j:d});19 e=d.2j||d.1t||1g,f=d.17||{},h=d.1S||1g,l=d.1K||1g,k=d.1m?d.1m.1Z():aa(e),m="3h"!=1e e?Z(e):"";f.2g=f.2g||("2D"==k?e:1g);f.97=f.97||1g;f.3y=f.3y||a.17.3y;f.1d=f.1d||1g;f.1f=f.1f||1g;f.3L="2L"!=1e f.3L?f.3L:!0;f.3M="2L"!=1e f.3M?f.3M:!0;f.1U="2L"!=1e f.1U?f.1U:a.17.1U.91&&g.3I({},{},a.17.1U.91);"1I"==k&&(f.2f="2L"!=1e f.2f?f.2f:{},f.2f.3D=f.2f.3D||f.2f.jz||1g,f.2f.2c="2L"!=1e f.2f.2c?f.2f.2c:"2c",f.2f.7m=f.2f.7m||"jC",f.2f.5w="2L"!=1e f.2f.5w?f.2f.5w:!1);f.1d&&f.1f||("1I"==k?(f.1d=9x,f.1f=9y):"4e"==k?(f.1d="2l%",f.1f="90%"):"2v"==k&&(f.1d=9x,f.1f=9y));6b d.2j;d.8W=c;d.1t=e;d.1S=h;d.1K=l;d.1m=k;d.17=f;d.2Y=m;b.4A(d)});a.1o=b},9q:14(){19 a=11.1k.2W;11.1k.1p=a;11.1k.1i=11.1o[a+1]?a+1:1g;11.1k.1q=11.1o[a-1]?a-1:1g;11.75();11.6U()},75:14(){19 a=11,b=a.1k,c=a.17,d=J(),e=c.3K.1Z(),f=0<b.1T&&a.1o.5M(14(a,b,d){1a-1===["2D","2v","1I"].1R(a.1m)&&"2L"===1e a.9z&&(c.8O||a.17.8O)}),h=0<f.1h;c.8N&&!c.4o&&(b.3v=d.1d<=b.8f);b.1W.1F(c.3y).1V().1D("2T",c.1W.2T);c.2B&&b.1W[0].jS("9A",c.2B);c.2c.1P&&(b.1P.1F(c.3y).1L(b.9l),c.2c.3k&&b.1P.1L(b.73),c.2c.3H&&b.1P.1L(b.8B),1<b.1T&&b.1P.1L(b.46).1L(b.4i));b.3f.1F("1b-8J").1L(b.1W).1L(b.2t).1L(b.1Q).1L(b.2N).1L(b.2M);c.4o||b.3f.1L(b.1P);c.2c.6s&&b.3f.1L(b.2G).1L(b.2p);c.2c.2g&&1<b.1T&&(b.3f.1L(b.1C),b.1C.1F(c.3y).1F("1b-"+e),g("1c.1b-1C-6N",b.1C).3Z(),b.6M=!0);d="1G"==c.3K.1Z()?{1x:1j(d.1d/2-b.2t.3r()/2)}:{1z:1j(d.1f/2-b.2t.2n()/2)};b.2t.1F(c.3y).1D(d);b.2G.2k(b.2p).1F(c.3y);"1G"==e&&b.2t.2k(b.2G).2k(b.2p).1F("1G");b.3f[b.3v?"1F":"2H"]("3v");c.2P||(b.2p.2k(b.2p).2k(b.46).2k(b.4i).2H("3Q"),0==b.1p&&b.2p.2k(b.46).1F("3Q"),b.1p>=b.1T-1&&b.2G.2k(b.4i).1F("3Q"));c.1v.3Y?(b.1W.24().3g(c.1v.2r),b.1P.24().3g(c.1v.2r)):(b.1W.1v(),b.1P.1v());19 l=f.1h;h?(a.5j(),g.1Y(f,14(d,e){a.9B(11,14(d){km.kn(d);19 e=-1;a.1o.5M(14(a,b,c){a.1t==d.2j&&(e=b);1a a.1t==d.2j});19 f=a.1o[e];d&&g.3I(!0,f,{1t:d.4t,1m:d.1m,9z:!0,17:{2f:d.2f,1d:"2D"==d.1m?0:d.1d||f.1d,1f:"2D"==d.1m?0:d.1f||f.1f,2g:f.17.2g||d.2g}});l--;0==l&&(a.4j(),b.6O=!1,a.5E(),c.1v.3Y?2F(14(){a.5B()},c.1v.2r):a.5B())})})):c.1v.3Y?2F(14(){a.5B()},c.1v.2r):a.5B();a.5o();p.1H={4q:14(){a.3m()},3k:14(){a.5q()},9C:14(){a.2a("1i")},9D:14(){a.2a("1q")},41:14(b){a.41(b)},4E:14(){a.4E()},6E:14(){0<2S.1h?a.3q(!0):a.3q()},5N:14(b){a.5N(b)},9E:14(){a.3m();a.7l()}};c.2B&&(b.3C=!0,p.2X.4f=c.2B+"/"+b.1p,2F(14(){b.3C=!1},55));c.3H.9G||(a.5Q(),b.8B.2H("1b-4v").1F("1b-42"));"14"==1e a.17.1l.9I&&a.17.1l.9I.1n(a)},5r:14(a,b,c){19 d,e;11.5o();a.2r=c||11.17.2E.5V;"1p"==b&&(11.1k.3V=a.17.3L?!1:!0,11.1k.5n=a.17.3M?!1:!0);44(b){1s"1p":d=11.1k.1Q;e=11.1k.1p;1B;1s"1i":d=11.1k.2N;e=11.1k.1i;1B;1s"1q":d=11.1k.2M,e=11.1k.1q}d.8b("3i 1w").1F("1b-1Q"+(z?" 6W":"")).1F(a.17.3y);g("1c.1b-4z-1P",d).4I();if(a.1K||11.17.4o){c=11.1k.4o.62();if(a.1K&&11.17.1v.1K){19 f=11.1k.1K.62();f.3Z().2J(a.1K);c.1L(f)}11.17.4o&&c.1L(1<11.1k.1T?11.1k.1P.62():11.1k.1P);d.cF(c)}11.9J(a,d,e,b)},9J:14(a,b,c,d){19 e=11,f=e.17,h={9K:b,7Z:c};44(a.1m){1s"2D":"14"==1e f.1l.2b&&f.1l.2b.1n(e,e.1J,c);"14"==1e a.17.2b&&a.17.2b.1n(e,h);e.4h(a.1t,14(l){"14"==1e f.1l.1X&&f.1l.1X.1n(e,e.1J,c);"14"==1e a.17.1X&&a.17.1X.1n(e,h);b.1A({2o:l?l.1d:cM,2s:l?l.1f:6F});g("1c.1b-23",b).3Z().1L(l?\'<7x 2h="\'+a.1t+\'" 1w="1b-2D" />\':\'<2q 1w="1b-68">\'+f.69.4h+"</2q>");"14"==1e f.1l.1N&&f.1l.1N.1n(e,e.1J,c);"14"==1e a.17.1N&&a.17.1N.1n(e,h);e.3O(a,d,b)});1B;1s"1I":b.1A({2o:a.17.1d,2s:a.17.1f});e.5b(b,a);"14"==1e f.1l.1N&&f.1l.1N.1n(e,e.1J,c);"14"==1e a.17.1N&&a.17.1N.1n(e,h);e.3O(a,d,b);1B;1s"4e":e.5j();b.1A({2o:a.17.1d,2s:a.17.1f});19 l=e.5b(b,a);"14"==1e f.1l.1N&&f.1l.1N.1n(e,e.1J,c);"14"==1e a.17.1N&&a.17.1N.1n(e,h);"14"==1e f.1l.2b&&f.1l.2b.1n(e,e.1J,c);"14"==1e a.17.2b&&a.17.2b.1n(e,h);l.4p("59",14(){"14"==1e f.1l.1X&&f.1l.1X.1n(e,e.1J,c);"14"==1e a.17.1X&&a.17.1X.1n(e,h);e.4j();e.3O(a,d,b);l.74("59")});1B;1s"77":19 l=g(a.1t),k=e.5b(b,a),m=R(b);b.1A({2o:e.1o[c].17.1d||l.3r(),2s:e.1o[c].17.1f||l.2n()});k.cQ().eq(0).1v();"14"==1e f.1l.1N&&f.1l.1N.1n(e,e.1J,c);"14"==1e a.17.1N&&a.17.1N.1n(e,h);"14"==1e f.1l.2b&&f.1l.2b.1n(e,e.1J,c);"14"==1e a.17.2b&&a.17.2b.1n(e,h);e.4h(m,14(){"14"==1e f.1l.1X&&f.1l.1X.1n(e,e.1J,c);"14"==1e a.17.1X&&a.17.1X.1n(e,h);e.3O(a,d,b)});1B;1s"2v":l=e.5b(b,a);b.1A({2o:e.1o[c].17.1d||l.3r(),2s:e.1o[c].17.1f||l.2n()});"14"==1e f.1l.1N&&f.1l.1N.1n(e,e.1J,c);"14"==1e a.17.1N&&a.17.1N.1n(e,h);e.3O(a,d,b);1B;1s"7i":19 n=a.17.7i||{};"14"==1e f.1l.2b&&f.1l.2b.1n(e,e.1J,c);"14"==1e a.17.2b&&a.17.2b.1n(e,h);e.5j();g.7i({2j:a.1t||f.2Q.2j,1A:n.1A||1g,8S:n.8S||"2J",1m:n.1m||f.2Q.1m,7h:n.7h||f.2Q.7h,7k:n.7k||f.2Q.7k,7p:n.7p||f.2Q.7p,7c:n.7c||f.2Q.7c,7t:n.7t||f.2Q.7t,78:n.78||f.2Q.78,6V:n.6V||f.2Q.6V,6J:n.6J||f.2Q.6J,6a:14(l,k,m){e.4j();19 r=g(l),v=g("1c.1b-23",b),C=e.1o[c].17.1d||1j(r[0].6k("1d")),t=e.1o[c].17.1f||1j(r[0].6k("1f")),y=r[0].6k("1d")&&r[0].6k("1f")?{9M:"d3"}:{};v.3Z().1L(g(\'<1c 1w="1b-6x"></1c>\').1D(y).2J(r));b.1v().1A({2o:C||v.3r(),2s:t||v.2n()}).1V();"14"==1e f.1l.1N&&f.1l.1N.1n(e,e.1J,c);"14"==1e a.17.1N&&a.17.1N.1n(e,h);r=R(b);e.4h(r,14(){"14"==1e f.1l.1X&&f.1l.1X.1n(e,e.1J,c);"14"==1e a.17.1X&&a.17.1X.1n(e,h);e.3O(a,d,b)});f.2Q.6a(l,k,m);"14"==1e n.6a&&n.6a(l,k,m)},4Q:14(l,k,m){"14"==1e f.1l.1X&&f.1l.1X.1n(e,e.1J,c);"14"==1e a.17.1X&&a.17.1X.1n(e,h);e.4j();g("1c.1b-23",b).3Z().1L(\'<2q 1w="1b-68">\'+f.69.9N+"</2q>");e.3O(a,d,b);f.2Q.4Q(l,k,m);"14"==1e n.4Q&&n.4Q(l,k,m)}});1B;1s"2J":k=a.1t;23=g("1c.1b-23",b);k[0].7y?l=k.62():(k=g(k),l=k.3p?g("<1c>"+k+"</1c>"):k);19 C=e.1o[c].17.1d||1j(l.2O("1d")),y=e.1o[c].17.1f||1j(l.2O("1f"));e.5b(b,a);l.d7(1y.3z).1V();"14"==1e f.1l.1N&&f.1l.1N.1n(e,e.1J,c);"14"==1e a.17.1N&&a.17.1N.1n(e,h);m=R(b);"14"==1e f.1l.2b&&f.1l.2b.1n(e,e.1J,c);"14"==1e a.17.2b&&a.17.2b.1n(e,h);e.4h(m,14(){"14"==1e f.1l.1X&&f.1l.1X.1n(e,e.1J,c);"14"==1e a.17.1X&&a.17.1X.1n(e,h);b.1v().1A({2o:C||23.3r(),2s:y||23.2n()}).1V();l.4I();e.3O(a,d,b)})}},3O:14(a,b,c){19 d=11,e=d.1k,f=d.17;"1p"!=b&&("1i"==b?c.1F("1b-1i"):c.1F("1b-1q"));if("1p"==b)19 h=e.1p;2i if("1i"==b)19 l=f.1M.6o,h=e.1i;2i l=f.1M.6n,h=e.1q;19 k={9K:c,7Z:h};d.1o[h].17.1d=d.1o[h].17.1d||0;d.1o[h].17.1f=d.1o[h].17.1f||0;"1p"==b?f.1v.3Y?c.1D(B,H).3g(a.2r,14(){c.1D(B,"");if(a.1S){d.7w(a,c);19 b=g("1c.1b-1S",c),e=1j(b.2n()/c.2n()*2l);f.1S.2W&50>=e&&b.3g(f.2E.66)}if(b=a.17.1U)d.7v(b,a.1t,c),f.1U.2W&&g("1c.1b-1U",c).3g(f.2E.66);d.5E();"14"==1e f.1l.2u&&f.1l.2u.1n(d,d.1J,h);"14"==1e a.17.2u&&a.17.2u.1n(d,k)}):(c.1v(),d.5E(),"14"==1e f.1l.2u&&f.1l.2u.1n(d,d.1J,h),"14"==1e a.17.2u&&a.17.2u.1n(d,k)):f.1v.3Y?c.9O(a.2r,l,14(){"1i"==b?e.3T=!1:e.3U=!1;d.5E();"14"==1e f.1l.2u&&f.1l.2u.1n(d,d.1J,h);"14"==1e a.17.2u&&a.17.2u.1n(d,k)}):(c.1D({2T:l}).1v(),"1i"==b?e.3T=!1:e.3U=!1,d.5E(),"14"==1e f.1l.2u&&f.1l.2u.1n(d,d.1J,h),"14"==1e a.17.2u&&a.17.2u.1n(d,k));2F(14(){d.3q()},0)},5B:14(){19 a=11.1k,b=11.17;b.2P&&3<=a.1T?(a.1p==a.1T-1&&(a.1i=0),0==a.1p&&(a.1q=a.1T-1)):b.2P=!1;11.5r(11.1o[a.1p],"1p",b.1v.2r);11.1o[a.1i]&&11.5r(11.1o[a.1i],"1i",b.1v.2r);11.1o[a.1q]&&11.5r(11.1o[a.1q],"1q",b.1v.2r)},5E:14(){19 a=11,b=a.1k,c=a.17,d=1g;if(b.6M&&!a.1k.6O){19 e=b.1C,f=g("1c.1b-1C-23",e),h=g("1c.1b-1C-6N",f),l=0;h.8b("3i").3Z();g.1Y(a.1o,14(k,m){19 n=b.1p==k?"1b-5i":"",C=b.1p==k?c.1C.9c:c.1C.96,y=m.17.2g,r=g(\'<1c 1w="1b-2g"></1c>\'),v=g(\'<1c 1w="1b-2g-6l"></1c>\');r.1D({2T:0}).1F(n);"1I"!=m.1m&&"2v"!=m.1m||"2L"!=1e m.17.6l?m.17.6l&&(v.1F("1b-2g-"+m.17.6l),r.1L(v)):(v.1F("1b-2g-1I"),r.1L(v));y&&a.4h(y,14(b){l++;b?r.1A({2o:b.1d,2s:b.1f}).1L(\'<7x 2h="\'+y+\'" 4b="0" />\'):r.1A({2o:c.1C.94,2s:c.1C.93});4J(d);d=2F(14(){a.5Y(e,f,h)},20);2F(14(){r.9O(c.2E.5V,C)},20*l)});h.1L(r)});a.1k.6O=!0}},5Y:14(a,b,c){19 d=11,e=d.1k,f=d.17,h=J(),l=f.3K.1Z();a||(a=e.1C);b||(b=g("1c.1b-1C-23",a));c||(c=g("1c.1b-1C-6N",b));19 k=g(".1b-2g",c),e="1G"==l?h.1d-f.1M.5X:k.eq(0).3r()-f.1M.5X,h="1G"==l?k.eq(0).2n()-f.1M.5W:h.1f-f.1M.5W,m="1G"==l?0:e,n="1G"==l?h:0,C=g(".1b-5i",c),y={};3>2S.1h&&(k.1D({2T:f.1C.96}),C.1D({2T:f.1C.9c}));k.1Y(14(a){a=g(11);19 b=a.1A(),c="1G"==l?0:f.1C.94;1f="1G"==l?f.1C.93:0;8V=d.5U(c,1f,b.2o,b.2s,!0);a.1D({1d:8V.1d,1f:8V.1f});"1G"==l&&a.1D({"dp":"1x"});"1G"==l?m+=a.3r():n+=a.2n()});y={1d:m,1f:n};c.1D(y);19 y={},k=c.3j(),r=C.1h?C.3j():{1z:1j(h/2),1x:1j(e/2)};k.1z-=E.4x();k.1x-=E.4w();r.1z=r.1z-k.1z-E.4x();r.1x=r.1x-k.1x-E.4w();"1G"==l?(y.1z=0,y.1x=1j(e/2-r.1x-C.3r()/2)):(y.1z=1j(h/2-r.1z-C.2n()/2),y.1x=0);3>2S.1h?c.24().2x(y,f.2E.5T,"2R"):c.1D(y)},4h:14(a,b){g.3F(a)||(a=[a]);19 c=11,d=a.1h;0<d?(c.5j(),g.1Y(a,14(e,f){19 h=2y dt;h.du=14(){--d;0==d&&(c.4j(),b(h))};h.dv=h.dw=14(){--d;0==d&&(c.4j(),b(!1))};h.2h=a[e]})):b(!1)},84:14(){19 a=11,b=a.1k,c=z?"3u.iL":"5H.iL",d=z?"5H.iL":"3u.iL";if(a.4c&&a.3p){19 e=g(a.3p,a.4c);g(a.4c).1O(c,a.3p,14(){19 c=g(11),c=e.8W(c);b.1p=c;b.1i=a.1o[c+1]?c+1:1g;b.1q=a.1o[c-1]?c-1:1g;a.75();a.6U();1a!1}).1O(d,a.3p,14(){1a!1})}2i g.1Y(a.6G,14(e,h){h.1O(c,14(){b.1p=e;b.1i=a.1o[e+1]?e+1:1g;b.1q=a.1o[e-1]?e-1:1g;a.75();a.6U();1a!1}).1O(d,14(){1a!1})})},7l:14(){11.4c&&11.3p?g(11.4c).5t(".iL",11.3p):g.1Y(11.6G,14(a,b){b.5t(".iL")})},4E:14(){11.7l();11.8U();11.87();11.84()},6U:14(){14 a(a){c.3v||(c.4B||c.89.1v(),c.4B=4J(c.4B),-1===k.1R(a.8I)&&(c.4B=2F(14(){c.89.1V();c.4B=4J(c.4B)},c3)))}19 b=11,c=b.1k,d=b.17,e=d.3K.1Z(),f=g(".1b-1Q"),h=u.8H+".1H",l=8G=2l,k=[c.2G[0],c.2p[0],c.2G[0].36,c.2p[0].36];O.4p("dB.1H",14(){19 a=J();d.8N&&!d.4o&&(c.3v=a.1d<=c.8f);c.3f[c.3v?"1F":"2H"]("3v");b.3q(1g);z&&(4J(c.9P),c.9P=2F(14(){19 a=L().y;p.7n(0,a-30);p.7n(0,a+30);p.7n(0,a)},dD));c.6M&&b.5Y()}).4p("dE.1H",14(a){if(d.2c.3S)44(a.dG){1s 13:a.dH&&d.3S.9Q&&b.5q();1B;1s 27:d.3S.9R&&b.3m();1B;1s 37:d.3S.1x&&!c.5A&&b.2a("1q");1B;1s 38:d.3S.6v&&!c.5A&&b.2a("1q");1B;1s 39:d.3S.5J&&!c.5A&&b.2a("1i");1B;1s 40:d.3S.9S&&!c.5A&&b.2a("1i")}});u.5F&&O.4p(h,14(){b.8v()});19 h=[d.1S.1v+".1H",d.1S.1V+".1H",d.1U.1v+".1H",d.1U.1V+".1H"].5M(14(a,b,c){1a c.71(a)===b}),m="";g.1Y(h,14(a,b){0!=a&&(m+=" ");m+=b});E.1O(K,".1b-1W",14(){d.1W.9T&&b.3m()}).1O(K,".1b-1i, .1b-1i-4d",14(){b.2a("1i")}).1O(K,".1b-1q, .1b-1q-4d",14(){b.2a("1q")}).1O(K,".1b-2g",14(){19 a=g(11),a=g(".1b-2g",c.1C).8W(a);a!=c.1p&&b.41(a)}).1O(m,".1b-1Q:8t(.1b-1i, .1b-1q)",14(a){19 b=g("1c.1b-1S",c.1Q),e=g("1c.1b-1U",c.1Q),f=d.2E.66;c.3T||c.3U?(a.1m!=d.1S.1v||b.is(":3c")?a.1m==d.1S.1V&&b.is(":3c")&&b.3W(f):b.3g(f),a.1m!=d.1U.1v||e.is(":3c")?a.1m==d.1U.1V&&e.is(":3c")&&e.3W(f):e.3g(f)):(a.1m!=d.1S.1v||b.is(":3c")?a.1m==d.1S.1V&&b.is(":3c")&&b.24().3W(f):b.24().3g(f),a.1m!=d.1U.1v||e.is(":3c")?a.1m==d.1U.1V&&e.is(":3c")&&e.24().3W(f):e.24().3g(f))}).1O("4T.1H 5g.1H",".1b-6x",14(a){c.3V="4T"==a.1m?!0:!1}).1O(K,".1b-1P a.1b-4q, .1b-1P a.1b-3k, .1b-1P a.1b-4v, .1b-1P a.1b-42",14(){19 a=g(11);a.8p("1b-3k")?b.5q():a.8p("1b-4v")?(b.5Q(),a.1F("1b-42").2H("1b-4v")):a.8p("1b-42")?(b.42(),a.1F("1b-4v").2H("1b-42")):b.3m()}).1O(W,".1b-1W, .1b-1C-23",14(a){a.8o()});if(d.2c.6s&&!z)E.1O("9j.1H",a);if(d.2c.3H&&d.3H.9V)E.1O("4T.1H 5g.1H",".1b-1Q:8t(.1b-1i, .1b-1q)",14(a){"4T"==a.1m&&c.3w?b.42():"5g"==a.1m&&c.4F&&b.5Q()});h=g(".1b-1W, .1b-1Q, .1b-1C");if(d.2c.3L)h.1O("3L.1H",14(a,d){c.3V||(a.8o(),0>d?b.2a("1i"):0<d&&b.2a("1q"))});if(d.2c.3M)f.1O(9d,14(a){14 h(a){19 b=g(11);a=q[a];19 c=[w.2m[0]-x.2m[0],w.2m[1]-x.2m[1]];b[0].3i["1G"==e?"1x":"1z"]=("1G"==e?a.1x-c[0]:a.1z-c[1])+"4U"}14 k(a){if(w){19 b=a.6z.6K?a.6z.6K[0]:a;x={5D:(2y 9X).9Y(),2m:[b.9Z-t,b.a0-n]};f.1Y(h);a.8o()}}14 m(){f.1Y(14(){19 a=g(11),b=a.1A("3j")||{1z:a.3j().1z-n,1x:a.3j().1x-t},c=b.1z,b=b.1x;a.1D(B,H).24().2x({1z:c,1x:b},a1,"2R",14(){a.1D(B,"")})})}if(!(c.3T||c.3U||1==c.1T||c.5n)){c.3f.1F("1b-a2");a=a.6z.6K?a.6z.6K[0]:a;19 n=E.4x(),t=E.4w(),p=[f.eq(0).3j(),f.eq(1).3j(),f.eq(2).3j()],q=[{1z:p[0].1z-n,1x:p[0].1x-t},{1z:p[1].1z-n,1x:p[1].1x-t},{1z:p[2].1z-n,1x:p[2].1x-t}],w={5D:(2y 9X).9Y(),2m:[a.9Z-t,a.a0-n]},x;f.4p(W,k);E.8i(9h,14(a){f.74(W,k);c.3f.2H("1b-a2");w&&x&&("1G"==e&&a3>x.5D-w.5D&&I(w.2m[0]-x.2m[0])>l&&I(w.2m[1]-x.2m[1])<8G?w.2m[0]>x.2m[0]?c.1p!=c.1T-1||d.2P?(c.33=!0,b.2a("1i")):m():0!=c.1p||d.2P?(c.33=!0,b.2a("1q")):m():"a4"==e&&a3>x.5D-w.5D&&I(w.2m[1]-x.2m[1])>l&&I(w.2m[0]-x.2m[0])<8G?w.2m[1]>x.2m[1]?c.1p!=c.1T-1||d.2P?(c.33=!0,b.2a("1i")):m():0!=c.1p||d.2P?(c.33=!0,b.2a("1q")):m():m());w=x=Q})}})},41:14(a){19 b=11,c=b.1k,d=b.17,e=a-c.1p;d.2P&&(a==c.1T-1&&0==c.1p&&(e=-1),c.1p==c.1T-1&&0==a&&(e=1));if(1==e)b.2a("1i");2i if(-1==e)b.2a("1q");2i{if(c.3T||c.3U)1a!1;"14"==1e d.1l.7r&&d.1l.7r.1n(b,b.1J);d.2B&&(c.3C=!0,p.2X.4f=d.2B+"/"+a);b.1o[a]&&(b.1o[a].17.3L?b.1k.3V=!1:c.3V=!0,c.5n=b.1o[a].17.3M?!1:!0);g.1Y([c.1Q,c.2N,c.2M],14(a,b){b.1D(B,H).3W(d.2E.5V)});c.1p=a;c.1i=a+1;c.1q=a-1;b.5o();2F(14(){b.5B()},d.2E.5V+50);g(".1b-2g",c.1C).2H("1b-5i").eq(a).1F("1b-5i");b.5Y();d.2B&&2F(14(){c.3C=!1},55);d.2P||(c.2G.2k(c.2p).2k(c.46).2k(c.4i).2H("3Q"),0==c.1p&&c.2p.2k(c.46).1F("3Q"),c.1p>=c.1T-1&&c.2G.2k(c.4i).1F("3Q"));b.8g();"14"==1e d.1l.6r&&d.1l.6r.1n(b,b.1J)}},2a:14(a){19 b=11,c=b.1k,d=b.17,e=d.3K.1Z(),f=J(),h=d.2E.a5;if(c.3T||c.3U)1a!1;19 l="1i"==a?c.1i:c.1q;d.2B&&(c.3C=!0,p.2X.4f=d.2B+"/"+l);if("1i"==a){if(!b.1o[l])1a!1;19 k=c.2N,m=c.1Q,n=c.2M,C="1b-1q",y="1b-1i"}2i if("1q"==a){if(!b.1o[l])1a!1;k=c.2M;m=c.1Q;n=c.2N;C="1b-1i";y="1b-1q"}"14"==1e d.1l.7r&&d.1l.7r.1n(b,b.1J);"1i"==a?c.3T=!0:c.3U=!0;19 r=g("1c.1b-1S",m),v=g("1c.1b-1U",m);r.1h&&r.24().3W(h,14(){g(11).4I()});v.1h&&v.24().3W(h,14(){g(11).4I()});b.1o[l].1S&&(b.7w(b.1o[l],k),r=g("1c.1b-1S",k),v=1j(r.2n()/k.2n()*2l),d.1S.2W&&50>=v&&r.3g(h));if(r=b.1o[l].17.1U)b.7v(r,b.1o[l].1t,k),d.1U.2W&&g("1c.1b-1U",k).3g(d.2E.66);g.1Y([k,m,n],14(a,b){b.2H("1b-1i 1b-1q")});19 t=k.1A("3j"),r=f.1d-d.1M.5X,f=f.1f-d.1M.5W,v=t.5I.1d,q=t.5I.1f,u=t.a6,t=t.8c,w=1j(f/2-q/2-t.H-u.H/2),t=1j(r/2-v/2-t.W-u.W/2);k.1D(B,H).2x({1z:w,1x:t,2T:1},h,c.33?"2R":"5C",14(){k.1D(B,"")});g("1c.1b-23",k).2x({1d:v,1f:q},h,c.33?"2R":"5C");19 q=m.1A("3j"),x=q.3h,t=q.8c,v=q.5I.1d,q=q.5I.1f,v=1j(v*d.1M["1i"==a?"5K":"5L"]),q=1j(q*d.1M["1i"==a?"5K":"5L"]),w="1G"==e?1j(f/2-x.5z-q/2-t.H-u.H/2):1j(f-x.4G-t.H-u.H/2);"1q"==a?t="1G"==e?1j(r-x.4G-t.W-u.W/2):1j(r/2-v/2-t.W-x.5z-u.W/2):(w="1G"==e?w:1j(x.4G-t.H-q-u.H/2),t="1G"==e?1j(x.4G-t.W-v-u.W/2):1j(r/2-x.5z-v/2-t.W-u.W/2));g("1c.1b-23",m).2x({1d:v,1f:q},h,c.33?"2R":"5C");m.1F(C).1D(B,H).2x({1z:w,1x:t,2T:d.1M.6n},h,c.33?"2R":"5C",14(){m.1D(B,"");g(".1b-2g",c.1C).2H("1b-5i").eq(l).1F("1b-5i");b.5Y();b.1o[l]&&(c.3V=b.1o[l].17.3L?!1:!0,c.5n=b.1o[l].17.3M?!1:!0);c.33=!1;"1i"==a?(c.2N=n,c.2M=m,c.1Q=k,c.2N.1V(),c.1i+=1,c.1q=c.1p,c.1p+=1,d.2P&&(c.1p>c.1T-1&&(c.1p=0),c.1p==c.1T-1&&(c.1i=0),0==c.1p&&(c.1q=c.1T-1)),b.5o(),b.1o[c.1i]?b.5r(b.1o[c.1i],"1i"):c.3T=!1):(c.2M=n,c.2N=m,c.1Q=k,c.2M.1V(),c.1i=c.1p,c.1p=c.1q,c.1q=c.1p-1,d.2P&&(c.1p==c.1T-1&&(c.1i=0),0==c.1p&&(c.1q=c.1T-1)),b.5o(),b.1o[c.1q]?b.5r(b.1o[c.1q],"1q"):c.3U=!1);d.2B&&2F(14(){c.3C=!1},55);d.2P||(c.2G.2k(c.2p).2k(c.46).2k(c.4i).2H("3Q"),0==c.1p&&c.2p.2k(c.46).1F("3Q"),c.1p>=c.1T-1&&c.2G.2k(c.4i).1F("3Q"));b.3q();b.8g();"14"==1e d.1l.6r&&d.1l.6r.1n(b,b.1J)});w="1G"==e?F(n,"1z"):"1i"==a?1j(-(f/2)-n.2n()):1j(2*w);t="1G"==e?"1i"==a?1j(-(r/2)-n.3r()):1j(2*t):F(n,"1x");n.1D(B,H).2x({1z:w,1x:t,2T:d.1M.6o},h,c.33?"2R":"5C",14(){n.1D(B,"")}).1F(y)},7w:14(a,b){19 c=g(\'<1c 1w="1b-1S"></1c>\');a.1S&&(c.2J(a.1S),g("1c.1b-23",b).1L(c))},a7:14(a,b){19 c=11.17,d=p.2X.31;g.1Y(a,14(e,f){if(!f)1a!0;19 h,g;44(e.1Z()){1s"a8":h="3A://5f.a8.3e/a9.8Q?v=4&2h=bm&u={1t}";g="4H 1O en";1B;1s"ab":h="3A://ab.3e/ep?5y={1t}";g="4H 1O et";1B;1s"eu":h="ev://ew.ey.3e/a9?2j={1t}";g="4H 1O eA+";1B;1s"ae":h="3A://ae.3e/eC?2j={1t}";g="4H 1O eD";1B;1s"af":h="3A://af.3e/ag?eG=2&2j={1t}";g="4H 1O eH";1B;1s"7U":h="3A://7U.3e/ag?2j={1t}",g="4H 1O 7U"}a[e]={1t:f.1t&&N(d,f.1t)||c.2B&&p.2X.31||"3o"!==1e b&&d||b&&N(d,b)||d,4t:f.4t||h||f.1t&&N(d,f.1t)||b&&N(d,b),2U:f.2U||g||"4H 1O "+e,1d:"2L"==1e f.1d||bU(f.1d)?eJ:1j(f.1d),1f:f.1f||eK}});1a a},7v:14(a,b,c){19 d=g(\'<1c 1w="1b-1U"></1c>\'),e="<7S>";a=11.a7(a,b);g.1Y(a,14(a,b){a.1Z();19 c=b.4t.1r(/\\{1t\\}/g,7K(b.1t).1r(/!/g,"%21").1r(/\'/g,"%27").1r(/\\(/g,"%28").1r(/\\)/g,"%29").1r(/\\*/g,"%2A").1r(/%20/g,"+"));e+=\'<li 1w="\'+a+\'"><a 31="\'+c+\'" eM="ah:eO.aj(11.31\'+(0>=b.1d||0>=b.1f?"":", \'\', \'eQ=4C,1P=4C,eR=7T,eT=7T,1f="+b.1f+",1d="+b.1d+",1x=40,1z=40\'")+\');1a 2V;" 1K="\'+b.2U+\'" 8I="ak"></a></li>\'});e+="</7S>";d.2J(e);g("1c.1b-23",c).1L(d)},5q:14(){u.5F?u.7R()?u.5x(1y.3z):u.6T(1y.3z):11.8v()},8v:14(){19 a=11.1k,b=J(),c=11.17;if(c.3s){19 d=a.1Q,e=11.1o[a.1p],f=b.1d,h=b.1f,l=[d,a.2N,a.2M,a.2G,a.2p,a.1W,a.1P,a.1C,a.2t],b=[a.2N,a.2M,a.2G,a.2p,a.2t,a.1C];if(a.2C)a.2C=a.5A=a.3V=a.5n=!1,a.1W.1D({2T:11.17.1W.2T}),g.1Y(b,14(a,b){b.1v()}),a.73.2O("1K",c.2U.8C),d.1A({2o:d.1A("79"),2s:d.1A("7a"),79:1g,7a:1g}),g.1Y(l,14(a,b){b.2H("1b-3k")}),"14"==1e c.1l.am&&c.1l.am.1n(11,11.1J);2i{a.2C=a.5A=a.3V=a.5n=!0;a.1W.1D({2T:1});g.1Y(b,14(a,b){b.1V()});a.73.2O("1K",c.2U.ao);if(-1!=c.7o.1R(e.1m))d.1A({79:d.1A("2o"),7a:d.1A("2s"),2o:f,2s:h});2i{19 b=e.17.4y||c.4y||"",a=f,e=h,f=d.1A("2o"),k=d.1A("2s");"f5"==b.1Z()?(e=a/f*k,e<h&&(a=h/k*f,e=h)):"f6"==b.1Z()?(h=11.5U(a,e,f,k,!0),a=h.1d,e=h.1f):"f7"!=b.1Z()&&(h=11.5U(a,e,f,k,f>a||k>e?!0:!1),a=h.1d,e=h.1f);d.1A({79:d.1A("2o"),7a:d.1A("2s"),2o:a,2s:e})}g.1Y(l,14(a,b){b.1F("1b-3k")});"14"==1e c.1l.aq&&c.1l.aq.1n(11,11.1J)}}2i a.2C=a.2C?!1:!0;11.3q(!0)},3m:14(){19 a=11.1k,b=11.17;O.74(".1H");E.5t(".1H");a.2C&&u.5x(1y.3z);g(".1b-1W, .1b-1Q, .1b-1C").5t(".1H");b.1V.3Y?a.1W.24().3W(b.1V.2r,14(){a.1W.4I();a.3f.2H("1b-8J").5t(".1H")}):(a.1W.4I(),a.3f.2H("1b-8J").5t(".1H"));g.1Y([a.1P,a.1Q,a.2N,a.2M,a.2G,a.2p,a.2t,a.1C],14(a,b){b.8b("3i").4I()});a.6O=a.2C=!1;p.1H=1g;b.2B&&(a.3C=!0,ha(),2F(14(){a.3C=!1},55));"14"==1e b.1l.at&&b.1l.at.1n(11,11.1J)},3q:14(){19 a=11.1k,b=11.17,c=b.3K.1Z(),d=J(),e=d.1d,f=d.1f,d=a.2C&&b.3s||a.3v?0:"1G"==c?0:a.1C.3r(),h=a.3v?a.1P.2n():a.2C&&b.3s?0:"1G"==c?a.1C.2n():0,e=a.2C&&b.3s?e:e-b.1M.5X,f=a.2C&&b.3s?f:f-b.1M.5W,l="1G"==c?1j(11.1o[a.1i]||11.1o[a.1q]?2*(b.1M.65+b.1M.5G):30>=e/10?30:e/10):1j(30>=e/10?30:e/10)+d,k="1G"==c?1j(30>=f/10?30:f/10)+h:1j(11.1o[a.1i]||11.1o[a.1q]?2*(b.1M.65+b.1M.5G):30>=f/10?30:f/10),d={1m:"1p",1d:e,1f:f,5O:11.1o[a.1p],7I:l,7H:k,ax:d,aA:h,2x:2S.1h,1Q:a.1Q};11.6p(d);11.1o[a.1i]&&(d=g.3I(d,{1m:"1i",5O:11.1o[a.1i],4G:b.1M.65,5z:b.1M.aB,1Q:a.2N}),11.6p(d));11.1o[a.1q]&&(d=g.3I(d,{1m:"1q",5O:11.1o[a.1q],4G:b.1M.5G,5z:b.1M.aC,1Q:a.2M}),11.6p(d));b="1G"==c?{1x:1j(e/2-a.2t.3r()/2)}:{1z:1j(f/2-a.2t.2n()/2)};a.2t.1D(b)},6p:14(a){19 b=11.1k,c=11.17,d=c.3K.1Z(),e="1p"==a.1m?b.2C&&c.3s?a.1d:a.1d-a.7I:a.1d-a.7I,f="1p"==a.1m?b.2C&&c.3s?a.1f:a.1f-a.7H:a.1f-a.7H,h=a.5O,l=a.5O.17,k=a.1Q,m=a.4G||0,n=a.5z||0,p=a.ax,q=a.aA;"1p"==a.1m?("3b"==1e l.1d&&l.1d&&(e=b.2C&&c.3s&&(-1!=c.7o.1R(h.1m)||l.4y||c.4y)?e:l.1d>e?e:l.1d),"3b"==1e l.1f&&l.1f&&(f=b.2C&&c.3s&&(-1!=c.7o.1R(h.1m)||l.4y||c.4y)?f:l.1f>f?f:l.1f)):("3b"==1e l.1d&&l.1d&&(e=l.1d>e?e:l.1d),"3b"==1e l.1f&&l.1f&&(f=l.1f>f?f:l.1f));f=1j(f-g(".1b-4z-1P",k).2n());b="3o"==1e l.1d&&-1!=l.1d.1R("%")?ba(1j(l.1d.1r("%","")),a.1d):k.1A("2o");h="3o"==1e l.1f&&-1!=l.1f.1R("%")?ba(1j(l.1f.1r("%","")),a.1f):k.1A("2s");h="3o"==1e l.1d&&-1!=l.1d.1R("%")||"3o"==1e l.1f&&-1!=l.1f.1R("%")?{1d:b,1f:h}:11.5U(e,f,b,h);e=g.3I({},h,{});"1q"==a.1m||"1i"==a.1m?(b=1j(h.1d*("1i"==a.1m?c.1M.5L:c.1M.5K)),h=1j(h.1f*("1i"==a.1m?c.1M.5L:c.1M.5K))):(b=h.1d,h=h.1f);f=1j((F(k,"5v-1x")+F(k,"5v-5J")+F(k,"4b-1x-1d")+F(k,"4b-5J-1d"))/2);l=1j((F(k,"5v-1z")+F(k,"5v-aD")+F(k,"4b-1z-1d")+F(k,"4b-aD-1d")+g(".1b-4z-1P",k).2n())/2);44(a.1m){1s"1p":19 r=1j(a.1f/2-h/2-l-q/2),v=1j(a.1d/2-b/2-f-p/2);1B;1s"1i":r="1G"==d?1j(a.1f/2-n-h/2-l-q/2):1j(a.1f-m-l-q/2);v="1G"==d?1j(a.1d-m-f-p/2):1j(a.1d/2-b/2-f-n-p/2);1B;1s"1q":r="1G"==d?1j(a.1f/2-n-h/2-l-q/2):1j(m-l-h-q/2),v="1G"==d?1j(m-f-b-p/2):1j(a.1d/2-n-b/2-f-p/2)}k.1A("3j",{1z:r,1x:v,5I:e,8c:{W:f,H:l},a6:{W:p,H:q},3h:a});0<a.2x&&c.2E.6E?(k.1D(B,H).24().2x({1z:r,1x:v},c.2E.5T,"2R",14(){k.1D(B,"")}),g("1c.1b-23",k).24().2x({1d:b,1f:h},c.2E.5T,"2R"),g("1c.1b-4z-1P",k).24().2x({1d:b},c.2E.5T,"2R",14(){g(11).1D("9M","3c")})):(k.1D({1z:r,1x:v}),g("1c.1b-23",k).1D({1d:b,1f:h}),g("1c.1b-4z-1P",k).1D({1d:b}))},5Q:14(a){19 b=11,c=b.1k,d=b.17;!d.3H.7E||d.2c.3H&&1>=c.1T||a<c.4F||(c.4F=0,c.3w&&(c.3w=4J(c.3w)),c.3w=2F(14(){c.1p==c.1T-1?b.41(0):b.2a("1i")},d.3H.7E))},42:14(a){19 b=11.1k;a<b.4F||(b.4F=a||2l,b.3w&&(b.3w=4J(b.3w)))},8g:14(){19 a=11.1k;11.17.2c.3H&&a.3w&&!a.4F&&11.5Q()},5U:14(a,b,c,d,e){4k=a?b?Y(a/c,b/d):a/c:b/d;e||(4k>11.17.4r?4k=11.17.4r:4k<11.17.4W&&(4k=11.17.4W));a=11.17.7z?X(c*4k):a;b=11.17.7z?X(d*4k):b;1a{1d:a,1f:b,fq:4k}},5N:14(a){11.17=g.3I(!0,11.17,a||{});11.4E()},9n:14(){19 a=1y.5u("1I");11.3n={2v:!aP,2Z:0<=1j(j.4S("5R"))?!0:!1,9b:!(!a.4l||!a.4l("1I/48").1r(/4C/,"")),95:!(!a.4l||!a.4l("1I/3D").1r(/4C/,"")),92:!(!a.4l||!a.4l("1I/5m").1r(/4C/,"")),aG:!(!a.4l||!a.4l("1I/2Z").1r(/4C/,""))}},5b:14(a,b){19 c;44(b.1m){1s"1I":19 d=!1,e=b.97,f=b.17.2f;("1I/48"==e||"48"==b.2Y||"88"==b.2Y||f.aH)&&11.3n.9b?(b.2Y="48",b.1t=f.aH||b.1t):f.3D&&11.3n.95?(b.2Y="3D",b.1t=f.3D||b.1t):f.5m&&11.3n.92&&(b.2Y="7Y",b.1t=f.5m||b.1t);!11.3n.9b||"1I/48"!=e&&"48"!=b.2Y&&"88"!=b.2Y?!11.3n.95||"1I/3D"!=e&&"3D"!=b.2Y?!11.3n.92||"1I/5m"!=e&&"7Y"!=b.2Y?!11.3n.aG||"1I/2Z"!=e&&"bj"!=b.2Y&&"fC"!=b.2Y||(d=!0,e="1I/2Z"):(d=!0,e="1I/5m"):(d=!0,e="1I/3D"):(d=!0,e="1I/48");d?c=g("<1I />",{1d:"2l%",1f:"2l%",7m:f.7m,5w:f.5w,aI:f.aI,2c:f.2c}).1L(g("<4t />",{2h:b.1t,1m:e})):11.3n.2Z?(c=g("<3h />",{1m:"1I/2Z",4N:"3A://5f.6y.3e/2Z/7Q"}).2O({1A:b.1t,1d:"2l%",1f:"2l%"}).1L(g("<4g />",{2e:"2h",2K:b.1t})).1L(g("<4g />",{2e:"5w",2K:"2V"})).1L(g("<4g />",{2e:"aJ",2K:"2V"})).1L(g("<4g />",{2e:"aK",2K:"aL"})),D.7d&&(c=la(b.1t,"2l%","2l%","","fH","aL","fI","2V","fJ","2V"))):c=g("<2q />",{"1w":"1b-68",2J:11.17.69.8Z.1r("{4N}","3A://5f.6y.3e/2Z/7Q").1r("{1m}","5R")});1B;1s"2v":if(11.3n.2v){19 h="",l=0;b.17.8Y?g.1Y(b.17.8Y,14(a,b){0!=l&&(h+="&");h+=a+"="+7K(b);l++}):h=1g;c=g("<8z />").2O({1m:"5S/x-6H-2v",2h:b.1t,1d:"3b"==1e b.17.1d&&b.17.1d&&"1"==11.17.4W&&"1"==11.17.4r?b.17.1d:"2l%",1f:"3b"==1e b.17.1f&&b.17.1f&&"1"==11.17.4W&&"1"==11.17.4r?b.17.1f:"2l%",fO:"fP",fQ:"#fR",4v:"6I",aJ:"6I",fS:"6I",fT:"fU",aK:"fV",fW:"aN",aO:"6I",8Y:h,3k:"7T"})}2i c=g("<2q />",{"1w":"1b-68",2J:11.17.69.8Z.1r("{4N}","3A://5f.fY.3e/go/fZ").1r("{1m}","g0 g2 g3")});1B;1s"4e":c=g("<4e />").2O({1d:"3b"==1e b.17.1d&&b.17.1d&&"1"==11.17.4W&&"1"==11.17.4r?b.17.1d:"2l%",1f:"3b"==1e b.17.1f&&b.17.1f&&"1"==11.17.4W&&"1"==11.17.4r?b.17.1f:"2l%",2h:b.1t,g4:0,8h:0,8j:0,g5:z?"g6":"g7",g8:"",g9:"",aO:""});1B;1s"77":c=g(\'<1c 1w="1b-6x"></1c>\').2J(g(b.1t).62(!0));1B;1s"2J":d=b.1t,d[0].7y||(d=g(b.1t),d=d.3p?g("<1c>"+d+"</1c>"):d),c=g(\'<1c 1w="1b-6x"></1c>\').2J(d)}g("1c.1b-23",a).3Z().2J(c);"1I"===c[0].8R.1Z()&&D.4M&&2F(14(){19 a=c[0].aQ+"?"+M(gd*S());c[0].aQ=a;c[0].2h=a});1a c},9B:14(a,b){19 c=11,d=a.1t;c.5j();ia(d,14(a){c.4j();if(a){19 d={1h:!1};d.2j=a.2j;if(6F==a.5y){a=a.gg;19 e=a.1m,g=a.4t;d.4t=g.2h;d.1d=g.1d&&1j(g.1d)||0;d.1f=g.1f&&1j(g.1f)||0;d.1m=e;d.2g=g.2g||a.gh[0];d.2f=a.2f||{};d.1h=!0;"5S/x-6H-2v"==g.1m?d.1m="2v":-1!=g.1m.1R("1I/")?d.1m="1I":-1!=g.1m.1R("/2J")?d.1m="4e":-1!=g.1m.1R("2D/")&&(d.1m="2D")}2i if("2L"!=1e a.aR)5s a.aR;b.1n(11,d.1h?d:!1)}})},82:14(a){19 b=11.1k,c=11.17;a=U(a||p.2X.31).4f;19 d=a.25("/");b.3C||"#"+c.2B!=d[0]&&1<a.1h||(d[1]?(b=d[1]||0,11.1o[b]?(a=g(".1b-1W"),a.1h&&a.2O("9A")==c.2B?11.41(b):11.6G[b].6R(z?"3u":"5H")):(a=g(".1b-1W"),a.1h&&11.3m())):(a=g(".1b-1W"),a.1h&&11.3m()))}};g.fn.1H=14(){19 a=2S,b=g.gl(a[0])?a[0]:a[1],c=g.3F(a[0])||"3o"==1e a[0]?a[0]:a[1];b||(b={});19 b=g.3I(!0,{2O:"31",3K:"a4",3y:"gm",2B:!1,2P:!1,4m:0,9p:!1,7z:!0,4r:1,4W:.2,4o:!1,8O:!1,8N:!0,3s:!0,4y:1g,7o:"2v, 1I",1W:{9T:!0,2T:.85},2c:{6s:!1,3H:!1,1P:!0,3k:!0,2g:!0,3S:!0,3L:!0,3M:!0},3S:{1x:!0,5J:!0,6v:!0,9S:!0,9R:!0,9Q:!0},1v:{3Y:!0,2r:aT,1K:!0},1V:{3Y:!0,2r:aT},1S:{2W:!0,1v:"4T",1V:"5g"},1U:{2W:!0,1v:"4T",1V:"5g",91:!1},1M:{5X:0,5W:0,65:45,aB:0,6o:1,5L:1,5G:45,aC:0,6n:1,5K:1},1C:{94:gn,93:80,96:1,9c:.6},2E:{6E:!0,5T:6F,a5:a1,5V:gp,66:6F},3H:{7E:gq,9V:!1,9G:!0},2U:{4q:"gs gu 6j 4q",8C:"8F aU (aV+8F)",ao:"gy aU (aV+8F)",9m:"gz",1i:"gA",8w:"gB"},69:{4h:"aW 4Q aX aY aZ 6j 59 gG.",9N:"aW 4Q aX aY aZ 6j 59 gH.",8Z:"8D gJ aM gK gL 6j gM 8A b2 <a 31=\'{4N}\' 8I=\'ak\'>{1m} 6S</a>."},2Q:{2j:"",6V:14(a,b){},7h:!1,6J:14(a,b){},7k:!1,4Q:14(a,b,c){},6a:14(a,b,c){},7p:!0,7c:!1,7t:1g,78:1g,1m:"gQ"},1l:{}},b),d=g.3F(c)||"3o"==1e c?!0:!1,c=g.3F(c)?c:[];"3o"==1e a[0]&&(c[0]=a[0]);if(ja(g.fn.gR,"1.8",">=")){19 e=2y fa(g(11),b,c,d);1a{4q:14(){e.3m()},3k:14(){e.5q()},9C:14(){e.2a("1i")},9D:14(){e.2a("1q")},41:14(a){e.41(a)},4E:14(){e.4E()},6E:14(){0<2S.1h?e.3q(!0):e.3q()},5N:14(a){e.5N(a)},9E:14(){e.3m();e.7l()}}}5s"8D 8y 2w gT gU gV is gW gX. 1H 8A 8y 1.8+";};g.1H=14(a,b){1a g.fn.1H(a,b)};g.3I(g.gY,{7A:14(a,b,c,d,e){1a-d*(P(1-(b/=e)*b)-1)+c},2R:14(a,b,c,d,e){1a d*P(1-(b=b/e-1)*b)+c},5C:14(a,b,c,d,e){1a 1>(b/=e/2)?-d/2*(P(1-b*b)-1)+c:d/2*(P(1-(b-=2)*b)+1)+c}});(14(){g.1Y("7q 9i 99 gZ h0 3M h1 h2 h3 h4".25(" "),14(a,b){g.fn[b]=14(a){1a a?11.4p(b,a):11.6R(b)};g.b5&&(g.b5[b]=!0)});g.4D.b6.3u={b7:14(){19 a=11,b=g(11),c,d;b.4p("7q.8s",14(e){c=L();b.8i("99.8s",14(b){d=L();b=g.4D.hb(b||p.4D);b.1m="3u";c&&d&&c.x==d.x&&c.y==d.y&&(g.4D.hc||g.4D.he).1n(a,b);c=d=Q})})},b8:14(){g(11).74("7q.8s")}}})();(14(){u={5F:!1,7R:14(){1a!1},6T:14(){},5x:14(){},8H:"",3x:""};86=["4M","bc","o","8n","hk"];if("2L"!=1e 1y.5x)u.5F=!0;2i 1u(19 a=0,b=86.1h;a<b;a++)if(u.3x=86[a],"2L"!=1e 1y[u.3x+"bd"]){u.5F=!0;1B}u.5F&&(u.8H=u.3x+"hm",u.7R=14(){44(11.3x){1s"":1a 1y.hn;1s"4M":1a 1y.ho;7F:1a 1y[11.3x+"hq"]}},u.6T=14(a){1a""===11.3x?a.6T():a[11.3x+"hr"]()},u.5x=14(a){1a""===11.3x?1y.5x():1y[11.3x+"bd"]()})})();(14(){19 a,b;a=5p.8m;a=a.1Z();b=/(bf)[ \\/]([\\w.]+)/.4R(a)||/(4M)[ \\/]([\\w.]+)/.4R(a)||/(8q)(?:.*2w|)[ \\/]([\\w.]+)/.4R(a)||/(7d) ([\\w.]+)/.4R(a)||0>a.1R("hx")&&/(hy)(?:.*? bg:([\\w.]+)|)/.4R(a)||[];a=b[1]||"";b=b[2]||"0";D={};a&&(D[a]=!0,D.2w=b);D.bf?D.4M=!0:D.4M&&(D.hA=!0)})();(14(){14 a(a){1u(19 d=0,f=b.1h;d<f;d++){19 h=b[d]?b[d]+a.4n(0).hB()+a.72(1):a;if(c.3i[h]!==Q)1a h}}19 b=["","4M","bc","8n","o"],c=1y.5u("1c");B=a("hC")||"";H=a("hD")?"hE(0) ":""})();19 j={2w:"0.7.9",2e:"hF",bh:14(a,b,c){1a 14(){a(b,c)}},5l:"<",4O:14(a){1a"2L"!=1e a},3F:14(a){1a/hJ/i.1E(7b.3X.7O.1n(a))},4X:14(a){1a"14"==1e a},4K:14(a){1a"3o"==1e a},5Z:14(a){1a"3b"==1e a},43:14(a){1a"3o"==1e a&&/\\d/.1E(a)},bk:/[\\d][\\d\\.\\6h,-]*/,35:/[\\.\\6h,-]/g,5k:14(a,b){19 c=11.43(a)?(11.4O(b)?2y 2z(b):11.bk).4R(a):1g;1a c?c[0]:1g},3N:14(a,b,c){19 d=1j;if(11.43(a)&&11.43(b)){if(11.4O(c)&&c.3N)1a c.3N(a,b);a=a.25(11.35);b=b.25(11.35);1u(c=0;c<Y(a.1h,b.1h);c++){if(d(a[c],10)>d(b[c],10))1a 1;if(d(a[c],10)<d(b[c],10))1a-1}}1a 0},3J:14(a,b){19 c,d;if(!11.43(a))1a 1g;11.5Z(b)||(b=4);b--;d=a.1r(/\\s/g,"").25(11.35).63(["0","0","0","0"]);1u(c=0;4>c;c++)if(/^(0+)(.+)$/.1E(d[c])&&(d[c]=2z.$2),c>b||!/\\d/.1E(d[c]))d[c]="0";1a d.72(0,4).58(",")},$$64:14(a){1a 14(b){if(!a.3P&&b){19 c,d,e=a.3F(b)?b:a.4K(b)?[b]:[];1u(d=0;d<e.1h;d++)if(a.4K(e[d])&&/[^\\s]/.1E(e[d])&&(c=(b=5p.hZ[e[d]])?b.7u:0)&&(c.2e||c.4s))1a b}1a 1g}},9a:14(a,b,c){a=2y 2z(a,"i");b=!11.4O(b)||b?/\\d/:0;c=c?2y 2z(c,"i"):0;19 d=5p.3n,e,f,h;1u(e=0;e<d.1h;e++)if(h=d[e].4s||"",f=d[e].2e||"",a.1E(h)&&(!b||b.1E(2z.bn+2z.bo))||a.1E(f)&&(!b||b.1E(2z.bn+2z.bo)))if(!c||!c.1E(h)&&!c.1E(f))1a d[e];1a 1g},i5:14(a,b,c){19 d;b=2y 2z(b,"i");c=c?2y 2z(c,"i"):0;19 e,f,h=11.4K(a)?[a]:a;1u(f=0;f<h.1h;f++)if((d=11.64(h[f]))&&(d=d.7u)&&(e=d.4s||"",a=d.2e||"",b.1E(e)||b.1E(a))&&(!c||!c.1E(e)&&!c.1E(a)))1a d;1a 0},8X:14(a,b){19 c,d,e,f,h=-1;if(2<11.6m||!a||!a.2w||!(c=11.5k(a.2w)))1a b;if(!b)1a c;c=11.3J(c);b=11.3J(b);d=b.25(11.35);e=c.25(11.35);1u(f=0;f<d.1h;f++)if(-1<h&&f>h&&"0"!=d[f]||e[f]!=d[f]&&(-1==h&&(h=f),"0"!=d[f]))1a b;1a c},bp:p.i9,3R:14(a){19 b=1g;2d{b=2y 11.bp(a)}26(c){}1a b},bq:14(a){19 b,c,d=/^[\\$][\\$]/;1u(b in a)if(d.1E(b))2d{c=b.72(2),0<c.1h&&!a[c]&&(a[c]=a[b](a),6b a[b])}26(e){}},6q:14(a,b,c){19 d;if(a){if(1==a[b[0]]||c)1u(d=0;d<b.1h;d+=2)a[b[d]]=b[d+1];1u(d in a)(c=a[d])&&1==c[b[0]]&&11.6q(c,b)}},bs:14(){19 a=5p,b,c=1y,d=a.8m||"",e=a.b9||"",f=a.il||"",a=a.im||"";11.6q(11,["$",11]);1u(b in 11.5h)11.5h[b]&&11.6q(11.5h[b],["$",11,"$$",11.5h[b]],1);11.bq(11);11.6m=2l;if(f){19 h=["8K",1,"ir",2,"iu",3,"iv",4,"b4",21.1,"b0",21.2,"b1",21.3,"8K.*iw",22.1,"8K.*iy",22.2,"iz\\\\s*iA",22.3,"",2l];1u(b=h.1h-2;0<=b;b-=2)if(h[b]&&(2y 2z(h[b],"i")).1E(f)){11.6m=h[b+1];1B}}11.34=c.6t("34")[0]||c.6t("2I")[0]||c.2I||1g;11.67=(11.3P=(2y iE("1a/*@iF!@*/!1"))())&&/iG\\s*(\\d+\\.?\\d*)/i.1E(d)?7X(2z.$1,10):1g;11.7W=11.7J=1g;if(11.3P){b=1y.5u("1c");2d{b.3i.iK="2j(#7F#iM)",11.7J=b.iN("{iO-iP-7G-iR-iS}","iT").1r(/,/g,".")}26(l){}b=7X(11.7J||"0",10);11.7W=c.by||(/iV/i.1E(c.iW||"")?5:b)||11.67;11.67=b||11.7W}11.6A=!1;if(11.3P)1u(c="bA.iY bA.iZ j0.j1 6B.6B bC.bC j3.j4 j5.j6 j7.j8".25(" "),b=0;b<c.1h;b++)if(11.3R(c[b])){11.6A=!0;1B}11.j9=(11.jb=/bD/i.1E(a)&&/bD\\s*\\/\\s*\\d/i.1E(d))?11.3J(/bg\\s*\\:\\s*([\\.\\,\\d]+)/i.1E(d)?2z.$1:"0.9"):1g;11.jd=(11.bE=/jf\\s*\\/\\s*(\\d[\\d\\.]*)/i.1E(d))?11.3J(2z.$1):1g;11.jg=(11.jh=(/ji/i.1E(e)||!e&&!11.bE)&&/jj\\s*\\/\\s*(\\d[\\d\\.]*)/i.1E(d))&&/bF\\s*\\/\\s*(\\d[\\d\\.]*)/i.1E(d)?11.3J(2z.$1):1g;11.jl=(11.jm=/aS\\s*[\\/]?\\s*(\\d+\\.?\\d*)/i.1E(d))&&(/bF\\s*\\/\\s*(\\d+\\.?\\d*)/i.1E(d),1)?7X(2z.$1,10):1g;11.bG("59",11.bh(11.bH,11))},bI:14(a){19 b,c={5y:-3,6S:0};if(!11.4K(a))1a c;if(1==a.1h)1a 11.7C=a,c;a=a.1Z().1r(/\\s/g,"");b=11.5h[a];if(!b||!b.4S)1a c;c.6S=b;11.4O(b.5e)||(b.5e=1g,b.2w=1g,b.bK=1g,b.5d=1g,b.jt=a);11.8P=!1;if(11.3P&&!11.6A&&"jv"!==a)1a c.5y=-2,c;c.5y=1;1a c},bL:14(a,b){11.3F(b)&&(11.4X(a)||11.3F(a)&&0<a.1h&&11.4X(a[0]))&&b.4A(a)},6d:14(a){19 b;if(11.3F(a))1u(b=0;b<a.1h&&1g!==a[b];b++)11.1n(a[b]),a[b]=1g},1n:14(a){19 b=11.3F(a)?a.1h:-1;if(0<b&&11.4X(a[0]))a[0](11,1<b?a[1]:0,2<b?a[2]:0,3<b?a[3]:0);2i 11.4X(a)&&a(11)},7C:",",$$4S:14(a){1a 14(b,c,d){b=a.bI(b);if(0>b.5y)1a 1g;b=b.6S;1!=b.5d&&(b.4S(1g,c,d),1g===b.5d&&(b.5d=1));a.bM();1a c=(c=b.2w||b.bK)?c.1r(a.35,a.7C):c}},bM:14(){11.8P&&11.4O(p.bN)&&p.bN()},7D:14(a,b){19 c=!1,d=\'<3h 1d="1" 1f="1" 3i="6P:51" \'+a.bP(b)+">"+a.bQ+11.5l+"/3h>";if(!11.34)1a c;11.34.bR(1y.5u("3h"),11.34.36);11.34.36.7B=d;2d{11.34.36.6D=a.6Q}26(e){}2d{11.34.36.3h&&(c=!0)}26(e){}2d{c&&4>11.34.36.bT&&(11.8P=!0)}26(e){}11.34.6e(11.34.36);1a c},6f:14(a,b){19 c=11;if(!c.6A||!a)1a 1g;a.6g&&a.6g.1h&&1g!==a.6g[a.6g.1h-1]&&c.6d(a.6g);19 d,e=a.8e;if(c.43(b)){if(e.6i&&e.3G&&0>=c.3N(b,e.3G))1a!0;if(e.6i&&e.3B&&0<=c.3N(b,e.3B))1a!1;(d=c.7D(a,b))&&(!e.3G||0<c.3N(b,e.3G))&&(e.3G=b);d||e.3B&&!(0>c.3N(b,e.3B))||(e.3B=b);1a d}19 f=[0,0,0,0],h=[].63(e.8d),g=e.3G?1:0,k,m,n=14(b,d){19 e=[].63(f);e[b]=d;1a c.7D(a,e.58(","))};if(e.3B){d=e.3B.25(c.35);1u(k=0;k<d.1h;k++)d[k]=1j(d[k],10);d[0]<h[0]&&(h[0]=d[0])}if(e.3G){m=e.3G.25(c.35);1u(k=0;k<m.1h;k++)m[k]=1j(m[k],10);m[0]>f[0]&&(f[0]=m[0])}if(m&&d)1u(k=1;k<m.1h&&m[k-1]==d[k-1];k++)d[k]<h[k]&&(h[k]=d[k]),m[k]>f[k]&&(f[k]=m[k]);if(e.3B)1u(k=1;k<h.1h;k++)if(0<d[k]&&0==h[k]&&h[k-1]<e.8d[k-1]){h[k-1]+=1;1B}1u(k=0;k<h.1h;k++){m={};1u(e=0;20>e&&!(1>h[k]-f[k]);e++){d=X((h[k]+f[k])/2);if(m["a"+d])1B;m["a"+d]=1;n(k,d)?(f[k]=d,g=1):h[k]=d}h[k]=f[k];!g&&n(k,f[k])&&(g=1);if(!g)1B}1a g?f.58(","):1g},bG:14(a,b){19 c;11.4X(b)&&(p.bW?p.bW(a,b,!1):p.bX?p.bX("1O"+a,b):(c=p["1O"+a],p["1O"+a]=11.bY(b,c)))},bY:14(a,b){1a 14(){a();"14"==1e b&&b()}},bZ:[],4L:[],bH:14(a){a.3d=!0;a.6d(a.bZ);a.6d(a.4L);if(a.7V)a.7V()},3d:!1,$$jP:14(a){1a 14(b){a.3d?a.1n(b):a.bL(b,a.4L)}},1c:1g,6Y:"jR",c1:50,3l:1,c2:14(){19 a,b,c,d;if(11.1c&&11.1c.57)1u(a=11.1c.57.1h-1;0<=a;a--){if((c=11.1c.57[a])&&c.57)1u(b=c.57.1h-1;0<=b;b--){d=c.57[b];2d{c.6e(d)}26(e){}}if(c)2d{11.1c.6e(c)}26(e){}}!11.1c&&(a=1y.7N(11.6Y))&&(11.1c=a);if(11.1c&&11.1c.9e){2d{11.1c.9e.6e(11.1c)}26(e){}11.1c=1g}},7M:[],7V:14(){19 a,b;if(11.3d&&(!11.4L||!11.4L.1h||1g===11.4L[11.4L.1h-1])){1u(a in 11)if((b=11[a])&&b.7e&&(3==b.k1||b.7e.1h&&1g!==b.7e[b.7e.1h-1]))1a;1u(a=0;a<11.7M.1h;a++)11.6d(11.7M);11.c2()}},7f:14(a){1a a&&(a=a.k3||a.k4,11.5Z(a))?a:-1},k5:14(a,b,c,d){19 e=a.2q,f=11.7f(e);c=c.2q;19 g=11.7f(c);b=b.2q;19 l=11.7f(b);if(!(e&&c&&b&&11.7g(a)))1a-2;if(g<l||0>f||0>g||0>l||l<=11.3l||1>11.3l)1a 0;if(f>=l)1a-1;2d{if(f==11.3l&&(!11.3P||4==11.7g(a).bT)&&(!a.3d&&11.3d||a.3d&&11.5Z(d)&&(11.5Z(a.8T)||(a.8T=d),10<=d-a.8T)))1a 1}26(k){}1a 0},7g:14(a,b){19 c=a?a.2q:0,d=c&&c.36?1:0;2d{d&&b&&11.1c.k8()}26(e){}1a d?c.36:1g},7j:14(a,b){19 c=a.3i,d;if(c&&b)1u(d=0;d<b.1h;d+=2)2d{c[b[d]]=b[d+1]}26(e){}},c5:14(a,b){19 c=1g,d=b?p.1z.1y:p.1y,e=d.6t("2I")[0]||d.2I;if(!e)2d{d.c6(\'<1c id="c7">.\'+11.5l+"/1c>"),c=d.7N("c7")}26(f){}if(e=d.6t("2I")[0]||d.2I)e.bR(a,e.36),c&&e.6e(c)},c8:14(a,b,c,d,e){e=1y;19 f,g=e.5u("2q"),l,k="kf 51 kg 51 5v 4Z c9 4Z cb 3c".25(" ");11.4O(d)||(d="");if(11.4K(a)&&/[^\\s]/.1E(a)){a=a.1Z().1r(/\\s/g,"");f=11.5l+a+\' 1d="\'+11.3l+\'" 1f="\'+11.3l+\'" \';f+=\'3i="kk-3i:51;4b-3i:51;5v:4Z;c9:4Z;cb:3c;6P:77;" \';1u(l=0;l<b.1h;l+=2)/[^\\s]/.1E(b[l+1])&&(f+=b[l]+\'="\'+b[l+1]+\'" \');f+=">";1u(l=0;l<c.1h;l+=2)/[^\\s]/.1E(c[l+1])&&(f+=11.5l+\'4g 2e="\'+c[l]+\'" 2K="\'+c[l+1]+\'" />\');f+=d+11.5l+"/"+a+">"}2i f=d;11.1c||((b=e.7N(11.6Y))?11.1c=b:(11.1c=e.5u("1c"),11.1c.id=11.6Y),11.7j(11.1c,k.63(["1d",11.c1+"4U","1f",11.3l+3+"4U","cc",11.3l+3+"4U","cd",11.3l+3+"4U","cf","cg","6P","kp"])),b||(11.7j(11.1c,"7Z kq 5J 4Z 1z 4Z".25(" ")),11.c5(11.1c)));if(11.1c&&11.1c.9e){11.7j(g,k.63(["cc",11.3l+3+"4U","cd",11.3l+3+"4U","cf","cg","6P","77"]));2d{g.kr=f}26(m){}2d{11.1c.ks(g)}26(m){}1a{2q:g,3d:11.3d,8R:a,7B:f}}1a{2q:1g,3d:11.3d,8R:"",7B:f}},5h:{2Z:{4V:["1I/2Z","5S/x-ku","2D/x-kv","2D/x-2Z"],3E:"kx.ky.1",kz:"5R.5R",6Q:"6C:bJ-bB-bz-bx-bv",8x:7,bQ:\'<4g 2e="2h" 2K="" /><4g 2e="kB" 2K="2V" />\',bP:14(a){1a\'6w="#2w=\'+a+\'"\'},8e:{3G:0,3B:0,6i:0,8d:[16,cj,cj,0]},4S:14(a){19 b=11.$,c=1g,d=1g;if(b.3P){b.43(a)&&(a=a.25(b.35),3<a.1h&&0<1j(a[3],10)&&(a[3]="kE"),a=a.58(","));if(b.43(a)&&b.67>=11.8x&&0<11.7L()){11.5e=11.cl(a);11.5d=0;1a}11.5d=1;!c&&b.67>=11.8x&&(c=11.cm(b.6f(11)));c||(d=b.3R(11.3E))&&d.cn&&(c=d.cn.7O(16),c=1j(c.4n(0),16)+"."+1j(c.4n(1),16)+"."+1j(c.4n(2),16))}2i b.64(11.4V)&&(d=3!=b.6m?b.9a("5R.*kH-?in",0):1g)&&d.2e&&(c=b.5k(d.2e));11.5e=c?1:d?0:-1;11.2w=b.3J(c,3)},8r:["7,60,0,0","0,0,0,0"],7P:["7,50,0,0",1g],8M:[14(a,b){19 c=b.25(a.$.35);1a[c[0],c[1].4n(0),c[1].4n(1),c[2]].58()},1g],cm:14(a){19 b=11.$,c,d=11.8r,e=11.7P;if(a)1u(a=b.3J(a),c=0;c<d.1h;c++)if(d[c]&&0>b.3N(a,d[c])&&e[c]&&0<=b.3N(a,e[c])&&11.8M[c])1a 11.8M[c](11,a);1a a},7L:14(){19 a=11.$,b,c=11.7L,d=11.8r,e=11.7P;if(!c.2K)1u(c.2K=-1,b=0;b<d.1h;b++){if(d[b]&&a.6f(11,d[b])){c.2K=1;1B}if(e[b]&&a.6f(11,e[b])){c.2K=-1;1B}}11.8e.6i=1==c.2K?1:0;1a c.2K},cl:14(a){1a 11.$.6f(11,a)?.7:-1}},2v:{4V:"5S/x-6H-2v",3E:"6B.6B",6Q:"6C:kL-kM-7G-kN-cp",4S:14(){19 a=14(a){1a a?(a=/[\\d][\\d\\,\\.\\s]*[cq]{0,1}[\\d\\,]*/.4R(a))?a[0].1r(/[cq\\.]/g,",").1r(/\\s/g,""):1g:1g},b=11.$,c,d=1g,e=1g,f=1g;if(b.3P){1u(c=15;2<c;c--)if(e=b.3R(11.3E+"."+c)){f=c.7O();1B}e||(e=b.3R(11.3E));if("6"==f)2d{e.kP="aN"}26(h){1a"6,0,21,0"}2d{d=a(e.cs("$2w"))}26(h){}!d&&f&&(d=f)}2i{if(e=b.64(11.4V)){c=b.7g(b.c8("3h",["1m",11.4V],[],"",11));2d{d=b.5k(c.cs("$2w"))}26(h){}}d||((c=e?e.7u:1g)&&c.4s&&(d=a(c.4s)),d&&(d=b.8X(c,d)))}11.5e=d?1:-1;11.2w=b.3J(d);1a!0}},6H:{4V:"5S/x-kQ",3E:"ct.ct",6Q:"6C:kS-kT-7G-kU-cp",4S:14(){19 a=1g,b=1g,c=11.$;if(c.3P){2d{b=c.3R(11.3E).kV("")}26(d){}c.4K(b)&&0<b.1h?a=c.5k(b):c.3R(11.3E+".8")?a="8":c.3R(11.3E+".7")?a="7":c.3R(11.3E+".1")&&(a="6")}2i(b=c.9a("kW\\\\s*1u\\\\s*kX"))&&b.4s&&c.64(11.4V)&&(a=c.5k(b.4s)),a&&(a=c.8X(b,a));11.5e=a?1:-1;11.2w=c.3J(a)}},9t:0}};j.bs();19 o=\'8D "%%" 14 8A an kY 3b kZ 2S.\\l0 l1 be in b2 l3 "l4", "l5", ...\',q=1g;(14(){14 a(a){a=a||2X.31;1a"#"+a.1r(/^[^#]*#?(.*)$/,"$1")}19 b=1y,c,d=g.4D.b6,e=b.by,f="l6"in p&&(cu 0===e||7<e);g.fn.3a=14(a){1a a?11.4p("3a",a):11.6R("3a")};g.fn.3a.cv=50;d.3a=g.3I(d.3a,{b7:14(){if(f)1a!1;g(c.2W)},b8:14(){if(f)1a!1;g(c.24)}});c=14(){14 c(){19 b=a(),d=u(m);b!==m?(q(m=b,d),g(p).6R("3a")):d!==m&&(2X.31=2X.31.1r(/#.*/,"")+d);e=2F(c,g.fn.3a.cv)}19 d={},e,m=a(),n=14(a){1a a},q=n,u=n;d.2W=14(){e||c()};d.24=14(){e&&4J(e);e=cu 0};D.7d&&!f&&14(){19 e,f;d.2W=14(){e||(f=(f=g.fn.3a.2h)&&f+a(),e=g(\'<4e 6u="-1" 1K="3Z"/>\').1V().8i("59",14(){f||q(a());c()}).2O("2h",f||"ah:0").l8("2I")[0].l9,b.lc=14(){2d{"1K"===4D.ld&&(e.1y.1K=b.1K)}26(t){}})};d.24=n;u=14(){1a a(e.2X.31)};q=14(a,c){19 d=e.1y,f=g.fn.3a.cw;a!==c&&(d.1K=b.1K,d.aj(),f&&d.c6(\'<9g>1y.cw="\'+f+\'"\\lj/9g>\'),d.4q(),e.2X.4f=a)}}();1a d}()})();4Y.3X.5M||(4Y.3X.5M=14(a,b){if(1g==11)5s 2y 7s;19 c=7b(11),d=c.1h>>>0;if("14"!=1e a)5s 2y 7s;1u(19 e=[],f=0;f<d;f++)if(f in c){19 g=c[f];a.1n(b,g,f,c)&&e.4A(g)}1a e});4Y.3X.1R||(4Y.3X.1R=14(a,b){19 c;if(1g==11)5s 2y 7s(\'"11" is 1g lo 8t lp\');19 d=7b(11),e=d.1h>>>0;if(0===e)1a-1;c=+b||0;lq===I(c)&&(c=0);if(c>=e)1a-1;1u(c=ca(0<=c?c:e-I(c),0);c<e;){if(c in d&&d[c]===a)1a c;c++}1a-1});4Y.3X.71||(4Y.3X.71=14(a){if(1g==11)5s 2y 7s;19 b=7b(11),c=b.1h>>>0;if(0===c)1a-1;19 d=c;1<2S.1h&&(d=lr(2S[1]),d!=d?d=0:0!=d&&d!=1/0&&d!=-(1/0)&&(d=(0<d||-1)*M(I(d))));1u(c=0<=d?Y(d,c-1):c-I(d);0<=c;c--)if(c in b&&b[c]===a)1a c;1a-1})})(8y,11);',
62,1330,"                                                               this   function   options  var return ilightbox div width typeof height null length next parseInt vars callback type call items current prev replace case URL for show class left document top data break thumbnails css test addClass horizontal iLightBox video ui title append styles onRender on toolbar holder indexOf caption total social hide overlay onAfterLoad each toLowerCase    container stop split catch    moveTo onBeforeLoad controls try name html5video thumbnail src else url add 100 coords outerHeight naturalWidth prevButton span speed naturalHeight loader onShow flash version animate new RegExp  linkId isInFullScreen image effects setTimeout nextButton removeClass body html value undefined prevPhoto nextPhoto attr infinite ajaxSetup easeOutCirc arguments opacity text false start location ext quicktime  href  isSwipe head splitNumRegx firstChild    iLightBoxHashChange number visible winLoaded com BODY fadeIn object style offset fullscreen pluginSize closeAction plugins string selector repositionPhoto outerWidth fullAlone pathname itap isMobile cycleID prefix skin documentElement http max hashLock webm progID isArray min slideshow extend formatNum path mousewheel swipe compareNums configureHolder isIE disabled getAXO keyboard nextLock prevLock lockWheel fadeOut prototype effect empty  goTo pause isStrNum switch  innerPrevButton  mp4  loadRequests border context button iframe hash param loadImage innerNextButton hideLoader factor canPlayType startFrom charAt innerToolbar bind close maxScale description source authority play scrollLeft scrollTop fullViewPort inner push mouseID no event refresh isPaused offsetX Share remove clearTimeout isString WLfuncs webkit pluginspage isDefined Math error exec getVersion mouseenter px mimeType minScale isFunc Array 0px  none     protocol childNodes join load ondragstart addContent obj getVersionDone installed www mouseleave Plugins active showLoader getNum openTag ogg lockSwipe createUI navigator fullScreenAction loadContent throw off createElement padding autoplay cancelFullScreen status offsetY lockKey generateBoxes easeInOutCirc time generateThumbnails supportsFullScreen prevOffsetX click newDims right prevScale nextScale filter setOption item 01 resume QuickTime application repositionSpeed getNewDimenstions loadedFadeSpeed pageOffsetY pageOffsetX positionThumbnails isNum   clone concat hasMimeType nextOffsetX fadeSpeed verIE alert errors success delete emb callArray removeChild codebaseSearch BIfuncs _ match to getAttribute icon OS prevOpacity nextOpacity repositionEl initObj onAfterChange arrows getElementsByTagName tabindex up codebase wrapper apple originalEvent ActiveXEnabled ShockwaveFlash clsid classid reposition 200 itemsObject shockwave true complete touches substring thumbs grid dontGenerateThumbs display classID trigger plugin requestFullScreen patchEvents beforeSend supportTouch pl divID php_js  lastIndexOf slice fullScreenButton unbind addContents search inline password naturalWidthOld naturalHeightOld Object ifModified msie funcs getWidth getDOMobj cache ajax setStyle crossDomain dispatchItemsEvents preload scrollTo fullStretchTypes global touchstart onBeforeChange TypeError username enabledPlugin setSocial setCaption img nodeName keepAspectRatio easeInCirc outerHTML getVersionDelimiter isActiveXObject pauseTime default 11CF offsetH offsetW verIEfull encodeURIComponent canUseIsMin DONEfuncs getElementById toString cdbaseLower download isFullScreen ul yes reddit onDoneEmptyDiv docModeIE parseFloat ogv position   hashChangeHandler  patchItemsEvents  browserPrefixes normalizeItems m4v hideableElements mo removeAttr diff digits SEARCH mobileMaxWidth resetCycle hspace one vspace pop align userAgent ms preventDefault hasClass opera cdbaseUpper iTap not ma doFullscreen previous minIEver jQuery embed requires innerPlayButton enterFullscreen The ny Enter verticalDistanceThreshold fullScreenEventName target noscroll Win te cdbase2ver mobileOptimizer smartRecognition garbage php tagName dataType count attachItems dims index getPluginFileVersion flashvars missingPlugin  buttons html5Vorbis maxHeight maxWidth html5WebM normalOpacity videoType  touchend findNavPlugin html5H264 activeOpacity oa parentNode mobile script pa touchmove mousemove instant closeButton slideShow availPlugins se randomStart instantCall 30px 192px zz ts ri mc 1280 720 recognized linkid ogpRecognition moveNext movePrev destroy ta startPaused pt onOpen loadSwitcher element nd overflow loadContents fadeTo setTime shift_enter esc down blur oo pauseOnHover wa Date getTime pageX pageY 500 closedhand 1E3 vertical switchSpeed thumbsOffset normalizeSocial facebook share  twitter   delicious digg submit javascript  open _blank  onExitFullScreen  exitFullscreen os onEnterFullScreen   onHide    thumbsOffsetW   thumbsOffsetH nextOffsetY prevOffsetY bottom iris od html5QuickTime h264 poster loop scale tofit your always allowFullScreen na currentSrc response Opera 300 Fullscreen Shift An occurred when trying iPod iPad the  iPhone attrFn special setup teardown vendor   moz CancelFullScreen  chrome rv handler  mov getNumRegx   leftContext rightContext AXO convertFuncs  initScript noexternaldata accesskey D3488ABDDC6B  BC80 documentMode 4B23 Msxml2 8C17 TDCCtl Gecko isChrome Version addWinEvent runWLfuncs init 02BF25D5 version0 fPush cleanup CollectGarbage pageYOffset getCodeBaseVersion HTML insertBefore ne readyState isNaN rc addEventListener attachEvent winHandler WLfuncs0 ENV divWidth emptyDiv 3E3 background insertDivInBody write pd33993399 insertHTML margin  visibility fontSize lineHeight  verticalAlign baseline  jsonp 128  isMin CDBASE2VER QuickTimeVersion  444553540000 rRdD  GetVariable SWCtl void delay domain phone hei floor hcit haie un gene g560 prepend random vk rg fly fetc ze 400 esl8 vi veri children dmob dica devi dbte ng yas craw v750 mp cmd cldc v400 hidden chtm cell utst appendTo cdm ccwa  capi  c55  si bumb rd  tx nq m5 m3 whit  float avan attw  Image onload onerror onabort us sh aptu yw resize tim 2E3 keydown tel keyCode shiftKey tdg tcl amoi 00 zeto t6 rn zte t2 mb sy sp abac 802s 770s 4thp substr so t5 sm sl 3gso sk sie 6590 6310 1207 shar  xiino sgh xda windows wap vodafone link sdk sc browser   Facebook va home   treo Twitter googleplus https plus  google  Google mm post Delicious sa dragger phase Digg symbian 640 360 s55 onclick zo window ve menubar resizable series scrollbars ro psp pocket plucker re ixi wi rim9 raks r600 palm fill fit stretch 980 r380  ob netfront firefox qtek mmp 07 qc midp qa maemo lge kindle  psio prox ratio hone webc  iemobile hiptop fennec elaine compal blazer blackberry w3c qt nc rt po pn SCALE AUTOPLAY LOOP bada avantgo uc meego quality high bgcolor 000000 menu wmode transparent showall allowScriptAccess pire adobe getflash Adobe  Flash player frameborder scrolling auto scroll webkitAllowFullScreen mozallowfullscreen android mouseover mouseout 3E4   results images Mini phil IEMobile isPlainObject dark 120  180 5E3  Press  Esc BlackBerry pg pdxg Exit Slideshow Next Previous pan p800 owg1 oran photo contents wv content are attempting view ti op o2im GET jquery webOS that was loaded too old easing tap taphold swipeleft swiperight scrollstart scrollstop nzph Android nok wt ontouchstart  fix dispatch  handle wg wf 3gp  tf khtml n7 fullscreenchange fullScreen webkitIsFullScreen  FullScreen RequestFullScreen    mousedown movie compatible mozilla n50 safari toUpperCase transform perspective translateZ PluginDetect n30 mpeg mpg array n20 avi txt shtml rhtml rb n10 phtml php5 php4 php3 jsp htm cfm cgi mimeTypes aspx asp jpe nw mywa getMimeEnabledPlugin jfif tif mwbp ActiveXObject  tiff   png   jpg currentElement jpeg nextElement platform product  gif  bmp Mac   Linux FreeBSD CE swf Mobile Pocket PC prevElement currentItem cab Function cc_on MSIE qtplugin qtactivex nextItem behavior  clientcaps getComponentVersion 89820200 ECBD prevItem 8B85 00AA005B4383 componentid p1 back compatMode mt XMLHTTP DOMDocument Microsoft XMLDOM 02 Shell UIHelper Scripting Dictionary wmplayer ocx verGecko  isGecko eval verChrome mmef Chrome verSafari isSafari Apple Safari mouseup verOpera isOpera o8 mi wmlb me QT_GenerateOBJECTText wonu pluginName xo java m50 pageXOffset m3ga WEBM m1 lt metadata lynx x700 libw xi kyo RC kwc kpt klon beta alpha dev onWindowLoaded kgt plugindetect setAttribute port abs hostname host String keji inArray  OTF gradient scrollWidth offsetWidth getTagStatus kddi iLCallback focus jigs  jemu jbro ipaq inno outlineStyle borderStyle im1k ikom ig01 outline idea console log  block absolute innerHTML appendChild ibro quicktimeplayer macpaint iac QuickTimeCheckObject QuickTimeCheck progID0 getSource controller net i230 9999 tc sqrt Plug vx Height Width D27CDB6E AE6D 96B8 tp AllowScriptAccess director round 166B1BCA 3F9C 8075 ShockwaveVersion Shockwave Director even of nArguments should  form atttributeName attributeValue oniLightBoxHashChange vulc insertAfter contentWindow   onpropertychange propertyName  voda  vm40  x3c   client innerWidth or defined Infinity Number".split(" "),
0,{}));;