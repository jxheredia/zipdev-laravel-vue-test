<template>
    
    <h2 class="courseTitle">
        Course: <strong><em>{{ courseData.name }}</em></strong>
    </h2>

    <table id="tableComponent" class="table table-bordered table-striped table-responsive border-info">
    
        <thead class="table-info">
            
            <tr>
            
                <!-- loop through each value of the fields to get the table header -->
                <th scope="col" v-for="header in headers" :key='header'>
                    {{ header }}
                </th>
            
            </tr>

        </thead>

        <tbody>
        
            <!-- Loop through the list get the each student data -->
            <tr v-for="item in studentData" :key='item'>

                <td>{{ item.student.id }}</td>
                <td>{{ item.student.first_name }}</td>
                <td>{{ item.student.last_name }}</td>
                <td>{{ item.student.email }}</td>
                <td align="center">
                    <button :class="item.is_present == 1 ? 'btn btn-outline-success btn-sm' : 'btn btn-outline-danger btn-sm'" @click="updateStudentCondition(item)">
                        {{ item.is_present == 1 ? 'Present' : 'Absent' }}
                    </button>
                </td>

            </tr>

        </tbody>

    </table> 

</template>

<script>

import axios from 'axios';

import Toaster from '@meforma/vue-toaster';

axios.defaults.baseURL = import.meta.env.VITE_LOCALHOST_URL + 'api/';

export default {
    
    name: 'TableComponent',
    
    props:{
        headers: Array,
        studentData: Array,
        courseData: Object,
    },

    methods : {

        updateStudentCondition( element ){

            let self = this;

            axios.post( 'students/' + element.student.id + '/update', {course_id : element.course_id})
            .then( function ( response ) {
                element.is_present = !element.is_present;
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

}

</script>

<style scoped>

    table thead th:last-child{
        text-align: center;
    }

    table tbody tr:hover{
        background-color: #cff4fc !important;
    }

    .courseTitle{
        margin-top: 50px;
        margin-bottom: 50px;
    }

    table{
        margin-bottom: 50px;
    }

</style>