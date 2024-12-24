import { createInertiaApp } from "@inertiajs/inertia-svelte";

createInertiaApp({
    resolve: (name) => import(`./Pages/${name}.svelte`),
    setup({ el, App, props }) {
        new App({
            target: el,
            props,
        });
    },
});

document.getElementById("app").removeAttribute("data-page");
