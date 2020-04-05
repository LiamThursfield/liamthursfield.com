<template>
    <transition name="slide-left">
        <nav
            v-show="is_visible"
            class="
                absolute bg-lilac-900 inset-0 mt-12 z-30 w-full
                md:hidden
            "
        >
            <div class="flex flex-col h-full overflow-auto">

                <!-- Navigation Links -->
                <ul class="flex-1">
                    <li
                        v-for="(navigation_link, key) in navigation_links"
                        v-if="showLink(navigation_link)"
                        :key="'header-link-mobile-' + key"
                        @click="linkSelected"
                    >
                        <a
                            class="
                                block p-4 text-l text-center
                                hover:text-yellow-600
                            "
                            :href="navigation_link.url"
                        >
                            {{ navigation_link.label }}
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </transition>
</template>

<script>
    export default {
        name: "HeaderNavigationMobile",
        props: {
            is_visible: {
                required: true,
                type: Boolean
            },
            navigation_links: {
                required: true,
                type: Object
            },
        },
        methods: {
            linkSelected() {
                this.$emit('link-selected', true);
            },
            showLink(navigation_link) {
                if (!navigation_link.url) {
                    return false;
                }

                if (!navigation_link.require_auth) {
                    return true;
                }

                // Only show the link if the user is authenticated
                return user.isAuthenticated();
            }
        }
    }
</script>