<template>
  <div class="container">
    <div class="d-flex flex-column text-white mt-5">
      <h1 class="text-white">Welcome in BooleFood</h1>
    </div>
    <div class="d-flex text-white w-100 mb-5">
      <h4 class="d-flex">Use navigation bar or <a class="nav-link px-2 py-0" href="/admin">LOGIN</a> to add a new post</h4>      
    </div>
    <TagsList/>
  </div>
</template>

<script>

import TagsList from '../../../components/tags/TagsList.vue'

export default {
  name: 'TagsIndex',
  components: {
      TagsList
  }
}
</script>
