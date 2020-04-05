<template>
    <nav class="
            hidden w-full
            md:flex
        "
    >
        <!-- Navigation Links -->
        <ul
            class="
                flex flex-1 flex-row items-center justify-end
                md:-mx-3
            "
        >
            <li
                v-for="(navigation_link, key) in navigation_links"
                v-if="showLink(navigation_link)"
                :key="'header-link-desktop-' + key"
                class="
                    mx-3 opacity-25
                    hover:opacity-100 hover:text-yellow-600
                "
            >
                <a :href="navigation_link.url">
                    {{ navigation_link.label }}
                </a>
            </li>
        </ul>
    </nav>
</template>

<script>
    export default {
        name: "HeaderNavigationDesktop",
        props: {
            navigation_links: {
                required: true,
                type: Object
            },

        },
        methods: {
            isLastLink(index) {
                let length = Object.keys(this.navigation_links).length;
                return index === length - 1;
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
