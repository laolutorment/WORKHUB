"use strict";(self.webpackChunkTopWritePlugins_components=self.webpackChunkTopWritePlugins_components||[]).push([[379],{379:(e,r,n)=>{n.r(r),n.d(r,{Column:()=>u,Container:()=>p,default:()=>s});var t,o,c=n(669),a=n(159),i=n(99),l=n(196);function s(e){let{props:r}=e;const{children:n}=r,t=l.Children.toArray(n).map(((e,r)=>{let{props:n}=e;if("containerDirective"===n.tagName&&"column"===n.name){const[,...e]=l.Children.toArray(n.children);return(0,a.jsx)(u,{children:e},"index-".concat(r))}return null})).filter((e=>!!e));return(0,a.jsx)(p,{columns:t.length,children:t})}const u=i.styled.div(t||(t=(0,c.Z)(["\n  & > *:first-child {\n    margin-top: 0 !important;\n  }\n\n  & > *:last-child {\n    margin-bottom: 0 !important;\n  }\n"]))),p=i.styled.div(o||(o=(0,c.Z)(["\n  display: grid;\n  grid-template-columns:",";\n  margin: 1em 0;\n  column-gap: 1em;\n  @media (max-width: 996px) {\n    grid-template-columns: 100%;\n    row-gap: 1em;\n  }\n"])),(e=>"repeat(".concat(e.columns,", calc(").concat(100/e.columns,"% - ").concat((e.columns-1)/e.columns,"em))")))},2:e=>{
/*
object-assign
(c) Sindre Sorhus
@license MIT
*/
var r=Object.getOwnPropertySymbols,n=Object.prototype.hasOwnProperty,t=Object.prototype.propertyIsEnumerable;function o(e){if(null==e)throw new TypeError("Object.assign cannot be called with null or undefined");return Object(e)}e.exports=function(){try{if(!Object.assign)return!1;var e=new String("abc");if(e[5]="de","5"===Object.getOwnPropertyNames(e)[0])return!1;for(var r={},n=0;n<10;n++)r["_"+String.fromCharCode(n)]=n;if("0123456789"!==Object.getOwnPropertyNames(r).map((function(e){return r[e]})).join(""))return!1;var t={};return"abcdefghijklmnopqrst".split("").forEach((function(e){t[e]=e})),"abcdefghijklmnopqrst"===Object.keys(Object.assign({},t)).join("")}catch(e){return!1}}()?Object.assign:function(e,c){for(var a,i,l=o(e),s=1;s<arguments.length;s++){for(var u in a=Object(arguments[s]))n.call(a,u)&&(l[u]=a[u]);if(r){i=r(a);for(var p=0;p<i.length;p++)t.call(a,i[p])&&(l[i[p]]=a[i[p]])}}return l}},709:(e,r,n)=>{
/** @license React v17.0.2
 * react-jsx-runtime.production.min.js
 *
 * Copyright (c) Facebook, Inc. and its affiliates.
 *
 * This source code is licensed under the MIT license found in the
 * LICENSE file in the root directory of this source tree.
 */
n(2);var t=n(196),o=60103;if(r.Fragment=60107,"function"==typeof Symbol&&Symbol.for){var c=Symbol.for;o=c("react.element"),r.Fragment=c("react.fragment")}var a=t.__SECRET_INTERNALS_DO_NOT_USE_OR_YOU_WILL_BE_FIRED.ReactCurrentOwner,i=Object.prototype.hasOwnProperty,l={key:!0,ref:!0,__self:!0,__source:!0};function s(e,r,n){var t,c={},s=null,u=null;for(t in void 0!==n&&(s=""+n),void 0!==r.key&&(s=""+r.key),void 0!==r.ref&&(u=r.ref),r)i.call(r,t)&&!l.hasOwnProperty(t)&&(c[t]=r[t]);if(e&&e.defaultProps)for(t in r=e.defaultProps)void 0===c[t]&&(c[t]=r[t]);return{$$typeof:o,type:e,key:s,ref:u,props:c,_owner:a.current}}r.jsx=s,r.jsxs=s},159:(e,r,n)=>{e.exports=n(709)},669:(e,r,n)=>{function t(e,r){return r||(r=e.slice(0)),Object.freeze(Object.defineProperties(e,{raw:{value:Object.freeze(r)}}))}n.d(r,{Z:()=>t})}}]);
//# sourceMappingURL=379-c89d15.js.map