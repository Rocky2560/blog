import"./js/vue2.RHmKp0B5.js";import{X as k,h as v}from"./js/vue.esm-bundler.CWQFYt9y.js";import{c as E,b as S}from"./js/vue-router.DZeOtREl.js";import{e as _,l as I}from"./js/index.D7hEMYOO.js";import{l as C}from"./js/index.BB7B6rSp.js";import{l as A}from"./js/index.3BJ3ZnWB.js";import{b as D,f as P,B as x,l as L}from"./js/links.cMjoa9mX.js";import{g as B,m as h,T as O}from"./js/postSlug.XW1wPUFy.js";import{i as U}from"./js/DatePicker.B2ISPTTe.js";import{i as $}from"./js/isEmpty.Ci-QAhhs.js";import{s as m,_ as s}from"./js/default-i18n.Bd0Z306Z.js";import{A as p}from"./js/App.BdbY6rtd.js";import"./js/translations.Buvln_cw.js";import"./js/constants.B6ynd7gz.js";import"./js/Caret.iRBf3wcH.js";import"./js/_plugin-vue_export-helper.BN1snXvA.js";import"./js/helpers.D2xRWOvn.js";import"./js/metabox.B54N9lJ3.js";import"./js/cleanForSlug.o2RefBn0.js";import"./js/toString.XwB3Xa5p.js";import"./js/_baseTrim.BYZhh0MR.js";import"./js/_stringToArray.DnK4tKcY.js";import"./js/get.BT85ybc8.js";import"./js/_baseSet.DALGekmy.js";import"./js/isUndefined.CwgbffFV.js";import"./js/_getTag.CQI1SwGE.js";import"./js/debounce.DX0w6jjQ.js";import"./js/toNumber.LBtMnsWu.js";/* empty css                */import"./js/allowed.CIWIyN0m.js";import"./js/params.B3T1WKlC.js";import"./js/SettingsRow.DQldd-1Z.js";import"./js/Row.CzuhYwfs.js";import"./js/Checkbox.D2dfpbIi.js";import"./js/Checkmark.pCOnqh_g.js";import"./js/ScrollAndHighlight.Dmz_zsgp.js";import"./js/LogoGear.BF23BIEd.js";import"./js/Tabs.D42knyjl.js";import"./js/TruSeoScore.TjofuHRQ.js";import"./js/Ellipse.ajMtnCZF.js";import"./js/Information.CESrgQJV.js";import"./js/Slide.CRIn0kdn.js";import"./js/Index.DsuOvVx_.js";import"./js/Settings.BkZvT8m4.js";import"./js/MaxCounts.DHV7qSQX.js";import"./js/Tags.DsiuS2Z3.js";import"./js/toFinite.Dixv5Z_k.js";import"./js/Tooltip.DiN2Zjvc.js";import"./js/Plus.DrDYrwHh.js";import"./js/Eye.xo0i1Doh.js";import"./js/RadioToggle.BLVmJ7Zx.js";import"./js/GoogleSearchPreview.DfWUGO2R.js";import"./js/HtmlTagsEditor.nHVKntJb.js";import"./js/Editor.DPdoRvzJ.js";import"./js/UnfilteredHtml.C4hlZYFQ.js";import"./js/ProBadge.WwPkDor4.js";import"./js/popup.6pJEdp0g.js";import"./js/license.ctOGGUd5.js";import"./js/upperFirst.CP4N4hLd.js";import"./js/addons.CjB9Xv4t.js";import"./js/Blur.DNVDismY.js";import"./js/Index.DUPzmxCE.js";import"./js/WpTable._80JLonk.js";import"./js/Table.Dk4a_ubM.js";import"./js/numbers.zAmItkHM.js";import"./js/PostTypes.Cef6XkQ_.js";import"./js/InternalOutbound.C_4tKmQU.js";import"./js/RequiredPlans.DAdiEWvO.js";import"./js/Image.J_eZiLlI.js";import"./js/FacebookPreview.YPFdm22Y.js";import"./js/Img.C6u5nam7.js";import"./js/Profile.vTi7bzTi.js";import"./js/ImageUploader.D6Q-hb5k.js";import"./js/TwitterPreview.CiLnvQ2i.js";import"./js/Book.BwJHPER-.js";import"./js/Build.CPuT4khC.js";import"./js/Redirects.Dj4HEf5o.js";import"./js/Index.C4hCDPnD.js";import"./js/JsonValues.D25FTfEu.js";import"./js/External.Bfg4674G.js";import"./js/escapeRegExp.Cd2tL9wj.js";import"./js/Exclamation.DKtT8kuH.js";import"./js/Gear.aQH8e4fl.js";import"./js/Date.9vH5QV8g.js";import"./js/Card.B69_swGC.js";import"./js/Upsell.Dv6WnNQM.js";class T extends window.$e.modules.hookUI.Base{constructor(t,n,o){super(),this.hook=t,this.id=n,this.callback=o}getCommand(){return this.hook}getId(){return this.id}apply(){return this.callback()}}class H extends window.$e.modules.hookData.Base{constructor(t,n,o){super(),this.hook=t,this.id=n,this.callback=o}getCommand(){return this.hook}getId(){return this.id}apply(){return this.callback()}}function c(e,t,n){window.$e.hooks.registerUIAfter(new T(e,t,n))}function M(e,t,n){window.$e.hooks.registerDataAfter(new H(e,t,n))}let l={},d=!1;const u=()=>{const e=window.elementor.documents.getCurrent();if(!["wp-post","wp-page"].includes(e.config.type))return;const t={...l},n=B();U(t,n)||(l=n,h())},R=()=>{const e=D();$(e.currentPost)||window.elementor.config.document.id===window.elementor.config.document.revisions.current_id&&e.saveCurrentPost(e.currentPost).then(()=>{const t=P(),n=x();t.isUnlicensed||n.fetch()})},q=()=>{window.$e.internal("document/save/set-is-modified",{status:!0})},V=()=>{d||(d=!0,c("editor/documents/attach-preview","aioseo-content-scraper-attach-preview",u),c("document/save/set-is-modified","aioseo-content-scraper-on-modified",u),M("document/save/save","aioseo-save",R),_.on("postSettingsUpdated",q))},j=({elementor:e,elementorModules:t})=>{if(e.config.user.introduction["aioseo-introduction"]===!0)return;const n=new t.editor.utils.Introduction({introductionKey:"aioseo-introduction",dialogType:"alert",dialogOptions:{id:"aioseo-introduction",headerMessage:m(s("New: %1$s %2$s integration","all-in-one-seo-pack"),"AIOSEO","Elementor"),message:m(s("You can now manage your SEO settings inside of %1$s via %2$s before you publish your post!","all-in-one-seo-pack"),"Elementor","All in One SEO"),position:{my:"center center",at:"center center"},strings:{confirm:s("Got It!","all-in-one-seo-pack")},hide:{onButtonClick:!1},onConfirm:()=>{n.setViewed(),n.getDialog().hide()}}});n.show()},r={icon:"eicon-calendar",name:"aioseo-limit-modified-date",param:"aioseo_limit_modified_date",title:s("Save (Don't Modify Date)","all-in-one-seo-pack")},f=e=>{const t=document.getElementById(`elementor-panel-footer-sub-menu-item-${r.name}`);t&&(t.classList.remove("elementor-disabled"),e||t.classList.add("elementor-disabled"))},W=({elementor:e,elementorCommon:t,$e:n})=>{e.once("preview:loaded",function(){e.getRegion("panel").currentView.footer.currentView.addSubMenuItem("saver-options",{icon:r.icon,name:r.name,title:r.title,callback:o=>{o.currentTarget.classList.contains("elementor-disabled")||(t.ajax.requestConstants[r.param]=!0,n.run("document/save/default"))}})}),e.on("document:loaded",o=>{f(o.container.settings.get("post_status")==="draft")}),n.commandsInternal.on("run:after",(o,a,b)=>{switch(a){case"document/save/set-is-modified":f(b.status);break;case"document/save/save":case"document/save/default":delete t.ajax.requestConstants[r.param];break}})};let i=null,w=!1;const z=()=>{let e=window.elementor.getPreferences("ui_theme")||"auto";e==="auto"&&(e=matchMedia("(prefers-color-scheme: dark)").matches?"dark":"light"),document.body.classList.forEach(t=>{t.startsWith("aioseo-elementor-")&&document.body.classList.remove(t)}),document.body.classList.add("aioseo-elementor-"+e)},F=({elementor:e,$e:t,Marionette:n})=>{t.routes.on("run:after",function(o,a){z(),a==="panel/page-settings/aioseo"&&(i==null||i.unmount(),i=g("#elementor-panel-page-settings-controls"))}),e.modules.layouts.panel.pages.menu.Menu.addItem({name:"aioseo",icon:"aioseo aioseo-element-menu-icon aioseo-element-menu-icon-"+e.getPreferences("ui_theme"),title:"All in One SEO",type:"page",callback:()=>{try{t.routes.run("panel/page-settings/aioseo")}catch{t.routes.run("panel/page-settings/settings"),t.routes.run("panel/page-settings/aioseo")}}},"more"),e.once("preview:loaded",function(){t.components.get("panel/elements").addTab("aioseo",{title:"AIOSEO"})}),e.hooks.addFilter("panel/elements/regionViews",o=>(o.aioseo={region:o.global.region,view:n.ItemView.extend({template:!1,id:"elementor-panel-aioseo",className:"aioseo-elementor aioseo-sidebar-panel",initialize(){document.getElementById("elementor-panel-elements-search-area").hidden=!0},onShow(){i==null||i.unmount(),i=g("#elementor-panel-aioseo")},onDestroy(){document.getElementById("elementor-panel-elements-search-area").hidden=!1}}),options:{}},o))},g=e=>{const t=document.querySelector(e);t.classList.add("edit-post-sidebar","aioseo-elementor-panel"),t.appendChild(document.createElement("div"));const n=E({history:S(),routes:[{path:"/",component:p}]});let o=k({name:"Standalone/Elementor",data(){return{tableContext:window.aioseo.currentPost.context,screenContext:"sidebar"}},render:()=>v(p)});return o=I(o),o=C(o),o=A(o),o.use(n),n.app=o,L(o,n),V(),o.config.globalProperties.$truSeo=new O,o.mount(`${e} > div`),h(),o},y=()=>{F(window),j(window),W(window)};window.elementor&&(setTimeout(y),w=!0);(function(e){w||e(window).on("elementor:init",()=>{window.elementor.on("panel:init",()=>{setTimeout(y)})})})(window.jQuery);
