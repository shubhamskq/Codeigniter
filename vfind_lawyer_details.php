
   

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="Breadcrumb_lawyer">
                    <a href="<?= base_url()?>">
                        <ol>Home </ol>
                    </a>
                    <a href="#"><img src="<?php echo base_url()?>assets/images/svg/chevron-right.svg" alt=""></a>
                    <a href="<?= base_url('find_lawyer')?>">
                        <ol><?=  $lawyer->fname." ".$lawyer->lname?></ol>
                    </a>
                    <a href="#"><img src="<?php echo base_url()?>assets/images/svg/chevron-right.svg" alt=""></a>
                    <ol></ol>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-2">
                <div class="profile_image_find_lawyer">
                    <a href="<?php echo base_url('find_lawyer_details')?>"><img
                            src="<?php echo base_url()?>assets/images/mobilehome/sai.webp" alt=""></a>
                </div>
                <div class="verified">
                    <img src="<?php echo base_url()?>assets/images/verified.png" alt="">
                    <p>Verified</p>
                </div>
            </div>
            <div class="col-md-10">
                <div class="lawyer_nae_details">
                    <div class="details_reating">
                        <h4><strong>Advocate <?= $lawyer->fname." ".$lawyer->lname?></strong></h4>
                        <div class="rating_find_lawyer mb-2 mt-2">
                            <p>4.2</p>
                            <img src="<?=base_url()?>assets/images/documents/star.webp" alt="">
                            <p> | 100+ user ratings</p>
                        </div>
                    </div>
                    <div class="find_lawyer_contact_us">
                        <a href="<?=base_url('legal-advice')?>"><button>Consult Now</button></a>
                    </div>
                </div>
                <div class="lawyer_nae_details mt-4">
                    <div class="details_reating wid_manage">
                        <div class="find_lawyer__op">
                            <img src="<?=base_url()?>assets/images/mobilehome/geo-alt-fill.svg" alt="">
                            <span class="pl-2"><strong>Location :</strong></span>
                            <p><?= $lawyer->address.", ".$lawyer->city?></p>
                        </div>
                        <div class="find_lawyer__op">
                            <img src="<?=base_url()?>assets/images/exp.svg" alt="">
                            <span class="pl-2"><strong>Experience :</strong></span>
                            <p><?= empty($lawyer->experience)?"N/A":$lawyer->experience ?></p>
                        </div>
                    </div>
                    <div class="one_sec_det wid_manage">
                        <div class="find_lawyer__op">
                            <img src="<?=base_url()?>assets/images/mobilehome/translate.svg" alt="">
                            <span class="pl-2"><strong>Languages :</strong></span>
                            <p><?= empty($lawyer->language)?"N/A":$lawyer->language ?></p>
                        </div>
                        <div class="find_lawyer__op">
                            <img src="<?=base_url()?>assets/images/balance.png" alt="">
                            <span class="pl-2 "><strong>Practice areas :</strong></span>
                            <p><?= empty($lawyer->practice_area)?"N/A":$lawyer->practice_area ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about_lawyer">
           <p><?= empty($lawyer->about)?"N/A":$lawyer->about ?></p>

        </div>
       <!--  <div class="court_name">
            <span><strong>Court :</strong></span>
            <p>Delhi High Court, | District Court, | Gurgaon, | District Court, | Karkardooma, | District Court, |
                Patiala House, | District Court, | Rohini, | District Court, | Saket, | District Court, | Tis Hazari, |
                Punjab and Haryana High Court, | Supreme Court Of India</p>
        </div> -->
    </div>
</section>

