// require('./bootstrap');


var vm = new Vue ({
    el: '#app',
    data: {
        projects: [],
    },
    computed: {
        numAsteroids: function() {
            return this.asteroids.length;
        }
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
                    vm.projects = response.data
                    //console.log(vm.projects);
                });
        },
        postPasswordRetrieval: function(id) {
            var apiURL = 'http://127.0.0.1:8000/api/logging';
            axios.post(apiURL)
                .then(function(response) {
                    console.log(response);
                    //vm.projects = response.data
                    //console.log(vm.projects);
                });
        }
    }
});

console.log(vm.projects);
