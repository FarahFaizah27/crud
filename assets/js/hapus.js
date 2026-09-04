function hapusUser(id, tombol) {

    const konfirmasi = confirm(
        "Apakah Anda yakin ingin menghapus data pengguna ini?"
    );

    if (!konfirmasi) {
        return;
    }

    const formData = new FormData();

    formData.append("id", id);

    fetch("proses_hapus.php", {
        method: "POST",
        body: formData
    })

    .then(response => response.json())

    .then(data => {

        if (data.status === "success") {
            alert(data.message);
            tombol.closest("tr").remove();
        } else {
            alert(data.message);

        }

    })

    .catch(error => {
        console.error(error);
        alert("Terjadi kesalahan!");

    });

}
