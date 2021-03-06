{{-- Delete Assignment Modal --}}
<div class="modal fade" id="modal-deleteAssignment-{{$assignment->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-slideup" aria-hidden="true">
    <div class="modal-dialog modal-dialog-slideup" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Delete {{$assignment->title}} ?</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <form action="/assignment/{{$assignment->id}}" method="post">
                    @method('DELETE')
                    @csrf
                    <div class="block-content">
                        <p class="text-black">You and your students will no longer have access to this assignments and its files</p>
                        <p class="text-danger">This action cannot be undone</p>
                        <p class="text-danger">Do you wish to continue?</p>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-alt-danger">
                                <i class="fa fa-trash"></i> <b class="text-danger">Delete</b>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{--End Delete Assignment Modal --}}
