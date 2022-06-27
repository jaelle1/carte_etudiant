
$(document).ready(function () {
    var text = $("#contain");

    $("#downloadPDF").click(function () {
        var doc = new jspdf();
        doc.html(text, 10, 10);

        doc.save("file.pdf");
    });
});