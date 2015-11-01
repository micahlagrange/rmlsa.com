<?php
/**
* @package EasyGallery
* @copyright (C) 2006 Joomla-addons.org
* @author  Adam van Dongen
* @version $Id: easygallery.html.php 7 2007-06-22 11:16:22Z websmurf $
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

class HTML_easygallery {
  
  /**
   * Show categorie, images and subcategories
   *
   * @param <var>mosCategory</var> $row
   * @param array $subcats
   * @param array $photos
   */
  function showCategory($row, $subcats, $photos, $pageNav, $params){
    global $option, $mainframe, $eg_thumbnail_path, $eg_thumbnail_width, $eg_original_path, $Itemid, $eg_thumbnail_rows, $eg_thumbnails_per_row, $my;
    
    $mainframe->addCustomHeadTag('<link href="'. $mainframe->getCfg('live_site') . '/components/com_easygallery/style.css" rel="stylesheet" type="text/css" />');
    
    if($params->get('use_lightbox') > 0){
      $mainframe->addCustomHeadTag('<link rel="stylesheet" href="'. $mainframe->getCfg('live_site') . '/components/com_easygallery/slimbox/css/slimbox.css" type="text/css" media="screen" />');
      if($params->get('load_mootools')){
        $mainframe->addCustomHeadTag('<script type="text/javascript" src="'. $mainframe->getCfg('live_site') . '/components/com_easygallery/slimbox/js/mootools.js"></script>');
      }
      $mainframe->addCustomHeadTag('<script type="text/javascript" src="'. $mainframe->getCfg('live_site') . '/components/com_easygallery/slimbox/js/slimbox.js"></script>');
    }
    
    if($my->gid == 2){
      $css = '<style>';
      $css .= ' .unpublished { border: 1px solid #c64934; background-color: #EEEEEE; }';
      $css .= '</style>';
      $mainframe->addCustomHeadTag($css);
    }
    
    if(!$row->name){
      $mainframe->setPageTitle(EG_SHOWCATEGORIES);
      echo '<div class="componentheading">' . EG_SHOWCATEGORIES . '</div>';
      echo '<div style="float: right; width: 18px;">';
      echo HTML_easygallery::printAdd($row, $params);
      echo '</div>';
    } else {
      $mainframe->setPageTitle(sprintf(EG_SHOWCATEGORY, $row->name));
      echo '<div class="componentheading">' . sprintf(EG_SHOWCATEGORY, $row->name) . '</div>';
      echo '<div style="float: right; width: 50px;">';
      echo HTML_easygallery::printAdd($row, $params);
      echo HTML_easygallery::printEdit($row, $params);
      echo HTML_easygallery::printDelete($row, $params);
      echo '</div>';
    }
    echo $row->description;
    echo '<br clear="all" />';
    
    HTML_easygallery::fixPathway($row->id);
    
    //show subcategories
    if(count($subcats) > 0){
      ?>
      <div class="small"><?php echo EG_CHOOSE_CATEGORY; ?></div><br />

      <?php 
      for($i=0,$n=count($subcats);$i<$n;$i++){
        $cat = $subcats[$i];
        
        $link = sefRelToAbs('index.php?option=' . $option . '&amp;act=categories&amp;cid=' . $cat->id . '&amp;Itemid=' . $Itemid);
        ?>      
        <table width="100%" class="category<?php echo ($cat->published < 1 ? ' unpublished' : ''); ?>" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td rowspan="2" width="<?php echo $eg_thumbnail_width + 5; ?>"><a href="<?php echo $link; ?>"><img src="<?php echo $mainframe->getCfg('live_site') . $eg_thumbnail_path . '/' . $cat->photo_path; ?>" border="0" alt="<?php echo $cat->photo_name; ?>" /></a></td>
          <td height="20" class="sectiontableheader"><?php echo $cat->name; ?></td>
        </tr>
        <tr valign="top">
          <td><?php echo $cat->description; ?><br /><a href="<?php echo $link; ?>"><?php echo EG_VIEW_CATEGORY; ?></a></td>
        </tr>
        </table>
        <br />
        <?php
      }
    }
    
    echo '<div style="float: right; width: 18px;">';
    echo HTML_easygallery::printUpload($row, $params);
    echo '</div>';
    //show photo's
    if(count($photos) > 0){
      echo '<div class="photos">';
      for($i=0,$m=count($photos);$i<$eg_thumbnail_rows;$i++){
        for($j=0,$n=$i*$eg_thumbnails_per_row;$j<$eg_thumbnails_per_row&&$n<$m;$j++,$n++){
          $photo = $photos[$n];

          if($params->get('use_lightbox') == 2){
            $link = $mainframe->getCfg('live_site') . $eg_original_path . '/' . $photo->path;
          } else {
            $link = sefRelToAbs('index.php?option=' . $option . '&amp;act=photos&amp;cid=' . $photo->id . '&amp;Itemid=' . $Itemid);
          }
          ?>
          <div class="photo<?php echo ($photo->state < 1 ? ' unpublished' : ''); ?>">
            <a href="<?php echo $link; ?>"<?php echo ($params->get('use_lightbox') == 2 ? ' rel="lightbox[gallery]" title="' . $photo->description . '"' : ''); ?>>
            <img src="<?php echo $mainframe->getCfg('live_site') . $eg_thumbnail_path . '/' . $photo->path; ?>" border="0" alt="<?php echo $photo->name; ?>" title="<?php echo $photo->description; ?>" /><br />
            <?php
            if($params->get('image_name')){
              echo $photo->name; 
            }
            
            ?>
            </a>
          </div>
          <?php
        }
        echo '<br clear="all" />';
      }
      ?>
      </div>
      <br />
      <?php
      $link = 'index.php?option=' . $option . '&amp;act=categories&amp;cid=' . $row->id . '&amp;Itemid=' . $Itemid;
      echo $pageNav->writePagesLinks($link);
    }
  }
  
  /**
   * Edit or add a category
   * @param mosCategory The category object
   * @param string
   */
	function editCategory( $row, $lists ) {
	  global $option, $mainframe, $Itemid;
	  
	  require_once( $mainframe->getCfg('absolute_path') . '/includes/HTML_toolbar.php' );
		?>
		<script language="javascript" type="text/javascript">
		function submitbutton(pressbutton, section) {
			var form = document.adminForm;
			if (pressbutton == 'cancel') {
				submitform( pressbutton );
				return;
			}

			if ( form.name.value == "" ) {
				alert("<?php echo EG_CATEGORY_MESSAGE_NAME; ?>");
			} else {
				<?php getEditorContents( 'editor1', 'description' ) ; ?>
				submitform(pressbutton);
			}
		}
		</script>
		
		<div class="componentheading"><?php echo $row->id ? EG_EDIT_CATEGORY : EG_ADD_CATEGORY;?></div>
		
    <div align="right">
			<?php
			// Toolbar Top
			mosToolBar::startTable();
			mosToolBar::save();
			mosToolBar::apply();
			mosToolBar::cancel();
			mosToolBar::endtable();
			?>
		</div>
		
		<form action="index.php" method="post" name="adminForm">
		

		<table class="adminform" cellpadding="0" cellspacing="0">
		<tr>
			<th colspan="3" class="sectiontableheader"><?php echo EG_CATEGORY_DETAILS; ?></th>
		</tr>
		<tr>
			<td width="150"><?php echo EG_CATEGORY_TITLE; ?>:</td>
			<td colspan="2"><input class="inputbox" type="text" name="title" value="<?php echo stripslashes( $row->title ); ?>" size="50" maxlength="50" title="A short name to appear in menus" /></td>
		</tr>
		<tr>
			<td><?php echo EG_CATEGORY_NAME; ?>:</td>
			<td colspan="2"><input class="inputbox" type="text" name="name" value="<?php echo stripslashes( $row->name ); ?>" size="50" maxlength="255" title="A long name to be displayed in headings" /></td>
		</tr>
		<tr valign="top">
			<td>
			<?php echo EG_CATEGORY_ACCESS; ?>:
			</td>
			<td>
			<?php echo $lists['access']; ?>
			</td>
		</tr>
		<tr>
			<td><?php echo EG_CATEGORY_PARENT; ?>:</td>
			<td><?php echo $lists['parent_id']; ?></td>
		</tr>
		<tr>
			<td><?php echo EG_CATEGORY_PUBLISHED; ?>:</td>
			<td><?php echo $lists['published']; ?></td>
		</tr>
		<tr>
			<td valign="top" colspan="2"><?php echo EG_CATEGORY_DESCRIPTION; ?>:</td>
		</tr>
		<tr>
			<td colspan="3">
			<?php
  			// parameters : areaname, content, hidden field, width, height, rows, cols
  			editorArea( 'editor1',  $row->description , 'description', '100%;', '300', '60', '20' ) ; 
			?>
			</td>
		</tr>
		</table>

		<input type="hidden" name="option" value="<?php echo $option; ?>" />
		<input type="hidden" name="act" value="categories" />
		<input type="hidden" name="id" value="<?php echo $row->id; ?>" />
		<input type="hidden" name="Itemid" value="<?php echo $Itemid; ?>" />
		<input type="hidden" name="task" value="" />
		</form>
		<?php
	}
  
  /**
   * Show photo
   *
   * @param <var>dbPhoto</var> $row
   */
  function showPhoto($row, $params){
    global $option, $eg_image_path, $mainframe, $eg_max_width, $eg_max_height, $eg_original_path;
    
    HTML_easygallery::fixPathway($row->cid, $row);
    
    $mainframe->setPageTitle(sprintf(EG_VIEW_PHOTO, $row->name));
    $mainframe->addCustomHeadTag('<link href="'. $mainframe->getCfg('live_site') . '/components/com_easygallery/style.css" rel="stylesheet" type="text/css" />');
    
    if($params->get('use_lightbox') > 0){
      $mainframe->addCustomHeadTag('<link rel="stylesheet" href="'. $mainframe->getCfg('live_site') . '/components/com_easygallery/slimbox/css/slimbox.css" type="text/css" media="screen" />');
      if($params->get('load_mootools')){
        $mainframe->addCustomHeadTag('<script type="text/javascript" src="'. $mainframe->getCfg('live_site') . '/components/com_easygallery/slimbox/js/mootools.js"></script>');
      }
      $mainframe->addCustomHeadTag('<script type="text/javascript" src="'. $mainframe->getCfg('live_site') . '/components/com_easygallery/slimbox/js/slimbox.js"></script>');
    }
    
    echo '<div class="componentheading">' . sprintf(EG_VIEW_PHOTO, $row->name) . '</div>';

    echo '<div style="float: right; width: 35px;">';
    echo HTML_easygallery::printEdit($row, $params);
    echo HTML_easygallery::printDelete($row, $params);
    echo '</div>';
    ?>
    
    <div class="view-photo">
    <?php if($params->get('use_lightbox')){ ?>
    <a href="javascript:void(0);" onclick="Lightbox.show('<?php echo $mainframe->getCfg('live_site') . $eg_original_path . '/' . $row->path; ?>', '<?php echo addslashes(addslashes($row->name)); ?>');">
    <?php } else { ?>
    <a href="<?php echo $mainframe->getCfg('live_site') . $eg_original_path . '/' . $row->path; ?>" target="_blank">
    <?php } ?>
    <img src="<?php echo $mainframe->getCfg('live_site') . $eg_image_path . '/' . $row->path; ?>" id="eg_photo" border="0" alt="<?php echo $row->name; ?>" />
    </a><br />
    <?php 
    if($row->width > $eg_max_width || $row->height > $eg_max_height){ //display footer ?>
      <div class="small"><?php echo EG_PHOTO_THIS . ' ' . $row->width . ' * ' . $row->height . ' ' . EG_PHOTO_PIXELS; ?>
      <?php 
      if($row->size > 0){ 
        echo EG_PHOTO_AND . ' ' . $row->size . ' KB ';
      }
      echo EG_PHOTO_LARGE . '. ' . EG_PHOTO_CLICK;
      ?> 
      <?php if($params->get('use_lightbox')){ ?>
      <a href="javascript:void(0);" onclick="Lightbox.show('<?php echo $mainframe->getCfg('live_site') . $eg_original_path . '/' . $row->path; ?>', '<?php echo addslashes(addslashes($row->name)); ?>');">
      <?php } else { ?>
      <a href="<?php echo $mainframe->getCfg('live_site') . $eg_original_path . '/' . $row->path; ?>" target="_blank">
      <?php } ?>
      <?php echo EG_PHOTO_HERE; ?></a> <?php echo EG_PHOTO_TO_VIEW; ?>
      </div>
      <?php 
    } ?>
    </div>
    <br />
    <table class="adminform" width="100%" cellpadding="0" cellspacing="0">
    <?php
    if($params->get('image_name')){
      ?>
      <tr>
        <td class="sectiontableheader"><?php echo $row->name; ?></td>
      </tr>
      <?php
    }
    if($params->get('image_desc')){
      ?>
      <tr>
        <td><?php echo $row->description; ?></td>
      </tr>
      <?php
    }
    ?>
    </table>
    <?php
    HTML_easygallery::printNavigation($row, $params);
    
    if($params->get('comments') && file_exists($mainframe->getCfg('absolute_path') . '/administrator/components/com_easycomment/configuration.php')){
      define('EC_LITE', true);
      require_once($mainframe->getPath('class', 'com_easycomment'));
      $xajax->registerFunction(array("showComments", "items", "showComments"), XAJAX_POST);
    	
    	echo $xajax->getJavascript($mainframe->getCfg('live_site') . '/components/com_easycomment/xajax');
    	echo '<div id="comments"></div>' . "\n";
    	echo '<script type="text/javascript">' . "\n";
    	echo '<!--' . "\n";
    	echo 'ec_showComments(' . $row->id . ', \'easygallery\');' . "\n";
    	echo '//-->' . "\n";
    	echo '</script>' . "\n";
    }
    
    mosHTML::BackButton ( $params );
  }
  
  /**
	 * Edit or add a photo
	 * @param dbGallery gallery object
	 * @param array
	 */
	function editPhoto( $row, $lists ) {
	  global $option, $mainframe, $eg_thumbnail_path, $Itemid;
	  
	  require_once( $mainframe->getCfg('absolute_path') . '/includes/HTML_toolbar.php' );
	  ?>
	  <script language="javascript" type="text/javascript">
		function submitbutton(pressbutton, section) {
			var form = document.adminForm;
			if (pressbutton == 'cancel') {
				submitform( pressbutton );
				return;
			}

			<?php getEditorContents( 'editor1', 'description' ) ; ?>
			submitform(pressbutton);
		}
		</script>
	  
	  <form action="index.php" method="post" name="adminForm">
		<div class="componentheading"><?php echo EG_EDIT_PHOTO;?></div>
		<div align="right">
			<?php
			// Toolbar Top
			mosToolBar::startTable();
			mosToolBar::save();
			mosToolBar::apply();
			mosToolBar::cancel();
			mosToolBar::endtable();
			?>
		</div>
		<table class="adminform">
		<tr>
			<th colspan="3"><?php echo EG_PHOTO_DETAILS; ?></th>
		</tr>
		<tr>
		  <td width="150"><?php echo EG_PHOTO_NAME; ?>:</td>
		  <td><input type="text" name="name" class="inputbox" size="30" value="<?php echo $row->name; ?>" /></td>
		  <td rowspan="4"><img src="<?php echo $mainframe->getCfg('live_site') . $eg_thumbnail_path . '/' . $row->path; ?>" alt="<?php echo $row->name; ?>" border="0" /></td>
		</tr>
		<tr>
		  <td><?php echo EG_PHOTO_CATEGORY; ?>:</td>
		  <td><?php echo $lists['cid']; ?></td>
		</tr>
		<tr>
		  <td><?php echo EG_PHOTO_GALLERY_THUMBNAIL; ?>:</td>
		  <td><?php echo mosHTML::yesnoRadioList('default', '', $row->default); ?></td>
		</tr>
		<tr>
		  <td><?php echo EG_PHOTO_PUBLISHED; ?>:</td>
		  <td><?php echo mosHTML::yesnoRadioList('state', '', $row->state); ?></td>
		</tr>
		<tr valign="top">
		  <td colspan="3"><?php echo EG_PHOTO_DESCRIPTION; ?>:</td>
		</tr>
		<tr>
		  <td colspan="3"><?php 
		    // parameters : areaname, content, hidden field, width, height, rows, cols
        editorArea( 'editor1',  $row->description , 'description', '100%;', '300', '40', '20' ) ; 
        ?>
		  </td>
		</tr>
		</table>
		
		<input type="hidden" name="Itemid" value="<?php echo $Itemid; ?>" />
		<input type="hidden" name="id" value="<?php echo $row->id; ?>" />
		<input type="hidden" name="option" value="<?php echo $option; ?>" />
		<input type="hidden" name="act" value="photos" />
		<input type="hidden" name="task" value="" />
		</form>
	  <?php
	}
	
	/**
	 * Upload form
	 * 
	 * @param array lists
	 */
	function upload($lists){
	  global $option, $mainframe, $Itemid;
	  
	  require_once( $mainframe->getCfg('absolute_path') . '/includes/HTML_toolbar.php' );
	  
	  mosCommonHTML::loadOverlib();
	  ?>
	  <script language="javascript" type="text/javascript">
		function submitbutton(pressbutton, section) {
			var form = document.adminForm;
			if (pressbutton == 'cancel') {
				submitform( pressbutton );
				return;
			}

			<?php getEditorContents( 'editor1', 'description' ) ; ?>
			submitform(pressbutton);
		}
		</script>
	  
		<div class="componentheading"><?php echo EG_UPLOAD_PHOTOS; ?></div>
		
		<div align="right">
			<?php
			// Toolbar Top
			mosToolBar::startTable();
			mosToolBar::custom('doUpload', null, 'upload_f2.png', EG_UPLOAD, false);
			mosToolBar::back();
			mosToolBar::endtable();
			?>
		</div>
		<br />
		<form action="index.php" method="post" name="adminForm" enctype="multipart/form-data">
		<div align="left" class="small"><?php echo EG_UPLOAD_LIMIT; ?>: <?php echo ini_get('upload_max_filesize'); ?></div>
		<table class="adminlist" width="100%" cellpadding="0" cellspacing="0">
		<tr>
		  <td width="150"><?php echo EG_UPLOAD_CATEGORY; ?>: </td>
		  <td><?php echo $lists['cid']; ?></td>
		</tr>
		<tr>
		  <td><?php echo EG_UPLOAD_PUBLISHED; ?>: </td>
		  <td><?php echo mosHTML::yesnoRadioList('state', '', 1); ?></td>
		</tr>
		<tr>
		  <td><?php echo EG_UPLOAD_NAME; ?>: <?php echo mosToolTip(EG_UPLOAD_NAME_EMPTY, EG_UPLOAD_HELP); ?></td>
		  <td><input type="text" name="name" class="inputbox" size="30" value="" /></td>
		</tr>
		<tr valign="top">
		  <td colspan="2"><?php echo EG_UPLOAD_DESCRIPTION; ?>: </td>
		</tr>
		<tr>
		  <td colspan="2"><?php 
		    // parameters : areaname, content, hidden field, width, height, rows, cols
        editorArea( 'editor1',  '' , 'description', '100%;', '300', '60', '20' ) ; 
        ?>
		  </td>
		</tr>
		</table>
		<br />
		<div align="left">
		<?php echo EG_UPLOAD_THREE_OPTIONS; ?>
		<table class="adminlist" width="100%" cellpadding="0" cellspacing="0">
		<tr>
		  <th class="sectiontableheader" colspan="2"><?php echo EG_UPLOAD_ONE; ?></th>
		</tr>
		<tr>
		  <td width="150"><?php echo EG_UPLOAD_FILE; ?>: </td>
		  <td><input type="file" name="photo" class="inputbox" size="30" value="" /></td>
		</tr>
		</table>
		<br />
		<table class="adminlist" width="100%" cellpadding="0" cellspacing="0">
		<tr>
		  <th class="sectiontableheader" colspan="2"><?php echo EG_UPLOAD_TWO; ?></th>
		</tr>
		<tr>
		  <td width="150"><?php echo EG_UPLOAD_FILE; ?>: </td>
		  <td><input type="file" name="zip" class="inputbox" size="30" value="" /></td>
		</tr>
		</table>
		<br />
		<table class="adminlist" width="100%" cellpadding="0" cellspacing="0">
		<tr>
		  <th class="sectiontableheader" colspan="2"><?php echo EG_UPLOAD_THREE; ?></th>
		</tr>
		<tr>
		  <td width="150"><?php echo EG_UPLOAD_DIRECTORY; ?>: </td>
		  <td><input type="name" name="dir" class="inputbox" size="45" value="<?php echo $mainframe->getCfg('absolute_path'); ?>" /></td>
		</tr>
		</table>
		</div>
		<input type="hidden" name="Itemid" value="<?php echo $Itemid; ?>" />
		<input type="hidden" name="option" value="<?php echo $option; ?>" />
		<input type="hidden" name="task" value="" />
		<input type="hidden" name="act" value="photos" />
		</form>
		<?php
	}
  
  /**
   * Echo pathway
   *
   * @param int current categoryid
   */
  function fixPathway($cid, $photo = null){
    global $database, $mainframe, $Itemid, $option;

    if($cid == 0){
      return;
    }
    
    $query = "SELECT * FROM #__categories WHERE section = 'com_easygallery'";
    $database->setQuery($query);
    $cats = $database->loadObjectList('id');
    echo $database->getErrorMsg();
    
    $pathway = array();
    if(sizeof($cats) > 0){
      $cat = $cats[$cid];
      while($cat->parent_id != 0){ //echo and move level up
        $cat = $cats[$cat->parent_id];
        $pathway[] = '<a href="' . sefRelToAbs('index.php?option=' . $option . '&amp;act=categories&amp;cid=' . $cat->id . '&amp;Itemid=' . $Itemid) . '">' . $cat->name . '</a>';
      }
    }
    
    $pathway = array_reverse($pathway);
    for($i=0,$n=count($pathway);$i<$n;$i++){
      $mainframe->appendPathWay($pathway[$i]);
    }
    if(!is_null($photo)){
      //photo view, echo linked category
      $mainframe->appendPathWay('<a href="' . sefRelToAbs('index.php?option=' . $option . '&amp;act=categories&amp;cid=' . $cats[$cid]->id . '&amp;Itemid=' . $Itemid) . '">' . $cats[$cid]->name . '</a>');
      $mainframe->appendPathWay($photo->name);
    } else {
      if(sizeof($cats) > 0){
        $mainframe->appendPathWay($cats[$cid]->name);
      }
    }
  }
  
  /**
   * print previous and next buttons
   *
   * @param <var>dbPhoto</var> $row
   * @param <var>mosParameters</var> $params
   */
  function printNavigation($row, $params){
    global $option, $Itemid;
    
    $link_part = 'index.php?option=' . $option . '&amp;act=photos&amp;cid=';
    
    if ( $row->prev ) {
			$row->prev = sefRelToAbs( $link_part . $row->prev . '&amp;Itemid=' . $Itemid );
		} else {
			$row->prev = 0;
		}
		
		if ( $row->next ) {
			$row->next = sefRelToAbs( $link_part . $row->next . '&amp;Itemid=' . $Itemid );
		} else {
			$row->next = 0;
		}
		
		if ( $params->get( 'item_navigation' ) && ( $row->prev || $row->next ) ) {
			?>
			<table align="center" style="margin-top: 25px;">
			<tr>
				<?php
				if ( $row->prev ) {
					?>
					<th class="pagenav_prev">
						<a href="<?php echo $row->prev; ?>">
							<?php echo _ITEM_PREVIOUS; ?></a>
					</th>
					<?php
				}
				
				if ( $row->prev && $row->next ) {
					?>
					<td width="50">&nbsp;

					</td>
					<?php
				}
				
				if ( $row->next ) {
					?>
					<th class="pagenav_next">
						<a href="<?php echo $row->next; ?>">
							<?php echo _ITEM_NEXT; ?></a>
					</th>
					<?php
				}
				?>
			</tr>
			</table>
			<?php
		}
  }
  
	/**
   * Print edit button
   *
   * @param object $row
   * @param <var>mosParameters</var> $params
   * @return string
   */
  function printAdd($row, $params){
    global $option, $Itemid, $mainframe, $my, $act;
    
    $text = '';
    if($my->id && ($my->gid == 2)){
      $image 	= mosAdminMenus::ImageCheck( '16x16_add.png', '/components/com_easygallery/icons/', NULL, NULL, EG_ADD, EG_ADD, 1, 'middle', EG_ADD );
      
      $link = sefRelToAbs( 'index.php?option=' . $option . '&amp;act=' . $act .'&amp;task=new&amp;cid=' . $row->id . '&amp;Itemid=' . $Itemid );
      $text = '<a href="' . $link . '">'. $image . '</a>';
    }
    return $text;
  }
  
	/**
   * Print upload button
   *
   * @param object $row
   * @param <var>mosParameters</var> $params
   * @return string
   */
  function printUpload($row, $params){
    global $option, $Itemid, $mainframe, $my, $act;
    
    $text = '';
    if($my->id && ($my->gid == 2)){
      $image 	= mosAdminMenus::ImageCheck( '16x16_up.png', '/components/com_easygallery/icons/', NULL, NULL, EG_UPLOAD, EG_UPLOAD, 1, 'middle', EG_UPLOAD );
      
      $link = sefRelToAbs( 'index.php?option=' . $option . '&amp;act=photos&amp;task=new&amp;cid=' . $row->id . '&amp;Itemid=' . $Itemid );
      $text = '<a href="' . $link . '">'. $image . '</a>';
    }
    return $text;
  }
  
  /**
   * Print edit button
   *
   * @param object $row
   * @param <var>mosParameters</var> $params
   * @return string
   */
  function printEdit($row, $params){
    global $option, $Itemid, $mainframe, $my, $act;
    
    $text = '';
    if($my->id && ($my->gid == 2)){
      $image 	= mosAdminMenus::ImageCheck( '16x16_edit.png', '/components/com_easygallery/icons/', NULL, NULL, EG_EDIT, EG_EDIT, 1, 'middle', EG_EDIT );
      
      $link = sefRelToAbs( 'index.php?option=' . $option . '&amp;act=' . $act .'&amp;task=edit&amp;cid=' . $row->id . '&amp;Itemid=' . $Itemid );
      $text = '<a href="' . $link . '">'. $image . '</a>';
    }
    return $text;
  }
  
  /**
   * Print delete button
   *
   * @param object $row
   * @param <var>mosParameters</var> $params
   * @return string
   */
  function printDelete($row, $params){
    global $option, $Itemid, $mainframe, $my, $act;
    
    $text = '';
    if($my->id && ($my->gid == 2)){
      $image 	= mosAdminMenus::ImageCheck( '16x16_delete.png', '/components/com_easygallery/icons/', NULL, NULL, EG_DELETE, EG_DELETE, 1, 'middle', EG_DELETE );
      
      $link = sefRelToAbs( 'index.php?option=' . $option . '&amp;act=' . $act .'&amp;task=remove&amp;cid=' . $row->id . '&amp;Itemid=' . $Itemid );
      $text = '<a href="javascript:void(0);" onclick="if(confirm(\'' . ($act == 'photos' ? EG_DELETE_CONFIRM_PHOTO : EG_DELETE_CONFIRM_CATEGORY) . '\')) { document.location.href=\'' . $link . '\'; }">'. $image . '</a>';
    }
    return $text;
  }
  
  /**
   * Show copyright notices
   */
  function showCopyright(){
    global $mainframe;

    /**
     * Visible copyright notices, you can remove it if you like
     
   * echo '<div class="small" style="clear: both;"><br />'. EG_POWEREDBY . ' <a href="http://www.joomla-addons.org/components/easy-gallery/easy-gallery.html" target="_blank">Easy Gallery</a> &copy; 2006 <a href="http://www.joomla-addons.org" target="_blank" title="Joomla components, modules, plugins and hosting">Joomla-addons.org</a></div>';
*/
    echo '<div class="small" style="clear: both;"><br /><a href="http://rmmsa.net/index.php?option=com_easygallery&Itemid=39">RMLSA Main Gallery Page</a></div>';
    /**
     * I would appreciate it very much if you could leave this present,
     * this is something your users will never see
     */
    $mainframe->addMetaTag('Generator', 'Easy Gallery by www.joomla-addons.org');
  }
}