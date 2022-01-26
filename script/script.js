Vue.config.devtools = true;

const app = new Vue(
    {
        el: '#root',
        data: {
            albums: []
        },
        methods: {
            getDatabaseAlbums: function() {
                axios.get('http://localhost:8888/php-ajax-dischi/server.php')

                .then((response) => {
                    this.albums = response.data;
                });
            }
        },
        created: function() {
            this.getDatabaseAlbums();
        }
    }
);