<?php /* Smarty version Smarty-3.1.19, created on 2016-03-08 15:52:01
         compiled from "C:\wamp\www\prestashop\modules\tmolarkchat\views\templates\hook\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16282569240f2d2ee14-01888079%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ea7fdd10cd99748c7239d38ffc12a339e7e693d1' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\modules\\tmolarkchat\\views\\templates\\hook\\footer.tpl',
      1 => 1443280206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16282569240f2d2ee14-01888079',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_569240f2e871f4_97886520',
  'variables' => 
  array (
    'tmolarkid' => 0,
    'email' => 0,
    'firstName' => 0,
    'lastName' => 0,
    'siteId' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569240f2e871f4_97886520')) {function content_569240f2e871f4_97886520($_smarty_tpl) {?><!-- begin olark code -->
<script data-cfasync="false" type='text/javascript'>
/*<![CDATA[*/window.olark||(function(c){var f=window,d=document,l=f.location.protocol=="https:"?"https:":"http:",z=c.name,r="load";var nt=function(){
f[z]=function(){
(a.s=a.s||[]).push(arguments)};var a=f[z]._={
},q=c.methods.length;while(q--){(function(n){f[z][n]=function(){
f[z]("call",n,arguments)}})(c.methods[q])}a.l=c.loader;a.i=nt;a.p={
0:+new Date};a.P=function(u){
a.p[u]=new Date-a.p[0]};function s(){
a.P(r);f[z](r)}f.addEventListener?f.addEventListener(r,s,false):f.attachEvent("on"+r,s);var ld=function(){function p(hd){
hd="head";return["<",hd,"></",hd,"><",i,' onl' + 'oad="var d=',g,";d.getElementsByTagName('head')[0].",j,"(d.",h,"('script')).",k,"='",l,"//",a.l,"'",'"',"></",i,">"].join("")}var i="body",m=d[i];if(!m){
return setTimeout(ld,100)}a.P(1);var j="appendChild",h="createElement",k="src",n=d[h]("div"),v=n[j](d[h](z)),b=d[h]("iframe"),g="document",e="domain",o;n.style.display="none";m.insertBefore(n,m.firstChild).id=z;b.frameBorder="0";b.id=z+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){
b.src="javascript:false"}b.allowTransparency="true";v[j](b);try{
b.contentWindow[g].open()}catch(w){
c[e]=d[e];o="javascript:var d="+g+".open();d.domain='"+d.domain+"';";b[k]=o+"void(0);"}try{
var t=b.contentWindow[g];t.write(p());t.close()}catch(x){
b[k]=o+'d.write("'+p().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};ld()};nt()})({
loader: "static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});

/* custom configuration goes here (www.olark.com/documentation) */

olark.identify('<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['tmolarkid']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
');

<?php if (isset($_smarty_tpl->tpl_vars['email']->value)) {?>
var name = "<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['firstName']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['lastName']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
";
var email= "<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['email']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
";

olark('api.visitor.updateFullName', {fullName: name});
olark('api.visitor.updateEmailAddress', {emailAddress: email});

<?php }?>


/*]]>*/</script><noscript><a href="https://www.olark.com/site/<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['siteId']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
/contact" title="Contact us" target="_blank">Questions? Feedback?</a> powered by <a href="http://www.olark.com?welcome" title="Olark live chat software">Olark live chat software</a></noscript>
<!-- end olark code --><?php }} ?>
