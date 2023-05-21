const flashData = $(".flash-data").data("flashData");

if (flashData) {
  Swal({
    title: "Data Pasien ",
    text: "Berhasil" + flashData,
    type: "success",
  });
}

// tombol hapus
$(".tombolDelete").on("click", function (e) {
  e.preventDefault();
});
