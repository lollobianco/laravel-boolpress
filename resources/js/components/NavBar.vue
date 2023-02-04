<template>
  <header>
      <nav class="navbar navbar-expand-lg bg-body-tertiary bg-secondary">
          <div class="container">
              <router-link class="navbar-brand nav-link" :to="{ name: 'home' }">BooleFood</router-link>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                  aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                      <li class="nav-item">
                          <router-link class="nav-link" :to="{ name: 'posts' }">Lista Posts</router-link>
                      </li>
                      <li class="nav-item">
                          <router-link class="nav-link" :to="{ name: 'about-us' }">About us</router-link>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="/admin">Log-in</a>
                      </li>                      
                  </ul>
              </div>
          </div>
      </nav>
  </header>
</template>

<script>

export default {
  name: 'NavBar'
}

</script>

<style lang="scss" scoped>

.nav-link{
  color: white;
  margin: 0 20px 0 0;
  padding: 10px 0;
}

.nav-link:hover{
  color: black;
}

</style>