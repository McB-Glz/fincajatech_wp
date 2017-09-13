<section id="section-contact" class="page-section contacto">

    <div class="container-fluid clearfix">

        <div class="row topmargin bottommargin">
            <div class="col-sm-5 border">
                <div class="img-wrapper bottommargin topmargin-xl">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/form.png" class="img-responsive img-center">
                </div>
                <address class="text-center bottommargin">
                    Bosque de Cidros 54 Int. 302 B,<br/> 
                    Bosques de las Lomas, Cuajimalpa <br/> 
                    C.P. 05120, México D.F.<br/> 
                    Tel. <a href="tel:+525552508887">+52 (55) 5250 8887</a><br/>
                    <a href="mailto:contacto@finadvice.com.mx">contacto@finadvice.com.mx</a>
                </address>
                <div class="img-wrapper text-center">
                    <!-- <img src="assets/img/logos/linkedin.png" class="img-responsive img-center"> -->
                    <a href="https://www.linkedin.com/company/finadvice-financial-solutions" target="_blank"><i class="fa fa-linkedin-square fa-3x"></i></a> <a href="https://twitter.com/FinCajaTech_Mx" target="_blank"><i class="fa fa-twitter-square fa-3x"></i></a>
                </div>
            </div>
            <!-- Contact Form
            ============================================= -->
            <div class="col-sm-7">
                <h3>Envianos tus comentarios y suscribete a nuestro Newsletter</h3>
                <div id="contact-form-result" data-notify-type="success" data-notify-msg="<i class=icon-ok-sign></i> Gracias por enviarnos tu mensaje"></div>

                <form class="nobottommargin" id="template-contactform" name="template-contactform" action="assets/include/sendemail.php" method="post">

                <div class="form-process"></div>

                <div class="col_full">
                    <label for="nombre">Nombre Completo<small>*</small></label>
                    <input type="text" id="nombre" name="nombre" value="" class="sm-form-control required" />
                </div>

                <div class="col_full">
                    <label for="template-contactform-email">Correo Electrónico<small>*</small></label>
                    <input type="email" id="email" name="email" value="" class="required email sm-form-control" />
                </div>

                <div class="clear"></div>

                <div class="col_full">
                    <label for="mensaje">Comentarios</label>
                    <textarea class="sm-form-control" id="mensaje" name="mensaje" rows="6" cols="30"></textarea>
                </div>

                <div class="col_full hidden">
                    <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
                </div>

                <div class="col_full">
                    <div class="row">
                        <div class="col-xs-12 col-sm-8 nosidepadding">
                            <div class="media">
                              <div class="media-left">
                                <input type="checkbox" name="newsletter" value="Si" id="newsletter" class="media-object">
                              </div>
                              <div class="media-body">
                                <label for="newsletter" class="text-white media-heading" style="margin-top: 5px;">Quiero suscribirme al newsletter</label>
                              </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                          <button class="button nomargin btn-block" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Enviar</button>  
                        </div>
                    </div>
                </div>

            </form>

            </div><!-- Contact Form End -->
        </div>

    </div>

</section>