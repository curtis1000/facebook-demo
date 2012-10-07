var DEMO = DEMO || {};

(function($) {
    $(function() {
        DEMO.JSLogin.init();
    });
}(jQuery));

DEMO.JSLogin = {
    _loggedIn: false,
    init: function () {
        if ($('.js-login').length) {
            this.bind();
        }
    },
    bind: function () {
        var self = this;
        $(document).on('click', '.js-login', function (e) {
            e.preventDefault();
            FB.getLoginStatus(function(response) {
                var loggedIn = (response.status === 'connected');
                if (! loggedIn) {
                    FB.login(function(response) {
                        if (response.authResponse) {
                            self.getMe();
                        } else {
                            self.notAuthorized();
                        }
                    });
                } else {
                    self.getMe();
                }
            });

        });
    },
    /**
     * Precondition: user is logged in to facebook app
     * Get everything we know about the user
     */
    getMe: function () {
        FB.api('/me', function(response) {
            // dump all the data we received about this person
            var output = '' +
                '<pre><h5>Data returned from Javascript SDK\'s Login method:</h5>' + DEMO.Util.varDump(response) + '</pre>';

            $('.js-login-result').html(output);
        });
    },
    /**
     * User canceled or did not authorize the app, carry out some action
     */
    notAuthorized: function () {
        $('.js-login-result').html('<code>User cancelled login or did not fully authorize.</code>');
    }
};
