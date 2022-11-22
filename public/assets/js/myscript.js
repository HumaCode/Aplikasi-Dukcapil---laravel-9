const flashdata = $(".flash-data").data("flashdata");
const flashdataSuccess = $(".flash-data-success").data("flashdata-success");
console.log(flashdataSuccess);

if (flashdata) {
    Swal.fire("Oalahh...", flashdata, "warning");
}

if (flashdataSuccess) {
    Swal.fire(
        "Berhasil",
        "Akun berhasil " + flashdataSuccess + ",silahkan login..!",
        "success"
    );
}
