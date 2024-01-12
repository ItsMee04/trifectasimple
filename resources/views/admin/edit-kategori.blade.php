<div class="modal custom-modal fade" id="addUsers{{ $item->id }}">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">FORM EDIT KATEGORI</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"><span
                        aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <form action="/edit-kategori/{{ $item->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Jenis Kategori</label>
                        <input type="text" class="form-control form-white" placeholder="Masukan Jenis Kategori"
                            value="{{ $item->kategori }}" type="text" name="jeniskategori" required>
                        <input type="hidden" class="form-control form-white" value="{{ $item->id }}" type="text"
                            name="id" readonly>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi Kategori</label>
                        <textarea class="form-control form-white" name="deskripsikategori" required>{{ $item->deskripsi }}</textarea>
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
