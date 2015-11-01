<?php
/**
* @package EasyGallery
* @copyright (C) 2006 Joomla-addons.org
* @author  Adam van Dongen
* @version $Id: easygallery.php 6 2007-06-21 19:05:30Z websmurf $
* 
* --------------------------------------------------------------------------------
* All rights reserved. Easy Gallery Component for Joomla!
*
* This program is free software; you can redistribute it and/or
* modify it under the terms of the Joomla-addons Free Software License 
* See LICENSE.php for more information.
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  
* --------------------------------------------------------------------------------
**/

defined( '_VALID_MOS' ) or die( 'Restricted access' );

require_once( $mainframe->getPath('class') );
require_once( $mainframe->getPath('front_html') );
require_once( $mainframe->getCfg('absolute_path') . '/includes/patTemplate/patTemplate.php');

/** Load menu parameters **/
$menu = new mosMenu( $database );
$menu->load( $Itemid );

$params = new mosParameters( $menu->params );
$params->def( 'item_navigation', $mainframe->getCfg( 'item_navigation' ) );
$params->def( 'back_button', $mainframe->getCfg( 'back_button' ) );
$params->def( 'popup', false );
$params->def( 'image_name', true );
$params->def( 'image_desc', true );
$params->def( 'use_lightbox', 1 );
$params->def( 'load_mootools', 1 );
$params->def( 'comments', 0 );

$task = mosGetParam($_REQUEST, 'task');
$limitstart = intval(mosGetParam($_REQUEST, 'limitstart'));
$limit = intval(mosGetParam($_REQUEST, 'limit', $eg_thumbnails_per_row * $eg_thumbnail_rows));
$act = mosGetParam($_REQUEST, 'act');
$cid = mosGetParam($_REQUEST, 'cid', $params->get('cid', 0));

if(is_array($cid)){
  $cid = $cid[0];
}

/** to catch old urls **/
if($task == 'view'){
  photos::view($cid, $params);
}
/** end catch old urls **/

switch ($act){
  case 'photos':
    swPhotos($task, $cid, $limitstart, $limit, $params);
    break;
  default:
  case 'category':
  case 'categories':
    swCategories($task, $cid, $limitstart, $limit, $params);
    break;
}

function swPhotos($task, $cid, $limitstart, $limit, $params){
  global $option, $Itemid;
  
  $id = intval(mosGetParam($_REQUEST, 'id', 0));
  
  switch ($task){
    case 'new':
      photos::upload();
      break;
    case 'doUpload':
      photos::handleUpload(false);
      mosRedirect('index.php?option=' . $option . '&act=categories&cid=' . $cid . '&Itemid=' . $Itemid);
      break;
    case 'edit':
      photos::editFront($cid);
      break;
    case 'apply':
    case 'save':
      photos::saveFront();
      break;
    case 'remove':
      $cid = photos::remove(array($cid), false);
      mosRedirect('index.php?option=' . $option . '&act=categories&cid=' . $cid . '&Itemid=' . $Itemid);
      break;
    case 'cancel':
      mosRedirect('index.php?option=' . $option . ($id > 0 ? '&amp;act=photos&amp;cid=' . $id : '') . '&amp;Itemid=' .$Itemid);
      break;
    default:
      photos::view($cid, $params);
      break;
  }
}

function swCategories($task, $cid, $limitstart, $limit, $params){
  global $option, $Itemid;
  
  $id = intval(mosGetParam($_REQUEST, 'id', 0));
  
  switch ($task){
    case 'new':
      categories::editFront(0);
      break;
    case 'edit':
      categories::editFront($cid);
      break;
    case 'apply':
    case 'save':
      categories::saveFront();
      break;
    case 'cancel':
      mosRedirect('index.php?option=' . $option . ($id > 0 ? '&amp;act=categories&amp;cid=' . $id : '') . '&amp;Itemid=' .$Itemid);
      break;
    case 'remove':
      categories::remove(array($cid), false);
      mosRedirect('index.php?option=' . $option . '&amp;Itemid=' .$Itemid);
      break;
    default:
      categories::viewFront($cid, $limitstart, $limit, $params);
      break;
  }
}

/**
 * do not comment this out please,
 * have a look at the bottom of easygallery.html.php
 * for some comments
 */
HTML_easygallery::showCopyright();
?>