 <div id="modalEdit" class="modal">
        <div class="modal-content">

            <!-- Header -->
            <div class="modal-header">
                <h2>Edit Data Pengguna</h2>

                <button
                    type="button"
                    class="modal-close"
                    onclick="tutupModalEdit()"
                >
                    &times;
                </button>
            </div>

            <!-- Form Edit -->
            <form id="formEdit">
                <input
                    type="hidden"
                    id="edit_id"
                    name="id"
                >

                <div class="form-group">
                    <label for="edit_nama">Nama</label>
                    <input
                        type="text"
                        id="edit_nama"
                        name="nama"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="edit_email">Email</label>
                    <input
                        type="email"
                        id="edit_email"
                        name="email"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="edit_no_telp">Nomor Telepon</label>
                    <input
                        type="text"
                        id="edit_no_telp"
                        name="no_telp"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="edit_alamat">Alamat</label>
                    <textarea
                        id="edit_alamat"
                        name="alamat"
                        required
                    ></textarea>
                </div>

                <div class="form-group">
                    <label for="edit_usia">Usia</label>
                    <input
                        type="number"
                        id="edit_usia"
                        name="usia"
                        required
                    >
                </div>

                <div class="modal-button">
                    <button
                        type="submit"
                        class="btn-simpan"
                    >
                        Update
                    </button>

                    <button
                        type="button"
                        class="btn-batal"
                        onclick="tutupModalEdit()"
                    >
                        Batal
                    </button>
                </div>
            </form>
        </div>
    </div>