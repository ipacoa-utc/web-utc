<?php   

  require '../../config.php';  
  include '../../includes/headerPage.php';

?>

      <!-- Page Content-->
      <main class="page-content">
        <!-- Section single project type 2-->
        <section class="section-top-98 section-sm-top-110 section-bottom-34">
          <div class="shell">
          	<br><br>
            <h2 class="text-bold">Licenciatura en Administraci&oacute;n de Empresas con &eacute;nfasis en Recursos Humanos</h2>
            <hr class="divider bg-mantis">
            <div class="offset-sm-top-66">
              <div class="range">
              	<div class="cell-md-5 cell-lg-12">
              		<a target="_blank" href="<?php echo $WDATA->res; ?>planEstudios/pl_lic_rrhh.pdf">Plan de estudios <span style="font-size: 24px;" class="rd-navbar-icon mdi mdi-file-pdf"></span></a><br><br></div>
                <div class="cell-md-5 cell-lg-4">
                	<img width="350" height="263" src="<?php echo $WDATA->img; ?>mods/carreras/lic_RRHH.jpg" alt="">
                </div>

                <div class="cell-md-7 cell-lg-8 text-md-left inset-md-left-30 offset-top-66 offset-sm-top-0">
                  <div class="range">

                  <div class="">
                            <!-- Bootstrap Table-->
                            <div class="table-responsive clearfix">
                              <table class="table table-striped">
                                <tr>
                                  <th>Sedes donde se imparte</th>
                                  <th>Oferta acad&eacute;mica</th>
                                </tr>
                                <tr>
                                  <th>San Jos&eacute;</th>
                                  <td><a target="_blank" href="<?php echo $WDATA->res; ?>ofertaAcademica/sanJose/lic_recursos_humanos.pdf"><span class="rd-navbar-icon mdi mdi-file-pdf"></span></a></td>
                                </tr> 
                                                          
                                
                              </table>
                            </div>
                  </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <br><br>
      </main>
      <!-- Page Footer-->

<?php

  include '../../includes/footer.php';

?>