<?php
/**
 * @version		$Id: pagebreak.php 20196 2011-01-09 02:40:25Z ian $
 * @package		Joomla.Administrator
 * @subpackage	com_businesses
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$script  = 'function insertPagebreak() {'."\n\t";
// Get the pagebreak title
$script .= 'var title = document.getElementById("title").value;'."\n\t";
$script .= 'if (title != \'\') {'."\n\t\t";
$script .= 'title = "title=\""+title+"\" ";'."\n\t";
$script .= '}'."\n\t";
// Get the pagebreak toc alias -- not inserting for now
// don't know which attribute to use...
$script .= 'var alt = document.getElementById("alt").value;'."\n\t";
$script .= 'if (alt != \'\') {'."\n\t\t";
$script .= 'alt = "alt=\""+alt+"\" ";'."\n\t";
$script .= '}'."\n\t";
$script .= 'var tag = "<hr class=\"system-pagebreak\" "+title+" "+alt+"/>";'."\n\t";
$script .= 'window.parent.jInsertEditorText(tag, \''.$this->eName.'\');'."\n\t";
$script .= 'window.parent.SqueezeBox.close();'."\n\t";
$script .= 'return false;'."\n";
$script .= '}'."\n";

JFactory::getDocument()->addScriptDeclaration($script);
?>
		<form>
		<table width="100%" align="center">
			<tr width="40%">
				<td class="key" align="right">
					<label for="title">
						<?php echo JText::_( 'COM_BUSINESSES_PAGEBREAK_TITLE' ); ?>
					</label>
				</td>
				<td>
					<input type="text" id="title" name="title" />
				</td>
			</tr>
			<tr width="60%">
				<td class="key" align="right">
					<label for="alias">
						<?php echo JText::_( 'COM_BUSINESSES_PAGEBREAK_TOC' ); ?>
					</label>
				</td>
				<td>
					<input type="text" id="alt" name="alt" />
				</td>
			</tr>
		</table>
		</form>
		<button onclick="insertPagebreak();"><?php echo JText::_( 'COM_BUSINESSES_PAGEBREAK_INSERT_BUTTON' ); ?></button>
