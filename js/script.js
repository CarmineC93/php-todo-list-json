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
              newTodo : {
                    text : this.newTodo,
                    done : false
              } 
            };

            axios.post("server.php", data, {
                headers: { "Content-Type" : "multipart/form-data"},
            }).then((resp) =>{
                this.todoList = resp.data;
                newTodo
            });
        },

    },
    created(){
        axios.get("server.php").then((resp) => {
            console.log(resp);
        });
    }
}).mount("#app");
