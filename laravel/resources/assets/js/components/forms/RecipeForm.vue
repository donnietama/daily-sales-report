<template>
    <form action="#" method="post">
        <div class="input-wrapper">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="product_name">Nama produk</label>
                        <input type="text" v-model="product" id="product_name" class="form-control" placeholder="Nama produk">
                    </div>
                </div>
            </div>
            <div class="row" v-for="(ingredient, index) in ingredients"
            :key="ingredient.index">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="ingredient">Komposisi</label>
                        <input type="text" v-model="ingredient.ingredient" id="ingredient" class="form-control" placeholder="Komposisi">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="quantity">Kuantitas</label>
                        <input type="number" v-model="ingredient.quantity" id="quantity" class="form-control" placeholder="Kuantitas">
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
            </div>
        </div>
    </form>
</template>

<script>
export default {
    data() {
        return {
            product: '',
            ingredients: []
        }
    },

    methods: {
        addRow() {
            this.ingredients.push({
                ingredient: '',
                quantity: ''
            })
        },
        deleteRow(index) {
            this.ingredients.splice(index, 1)
        }
    }
}
</script>

