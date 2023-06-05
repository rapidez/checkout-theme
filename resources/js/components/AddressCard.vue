<script>
    export default {
        props: {
            address: Object,
            shipping: Boolean,
            billing: Boolean,
        },

        render() {
            return this.$scopedSlots.default({
                address: this.formattedAddress,
                baseAddress: this.address,
                shipping: this.shipping,
                billing: this.billing,
                isEmpty: this.isEmpty,
            });
        },

        computed: {
            formattedAddress() {
                let data = {
                    company: this.address.company ?? '',
                    name: [this.address.firstname, this.address.middlename, this.address.lastname].filter(Boolean).join(' '),
                    street: this.address.street?.filter(Boolean).join(' ') ?? '',
                    city: [this.address.postcode, this.address.city].filter(Boolean).join(' '),
                    country: this.address.country_id ?? this.address.country_code ?? '',
                }
                return Object.fromEntries(Object.entries(data).filter(([key, value]) => value))
            },

            isEmpty() {
                return Object.keys(this.formattedAddress).filter(key => key != 'country').length == 0
            }
        }
    }
</script>