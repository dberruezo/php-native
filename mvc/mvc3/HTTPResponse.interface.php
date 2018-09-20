<?php
/**
 * Project:     web.framework: the PHP5 MVC framework
 * File:		HTTPResponse.interface.php
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 * You may contact the authors of web.framework by e-mail at:
 * webframe@staniszczak.pl
 *
 * The latest version of web.framework can be obtained from:
 * http://sourceforge.net/projects/webframework
 *
 * @link http://sourceforge.net/projects/webframework
 * @copyright 2005 Marcin Staniszczak
 * @author Marcin Staniszczak <marcin@staniszczak.pl>
 * @version 1.0.0
 */


/**
 *  This interface must be implemented by response's class
 *
 * @name IHTTPResponse
 * @version 1.0.0
 * @package web.framework
 * @subpackage Context
 *
 * @author Marcin Staniszczak
 * @copyright 2005 Marcin Staniszczak
 */
interface IHTTPResponse {
	/**
	 * The class constructor
	 *
	 * @access public	 
	 * @param Session Session class's object
	 */	
	public function __construct($objSession);
		
	/**
	 *  Flush (send) the output buffer 
	 *
	 * @access public
	 */
	public function flush();
	
	/**
	 * Clean (erase) the output buffer 
	 *
	 * @access public
	 */
	public function cleanOutput();

	/**
	 * Return the contents of the output buffer 
	 *
	 * @access public
	 * @param boolean true - clean output buffer after return contents, false - don't clean output buffer
	 * @return string contents of the output buffer
	 */
	public function getContents($blnClean=false);
	
	/**
	 * Return the length of the output buffer 
	 *
	 * @access public
	 * @return integer length of the output buffer
	 */
	public function getContentsLength();
	
	/**
	 * Send a raw HTTP header
	 *
	 * @access public
	 * @param string header to send
	 */	
	public function sendHeader($strHeader);
	
	/**
	 * Redirect
	 *
	 * @access public
	 * @param string new URL address
	 */
	public function sendRedirect($strURL);
}
?>