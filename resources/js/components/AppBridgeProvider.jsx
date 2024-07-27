import { createApp } from "@shopify/app-bridge";
import { authenticatedFetch } from "@shopify/app-bridge-utils";
import React from "react";
import { AppBridgeContext } from "@shopify/app-bridge-react";
// import { AppBridgeProvider as Provider } from "@shopify/app-bridge-react";

const AppBridgeProvider = ({ children }) => {
  const app = createApp({
    apiKey: process.env.MIX_SHOPIFY_API_KEY,
    shopOrigin: new URLSearchParams(window.location.search).get("shop"),
    forceRedirect: true,
  });

  const fetchFunction = authenticatedFetch(app);

  //   const fetchFunction = async (url, options) => {
  //     const response = await fetch(url, options);
  //     const data = await response.json();
  //     return data;
  //   };

  return (
    // <Provider
    //   config={{
    //     apiKey: process.env.MIX_SHOPIFY_API_KEY,
    //     shopOrigin: new URLSearchParams(window.location.search).get("shop"),
    //     forceRedirect: true,
    //   }}
    // >
    <div>
      <h1>AppBridgeProvider</h1>
      {children}
    </div>
    // </Provider>
  );
};

export default AppBridgeProvider;
