        <!-- RD Navbar Transparent-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-default rd-navbar-transparent" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-lg-auto-height="true" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-stick-up="true">
            <div class="rd-navbar-inner">

              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
        
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap">
                   <span></span>
                </button>
        
                <!--Navbar Brand-->
                <div class="rd-navbar-brand">
                   <a href="<?php echo $WDATA->main; ?>">
                      <img style='margin-top: -5px;margin-left: -15px;' width='210' height='40' src='<?php echo $WDATA->logo_med; ?>' alt=''/>
                   </a>
                </div>

              </div>
        
              <div class="rd-navbar-menu-wrap">
                <div class="rd-navbar-nav-wrap">
                  <div class="rd-navbar-mobile-scroll">

                    <!--Navbar Brand Mobile-->
                    <div class="rd-navbar-mobile-brand">
                      <a href="<?php echo $WDATA->main; ?>">
                        <img style='margin-top: -5px;margin-left: -15px;' width='138' height='31' src='<?php echo $WDATA->logo_mobile; ?>' alt=''/>
                      </a>
                    </div>

                    <!--CLOSE TAG
                    <div class="form-search-wrap">

                      <!-- RD Search Form- ->
                      <form class="form-search rd-search" action="search-results.html" method="GET">
                        <div class="form-group">
                          <label class="form-label form-search-label form-label-sm" for="rd-navbar-form-search-widget">Buscar</label>
                          <input class="form-search-input input-sm form-control form-control-gray-lightest input-sm" id="rd-navbar-form-search-widget" type="text" name="s" autocomplete="off"/>
                        </div>
                        <button class="form-search-submit" type="submit"><span class="mdi mdi-magnify"></span></button>
                      </form>

                    </div>                    
                    -->

                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                      <li class="active"><a href="<?php echo $WDATA->main; ?>"><span>Inicio</span></a></li>
                      <li><a href="<?php echo $WDATA->pages; ?>carreras"><span>Carreras</span></a>
                        
                        <div class="rd-navbar-megamenu">
                          <!-- Responsive-tabs-->
                          <div class="responsive-tabs responsive-tabs-classic" data-type="horizontal">
                            <ul class="resp-tabs-list tabs-1 text-center tabs-group-default" data-group="tabs-group-default">
                              <li>Bachillerato</li>
                              <li>Licenciatura</li>
                              <li>Maestr&iacute;a</li>
                              <li>T&eacute;cnicos</li>
                              
                            </ul>
                            <div class="resp-tabs-container text-left tabs-group-default" data-group="tabs-group-default">
                              <div class="row">
                                <ul class="col-lg-4">
                                  <li><a href="<?php echo $WDATA->pages; ?>carreras/bach_adm.php"><span class="rd-navbar-icon mdi mdi-arrow-right-bold-circle-outline"></span><span class="text-middle">Administraci&oacute;n de empresas</span></a></li>
                                  <li><a href="<?php echo $WDATA->pages; ?>carreras/bach_conta.php"><span class="rd-navbar-icon mdi mdi-arrow-right-bold-circle-outline"></span><span class="text-middle">Contadur&iacute;a</span></a></li>
                                  <li><a href="<?php echo $WDATA->pages; ?>carreras/bach_sist.php"><span class="rd-navbar-icon mdi mdi-arrow-right-bold-circle-outline"></span><span class="text-middle">Ing. Sistemas Computacionales</span></a></li>
                                </ul>
                              </div>

                              <div class="row">
                                <ul class="col-lg-4">Administraci&oacute;n de empresas
                                  <li><a href="<?php echo $WDATA->pages; ?>carreras/lic_banca_finan.php"><span class="rd-navbar-icon mdi mdi-arrow-right-bold-circle-outline"></span><span class="text-middle">Adm. Empresas &eacute;nf. Banca y Finanzas</span></a></li>
                                  <li><a href="<?php echo $WDATA->pages; ?>carreras/lic_rrhh.php"><span class="rd-navbar-icon mdi mdi-arrow-right-bold-circle-outline"></span><span class="text-middle">Adm. Empresas &eacute;nf. Recursos Humanos</span></a></li>
                                </ul>
                                <ul class="col-lg-4">Ing. en sistemas computacionales
                                  <li><a href="<?php echo $WDATA->pages; ?>carreras/lic_sist.php"><span class="rd-navbar-icon mdi mdi-arrow-right-bold-circle-outline"></span><span class="text-middle">Ing. Sistemas computacionales</span></a></li>
                                  <li><a href="<?php echo $WDATA->pages; ?>carreras/lic_sist_geren_inform.php"><span class="rd-navbar-icon mdi mdi-arrow-right-bold-circle-outline"></span><span class="text-middle">Ing. Sistemas &eacute;nf. Gerencia inform&aacute;tica</span></a></li>
                                </ul>
                                <ul class="col-lg-4">Contadur&iacute;a
                                  <li><a href="<?php echo $WDATA->pages; ?>carreras/lic_cont_pub.php"><span class="rd-navbar-icon mdi mdi-arrow-right-bold-circle-outline"></span><span class="text-middle">Contadur&iacute;a</span></a></li>
                                </ul>
                              </div>

                              <div class="row">
                                <ul class="col-lg-4">
                                  <li><a href="<?php echo $WDATA->pages; ?>carreras/maestria_geren_financiera.php"><span class="rd-navbar-icon mdi mdi-arrow-right-bold-circle-outline"></span><span class="text-middle">Profesional en Gerencia Financiera</span></a></li>                                  
                                </ul>
                              </div>
                              
                              <div class="row">
                                <ul class="col-lg-4">
                                  <li><a href="<?php echo $WDATA->pages; ?>carreras/tec_adm.php"><span class="rd-navbar-icon mdi mdi-arrow-right-bold-circle-outline"></span><span class="text-middle">T&eacute;cnico en Administraci&oacute;n de empresas</span></a></li>                                  
                                </ul>
                              </div>

                              

                            </div>
                          </div>
                        </div>
                      </li>
                      <li><a href="<?php echo $WDATA->pages; ?>matricula"><span>Matr&iacute;cula</span></a>
                        <!--CLOSE TAG
                        <ul class="rd-navbar-dropdown">
                          <li><a href="#"><span class="text-middle">Requisitos de admisi&oacute;n</span></a></li>
                          <li><a href="portfolio-fullscreen-3-columns.html"><span class="text-middle">Matr&iacute;cula primer ingreso</span></a></li>
                          <li><a href="shop-single-product-no-sidebar.html"><span>Estudiante avanzado</span></a></li>
                          <li><a href="#"><span class="text-middle">Facilidades de pago</span></a></li>                          
                        </ul>
                        -->
                      </li>
                      <li><a href="<?php echo $WDATA->pages; ?>sedes"><span>Sedes</span></a>
                        <!--CLOSE TAG
                        <ul class="rd-navbar-dropdown">
                          <li><a href="#"><span class="text-middle">San Jos&eacute;</span></a></li>
                          <li><a href="#"><span class="text-middle">Grecia</span></a></li>
                          <li><a href="#"><span>Gu&aacute;piles</span></a></li>
                          <li><a href="#"><span class="text-middle">Parrita</span></a></li>
                          <li><a href="#"><span class="text-middle">P&eacute;rez Zeled&oacute;n</span></a></li>
                          <li><a href="#"><span class="text-middle">Pursical</span></a></li>
                          <li><a href="#"><span class="text-middle">Zona Centro</span></a></li>
                        </ul>
                        -->
                      </li>
                      <li><a target="_blank" href="https://uvirtual.ac.cr"><span>U Virtual</span></a></li>                    
                      <li><a href="<?php echo $WDATA->main; ?>index.php#contact"><span>Contacto</span></a>
                        <!--CLOSE TAG
                        <div class="rd-navbar-megamenu">
                          <!-- Responsive-tabs- ->
                          <div class="responsive-tabs responsive-tabs-classic" data-type="horizontal">
                            
                            <div class="resp-tabs-container text-left tabs-group-default" data-group="tabs-group-default">
                              <div class="row">
                                <ul class="col-lg-3">
                                  <li><a href="accordions.html"><span class="rd-navbar-icon mdi mdi-email-outline"></span><span class="text-middle">Enviar correo</span></a></li>
                                  <li><a href="alerts.html"><span class="rd-navbar-icon mdi mdi-phone"></span><span class="text-middle">Llamar</span></a></li>
                                  <li><a href="counters.html"><span class="rd-navbar-icon mdi mdi-navigation"></span><span class="text-middle">Navegar</span></a></li>
                                </ul>
                                <ul class="col-lg-3">
                                  <li><a href="<?php echo $WDATA->facebook; ?>"><span class="rd-navbar-icon mdi mdi-facebook"></span><span class="text-middle">Facebook</span></a></li>
                                  <li><a href="#"><span class="rd-navbar-icon mdi mdi-whatsapp"></span><span class="text-middle">Whatsapp</span></a></li>
                                </ul>
                                <ul class="col-lg-3">
                                  <li><a href="<?php echo $WDATA->googleplus; ?>"><span class="rd-navbar-icon mdi mdi-google-plus"></span><span class="text-middle">Google +</span></a></li>
                                  <li><a href="<?php echo $WDATA->linkedin; ?>"><span class="rd-navbar-icon mdi mdi-linkedin"></span><span class="text-middle">LinkedIn</span></a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                        -->
                      </li>
                      <li><a target="_blank" href="<?php echo $WDATA->facebook; ?>"><span style="font-size:18px;" class="rd-navbar-icon mdi mdi-facebook-box"></span></a>
                    </ul>
                  </div>
                </div>

                <!--CLOSE TAG
                <!--RD Navbar Search- ->
                <div class="rd-navbar-search"><a class="rd-navbar-search-toggle mdi" data-rd-navbar-toggle=".rd-navbar-inner,.rd-navbar-search" href="#"><span></span></a>
                  <form class="rd-navbar-search-form search-form-icon-right rd-search" action="pages/search-results.html" method="GET">
                    <div class="form-group">
                      <label class="form-label" for="rd-navbar-search-form-input">Digite el texto y presione enter...</label>
                      <input class="rd-navbar-search-form-input form-control form-control-gray-lightest" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="on"/>
                    </div>
                    <!--button(type="submit").rd-navbar-search-form-submit.mdi.mdi-magnify- ->
                  </form>
                  <!--div.rd-navbar-live-search-results-->
                  <!--button(data-rd-navbar-toggle=".rd-navbar-search, .rd-navbar-inner, .rd-navbar-live-search-results").rd-navbar-search-toggle-->
                  <!--  span- ->
                </div>
                -->

              </div>
            </div>
          </nav>
        </div>                