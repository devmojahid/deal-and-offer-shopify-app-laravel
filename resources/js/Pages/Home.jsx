import React, { useEffect, useState } from "react";
import { Page, Layout, Card, TextStyle, Text } from "@shopify/polaris";
import axios from "axios";
import AppBridgeProvider from "../components/AppBridgeProvider";
import LayoutComponent from "../components/Layout";

const Home = ({ user }) => {
  //   const [shopDetails, setShopDetails] = useState({});

  //   useEffect(() => {
  //     fetchShopDetails();
  //   }, []);

  //   const fetchShopDetails = async () => {
  //     const response = await axios.get("/api/shop-details");
  //     setShopDetails(response.data.data);
  //   };

  return (
    <AppBridgeProvider>
      <h1>Hello from home</h1>
      <LayoutComponent user={user}>
        <Page title="Dashboard">
          <Layout>
            <Layout.Section>
              <Card sectioned>
                <p>
                  <Text variation="strong">Shop Name:</Text>{" "}
                  {/* {shopDetails.name} */}
                </p>
                <p>
                  <Text variation="strong">Shop Email:</Text>{" "}
                  {/* {shopDetails.email} */}
                </p>
              </Card>
            </Layout.Section>
            <Layout.Section secondary>
              <Card sectioned>
                <p>Welcome to your Shopify app!</p>
              </Card>
            </Layout.Section>
          </Layout>
        </Page>
      </LayoutComponent>
    </AppBridgeProvider>
  );
};

export default Home;
