/* partials/quick_action_items.jsx - Quick action items component. */

/*
modification history
--------------------
01a,2-sep21,rks  created.
*/

import React from 'react';
import ReactDOM from 'react-dom';

import '../../css/erp.scss';

const QUICK_ACTION_ITEMS = [
  {
    name: 'My Dashboard', link: '#', className: 'bg_lb', icon: 'icon-dashboard',
  },
  {
    name: 'Exams', link: 'internal.php', className: 'bg_lg', icon: 'icon-file',
  },
  { name: 'Library', className: 'bg_ly', icon: 'icon-book' },
  { name: 'Attendance', className: 'bg_ls', icon: 'icon-signal' },
  { name: 'Timetable', className: 'bg_lo', icon: 'icon-table' },
  { name: 'Calendar', className: 'bg_lv', icon: 'icon-table' },
  {
    name: 'Lecture Notes', link: 'lecture.php', className: 'bg_lv', icon: 'icon-copy',
  },
  {
    name: 'Cultural Events', link: 'cultural.php', className: 'bg_lo', icon: 'icon-camera-retro',
  },
  { name: 'Techfest', className: 'bg_ls', icon: 'icon-film' },
  { name: 'Transport', className: 'bg_ly', icon: 'icon-truck' },
  { name: 'Discipline', className: 'bg_lg', icon: 'icon-bullhorn' },
  { name: 'Feedback', className: 'bg_lb', icon: 'icon-comment' },
];

function QuickActionItems() {
  return (
    <div className="quick-action-container">
      <ul className="quick-actions">
        {QUICK_ACTION_ITEMS.map((item) => (
          <li key={item.name.toLowerCase()} className={item.className}>
            <a href={item.link || `${item.name.toLowerCase()}.php`}>
              <i className={item.icon} />
              {item.name}
            </a>
          </li>
        ))}
      </ul>
    </div>
  );
}

ReactDOM.render(
  <React.StrictMode>
    <QuickActionItems />
  </React.StrictMode>,
  document.getElementById('quick-actions-homepage'),
);
