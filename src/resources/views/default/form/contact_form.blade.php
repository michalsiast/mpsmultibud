

<form id="contactForm" method="POST">
    <div class="contact-formwrap">
        <div class="contact-formfield name">
            <input id="name" type="text" name="name" placeholder="Imię *" class="form-control" required>
            <div class="invalid-feedback"></div>
        </div>
        <div class="contact-formfield">
            <input id="email" type="email" name="email" placeholder="Email *" class="form-control" required>
            <div class="invalid-feedback"></div>
        </div>
        <div class="contact-formfield">
            <input id="email" type="email" name="email" placeholder="Email *" class="form-control" required>
            <div class="invalid-feedback"></div>
        </div>
        <div class="contact-formfield messages">
            <textarea id="message" name="message" rows="5" placeholder="Wiadomość *" class="form-control" required></textarea>
            <div class="invalid-feedback"></div>
        </div>
    </div>

    <div class="form-group mt-2">
        <div class="form-check">
            <input id="rule" type="checkbox" name="rule" placeholder="Rule" class="form-check-input">
            <label for="rule" class="form-check-label">{!! getConstField('contact_form_rule') !!}</label>
            <div class="invalid-feedback"></div>
        </div>
    </div>

    <div class="form-group">
        <div class="g-recaptcha" data-sitekey="{{$siteKey}}"></div>
        <div class="invalid-feedback"></div>
    </div>
    <div class="submit-btn">
        <button type="submit" class="t-btn t-btn-primary btn-text-flip bg-active"><span
                data-text="Wyślij wiadomość">Wyślij wiadomość</span><i
                class="fa-solid fa-arrow-right"></i></button>
    </div>

    <div id="alert" class="alert"></div>
</form>



@push('scripts.body.bottom')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script>
        document.getElementById('contactForm').addEventListener('submit', e => {
            e.preventDefault();
            submitForm(e.target);
        })
    </script>
@endpush