<section id="scroll_review">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="google_rating_review">
                    <img src="<?=base_url()?>assets/images/mobilehome/google.png" alt="google">
                    <h4>Rating</h4>
                </div>
                <div class="custormer_reviews">
                    <div class="rating-star">
                        <img width="16" height="16" alt="Insaaf99 Rating and Reviews"
                            src="<?php echo base_url()?>assets/images/documents/star.webp">
                        <img width="16" height="16" alt="Insaaf99 Rating and Reviews"
                            src="<?php echo base_url()?>assets/images/documents/star.webp">
                        <img width="16" height="16" alt="Insaaf99 Rating and Reviews"
                            src="<?php echo base_url()?>assets/images/documents/star.webp">
                        <img width="16" height="16" alt="Insaaf99 Rating and Reviews"
                            src="<?php echo base_url()?>assets/images/documents/star.webp">
                        <img width="16" height="16" alt="Insaaf99 Rating and Reviews"
                            src="<?php echo base_url()?>assets/images/documents/star.webp">
                    </div>
                    <div class="review_text">
                        <p>Loved the support and communication. 100% recommended for your company’s
                            incorporation!</p>
                    </div>
                    <div class="rating_posted_on_google">

                        <div class="Icon__IconContainer Icon__IconContainer_2">
                            <img alt="Insaaf99 Rating and Reviews"
                                src="<?php echo base_url()?>assets/images/mobilehome/google.png">
                        </div>
                        <div class="ReviewSource__">
                            <p>Posted on Google</p>
                        </div>
                    </div>
                </div>
                <div class="custome_details">
                    <div class="customer_img_on_review">
                        <img alt="customer_image" src="<?php echo base_url()?>assets/images/mobilehome/vishal.webp">
                    </div>
                    <div class="customer_name">
                        <h6>Vishal Gupta</h6>
                        <p><small>3 Days ago</small></p>
                    </div>
                    <div class="blue_tick">
                        <img alt="customer_image"
                            src="<?php echo base_url()?>assets/images/mobilehome/patch-check-fill.svg">
                    </div>
                </div>
                <div class="custormer_reviews">
                    <div class="rating-star">
                        <img width="16" height="16" alt="Insaaf99 Rating and Reviews"
                            src="<?php echo base_url()?>assets/images/documents/star.webp">
                        <img width="16" height="16" alt="Insaaf99 Rating and Reviews"
                            src="<?php echo base_url()?>assets/images/documents/star.webp">
                        <img width="16" height="16" alt="Insaaf99 Rating and Reviews"
                            src="<?php echo base_url()?>assets/images/documents/star.webp">
                        <img width="16" height="16" alt="Insaaf99 Rating and Reviews"
                            src="<?php echo base_url()?>assets/images/documents/star.webp">
                        <img width="16" height="16" alt="Insaaf99 Rating and Reviews"
                            src="<?php echo base_url()?>assets/images/documents/star.webp">
                    </div>
                    <div class="review_text">
                        <p>Very good experience with Vinny ji</p>
                    </div>
                    <div class="rating_posted_on_google">

                        <div class="Icon__IconContainer Icon__IconContainer_2">
                            <img alt="Insaaf99 Rating and Reviews"
                                src="<?php echo base_url()?>assets/images/mobilehome/google.png">
                        </div>
                        <div class="ReviewSource__">
                            <p>Posted on Google</p>
                        </div>
                    </div>
                </div>

                <div class="custome_details">
                    <div class="customer_img_on_review">
                        <img alt="customer_image" src="<?php echo base_url()?>assets/images/mobilehome/yashi.webp">
                    </div>
                    <div class="customer_name">
                        <h6>Yashi Jain</h6>
                        <p><small>5 Days ago</small></p>
                    </div>
                    <div class="blue_tick">
                        <img alt="customer_image"
                            src="<?php echo base_url()?>assets/images/mobilehome/patch-check-fill.svg">
                    </div>
                </div>
                <div class="custormer_reviews">
                    <div class="rating-star">
                        <img width="16" height="16" alt="Insaaf99 Rating and Reviews"
                            src="<?php echo base_url()?>assets/images/documents/star.webp">
                        <img width="16" height="16" alt="Insaaf99 Rating and Reviews"
                            src="<?php echo base_url()?>assets/images/documents/star.webp">
                        <img width="16" height="16" alt="Insaaf99 Rating and Reviews"
                            src="<?php echo base_url()?>assets/images/documents/star.webp">
                        <img width="16" height="16" alt="Insaaf99 Rating and Reviews"
                            src="<?php echo base_url()?>assets/images/documents/half_star.webp">
                        <img width="16" height="16" alt="Insaaf99 Rating and Reviews"
                            src="<?php echo base_url()?>assets/images/documents/rating.webp">
                    </div>
                    <div class="review_text">
                        <p>Some Issue to Joining a Meeting But Insaaf99 Team Help me.</p>
                    </div>
                    <div class="rating_posted_on_google">

                        <div class="Icon__IconContainer Icon__IconContainer_2">
                            <img alt="Insaaf99 Rating and Reviews"
                                src="<?php echo base_url()?>assets/images/mobilehome/google.png">
                        </div>
                        <div class="ReviewSource__">
                            <p>Posted on Google</p>
                        </div>
                    </div>
                </div>
                <div class="custome_details">
                    <div class="customer_img_on_review">
                        <img alt="customer_image" src="<?php echo base_url()?>assets/images/mobilehome/ayush.webp">
                    </div>
                    <div class="customer_name">
                        <h6>Ayush Tyagi</h6>
                        <p><small>5 Days ago</small></p>
                    </div>
                    <div class="blue_tick">
                        <img alt="customer_image"
                            src="<?php echo base_url()?>assets/images/mobilehome/patch-check-fill.svg">
                    </div>
                </div>
                <div class="custormer_reviews">
                    <div class="rating-star">
                        <img width="16" height="16" alt="Insaaf99 Rating and Reviews"
                            src="<?php echo base_url()?>assets/images/documents/star.webp">
                        <img width="16" height="16" alt="Insaaf99 Rating and Reviews"
                            src="<?php echo base_url()?>assets/images/documents/star.webp">
                        <img width="16" height="16" alt="Insaaf99 Rating and Reviews"
                            src="<?php echo base_url()?>assets/images/documents/star.webp">
                        <img width="16" height="16" alt="Insaaf99 Rating and Reviews"
                            src="<?php echo base_url()?>assets/images/documents/star.webp">
                        <img width="16" height="16" alt="Insaaf99 Rating and Reviews"
                            src="<?php echo base_url()?>assets/images/documents/star.webp">
                    </div>
                    <div class="review_text">
                        <p>Provided smooth and easy services.</p>
                    </div>
                    <div class="rating_posted_on_google">

                        <div class="Icon__IconContainer Icon__IconContainer_2">
                            <img alt="Insaaf99 Rating and Reviews"
                                src="<?php echo base_url()?>assets/images/mobilehome/google.png">
                        </div>
                        <div class="ReviewSource__">
                            <p>Posted on Google</p>
                        </div>
                    </div>
                </div>
                <div class="custome_details">
                    <div class="customer_img_on_review">
                        <img alt="customer_image" src="<?php echo base_url()?>assets/images/mobilehome/saurabh.webp">
                    </div>
                    <div class="customer_name">
                        <h6>Saurabh Singh</h6>
                        <p><small>5 Days ago</small></p>
                    </div>
                    <div class="blue_tick">
                        <img alt="customer_image"
                            src="<?php echo base_url()?>assets/images/mobilehome/patch-check-fill.svg">
                    </div>
                </div>
                <div class="custormer_reviews">
                    <div class="rating-star">
                        <img width="16" height="16" alt="Insaaf99 Rating and Reviews"
                            src="<?php echo base_url()?>assets/images/documents/star.webp">
                        <img width="16" height="16" alt="Insaaf99 Rating and Reviews"
                            src="<?php echo base_url()?>assets/images/documents/star.webp">
                        <img width="16" height="16" alt="Insaaf99 Rating and Reviews"
                            src="<?php echo base_url()?>assets/images/documents/star.webp">
                        <img width="16" height="16" alt="Insaaf99 Rating and Reviews"
                            src="<?php echo base_url()?>assets/images/documents/star.webp">
                        <img width="16" height="16" alt="Insaaf99 Rating and Reviews"
                            src="<?php echo base_url()?>assets/images/documents/star.webp">
                    </div>
                    <div class="review_text">
                        <p>Got the best legal advice from Insaaf99 for my startup. Their team was
                            knowledgeable and
                            responsive, and they helped me navigate complex legal issues with ease.
                            Highly recommended
                        </p>
                    </div>
                    <div class="rating_posted_on_google">

                        <div class="Icon__IconContainer Icon__IconContainer_2">
                            <img alt="Insaaf99 Rating and Reviews"
                                src="<?php echo base_url()?>assets/images/mobilehome/google.png">
                        </div>
                        <div class="ReviewSource__">
                            <p>Posted on Google</p>
                        </div>
                    </div>
                </div>
                <div class="custome_details">
                    <div class="customer_img_on_review">
                        <img alt="customer_image" src="<?php echo base_url()?>assets/images/mobilehome/sai.webp">
                    </div>
                    <div class="customer_name">
                        <h6>Sai Abhishek</h6>
                        <p><small>6 Days ago</small></p>
                    </div>
                    <div class="blue_tick">
                        <img alt="customer_image"
                            src="<?php echo base_url()?>assets/images/mobilehome/patch-check-fill.svg">
                    </div>
                </div>
                <div class="custormer_reviews">
                    <div class="rating-star">
                        <img width="16" height="16" alt="Insaaf99 Rating and Reviews"
                            src="<?php echo base_url()?>assets/images/documents/star.webp">
                        <img width="16" height="16" alt="Insaaf99 Rating and Reviews"
                            src="<?php echo base_url()?>assets/images/documents/star.webp">
                        <img width="16" height="16" alt="Insaaf99 Rating and Reviews"
                            src="<?php echo base_url()?>assets/images/documents/star.webp">
                        <img width="16" height="16" alt="Insaaf99 Rating and Reviews"
                            src="<?php echo base_url()?>assets/images/documents/star.webp">
                        <img width="16" height="16" alt="Insaaf99 Rating and Reviews"
                            src="<?php echo base_url()?>assets/images/documents/star.webp">
                    </div>
                    <div class="review_text">
                        <p>इंसाफ99 के वकील वास्तव में सबसे अच्छे हैं। उन्होंने मुझे एक कानूनी नोटिस और
                            एस्टेट प्लानिंग
                            को मूल रूप से तैयार करने में मदद की। मेरी आवश्यकताओं के अनुरूप व्यावहारिक
                            सलाह प्रदान की</p>
                    </div>
                    <div class="rating_posted_on_google">

                        <div class="Icon__IconContainer Icon__IconContainer_2">
                            <img alt="Insaaf99 Rating and Reviews"
                                src="<?php echo base_url()?>assets/images/mobilehome/google.png">
                        </div>
                        <div class="ReviewSource__">
                            <p>Posted on Google</p>
                        </div>
                    </div>
                </div>
                <div class="custome_details">
                    <div class="customer_img_on_review">
                        <img alt="customer_image" src="<?php echo base_url()?>assets/images/mobilehome/monika.webp">
                    </div>
                    <div class="customer_name">
                        <h6>Monika Garg</h6>
                        <p><small>7 Days ago</small></p>
                    </div>
                    <div class="blue_tick">
                        <img alt="customer_image"
                            src="<?php echo base_url()?>assets/images/mobilehome/patch-check-fill.svg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="add_review">
                    <p><strong>Add Your Review Click Here</strong></p>
                    <a href="<?php echo base_url()?>"><button>Add Your Review <img src="<?php echo base_url()?>assets/images/click.gif" alt=""></button></a>
                </div>
            </div>
        </div>
    </div>
</section> -->


