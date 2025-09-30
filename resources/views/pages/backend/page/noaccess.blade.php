<div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalgridLabel">Necessary Access</h5>
        </div>
        <div class="modal-body">
                <div class="row g-3">
                    <div class="col-xxl-12">
                        <p>Hi {{ auth()->user()->name }}, you don't have the necessary access rights.</p>
                    </div>
                    <div class="col-lg-12">
                        <div class="hstack gap-2 justify-content-end">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
