const flashData = $(".flash-data").data("flashdata");
// console.log(flashData);
if (flashData == "ditambahkan" || flashData == "dirubah" || flashData == "dihapus") {
  Swal.fire({
    title: "Sukses",
    text: "Data berhasil " + flashData +".",
    icon: "success",
  });
}else if(flashData == "gagal"){
  Swal.fire({
    title: "Error",
    text: "Login gagal dilakukan!",
    icon: "error",
  });
}else if(flashData == "logout"){
  Swal.fire({
    title: "Sukses",
    text: "Anda berhasil logout.",
    icon: "success",
  });
}else if(flashData == "register"){
  Swal.fire({
    title: "Sukses",
    text: "Registrasi berhasil dilakukan.",
    icon: "success",
  });
}else if(flashData == "confirm"){
  Swal.fire({
    title: "Error",
    text: "Ulangi password yang sama.",
    icon: "error",
  });
}

//Tombol Logout
$(".tombol-logout").on("click", function (e) {
  e.preventDefault();

  var form = $(this).parents("form");
  Swal.fire({
    title: "Konfirmasi",
    text: "Apakah anda yakin akan logout?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Ya",
    cancelButtonText: "Tidak",
  }).then((result) => {
    if (result.value) {
      form.submit();
    }
  });
});

//Tombol Hapus
$(".tombol-hapus").on("click", function (e) {
  e.preventDefault();

  var form = $(this).parents("form");
  Swal.fire({
    title: "Konfirmasi",
    text: "Apakah yakin akan menghapus data ini?",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Ya",
    cancelButtonText: "Tidak",
  }).then((result) => {
    if (result.value) {
      form.submit();
    }
  });
});
