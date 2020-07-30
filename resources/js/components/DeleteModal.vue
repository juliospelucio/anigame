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
          <h5 class="modal-title" id="deleteModalLabel">Are you sure you want to delete this game?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">{{gameName}}</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <form v-on:submit.prevent method="post">
            <button type="submit" class="btn btn-danger" @click="submit(gameId)">Delete</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["gameName", "gameId"],
  methods: {
    submit(id) {
      console.log(id);
      axios
        .post("/destroy/ " + id)
        .then((response) => {
          console.log(response);
          window.location.href = '/games';
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
};
</script>