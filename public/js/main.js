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
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/main.js":
/*!******************************!*\
  !*** ./resources/js/main.js ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("var button = document.querySelector(\".menu\");\nvar navList = document.querySelector(\".nav-list\");\nvar dropdownRecipes = document.querySelector(\".dropdown-recipes\");\nvar dropdownContent = document.querySelector(\".dropdown-content\");\nvar dropdownUser = document.querySelector(\".dropdown-user\");\nvar userLinks = document.querySelector(\".user-links\");\nbutton.addEventListener(\"click\", function () {\n  navList.classList.toggle(\"open\");\n});\ndropdownRecipes.addEventListener(\"click\", function () {\n  dropdownContent.classList.toggle(\"show\");\n});\ndropdownUser.addEventListener(\"click\", function () {\n  userLinks.classList.toggle(\"show\");\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvbWFpbi5qcz9mMzJhIl0sIm5hbWVzIjpbImJ1dHRvbiIsImRvY3VtZW50IiwicXVlcnlTZWxlY3RvciIsIm5hdkxpc3QiLCJkcm9wZG93blJlY2lwZXMiLCJkcm9wZG93bkNvbnRlbnQiLCJkcm9wZG93blVzZXIiLCJ1c2VyTGlua3MiLCJhZGRFdmVudExpc3RlbmVyIiwiY2xhc3NMaXN0IiwidG9nZ2xlIl0sIm1hcHBpbmdzIjoiQUFBQSxJQUFJQSxNQUFNLEdBQUdDLFFBQVEsQ0FBQ0MsYUFBVCxDQUF1QixPQUF2QixDQUFiO0FBQ0EsSUFBSUMsT0FBTyxHQUFHRixRQUFRLENBQUNDLGFBQVQsQ0FBdUIsV0FBdkIsQ0FBZDtBQUNBLElBQUlFLGVBQWUsR0FBR0gsUUFBUSxDQUFDQyxhQUFULENBQXVCLG1CQUF2QixDQUF0QjtBQUNBLElBQUlHLGVBQWUsR0FBR0osUUFBUSxDQUFDQyxhQUFULENBQXVCLG1CQUF2QixDQUF0QjtBQUNBLElBQUlJLFlBQVksR0FBR0wsUUFBUSxDQUFDQyxhQUFULENBQXVCLGdCQUF2QixDQUFuQjtBQUNBLElBQUlLLFNBQVMsR0FBR04sUUFBUSxDQUFDQyxhQUFULENBQXVCLGFBQXZCLENBQWhCO0FBQ0FGLE1BQU0sQ0FBQ1EsZ0JBQVAsQ0FBd0IsT0FBeEIsRUFBaUMsWUFBWTtBQUMzQ0wsU0FBTyxDQUFDTSxTQUFSLENBQWtCQyxNQUFsQixDQUF5QixNQUF6QjtBQUNELENBRkQ7QUFHQU4sZUFBZSxDQUFDSSxnQkFBaEIsQ0FBaUMsT0FBakMsRUFBMEMsWUFBWTtBQUNwREgsaUJBQWUsQ0FBQ0ksU0FBaEIsQ0FBMEJDLE1BQTFCLENBQWlDLE1BQWpDO0FBQ0QsQ0FGRDtBQUdBSixZQUFZLENBQUNFLGdCQUFiLENBQThCLE9BQTlCLEVBQXVDLFlBQVk7QUFDakRELFdBQVMsQ0FBQ0UsU0FBVixDQUFvQkMsTUFBcEIsQ0FBMkIsTUFBM0I7QUFDRCxDQUZEIiwiZmlsZSI6Ii4vcmVzb3VyY2VzL2pzL21haW4uanMuanMiLCJzb3VyY2VzQ29udGVudCI6WyJ2YXIgYnV0dG9uID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIi5tZW51XCIpO1xyXG52YXIgbmF2TGlzdCA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIubmF2LWxpc3RcIik7XHJcbnZhciBkcm9wZG93blJlY2lwZXMgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiLmRyb3Bkb3duLXJlY2lwZXNcIik7XHJcbnZhciBkcm9wZG93bkNvbnRlbnQgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiLmRyb3Bkb3duLWNvbnRlbnRcIik7XHJcbnZhciBkcm9wZG93blVzZXIgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiLmRyb3Bkb3duLXVzZXJcIik7XHJcbnZhciB1c2VyTGlua3MgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiLnVzZXItbGlua3NcIik7XHJcbmJ1dHRvbi5hZGRFdmVudExpc3RlbmVyKFwiY2xpY2tcIiwgZnVuY3Rpb24gKCkge1xyXG4gIG5hdkxpc3QuY2xhc3NMaXN0LnRvZ2dsZShcIm9wZW5cIik7XHJcbn0pO1xyXG5kcm9wZG93blJlY2lwZXMuYWRkRXZlbnRMaXN0ZW5lcihcImNsaWNrXCIsIGZ1bmN0aW9uICgpIHtcclxuICBkcm9wZG93bkNvbnRlbnQuY2xhc3NMaXN0LnRvZ2dsZShcInNob3dcIik7XHJcbn0pO1xyXG5kcm9wZG93blVzZXIuYWRkRXZlbnRMaXN0ZW5lcihcImNsaWNrXCIsIGZ1bmN0aW9uICgpIHtcclxuICB1c2VyTGlua3MuY2xhc3NMaXN0LnRvZ2dsZShcInNob3dcIik7XHJcbn0pOyJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/main.js\n");

/***/ }),

/***/ 2:
/*!************************************!*\
  !*** multi ./resources/js/main.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! F:\final-project\resources\js\main.js */"./resources/js/main.js");


/***/ })

/******/ });