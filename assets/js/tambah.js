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

document.getElementById("formTambah").addEventListener("submit", function(event) {

    event.preventDefault();

    const formData = new FormData(this);

    fetch("proses_tambah.php", {
        method: "POST",
        body: formData
    })

    .then(response => response.json())

    .then(data => {

        alert(data.message);

        if (data.status === "success") {

           
            const tbody = document.querySelector("table tbody");
            const nomor = tbody.rows.length + 1;
            const row = document.createElement("tr");

            row.innerHTML = `
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

            tbody.appendChild(row);

            document.getElementById("formTambah").reset();

            tutupModalTambah();
        }

    })

    .catch(error => {

        console.error("Error:", error);

        alert("Terjadi kesalahan!");

    });

});