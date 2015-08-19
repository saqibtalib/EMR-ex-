


document.getElementById("bed").disabled = true;
document.getElementById("room").disabled = true;
var dis1 = document.getElementById("bed");
dis1.onchange = function () {
    if (this.value != "" || this.value.length > 0) {
        document.getElementById("room").disabled = true;
    }
}

    //
    //
    // $('#ward').on('select', function() {
    //                $('#bed').attr('disabled', false);
    //            });