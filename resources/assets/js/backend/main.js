$(function () {
    //Select2
    $(".select2").select2();

    //DatePicker
    $('#bday').datepicker({
	format: 'yyyy-mm-dd',
	autoclose: true,
	todayHighlight: true,
	todayBtn: true,
    });
    $('#jdate').datepicker({
	format: 'yyyy-mm-dd',
	autoclose: true,
	todayHighlight: true,
	todayBtn: true,
    });
    $('#cdate').datepicker({
	format: 'yyyy-mm-dd',
	autoclose: true,
	todayHighlight: true,
	todayBtn: true,
    });
    $('#edate').datepicker({
	format: 'yyyy-mm-dd',
	autoclose: true,
	todayHighlight: true,
	todayBtn: true,
    });

    //Input Mask
    $('#mask').inputmask();
    $('#hphone').inputmask();
    $('#mphone').inputmask();
}(jQuery));
