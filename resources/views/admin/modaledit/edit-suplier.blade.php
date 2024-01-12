<div class="modal custom-modal fade" id="editSuplier{{ $item->id }}">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">FORM EDIT Suplier</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form action="/edit-suplier/{{ $item->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Nama Suplier</label>
                        <input type="text" class="form-control form-white" placeholder="Masukan Nama Suplier"
                            value="{{ $item->namasuplier }}" type="text" name="namasuplier" required>
                    </div>
                    <div class="form-group">
                        <label>Kontak Suplier</label>
                        <input type="text" class="form-control form-white" placeholder="Masukan Kontak Suplier"
                            value="{{ $item->kontaksuplier }}" type="text" name="kontaksuplier" required>
                    </div>
                    <div class="form-group">
                        <label>Alamat Suplier</label>
                        <textarea class="form-control form-white" name="alamatsuplier" required>{{ $item->alamatsuplier }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select class="select form-control form-white" name="status" required>
                            <option value="1" @if ($item->status == '1') selected="selected" @endif> AKTIF
                            </option>
                            <option value="2" @if ($item->status == '2') selected="selected" @endif> TIDAK
                                AKTIF</option>
                        </select>
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
