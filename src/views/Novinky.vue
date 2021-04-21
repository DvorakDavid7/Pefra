<template>
    <div>
        <div class="custom-viewport">
            <Navigation/>
            <div class="container mt-5">
                <div v-for="(post, index) in news" :key="index" :class="{ active: index === 1}" class="card-body"
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
        </div>
        <Footer/>
    </div>
</template>

<script>
import Navigation from "../components/Navigation";
import Footer from "../components/Footer";


export default {
    name: 'novinky',
    components: {
        Footer,
        Navigation,
    },

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

<style scoped>

</style>