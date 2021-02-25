<div id="product-actions" >

    <!-- Price -->
    <div class="mb-0">
        <span v-if="variantSelected && variantSelected.compare_at_price > 0" class="font-size-lg font-weight-bold text-gray-350 text-decoration-line-through">
            {{ variantSelected.compare_at_price | currency }}
        </span>
        <span v-else-if="product && product.compare_at_price > 0" class="font-size-lg font-weight-bold text-gray-350 text-decoration-line-through">
            {{ product.compare_at_price | currency }}
        </span>
        <span class="ml-1 font-size-h5 font-weight-bolder text-primary">
            {{ variantSelected ? variantSelected.price : product.price | currency }}
        </span>
        <span class="font-size-sm ml-1">(In Stock)</span>
    </div>

    <!-- Description -->
    <div v-if="product.description" class="text-gray-350 mb-5 mt-3">{{ product.description }}</div>

    <div class="mb-7 mt-6">
        
        <!-- Attributes -->
        <div v-if="attribute.attribute_values && attribute.attribute_values.length" v-for="attribute in product.attributes">
            <!-- Label -->
            <div class="mb-2">
                <strong class="text-capitalize">{{ attribute.name }}</strong>:

                <div v-if="attribute.guide" class="float-right">
                    <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.53822 7.78217C9.35978 7.78217 10.8453 6.69132 10.8453 5.3549C10.8453 4.01832 9.36419 2.92747 7.53822 2.92747C5.71224 2.92747 4.23112 4.01832 4.23112 5.3549C4.23112 6.69132 5.71666 7.78217 7.53822 7.78217ZM7.53822 3.78967C8.86449 3.78967 9.96102 4.50547 9.96102 5.35474C9.96102 6.20417 8.85125 6.91982 7.53822 6.91982C6.22503 6.91982 5.11525 6.20417 5.11525 5.35474C5.11525 4.50547 6.22503 3.78536 7.53822 3.78536V3.78967Z" fill="#111111"/>
                        <path d="M21.5579 9.83887H15.0321V5.35045C15.0321 2.40144 11.6676 0 7.51614 0C3.36449 0 0 2.40144 0 5.35045V10.6537C0 13.3699 2.85171 15.6119 6.52573 15.9525H6.60095C6.90591 15.9785 7.21544 16 7.52939 16H21.5579C21.8019 16 22 15.8069 22 15.5688V10.2699C22 10.032 21.8019 9.83887 21.5579 9.83887ZM7.53822 0.866498C11.1856 0.866498 14.1701 2.87997 14.1701 5.35491C14.1701 7.8297 11.2034 9.84317 7.53822 9.84317C3.87302 9.84317 0.906365 7.8297 0.906365 5.35476C0.906365 2.87997 3.8951 0.866498 7.53822 0.866498ZM14.1701 7.86845V9.83887H11.6057C12.6066 9.39647 13.4799 8.71957 14.1478 7.86845H14.1701ZM21.1157 15.1377H20.2314V12.956C20.2314 12.7181 20.0334 12.5248 19.7894 12.5248C19.5453 12.5248 19.3473 12.7179 19.3473 12.956V15.142H17.5787V13.9562C17.5787 13.7182 17.3807 13.5251 17.1366 13.5251C16.8925 13.5251 16.6944 13.7182 16.6944 13.9562V15.142H14.926V13.9562C14.926 13.7182 14.728 13.5251 14.4839 13.5251C14.2398 13.5251 14.0417 13.7182 14.0417 13.9562V15.142H12.2731V12.956C12.2731 12.7181 12.0751 12.5248 11.831 12.5248C11.5871 12.5248 11.3888 12.7179 11.3888 12.956V15.142H9.69564V13.9562C9.69564 13.7182 9.49743 13.5251 9.2535 13.5251C9.0094 13.5251 8.81135 13.7182 8.81135 13.9562V15.142H7.5379C7.36997 15.142 7.20645 15.142 7.04277 15.142V13.9562C7.04277 13.7182 6.84472 13.5251 6.60063 13.5251C6.35654 13.5251 6.15849 13.7182 6.15849 13.9562V15.0385C3.17448 14.6073 0.92844 12.8051 0.92844 10.6494V7.86845C2.1929 9.55424 4.6821 10.7011 7.56029 10.7011H21.1157V15.1377Z" fill="#111111"/>
                    </svg>
                    <a class="text-reset text-decoration-none ml-2" data-toggle="modal" href="#modalAttributeGuide" @click="showAttributeGuideModal(attribute.name, attribute.guide)">
                        <strong>{{ attribute.name }} Guide</strong>
                    </a>
                </div>
            </div>

            <!-- Radio -->
            <div class="mb-2">
                <template
                    v-for="(attributeValue, index) in attribute.attribute_values"
                    :key="index"
                >
                    <div class="custom-control custom-control-inline custom-control-size mb-2">
                        <input @change="checkVariant" :checked="index == 0" type="radio" class="custom-control-input" :name="'items[' + product.id + '][attribute_' + attribute.id + ']'" :id="'attributeRadio_' + attributeValue.id" :value="attributeValue.id" data-toggle="form-caption" data-target="#sizeCaption">
                        <label class="custom-control-label" :for="'attributeRadio_' + attributeValue.id">{{ attributeValue.value }}</label>
                    </div>
                </template>
            </div>

        </div>

        <!-- Custom data -->
        <div v-for="custom in customs">

            <!-- Custom -->
            <div class="form-group">
                <div>
                    <label class="text-capitalize" for="checkoutShippingCountry">
                        <strong>{{ custom.title }}</strong>:
                    </label>
                </div>

                <!-- Custom text -->
                <template v-if="custom.type == 'text' || custom.type == 'textarea'">
                    <input
                        :id="'custom-' + custom.id"
                        :name="'items[' + product.id + '][custom_' + custom.id + ']'"
                        class="form-control form-control-sm mb-3"
                        type="text"
                        :value="custom.default"
                        :placeholder="custom.title"
                    />
                </template>

                <!-- Custom checkbox or radio -->
                <div v-else-if="custom.type == 'radio' || custom.type == 'checkbox'" class="custom-control mb-3" :class="'custom-' + custom.type">
                    <div v-for="(label, value, index) in custom.options">
                        <input
                            class="custom-control-input"
                            :id="'custom-' + custom.id + '-' + index"
                            :name="'items[' + product.id + '][custom_' + custom.id + ']'"
                            :value="value"
                            :type="custom.type"
                            :checked="(!custom.default && index == 0) || custom.default == value ? true : false"
                        />
                        <label class="custom-control-label text-body text-nowrap" :for="'custom-' + custom.id + '-' + index">
                            {{ label }}
                        </label>
                    </div>
                </div>

                <!-- Custom select -->
                <select v-else-if="custom.type == 'select'" class="custom-select mb-2" :name="'items[' + product.id + '][custom_' + custom.id + ']'">
                    <option
                        v-for="(label, value, index) in custom.options"
                        :value="value"
                        :selected="(!custom.default && index == 0) || custom.default == value ? true : false"
                    >
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

        <!-- Errors -->
        <div v-if="errors" class="alert alert-danger mt-6" role="alert">
            <ul v-if="errors.errors" class="mb-0">
                <template v-for="error in errors.errors">
                    <li v-for="message in error">
                        {{ message }}
                    </li>
                </template>
            </ul>
            <span v-else-if="errors.message">{{ errors.message }}</span>
            <span v-else>
                Failed to communicate with the server, please report this error to us.
            </span>
        </div>

        <div class="form-row">
            <div class="col-12 col-lg-auto">

                <!-- Quantity -->
                <select v-model="quantity" class="custom-select mb-2">
                    <option value="1" selected>1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>

            </div>
            <div class="col-12 col-lg">

                <!-- Submit -->
                <button :disabled="isLoading || isUploading" @click="addToCart" class="btn btn-block btn-primary mb-2">
                    Add to Cart
                    <i v-if="!isLoading && !isUploading" class="fe fe-shopping-cart ml-2"></i>
                    <div v-else class="spinner-border spinner-border-sm align-middle ml-2" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                </button>

            </div>
            <div class="col-12 col-lg-auto">

                <!-- Wishlist -->
                <button :disabled="isAdding" @click="addWishlist" class="btn btn-outline-dark btn-block mb-2" >
                    <span v-if="!isAdding">
                        Wishlist
                        <i class="fe fe-heart ml-2"></i>
                    </span>
                    <span v-else>
                        Adding...
                        <div class="spinner-border spinner-border-sm align-middle" role="status">
                            <span class="sr-only">Loading...</span>
                        </div>
                    </span>
                </button>

            </div>
        </div>

    </div>

    <!-- Attribute guide modal -->
    <div class="modal fade" id="modalAttributeGuide" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">

          <!-- Close -->
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="fe fe-x" aria-hidden="true"></i>
          </button>

          <!-- Header-->
          <div class="modal-header line-height-fixed font-size-lg">
            <strong class="mx-auto">
                {{ attributeTitle }} Guide
            </strong>
          </div>

          <!-- Body -->
          <div class="modal-body border-bottom" v-html="attributeContent"></div>

        </div>

      </div>
    </div>

</div>

<script type="text/javascript">
document.addEventListener('DOMContentLoaded', function() {
    const product = <?php echo json_encode($product); ?>;
    const variants = <?php echo json_encode($product->variants); ?>;
    const customs = <?php echo json_encode($product->customs); ?>;
    const variantAttributeValues = <?php echo json_encode($product->variant_attribute_values); ?>;

    const actions = new Vue({
        el: '#product-actions',
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
                url: {},
                path: {}
            }
        },
        created() {
            if (product) {
                this.product = product;
            }

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

            // $('#product-actions').removeClass('d-none');

        },
        methods: {
            async addToCart() {
                console.log("12321");
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
                console.log(data,"data");
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
