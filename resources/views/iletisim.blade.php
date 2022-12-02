@include("header")


<div class="theme-inner-banner">
    <div class="container">
        <h2 class="intro-title text-center">İletişim</h2>
        <ul class="page-breadcrumb style-none d-flex justify-content-center">
            <li><a href="/">Anasayfa</a></li>
            <li class="current-page">İletişim</li>
        </ul>
    </div>
    <img src="images/shape/shape_38.svg" alt="" class="shapes shape-one">
    <img src="images/shape/shape_39.svg" alt="" class="shapes shape-two">
</div>




<!--<div class="fancy-short-banner-five">
    <div class="container">
        <div class="bg-wrapper">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center text-lg-start" data-aos="fade-right">
                    <h3 class="pe-xxl-5 md-pb-20">Having any Query? Book an appointment.</h3>
                </div>
                <div class="col-lg-6 text-center text-lg-end" data-aos="fade-left">
                    <a href="contact-us.html" class="msg-btn tran3s">Send Us Message</a>
                </div>
            </div>
        </div>
    </div>
</div>-->






<div class="contact-section-one mb-170 lg-mb-120">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="address-block-two text-center mb-40 sm-mb-20">
                    <div class="icon d-flex align-items-center justify-content-center m-auto"><img src="images/icon/icon_17.svg" alt=""></div>
                    <h5 class="title">Adresimiz</h5>
                    <p>Istinye Universitesi<br>Istanbul, Turkiye</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="address-block-two text-center mb-40 sm-mb-20">
                    <div class="icon d-flex align-items-center justify-content-center m-auto"><img src="images/icon/icon_18.svg" alt=""></div>
                    <h5 class="title">Bağlantı kur</h5>
                    <p><br><a target="_blank" href="https://www.linkedin.com/company/ideathon-academy/" class="call">Linkedin</a></p>
                </div>
            </div>
            <!--<div class="col-md-4">
                <div class="address-block-two text-center mb-40 sm-mb-20">
                    <div class="icon d-flex align-items-center justify-content-center m-auto"><img src="images/icon/icon_19.svg" alt=""></div>
                    <h5 class="title">Live Support</h5>
                    <p>live chat service <br><a href="#" class="webaddress">www.sincochat.com</a></p>
                </div> -->
        </div>
    </div>
</div>

<div class="mt-100 lg-mt-70">
    <div class="container">
        <div class="row gx-xxl-5">
            <div class="col-lg-6 d-flex order-lg-last">
                <div class="form-style-one">
                    <h3 class="form-title pb-40 lg-pb-20">Bize mail at.</h3>
                    <form action="inc/contact.php"  id="contact-form2" role="form" data-toggle="validator">
                        <div class="messages"></div>
                        <div class="row controls">
                            <div class="col-12">
                                <div class="input-group-meta form-group mb-30">
                                    <label>İsim*</label>
                                    <input type="text" placeholder="İsminiz" name="name" required="required" data-error="Zorunlu">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="input-group-meta form-group mb-30">
                                    <label>Email*</label>
                                    <input type="email" placeholder="ideathon@xxx.com" name="email" required="required" data-error="Zorunlu">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-group-meta form-group mb-30">
                                    <textarea placeholder="Mesajınız*" name="message" required="required" data-error="Lütfen, bize bir mesaj bırak."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-12"><button class="btn-eight ripple-btn">Mail yolla</button></div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-6 d-flex order-lg-first">
                <div class="map-area-one mt-10 me-lg-4 md-mt-50">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe class="gmap_iframe" src="https://www.google.com/maps/d/u/0/embed?mid=1c0dJU1WegCsHk8rfutEJgIu6itCU1Bw&ehbc=2E312F" width="640" height="480"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@include("footer")
