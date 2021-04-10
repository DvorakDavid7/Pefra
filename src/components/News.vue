<template>
    <div>
        <div class="text-center mb-5">
            <h4>Aktuální <strong>novinky</strong></h4>
        </div>

        <div id="carouselExampleDark" class="carousel carousel-dark slide container" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div v-for="(post, index) in news" :key="index" :class="{ active: index === 1}" class="carousel-item"
                     data-bs-interval="10000">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <h5>{{ post["title"] }}</h5>
                            </div>
                            <div class="small-text">{{ post["created"] }}</div>
                            {{ post["content"] }}
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

</template>

<script>
export default {
    name: "News",

    data() {
        return {
            API_URL: "https://pefra.cz/api/news.php",
            news: []
        }
    },

    async created() {
        const response = await fetch(this.API_URL)
        if (response.ok) {
            const responseData = await response.json()
            this.news = responseData["data"]
        } else {
            console.log("error: cannot connect to server")
        }
    }
}
</script>

<style scoped lang="scss">
@import "../scss/_variables.scss";


.carousel-item .card {
    width: 50%;
    margin: auto;
}

.card {
    border: none;
}

.card-body {
    color: $pefra-fontcolor-dark;
    background-color: $pefra-news-background;
    opacity: 0.85;
}

.card-header {
    color: $pefra-fontcolor-dark;
}

.card-footer {
    color: $pefra-fontcolor-dark;
}

.small-text {
    font-size: 0.8rem;
    color: $pefra-color-light-blue;
}
</style>
