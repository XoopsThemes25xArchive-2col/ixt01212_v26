<?php
/*
* Qualitative Themes for XOOPS
*
* @license       http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
* @project       IXThemes Project, http://ixthemes.org
* @theme_name    ixt01212
* @theme_demo    http://ixthemes.sourceforge.net/demo/x/index.php?xoops_theme_select=ixt01212
* @theme_author  Alexander Galochkin (algalochkin at users.sourceforge.net)
* @version       $Id: footer_custom_block01.php 2262 2010-03-01 12:19:08Z algalochkin $
*
* Thanks you, that you have left this header untouched!!!
*/
$block = array(
	'id'        => '1001',
	'title'     => 'Custom Block',
	'content'   => '
	<div>
	Hello!
	<br/>
	Here the custom footer block 01.
	<blockquote>
	<p>
	&ldquo;IXThemes - Suit For Your Content&rdquo;
	<br />
	&ldquo;XOOPS - Powered by you!&rdquo;
	</p>
	</blockquote>
	</div>
	',
);
$this->assign('fblock', $block);
?>