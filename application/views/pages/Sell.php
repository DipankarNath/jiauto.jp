<script src='https://www.google.com/recaptcha/api.js'></script> 
<!--page title start-->
<section class="page-title ptb-50">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Want To Sell</h2>
            </div>
        </div>
    </div>
</section>
<!--page title end-->

<!-- contact-form-section -->
<section class="ptb-50">

    <div class="container">
				<div class="col-md-8 col-md-offset-2 post-wrapper">
							<div class="text mb-30">
									<h2 class=" text-uppercase"><i class="fa fa-check-square-o"></i> Customer information (client information)</h2>
							</div>
				<?php if($this->session->flashdata('sellEmailSucc')){ ?>
           <div class="alert alert-success" role="alert">Your Request has been submited.</div>
        <?php }?>
        <?php if($this->session->flashdata('sellEmailFaild')){ ?>
           <div class="alert alert-danger" role="alert">Something went wrong. Please try again later!</div>
        <?php }?>
        <!-- ERROR MSG -->
				<?php if ($this->session->flashdata('vErr') === 'true') {?>
				<div class="alert alert-danger alert-dismissible show" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
						</button>
						<strong>Error!</strong> Your query couldn't be submited. Please try again later.
				</div>
				<?php } ?>
        <div class="row">
            <div class="col-md-12">
                <form action="<?php echo base_url()?>Email/sell" method="POST">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-field">
                                <input id="cname" type="text" name="cname" class="validate" required>
                                <label for="cname">Your name (company name) <span class="text-danger"> (required) </span></label>
                            </div>
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6">
                            <div class="input-field">
                                <input id="name" type="text" name="name" class="validate">
                                <label for="name">Contact name </label>
                            </div>
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->

                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-field">
                                <input id="addr" type="text" name="addr" class="validate" required>
                                <label for="addr">Address <span class="text-danger"> (required) </span></label>
                            </div>
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6">
                            <div class="input-field">
                                <input id="email" type="email" name="email" class="validate" required>
                                <label for="email">Email Address <span class="text-danger"> (required) </span></label>
                            </div>
                        </div><!-- /.col-md-6 -->

                    </div><!-- /.row -->

                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-field">
                                <input id="phone" type="text" name="phone" class="validate" >
                                <label for="phone">TEL </label>
                            </div>
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6">
                            <div class="input-field">
                                <input id="fax" type="text" name="fax" class="validate" >
                                <label for="fax">FAX</label>
                            </div>
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->

                    <div class="row">
                        <div class="col-md-2">
                            <div class="input-field">
                                <label for="phonetic">Contact method <span class="text-danger"> (required) </span></label>
                            </div>
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-4">
                            <div class="input-field">
                                 <select class="form-control" name="ctype" required>
                                        <option value="Default">-Select-</option>
                                        <option value="Email">Email</option>
                                        <option value="Phone">Phone</option>
                                        <option value="Fax">FAX</option>
                                    </select>
                            </div>
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->

                    <br/>
                    <br/>

                    <div class="text mb-30">
                        <h2 class=" text-uppercase"><i class="fa fa-check-square-o"></i> Vehicle Information</h2>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-field">
                                <input id="maker" type="text" name="maker" class="validate" >
                                <label for="maker">Maker </label>
                            </div>
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6">
                            <div class="input-field">
                                <input id="mname" type="text" name="mname" class="validate" >
                                <label for="mname">Model name</label>
                            </div>
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->

                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-field">
                                <input id="shape" type="text" name="shape" class="validate" >
                                <label for="shape">Shape </label>
                            </div>
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6">
                            <div class="input-field">
                                <input id="myear" type="text" name="myear" class="validate" >
                                <label for="myear">Model year</label>
                            </div>
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->

                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-field">
                                <input id="mileage" type="text" name="mileage" class="validate" >
                                <label for="mileage">Mileage </label>
                            </div>
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6">
                            <div class="input-field">
                                <input id="texp" type="text" name="texp" class="validate" >
                                <label for="texp">Type expression</label>
                            </div>
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->

                    <div class="input-field">
                        <textarea name="remark" id="remark" class="materialize-textarea" ></textarea>
                        <label for="remark"><span>Remarks</span>
                        </label>
                    </div>

                    
                

                <div class="text mb-10">
                    <h5 ><i class="fa fa-circle-o"></i> The contents you entered will be used for the exchange of the information on used cars.</h5>
                    <h5 ><i class="fa fa-circle-o"></i> This page protects your personal information by SSL encrypted communication.</h5>
                </div>
                <div class="text-center">
									<button type="submit" 
													name="submit" 
													class="g-recaptcha waves-effect waves-light btn submit-button pink mt-10 mb-sm-30"
													data-sitekey="6LclNkgUAAAAAH7FS3zT-DkkN7hsp_JsqOGX5Q0y">
													Send 
									</button>
								</div>
            </div><!-- /.col-md-12 -->

        </div><!-- /.row -->
        </form>
    </div>
    </div>
</section>
<!-- contact-form-section End -->