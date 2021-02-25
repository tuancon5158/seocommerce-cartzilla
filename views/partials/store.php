<script type="text/javascript" src="https://unpkg.com/vuex@3.6.0/dist/vuex.min.js"></script>
<script type="text/javascript">
document.addEventListener('DOMContentLoaded', () => {
	Vue.use(Vuex)
	window.$store = new Vuex.Store({
		state: {
			cart: null,
			cartTotalPrice: 0,
			wishlist: []
		},
		mutations: {
			setCart(state, cart) {
				state.cart = cart;
			},
			resetCart(state) {
				state.cart = null;
			},
			updateCart(state, item) {
				for (let i = state.cart.cart_items.length - 1; i >= 0; i--) {
					if (state.cart.cart_items[i].id == item.id) {
						state.cart.cart_items[i].quantity = item.quantity;
					}
				}
			},
			deleteCartItem(state, id) {
				for (let i = state.cart.cart_items.length - 1; i >= 0; i--) {
					if (state.cart.cart_items[i].id == id) {
						state.cart.cart_items.splice(i, 1);
					}
				}
			},
			changePrice(state) {
				state.cartTotalPrice = 0;
				let price = 0;

				if (state.cart && state.cart.cart_items) {
					for (let i = state.cart.cart_items.length - 1; i >= 0; i--) {

					    let cartItem = state.cart.cart_items[i];
						price += ( (cartItem.unit_price + cartItem.custom_price) * state.cart.cart_items[i].quantity );

					}

					state.cartTotalPrice = price.toFixed(2);
				}
			}
		},
		actions: {
			// Load cart data
			async loadCart({ commit, state }, data) {
				commit('setCart', data);
	            commit('changePrice');
			},

			// Add to card
			async addToCart({ commit, state }, data) {
				if ( data ) {
console.log("data ss",);
	                await $.ajax({
	                    type:'POST',
	                    url:'/cart',
	                    data: {
	                        items: data
	                    },
	                    headers: {
	                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	                    },
	                    success:function(data){
	                        commit('setCart', data);
	                        commit('changePrice');
	                        $('#modalShoppingCart').modal('show');
							console.log("thanh cong");
	                    },
	                    error:function(msg){
	                        console.log(msg.responseJSON);
	                    }
	                });

				}
			},

			// Update cart
			async updateCartItem({ commit, state }, data) {
				if ( data ) {

					await $.ajax({
	                    type:'POST',
	                    url:'/cart_items/' + data.id,
	                    data: {
	                        quantity: data.quantity
	                    },
	                    headers: {
	                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	                    },
	                    success:function(data){
	                        commit('updateCart', data);
	                        commit('changePrice');
	                    },
	                    error:function(msg){
	                        console.log(msg.responseJSON);
	                    }
	                });

				}
			},

			// Remove cart item
			async removeCartItem({ commit, state }, data) {
				if ( data ) {

					await $.ajax({
	                    type:'POST',
	                    url:'/cart_items/' + data.id + '/delete',
	                    headers: {
	                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	                    },
	                    success:function(){
	                        commit('deleteCartItem', data.id);
	                        commit('changePrice');
	                    },
	                    error:function(msg){
	                        console.log(msg.responseJSON);
	                    }
	                });

				}
			},

			// Add discount
			async addDiscount({ commit, state }, data) {
				if ( data ) {

	                const reponse = await $.ajax({
	                    type:'POST',
	                    url:'/cart/discount',
	                    data: {
	                        code: data
	                    },
	                    headers: {
	                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	                    },
	                    success:function(data){
	                    	return data;
	                    },
	                    error:function(msg){
	                        console.log(msg.responseJSON);
	                    }
	                });

	                return reponse;

				}
			},

			// Remove discount
			async removeDiscount({ commit, state }) {

				await $.ajax({
                    type:'POST',
                    url:'/cart/discount/remove',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success:function(){
                        //
                    },
                    error:function(msg){
                        console.log(msg.responseJSON);
                    }
                });

			},

			// Get wishlist
			async getWishlist({ commit, state }) {

                await $.ajax({
                    type:'GET',
                    url:'/wishlist',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success:function(data){
                        console.log(data);
                    },
                    error:function(msg){
                        console.log(msg.responseJSON);
                    }
                });

			},

			// Add to wishlist
			async addToWishlist({ commit, state }, data) {
				console.log(data,"data");
				if ( data ) {
	                await $.ajax({
	                    type:'POST',
	                    url:'/wishlist',
	                    data: {
	                        product_id: data
	                    },
	                    headers: {
	                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	                    },
	                    success:function(data){
	                        console.log(data);
	                    },
	                    error:function(msg){
	                        console.log(msg.responseJSON);
	                    }
	                });

				}
			},

			// Remove discount
			async removeWishlist({ commit, state }, data) {

				await $.ajax({
                    type:'POST',
                    url:'/wishlist/delete/' + data,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success:function(data){
                        console.log(data);
                    },
                    error:function(msg){
                        console.log(msg.responseJSON);
                    }
                });

			},

			// Upload file
			async uploadFile({}, data) {

				const reponse = await $.ajax({
                    type:'POST',
                    url:'/ajax/upload',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: data,
                    cache : false,
    				processData: false,
                    contentType: false,
                    success:function(data){
                        return data;
                    },
                    error:function(msg){
                        console.log(msg.responseJSON);
                        return msg.responseJSON;
                    }
                });

                return reponse;

			},

		}
	})
})
</script>
