"use strict";(self.webpackChunkTopWritePlugins_components=self.webpackChunkTopWritePlugins_components||[]).push([[46],{46:(e,r,t)=>{t.r(r),t.d(r,{Content:()=>a,default:()=>c});var n=t(159),o=t(99),l=t(196);function i(e){return 0===e.length?null:(0,n.jsx)("ul",{children:e.map((e=>function(e){return(0,n.jsxs)("li",{children:[(0,n.jsx)(o.Anchor,{href:e.ref,children:e.title}),i(e.children)]},e.level.toString())}(e)))})}const a=e=>{let{all:r}=e;const{summary:t}=(0,o.useBook)(),a=(0,o.useFile)();if(r)return t.isSinglePart()?i(t.getLastPart().articles):(0,n.jsx)(n.Fragment,{children:t.parts.map((e=>function(e){return(0,n.jsxs)(l.Fragment,{children:[(0,n.jsx)("h2",{children:e.title}),i(e.articles)]},e.level.toString())}(e)))});const c=t.getArticle((e=>e.path===a.path||e.ref===a.path));return c?i(c.children):null};function c(e){let{props:{all:r}}=e;return(0,n.jsx)(a,{all:void 0!==r})}},2:e=>{
/*
object-assign
(c) Sindre Sorhus
@license MIT
*/
var r=Object.getOwnPropertySymbols,t=Object.prototype.hasOwnProperty,n=Object.prototype.propertyIsEnumerable;function o(e){if(null==e)throw new TypeError("Object.assign cannot be called with null or undefined");return Object(e)}e.exports=function(){try{if(!Object.assign)return!1;var e=new String("abc");if(e[5]="de","5"===Object.getOwnPropertyNames(e)[0])return!1;for(var r={},t=0;t<10;t++)r["_"+String.fromCharCode(t)]=t;if("0123456789"!==Object.getOwnPropertyNames(r).map((function(e){return r[e]})).join(""))return!1;var n={};return"abcdefghijklmnopqrst".split("").forEach((function(e){n[e]=e})),"abcdefghijklmnopqrst"===Object.keys(Object.assign({},n)).join("")}catch(e){return!1}}()?Object.assign:function(e,l){for(var i,a,c=o(e),s=1;s<arguments.length;s++){for(var u in i=Object(arguments[s]))t.call(i,u)&&(c[u]=i[u]);if(r){a=r(i);for(var f=0;f<a.length;f++)n.call(i,a[f])&&(c[a[f]]=i[a[f]])}}return c}},709:(e,r,t)=>{
/** @license React v17.0.2
 * react-jsx-runtime.production.min.js
 *
 * Copyright (c) Facebook, Inc. and its affiliates.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */
t(2);var n=t(196),o=60103;if(r.Fragment=60107,"function"==typeof Symbol&&Symbol.for){var l=Symbol.for;o=l("react.element"),r.Fragment=l("react.fragment")}var i=n.__SECRET_INTERNALS_DO_NOT_USE_OR_YOU_WILL_BE_FIRED.ReactCurrentOwner,a=Object.prototype.hasOwnProperty,c={key:!0,ref:!0,__self:!0,__source:!0};function s(e,r,t){var n,l={},s=null,u=null;for(n in void 0!==t&&(s=""+t),void 0!==r.key&&(s=""+r.key),void 0!==r.ref&&(u=r.ref),r)a.call(r,n)&&!c.hasOwnProperty(n)&&(l[n]=r[n]);if(e&&e.defaultProps)for(n in r=e.defaultProps)void 0===l[n]&&(l[n]=r[n]);return{$$typeof:o,type:e,key:s,ref:u,props:l,_owner:i.current}}r.jsx=s,r.jsxs=s},159:(e,r,t)=>{e.exports=t(709)}}]);
//# sourceMappingURL=46-f6536b.js.map