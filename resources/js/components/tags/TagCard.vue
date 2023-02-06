<template>

    <div class="pb-5">



        <div v-for="elem in tag" :key="elem.id">

            <div v-for="post in elem.posts_table" :key="post.id"
                class="d-flex container justify-content-around mt-4 bg-secondary rounded">

                <div class="d-flex flex-column text-white col-7 p-4">

                    <h2 class="mb-4">{{ post.title }}</h2>

                    <p>{{ post.body.substring(0,450)+"..." }}</p>

                    <router-link :to="`/posts/${post.id}`" class="btn btn-primary mr-3 align-self-start">
                        Show Post
                    </router-link>

                </div>

                <div class="rounded card-body col-5 d-flex align-items-center justify-content-center ">
                    <img v-if="post.cover" :src="'/storage/' + post.cover" class="card-img-top rounded bg-light p-1"
                        alt="...">
                    <h3 v-else>No picture available</h3>
                </div>

            </div>

        </div>




    </div>
</template>

<script>

export default {
    name: 'TagCard',
    components: {
    },
    data() {
        return {
            tag: [],
        }
    },
    mounted() {
        this.getTag();
    },
    methods: {
        getTag() {
            axios.get('http://localhost:8000/api/tags/' + this.$route.params.name)
                .then((res) => {
                    console.log(res.data);
                    this.tag = res.data;
                }).catch(err => {
                    console.log(err);
                })
            console.log(this.tag)
        }
    }
}
</script>

<style scoped lang="scss">

</style>
