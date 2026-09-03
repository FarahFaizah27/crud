function hapusUser(id, tombol) {

    // Konfirmasi sebelum menghapus
    const konfirmasi = confirm(
        "Apakah Anda yakin ingin menghapus data pengguna ini?"
    );

    if (!konfirmasi) {
        return;
    }

    // Membuat FormData
    const formData = new FormData();

    formData.append("id", id);

    // AJAX ke proses_hapus.php
    fetch("proses_hapus.php", {
        method: "POST",
        body: formData
    })

    .then(response => response.json())

    .then(data => {

        if (data.status === "success") {

            alert(data.message);

            // Menghapus baris tabel tanpa refresh halaman
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
