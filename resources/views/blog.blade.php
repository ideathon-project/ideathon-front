@include('header', ['title' => 'Blog','description'=>'Bloglar','keywords'=>'Anahtar Kelimeler , Blog','image'=>'logo.png'])

<div class="theme-inner-banner">
    <div class="container">
        <h2 class="intro-title text-center">Yazılarımız</h2>
        <ul class="page-breadcrumb style-none d-flex justify-content-center">
            <li><a href="/">Ana Sayfa</a></li>
            <li class="current-page">Blog</li>
        </ul>
    </div>
    <img src="images/shape/shape_38.svg" alt="" class="shapes shape-one">
    <img src="images/shape/shape_39.svg" alt="" class="shapes shape-two">
</div> <!-- /.theme-inner-banner -->



<!--
=====================================================
    Blog Section Four
=====================================================
-->
<div class="blog-section-four pt-90 mb-150 lg-pt-40 lg-mb-100">
    <div class="container">
        <div class="row">
            <div class="col-xxl-11 m-auto">
                <div class="row">
                    <div class="col-lg-8">
                     <!-- BLOG BAŞLANGIÇ -->
                        <article class="blog-meta-three tran3s mt-45">
                            <figure class="post-img m0"><a href="/blog-detail" class="w-100 d-block"><img src="https://api.hackathonturkiye.com/media/hosting/images/1_WBhoIYUpYuv4f3xrj2Palw.png" alt="" class="w-100 tran4s"></a></figure>
                            <div class="post-data">
                                <div class="post-tag"><a href="/"> Kategori Konusu </a> - 10 Dakika okuma süresi</div>
                                <a href="/blog-detail" class="blog-title"><h4> BLOG ADI</h4></a>
                                <p> 250 harfden sonrasını ... olarak alıcaz  <a href="/blog-detail" class="read-more">[Devamı]</a></p>
                            </div> <!-- /.post-data -->
                        </article>


                        <!-- SAYFALANDIRMA -->
                        <div class="page-pagination-one pt-90">
                            <ul class="d-flex align-items-center style-none">
                                <li class="active"><a href="#">1</a></li>

                                <li class="arrow"><a href="#"><i class="bi bi-arrow-right"></i></a></li>
                            </ul>
                        </div>
                    </div>

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
                                    <li><a href="/">Ideathon</a></li>
                                    <li><a href="#">Girişim</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /.container -->
</div> <!-- /.blog-section-four -->







@include("footer")
