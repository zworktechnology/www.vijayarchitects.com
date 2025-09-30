<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalgridLabel">Page Details</h5>
        </div>
        <div class="modal-body">
            <form autocomplete="off" method="POST" action="{{ route('page.store') }}">
                @csrf
                <div class="row g-3">
                    <div class="col-xxl-12">
                        <div>
                            <label for="name" class="form-label">Name<span class="text-danger">*</span></label>
                            <input type="text"
                                class="form-control @error('page_name') border border-danger @enderror" id="page_name"
                                placeholder="Name" name="page_name" spellcheck="true" autofocus
                                value="{{ old('page_name') }}">
                        </div>
                    </div>
                    <div class="col-xxl-12">
                        <div>
                            <label for="url" class="form-label">URL<span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('page_url') border border-danger @enderror"
                                id="page_url" placeholder="Ex. home" name="page_url" spellcheck="true"
                                value="{{ old('page_url') }}">
                        </div>
                    </div>
                    <div class="col-xxl-12">
                        <label for="note" class="form-label">Note</label>
                        <textarea type="text" class="form-control @error('page_note') border border-danger @enderror" rows="3"
                            spellcheck="true" name="page_note" id="page_note" placeholder="Note" value="{{ old('page_note') }}"></textarea>
                    </div>
                    <div class="col-lg-12">
                        <div class="hstack gap-2 justify-content-end">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
