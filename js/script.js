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
                text: this.newTodo,
            };

            axios.post("server.php", data, {
                headers: { "Content-Type" : "multipart/form-data"},
            }).then((resp) =>{
                this.todoList = resp.data;
                this.newTodo = "";
            });
        },

        markDone(index){
            const data = {
                toggleIndex: index,
            };

            axios.post("server.php", data, {
                headers:{"Content-Type": "multipart/form-data"}
            }).then((resp)  => {
                this.todoList = resp.data;
            });
        },

        deleteTask(index){
            const data = {
                deleteIndex: index,
            };

            axios.post("server.php", data, {
                headers: {"Content-Type": "multipart/form-data"}
            }).then((resp) => {
                this.todoList = resp.data;
            });
        },
    },
    created(){
        axios.get("server.php").then((resp) => {
            this.todoList = resp.data;
        });
    }
}).mount("#app");
