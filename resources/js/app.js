require('./bootstrap');
require('argon-design-system-free/assets/js/argon');
require('argon-design-system-free/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker');
// require('./components/jquery-sortable-min')
// require('./components/jquery-sortable')
import Sortable, { MultiDrag, Swap } from 'sortablejs';

window.sortable = Sortable;
require('./my')

window.notify = (text, type, timeout, layout = 'topCenter', theme = 'sunset') => {
    new Noty({
                 text: `<center><b>${text}</b></center>`,
                 type: type,
                 timeout: timeout,
                 layout: layout,
                 theme: theme,
                 progressBar: true
             }).show();
};
