'use strict';
var notify = $.notify('<i class="fa fa-bell-o"></i><strong>Loading</strong> page jangan tutup page ini', {
    type: 'theme',
    allow_dismiss: true,
    delay: 2000,
    showProgressbar: true,
    timer: 300
});

setTimeout(function() {
    notify.update('message', '<i class="fa fa-bell-o"></i><strong>Memuat</strong> Halaman ');
}, 1000);
