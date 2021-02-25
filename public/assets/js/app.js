$(() => {
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });
    $('.icon-button').tooltip();
});

const __token = $(`meta[name='csrf-token']`).attr('content');