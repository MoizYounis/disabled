<!-- Reggisratration Form-->
<form class=""  method="POST"
    action="{{route('login')}}">
    @csrf
    <div class="form-wrap">
        <input class="form-input" id="contact-name" type="email" name="email" data-constraints="@Required">
        <label class="form-label" for="contact-name">User Name *</label>
    </div>


    <div class="form-wrap">
        <input class="form-input" id="contact-password" type="password" name="password" autocomplete="new-password" data-constraints="@Required">
        <label class="form-label" for="contact-password">Password *</label>
    </div>

    <div class="row justify-content-center">
        <div class="col-12 col-sm-7 col-lg-5">
            <button class="button button-block button-lg button-primary" type="submit">Login</button>
        </div>
    </div>
    
</form>
