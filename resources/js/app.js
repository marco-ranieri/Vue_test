// require('./bootstrap');
import { createApp, createHydrationRenderer } from 'vue'


const options = {

    data() {

        return {
            title : "Benvenuti",
            description : "Sto usando VueJS",
            show : false,
            toggleBtn : true,
            toggleClass : "bg-danger",
            counter : 0,
            keyup : "",
            btnActive : "btn-info",
        }

    },

    methods : {

        templateTest() {
            return `<div class="card"><div class="card-body">${this.title}
            <p><i>${this.description}</i></p>
            </div>
            </div>
            `
        },

        toggleShow() {
            this.show = !this.show
        },

        keyupFn(event) {
            this.keyup = event.target.value;
            console.log('OK');
        },

        countChar(keyup) {
            return this.keyup.length;
        },

        btnSelect() {
            if(this.btnActive == "btn-warning"){
                this.btnActive = "btn-info"
            } else {
                this.btnActive = "btn-warning"
            }
        },
    },

    created() {

        setTimeout(() => {
            this.toggleBtn = false;
            this.toggleClass = "bg-info text-dark"
        }, 3000)

    }
}

const app = createApp(options);

app.mount("#app");

console.log(options.data);
