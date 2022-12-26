
     <!-- Breadcrumb Start -->
   <div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="#">Ana Sayfa</a>
                <a class="breadcrumb-item text-dark" href="#">Ürünler</a>
                <span class="breadcrumb-item active">İletişim</span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->


    <!-- Contact Start -->
    <div class="container-fluid">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Bize Ulaşın</span></h2>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form bg-light p-30">
                    <div id="success"></div>
                    <form  id="contactForm" novalidate="novalidate" action="index.php?SK=19" method="POST">
                        <div class="control-group">
                            <input type="text" class="form-control" name="isimsoyisim" id="name" placeholder="İsim (*)"
                                required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email (*)"
                                required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" id="subject" name="baslik" placeholder="Başlık (*)"
                                required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" rows="8" id="message" name="mesaj" placeholder="Mesaj (*)"
                                required="required"
                                data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton" name="gonder">Gönder</button>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="col-lg-5 mb-5">
                <div class="bg-light p-30 mb-30">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116795.37349911906!2d30.5525185765821!3d39.71380392372127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cc3e08220c0e5f%3A0xbc89395938049a08!2sEski%C5%9Fehir!5e0!3m2!1str!2str!4v1665351665011!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="bg-light p-30 mb-3">
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Eskişehir, TÜRKİYE</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info@example.com</p>
                    <p class="mb-2"><i class="fa fa-phone-alt text-primary mr-3"></i>+90555 555 55 55 </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


   