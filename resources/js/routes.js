const Welcome = () => import('./components/Admin/Welcome.vue' /* webpackChunkName: "resource/js/components/welcome" */)
const TicketList = () => import('./components/Admin/tickets/List.vue' /* webpackChunkName: "resource/js/components/category/list" */)
const TicketEdit = () => import('./components/Admin/tickets/Edit.vue' /* webpackChunkName: "resource/js/components/category/edit" */)

export const routes = [
    {
        name: 'home',
        path: '/',
        component: Welcome
    },
    {
        name: 'ticketList',
        path: '/ticket',
        component: TicketList
    },
    {
        name: 'ticketEdit',
        path: '/ticket/:id/edit',
        component: TicketEdit
    }
]