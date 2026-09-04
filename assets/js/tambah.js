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
        document.getElementById("formTambah").reset();
        tutupModalTambah();
        }

    })

    .catch(error => {
        console.error("Error:", error);
        alert("Terjadi kesalahan!");

    });

});