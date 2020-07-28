// require('./bootstrap');


var vm = new Vue ({
    el: '#app',
    data: {
        projects: [],
    },
    computed: {

        }
    ,
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
            //console.log(currentUser);

            var apiURL = 'http://127.0.0.1:8000/api/project/' + id + '/currentUser/' + currentUser;
            axios.post(apiURL)
                .then(function(response) {

                });

            showPassword = document.getElementById('password-' + id);
            console.log(showPassword);

            showPassword.innerHTML = password;

        }
    }
});

