<template>
  <div>

    <HomePage/>
    <PostsList/>

  </div>
</template>

<script>
import PostsList from '../../../components/posts/PostsList.vue';
import HomePage from '../HomePage.vue';

export default {
  name: 'PostsIndex',
  components: {
    PostsList,
    HomePage
  }
}
</script>

<style>

</style>