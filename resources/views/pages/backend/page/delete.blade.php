<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalgridLabel">Page Delete</h5>
        </div>
        <div class="modal-body">
            <form autocomplete="off" method="POST" action="{{ route('page.delete', ['unique_code' => $page_data->unique_code]) }}">
                @method('PUT')
                @csrf
                <div class="row g-3">
                    <div class="col-xxl-12">
                        <p>Are you sure that you want to permanently delete the selected page ?</p>
                    </div>
                    <div class="col-lg-12">
                        <div class="hstack gap-2 justify-content-end">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
