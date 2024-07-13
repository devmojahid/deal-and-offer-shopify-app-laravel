import React from 'react';
import { createInertiaApp } from '@inertiajs/inertia-react';
import { render } from 'react-dom';
import { AppProvider as PolarisProvider } from '@shopify/polaris';
import ShopifyAppBridgeProvider from './Providers/ShopifyAppBridgeProvider';
import '@shopify/polaris/dist/styles.css';
import { BrowserRouter as Router, Route, Switch } from 'react-router-dom';
import ProtectedRoute from './Components/ProtectedRoute';
import Login from './Pages/Login';
import Home from './Pages/Home';
import axios from 'axios';
import { refreshToken } from './utils/refreshToken';

// Setup Axios Interceptors for token refresh
axios.interceptors.response.use(
  response => response,
  async error => {
    const originalRequest = error.config;
    if (error.response.status === 401 && !originalRequest._retry) {
      originalRequest._retry = true;
      const newToken = await refreshToken();
      if (newToken) {
        axios.defaults.headers.common['Authorization'] = `Bearer ${newToken}`;
        return axios(originalRequest);
      }
    }
    return Promise.reject(error);
  }
);

createInertiaApp({
  resolve: name => require(`./Pages/${name}`).default,
  setup({ el, App, props }) {
    render(
      <PolarisProvider>
        <ShopifyAppBridgeProvider>
          <Router>
            <Switch>
              <Route path="/login" component={Login} />
              <ProtectedRoute path="/home" component={Home} />
            </Switch>
          </Router>
        </ShopifyAppBridgeProvider>
      </PolarisProvider>,
      el
    );
  },
});
