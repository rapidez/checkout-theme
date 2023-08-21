<script>
    export default {
        props: {
            address: Object,
            shipping: Boolean,
            billing: Boolean,
            customTitle: {
                type: String,
                default: '',
            }
        },

        render() {
            return this.$scopedSlots.default(Object.assign(this, { self: this }))
        },

        computed: {
            formattedAddress() {
                let street = this.address.street
                if (Array.isArray(street)) {
                    street = street?.filter(Boolean).join(' ') ?? ''
                } else {
                    street = street.replace('\n', ' ')
                }

                let data = {
                    company: this.address.company ?? '',
                    name: [this.address.firstname, this.address.middlename, this.address.lastname].filter(Boolean).join(' '),
                    street: street,
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