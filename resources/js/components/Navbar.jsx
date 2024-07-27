import { useAppBridge } from "@shopify/app-bridge-react";
import { Frame, Navigation, TopBar } from "@shopify/polaris";
import React from "react";

const Navbar = ({ user }) => {
  const topBarMarkup = <TopBar showNavigationToggle />;

  const navigationMarkup = (
    <Navigation location="/">
      <Navigation.Section
        items={[
          {
            url: "/",
            label: "Home",
          },
          {
            url: "/dashboard",
            label: "Dashboard",
          },
          {
            url: "/products",
            label: "Products",
          },
          {
            url: "/orders",
            label: "Orders",
          },
        ]}
      />
    </Navigation>
  );
  return (
    <Frame topBar={topBarMarkup} navigation={navigationMarkup}>
      {user ?? <p>Welcome, {user.name}</p>}
    </Frame>
  );
};

export default Navbar;
