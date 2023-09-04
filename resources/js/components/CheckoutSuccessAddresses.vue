<script>
    export default {
        props: {
            order: Object,
        },

        render() {
            return this.$scopedSlots.default(Object.assign(this, { self: this }))
        },

        methods: {
            serialize(address) {
                return JSON.stringify({
                    firstname: address.firstname ?? '',
                    lastname: address.lastname ?? '', 
                    postcode: address.postcode ?? '',
                    street: address.street ?? '',
                    city: address.city ?? '',
                    country_id: address.country_id ?? '',
                    telephone: address.telephone ?? '',
                })
            },

            sameAddress(a1, a2) {
                return this.serialize(a1) == this.serialize(a2)
            },
        },

        computed: {
            hideBilling() {
                return this.shipping && this.billing && this.sameAddress(this.shipping, this.billing);
            },

            shipping() {
                if(!this.order?.sales_order_addresses) {
                    return null;
                }

                let shipping = this.order.sales_order_addresses.filter(e => e.address_type == 'shipping')
                return shipping.length > 1 ? null : shipping.at(-1)
            },

            billing() {
                if(!this.order?.sales_order_addresses) {
                    return null;
                }

                let billing = this.order.sales_order_addresses.filter(e => e.address_type == 'billing')
                return billing.at(-1)
            },

            pickup() {
                if(!this.order?.sales_order_addresses) {
                    return null;
                }

                let shipping = this.order.sales_order_addresses.filter(e => e.address_type == 'shipping')
                return shipping.length > 1 ? shipping[0] : null
            }
        }
    }
</script>
