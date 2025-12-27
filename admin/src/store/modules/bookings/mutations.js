export function setBookings(state, data) {
    state.data = data.data
    state.loading = false
    state.from = data.meta?.from
    state.to = data.meta?.to
    state.total = data.meta?.total
    state.per_page = data.meta?.per_page
    state.links = data.meta?.links
}
