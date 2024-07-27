import React from "react";
import { render } from "react-dom";
import { createInertiaApp, InertiaApp } from "@inertiajs/inertia-react";
import { AppProvider } from "@shopify/polaris";
import translations from "@shopify/polaris/locales/en.json";

// const el = document.getElementById("app");

// render(
//   <AppProvider i18n={translations}>
//     <InertiaApp
//       initialPage={JSON.parse(el.dataset.page)}
//       resolveComponent={(name) => require(`./Pages/${name}`).default}
//     />
//   </AppProvider>,
//   el
// );

createInertiaApp({
  resolve: (name) => {
    const pages = import.meta.glob("./Pages/**/*.jsx", { eager: true });
    return pages[`./Pages/${name}.jsx`];
  },
  setup({ el, App, props }) {
    createRoot(el).render(<App {...props} />);
  },
});
