<!-- CONTENT -->
<section id="payment-successful" class="py-12">
<div class="container pb-5 mb-sm-4">
      <div class="pt-5">
        <div class="card py-3 mt-sm-3">
          <div class="card-body text-center">
            <h2 class="h4 pb-3">Thank you for your order!</h2>
            <p class="fs-sm mb-2">We've just sent you an order confirmation email. We will send you another email when your order is shipped..</p>
            <p class="fs-sm mb-2"> <a href="<?php echo route('tracking'); ?>" class="btn btn-primary btn-lg btn-dark">Track Your Order</a></span></p>
          </div>
        </div>
      </div>
    </div>

</section>

<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function() {

    const actions = new Vue({
        el: '#payment-successful',
        data() {
            return {
                store: window.$store
            }
        },
        created() {
            this.store.commit('resetCart');
        }
    })
})
</script>
