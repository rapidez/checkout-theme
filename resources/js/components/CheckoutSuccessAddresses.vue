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
            addresses() {
                if(!this.order?.sales_order_addresses) {
                    return {}
                }
                let addresses = {}

                let shipping = this.order.sales_order_addresses.filter(e => e.address_type == 'shipping')
                let billing = this.order.sales_order_addresses.filter(e => e.address_type == 'billing')

                let pickup_address = shipping.length > 1 ? shipping[0] : null;
                let same_billing = this.sameAddress(shipping.at(-1), billing.at(-1))

                if(pickup_address) {
                    addresses['pickup'] = pickup_address
                    addresses['billing'] = billing.at(-1)
                    return addresses
                }

                if(!same_billing) {
                    addresses['shipping'] = shipping.at(-1)
                    addresses['billing'] = billing.at(-1)
                    return addresses
                }
                
                addresses['shipping_billing'] = shipping.at(-1)

                return addresses
            },
        }
    }
</script>
