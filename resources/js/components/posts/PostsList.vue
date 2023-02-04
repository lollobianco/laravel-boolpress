<template>
  <div class="d-flex flex-column align-items-center container">
    <!-- Uso il loader -->

    <Loader v-if="isLoading" class="px-3" />

    <div class="w-100">
      <div class="p-0" v-if="posts.length">
        
        <div v-for="post in posts" :key="post.id" class="mb-4 text-white d-flex">
          
          <div class="rounded-left card-body col-7 bg-secondary">
            <router-link :to="`/posts/${post.id}`">
              <h3 class="card-title">{{ post.title }}</h3>
            </router-link>
            <span v-for="tag in post.tags" :key="tag.id" class="badge bg-light text-dark mb-3 mr-2">{{ tag.name }}</span>
            <div class="d-flex">
              <h4 class="card-text mb-2">{{ post.category.name }}</h4>
            </div>
            <div class="card-text mb-3">{{post.body.substring(0,450)+"..."}}</div>
            <router-link :to="`/posts/${post.id}`" class="btn btn-primary mr-3 align-self-end">
                Show Post
            </router-link>
          </div>
          
          <div class="rounded-right col-5 card-body bg-secondary d-flex align-items-center justify-content-center">
            <img v-if="post.cover" :src="'/storage/' + post.cover" class="card-img-top rounded p-1 bg-light" alt="...">
            <h3 v-else>No picture available</h3>
          </div>

        </div>


      </div>

      <p v-else>Non ci sono posts nel DB</p>

    </div>


    <Pagination :pagination="pagination" @on-page-change="getPosts" />

  </div>
</template>

<script>
import Loader from "../Loader.vue";
import Pagination from "../Pagination.vue";

export default {
  name: "PostsList",
  components: {
    Loader,
    Pagination,
  },
  data() {
    return {
      posts: [],
      isLoading: false,
      pagination: [],
    };
  },
  mounted() {
    this.getPosts();
  },
  methods: {
    getPosts(page = 1) {
      this.isLoading = true;
      axios
        .get("http://127.0.0.1:8000/api/posts?page=" + page)
        .then((res) => {
          console.log(res.data);

          //Destrutturizzazione
          const { data, current_page, last_page } = res.data;
          this.posts = data;
          this.pagination = {
            lastPage: last_page,
            currentPage: current_page,
          };
        })
        .catch((err) => {
          console.log(err);
        })
        .then(() => {
          this.isLoading = false;
        });
    },
  },
};
</script>

<style scoped lang="scss">
li {
  list-style-type: none;
}

a{
  color: white;
}
</style>