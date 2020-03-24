import Logo from './components/Logo.vue';
import LogoSymbol from './components/LogoSymbol.vue';
import Colors from './components/Colors.vue';
import NotFound from './components/NotFound.vue';
import Illustrations from './components/Illustrations.vue';
let LoadersAndAnimations = () => import(/* webpackChunkName: "Loaders" */ './components/LoadersAndAnimations.vue');
import Mascot from './components/Mascot.vue';
import Typography from './components/Typography.vue';
import Wallpapers from './components/Wallpapers.vue';


export default {
  mode: 'history',
  linkActiveClass: 'font-bold',
  routes: [
    {
      path: '*',
      component: NotFound
    },
    {
      path: '/',
      component: Logo
    },
    {
      path: '/logo-symbol',
      component: LogoSymbol
    },
    {
      path: '/colors',
      component: Colors
    },
    {
      path: '/illustrations',
      component: Illustrations
    },
    {
      path: '/loaders-and-animations',
      component: LoadersAndAnimations
    },
    {
      path: '/mascot',
      component: Mascot
    },
    {
      path: '/typography',
      component: Typography
    },
    {
      path: '/wallpapers',
      // component: () =>
      //   import('../views/Wallpapers.vue')
      component: Wallpapers
    },
  ]
}