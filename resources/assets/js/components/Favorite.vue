<template>
    <span>
        <a href="#" v-if="isFavorited" @click.prevent="unFavorite(projet)">
            <i  class="red large heart icon"></i>
        </a>
        <a href="#" v-else @click.prevent="favorite(projet)">
            <i  class=" red large empty heart icon"></i>
        </a>
    </span>
</template>

<script>
    export default {
        props: ['projet', 'favorited'],

        data: function() {
            return {
                isFavorited: '',
            }
        },

        mounted() {
            this.isFavorited = this.isFavorite ? true : false;
        },

        computed: {
            isFavorite() {
                return this.favorited;
            },
        },

        methods: {
            favorite(projet) {
                axios.post('/favorite/'+projet)
                    .then(response => this.isFavorited = true)
                    .catch(response => console.log(response.data));
            },

            unFavorite(projet) {
                axios.post('/unfavorite/'+projet)
                    .then(response => this.isFavorited = false)
                    .catch(response => console.log(response.data));
            }
        }
    }
</script>