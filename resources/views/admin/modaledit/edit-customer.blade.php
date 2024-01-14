<div class="modal custom-modal fade" id="editCustomer{{ $item->id }}">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">FORM EDIT CUSTOMER</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form action="/edit-customer/{{ $item->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Nama Customer</label>
                                <input type="text" class="form-control form-white"
                                    placeholder="Masukan Nama Customer" type="text" value="{{ $item->namacustomer }}"
                                    name="namacustomer" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Kontak Customer</label>
                                <input type="text" class="form-control form-white"
                                    placeholder="Masukan Kontak Customer" name="kontakcustomer"
                                    value="{{ $item->kontakcustomer }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>NIK Customer</label>
                                <input type="text" class="form-control form-white" placeholder="Masukan NIK Customer"
                                    type="text" name="nikcustomer" value="{{ $item->nikcustomer }}" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Tanggal Lahir Customer</label>
                                <input type="date" class="form-control form-white"
                                    placeholder="Masukan Kontak Karyawan" value="{{ $item->tanggalcustomer }}"
                                    name="tanggalcustomer" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Point Customer</label>
                                <input type="text" class="form-control form-white" placeholder="Masukan NIK Customer"
                                    type="text" name="pointcustomer" value="{{ $item->pointcustomer }}" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Status</label>
                                <select class="select form-control form-white" name="status" required>
                                    <option value="1" @if ($item->status == '1') selected="selected" @endif>
                                        AKTIF
                                    </option>
                                    <option value="2" @if ($item->status == '2') selected="selected" @endif>
                                        TIDAK
                                        AKTIF</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Alamat Customer</label>
                        <textarea class="form-control form-white" name="alamatcustomer" required> {{ $item->alamatcustomer }}</textarea>
                    </div>
                    <div class="submit-section">
                        <button type="submit" class="btn btn-primary save-category submit-btn"
                            data-dismiss="modal">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
