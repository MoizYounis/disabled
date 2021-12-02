<!-- Reggisratration Form-->
<form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post"
    action="bat/rd-mailform.php">

    
    <div class="form-wrap">
        <input class="form-input" id="contact-name" type="text" name="" data-constraints="@Required">
        <label class="form-label" for="contact-name">User Name *</label>
    </div>


    <div class="form-wrap">
        <input class="form-input" id="contact-password" type="password" name="" autocomplete="new-password" data-constraints="@Required">
        <label class="form-label" for="contact-password">Password *</label>
    </div>

    <div class="row justify-content-center">
        <div class="col-12 col-sm-7 col-lg-5">
            <button class="button button-block button-lg button-primary" type="submit">Login</button>
        </div>
    </div>
    
</form>
