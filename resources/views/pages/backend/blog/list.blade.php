@if ($blog_data->listing == 'Active')
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalgridLabel">Blog Un List</h5>
        </div>
        <div class="modal-body">
            <form autocomplete="off" method="POST" action="{{ route('blog.unlising', ['unique_code' => $blog_data->unique_code]) }}">
                @method('PUT')
                @csrf
                <div class="row g-3">
                    <div class="col-xxl-12">
                        <p>Are you sure that you want to unlint the selected blog ?</p>
                    </div>
                    <div class="col-lg-12">
                        <div class="hstack gap-2 justify-content-end">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">No, Close</button>
                            <button type="submit" class="btn btn-danger">Yes, Un-List</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@else
<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalgridLabel">Blog List</h5>
        </div>
        <div class="modal-body">
            <form autocomplete="off" method="POST" action="{{ route('blog.lising', ['unique_code' => $blog_data->unique_code]) }}">
                @method('PUT')
                @csrf
                <div class="row g-3">
                    <div class="col-xxl-12">
                        <p>Are you sure that you want to lint the selected blog ?</p>
                    </div>
                    <div class="col-lg-12">
                        <div class="hstack gap-2 justify-content-end">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">No, Close</button>
                            <button type="submit" class="btn btn-success">Yes, List</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endif
