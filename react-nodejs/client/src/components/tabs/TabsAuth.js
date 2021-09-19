import React from "react";
import MyTickets from "../../pages/MyTickets";
import Users from "../../pages/Users";
import UserTypes from "../../pages/UserTypes";
import InvoiceItemTypes from "../../pages/invoice/invoiceItemType";
import TabsRouter from "./tabRouter";

const Tabs = props => {
  const { isAdmin } = props;
  const tabs = [
    {
      label: "Tickets",
      to: "/tickets",
      render: () => <MyTickets {...{ ...props }} />
    },
    ...(isAdmin
      ? [
          {
            label: "Users",
            to: "/users",
            render: () => <Users {...{ ...props }} />
          },
          {
            label: "Roles",
            to: "/usertypes",
            render: () => <UserTypes {...{ ...props }} />
          },
          {
            label: "Invoice Item Types",
            to: "/invoiceItemTypes",
            render: () => <InvoiceItemTypes {...{ ...props }} />
          }
        ]
      : [])
  ];
  return <TabsRouter {...{ tabs, ...props }} />;
};

export default Tabs;
