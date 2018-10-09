
$('#datepicker').datepicker({
    autoclose: true,
    format:"yyyy.mm.dd"
});
$('[data-mask]').inputmask();

$(document).ready(function(){
    $("#ctel").inputmask("99-9999999");
});