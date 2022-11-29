const {createApp} = Vue;

createApp({
    data(){
        return{
            todoList: [],
            newTodo: "",
        };
    },
    methods:{
        addTodo() {
            const data = {     
                newTodo: this.newTodo
            };

            axios.post("server.php", data, {
                headers: { "Content-Type" : "multipart/form-data"},
            }).then((resp) =>{
                this.todoList = resp.data;
                this.newTodo = "";
            });
        },
    },

    created(){
        console.log(this.newTodo);

        axios.get("server.php").then((resp) => {
            this.todoList = resp.data;
        });
    }
}).mount("#app");
