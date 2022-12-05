@include('header', ['title' => '404','description'=>'Opps!','keywords'=>'Opps!','image'=>'logo.png'])


<div class="error-page-content d-flex align-items-center justify-content-center">
    <div class="container">
        <div class="row">
            <div class="col-xxl-6 col-lg-7 m-auto">
                <h2>Opps!</h2>
                <p class="me-xxl-5 ms-xxl-5"><i>İhtiyacınız olanı bulamıyor musunuz? <br> Bir dakikanızı ayırın ve Ana Sayfamıza dönüş sağlayın.</i></p>
                <a href="/" class="btn-eight">Ana Sayfa</a>
            </div>
        </div>
        <img src="images/assets/ils_21.svg" alt="" class="m-auto">
    </div>
    <img src="images/shape/shape_49.svg" alt="" class="shapes shape-one w-100">
</div> <!-- /.error-page-content -->

@include("footer")