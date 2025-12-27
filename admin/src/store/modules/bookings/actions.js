import axiosClient from "../../../axios";

export function getBookings({commit}, {url = null, perPage = 20} = {}) {
    url = url || '/bookings';
    return axiosClient.get(url, {
        params: {perPage}
    }).then(({data}) => {
        commit('setBookings', data)
    })
}

export function getBooking({commit}, bookingId) {
    return axiosClient.get(`/bookings/${bookingId}`)
}

export function updateBooking({commit}, booking) {
    const id = booking.id;
    booking._method = "PUT";
    return axiosClient.post(`/bookings/${id}`, booking);
}

export function deleteBooking({commit}, id) {
    return axiosClient.delete(`/bookings/${id}`)
}
