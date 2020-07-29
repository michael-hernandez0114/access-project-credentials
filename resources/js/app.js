require('./bootstrap');

  // register
  Vue.component('project-credentials', {
    props: ['projects'],
    methods: {
        
        displayPasswordAsterisk: function(password) {

            var passwordLength = password.length;

            var asteriskString = '';

            for (let index = 0; index < passwordLength; index++) {
                asteriskString += '*';
                
            };

            //console.log(asteriskString);

            return asteriskString;

        },
        postPasswordRetrieval: function(id, password) {
            pageTable = document.getElementsByTagName('table');
            currentUser = pageTable[0].getAttribute('data-custom');
            console.log(currentUser);

            var apiURL = 'http://127.0.0.1:8000/api/project/' + id + '/currentUser/' + currentUser;
            axios.post(apiURL)
                .then(function(response) {

                });

            showPassword = document.getElementById('password-' + id);
            //console.log(showPassword);

            showPassword.innerHTML = password;

        }
    },
    template: '<table class="table">\
                    <thead>\
                        <th>Project</th>\
                        <th>Service</th>\
                        <th>Username</th>\
                        <th>Password</th>\
                        <th>Show Password</th>\
                    </thead>\
                    <tbody>\
                        <tr v-for="project in projects" :key="project.id">\
                            <td>{{project.project}}</td>\
                            <td>{{project.service}}</td>\
                            <td>{{project.username}}</td>\
                            <td :id="\'password-\'+project.id">{{displayPasswordAsterisk(project.password)}}</td>\
                            <td>\
                                <button @click="postPasswordRetrieval(project.id,project.password)" class="btn btn-primary">Show Password</button>\
                            </td>\
                        </tr>\
                    </tbody>\
                </table>'
  });


var newComponent = new Vue({
    el: '#app',
    data: {
        projects: []
    },            
    created: function() {
        this.getProjects();
    },
    methods: {
        getProjects: function() {

            var apiURL = 'http://127.0.0.1:8000/api/projects';
            axios.get(apiURL)
                .then(function(response) {
                    //console.log(response);
                    newComponent.projects = response.data
                    //console.log(newComponent.projects);
                });
        }
    }
});   
$.noConflict();
$(document).ready( function() { 
    var allProjects = [];

    var apiURL = 'http://127.0.0.1:8000/api/projects';
            axios.get(apiURL)
                .then(function(response) {
                    //console.log(response);
                    var projectsObj = response.data

                    for (const key in projectsObj) {
                        allProjects.push(projectsObj[key].project);
                       // console.log(projectsObj[key].project);
                    }
                    //console.log(allProjects);
                });

    $( "#create-project" ).autocomplete({ 
      source: allProjects 
  
    }); 
}); 

