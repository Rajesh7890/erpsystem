/* lib/is_present.js - is_present library. */

/*
modification history
--------------------
01a,15dec21,rks  created.
*/

import isEmpty from './is_empty';

export default (val) => !isEmpty(val);
