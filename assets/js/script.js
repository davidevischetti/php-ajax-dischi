new Vue(
    {
        el:'#app',
        data: {
            dischi: []
        },
        created() {
            axios.get('http://localhost:8888/day_4/php-ajax-dischi/api.php')
            .then(response => this.dischi = response.data);

        }

    }
)