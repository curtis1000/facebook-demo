var DEMO = DEMO || {};

(function($) {
    $(function() {
        DEMO.JSLogin.init();
    });
}(jQuery));

DEMO.JSLogin = {
    init: function () {
        if ($('.js-login').length) {
            this.bind();
        }
    },
    bind: function () {
        $(document).on('click', '.js-login', function (e) {
            e.preventDefault();
            FB.login(function(response) {
                if (response.authResponse) {
                    FB.api('/me', function(response) {
                        // dump all the data we received about this person
                        var output = '' +
                            '<pre><h5>Data returned from Javascript SDK\'s Login method:</h5>' + DEMO.Util.varDump(response) + '</pre>';

                        $('.js-login-result').html(output);
                    });
                } else {
                    $('.js-login-result').html('<code>User cancelled login or did not fully authorize.</code>');
                }

            });
        });
    }
};
