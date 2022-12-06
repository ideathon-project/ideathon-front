@include('header', ['title' => 'İletişim','description'=>'Açıklama İletişim','keywords'=>'Anahtar Kelimeler , İletişim','image'=>'logo.png'])



<div class="blog-details pt-90 mb-150 lg-pt-40 lg-mb-100">
    <div class="container">
        <div class="row">
            <div class="col-xxl-11 m-auto">
                <div class="row">
                    <div class="col-lg-8">
                        <article class="blog-meta-three tran3s mt-45">
                            <figure class="post-img m0"><img src="https://api.hackathonturkiye.com/media/hosting/images/1_WBhoIYUpYuv4f3xrj2Palw.png" alt="" class="w-100 tran4s"></figure>
                            <div class="post-data">
                                <div class="post-tag"><a href="#">Kategori Konusu</a> Ideathon Tarafından olusturuldu</div>
                                <div class="blog-title"><h4>BLOG ADI</h4></div>
                                <p>İçerik</p>

                                <div class="bottom-widget d-sm-flex align-items-center justify-content-between">
                                    <ul class="d-flex tags style-none pt-10">
                                        <li>Tag's:</li>
                                        <li><a href="#">Ideathon</a>,</li>
                                        <li><a href="#">Girişim</a>,</li>

                                    </ul>
                                    <!--BURASI PAYLAŞAN TAKIM İSMİ OLACAK
                                        <ul class="d-flex share-icon align-items-center style-none pt-10">
                                        <li>Share:</li>
                                        <li><a href="#"><i class="bi bi-google"></i></a></li>
                                        <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                                        <li><a href="#"><i class="bi bi-instagram"></i></a></li>
                                    </ul>-->
                                </div>
                            </div>
                        </article>
                        <!--YORUM
                            <div class="blog-comment-area mt-60">
                            <h3 class="blog-inner-title pb-15">2 Comments</h3>
                            <div class="comment border-bottom d-flex">
                                <img src="images/blog/avatar_01.jpg" alt="" class="user-avatar">
                                <div class="comment-text">
                                    <div class="name">Al Hasani</div>
                                    <div class="date">13 June, 2018, 7:30pm</div>
                                    <p>One touch of a red-hot stove is usually all we need to avoid that kind of lorem discomfort in future. The same true we experience </p>
                                    <a href="#" class="reply-btn">Reply</a>
                                </div>
                            </div>
                            <div class="comment d-flex">
                                <img src="images/blog/avatar_02.jpg" alt="" class="user-avatar">
                                <div class="comment-text">
                                    <div class="name">Rashed ka.</div>
                                    <div class="date">13 June, 2018, 7:30pm</div>
                                    <p>One touch of a red-hot stove is usually all we need to avoid that kind of lorem discomfort in future. The same true we experience </p>
                                    <a href="#" class="reply-btn">Reply</a>
                                </div>
                            </div> /.comment-text -->
   <!--                     <div class="blog-comment-form mt-60">
                            <h3 class="blog-inner-title">Leave A Comment</h3>
                            <p><a href="#">Sign in</a> to post your comment.</p>
                            <form action="#" class="mt-25">
                                <div class="input-wrapper mb-30">
                                    <textarea placeholder="Your Comment"></textarea>
                                </div>
                                <a href="#" class="btn-eight ripple-btn">Post Comment</a>
                            </form>
                        </div>
      -->             </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="blog-sidebar ps-xl-5 ps-lg-3 me-xxl-5 mt-45 md-mt-70">
                            <div class="sidebar-search mb-45">
                                <form action="#">
                                    <input type="text" placeholder="Bloglarda Ara..">
                                    <button class="tran3s"><i class="bi bi-search"></i></button>
                                </form>
                            </div>
                            <!-- BURDA KATEGORİLERE YÖNLENDİRME ATABİLİRİZ. -->
                            <div class="sidebar-category mb-50">
                                <h5 class="sidebar-title">Kategoriler</h5>
                                <ul class="style-none">
                                    <li><a href="/">Big <span>(001)</span></a></li>

                                </ul>
                            </div>

                            <!-- BURDA YAZILARA YÖNLENDİRME ATABİLİRİZ. -->
                            <div class="sidebar-keyword mb-50">
                                <h5 class="sidebar-title">Anahtar Kelimeler</h5>
                                <ul class="clearfix style-none">
                                    <li><a href="#">Ideathon</a></li>
                                    <li><a href="#">Girişim</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@include("footer")
