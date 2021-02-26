<button key="product.id" @click="addWishlist" id="icon-add-wislist" class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button>
<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function() {
    const product = <?php echo json_encode($product); ?>;
    const actions = new Vue({
        el: '#icon-add-wislist',
        data(){
            return  {
                isAdding:false,
                product:null,
                store: window.$store,
            }
        },
        mounted() {
        // $('#icon-add-wislist').removeClass('d-none');
        if (product) {
                      this.product = product;

            }
        },
        methods: {

            async addWishlist() {

                try {

                    this.isAdding = true;

                    await this.store.dispatch('addToWishlist', this.product.id);

                    this.isAdding = false;

                } catch (err) {
                    console.log(err)
                }

                },
        },

    })
})
</script>