<template>
  <div
    class="modal fade"
    id="deleteModal"
    tabindex="-1"
    role="dialog"
    aria-labelledby="deleteModalLabel"
    aria-hidden="true"
  >
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5
            class="modal-title"
            id="deleteModalLabel"
          >Are you sure you want to delete this {{modalType}}?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">{{modalName}}</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <form v-on:submit.prevent="submit(modalId, modalType)" method="post">
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["modalName", "modalId", "modalType"],
  methods: {
    submit(modalId, modalType) {
      axios
        .post("/destroy/" + modalType + "/" + modalId)
        .then((response) => {
          console.log(response);
          
          window.location.href = "/" + modalType + "s";
          // $('#deleteModal').modal('hide');
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
};
</script>