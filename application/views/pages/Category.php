<section class="">
    <!--promo default gray box start-->
    <div class="page-title ptb-30">
        <div class="container">
            <div class="text">
                <h2 class="text-uppercase">Vehicles  List</h2>
            </div>
        </div>
    </div>
    <div class="ptb-50">
        <div class="container">

            <?php if($products) {
            foreach ($products as $data):?>
            <div class="post-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <div class="promo-info">
                            <h4 ><a href="<?php echo base_url(); ?>View/vehicle/<?php echo $data->Id;?>" class=""><?php echo $data->Pr_name; ?></a> </h4>
                        </div>
                    </div><!-- Vehicle Name -->
                </div>

                <div class="row">
                    <div class="col-md-2">
                        <div class="">
                            <a href="#"><img src="<?php echo $data->Path?>" class="img-responsive"> </a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div >
                            <table class="table table-bordered">
                                <tbody>
                                <tr>
                                    <th scope="row">Model year</th>
                                         <td><?php echo $data->ModelYear?></td>
                                    <th scope="row">Mileage</th>
                                        <td><?php echo $data->Mileage?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Type expression</th>
                                         <td>Asunt in anim uis aute</td>
                                    <th scope="row">Price</th>
                                        <td>ASK</td>
                                </tr>
                                </tbody>
                            </table>
                        <p><i class="fa fa-star"></i> Asunt in anim uis aute irure <i class="fa fa-star"></i> dolor in reprehenderit <i class="fa fa-star"></i>  voluptate velit esse <i class="fa fa-star"></i> cillum dolore eu
                            fugiat nulla pariatur <i class="fa fa-star"></i> Excepteur sint occaecat cupidatat non proident</p>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="mtb-50">
                            <a href="<?php echo base_url(); ?>View/vehicle/<?php echo $data->Id;?>" class="btn pink waves-effect waves-light">Know More </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach;
            }
            ?>
        </div>
    </div>
    <!--promo default box end-->

<div class="row ">
       <?php if($links) {
        foreach ($links as $data):
           echo $data;
       endforeach;
       }
        ?>
   </div>




</section>