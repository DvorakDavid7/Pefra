<template>
  <div class="Navbar">
    <div class="top-nav">  </div>
      <div class="navbar navbar-expand-lg navbar-light bg-white">

      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="../assets/logo.png">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
    name: "Navigation"
}
</script>

<style scoped lang="scss">

.top-nav {
  height: 2rem;
  background: black !important;
}

.navbar-brand img {
  width: 20%;
}

.navbar-nav {
  margin-left:auto;
  margin-right:auto;
}

.nav-item {
  margin-left: 2rem;
  margin-right: 2rem;
}
</style>
