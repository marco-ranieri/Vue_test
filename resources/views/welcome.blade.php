<x-vue>

    <div class="container">
        <div class="row mt-5">
            <div class="col-12 text-center">
                <h1>@{{ title }}</h1>
                <p v-if="show">Eccomi!</p>
                <p v-else>______</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12 col-md-6 offset-md-3 my-5" v-html="templateTest()"></div>
            <div class="col-12 col-md-6 offset-md-3 my-5">
                <button :disabled="toggleBtn" :class="toggleClass" class="btn btn-primary mx-3">CLick</button>
                <button @click="counter += 1" class="btn btn-primary mx-3">Add +1</button>
                <button @mouseover="btnSelect" :class="btnActive" class="btn btn-primary mx-3">Play</button>
                <p class="py-3 px-3">Counter: @{{counter}}</p>
                <button @click="toggleShow" class="btn btn-primary mx-3">Toggle show</button>
            </div>

            <div class="card col-12 col-md-6 offset-md-3 my-3">
                <div class="card-body">
                    <p>n° @{{ countChar(keyup) }} of 500</p>
                    <p>Characters: @{{ keyup }}</p>
                    <input @input="keyupFn($event)" type="form-control">
                </div>

            </div>
        </div>
    </div>

</x-vue>
