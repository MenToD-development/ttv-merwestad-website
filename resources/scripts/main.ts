import {App, createApp} from "vue";

import {
    Popover,
    PopoverButton,
    PopoverGroup,
    PopoverPanel,
    Menu,
    MenuItems,
    MenuItem,
    MenuButton,
} from '@headlessui/vue';
import {
    MenuIcon,
    XIcon,
    ChevronDownIcon
} from '@heroicons/vue/solid'

const app: App = createApp({
    data: () => ({

    }),
});

app.component('popover', Popover);
app.component('popover-group', PopoverGroup)
app.component('popover-panel', PopoverPanel);
app.component('popover-button', PopoverButton);
app.component('tailwind-menu', Menu);
app.component('menu-items', MenuItems);
app.component('menu-item', MenuItem);
app.component('menu-button', MenuButton);

app.component('menu-icon', MenuIcon);
app.component('xicon', XIcon);
app.component('chevron-down-icon', ChevronDownIcon);

app.mount('#app');
