<script src='https://www.google.com/recaptcha/api.js'></script> 
<script>
function validateEmail(sEmail) {
    var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    if (filter.test(sEmail)) {
        return false;
    }
    else {
        return true;
    }
}
function onSubmit(){
    var cname = $('#cname').val();
    var message = $('#inquiry').val();
    var name = $('#name').val();
    var phonetic = $('#phonetic').val();
    var phone = $('#phone').val();
    var email = $('#email').val();
    
    var err = false;
    if(cname === '') {
        err = true;
        $('.cname_warning').show();
    }else if(message === '') {
        err = true;
        $('.message_warning').show();
    }else if(name === '') {
        err = true;
        $('#name_warning').show();
    } else if(phonetic === '') {
        err = true;
        $('.phonetic_warning').show();
    }else if(phone === '') {
        err = true;
        $('.phone_warning').show();
    } else if(email === '') {
        err = true;
        $('.email_warning').show();
    } else {
       if (validateEmail(email)) {
            err = true;
            $('.emailVal_warning').show();
        }
    }
    if(err) {
    } else {
        $("#i-recaptcha").submit();
    }    
}
</script>
<!--page title end-->

<!-- contact-form-section -->
<section class="section-padding">

<div class="container">
<div class="col-md-8 col-md-offset-2 post-wrapper">
    <div class="text mb-80">
        <h2 class="text-uppercase"><i class="fa fa-check-square-o"></i> Inquiry Contents</h2>
    </div>
    <?php if($this->session->flashdata('emailSucc')){ ?>
       <div class="alert alert-success" role="alert">Your inquery has been submited.</div>
    <?php }?>
    <?php if($this->session->flashdata('emailFaild')){ ?>
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
            <form action="<?php echo base_url()?>Email/inquery" method="POST" id="i-recaptcha">

                <div class="row">
                    <div class="col-md-offset-4 col-md-4">
<!--                            --><?php //if ($this->session->flashdata('emailFaild')) {?>
<!--                            <p class="text-danger"></p>-->
<!--                            --><?php //} ?>
<!--                            --><?php //if ($this->session->flashdata('emailSucc')) {?>
<!--                                <p class="text-success"></p>-->
<!--                            --><?php //} ?>
                    </div>
                    <div class="col-md-12">
                        <div class="input-field">
                            <input type="text" name="cname" id="carName">
                            <label for="carname">Car Name <span class="text-danger"> (required)</span></label>
                        </div>

                    </div><!-- /.col-md-6 -->

                </div><!-- /.row -->

                <div class="input-field">
                    <textarea name="message" id="inquiry" class="materialize-textarea" ></textarea>
                    <label for="inquiry">Inquiry  <a href="#" rel="tooltip" title="- I want to listen to the vehicle condition in detail &#013;- I want a quote &#013;- How much is the car inspection cost?&#013;- How many days can you deliver?&#013;- Others (Please Specify)"><i class="fa fa-info-circle"></i></a><span class="text-danger"> (required) </span></label>                                       
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="input-field">
                            <input id="name" type="text" name="name" required>
                            <label for="name">Name <span class="text-danger"> (required) </span></label>
                        </div>
                    </div><!-- /.col-md-6 -->

                    <div class="col-md-6">
                        <div class="input-field">
                            <input id="Phonetic" type="text" name="phonetic" required>
                            <label for="Phonetic">Phonetic <span class="text-danger"> (required) </span></label>
                        </div>
                    </div><!-- /.col-md-6 -->
                </div><!-- /.row -->

                <div class="row">
                    <div class="col-md-6">
                        <div class="input-field">
                            <input id="phone" type="number" name="phone" required>
                            <label for="phone">Phone Number <span class="text-danger"> (required) </span></label>
                        </div>
                    </div><!-- /.col-md-6 -->

                    <div class="col-md-6">
                        <div class="input-field">
                            <input id="email" type="email" name="email" >
                            <label for="email">Email address</label>
                        </div>
                    </div><!-- /.col-md-6 -->
                </div><!-- /.row -->

                <div class="row">
                    <div class="col-md-2">
                        <div class="input-field">
                            <label for="">Trade-in car :</label>                                
                        </div>
                    </div><!-- /.col-md-2 -->

                    <div class="col-md-2">
                        <div class="input-field">
                            <input id="there" type="radio" name="optradio" value="present">
                            <label for="there">Is There</label>
                        </div>
                    </div><!-- /.col-md-2 -->

                    <div class="col-md-2">
                        <div class="input-field">
                            <input id="abs" type="radio" name="optradio" value="absent">
                            <label for="abs">Absent</label>
                        </div>
                    </div><!-- /.col-md-2 -->

                </div><!-- /.row -->
                <div class="text mtb-50">
                    <h5 ><i class="fa fa-circle-o"></i> The contents you entered will be used for the exchange of the information on used cars.</h5>
                    <h5 ><i class="fa fa-circle-o"></i> This page protects your personal information by SSL encrypted communication.</h5>
                </div>

                <button type="button" 
                        name="submit" 
                        class="g-recaptcha waves-effect waves-light btn submit-button pink mt-30 mb-sm-30"                            
                        data-sitekey="6LclNkgUAAAAAH7FS3zT-DkkN7hsp_JsqOGX5Q0y">
                        Send
                </button>
            </form>
        </div><!-- /.col-md-12 -->

    </div><!-- /.row -->
    </div>
</div>
</section>
<!-- contact-form-section End -->