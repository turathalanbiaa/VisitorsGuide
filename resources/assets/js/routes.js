import LostIndex from './components/LostsIndex';
import FindCenter from './components/FindCenter';
import VisitorsReceptionIndex from './components/VisitorsReceptionIndex';
import Dashboard from './components/Dashboard';
export const routes = [
    { path: '/', components: {
            LostIndex:LostIndex,
            VisitorsReceptionIndex: VisitorsReceptionIndex
    }
        },
    { path: '/find_center',
        name:'find_center',
        component:FindCenter},
    { path: '/dashboard',
        name:'dashboard',
        component:Dashboard},
    ];