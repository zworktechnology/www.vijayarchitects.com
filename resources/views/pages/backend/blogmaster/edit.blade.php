<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalgridLabel">Blog Master Details</h5>
        </div>
        <div class="modal-body">
            <form autocomplete="off" method="POST"
                action="{{ route('blogmaster.update', ['unique_code' => $blog_master_data->unique_code]) }}">
                @csrf
                <div class="row g-3">
                    <div class="col-xxl-12">
                        <div>
                            <label for="name" class="form-label">Name<span class="text-danger">*</span></label>
                            <input type="text"
                                class="form-control @error('master_name') border border-danger @enderror" id="master_name"
                                placeholder="Name" name="master_name" spellcheck="true" autofocus
                                value="{{ old('master_name', $blog_master_data->master_name) }}">
                        </div>
                    </div>
                    <div class="col-xxl-12">
                        <div>
                            <label for="name" class="form-label">URL<span class="text-danger"> *</span></label>
                            <input type="text"
                                class="form-control @error('master_url') border border-danger @enderror" id="master_url"
                                placeholder="Name" name="master_url" spellcheck="true" autofocus
                                value="{{ old('master_url', $blog_master_data->master_url) }}">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="hstack gap-2 justify-content-end">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
