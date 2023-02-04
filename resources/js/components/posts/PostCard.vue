<template>
  <div>
    <div class="d-flex container justify-content-around mt-5">

      <div class="d-flex flex-column text-white col-7 p-4">

        <h2 class="mb-4">{{ post.title }}</h2>

        <h5 class="mb-4">{{ post.category.name }}</h5>

        <div>
    
          <span v-for="tag in post.tags" :key="tag.id" class="badge bg-light text-dark mr-2 mb-4">{{ tag.name }}</span>
      
        </div>

        <p>{{ post.body }}</p>

      </div>

      <div class="rounded card-body col-5 d-flex align-items-center justify-content-center">
        <img v-if="post.cover" :src="'/storage/' + post.cover" class="card-img-top rounded" alt="...">
        <h3 v-else>No picture available</h3>
      </div>

    </div>
  </div>
</template>

<script>
export default {
    name: 'PostCard',
    components: {
    },
    data() {
        return {
            post: null,
        }
    },
    mounted() {
        this.getPost();
    },
    methods: {
        getPost() {
            axios.get('http://localhost:8000/api/posts/' + this.$route.params.id)
                .then((res) => {
                    console.log(res.data);
                    this.post = res.data;
                }).catch(err => {
                    console.log(err)
                })
        }
    }
}
</script>

<style lang="scss" scoped>

</style>