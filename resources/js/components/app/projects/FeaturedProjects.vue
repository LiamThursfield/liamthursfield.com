<template>
    <section class="flex flex-row flex-wrap -mb-4 mt-4 -mx-4 ">
        <div
            v-for="project in formattedProjects"
            :key="`${project.name}-featured-card`"
            class="
                flex flex-col px-4 py-4 w-full
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
    import _ from 'lodash';
    import ProjectCard from "./ProjectCard";

    export default {
        name: "FeaturedProjects",
        components: {
            'project-card': ProjectCard
        },
        props: {
            projects: {
                required: true,
                type: Array| Object,
            }
        },
        data() {
            return {
                formattedProjects: [],
            }
        },
        created() {
            this.formatProjects();
        },
        methods: {
            formatProjects() {
                this.formattedProjects = []
                _.forEach(this.projects, project => {
                    let formatted = {};
                    _.forEach(project, projectField => {
                        formatted[projectField.template_field_slug] = projectField.data;
                    });

                    this.formattedProjects.push(formatted);
                });
            }
        }
    }
</script>
