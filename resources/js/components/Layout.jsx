import React from "react";

const Layout = ({ children, user }) => {
  return (
    <div>
      <Navbar user={user} />
      <div className="content">{children}</div>
    </div>
  );
};

export default Layout;
