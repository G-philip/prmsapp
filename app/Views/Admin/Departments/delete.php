<!-- delete prescription modal -->
<div class="modal modal-alert fadee" id="deleteDepartment" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-body p-4 text-center">
        <!-- <h5 class="mb-0"><i class="fa fa-trash " style="font-size:1.5rem"></i>&nbsp;Delete Confirmation!!</h5> -->
        <?= form_open("/admin/department/delete") ?>
        <input type="text" id="delete_id" class="delete_id" name="delete_id" hidden>
        <p class="mb-0">Are you sure you want to delete&nbsp;<q id="delete_name"></q>&nbsp;department permanently&nbsp;<i class="fa fa-question-circle"></i></p>

      </div>
      <div class="modal-footer flex-nowrap p-0">
        <button type="submit" class="btn btn-link fs-6 text-decoration-none shadow-none col-6 m-0 rounded-0 border-right text-danger"><strong>Yes, delete</strong></button>
        <button type="button" class="btn btn-link fs-6 text-decoration-none shadow-none col-6 m-0 rounded-0" data-bs-dismiss="modal">No thanks</button>
        </form>
      </div>
    </div>
  </div>
</div>
