<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalgridLabel">Meta & OG Details</h5>
        </div>
        <div class="modal-body">
            <form autocomplete="off" method="POST" action="{{ route('meta.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row g-3">
                    <div class="col-xxl-5">
                        <div>
                            <label for="page_id" class="form-label">Page<span class="text-danger"> *</span></label>
                            <select class="" name="page_id" id="page_id_edit">
                                <option selected disabled>Select Page</option>
                                @foreach ($page_datas as $page_data)
                                    <option value="{{ $page_data->id }}"
                                        @if (old('page_id') == $page_data->id) selected
                                        @elseif (isset($meta_data) && $meta_data->page_id == $page_data->id)
                                            selected @endif>
                                        {{ $page_data->page_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-xxl-7">
                        <label for="note" class="form-label">Note</label>
                        <input type="text" class="form-control @error('meta_note') border border-danger @enderror"
                            rows="3" spellcheck="true" name="meta_note" id="meta_note" placeholder="Note"
                            value="{{ old('meta_note', $meta_data->meta_note) }}">
                    </div>
                    <h5 class="fs-16">Meta Tag</h5>
                    <div class="col-xxl-6">
                        <div>
                            <label for="title" class="form-label">Title</label>
                            <input type="text"
                                class="form-control @error('meta_title') border border-danger @enderror" id="meta_title"
                                placeholder="Best Service Provider For You..." name="meta_title" spellcheck="true"
                                value="{{ old('meta_title', $meta_data->meta_title) }}">
                        </div>
                    </div>
                    <div class="col-xxl-6">
                        <div>
                            <label for="description" class="form-label">Description</label>
                            <input type="text"
                                class="form-control @error('meta_description') border border-danger @enderror"
                                id="meta_description" placeholder="We provide..." name="meta_description"
                                spellcheck="true" value="{{ old('meta_description', $meta_data->meta_description) }}">
                        </div>
                    </div>
                    <div class="col-xxl-12">
                        <div>
                            <label for="keyword" class="form-label">Keyword</label>
                            <input type="text"
                                class="form-control @error('meta_keyword') border border-danger @enderror"
                                id="meta_keyword" placeholder="Ex. Keyword 1, Keyword 2,..." name="meta_keyword"
                                spellcheck="true" value="{{ old('meta_keyword', $meta_data->meta_keyword) }}">
                        </div>
                    </div>
                    <h5 class="fs-16">OG Tag</h5>
                    <div class="col-xxl-6">
                        <div>
                            <label for="type" class="form-label">Type</label>
                            <input type="text" class="form-control @error('og_type') border border-danger @enderror"
                                id="og_type" placeholder="Website" name="og_type" spellcheck="true"
                                value="{{ old('og_type', $meta_data->og_type) }}">
                        </div>
                    </div>
                    <div class="col-xxl-6">
                        <div>
                            <label for="url" class="form-label">URL</label>
                            <input type="text" class="form-control @error('og_url') border border-danger @enderror"
                                id="og_url" placeholder="https://www.example.com/index" name="og_url"
                                spellcheck="true" value="{{ old('og_url', $meta_data->og_url) }}">
                        </div>
                    </div>
                    <div class="col-xxl-6">
                        <div>
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control @error('og_title') border border-danger @enderror"
                                id="og_title" placeholder="Best Service Provider For You" name="og_title"
                                spellcheck="true" value="{{ old('og_title', $meta_data->og_title) }}">
                        </div>
                    </div>
                    <div class="col-xxl-6">
                        <div>
                            <label for="description" class="form-label">Description</label>
                            <input type="text"
                                class="form-control @error('og_description') border border-danger @enderror"
                                id="og_description" placeholder="We provide..." name="og_description"
                                spellcheck="true" value="{{ old('og_description', $meta_data->og_description) }}">
                        </div>
                    </div>
                    <div class="col-xxl-6">
                        <div>
                            <label for="image" class="form-label">Image
                                <span><a href="{{ asset('assets/backend/ogimage/' . $meta_data->og_image) }}"
                                        target="_blank">View Image</a></span></label>
                            <input class="form-control @error('og_image') border border-danger @enderror"
                                type="file" id="og_image" name="og_image"
                                value="{{ old('og_image', $meta_data->og_image) }}">
                        </div>

                    </div>
                    <div class="col-xxl-6">
                        <label for="alt" class="form-label">Alt</label>
                        <input type="text" class="form-control @error('og_alt') border border-danger @enderror"
                            id="og_alt" placeholder="Best Service Provider For You" name="og_alt"
                            spellcheck="true" value="{{ old('og_alt', $meta_data->og_alt) }}">
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
