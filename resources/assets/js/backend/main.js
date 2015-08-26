$(function () {
    //Select2
    $(".select2").select2();

    //DatePicker
    $('#bday').datepicker({
	format: 'dd/mm/yyyy',
	autoclose: true,
	todayHighlight: true,
    });

    //Input Mask
    $('#mask').inputmask();
    $('#hphone').inputmask();
    $('#mphone').inputmask();
}(jQuery));
