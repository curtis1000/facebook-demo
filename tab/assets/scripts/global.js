var DEMO = DEMO || {};

(function($) {
    $(function() {
        DEMO.LoginOverlay.init();
    });
}(jQuery));

DEMO.LoginOverlay = {
    init: function () {
        if ($('.login-overlay').length) {
            this.bind();
        }
    },
    bind: function () {
        $(document).on('click', '.login-overlay', function (e) {
            e.preventDefault();
            alert('logging in...');
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