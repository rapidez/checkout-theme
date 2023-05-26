<script>
    export default {
        data() {
            return {
                editing: false,
                popup: false,
            }
        },

        render() {
            return this.$scopedSlots.default({
                useCards: this.useCards,
                editing: this.editing,
                popup: this.popup,
                toggleEdit: this.toggleEdit,
                togglePopup: this.togglePopup,
                hideBilling: this.hideBilling,
                isType: this.isType,
                select: this.select,
            });
        },

        methods: {
            toggleEdit() {
                this.editing = !this.editing
            },

            togglePopup() {
                this.popup = !this.popup
            },

            isType(type, address) {
                let check = window.app.checkout[`${type}_address`]
                if(!check) {
                    return false
                }
                return check.id == address.id || check.customer_address_id == address.id
            },

            select(type, address) {
                window.app.checkout[`${type}_address`] = address
                window.app.checkout[`${type}_address`].customer_address_id = address.id
            },
        },

        computed: {
            useCards() {
                return this.loggedIn && this.addresses.length
            },

            addresses() {
                return this.$root.user?.addresses ?? []
            },

            hideBilling() {
                return window.app.checkout.hide_billing || window.app.checkout.shipping_address.customer_address_id == window.app.checkout.billing_address.customer_address_id
            }
        }
    }
</script>