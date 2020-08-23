<template>
    <div>
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

            <!-- Column -->
            <div class="col-12 col-md-4">
                <!-- Feature box -->
                <div class="feature-box feature-box-sm mb-8 text-center">
                    <i class="icon icon-tablet"></i>
                    <div class="title">Phone</div>
                    <p class="text"><a href="tel:#" class="link">+45 51703414</a></p>
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

                <div class="col-12 text-center" v-if="mail_successfully_sent">
                    <h4 style="color: green">Message Sent</h4>
                </div>
                <!-- Form -->
                <form class="form-ajax" v-if=" ! mail_successfully_sent">

                    <!-- Form Hidden Fields -->
                    <input type="hidden" name="form" value="Contact">
                    <!-- /Form Hidden Fields -->

                    <!-- Row -->
                    <div class="row">

                        <!-- Form Group -->
                        <div class="form-group col-md-6">
                            <div class="md-input">
                                <label for="frm-contact-name" class="md-label">Your Name</label>
                                <input v-model="message_name" id="frm-contact-name" type="text" name="name" class="form-control md-form-control" placeholder="Your Name... *" required>
                                <small id="nameHelp" class="form-text text-danger" v-if="error.name">{{ error.name[0] }}</small>
                            </div>
                        </div>
                        <!-- /Form Group -->

                        <!-- Form Group -->
                        <div class="form-group col-md-6">
                            <div class="md-input">
                                <label for="frm-contact-email" class="md-label">E-mail Address</label>
                                <input v-model="message_email" id="frm-contact-email" type="email" name="email" class="md-form-control form-control" placeholder="E-mail address... *" required>
                                <small id="emailHelp" class="form-text text-danger" v-if="error.email">{{ error.email[0] }}</small>
                            </div>
                        </div>
                        <!-- /Form Group -->

                    </div>
                    <!-- /Row -->

                    <!-- Form Group -->
                    <div class="form-group mb-4">
                        <div class="md-input">
                            <label for="frm-contact-message" class="md-label">Message</label>
                            <textarea v-model="message_text" id="frm-contact-message" name="message" class="md-form-control form-control" placeholder="Message... " rows="6"></textarea>
                            <small id="textHelp" class="form-text text-danger" v-if="error.text">{{ error.text[0] }}</small>
                        </div>
                    </div>
                    <!-- /Form Group -->

                    <input v-model="honey_trap" type="hidden" id="email">

                    <!-- Send Message Button -->
                    <button type="button" class="btn btn-primary" @click="sendEmail">Send Message</button>
                    <!-- /Send Message Button -->

                </form>
                <!-- Form -->

            </div>
            <!-- /Column -->
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                message_name: null,
                message_text: null,
                message_email: null,
                honey_trap: null,
                mail_successfully_sent: false,
                error: {
                    name: false,
                    email: false
                }
            }
        },
        methods: {
            sendEmail() {
                axios.post('mail', {
                    name: this.message_name,
                    email: this.message_email,
                    text: this.message_text,
                    honey_trap: this.honey_trap
                }).then(response => {
                    if (response.data.outcome === 'success') {
                        this.mail_successfully_sent = true;
                    } else {

                    }
                }).catch(errors => {
                    this.error = errors.response.data.errors
                });
            }
        }
    }
</script>
