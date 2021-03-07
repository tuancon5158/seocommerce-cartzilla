<div id="product-actions-<?php echo json_encode($product->id); ?>" class="col-lg-5 pt-4 pt-lg-0 d-none">
     <div class="product-details ms-auto pb-3">
         <div class="d-flex justify-content-between align-items-center mb-2"><a href="#reviews" data-scroll>
                 <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i>
                 </div>
                 <span v-if="product.review" class="d-inline-block fs-sm text-body align-middle mt-1 ms-1"> {{ product.reviews.length }} Reviews</span>
             </a>
             <button class="btn-wishlist me-0 me-lg-n3" type="button" data-bs-toggle="tooltip" @click="addWishlist" title="Add to wishlist">
                 <span v-if="isAdding" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                 <i v-else class="ci-heart"></i></button>
         </div>
         <div class="mb-3">
             <span class="h3 fw-normal text-accent me-1">{{ variantSelected ? variantSelected.price : product.price | currency }}</span>
             <del v-if="variantSelected && variantSelected.compare_at_price > 0" class="text-muted fs-lg me-3"> {{ variantSelected.compare_at_price | currency }} </del>
             <del v-else-if="product && product.compare_at_price > 0" class="text-muted fs-lg me-3"> {{ product.compare_at_price | currency }} </del>
             <span class="badge bg-danger badge-shadow align-middle mt-n2">Sale</span>
         </div>

         <div v-if="product.description" class="text-muted mb-5 mt-3">{{ product.description }}</div>
         <div class="" :id="attribute-<?php echo json_encode($product->id); ?>" v-if="attribute.attribute_values && attribute.attribute_values.length" v-for="attribute in product.attributes">
             <div class="">
                 <div class="d-flex justify-content-between align-items-center pb-1">
                     <label class="form-label" for="product-size">{{ attribute.name }}:</label><a v-if="attribute.guide" class="nav-link-style fs-sm" :href="`#guide-${attribute.id}-<?php echo json_encode($product->id); ?>`" data-bs-toggle="modal"><i class="ci-ruler lead align-middle me-1 mt-n1"></i>{{ attribute.name }} guide</a>
                 </div>
                 <!-- Radio -->
                 <div class="product-details">
                     <div class="mb-2 position-relative border-bottom mt-2">
                         <template v-for="(attributeValue, index) in attribute.attribute_values" :key="index">
                             <!-- <div class="custom-control custom-control-inline custom-control-size mb-2">
                        <input @change="checkVariant" :checked="index == 0" type="radio" class="custom-control-input" :name="'items[' + product.id + '][attribute_' + attribute.id + ']'" :id="'attributeRadio_' + attributeValue.id" :value="attributeValue.id" data-toggle="form-caption" data-target="#sizeCaption">
                        <label class="custom-control-label" :for="'attributeRadio_' + attributeValue.id">{{ attributeValue.value }}</label>
                    </div> -->
                             <div class="form-check form-option form-check-inline">
                                 <input @change="checkVariant" :checked="index === 0" class="form-check-input" type="radio" :name="'items[' + product.id + '][attribute_' + attribute.id + ']'" :id="'attributeRadio_' + attributeValue.id + `_<?php echo json_encode($product->id); ?>`" :value="attributeValue.id" data-bs-label="colorOption">
                                 <label class="form-option-label" :for="'attributeRadio_' + attributeValue.id + `_<?php echo json_encode($product->id); ?>`">{{ attributeValue.value }}</label>
                             </div>
                         </template>
                     </div>
                 </div>
                 <div class="modal fade" :id="`guide-${attribute.id}-<?php echo json_encode($product->id); ?>`">
                     <div class="modal-dialog modal-dialog-scrollable">
                         <div class="modal-content" style="">
                             <div class="modal-header bg-secondary">
                                 <div> {{ attribute.name }} Guide</div>
                                 <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                             </div>
                             <div class="modal-body p-4">
                                 <div class="tab-content" v-html="attribute.guide">
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div>
             <div v-for="custom in customs">
                 <!-- Custom -->
                 <div class="form-group mb-grid-gutter">
                     <div>
                         <label class="text-capitalize" for="checkoutShippingCountry">
                             <strong>{{ custom.title }}</strong>:
                         </label>
                     </div>
                     <!-- Custom text -->
                     <template v-if="custom.type == 'text' || custom.type == 'textarea'">
                         <input :id="'custom-' + custom.id + `-<?php echo json_encode($product->id); ?>`" :name="'items[' + product.id + '][custom_' + custom.id + ']'" class="form-control form-control-sm mb-3" type="text" :value="custom.default" :placeholder="custom.title" />
                     </template>

                     <!-- Custom checkbox or radio -->
                     <div v-else-if="custom.type == 'radio' || custom.type == 'checkbox'" class="custom-control mb-3" :class="'custom-' + custom.type">
                         <div v-for="(label, value, index) in custom.options">
                             <input class="custom-control-input" :id="'custom-' + custom.id + '-' + index" :name="'items[' + product.id + '][custom_' + custom.id + ']'" :value="value" :type="custom.type" :checked="(!custom.default && index == 0) || custom.default == value ? true : false" />
                             <label class="custom-control-label text-body text-nowrap" :for="'custom-' + custom.id + '-' + index">
                                 {{ label }}
                             </label>
                         </div>
                     </div>
                     <!-- Custom select -->
                     <select v-else-if="custom.type == 'select'" class="custom-select mb-2" :name="'items[' + product.id + '][custom_' + custom.id + ']'">
                         <option v-for="(label, value, index) in custom.options" :value="value" :selected="(!custom.default && index == 0) || custom.default == value ? true : false">
                             {{ label }}
                         </option>
                     </select>

                     <!-- Custom file -->
                     <div class="d-inline-block position-relative" v-else-if="custom.type == 'file'">
                         <input @change="fileInput" :id="'custom-' + custom.id" type="file" name="file" class="d-none">
                         <div @click="showSelectFile(custom.id)" class="d-inline-block p-1 rounded text-secondary position-relative" style="border: 1px dashed #e5e5e5; cursor: pointer;">
                             <!-- Icon -->
                             <svg v-if="!url['custom-' + custom.id]" width="80px" class="p-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                             </svg>
                             <!-- Image -->
                             <img v-else :src="url['custom-' + custom.id]" width="80" height="80" style="object-fit: cover">
                             <!-- Loader -->
                             <div v-if="isUploading" class="position-absolute bg-dark text-center" style="left: 0; right: 0; bottom: 0; top: 0; opacity: 0.2; padding-top: 28px;">
                                 <div class="spinner-border text-light" role="status">
                                     <span class="sr-only">Loading...</span>
                                 </div>
                             </div>
                         </div>

                         <!-- Remove image -->
                         <button v-if="url['custom-' + custom.id]" @click="removeFile('custom-' + custom.id)" type="button" class="close" aria-label="Close" style="right: -5px; top: -8px; outline: none;">
                             <span aria-hidden="true">&times;</span>
                         </button>
                     </div>

                 </div>

             </div>
         </div>
         <div class="mb-grid-gutter">
             <div class="mb-3 d-flex align-items-center">
                 <select v-model="quantity" class="form-select me-3" style="width: 5rem;">
                     <option value="1">1</option>
                     <option value="2">2</option>
                     <option value="3">3</option>
                     <option value="4">4</option>
                     <option value="5">5</option>
                 </select>
                 <button :disabled="isLoading || isUploading" @click="addToCart" class="btn btn-primary btn-shadow d-block w-100" type="submit">
                     <span v-if="!isLoading && !isUploading"> Add to Cart <i class="ci-cart fs-lg me-2"></i></span>
                     <span v-else>
                         <span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"> </span>
                         Loading...
                     </span>

                 </button>
             </div>
             <div>
                <!-- <p v-if="productDetail.collections && productDetail.collections.length > 0" class="mb-3">
                     <span class="">Collections:</span>
                     <a v-for="collection in  product.collections" :href="`/collection${collection.slug}`" :title="collection.seo_title ? collection.title :'' }}" class="badge bg-dark">{{ collection.title }}</a>
                 </p>
                 <p v-if="productDetail.tags && productDetail.tags.length>0">
                     <span class="text-muted">Tags:</span>
                     <a v-for="tag in  product.tags" :href="`/tag/${tag.slug}`" :title="tag.title" class="badge bg-dark">{{ tag.title }}</a>
                 </p> -->
             </div>
         </div>

         <label class="form-label d-inline-block align-middle my-2 me-3">Share:</label>
         <a class="btn-share btn-twitter me-2 my-2" href="https://twitter.com/share?url={{ Request::url() }}&hashtag={{ str_replace('_', '', Illuminate\Support\Str::snake(\App\Models\Option::getValue('siteName'))) }}" target="_blank"><i class="ci-twitter"></i>Twitter</a>
         <a class="btn-share btn-facebook my-2" href="https://www.facebook.com/sharer/sharer.php?u={{ Request::url() }}" target="_blank"><i class="ci-facebook"></i>Facebook</a>
         <a class="btn-share btn-instagram me-2 my-2" href="https://pinterest.com/pin/create/button/?url={{ Request::url() }}" target="_blank"> <i class="fab fa-pinterest-p"></i>Instagram</a>
     </div>
 </div>
