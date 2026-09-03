function bukaModalTambah() {

    document
        .getElementById("modalTambah")
        .classList.add("show");

}


function tutupModalTambah() {

    document
        .getElementById("modalTambah")
        .classList.remove("show");

}


document
    .getElementById("formTambah")
    .addEventListener("submit", function(event) {

        // Mencegah halaman refresh
        event.preventDefault();

        const form = this;

        // Mengambil data dari form
        const formData = new FormData(form);

        // Mengirim data ke PHP secara asynchronous
        fetch("proses_tambah.php", {

            method: "POST",

            body: formData

        })

        .then(response => response.json())

        .then(data => {

            alert(data.message);

            // Jika berhasil
            if (data.status === "success") {

                // Mengosongkan form
                form.reset();

                // Menutup modal
                tutupModalTambah();

                // Mengambil tbody tabel
                const tabel = document.getElementById("dataUsers");

                // Menghitung nomor urut
                const nomor = tabel.rows.length + 1;

                // Membuat baris baru
                const barisBaru = document.createElement("tr");
                barisBaru.dataset.id = data.user.id;

                // Mengisi data ke baris baru
                barisBaru.innerHTML = `
                    <td>${nomor}</td>
                    <td>${data.user.nama}</td>
                    <td>${data.user.email}</td>
                    <td>${data.user.no_telp}</td>
                    <td>${data.user.alamat}</td>
                    <td>${data.user.usia}</td>

                    <td class="aksi">

                <button
                    type="button"
                    class="btn-edit"

                    data-id="${data.user.id}"
                    data-nama="${data.user.nama}"
                    data-email="${data.user.email}"
                    data-no-telp="${data.user.no_telp}"
                    data-alamat="${data.user.alamat}"
                    data-usia="${data.user.usia}"

                    onclick="bukaModalEdit(this)"
                >
                    Edit
                </button>

                <button
                    type="button"
                    class="btn-hapus"
                    onclick="hapusUser(${data.user.id}, this)"
                >
                    Hapus
                </button>

                </td>
                `;

                // Menambahkan baris baru ke tabel
                tabel.appendChild(barisBaru);

            }

        })

        .catch(error => {

            console.error("Error:", error);

            alert("Terjadi kesalahan!");

        });

    });