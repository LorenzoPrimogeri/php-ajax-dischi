
const app = new Vue({
    el: "#app",
    data: {

    },
    mounted() {
        axios.get("/assets/data.php").then((response) => {
            this.result = response;
            console.log(response);
        })
    },
});