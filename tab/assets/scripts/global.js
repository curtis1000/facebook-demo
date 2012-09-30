var DEMO = DEMO || {};

(function($) {
    $(function() {

    });
}(jQuery));

DEMO.Util = {
    varDump: function(variable, maxDeep) {
        var deep = 0;
        var maxDeep = maxDeep || 0;

        function fetch(object, parent)
        {
            var buffer = '';
            deep++;

            for (var i in object) {
                if (parent) {
                    objectPath = parent + '.' + i;
                } else {
                    objectPath = i;
                }

                buffer += objectPath + ' (' + typeof object[i] + ')';

                if (typeof object[i] == 'object') {
                    buffer += "\n";
                    if (deep < maxDeep) {
                        buffer += fetch(object[i], objectPath);
                    }
                } else if (typeof object[i] == 'function') {
                    buffer += "\n";
                } else if (typeof object[i] == 'string') {
                    buffer += ': "' + object[i] + "\"\n";
                } else {
                    buffer += ': ' + object[i] + "\n";
                }
            }

            deep--;
            return buffer;
        }

        if (typeof variable == 'object') {
            return fetch(variable);
        }

        return '<pre>(' + typeof variable + '): ' + variable + "\n</pre>";
    }
};