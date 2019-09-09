<!--page title start-->
<section class="page-title ptb-30">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Vehicle Details</h2>
            </div>
        </div>
    </div>
</section>
<!--page title end-->

<section class="blog-section">

    <!--promo default gray box start-->
    <div class="ptb-30">
        <div class="container">

            <div class="posts-content single-post">
                <article class="post-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <div class="promo-info">
                        <?php if ($vcs !== null) {?>
                            <h2 ><a href="#" class=""><?php echo $vcs[0]->Pr_name;?></a> </h2>
                            <?php } ?>
                        </div>
                    </div><!-- Vehicle Name -->
                </div>
<?php if ($imgs!== null) {?>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class=" slider-for">
                        <?php foreach($imgs as $img) :?>
                            <div class=""><img src="<?php echo $img->Path;?>" class="img-responsive"></div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class=" slider-nav">
                                <?php foreach($imgs as $img):?>
                            <div class=""><img src="<?php echo $img->Path;?>" class="img-responsive"></div>
                            <?php endforeach; ?>
                        </div>
                            </div>
                        </div>
                    </div>
<?php } ?>


                    <div class="row">
                        <div class="col-md-12">

                        </div>
                    </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <?php if ($vcs !== null) {?>
                                    <div class="food-menu-wrapper brand-bg mt-10 mb-10  ">
                                        <div class="food-menu-intro brand-bg darken-2">
                                            <h3 class="text-uppercase white-text no-margin"><?php echo $vcs[0]->Description;?></h3>
                                        </div>
                                        <div style="padding: 10px;" class="brand-bg">
                                            <h4 class="white-text no-margin">Sales price : ASK</h4>
                                        </div>
                                    </div>
                                <table class="table table-responsive table-bordered">
                                    <tr>
                                        <td class="gray-bg">Maker</td>
                                        <td><?php echo $vcs[0]->Maker;?></td>
                                        <td class="gray-bg">Vehicle Total Weight</td>
                                        <td><?php echo $vcs[0]->VWeightTot;?></td>
                                        <td class="gray-bg">Vehicle Weight</td>
                                        <td><?php echo $vcs[0]->VWeight;?></td>
                                    </tr>
                                    <tr>
                                        <td class="gray-bg">Displacement</td>
                                        <td><?php echo $vcs[0]->Displacement;?></td>
                                        <td class="gray-bg">Category</td>
                                        <td><?php echo $vcs[0]->Model1;?></td>
                                        <td class="gray-bg">Mileage</td>
                                        <td><?php echo $vcs[0]->Mileage;?></td>
                                    </tr>
                                    <tr>
                                        <td class="gray-bg">Fuel</td>
                                        <td><?php echo $vcs[0]->Fuel;?></td>
                                        <td class="gray-bg">Model Year</td>
                                        <td><?php echo $vcs[0]->ModelYear;?></td>
                                        <td class="gray-bg">Superior Makers</td>
                                        <td><?php echo $vcs[0]->EManf;?></td>
                                    </tr>
                                    <tr>
                                        <td class="gray-bg">Capacity</td>
                                        <td><?php echo $vcs[0]->Capacity;?></td>
                                        <td class="gray-bg">Model</td>
                                        <td><?php echo $vcs[0]->Model2;?></td>
                                        <td class="gray-bg">Package Dimensions (cm)</td>
                                        <td><?php echo $vcs[0]->PackDim;?></td>
                                    </tr>
                                    <tr>
                                        <td class="gray-bg">Car Inspection Crack</td>
                                        <td><?php echo $vcs[0]->VIC;?></td>
                                        <td class="gray-bg">Shape</td>
                                        <td><?php echo $vcs[0]->Shape;?></td>
                                        <td class="gray-bg">Maximum Loading Capacity</td>
                                        <td><?php echo $vcs[0]->MaxLCapacity;?></td>
                                    </tr>
                                    <tr>
                                        <td class="gray-bg">Inspection Record</td>
                                        <td><?php echo $vcs[0]->InsRecord;?></td>
                                        <td class="gray-bg">Body Color</td>
                                        <td><?php echo $vcs[0]->BColor;?></td>
                                        <td class="gray-bg">Prime Mover</td>
                                        <td><?php echo $vcs[0]->PMover;?></td>
                                    </tr>
                                    <tr>
                                        <td class="gray-bg">Speed Control Device</td>
                                        <td><?php echo $vcs[0]->SCD;?></td>
                                        <td class="gray-bg">Body Dimensions</td>
                                        <td><?php echo $vcs[0]->BDimension;?></td>
                                        <td class="gray-bg">Mission</td>
                                        <td><?php echo $vcs[0]->Mission;?></td>
                                    </tr>
                                    <tr>
                                        <td class="gray-bg">Exhaust Gas Regulation</td>
                                        <td><?php echo $vcs[0]->EGR;?></td>
                                        <td colspan="4"></td>
                                    </tr>
                                </table>
                                <?php } ?>
                                <div class="row">
                                	<div class="col-md-4 col-md-offset-4 text-center">
                                		<a class="waves-effect waves-light btn purple" href="<?php echo base_url()?>Inquiry">
                                		 Inquiry Now <i class="material-icons right">&#xE037;</i></a>
                                	</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </article>

        </div>
    </div>
    <!--promo default box end-->

</section>