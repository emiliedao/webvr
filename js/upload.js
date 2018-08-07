
$(document).ready(function() {
    updateSelectOptions();

    if ($("#alertbox").text() == "") {
        $("#alertbox").hide();
    }
});


function updateSelectOptions() {
    $(".optionInput").hide();

    var option = $("#selectOptions").val();
    switch(option) {
        case "360image":
            $("#360imageInput").show();
            break;
        case "360stereoImage":
            $("#360stereoImageInput").show();
            break;
        case "360video":
            $("#360videoInput").show();
            break;
    }
}
