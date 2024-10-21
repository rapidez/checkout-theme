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
                return this.order.shipping_address
            },

            billing() {
                return this.order.billing_address
            },

            pickup() {
                return this.shipping
            }
        }
    }
</script>
