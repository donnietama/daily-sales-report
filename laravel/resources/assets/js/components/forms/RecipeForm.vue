<template>
    <form method="post">
        <div class="input-wrapper">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="product_name">Nama produk</label>
                        <input type="text" v-model="recipe.product" name="product_name" id="product_name" class="form-control" placeholder="Nama produk">
                    </div>
                </div>
            </div>
            <div class="row" v-for="(recipe, index) in recipe.ingredients"
            :key="recipe.index">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="ingredient">Komposisi</label>
                        <input type="text" v-model="recipe.ingredient" name="ingredient" id="ingredient" class="form-control" placeholder="Komposisi">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="quantity">Kuantitas</label>
                        <input type="number" v-model="recipe.quantity" name="quantity" id="quantity" class="form-control" placeholder="Kuantitas">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="btn">Hapus</label>
                        <button type="button" class="btn btn-outline-danger" @click="deleteRow(index)">Hapus komposisi</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <button type="button" class="btn btn-outline-primary" @click="addRow">Tambahkan komposisi</button>
                <button type="button" class="btn btn-outline-success" @click="submit">Submit</button>
            </div>
        </div>
    </form>
</template>

<script>
export default {
    data() {
        return {
            recipe: {
                product: '',
                ingredients: [{}]
            }
        }
    },

    methods: {
        addRow() {
            this.recipe.ingredients.push({
                ingredient: '',
                quantity: ''
            })
        },

        deleteRow(index) {
            this.recipe.ingredients.splice(index, 1)
        },

        submit() {
            // adding the token to axios header.
            var token = document.head.querySelector('meta[name="csrf-token"]')
            window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content

            let ingredientsArr = []
            for (let i = 0; i < this.recipe.ingredients.length; i++) {
                ingredientsArr = this.recipe.ingredients[i]
            }

            // post data to server
            axios.post('http://localhost/recipe', {
                product: this.recipe.product,
                ingredients: ingredientsArr.ingredient,
                quantity: ingredientsArr.quantity,
            },
            {
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                }
            })
            .then(response => console.log(this.response)) // throw response if success
            .catch(error => console.log(this.error)) // throw error if error
        }
    }
}
</script>

