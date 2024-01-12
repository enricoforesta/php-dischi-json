const { createApp } = Vue;

createApp({
    name: 'index',
    data() {
        return {
            cds: [],
            currentcd: '',
        };
    },
    methods: {
        // chiamata al nostro server
        getCds() {
            axios.get('server.php').then((response) => {
                this.cds = response.data;
            })
        },
        getDetails(index) {
            axios.get('server.php', { params: { index } }).then((response) => {
                this.currentcd = response.data
            })
        }
    },
    created() {
        this.getCds();
    },
}).mount('#app');