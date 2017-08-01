/**
 * Define the routes to use in the application
 *
 * @author Stanley Clark
 * @version 1.0.0
 */

// Import top level route modules as async components (for packaging as separate bundles)

const Home = resolve => {
    require.ensure(['./components/home/Home.vue'], () => {
        resolve(require('./components/home/Home.vue'))
    })
};

const Work = resolve => {
    require.ensure(['./components/work/Work.vue'], () => {
        resolve(require('./components/work/Work.vue'))
    })
};

const Blog = resolve => {
    require.ensure(['./components/blog/Blog.vue'], () => {
        resolve(require('./components/blog/Blog.vue'))
    })
};

const Post = resolve => {
    require.ensure(['./components/blog/Post.vue'], () => {
        resolve(require('./components/blog/Post.vue'))
    })
};

// The actual route definition is done here

const routes = [
    {
        path: '/',
        component: Home,
        name: 'Home'
    },
    {
        path: '/work',
        component: Work,
        name: 'Work'
    },
    {
        path: '/blog',
        component: Blog,
        name: 'Blog'
    },
    {
        path: '/blog/:htmlTitle',
        component: Post,
        name: 'Blog'
    }
];

export default routes;