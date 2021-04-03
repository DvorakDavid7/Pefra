<template>
    <div class="News text-center">
      <h1 class="mb-3" id="news-title">AKTUALITY</h1>
      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active text-center" data-bs-interval="10000">
            <h3>AKTUALITY</h3>
            <p>Lorem Ipsum</p>
          </div>
          <div class="carousel-item text-center" data-bs-interval="2000">
            <h3>AKTUALITY</h3>
            <p>Lorem Ipsum</p>
          </div>
          <div class="carousel-item text-center">
            <h3>AKTUALITY</h3>
            <p>Lorem Ipsum</p>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
</template>

<script>
export default {
    name: "News"
}
</script>

<style scoped lang="scss">
#news-title{

}


.carousel{
  height: 25vh !important;
  width: 25%;
  margin-right: auto;
  margin-left: auto;

}

.carousel-item {
  width: 100%;
  height: 100%;

}

.carousel-control-next, .carousel-control-prev {
  background-color: black;
  height: 20%;
  margin-top: auto;
}

.carousel-indicators button {
  background-color: black;
}




</style>
