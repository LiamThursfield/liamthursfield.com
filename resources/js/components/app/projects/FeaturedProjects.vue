<template>
    <section class="flex flex-row flex-wrap -mb-4 mt-4 -mx-4 ">
        <div
            v-for="project in featured_projects"
            :key="`${project.name}-featured-card`"
            class="
                px-4 py-4 w-full
                lg:w-1/3
            "
        >
            <project-card
                :project="project"
            />
        </div>
    </section>
</template>

<script>
    import ProjectCard from "./ProjectCard";

    export default {
        name: "FeaturedProjects",
        components: {
            'project-card': ProjectCard
        },
        data() {
            return {
                featured_projects: [
                    {
                        name: 'd-script',
                        description: 'Generates scripts for zero-downtime deployments.',
                        event: 'button_click_home_d_script',
                        image: '/images/projects/d-script/d-script-preview.png',
                        intro: 'WEB APP, DEVELOPER TOOL',
                        url: 'https://d-script.liamthursfield.com?utm_source=liamthursfield.com',
                    },
                    {
                        name: 'Fortnite Tracker',
                        description: 'Uses the Fortnite API to keep track of in-game stats.',
                        event: 'button_click_home_fortnite_tracker',
                        image: '/images/projects/fortnite-tracker/fortnite-tracker-preview.jpg',
                        intro: 'WEB APP, API WRAPPER',
                        url: 'https://fortnite-tracker.liamthursfield.com?utm_source=liamthursfield.com',
                    },
                    {
                        name: 'Youtube Playlist Details',
                        description: 'A website to view details about Youtube playlists.',
                        event: 'button_click_home_ytpd',
                        image: '/images/projects/youtube-playlist-details/youtube-playlist-details-preview.png',
                        intro: 'WEBSITE, API WRAPPER',
                        url: 'https://youtube-playlist-details.liamthursfield.com?utm_source=liamthursfield.com',
                    }



                ]
            }
        }
    }
</script>