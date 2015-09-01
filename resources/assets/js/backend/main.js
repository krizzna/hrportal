$(function () {
    //Select2
    $(".select2").select2();

    //DatePicker
    $('#bday').datepicker({
	format: 'yyyy-mm-dd',
	autoclose: true,
	todayHighlight: true,
    });
    $('#jdate').datepicker({
	format: 'yyyy-mm-dd',
	autoclose: true,
	todayHighlight: true,
    });
    $('#cdate').datepicker({
	format: 'yyyy-mm-dd',
	autoclose: true,
	todayHighlight: true,
    });
    $('#edate').datepicker({
	format: 'yyyy-mm-dd',
	autoclose: true,
	todayHighlight: true,
    });

    //Input Mask
    $('#mask').inputmask();
    $('#hphone').inputmask();
    $('#mphone').inputmask();
}(jQuery));
