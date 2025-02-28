<!-- Modal -->
<div class="modal fade zoomIn" id="deleteRecordModal{{ $unite->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ route('unite-mesure.destroy', $unite->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        id="btn-close"></button>
                </div>
                <div class="modal-body">
                    <div class="mt-2 text-center">
                        <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                            colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                        <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                            <h4>Êtes vous sûres?</h4>
                            <p class="text-muted mx-4 mb-0">Voulez-vous
                                vraiment supprimer cette unité de mesure
                                ?
                            </p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn w-sm btn-danger">Supprimer</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
