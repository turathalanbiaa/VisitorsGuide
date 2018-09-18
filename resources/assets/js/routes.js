import LostIndex from './components/LostsIndex';
import FindCenter from './components/FindCenter';
import VisitorsReceptionIndex from './components/VisitorsReceptionIndex';
import AddVisitorsReception from './components/AddVisitorsReception';
export const routes = [
    { path: '/', components: {
            LostIndex:LostIndex,
            VisitorsReceptionIndex: VisitorsReceptionIndex
    }
        },
    { path: '/find_center',
        name:'find_center',
        component:FindCenter},
    { path: '/add_reception',
        name:'add_reception',
        component:AddVisitorsReception},
    ];