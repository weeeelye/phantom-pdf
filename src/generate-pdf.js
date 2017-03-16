"use strict";
var fs = require('fs'),
    args = require('system').args,
    page = require('webpage').create();

page.paperSize = {format: 'A4', orientation: 'portrait', margin: '1cm'};

page.open(args[1], function (status) {
    if (status !== 'success') {
        console.log('Unable to load the file!');
        phantom.exit(1);
    } else {
	window.setTimeout(function () {
            page.render(args[2]);
            phantom.exit(0);
        }, 10000);
    }
});