<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function() {
    // const productDetail =
    const variants = <?php echo json_encode($product->variants); ?>;
    const customs = <?php echo json_encode($product->customs); ?>;
    const variantAttributeValues = <?php echo json_encode($product->variant_attribute_values); ?>;
    const actions = new Vue({
        el: `#product-actions-${product.id}`,
        data() {
            return {
                quantity: 1,
                isLoading: false,
                store: window.$store,
                product: null,
                customs: null,
                variants: null,
                variantSelected: null,
                variantAttributeValues: null,
                isAdding: false,
                errors: null,
                attributeTitle: null,
                attributeContent: null,
                isUploading: false,
                productDetail:null,
                url: {},
                path: {}
            }
        },
        created() {
            if (product) {
                this.product = product;
            }
            // if(productDetail){
            //   // this.productDetail = productDetail
            //   console.log("productDetail",productDetail);

            // }
            if (customs) {
                this.customs = customs;
            }

            if (variants) {
                this.variants = variants;
            }

            if (variantAttributeValues) {
                this.variantAttributeValues = variantAttributeValues;
            }

        },
        mounted() {

            this.checkVariant();
             $(`#product-actions-${product.id}`).removeClass('d-none');

        },
        methods: {
            async addToCart() {
                this.isLoading = true;
                this.errors = null;

                let data = {};
                data[this.product.id] = {};
                data[this.product.id].quantity = this.quantity;

                // Get attribute selected
                for (var i = 0; i < this.product.attributes.length; i++) {
                    const attr = this.product.attributes[i];

                    let values = document.getElementsByName('items[' + this.product.id + '][attribute_' + attr.id + ']');

                    for (var j = 0; j < values.length; j++) {
                        if (values[j].checked) {
                            data[this.product.id]['attribute_' + attr.id] = values[j].value;
                        }
                    }
                }

                // Get custom data
                for (var i = 0; i < this.customs.length; i++) {
                    const custom = this.customs[i];

                    if (custom.type !== 'file') {

                        let input = document.getElementsByName('items[' + this.product.id + '][custom_' + custom.id + ']');

                        for (var j = 0; j < input.length; j++) {
                            if (input[j].type == 'text' || input[j].type == 'textarea' || input[j].type == 'select-one') {
                                data[this.product.id]['custom_' + custom.id] = input[j].value;
                            } else if (input[j].checked) {
                                data[this.product.id]['custom_' + custom.id] = input[j].value;
                            }
                        }

                    } else {

                        data[this.product.id]['custom_' + custom.id] = this.path['custom-' + custom.id];

                    }

                }

                await this.store.dispatch('addToCart', data)
                    .then(() => {
                        //
                    })
                    .catch(error => {
                        this.errors = error.responseJSON;
                    });

                this.isLoading = false;
            },

            checkVariant() {
                let variantIds = [];
                this.variantSelected = null;

                // Get attribute selected
                for (var i = 0; i < this.product.attributes.length; i++) {
                    const attr = this.product.attributes[i];

                    let values = document.getElementsByName('items[' + this.product.id + '][attribute_' + attr.id + ']');

                    for (var j = 0; j < values.length; j++) {
                        if (values[j].checked) {

                            let variantAttr = [];

                            if (i == 0) {
                                variantAttr = this.variantAttributeValues.filter(variantAttr => variantAttr.attribute_id == attr.id && variantAttr.attribute_value_id == values[j].value);

                            } else {

                                variantAttr = this.variantAttributeValues.filter(variantAttr => variantIds.includes(variantAttr.variant_id) && variantAttr.attribute_id == attr.id && variantAttr.attribute_value_id == values[j].value);

                                variantIds = [];

                            }

                            for (var n = 0; n < variantAttr.length; n++) {
                                if (!variantIds.includes(variantAttr[n].variant_id)) {
                                    variantIds = variantIds.concat(variantAttr[n].variant_id)
                                }
                            }

                        }
                    }
                }

                if (variantIds.length) {
                    this.variantSelected = this.variants.filter(variant => variant.id == variantIds[0])[0];
                }

            },

            async addWishlist() {

                try {

                    this.isAdding = true;

                    await this.store.dispatch('addToWishlist', this.product.id);

                    this.isAdding = false;

                } catch (err) {
                    console.log(err)
                }

            },

            showAttributeGuideModal(title, content) {
                this.attributeTitle = null;
                this.attributeContent = null;

                if (content && title) {
                    this.attributeTitle = title;
                    this.attributeContent = content;
                }
            },

            showSelectFile(id) {
                if (!this.isUploading) {
                    document.getElementById('custom-' + id).click();
                }
            },

            uploadFile(file) {
                return new Promise((resolve, reject) => {
                    const formData = new FormData();
                    formData.append("type", "file");
                    formData.append("file", file);

                    const params = {
                        file: file
                    }

                    this.store.dispatch('uploadFile', formData)
                        .then(resolve)
                        .catch(reject);
                });
            },

            fileInput(event) {
                let files = [];
                this.isUploading = true;
                this.errors = null;

                const id = event.target.id;
                files = event.target.files || event.dataTransfer.files;

                if (files.length) {
                    const file = files[0];
                    this.url[id] = URL.createObjectURL(file);

                    if (file.type.startsWith("image/")) {

                        this.uploadFile(file)
                            .then(res => {
                                this.path[id] = res.path;
                            })
                            .catch(() => {

                            })
                            .finally(() => {
                                this.isUploading = false;
                            });

                    } else {
                        this.errors = {
                            errors: [{
                                message: "This file is not supported!"
                            }]
                        };

                        this.isUploading = false;
                    }
                } else {
                    this.isUploading = false;
                }
            },

            removeFile(id) {
                this.$delete(this.url, id);
                this.$delete(this.path, id);
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
