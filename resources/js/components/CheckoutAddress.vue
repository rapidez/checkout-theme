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
