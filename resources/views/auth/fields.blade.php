<!-- Reggisratration Form-->
<form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post"
    action="bat/rd-mailform.php">
    <div class="form-wrap">
        <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
        <label class="form-label" for="contact-name">Name *</label>
    </div>
    <div class="form-wrap">
        <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
        <label class="form-label" for="contact-email">E-mail *</label>
    </div>
    <div class="form-wrap">
        <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@Numeric">
        <label class="form-label" for="contact-phone">Phone *</label>
    </div>
    <div class="form-wrap">
        <select class="form-input" name="" id="organization" data-constraints="@Required">
            <option value="">Select Your Organization *</option>
            <option value="1">School</option>
            <option value="2">Hospital</option>
            <option value="3">NGO</option>
            <option value="4">Others</option>
        </select>
        <label class="form-label" for="organization"></label>
    </div>
    <div class="form-wrap">
        <label class="form-label" for="contact-message"> Address *</label>
        <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
    </div>
    <div class="row justify-content-center">
        <div class="col-12 col-sm-7 col-lg-5">
            <button class="button button-block button-lg button-primary" type="submit">Register</button>
        </div>
    </div>
</form>
