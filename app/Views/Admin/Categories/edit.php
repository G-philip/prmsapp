<!-- add department modal -->
<div class="modal fade" id="editcategory" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-info" style="background-color: #f1f6fb;">
        <h5 class="modal-title" id="staticBackdropLabel"><i class="fa fa-edit " style="font-size:1.5rem"></i>&nbsp;Edit Department</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?= form_open("/admin/expense/categories/update") ?>
        <input type="text" id="edit_id" class="department_id" name="category_id" hidden>

        <div class="mb-3">
          <label for="department_name" class="col-form-label">Expense Categoryt:</label>
        <input type="text" name="category_name" class="form-control" id="name">
        </div>

        <div class="mb-3">
          <label for="department_name" class="col-form-label">Expense Description:</label>
          <textarea class="form-control shadow-none" name="category_description" id="description"></textarea>
          </div>
      </div>
      <div class="modal-footer flex-nowrap p-0">
        <button type="button" class="btn btn-secondary fs-6 text-decoration-none shadow-none col-6 m-0 rounded-0 border-right" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary fs-6 text-decoration-none shadow-none col-6 m-0 rounded-0">Submit</button>
      </form>
      </div>
    </div>
  </div>
</div>
