/* partials/sidebar.jsx - Sidebar component. */

/*
modification history
--------------------
01a,15dec21,rks  created.
*/

import React, { PureComponent } from 'react';
import ReactDOM from 'react-dom';
import classNames from 'classnames';
import { capitalizeAll } from 'ramda-extension';
import isPresent from '../lib/is_present';

const SIDEBAR_ITEMS = [
  { name: 'dashboard', icon: 'icon-home', path: 'index.php' },
  {
    name: 'exams',
    icon: 'icon-copy',
    path: '#',
    submenuItems: [
      { name: 'internal exam', icon: 'icon-file', path: 'internal.php' },
      { name: 'semester', icon: 'icon-file', path: 'semester.php' },
    ],
  },
  { name: 'library', icon: 'icon-book', path: 'library.php' },
  { name: 'attendance', icon: 'icon-signal', path: 'attendance.php' },
  { name: 'timetable', icon: 'icon-table', path: 'timetable.php' },
  { name: 'calendar', icon: 'icon-calendar', path: 'calendar.php' },
  {
    name: 'lecture notes', icon: 'icon-copy', path: 'Elearning/pages/site/index.html', openInNewTab: true,
  },
  {
    name: 'gallery',
    icon: 'icon-picture',
    path: '#',
    submenuItems: [
      { name: 'cultural event', icon: 'icon-file', path: 'cultural.php' },
      { name: 'techfest', icon: 'icon-file', path: 'techfest.php' },
    ],
  },
  { name: 'transport', icon: 'icon-truck', path: 'transport.php' },
  { name: 'discipline', icon: 'icon-bullhorn', path: 'discipline.php' },
  { name: 'feedback', icon: 'icon-comments', path: 'feedback.php' },
];

class Sidebar extends PureComponent {
  constructor(props) {
    super(props);

    let [, urlPath] = window.location.pathname.split('/user/');
    this.activeMenu = SIDEBAR_ITEMS.find((item) => item.path === urlPath);
    this.activeSubMenu = {};

    if (['internal.php', 'semester.php'].includes(urlPath)) {
      this.activeMenu = SIDEBAR_ITEMS.find((item) => item.name === 'exams');
      this.activeSubMenu = this.activeMenu.submenuItems.find((item) => item.path === urlPath);
    } else if (['cultural.php', 'techfest.php'].includes(urlPath)) {
      this.activeMenu = SIDEBAR_ITEMS.find((item) => item.name === 'gallery');
      this.activeSubMenu = this.activeMenu.submenuItems.find((item) => item.path === urlPath);
    } else if (!urlPath) {
      urlPath = 'index.php';
    }
  }

  render() {
    return (
      <div id="sidebar">
        {/* eslint-disable-next-line jsx-a11y/anchor-is-valid */}
        <a href="#" className="visible-phone">
          <i className="icon icon-home" />
          Dashboard
        </a>
        <ul>
          {SIDEBAR_ITEMS.map(
            (item) => {
              const {
                name, icon, path, submenuItems, openInNewTab,
              } = item;
              const hasSubmenu = isPresent(submenuItems);
              const itemCx = classNames(`${name}${hasSubmenu ? '-menu' : ''}`, {
                submenu: hasSubmenu,
                active: this.activeMenu.name === name,
                open: isPresent(this.activeMenu.submenuItems) && this.activeMenu.name === name,
              });
              const iconCx = classNames('icon', icon);

              return (
                <li key={name} className={itemCx}>
                  <a href={path}>
                    <i className={iconCx} />
                    <span>{capitalizeAll(name)}</span>
                  </a>

                  {hasSubmenu && (
                    <ul>
                      {submenuItems.map((sItem) => {
                        const sItemCx = classNames(sItem.name, {
                          active: this.activeSubMenu?.name === sItem.name,
                        });
                        const sIconCx = classNames('icon', sItem.icon);

                        return (
                          <li key={sItem.name} className={sItemCx}>
                            {/* eslint-disable-next-line react/jsx-props-no-spreading */}
                            <a href={sItem.path} {...openInNewTab ? { target: '_blank' } : {}}>
                              <i className={sIconCx} />
                              &nbsp;&nbsp;
                              <span>{capitalizeAll(sItem.name)}</span>
                            </a>
                          </li>
                        );
                      })}
                    </ul>
                  )}
                </li>
              );
            },
          )}
        </ul>
      </div>
    );
  }
}

ReactDOM.render(
  <React.StrictMode>
    <Sidebar />
  </React.StrictMode>,
  document.getElementById('sidebar'),
);
