import LostIndex from './components/LostsIndex';
import LostsDashboard from './components/LostsDashboard';
import ReceptionIndex from './components/ReceptionIndex';
import ReceptionDashboard from './components/ReceptionDashboard';
import Location from "./components/Location";
export const routes = [
    { path: '/', components: {
            LostIndex:LostIndex,
            ReceptionIndex: ReceptionIndex
    }
        },
    { path: '/losts-dashboard',
        name:'losts-dashboard',
        component:LostsDashboard},
    { path: '/reception-dashboard',
        name:'reception-dashboard',
        component:ReceptionDashboard},
    {
        path: '/Location',
        name: 'Location',
        component: Location
    },
    ];