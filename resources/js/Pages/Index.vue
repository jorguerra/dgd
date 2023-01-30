<script>
import _ from 'lodash';
export default {}
</script>
<template>
    <div class="w-90 ml-6 mr-6 text-black p-8 bg-white mt-12 rounded-3xl">
        <table class="min-w-full">
            <thead class="border-b bg-gray-300">
                <tr>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Nombre de fantasía</th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Dirección</th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Comuna</th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Código de línea</th>
                </tr>
            </thead>
            <tbody class="border border-collapse border-b-gray-500">
                <tr v-for="metro, key in metros.data" :key="metro.id" class="odd:bg-gray-100 even:bg-white-100 border-b">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ metro.nombre }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ metro.direccion }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ metro.comuna.nombre }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ metro.codigo }}</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4" class="text-center">
                        <Link v-for="page in _.range(1,metros.last_page + 1)" :key="page" :href=linkPage(page) class="p-2 font-semibold hover:text-blue-300 hover:font-bold">{{ page }}</Link>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>

</template>

<script setup>
defineProps({metros: Object});
const linkPage = (x) => `/?page=${x}`

</script>
