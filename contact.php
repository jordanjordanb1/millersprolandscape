<?php
  $page = 'contact';
  $page_name = 'Contact';
  include_once('./includes/head.php');
?>

<style>.fb-page span{display:block;margin:0 auto;}</style>

<!-- menu end -->
<div class="container-fluid bgimage img-responsive">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="main-form g-mt-60">
                <h3 class="text-center g-pb-40 g-pt-30" style="color: #868686;">
                    Contact Us
                </h3>
                <p>
                    It would be great to hear from you! Just drop us a line and
                    ask for anything with which you think we could be helpful.
                    We are looking forward to hearing from you!
                </p>
                <form
                    action="./includes/process.php"
                    class="sky-form"
                    method="POST"
                >
                    <fieldset>
                        <section>
                            <label class="label">Your Name</label>
                            <label class="input">
                                <input
                                    type="text"
                                    name="name"
                                    class="form-control input"
                                />
                            </label>
                        </section>
                        <label class="label">Email:</label>
                        <label class="input">
                            <input
                                class="form-control input"
                                type="email"
                                name="email"
                            />
                        </label>
                        <label class="label">Phone</label>
                        <label class="input">
                            <input
                                class="form-control input"
                                type="phone"
                                name="phone"
                            />
                        </label>
                        <section>
                            <label class="label">Comments</label>
                            <label class="textarea">
                                <textarea
                                    rows="3"
                                    class="input form-control"
                                    name="message"
                                ></textarea>
                            </label>
                        </section>
                        <section>
                            <div class="inline-group">
                                <label class="checkbox"
                                    ><input
                                        type="checkbox"
                                        name="call"
                                    /><i></i> I agree I have read the Terms and
                                    Conditions and Privacy Policy</label
                                >
                            </div>
                        </section>
                    </fieldset>
                    <button
                        type="submit"
                        value="Send"
                        class="form-button"
                        onsubmit="window.ga('send', 'event', 'Submit - Contact Form', 'click')"
                    >
                        Submit<img src="img/arrow.png" />
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container" style="margin-top: 200px;">
    <div class="row">
        <div class="col-12" style="flex:auto;width:100%;">
            <div class="fb-page" style="width:auto;display:block;" data-href="https://www.facebook.com/Landscapingonthevineyard" data-tabs="timeline" data-width="500" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Landscapingonthevineyard" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Landscapingonthevineyard">Millers Pro. Landscape</a></blockquote></div>
        </div>
    </div>
</div>

<div class="mt-5"></div>

<?php include_once('./includes/footer.php'); ?>
