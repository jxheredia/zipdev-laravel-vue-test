import { createApp } from 'vue/dist/vue.esm-bundler';

import TableComponent from './components/TableComponent.vue';

import Toaster from '@meforma/vue-toaster';

import axios from 'axios';

axios.defaults.baseURL = import.meta.env.VITE_LOCALHOST_URL + 'api/';

let myApp = createApp({
    components : { TableComponent },
    data() {
        return {
            tableHeaders : [],
            studentsList : [],
            courseData : {},
        }
    },
    
    methods: {
        retrieveStudentsData(){

            let self = this;

            axios.get( 'students/' + import.meta.env.VITE_DEFAULT_COURSE )
            .then( function ( response ) {
                self.studentsList = ( response.data.success ) ? response.data.studentsData : [];
                self.courseData = ( response.data.success ) ? response.data.courseData : {};
                self.$toast.success('Request Successful.', {
                    position: 'top-right',
                    duration : 500,
                });
            })
            .catch( function ( error ) {
                self.$toast.error('Request Error.', {
                    position: 'top-right',
                    duration : 500,
                });
            });

        },
    },

    mounted(){

        this.tableHeaders = [
            "Student ID",
            "First Name",
            "Last Name",
            "Email",
            "Actions"
        ];

        this.retrieveStudentsData();

    },
}).use(Toaster).mount('#app');