<template>
    <header>
        <div class="bg-gray-900 flex items-center h-12 relative w-full z-10">
            <div class="
                    container flex flex-row items-center justify-center mx-auto relative px-4
                    md:items-baseline md:justify-between
                "
            >
                <!-- Desktop Navigation -->
                <nav
                    class="
                        absolute flex flex-1 flex-col right-0 mr-6
                        md:flex-row md:mr-0 md:relative
                    "
                >

                    <hamburger-button
                        class="md:hidden"
                        :show_close_icon="is_mobile_nav_visible"
                        @button-toggled="setMobileNavVisible"
                    />

                    <header-navigation-desktop
                        :navigation_links="navigation_links"
                    />

                </nav>

            </div>
        </div>

        <!-- Mobile Navigation -->
        <header-navigation-mobile
            :is_visible="is_mobile_nav_visible"
            :navigation_links="navigation_links"
            @link-selected="setMobileNavVisible(false)"
        />
    </header>
</template>


<script>
    import _ from 'lodash';

    import HeaderNavigationDesktop from './HeaderNavigationDesktop';
    import HeaderNavigationMobile from './HeaderNavigationMobile';

    export default {
        name: "HeaderMain",
        components: {
            HeaderNavigationDesktop,
            HeaderNavigationMobile
        },
        props: {
            menu: {
                required: true,
                type: Object
            }
        },
        data() {
            return {
                is_mobile_nav_visible: false,
                mobile_nav_scroll_class: 'mobile-nav-scroll-lock',
                navigation_links: {}
            }
        },
        created() {
            this.buildNavigation();
        },
        methods: {
            buildNavigation() {
                this.navigation_links = {};

                try {
                    _.forEach(this.menu.menu_items, menuItem => {
                        this.navigation_links[menuItem.label] = {
                            label: menuItem.label,
                            url: menuItem.href,
                            require_auth: false,
                        }
                    })
                } catch (e) {
                    return this.navigation_links;
                }
            },
            setMobileNavVisible(is_visible) {
                this.is_mobile_nav_visible = is_visible;

                if (is_visible) {
                    document.body.classList.add(this.mobile_nav_scroll_class);
                } else {
                    document.body.classList.remove(this.mobile_nav_scroll_class);
                }
            },
        }
    }
</script>