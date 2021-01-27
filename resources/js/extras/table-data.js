$(function () {
    try {
        // Datatables
        $('#applicants-listing').DataTable({
            //Set Column Order By ASC
            order: [[1, 'asc']]
        });

        $('.date-picker').datepicker({
            orientation: "top auto",
            autoclose: true
        });
    } catch (error) {
        console.warn("[INFO] ----> $.mockjaxSettings is undefined");
    }
});
