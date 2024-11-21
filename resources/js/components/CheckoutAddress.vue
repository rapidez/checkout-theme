<script>
    export default {
        data() {
            return {
                editing: false,
            }
        },

        render() {
            return this.$scopedSlots.default(Object.assign(this, { self: this }))
        },

        methods: {
            toggleEdit() {
                this.editing = !this.editing

                if (this.editing) {
                    this.$root.checkout['billing_address'].customer_address_id = null
                    this.$root.checkout['shipping_address'].customer_address_id = null
                }
            },

            isType(type, address) {
                let check = this.$root.checkout[`${type}_address`]

                if (!check) {
                    return false
                }

                return check.id == address.id || check.customer_address_id == address.id
            },

            select(type, address) {
                this.$root.checkout[`${type}_address`] = JSON.parse(JSON.stringify(address))
                this.$root.checkout[`${type}_address`].customer_address_id = address.id
            },
        },

        computed: {
            useCards() {
                return this.$root.loggedIn && this.addresses.length
            },

            addresses() {
                return this.$root.user?.addresses ?? []
            },
        }
    }
</script>
