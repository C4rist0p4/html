<div class="message" id="contact">
    <div class="container">
        <div class="row">
            <div class="six columns">
                <h2 class="message_heading ">Say <strong>Hello</strong></h2>
                <p class="message_sub_heading">Don't be shy, drop us an emali and say hello! We are a really
                    nive bunch fo people :9
                </p>
                <div class="message-icons">
                    <div class="row">
                        <div class="message-container">
                            <div class="six columns">
                                <i class="fas fa-mobile-alt">
                                    <p>+49123456789</p>
                                </i>
                                <i class="fab fa-twitter">
                                    <p>@htmlkurs</p>
                                </i>
                                <i class="fab fa-google-plus-g">
                                    <p>plus.google.com</p>
                                </i>
                            </div>
                            <div class="six columns">
                                <i class="far fa-envelope">
                                    <p>hello@mail.welt</p>
                                </i>
                                <i class="fab fa-facebook-f">
                                    <p>fascbook.com</p>
                                </i>
                                <i class="fab fa-pinterest-p">
                                    <p>printerest.com</p>
                                </i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="six columns">
                <?php if (isset($_GET['contactes'])): ?>
                    <p id="contact-sucess">Das Formular wurde erfoglreich verschickt.</p>
                <?php endif; ?>
                <form class="contact-from" action="form.php" method="POST">
                    <label for="contact-name" class="contact-label">Your Name *</label>
                    <input name="name" id="contact-name" class="contact-input" type="text" placeholder="Your Name *" required />
                    <label for="contact-email" class="contact-label">Your Email *</label>
                    <input name="email" id="contact-email" class="contact-input" type="text" placeholder="Your Email *" required />
                    <label for="contact-message" class="contact-label">You message *</label>
                    <textarea name="message" id="contact-message" class="contact-input contact-message" placeholder="Your Message *" required></textarea>
                    <input type="submit" value="Submit Message" class="contact-submit" />
                </form>
            </div>
        </div>
    </div>
</div>