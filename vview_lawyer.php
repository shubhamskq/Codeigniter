

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="Breadcrumb_lawyer">
                    <a href="<?= base_url() ?>">
                        <ol>Home </ol>
                    </a>
                    <a href="#"><img src="<?php echo base_url() ?>assets/images/svg/chevron-right.svg" alt=""></a>
                    <a href="<?= base_url('find_lawyer') ?>">
                        <?php 
                          $selectedCase =  isset($selectedCaseCat)?$selectedCaseCat['name']:''; 
                          $selectedCaseClass =  isset($selectedCaseCat)?$selectedCaseCat['class']:''; 
                        ?>
                        <ol><?= "Consult With Best ".$selectedCase." Lawyers in ".ucwords($city)." / Advocates Near By" ?></ol>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="find_lawyer_about">
                    <h2>Consult with Best <?= isset($selectedCaseCat)?$selectedCaseCat['name']:''?> Lawyers in <?= isset($city)?ucwords($city):''?>   /Advocates Near You</h2>
                    <p>Hiring an experienced <?= isset($selectedCaseCat)?$selectedCaseCat['name']:''?> lawyer is the best way you get peace of mind when dealing with
                        matrimonial cases. child custody, alimony, and mutual <?= isset($selectedCaseCat)?$selectedCaseCat['name']:''?> or contested <?= isset($selectedCaseCat)?$selectedCaseCat['name']:''?> proceedings.
                        Use Insaaf99 to consult a top rated <?= isset($selectedCaseCat)?$selectedCaseCat['name']:''?> lawyer for marriage issues in <?= isset($city)?ucwords($city):''?> to file or
                        defend
                        your mutual <?= isset($selectedCaseCat)?$selectedCaseCat['name']:''?> petition. contested <?= isset($selectedCaseCat)?$selectedCaseCat['name']:''?>, alimony, domestic violence (DV), interim
                        maintenance, 125 CrPC. dowry harassment u/s 498a, women cell complaints or any other related
                        matters. We have lawyers in all major localities of <?= isset($city)?ucwords($city):''?> including Bengali Market, Uttam Nagar,
                        Janakpuri, Paschim Vihar, Vasant Kunj, and many more. These lawyers practice in all major courts
                        in <?= isset($city)?ucwords($city):''?> including <?= isset($city)?ucwords($city):''?> High Court District Court Tis Hazari. District Court Patiala House.
                        District Court Saket, District Court Rohini, and others.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="dif_flx_find_lawyer __item_imgCol1">

    <div class="p-2"><img src="<?php echo base_url() ?>assets/images/lawyers_online.png"></div>
    <div class="p-2 __plus_year">10+ Lawyer are online</div>
</div>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex specfic_lawyer_category">
                    <div class="button_lawyer_category">
                        <?php foreach ($topCat as $class => $name) { ?>
                                <a href="<?= base_url().text_to_url($name)."-lawyers/".text_to_url($city)  ?>"><button  class="lawyer_butoon_click btnTopCat" data-class=".<?= $class ?>"  ><?= ucwords($name) ?></button></a>
                        <?php } ?>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="activelawyer d-flex not-flex">


                <div class="d-flex flex-row align-items-center map___gtx ml-auto no-auto">

                    <div class="p-2"><i class="bi bi-geo-alt-fill"></i></div>
                    <div class="p-2 __plus_year">Lawyers near me &gt;&gt;</div>
                </div>

            </div>
        </div>
    </div>
</div>
<section>
    <div class="container">
<div class="row mt-4">
                 

<?php       
if (isset($get_lawyer)) {   
    foreach ($get_lawyer as $key => $data) {      
        $userR = rand(80,299);
        $userRR = rand(10,99);
        $random1 = rand(1,9);
        $userRR = ($userRR > 50 || $userRR < 30) ?"4.".$random1:substr($userRR, 0,1).".".substr($userRR, -1);

        $address = $data->address.", ".$data->city;
        $address = strlen($address) > 30 ? substr($address,0,30)."..." : $address;

        if(!empty($data->category)){
            //Changing json data into php associative array
            $temp = json_decode($data->category,true);
            $catClass = '';
            foreach ($temp as $catId) {
                $t = isset($categoryList[$catId])?text_to_url($categoryList[$catId]->name):""; 
                $catClass .= " ".$t;
            }
        }

     ?>

            <div class="col-md-6 lawyerCon allLawyers <?= $catClass ?>">
                <div class="lawyr_find_f">
                    <div class="lawyer_list">
                        <div class="findlawyer_image">
                            <a href="<?= base_url()."advocate-".text_to_url($data->fname." ".$data->lname)."-".base64_encode($data->id) ?>"><img src=" <?= empty($data->image)?base_url()."assets/images/02.webp":"https://insaaf99.com/".$data->image ?>" alt="">
                            </a>
                        </div>
                        <div class="findlawyer_name">

                            <h5><strong><?= $data->fname?> <?= $data->lname?><span style="color:green">*</span></strong></h5>
                            <div class="rating_find_lawyer mb-2">
                                <p><?= $userRR ?></p>
                                <img src="<?= base_url() ?>assets/images/documents/star.webp" alt="">
                                <p> | <?= $userR ?>+ user ratings</p>
                            </div>
                            <div class="find_lawyer__op">
                                <img src="<?= base_url() ?>assets/images/mobilehome/geo-alt-fill.svg" alt="">
                                <p><?= $address?></p>
                            </div>
                            <div class="find_lawyer__op">
                                <img src="<?= base_url() ?>assets/images/exp.svg" alt="">
                                <p><?= $data->experience?></p>
                            </div>
                        </div>
                    </div>
                    <div class="Cont_prat_flx">
                        <div class="Skils_find_lawyer mt-2">
                            <h6><strong><?= $data->practice_area?></strong></h6>
                            <p><small>Arbitration, Cheque Bounce, Criminal, + 3 More</small></p>
                        </div>
                    
                        <div class="find_lawyer_contact_us">
                            <a href="<?= base_url()."advocate-".text_to_url($data->fname." ".$data->lname)."-".base64_encode($data->id) ?>"><button>Contact Us</button></a>
                        </div>
                    </div>
                </div>
            </div>
<?php    }} ?>
</section>


<script type="text/javascript">
    $(document).ready(function(){
        var selectedCaseClass = "<?= isset($selectedCaseClass)?$selectedCaseClass:''?>";
        // $(".btnTopCat").click(function(){
        //     var className = $(this).attr("data-class");
        //     $(".lawyerCon").addClass("d-none");
        //     $(className).removeClass("d-none");
        // });

        if(selectedCaseClass != ''){
            //console.log(selectedCaseClass);
            $(".lawyerCon").addClass("d-none");
            $("."+selectedCaseClass).removeClass("d-none");
        }   
    });



</script>
