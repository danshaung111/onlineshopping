<?php 

  include 'include/header.php';

?>

    <div class="map">
        <div class="container-fluid container-carousel">
            <div class="row">
                <div class="col-lg-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30548.87414966237!2d96.10250267456925!3d16.84572915792939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c194e7ee58f64d%3A0x6e974e7cb775f1a9!2sHlaing%20Township%2C%20Yangon!5e0!3m2!1sen!2smm!4v1601473482563!5m2!1sen!2smm" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="contact_widget py-2">
                    <!-- <span class="fa-stack fa-1x">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fas fa-phone fa-stack-1x fa-inverse"></i>
                    </span> -->
                    <i class="fas fa-phone-alt fa-2x"></i>
                    <span class="px-3">Support@gmail.com</span>
                    <p class="px-5">+ 1 212-683-9756</p>
                </div>
                <div class="contact_widget py-2">
                    <!-- <span class="fa-stack fa-1x">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fas fa-phone fa-stack-1x fa-inverse"></i>
                    </span> -->
                    <i class="fas fa-map-marker-alt fa-2x"></i>
                    <span class="px-3">799 W 6th St Hoisington, Kansas 121</span>                    
                </div>
                <div class="contact_widget py-2 my-3">
                    <!-- <span class="fa-stack fa-1x">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fas fa-phone fa-stack-1x fa-inverse"></i>
                    </span> -->
                    <i class="fas fa-clock fa-2x"></i>
                    <span class="px-3">Mon - Sat : 8:00am - 5:00pm</sapn>
                    <p class="px-5">Sunday: 8:00am - 7:00pm</p>
                </div>
            </div>
            <div class="col-md-8 col-lg-8 col-sm-12">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <label for="exampleFormControlInput1">Name</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name">
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <label for="exampleFormControlInput1">Email address</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                        </div>
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Example textarea</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <button class="btn btn-outline-dark text-center my-3">Send</button>
            </div>
        </div>  
    </div>

<?php 

  include 'include/footer.php';

?>