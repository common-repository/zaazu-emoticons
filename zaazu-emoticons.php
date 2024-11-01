<?php
/*
Plugin Name: Zaazu Emotions
Plugin URI: http://zaazu.com/wordpress_plugin.html
Description: Zingy smileys for Yah! Now on WordPress also!
Version: 1.3
Author: Zaazu
Author URI: http://zaazu.com/
*/

/*  Copyright 2011  Zaazu  (email: support(at)zaazu(dot).com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

register_activation_hook( __FILE__, array('zaazuEmoticons', 'activate'));
register_deactivation_hook( __FILE__, array('zaazuEmoticons', 'deactivate'));
add_filter('the_content',array('zaazuEmoticons','replace'));
add_filter('comment_text',array('zaazuEmoticons','replace'));
add_action('comment_form', array('zaazuEmoticons', 'scut'));
add_action('wp_head', array('zaazuEmoticons', 'script'));
add_action('admin_menu', array('zaazuEmoticons','menu'));
add_filter('plugin_action_links', array('zaazuEmoticons', 'link'), 10, 2 );
add_action('media_buttons', array('zaazuEmoticons', 'add_button'), 30);

require_once("zaazu-emoticons-list.php");

if(!class_exists('zaazuEmoticons')){
	class zaazuEmoticons {
		function activate(){
			$data = array(
				'backlink'=> 1
			);
	    	if (!get_option('zaazu_emoticons')){
	      		add_option('zaazu_emoticons', $data);
	    	} else {
	      		update_option('zaazu_emoticons', $data);
	    	}
		}
		
		function deactivate(){
			//delete_option('zaazu_emoticons');
		}

		function link( $links, $file ){
			static $this_plugin;
			if ( ! $this_plugin ) $this_plugin = plugin_basename(__FILE__);
			
			if ( $file == $this_plugin ){
				$settings_link = '<a href="options-general.php?page=zaazuEmoticons">' . __('Settings') . '</a>';
				array_unshift( $links, $settings_link ); // before other links
			}
			return $links;
		}
		
		function menu(){
			add_options_page('Zaazu Emoticons', 'Zaazu Emoticons', 8, 'zaazuEmoticons', array('zaazuEmoticons','control'));
		}

		function control() {
			//die(print_r($_POST,true));
			global $KEEUrl,$ZEReplace2;
			$options = $newoptions = get_option('zaazu_emoticons');
			//die(print_r($options,true));
			if($_POST["zaazu_emoticons_action"]) {
				//print_r($_POST);
				$kes = null;
				if(isset($_POST['zaazu_emoticons_stat']) && count($_POST['zaazu_emoticons_stat'])>0){
					foreach($_POST['zaazu_emoticons_stat'] as $k=>$v){
						$kes[$k]='';
					}
				}
				$newoptions['stat'] = $kes;
				$newoptions['backlink'] 	= strip_tags(stripslashes($_POST["zaazu_emoticons_backlink"]));
				if(trim($newoptions['backlink'])=="") $newoptions['backlink'] = 1;
			}
			if ($options != $newoptions) {
				$options = $newoptions;
				//print_r($options);
				update_option('zaazu_emoticons', $options);
			}
			
			$backlink= htmlspecialchars($options['backlink'], ENT_QUOTES);
			$check = get_option('siteurl') . '/wp-content/plugins/zaazu-emoticons/checkbox';
			$check0= $check."0.gif";
			$check1= $check."1.gif";
?>
			<style type="text/css">
			.codelist{
				border-collapse: collapse;
			}
			.codelist td{
				border: 1px solid #eee;
				vertical-align: middle;
				padding: 2px;
			}
			
			.code-row{
				background: none;
				cursor: pointer;
			}

			.code-row-checked{
				background: #dfdfdf;
			}

			.code-row-hover{
				background: white;
			}
			
			.code-check0{
				background:url("<?php echo $check0;?>") no-repeat scroll center center transparent;
			}

			.code-check1{
				background:url("<?php echo $check1;?>") no-repeat scroll center center transparent;
			}
			</style>
			<img src="<?php echo $check0;?>" style="display:none">
			<img src="<?php echo $check1;?>" style="display:none">
			<h2>Zaazu Emoticons</h2>
			<em>WordPress plugin written by <a href="http://zaazu.com" target="_blank">Zaazu</a> </em><br /><br />
			follow me for the latest update and another info - <a href="http://zaazu.com/wordpress_plugin.html" target="_blank">Zaazu Emoticons Wordpress Plugin</a> <br /><br />
			<form method="post" action="options-general.php?page=zaazuEmoticons">
			<table>
			<tr>
			<td><?php _e('FOR BACKLINK zaazu.com ! You can disable this, but if you enable it, Thanks!'); ?></td>
			<td>
				<select name="zaazu_emoticons_backlink">
					<option value="1"<?php echo($backlink=="1"?" selected":"")?>>Enable</option>
					<option value="0"<?php echo($backlink=="1"?"":" selected")?>>Disable</option>
				</select>
			</td>
			</tr>
			<tr>
				<td colspan="2">
					<table class="codelist" align="center" cellpadding="0" cellspacing="0" border="0">
					<tr style="background:#ccc;">
						<td align="center"><strong>Disable ?</strong></td>
						<td align="center"><strong>Image</strong></td>
						<td align="center"><strong>Code</strong></td>
					</tr>
					<?php 
					foreach($ZEReplace2 as $k=>$v):
						$xstat = isset($options['stat']) && isset($options['stat'][$k]);
					?>
					<tr class="code-row<?php echo ($xstat?" code-row-checked":"");?>">
						<td align="center" class="code-check<?php echo ($xstat?1:0);?>"><input <?php echo ($xstat ? "checked=\"checked\"":"");?> name="zaazu_emoticons_stat[<?php echo $k;?>]" type="checkbox" style="display:none"></td>
						<td align="center"><?php echo $v;?></td>
						<td><?php echo $k;?></td>
					</tr>
					<?php endforeach;?>
					</table>
				</td>
			</tr>
			</table>
			<input type="hidden" id="zaazu_emoticons_action" name="zaazu_emoticons_action" value="1" /><br />
			<input type="submit" id="zaazu_emoticons_submit" name="zaazu_emoticons_submit" value="Save Settings" />
			</form>
			<script language="javascript">
			jQuery(".code-row").each(function(i){
				jQuery(this).mouseover(function(){
					jQuery(this).addClass("code-row-hover");
				}).mouseout(function(){
					jQuery(this).removeClass("code-row-hover");
				}).click(function(){
					if((jQuery(this).find(":checkbox")[0]).checked){
						(jQuery(this).find("td")[0]).className = "code-check0";
						jQuery(this).removeClass("code-row-checked");
					}
					else{
						jQuery(this).addClass("code-row-checked");
						(jQuery(this).find("td")[0]).className = "code-check1";
					}
					(jQuery(this).find(":checkbox")[0]).checked = !(jQuery(this).find(":checkbox")[0]).checked;
				});
			});
			</script>
<?php
		}

		function replace($string){
			//die($string);
			$output = '';
			$textarr = preg_split("/(<\/?pre[^>]*>)|(<\/?p[^>]*>)|(<\/?a[^>]*>)|(<\/?object[^>]*>)|(<\/?img[^>]*>)|(<\/?embed[^>]*>)|(<\/?strong[^>]*>)|(<\/?b[^>]*>)|(<\/?i[^>]*>)|(<\/?em[^>]*>)/U", $string, -1, PREG_SPLIT_DELIM_CAPTURE); 
			$stop = count($textarr);
			//die(print_r($opt['stat'],true));
			$s=false;
			for ($i = 0; $i < $stop; $i++){
				$content = $textarr[$i];
				if(preg_match("/^<img/",trim($content))){
					$output .= $content;
					continue;
				}
				if(preg_match("/^<pre/",trim($content)))$s = true;
				if(trim($content)=="^</pre>")$s = false;
				//if (!$s && (strlen($content) > 0) && ('<' != $content{0}))
				if (!$s)
				{ 
					$content = zaazuEmoticons::replace_code( $content ) ;
				}
				$output .= $content;
			}
			
			return $output;
			
		}

		function replace_code($content){
			global $ZEReplace;
			global $ZESmileys;
			$opt = get_option('zaazu_emoticons');
			if(isset($opt['backlink']) && $opt['backlink']) 
				return strtr($content,$ZEReplace);
			return strtr($content,$ZESmileys);
		}
		
		function add_button(){
			$pl_dir 	= get_option('siteurl') . '/wp-content/plugins/zaazu-emoticons/';
	        $wizard_url = $pl_dir . 'zaazu-emoticons-wizard.php';
	        $button_src = $pl_dir.'wp-zaazu.gif';
	        $button_tip = 'Insert a zaazu Emoticon';
	        $pl_dir		= ABSPATH . 'wp-content/plugins/zaazu-emoticons/';
	        echo '<a title="Add a Zaazu Emoticon" href="'.$wizard_url.'?pl_dir='.$pl_dir.'&KeepThis=true&TB_iframe=true" class="thickbox" ><img src="' . $button_src . '" alt="' . $button_tip . '" /></a>';
		}
		
		function scut(){
			global $ZESmileys;
			$opt = get_option('zaazu_emoticons');
			echo "<div style=\"cursor:pointer;margin:2px\" onclick=\"zaazuemoticonsclink()\"><span id='zaazuemoticonslink'>[+] Zaazu Emoticons</span>";
			if(isset($opt['backlink']) && $opt['backlink']) echo "&nbsp;<a target=\"_blank\" href=\"http://zaazu.com/\">Zaazu.com</a>";
			else {
				if(!isset($opt['backlink']))  echo "&nbsp;<a target=\"_blank\" href=\"http://zaazu.com/\">Zaazu.com</a>";
			}
			echo "</div>";
			echo "<div id='zaazuemoticonscontent' style=\"display:none\">";
			foreach($ZESmileys as $k=>$v){
				if(isset($opt['stat']) && isset($opt['stat'][$k])){}
				else echo "<a title=\"".$k."\" href=\"javascript:zaazuemoticonsclick('".$k."')\" style=\"cursor:pointer;margin:1px;border:none\">".$v."</a>";
			}
			echo "</div>"; 
		}
		
		function script(){
?>
<script language="javascript">
	var gOI = function(id){
		return document.getElementById(id);
	};
	
	var zaazuemoticonsclick = function(tag){
		var d = gOI("comment");
		var b = d.selectionStart, a = d.selectionEnd;
		d.value = d.value.substring(0, b) + " " + tag + " " + d.value.substring(a, d.value.length);
	};
	
	var zaazuemoticonsclink = function(){
		gOI("zaazuemoticonslink").innerHTML = gOI("zaazuemoticonscontent").style.display == "" ? "[+] Zaazu Emoticons":"[-] Zaazu Emoticons";
		gOI("zaazuemoticonscontent").style.display = gOI("zaazuemoticonscontent").style.display == "" ? "none":"";
	};
</script>	
<?php
		}
	}
}
?>