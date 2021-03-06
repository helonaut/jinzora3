<?php if (!defined(JZ_SECURE_ACCESS)) die ('Security breach detected.');
	/**
	* - JINZORA | Web-based Media Streamer -  
	* 
	* Jinzora is a Web-based media streamer, primarily desgined to stream MP3s 
	* (but can be used for any media file that can stream from HTTP). 
	* Jinzora can be integrated into a CMS site, run as a standalone application, 
	* or integrated into any PHP website.  It is released under the GNU GPL.
	* 
	* - Resources -
	* - Jinzora Author: Ross Carlson <ross@jasbone.com>
	* - Web: http://www.jinzora.org
	* - Documentation: http://www.jinzora.org/docs	
	* - Support: http://www.jinzora.org/forum
	* - Downloads: http://www.jinzora.org/downloads
	* - License: GNU GPL <http://www.gnu.org/copyleft/gpl.html>
	* 
	* - Contributors -
	* Please see http://www.jinzora.org/modules.php?op=modload&name=jz_whois&file=index
	* 
	* - Code Purpose -
	* These are the classes extended by the backend adaptors.
	*
	* @since 05.10.04
	* @author Ben Dodson <bdodson@seas.upenn.edu>
	*/

	// split our classes into different files, since they are quiet big:
	require_once($include_path. 'playlists/playlists.php');
	require_once($include_path. 'backend/class-backend.php');
	require_once($include_path. 'backend/class-element.php');
	require_once($include_path. 'backend/class-node.php');
	require_once($include_path. 'backend/class-track.php');
	require_once($include_path. 'backend/class-users.php');
?>