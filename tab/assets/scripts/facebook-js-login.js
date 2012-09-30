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
                        alert('We now know who you are, ' + response.name + '.');
                    });
                } else {
                    alert('User cancelled login or did not fully authorize.');
                }
            });
        });
    }
};