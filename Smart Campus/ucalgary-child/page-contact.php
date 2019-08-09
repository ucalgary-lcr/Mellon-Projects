<?php get_header(); /* Template Name: Contact Page Template */ ?>
<div class="fieldable-panels-pane container-fluid brick main-title">
    <div class="container">
        <h1 class="mt-4 mb-3"><?php the_title() ?></h1>
        <div class="row">
            <div class="col-lg-8 mb-4">
                <h3>Send us a Message</h3>
                <form id="contactForm" name="sentMessage" novalidate="">
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label> <input class="form-control" data-validation-required-message="Please enter your name." id="name" required="" type="text">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label> <input class="form-control" data-validation-required-message="Please enter your phone number." id="phone" required="" type="tel">
                            <div class="help-block"></div>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label> <input class="form-control" data-validation-required-message="Please enter your email address." id="email" required="" type="email">
                            <div class="help-block"></div>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label> 
                            <textarea class="form-control" cols="100" data-validation-required-message="Please enter your message" id="message" maxlength="999" required="" rows="10" style="resize:none"></textarea>
                            <div class="help-block"></div>
                        </div>
                    </div>
                    <div id="success"></div><!-- For success/fail messages -->
                    <button class="btn btn-default maroon-back" id="sendMessageButton" type="submit">Send Message</button>
                </form>
            </div>
            <div class="col-lg-4 mb-4">
                <h3>University of Calgary</h3>
                <p>2500 University Drive NW <br>
                Calgary, AB T2N 1N4 <br>
                CANADA</p>
                <p><abbr title="Phone">P</abbr>: (123) 456-7890</p>
                <p><abbr title="Email">E</abbr>: <a href="mailto:name@example.com">name@example.com</a></p>
                <p><abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM</p>
            </div>
        </div><!-- /.row -->
    </div>
</div>


<?php get_footer(); ?>