<div id="modalTambah" class="modal">
        <div class="modal-content">

            <!-- Header Modal -->
            <div class="modal-header">
                <h2>Tambah Data Pengguna</h2>

                <button
                    type="button"
                    class="modal-close"
                    onclick="tutupModalTambah()"
                >
                    &times;
                </button>
            </div>

            <!-- Form Tambah -->
            <form id="formTambah">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input
                        type="text"
                        id="nama"
                        name="nama"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="no_telp">Nomor Telepon</label>
                    <input
                        type="text"
                        id="no_telp"
                        name="no_telp"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea
                        id="alamat"
                        name="alamat"
                        required
                    ></textarea>
                </div>

                <div class="form-group">
                    <label for="usia">Usia</label>
                    <input
                        type="number"
                        id="usia"
                        name="usia"
                        required
                    >
                </div>

                <div class="modal-button">
                    <button
                        type="submit"
                        class="btn-simpan"
                    >
                        Simpan
                    </button>

                    <button
                        type="button"
                        class="btn-batal"
                        onclick="tutupModalTambah()"
                    >
                        Batal
                    </button>
                </div>
            </form>
        </div>
    </div>