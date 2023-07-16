<!-- The Contact Section -->
<div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACT</h2>
    <p class="w3-opacity w3-center"><i>Fan? Drop a note!</i></p>
    <div class="w3-row w3-padding-32">
        <div class="w3-col m6 w3-large w3-margin-bottom">
            <i class="fa fa-map-marker" style="width:30px"></i> Lagos, NIGERIA<br>
            <i class="fa fa-phone" style="width:30px"></i> Phone: +234 .........<br>
            <i class="fa fa-envelope" style="width:30px"> </i> Email: mail@mail.com<br>
        </div>
        <div class="w3-col m6">
            <div id="success-message" style="display: none;">
                <p>Thank you for your message. We will get back to you soon.</p>
            </div>

            <form id="contact-form" action="{{ route('contact.submit') }}" method="POST">
                @csrf
                <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                    <div class="w3-half">
                        <input class="w3-input w3-border" type="text" value="{{ old('name') }}" placeholder="Name"
                            name="name">
                        <span class="error-message" id="name-error"></span>
                    </div>
                    <div class="w3-half">
                        <input class="w3-input w3-border" value="{{ old('email') }}" type="text" placeholder="Email"
                            name="email">
                        <span class="error-message" id="email-error"></span>
                    </div>
                </div>

                <textarea class="w3-input w3-border" id="message" name="message" placeholder="Message">{{ old('message') }}</textarea>
                <span class="error-message" id="message-error"></span>

                <button class="w3-button w3-black w3-section w3-right" type="submit" id="submit-btn">SEND</button>
                <div id="loading-spinner" style="display: none;">
                    <i class="fa fa-spinner fa-spin"></i> Sending...
                </div>
            </form>

        </div>
    </div>
</div>





<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>
    $('#contact-form').submit(function(event) {
        event.preventDefault();

        $('.error-message').text('');

        $('#submit-btn').prop('disabled', true);
        $('#submit-btn').text('');
        $('#loading-spinner').show();

        var formData = new FormData(this);


        axios.post($(this).attr('action'), formData)
            .then(function(response) {
                $('#contact-form').hide();
                $('#success-message').show();
            })
            .catch(function(error) {
                if (error.response.status === 422) {
                    var errors = error.response.data.errors;
                    for (var field in errors) {
                        if (errors.hasOwnProperty(field)) {
                            var errorMessage = errors[field][0];
                            $('#' + field + '-error').text(errorMessage);
                        }
                    }
                } else {

                }
            })
            .finally(function() {
                $('#submit-btn').prop('disabled', false);
                $('#submit-btn').text('SEND');
                $('#loading-spinner').hide();
            });
    });
</script>
