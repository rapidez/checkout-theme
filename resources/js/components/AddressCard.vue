<script>
    export default {
        props: {
            address: Object,
            shipping: Boolean,
            billing: Boolean,
        },

        render() {
            return this.$scopedSlots.default(Object.assign(this, { self: this }))
        },

        computed: {
            company() {
                return this.address.company ?? '';
            },

            street() {
                let street = this.address.street
                if (Array.isArray(street)) {
                    return street?.filter(Boolean).join(' ') ?? ''
                } else {
                    return street.replace('\n', ' ')
                }
            },

            name() {
                return [this.address.firstname, this.address.middlename, this.address.lastname].filter(Boolean).join(' ');
            },

            city() {
                return [this.address.postcode, this.address.city].filter(Boolean).join(' ')
            },

            country() {
                return this.address.country_id ?? this.address.country_code ?? ''
            },

            isEmpty() {
                return [this.company, this.street, this.name, this.city].filter(Boolean).length == 0
            }
        }
    }
</script>