<template>
    <form action="#" method="post">
        <div class="input-wrapper" v-for="(input, index) in inputs"
            :key="input.index">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="product_name">Nama produk</label>
                        <input type="text" v-model="input.product_name" id="product_name" class="form-control" placeholder="Nama produk">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="ingredient">Komposisi</label>
                        <input type="text" v-model="input.ingredient" id="ingredient" class="form-control" placeholder="Komposisi">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="quantity">Kuantitas</label>
                        <input type="number" v-model="input.quantity" id="quantity" class="form-control" placeholder="Kuantitas">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="btn">Hapus</label>
                        <button type="button" class="btn btn-outline-danger" @click="deleteRow(index)">Hapus row</button>
                    </div>
                </div>
            </div>
        </div>
            <div class="row">
                <div class="col-md-12">
                    <button type="button" class="btn btn-outline-primary" @click="addRow">Tambah Produk</button>
                </div>
            </div>
    </form>
</template>

<script>
export default {
    data() {
        return {
            inputs: []
        }
    },

    methods: {
        addRow() {
            this.inputs.push({
                product_name: '',
                ingredient: '',
                quantity: ''
            })
        },
        deleteRow(index) {
            this.inputs.splice(index, 1)
        }
    }
}
</script>

