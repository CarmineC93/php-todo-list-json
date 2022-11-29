const {createApp} = Vue;

createApp({
    data(){
        return{

        };
    },
    methods:{

    },
    created(){
        axios.get("server.php").then((resp) => {
            console.log(resp);
        });
    }
}).mount("#app");
