<!--==========================================
                      CONTACT
    ===========================================-->
<section id="contact" class="section">
    <div class="container">
        <!-- SECTION TITLE -->
        <div class="section-title">
            <h4 class="text-uppercase text-center"><i class="title-icon icon-envelope"></i>Contact</h4>
        </div>
        <div class="row">
            <div id="contact-card" class="col-md-12 col-sm-12 col-xs-12">
                <!-- CONTACT FORM -->
                <div class="card">
                    <div class="card-content">
                        <form id="contact-form" name="c-form">
                        {{ csrf_field() }}
                        <!-- NAME -->
                            <div class="input-field">
                                <input id="name" type="text" class="validate" name="name" required>
                                <label for="name">Name</label>
                            </div>
                            <!--SUBJECT-->
                            <div class="input-field">
                                <input id="subject" type="text" class="validate" name="subject" required>
                                <label for="subject">Subject</label>
                            </div>
                            <!--EMAIL-->
                            <div class="input-field">
                                <input id="email" type="email" class="validate" name="email" required>
                                <label for="email">Email</label>
                            </div>
                            <!--MESSAGE-->
                            <div class="input-field">
                                <textarea id="message" class="materialize-textarea" name="message"
                                          required></textarea>
                                <label for="message">Message</label>
                            </div>
                            <!-- SEND BUTTON -->
                            <div class="contact-send">
                                <button id="submit" name="contactSubmit" type="submit" value="Submit"
                                        class="btn waves-effect">Send
                                </button>
                            </div>
                        </form>
                    </div>
                    <!--FORM LOADER-->
                    <div id="form-loader" class="progress is-hidden">
                        <div class="indeterminate"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>