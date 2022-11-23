const flashdata = $(".flash-data").data("flashdata");
const flashdataSuccess = $(".flash-data-success").data("flashdata-success");
// console.log(flashdata);

if (flashdata) {
    Swal.fire({
        icon: "error",
        title: flashdata,
        text: "NIK karo Password salah cuuk..!!",
    });
}

if (flashdataSuccess) {
    Swal.fire(
        "Berhasil",
        "Akun berhasil " + flashdataSuccess + ",silahkan login..!",
        "success"
    );
}
