<div id="cart-icon" class="navbar-tool dropdown ms-3 d-none"><a class="navbar-tool-icon-box bg-secondary dropdown-toggle" ><span class="navbar-tool-label">{{ cartItems.length }}</span><i class="navbar-tool-icon ci-cart"></i></a><a class="navbar-tool-text" href="/cart"><small>My Cart</small>${{ store.state.cartTotalPrice }}</a>
    <!-- Cart dropdown-->
    <div class="dropdown-menu dropdown-menu-end">
        <div class="widget widget-cart px-3 pt-2 pb-3" style="width: 20rem;">
            <div  v-if="store.state.cart && store.state.cart.cart_items && store.state.cart.cart_items.length" style="height: 15rem;" data-simplebar data-simplebar-auto-hide="false">
                <div  v-for="item in store.state.cart.cart_items" class="widget-cart-item pb-2 border-bottom">
                    <button @click="removeCartItem(item.id)" class="btn-close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                    <div class="d-flex align-items-center"><a class="flex-shrink-0" href="shop-single-v1.html"><img  :src="item.product.thumbnail
											? '/resize/150/' + item.product.thumbnail.id + '/' + item.product.thumbnail.file_name
											: '/themes/baby/assets/img/default.jpg'" alt="..." alt="Product" width="64" alt="Product"></a>
                        <div class="ps-2">
                            <h6 class="widget-product-title"><a :href="`/products/${item.product.slug}`">{{ item.product.title }}</a></h6>
                            <div class="widget-product-meta"><span class="text-accent me-2">{{ item.variant.price | currency }}</span><span class="text-muted">x {{ item.quantity }}</span></div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="d-flex flex-wrap justify-content-between align-items-center py-3">
                <div class="fs-sm me-2 py-2"><span class="text-muted">Subtotal:</span><span class="text-accent fs-base ms-1">${{ store.state.cartTotalPrice }}</span></div><a class="btn btn-outline-secondary btn-sm" href="/cart">Expand cart<i class="ci-arrow-right ms-1 me-n1"></i></a>
            </div><a class="btn btn-primary btn-sm d-block w-100" href="/checkout"><i class="ci-card me-2 fs-base align-middle"></i>Checkout</a>
        </div>
    </div>
</div>
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
      const cart = <?php echo json_encode($cart); ?>;
      const discounted = <?php echo $cart?->discounted ?: 0; ?>;
      	const discount = <?php echo json_encode($cart?->discount ?: []); ?>;
        const storageBasePath = <?php echo @json_encode(\Storage::url('/')); ?>;

        const actions = new Vue({
            el: '#cart-icon',
						data() {
                return {
                    store: window.$store,
                    cartItems: [],
                    cart: null,
                    discounted: 0,
                    discount: null,
                    storageBasePath: storageBasePath

                }
            },
            mounted(){
              $('#cart-icon').removeClass('d-none');

            },
						created(){
              if (cart) {
                this.store.dispatch('loadCart', cart);
        	    }
              if (discounted) {
        		this.discounted = discounted;
        	}
        	if (discount) {
        		this.discount = discount;
        	}
						},
            methods:{
              async removeCartItem(id) {
            	const data = {
            		id: id
            	};

            	if (confirm('Are you sure you want to delete this item?')) {
            		await this.store.dispatch('removeCartItem', data);
            	}
            },
            },
						 watch: {
                'store.state.cart': function() {
                    if (this.store.state.cart && this.store.state.cart.cart_items) {
                        // this.store.dispatch('loadCart', cart);
                        this.cartItems = this.store.state.cart.cart_items;
                        console.log("this.cartItems",this.cartItems)
                    }
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
