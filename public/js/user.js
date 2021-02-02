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
/******/ 	return __webpack_require__(__webpack_require__.s = 3);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/user.js":
/*!******************************!*\
  !*** ./resources/js/user.js ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("var toggle = document.querySelector('.menu');\nvar dropdown = document.querySelector('.dropdown-menu');\nvar main = document.querySelector('.profile');\ntoggle.addEventListener(\"click\", function () {\n  dropdown.classList.toggle(\"open\");\n  main.classList.toggle(\"down\");\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvdXNlci5qcz84MDkxIl0sIm5hbWVzIjpbInRvZ2dsZSIsImRvY3VtZW50IiwicXVlcnlTZWxlY3RvciIsImRyb3Bkb3duIiwibWFpbiIsImFkZEV2ZW50TGlzdGVuZXIiLCJjbGFzc0xpc3QiXSwibWFwcGluZ3MiOiJBQUFBLElBQUlBLE1BQU0sR0FBR0MsUUFBUSxDQUFDQyxhQUFULENBQXVCLE9BQXZCLENBQWI7QUFDQSxJQUFJQyxRQUFRLEdBQUdGLFFBQVEsQ0FBQ0MsYUFBVCxDQUF1QixnQkFBdkIsQ0FBZjtBQUNBLElBQUlFLElBQUksR0FBR0gsUUFBUSxDQUFDQyxhQUFULENBQXVCLFVBQXZCLENBQVg7QUFFQUYsTUFBTSxDQUFDSyxnQkFBUCxDQUF3QixPQUF4QixFQUFpQyxZQUFLO0FBQ3RDRixVQUFRLENBQUNHLFNBQVQsQ0FBbUJOLE1BQW5CLENBQTBCLE1BQTFCO0FBQ0FJLE1BQUksQ0FBQ0UsU0FBTCxDQUFlTixNQUFmLENBQXNCLE1BQXRCO0FBQ0MsQ0FIRCIsImZpbGUiOiIuL3Jlc291cmNlcy9qcy91c2VyLmpzLmpzIiwic291cmNlc0NvbnRlbnQiOlsibGV0IHRvZ2dsZSA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJy5tZW51Jyk7XHJcbmxldCBkcm9wZG93biA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJy5kcm9wZG93bi1tZW51Jyk7XHJcbmxldCBtYWluID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignLnByb2ZpbGUnKTtcclxuXHJcbnRvZ2dsZS5hZGRFdmVudExpc3RlbmVyKFwiY2xpY2tcIiwgKCkgPT57XHJcbmRyb3Bkb3duLmNsYXNzTGlzdC50b2dnbGUoXCJvcGVuXCIpO1xyXG5tYWluLmNsYXNzTGlzdC50b2dnbGUoXCJkb3duXCIpOyBcclxufSk7Il0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/user.js\n");

/***/ }),

/***/ 3:
/*!************************************!*\
  !*** multi ./resources/js/user.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! F:\final-project\resources\js\user.js */"./resources/js/user.js");


/***/ })

/******/ });