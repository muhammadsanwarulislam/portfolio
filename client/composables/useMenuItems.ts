export interface MenuItem {
    label: string;
    component: string;
    icon: string;
    roles: string[];
}

export function useMenuItems() {
    const { t } = useI18n();
    const { user } = useAuth();

    const allMenuItems = [
        { label: t('overview'), component: 'Overview', icon: 'material-symbols-light:overview-key-outline', roles: ['Admin'] },
        { label: t('user'), component: 'UserCreation', icon: 'raphael:users', roles: ['Admin'] },
        { label: t('role'), component: 'RoleCreation', icon: 'carbon:user-role', roles: ['Admin'] },
        { label: t('permission'), component: 'PermissionCreation', icon: 'icon-park-twotone:permissions', roles: ['Admin'] },
        { label: t('website'), component: 'WebsiteCreation', icon: 'fluent-mdl2:website', roles: ['Admin'] },
        { label: t('website'), component: 'DemoCreation', icon: 'fluent-mdl2:website', roles: ['Admin'] },
    ];

    // Type guard function to check if user.value is defined
    function isUserDefined(user: any): user is { data: { user: { role: { name: string } } } } {
        return user !== null && typeof user === 'object' && 'data' in user && 'user' in user.data && 'role' in user.data.user && 'name' in user.data.user.role;
    }

    const role = computed<string>(() => {
        if (user.value && isUserDefined(user.value)) {
            return user.value.data.user.role.name;
        } else {
            return '';
        }
    });

    const menuItems = computed<MenuItem[]>(() => {
        return allMenuItems.filter(item => item.roles.includes(role.value));
    });

    return {
        menuItems,
        role,
    };
}
