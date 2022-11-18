<?php

/*/////////////////////////////////////////////////////////////////////////
//                                                                       //
// Universidad Tecnologica CONFIGURATION FILE                            //
//                                                                       //                                                                       
///////////////////////////////////////////////////////////////////////////
//                                                                       //
// NOTICE OF COPYRIGHT                                                   //
//                                                                       //
// Copyright (C) 2018 Universidad Tecnologica                            //
// https://www.utc.ac.cr                                                 //
//                                                                       //
//                                                                       //
//                                                                       //
/////////////////////////////////////////////////////////////////////////*/

unset($WDATA);
global $WDATA;
$WDATA = new stdClass();

//=========================================================================
// 0. PROTOCOL
//=========================================================================

$WDATA->protocol = 'https';

//=========================================================================
// 1. ROOT DIRECTION
//=========================================================================

$WDATA->path = $WDATA->protocol.'://'.$_SERVER['SERVER_NAME'].'/'; //ruta principal del sitio web

//=========================================================================
// 2. PATH's LOCATION
//=========================================================================

$WDATA->main = $WDATA->path;									//Main
$WDATA->css = $WDATA->path.'css/';								//CSS file [Styles]
$WDATA->img = $WDATA->path.'img/';								//Images
$WDATA->res = $WDATA->path.'res/';								//Resources
$WDATA->logo_large = $WDATA->path.'img/logos/logo_l.png'; 		//Logo
$WDATA->logo_med = $WDATA->path.'img/logos/logo_m.png'; 		//Logo
$WDATA->logo_footer = $WDATA->path.'img/logos/logo_footer.png'; //Logo
$WDATA->logo_mobile = $WDATA->path.'img/logos/logo_mobile.png'; //Logo
$WDATA->includes = $WDATA->path.'includes/'; 					//Include files
$WDATA->js = $WDATA->path.'js/'; 								//.js files
$WDATA->modules = $WDATA->path.'modules/'; 						//System modules
$WDATA->pages = $WDATA->path.'pages/'; 							//Content pages
$WDATA->assets_lp = $WDATA->path.'landing_files/'; 				//Assets landing pages
$WDATA->terms = $WDATA->path.'pages/policies'; 					//Terms & conditions

//=========================================================================
// 2. SOCIAL MEDIA
//=========================================================================

$WDATA->facebook = 'https://www.facebook.com/utc.ac.cr/';
$WDATA->googleplus = 'https://plus.google.com/109887139748680881107';
$WDATA->linkedin = 'https://www.linkedin.com/school/universidad-tecnológica/';

?>

