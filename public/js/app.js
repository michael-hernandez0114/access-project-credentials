/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

// require('./bootstrap');
// register
Vue.component('project-credentials', {
  props: ['projects'],
  methods: {
    displayPasswordAsterisk: function displayPasswordAsterisk(password) {
      var passwordLength = password.length;
      var asteriskString = '';

      for (var index = 0; index < passwordLength; index++) {
        asteriskString += '*';
      }

      ; //console.log(asteriskString);

      return asteriskString;
    },
    postPasswordRetrieval: function postPasswordRetrieval(id, password) {
      pageTable = document.getElementsByTagName('table');
      currentUser = pageTable[0].getAttribute('currentUser');
      console.log(currentUser);
      var apiURL = 'http://127.0.0.1:8000/api/project/' + id + '/currentUser/' + currentUser;
      axios.post(apiURL).then(function (response) {});
      showPassword = document.getElementById('password-' + id); //console.log(showPassword);

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
  created: function created() {
    this.getProjects();
  },
  methods: {
    getProjects: function getProjects() {
      var apiURL = 'http://127.0.0.1:8000/api/projects';
      axios.get(apiURL).then(function (response) {
        //console.log(response);
        newComponent.projects = response.data;
        console.log(newComponent.projects);
      });
    }
  }
});

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /Applications/MAMP/htdocs/Laravel/access-project-credentials/resources/js/app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! /Applications/MAMP/htdocs/Laravel/access-project-credentials/resources/sass/app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });