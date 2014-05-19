$(document).ready(function() {
    initMessageClosers();

    $('.datepicker-simple').fdatepicker({
        format: 'mm-dd-yyyy'
    });
});

function initMessageClosers() {
    $('.close').click(function() {
        $(this).parent().fadeOut();
    });
}
