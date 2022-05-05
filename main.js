
const app = new Vue({
    el: "#app",
    data: {
        result: "",
    },
    mounted() {
        axios.get("http://localhost:800/php-ajax-dischi/assets/server.php").then((response) => {
            this.result = response;
            console.log(response);
        })
    },
});