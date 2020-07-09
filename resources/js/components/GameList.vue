<template>
  <div class="col-4 my-2">
    <div class="card" style="width: 18rem;">
      <!-- <img class="card-img-top" src="..." alt="Card image cap" /> -->
      <div class="card-body">
        <h5 class="card-title">
          <a v-bind:href="'/games/' + game.id" target="_blank">{{game.name}}</a>
        </h5>
        <p class="card-text">Jogo do {{game.name}}</p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">
          <a href="#" class="card-link">Edit</a>
        </li>
        <li class="list-group-item">
          <a href="#" class="card-link">Delete</a>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    // console.log("Component mounted.");
  },
  props: ["game"]
};
</script>
