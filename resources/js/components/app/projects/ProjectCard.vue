<template>
    <article
        class="
            bg-lilac-800 border-r-4 border-yellow-600 flex flex-row rounded-l-lg
            lg:border-r-0 lg:border-b-4 lg:flex-col lg:h-full lg:rounded-l-none lg:rounded-t-lg
        "
    >
        <div
            class="
                relative shadow w-64
                md:w-1/2
                lg:w-full
            "
        >
            <a
                class="block"
                :href="project.url"
                target="_blank"
                title="View Project"
                @click="dataLayerEvent(project['event-name'])"
                @click.middle="dataLayerEvent(project['event-name'])"
                @click.right="dataLayerEvent(project['event-name'])"
            >
                <img
                    class="overflow-hidden rounded-lg w-full"
                    :src="project.image"
                    :alt="`${project.name} preview`"
                >
            </a>

            <a
                class="
                    absolute bg-yellow-600 block bottom-0 left-0 py-4 text-center text-sm right-0 rounded-b-lg
                    hover:bg-yellow-500
                    md:hidden
                "
                :href="project.url"
                target="_blank"
                @click="dataLayerEvent(project['event-name'])"
                @click.middle="dataLayerEvent(project['event-name'])"
                @click.right="dataLayerEvent(project['event-name'])"
            >
                View Project
            </a>
        </div>

        <div
            class="
                flex flex-col px-6 py-4 w-full
                md:w-1/2
                lg:h-full lg:pb-12 lg:pt-6 lg:px-6 lg:w-auto
            "
        >
            <p
                class="
                    font-bold opacity-55 text-yellow-600 text-xs tracking-wider
                "
            >
                {{ project.tags }}
            </p>

            <div class="lg:flex-1">
                <h3 class="font-bold font-serif mt-4 text-2xl">
                    <a
                        :href="project.url"
                        target="_blank"
                        @click="dataLayerEvent(project['event-name'])"
                        @click.middle="dataLayerEvent(project['event-name'])"
                        @click.right="dataLayerEvent(project['event-name'])"
                    >
                        {{ project.name }}
                    </a>
                </h3>

                <p
                    class="
                        mt-4 text-lilac-100 opacity-75 text-sm
                        lg:text-base
                    "
                >
                    {{ project.description }}
                </p>
            </div>

            <a
                class="
                    btn btn-yellow btn-outline hidden mr-auto text-sm mt-auto
                    md:inline-block
                    lg:mt-10 lg:text-base
                "
                :href="project.url"
                target="_blank"
                @click="dataLayerEvent(project['event-name'])"
                @click.middle="dataLayerEvent(project['event-name'])"
                @click.right="dataLayerEvent(project['event-name'])"
            >
                View Project
            </a>
        </div>
    </article>
</template>

<script>
    export default {
        name: "ProjectCard",
        props: {
            project: {
                required: true,
                type: Object
            }
        },
        methods: {
            dataLayerEvent(event_name) {
                if (window.dataLayer) {
                    window.dataLayer.push({'event': event_name});
                }
            }
        }
    }
</script>
