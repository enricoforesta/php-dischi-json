const { createApp } = Vue;

createApp({
    name: 'index',
    data() {
        return {
            cds: [],
        };
    },
    methods: {
        // chiamata al nostro server
        getCds() {
            axios.get('server.php').then((response) => {
                this.cds = response.data;
            })
        }
    },
    created() {
        this.getCds();
    },
}).mount('#app');