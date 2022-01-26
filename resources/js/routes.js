import AllLocations from './components/AllLocations.vue';
import CreateLocation from './components/CreateLocation.vue';
import EditLocation from './components/EditLocation.vue';

export const routes = [
    {
        name: 'home',
        path: '/',
        component: AllLocations
    },
    {
        name: 'create',
        path: '/create',
        component: CreateLocation
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditLocation
    }
];
