const flashData = $(".flash-data").data("flashdata");
// console.log(flashData);
if (flashData) {
  Swal.fire({
    title: "Success!",
    text: flashData,
    icon: "success",
  });
}

// tombol hapus
$(".tombolDelete").on("click", function (e) {
  e.preventDefault();
  href = $(this).attr("href");

  Swal.fire({
    title: "Apakah anda yakin?",
    text: "Data pasien akan dihapus!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Hapus!",
  }).then((result) => {
    if (result.isConfirmed) {
      document.location.href = href;
    }
  });
});
