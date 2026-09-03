function bukaModalEdit(button) {
  const id = button.dataset.id;
  const nama = button.dataset.nama;
  const email = button.dataset.email;
  const noTelp = button.dataset.noTelp;
  const alamat = button.dataset.alamat;
  const usia = button.dataset.usia;

  document.getElementById("edit_id").value = id;
  document.getElementById("edit_nama").value = nama;
  document.getElementById("edit_email").value = email;
  document.getElementById("edit_no_telp").value = noTelp;
  document.getElementById("edit_alamat").value = alamat;
  document.getElementById("edit_usia").value = usia;

  document.getElementById("modalEdit").classList.add("show");
}

function tutupModalEdit() {
  document.getElementById("modalEdit").classList.remove("show");
}

document.addEventListener("DOMContentLoaded", function () {
  const formEdit = document.getElementById("formEdit");

  formEdit.addEventListener("submit", function (event) {
    // Mencegah reload halaman
    event.preventDefault();

    const formData = new FormData(this);

    fetch("proses_edit.php", {
      method: "POST",
      body: formData,
    })
      .then((response) => response.json())
      .then((data) => {
        alert(data.message);

        if (data.status === "success") {
          // Ambil ID user yang baru diupdate
          const id = document.getElementById("edit_id").value;

          // Cari tombol Edit berdasarkan ID
          const button = document.querySelector(`.btn-edit[data-id="${id}"]`);

          if (button) {
            // Update data pada tombol Edit
            button.dataset.nama = document.getElementById("edit_nama").value;

            button.dataset.email = document.getElementById("edit_email").value;

            button.dataset.noTelp =
              document.getElementById("edit_no_telp").value;

            button.dataset.alamat =
              document.getElementById("edit_alamat").value;

            button.dataset.usia = document.getElementById("edit_usia").value;

            // Ambil baris tabel
            const row = button.closest("tr");

            // Update isi tabel
            row.cells[1].textContent =
              document.getElementById("edit_nama").value;

            row.cells[2].textContent =
              document.getElementById("edit_email").value;

            row.cells[3].textContent =
              document.getElementById("edit_no_telp").value;

            row.cells[4].textContent =
              document.getElementById("edit_alamat").value;

            row.cells[5].textContent =
              document.getElementById("edit_usia").value;
          }

          // Tutup modal
          tutupModalEdit();

          // Reset form
          formEdit.reset();
        }
      })
      .catch((error) => {
        console.error("Error:", error);

        alert("Terjadi kesalahan!");
      });
  });
});