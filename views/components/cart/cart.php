<div id="cart-items" class="container pb-5 mb-2 mb-md-4">
     <div  v-if="store.state.cart && store.state.cart.cart_items.length" class="row">
         <!-- List of items-->
         <section class="col-lg-8">
             <div class="d-flex justify-content-between align-items-center pt-3 pb-4 pb-sm-5 mt-1">
                 <h2 class="h6 text-light mb-0">Products</h2><a class="btn btn-outline-primary btn-sm ps-2" href="/products"><i class="ci-arrow-left me-2"></i>Continue shopping</a>
             </div>
             <!-- Item-->
             <strong class="mx-auto">Your Cart ({{ store.state.cart && store.state.cart.cart_items ? store.state.cart.cart_items.length : 0 }})</strong>

             <div  v-for="item in store.state.cart.cart_items" class="d-sm-flex justify-content-between align-items-center my-2 pb-3 border-bottom">
                 <div class="d-block d-sm-flex align-items-center text-center text-sm-start"><a class="d-inline-block flex-shrink-0 mx-auto me-sm-4" href="shop-single-v1.html"><img width="160px" :src="
											item.product.thumbnail
											? '/resize/160/' + item.product.thumbnail.id + '/' + item.product.thumbnail.file_name
											: '/themes/baby/assets/img/default.jpg'
										"
										:alt="item.product.title"
										class="img-fluid"></a>
                     <div class="pt-2">
                         <h3 class="product-title fs-base mb-2"><a  :href="'/products/' + item.product.slug">{{ item.product.title }}</a></h3>
                         <div  class="fs-lg text-accent pt-2">	<span class="ml-auto">{{ item.variant.price | currency }}</span></div>
                         	<!-- Variant data -->
                         <div class="fs-sm"><span class="text-muted me-2">	{{ item.variant.title }}</div>
                         <!-- <div class="fs-sm"><span class="text-muted me-2">Color:</span>White &amp; Blue</div> -->
                     </div>
                 </div>
                 <div class="pt-2 pt-sm-0 ps-sm-3 mx-auto mx-sm-0 text-center text-sm-start" style="max-width: 9rem;">
                     <label class="form-label" for="quantity1">Quantity</label>
                     <input  @change="updateCartItem(item.id, item.quantity)" class="form-control" type="number" id="quantity1" min="1" max="5" v-model="item.quantity">
                     <button @click="removeCartItem(item.id)" class="btn btn-link px-0 text-danger" type="button"><i class="ci-close-circle me-2"></i><span class="fs-sm">Remove</span></button>
                 </div>
             </div>
             <!-- Item-->

         </section>
         <!-- Sidebar-->
         <aside class="col-lg-4 pt-4 pt-lg-0 ps-xl-5">
             <div class="bg-white rounded-3 shadow-lg p-4">
                 <div class="py-2 px-xl-2">
                     <div class="d-flex mb-4 pb-3 border-bottom justify-content-between">
                         <h2 class="h6 mb-3 pb-1">Subtotal</h2>
                         <h5 class="fw-normal">${{ store.state.cartTotalPrice }}</h5>
                     </div>
                     <div class="d-flex mb-4 pb-3 border-bottom justify-content-between">
                         <h2 class="h6 mb-3 pb-1">Discounted</h2>
                         <h5 class="fw-normal">${{ discounted }}</h5>
                     </div>
                     <div class="d-flex mb-4 pb-3 border-bottom justify-content-between">
                         <h2 class="h6 mb-3 pb-1">Discount Code</h2>
                         <button @click="removeDiscount" class="text-danger border-0 bg-transparent">
							<i class="fe fe-x"></i>
						</button>
                     </div>
                     <div class="d-flex mb-4 pb-3 border-bottom justify-content-between">
                         <h2 class="h6 mb-3 pb-1">Total</h2>
                         <h5 class="fw-normal">${{ store.state.cartTotalPrice - discounted }}</h5>
                     </div>
                     <div class="text-center mb-4 pb-3 border-bottom justify-content">
                         <span class="h7 mb-3 pb-1">Shipping cost calculated at Checkout *</span>
                     </div>
                     <a class="btn btn-primary btn-shadow d-block w-100 mt-4" href="/checkout"><i class="ci-card fs-lg me-2"></i>Proceed to Checkout</a>
                 </div>
             </div>
         </aside>
     </div>
     <div v-else>
     Emty
     </div>
 </div>

 <script type="text/javascript">
document.addEventListener('DOMContentLoaded', function() {
	const cart = <?php echo json_encode($cart); ?>;
	const discounted = <?php echo $cart?->discounted ?: 0; ?>;
	const discount = <?php echo json_encode($cart?->discount ?: []); ?>;
	const storageBasePath = <?php echo @json_encode(\Storage::url('/')); ?>;

    const actions = new Vue({
        el: '#cart-items',

        data() {
            return {
                isLoading: false,
                store: window.$store,
                cart: null,
                discounted: 0,
                discount: null,
                storageBasePath: storageBasePath
            }
        },

        created() {
        	if (cart) {
        		this.cart = cart;
                const cartData = cart;
                this.store.dispatch('loadCart', cartData);
        	}
        	if (discounted) {
        		this.discounted = discounted;
        	}
        	if (discount) {
        		this.discount = discount;
        	}
        },

        methods: {
            async updateCartItem(id, quantity) {

            	this.isLoading = true;

            	const data = {
            		id: id,
            		quantity: quantity
            	};

            	await this.store.dispatch('updateCartItem', data);

            	this.isLoading = false;
            },

            async removeCartItem(id) {
            	const data = {
            		id: id
            	};

            	if (confirm('Are you sure you want to delete this item?')) {
            		await this.store.dispatch('removeCartItem', data);
            	}
            },

            async addDiscount() {
            	this.isLoading = true;
            	const code = document.getElementsByName('discountCode')[0].value;

            	if (code) {
            		await this.store.dispatch('addDiscount', code)
            			.then(response => {
            				this.discounted = response.discount.value;
            				this.discount = response.discount;
            			});
            	}

            	this.isLoading = false;
            },

            async removeDiscount() {

            	await this.store.dispatch('removeDiscount');

            	this.discounted = 0;
            	this.discount = null;

            },

            detectImageLink(url) {
            	if (url.startsWith('tmp/') && (url.match(/\.(jpeg|jpg|gif|png)$/) != null)) {
            		return true;
            	}

            	return false;
            }
        },

        filters: {
        	currency: function(value) {

        		var formatter = new Intl.NumberFormat('en-US', {
				  	style: 'currency',
				  	currency: 'USD'
				});

				return formatter.format(value);
        	}
        }
    })
})
</script>
