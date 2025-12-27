<template>

    <div class="w-[200px]  transition-all bg-indigo-700 text-white py-4 px-2">
        <RouterLink :to="{ name: 'app.bookings' }" class="sidebar_router">
            <span class="mr-2 text-gray-300">
                <ListBulletIcon class="w-5"></ListBulletIcon>
            </span>
            <span class="text-xs font-medium">
                Bookings
            </span>
        </RouterLink>

        <RouterLink :to="{ name: 'app.products' }" class="sidebar_router">
            <span class="mr-2 text-gray-300">
                <ListBulletIcon class="w-5"></ListBulletIcon>
            </span>
            <span class="text-xs font-medium">
                Tours
            </span>
        </RouterLink>
        <RouterLink :to="{ name: 'app.reviews' }" class="sidebar_router">
            <span class="mr-2 text-gray-300">
                <ListBulletIcon class="w-5"></ListBulletIcon>
            </span>
            <span class="text-xs font-medium">
                Reviews
            </span>
        </RouterLink>
        <RouterLink :to="{ name: 'app.faqs' }" class="sidebar_router">
            <span class="mr-2 text-gray-300">
                <ListBulletIcon class="w-5"></ListBulletIcon>
            </span>
            <span class="text-xs font-medium">
                Faqs
            </span>
        </RouterLink>
        <RouterLink :to="{ name: 'app.blogs' }" class="sidebar_router">
            <span class="mr-2 text-gray-300">
                <ListBulletIcon class="w-5"></ListBulletIcon>
            </span>
            <span class="text-xs font-medium">
                Blogs
            </span>
        </RouterLink>
        <RouterLink :to="{ name: 'app.galleries' }" class="sidebar_router">
            <span class="mr-2 text-gray-300">
                <ListBulletIcon class="w-5"></ListBulletIcon>
            </span>
            <span class="text-xs font-medium">
                Galleries
            </span>
        </RouterLink>
        <div class="sidebar_router">
            <Tree :value="nodes" selectionMode="single" @node-select="onNodeSelect"
                class="!bg-transparent !p-0 !text-white w-full"></Tree>
        </div>
    </div>
</template>

<script setup>
import {
    ListBulletIcon,
} from '@heroicons/vue/24/outline'
import { RouterLink, useRouter } from 'vue-router';
import Tree from 'primevue/tree';
import { ref } from 'vue';
const router = useRouter()
const nodes = ref([
    {
        key: '0',
        label: 'Setting',
        data: 'Documents Folder',
        icon: 'pi pi-fw pi-cog',
        children: [
            {
                key: '0-0',
                label: 'Categories',
                data: 'Work Folder',
                to: { name: 'app.categories' },
                icon: 'pi pi-fw pi-list',
            }
            ,
            {
                key: '0-1',
                label: 'Inclusion',
                data: 'Work Folder',
                to: { name: 'app.inclusions' },
                icon: 'pi pi-fw pi-list',
            },
            {
                key: '0-2',
                label: 'Exclusion',
                data: 'Home Folder',
                to: { name: 'app.exclusions' },
                icon: 'pi pi-fw pi-list',
            },
            {
                key: '0-3',
                label: 'Locations',
                data: 'Home Folder',
                to: { name: 'app.locations' },
                icon: 'pi pi-fw pi-list',
            },
            {
                key: '0-4',
                label: 'App Keys',
                data: 'Home Folder',
                to: { name: 'app.settings' },
                icon: 'pi pi-fw pi-list',
            }
        ]
    },
])

const onNodeSelect = (node) => {
    if (node.to) {
        router.push(node.to);
    }
};
</script>


<style scoped>
:deep(.p-tree-node-content) {
    color: white !important;
    padding: 0 !important;
    font-size: 12px !important;
    font-weight: 500 !important;

    &:hover {
        background-color: rgba(255, 255, 255, 0.1) !important;
    }
}

:deep(.p-tree-node-toggle-button) {
    background-color: transparent !important;
    color: white !important;
}

:deep(.p-tree-node-icon) {
    color: white !important;
}
</style>
