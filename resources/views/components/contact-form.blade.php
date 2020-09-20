<!-- Information Row -->
<div class="row d-flex justify-content-around">

    <!-- Column -->
    <div class="col-12 col-md-4">
        <!-- Feature box -->
        <div class="feature-box feature-box-sm mb-8 text-center">
            <i class="icon icon-map-pin"></i>
            <div class="title">Address</div>
            <p class="text">
                <a href="#" class="link">Sluseholmen, København SV</a>
            </p>
        </div>
        <!-- /Feature box -->
    </div>
    <!-- /Column -->

</div>
<!-- /Information Row -->

<!-- Form Row -->
<div class="row">
    <!-- Column -->
    <div class="col-12 pt-5">

        <!-- Form -->
        <form class="form-ajax" >

            <!-- Form Hidden Fields -->
            <input type="hidden" name="form" value="Contact">
            <!-- /Form Hidden Fields -->

            <!-- Row -->
            <div class="row">

                <!-- Form Group -->
                <div class="form-group col-md-6">
                    <div class="md-input">
                        <label for="frm-contact-name" class="md-label">Your Name</label>
                        <input id="frm-contact-name" type="text" name="name" class="form-control md-form-control" placeholder="Your Name... *" required>
                    </div>
                </div>
                <!-- /Form Group -->

                <!-- Form Group -->
                <div class="form-group col-md-6">
                    <div class="md-input">
                        <label for="frm-contact-email" class="md-label">E-mail Address</label>
                        <input id="frm-contact-email" type="email" name="email" class="md-form-control form-control" placeholder="E-mail address... *" required>
                    </div>
                </div>
                <!-- /Form Group -->

            </div>
            <!-- /Row -->

            <!-- Form Group -->
            <div class="form-group mb-4">
                <div class="md-input">
                    <label for="frm-contact-message" class="md-label">Message</label>
                    <textarea id="frm-contact-message" name="message" class="md-form-control form-control" placeholder="Message... " rows="6"></textarea>
                </div>
            </div>
            <!-- /Form Group -->

            <!-- Send Message Button -->
            <button type="submit" class="btn btn-primary">Send Message</button>
            <!-- /Send Message Button -->

        </form>
        <!-- Form -->

    </div>
    <!-- /Column -->
</div>
<!-- /Form Row -->
